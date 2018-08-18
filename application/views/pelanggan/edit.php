<?php echo form_open('pelanggan/edit/'.$pelanggan['id'],array("class"=>"form-horizontal")); 
  ?>
	
	<div class="table-heading">
					<h2>Edit Pelanggan</h2>
				</div>
	<div class="form-group">
		<label for="nama" class="col-md-4 control-label">Nama</label>
		<div class="col-md-8">
			<input type="hidden" name="nama" value="<?php echo ($this->input->post('nama') ? $this->input->post('nama') : $pelanggan['nama']); ?>" class="form-control" id="nama" />
			<input type="text" disabled="" name="nama" value="<?php echo ($this->input->post('nama') ? $this->input->post('nama') : $pelanggan['nama']); ?>" class="form-control" id="nama" />
		</div>
	</div>
	<div class="form-group">
		<label for="alamat" class="col-md-4 control-label">Alamat</label>
		<div class="col-md-8">
			<input type="hidden" name="alamat" value="<?php echo ($this->input->post('alamat') ? $this->input->post('alamat') : $pelanggan['alamat']); ?>" class="form-control" id="alamat" />
			<input type="text" disabled="" name="alamat" value="<?php echo ($this->input->post('alamat') ? $this->input->post('alamat') : $pelanggan['alamat']); ?>" class="form-control" id="alamat" />
		</div>
	</div>
	<div class="form-group">
		<label for="kd_tarif" class="col-md-4 control-label">Daya</label>
		<div class="col-md-8">
			
			<select   name="kd_tarif" class="form-control">
								<option>pilih</option>
							<?php foreach ($tarif as $sw) 
									
									{ ?>
							
							<option value='<?php echo $sw['kode']; ?>'
								
									
									<?php
							if ($sw['kode']==$pelanggan['kd_tarif'])
							{
								echo "selected";
							}
						?>> 
						<?php echo $sw['daya'];?> WATT
						<?php
							}
						?>

								</option>
							
				
						</select>
                   
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>