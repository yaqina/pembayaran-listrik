<?php echo form_open('admin/add',array("class"=>"form-horizontal")); ?>
<div class="table-heading">
					<h2>Register</h2>
				</div>
	<div class="form-group">
		<label for="nama" class="col-md-4 control-label">Nama</label>
		<div class="col-md-8">
			<input type="text" required="required" name="nama" value="<?php echo $this->input->post('nama'); ?>" class="form-control" id="nama" />
		</div>
	</div>
	<div class="form-group">
		<label for="alamat" class="col-md-4 control-label">Alamat</label>
		<div class="col-md-8">
			<input type="text" required="required" name="alamat" value="<?php echo $this->input->post('alamat'); ?>" class="form-control" id="alamat" />
		</div>
	</div>
	<div class="form-group">
		<label for="password" class="col-md-4 control-label">Password</label>
		<div class="col-md-8">
			<input type="password" required="required" name="pass" value="<?php echo $this->input->post('pass'); ?>" class="form-control" id="pass" />
		</div>
	</div>
	<div class="form-group">
		<label for="username" class="col-md-4 control-label">Username</label>
		<div class="col-md-8">
			<input type="text" required="required" name="uname" value="<?php echo $this->input->post('uname'); ?>" class="form-control" id="uname" />
		</div>
	</div>
	<div class="form-group">
		<label for="class" class="col-md-4 control-label">Class</label>
		<div class="col-md-8">
			<select class="form-control" name="class" required="required">
				<option></option>
				<option>user</option>
				<option>admin</option>
			</select>
			<input type="hidden" name="status" value="Active" class="form-control" id="status" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>