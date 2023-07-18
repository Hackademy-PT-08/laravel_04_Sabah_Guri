<x-layout>
    <x-navbar/>

  <div class="container" style="background-color: antiquewhite">  <h1 class="h1 myColor text-center">Pagina prodotti</h1></div>
  <div class="container my-5" style="background-color: antiquewhite">
    <div class="row">
        
            @foreach ($products as $product)
                <div class="col-12 col-md-4 mb-3 my-4">
                    
                    <x-card id="{{$product['id']}}" name="{{$product['name']}}" year="{{$product['year']}}" price="{{$product['price']}}" route="product-detail" />
                   
                </div>
            @endforeach
        
    </div>
  </div>
  <x-footer/>
</x-layout>