<!--Nav Donor -->
@include('master.navDonor')
<div class="bg-[#FBF6F4] pt-8">
<div class="text-center p-10 w-[70%] flex justify-between items-center mx-auto rounded-xl bg-cover bg-[url('{{asset('image/hero.jpg')}}')]">
    <h1 class="font-black text-4xl text-white text-start mb-2 ">Manage Reservations</h1>

</div>
<div class="mt-16">
    <table class="max-w-5xl mx-auto table-auto">
      <thead class="justify-between">
        <tr class="bg-[#094839]">
          <th class="px-16 py-2">
            <span class="text-gray-100 font-semibold">#</span>
          </th>
          <th class="px-16 py-2">
            <span class="text-gray-100 font-semibold">Name</span>
          </th>

          <th class="px-16 py-2">
            <span class="text-gray-100 font-semibold">Donation</span>
          </th>

          <th class="px-16 py-2">
            <span class="text-gray-100 font-semibold">Message</span>
          </th>
          <th class="px-16 py-2">
            <span class="text-gray-100 font-semibold">Date</span>
          </th>
          <th class="px-16 py-2">
            <span class="text-gray-100 font-semibold">Status</span>
          </th>
          <th class="px-16 py-2">
            <span class="text-gray-100 font-semibold">Actions</span>
          </th>
        </tr>
      </thead>
      <tbody class="bg-green-900 bg-opacity-10">
        @foreach ($reservations as $reservation)
        <tr class="bg-white border-b-2 border-orange-500">
          <td class="px-16 py-2 flex flex-row items-center">
            {{$reservation->id}}
          </td>
          <td>
            <span class="text-center ml-2 font-semibold">{{$reservation->user->name}}</span>
          </td>

          <td class="px-16 py-2">
            <span>{{$reservation->donation->title}}</span>
          </td>
          <td class="px-16 py-2">
            <span>{{$reservation->message ?? 'No message'}}</span>
          </td>
          <td class="px-16 py-2">
          <span>{{ \Carbon\Carbon::parse($reservation->created_at)->format('d-m-Y') }}</span>

          </td>
          <td class="px-16 py-2">
            @if($reservation->status == 'pendig')
                <span class="rounded bg-yellow-400 py-1 px-3 text-xs font-bold">{{ ucfirst($reservation->status) }}</span>
            @elseif($reservation->status == 'approved')
                <span class="rounded bg-green-400 py-1 px-3 text-xs font-bold">{{ ucfirst($reservation->status) }}</span>
            @elseif($reservation->status == 'rejected')
                <span class="rounded bg-red-400 py-1 px-3 text-xs font-bold">{{ ucfirst($reservation->status) }}</span>
            @endif
        </td>

          <td class="p-3 px-5 flex items-center">
          @if($reservation->status != 'approved')
                <form action="{{route('reservation.approve', $reservation->id)}}" method="POST">
                    @method('PUT')
                    @csrf
                    <button type="submit" class="text-xs font-bold bg-green-700  text-white py-1 px-2 rounded ">Accept</button>
                </form>
            @endif

            @if($reservation->status != 'rejected')
                <form action="{{route('reservation.reject', $reservation->id)}}" method="POST">
                    @method('PUT')
                    @csrf
                    <button type="submit" class="text-xs font-bold bg-red-700 text-white py-1 px-2 rounded ">Reject</button>
                </td>
                </form>
            @endif
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
