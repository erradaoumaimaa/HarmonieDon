<!--Nav Donor -->
@include('master.navDonor')
<section class="min-h-screen w-full space-y-12 p-16">
  <div class="flex h-full w-full gap-16">
    <div class="flex flex-col gap-4 w-[50%] items-center justify-center">
      <div class="h-full w-full rounded-xl bg-[url('https://images.unsplash.com/photo-1595950653106-6c9ebd614d3a?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')] bg-cover bg-center"></div>
      <button class="w-full p-3 text-4xl font-black bg-orange-600 bg-opacity-10 rounded-xl border-4 border-orange-600 border-dashed text-orange-600">Apply</button>
    </div>
    <div class="flex h-full w-[50%] flex-col items-start gap-3">
      <p class="rounded-sm bg-orange-600 p-4 py-2 font-bold text-white">Category</p>
      <div class="mb-4 flex w-full items-center justify-between">
        <h1 class="border-l-8 border-green-900 py-4 pl-2 text-5xl font-black">New Nike Shoes</h1>
      </div>

      <div class="mb-4 mt-2 flex flex-col items-start gap-4">
        <h2 class="w-fit border-b-2 border-orange-500 text-xl font-bold text-orange-600">Description</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut quia sunt iste soluta assumenda minima beatae quod, debitis accusamus magni placeat rem sapiente mollitia velit illo architecto? Laborum, totam debitis.</p>
      </div>

      <div class="mb-4 flex w-full flex-col items-start gap-4">
        <h2 class="w-fit border-b-2 border-orange-500 text-xl font-bold text-orange-600">Details</h2>
        <div class="flex w-full items-center justify-evenly gap-4">
          <div class="w-[50%] space-y-2">
            <h2 class="w-full rounded-md bg-green-900 bg-opacity-10 p-1 text-center font-bold text-green-900">Etat</h2>
            <p class="w-full rounded-md border-2 border-green-900 p-1 text-center">Good</p>
          </div>
          <hr class="h-full border-2" />
          <div class="w-[50%] space-y-2">
            <h2 class="w-full rounded-md bg-green-900 bg-opacity-10 p-1 text-center font-bold text-green-900">Availability</h2>
            <p class="w-full rounded-md border-2 border-green-900 p-1 text-center">Weekend</p>
          </div>
        </div>
      </div>

      <div class="mb-4 flex w-full flex-col items-start gap-4">
        <h2 class="w-fit border-b-2 border-orange-500 text-xl font-bold text-orange-600">By</h2>
        <div class="flex w-fit flex-col items-center gap-3 rounded-md bg-green-900 bg-opacity-10 p-4">
          <div class="flex w-full items-center gap-3">
            <div class="h-12 w-12 rounded-full border-2 border-green-900 bg-[url('https://images.unsplash.com/photo-1654010816950-55f59acb385a?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')] bg-cover bg-center"></div>
            <p class="font-semibold text-black">Ouamima Errada</p>
          </div>
          <button class="w-full rounded-md bg-green-900 px-4 py-2 font-semibold text-white">FOLLOW</button>
        </div>
      </div>

      <div class="flex h-full w-full flex-col items-start gap-4">
        <h2 class="w-fit border-b-2 border-orange-500 text-xl font-bold text-orange-600">Address</h2>
        <div class="relative h-full w-full">
          <div class="absolute left-[50%] top-0 translate-x-[-50%] translate-y-[-50%] rounded bg-white">
            <p class="rounded border-b-4 border-r-4 border-green-900 bg-green-900 bg-opacity-10 p-2 text-sm font-bold text-green-900">1090 Bandle Court Rd Wrenshall, Minnesota(MN)</p>
          </div>
          <iframe class="h-full w-full rounded border-2 border-green-900" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=1%20Grafton%20Street,%20Dublin,%20Ireland+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps systems</a></iframe>
        </div>
      </div>
    </div>
  </div>
</section>
