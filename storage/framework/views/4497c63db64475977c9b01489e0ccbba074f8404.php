<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head>
        <?php echo $__env->make("$prefix.layout.head", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</head>
	<!--end::Head-->

	<!--begin::Body-->
	<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
		<!--begin::App-->
		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
			<!--begin::Page-->
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
				<!--begin::Header-->
				<div id="kt_app_header" class="app-header" data-kt-sticky="true" data-kt-sticky-activate="{default: true, lg: true}" data-kt-sticky-name="app-header-minimize" data-kt-sticky-offset="{default: '200px', lg: '0'}" data-kt-sticky-animation="false">
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
								<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                                    <?php echo $__env->make("$prefix.layout.breadcrumbs", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
								</div>
							</div>

							<div id="kt_app_content" class="app-content flex-column-fluid">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-xxl">
									<form id="form_submit" method="POST" enctype="multipart/form-data" class="">
									<?php echo csrf_field(); ?>
										<div class="row">
											<div class="col-md-3 mb-5">
												<div class="card card-flush py-4">
													<div class="card-header">
														<div class="card-title">
															<h2>Status</h2>
														</div>
													
														<div class="card-toolbar">
															<div class="rounded-circle bg-success w-15px h-15px" id="kt_ecommerce_add_category_status"></div>
														</div>
													</div>
													
													<div class="card-body pt-0">
														<select name="isActive" id="isActive" class="form-select">
															<option value="Y">Active</option>
															<option value="N">Inactive</option>
														</select>
													</div>
												</div>
											</div>
											<div class="col-md-9 mb-5">
												<div class="card card-flush py-4">
													<div class="card-header">
														<div class="card-title">
															<h2>General</h2>
														</div>
													</div>
													<div class="card-body pt-0">
														<div class="row">
															<div class="col-md-6 mb-5">
																<label class="required form-label">Username </label>
																<input type="text" id="username" name="username" class="form-control mb-2" placeholder="Username" value="">
															</div>
														</div>
														<div class="row">
															<div class="col-md-6 mb-5">
																<label class="required form-label">Password </label>
																<div class="input-group col-mb-6">
																	<input type="password" id="password" class="form-control" name="password" placeholder="Password" autocomplete="off">
																	<div class="input-group-append">                                            
																		<div class="input-group-text">
																			<span class="card-link show_pass"><i class="far fa-eye" data-id="password"></i></span>
																		</div>
																	</div>
																</div>
															</div>
															<div class="col-md-6 mb-5">
																<label class="required form-label">Confirm password </label>
																<div class="input-group col-mb-6">
																	<input type="password" id="confirm_password" class="form-control" name="confirm_password" placeholder="Confirm password" autocomplete="off">
																	<div class="input-group-append">                                            
																		<div class="input-group-text">
																			<span class="card-link show_pass_confirm"><i class="far fa-eye" data-id="confirm_password"></i></span>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-md-6 mb-5">
																<label class="required form-label">Profile name </label>
																<input type="text" id="profile_name" name="profile_name" class="form-control mb-2" placeholder="Profile name" value="">
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-12">
												<div class="d-flex justify-content-end mt-5">
													<a href="<?php echo e(url("$segment/$folder")); ?>" id="" class="btn btn-light me-2">Cancel</a>
													<button type="button" id="" onclick="check_add();" class="btn btn-primary" style="background: #1C2842;"><span class="indicator-label">Save Changes</span></button>
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
		$('.show_pass').click(function() {
			var password = $('#password').attr('type');
			if (password == "password") {
				$('#password').attr('type', 'text');
			} else {
				$('#password').attr('type', 'password');
			}
		});
	
	
		$('.show_pass_confirm').click(function() {
			var confirm_password = $('#confirm_password').attr('type');
			if (confirm_password == "password") {
				$('#confirm_password').attr('type', 'text');
			} else {
				$('#confirm_password').attr('type', 'password');
			}
		});
		
		function readURL01(input,key) {
			console.log(key);
			if (input.files && input.files[0]) {
				var reader = new FileReader();
				reader.onload = function(e) {
					$('#example_image_'+key).attr('src', e.target.result);
				}
				reader.readAsDataURL(input.files[0]);
			}
		}
	
		function check_add() {
			var formData = new FormData($("#form_submit")[0]);
	
			var username = $('#username').val();
			var password = $('#password').val();
			var confirm_password = $('#confirm_password').val();
			var profile_name = $('#profile_name').val();
			if(username == "" || password == "" || confirm_password == ""){
				toastr.error("Sorry, please complete the information.");
				return false;
			}
			if (password != confirm_password) {
				toastr.error('Please enter the same password.');
				return false;
			}
			if(profile_name.length >= 20){
				toastr.error("Please enter no more than 20 characters.");
				return false;
			}
	
	
			Swal.fire({
				icon: 'warning',
				title: 'Please press confirm to complete the transaction.',
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
				}else{
					return false;
				}
			});
	
			return false;
		}
	
	
		
		</script>
		<!--end::Javascript-->

	</body>
	<!--end::Body-->
</html><?php /**PATH /home/zpee/domains/pee.orangeworkshop.info/public_html/gfm/resources/views/back-end/pages/administrator/user/add.blade.php ENDPATH**/ ?>