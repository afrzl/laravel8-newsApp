<?php $__env->startSection('container'); ?>

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h1 class="mb-3"><?php echo e($post->title); ?></h1>

            <p>By. <a href="/posts?author=<?php echo e($post->author->username); ?>"
                    class="text-decoration-none"><?php echo e($post->author->name); ?></a>
                in <a href="/posts?category=<?php echo e($post->category->slug); ?>"
                    class="text-decoration-none"><?php echo e($post->category->name); ?></a>
            </p>

            <?php if($post->image): ?>
            <div style="max-height: 350px; overflow:hidden">
                <img src="<?php echo e(asset('storage/' . $post->image)); ?>" alt="<?php echo e($post->category->name); ?>" class="img-fluid">
            </div>
            <?php else: ?>
            <img src="https://source.unsplash.com/1200x400?<?php echo e($post->category->name); ?>"
                alt="<?php echo e($post->category->name); ?>" class="img-fluid">
            <?php endif; ?>

            <article class="my-3 fs-5">
                <?php echo $post->body; ?>

            </article>

            <a href="/posts" class="d-block mt-3">Back To Post</a>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\coba-laravel\resources\views/post.blade.php ENDPATH**/ ?>