<?php
$id = $_GET['id'];
$r = $con->query("SELECT pengajuan_tb.*,karyawan_tb.nama FROM pengajuan_tb INNER JOIN karyawan_tb ON pengajuan_tb.nik = karyawan_tb.nik WHERE pengajuan_tb.id = '$id'");
foreach ($r as $rr) {
	$appadmin = $rr['app_divhead'];
    ?>
    <div class="panel panel-default">
        <div class="panel-heading">Form User</div>
        <div class="panel-body">
            <div class="col-lg-8">
                <form class="form-horizontal" action="act/apup.php?id=<?php echo $id; ?>" method="post">
                    <div class="form-group">
                        <label for="" class="control-label col-sm-3">ID</label>
                        <div class="col-sm-9">
                            <input type="text" name="username" class="form-control" value="<?php echo $id ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label col-sm-3">Karyawan</label>
                        <div class="col-sm-9">
                            <input type="text" name="karyawan" class="form-control"
                                   value="<?php echo ucfirst($rr['nama']); ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label col-sm-3">Tgl Berangkat</label>
                        <div class="col-sm-9">
                            <input type="text" name="tgb" class="form-control"
                                   value="<?php echo $rr['tg_berangkat']; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label col-sm-3">Tgl Kembali</label>
                        <div class="col-sm-9">
                            <input type="text" name="tgp" class="form-control" value="<?php echo $rr['tg_pulang']; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label col-sm-3">Tujuan</label>
                        <div class="col-sm-9">
                            <input type="text" name="tuj" class="form-control" value="<?php echo $rr['tujuan']; ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label col-sm-3">Status</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="sts">
                                <option value="setuju" <?php if($appadmin=='setuju'){echo "selected"; } ?> >Setuju</option>
                                <option value="tidak setuju" <?php if($appadmin=='tidak setuju'){echo "selected"; } ?> >Tidak Setuju</option>
                            </select>
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