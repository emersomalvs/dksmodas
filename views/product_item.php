<div class="product_item">
	<a href="<?php echo BASE_URL; ?>product/open/<?php echo $id; ?>">
		
		<div class="product_image">
			<div class="product_tags">
			<?php if($sale == '1'): ?>
			<div class="product_tag product_tag_red"><?php echo $this->lang->get('SALE') ?></div>
			<?php endif; ?>
			<?php if($bestseller == '1'): ?>
			<div class="product_tag product_tag_green"><?php echo $this->lang->get('BESTSELLER') ?></div>
			<?php endif; ?>
			<?php if($new_product == '1'): ?>
			<div class="product_tag product_tag_blue"><?php echo $this->lang->get('NEW') ?></div>
			<?php endif; ?>
		</div>
			<img src="<?php echo BASE_URL; ?>media/products/<?php echo $images[0]['url']; ?>" width="100%" />
		</div>
		<div class="product_name"><span><?php echo $name; ?></span></div>
		<div class="product_price">
			<div class="product_price_from"><?php
				if($price_from != '0') {
					echo 'R$ '.number_format($price_from, 2, ',', '.');
				}
			?></div>
			<div class="product_price_real">R$ <?php echo number_format($price, 2, ',', '.'); ?></div>
		</div>
		<div style="clear:both"></div>
	</a>
</div>