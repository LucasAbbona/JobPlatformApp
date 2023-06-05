<div>
    <div class="bounce-left flex w-full mt-5 gap-5">
        <input wire:model="search" type="search" class="w-full p-2 border-2 rounded-md outline-none " placeholder="Search Jobs">
        <div class="flex items-center gap-4">
            <label for="seniority" class="font-medium">Seniority</label>
            <select wire:model="selectedRole" id="seniority" class="border-2 rounded-md p-2 outline-none">
                <option value="">All</option>
                <option value="senior">Senior</option>
                <option value="semi-senior">Semi-Senior</option>
                <option value="junior">Junior</option>
            </select>
        </div>
    </div>
        @foreach ($jobs as $job)
        <div class="jello-vertical flex justify-between mt-5 p-4 items-center rounded-lg bg-blue-200">
            <div class="flex flex-col">
                <h3 class="font-bold text-lg">{{$job->title}}</h3>
                <p class="font-light text-sm">{{$job->company}}</p>
                <p class="text-sm">{{$job->seniority}}</p>
            </div>
            <div class="">
                <a href="/job/{{$job->id}}" class=" transition-all px-3 py-1 bg-purple-600 hover:bg-purple-700 text-white font-medium text-lg text-decoration-none mr-5">More</a>
            </div>
        </div>
    @endforeach
    @livewireScripts
</div>
