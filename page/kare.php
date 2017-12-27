<?php
$id = $_GET['id'];
$r = $con->query("SELECT * FROM karyawan_tb WHERE nik = '$id'");
foreach ($r as $rr) {
	$jabatan = $rr['jabatan'];
    ?>
    <div class="panel panel-default">
        <div class="panel-heading">Form User</div>
        <div class="panel-body">
            <div class="col-lg-8">
                <form class="form-horizontal" action="act/karup.php?id=<?php echo $id; ?>" method="post">
                    <div class="form-group">
                        <label for="" class="control-label col-sm-3">ID</label>
                        <div class="col-sm-9">
                            <input type="text" name="nik" class="form-control" value="<?php echo $id ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label col-sm-3">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" name="nama" class="form-control"
                                   value="<?php echo $rr['nama']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label col-sm-3">Jabatan</label>
                        <div class="col-sm-9">
							<select class="form-control" name="sts">
                                <option value="1121" <?php if($jabatan=='1121'){echo "selected"; } ?> >Manajer</option>
                                <option value="1122" <?php if($jabatan=='1122'){echo "selected"; } ?> >Supervisor</option>
								<option value="1123" <?php if($jabatan=='1123'){echo "selected"; } ?> >Staff</option>
                                <option value="1124" <?php if($jabatan=='1124'){echo "selected"; } ?> >Mekanik</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label col-sm-3">Divisi</label>
                        <div class="col-sm-9">
                            <input type="text" name="divisi" class="form-control" value="<?php echo $rr['divisi']; ?>">
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