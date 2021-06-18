<!-- Edit Modal HTML -->
<div id="addEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form   action="<?= $_SERVER['PHP_SELF']?>" method="post">
				<div class="modal-header">						
					<h4 class="modal-title">Add Product</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<div class="form-group">
						<label>Name</label>
						<input type="text" class="form-control" name="Name" required>
					</div>
					<div class="form-group">
						<label>Brand</label>
						<input type="text" class="form-control" name="Brand" required>
					</div>
					<div class="form-group">
						<label>ExpiryDate</label>
						<input type="date" class="form-control" name="ExpiryDate" required>
					</div>
					<div class="form-group">
						<label>IsAvailable</label>
						<input type="checkbox" class="form-control" name="IsAvailable" checked>
					</div>					
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-success" value="Add" name="Add">
				</div>
			</form>
		</div>
	</div>
</div>
<?php
if(isset($_POST["Add"])&& !empty($_POST))
{
	// echo $_POST["Name"];
	// echo $_POST["Brand"];
	// echo $_POST["ExpiryDate"];
	// echo $_POST["IsAvailable"] = "yas"?1:0;

	$name = $_POST["Name"];
	$Brand = $_POST["Brand"];
	$ExpiryDate = $_POST["ExpiryDate"];
	$IsAvailable = $_POST["IsAvailable"] = "yas"?1:0;

	unset($_POST);
	require_once "BL_Product.php";
	$product = new BL_Product();
	if($product->AddProduct($name,$Brand,$ExpiryDate,$IsAvailable)){
		echo "Succeed to insert";
		header("Refresh: 1; URL=index.php");
	}else{
		echo"Faild to insert";
		header("Refresh: 3;URL=index.php");
	}
	
}

?>