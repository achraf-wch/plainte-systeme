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
      lastPage="admin.Dashboard" nom="{{session('nom')}}" prenom="{{session('prenom')}}" section="admin section">
    </x-header>
    <x-errors></x-errors>
    <div class="container mt-4">
      <form action="{{route('admin.Palques_Search_Handle')}}" method="post">
        @csrf
        <div class="">
          <input type="text" class="form-control p-3 text-center"
            name="CIN" placeholder="CIN:"> <br />
        </div>
        <div class="col">
          <button class="btn btn-lg col-12 text-center btn-outline-info"
            type="submit ">chercher</button>
        </div>
      </form>
    </div>
  </body>
</html>