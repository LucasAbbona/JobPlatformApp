<x-layout>
    <div class="my-5 px-20">
        <div class="flex justify-between items-center mt-10">
            <h2 class="font-semibold text-2xl">{{$singleJob->title}}</h2>
                    {{-- Application to a jon --}}
        <form action="/job/apply" method="post">
            @csrf
            @method('POST')
            <input type="hidden" name="job_id" value="{{$singleJob->id}}">
            <input type="hidden" name="seeker_id" value="{{auth()->user()->id}}">
            @if ($singleJob->employer_id == auth()->user()->id)
                <button disabled class="shake-vertical bg-red-500 font-medium px-3 py-1 rounded-md text-white">You can't apply to this job</button>
            @else
            @if (count($appliedBool->where('job_id',$singleJob->id)->where('seeker_id',auth()->user()->id))==0)
            <button class="bg-blue-500 font-medium px-3 py-1 rounded-md text-white">Apply</button>
            @else
            <button disabled="disabled" class="shake-vertical bg-blue-300 font-medium px-3 py-1 rounded-md text-gray-700">Already Applied</button>
            @endif
            @endif
        </form>
        {{--  --}}
        </div>
        <div class="flex gap-3 items-end mt-10 bg-blue-200 px-5 py-2 rounded-md">
            <p class="font-medium">{{$singleJob->company}}</p>
            <p class="text-sm text-gray-500">{{$singleJob->seniority}}</p>
        </div>
        <div>
            <p class="mt-5 font-medium text-sm ml-2 bg-gray-300 p-2 rounded-md inline-block">{{count($appliedBool->where('job_id',$singleJob->id))}} Applicants</p>
        </div>
        <div class="mt-10 flex flex-col gap-8">    
        <div class="flex flex-col gap-3">
            <p class="font-semibold text-xl bg-gray-200 px-5 py-2 rounded-md">Description</p>
            <p>{{$singleJob->description}}</p>
        </div>
        <div class="flex flex-col gap-3">
            <p class="font-semibold text-xl bg-gray-200 px-5 py-2 rounded-md">Requisites</p>
            <p>{{$singleJob->requisites}}</p>
        </div>
        <div class="flex flex-col gap-3">
            <p class="font-semibold text-xl bg-gray-200 px-5 py-2 rounded-md">Salary</p>
            <p>${{$singleJob->salary}} per Year</p>
        </div>
    </div>
    <div class="w-full flex gap-2 mt-7">
    @if ($singleJob->employer_id == auth()->user()->id)
    <a class="bg-purple-500 hover:bg-purple-600 text-lg font-semibold text-white w-1/2 justify-center flex items-center rounded-md" href="/job/{{$singleJob->id}}/edit">Edit</a>
    <form action="/job/delete/{{$singleJob->id}}" class="w-1/2"  method="POST">
        @csrf
        @method('DELETE')
        <button class="bg-red-500 hover:bg-red-600 transition-all text-lg font-semibold text-white flex w-full justify-center py-5 rounded-md">Delete Job</button>
    </form>
    @endif
    </div>
    </div>       
</x-layout>