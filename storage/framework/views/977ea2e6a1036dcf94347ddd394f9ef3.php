<!DOCTYPE html>
<html lang="en">
<head>
   <?php echo $__env->make('client.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>
    <?php echo $__env->yieldContent('content'); ?>
</body>
<footer class="ftco-footer ftco-no-pt">
    <?php echo $__env->make('client.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   </footer>
</html><?php /**PATH /Users/ThanhTung/Desktop/Education/resources/views/index.blade.php ENDPATH**/ ?>