<x-layout>
    <form action="/profile/{{$data->id}}" method="post" class="px-20" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="w-full flex justify-between bg-blue-200 rounded-md py-4 px-10 items-center">
            <div class="w-2/3 flex flex-col">
                <div class="flex items-center gap-2">
                    <label for="" class="font-semibold text-xl">Edit Name:</label>
                    <input class="p-2 rounded-md outline-none" type="text" name="name" value="{{$data->name}}">
                </div>
                <p class="text-lg font-light">Mail: {{$data->email}}</p>
                <p>{{$data->age}} Years Old</p>
            </div>
            <div class="h-32 w-32 flex justify-center rounded-full overflow-hidden">
                <img class="" src="{{$data->profile_image ? asset('storage/'.$data->profile_image) : 'https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_960_720.png' }}" alt="">
                
            </div>
            <input type="file" name="profile_image" id="">
        </div>
        <div class="px-10 mt-10">
            <p class="font-semibold text-lg">Company</p>
            <input class="bg-purple-300 border-gray-950 w-full p-2 border-2 rounded-md" type="text" name="company" value="{{$data->company}}" />
            @error('company')
                <p class="text-red-600">{{$message}}</p>
            @enderror
            <p class="font-semibold text-lg">Country</p>
            <input class="bg-purple-300 border-gray-950 w-full p-2 border-2 rounded-md" type="text" name="country" value="{{$data->country}}" id="">
            @error('country')
            <p class="text-red-600">{{$message}}</p>
            @enderror
            <p class="font-semibold text-lg">Skills</p>
            <textarea name="habilities" id="" class="bg-purple-300 rounded-md w-full p-2 border-2 border-gray-950 leading-tight appearance-none " cols="30" rows="5">{{$data->habilities}}</textarea>
            @error('habilities')
            <p class="text-red-600">{{$message}}</p>
            @enderror
            <p class="font-semibold text-lg">Experience</p>
            <textarea name="experience" id="" class="bg-purple-300 rounded-md w-full p-2 border-2 border-gray-950 leading-tight appearance-none " cols="30" rows="5">{{$data->experience}}</textarea>
            @error('experience')
            <p class="text-red-600">{{$message}}</p>
            @enderror
            <p class="font-semibold text-lg">Education</p>
            <textarea name="education" id="" class="bg-purple-300 rounded-md w-full p-2 border-2 border-gray-950 leading-tight appearance-none " cols="30" rows="5">{{$data->education}}</textarea>
            @error('education')
            <p class="text-red-600">{{$message}}</p>
            @enderror
        </div>
        <button class="bg-blue-500 shake-horizontal text-white text-xl font-semibold flex w-full justify-center py-5 rounded-lg mt-5 mb-5 ">Confirm</button>
    </form>
</x-layout>