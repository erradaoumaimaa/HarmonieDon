<!--Nav Donor -->
@include('master.navDonor')
<div class="h-full w-full bg-white p-8">
  <div class="mx-auto h-full w-[60%] p-4 flex flex-col gap-12">
      <h1 class="text-5xl font-black">Lorem ipsum, dolor sit adipisicing amet adipisicing elit</h1>
        <div class="w-full flex items-center gap-2">
          <div class="w-12 h-12 rounded-full bg-center bg-cover bg-[url({{ $blog->user->image ? asset('storage/' . $blog->user->image) : 'https://images.unsplash.com/photo-1654010816950-55f59acb385a?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' }})]"></div>
          <div>
            <p class="flex items-center gap-2">{{ $blog->user->name }} <span class="text-xs text-gray-400">•</span> <span class="text-green-700">Follow</span></p>
            <p class="text-gray-400 text-sm flex items-center gap-2">{{ $blog->reading_time }} min read <span class="text-xs">•</span> <span class="text-md text-gray-600">{{ $blog->created_at }}</span></p>
          </div>
        </div>
        <div class="border-y-2 border-gray-100 text-sm flex justify-around items-center gap-6 p-2 py-4">
            <div class="flex items-center gap-1 text-gray-500">
              <svg class="w-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M3 14C3 9.02944 7.02944 5 12 5C16.9706 5 21 9.02944 21 14M17 14C17 16.7614 14.7614 19 12 19C9.23858 19 7 16.7614 7 14C7 11.2386 9.23858 9 12 9C14.7614 9 17 11.2386 17 14Z" stroke="#6d6d6d" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
              <p>{{ $blog->views_count }}</p>
            </div>

            <form action="{{ route('like.store', $blog->id) }}" method="post" class="">
                @csrf
                <button type="submit" class="flex items-center gap-1 text-gray-500">
                    <svg class="w-4" viewBox="0 0 24 24" fill="{{ !$likeExists ? 'none' : '#f25c54' }}" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M12 6.00019C10.2006 3.90317 7.19377 3.2551 4.93923 5.17534C2.68468 7.09558 2.36727 10.3061 4.13778 12.5772C5.60984 14.4654 10.0648 18.4479 11.5249 19.7369C11.6882 19.8811 11.7699 19.9532 11.8652 19.9815C11.9483 20.0062 12.0393 20.0062 12.1225 19.9815C12.2178 19.9532 12.2994 19.8811 12.4628 19.7369C13.9229 18.4479 18.3778 14.4654 19.8499 12.5772C21.6204 10.3061 21.3417 7.07538 19.0484 5.17534C16.7551 3.2753 13.7994 3.90317 12 6.00019Z" stroke="{{ !$likeExists ? '#6d6d6d' : '#f25c54' }}" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                    {{ $blog->likes->count() }}
                </button>
            </form>

            <div class="flex items-center gap-1 text-gray-500">
              <svg class="w-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g clip-path="url(#clip0_429_11233)"> <path d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 13.4876 3.36093 14.891 4 16.1272L3 21L7.8728 20C9.10904 20.6391 10.5124 21 12 21Z" stroke="#6d6d6d" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path> </g> <defs> <clipPath id="clip0_429_11233"> <rect width="24" height="24" fill="white"></rect> </clipPath> </defs> </g></svg>
              <p>{{ $blog->comments->count() }}</p>
            </div>
          </div>

          <div>
            <div class="h-[25rem] w-full bg-[url({{ $blog->user->image ? asset('storage/' . $blog->user->image) :'https://images.unsplash.com/photo-1536924491042-b0466800ce46?q=80&w=1964&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' }})] bg-cover bg-center"></div>
            <p class="text-gray-700 text-center text-sm">{{ $blog->title }}</p>
          </div>

          <div>
            <p>{{ $blog->content }}</p>
          </div>

          <div class="bg-gray-200 shadow-lg p-4 space-y-6">
            <div class="flex items-center justify-between">
              <div class="flex items-center gap-4">
                <div class="w-16 h-16 rounded-lg bg-cover bg-center bg-[url('https://www.logolynx.com/images/logolynx/69/6917d6622c965ddf9377ff9f1116ab2a.png')]"></div>
                <h1 class="text-4xl font-black">Aperture Labs</h1>
              </div>

              <div class="flex items-center gap-4">
                <button class="bg-green-700 border-2 border-green-700 p-2 px-4 text-white rounded-lg shadow-lg">Follow</button>
                <button class="border-2 bg-white border-gray-300 p-2 px-4 text-black rounded-lg shadow-lg">Learn More</button>
            </div>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores nisi voluptates ad repudiandae soluta in rerum nihil consequatur odit numquam corporis facere autem harum dignissimos, nesciunt, laboriosam, atque ex quisquam?</p>
          </div>

          <hr>
          <div class="flex flex-col gap-8">
            <h1 class="text-2xl font-black">Comments ({{ $blog->comments->count() }})</h1>
            <form action="{{ route('comment.store') }}" method="post" class="flex gap-4 items-center mb-4">
                @csrf
                <div class="h-12 w-12 bg-cover bg-center rounded-full bg-[url({{ auth()->user()->image ? asset('storage/' . auth()->user()->image) : 'https://images.unsplash.com/photo-1654010816950-55f59acb385a?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D' }})]" for=""></div>
                <input class="p-2 border-2 border-gray-300 w-full rounded shadow-md" placeholder="Share your thoughts" type="text" name="content">
                <input class="p-2 border-2 border-gray-300 w-full rounded shadow-md" placeholder="Share your thoughts" type="hidden" name="blog_post_id" value="{{ $blog->id }}">
                <button type="subnit" class="hidden"></button>
            </form>

            <div>
                @if($blog->comments->first())
                    @foreach($blog->comments as $comment)
                        <div class="flex gap-4 items-start">
                            <div class="h-12 w-12 bg-cover bg-center rounded-full bg-black" for=""></div>
                            <div class="flex flex-col w-full gap-2">
                                <p class="flex items-center gap-2">{{ $comment->user->name }} <span class="text-xs text-gray-400">•</span> <span class="text-md text-gray-600">{{ $comment->created_at }}</span></p>

                                <div class="p-2 border-l-2 border-black w-full">
                                <p>{{ $comment->content }}</p>
                                </div>

                                <div class="flex items-center gap-1 text-gray-500">
                                <svg class="w-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M12 6.00019C10.2006 3.90317 7.19377 3.2551 4.93923 5.17534C2.68468 7.09558 2.36727 10.3061 4.13778 12.5772C5.60984 14.4654 10.0648 18.4479 11.5249 19.7369C11.6882 19.8811 11.7699 19.9532 11.8652 19.9815C11.9483 20.0062 12.0393 20.0062 12.1225 19.9815C12.2178 19.9532 12.2994 19.8811 12.4628 19.7369C13.9229 18.4479 18.3778 14.4654 19.8499 12.5772C21.6204 10.3061 21.3417 7.07538 19.0484 5.17534C16.7551 3.2753 13.7994 3.90317 12 6.00019Z" stroke="#6d6d6d  " stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                                <p>4</p>
                            </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
          </div>
    </div>
  </div>
</div>

