<div class="container">
	<?php if (isset($products)): ?>
		<?php foreach ($products as $key => $product): //print_R($product);?>
			<figure class="snip1246">
			  <img src="<?php echo $product->src; ?>" alt="sample88"/>
			  <figcaption>
			    <h2><?php echo $product->name; ?></h2>
			    <div class="price"><?php echo $product->price; ?></div>
			    <?php if (isset($product->link)): ?>
			      <?php echo $product->link; ?>
			    <?php endif; ?>
			  </figcaption>
			</figure>
		<?php endforeach; ?>
	<?php endif; ?>
</div>