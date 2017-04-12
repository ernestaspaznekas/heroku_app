<div class="container" align="center">
  <h1>Cart</h1>
</div>

<div class="container" style="display: block; margin: auto;">
  <?php if (count($products) > 0): ?>
    <?php include_once('views/products/product.php'); ?>
  <?php else: ?>
  <div class="container" align="center">
    <h1>Empty</h1>
  </div> 
  <?php endif; ?>
</div>