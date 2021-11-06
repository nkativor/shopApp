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
               <h4>All Orders</h4>
             </div>
             <div class="card-body">
               <div class="table">
                 <div class="table-responsive">
                   <table class="table">
                     <table class="table table-bordered">
                       <thead>
                         <tr>
                           <th>OrderName</th>
                           <th>OrderNumber</th>
                           <th>Status</th>
                           <th>GrandTotal</th>
                           <th>ItemCount</th>
                           <th>shipping_fullname</th>
                           <th>shipping_address</th>
                           <th>shipping_city</th>
                           <th>shipping_state</th>
                           <th>shipping_zipcode</th>
                           <th>shipping_phone</th>
                         </tr>
                       </thead>
                       <tbody>
                         @if(count($orders)>0)
                         @foreach($orders as $order)
                        <tr>
                          <td>{{$order->order_name}}</td>
                          <td>{{$order->order_number}}</td>
                          <td>{{$order->status}}</td>
                          <td>{{$order->grand_total}}</td>
                          <td>{{$order->item_count}}</td>
                          <td>{{$order->shipping_fullname}}</td>
                          <td>{{$order->shipping_address}}</td>
                          <td>{{$order->shipping_city}}</td>
                          <td>{{$order->shipping_state}}</td>
                          <td>{{$order->shipping_zipcode}}</td>
                          <td>{{$order->shipping_phone}}</td>
                        </tr>
                        @endforeach
                        @endif
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
