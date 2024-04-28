@include('master.navDonor')

<div class="h-full bg-[#FBF6F4] p-8">
        <div class="bg-green-900 bg-opacity-10 rounded-lg shadow-xl pb-8">

            <div class="w-full h-[250px]">
                <div  class="w-full h-full rounded-tl-lg rounded-tr-lg bg-cover bg-[url('{{asset('image/test.jpg')}}')]"></div>
            </div>
            <div class="flex flex-col items-center -mt-20">
                <img src="{{asset('image/nounou.jpg')}}" class="w-40 border-4 border-green-900  rounded-full">
                <div class="flex items-center space-x-2 mt-2">
                    <p class="text-2xl font-bold text-[#272343]">oumaima</p>
                </div>
                <p class="text-sm  text-[#272343]"> </p>
            </div>
            <div class="flex-1 grid grid-cols-4 lg:items-end items-center px-8 mt-2">
                <div></div>
                <p class="mt-2 col-span-2 text-gray-700 px-8 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt voluptates obcaecati numquam error et ut fugiat asperiores. Sunt nulla ad incidunt laboriosam, laudantium est unde natus cum numquam, neque facere.</p>
                <div class="flex items-center justify-end space-x-4 w-full h-full">
                    <a href="{{ route('donors.donations') }}">

                     <button  class="flex items-center bg-green-900  text-white px-4 py-2 rounded text-sm space-x-2 transition duration-100">
                    <svg class="text-white w-5 h-5"
                    xmlns="http://www.w3.org/2000/svg" width="24"  height="24"   viewBox="0 0 20 20" fill="currentColor">  <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>  <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/></svg>
                    <span>See your donation</span>
                    </button>
                    </a>
                    <a href="{{ route('donors.create') }}" >
                    <button class="flex items-center bg-[#E44A19] text-white px-4 py-2 rounded text-sm space-x-2 transition duration-100">
                    <svg class="text-white w-5 h-5"
                    xmlns="http://www.w3.org/2000/svg" width="24"  height="24"   viewBox="0 0 20 20" fill="currentColor">  <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd"/></svg>
                    <span>Post new Donation</span>
                    </button>
                    </a>

                </div>
            </div>
        </div>

        <div class="my-4 flex flex-col 2xl:flex-row space-y-4 2xl:space-y-0 2xl:space-x-4">
            <div class="w-full flex flex-col 2xl:w-1/3">
                <div class="flex-1 bg-green-900 bg-opacity-10 rounded-lg shadow-xl p-8">
                    <h4 class="text-xl text-orange-600 font-bold">Personal Information</h4>
                    <ul class="mt-2  text-[#272343]">
                        <li class="flex border-y border-[#8095A8] py-2">
                            <span class="font-bold w-24  text-[#272343]">Full name :</span>
                            <span class=" text-[#272343]">oumaima</span>
                        </li>
                        <li class="flex border-b border-[#8095A8] py-2">
                            <span class="font-bold w-24  text-[#272343]">Birthday :</span>
                            <span class=" text-[#272343]">24 Jul, 1991</span>
                        </li>
                        <li class="flex border-b border-[#8095A8] py-2">
                            <span class="font-bold w-24  text-[#272343]">Joined :</span>
                            <span class=" text-[#272343]">18 april 2024 (5 days ago)</span>
                        </li>
                        <li class="flex border-b border-[#8095A8] py-2">
                            <span class="font-bold w-24  text-[#272343]">Mobile :</span>
                            <span class=" text-[#272343]">(123) 123-1234</span>
                        </li>
                        <li class="flex border-b border-[#8095A8] py-2">
                            <span class="font-bold w-24  text-[#272343]">Email:</span>
                            <span class=" text-[#272343]">amandaross@example.com</span>
                        </li>
                        <li class="flex border-b border-[#8095A8] py-2">
                            <span class="font-bold w-24  text-[#272343]">Location :</span>
                            <span class=" text-[#272343]">Safi , Morocco</span>
                        </li>


                    </ul>
                </div>
                <div class="flex-1 bg-green-900 bg-opacity-10 rounded-lg shadow-xl mt-4 p-8">
                    <h4 class="text-xl  text-orange-600 font-bold">Last Activity </h4>
                    <div class="relative px-4">
                        <div class="absolute h-full border border-dashed border-opacity-20 border-secondary"></div>

                        <!-- start::Timeline item -->
                        <div class="flex items-center w-full my-6 -ml-1.5">
                            <div class="w-1/12 z-10">
                                <div class="w-3.5 h-3.5 bg-[#FF5470] rounded-full"></div>
                            </div>
                            <div class="w-11/12">
                                <p class="text-sm">Profile informations changed.</p>
                                <p class="text-xs text-gray-500">3 min ago</p>
                            </div>
                        </div>
                        <!-- end::Timeline item -->

                        <!-- start::Timeline item -->
                        <div class="flex items-center w-full my-6 -ml-1.5">
                            <div class="w-1/12 z-10">
                                <div class="w-3.5 h-3.5 bg-blue-600 rounded-full"></div>
                            </div>
                            <div class="w-11/12">
                                <p class="text-sm">
                                    Connected with <a href="#" class="text-blue-600 font-bold">Colby Covington</a>.</p>
                                <p class="text-xs text-gray-500">15 min ago</p>
                            </div>
                        </div>
                        <!-- end::Timeline item -->

                        <!-- start::Timeline item -->
                        <div class="flex items-center w-full my-6 -ml-1.5">
                            <div class="w-1/12 z-10">
                                <div class="w-3.5 h-3.5 bg-blue-600 rounded-full"></div>
                            </div>
                            <div class="w-11/12">
                                <p class="text-sm">Invoice <a href="#" class="text-blue-600 font-bold">#4563</a> was created.</p>
                                <p class="text-xs text-gray-500">57 min ago</p>
                            </div>
                        </div>
                        <!-- end::Timeline item -->

                        <!-- start::Timeline item -->
                        <div class="flex items-center w-full my-6 -ml-1.5">
                            <div class="w-1/12 z-10">
                                <div class="w-3.5 h-3.5 bg-blue-600 rounded-full"></div>
                            </div>
                            <div class="w-11/12">
                                <p class="text-sm">
                                    Message received from <a href="#" class="text-blue-600 font-bold">Cecilia Hendric</a>.</p>
                                <p class="text-xs text-gray-500">1 hour ago</p>
                            </div>
                        </div>
                        <!-- end::Timeline item -->

                        <!-- start::Timeline item -->
                        <div class="flex items-center w-full my-6 -ml-1.5">
                            <div class="w-1/12 z-10">
                                <div class="w-3.5 h-3.5 bg-blue-600 rounded-full"></div>
                            </div>
                            <div class="w-11/12">
                                <p class="text-sm">New order received <a href="#" class="text-blue-600 font-bold">#OR9653</a>.</p>
                                <p class="text-xs text-gray-500">2 hours ago</p>
                            </div>
                        </div>
                        <!-- end::Timeline item -->

                        <!-- start::Timeline item -->
                        <div class="flex items-center w-full my-6 -ml-1.5">
                            <div class="w-1/12 z-10">
                                <div class="w-3.5 h-3.5 bg-blue-600 rounded-full"></div>
                            </div>
                            <div class="w-11/12">
                                <p class="text-sm">
                                    Message received from <a href="#" class="text-blue-600 font-bold">Jane Stillman</a>.</p>
                                <p class="text-xs text-gray-500">2 hours ago</p>
                            </div>
                        </div>
                        <!-- end::Timeline item -->
                    </div>
                </div>
            </div>
            <div class="flex flex-col w-full 2xl:w-2/3">
                <!-- <div class=" bg-green-900 bg-opacity-10rounded-lg shadow-xl p-8">
                    <h4 class="text-xl  text-[#272343] font-bold">About</h4>
                    <p class="mt-2 text-gray-700">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt voluptates obcaecati numquam error et ut fugiat asperiores. Sunt nulla ad incidunt laboriosam, laudantium est unde natus cum numquam, neque facere. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut, magni odio magnam commodi sunt ipsum eum! Voluptas eveniet aperiam at maxime, iste id dicta autem odio laudantium eligendi commodi distinctio!</p>
                </div> -->
                <div class="flex-1 bg-green-900 bg-opacity-10 rounded-lg shadow-xl p-8">
                    <h4 class="text-xl  text-orange-600 font-bold">Statistics</h4>

                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mt-4">
                        <div class="px-6 py-6 bg-gray-100 border border-gray-300 rounded-lg shadow-xl">
                            <div class="flex items-center justify-between">
                                <span class="font-bold text-sm text-indigo-600">Total Donation</span>
                            </div>
                            <div class="flex items-center justify-between mt-6">

                            </div>
                        </div>
                        <div class="px-6 py-6 bg-gray-100 border border-gray-300 rounded-lg shadow-xl">
                            <div class="flex items-center justify-between">
                                <span class="font-bold text-sm text-green-600">Donations</span>
                            </div>
                            <div class="flex items-center justify-between mt-6">

                            </div>
                        </div>
                        <div class="px-6 py-6 bg-gray-100 border border-gray-300 rounded-lg shadow-xl">
                            <div class="flex items-center justify-between">
                                <span class="font-bold text-sm text-blue-600">New Connections</span>
                            </div>
                            <div class="flex items-center justify-between mt-6">
                                <div>
                                    <svg class="w-12 h-12 p-2.5 bg-blue-400 bg-opacity-20 rounded-full text-blue-600 border border-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                </div>

                            </div>
                        </div>
                    </div>
                 <!--chart bar 📊-->
                    <!-- <div class="mt-4">
                        <canvas id="verticalBarChart" style="display: block; box-sizing: border-box; height: 414px; width: 828px;" width="1656" height="828"></canvas>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="bg-green-900 bg-opacity-10 rounded-lg shadow-xl p-8">
            <div class="flex items-center justify-between">
                <h4 class="text-xl text-orange-600 font-bold">Connections (5)</h4>

            </div>
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6 2xl:grid-cols-8 gap-8 mt-8">
                <a href="#" class="flex flex-col items-center justify-center  text-[#272343] " >
                    <img src="https://vojislavd.com/ta-template-demo/assets/img/connections/connection1.jpg" class="w-16 rounded-full">
                    <p class="text-center font-bold text-sm mt-1">Diane Aguilar</p>
                    <p class="text-xs text-gray-500 text-center">casablanca</p>
                </a>

            </div>
        </div>
    </div>

