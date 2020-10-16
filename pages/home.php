<?php
$ultimos = [];

var_dump(productos_crear($db, 'fsdfds', 2));

?>
		<div class="container">
			<section id="page">
				<!-- PRODUCTOS DESTACADOS -->
<div class="shoes-grid">
	<div class="products">
		<h5 class="latest-product">PRODUCTOS DESTACADOS</h5>
	</div>
	<div class="product-left">
		<!-- Producto #1 -->
		<div class="col-sm-4 col-md-4 chain-grid">
			<a href="producto.php"><img class="img-responsive chain" src="images/productos/P001.jpg" alt=" " /></a>
			<div class="grid-chain-bottom">
				<h6><a href="producto.php">Lorem ipsum dolor #1</a></h6>
				<div class="star-price">
					<div class="dolor-grid"> 
						<span class="actual">300$</span>
					</div>
					<a class="now-get get-cart" href="#">VER MÁS</a> 
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!-- Producto #2 -->
		<div class="col-sm-4 col-md-4 chain-grid">
			<a href="producto.php"><img class="img-responsive chain" src="images/productos/P002.jpg" alt=" " /></a>
			<div class="grid-chain-bottom">
				<h6><a href="producto.php">Lorem ipsum dolor #2</a></h6>
				<div class="star-price">
					<div class="dolor-grid"> 
						<span class="actual">300$</span>
					</div>
					<a class="now-get get-cart" href="#">VER MÁS</a> 
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<!-- Producto #3 -->
		<div class="col-sm-4 col-md-4 chain-grid grid-top-chain">
			<a href="producto.php"><img class="img-responsive chain" src="images/productos/P003.jpg" alt=" " /></a>
			<div class="grid-chain-bottom">
				<h6><a href="producto.php">Lorem ipsum dolor #3</a></h6>
				<div class="star-price">
					<div class="dolor-grid"> 
						<span class="actual">300$</span>
					</div>
					<a class="now-get get-cart" href="#">VER MÁS</a> 
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="clearfix"> </div>
</div>
<!-- ULTIMOS PRODUCTOS -->
<div class="shoes-grid">
	<div class="products">
		<h5 class="latest-product">ULTIMOS PRODUCTOS</h5>	
		<a class="view-all" href="productos.php">VER TODOS<span></span></a>
	</div>
	<div class="product-left">
		<!-- Producto #1 -->
		<?php foreach ($ultimos as $p) { ?>
		<div class="col-sm-4 col-md-4 chain-grid"> <!--grid-top-chain-->
			<a href="producto.php"><img class="img-responsive chain" src="images/productos/P004.jpg" alt=" " /></a>
			<span class="star"></span>
			<div class="grid-chain-bottom">
				<h6><a href="producto.php"><?php echo $p['descripcion'] ?></a></h6>
				<div class="star-price">
					<div class="dolor-grid"> 
						<span class="actual">
						<?php
						if($p['stock'] > 5) echo 'Hay stock';
						else if($p['stock'] <= 5 && $p['stock'] > 0) echo '¡Quedan los úlitmos!';
						else if($p['stock'] == 0) echo 'No hay stock';
						?>
						</span>
					</div>
					<a class="now-get get-cart" href="#">VER MÁS</a> 
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<?php } ?>

		<div class="clearfix"></div>
	</div>
	<div class="clearfix"> </div>
</div>
			</section>
		</div>

 