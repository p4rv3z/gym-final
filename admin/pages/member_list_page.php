<?php
///delete information
			if (isset($_GET['delete'])) {
			$id = $_GET['delete'];
			$sql = "DELETE FROM `users` WHERE `email`= '$id'";
			$delete = new DatabaseHelper();
			$result = $delete->deleteQuery($sql);
			if ($result == TRUE) {
				header("Location: ./member_list.php");
			}else{
				//Error
				echo "error";
			}
		}
?>
<h2 class="content-subhead" style="text-align: center;">Member List</h2>
<form method="POST" action="">
  <div class="input-group">
    <input type="text" class="form-control input-lg" placeholder="Search">
    <div class="input-group-btn">
      <button class="btn btn-primary btn-lg" type="submit">
        <i class="glyphicon glyphicon-search"></i>
      </button>
    </div>
  </div>
</form>
<hr style="border-style: inset;border-width: 1px;">
<div>
	<div class="container-fluid">
	<?php
		$user_table = "users";
		$user_info_table = "users_information";
		$get_user_info = new DatabaseHelper();
		$result = $get_user_info->getAllData($user_table);
		$i=0;
		while($row=$result->fetch_array()){
			$i++;
			$single_row = $get_user_info->retrieveData($user_info_table,trim($row['email']));
			if (!empty($single_row)) {
			
	?>
		<div class="row" style="border: 1px;padding: 10px;<?php if($i%2==0){echo 'background-color: #D3D6C5;';}?>">
			<div class="col-sm-1" style="text-align: center;">
      		<img src="../images/<?php echo $single_row['image_name']?>" style="width: 25px;height: auto;">
    		</div>
    		<div class="col-sm-3">
      		<p><?php echo substr($single_row['name'],0,16);?></p>
    		</div>
    		<div class="col-sm-3">
      		<p><?php echo $single_row['email'];?></p>
    		</div>
    		<div class="col-sm-3">
      		<p><?php echo substr($single_row['contact_number'],0,16);?></p>
    		</div>
    		<div class="col-sm-2">
    		<a href="?view=<?php echo $single_row['email'];?>" style="padding: 5px"><span class="glyphicon glyphicon-pencil"></span></a>
      		<a href="?delete=<?php echo $single_row['email'];?>" style="padding: 5px"><span class="glyphicon glyphicon-trash"></span></a>
    		</div>

		</div>
		<?php
				}
			}
			
		?>
	</div>
</div>
