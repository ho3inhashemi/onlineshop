<x-layout>

    <div class="container">

<!-- main carousel of page -->

    <div id="carouselExampleControls" class="carousel slide mt-5" data-ride="carousel">

    <div>
        <div class="carousel-inner">
            @foreach ($sliders as $slider)
        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
            <img src="{{ $slider->img }}" width="300px" height="300px" class="d-block w-100" alt="slider-images">
            {{ $slider->title }}
            <br />
            {{ $slider->explanation }}
        </div>
            @endforeach
        </div>


        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
        </div>
    </div>



        {{-- @if(session('order_recorded'))
            <div class="alert alert-secondary my-3">{{ session('order_recorded') }}</div>
        @endif --}}

        <h3 class="mt-5">Amazing Product List</h3>
        <hr />


<!-- amazing product list of page -->

    <div class="row">
            <div class="card-group my-5">


            @foreach ($amazingProducts as $amazingProduct)
            <div class="col-4 my-3 ">
                <a href="{{ route( 'amazingproduct.show', [ 'amazingProduct' => $amazingProduct->slug ] ) }}">

                <div class="card ">
                    <img class="card-img-top" src="{{ $amazingProduct->img }}" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title">{{ $amazingProduct->En_name }} </h5>
                      <p class="card-text">{{ str_split($amazingProduct->explanation,130)[0] }}</p>
                    </div>
                </div>
                </a>
            </div>
            @endforeach


            </div>
    </div>



    </div>
</x-layout>

