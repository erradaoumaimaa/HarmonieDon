<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>

            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">

            <title>Site de don d'objets</title>

            <!-- Fonts -->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
            <script src="https://kit.fontawesome.com/6e1faf1eda.js" crossorigin="anonymous"></script>

            <!-- Styles -->
            <script src="https://cdn.tailwindcss.com"></script>

            {{-- <script>
                tailwind.config = {
                    theme: {
                        extend: {
                            colors: {

                                   bleu:'#001524',
                                   bleuu: '#15616D',
                                   white:'#FFECD1',
                                   jaune:'#FF7D00',
                                   marron :'#78290F',
                                   red:'#a10702',
                                   orange:'#ff4000',
                                   redd:'#d00000',

                            }
                        }
                    }
                }
            </script> --}}

            <!-- JS -->

        </head>

        <body>
            <!-- Navbar : lg/xl -->
<header class="header sticky top-0 flex items-center justify-between px-16 p-4 border-b-2 border-[#BD5814]">
    <!-- logo -->
    <h1 class="pl-24 w-3/12 text-[#001524] font-semibold font-Roboto text-5xl">
        <a href="#">
            D<i class="fa-solid fa-heart fa-xs" style="color: #D00000;"></i>NATION
        </a>
    </h1>

    <!-- navigation -->
    <nav class="nav font-semibold text-lg">
          <!-- search -->
          <div class="w-50 max-w-xs xl:max-w-lg 2xl:max-w-2xl border rounded-full hidden xl:flex items-center"style="background-color:#F4F4F4;  border-style:solid; border-color: #1B2352;">
                    <select class="bg-transparent uppercase font-bold text-sm p-4 mr-4" name="" id="" style="color: #1B2352;">
                      <option>Toutes les catégories</option>
                    </select>
                    <input class="border-l border-gray-900 bg-transparent font-semibold text-sm pl-4" type="text" placeholder="Rechercher un don...">
                    <svg class="ml-auto h-5 px-4 text-gray-900" aria-hidden="true" focusable="false" data-prefix="far" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-search fa-w-16 fa-9x"><path fill="currentColor" d="M508.5 468.9L387.1 347.5c-2.3-2.3-5.3-3.5-8.5-3.5h-13.2c31.5-36.5 50.6-84 50.6-136C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c52 0 99.5-19.1 136-50.6v13.2c0 3.2 1.3 6.2 3.5 8.5l121.4 121.4c4.7 4.7 12.3 4.7 17 0l22.6-22.6c4.7-4.7 4.7-12.3 0-17zM208 368c-88.4 0-160-71.6-160-160S119.6 48 208 48s160 71.6 160 160-71.6 160-160 160z"></path></svg>
           </div>
    </nav>

    <!-- buttons --->
    <div class="f-container f-wrap-nowrap f-align-center f-content-end">
            <a href="#" class=" text-sm font-semibold  px-4 py-2 rounded-full mr-2 text-white" style="background-color:#BD5814">
                <i class="fa fa-plus"></i>
                DONNER</a>
            <a href="#" class="text-sm font-semibold mr-4 text-white" style="color: #1B2352;">
                <i class="fa fa-user fa-lg"></i>
                <span> Me connecter</span></a>


         <div class="sm:hidden cursor-pointer">
             <svg class="w-6 h-6"
                xmlns="http://www.w3.org/2000/svg" width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round">  <line x1="3" y1="12" x2="21" y2="12" />  <line x1="3" y1="6" x2="21" y2="6" />  <line x1="3" y1="18" x2="21" y2="18" /></svg>
          </div>
  </div>

</header>
<!--Section 2-->
<div class="items-center w-10/12 grid-cols-2 mx-auto overflow-x-hidden lg:grid md:py-14 lg:py-24 xl:py-14 lg:mt-3 xl:mt-5" data-aos="fade-right" data-aos-duration="800">
    <div class="pr-2 md:mb-14 py-14 md:py-0">
      <h1 class="text-7xl font-mono font-bold text-[#001524] xl:text-5xl lg:text-3xl"><span class="block w-full">Charity is Investments,</span>
        <span class="block w-full"> helps you to earn </span>
        <span>Smiles</span>
    </h1>
      <p class="font-serif py-4 text-lg text-[#001524] 2xl:py-8 md:py-6 2xl:pr-5">
        Where there is charity and wisdom, There is neither dead nor
numbness. Promise that you will contribute to the society by charity.
    </p>
      <div class="mt-4">
        <a href="#" class="px-5 py-3 font-serif font-semiblod text-xl tracking-wider text-white bg-[#BD5814] rounded-full md:px-8 "><i class="fa fa-plus"> </i><span> DONATE NOW</span> </a>
      </div>
    </div>

    <div class="pb-10 overflow-hidden md:p-10 lg:p-0 sm:pb-0">
      <img id="heroImg1" class="transition-all duration-300 ease-in-out hover:scale-105 lg:w-full sm:mx-auto sm:w-4/6 sm:pb-12 lg:pb-0" *
      src="{{ asset('image/epic2.jpg') }}" alt="Awesome hero page image" width="500" height="488"/>
    </div>
  </div>

  <!--Section categories-->
<!-- source: https://redpixelthemes.com/ -->

<div class="container relative z-40 mx-auto mt-12">
    <h2 class="mb-8 text-3xl font-extrabold leading-tight text-gray-900">Catégories</h2>

    <div class="flex flex-wrap justify-center mx-auto lg:w-full md:w-5/6 xl:shadow-small-blue">

        <a href="#" class="block w-1/2  text-center border lg:w-1/4 ">
            <div>
                <img src="{{ asset('image/clothes.svg') }}" class="block mx-auto ">

                <p class="pt-4 text-sm font-medium capitalize font-body text-green-900 lg:text-lg md:text-base md:pt-6">
                    Vêtements
                </p>
            </div>
        </a>

        <a href="#" class="block w-1/2  text-center border lg:w-1/4">
            <div>
                <img src="{{ asset('image/food2.svg') }}" class="block mx-auto">

                <p class="pt-4 text-sm font-medium capitalize font-body text-green-900 lg:text-lg md:text-base md:pt-6">
                    Alimentaire
                </p>
            </div>
        </a>

        <a href="#" class="block w-1/2  text-center border lg:w-1/4">
            <div>
                <img src="{{ asset('image/home.svg') }}" class="block mx-auto">

                <p class="pt-4 text-sm font-medium capitalize font-body text-green-900 lg:text-lg md:text-base md:pt-6">
                    Meubles
                </p>
            </div>
        </a>

        <a href="#" class="block w-1/2  text-center border lg:w-1/4">
            <div>
                <img src="{{ asset('image/electro.svg') }}" class="block mx-auto">

                <p class="pt-4 text-sm font-medium capitalize font-body text-green-900 lg:text-lg md:text-base md:pt-6">
                    Électroménager
                </p>
            </div>
        </a>

        <a href="#" class="block w-1/2  text-center border lg:w-1/4">
            <div>
                <img src="{{ asset('image/Puericulture.svg') }}" class="block mx-auto">

                <p class="pt-4 text-sm font-medium capitalize font-body text-green-900 lg:text-lg md:text-base md:pt-6">
                    Puériculture
                </p>
            </div>
        </a>

        <a href="#" class="block w-1/2  text-center border lg:w-1/4">
            <div>
                <img src="{{ asset('image/media.svg') }}" class="block mx-auto">

                <p class="pt-4 text-sm font-medium capitalize font-body text-green-900 lg:text-lg md:text-base md:pt-6">
                    Multimédia et High tech
                </p>
            </div>
        </a>

        <a href="#" class="block w-1/2  text-center border lg:w-1/4">
            <div>
                <img src="{{ asset('image/hand.svg') }}" class="block mx-auto">

                <p class="pt-4 text-sm font-medium capitalize font-body text-green-900 lg:text-lg md:text-base md:pt-6">
                   Matériel spécialisé
                </p>
            </div>
        </a>

        <a href="#" class="block w-1/2  text-center border lg:w-1/4">
            <div>
                <img src="{{ asset('image/book.svg') }}" class="block mx-auto w-50 h-50">

                <p class="pt-4 text-sm font-medium capitalize font-body text-green-900 lg:text-lg md:text-base md:pt-6">
                   Loisirs, jeux et culture
                </p>
            </div>
        </a>

    </div>

</div>
<!-- Section dons -->

 <section class="h-screen w-screen p-8">
    <h1 class="text-center font-bold text-2xl ">Responsive Grid Layout </h1>

    <div class="grid justify-center md:grid-cols-2 lg:grid-cols-3 gap-5 lg:gap-7 my-10">
        <!-- Card 1 -->
        <div class="bg-white rounded-lg border shadow-md max-w-xs md:max-w-none overflow-hidden">
            <img class="h-56 lg:h-60 w-full object-cover" src="{{ asset('image/don1.jpg') }}" alt="" />
            <div class="p-3">
                <span class="text-sm text-primary">November 19, 2022</span>
                <h3 class="font-semibold text-xl leading-6 text-gray-700 my-2">
                International Women's Day 2022: Date, history, significance, theme this year
                </h3>
                <p class="paragraph-normal text-gray-600">
                Happy Women's Day 2022: Read on to know all about the history and significance...
                </p>
                <a class="mt-3 block" href="#">Read More >></a>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-white rounded-lg border shadow-md max-w-xs md:max-w-none overflow-hidden">
            <img class="h-56 lg:h-60 w-full object-cover" src="{{ asset('image/tv.jpg') }}" alt="" />
            <div class="p-3">
                <span class="text-sm text-primary">November 19, 2022</span>
                <h3 class="font-semibold text-xl leading-6 text-gray-700 my-2">
                International Women's Day 2022: Date, history, significance, theme this year
                </h3>
                <p class="paragraph-normal text-gray-600">
                Happy Women's Day 2022: Read on to know all about the history and significance...
                </p>
                <a class="mt-3 block" href="#">Read More >></a>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="bg-white rounded-lg border shadow-md max-w-xs md:max-w-none overflow-hidden">
            <img class="h-56 lg:h-60 w-full object-cover" src="{{ asset('image/don2.jpg') }}" alt="" />
            <div class="p-3">
                <span class="text-sm text-primary">November 19, 2022</span>
                <h3 class="font-semibold text-xl leading-6 text-gray-700 my-2">
                International Women's Day 2022: Date, history, significance, theme this year
                </h3>
                <p class="paragraph-normal text-gray-600">
                Happy Women's Day 2022: Read on to know all about the history and significance...
                </p>
                <a class="mt-3 block" href="#">Read More >></a>
            </div>
        </div>

        <!-- Card 4 -->
        <div class="bg-white rounded-lg border shadow-md max-w-xs md:max-w-none overflow-hidden">
            <img class="h-56 lg:h-60 w-full object-cover" src="{{ asset('image/don3.jpg') }}" alt="" />
            <div class="p-3">
                <span class="text-sm text-primary">November 19, 2022</span>
                <h3 class="font-semibold text-xl leading-6 text-gray-700 my-2">
                International Women's Day 2022: Date, history, significance, theme this year
                </h3>
                <p class="paragraph-normal text-gray-600">
                Happy Women's Day 2022: Read on to know all about the history and significance...
                </p>
                <a class="mt-3 block" href="#">Read More >></a>
            </div>
        </div>

        <!-- Card 5 -->
        <div class="bg-white rounded-lg border shadow-md max-w-xs md:max-w-none overflow-hidden">
            <img class="h-56 lg:h-60 w-full object-cover" src="{{ asset('image/don4.jpg') }}" alt="" />
            <div class="p-3">
                <span class="text-sm text-primary">November 19, 2022</span>
                <h3 class="font-semibold text-xl leading-6 text-gray-700 my-2">
                International Women's Day 2022: Date, history, significance, theme this year
                </h3>
                <p class="paragraph-normal text-gray-600">
                Happy Women's Day 2022: Read on to know all about the history and significance...
                </p>
                <a class="mt-3 block" href="#">Read More >></a>
            </div>
        </div>

        <!-- Card 6 -->
        <div class="bg-white rounded-lg border shadow-md max-w-xs md:max-w-none overflow-hidden">
            <img class="h-56 lg:h-60 w-full object-cover" src="{{ asset('image/don4.jpg') }}" alt="" />

            <div class="p-3">
                <span class="text-sm text-primary">November 19, 2022</span>
                <h3 class="font-semibold text-xl leading-6 text-gray-700 my-2">
                International Women's Day 2022: Date, history, significance, theme this year
                </h3>
                <p class="paragraph-normal text-gray-600">
                Happy Women's Day 2022: Read on to know all about the history and significance...
                </p>
                <a class="mt-3 block" href="#">Read More >></a>
            </div>
        </div>
    </div>
</section>
