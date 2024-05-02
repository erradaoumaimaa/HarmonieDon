@include('master.nav')

<div class="h-full bg-[#FBF6F4] p-8">
        <div class="bg-green-900 bg-opacity-10 rounded-lg shadow-xl pb-8">

            <div class="w-full h-[250px]">
                <div  class="w-full h-full rounded-tl-lg rounded-tr-lg bg-cover bg-[url('{{asset('image/test.jpg')}}')]"></div>
            </div>
            <div class="flex flex-col items-center -mt-20">
                <img src="{{ asset('storage/' . $user->image_url) }}" class="w-40 border-4 border-green-900  rounded-full">
                <div class="flex items-center space-x-2 mt-2">
                    <p class="text-2xl font-bold text-[#272343]">{{$user->name}}</p>
                </div>
                <p class="text-sm  text-[#272343]"> </p>
            </div>
            <div class="flex-1 grid grid-cols-4 lg:items-end items-center px-8 mt-2">
                <div></div>
                <p class="mt-2 col-span-2 text-gray-700 text-center">{{$user->bio}}</p>
                <div class="flex items-center justify-end space-x-4 w-full h-full">
                    <a href="{{ route('admins.index') }}">
                     <button  class="flex items-center bg-green-900  text-white px-4 py-2 rounded text-sm space-x-2 transition duration-100">
                    <svg class="text-white w-5 h-5"
                    xmlns="http://www.w3.org/2000/svg" width="24"  height="24"   viewBox="0 0 20 20" fill="currentColor">  <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"/>  <path fill-rule="evenodd" d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z" clip-rule="evenodd"/></svg>
                    <span>Manage user</span>
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
                            <span class=" text-[#272343]">{{$user->name}}</span>
                        </li>
                        <li class="flex border-b border-[#8095A8] py-2">
                            <span class="font-bold w-24  text-[#272343]">Birthday :</span>
                            <span class=" text-[#272343]">{{ \Carbon\Carbon::parse($user->date_of_birth)->format('d M, Y')}}</span>
                        </li>
                        <li class="flex border-b border-[#8095A8] py-2">
                            <span class="font-bold w-24  text-[#272343]">Joined :</span>
                            <span class=" text-[#272343]">{{ \Carbon\Carbon::parse($user->created_at)->format('d M, Y') }}</span>
                        </li>
                        <li class="flex border-b border-[#8095A8] py-2">
                            <span class="font-bold w-24  text-[#272343]">Mobile :</span>
                            <span class=" text-[#272343]">{{$user->phone}}</span>
                        </li>
                        <li class="flex border-b border-[#8095A8] py-2">
                            <span class="font-bold w-24  text-[#272343]">Email:</span>
                            <span class=" text-[#272343]">{{$user->email}}</span>
                        </li>
                        <li class="flex border-b border-[#8095A8] py-2">
                            <span class="font-bold w-24  text-[#272343]">Location :</span>
                            <span class=" text-[#272343]">{{$user->location}}, Morocco</span>
                        </li>


                    </ul>
                </div>
                <div class="flex-1 bg-green-900 bg-opacity-10 rounded-lg shadow-xl mt-4 p-8">
                <h4 class="text-xl text-orange-600 font-bold">Last Activity</h4>
                <div class="relative px-4">
                    <div class="absolute h-full border border-dashed border-opacity-20 border-secondary"></div>

                    @foreach($lastActivities as $activity)
                    <div class="flex items-center w-full my-6 -ml-1.5">
                        <div class="w-1/12 z-10">
                            <div class="w-3.5 h-3.5 bg-[#E44A19] rounded-full"></div>
                        </div>
                        <div class="w-11/12">
                            <p class="text-sm">{{ $activity->description }}</p>
                            <p class="text-xs text-gray-500">{{ $activity->created_at->diffForHumans() }}</p>
                        </div>
                    </div>
                    @endforeach

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
    </div>

