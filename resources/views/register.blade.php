<x-layout>
    <div class="w-full flex  h-min overflow-hidden">
        <div class="w-1/2 -mb-24 bg-yellow-100 flex justify-center items-center">
            <img src="./images/register.png" class="h-1/2" alt="">
        </div>
        <form class=" flex flex-col w-1/2 m-auto my-0 bg-white gap-2 px-20 py-2" action="/create-user" method="POST">
            @csrf
            @method('POST')
            <div class="flex flex-col gap-2 my-5">
                <h2 class="font-bold text-2xl text-center">JobsPlatForm</h2>
                <p class="text-center">Register and get your dreams job.</p>
            </div>
            <div class="flex flex-col gap-2">
                <label for="">Email</label>
                <input class="border-2 p-1 rounded-md outline-none" type="text" value="{{old('email')}}" name="email" id="">
                @error('email')
                    <p class="text-red-500 text-xs"><i class="bi bi-exclamation-circle-fill"></i> {{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-col gap-2">
                <label for="">Password</label>
                <input class="border-2 p-1 rounded-md outline-none" type="password" name="password" id="">
                @error('password')
                    <p class="text-red-500 text-xs"><i class="bi bi-exclamation-circle-fill"></i> {{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-col gap-2">
                <label for="">Repeat Password</label>
                <input class="border-2 p-1 rounded-md outline-none" type="password" name="password_confirmation" id="">
                @error('password_confirmation')
                    <p class="text-red-500 text-xs"><i class="bi bi-exclamation-circle-fill"></i> {{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-col gap-2">
                <label for="">Name</label>
                <input class="border-2 p-1 rounded-md outline-none" type="text" value="{{old('name')}}" name="name" id="">
                @error('name')
                    <p class="text-red-500 text-xs"><i class="bi bi-exclamation-circle-fill"></i> {{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-col gap-2">
                <label for="">Age</label>
                <input class="border-2 p-1 rounded-md outline-none" type="number" value="{{old('age')}}" name="age">
                @error('age')
                    <p class="text-red-500 text-xs"><i class="bi bi-exclamation-circle-fill"></i> {{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-col gap-2">
                <label for="">Country</label>
                <input class="border-2 p-1 rounded-md outline-none" type="text" value="{{old('country')}}" name="country">
                @error('country')
                    <p class="text-red-500 text-xs"><i class="bi bi-exclamation-circle-fill"></i> {{$message}}</p>
                @enderror
            </div>
            <div class="flex flex-col gap-2">
                <label for="">Select Role</label>
                <select name="role" class="border-2" id="">
                    <option value="seeker">Seeker</option>
                    <option value="employer">Employer</option>
                </select>
                @error('role')
                    <p class="text-red-500 text-xs"><i class="bi bi-exclamation-circle-fill"></i> {{$message}}</p>
                @enderror
            </div>
            <button class=" bg-green-700 transition-all p-2 rounded-2xl text-white font-semibold hover:bg-green-600" type="submit">Registrar</button>
            <a href="/login" class="text-center mt-2 hover:underline">I have an account</a>
            </form>
    </div>
</x-layout>
    