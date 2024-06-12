<!doctype html>
<html lang="en">

<head>
    <?php echo $__env->make("back-end.layout.head", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body data-sidebar="dark">

    <!-- Script Zone -->
    <?php echo $__env->make("back-end.layout.script", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script>
        const url = '<?php echo e(@$url); ?>';
        $(function() {
            Swal.fire({
                title: "<?php echo e(@$title); ?>",
                text: "<?php echo e(@$text); ?>",
                icon: "error",
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

</html><?php /**PATH C:\laragon\www\gfm\resources\views/back-end/alert/alert.blade.php ENDPATH**/ ?>