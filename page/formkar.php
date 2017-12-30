<div class="panel panel-default">
    <div class="panel-heading">Form Pengajuan</div>
    <div class="panel-body">
        <div class="col-lg-8">
            <form class="form-horizontal" action="act/ajuan2.php" method="post" id="formaju">
                <div class="form-group">
                    <label for="" class="control-label col-sm-3">Karyawan</label>
                    <div class="col-sm-9">
						<input type="text" id="nik" name="nik" class="form-control nik" value="<?php echo $_SESSION['nama'];?>" required readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="control-label col-sm-3">Tgl Berangkat</label>
                    <div class="col-sm-9">
                        <input type="date" name="tber" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="control-label col-sm-3">Tgl Kembali</label>
                    <div class="col-sm-9">
                        <input type="date" name="tkem" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="control-label col-sm-3">Tujuan</label>
                    <div class="col-sm-9">
                        <input type="text" name="tuj" class="form-control" required>
                    </div>
                </div>
				<?php
				$nik = $_SESSION['username'];
				$r = $con->query("SELECT karyawan_tb.*, tunjangan_tb.* FROM karyawan_tb INNER JOIN tunjangan_tb ON karyawan_tb.jabatan = tunjangan_tb.jabatan_id WHERE karyawan_tb.nik ='$nik'");
				while ($rr = $r->fetch_array()) {
					?>
                <div class="form-group">
                    <label for="" class="control-label col-sm-3">Uang saku</label>
                    <div class="col-sm-9">
                        <input type="number" name="usak" id="usak" class="form-control" value="<?php echo $rr['uang_saku'];?>" required readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="control-label col-sm-3">Biaya hotel</label>
                    <div class="col-sm-9">
                        <input type="number" name="uhot" id="uhot" class="form-control" value="<?php echo $rr['bea_hotel'];?>" required readonly>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="control-label col-sm-3">Transport</label>
                    <div class="col-sm-9">
                        <input type="number" name="utra" id="utra" class="form-control" value="<?php echo $rr['transport'];?>" required readonly>
                    </div>
                </div>
				<?php
                    }
                ?>
                <div class="form-group">
                    <div class="btn-group col-sm-9 col-sm-offset-3">
                        <button class="btn btn-primary" type="submit" >Simpan</button>
                        <button class="btn btn-primary" type="reset" >Reset</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-4">

        </div>
        <div class="col-sm-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <tr>
                        <th>ID</th>
                        <th>Karyawan</th>
                        <th>Tgl Berangkat</th>
                        <th>Tgl Kembali</th>
                        <th>Tujuan</th>
						<th>Akomodasi</th>
						<th>Tgl Pengajuan</th>
                        <th>Approve Div.Head</th>
                        <th>Approve Finance</th>
                    </tr>
                    <?php
					$nik = $_SESSION['username'];
                    $r = $con->query("SELECT pengajuan_tb.*,karyawan_tb.nama,u_saku+u_hotel+u_trans as 'Akomodasi' FROM pengajuan_tb INNER JOIN karyawan_tb ON pengajuan_tb.nik = karyawan_tb.nik WHERE pengajuan_tb.nik ='$nik'");
                    while ($rr = $r->fetch_array()) {
                        ?>
                        <tr>
                            <td><?php echo $rr['id'];?></td>
                            <td><?php echo "[ ".$rr['nik']." ] ".ucfirst($rr['nama']);?></td>
                            <td><?php echo $rr['tg_berangkat'];?></td>
                            <td><?php echo $rr['tg_pulang'];?></td>
                            <td><?php echo ucfirst($rr['tujuan']);?></td>
							<td><?php echo number_format($rr['Akomodasi']);?></td>
							<td><?php echo ucfirst($rr['CreatedDate']);?></td>
                            <td><?php echo "[ ".$rr['app_divhead']." ] ".ucfirst($rr['AppDiv']);?></td>
                            <td><?php echo "[ ".$rr['app_finance']." ] ".ucfirst($rr['AppFin']);?></td>
                        <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>

