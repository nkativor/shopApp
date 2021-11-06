@extends('admin.include.app')
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
           <div class="card">
             <div class="card-header text-center">
               <h4> Order Details</h4>
             </div>
             <div class="card-body">
               <div class="table">
                 <div class="table-responsive">
                   <table class="table">
                     <table class="table table-bordered">
                       <thead>
                         <tr>
                           <th>OrderId</th>
                           <th>ProductId</th>
                           <th>Name</th>
                           <th>Quantity</th>
                           <th>Price</th>

                         </tr>
                       </thead>
                       <tbody>

                         @foreach($orders as $order)
                           @foreach($order->items as $item)
                        <tr>
                          <td>{{$item->pivot->order_id}}</td>
                          <td>{{$item->pivot->product_id}}</td>
                          <td>{{$item->pivot->name}}</td>
                          <td>{{$item->pivot->quantity}}</td>
                          <td>{{$item->pivot->price}}</td>
                        </tr>
                          @endforeach
                        @endforeach
                      
                       </tbody>
                     </table>
                   </table>
                 </div>
               </div>
             </div>
           </div>

      </div><!-- /.container-fluid -->

      <!-- Main row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
