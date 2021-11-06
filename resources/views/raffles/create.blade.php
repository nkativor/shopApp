@include('frontend.include.header')
@include('frontend.include.nav')

 <div class="container" style="background-image:url('{{ asset('images/raf.jpg')}}');">
   <div class="row justify content-center">
     <div class="col-md-8">
       <div class="card mt-3" style="margin-left: 250px;background-color:#F5F5DC;">
         <div class="card-header">
           <h4>Buy Raffle</h4>
         </div>
         <div class="card-body">
           <form class="form-group" action="{{ route('raffle.store')}}" method="post">
             <div class="form-group">
               @csrf
               <label for="">Name</label>
               <input type="text" name="name" value="" class="form-control" required>
             </div>
             <div class="form-group">
               <label for="">Price</label>
              <input type="text" name="amount" value="" class="form-control">
             </div>
             <div class="form-group">
               <label for="">Number of Slot</label>
               <select class="form-control" name="slot">
                 <option value=""></option>
                 <option value="1">1</option>
                 <option value="2">2</option>
               </select>
             </div>
             <div class="form-group">
               <label for="">InstagramHandle</label>
               <input type="text" name="ig_handle" value="" class="form-control" required>
             </div>
             <div class="form-group">
               <button type="submit" name="button" class="btn btn-warning btn-lg">Pay With Stripe</button>
             </div>
           </form>
         </div>
       </div>
     </div>
   </div>
 </div>

@include('frontend.include.footer')
