<?php
$id = $_GET['id'];
$r = $con->query("SELECT * FROM tunjangan_tb WHERE id = '$id'");
foreach ($r as $rr) {
	$level = $rr['jabatan_id'];
    ?>
    <div class="panel panel-default">
        <div class="panel-heading">Form Edit Tunjangan</div>
        <div class="panel-body">
            <div class="col-lg-8">
                <form class="form-horizontal" action="act/ubahtunjangan.php?id=" method="post">
                    <div class="form-group">
                        <label for="" class="control-label col-sm-3">ID</label>
                        <div class="col-sm-9">
                            <input type="text" name="idtunj" class="form-control" value="<?php echo $id ?>" readonly>
                        </div>
                    </div>
                  <div class="form-group">
                    <label for="" class="control-label col-sm-3">Jabatan</label>
                    <div class="col-sm-9">
                        <select name="jabatan" class="form-control" required>
                            <option value="">--Pilih--</option>
                            <?php
                            $rx = $con->query("SELECT * FROM jabatan_tb");
                            foreach ($rx as $rrx) {
                                ?>
                                <option value="<?php echo $rrx['id'];?>"><?php echo ucfirst($rrx['nama_jabatan']);?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                 <div class="form-group">
                        <label for="" class="control-label col-sm-3">UANG SAKU</label>
                        <div class="col-sm-9">
                            <input type="text" name="uangsaku" class="form-control" value="<?php echo $rr['uang_saku']; ?>" >
                        </div>
                    </div>
					<div class="form-group">
                        <label for="" class="control-label col-sm-3">BIAYA HOTEL</label>
                        <div class="col-sm-9">
                            <input type="text" name="biayahotel" class="form-control" value="<?php echo $rr['bea_hotel']; ?>" >
                        </div>
                    </div>
					<div class="form-group">
                        <label for="" class="control-label col-sm-3">TRANSPORT</label>
                        <div class="col-sm-9">
                            <input type="text" name="biayatransport" class="form-control" value="<?php echo $rr['transport']; ?>" >
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