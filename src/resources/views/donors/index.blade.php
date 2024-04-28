<!--Nav Donor -->
@include('master.navDonor')


<section class='w-[100vw] flex bg-[#FBF6F4]'>
  <div class="w-full h-full">
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
      <a class="mt-8 xl:mt-12 px-12 py-5 text-lg font-bold text-white inline-block bg-[#E44A19]  shadow-xl border border-transparent "
        href="{{route('donors.create')}}" >Dontae Now <i class="fa-solid fa-arrow-right text-white"> </i></a>
      </div>

    </div>

    <div class="pb-10 overflow-hidden md:p-10 lg:p-0 sm:pb-0">
      <img id="heroImg1" class="transition-all duration-300 ease-in-out  lg:w-full sm:mx-auto sm:w-4/6 sm:pb-12 lg:pb-0" *
      src="{{ asset('image/hero.png') }}" alt="Awesome hero page image" width="500" height="488"/>
    </div>
  </div>

<!--END Hero Section -->

   <!--separateure Yellow-->
  <div class="w-full h-24 mb-16  bg-[#FFE353] flex gap-4 text-[#272343] text-3xl font-bold items-center justify-around">
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
<!--Blog Section -->
<div class="grid h-full w-[80%] grid-cols-3 gap-8 mx-auto">
<h1 class=" col-span-3 text-center lg:text-4xl md:text-2xl font-extrabold leading-tight text-[#272343]">Our Recent Blog</h1>
      <!-- CARD START -->
      <div class="relative h-80 rounded-xl bg-[url('https://images.unsplash.com/photo-1713439242060-1bb7de4214ac?q=80&w=1935&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')] bg-cover bg-center">
        <div class="absolute flex h-full w-full flex-col justify-end gap-1 rounded-xl bg-neutral-800 bg-opacity-50 p-4">
          <p class="text-sm font-black text-white border-black pl-1">23 March 2021</p>
          <h1 class="text-5xl font-black text-white mb-8">Lorem Ipsum Dolor Sit Amut</h1>
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
              <div class="h-8 w-8  bg-[url('https://images.unsplash.com/photo-1599566150163-29194dcaad36?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTl8fHBlcnNvbnxlbnwwfHwwfHx8MA%3D%3D')] bg-cover bg-center"></div>
              <p class="text-black text-xs font-bold px-1">John Mccan</p>
            </div>
          </div>
        </div>
      </div>
      <!-- CARD END -->
      <!-- CARD START -->
      <div class="relative h-80 rounded-xl bg-[url('https://images.unsplash.com/photo-1713439242060-1bb7de4214ac?q=80&w=1935&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')] bg-cover bg-center">
        <div class="absolute flex h-full w-full flex-col justify-end gap-1 rounded-xl bg-neutral-800 bg-opacity-50 p-4">
          <p class="text-sm font-black text-white border-black pl-1">23 March 2021</p>
          <h1 class="text-5xl font-black text-white mb-8">Lorem Ipsum Dolor Sit Amut</h1>
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
              <div class="h-8 w-8  bg-[url('https://images.unsplash.com/photo-1599566150163-29194dcaad36?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTl8fHBlcnNvbnxlbnwwfHwwfHx8MA%3D%3D')] bg-cover bg-center"></div>
              <p class="text-black text-xs font-bold px-1">John Mccan</p>
            </div>
          </div>
        </div>
      </div>
      <!-- CARD END -->
      <!-- CARD START -->
      <div class="relative h-80 rounded-xl bg-[url('https://images.unsplash.com/photo-1713439242060-1bb7de4214ac?q=80&w=1935&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')] bg-cover bg-center">
        <div class="absolute flex h-full w-full flex-col justify-end gap-1 rounded-xl bg-neutral-800 bg-opacity-50 p-4">
          <p class="text-sm font-black text-white border-black pl-1">23 March 2021</p>
          <h1 class="text-5xl font-black text-white mb-8">Lorem Ipsum Dolor Sit Amut</h1>
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
              <div class="h-8 w-8  bg-[url('https://images.unsplash.com/photo-1599566150163-29194dcaad36?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTl8fHBlcnNvbnxlbnwwfHwwfHx8MA%3D%3D')] bg-cover bg-center"></div>
              <p class="text-black text-xs font-bold px-1">John Mccan</p>
            </div>
          </div>
        </div>
      </div>
      <!-- CARD END -->
      <!-- CARD START -->
      <div class="relative h-80 rounded-xl bg-[url('https://images.unsplash.com/photo-1713439242060-1bb7de4214ac?q=80&w=1935&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')] bg-cover bg-center">
        <div class="absolute flex h-full w-full flex-col justify-end gap-1 rounded-xl bg-neutral-800 bg-opacity-50 p-4">
          <p class="text-sm font-black text-white border-black pl-1">23 March 2021</p>
          <h1 class="text-5xl font-black text-white mb-8">Lorem Ipsum Dolor Sit Amut</h1>
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
              <div class="h-8 w-8  bg-[url('https://images.unsplash.com/photo-1599566150163-29194dcaad36?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTl8fHBlcnNvbnxlbnwwfHwwfHx8MA%3D%3D')] bg-cover bg-center"></div>
              <p class="text-black text-xs font-bold px-1">John Mccan</p>
            </div>
          </div>
        </div>
      </div>
      <!-- CARD END -->
       <!-- CARD START -->
       <div class="relative h-80 rounded-xl bg-[url('https://images.unsplash.com/photo-1713439242060-1bb7de4214ac?q=80&w=1935&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')] bg-cover bg-center">
        <div class="absolute flex h-full w-full flex-col justify-end gap-1 rounded-xl bg-neutral-800 bg-opacity-50 p-4">
          <p class="text-sm font-black text-white border-black pl-1">23 March 2021</p>
          <h1 class="text-5xl font-black text-white mb-8">Lorem Ipsum Dolor Sit Amut</h1>
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
              <div class="h-8 w-8  bg-[url('https://images.unsplash.com/photo-1599566150163-29194dcaad36?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTl8fHBlcnNvbnxlbnwwfHwwfHx8MA%3D%3D')] bg-cover bg-center"></div>
              <p class="text-black text-xs font-bold px-1">John Mccan</p>
            </div>
          </div>
        </div>
      </div>
      <!-- CARD END -->
       <!-- CARD START -->
       <div class="relative h-80 rounded-xl bg-[url('https://images.unsplash.com/photo-1713439242060-1bb7de4214ac?q=80&w=1935&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')] bg-cover bg-center">
        <div class="absolute flex h-full w-full flex-col justify-end gap-1 rounded-xl bg-neutral-800 bg-opacity-50 p-4">
          <p class="text-sm font-black text-white border-black pl-1">23 March 2021</p>
          <h1 class="text-5xl font-black text-white mb-8">Lorem Ipsum Dolor Sit Amut</h1>
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
              <div class="h-8 w-8  bg-[url('https://images.unsplash.com/photo-1599566150163-29194dcaad36?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTl8fHBlcnNvbnxlbnwwfHwwfHx8MA%3D%3D')] bg-cover bg-center"></div>
              <p class="text-black text-xs font-bold px-1">John Mccan</p>
            </div>
          </div>
        </div>
      </div>
      <!-- CARD END -->
    </div>
</div>
<!--END Blog Section -->
  </div>

</section>
<footer class="mt-20 xl:mt-32 mx-auto w-full relative text-center  bg-[#094839] text-white">

    <div class="px-6 py-8 md:py-14 xl:pt-20 xl:pb-12">
        <h2 class="font-bold text-3xl xl:text-4xl  text-center">
            Ready to Be part of our community at <span class="text-[#E44A19]">donor</span><span class="text-white">box</span> <br>make a difference today!

        </h2>
        <a class="mt-8 xl:mt-12 px-12 py-5 text-lg font-bold  inline-block bg-[#E44A19]  shadow-xl border border-transparent "
        href="{{route('donors.index')}}" >Get
            started  <i class="fa-solid fa-arrow-right text-white"> </i></a>

    </div>

</footer>
