
<x-layout>

    <div class="container">



<div class="d-flex justify-content-center mt-5">
    <div class="card text-center" style="width:400px">
        <img class="card-img-top" src="{{ $amazingProduct->img }} " alt="Card image" style="width:100%">
        <div class="card-body">
          <h4 class="card-title">{{ $amazingProduct->En_name }} </h4>
          <p class="card-text">{{ $amazingProduct->explanation }} </p>
          {{-- <a href="{{ url('add-to-cart/'.$amazingProduct->id) }}" class="btn btn-primary stretched-link" role="button">Add To Cart</a> --}}

          <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="{{ $amazingProduct->id }}" name="id">
            <input type="hidden" value="{{ $amazingProduct->En_name }}" name="name">
            <input type="hidden" value="{{ $amazingProduct->price }}" name="price">
            <input type="hidden" value="{{ $amazingProduct->img }}"  name="img">
            <input type="hidden" value="1" name="quantity">
            {{-- <button class="px-4 py-2 text-white bg-blue-800 rounded">Add To Cart</button> --}}
            <button class="px-4 py-2 btn btn-primary">Add To Cart</button>
        </form>

        </div>
      </div>
    </div>
</div>

</x-layout>




@if(session('success'))

<div class="alert alert-danger" role="alert">{{ session('success') }}</div>

@endif
