<?php $__env->startSection("content"); ?>
<!-- product section -->
<div class="product-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">
                    <h3><span class="orange-text">أفسام</span> الموقع</h3>
                    <p>
                        متعة التسوق عبر فروعنا
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="http://localhost/Laravel%20First%20Project/public/product">
                                <img src="<?php echo e(url($item->imagepath)); ?>"
                                    alt="" style="max-height:250px;min-height:250px;">
                            </a>
                        </div>
                        <h3><?php echo e($item->name); ?></h3>
                        <p class="product-price"><span><?php echo e($item->quantity); ?></span><?php echo e($item->price); ?> $</p>
                        <p><?php echo e($item->description); ?></p>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        </div>
    </div>
</div>
<!-- end product section -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel First Project\resources\views/product.blade.php ENDPATH**/ ?>