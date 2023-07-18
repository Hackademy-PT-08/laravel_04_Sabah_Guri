<x-layout>
    <x-navbar/>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card" style="width: 18rem;">
                        <img src="https://picsum.photos/536/354" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">{{$product['name']}} </h5>
                          <p class="card-text">
                            Some quick example text to build on the card title and make up the bulk of the card's content.

                          </p>
                          <p class="card-text h6">Anno:{{$product['year']}} </p>
                          <p class="card-text h6">Prezzo:{{$product['price']}} </p>

                          <a href="{{route('all-products')}}" class="btn btn-primary">Torna indietro</a>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    <x-footer/>
</x-layout>