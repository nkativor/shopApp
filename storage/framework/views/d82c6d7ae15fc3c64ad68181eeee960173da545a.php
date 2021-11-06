<?php echo $__env->make('frontend.include.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('frontend.include.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

 <div class="container" style="background-image:url('<?php echo e(asset('images/raf.jpg')); ?>');">
   <div class="row justify content-center">
     <div class="col-md-8">
       <div class="card mt-3" style="margin-left: 250px;background-color:#F5F5DC;">
         <div class="card-header">
           <h4>Buy Raffle</h4>
         </div>
         <div class="card-body">
           <form class="form-group" action="<?php echo e(route('raffle.store')); ?>" method="post">
             <div class="form-group">
               <?php echo csrf_field(); ?>
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

<?php echo $__env->make('frontend.include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\xampp\htdocs\shopApp\resources\views/raffles/create.blade.php ENDPATH**/ ?>