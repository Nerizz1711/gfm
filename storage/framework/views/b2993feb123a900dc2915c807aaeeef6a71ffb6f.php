<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <?php echo $__env->make("$prefix.layout.head", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true"
      data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true"
      data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true"
      class="app-default">
    <!--begin::App-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--begin::Page-->
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
            <!--begin::Header-->
            <div id="kt_app_header" class="app-header" data-kt-sticky="true"
                 data-kt-sticky-activate="{default: true, lg: true}" data-kt-sticky-name="app-header-minimize"
                 data-kt-sticky-offset="{default: '200px', lg: '0'}" data-kt-sticky-animation="false">
                <?php echo $__env->make("$prefix.layout.head-menu", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <!--end::Header-->
            <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">

                <!--begin::Sidebar-->
                <?php echo $__env->make("$prefix.layout.side-menu", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!--end::Sidebar-->

                <!--begin::Main-->
                <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                    <!--begin::Content wrapper-->
                    <div class="d-flex flex-column flex-column-fluid">
                        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                            <div id="kt_app_toolbar_container" class="app-container d-flex flex-stack">
                                <?php echo $__env->make("$prefix.layout.breadcrumbs", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                        </div>

                        <div id="kt_app_content" class="app-content flex-column-fluid">
                            <!--begin::Content container-->
                            <div id="kt_app_content_container" class="app-container">
                                <div class="card card-flush">
                                    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                                        
                                    </div>
                                    <div class="card-body pt-0">
                                        <h2>รายละเอียด</h2>
                                        <div class="container mt-5">
                                            <h5 class="card-title">ชื่อ นามสกุล: <?php echo e($attendance->cleaner->firstname); ?>

                                                <?php echo e($attendance->cleaner->lastname); ?></h5>
                                            <p class="card-text">Email ลูกค้า:
                                                <?php echo e($attendance->cleaner->customer->email); ?></p>
                                            <p class="card-text">วันที่: <?php echo e($attendance->atten_date); ?></p>
                                            <p class="card-text">เวลาเข้างาน: <?php echo e($attendance->check_in_time); ?></p>
                                            <p class="card-text">เวลาออกงาน: <?php echo e($attendance->check_out_time); ?></p>

                                            <h5>รูปภาพก่อนทำงาน:</h5>
                                            <?php if($attendance->image_before && is_array($attendance->image_before)): ?>
                                                <?php $__currentLoopData = $attendance->image_before; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <img src="<?php echo e(asset($image)); ?>" alt="Image Before"
                                                         class="img-fluid mb-3">
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php else: ?>
                                                <p>ไม่มีรูปภาพก่อนทำงาน</p>
                                            <?php endif; ?>

                                            <h5>รูปภาพหลังทำงาน:</h5>
                                            <?php if($attendance->image_after && is_array($attendance->image_after)): ?>
                                                <?php $__currentLoopData = $attendance->image_after; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <img src="<?php echo e(asset($image)); ?>" alt="Image After"
                                                         class="img-fluid mb-3">
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php else: ?>
                                                <p>ไม่มีรูปภาพหลังทำงาน</p>
                                            <?php endif; ?>
                                        </div>
                                        <a href="<?php echo e(url()->previous()); ?>" class="btn btn-secondary mt-3">กลับ</a>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                    <!--end::Content container-->
                </div>

            </div>
            <!--end::Content wrapper-->

            <!--begin::Footer-->
            <div id="kt_app_footer" class="app-footer">
                <?php echo $__env->make("$prefix.layout.footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <!--End::Footer-->
        </div>
        <!--End::Main-->
    </div>
    </div>
    </div>

    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <i class="ki-duotone ki-arrow-up">
            <span class="path1"></span>
            <span class="path2"></span>
        </i>
    </div>

    <!--begin::Javascript-->
    <?php echo $__env->make("$prefix.layout.script", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script>
        var fullUrl = window.location.origin + window.location.pathname;

        function listOrderChange(id) {
            var sort = $('#sort_' + id).val();
            $.ajax({
                type: 'POST',
                url: fullUrl + "<?php echo e('/changeSort'); ?>",
                data: {
                    "_token": "<?php echo e(csrf_token()); ?>",
                    id: id,
                    sort: sort
                },
                dataType: 'json',
                success: function(data) {
                    location.reload();
                }
            });
        }

        function deleteItem(ids) {
            const id = [ids];
            if (id.length > 0) {
                destroy(id)
            }
        }

        function destroy(id) {
            Swal.fire({
                title: "Delete",
                text: "Do you want to delete your item ?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                showLoaderOnConfirm: true,
                preConfirm: () => {
                    return fetch(fullUrl + '/destroy/' + id)
                        .then(response => response.json())
                        .then(data => location.reload())
                        .catch(error => {
                            Swal.showValidationMessage(`Request failed: ${error}`)
                        })
                }
            });
        }
    </script>
    <!--end::Javascript-->


</body>
<!--end::Body-->

</html>
<?php /**PATH C:\laragon\www\gfm\resources\views/back-end/pages/setting/cleaner/show.blade.php ENDPATH**/ ?>