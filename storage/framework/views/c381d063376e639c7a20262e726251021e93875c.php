<?php $__env->startSection('content'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
           <div class="button mt-3">
             <a href="<?php echo e(route('products.create')); ?>">
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
                <?php if(count($products)>0): ?>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <tr>
                 <td><?php echo e($product->name); ?></td>
                 <td><?php echo e($product->price); ?></td>
                 <td>

                   <form class="" action="<?php echo e(url('products',$product->id)); ?>" method="post">
                     <?php echo e(csrf_field()); ?>

                     <?php echo e(method_field('DELETE')); ?>

                       <button class="btn btn-danger">Delete</button>
                   </form>
                 </td>

               </tr>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               <?php endif; ?>
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.include.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\shopApp\resources\views/products/index.blade.php ENDPATH**/ ?>