<!-- Edit Modal HTML -->
<div id="editEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
				<div class="modal-header">
					<h4 class="modal-title">Edit Product</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label>Id</label>
						<input type="text" class="form-control" id="IdEdit" >
					</div>
					<div class="form-group">
						<label>Name</label>
						<input type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Address</label>
						<textarea class="form-control" required></textarea>
					</div>
					<div class="form-group">
						<label>Phone</label>
						<input type="text" class="form-control" required>
					</div>
				</div>
				<div class="modal-footer">
					
					<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-info" value="Save" name="Edit">
				</div>
			</form>
		</div>
	</div>
</div>
<?php
if(isset($_GET["command"]))
{
	var_dump($_GET["command"]);

	// $name = $_POST["Name"];
	// $Brand = $_POST["Brand"];
	// $ExpiryDate = $_POST["ExpiryDate"];
	// $IsAvailable = $_POST["IsAvailable"] = "yas"?1:0;

	// unset($_POST);
	// require_once "BL_Product.php";
	// $product = new BL_Product();
	// if($product->AddProduct($name,$Brand,$ExpiryDate,$IsAvailable)){
	// 	echo "Succeed to insert";
	// 	header("Refresh: 1; URL=index.php");
	// }else{
	// 	echo"Faild to insert";
	// 	header("Refresh: 3;URL=index.php");
	// }
	echo "Can find";
}
