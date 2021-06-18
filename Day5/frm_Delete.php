<!-- Delete Modal HTML -->

<?php include("header.php"); ?>

<body>
	<?php
	$Id = 0;
	if (isset($_GET["Id"])) {
		$Id = $_GET["Id"];
		unset($_GET);
	}
	require_once "BL_Product.php";
	$product = new BL_Product();
	foreach ($product->GetProdutById($Id) as $product) { ?>

		<div id="deleteEmployeeModal">
			<div class="modal-dialog">
				<div class="modal-content">
					<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
						<div class="modal-header">
							<h4 class="modal-title">Delete Product</h4>
							
							<a href="index.php" class="close" ><i class="material-icons"   title="close">&times;</i></a>
						</div>
						<div class="modal-body">
						<div class="form-group">
							<input type="hidden" class="form-control" name="Id" value="<?= $product->Id ?>">
							</div>
							<p>Are you sure you want to delete these Records <strong><?= $product->Id ?> ?</strong></p>
							<p class="text-warning"><small>This action cannot be undone.</small></p>
						</div>
						<div class="modal-footer">
							<input type="submit" class="btn btn-warning" value="Soft Delete" name="SoftDelete">
							<input type="submit" class="btn btn-danger" value="Delete" name="Delete">
						</div>
					</form>
				</div>
			</div>
		</div>
	<?php } ?>
</body>
<?php 
if(isset($_POST["Delete"])&& !empty($_POST))
{
	$Id = $_POST["Id"];
	unset($_POST);
	require_once "BL_Product.php";
	$product = new BL_Product();
	if($product->Delete($Id)){
		echo "Succeed to Delete";
		header("Refresh: 1; URL=index.php");
	}else{
		echo"Faild to Delete";
		header("Refresh: 3;URL=index.php");
	}
	
}
else if(isset($_POST["SoftDelete"])&& !empty($_POST))
{
	$Id = $_POST["Id"];
	unset($_POST);
	require_once "BL_Product.php";
	$product = new BL_Product();
	if($product->DeleteSoft($Id)){
		echo "Succeed to Soft Delete";
		header("Refresh: 1; URL=index.php");
	}else{
		echo"Faild to Soft Delete";
		header("Refresh: 3;URL=index.php");
	}
	
}

?>