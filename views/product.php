<div class="container">
      <div class="row">
      
      <li class="menu_subcategory"><a href="<?php echo BASE_URL; ?>">início</a></li>

      
      <?php foreach($category as $c): ?>
      <li class="menu_subcategory"><i class="fas fa-angle-right"></i><a href="<?php echo BASE_URL; ?>categories/enter/<?php echo $c['id']; ?>"><?php echo $c['name']; ?></a></li>
      <?php endforeach; ?>
      
      </div>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">

              <div class="col-12 product-image-thumbs">
              	<div class="mainphoto">
			<img src="<?php echo BASE_URL; ?>media/products/<?php echo $product_images[0]['url']; ?>" />
		</div>
		<div class="gallery">
			<?php foreach($product_images as $img): ?>
			<div class="photo_item">
				<img src="<?php echo BASE_URL; ?>media/products/<?php echo $img['url']; ?>" />
			</div>
			<?php endforeach; ?>
		</div>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <div class="post-title">
                <h3 class="my-3"><?php echo $product_info['name']; ?></h3>
              </div>

<form method="POST" class="addtocartform" action="<?php echo BASE_URL; ?>cart/add">
	<input type="hidden" name="id_product" value="<?php echo $product_info['id']; ?>" />
              <hr>
              <h4>Selecione a opção para</h4>
              <b>Cor:</b>
              <br>
              <select name="id-color" class="color-select" multiple required>
              <?php foreach($color as $cl): ?>
                <option class="color-option text-<?php echo $cl['name']; ?>" value="<?php echo $cl['id']; ?>"></option>
              <?php endforeach; ?>

              </select>

                
              <br><br>
              <b>Tamanhos:</b><br>
              <select name="id-tamanho" class="custom-select" required>
              <?php foreach($size as $sz): ?>
                  <option value="<?php echo $sz['id']; ?>"><?php echo $sz['nome']; ?></option>
              <?php endforeach; ?>
              </select>
              <div class="post-price py-2 px-3 mt-4">
                <h2 class="post-price-number">
                  <b>R$<?php echo number_format($product_info['price'], 2); ?></b>
                </h2>
                <h4 class="post-subprice">
                  <small>R$<?php echo number_format($product_info['price_from'], 2); ?> </small>
                </h4>
              </div>
              <br>
          <div class="post-quantidade">
          <input type="hidden" name="qt_product" value="1" />
          <button data-action="decrease">-</button>
          <input type="text" name="qt" value="1" class="addtocart_qt" disabled />
          <button data-action="increase">+</button>
          </div>
          <br>
          <div class="addtocart">
          <input class="addtocart_submit" type="submit" value="Adicionar ao carrinho"></input>
          </div>
          </form>
          <br>
          <button class="adddesejo" type="submit" name="action" value="addwish"><i class="fas fa-heart"></i> Lista de Desejo</button>
      </div>
  </div>
  <br>
          <div class="row mt-4">
            <nav class="w-100">
              <div class="nav nav-tabs" id="product-tab" role="tablist">
                <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">INFORMAÇÕES GERAIS</a>
                <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">AVALIAÇÕES</a>
                <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab" href="#product-rating" role="tab" aria-controls="product-rating" aria-selected="false">DETALHES</a>
              </div>
            </nav>
            <div class="tab-content p-3" id="nav-tabContent">
              <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">
              	<?php if($product_info['rating'] != '0'): ?>
			<?php for($q=0;$q<intval($product_info['rating']);$q++): ?>
			<img src="<?php echo BASE_URL; ?>assets/images/star.png" border="0" height="15" />
			<?php endfor; ?>
		<?php endif; ?>
		<hr/>
		<p><?php echo utf8_encode($product_info['description']); ?></p>
              	<h3>DETALHES</h3>
		<?php foreach($product_options as $po): ?>
		<strong><?php echo $po['name']; ?></strong>: <?php echo $po['value']; ?><br/>
		<?php endforeach; ?>
              </div>
              <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab">
<?php foreach($product_rates as $rate): ?>
        <strong><?php echo $rate['user_name']; ?></strong> - 
        <?php for($q=0;$q<intval($rate['points']);$q++): ?>
        <img src="<?php echo BASE_URL; ?>assets/images/star.png" border="0" height="15" />
        <?php endfor; ?>
        <br/>
        "<?php echo $rate['comment']; ?>"
        <hr/>
        <?php endforeach; ?>
              </div>
              <div class="tab-pane fade" id="product-rating" role="tabpanel" aria-labelledby="product-rating-tab">
				aqui é os detalhes
			</div>
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


















