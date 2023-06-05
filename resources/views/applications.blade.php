<x-layout>
    <div class="px-20 mt-5 flex flex-col gap-5">
        @foreach ($applications as $application)
        <div class="scale-up-vertical-top flex justify-between bg-blue-200 rounded-lg p-5 items-center">
            <div>
        <h2 class="font-semibold text-lg">{{$application->title}}</h2>
        <p class="font-light">{{$application->seniority}}</p>
        <p class="font-light text-xs">{{$application->company}}</p>
            </div>
            <div>
                <a href="/applications/{{$application->id}}" class="bg-purple-400 px-3 py-1 rounded-lg text-white font-semibold hover:bg-purple-500">View Seekers</a>
            </div>
        </div>
    @endforeach
    </div>
</x-layout>