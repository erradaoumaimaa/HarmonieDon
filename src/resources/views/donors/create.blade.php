<!-- Nav Donor -->
@include('master.nav')
<div class="lg:flex gap-8 items-start px-16 justify-center pt-16 bg-[#FBF6F4]">
    <div class="hidden lg:block w-[40%]">
        <aside class="px-8 py-6 mt-12">
            <div class="rounded bg-[#E44A19] text-white p-4">
                <h2 class="my-2 text-2xl font-semibold">Instructions :</h2>
                <ul class="list-inside list-disc">
                    <li>Provide detailed and accurate information about your donation, including title, description, address...</li>
                    <li>Upload a clear and appropriate image of the donation item.</li>
                    <li>Ensure that your donation complies with our terms and conditions, and does not violate any legal or ethical standards.</li>
                </ul>
            </div>
        </aside>
    </div>
    <div class="bg-white border-2 border-[#E44A19] rounded-lg px-8 py-6 w-full my-8 max-w-3xl">
        <h2 class="text-2xl font-semibold mb-4 text-[#272343]">Make a Generous Contribution Today</h2>
        <!-- Display Errors -->
        @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <!-- Display Success Message -->
        @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
        @endif
        <form action="{{ route('donors.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Form Fields -->
            <div class="mb-4">
                <label class="block text-[#2D3E4E] font-medium mb-2" for="categorie_id"> Select a Category </label>
                <select id="categorie_id" name="categorie_id" class="border border-gray-400 p-2 w-full rounded-lg outline-none focus:border-[#E44A19] focus:shadow-md">
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ ucwords($category->name) }}</option>
                    @endforeach
                </select>
            </div>
            <!-- Title -->
            <div class="mb-4">
                <label class="block text-[#2D3E4E] font-medium mb-2" for="title"> Title </label>
                <input class="border border-gray-400 p-2 w-full rounded-lg outline-none focus:border-[#E44A19] focus:shadow-md" id="title" type="text" name="title" placeholder="Example: table, refrigerator, book." />
            </div>
            <!-- Description -->
            <div class=" mb-4">
                <label for="description" class="block text-[#2D3E4E] font-medium mb-2"> Description </label>
                <textarea rows="4" name="description" id="description" placeholder="For example: light wood table... Providing detailed information (color, size, etc.) increases your chances of quickly donating your item!" class="w-full resize-none rounded-md border border-[#a3a3a769] bg-white px-4 py-3 text-base font-medium text-[#000] outline-none focus:border-[#E44A19] focus:shadow-md"></textarea>
            </div>
            <!-- Availability -->
            <div class="mb-4">
                <label class="block text-[#2D3E4E] font-medium mb-2" for="donor_availability"> Availability </label>
                <select id="donor_availability" name="donor_availability" class="border border-gray-400 p-2 w-full rounded-lg outline-none focus:border-[#E44A19] focus:shadow-md">
                    <option value="Flexible">Flexible</option>
                    <option value="Evening">Evening</option>
                    <option value="Weekend">Weekend</option>
                </select>
            </div>
            <!-- Condition -->
            <div class="mb-4">
                <label class="block text-[#2D3E4E] font-medium mb-2" for="item_condition"> Item Condition </label>
                <select id="item_condition" name="item_condition" class="border border-gray-400 p-2 w-full rounded-lg outline-none focus:border-[#E44A19] focus:shadow-md">
                    <option value="Exclusivity">Exclusivity</option>
                    <option value="Good condition">Good condition</option>
                    <option value="Used">Used</option>
                    <option value="Needs Repair">Needs Repair</option>
                </select>
            </div>
            <!-- Address -->
            <div class="mb-4">
                <label class="block text-[#2D3E4E] font-medium mb-2" for="address"> Address </label>
                <input class="border border-gray-400 p-2 w-full rounded-lg outline-none focus:border-[#E44A19] focus:shadow-md" id="address" type="text" name="address" placeholder="Rue El Kinidy residence Amfouss 1-2" />
            </div>

            <div class="mb-4">
                <label class="block text-[#2D3E4E] font-medium mb-2" for="image"> Upload image of donation </label>
                <div class="mt-8 flex items-center justify-center px-3">
                    <label for="image" class="flex h-72 w-[400px] cursor-pointer items-center justify-center rounded-50 border-2 border-dashed border-[#094839] bg-gray-50" id="DonationImageLabel">
                        <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M13 5H9.32843C8.79799 5 8.28929 5.21071 7.91421 5.58579L7.08579 6.41421C6.71071 6.78929 6.20201 7 5.67157 7H4C2.89543 7 2 7.89543 2 9L2 19C2 20.1046 2.89543 21 4 21H18C19.1046 21 20 20.1046 20 19V12M17 5H23M20 8V2M11 18C13.2091 18 15 16.2091 15 14C15 11.7909 13.2091 10 11 10C8.79086 10 7 11.7909 7 14C7 16.2091 8.79086 18 11 18Z" stroke="#E44A19" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </label>
                    <input id="image" class="hidden" type="file" name="image" accept="image/*" onchange="displayImage('DonationImageLabel', 'image')" />
                </div>
            </div>
            <button type="submit" class="mt-8 rounded-md bg-[#E44A19] px-8 py-3 text-lg font-bold text-white  flex justify-center items-center mx-auto block">Submit Donation</button>

        </form>
    </div>
</div>

<script>
    // JavaScript for image preview
    function displayImage(onlabel, inInput) {
        var input = document.getElementById(inInput);
        var label = document.getElementById(onlabel);

        var file = input.files[0];

        if (file) {
            var reader = new FileReader();

            reader.onload = function(e) {
                label.style.backgroundImage = 'url(' + e.target.result + ')';
                label.style.backgroundSize = 'cover';
                label.style.backgroundPosition = 'center';
                label.style.border = 'none';
            };
            reader.readAsDataURL(file);
        }
    }
</script>
