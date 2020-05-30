<!--Riga di paginazione-->
<?php if($paginator->lastPage() != 1): ?>
<div style="text-align: center; color: #696763;  ">
    
    <?php echo e($paginator->firstItem()); ?> - <?php echo e($paginator->lastItem()); ?> di <?php echo e($paginator->total()); ?>  --

    <!-- Link alla prima pagina -->
    <?php if(!$paginator->onFirstPage()): ?>
        <a style="color:#FE980F" href="<?php echo e($paginator->url(1)); ?>">Inizio</a> | <!-- vedi slide42 url()-->
    <?php else: ?>
        Inizio |
    <?php endif; ?>

    <!-- Link alla pagina precedente -->
    <?php if($paginator->currentPage() != 1): ?>
        <a style="color:#FE980F" href="<?php echo e($paginator->previousPageUrl()); ?>">&lt; Precedente</a> |
    <?php else: ?>
        &lt; Precedente |
    <?php endif; ?>

    <!-- Link alla pagina successiva -->
    <?php if($paginator->hasMorePages()): ?>
        <a style="color:#FE980F" href="<?php echo e($paginator->nextPageUrl()); ?>">Successivo &gt;</a> |
    <?php else: ?>
        Successivo &gt; |
    <?php endif; ?>

    <!-- Link all'ultima pagina -->
    <?php if($paginator->hasMorePages()): ?>
        <a style="color:#FE980F" href="<?php echo e($paginator->url($paginator->lastPage())); ?>">Fine</a>
    <?php else: ?>
        Fine
    <?php endif; ?>
</div>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\TWeb2\TecnologieWeb2NewWebSite\progetto\www\laraProject\resources\views/pagination/paginator.blade.php ENDPATH**/ ?>