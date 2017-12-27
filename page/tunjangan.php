<div class="panel panel-default">
    <div class="panel-heading">Tunjangan Baru</div>
    <div class="panel-body">
        <div class="col-lg-8">
            <form class="form-horizontal" action="act/inptjbtn.php" method="post">
                <div class="form-group">
                    <label for="" class="control-label col-sm-3">ID Tunjangan</label>
                    <div class="col-sm-9">
                        <input type="text" name="idtunj" class="form-control" required>
                    </div>
                </div>
				<div class="form-group">
                    <label for="" class="control-label col-sm-3">Jabatan</label>
                    <div class="col-sm-9">
                        <select name="jabatan" class="form-control" required>
                            <option value="">--Pilih--</option>
                            <?php
                            $r = $con->query("SELECT * FROM jabatan_tb");
                            foreach ($r as $rr) {
                                ?>
                                <option value="<?php echo $rr['id'];?>"><?php echo ucfirst($rr['nama_jabatan']);?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
				<div class="form-group">
                    <label for="" class="control-label col-sm-3">Uang Saku</label>
                    <div class="col-sm-9">
                        <input type="text" name="uangsaku" class="form-control" required>
                    </div>
                </div>
				<div class="form-group">
                    <label for="" class="control-label col-sm-3">Biaya Hotel</label>
                    <div class="col-sm-9">
                        <input type="text" name="biayahotel" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="control-label col-sm-3">Biaya Transport</label>
                    <div class="col-sm-9">
                        <input type="text" name="biayatransport" class="form-control" required>
                    </div>
                </div>
                
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
					<th>ID TUNJANGAN</th>
                        <th>ID JABATAN</th>
                        <th>UANG SAKU</th>
						<th>BIAYA HOTEL</th>
                      	<th>BIAYA TRANSPORT</th>
						<th>ACTION</th>
                    </tr>
                    <?php
                    $r = $con->query("Select * From tunjangan_tb");
                    while ($rr = $r->fetch_array()) {
                        ?>
                        <tr>
							
                            <td><?php echo $rr['id'];?></td>
                            <td><?php echo $rr['jabatan_id'];?></td>
							<td><?php echo $rr['uang_saku'];?></td>
							<td><?php echo $rr['bea_hotel'];?></td>
							<td><?php echo $rr['transport'];?></td>
                            <td>[<a href="index.php?page=tunjangan-edit&id=<?php echo $rr['id'];?>">Edit</a>] [<a href="act/tunjdel.php?id=<?php echo $rr['id'];?>" onclick="return confirm('Yakin ingin hpus data ?')">Hapus</a>]</td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>

