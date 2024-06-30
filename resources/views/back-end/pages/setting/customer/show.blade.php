<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    @include("$prefix.layout.head")
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
                @include("$prefix.layout.head-menu")
            </div>
            <!--end::Header-->
            <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">

                <!--begin::Sidebar-->
                @include("$prefix.layout.side-menu")
                <!--end::Sidebar-->

                <!--begin::Main-->
                <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                    <!--begin::Content wrapper-->
                    <div class="d-flex flex-column flex-column-fluid">
                        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                            <div id="kt_app_toolbar_container" class="app-container d-flex flex-stack">
                                @include("$prefix.layout.breadcrumbs")
                            </div>
                        </div>

                        <div id="kt_app_content" class="app-content flex-column-fluid">
                            <!--begin::Content container-->
                            <div id="kt_app_content_container" class="app-container">
                                <div class="card card-flush">
                                    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                                        {{-- <div class="card-toolbar flex-row-fluid justify-content-end gap-5">

                                            <a href="{{ url("$segment/$folder/add") }}" class="btn btn-primary">Add</a>
                                        </div> --}}
                                    </div>
                                    <div class="card-body pt-0">
                                        <h2>รายละเอียด</h2>
                                        <div class="container mt-5">
                                            <h5 class="card-title">ชื่อ นามสกุล: {{ $attendance->cleaner->firstname }}
                                                {{ $attendance->cleaner->lastname }}</h5>
                                            <p class="card-text">ชื่อลูกค้า:
                                                {{ $attendance->cleaner->customer->email }}</p>
                                            <p class="card-text">วันที่: {{ $attendance->atten_date }}</p>
                                            <p class="card-text">เวลาเข้างาน: {{ $attendance->check_in_time }}</p>
                                            <p class="card-text">เวลาออกงาน: {{ $attendance->check_out_time }}</p>

                                            <h5>รูปภาพก่อนทำงาน:</h5>
                                            @if ($attendance->image_before && is_array($attendance->image_before))
                                                @foreach ($attendance->image_before as $image)
                                                    <img src="{{ asset($image) }}" alt="Image Before"
                                                         class="img-fluid mb-3">
                                                @endforeach
                                            @else
                                                <p>ไม่มีรูปภาพก่อนทำงาน</p>
                                            @endif

                                            <h5>รูปภาพหลังทำงาน:</h5>
                                            @if ($attendance->image_after && is_array($attendance->image_after))
                                                @foreach ($attendance->image_after as $image)
                                                    <img src="{{ asset($image) }}" alt="Image After"
                                                         class="img-fluid mb-3">
                                                @endforeach
                                            @else
                                                <p>ไม่มีรูปภาพหลังทำงาน</p>
                                            @endif
                                        </div>
                                        <a href="{{ url()->previous() }}" class="btn btn-secondary mt-3">กลับ</a>
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
                @include("$prefix.layout.footer")
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
    @include("$prefix.layout.script")
    <script>
        var fullUrl = window.location.origin + window.location.pathname;

        function listOrderChange(id) {
            var sort = $('#sort_' + id).val();
            $.ajax({
                type: 'POST',
                url: fullUrl + "{{ '/changeSort' }}",
                data: {
                    "_token": "{{ csrf_token() }}",
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
