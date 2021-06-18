<!-- Edit Modal HTML -->

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
		<div id="editEmployeeModal">
			<div class="modal-dialog">
				<div class="modal-content">
					<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
						<div class="modal-header">
							<h4 class="modal-title">Edit Product</h4>
							<a href="index.php" class="close" ><i class="material-icons"  title="close">&times;</i></a>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label>Id: <strong><?= $product->Id ?></strong></label>
								<input type="hidden" class="form-control" name="Id" value="<?= $product->Id ?>">
							</div>
							<div class="form-group">
								<label>Name</label>
								<input type="text" class="form-control" name="Name" value="<?= $product->Name ?>" required>
							</div>
							<div class="form-group">
								<label>Brand</label>
								<input type="text" class="form-control" name="Brand" value="<?= $product->Brand ?>" required>
							</div>
							<div class="form-group">
								<label>ExpiryDate</label>
								<input type="date" class="form-control" name="ExpiryDate" value="<?= $product->ExpiryDate ?>" required>
							</div>
							<div class="form-group">
								<label>IsAvailable</label>
								<input type="checkbox" class="form-control" name="IsAvailable" value="<?= $product->IsAvailable ?>" checked>
							</div>
						</div>
						<div class="modal-footer">
							<input type="submit" class="btn btn-info" value="Save" name="Edit">
						</div>
					</form>
				</div>
			</div>
		</div>
	<?php } ?>
</body>
<?php 
if(isset($_POST["Edit"])&& !empty($_POST))
{
	$Id = $_POST["Id"];
	$name = $_POST["Name"];
	$Brand = $_POST["Brand"];
	$ExpiryDate = $_POST["ExpiryDate"];
	$IsAvailable = $_POST["IsAvailable"] = "yas"?1:0;

	unset($_POST);
	require_once "BL_Product.php";
	$product = new BL_Product();
	if($product->EditProduct($Id,$name,$Brand,$ExpiryDate,$IsAvailable)){
		echo "Succeed to Edit";
		header("Refresh: 1; URL=index.php");
	}else{
		echo"Faild to Edit";
		header("Refresh: 3;URL=index.php");
	}
	
}

?>