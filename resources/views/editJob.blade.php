<x-layout>
    <div class="w-full px-20 my-10">
        <form action="/job/{{$job[0]->id}}" class="flex flex-col gap-4" method="post">
            @csrf
            @method('PUT')
                <input type="hidden" name="employer_id" value="{{$job[0]->employer_id}}">
            <div class="flex flex-col gap-2">
                <label for="" class="font-semibold text-lg">Title</label>
                <input type="text" name="title" class="p-2 border-2 border-black rounded-md" value="{{$job[0]->title}}" id="">
            </div>
            <div class="flex flex-col gap-2">
                <label for="" class="font-semibold text-lg">Company</label>
                <input type="text" name="company" class="p-2 border-2 border-black rounded-md" value="{{$job[0]->company}}" id="">
            </div>
            <div class="flex flex-col gap-2">
                <label for="" class="font-semibold text-lg">Seniority</label>
                <input type="text" name="seniority" class="p-2 border-2 border-black rounded-md" value="{{$job[0]->seniority}}" id="">
            </div>
            <div class="flex flex-col gap-2">
                <label for="" class="font-semibold text-lg">Description</label>
                <textarea name="description" id="" cols="30" class="p-2 border-2 border-black rounded-md" rows="4">{{$job[0]->description}}</textarea>
            </div>
            <div class="flex flex-col gap-2">
                <label for="" class="font-semibold text-lg">Requisites</label>
                <textarea name="requisites" id="" cols="30" class="p-2 border-2 border-black rounded-md" rows="4">{{$job[0]->requisites}}</textarea>
            </div>
            <div class="flex flex-col gap-2">
                <label for="" class="font-semibold text-lg">Salary <sub class="font-normal text-gray-400">per year</sub></label>
                <input type="text" name="salary" class="p-2 border-2 border-black rounded-md" value="{{$job[0]->salary}}" id="">
            </div>
            <button class="bg-blue-400 hover:bg-blue-500 transition-all py-5 rounded-md font-semibold text-xl text-white">Edit</button>
        </form>
    </div>
    

</x-layout>