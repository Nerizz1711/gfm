<!doctype html>
<html lang="en">

<head>

      @include("back-end.layout.head")
</head>

<body data-sidebar="dark">

      <!-- Script Zone -->
      @include("back-end.layout.script")
      <script>
            const url = '{{@$url}}';
            $(function() {
                  Swal.fire({
                        title: "สำเร็จ",
                        text: "ระบบได้ทำการบันทึกข้อมูลเรียบร้อย",
                        icon: "success",
                        allowOutsideClick: false,
                  }).then((result) => {
                        if (url == '') {
                              window.location = window.location.href;
                        } else {
                              window.location = url
                        }
                  });
            })
      </script>

</body>

</html>