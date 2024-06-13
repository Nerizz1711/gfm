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
                                <form id="form_submit" method="POST" enctype="multipart/form-data" class="">
                                    <?php echo csrf_field(); ?>
                                    <div class="row">
                                        <div class="col-md-3 mb-5">

                                            <div class="card card-flush py-4 mb-3">
                                                <div class="card-header">
                                                    <div class="card-title">
                                                        <h2>Profile pciture</h2>
                                                    </div>
                                                </div>
                                                <div class="card-body text-center pt-0">
                                                    <style>
                                                        .image-input-placeholder {
                                                            background-image: url(<?php echo e(asset('backend/assets/media/svg/files/blank-image.svg')); ?>);
                                                        }

                                                        [data-theme="dark"] .image-input-placeholder {
                                                            background-image: url('assets/media/svg/files/blank-image-dark.svg');
                                                        }
                                                    </style>
                                                    <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3"
                                                         data-kt-image-input="true">
                                                        <div class="image-input-wrapper w-150px h-150px"></div>
                                                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                               data-kt-image-input-action="change"
                                                               data-bs-toggle="tooltip" aria-label="Change avatar"
                                                               data-kt-initialized="1">
                                                            <i class="bi bi-pencil-fill fs-7"></i>
                                                            <input type="file" id="image" name="image"
                                                                   accept=".png, .jpg, .jpeg">
                                                            <input type="hidden" name="avatar_remove">
                                                        </label>
                                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                              data-kt-image-input-action="cancel"
                                                              data-bs-toggle="tooltip" aria-label="Cancel avatar"
                                                              data-kt-initialized="1">
                                                            <i class="bi bi-x fs-2"></i>
                                                        </span>
                                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                              data-kt-image-input-action="remove"
                                                              data-bs-toggle="tooltip" aria-label="Remove avatar"
                                                              data-kt-initialized="1">
                                                            <i class="bi bi-x fs-2"></i>
                                                        </span>
                                                    </div>
                                                    <div class="text-muted fs-7">Set the category thumbnail image. Only
                                                        *.png, *.jpg and *.jpeg image files are accepted</div>
                                                </div>
                                            </div>

                                            <div class="card card-flush py-4">
                                                <div class="card-header">
                                                    <div class="card-title">
                                                        <h2>Status</h2>
                                                    </div>

                                                    <div class="card-toolbar">
                                                        <div class="rounded-circle bg-success w-15px h-15px"
                                                             id="kt_ecommerce_add_category_status"></div>
                                                    </div>
                                                </div>

                                                <div class="card-body pt-0">
                                                    <select name="isActive" id="isActive" class="form-select">
                                                        <option value="Y">Active</option>
                                                        <option value="N">Inactive</option>
                                                        <option value="S">Suspended</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-9 mb-5">
                                            <div class="card card-flush py-4 mb-3">
                                                <div class="card-header">
                                                    <div class="card-title">
                                                        <h2>General</h2>
                                                    </div>
                                                </div>
                                                <div class="card-body pt-0">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label class="required form-label">Phone Number </label>
                                                            <input type="text" id="phone" name="phone"
                                                                   class="form-control mb-2" placeholder="Phone number"
                                                                   value="">
                                                        </div>

                                                        <div class="col-md-6">
                                                            <label class="required form-label">Email </label>
                                                            <input type="text" id="email" name="email"
                                                                   class="form-control mb-2" placeholder="email"
                                                                   value="">
                                                        </div>
                                                    </div>

                                                    

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label class="required form-label">Name </label>
                                                            <input type="text" id="firstname" name="firstname"
                                                                   class="form-control mb-2" placeholder="Name"
                                                                   value="">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label class="required form-label">Lastname </label>
                                                            <input type="text" id="lastname" name="lastname"
                                                                   class="form-control mb-2" placeholder="Lastname"
                                                                   value="">
                                                        </div>
                                                    </div>


                                                    

                                                </div>
                                            </div>

                                            <div class="card card-flush py-4 mb-3">
                                                <div class="card-header">
                                                    <div class="card-title">
                                                        <h2>Customer</h2>
                                                    </div>
                                                </div>
                                                <div class="card-body pt-0">
                                                    <div class="row">
                                                        <select name="customer_id" id="customer_id"
                                                                class="form-select" required>
                                                            <option value="" hidden>Please select customer
                                                            </option>
                                                            <option value="">No select</option>
                                                            <?php if(isset($customer)): ?>
                                                                <?php $__currentLoopData = $customer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $customer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <option value="<?php echo e($customer->id); ?>">
                                                                        <?php echo e(@$customer->firstname); ?>

                                                                        <?php echo e(@$customer->lastname); ?>

                                                                    </option>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            <?php endif; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="d-flex justify-content-end mt-5">
                                                <a href="<?php echo e(url("$segment/$folder")); ?>" id=""
                                                   class="btn btn-light me-2">Cancel</a>
                                                <button type="button" id="" onclick="check_add();"
                                                        class="btn btn-primary" style="background: #1C2842;"><span
                                                          class="indicator-label">Save Changes</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
        // $('.show_pass').click(function() {
        //     var password = $('#password').attr('type');
        //     if (password == "password") {
        //         $('#password').attr('type', 'text');
        //     } else {
        //         $('#password').attr('type', 'password');
        //     }
        // });


        // $('.show_pass_confirm').click(function() {
        //     var confirm_password = $('#confirm_password').attr('type');
        //     if (confirm_password == "password") {
        //         $('#confirm_password').attr('type', 'text');
        //     } else {
        //         $('#confirm_password').attr('type', 'password');
        //     }
        // });

        function readURL01(input, key) {
            console.log(key);
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#example_image_' + key).attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }



        function check_add() {
            var formData = new FormData($("#form_submit")[0]);

            var email = $('#email').val();
            var check_mail =
                /^([0-9a-zA-Z]([-_\\.]*[0-9a-zA-Z]+)*)@([0-9a-zA-Z]([-_\\.]*[0-9a-zA-Z]+)*)[\\.]([a-zA-Z]{2,9})$/;
            var phone = $('#phone').val();
            var firstname = $('#firstname').val();
            var lastname = $('#lastname').val();
            var customer_id = $('#customer_id').val();

            // var password = $('#password').val();
            // var confirm_password = $('#confirm_password').val();
            // var birthday = $('#birthday').val();
            // var sex = $('#sex').val();


            // var profile_name = $('#profile_name').val();




            if (phone == "" || email == "" || firstname == "" || lastname ==
                "" || customer_id == "") {
                toastr.error("Sorry, please complete the information.");
                return false;
            }
            // if (password != confirm_password) {
            //     toastr.error('Please enter the same password.');
            //     return false;
            // }

            if (phone.length != 10 || !Number(phone) || phone.charAt(0) != '0') {
                toastr.error('Please enter your phone number correctly.');
                return false
            }

            if (!check_mail.test(email)) {
                toastr.error('Please enter your email address correctly.');
                return false
            }


            // if(profile_name.length >= 20){
            // 	toastr.error("Please enter no more than 20 characters.");
            // 	return false;
            // }


            Swal.fire({
                icon: 'warning',
                title: 'Please press confirm to complete the insert.',
                showCancelButton: true,
                confirmButtonText: 'Confirm',
                cancelButtonText: `Cancel`,
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'POST',
                        url: "<?php echo e("$segment/$folder/add"); ?>",
                        data: formData,
                        processData: false,
                        contentType: false,
                        dataType: 'json',
                        success: function(data) {
                            console.log(data);
                            if (data.status == 200) {
                                Swal.fire({
                                    icon: 'success',
                                    title: data.message,
                                    text: data.desc,
                                    showCancelButton: false,
                                    confirmButtonText: 'Close',
                                }).then((result) => {
                                    location.href = "<?php echo e("$segment/$folder"); ?>";
                                });
                            } else if (data.status == 500) {
                                Swal.fire({
                                    icon: 'error',
                                    title: data.message,
                                    text: data.desc,
                                    showCancelButton: false,
                                    confirmButtonText: 'Close',
                                });
                            }
                        }
                    });
                } else {
                    return false;
                }
            });

            return false;
        }
        
    </script>
    <!--end::Javascript-->

</body>
<!--end::Body-->

</html>
<?php /**PATH C:\laragon\www\gfm\resources\views/back-end/pages/setting/cleaner/add.blade.php ENDPATH**/ ?>