
<div class="w3l_search">
				<form action="<?php echo site_url('pelanggan/cari'); ?>" method="post">
					<input type="text" name="cari"  placeholder="search">
					<button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
				</form>
			</div>
<div class="pull-right">
	<?php if ($this->session->userdata('class')=='admin' or $this->session->userdata('class')=='user') {	?>
	<a href="<?php echo site_url('pelanggan/add/'.$this->session->userdata('id')); ?>" class="btn btn-success">Add</a> 
	<?php } ?>
</div>

	
<div class="table-heading">
					<h2>Pelanggan</h2>
				</div>

<table  id="dataTables-example">
		<thead>
		    <tr>
				<th>NO</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Daya</th>
				<th>Actions</th>
		    </tr>
		</thead>
	<?php
	$no=1;
		 foreach($pelanggan as $p){ ?>
    <tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $p['nama']; ?></td>
		<td><?php echo $p['alamat']; ?></td>
		<td><?php echo $p['daya']; ?> WATT</td>
		<td>
			<?php 	if ($this->session->userdata('class')=='admin'or $this->session->userdata('class')=='admin1') {	?>
			
				<a href="<?php echo site_url('tagihan/add/'.$p['id']); ?>" class="btn btn-success btn-xs">Tagih</a> 
			
			<?php }
			?>
			<?php if ($this->session->userdata('class')=='admin' or $this->session->userdata('class')=='user') {
				
			?>
            <a href="<?php echo site_url('pelanggan/edit/'.$p['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('pelanggan/remove/'.$p['id']); ?>" class="btn btn-danger btn-xs"  onclick="return confirm('apakah');">Delete</a>
            <?php } ?>
        </td>
    </tr>
	<?php } ?>
</table>

	
