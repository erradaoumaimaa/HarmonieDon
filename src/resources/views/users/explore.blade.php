@include('master.nav');

<div class="bg-[#FBF6F4] pt-8">
<div class="text-center p-10 w-[70%] flex justify-between items-center mx-auto rounded-xl bg-cover" style="background-image: url('{{ asset('image/hero.jpg') }}')">
    <h1 class="font-black text-4xl text-white text-start mb-2">Manage Your Donations</h1>
    <form action="{{ route('users.explore') }}" method="GET" class="flex flex-col md:flex-row gap-3">
        <div class="flex">
            <input type="text" placeholder="Search" name="q" class="w-full md:w-80 px-3 h-10 rounded-l border-2 border-[#094839] focus:outline-none focus:border-[#094839]">
            <button type="submit" class="bg-[#094839] text-white rounded-r px-2 md:px-3 py-0 md:py-1">Search</button>
        </div>
        <form action="{{ route('users.explore') }}" method="GET" class="flex flex-col md:flex-row gap-3">
    <select id="category" name="category" class="w-full h-10 border-2 border-[#094839] focus:outline-none focus:border-[#094839] text-[#094839] rounded px-2 md:px-3 py-0 md:py-1 tracking-wider">
        <option value="">All Categories</option>
        @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
    <button type="submit" class="bg-[#094839] text-white rounded px-2 md:px-3 py-0 md:py-1">Filter</button>
</form>

</form>
</div>
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

                    <div class="absolute bottom-0 top-0 right-0 left-0 opacity-25 "></div>
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
    @if ($donations->lastPage() > 1)
        <ul class="inline-flex">
            <li>
                <a href="{{ $donations->url(1) }}" class="h-8 px-5 text-green font-bold transition-colors duration-150 bg-white border border-r-0 border-[#094839] rounded-l-lg focus:shadow-outline">First</a>
            </li>
            @for ($i = 1; $i <= $donations->lastPage(); $i++)
                <li>
                    <a href="{{ $donations->url($i) }}" class="h-8 px-5 @if ($i === $donations->currentPage()) text-grenn bg-[#E44A19] @else text-black bg-[#094839] @endif font-bold transition-colors duration-150 border border-r-0 border-[#094839] focus:shadow-outline">{{ $i }}</a>
                </li>
            @endfor
            <li>
                <a href="{{ $donations->nextPageUrl() }}" class="h-8 px-5 text-black font-bold transition-colors duration-150 bg-white border border-[#094839] rounded-r-lg focus:shadow-outline">Next</a>
            </li>
        </ul>
    @endif
</div>


</div>


<!-- END Section dons -->
