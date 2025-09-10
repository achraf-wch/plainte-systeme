<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Document</title>
    @vite(['resources/js/app.js', 'resources/sass/app.scss'])
</head>
<body style="height:100vh">
    <x-header
   section="citoyen section" lastPage="homePage" nom="" prenom="">
</x-header>
<x-success></x-success>
<x-errors></x-errors>
    <div class="container mt-4">
        <div class="col-12 text-center">
            <p>vous aves un compte ?</p>
        </div>
        <div class="col-12">
            <form method='post' class="" action="{{route('citoyen.LoginHandle')}}">
                @csrf
               
                    <input class="form-control text-center p-3 text-success border-3 border-success rounded-pill"
                              type="text" name="CIN"  placeholder="CIN"> 
                    <input  class="mt-3 form-control text-center p-3 text-primary text-success border-3 border-success rounded-pill"
                              type="text" name="motpass" placeholder="motpass">
                    <button type="submit" class="mt-3 btn btn-lg btn-outline-success col-12 rounded-pill">entrer</button>
                
            </form>
        </div>
        <div class="mt-5">
            <p class="text-center">creé un compte</p>
            <a class="btn btn-outline-success btn-lg col-12 rounded-pill" href="{{route('citoyen.Regester')}}">sign in</a>
        </div>
    </div>
</body>

</html>