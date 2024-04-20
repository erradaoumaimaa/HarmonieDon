@include('master.header')
<header class="header sticky top-0 bg-white shadow-md flex items-center justify-between px-8 py-02">
    <!-- logo -->
    <h1 class="w-3/12">

        <a href="{{ url('/') }}"class="pl-24 w-3/12 text-[#1B2352] font-semibold font-mono text-5xl">

            d<i class="fa-solid fa-heart fa-xs" style="color: #D00000; "></i>norbox
        </a>

    </h1>

    <!-- navigation -->
    <nav class="nav font-semibold text-lg">
        <ul class="flex items-center">
          <!--Home-->
          <li class="border-b-2 border-[#D00000] border-opacity-0 hover:border-opacity-100 {{ request()->routeIs('donors.index') ? 'text-[#D00000] border-opacity-100' : '' }} hover:text-[#D00000] duration-200 cursor-pointer active">
              <a href="{{ route('donors.index') }}" class="p-[18px] gap-[1.4px] shrink-0 aspect-[1.12] w-[90px] flex flex-col justify-center items-center">
              <svg class="w-10 h-10" 
              xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/> </svg>
                    <strong class="uppercase text-xs {{ request()->routeIs('donors.index') ? 'text-[#D00000]' : 'hidden' }}">
                     home</strong>
                  </a>

                </li>

            <!--  end Home-->
            <!--Fil-->
            <li class="text-gray-300">
                <svg class="w-6 h-6"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"/>
                </svg>

			      </li>
            <!--Statistic-->
            <li class="p-4 border-b-2 border-[#D00000] border-opacity-0 hover:border-opacity-100 hover:text-[#D00000] duration-200 cursor-pointer">
              <a href="">
                <span class="block px-1 pt-1 pb-1">
                <svg class="w-10 h-10"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"/>
                </svg>

            </span>
              </a>
            </li>
            <!--Fil-->
            <li class="text-gray-300">
                <svg class="w-6 h-6"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"/>
                </svg>

			      </li>
            <!--Add Doantion-->
            <li class="border-b-2 border-[#D00000] border-opacity-0 hover:border-opacity-100 {{ request()->routeIs('donors.create') ? 'text-[#D00000] border-opacity-100' : '' }} hover:text-[#D00000] duration-200 cursor-pointer active">
              <a href="{{ route('donors.create') }}" class="p-[18px] gap-[1.4px] shrink-0 aspect-[1.12] w-[90px] flex flex-col justify-center items-center">
              <svg class="w-full h-full" width="30px" height="30px" 
                    xmlns="http://www.w3.org/2000/svg" width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <circle cx="12" cy="12" r="10" />  <line x1="12" y1="8" x2="12" y2="16" />  <line x1="8" y1="12" x2="16" y2="12" /></svg>
                    <strong class="uppercase text-xs {{ request()->routeIs('donors.create') ? 'text-[#D00000]' : 'hidden' }}">
                      Donate</strong>
                  </a>

                </li>

              <!--Fil-->
              <li class="text-gray-300">
                <svg class="w-6 h-6"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"/>
                </svg>

			        </li>
              <!--Annones-->
            <li class="p-4 border-b-2 border-[#D00000] border-opacity-0 hover:border-opacity-100 hover:text-[#D00000] duration-200 cursor-pointer">
              <a href="">
              <svg class="w-10 h-10"
                xmlns="http://www.w3.org/2000/svg" width="24"  height="24"   viewBox="0 0 24 24"
                  stroke-width="2" stroke="currentColor" fill="none" 
                  stroke-linecap="round" stroke-linejoin="round"> 
                  <path stroke="none" d="M0 0h24v24H0z"/>  
                  <rect x="3" y="12" width="6" height="8" rx="1" /> 
                    <rect x="9" y="8" width="6" height="12" rx="1" />  
                    <rect x="15" y="4" width="6" height="16" rx="1" />  
                <line x1="4" y1="20" x2="18" y2="20" />
                </svg>
            </span>
              </a>
            </li>
            
            <!--Fill-->
            <li class="text-gray-300">
                <svg class="w-6 h-6"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"/>
                </svg>

			      </li>
            <!--Notification-->
            <li class="p-4 border-b-2 border-[#D00000] border-opacity-0 hover:border-opacity-100 hover:text-[#D00000] duration-200 cursor-pointer">
              <a href="">
                <span class="block px-1 pt-1 pb-1">
                <svg class="w-10 h-10"
                xmlns="http://www.w3.org/2000/svg" width="24"  height="24"   viewBox="0 0 24 24"  stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />  <path d="M9 17v1a3 3 0 0 0 6 0v-1" /></svg>
            </span>
            </a>
            </li>
        </ul>
    </nav>

<!--  l'image and name user  -->
 <!-- buttons --->
 <div class="w-3/12 flex justify-end items-center">
        @auth
  <div class="flex items-center"> 
    <img src="https://via.placeholder.com/50" alt="Avatar" class="w-8 h-8 rounded-full mr-2">
    <span class="text-sm font-semibold">{{ Auth::user()->name }}</span>
  </div>
  <div class="relative ml-4">
    <button id="toggleMenu" class="flex items-center text-sm font-semibold focus:outline-none">
        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="6 9 12 15 18 9" />
        </svg>
    </button>
    <div id="menuItems" class="absolute right-0 mt-2 w-48 bg-white border border-gray-200 rounded-md shadow-lg z-10 hidden">
        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profil</a>
        <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Log out</a>

    </div>
</div>
  @endauth
    </div>
</header>
<script>
    document.getElementById('toggleMenu').addEventListener('click', function () {
        var menu = document.getElementById('menuItems');
        if (menu.classList.contains('hidden')) {
            menu.classList.remove('hidden');
        } else {
            menu.classList.add('hidden');
        }
    });
</script>