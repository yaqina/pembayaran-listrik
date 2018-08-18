
<div class="w3l_search">
				<form action="<?php echo site_url('admin/cari'); ?>" method="post">
					<input type="text" name="cari"  placeholder="search">
					<button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
				</form>
			</div>

<div class="pull-right">
	<a href="<?php echo site_url('admin/add'); ?>" class="btn btn-success">Register</a> 
</div>

<div class="table-heading">
					<h2>Setting</h2>
				</div>


<table id="table-two-axis" class="two-axis">
    <tr>
    	<th width="200">Actions</th>
		<th>NO</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>Password</th>
		<th>Username</th>
		<th>Status</th>
		<th>Class</th>
		
    </tr>
	<?php 
	//$status = array('','Eneble','Disable' );
	$no=1;
	foreach($admin as $a){
		//$ew=$a['status'];
	 ?>
    <tr>
    	<td>
    		<a href="<?php echo site_url('admin/remove/'.$a['id']); ?>" class="btn btn-danger btn-xs"  onclick="return confirm('apakah');">Delete</a>
			 <?php

			 
			 	if ($a['status']=='deactive') {
			 		# code...
			 	 ?>
			 	<a onclick="window.location='<?=base_url();?>admin/edit?id=<?=$a['id'];?>&r=active'" onclick="return confirm('apakah');" class="btn btn-info btn-xs">Aktifkan</a>


			 	<?php } 

			 	else {
			 		?>
			 		<a onclick="window.location='<?=base_url();?>admin/edit?id=<?=$a['id'];?>&r=deactive'" onclick="return confirm('apakah');" class="btn btn-success btn-xs">Matikan</a> 
			 	<?php } ?>
			 	

            
        </td>
		<td><?php echo $no++; ?></td>
		<td><?php echo $a['nama']; ?></td>
		<td><?php echo $a['alamat']; ?></td>
		<td><?php echo $a['pass']; ?></td>
		<td><?php echo $a['uname']; ?></td>
		<td><font  class="btn bg-warning dark btn-xs"><?php echo $a['status']; ?></td>
		<td><?php echo $a['class']; ?></td>
		
    </tr>
	<?php } ?>
</table>
