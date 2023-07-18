


<div class="card" style="width: 18rem;">
    <img src="https://picsum.photos/536/354" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$name}} </h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.
      </p>
      <p class="card-text h6">Anno:{{$year}}

      </p>
      <p class="card-text h6">Prezzo:{{$price}}</p>
      

      <a href="{{route($route,['id'=>$id])}}" class="btn btn-primary">Pagina dettaglio</a>
    </div>
  </div>