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
    lastPage="admin.Login" nom="{{session('nom')}}" prenom="{{session('prenom')}}" section="admin section">
</x-header>
  <div class=" p-5 d-flex justify-content-center align-items-center" style="height:80vh">
 <div class="card p-5  border-3 border-success rounded-pill">
        <card class="card-body">
          <div class="card-title text-center fs-2">{{session('nom')}} {{session('prenom')}}</div>
          <div class="card-title"><a class="btn btn-lg btn-outline-success border-3 border-sucsess rounded-pill" style="width:100%" href="{{route('admin.Palques_All')}}">tout les plaintes</a></div>
          <div class="card-title"><a class="btn btn-lg btn-outline-success border-3 border-sucsess rounded-pill" style="width:100%" href="{{route('admin.Palques_Search')}}">chercher par citoyen</a></div>
        </card>
      </div>
  </div>
     
</body>
</html>