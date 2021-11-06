<?php $__env->startSection('content'); ?>
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

                         <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <?php $__currentLoopData = $order->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td><?php echo e($item->pivot->order_id); ?></td>
                          <td><?php echo e($item->pivot->product_id); ?></td>
                          <td><?php echo e($item->pivot->name); ?></td>
                          <td><?php echo e($item->pivot->quantity); ?></td>
                          <td><?php echo e($item->pivot->price); ?></td>
                        </tr>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.include.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\shopApp\resources\views/orders/show.blade.php ENDPATH**/ ?>