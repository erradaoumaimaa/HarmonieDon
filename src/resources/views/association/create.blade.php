<!--Nav  -->
@include('master.nav')
<div class="lg:flex gap-8 items-start px-16 justify-center pt-16 bg-[#FBF6F4]">
    <div class="hidden lg:block w-[40%]">
        <aside class="px-8 py-6 mt-12">
            <div class="rounded bg-[#E44A19] text-white p-4">
                <h2 class="my-2 text-2xl font-semibold">Instructions :</h2>
                <ul class="list-inside list-disc">
                    <li>Provide detailed and accurate information about your blog, including title, description...</li>
                    <li>Upload a clear and appropriate image for your blog.</li>
                </ul>
            </div>
        </aside>
    </div>
    <div class="bg-white border-2 border-[#E44A19] rounded-lg px-8 py-6 w-full my-8 max-w-3xl">
        <h2 class="text-2xl font-semibold mb-4 text-[#272343]">Create a New Blog</h2>
        <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Title -->
            <div class="mb-4">
                <label class="block text-[#2D3E4E] font-medium mb-2" for="title"> Title </label>
                <input class="border border-gray-400 p-2 w-full rounded-lg outline-none focus:border-[#E44A19] focus:shadow-md" id="title" type="text" name="title" placeholder="Enter title of your blog" />
            </div>
            <!-- Content -->
            <div class=" mb-4">
                <label for="content" class="block text-[#2D3E4E] font-medium mb-2"> Content </label>
                <textarea rows="6" name="content" id="content" placeholder="Write your blog content here..." class="w-full resize-none rounded-md border border-[#a3a3a769] bg-white px-4 py-3 text-base font-medium text-[#000] outline-none focus:border-[#E44A19] focus:shadow-md"></textarea>
            </div>
            <!-- Reading Time -->
            <div class="mb-4">
                <label class="block text-[#2D3E4E] font-medium mb-2" for="reading_time"> Reading Time (minutes) </label>
                <input class="border border-gray-400 p-2 w-full rounded-lg outline-none focus:border-[#E44A19] focus:shadow-md" id="reading_time" type="number" name="reading_time" placeholder="Enter estimated reading time" />
            </div>

            <!-- Image Preview -->
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
            <!-- Submit Button -->
            <button type="submit" class="mt-8 rounded-md bg-[#E44A19] px-8 py-3 text-lg font-bold text-white  flex justify-center items-center mx-auto block">Submit Blog</button>
        </form>
    </div>
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
