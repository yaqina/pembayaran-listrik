<?php echo form_open('pelanggan/add',array("class"=>"form-horizontal")); ?>

<div class="table-heading">
					<h2>Input Pelanggan</h2>
				</div>
	<div class="form-group">
		<label for="nama" class="col-md-3 control-label">Nama</label>
		<div class="col-md-8">
<input type="hidden"  required="required" name="id" value="<?php echo $admin['id'];?>" class="form-control" id="id" placeholder="Masukkan Id" />

			<?php 

				if ( $this->session->userdata('class')=='user') {

					?>
					<input type="text" disabled="" required="required" name="nama" value="<?php echo $admin['nama'];?>" class="form-control" id="nama" placeholder="Masukkan Nama" />
					<input type="hidden"  required="required" name="nama" value="<?php echo $admin['nama'];?>" class="form-control" id="nama" placeholder="Masukkan Nama" />


<?php				}

else
{
	?>
<input type="text" required="required" name="nama" value="<?php echo $this->input->post('nama'); ?>" class="form-control" id="nama" placeholder='Masukkan Nama' />
	<?php
}

			 ?>


			 			
		</div>
	</div>
	<div class="form-group">
		<label for="alamat" class="col-md-3 control-label">Alamat</label>
		<div class="col-md-8">
			<input type="hidden"  required="required" name="status" value="Belum Ditagih" class="form-control" id="Status" placeholder="Masukkan Status" />
			<?php 

				if ( $this->session->userdata('class')=='user') {

					?>
					<input type="hidden" required="required" name="alamat" value="<?php echo $admin['alamat'];?>" class="form-control" id="alamat" placeholder="Masukkan Alamat" />
					<input type="text" required="required" disabled="" name="alamat" value="<?php echo $admin['alamat'];?>" class="form-control" id="alamat" placeholder="Masukkan Alamat" />

<?php				}

else
{
	?>
<input type="text" required="required" name="alamat" value="<?php echo $this->input->post('alamat'); ?>" class="form-control" id="alamat" placeholder='Masukkan Alamat' />
	<?php
}

			 ?>
		</div>
	</div>
	<div class="form-group">
		<label for="daya" class="col-md-3 control-label">Daya</label>
		<div class="col-md-8">
			<select class="form-control" name="kd_tarif" placeholder="pilih" required="required" >
									<option>pilih</option>
								<?php foreach ($tarif as $sw) { ?>
								
								<option value='<?php echo $sw['kode']; ?>'><?php echo $sw['daya'];?> WATT</option>
								<?php } ?>
							</select>
			
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-3 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>