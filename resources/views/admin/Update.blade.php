<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/js/app.js', 'resources/sass/app.scss'])
</head>
<body class="mt-0 p-0">
  <x-header
      lastPage="admin.Login" nom="{{session('nom')}}" prenom="{{session('prenom')}}" section="admin section">
    </x-header>
    <x-success></x-success>
    <x-errors></x-errors>
    <div class="mt-5 container">
        <form action="{{route('admin.UpdateHandle')}}" method="post">
            @csrf
            <input class="form-control border-success border-2 rounded-pill text-center text-success p-3" 
                         type="text" placeholder="nom" name="nom">
            <input class="mt-3 border-success border-2 rounded-pill form-control text-center text-success p-3" 
                         type="text" placeholder="vieux motpass" name="vieux">
            <input class="mt-3 border-success border-2 form-control rounded-pill text-center text-success p-3" 
                          type="password" placeholder="new motpass" name="nouveau">
            <button class="mt-5 btn btn-lg btn-outline-success rounded-pill col-12">changer</button>
        </form>
    </div>
</body>
</html>