<x-layout>
    <x-navbar/>
        <div class="container">
            <div class="row justify-content-center">
              <x-card
              id="{{$product['id']}}"
              name="{{$product['name']}}"
              year="{{$product['year']}}"
              price="{{$product['price']}}"
              route="all-products"
              
              />
            </div>
        </div>
    <x-footer/>
</x-layout>

