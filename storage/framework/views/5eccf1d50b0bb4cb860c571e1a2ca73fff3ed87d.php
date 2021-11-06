<?php echo $__env->make('frontend.include.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('frontend.include.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--Carousel Wrapper-->
<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-1z" data-slide-to="1"></li>
    <li data-target="#carousel-example-1z" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
      <div class="carousel-inner" role="listbox">

    <!--First slide-->
    <div class="carousel-item active" style="height:400px;">
      <img class="d-block w-100" src="<?php echo e(url('/images/airj2.png')); ?>"
        alt="First slide">
    </div>
    <!--/First slide-->
    <!--Second slide-->
    <div class="carousel-item" style="height:600px;">
      <img class="d-block w-100" src="<?php echo e(url('/images/airj3.jpg')); ?>"
        alt="Second slide">
    </div>
    <!--/Second slide-->
    <!--Third slide-->


  </div>
</div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->




	<div class="features">

	    </div>

      <div class="container">
        <h3 class="m_3">Products</h3>
        <div class="close_but"><i class="close1"> </i></div>

          <div class="row">
          <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="col-md-3 top_box">
            <div class="view view-ninth"><a href="single.html">
                      <img src="<?php echo e(asset('storage/images/'.$product->image)); ?>" class="img-responsive" alt="Image"/>
                      <div class="mask mask-1"> </div>
                      <div class="mask mask-2"> </div>
                        <div class="content">
                          <h2><?php echo e($product->name); ?></h2>
                          <p>Shop a mystery box and experience the surprises in online shopping.</p>
                        </div>
                     </a> </div>

                    <h4 class="m_4"><a href="#"><?php echo e($product->name); ?></a></h4>
                    <p class="m_5">Description:<?php echo e($product->description); ?></p>
                    <p class="m_5">Price:$<?php echo e($product->price); ?></p>
                    <a href="<?php echo e(route('cart.add',$product->id)); ?>">
                        <p class="m_5">Shop Now</p>
                    </a>

              </div>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

      </div>
<?php echo $__env->make('frontend.include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\xampp\htdocs\shopApp\resources\views/frontend/index.blade.php ENDPATH**/ ?>