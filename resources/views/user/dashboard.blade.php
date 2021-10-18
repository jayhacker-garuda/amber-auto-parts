@extends('layouts.userDefault')

@section('user-dashboard')
          <section>
            <div class="px-4 py-12 mx-auto">
                
              <div class="max-w-4xl mx-auto">
                <div class="relative">
                  <div class="absolute inset-0 flex items-center" aria-hidden="true">
                    <div class="w-full border-t border-black"></div>
                  </div>
                  <div class="relative flex justify-start">
                    <span class="pr-3 text-lg font-medium text-black bg-white">Ja Auto-Parts</span>
                  </div>
                </div>
                <div class="space-y-8 lg:divide-y lg:divide-gray-100" id="records">
                  <span id="loading"></span>
                  
                </div>
              </div>
            </div>
          </section>
@endsection