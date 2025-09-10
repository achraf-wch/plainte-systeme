<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Document</title>

  @vite(['resources/js/app.js', 'resources/sass/app.scss'])

  <link rel="stylesheet" href="../../css/citoyen.css">
</head>




<body >
  <x-header
   section="citoyen section" lastPage="citoyen.Login" nom="" prenom="">
</x-header>
<x-errors></x-errors>
  <div class="container pt-3 pb-5">
    <div class="col-12 text-center">
      <p>creer un comte</p>
    </div>
    <form method='post' action="{{route('citoyen.Regester')}}" class="text-center">
      @csrf
        <input class="form-control text-center text-seccuss border-3 rounded-pill border-success p-3 "
                 type="text"  name="nom" placeholder="nom"> <br />
        <input class="form-control text-center text-seccuss border-3 rounded-pill border-success p-3 "
                 type="text" name="prenom" placeholder="prenom"> <br />
        <input class="form-control text-center text-seccuss border-3 rounded-pill border-success p-3 "
                 type="text" name="CIN" placeholder="CIN"> <br />
        <input class="form-control text-center text-seccuss border-3 rounded-pill border-success p-3 "
                  type="text"  name="adress" placeholder="adress"> <br />
        <input class="form-control text-center text-seccuss border-3 rounded-pill border-success p-3 "
                  type="password" name="password" placeholder="password"> <br />
      <button type="submit" class="col-12 btn btn-outline-success btn-lg rounded-pill">ajouter </button>
    </form>
  </div>


</body>

</html>