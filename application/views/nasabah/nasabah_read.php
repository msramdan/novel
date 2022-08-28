<div id="content" class="content">
<ol class="breadcrumb pull-right">
	<li><a href="javascript:;">Dashboard</a></li>
	<li class="active">Nasabah</li>
</ol>
<div class="row">
	<div class="col-md-12">
		<div class="panel panel-inverse">
			<div class="panel-heading">
				<div class="panel-heading-btn">
					<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
					<a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
				</div>
				<h4 class="panel-title">Data Nasabah</h4>
			</div>
			<div class="panel-body">
<table id="data-table-default" class="table table-hover table-bordered table-td-valign-middle">
	    <tr><td>No Ktp</td><td><?php echo $no_ktp; ?></td></tr>
	    <tr><td>Nama Nasabah</td><td><?php echo $nama_nasabah; ?></td></tr>
	    <tr><td>Jenis Kelamin</td><td><?php echo $jenis_kelamin; ?></td></tr>
	    <tr><td>No Hp</td><td><?php echo $no_hp; ?></td></tr>
	    <tr><td>Email</td><td><?php echo $email; ?></td></tr>
	    <tr><td>Alamat Ktp</td><td><?php echo $alamat_ktp; ?></td></tr>
	    <tr><td>Alamat Domisili</td><td><?php echo $alamat_domisili; ?></td></tr>
	    <tr><td>Bank Id</td><td><?php echo $bank_id; ?></td></tr>
	    <tr><td>No Rekening</td><td><?php echo $no_rekening; ?></td></tr>
	    <tr><td>Photo Ktp</td><td><?php echo $photo_ktp; ?></td></tr>
	    <tr><td>Photo Diri</td><td><?php echo $photo_diri; ?></td></tr>
	    <tr><td>Photo Kk</td><td><?php echo $photo_kk; ?></td></tr>
	    <tr><td>Photo Sim</td><td><?php echo $photo_sim; ?></td></tr>
	    <tr><td>Status Nasabah</td><td><?php echo $status_nasabah; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('nasabah') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
			</div>
        </div>
    </div>
	</div>
</div>