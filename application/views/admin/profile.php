	
			<div class="agile-grids">	
				<!-- gallery -->
				<div class="grids-heading gallery-heading">
					<h2>Profile</h2>
				</div>
				<div class="gallery-grids">
						<div class="show-reel">
							<div class="col-md-6 agile-gallery-grid">
								<div class="agile-gallery">
									<a href="<?=base_url();?>assets/images/111.png" class="lsb-preview" data-lsb-group="header">
										<img src="<?=base_url();?>assets/images/111.png" alt="" />				
									</a>
								</div>
							</div>
							<div class="col-md-6 agile-gallery-grid">
								
									
								<table id="table-two-axis" class="two-axis" height='380'>

									<tbody>
										<tr >
											<td><font size="6 px">Nama<b >:</b></font></td>
											<td><font size="6 px"><?php echo $admin['nama']; ?></font></td>
										</tr>
										<tr>
											<td><font size="6">Alamat</font></td>
											<td><font size="6 px"><?php echo $admin['alamat']; ?></font></td>
										</tr>
										<tr>
											<td><font size="6">Username</font></td>
											<td><font size="6 px"><?php echo $admin['uname']; ?></font></td>
										</tr>
										<tr>
											<td><font size="6px">Status</font></td>
											<td><font size="6 px"><?php echo $admin['status']; ?></font></td>
										</tr>
										<tr>
											<td><font size="6px">Class</font></td>
											<td><font size="6 px"><?php echo $admin['class']; ?></font></td>
										</tr>
										<tr>
											<td><font size="6px">Action</font></td>
											<td><a href="<?php echo site_url('admin/update/'.$admin['id']); ?>" class="btn btn-danger btn-xs">Edit Profile</a> <a href="<?php echo site_url('admin/gantipass/'.$admin['id']); ?>" class="btn btn-success btn-xs">Ganti Passwords</a>  </td>
										</tr>
									</tbody>	
									</table>
										
											
									
								
							</div>
							<div class="clearfix"> </div>
						</div>
						<script>
							$(window).load(function() {
							  $.fn.lightspeedBox();
							});

						</script>
				</div>
			<!-- //gallery -->

			</div>
		