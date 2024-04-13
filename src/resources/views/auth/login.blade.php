@include('master.header')

<div class="relative min-h-screen flex items-center justify-center bg-center py-12 px-4 sm:px-6 lg:px-8 bg-no-repeat bg-cover relative items-center" style="background-image: url({{ asset('image/register.jpg') }});">
    <div class="absolute bg-black opacity-70 inset-0 z-0"></div>
    <div class="max-w-xl w-full space-y-8 p-10 bg-white rounded-xl shadow-lg z-10">

        <div class="grid gap-16 grid-cols-1">
            <div class="flex flex-col">
                <div class="flex flex-col sm:flex-row items-center">
                    <h1 class="block w-full text-center text-2xl font-bold mb-6"> Welcome Back! to Donorbox</h1>
                    <div class="w-full sm:w-auto sm:ml-auto mt-3 sm:mt-0"></div>
                </div>
                <div class="mt-5">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
                            <input id="role" type='hidden' value='' name='role' />
                            <div>
                                <label for="name">Username</label>
                                <input id="name" type="text" name="name" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-[#03071E] rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                            </div>

                            <div>
                                <label for="email">Email Address</label>
                                <input id="email" type="email" name="email" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-[#03071E] rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                            </div>

                            <div>
                                <label for="password">Password</label>
                                <input id="password" type="password" name="password" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-[#03071E] rounded-md focus:border-blue-500 focus:outline-none focus:ring">
                            </div>


                        </div>
                        <button class="mt-3 text-lg font-semibold
                     w-full text-white rounded-lg
                    px-6 py-3 block shadow-xl bg-black"> Sign in
                    </button>

                <div class="sm:flex sm:flex-wrap mt-8 sm:mb-4 text-sm text-center">
                    <a href="#" class="flex-2 underline" >
                        Forgot password?
                    </a>

                    <p class="flex-1  text-md mx-4 my-1 sm:my-auto ">

                    </p>

                    <a href="#" class="flex-2 underline" >
                        Don't have an account yet?
                    </a>
                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


