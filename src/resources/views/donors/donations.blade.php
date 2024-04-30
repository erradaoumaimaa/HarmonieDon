@include('master.navDonor')
<div class="bg-[#FBF6F4] pt-8">
<div class="text-center p-10 w-[70%] flex justify-between items-center mx-auto rounded-xl bg-cover bg-[url('{{asset('image/hero.jpg')}}')]">
    <h1 class="font-black text-4xl text-white text-start mb-2">Manage Your Donations</h1>
    <form action="">
         <!-- search -->
         <div class="w-50 max-w-xs xl:max-w-lg 2xl:max-w-2xl border border-[#094839] rounded-full hidden xl:flex items-center bg-[#094839]">
                    <select class="bg-[#094839] rounded-full uppercase font-bold text-sm p-4 mr-4 text-white" name="" id=""
                    >
                      <option>All Categories</option>
                    </select>
                    <input class="border-l border-[#094839] bg-[#094839] font-semibold text-sm pl-4 placeholder-white" type="text" placeholder="Search...">
                    <svg class="ml-auto h-5 px-4 text-white" aria-hidden="true" focusable="false" data-prefix="far" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-search fa-w-16 fa-9x"><path fill="currentColor" d="M508.5 468.9L387.1 347.5c-2.3-2.3-5.3-3.5-8.5-3.5h-13.2c31.5-36.5 50.6-84 50.6-136C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c52 0 99.5-19.1 136-50.6v13.2c0 3.2 1.3 6.2 3.5 8.5l121.4 121.4c4.7 4.7 12.3 4.7 17 0l22.6-22.6c4.7-4.7 4.7-12.3 0-17zM208 368c-88.4 0-160-71.6-160-160S119.6 48 208 48s160 71.6 160 160-71.6 160-160 160z"></path></svg>
           </div>
    </form>
</div>

<section class="w-[70%] mx-auto grid grid-cols-1 lg:grid-cols-4 md:grid-cols-2 justify-items-center justify-center gap-24 mt-10 mb-5">
    @foreach($donations as $donation)
    <div class="relative w-64 bg-[#EFF0F3] shadow-md rounded-xl">
        <a href="#">
            <img src="{{ asset('image/cat7.jpg') }}" alt="Product" class="h-72 w-64 object-cover rounded-t-xl" />
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
