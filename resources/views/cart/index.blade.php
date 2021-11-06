@include('frontend.include.header')
@include('frontend.include.nav')

<div class="container text-center">
      <div class="">
      <div class="">
        <div class="card">
        <div class="card-header">
           <h3>Cart</h3>
        </div>
        <div class="card-body">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
             @foreach($cartItems as $item)
              <tr>
                <td>{{$item->name}}</td>
                <td>
                  {{$item->price}}
                </td>
                <td>
                  <form class="" action="{{ route('cart.update',$item->id) }}">
                    <input type="number" name="quantity" value={{$item->quantity}}>
                    <button type="submit" class="btn btn-primary">save</button>
                  </form>
                </td>
                <td>
                  <a href="{{ route('cart.destroy',$item->id)}}">
                    <button type="button"class="btn btn-danger">remove</button>
                  </a>
                </td>
              </tr>

              @endforeach
              <tr>
                <h4 style="margin-left:25px">
                  Total Price:GH {{Cart::session(3)->getTotal()}}
                </h4>
              </tr>
            </tbody>
          </table>
        </div>
        </div>
      </div>

    </div>
</div>
<div class="py-4 row">
  <a href="{{ route('index') }}" style="margin-left:560px;padding-bottom:4px">
  <button type="button" name="button" class="btn btn-primary">Proceed to Checkout</button>
  </a>
</div>
@include('frontend.include.footer')
