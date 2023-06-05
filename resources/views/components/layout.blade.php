<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>JobsPlatForm | Home</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
</head>
<body>
    <nav class="w-full py-5 bg-purple-500 flex px-16 justify-between">
        <div class="w-1/2">
            <h3 class="text-lg font-semibold text-white">
                JobsPlatForm
            </h3>
        </div>
        <div class="w-1/3">
            <ul class="list-none flex justify-around items-center">
                @if (auth()->user())
                <li><a class="text-decoration-none text-white font-medium" href="/main">Home</a></li>
                <li><a class="text-decoration-none text-white font-medium" href="/jobs">Jobs</a></li>
                @if (auth()->user() && auth()->user()->role == 'employer')
                    <li><a href="/applications" class="text-decoration-none text-white font-medium">Applications</a></li>
                @endif
                <li><a class="text-decoration-none text-white text-lg font-medium" href="/my-profile"><i class="bi bi-person-square"></i></a></li>
                
                    <li><a href="/logout" class="bg-red-600 text-white font-semibold py-1 px-3 hover:bg-red-700 transition-all">Logout</a></li>
                @endif
            </ul>
        </div>
    </nav>
    {{$slot}}
    <footer>    

    </footer>
</body>
</html>