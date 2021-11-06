<?php $__env->startSection('content'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="col-md-10">
          <div class="card m-5">
            <div class="card-header">
              <h4>Add MysteryBox/Product</h4>
            </div>
            <div class="card-body">
              <form class="form-group" action="<?php echo e(route('products.store')); ?>" method="post" enctype="multipart/form-data">
                <div class="form">
                  <label for="">Name</label>
                  <input type="text" name="name" value="" class="form-control" required>
                </div>
                <?php echo csrf_field(); ?>
                <div class="form">
                  <label for="">Price</label>
                  <input type="number" name="price" value="" class="form-control" required>
                </div>
                <div class="form">
                  <label for="">Image</label>
                  <input type="file" name="image" value="" class="form-control" required>
                </div>
                <div class="form">
                  <label for="">Description</label>
                  <textarea name="description" rows="8" cols="80" class="form-control" required> </textarea>
                </div>
                <div class="btn">
                  <button type="submit" name="button" class="btn btn-primary">Add item</button>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div><!-- /.container-fluid -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.include.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\shopApp\resources\views/products/create.blade.php ENDPATH**/ ?>