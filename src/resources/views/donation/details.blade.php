<!--Nav Donor -->
@include('master.navDonor')
<section class="min-h-screen w-full space-y-12 p-16">
  <div class="flex h-full w-full gap-16">
    <div class="flex w-[50%] flex-col items-center justify-center gap-4">
      <div class="h-full w-full rounded-xl bg-[url('https://images.unsplash.com/photo-1595950653106-6c9ebd614d3a?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')] bg-cover bg-center"></div>
    </div>
    <div class="flex h-full w-[50%] flex-col items-start gap-3">
      <p class="rounded-sm bg-orange-600 p-4 py-2 font-bold text-white">{{ $donation->category->name }}</p>
      <div class="mb-4 flex w-full items-center justify-between">
        <h1 class="border-l-8 border-green-900 py-4 pl-2 text-5xl font-black">{{ $donation->title }}</h1>
      </div>

      <div class="mb-4 mt-2 flex flex-col items-start gap-4">
        <h2 class="w-fit border-b-2 border-orange-500 text-xl font-bold text-orange-600">Description</h2>
        <p>{{ $donation->description }}</p>
      </div>

      <div class="mb-4 flex w-full flex-col items-start gap-4">
        <h2 class="w-fit border-b-2 border-orange-500 text-xl font-bold text-orange-600">Details</h2>
        <div class="flex w-full items-center justify-evenly gap-4">
          <div class="w-[50%] space-y-2">
            <h2 class="w-full rounded-md bg-green-900 bg-opacity-10 p-1 text-center font-bold text-green-900">Etat</h2>
            <p class="w-full rounded-md border-2 border-green-900 p-1 text-center">{{ ucfirst($donation->status) }}</p>
          </div>
          <hr class="h-full border-2" />
          <div class="w-[50%] space-y-2">
            <h2 class="w-full rounded-md bg-green-900 bg-opacity-10 p-1 text-center font-bold text-green-900">Availability</h2>
            <p class="w-full rounded-md border-2 border-green-900 p-1 text-center">{{ ucfirst($donation->donor_availability) }}</p>
          </div>
        </div>
      </div>

      <div class="flex h-full w-full flex-col items-start gap-4">
        <h2 class="w-fit border-b-2 border-orange-500 text-xl font-bold text-orange-600">Address</h2>
        <div class="relative h-full w-full">
          <div class="absolute left-[50%] top-0 translate-x-[-50%] translate-y-[-50%] rounded bg-white">
            <p class="rounded border-b-4 border-r-4 border-green-900 bg-green-900 bg-opacity-10 p-2 text-sm font-bold text-green-900">{{ $donation->address }}</p>
          </div>
          <iframe class="h-full w-full rounded border-2 border-green-900" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps systems</a></iframe>
        </div>
      </div>

      <div class="mb-4 flex w-full flex-col items-start gap-4">
        <h2 class="w-fit border-b-2 border-orange-500 text-xl font-bold text-orange-600">By</h2>
        <div class="w-full flex justify-between items-start gap-8">
          <div class="flex w-[50%] flex-col items-center gap-3 rounded-md bg-green-900 bg-opacity-10 p-4">
            <div class="flex w-full items-center gap-3">
              <div class="h-12 w-12 rounded-full border-2 border-green-900 bg-[url({{ $donation->user->image ? asset('storage/' . $donation->user->image) : 'https://images.unsplash.com/photo-1595950653106-6c9ebd614d3a?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' }})] bg-cover bg-center"></div>
              <p class="font-semibold text-black">{{ $donation->user->name }}</p>
            </div>
            <form class="w-full" action="{{ route('user.follow', $donation->user->id) }}" method="post">
                @csrf
                @if(!$isFollowed)
                    <button type="submit" class="w-full rounded-md bg-green-900 px-4 py-2 font-semibold text-white">FOLLOW</button>
                @else
                    <button type="submit" class="w-full rounded-md bg-green-100 border-2 border-green-900 px-4 py-2 font-semibold text-green-900">FOLLOWED</button>
                @endif
                </form>
          </div>
          <button class="w-full p-3 rounded-xl border-4 border-dashed border-orange-600 bg-orange-600 bg-opacity-10 text-4xl font-black text-orange-600">Apply</button>
        </div>
      </div>
    </div>
  </div>
</section>

