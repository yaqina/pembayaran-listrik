<?php echo form_open('admin/gantipass/'.$admin['id'],array("class"=>"form-horizontal")); ?>

	<div class="table-heading">
					<h2>Edit Admin</h2>
				</div>

<div class="form-group">
		<label for="password" class="col-md-4 control-label">Password Lama</label>
		<div class="col-md-8">
			<input type="password" name="pwlama" placeholder="Masukkan Password Lama" required="required" class="form-control" id="pwlama" />
		</div>
	</div>
<div class="form-group">
		<label for="password" class="col-md-4 control-label">Password Baru</label>
		<div class="col-md-8">
			<input type="password" name="pwbaru" placeholder="Masukkan Password Baru" required="required" minlength="3" class="form-control" id="pwbaru" />
		</div>
	</div>
	<div class="form-group">
		<label for="password" class="col-md-4 control-label">Masukkan Lagii</label>
		<div class="col-md-8">
			<input type="password" name="lagi" placeholder='Masukkan Lagii' required="required" minlength="3" class="form-control" id="lagi" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>