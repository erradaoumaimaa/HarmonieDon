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
            <!--home-->
            <li class="p-4 border-b-2 border-[#D00000] border-opacity-0 hover:border-opacity-100 hover:text-[#D00000] duration-200 cursor-pointer active">
              <a href="">
                <span class="block px-1 pt-1 pb-1">
                    <svg class="w-8 h-8"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                    </svg>
                </span>
              </a>
            </li>
            <li class="text-gray-300">
                <svg class="w-6 h-6"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"/>
                </svg>

			</li>
              <!--profile-->
            <li class="p-4 border-b-2 border-[#D00000] border-opacity-0 hover:border-opacity-100 hover:text-[#D00000] duration-200 cursor-pointer">
              <a href="">
                <span class="block px-1 pt-1 pb-1">
                <svg class="w-8 h-8"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                </svg>
            </span>
              </a>

            </li>
            <li class="text-gray-300">
                <svg class="w-6 h-6"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"/>
                </svg>

			</li>
              <!--Add-->
            <li class="p-4 border-b-2 border-[#D00000] border-opacity-0 hover:border-opacity-100 hover:text-[#D00000] duration-200 cursor-pointer">
                <a href="">
                  <span class="block px-1 pt-1 pb-1">
                    <svg class="w-8 h-8"
xmlns="http://www.w3.org/2000/svg" width="24"  height="24"  viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <polyline points="8 16 10 10 16 8 14 14 8 16" />  <circle cx="12" cy="12" r="9" /></svg>

              </span>
                </a>
            </li>
              <li class="text-gray-300">
                <svg class="w-6 h-6"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"/>
                </svg>

			    </li>
                  <!--Favoris-->
            <li class="p-4 border-b-2 border-[#D00000] border-opacity-0 hover:border-opacity-100 hover:text-[#D00000] duration-200 cursor-pointer">
              <a href="">
                <span class="block px-1 pt-1 pb-1">
                    <svg class="w-8 h-8"
                    xmlns="http://www.w3.org/2000/svg" width="24"  height="24"   viewBox="0 0 20 20" fill="currentColor">  <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"/></svg>
            </span>
              </a>
            </li>
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
                <svg class="w-8 h-8"
                xmlns="http://www.w3.org/2000/svg" width="24"  height="24"   viewBox="0 0 24 24"  stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6" />  <path d="M9 17v1a3 3 0 0 0 6 0v-1" /></svg>
            </span>
            </a>
            </li>
        </ul>
    </nav>

    <!-- buttons --->
    <div class="w-3/12 flex justify-end">
        @auth
  <div class="flex items-center"> <!-- Conteneur pour l'image et le nom -->
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
