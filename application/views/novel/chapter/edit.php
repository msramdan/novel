<!-- <link href="<?= base_url() ?>template/assets/css/bootstrap3-wysihtml5.min.css" rel="stylesheet" id="theme" /> -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<style>
	.wysihtml5-sandbox {
		height: 400px !important;
	}
</style>

<div id="content" class="content">
	<ol class="breadcrumb pull-right">
		<li><a href="javascript:;">Dashboard</a></li>
		<li class="active">Chapter</li>
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
					<h4 class="panel-title">Tambah Chapter</h4>
				</div>
				<div class="panel-body">

					<form action="<?= base_url() ?>novel_chapter/update_action/<?= encrypt_url($novel_chapter->novel_chapter_id) ?>" method="post" enctype="multipart/form-data">
						<thead>
							<table id="data-table-default" class="table  table-bordered table-hover table-td-valign-middle">
								<tr>
									<td  style="width: 15%;">Nama Chapter <?php echo form_error('nama_chapter') ?></td>
									<td><input type="text" class="form-control" name="nama_chapter" id="nama_chapter" placeholder="Nama Chapter" value="<?= $novel_chapter->nama_chapter ?>" /></td>
								</tr>
								<tr>
									<td style="width: 15%;">Kode Chapter <?php echo form_error('kode_chapter') ?></td>
									<td><input type="text" class="form-control" name="kode_chapter" id="kode_chapter" placeholder="Kode Chapter" value="<?= $novel_chapter->kode_chapter ?>" /></td>
								</tr>
								<tr>
									<td>Isi Chapter <?php echo form_error('isi_chapter') ?></td>
									<td>
										<textarea id="editor" name="isi_chapter" class="form-control isi_chapter_editor"><?php echo $novel_chapter->isi_chapter?></textarea>
									</td>
								</tr>
								<tr>
									<td>Harga <?php echo form_error('harga') ?></td>
									<td><input type="number" class="form-control" name="harga" id="harga" placeholder="Harga" value="<?= $novel_chapter->harga ?>"/></td>
								</tr>
								<tr>
									<td></td>
									<td><input type="hidden" name="novel_id" value="<?php echo encrypt_url($novel_chapter->novel_id); ?>" />
										<button type="submit" class="btn btn-danger"><i class="fa fa-save"></i> <?php echo $button ?></button>
									</td>
								</tr>
						</thead>
						</table>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- <script src="<?= base_url() ?>template/assets/js/bootstrap3-wysihtml5.all.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
  $('#editor').summernote();
});
</script>
