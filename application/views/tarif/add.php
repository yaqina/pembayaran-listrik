<?php echo form_open('tarif/add',array("class"=>"form-horizontal")); 

$kode='000';
$nourut=(int) substr($kode, 4,4);
$nourut++;
$char='K';

$kodee=$char . sprintf("%04s",$nourut);


?>
<div class="table-heading">
					<h2>Input Tarif</h2>
				</div>
	<div class="form-group">
		<label for="kode" class="col-md-3 control-label">Kode</label>
		<div class="col-md-8">
			<input type="text" required="required" name="kode" value="<?php echo $kodee ; ?>" class="form-control" id="kode"  />
		</div>
	</div>
	<div class="form-group">
		<label for="daya" class="col-md-3 control-label">Daya</label>
		<div class="col-md-8">
			<input type="number" required="required" name="daya" value="<?php echo $this->input->post('daya'); ?>" placeholder="WATT" class="form-control" id="daya" />
		</div>
	</div>
	<div class="form-group">
		<label for="tarif_perkwh" class="col-md-3 control-label">Tarif Perkwh</label>
		<div class="col-md-8">
			<input type="number" required="required" name="tarif_perkwh" value="<?php echo $this->input->post('tarif_perkwh'); ?>"  class="form-control" id="tarif_perkwh" />
		</div>
	</div>
	<div class="form-group">
		<label for="beban" class="col-md-3 control-label">Beban</label>
		<div class="col-md-8">
			<input type="number" required="required" name="beban" value="<?php echo $this->input->post('beban'); ?>" placeholder="Rp" class="form-control" id="beban" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-3 col-sm-8">
			<button type="submit" class="btn btn-success ">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>
