@include('master.header')
<nav
  class="block w-full max-w-screen-full px-4 py-2 mx-auto text-white bg-[#094839] border-b-4 border-[#E44A19]  backdrop-blur-2xl backdrop-saturate-200 lg:px-8 lg:py-4">
  <div class="container flex items-center justify-between mx-auto ">
    <!--logo-->
    <a href="{{ route('association.index') }}"
      class=" mr-4 block cursor-pointer py-1.5 font-mono  font-bold  text-4xl leading-relaxed antialiased">
      <!-- <svg height="40px" width="40px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path style="fill:#ED2F49;" d="M312.364,8.17c-3.134,0-6.208,0.239-9.212,0.69l-46.127,244.655l105.861-142.203 c8.031-10.786,12.797-24.221,12.797-38.79C375.683,36.982,347.334,8.17,312.364,8.17z"></path> <path style="fill:#FE7074;" d="M209.476,8.86c-3.028-0.451-6.13-0.69-9.291-0.69c-35.272,0-63.866,28.811-63.866,64.352 c0,14.569,4.807,28.003,12.907,38.79l106.776,142.203L209.476,8.86z"></path> <path style="fill:#FF455E;" d="M341.781,72.522c0-32.351-16.778-59.116-38.629-63.662c-20.135,3.023-36.989,15.814-46.127,33.496 c-9.138-17.681-25.992-30.473-46.127-33.496c-21.849,4.546-38.629,31.312-38.629,63.662c0,14.569,3.404,28.003,9.141,38.79 l75.615,142.203l75.615-142.203C338.376,100.525,341.781,87.09,341.781,72.522z"></path> <path style="fill:#FF9B5F;" d="M96.982,110.722c-13.136,0-23.783,10.649-23.783,23.783v156.064h47.567V134.505 C120.764,121.369,110.116,110.722,96.982,110.722z"></path> <path style="fill:#FEBB8E;" d="M88.084,268.783V134.505c0-13.136-10.649-23.783-23.784-23.783s-23.783,10.649-23.783,23.783 l0.133,149.944c0.004,5.428,2.185,13.74,4.845,18.471l94.211,152.563c2.66,4.731,4.836,13.044,4.836,18.471v29.876h95.119v-51.2 l-39.871-97.498L88.084,268.783z"></path> <path style="fill:#FCD5A2;" d="M239.662,392.548c0-16.284-9.421-39.027-20.934-50.542l-90.042-90.042 c-9.288-9.288-24.347-9.288-33.635,0c-9.288,9.288-9.288,24.347,0,33.635l72.683,72.683v21.36c0,40.31,31.619,72.987,71.928,72.987 L239.662,392.548L239.662,392.548z"></path> <path style="fill:#FF9B5F;" d="M415.021,110.722c13.136,0,23.783,10.649,23.783,23.783v156.064h-47.567V134.505 C391.238,121.369,401.886,110.722,415.021,110.722z"></path> <path style="fill:#FEBB8E;" d="M423.919,268.783V134.505c0-13.136,10.648-23.783,23.784-23.783 c13.136,0,23.783,10.649,23.783,23.783l-0.133,149.944c-0.004,5.428-2.185,13.74-4.845,18.471l-94.211,152.563 c-2.66,4.731-4.837,13.044-4.837,18.471v29.876H272.34v-51.2l39.871-97.498L423.919,268.783z"></path> <path style="fill:#FCD5A2;" d="M272.34,392.548c0-16.284,9.421-39.027,20.934-50.542l90.042-90.042 c9.288-9.288,24.347-9.288,33.635,0c9.288,9.288,9.288,24.347,0,33.635l-72.683,72.683v21.36c0,40.31-31.619,72.987-71.928,72.987 L272.34,392.548L272.34,392.548z"></path> <g> <path style="fill:#1D2328;" d="M134.462,246.187c-10.334-10.334-26.04-12.088-38.208-5.277V134.505 c0-5.404-1.354-10.497-3.732-14.965c1.431-0.426,2.93-0.649,4.459-0.649c8.609,0,15.613,7.004,15.613,15.613v78.553 c0,4.512,3.658,8.17,8.17,8.17c4.512,0,8.17-3.658,8.17-8.17v-78.553c0-17.619-14.335-31.953-31.953-31.953 c-5.828,0-11.447,1.574-16.351,4.502c-4.782-2.855-10.366-4.502-16.33-4.502c-17.619,0-31.954,14.334-31.954,31.961l0.133,149.944 c0.005,6.842,2.539,16.502,5.892,22.467c0.054,0.098,0.112,0.194,0.171,0.29l94.113,152.403c1.954,3.564,3.716,10.342,3.716,14.338 v29.877c0,4.512,3.658,8.17,8.17,8.17s8.17-3.658,8.17-8.17v-29.876c0-6.846-2.53-16.507-5.884-22.475 c-0.056-0.098-0.112-0.194-0.171-0.29L52.544,298.788c-1.955-3.565-3.721-10.348-3.725-14.346l-0.133-149.936 c0-8.609,7.005-15.613,15.614-15.613s15.613,7.004,15.613,15.613v134.277c0,0.192,0.015,0.38,0.028,0.569 c0.141,7.992,3.245,15.941,9.33,22.026l73.18,73.179c3.191,3.191,8.364,3.191,11.554,0c3.191-3.191,3.191-8.363,0-11.554 l-73.18-73.179c-6.087-6.087-6.087-15.993,0-22.08c6.087-6.087,15.993-6.087,22.081,0l90.042,90.042 c10.05,10.05,18.542,30.55,18.542,44.764v111.28c0,4.512,3.658,8.17,8.17,8.17c4.512,0,8.17-3.658,8.17-8.17V392.548 c0-18.5-10.247-43.238-23.329-56.319L134.462,246.187z"></path> <path style="fill:#1D2328;" d="M447.703,102.551c-5.963,0-11.547,1.646-16.329,4.502c-4.903-2.928-10.523-4.502-16.351-4.502 c-17.619,0-31.953,14.334-31.953,31.953v78.553c0,4.512,3.658,8.17,8.17,8.17c4.512,0,8.17-3.658,8.17-8.17v-78.553 c0-8.609,7.005-15.613,15.613-15.613c1.528,0,3.027,0.223,4.459,0.649c-2.378,4.467-3.732,9.56-3.732,14.965v106.406 c-12.167-6.81-27.873-5.057-38.208,5.278l-90.042,90.042c-13.081,13.081-23.329,37.819-23.329,56.319V503.83 c0,4.512,3.658,8.17,8.17,8.17s8.17-3.658,8.17-8.17V392.548c0-14.214,8.492-34.714,18.542-44.764l90.042-90.042 c6.087-6.087,15.993-6.087,22.081,0c6.087,6.087,6.087,15.993,0,22.081l-73.18,73.179c-3.191,3.191-3.191,8.363,0,11.554 s8.364,3.191,11.554,0l73.18-73.179c6.085-6.085,9.189-14.034,9.33-22.026c0.013-0.188,0.028-0.377,0.028-0.569V134.505 c0-8.609,7.005-15.613,15.613-15.613c8.608,0,15.614,7.004,15.614,15.606l-0.133,149.944c-0.003,3.998-1.77,10.78-3.725,14.346 l-94.113,152.403c-0.059,0.095-0.115,0.192-0.171,0.29c-3.354,5.968-5.884,15.63-5.884,22.475v29.875c0,4.512,3.658,8.17,8.17,8.17 c4.512,0,8.17-3.658,8.17-8.17v-29.876c0-3.996,1.762-10.774,3.716-14.338l94.113-152.403c0.059-0.095,0.117-0.192,0.171-0.29 c3.353-5.966,5.887-15.625,5.892-22.467l0.133-149.951C479.656,116.885,465.321,102.551,447.703,102.551z"></path> <path style="fill:#1D2328;" d="M384.111,72.173C384.111,32.377,351.733,0,311.938,0c-21.953,0-42.501,10.013-56.076,26.762 C242.723,10.452,222.591,0,200.065,0c-39.797,0-72.173,32.377-72.173,72.173c0,15.85,5.045,30.895,14.59,43.509l107.005,141.434 c1.544,2.041,3.955,3.241,6.515,3.241c2.56,0,4.971-1.199,6.515-3.241l107.005-141.433 C379.065,103.069,384.111,88.024,384.111,72.173z M356.49,105.824L256.001,238.645L155.512,105.823 c-7.379-9.752-11.28-21.389-11.28-33.649c0-30.786,25.047-55.833,55.833-55.833c30.485,0,55.285,24.8,55.285,55.285 c0,4.512,3.658,8.17,8.17,8.17c4.512,0,8.17-3.658,8.17-8.17c0-10.665-2.342-20.792-6.541-29.894 c10.264-15.753,27.853-25.391,46.788-25.391c30.786,0,55.833,25.047,55.833,55.833C367.771,84.435,363.87,96.071,356.49,105.824z"></path> </g> </g></svg> -->
        <span class="text-[#E44A19]">donor</span><span class="text-white">box</span>
    </a>
    <!--end logo-->
    <div class="hidden lg:block">
        <!--link-->
      <ul class="flex flex-col gap-2 mt-2 mb-4 lg:mb-0 lg:mt-0 lg:flex-row lg:items-center lg:gap-6">
        <!--home link-->
      <li class="flex items-center p-1 text-sm antialiased font-semibold leading-normal gap-x-2 {{ request()->routeIs('association.index') ? 'text-[#E44A19]' : 'text-white' }} cursor-pointer active">
  <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/>
  </svg>
  <a href="{{ route('association.index') }}" class="flex items-center {{ request()->routeIs('association.index') ? 'text-[#E44A19]' : 'text-white' }}">
    Home
  </a>
</li>


         <!--Fil-->
         <li class="text-[#8095A8]">
                <svg class="w-6 h-6"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"/>
                </svg>

			      </li>
                   <!--Create blog-->
                   <li class="flex items-center p-1 text-sm antialiased font-semibold leading-normal gap-x-2 {{ request()->routeIs('blogs.create') ? 'text-[#E44A19]' : 'text-white' }} cursor-pointer active">
                    <svg class="w-5 h-5 {{ request()->routeIs('blogs.create') ? 'text-[#E44A19]' : 'text-white' }}" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd"/>
                    </svg>
                    <a href="{{ route('blogs.create') }}" class="flex items-center {{ request()->routeIs('blogs.create') ? 'text-[#E44A19]' : 'text-white' }}">
                        Add Blog
                    </a>
                    </li>

         <!--Fil-->
         <li class="text-[#8095A8]">
                <svg class="w-6 h-6"
                xmlns="http://www.w3.org/2000/svg" width="24" height="24"  fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"/>
                </svg>

			      </li>
                   <!--list of donation link-->



 <!--Fil-->
 <li class="flex items-center p-1 text-sm antialiased font-semibold leading-normal gap-x-2 {{ request()->routeIs('blogs.manage') ? 'text-[#E44A19]' : 'text-white' }} cursor-pointer active">
 <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="{{ request()->routeIs('blogs.manage') ? 'text-[#E44A19]' : 'text-white' }}">
    <path d="M2 0.5C1.46957 0.5 0.960859 0.710714 0.585786 1.08579C0.210714 1.46086 0 1.96957 0 2.5V4.5C0 5.03043 0.210714 5.53914 0.585786 5.91421C0.960859 6.28929 1.46957 6.5 2 6.5H4C4.53043 6.5 5.03914 6.28929 5.41421 5.91421C5.78929 5.53914 6 5.03043 6 4.5V2.5C6 1.96957 5.78929 1.46086 5.41421 1.08579C5.03914 0.710714 4.53043 0.5 4 0.5H2ZM2 8.5C1.46957 8.5 0.960859 8.71071 0.585786 9.08579C0.210714 9.46086 0 9.96957 0 10.5V12.5C0 13.0304 0.210714 13.5391 0.585786 13.9142C0.960859 14.2893 1.46957 14.5 2 14.5H4C4.53043 14.5 5.03914 14.2893 5.41421 13.9142C5.78929 13.5391 6 13.0304 6 12.5V10.5C6 9.96957 5.78929 9.46086 5.41421 9.08579C5.03914 8.71071 4.53043 8.5 4 8.5H2ZM8 2.5C8 1.96957 8.21071 1.46086 8.58579 1.08579C8.96086 0.710714 9.46957 0.5 10 0.5H12C12.5304 0.5 13.0391 0.710714 13.4142 1.08579C13.7893 1.46086 14 1.96957 14 2.5V4.5C14 5.03043 13.7893 5.53914 13.4142 5.91421C13.0391 6.28929 12.5304 6.5 12 6.5H10C9.46957 6.5 8.96086 6.28929 8.58579 5.91421C8.21071 5.53914 8 5.03043 8 4.5V2.5ZM8 10.5C8 9.96957 8.21071 9.46086 8.58579 9.08579C8.96086 8.71071 9.46957 8.5 10 8.5H12C12.5304 8.5 13.0391 8.71071 13.4142 9.08579C13.7893 9.46086 14 9.96957 14 10.5V12.5C14 13.0304 13.7893 13.5391 13.4142 13.9142C13.0391 14.2893 12.5304 14.5 12 14.5H10C9.46957 14.5 8.96086 14.2893 8.58579 13.9142C8.21071 13.5391 8 13.0304 8 12.5V10.5Z" fill="currentColor"/>
  </svg>
Blogs
  </li>
      </ul>
    </div>
    <div class=" flex justify-end items-center text-white">
        @auth
  <div class="flex items-center">
  <img src="{{ Auth::user()->image_url ? asset('/storage/' . Auth::user()->image_url)  :  'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80' }}" alt="img" class="w-8 h-8 rounded-full mr-2">
    <span class="text-sm font-semibold">{{ Auth::user()->name }}</span>
  </div>
  <div class="relative ml-4">
    <button id="toggleMenu" class="flex items-center text-sm font-semibold focus:outline-none">
        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <polyline points="6 9 12 15 18 9" />
        </svg>
    </button>
    <div id="menuItems" class="absolute right-0 mt-2 w-48 bg-[#094839] border border-gray-200 rounded-md shadow-lg z-10 hidden">
    <li class="flex items-center p-1 font-sans text-sm antialiased font-semibold leading-normal gap-x-2 {{ request()->routeIs('association.profile') ? 'text-[#E44A19]' : 'text-white' }} cursor-pointer active">
  <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg" class="{{ request()->routeIs('association.profile') ? 'text-[#E44A19]' : 'text-white' }}">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M16 8.5C16 10.6217 15.1571 12.6566 13.6569 14.1569C12.1566 15.6571 10.1217 16.5 8 16.5C5.87827 16.5 3.84344 15.6571 2.34315 14.1569C0.842855 12.6566 0 10.6217 0 8.5C0 6.37827 0.842855 4.34344 2.34315 2.84315C3.84344 1.34285 5.87827 0.5 8 0.5C10.1217 0.5 12.1566 1.34285 13.6569 2.84315C15.1571 4.34344 16 6.37827 16 8.5ZM10 5.5C10 6.03043 9.78929 6.53914 9.41421 6.91421C9.03914 7.28929 8.53043 7.5 8 7.5C7.46957 7.5 6.96086 7.28929 6.58579 6.91421C6.21071 6.53914 6 6.03043 6 5.5C6 4.96957 6.21071 4.46086 6.58579 4.08579C6.96086 3.71071 7.46957 3.5 8 3.5C8.53043 3.5 9.03914 3.71071 9.41421 4.08579C9.78929 4.46086 10 4.96957 10 5.5ZM8 9.5C7.0426 9.49981 6.10528 9.77449 5.29942 10.2914C4.49356 10.8083 3.85304 11.5457 3.454 12.416C4.01668 13.0706 4.71427 13.5958 5.49894 13.9555C6.28362 14.3152 7.13681 14.5009 8 14.5C8.86319 14.5009 9.71638 14.3152 10.5011 13.9555C11.2857 13.5958 11.9833 13.0706 12.546 12.416C12.147 11.5457 11.5064 10.8083 10.7006 10.2914C9.89472 9.77449 8.9574 9.49981 8 9.5Z" fill="currentColor"></path>
  </svg>
  <a href="{{ route('association.profile') }}" class="flex items-center {{ request()->routeIs('association.profile') ? 'text-[#E44A19]' : 'text-white' }}">
    Profile
  </a>
</li>

            <li class="flex items-center p-1 font-sans text-sm antialiased font-semibold leading-normal gap-x-2 ">
                    <svg class="text-white w-5 h-5"
                        xmlns="http://www.w3.org/2000/svg" width="24"  height="24"   viewBox="0 0 24 24"  stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">  <path stroke="none" d="M0 0h24v24H0z"/>  <path d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" />  <path d="M7 12h14l-3 -3m0 6l3 -3" /></svg>
                        <a href="{{ route('logout') }}" class="flex items-center text-white">
                    Log out
                    </a>
                    </li>
    </div>
</div>
  @endauth
    </div>

</nav>
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
