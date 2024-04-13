@include('master.header')
    <div class="relative min-h-screen flex items-center justify-center gap-8 bg-center py-12 px-4 sm:px-6 lg:px-8 bg-no-repeat bg-cover relative" style="background-image: url({{ asset('image/register1.jpg') }});">
      <div class="absolute bg-black opacity-70 inset-0 z-0">
        <div class="px-4 py-2 mx-8 my-16 flex flex-row justify-start">
            <a href="{{url('/')}}"
                class="inline-flex items-center border border-[#D00000] px-3 py-1.5 rounded-md text-[#D00000] hover:bg-black">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18">
                    </path>
                </svg>
                <span class="ml-1 font-extrabold text-lg">Back</span>
            </a>
            </a>
        </div>
      </div>
      <!-- Role -->
      <div class="hidden lg:flex flex-col items-center justify-center w-[30%] bg-white gap-4 mx-4 p-10 rounded-lg z-10">
        <h1 class="text-2xl font-bold mb-6">Who you are ?</h1>
        <button type='button' data-id="association" onclick='changeRole(event)' class='role transition-all border-[1px] border-[#03071E] shadow-sm rounded px-6 py-4 text-start flex items-center gap-4'>
          <svg class="w-16" viewBox="0 0 24 24" id="company-small-24px" xmlns="http://www.w3.org/2000/svg" fill="#D00000" stroke="#D00000">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
              <path id="company-small-24px-2" data-name="company-small-24px" d="M16,4H2A2.006,2.006,0,0,0,0,6V24H18V6A2.006,2.006,0,0,0,16,4ZM8,22V18h2v4Zm8,0H12V17a.945.945,0,0,0-1-1H7a.945.945,0,0,0-1,1v5H2V6H16ZM8,10H6V8H8Zm4,0H10V8h2ZM8,14H6V12H8Zm4,0H10V12h2Z" transform="translate(3 -2)"></path>
              <rect id="Ret창ngulo_222" data-name="Ret창ngulo 222" width="24" height="24" fill="none" opacity="0"></rect>
            </g>
          </svg>
          <div>
            <h1 class="text-2xl">Association</h1>
            <p class="text-sm text-gray-500">Select this if you are an organization looking to collaborate and make a positive impact as an association</p>
          </div>
        </button>
        <button type='button' data-id="donor" onclick='changeRole(event)' class='role transition-all border-[1px] border-[#03071E] shadow-sm rounded px-6 py-4 text-start flex items-center gap-4'>
          <svg class="w-16" height="30px" width="30px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 503.467 503.467" xml:space="preserve" fill="#000000">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
              <g transform="translate(1 1)">
                <path style="fill:#AAB1BA;" d="M3.33,498.2V276.333h51.2c9.387,0,17.067,7.68,17.067,17.067v17.067v119.467v51.2 c0,9.387-7.68,17.067-17.067,17.067H3.33z"></path>
                <path style="fill:#FF7474;" d="M332.716,31.427c15.36-17.067,38.4-28.16,63.147-28.16c46.933,0,85.333,38.4,85.333,85.333 c0,51.2-51.2,136.533-145.067,187.733C242.263,225.133,191.063,139.8,191.063,88.6c0-46.933,38.4-85.333,85.333-85.333 c11.947,0,23.893,2.56,34.133,6.827c0,0,15.36,8.533,21.333,19.627L332.716,31.427z"></path>
                <path style="fill:#FFD0A1;" d="M354.05,399.213c2.56-0.853,5.12-1.707,7.68-3.413l98.133-47.787 c11.947-6.827,28.16-2.56,34.987,9.387c6.827,11.947,2.56,28.16-9.387,34.987l-115.2,71.68c0,0-25.6,17.067-85.333,17.067 c-51.2,0-128-42.667-128-42.667s-17.067-8.533-51.2-8.533H71.596V310.467h102.4c25.6,0,68.267,51.2,93.867,51.2h51.2 c17.067,0,25.6,8.533,25.6,8.533s8.533,8.533,8.533,25.6L354.05,399.213z"></path>
              </g>
              <path style="fill:#51565F;" d="M55.53,503.467H4.33c-2.56,0-4.267-1.707-4.267-4.267c0-2.56,1.707-4.267,4.267-4.267h51.2 c6.827,0,12.8-5.973,12.8-12.8V294.4c0-6.827-5.973-12.8-12.8-12.8H4.33c-2.56,0-4.267-1.707-4.267-4.267s1.707-4.267,4.267-4.267 h51.2c11.947,0,21.333,9.387,21.333,21.333v187.733C76.863,494.08,67.476,503.467,55.53,503.467z M285.93,486.4 c-52.053,0-127.147-41.813-129.707-43.52l0,0c0,0-17.067-7.68-49.493-7.68c-2.56,0-4.267-1.707-4.267-4.267 c0-2.56,1.707-4.267,4.267-4.267c34.987,0,52.053,8.533,52.907,9.387c0.853,0.853,76.8,41.813,126.293,41.813 c57.173,0,82.773-16.213,82.773-16.213l115.2-71.68c10.24-5.973,13.653-18.773,7.68-29.013c-5.973-10.24-18.773-13.653-29.013-7.68 l-98.133,47.787c-17.92,9.387-34.987,9.387-69.973,9.387c-34.133,0-83.627-8.533-86.187-8.533s-4.267-2.56-3.413-5.12 c0-2.56,2.56-4.267,5.12-3.413c0.853,0,51.2,8.533,84.48,8.533s50.347,0,66.56-7.68l98.133-47.787 c13.653-7.68,32.427-3.413,40.107,11.093c8.533,14.507,3.413,32.427-11.093,40.96l-115.2,71.68 C372.116,469.333,346.516,486.4,285.93,486.4z M25.663,460.8c-5.12,0-8.533-3.413-8.533-8.533s3.413-8.533,8.533-8.533 s8.533,3.413,8.533,8.533S30.783,460.8,25.663,460.8z M345.663,375.467c-0.853,0-2.56,0-3.413-0.853l0,0c0,0-7.68-7.68-22.187-7.68 h-51.2c-14.507,0-31.573-12.8-49.493-26.453c-16.213-11.947-33.28-24.747-44.373-24.747H106.73c-2.56,0-4.267-1.707-4.267-4.267 c0-2.56,1.707-4.267,4.267-4.267h68.267c14.507,0,31.573,12.8,49.493,26.453c16.213,11.947,33.28,24.747,44.373,24.747h51.2 c18.773,0,28.16,9.387,29.013,9.387c1.707,1.707,1.707,4.267,0,5.973C348.223,375.467,346.516,375.467,345.663,375.467z M337.13,281.6c-0.853,0-1.707,0-1.707-0.853C243.263,230.4,187.796,144.213,187.796,89.6c0-49.493,40.107-89.6,89.6-89.6 c12.8,0,24.747,2.56,35.84,7.68c2.56,0.853,3.413,3.413,2.56,5.973c-0.853,2.56-3.413,3.413-5.973,2.56 c-10.24-4.267-21.333-6.827-32.427-6.827c-44.373,0-81.067,36.693-81.067,81.067c0,52.053,52.907,133.973,140.8,182.613 c87.893-48.64,140.8-131.413,140.8-182.613c0-44.373-36.693-81.067-81.067-81.067c-31.573,0-60.587,18.773-73.387,46.933 c-0.853,2.56-3.413,3.413-5.973,1.707c-2.56-0.853-3.413-3.413-1.707-5.973C330.303,20.48,362.73,0,396.863,0 c49.493,0,89.6,40.107,89.6,89.6c0,54.613-55.467,140.8-147.627,191.147C338.836,281.6,337.983,281.6,337.13,281.6z M445.503,76.8 c-1.707,0-3.413-0.853-4.267-2.56c-5.12-13.653-15.36-23.893-28.16-28.16c-2.56-0.853-3.413-3.413-2.56-5.12 c0.853-2.56,3.413-3.413,5.12-2.56c16.213,5.973,28.16,17.92,34.133,34.133c0.853,2.56,0,4.267-2.56,5.12 C446.356,76.8,445.503,76.8,445.503,76.8z"></path>
            </g>
          </svg>
          <div>
            <h1 class="text-2xl">Donor</h1>
            <p class="text-sm text-gray-500">Select this if you are willing to contribute and help people in need as a donor</p>
          </div>
        </button>
        <button type='button' data-id="user" onclick='changeRole(event)' class='role transition-all border-[1px] border-[#03071E] shadow-sm rounded px-6 py-4 text-start flex items-center gap-4'>
          <svg class="w-16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#D00000">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
              <circle cx="12" cy="6" r="4" fill="#D00000"></circle>
              <path d="M20 17.5C20 19.9853 20 22 12 22C4 22 4 19.9853 4 17.5C4 15.0147 7.58172 13 12 13C16.4183 13 20 15.0147 20 17.5Z" fill="#D00000"></path>
            </g>
          </svg>
          <div>
            <h1 class="text-2xl">Beneficiary</h1>
            <p class="text-sm text-gray-500">Select this if you are in need of support and seeking assistance as a beneficiary</p>
          </div>
        </button>
      </div>
      <!--End Role-->

      <div class="max-w-xl w-full space-y-8 p-10 bg-white rounded-md shadow-lg z-10">
        <div class="grid gap-16 grid-cols-1">
          <div class="flex flex-col">
            <div class="flex flex-col sm:flex-row items-center">
              <h1 class="block w-full text-center text-2xl font-bold mb-6">Be part of our community at Donorbox and make a difference today!</h1>
              <div class="w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0"></div>
            </div>
            <div class="mt-5">
                <form id="signup-form" method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf
                <div class="flex items-center justify-center">
                  <label for="profile_image" class="w-24 h-24 rounded-full cursor-pointer flex items-center justify-center border-2 border-dashed border-[#03071E]" id="profilePictureLabel">
                    <svg width="35px" height="35px" viewBox="0 0 24 24" fill="none" id="plusIcon" xmlns="http://www.w3.org/2000/svg" stroke="#D00000" onclick="document.getElementById('image_url').click();">
                      <g id="SVGRepo_bgCarrier" stroke-width="0" />
                      <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />
                      <g id="SVGRepo_iconCarrier">
                        <path d="M6 12H18M12 6V18" stroke="#D00000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                      </g>
                    </svg>
                  </label>
                  <input id="image_url" class="hidden" type="file" name="image_url" accept="image/*" onchange="displayImage('profilePictureLabel', 'image_url')">
                </div>
                <!-- Mobile Role -->
                <div class="flex items-center justify-center lg:hidden bg-white gap-2 p-2 rounded-lg z-10 mt-6">
                  <button type='button' data-id="association" onclick='changeRole(event)' class='role transition-all border-[1px] border-[#03071E] shadow-sm rounded p-2 min-w-24 h-16 text-start flex flex-col items-center gap-2'>
                    <svg class="w-8" viewBox="0 0 24 24" id="company-small-24px" xmlns="http://www.w3.org/2000/svg" fill="#D00000" stroke="#D00000">
                      <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                      <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                      <g id="SVGRepo_iconCarrier">
                        <path id="company-small-24px-2" data-name="company-small-24px" d="M16,4H2A2.006,2.006,0,0,0,0,6V24H18V6A2.006,2.006,0,0,0,16,4ZM8,22V18h2v4Zm8,0H12V17a.945.945,0,0,0-1-1H7a.945.945,0,0,0-1,1v5H2V6H16ZM8,10H6V8H8Zm4,0H10V8h2ZM8,14H6V12H8Zm4,0H10V12h2Z" transform="translate(3 -2)"></path>
                        <rect id="Ret창ngulo_222" data-name="Ret창ngulo 222" width="24" height="24" fill="none" opacity="0"></rect>
                      </g>
                    </svg>
                    <h1 class="text-sm">Association</h1>
                  </button>
                  <button type='button' data-id="donor" onclick='changeRole(event)' class='role transition-all border-[1px] border-[#03071E] shadow-sm rounded p-2 min-w-24 h-16 text-start flex flex-col items-center gap-2'>
                    <svg class="w-8" height="30px" width="30px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 503.467 503.467" xml:space="preserve" fill="#000000">
                      <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                      <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                      <g id="SVGRepo_iconCarrier">
                        <g transform="translate(1 1)">
                          <path style="fill:#AAB1BA;" d="M3.33,498.2V276.333h51.2c9.387,0,17.067,7.68,17.067,17.067v17.067v119.467v51.2 c0,9.387-7.68,17.067-17.067,17.067H3.33z"></path>
                          <path style="fill:#FF7474;" d="M332.716,31.427c15.36-17.067,38.4-28.16,63.147-28.16c46.933,0,85.333,38.4,85.333,85.333 c0,51.2-51.2,136.533-145.067,187.733C242.263,225.133,191.063,139.8,191.063,88.6c0-46.933,38.4-85.333,85.333-85.333 c11.947,0,23.893,2.56,34.133,6.827c0,0,15.36,8.533,21.333,19.627L332.716,31.427z"></path>
                          <path style="fill:#FFD0A1;" d="M354.05,399.213c2.56-0.853,5.12-1.707,7.68-3.413l98.133-47.787 c11.947-6.827,28.16-2.56,34.987,9.387c6.827,11.947,2.56,28.16-9.387,34.987l-115.2,71.68c0,0-25.6,17.067-85.333,17.067 c-51.2,0-128-42.667-128-42.667s-17.067-8.533-51.2-8.533H71.596V310.467h102.4c25.6,0,68.267,51.2,93.867,51.2h51.2 c17.067,0,25.6,8.533,25.6,8.533s8.533,8.533,8.533,25.6L354.05,399.213z"></path>
                        </g>
                        <path style="fill:#51565F;" d="M55.53,503.467H4.33c-2.56,0-4.267-1.707-4.267-4.267c0-2.56,1.707-4.267,4.267-4.267h51.2 c6.827,0,12.8-5.973,12.8-12.8V294.4c0-6.827-5.973-12.8-12.8-12.8H4.33c-2.56,0-4.267-1.707-4.267-4.267s1.707-4.267,4.267-4.267 h51.2c11.947,0,21.333,9.387,21.333,21.333v187.733C76.863,494.08,67.476,503.467,55.53,503.467z M285.93,486.4 c-52.053,0-127.147-41.813-129.707-43.52l0,0c0,0-17.067-7.68-49.493-7.68c-2.56,0-4.267-1.707-4.267-4.267 c0-2.56,1.707-4.267,4.267-4.267c34.987,0,52.053,8.533,52.907,9.387c0.853,0.853,76.8,41.813,126.293,41.813 c57.173,0,82.773-16.213,82.773-16.213l115.2-71.68c10.24-5.973,13.653-18.773,7.68-29.013c-5.973-10.24-18.773-13.653-29.013-7.68 l-98.133,47.787c-17.92,9.387-34.987,9.387-69.973,9.387c-34.133,0-83.627-8.533-86.187-8.533s-4.267-2.56-3.413-5.12 c0-2.56,2.56-4.267,5.12-3.413c0.853,0,51.2,8.533,84.48,8.533s50.347,0,66.56-7.68l98.133-47.787 c13.653-7.68,32.427-3.413,40.107,11.093c8.533,14.507,3.413,32.427-11.093,40.96l-115.2,71.68 C372.116,469.333,346.516,486.4,285.93,486.4z M25.663,460.8c-5.12,0-8.533-3.413-8.533-8.533s3.413-8.533,8.533-8.533 s8.533,3.413,8.533,8.533S30.783,460.8,25.663,460.8z M345.663,375.467c-0.853,0-2.56,0-3.413-0.853l0,0c0,0-7.68-7.68-22.187-7.68 h-51.2c-14.507,0-31.573-12.8-49.493-26.453c-16.213-11.947-33.28-24.747-44.373-24.747H106.73c-2.56,0-4.267-1.707-4.267-4.267 c0-2.56,1.707-4.267,4.267-4.267h68.267c14.507,0,31.573,12.8,49.493,26.453c16.213,11.947,33.28,24.747,44.373,24.747h51.2 c18.773,0,28.16,9.387,29.013,9.387c1.707,1.707,1.707,4.267,0,5.973C348.223,375.467,346.516,375.467,345.663,375.467z M337.13,281.6c-0.853,0-1.707,0-1.707-0.853C243.263,230.4,187.796,144.213,187.796,89.6c0-49.493,40.107-89.6,89.6-89.6 c12.8,0,24.747,2.56,35.84,7.68c2.56,0.853,3.413,3.413,2.56,5.973c-0.853,2.56-3.413,3.413-5.973,2.56 c-10.24-4.267-21.333-6.827-32.427-6.827c-44.373,0-81.067,36.693-81.067,81.067c0,52.053,52.907,133.973,140.8,182.613 c87.893-48.64,140.8-131.413,140.8-182.613c0-44.373-36.693-81.067-81.067-81.067c-31.573,0-60.587,18.773-73.387,46.933 c-0.853,2.56-3.413,3.413-5.973,1.707c-2.56-0.853-3.413-3.413-1.707-5.973C330.303,20.48,362.73,0,396.863,0 c49.493,0,89.6,40.107,89.6,89.6c0,54.613-55.467,140.8-147.627,191.147C338.836,281.6,337.983,281.6,337.13,281.6z M445.503,76.8 c-1.707,0-3.413-0.853-4.267-2.56c-5.12-13.653-15.36-23.893-28.16-28.16c-2.56-0.853-3.413-3.413-2.56-5.12 c0.853-2.56,3.413-3.413,5.12-2.56c16.213,5.973,28.16,17.92,34.133,34.133c0.853,2.56,0,4.267-2.56,5.12 C446.356,76.8,445.503,76.8,445.503,76.8z"></path>
                      </g>
                    </svg>
                    <h1 class="text-sm">Donor</h1>
                  </button>
                  <button type='button' data-id="user" onclick='changeRole(event)' class='role transition-all border-[1px] border-[#03071E] shadow-sm rounded p-2 min-w-24 h-16 text-start flex flex-col items-center gap-2'>
                    <svg class="w-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#D00000">
                      <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                      <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                      <g id="SVGRepo_iconCarrier">
                        <circle cx="12" cy="6" r="4" fill="#D00000"></circle>
                        <path d="M20 17.5C20 19.9853 20 22 12 22C4 22 4 19.9853 4 17.5C4 15.0147 7.58172 13 12 13C16.4183 13 20 15.0147 20 17.5Z" fill="#D00000"></path>
                      </g>
                    </svg>
                    <h1 class="text-sm">Beneficiary</h1>
                  </button>
                </div>
                <!--End Mobile Role-->
                <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                    <input id="role" type='hidden' value='' name='role' />
                    <div>
                      <label class="font-extrabold" for="name">Username</label>
                      <input id="name" type="text" name="name" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-[#03071E] rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                    </div>
                    <div>
                      <label class="font-extrabold" for="email">Email Address</label>
                      <input id="email" type="email" name="email" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-[#03071E] rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                    </div>
                    <div>
                      <label class="font-extrabold" for="password">Password</label>
                      <input id="password" type="password" name="password" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-[#03071E] rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                    </div>
                    <div>
                      <label class="font-extrabold" for="gender">Gender</label>
                      <select id="gender" name="gender" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-[#03071E] rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                        <option>female</option>
                        <option>male</option>
                      </select>
                    </div>
                    <div>
                      <label class="font-extrabold" for="phone">Cell Phone</label>
                      <input id="phone" type="tel" name="phone" class="block w-full py-2 mt-2 text-gray-700 bg-white border border-[#03071E] rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                    </div>
                    <div>
                      <label class="font-extrabold" for="date_of_birth">Birthay</label>
                      <input id="date_of_birth" type="date" name="date_of_birth" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-[#03071E] rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                    </div>
                    <div>
                      <label class="font-extrabold" for="location">Location</label>
                      <select id="city" name="location" class="block w-full px-4 py-2 mt-2 text-black bg-white border border-[#03071E] rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                        <option value="" disabled selected>Select a city</option>
                      </select>
                    </div>
                    <div>
                      <label class="font-extrabold" for="bio">Tell us about you</label>
                      <textarea id="bio" name="bio" type="textarea" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-[#03071E] rounded-md focus:border-blue-500 focus:outline-none focus:ring"></textarea>
                    </div>
                  </div>
                  <button  type="submit" class="inline-block w-full py-4 px-6 mb-6 mt-4 text-center text-lg leading-6 text-white font-extrabold rounded-lg
                          px-6 py-3 block shadow-xl bg-[#D00000]">Register</button>
                  <p class="text-center font-extrabold">Already have an account? <a class="text-[#D00000] " href="{{ route('login') }}">Sign in</a></p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
      <!--JS : image , role, location-->
      <script src="/js/register.js" defer></script>

<script>
    fetch('{{ asset("json/villes.json") }}')
    .then(response => response.json())
    .then(data => {
        console.log(data); // Log the received JSON data
        const citySelect = document.getElementById('city');

        data.forEach(city => {
            const option = document.createElement('option');
            option.value = city.name;
            option.textContent = city.name;
            citySelect.appendChild(option);
        });
    })
    .catch(error => console.error('Erreur lors du chargement du fichier JSON :', error));

</script>
