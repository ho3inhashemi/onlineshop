<x-layout>

<div class="row">

    <div class="col-10">
            <table class="table table-dark mt-4">
                <thead>
                  <tr>
                    <th>order number</th>
                    <th>address</th>
                    <th>datetime</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach ($orders as $order)

                  <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->address }}</td>
                    <td>{{ $order->updated_at }}</td>
                  </tr>

                  @endforeach


                </tbody>
              </table>
    </div>
</div>
<div class="row">
    <div class="col-10">
        <table class="table table-dark mt-4">
            <thead>
              <tr>
                <th>name</th>
                <th>price(per product)</th>
                <th>quantity</th>
                <th>related to order number</th>
              </tr>
            </thead>
            <tbody>

              @foreach ($orderItems as $orderItem)

              <tr>
                <td>{{ $orderItem->name }}</td>
                <td>{{ $orderItem->price }}</td>
                <td>{{ $orderItem->quantity }}</td>
                <td>{{ $orderItem->order_id }}</td>
              </tr>

              @endforeach


            </tbody>
          </table>

          @if ((count($orderItems) == 0) && (count($orders) == 0))
          <div class="alert alert-danger text-center mt-5"><h2>you have not any order yet</div>
          @endif

</div>
</div>

</x-layout>
