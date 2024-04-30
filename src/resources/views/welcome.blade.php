@include('master.header')

<nav class="block w-full max-w-screen-full px-4 py-2 mx-auto text-white bg-[#094839] border-b-4 border-[#E44A19]  backdrop-blur-2xl backdrop-saturate-200 lg:px-8 lg:py-4">
  <div class="container flex items-center justify-between mx-auto ">
    <!--logo-->
    <a href="{{ route('donors.index') }}"
      class=" mr-4 block cursor-pointer py-1.5 font-mono  font-bold  text-4xl leading-relaxed antialiased">
        <span class="text-[#E44A19]">donor</span><span class="text-white">box</span>
    </a>
    <!--end logo-->
    <div class="hidden lg:block">
      <!-- buttons  --->
    <div class="f-container f-wrap-nowrap f-align-center f-content-end">
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
    <li class="flex items-center p-1 font-sans text-sm antialiased font-semibold leading-normal gap-x-2 {{ request()->routeIs('donors.profile') ? 'text-[#E44A19]' : 'text-white' }} cursor-pointer active">
  <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg" class="{{ request()->routeIs('donors.profile') ? 'text-[#E44A19]' : 'text-white' }}">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M16 8.5C16 10.6217 15.1571 12.6566 13.6569 14.1569C12.1566 15.6571 10.1217 16.5 8 16.5C5.87827 16.5 3.84344 15.6571 2.34315 14.1569C0.842855 12.6566 0 10.6217 0 8.5C0 6.37827 0.842855 4.34344 2.34315 2.84315C3.84344 1.34285 5.87827 0.5 8 0.5C10.1217 0.5 12.1566 1.34285 13.6569 2.84315C15.1571 4.34344 16 6.37827 16 8.5ZM10 5.5C10 6.03043 9.78929 6.53914 9.41421 6.91421C9.03914 7.28929 8.53043 7.5 8 7.5C7.46957 7.5 6.96086 7.28929 6.58579 6.91421C6.21071 6.53914 6 6.03043 6 5.5C6 4.96957 6.21071 4.46086 6.58579 4.08579C6.96086 3.71071 7.46957 3.5 8 3.5C8.53043 3.5 9.03914 3.71071 9.41421 4.08579C9.78929 4.46086 10 4.96957 10 5.5ZM8 9.5C7.0426 9.49981 6.10528 9.77449 5.29942 10.2914C4.49356 10.8083 3.85304 11.5457 3.454 12.416C4.01668 13.0706 4.71427 13.5958 5.49894 13.9555C6.28362 14.3152 7.13681 14.5009 8 14.5C8.86319 14.5009 9.71638 14.3152 10.5011 13.9555C11.2857 13.5958 11.9833 13.0706 12.546 12.416C12.147 11.5457 11.5064 10.8083 10.7006 10.2914C9.89472 9.77449 8.9574 9.49981 8 9.5Z" fill="currentColor"></path>
  </svg>
  <a href="{{ route('donors.profile') }}" class="flex items-center {{ request()->routeIs('donors.profile') ? 'text-[#E44A19]' : 'text-white' }}">
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
  @guest
    <!-- buttons login  --->
    <a href="{{ route('login') }}" class=" text-md font-bold  px-4 py-2  mr-2 text-white bg-[#E44A19] ">
               Login </a>
         <!-- buttons Register --->
            <a href="{{route('register')}}" class="text-md font-bold mr-4  hover: hover:text-[#E44A19] hover:py-2 px-4 text-white">
                <i class="fa fa-user fa-lg"></i>
                <span> Create account</span></a>
         <div class="sm:hidden cursor-pointer">
             <svg class="w-6 h-6"
                xmlns="http://www.w3.org/2000/svg" width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <line x1="3" y1="12" x2="21" y2="12" />  <line x1="3" y1="6" x2="21" y2="6" />  <line x1="3" y1="18" x2="21" y2="18" /></svg>
          </div>
  @endguest

  </div>

</nav>


<body class="bg-[#FBF6F4]">
<!--hero Section -->
<div class="items-center w-10/12 grid-cols-2 mx-auto overflow-x-hidden lg:grid md:py-14 lg:py-24 xl:py-14 lg:mt-3 xl:mt-5" data-aos="fade-right" data-aos-duration="800">
    <div class="pr-2 md:mb-14 py-14 md:py-0">
      <h1 class="text-7xl  font-bold text-[#272343] xl:text-5xl lg:text-3xl"><span class="block w-full">Donating is an investment,</span>
        <span class="block w-full text-[#E44A19]"> that helps you earn </span>
        <span class="block w-full text-[#E44A19]">Smiles.</span>
    </h1>
      <p class=" py-4 text-lg text-[#272343] 2xl:py-8 md:py-6 2xl:pr-5">
        Where there is charity and wisdom, there is neither death nor numbness. Promise that you will contribute to society through charity.
    </p>
      <div class="mt-4">
      <a class="mt-8 xl:mt-12 px-12 py-5 text-lg font-blod text-white inline-block bg-[#E44A19]  shadow-xl border border-transparent "
        href="{{route('login')}}" >Get
            started  <i class="fa-solid fa-arrow-right text-white"> </i></a>
      </div>

    </div>

    <div class="pb-10 overflow-hidden md:p-10 lg:p-0 sm:pb-0">
      <img id="heroImg1" class="transition-all duration-300 ease-in-out  lg:w-full sm:mx-auto sm:w-4/6 sm:pb-12 lg:pb-0" *
      src="{{ asset('image/hero.png') }}" alt="Awesome hero page image" width="500" height="488"/>
    </div>
  </div>

<!--END Hero Section -->

<!--separateure Yellow-->
  <div class="w-full h-24  bg-[#FFE353] flex gap-4 text-[#272343] text-3xl font-bold items-center justify-around">
            <p><svg class="text-[#272343] w-10 h-10"
            xmlns="http://www.w3.org/2000/svg" width="24"  height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
            </svg></p>
            <p>Donate</p>
            <p><svg class="text-[#272343] w-10 h-10"
            xmlns="http://www.w3.org/2000/svg" width="24"  height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
            </svg></p>
            <p>Support</p>
            <p><svg class="text-[#272343] w-10 h-10"
            xmlns="http://www.w3.org/2000/svg" width="24"  height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
            </svg></p>
            <p>See Smile</p>
            <p><svg class="text-[#272343] w-10 h-10"
            xmlns="http://www.w3.org/2000/svg" width="24"  height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
            </svg></p>

    </div>
<!--END separateure -->

<!-- Section dons -->
<div class="max-w-screen-3xl mx-auto  sm:p-10 md:p-16 ">
    <div class="relative z-20 text-center">
        <h2 class="mb-8  lg:text-3xl md:text-2xl font-extrabold leading-tight text-[#272343]">
            What are you looking for?
          </h2>

    </div>
    <div class="grid grid-cols-5 justify-between gap-6">
        @foreach($donations as $donation)
            <div class="mx-auto shadow-md rounded w-full border border-2 border-[#094839]">
                <!--Image and etat-->
                <div class="relative">
                    <!--image -->
                        <img class="w-full "
                            src="{{ asset('storage/' . $donation->image) }}"
                            alt="donnation">
                            <div
                            class=" absolute bottom-0 top-0 right-0 left-0
                            opacity-25  ">
                        </div>
                        <!--Etat -->
                        <div
                            class="absolute bottom-8 left-0 bg-white px-4 py-2 font-bold text-[#272343] text-sm rounded-r-lg">
                            {{ $donation->item_condition }}
                        </div>
                </div>
                <!--end Image -->
                <!--title and descp-->
                <div class="relative px-6 py-4">
                <div class="absolute w-full top-0 left-0 translate-y-[-50%] flex items-center justify-center">
                <img
                src="{{ $donation->user->image_url ? asset('storage/' . $donation->user->image_url) : 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80' }}"
                alt="user"

                    class="relative inline-block h-12 w-12 cursor-pointer  object-cover object-center rounded-full"
                    />
                    </div>

                <p class="font-semibold text-xl text-[#272343] inline-block hover:text-[#28A5B9] transition duration-500 ease-in-out py-2 pt-4">{{ $donation->title }}</a>
                <p class="text-gray-900 text-sm">
                    {{ $donation->title }}
                </p>
                </div>
                <!--Category and location -->
                <div class="flex  items-center justify-between">
                    <span class="py-2 px-4
                    focus:outline-none text-md font-semibold text-[#094839] inline-block">{{ $donation->category->name }}</span>
                    <span
                    class="py-2 px-4 text-sm  text-gray-900 mr-1 flex flex-row justify-between items-center">
                        <svg class="w-4 h-4"
                        xmlns="http://www.w3.org/2000/svg" width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />  <circle cx="12" cy="10" r="3" /></svg>
                        <span class="ml-1 font-semiblod text-md">Safi</span></span>
                </div>

                <!-- end Category and location -->
            </div>
        <!--end Card-->
        @endforeach

    </div>
    <div class="flex justify-center items-center p-8">
            <a  href="{{ route('login') }}"class="p-4 w-25 border text-white bg-[#E44A19] text-bold text-xl">View All Donations</a>
    </div>
</div>

<!-- END Section dons -->
<!--separateure Green-->
    <div class="w-full h-24 mb-16 bg-[#094839] flex gap-4 text-white text-3xl font-bold items-center justify-around">
            <p><svg class="text-white w-10 h-10"
            xmlns="http://www.w3.org/2000/svg" width="24"  height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
            </svg></p>
            <p>Donate</p>
            <p><svg class="text-white w-10 h-10"
            xmlns="http://www.w3.org/2000/svg" width="24"  height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
            </svg></p>
            <p>Support</p>
            <p><svg class="text-white w-10 h-10"
            xmlns="http://www.w3.org/2000/svg" width="24"  height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
            </svg></p>
            <p>See Smile</p>
            <p><svg class="text-white w-10 h-10"
            xmlns="http://www.w3.org/2000/svg" width="24"  height="24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
            </svg></p>

    </div>
<!--END separateure -->

<!--Blog Section -->
 <div class="grid h-full w-[80%] grid-cols-3 gap-8 mx-auto">
    <h1 class=" col-span-3 text-center lg:text-3xl md:text-2xl font-extrabold leading-tight text-[#272343]">Our Recent Blog</h1>
      <!-- CARD START -->
      @foreach($blogs as $blog)
      <div class="relative h-80 rounded-xl bg-[url({{ asset('storage/' . $blog->image) }})] bg-cover bg-center">
        <div class="absolute flex h-full w-full flex-col justify-end gap-1 rounded-xl bg-neutral-800 bg-opacity-50 p-4">
          <p class="text-sm font-black text-white border-black pl-1">{{ $blog->created_at->format('d F Y') }}</p>
          <h1 class="text-5xl font-black text-white mb-8">{{ $blog->title }}</h1>
          <div class="flex items-center gap-6">
            <button class="flex items-center h-10 gap-1  border-2 px-5 py-2 text-xs font-black text-white">
              <span>Read More</span>
              <svg class="w-4" fill="#ffff" viewBox="-8.5 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                  <title>arrow-top-right</title>
                  <path d="M14.56 9.6c0-0.64-0.44-0.92-0.88-0.92v0h-9.64c-0.48 0-0.84 0.36-0.84 0.84s0.36 0.84 0.84 0.84h7.68l-11.48 11.52c-0.32 0.32-0.32 0.84 0 1.2 0.16 0.16 0.4 0.24 0.6 0.24s0.44-0.080 0.6-0.24l11.44-11.44v7.68c0 0.48 0.36 0.84 0.84 0.84s0.84-0.36 0.84-0.84v-9.72z"></path>
                </g>
              </svg>
            </button>
            <div class="h-10 flex items-center  bg-white bg-opacity-90 gap-2 p-2">
            <div class="h-8 w-8 bg-cover bg-center" style="background-image: url('{{ asset('storage/' . $blog->user->image_url) }}')"></div>
              <p class="text-black text-xs font-bold px-1">{{$blog->user->name}}</p>
            </div>
          </div>
        </div>
      </div>
      @endforeach
      <!-- CARD END -->

    </div>
</div>
<!--END Blog Section -->
<footer class="mt-20 xl:mt-32 mx-auto w-full relative text-center  bg-[#094839] text-white">

    <div class="px-6 py-8 md:py-14 xl:pt-20 xl:pb-12">
        <h2 class="font-bold text-3xl xl:text-4xl  text-center">
            Ready to Be part of our community at <span class="text-[#E44A19]">donor</span><span class="text-white">box</span> <br>make a difference today!

        </h2>
        <a class="mt-8 xl:mt-12 px-12 py-5 text-lg font-blod  inline-block bg-[#E44A19]  shadow-xl border border-transparent "
        href="{{route('login')}}" >Get
            started  <i class="fa-solid fa-arrow-right text-white"> </i></a>

    </div>

</footer>

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

