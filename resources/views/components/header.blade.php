
<div class="text-center" style="background-color:#014421">
        <div class="row fs-2 d-flex align-items-center justify-content-between" 
                          style="height:20vh;width:100%">
           <div class="col-2 text-end"><a class="text-info f text-decoration-none" 
                           href="{{route($lastPage)}}"><i class="fas fa-angle-double-right"></i></a></div>
           <div class="col text-start"><a class="text-info f2 text-decoration-none" 
                           href="{{route('homePage')}}"><i class="fas fa-home"></i></a></div>
           <div class="col text-start">{{$section}}</div>
           <div class="col">{{$nom}} {{$prenom}}</div>
        </div>
</div>
    
