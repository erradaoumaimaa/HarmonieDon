@include('master.navAdmin');



<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-4 mb-20 mt-24">
    <article>
        <h2 class="text-2xl font-extrabold text-center" style="color:#251048">Manage users :</h2>
        <section class="mt-16 flex flex-row flex-wrap mx-auto" style="background-color:#ffffff">
            @if($users->first())
                <table class="w-full border-separate border-spacing-2">
                    <thead>
                        <tr>
                            <th class="bg-[#094839] text-white py-2 px-4 rounded-lg">ID</th>
                            <th class="bg-[#094839] text-white py-2 px-4 rounded-lg">Name</th>
                            <th class="bg-[#094839] text-white py-2 px-4 rounded-lg">Email</th>
                            <th class="bg-[#094839] text-white py-2 px-4 rounded-lg">Role</th>
                            <th class="bg-[#094839] text-white py-2 px-4 rounded-lg">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)

                        <tr>
                            <td class="text-center text-black border-2 border-black py-2 px-4 rounded-lg h-24">{{ $user->id }}</td>
                            <td class="text-center text-black border-2 border-black py-2 px-4 rounded-lg h-24">{{ $user->name }}</td>
                            <td class="text-center text-black border-2 border-black py-2 px-4 rounded-lg h-24">{{ $user->email }}</td>
                            <td class="text-center text-black border-2 border-black py-2 px-4 rounded-lg h-24">{{ ucwords($user->role) }}</td>
                            <td class="text-center text-black border-2 border-black py-2 px-4 rounded-lg h-24">
                                <form action="{{ route('user.ban', $user->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')

                                    <button type="submit">
                                        <svg class="h-10 w-10" fill="#000000" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52" enable-background="new 0 0 52 52" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M26,2C12.8,2,2,12.8,2,26s10.8,24,24,24s24-10.8,24-24S39.2,2,26,2z M37.9,27.7c-0.1,0.7-0.7,1.3-1.5,1.3 H15.6c-0.8,0-1.4-0.5-1.5-1.3c-0.1-1.2-0.1-2.3,0-3.4c0.1-0.7,0.7-1.3,1.5-1.3h20.8c0.8,0,1.4,0.6,1.5,1.3 C38,25.5,38,26.6,37.9,27.7z"></path> </g></svg>
                                    </button>
                                </form>
                            </td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
                <div class="mx-auto mt-8">

                    {{ $users->links() }}
                </div>

            @else
                <p class="text-white p-4">No data available.</p>
            @endif
        </section>


