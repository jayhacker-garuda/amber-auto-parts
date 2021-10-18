$(document).ready( () => {
    
    $(document).on('click', '.sideBarResponsive', () => {
        // console.log('toggle')

        const toggleWidth = document.querySelector('#toggleWidth');
        
        
        
            // const element = array[index];
            
        // if (toggleWidth.classList != 'w-20') {
                
                $('#toggleWidth').toggle('w-20');
                $('#makeToggle').toggle('hidden');
                $('#modelToggle').toggle('hidden');
                $('#yearToggle').toggle('hidden');
                $('#profileToggle').toggle('hidden');
            // } else {
            //     $('#toggleWidth').removeClass('w-20');
            // }
            

        

    });

});