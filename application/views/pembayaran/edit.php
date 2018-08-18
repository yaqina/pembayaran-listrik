<?php echo form_open('pembayaran/edit/'.$pembayaran['id'],array("class"=>"form-horizontal")); ?>
<div class="table-heading">
					<h2>Edit Pembayaran</h2>
				</div>
	<div class="form-group">
		<label for="tgl_bayar" class="col-md-3 control-label">Tgl Bayar</label>
		<div class="col-md-8">
			<input type="date" name="tgl_bayar" value="<?php echo ($this->input->post('tgl_bayar') ? $this->input->post('tgl_bayar') : $pembayaran['tgl_bayar']); ?>" class="form-control" id="tgl_bayar" />
		</div>
	</div>
	<div class="form-group">
		<label for="id_tagihan" class="col-md-3 control-label">ID Tagihan</label>
		<div class="col-md-8">
			
			<select   name="id_tagihan" class="form-control">
								<option>pilih</option>
							<?php foreach ($tagihan as $sw) 
									
									{ ?>
							
							<option value='<?php echo $sw['id']; ?>'
								
									
									<?php
							if ($sw['id']==$pembayaran['id_tagihan'])
							{
								echo "selected";
							}
						?>> 
						<?php echo $sw['id'];?> 
						<?php
							}
						?>

								</option>
							
				
						</select>
		</div>
	</div>
	<div class="form-group">
		<label for="jumlah_tagihan" class="col-md-3 control-label">Jumlah Tagihan</label>
		<div class="col-md-8">
			<input type="text" name="jumlah_tagihan" value="<?php echo ($this->input->post('jumlah_tagihan') ? $this->input->post('jumlah_tagihan') : $pembayaran['jumlah_tagihan']); ?>" class="form-control" id="jumlah_tagihan" />
		</div>
	</div>
	<div class="form-group">
		<label for="biaya_denda" class="col-md-3 control-label">Biaya Denda</label>
		<div class="col-md-8">
			<input type="text" name="biaya_denda" value="<?php echo ($this->input->post('biaya_denda') ? $this->input->post('biaya_denda') : $pembayaran['biaya_denda']); ?>" class="form-control" id="biaya_denda" />
		</div>
	</div>
	<div class="form-group">
		<label for="biaya_admin" class="col-md-3 control-label">Biaya Admin</label>
		<div class="col-md-8">
			<input type="text" name="biaya_admin" value="<?php echo ($this->input->post('biaya_admin') ? $this->input->post('biaya_admin') : $pembayaran['biaya_admin']); ?>" class="form-control" id="biaya_admin" />
		</div>
	</div>
	<div class="form-group">
		<label for="status" class="col-md-3 control-label">Status</label>
		<div class="col-md-8">
			<input type="text" name="status" value="<?php echo ($this->input->post('status') ? $this->input->post('status') : $pembayaran['status']); ?>" class="form-control" id="status" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-3 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>