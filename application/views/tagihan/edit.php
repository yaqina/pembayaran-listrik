<?php echo form_open('tagihan/edit/'.$tagihan['id'],array("class"=>"form-horizontal")); ?>
<div class="table-heading">
					<h2>Edit Tagihan</h2>
				</div>
	<div class="form-group">
		<label for="tahun_tagih" class="col-md-3 control-label">Tahun Tagih</label>
		<div class="col-md-8">
							<select class="form-control" name="tahun_tagih" >
									
									<option>pilih</option>
									<option 
										<?php
							if ($tagihan['tahun_tagih']==2017)
							{
								echo "selected";
							}
						?>
									>2017</option>
									<option
										<?php
							if ($tagihan['tahun_tagih']==2018)
							{
								echo "selected";
							}
						?>
									>2018</option>
									<option 
										<?php
							if ($tagihan['tahun_tagih']==2019)
							{
								echo "selected";
							}
						?>
									>2019</option>
									<option
										<?php
							if ($tagihan['tahun_tagih']==2020)
							{
								echo "selected";
							}
						?>
									>2020</option>
									
									
							</select>
		</div>
	</div>
	<div class="form-group">
		<label for="bulan_tagih" class="col-md-3 control-label">Bulan Tagih</label>
		<div class="col-md-8">
			
			<select   name="bulan_tagih" class="form-control">
								
								<?php
									$bulan = array('','januari','februari','maret','april','mei','juni','juli','agustus','september','oktober','november','desember' );
									$asw=$tagihan['bulan_tagih'];
									?>
								
							
							
									
											

								</option>
									<option>pilih</option>
									<option value="1"
										<?php

							if ($tagihan['bulan_tagih']==1)
							{
								echo "selected";
							}
						?>				
									>Januari</option>
									<option value="2"
										<?php

							if ($tagihan['bulan_tagih']==2)
							{
								echo "selected";
							}
						?>				
									>Februari</option>
									<option value="3"
										<?php

							if ($tagihan['bulan_tagih']==3)
							{
								echo "selected";
							}
						?>				
									>Maret</option>
									<option value="4"
										<?php

							if ($tagihan['bulan_tagih']==4)
							{
								echo "selected";
							}
						?>				
									>April</option>
									<option value="5"
										<?php

							if ($tagihan['bulan_tagih']==5)
							{
								echo "selected";
							}
						?>				
									>Mei</option>
									<option value="6"
										<?php

							if ($tagihan['bulan_tagih']==6)
							{
								echo "selected";
							}
						?>				
									>Juni</option>
									<option value="7"
										<?php

							if ($tagihan['bulan_tagih']==7)
							{
								echo "selected";
							}
						?>				
									>July</option>
									<option value="8"
										<?php

							if ($tagihan['bulan_tagih']==8)
							{
								echo "selected";
							}
						?>				
									>Agustus</option>
									<option value="9"
										<?php

							if ($tagihan['bulan_tagih']==9)
							{
								echo "selected";
							}
						?>				
									>September</option>
									<option value="10"
										<?php

							if ($tagihan['bulan_tagih']==10)
							{
								echo "selected";
							}
						?>				
									>Oktober</option>
									<option value="11"
										<?php

							if ($tagihan['bulan_tagih']==11)
							{
								echo "selected";
							}
						?>				
									>November</option>
									<option value="12"
										<?php

							if ($tagihan['bulan_tagih']==12)
							{
								echo "selected";
							}
						?>				
									>Desember</option>
							
				
						</select>
		</div>
	</div>
	<div class="form-group">
		<label for="pemakaian" class="col-md-3 control-label">Pemakaian</label>
		<div class="col-md-8">
			<input type="text" name="pemakaian" value="<?php echo ($this->input->post('pemakaian') ? $this->input->post('pemakaian') : $tagihan['pemakaian']); ?>" class="form-control" id="pemakaian" />
		</div>
	</div>
	<div class="form-group">
		<label for="status" class="col-md-3 control-label">Status</label>
		<div class="col-md-8">
			<input type="text" disabled="" name="status" value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $tagihan['status']); ?>" class="form-control" id="status" />
			<input type="hidden" name="status" value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $tagihan['status']); ?>" class="form-control" id="status" />
		</div>
	</div>
	<div class="form-group">
		<label for="id_pelanggan" class="col-md-3 control-label">Nama Pelanggan</label>
		<div class="col-md-8">
			<select   name="id_pelanggan" class="form-control">
								<option>pilih</option>
							<?php foreach ($pelanggan as $sw) 
									
									{ ?>
							
							<option value='<?php echo $sw['id']; ?>'
								
									
									<?php
							if ($sw['id']==$tagihan['id_pelanggan'])
							{
								echo "selected";
							}
						?>> 
						<?php echo $sw['nama'];?> 
						<?php
							}
						?>

								</option>
							
				
						</select>
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-3 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>