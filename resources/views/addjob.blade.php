<x-layout>
    <div class="my-5 w-full px-20">
        @if (auth()->user()->role == 'employer')
        <form method="post" action="/create-job" class="w-2/3 flex flex-col bg-red-200 p-2 m-auto gap-2">
            @csrf
            @method('POST')
            <input type="hidden" value="{{auth()->user()->id}}" name="employer_id">
            <div class="flex flex-col">
                <label for="">Title</label>
                <input type="text" class="p-2 outline-none rounded-md" name="title">
            </div>
            <div class="flex flex-col">
                <label for="">Company</label>
                <input type="text" class="p-2 outline-none rounded-md" name="company">
            </div>
            <div class="flex flex-col">
                <label for="">Seniority</label>
                <input type="text" class="p-2 outline-none rounded-md" name="seniority">
            </div>
            <div class="flex flex-col">
                <label for="">Description</label>
                <textarea name="description" class="p-2 outline-none rounded-md" id="" cols="30" rows="5"></textarea>
            </div>
            <div class="flex flex-col">
                <label for="">Requisites</label>
                <textarea name="requisites" class="p-2 outline-none rounded-md" id="" cols="30" rows="5"></textarea>
            </div>
            <div class="flex flex-col">
                <label for="">Salary</label>
                <input type="number" class="p-2 outline-none rounded-md" name="salary">
            </div>
            <button class="bg-blue-500 hover:bg-blue-600 transition-all rounded-md py-3 text-white text-lg font-medium">Add Job</button>
        </form>
        @endif
    </div>
</x-layout>