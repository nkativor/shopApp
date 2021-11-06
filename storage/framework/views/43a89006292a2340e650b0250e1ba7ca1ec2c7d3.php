<?php echo $__env->make('frontend.include.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('frontend.include.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
             <?php $__currentLoopData = $cartItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td><?php echo e($item->name); ?></td>
                <td>
                  <?php echo e($item->price); ?>

                </td>
                <td>
                  <form class="" action="<?php echo e(route('cart.update',$item->id)); ?>">
                    <input type="number" name="quantity" value=<?php echo e($item->quantity); ?>>
                    <button type="submit" class="btn btn-primary">save</button>
                  </form>
                </td>
                <td>
                  <a href="<?php echo e(route('cart.destroy',$item->id)); ?>">
                    <button type="button"class="btn btn-danger">remove</button>
                  </a>
                </td>
              </tr>

              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <h4 style="margin-left:25px">
                  Total Price:GH <?php echo e(Cart::session(3)->getTotal()); ?>

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
  <a href="<?php echo e(route('index')); ?>" style="margin-left:560px;padding-bottom:4px">
  <button type="button" name="button" class="btn btn-primary">Proceed to Checkout</button>
  </a>
</div>
<?php echo $__env->make('frontend.include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\xampp\htdocs\shopApp\resources\views/cart/index.blade.php ENDPATH**/ ?>