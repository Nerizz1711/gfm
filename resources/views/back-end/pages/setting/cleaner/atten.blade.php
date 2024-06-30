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
                                        <!-- Search -->
                                        <form method="get" action="{{ url()->current() }}">
                                            <div class="row mb-5">
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control form-control-solid ps-10"
                                                           id="keyword" name="keyword"
                                                           value="{{ Request::get('keyword') }}" placeholder="Keywords">
                                                </div>
                                                <div class="col-md-2">
                                                    <select id="status" name="status"
                                                            class="form-select form-select-solid">
                                                        <option value="">All</option>
                                                        <option value="Y"
                                                                @if (Request::get('status') == 'Y') selected @endif>Active
                                                        </option>
                                                        <option value="N"
                                                                @if (Request::get('status') == 'N') selected @endif>
                                                            Inactive
                                                        </option>
                                                        {{-- <option value="S"
                                                            @if (Request::get('status') == 'S') selected @endif>Suspended
                                                        </option> --}}
                                                    </select>
                                                </div>
                                                <div class="col-md-2">
                                                    <button type="submit" class="btn btn-primary">Search</button>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- End Search -->

                                        <div class="hidden md:block mx-auto text-slate-500">
                                            <b>Showing {{ $items->currentPage() }} to {{ $items->total() }} of
                                                {{ $items->total() }} entries</b>
                                        </div>
                                        <div class="table-responsive">
                                            <table class="table align-middle table-row-dashed fs-6 gy-5"
                                                   id="kt_ecommerce_products_table">
                                                <thead>
                                                    <tr
                                                        class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                                        <th class="text-center min-w-5px">#</th>
                                                        <th class="text-center min-w-10px">วันที่</th>
                                                        <th class="text-center min-w-15px">ชื่อลูกค้า</th>
                                                        <th class="text-center min-w-15px">ชื่อแม่บ้าน</th>
                                                        <th class="text-center min-w-10px">เวลาเข้างาน</th>
                                                        <th class="text-center min-w-10px">เวลาออกงาน</th>
                                                        <th class="text-center min-w-10px">ตรวจสอบงาน</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if ($items->count() > 0)
                                                        @foreach ($items as $index => $item)
                                                            <tr>
                                                                <td class="text-center">
                                                                    {{ $items->pages->start + $index + 1 }}</td>
                                                                <td class="text-left">{{ $item->atten_date }}</td>
                                                                <td class="text-left">
                                                                    {{ $item->cleaner->customer->comp_name }}</td>
                                                                <td class="text-center">{{ $item->cleaner->firstname }}
                                                                    {{ $item->cleaner->lastname }}</td>
                                                                <td class="text-center">{{ $item->check_in_time }}</td>
                                                                <td class="text-center">{{ $item->check_out_time }}
                                                                </td>
                                                                <td class="text-center">
                                                                    <a
                                                                       href="{{ url("$segment/$folder/show/$item->id") }}">
                                                                        <i class="fa fa-search fa-2x"></i>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    @else
                                                        <tr>
                                                            <td colspan="7" class="text-center">- No items -</td>
                                                        </tr>
                                                    @endif
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="table-footer mt-2">
                                            <div class="row">
                                                <div class="col-sm-5">
                                                    <p style=" ">

                                                    </p>
                                                </div>
                                                <div class="col-sm-7">
                                                    {!! $items->appends(request()->all())->links('back-end.layout.pagination') !!}
                                                </div>
                                            </div>
                                        </div>
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
