<div class="w3l_search">
				<form action="<?php echo site_url('pembayaran/cari'); ?>" method="post">
					<input type="text" name="cari"  placeholder="search">
					<button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
				</form>
			</div>
<div class="table-heading">
					<h2>Pembayaran</h2>
				</div>

<table id="table">
    <tr>
		<th>NO</th>
		<th>Tgl Bayar</th>
		<th>Nama</th>
		
		<th>Biaya Denda</th>
		<th>Biaya Admin</th>
		<th>Diskon</th>
		<th>Jumlah Tagihan</th>
		<th>Status</th>
		<th>Action</th>
		
    </tr>
	<?php
	$no=1;
	 foreach($pembayaran as $p){ ?>
    <tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $p['tgl_bayar']; ?></td>
		<td><?php echo $p['nama']; ?></td>
		
		<td>Rp.<?php echo number_format($p['biaya_denda']); ?></td>
		<td>Rp.<?php echo number_format($p['biaya_admin']); ?></td>
		<td><?php if ($p['id_admin']==1) {
			echo "Tidak ada Diskon"; }
			else {
				echo "10%";
			}
			 ?></td>
		<td>Rp.<?php echo number_format($p['jumlah_tagihan']); ?></td>
		<td><font  class="btn bg-info dark btn-xs"><?php echo $p['status']; ?></td>
		<td>
			<a href="<?php echo site_url('tagihan/owe/'.$p['id_tagihan']); ?>" class="btn btn-danger btn-xs">Print</a> 
			<?php if ($this->session->userdata('class')=='admin1' or $this->session->userdata('class')=='admin') {
				?>
					<?php if($p['status']=='Tunggu Konfirmasi'){ ?>
			<a href="<?php echo site_url('pembayaran/konfirmasi/'.$p['id_tagihan']); ?>" class="btn btn-success btn-xs">Konfirmasi</a> 
			<a href="<?php echo site_url('pembayaran/gajadi/'.$p['id_tagihan']); ?>" class="btn btn-info btn-xs">Ga Jadi</a> 
			<?php } ?>
			<?php if ($p['status']=='Sudah Bayar') 		 { ?>
			<a href="<?php echo site_url('pembayaran/hap/'.$p['id_tagihan']); ?>" class="btn bg-danger btn-xs"  onclick="return confirm('apakah');">Hapus</a> 
			<?php } ?>
				<?php
			} ?>
			
			
		</td>
	
    </tr>
	<?php } ?>
</table>
