<!--Nav Donor -->
@include('master.navDonor')
<div class="lg:flex gap-8 items-start px-16 justify-center pt-16 bg-[#FBF6F4]">
<div class="bg-white border-2 border-[#E44A19] rounded-lg px-8 py-6 w-full my-8 max-w-3xl">

<form action="{{ route('donations.update', $donation->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <!-- Category -->
    <div class="mb-4">
        <label class="block text-[#2D3E4E] font-medium mb-2" for="categorie_id">Select a Category</label>
        <select id="categorie_id" name="categorie_id" class="border border-gray-400 p-2 w-full rounded-lg outline-none focus:border-[#E44A19] focus:shadow-md">
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ $donation->categorie_id == $category->id ? 'selected' : '' }}>{{ ucwords($category->name) }}</option>
            @endforeach
        </select>
    </div>
    <!-- Title -->
    <div class="mb-4">
        <label class="block text-[#2D3E4E] font-medium mb-2" for="title">Title</label>
        <input class="border border-gray-400 p-2 w-full rounded-lg outline-none focus:border-[#E44A19] focus:shadow-md" id="title" type="text" name="title" value="{{ $donation->title }}" placeholder="Example: table, refrigerator, book." />
    </div>
    <!-- Description -->
    <div class="mb-4">
        <label for="description" class="block text-[#2D3E4E] font-medium mb-2">Description</label>
        <textarea rows="4" name="description" id="description" placeholder="For example: light wood table..." class="w-full resize-none rounded-md border border-[#a3a3a769] bg-white px-4 py-3 text-base font-medium text-[#000] outline-none focus:border-[#E44A19] focus:shadow-md">{{ $donation->description }}</textarea>
    </div>
    <!-- Availability -->
    <div class="mb-4">
        <label class="block text-[#2D3E4E] font-medium mb-2" for="donor_availability">Availability</label>
        <select id="donor_availability" name="donor_availability" class="border border-gray-400 p-2 w-full rounded-lg outline-none focus:border-[#E44A19] focus:shadow-md">
            <option value="flexible" {{ $donation->donor_availability == 'flexible' ? 'selected' : '' }}>Flexible</option>
            <option value="evening" {{ $donation->donor_availability == 'evening' ? 'selected' : '' }}>Evening</option>
            <option value="weekend" {{ $donation->donor_availability == 'weekend' ? 'selected' : '' }}>Weekend</option>
        </select>
    </div>
    <!-- Condition -->
    <div class="mb-4">
        <label class="block text-[#2D3E4E] font-medium mb-2" for="item_condition">Item Condition</label>
        <select id="item_condition" name="item_condition" class="border border-gray-400 p-2 w-full rounded-lg outline-none focus:border-[#E44A19] focus:shadow-md">
            <option value="exclusivity" {{ $donation->item_condition == 'exclusivity' ? 'selected' : '' }}>Exclusivity</option>
            <option value="new" {{ $donation->item_condition == 'new' ? 'selected' : '' }}>New</option>
            <option value="used" {{ $donation->item_condition == 'used' ? 'selected' : '' }}>Used</option>
            <option value="needs_repair" {{ $donation->item_condition == 'needs_repair' ? 'selected' : '' }}>Needs Repair</option>
        </select>
    </div>
    <!-- Address -->
    <div class="mb-4">
        <label class="block text-[#2D3E4E] font-medium mb-2" for="address">Address</label>
        <input class="border border-gray-400 p-2 w-full rounded-lg outline-none focus:border-[#E44A19] focus:shadow-md" id="address" type="text" name="address" value="{{ $donation->address }}" placeholder="Rue El Kinidy residence Amfouss 1-2" />
    </div>
    <!-- Image -->
    <div class="mb-4">
        <label class="block text-[#2D3E4E] font-medium mb-2" for="image">Upload image of donation</label>
        <input id="image" type="file" name="image" accept="image/*" class="border border-gray-400 p-2 w-full rounded-lg outline-none focus:border-[#E44A19] focus:shadow-md" />
        @if ($donation->image_url)
            <img src="{{ asset('storage/' . $donation->image_url) }}" alt="Donation Image" class="mt-2 w-full h-40 object-cover rounded-lg" />
        @endif
    </div>
    <button type="submit" class="mt-8 rounded-md bg-[#E44A19] px-8 py-3 text-lg font-bold text-white flex justify-center items-center mx-auto block">Submit Donation</button>
</form>
</div>
</div>
