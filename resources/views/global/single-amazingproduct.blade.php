
<x-layout>

    <div class="container">

<div class="row">
<div class="col-8">
<div class="d-flex justify-content-center mt-5">
    <div class="card text-center" style="width:400px">
        <img class="card-img-top" src="{{ $amazingProduct->img }} " alt="Card image" style="width:100%">
        <div class="card-body">
          <h4 class="card-title">{{ $amazingProduct->En_name }} </h4>
          <p class="card-text">{{ $amazingProduct->explanation }} </p>

          <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="{{ $amazingProduct->id }}" name="id">
            <input type="hidden" value="{{ $amazingProduct->En_name }}" name="name">
            <input type="hidden" value="{{ $amazingProduct->price }}" name="price">
            <input type="hidden" value="{{ $amazingProduct->img }}"  name="img">
            <input type="hidden" value="1" name="quantity">
            <button class="px-4 py-2 btn btn-primary">Add To Cart</button>
        </form>

        </div>
      </div>
    </div>
</div>
<div class="col-4">
    <h4 class="my-5">more datails:</h4>
    <ul>
        <li>price:   {{ $amazingProduct->price }}</li>
        <li></li>
    </ul>
</div>
</div>

</div>


<!-- maybe will be changed with a separate component -->

<h3 class="my-5 text-center">craete your comments & read others comments</h3>
<hr class="my-5 text-center" />

<form action="{{ route('commentstore') }}">
    <input type="hidden" name="product_id" class="form-control" value="{{ $amazingProduct->id}}">
    <input type="hidden" name="reply_id" class="form-control" value="0">
    <textarea name="body" cols="60" rows="1" class="form-control" placeholder="your comment"></textarea><br />
    <input type="submit" class="btn btn-primary"><br /><br />
</form>


@foreach($comments as $comment)
   {{ $comment->body }}<br />
   <form action="{{ route('commentstore') }}">
   <textarea name="body" cols="60" rows="1" placeholder="your reply" class="mx-3 mt-2"></textarea><br />
    <input type="hidden" name="product_id" class="form-control" value={{ $amazingProduct->id }}>
    <input type="hidden" name="reply_id" class="form-control" value="{{ $comment->reply_id +1 }}">
    <input type="submit" value="send" class="mx-3 mt-2 btn btn-primary">
    </form>
   @if ( $comment->replies )
       @foreach($comment->replies as $rep)
           {{ $rep->body }}<br />
           <form action="{{ route('commentstore') }}">
            <textarea name="body" cols="60" rows="1" class="form-control" placeholder="your reply" class="mx-3 mt-2"></textarea><br />
             <input type="hidden" name="product_id" class="form-control" value={{ $amazingProduct->id }}>
             <input type="hidden" name="reply_id" class="form-control" value="{{ $rep->reply_id +1 }}">
             <input type="submit" value="send" class="mx-3 mt-2 btn btn-primary">
             </form>

       @endforeach
   @endif
@endforeach
<br />
</x-layout>




@if(session('success'))

<div class="alert alert-danger" role="alert">{{ session('success') }}</div>

@endif
