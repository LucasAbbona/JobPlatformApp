<x-layout>
    <div class="w-full mt-7 px-20">
        <h1 class="tracking-in-contract text-center font-semibold text-3xl">Welcome Back {{auth()->user()->name}}!</h1>
        <div class="scale-up-center flex flex-col items-center w-full mt-10 gap-1">
            <div class="w-full h-40 flex gap-1 ">
                @if (auth()->user()->role == 'employer')
                <a href="/add-job" class="shake-horizontal w-full bg-purple-500 hover:bg-purple-600 text-white font-semibold text-3xl flex justify-center items-center rounded-md">Add Job</a>
                <a href="/applications" class="shake-horizontal w-full bg-red-400 hover:bg-red-500 text-white font-semibold text-3xl flex justify-center items-center  rounded-md">My Jobs</a>
                @else
                    <a href="/jobs" class="shake-horizontal w-full bg-purple-500 hover:bg-purple-600 text-white font-semibold text-3xl flex justify-center items-center rounded-md">Jobs</a>
                @endif
            </div>
            <div class="w-full h-40 flex">
                <a href="/my-profile" class="shake-horizontal bg-blue-400 hover:bg-blue-500 w-full text-white font-semibold text-3xl flex justify-center items-center rounded-md">My Profile</a>
            </div>
        </div>
        <h2 class="tracking-in-contract font-semibold text-xl text-center mt-10">Check on our Jobs Selection for you today!</h2>
        <div class="my-10">
            @foreach ($jobs as $job)
            <div class="jello-vertical flex justify-between mt-5 p-4 items-center rounded-lg bg-blue-200">
                <div class="flex flex-col">
                    <h3 class="font-bold text-lg">{{$job->title}}</h3>
                    <p class="font-light text-sm">{{$job->company}}</p>
                    <p class="text-sm">{{$job->seniority}}</p>
                </div>
                <div class="">
                    <a href="/job/{{$job->id}}" class="transition-all px-3 py-1 bg-purple-600 hover:bg-purple-700 text-white font-medium text-lg text-decoration-none mr-5">More</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>