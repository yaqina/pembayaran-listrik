
<?php 

			
			date_default_timezone_set('Asia/Jakarta');
			$tanggal=date('d');
			$bulann=date('m');
			$tahun=date('Y');
			$jam=date('H:i');
			$bulan=date('r');
			$bulannn = array('','jan','feb','mar','apr','mei','jun','jul','agu','sep','okt','nov','des' );
			$ew=$tagihan['bulan_tagih'];
			$admin=10000;
        	//$denda=5000;
        	$sat='Tunggu Konfirmasi';
			
			if ($tanggal>20 and $bulann>=$tagihan['bulan_tagih'] or$bulann>$tagihan['bulan_tagih']  and$tahun >=$tagihan['tahun_tagih'] or $tahun >$tagihan['tahun_tagih']) {
				$tae=5000;
			$total=$jumlah+$admin+$tae;
			
		}
		else
		{
			$total=$jumlah+$admin;
			$tae='Tidak di Denda';
		}

		if ($this->session->userdata('class')=='user') {
			$diskon=$total/100*10;
					$total1=$total-$diskon ;
				}	
		else {
			$diskon=0;
			$total1=$total;
		}

			?>
<head>
	<style type="text/css">

@page{
	size:landscape;
	
	}
@media print {
    .row {
        background-color: #000;

    }


}
	</style>
</head>
<div id="print">
<div class="table-heading">
					<h2>Invoice</h2>
				</div>
<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		
		
		<div id="social" class="pull-right">
			<a href="#"><i class="fa fa-google-plus"></i></a>
			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-linkedin"></i></a>
			<a href="#"><i class="fa fa-youtube"></i></a>
		</div>
	</div>
</div>
<div class="row" >
	<div class="col-xs-12">
		<div class="box">
			<div class="box-content">
				
				<div class="col-xs-6 " >
					
					
					<b class="col-md-3">Name</b>: <?php echo $pelanggan['nama'];?>
					<br> 
					<b class="col-md-3">Invoice date</b>: <?php echo $bulan ; ?>
					<br>
					<b class="col-md-3">Payment due</b>: lebih dari 20 <?php echo $bulannn["$ew"];?> <?php echo $tagihan['tahun_tagih'];?>

				</div>
				<div class="clearfix"></div>
				
				<div class="col-xs-12">
					<br/>
					
					<table id="table" >
						<thead>
							<tr>
								<th></th>
								<th></th>
								
							</tr>
						</thead>
						<tbody>
							
							<tr>
								<td ><b>Tagihan</b></td>
								<td>Rp.<?php echo number_format($jumlah) ;?></td>
								
							</tr>
							<tr>
								<td><b>Biaya Admin</b></td>
								<td>Rp.<?php echo number_format($admin) ;?></td>
								
							</tr>
							<tr>
								<td ><b>Denda</b></td>
								<td>
									<?php 
										if ($tanggal>20 and $bulann>=$tagihan['bulan_tagih'] or$bulann>$tagihan['bulan_tagih']  and$tahun >=$tagihan['tahun_tagih'] or $tahun >$tagihan['tahun_tagih']) 
										{
									?>	
										Rp. <?php echo number_format($tae);?>			
									<?php
										}
								else  
										{

											echo "Tidak di Denda";
										}		
								?>
								</td>
								
							</tr>
							<tr>
								<td><b>Status</b></td>
								<td><?php echo $pembayaran['status'] ;?></td>
								
							</tr>
							<tr>
								<td ><b>Diskon</b></td>
								<td>
									<?php 
									if ($this->session->userdata('class')=='user') 
									{
								?>	
									Rp. <?php echo number_format($diskon);?>	

								<?php
									}

								else  
									{
										echo "Tidak di Diskon";
									}
								?>
								</td>
								
							</tr>
							<tr >
									
								<td><b>Total</b></td>
								<td><b>Rp.<?php echo number_format($total1);?><sup>*</sup></b></td>
							</tr>
						</tbody>
					</table>
					<small>* VAT included</small>
				</div>
				</td>
</tr>
</table>
<br>

				<div class="clearfix"></div>
				<div class="col-xs-6 col-xs-offset-6">
					<div class="col-xs-4">
						<a class="btn btn-success btn-label-left" onclick="window.print();"  target="_blank"><span><i class="fa fa-print"></i></span> Print</a>
						
					</div>
					
				</div>
				<div class="clearfix"></div>
	</div>
</div>
</div>
</div>
</div>
</td>
</tr>
</table>
<script type="text/javascript">
	
	function tol(ew) {
		
		var restorepage=document.body.innerHTML;
		var printcontent=document.getElementById(ew).innerHTML;

		document.body.innerHTML =printcontent;
		window.print();
		
;
	}

</script>
