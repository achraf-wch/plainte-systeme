<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/js/app.js', 'resources/sass/app.scss'])
</head>
<body>
    <x-header
        lastPage="homePage" nom="" prenom="" section="admin section">
    </x-header>
    <x-errors></x-errors>
    <div class="container mt-5">
        <form action="{{route('admin.LoginHandle')}}" method='post'>
            @csrf
                <input class="mt-3 p-3 text-sucess form-control text-center  rounded-pill border-3 border-success" 
                          type="text" name="nom"  placeholder="nom">
                <input class="mt-3 p-3 text-success form-control text-center rounded-pill border-3 border-success"
                          type="text" name="password"  placeholder="motpass">
                <button class="mt-3 p-3 btn btn-lg col-12 btn-outline-success  border-success rounded-pill"
                          type="submit">enter</button>
        </form>
        <button class="mt-5 col-12 btn btn-lg btn-outline-success  border-success rounded-pill">
            <a class="" href="{{route('admin.Update')}}">changer motpass</a>
        </button>
    </div>
</body>
</html>