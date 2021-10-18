$(document).ready(function () {
    
    $.ajaxSetup({
        headers: {
            'X-CSRF': $('meta[name="csrf-token"]').attr('content')
        }
    });
    fetchAuto();
    function fetchAuto() {
        $.ajax({
            type: "GET",
            url: "/user-dashboard/auto-parts",
            dataType: "json",
            beforeSend: function(){
                $('#loading').append('DATA LOADING');
            },
            success: function (response) {
                // console.log(response);

                $('#records').html('');
                $.each(response.data[0], function (key, item) {
                    // console.log(item)

                    $('#records').append(`
                        <div class="pt-8 sm:flex lg:items-end group">
                            <div class="flex-shrink-0 mb-4 sm:mb-0 sm:mr-4">
                                <img class="w-full rounded-md lg:h-32 lg:w-32" src="https://images.unsplash.com/photo-1616651181620-9906d6e43fc3?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nnx8cGF0dGVybnxlbnwwfDJ8MHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=900&amp;q=60" alt="text">
                            </div>
                            <div>
                                <span class="text-sm text-gray-300">${item.condition}</span>
                                <p class="mt-3 text-lg font-medium leading-6">
                                    <a href="#" class="text-xl text-black group-hover:text-gray-300 lg:text-2xl">${item.item_name}</a>
                                </p>
                                <p class="mt-2 text-lg text-gray-300">${item.description}</p>
                            </div>
                        </div>
                    `);
                });
            }
        });
    } 


    $('#makeFilter').change(function (e) {
        e.preventDefault();

        // console.log(e.target.val);
        // alert(e);
        let make_id = e.target.val;
        
        $.ajax({
            type: "GET",
            url: "/search-make/"+make_id,
            data: make_id,
            dataType: "json",
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
            success: function (response) {
                console.log(response);
            }
        });

        
    });
    $('#modelFilter').change(function (e) {
        e.preventDefault();

        alert('model filter change');
        
    });
    $('#yearFilter').change(function (e) {
        e.preventDefault();

        alert('year filter change');
        
    });

    
});