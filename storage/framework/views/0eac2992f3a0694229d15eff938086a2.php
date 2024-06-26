
<?php $__env->startSection('content'); ?>

<div class="pt-32">
    <div class="w-full max-w-3xl mx-auto">
        <div>
            <h1 class="title text-[44px] leading-[55px] font-bold text-black">
                <?php echo e($article ? html_entity_decode($article->title) : ''); ?>

            </h1>
            <div class="mt-8">
                <p class="font-medium text-base text-black"><?php echo e($article ? html_entity_decode($article->writer) : ''); ?></p>
                <p class="text-sm text-black"><?php echo e($article ? date('d M Y', strtotime($article->created_at)) : ''); ?></p>
            </div>
            <div class="border-t border-gray-200 mt-5"></div>
        </div>

        <div class="mt-10">
            <img src="<?php echo e($article ? asset('cover_article/' . $article->cover) : ''); ?>" alt="" class="w-full h-96 rounded-lg object-cover">
        </div>

        <div class="mt-5">
            <p class="text-lg text-black mt-5">
                <?php echo $article ? nl2br($article->content) : ''; ?>

            </p>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\CodingFerrol\arsikom_project\resources\views/home/detailBlog.blade.php ENDPATH**/ ?>