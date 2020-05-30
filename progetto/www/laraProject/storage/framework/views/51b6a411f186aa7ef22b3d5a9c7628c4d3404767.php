

<?php $__env->startSection('title', 'Catalogo'); ?>
<?php $__env->startSection('content'); ?>
	
	<!-- Sezione CATEGORIE E SOTTOCATEGORIE laterale -->
	<div class="col-sm-3">
	 <div class="left-sidebar">
		<h2>Categorie</h2>
		<div class="panel-group category-products" id="accordian">

			<?php if(isset($categories)): ?>
			<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4 class="panel-title">
						<a data-toggle="collapse" data-parent="#accordian" href="#<?php echo e(str_replace(array(' ', '&') , '_',$category->nome)); ?>">
							<span class="badge pull-right"><i class="fa fa-plus"></i></span>
							<?php echo e($category->nome); ?>

						</a>
					</h4>
				</div>
				<div id="<?php echo e(str_replace(array(' ', '&'), '_',$category->nome)); ?>" class="panel-collapse collapse">
					<div class="panel-body">
						<ul>
							<?php if(isset($subCategories)): ?>
							<?php $__currentLoopData = $subCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							    <?php if($subCategory->categoria == $category->codCategoria): ?>
								<li><a href="<?php echo e(route('subCategory', [$category->codCategoria, $subCategory->codSottocategoria])); ?>"><?php echo e($subCategory->nome); ?> </a></li>
							    <?php endif; ?>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>		
							<?php endif; ?>														
						</ul>
					</div>
				</div>
			</div>	
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<?php endif; ?>

			<div class="price-range"><!--price-range-->
				<h2>Prezzo</h2>
				<div class="well">
					 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
					 <b>€ 0</b> <b class="pull-right">€ 1600</b>
				</div>
			</div><!--/price-range-->
			
		</div>	
	</div>
</div>
        
        <!--INIZIO CATALOGO-->
        
    <div class="col-sm-9 ">
    <h2 class="title text-center">Elenco prodotti</h2>
	
	<div class="features_items"><!--features_items-->
    <?php if(isset($prods)): ?>    
     <?php $__currentLoopData = $prods; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>		
		  <div class="col-sm-6">
              <div class="product-image-wrapper">
                  
				<div class="single-products">
			
	
				<div class="productinfo text-center">
				<?php echo $__env->make('helpers.productImg' , ['attrs' => 'imagefrm', 'imgFile' => $products->foto], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			       <!--<h2>Qui ci va l'include del prezzo</h2>-->
					<h2>Prodotto: <?php echo e($products->nome); ?></h1>
                                        <h4>Prezzo: <?php echo e($products->prezzo); ?>€</h4>
                    <p>Descrizione breve: <?php echo e($products->descrizioneBreve); ?></p>
                    <p>Descrizione estesa: <?php echo $products->descrizioneEstesa; ?></p>
				   
				</div>
            </div>
        </div>
	</div>
     
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
	</div>
     <!--paginazione-->
    <?php echo $__env->make('pagination.paginator', ['paginator' => $prods], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</div><!--FINE CATALOGO-->
				     

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.public', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TWeb2\TecnologieWeb2NewWebSite\progetto\www\laraProject\resources\views/catalog.blade.php ENDPATH**/ ?>