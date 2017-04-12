<div class="container" align="center">
  <h1>Add To Cart</h1>
</div>
<div style="width:360px; margin:0 auto;">
<?php include_once('views/products/product.php'); ?>
</div>
<div class="container">
<form>
  <input type="hidden" name="controller" value="products">
  <input type="hidden" name="action" value="add_item">
  <input type="hidden" name="id" value="<?php echo $product->id; ?>">
  <div class="form-group" style="text-align: center; max-width: 320px;  margin: 0px auto;">
    <?php //print_R($_SESSION);//if ($_SESSION['usename']): ?>
    <label for="username">Username</label>
    <input type="text" class="form-control" name="username" value='<?php echo $_SESSION['username']; ?>'>
    <label for="pwd">Pasword</label>
    <input type="password" class="form-control" name="pwd" value='<?php echo $_SESSION['pwd']; ?>'>
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" value='<?php echo $_SESSION['email']; ?>'>
    <?php //endif; ?>
    <button type="submit" class="btn btn-default">Submit</button>
  </div>
</form>
</div>