<?php echo form_open('tarif/edit/'.$tarif['id'],array("class"=>"form-horizontal")); ?>
<div class="table-heading">
					<h2>Edit Tarif</h2>
				</div>
	<div class="form-group">
		<label for="kode" class="col-md-3 control-label">Kode</label>
		<div class="col-md-8">
			<input type="text" name="kode" value="<?php echo ($this->input->post('kode') ? $this->input->post('kode') : $tarif['kode']); ?>" class="form-control" id="kode" />
		</div>
	</div>
	<div class="form-group">
		<label for="daya" class="col-md-3 control-label">Daya</label>
		<div class="col-md-8">
			<input type="number" name="daya" value="<?php echo ($this->input->post('daya') ? $this->input->post('daya') : $tarif['daya']); ?>"  class="form-control" id="daya" />
		</div>
	</div>
	<div class="form-group">
		<label for="tarif_perkwh" class="col-md-3 control-label">Tarif Perkwh</label>
		<div class="col-md-8">
			<input type="number" name="tarif_perkwh" value="<?php echo ($this->input->post('tarif_perkwh') ? $this->input->post('tarif_perkwh') : $tarif['tarif_perkwh']); ?>" class="form-control" id="tarif_perkwh" />
		</div>
	</div>
	<div class="form-group">
		<label for="beban" class="col-md-3 control-label">Beban</label>
		<div class="col-md-8">
			<input type="number" name="beban" value="<?php echo ($this->input->post('beban') ? $this->input->post('beban') : $tarif['beban']); ?>" class="form-control" id="beban" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-3 col-sm-8">
			<button type="submit" class="btn btn-success ">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>
