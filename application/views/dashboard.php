
<div class="social grid">
					<div class="grid-info">
						<div class="col-md-3 top-comment-grid">
							<div class="comments likes">
								<a href="<?=base_url();?>pelanggan/index">
								<div class="comments-icon">
									<i class="fa fa-users"></i>
								</div>
								<div class="comments-info likes-info">
									<h3><?php echo $obtCount ?> </h3>
									<a href="<?=base_url();?>pelanggan/index">Semua Pelanggan</a>
								</div>
								<div class="clearfix"> </div>
							</a>
							</div>
						</div>
						<div class="col-md-3 top-comment-grid">
							<div class="comments">
								<a href="<?=base_url();?>pembayaran/index">
								<div class="comments-icon">									
									<i class="fa fa-check-square-o"></i>
								</div>
								<div class="comments-info">
									<h3><?php echo $psnCount ?> </h3>
									<a href="<?=base_url();?>pembayaran/index">Semua Pembayaran</a>
								</div>
								<div class="clearfix"> </div>
							</a>
							</div>
						</div>
						<div class="col-md-3 top-comment-grid">
							<div class="comments tweets">
								<a href="<?=base_url();?>tagihan/index">
								<div class="comments-icon">
									<i class="fa fa-bar-chart"></i>
								</div>
								<div class="comments-info tweets-info">
									<h3><?php echo $akunCount ?> </h3>
									<a href="<?=base_url();?>tagihan/index">Semua Tagihan</a>
								</div>
								<div class="clearfix"> </div>
							</a>
							</div>
						</div>
						<div class="col-md-3 top-comment-grid">
							<div class="comments views">
								<a href="<?=base_url();?>tarif/index">
								<div class="comments-icon">
									<i class="fa fa-money"></i>
								</div>
								<div class="comments-info views-info">
									<h3><?php echo $trCount ?> </h3>
									<a href="<?=base_url();?>tarif/index">Semua Tarif</a>
								</div>
								<div class="clearfix"> </div>
							</a>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
			</div>

				
					<!-- area-chart -->
					<div class="area-grids">
						
						<div id="graph4"></div>
						<?php if($this->session->userdata('class')=='admin'){ ?>
						<script>
							
							Morris.Donut({
							  element: 'graph4',
							  data: [
								//{value: <?php echo $tunggukonfirmasi ?>, label: 'Tunggu Konfirmasi', formatted: 'Total. <?php echo $tunggukonfirmasi ?>' },
								{value: <?php echo $belumbayar ?>, label: 'Belum Bayar', formatted: 'Total. <?php echo $belumbayar ?>' },
								{value: <?php echo $sudahbayar?>, label: 'Sudah Bayar', formatted: 'Total. <?php echo $sudahbayar ?>' },
								//{value: <?php echo $obtCount ?>, label: 'Pelanggan', formatted: 'Total. <?php echo $obtCount ?>' }
							  ],
							  formatter: function (x, data) { return data.formatted; }
							});
						</script>
						<?php } else{
							?>
							<script>
							
							Morris.Donut({
							  element: 'graph4',
							  data: [
								{value: <?php echo $tunggukonfirmasi ?>, label: 'Tunggu Konfirmasi', formatted: 'Total. <?php echo $tunggukonfirmasi ?>' },
								{value: <?php echo $belumbayar ?>, label: 'Belum Bayar', formatted: 'Total. <?php echo $belumbayar ?>' },
								{value: <?php echo $sudahbayar?>, label: 'Sudah Bayar', formatted: 'Total. <?php echo $sudahbayar ?>' },
								//{value: <?php echo $obtCount ?>, label: 'Pelanggan', formatted: 'Total. <?php echo $obtCount ?>' }
							  ],
							  formatter: function (x, data) { return data.formatted; }
							});
						</script>
						<?php } ?>
					</div>
					<!-- //area-chart -->
				
		
				<div class="clearfix"> </div>
			</div>
		</div>
	<div class="footer">
			<p>© 2018 UKK . All Rights Reserved . Design by <a href="http://w3layouts.com/">AKU</a></p>
		</div>