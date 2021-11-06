<x-layout>
<div class="container my-5">

    <div class="row">
        <div class="card-group my-5">


        @foreach ($products as $product)
        <div class="col-4 my-3 ">
            {{-- <a href="{{ route( 'amazingproduct.show', [ 'amazingProduct' => $product->slug ] ) }}"> --}}
                <a href="{{ route('product.show' , ['product' => $product->id]) }}">
            <div class="card ">
                <img class="card-img-top" src="{{ asset('/storage/'. $product->image ) }}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">{{ $product->name }} </h5>
                  <p class="card-text">{{ str_split($product->explanation,130)[0] }}</p>
                </div>
            </div>
            </a>
        </div>
        @endforeach


        </div>
</div>

</div>
</x-layout>
