<x-layout>
    <div class="flex flex-col gap-5 px-20 mt-5">
        @if (count($applicants)==0)
        <h3 class="text-red-600 text-center font-medium text-2xl">No applicants yet.</h3>
    @else
    <h3 class="text-center my-5 font-semibold text-xl border-b-2 pb-5 border-purple-500">{{count($applicants)}} applied for this job.</h3>
        @foreach ($applicants as $applicant)
    <div class="w-full bg-purple-300 rounded-lg flex justify-around py-5">
        <p>{{$users->where('id',$applicant->seeker_id)->last()->name}}</p>
        <p>{{$users->where('id',$applicant->seeker_id)->last()->age}}</p>
        <p>{{$users->where('id',$applicant->seeker_id)->last()->country}}</p>
        <a href="/user/{{$applicant->seeker_id}}" class="bg-blue-400 px-3 py-1 rounded-lg text-white font-semibold hover:bg-blue-500 transition-all">View Profile</a>
    </div>
    @endforeach
    @endif
    </div>
</x-layout>