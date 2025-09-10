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
    lastPage="admin.Dashboard" nom="{{session('nom')}}" prenom="{{session('prenom')}}"  section="admin section">
</x-header>
    @foreach($values as $plainte)
    <div class="card p-3">
        <div class="card-body">
            <div class="card-title">{{$plainte->CIN}}</div>
            <div class="card-text">{{$plainte->plainte}}</div>
            <div class="card-text"> created at: {{$plainte->created_at}}</div>
            <div class="card-text">updated at: {{$plainte->updated_at}}</div>
        </div>
    </div>
    @endforeach
</body>

</html>