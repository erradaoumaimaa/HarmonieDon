@include('master.nav')
<div class="bg-[#FBF6F4] pt-8">
<div class="text-center p-10 w-[70%] flex justify-between items-center mx-auto rounded-xl bg-cover" style="background-image: url('{{ asset('image/hero.jpg') }}')">
    <h1 class="font-black text-4xl text-white text-start mb-2">Manage Your Donations</h1>
    <form action="{{ route('donors.donations') }}" method="GET" class="flex flex-col md:flex-row gap-3">
        <div class="flex">
            <input type="text" placeholder="Search" name="q" class="w-full md:w-80 px-3 h-10 rounded-l border-2 border-[#094839] focus:outline-none focus:border-[#094839]">
            <button type="submit" class="bg-[#094839] text-white rounded-r px-2 md:px-3 py-0 md:py-1">Search</button>
        </div>
        <form action="{{ route('donors.donations') }}" method="GET" class="flex flex-col md:flex-row gap-3">
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


<section class="w-[70%] mx-auto grid grid-cols-1 lg:grid-cols-4 md:grid-cols-2 justify-items-center justify-center gap-24 mt-10 mb-5">
    @foreach($donations as $donation)
    <div class="relative w-64 bg-[#EFF0F3] shadow-md rounded-xl">
        <a href="#">
            <img src="{{ asset('storage/' . $donation->image) }}" alt="Product" class="h-72 w-64 object-cover rounded-t-xl" />
            <div class="relative px-4 py-3">
                <div class="absolute w-full top-0 left-0 translate-y-[-50%] flex items-center justify-center">
                    <p class="p-2 bg-[#E44A19] text-white px-4 rounded-lg">{{$donation->status}}</p>
                </div>
                <p class="text-[#2D3E4E] mr-3 uppercase text-md font-bold mt-8"> {{ $donation->category->name }}</p>
                <p class="text-lg font-bold text-[#272343] truncate block capitalize m-4">{{ $donation->title }}</p>
            </div>
        </a>
        <div class="absolute top-0 mx-auto flex flex-col translate-x-[-125%] p-2 bg-[#094839] gap-4 justify-center rounded-xl">
            <!-- Show -->
            <a href="#">
                <svg class="text-white w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>
                    <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/>
                </svg>
            </a>
            <!-- Update -->
            <a href="{{ route('donors.edit', $donation->id) }}">
                <svg class="text-white w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/>
                </svg>
            </a>
            <!-- Delete -->
            <a href="#">
                <svg class="text-white w-6 h-6" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                </svg>
            </a>
        </div>
    </div>
    @endforeach
</section>
</div>
