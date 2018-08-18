<?php echo form_open('admin/update/'.$admin['id'],array("class"=>"form-horizontal")); ?>

	<div class="table-heading">
					<h2>Edit Admin</h2>
				</div>


<div class="form-group">
		<label for="password" class="col-md-4 control-label">Nama</label>
		<div class="col-md-8">
			<input type="text" name="nama" value="<?php echo ($this->input->post('nama') ? $this->input->post('nama') : $admin['nama']); ?>" class="form-control" id="nama" />
		</div>
	</div>
<div class="form-group">
		<label for="password" class="col-md-4 control-label">Alamat</label>
		<div class="col-md-8">
			<input type="text" name="alamat" value="<?php echo ($this->input->post('alamat') ? $this->input->post('alamat') : $admin['alamat']); ?>" class="form-control" id="alamat" />
		</div>
	</div>
	
	<div class="form-group">
		<label for="username" class="col-md-4 control-label">Username</label>
		<div class="col-md-8">
			<input type="text" name="uname" value="<?php echo ($this->input->post('uname') ? $this->input->post('uname') : $admin['uname']); ?>" class="form-control" id="uname" />
		</div>
	</div>
	<div class="form-group">
		<label for="class" class="col-md-4 control-label">Class</label>
		<div class="col-md-8">
			<input type="text" disabled="" name="class" value="<?php echo ($this->input->post('class') ? $this->input->post('class') : $admin['class']); ?>" class="form-control" id="class" />
			<input type="hidden" name="class" value="<?php echo ($this->input->post('class') ? $this->input->post('class') : $admin['class']); ?>" class="form-control" id="class" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>