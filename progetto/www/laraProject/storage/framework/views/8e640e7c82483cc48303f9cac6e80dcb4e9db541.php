<?php
        if (empty($imgFile)) {
            $imgFile = 'default.jpg';
        }
        if (null !== $attrs) {
            $attrs = 'class="' . $attrs . '"';
        }

?>
<img src="<?php echo e(asset('images/products/' . $imgFile)); ?>" <?php echo $attrs; ?>><?php /**PATH C:\xampp\htdocs\TWeb2\TecnologieWeb2NewWebSite\progetto\www\laraProject\resources\views/helpers/productImg.blade.php ENDPATH**/ ?>