@include('master.header')
<!--Nav Donor -->
@include('master.navDonor')
<div class="m-16 text-center text-4xl font-bold font-mono  ">Make a Generous Contribution Today   </div>
<div class="flex item-start justify-center p-12">
<div class="mx-auto w-full max-w-[550px] bg-white">
<form action="{{ route('donors.store') }}" method="POST" enctype="multipart/form-data" class="md:w-full flex flex-wrap justify-center gap-5">
    @csrf
    <!-- Category -->
    <div class="md:w-full px-3">
        <label class="mb-3 block text-lg font-bold text-gray-800" for="ca_id">
            Choose a Category
        </label>
        <select id="categorie_id" name="categorie_id" class="block w-full rounded-md border border-[#a3a3a769] bg-white py-3 px-4 mb-3 focus:border-[#D00000] focus:shadow-md">
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ ucwords($category->name) }}</option>
            @endforeach
        </select>
    </div>
    <!-- Title -->
    <div class="md:w-full px-3">
        <label class="mb-3 block text-lg font-bold text-gray-800" for="title">
            Title
        </label>
        <input class="block w-full rounded-md border border-[#a3a3a769] bg-white py-3 px-4 mb-3 outline-none focus:border-[#D00000] focus:shadow-md" id="title" type="text" name="title" placeholder="Example: table, refrigerator, book.">
    </div>
    <!-- Description -->
    <div class="mb-5 md:w-full px-3">
        <label for="description" class="mb-3 block text-lg font-bold text-gray-800">
            Description
        </label>
        <textarea rows="4" name="description" id="description" placeholder="For example: light wood table... Providing detailed information (color, size, etc.) increases your chances of quickly donating your item!" class="w-full resize-none rounded-md border border-[#a3a3a769] bg-white py-3 px-4 text-base font-medium text-[#000] outline-none focus:border-[#D00000] focus:shadow-md"></textarea>
    </div>
    <!-- Availability -->
    <div class="md:w-full px-3">
        <label class="mb-3 block text-lg font-bold text-gray-800" for="donor_availability">
             Availability
        </label>
        <select id="donor_availability" name="donor_availability" class="block w-full rounded-md border border-[#a3a3a769] bg-white py-3 px-4 mb-3 focus:border-[#D00000] focus:shadow-md">
            <option value="flexible">Flexible</option>
            <option value="evening">Evening</option>
            <option value="weekend">Weekend</option>
        </select>
    </div>
    <!-- Condition -->
    <div class="md:w-full px-3">
        <label class="mb-3 block text-lg font-bold text-gray-800" for="item_condition">
            Item Condition
        </label>
        <select id="item_condition" name="item_condition" class="block w-full rounded-md border border-[#a3a3a769] bg-white py-3 px-4 mb-3 focus:border-[#D00000] focus:shadow-md">
            <option value="exclusivity">Exclusivity</option>
            <option value="new">New</option>
            <option value="used">Used</option>
            <option value="needs_repair">Needs Repair</option>
        </select>
    </div>
    <!-- Address -->
    <div class="md:w-full px-3">
        <label class="mb-3 block text-lg font-bold text-gray-800" for="address">
            Address
        </label>
        <input class="block w-full rounded-md border border-[#a3a3a769] bg-white py-3 px-4 mb-3 outline-none focus:border-[#D00000] focus:shadow-md" id="address" type="text" name="address" placeholder="Rue El Kinidy residence Amfouss 1-2">
    </div>

    <div class="md:w-full px-3">
        <label class="mb-3 block text-lg font-bold text-gray-800" for="image">
        Upload image of donation
        </label>
        <div class="flex items-center justify-center mt-8 px-3">
            <label for="image" class="w-[400px] h-72 rounded-md cursor-pointer flex items-center justify-center border-2 border-dashed border-[#a3a3a7e2] bg-gray-50" id="DonationImageLabel">
                <svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13 5H9.32843C8.79799 5 8.28929 5.21071 7.91421 5.58579L7.08579 6.41421C6.71071 6.78929 6.20201 7 5.67157 7H4C2.89543 7 2 7.89543 2 9L2 19C2 20.1046 2.89543 21 4 21H18C19.1046 21 20 20.1046 20 19V12M17 5H23M20 8V2M11 18C13.2091 18 15 16.2091 15 14C15 11.7909 13.2091 10 11 10C8.79086 10 7 11.7909 7 14C7 16.2091 8.79086 18 11 18Z" stroke="#D00000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </label>
            <input id="image" class="hidden" type="file" name="image" accept="image/*" onchange="displayImage('DonationImageLabel', 'image')">
        </div>
    </div>

    <button type="submit" class="bg-[#D00000] hover:bg-[#9B0000] text-white py-3 px-8 rounded-md text-lg font-bold mt-8">
        Submit Donation
    </button>
</form>

    </div>
    <aside class="">
    <div class="bg-[#e9edc9] p-4 rounded  ">
        <h2 class="font-extrabold text-2xl my-4 ">Instructions :</h2>
        <ul class="list-disc list-inside">
            <li>Provide detailed and accurate information about your donation, including title, description, address...</li>
            <li>Upload a clear and appropriate image of the donation item.</li>
            <li>Ensure that your donation complies with our terms and conditions, and does not violate any legal or ethical standards.</li>
            <li>Be responsive and transparent in communication with potential recipients or donors.</li>
        </ul>
    </div>
</aside>

</div>
<script>
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



