<?php echo $__env->make('frontend.include.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('frontend.include.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="text-center">
     <div class="col-md-12">
       <div class="text-center mt-4">
         <h2>Tell us a bit about Yourself</h2>
       </div>
       <div class="card">
         <div class="card-body">
           <div class="">
             <form class="" action="<?php echo e(route('store')); ?>" method="post">
               <?php echo csrf_field(); ?>
               <div class="row">
                 <div class="form-group col-md-6">
                   <label for="">Gender</label>
                   <input type="text" name="gender" value="" class="form-control" required>
                 </div>
                 <div class="form-group col-md-6">
                   <label for="">Height(cm)</label>
                   <input type="text" name="height" value="" class="form-control" required>
                 </div>

               </div>
               <div class="row">
                 <div class="form-group col-md-6">
                   <label for="">Date of Birth</label>
                   <input type="text" name="d_birth" value="" class="form-control" required>
                 </div>
                 <div class="form-group col-md-6">
                   <label for="">Favorite Color</label>
                   <input type="text" name="color" value="" class="form-control" required>
                 </div>
               </div>
               <div class="row">
                 <div class="form-group col-md-6">
                   <label for="">Waist Size</label>
                   <input type="text" name="w_size" value="" class="form-control" required>
                 </div>
                 <div class="form-group col-md-6">
                   <label for="">Shirt Size</label>
                   <select class="form-control" name="shirt_size">
                     <option value=""></option>
                     <option value="S(34/36)">S(34/36)</option>
                     <option value="M(36/38)">M(36/38)</option>
                     <option value="S(38/40)">L(38/40)</option>
                     <option value="S(42/44)">XL(42/44)</option>
                     <option value="S(46/48)">XXL(46/48)</option>
                     <option value="S(50/52)">XXXL(50/52)</option>
                   </select>
                 </div>
               </div>

               <div class="row">
                 <div class="form-group col-md-6">
                   <label for="">Trouser Length</label>
                   <input type="text" name="trouser_length" value="" class="form-control" required>
                 </div>
                 <div class="form-group col-md-6">
                   <label for="">Shoe Size</label>
                   <select class="form-control" name="shoe_size">
                     <option value=""></option>
                     <option value="6">6</option>
                     <option value="6.5">6.5</option>
                     <option value="7">7</option>
                     <option value="7.5">7.5</option>
                     <option value="8">8</option>
                     <option value="8.5">8.5</option>
                     <option value="9">9</option>
                     <option value="9.5">9.5</option>
                     <option value="10">10</option>
                     <option value="10.5">10.5</option>
                     <option value="11">11</option>
                     <option value="12">12</option>
                     <option value="13">13</option>
                   </select>
                 </div>
               </div>

               <hr>
                <div class="row py-6">
                  <div class="col-md-6">
                    <button type="submit" name="button" class="btn btn-primary btn-lg">Proceed to Checkout</button>
                  </div>
                  <div class="col-md-6">
                    <button type="submit" name="button" class="btn btn-danger btn-lg">Back</button>
                  </div>
                </div>

             </form>

           </div>
         </div>
       </div>


<?php echo $__env->make('frontend.include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\xampp\htdocs\shopApp\resources\views/details/index.blade.php ENDPATH**/ ?>