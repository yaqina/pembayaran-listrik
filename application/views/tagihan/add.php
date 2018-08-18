<?php echo form_open('tagihan/add/'.$pelanggannn['id'],array("class"=>"form-horizontal")); ?>

<div class="table-heading">
					<h2>Input Tagihan</h2>
				</div>
	<div class="form-group">
		<label for="tahun_tagih" class="col-md-3 control-label">Tahun Tagih</label>
		<div class="col-md-8">
			<select class="form-control" name="tahun_tagih" required="required" >
									<option>pilih</option>
									<option>2017</option>
									<option>2018</option>
									<option>2019</option>
									<option>2020</option>
									
									
							</select>
		</div>
	</div>
	<div class="form-group">
		<label for="bulan_tagih" class="col-md-3 control-label">Bulan Tagih</label>
		<div class="col-md-8">
			<select class="form-control" name="bulan_tagih" required="required">
									<option>pilih</option>
									<option value="1">Januari</option>
									<option value="2">Februari</option>
									<option value="3">Maret</option>
									<option value="4">April</option>
									<option value="5">Mei</option>
									<option value="6">Juni</option>
									<option value="7">July</option>
									<option value="8">Agustus</option>
									<option value="9">September</option>
									<option value="10">Oktober</option>
									<option value="11">November</option>
									<option value="12">Desember</option>
									
							</select>
			
		</div>
	</div>
	<div class="form-group">
		<label for="pemakaian" class="col-md-3 control-label">Pemakaian</label>
		<div class="col-md-8">
			<input type="number" required="required" name="pemakaian" value="<?php echo $this->input->post('pemakaian'); ?>" placeholder ="Kwh" class="form-control" id="pemakaian" />
		</div>
	</div>
	<div class="form-group">
		<label for="status" class="col-md-3 control-label">Status</label>
		<div class="col-md-8">
			<input type="text" disabled="" name="status" value="<?php echo $sat;?>" class="form-control" id="status" required="required"/>
			<input type="hidden"  name="status" value="<?php echo $sat;?>" class="form-control" id="status" />
		</div>
	</div>
	<div class="form-group">
		<label for="id_pelanggan" class="col-md-3 control-label">Nama Pelanggan</label>
		<div class="col-md-8">
			<select name="id_pelanggan"  class="form-control" id="nama" />
			<option value="<?php echo $pelanggannn['id'];?>" ><?php echo $pelanggannn['nama']; ?></option>
				
			<input type="hidden" name="ztatuz" value="Sudah Ditagih" class="form-control" id="nama" />

		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-3 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>