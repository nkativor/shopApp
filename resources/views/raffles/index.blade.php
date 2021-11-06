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
               <h4>All Raffles</h4>
             </div>
             <div class="card-body">
               <div class="table">
                 <div class="table-responsive">
                   <table class="table">
                     <table class="table table-bordered">
                       <thead>
                         <tr>
                           <th>Name</th>
                           <th>Amount</th>
                           <th>Slot</th>
                           <th>Ig_Handle</th>
                           <th>Delete</th>
                         </tr>
                       </thead>
                       <tbody>
                         @if(count($raffles)>0)
                         @foreach($raffles as $raffle)
                        <tr>
                          <td>{{$raffle->name}}</td>
                          <td>{{$raffle->amount}}</td>
                          <td>{{$raffle->slot}}</td>
                          <td>{{$raffle->ig_handle}}</td>
                          <td>
                            <form class="" action="{{ url('raffles.destroy',$raffle->id)}}" method="post">
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
             </div>
           </div>

      </div><!-- /.container-fluid -->

      <!-- Main row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection
