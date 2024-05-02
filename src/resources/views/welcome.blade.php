@include('master.header')
@include('master.nav')


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
<div class="max-w-screen-3xl mx-auto sm:p-10 md:p-16">
    <div class="relative z-20 text-center">
        <h2 class="mb-8 lg:text-3xl md:text-2xl font-extrabold leading-tight text-[#272343]">
            What are you looking for?
        </h2>
    </div>
    <div class="grid grid-cols-5 justify-between gap-6">
        @foreach($donations as $donation)
            <a href="{{ route('donation.show', $donation->id) }}" class="mx-auto shadow-md rounded w-full border border-2 border-[#094839] block ">
                <!-- Image and Etat -->
                <div class="relative">
                    <!-- Image -->
                    <div class="w-full h-64 bg-cover bg-center bg-[url('{{ asset('storage/' . $donation->image) }}')]"></div>

                    <div class="absolute bottom-0 top-0 right-0 left-0 opacity-25 bg-white"></div>
                    <!-- Etat -->
                    <div class="absolute bottom-8 left-0 bg-white px-4 py-2 font-bold text-[#272343] text-sm rounded-r-lg">
                        {{ $donation->item_condition }}
                    </div>
                </div>
                <!-- Title and Description -->
                <div class="relative px-6 py-4">
                    <div class="absolute w-full top-0 left-0 translate-y-[-50%] flex items-center justify-center">
                        <img src="{{ $donation->user->image_url ? asset('storage/' . $donation->user->image_url) : 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80' }}" alt="user" class="relative inline-block h-12 w-12 cursor-pointer object-cover object-center rounded-full">
                    </div>
                    <p class="font-semibold text-xl text-[#272343] inline-block hover:text-[#28A5B9] transition duration-500 ease-in-out py-2 pt-4">{{ $donation->title }}</p>
                    <p class="text-gray-900 text-sm truncate">{{ $donation->description }}</p>
                </div>
                <!-- Category and Location -->
                <div class="flex items-center justify-between">
                    <span class="py-2 px-4 focus:outline-none text-md font-semibold text-[#094839] inline-block">{{ $donation->category->name }}</span>
                    <span class="py-2 px-4 text-sm text-gray-900 mr-1 flex flex-row justify-between items-center">
                        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                            <circle cx="12" cy="10" r="3" />
                        </svg>
                        <span class="ml-1 font-semibold text-md">{{ $donation->user->location }}, Morocco</span>
                    </span>
                </div>
                <!-- End Category and Location -->
            </a>
            <!-- End Card -->
        @endforeach
    </div>
    <div class="flex justify-center items-center p-8">
        <a href="{{ route('login') }}" class="p-4 w-25 border text-white bg-[#E44A19] text-bold text-xl">View All Donations</a>
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
          <a href="{{ route('blog.show', $blog->id) }}" class="flex items-center h-10 gap-1  border-2 px-5 py-2 text-xs font-black text-white">
                <span>Read More</span>
                <svg class="w-4" fill="#ffff" viewBox="-8.5 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <title>arrow-top-right</title>
                        <path d="M14.56 9.6c0-0.64-0.44-0.92-0.88-0.92v0h-9.64c-0.48 0-0.84 0.36-0.84 0.84s0.36 0.84 0.84 0.84h7.68l-11.48 11.52c-0.32 0.32-0.32 0.84 0 1.2 0.16 0.16 0.4 0.24 0.6 0.24s0.44-0.080 0.6-0.24l11.44-11.44v7.68c0 0.48 0.36 0.84 0.84 0.84s0.84-0.36 0.84-0.84v-9.72z"></path>
                    </g>
                </svg>
            </a>

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

