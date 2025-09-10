<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Document</title>
    @vite(['resources/js/app.js', 'resources/sass/app.scss'])
    <link rel="stylesheet" href="../../css/citoyen.css">
</head>
</head>
<body >
  <x-header
     section="citoyen section" lastPage="citoyen.Dashboard" nom="{{session('nom')}}" prenom="{{session('prenom')}}">
</x-header>
    <x-success></x-success>
    <x-errors></x-errors>
    <div class="container mt-5" style="height:80vh">
           <form  method='post' action="{{route('citoyen.StoreHandle')}}">
            @csrf
            <input type="text" class="form-control p-3 text-center text-success border-3 border-success rounded-pill" name="plainte" placeholder="votre plainte:"> <br/>
            <button class="btn btn-lg btn-outline-success rounded-pill col-12" type="submit ">ajouter</button>
            </form> 
    </div>
     
    
      
        
   
   
</body>
</html>