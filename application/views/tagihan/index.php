
<div class="w3l_search">

				<form action="<?php echo site_url('tagihan/cari'); ?>" method="post">
					<input type="text" name="cari"  placeholder="search">
					<button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
				</form>
			</div>
<div class="table-heading">
					<h2>Tagihan</h2>
				</div>

<table  id="table">
    <tr>
		<th>NO</th>
		<th>Nama Pelanggan</th>
		<th>Tahun Tagih</th>
		<th>Bulan Tagih</th>
		<th>Pemakaian</th>
		<th>Status</th>
		
		<th>Actions</th>
    </tr>	

	<?php 

$bulan = array('','januari','februari','maret','april','mei','juni','juli','agustus','september','oktober','november','desember' );
	$no=1;
	foreach($tagihan as $t){ 
		$ew=$t['bulan_tagih'];
		


		?>
    <tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $t['nama']; ?></td>
		<td><?php echo $t['tahun_tagih']; ?></td>
		<td><?php echo $bulan["$ew"]; ?></td>
		<td><?php echo $t['pemakaian']; ?> Kwh</td>
		<td><font  class="btn bg-danger btn-xs"><?php echo $t['status']; ?></font></td>
	
		<td>
			
            
            <?php 
            	if ($this->session->userdata('class')=='user' or $this->session->userdata('class')=='admin') { ?>
            		<a href="<?php echo site_url('tagihan/bayar/'.$t['id']); ?>" class="btn btn-success btn-xs">Bayar</a>
            		<?php
            	}
            ?>

					
				<?php
			 if ($this->session->userdata('class')=='admin' or$this->session->userdata('class')=='admin1' ) {	?>
			 
			
            <a href="<?php echo site_url('tagihan/edit/'.$t['id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            
            <a href="<?php echo site_url('tagihan/remove/'.$t['id']); ?>" class="btn btn-danger btn-xs" onclick="return confirm('apakah');">Delete</a>
            <?php }?>
        </td>
    </tr>
	<?php } ?>
</table>

		