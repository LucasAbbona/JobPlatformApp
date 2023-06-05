<x-layout>
    <div class="px-20 mt-5">
        <div class="w-full flex justify-between bg-blue-200 rounded-md py-4 px-10 items-center">
            <div class="w-2/3 flex flex-col">
                <h1 class="font-semibold text-xl">{{$profile->name}}</h1>
                <p class="text-lg font-light">Mail: {{$profile->email}}</p>
                <p>{{$profile->age}} Years Old</p>
            </div>
            <div class="h-32 w-32 flex justify-center rounded-full overflow-hidden">
                <img class="" src="{{$profile->profile_image ? asset('storage/'.$profile->profile_image) : 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png' }}" alt="">
            </div>
        </div>
        <div class="px-10 mt-10">
            <p class="font-semibold text-lg">Company</p>
            <p>{{$profile->company}}</p>
            <p class="font-semibold text-lg">Country</p>
            <p>{{$profile->country}}</p>
            <p class="font-semibold text-lg">Skills</p>
            <p>{{$profile->habilities}}</p>
            <p class="font-semibold text-lg">Experience</p>
            <p>{{$profile->experience}}</p>
            <p class="font-semibold text-lg">Education</p>
            <p>{{$profile->education}}</p>
        </div>
    </div>
</x-layout>