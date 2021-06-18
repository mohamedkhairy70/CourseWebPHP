
<?php include("header.php");?>
<body>
    <div class="container">
		<div>
			<div class="table-wrapper">
				<div class="table-title">
					<div class="row">
						<div class="col-xs-6">
							<h2>Manage <b>Products</b></h2>
						</div>
						<div class="col-xs-6">
							<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Product</span></a>
						</div>
					</div>
				</div>
				<table class="table table-striped table-hover">
					<thead>
				 		<tr>
						 	<th>#</th>
							<th>Name</th>
							<th>Brand</th>
							<th>Expiry Date</th>
							<th>IsAvailable</th>
						</tr>
					</thead>
					<tbody>
                        <?php
						require_once "BL_Product.php";
						$product = new BL_Product();
						foreach ($product->GetProduts() as $product) {?> 
						<tr>
							<td><?=$product->Id?></td>
							<td><?=$product->Name?></td>
							<td><?=$product->Brand?></td>
							<td style="color:<?=$product->IsExpiry>0?'blue':'red';?>;">
							<?=$product->ExpiryDate?> (<?=$product->IsExpiry?>)
							</td>
							<td><?=$product->IsAvailable = 1?'Yas':'No';?></td>
							<td>
							
								<a href="frm_Edit.php?Id=<?=$product->Id?>" class="edit"name="btnEdit" ><i class="material-icons"  title="Edit">&#xE254;</i></a>
								<a href="frm_Delete.php?Id=<?=$product->Id?>" class="delete" name="btn"><i class="material-icons" title="Delete">&#xE872;</i></a>
							
							</td>
						</tr>
                        <?php }?>
					</tbody>
				</table>
				
			</div>
		</div>        
    </div>
    <?php
        include("frm_Add.php");
    ?>
	
<script src="script.js"></script>
</body>
</html>

<script language="javascript">
   
</script>
