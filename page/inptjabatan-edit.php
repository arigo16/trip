<?php
$id = $_GET['id'];
$r = $con->query("SELECT * FROM jabatan_tb WHERE id = '$id'");
foreach ($r as $rr) {
	$level = $rr['nama_jabatan'];
    ?>
    <div class="panel panel-default">
        <div class="panel-heading">Form Edit Jabatan</div>
        <div class="panel-body">
            <div class="col-lg-8">
                <form class="form-horizontal" action="act/ubahjabatan.php?id=<?php echo $id; ?>" method="post">
                    <div class="form-group">
                        <label for="" class="control-label col-sm-3">ID</label>
                        <div class="col-sm-9">
                            <input type="text" name="idjabatan" class="form-control" value="<?php echo $id ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label col-sm-3">NAMA JABATAN</label>
                        <div class="col-sm-9">
                            <input type="text" name="namajabatan" class="form-control"
                                   value="<?php echo $rr['nama_jabatan']; ?>">
                        </div>
                    </div>
                
                    <div class="form-group">
                        <div class="btn-group col-sm-9 col-sm-offset-3">
                            <button class="btn btn-primary" type="submit">Update</button>
                            <a class="btn btn-primary" onclick="history.go(-1);return false;">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4">

            </div>
        </div>
    </div>
    <?php
} ?>