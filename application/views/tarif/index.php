<div class="pull-right">
	<a href="<?php echo site_url('tarif/add'); ?>" class="btn btn-success">Add</a> 
</div>

<div class="w3l_search">
				<form action="<?php echo site_url('tarif/cari'); ?>" method="post">
					<input type="text" name="cari"  placeholder="search">
					<button class="btn btn-default" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
				</form>
			</div>
<div class="table-heading">
					<h2>Tarif</h2>
				</div>

<table  id="table">    <tr>
		<th>NO</th>
		<th>Kode</th>
		<th>Daya</th>
		<th>Tarif Perkwh</th>
		<th>Beban</th>
		<th>Actions</th>
    </tr>
    
	<?php
	$no=1;
	 foreach($tarif as $t)
	 { 
	 	

	 ?>
    <tr>
		<td><?php echo $no++ ; ?></td>
		<td><?php echo $t->kode; ?> </td>
		<td><?php echo number_format($t->daya); ?>  WATT</td>
		<td>Rp.<?php echo number_format($t->tarif_perkwh); ?>,-</td>
		<td>Rp.<?php echo number_format($t->beban); ?>,-</td>
		<td>
            <a href="<?php echo base_url() ?>tarif/edit/<?php echo $t->id; ?>" class="btn btn-info btn-xs">Edit</a> 
            <a  class="btn btn-danger btn-xs"   onclick="sweet()">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
<script type="text/javascript">
	function sweet() {
		swal({
            title: "Are you sure?",
            text: "You want to delete this Menu Item!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, Delete it!",
            closeOnConfirm: false }, 


            function()
                {
                  
                    window.location.href="<?php echo base_url() ?>tarif/remove/<?php echo $t->id; ?>";

                }
    );
	}
</script>