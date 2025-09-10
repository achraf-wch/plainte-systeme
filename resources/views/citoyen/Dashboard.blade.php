<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Document</title>

    @vite(['resources/js/app.js', 'resources/sass/app.scss'])
    <link rel="stylesheet" href="../../css/citoyen.css">
</head>
<body>
    <x-header
       section="citoyen section" lastPage="citoyen.Login" nom="{{session('nom')}}" prenom="{{session('prenom')}}">
    </x-header>
    <div class="d-flex justify-content-center align-items-center" style="height:80vh">
        <div class="card border-2 p-5 border-5 border-success rounded-pill">
            <div class="card-body p-5">
                <h1 class="text-center">
                    <card class="card-title">votre plaintes</card>
                </h1>
                <div class="row mt-3">
                    <div class="col-12 text-center">
                        <a class=" btn btn-outline-success" href="{{route('citoyen.Palques')}}">
                            <card class="card-title">voir mes plaintes</card>
                        </a>
                    </div>
                    <div class="col-12 mt-4 text-center">
                        <a class=" btn btn-outline-success" href="{{route('citoyen.Store')}}">
                            <card class="card-title">ajouter une plainte</card>
                        </a>
                    </div>
                </div>


            </div>
        </div>
    </div>



</body>

</html>