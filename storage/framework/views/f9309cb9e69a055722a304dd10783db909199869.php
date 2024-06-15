<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
    <!--begin::Title-->
    <?php
        $breadName = 'Dashboard';
        $nav_name = "Orange Technology Dashboard";
        $nav_last = end($navs);
      
        if(@$navs[0] != null){
            $nav_name = $nav_last['name'];
        }
        // if(@$bread_)
    ?>

    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0"> <?php echo e(@$nav_name); ?></h1>
    <!--end::Title-->
    <!--begin::Breadcrumb-->
    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">

        <!--begin::Item-->
        
        <!--end::Item-->

        <!--begin::Item-->
        <?php if(@$navs): ?>
            <?php 
            $nav_end = key($navs);
            ?>
            <?php $__currentLoopData = $navs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index=>$nav): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             
                <li class="breadcrumb-item text-muted"><a href="<?php echo e(@$nav['url']); ?>" class="text-muted text-hover-primary"><?php echo e(@$nav['name']); ?></a></li>
                <?php if($index != $nav_end): ?>
                    <li class="breadcrumb-item"><span class="bullet bg-gray-400 w-5px h-2px"></span></li>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
        <!--end::Item-->
    </ul>
    <!--end::Breadcrumb-->
</div>
<?php /**PATH C:\laragon\www\gfm\resources\views/cleaner-end/layout/breadcrumbs.blade.php ENDPATH**/ ?>