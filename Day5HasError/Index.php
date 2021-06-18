
<?php include("header.php");?>
<body>
<?php
    if(isset($_POST['command'])){
        if($_POST['command']=='edit' && $_POST['productid']>0){
            $pid=$_POST['productid'];
			echo $pid;
        }
     } 
?>
<script language="javascript">
    function EditFunc(pid){
		var frm = document.getElementById("form1");
		var cmd = document.getElementById("command");
		var pro = document.getElementById("productid");
        cmd.value='edit';
        pro.value=pid;
        frm.submit();
    }
</script>
<form name="form1" method="post" Id="form1" >
	<input type="text" name="productid" id="productid"/>
	<input type="hidden" name="command" id="command"/>
</form>
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
							
								<a href="#editEmployeeModal" class="edit" data-toggle="modal" name="btnEdit" onclick="EditFunc(<?=$product->Id?>)" ><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
								<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"  name="btn" value=""><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
							
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
        include("frm_Edit.php");
        include("frm_Delete.php");
    ?>
	
<script src="script.js"></script>
</body>
</html>

<script language="javascript">
   
</script>
