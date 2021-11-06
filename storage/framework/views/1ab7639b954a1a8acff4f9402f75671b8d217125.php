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
                         <?php if(count($orders)>0): ?>
                         <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                          <td><?php echo e($order->order_name); ?></td>
                          <td><?php echo e($order->order_number); ?></td>
                          <td><?php echo e($order->status); ?></td>
                          <td><?php echo e($order->grand_total); ?></td>
                          <td><?php echo e($order->item_count); ?></td>
                          <td><?php echo e($order->shipping_fullname); ?></td>
                          <td><?php echo e($order->shipping_address); ?></td>
                          <td><?php echo e($order->shipping_city); ?></td>
                          <td><?php echo e($order->shipping_state); ?></td>
                          <td><?php echo e($order->shipping_zipcode); ?></td>
                          <td><?php echo e($order->shipping_phone); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
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

<?php echo $__env->make('admin.include.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\shopApp\resources\views/orders/index.blade.php ENDPATH**/ ?>