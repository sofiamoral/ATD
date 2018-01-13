<?php
include_once(dirname(__FILE__) . '/header.tpl.php');
?>
		<div class="container">
			<h1>Product Search</h1>
			<form class="form-inline" action="" method="post">
				<div class="form-group mx-sm-3 mb-2">			
					<label>Title</label>
				</div>			
				<div class="form-group mx-sm-3 mb-2">			
					<input type="text" name="title" placeholder="title" class="form-control">
				</div>
				<input type="submit" value="submit" class="btn btn-primary mb-2">
			</form>
		</div>		

		<div id="div1" class="container product-list">

		</div>
		<script>
			var obj,data;
			obj=<?php echo $datos?>;
			data = obj.data;
		</script>
<?php
include_once(dirname(__FILE__) . '/footer.tpl.php');
?>
