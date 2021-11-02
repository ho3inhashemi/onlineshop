<x-layout>
    <div class="container">

            <table class="table table-dark mt-4">
              <thead>
                <tr>
                  <th>name</th>
                  <th>quantity</th>
                  <th>price(per product)</th>
                </tr>
              </thead>
              <tbody>

                @foreach ($items as $row)

                <tr>
                  <td>{{ $row['name'] }}</td>
                  <td>{{ $row['quantity'] }}</td>
                  <td>{{ $row['price'] }}</td>
                </tr>

                @endforeach


              </tbody>
            </table>
            {{-- total price:<br/> --}}
            {{-- {{ Cart::getTotal() }} --}}

            <div class="alert alert-info" role="alert">
                Totally you must pay {{ Cart::getTotal() }}<br/>
                If you are sure,please write your address below and press purchase button
            </div>

            <form action="{{ route('cart.order.store') }}" method="post">
              @csrf
                <div class="form-group">
                  {{-- <label for="address">Please enter your address</label> --}}
                  <textarea name="address" id="address" class="form-control" placeholder="Your address..." cols="30" rows="10" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Purchase</button>
            </form>



        </div>
    </x-layout>
