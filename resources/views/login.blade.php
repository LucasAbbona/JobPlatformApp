<x-layout>
    <div class="w-full flex  h-min overflow-hidden">
        <div class="w-1/2 -mb-24 bg-yellow-100 flex justify-center items-center">
        <img src="./images/register.png" class="h-1/2" alt="">
    </div>
    <form class="bg-white flex flex-col py-2 gap-4 w-1/2 px-20" action="/login-user" method="post">
        @csrf
        @method('POST')
        <div class="flex flex-col gap-2 my-5">
            <h2 class="font-bold text-2xl text-center">JobsPlatForm</h2>
            <p class="text-center">Login and persue your dream job.</p>
        </div>
        <div class="flex flex-col">
            <label for="">Email</label>
            <input type="text" name="email" class="border-2 rounded-md p-2" value="{{old('email')}}">
            @error('email')
                <p>{{$message}}</p>
            @enderror
        </div>
        <div class="flex flex-col">
            <label for="">Password</label>
            <input type="password" class="border-2 rounded-md p-2" name="password">
            @error('password')
                <p>{{$message}}</p>
            @enderror
        </div>
        <button class="bg-red-500 hover:bg-red-600 transition-all text-white rounded-md py-2">Login</button>
        <a href="/" class="mt-3 hover:underline text-center">I don't have an account yet</a>
    </form>
    </div>
    
</x-layout>