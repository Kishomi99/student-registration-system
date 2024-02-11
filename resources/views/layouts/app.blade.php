<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Registration</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class=" bg-gray-800">
        <div class="h-16 px-8 flex items-center">
            <p class="text-white font-bold ">Student Registration System</p>
        </div>
    </div>
    @yield('content')
    
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('js')
</body>
</html>