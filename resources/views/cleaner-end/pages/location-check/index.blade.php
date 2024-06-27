<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    @include("$prefix.layout.head")
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <script>
        function getLocationCheckIn() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    sendPosition(position, 'cleaner/check-in');
                }, function(error) {
                    handleGeolocationError(error);
                });
            } else {
                alert("Geolocation is not supported by this browser.");
            }
        }

        function getLocationCheckOut() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    sendPosition(position, 'cleaner/check-out');
                }, function(error) {
                    handleGeolocationError(error);
                });
            } else {
                alert("Geolocation is not supported by this browser.");
            }
        }

        function sendPosition(position, url) {
            const lat = position.coords.latitude;
            const lon = position.coords.longitude;

            fetch(url, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}' // Replace with your CSRF token implementation
                    },
                    body: JSON.stringify({
                        latitude: lat,
                        longitude: lon
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'inside') {
                        Swal.fire({
                            title: "เช็คอินสำเร็จ",
                            icon: "success",
                        });
                    } else {
                        Swal.fire({
                            title: "กรุณาเช็คอินในสถานที่ทำกำหนด",
                            icon: "error",
                        });
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    Swal.fire({
                        title: "เกิดข้อผิดพลาด",
                        text: "ไม่สามารถเช็คอินได้ในขณะนี้",
                        icon: "error",
                    });
                });
        }

        function handleGeolocationError(error) {
            switch (error.code) {
                case error.PERMISSION_DENIED:
                    alert("User denied the request for Geolocation.");
                    break;
                case error.POSITION_UNAVAILABLE:
                    alert("Location information is unavailable.");
                    break;
                case error.TIMEOUT:
                    alert("The request to get user location timed out.");
                    break;
                case error.UNKNOWN_ERROR:
                    alert("An unknown error occurred.");
                    break;
            }
        }
    </script> --}}
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
            {{-- <div id="kt_app_header" class="app-header" data-kt-sticky="true"
                data-kt-sticky-activate="{default: true, lg: true}" data-kt-sticky-name="app-header-minimize"
                data-kt-sticky-offset="{default: '200px', lg: '0'}" data-kt-sticky-animation="false">
                @include("$prefix.layout.head-menu")
            </div> --}}
            <!--end::Header-->
            <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">

                <!--begin::Sidebar-->
                {{-- @include("$prefix.layout.side-menu") --}}
                <!--end::Sidebar-->

                <!--begin::Main-->
                <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                    <!--begin::Content wrapper-->
                    <div class="d-flex flex-column flex-column-fluid">
                        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">

                                {{-- @include("$prefix.layout.breadcrumbs") --}}

                            </div>
                        </div>

                        <div id="kt_app_content" class="app-content flex-column-fluid">
                            <!--begin::Content container-->
                            <div id="kt_app_content_container" class="app-container container-xxl">

                                <h1>ยินดีต้อนรับคุณ {{ Auth::guard('cleaner')->user()->firstname }}
                                    {{ Auth::guard('cleaner')->user()->lastname }} สู่ระบบเช็คชื่อ</h1>
                                <br>
                                <br>
                                <h2>ประจำวันที่ : {{ $today }}</h2>
                                <br>
                                <br>
                                <button onclick="getLocationCheckIn()"class="btn btn-success">เช็คชื่อเข้า</button>
                                &nbsp;&nbsp;
                                <button onclick="getLocationCheckOut()" class="btn btn-success">เช็คชื่อออก</button>
                                <br>
                                <br>

                                <form id="uploadImagesBeforeForm" enctype="multipart/form-data">
                                    @csrf
                                    <label for="images_before">ภาพก่อนทำงาน:</label>
                                    <input type="file" name="images_before[]" id="images_before" accept="image/*"
                                        multiple>
                                    <br>
                                    <br>
                                    <button type="submit" class="btn btn-primary">อัพโหลดภาพ</button>
                                </form>
                                <br>
                                <br>
                                <form id="uploadImagesAfterForm" enctype="multipart/form-data">
                                    @csrf
                                    <label for="images_after">ภาพหลังทำงาน:</label>
                                    <input type="file" name="images_after[]" id="images_after" accept="image/*"
                                        multiple>
                                    <br>
                                    <br>
                                    <button type="submit" class="btn btn-primary">อัพโหลดภาพ</button>
                                </form>
                                {{-- <form method="POST" action="/upload-images-before" enctype="multipart/form-data">
                                    @csrf
                                    <label for="images_before">Images Before:</label>
                                    <input type="file" name="images_before[]" id="images_before" accept="image/*"
                                           multiple>
                                    <br>
                                    <br>
                                    <button class="btn btn-success" type="submit">Upload Images Before</button>
                                </form>
                                <br>
                                <form method="POST" action="/upload-images-after" enctype="multipart/form-data">
                                    @csrf
                                    <label for="images_after">Images After:</label>
                                    <input type="file" name="images_after[]" id="images_after" accept="image/*"
                                           multiple>
                                    <br>
                                    <br>
                                    <button class="btn btn-primary" type="submit">Upload Images After</button>
                                </form> --}}
                                <br>
                                <br>
                                <a href="{{ url('cleaner/logout') }}" class="btn btn-danger">ออกจากระบบ</a>

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
        function getLocationCheckIn() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(sendPositionIn);
            } else {
                alert("Geolocation is not supported by this browser.");
            }
        }



        function sendPositionIn(position) {
            const lat = position.coords.latitude;
            const lon = position.coords.longitude;

            // ส่งพิกัดไปยัง Backend
            Swal.fire({
                title: 'ยืนยันหรือไม่ ?',
                text: "คุณต้องการที่จะเช็คชื่อเข้า ใช่ หรือ ไม่ ?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'ใช่!!',
                cancelButtonText: 'ยกเลิก'
            }).then((result) => {
                if (result.isConfirmed) {
                    fetch('cleaner/check-in', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            body: JSON.stringify({
                                latitude: lat,
                                longitude: lon
                            })
                        })
                        //.then(response => response.json())
                        .then(response => {
                            // ตรวจสอบว่า content-type เป็น JSON หรือไม่
                            const contentType = response.headers.get('content-type');
                            if (contentType && contentType.includes('application/json')) {
                                return response.json();
                            } else {
                                throw new Error('Response is not JSON');
                            }
                        })
                        .then(data => {
                            if (data.status === 'inside') {
                                Swal.fire({
                                    title: "เช็คชื่อเข้าสำเร็จ",
                                    icon: "success",
                                });
                            } else if (data.status === 'outside') {
                                Swal.fire({
                                    title: "กรุณาเช็คอินในสถานที่ทำงาน",
                                    icon: "error",
                                });
                            } else {
                                Swal.fire({
                                    title: "เกิดข้อผิดพลาด ที่ไม่รู้จัก กรุณาติดต่อเจ้าหน้าที่",
                                    icon: "error",
                                });
                            }
                        });
                }
            });

        }

        function getLocationCheckOut() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(sendPositionOut);
            } else {
                alert("Geolocation is not supported by this browser.");
            }
        }

        function sendPositionOut(position) {
            const lat = position.coords.latitude;
            const lon = position.coords.longitude;

            // ส่งพิกัดไปยัง Backend
            Swal.fire({
                title: 'ยืนยันหรือไม่ ?',
                text: "คุณต้องการที่จะเช็คชื่อออก ใช่ หรือ ไม่ ?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'ใช่!!',
                cancelButtonText: 'ยกเลิก'
            }).then((result) => {
                if (result.isConfirmed) {
                    fetch('cleaner/check-out', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            body: JSON.stringify({
                                latitude: lat,
                                longitude: lon
                            })
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.status === 'inside') {
                                Swal.fire({
                                    title: "เช็คชื่อออกสำเร็จ",
                                    icon: "success",
                                });
                            } else if (data.status === 'no-check-in') {
                                Swal.fire({
                                    title: "ในวันนี้ยังไม่ได้ทำการเช็คอิน",
                                    icon: "error",
                                });
                            } else if (data.status === 'outside') {
                                Swal.fire({
                                    title: "กรุณาเช็คเอาท์ในสถานที่ทำงาน",
                                    icon: "error",
                                });
                            } else {
                                Swal.fire({
                                    title: "เกิดข้อผิดพลาด ที่ไม่รู้จัก กรุณาติดต่อเจ้าหน้าที่",
                                    icon: "error",
                                });
                            }
                        });
                }
            });

        }

        document.getElementById('uploadImagesBeforeForm').addEventListener('submit', function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'ยืนยันหรือไม่ ?',
                text: "คุณต้องการที่จะอัพโหลดภาพก่อนทำงาน ใช่ หรือ ไม่ ?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'ใช่!!',
                cancelButtonText: 'ยกเลิก'
            }).then((result) => {
                if (result.isConfirmed) {
                    uploadImages('uploadImagesBeforeForm');
                }
            });

            function uploadImages(formId) {
                const form = document.getElementById(formId);
                const formData = new FormData(form);

                fetch('cleaner/upload-images-before', {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                                'content')
                        },
                        body: formData
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.status === 'success') {
                            Swal.fire({
                                title: data.message,
                                icon: "success",
                            });
                        } else {
                            Swal.fire({
                                title: data.message,
                                icon: "error",
                            });
                        }
                    })
                    // .then(response => {
                    //     if (!response.ok) {
                    //         throw new Error('Network response was not ok');
                    //     }
                    //     return response.json();
                    // })
                    .catch(error => {
                        console.error('Error:', error);
                        Swal.fire({
                            title: "เกิดข้อผิดพลาด",
                            text: "ไม่สามารถทำรายการได้",
                            icon: "error",
                        });
                    });
            }
        });

        document.getElementById('uploadImagesAfterForm').addEventListener('submit', function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'ยืนยันหรือไม่ ?',
                text: "คุณต้องการที่จะอัพโหลดภาพก่อนทำงาน ใช่ หรือ ไม่ ?",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'ใช่!!',
                cancelButtonText: 'ยกเลิก'
            }).then((result) => {
                if (result.isConfirmed) {
                    uploadImages('uploadImagesAfterForm');
                }
            });

            function uploadImages(formId) {
                const form = document.getElementById(formId);
                const formData = new FormData(form);

                fetch('cleaner/upload-images-after', {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                                'content')
                        },
                        body: formData
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.status === 'success') {
                            Swal.fire({
                                title: data.message,
                                icon: "success",
                            });
                        } else {
                            Swal.fire({
                                title: data.message,
                                icon: "error",
                            });
                        }
                    })
                    // .then(response => {
                    //     if (!response.ok) {
                    //         throw new Error('Network response was not ok');
                    //     }
                    //     return response.json();
                    // })
                    .catch(error => {
                        console.error('Error:', error);
                        Swal.fire({
                            title: "เกิดข้อผิดพลาด",
                            text: "ไม่สามารถทำรายการได้",
                            icon: "error",
                        });
                    });
            }
        });
    </script>
    <!--end::Javascript-->

</body>
<!--end::Body-->

</html>
