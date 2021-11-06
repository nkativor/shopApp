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
           <div class="button mt-3">
             <a href="{{ route('products.create') }}">
               <button type="button" class="btn btn-primary btn-lg">Add Box</button>
             </a>

           </div>

      </div><!-- /.container-fluid -->
      <div class="table">
        <div class="table-responsive">
          <table class="table">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Price</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                @if(count($products)>0)
                @foreach($products as $product)
               <tr>
                 <td>{{$product->name}}</td>
                 <td>{{$product->price}}</td>
                 <td>

                   <form class="" action="{{ url('products',$product->id)}}" method="post">
                     {{ csrf_field() }}
                     {{ method_field('DELETE') }}
                       <button class="btn btn-danger">Delete</button>
                   </form>
                 </td>

               </tr>
               @endforeach
               @endif
              </tbody>
            </table>
          </table>
        </div>
      </div>
      <!-- Main row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
