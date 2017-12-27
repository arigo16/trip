<div class="panel panel-default">
    <div class="panel-heading">Form Karyawan</div>
    <div class="panel-body">
        <div class="col-lg-8">
            <form class="form-horizontal" action="act/karsv.php" method="post">
                <div class="form-group">
                    <label for="" class="control-label col-sm-3">NIK</label>
                    <div class="col-sm-9">
                        <input type="text" name="nik" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="control-label col-sm-3">Nama</label>
                    <div class="col-sm-9">
                        <input type="text" name="nama" class="form-control" required>
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
                    <label for="" class="control-label col-sm-3">Divisi</label>
                    <div class="col-sm-9">
                        <input type="text" name="divisi" class="form-control" required>
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
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Divisi</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    $r = $con->query("SELECT karyawan_tb.*, jabatan_tb.nama_jabatan FROM karyawan_tb INNER JOIN jabatan_tb ON karyawan_tb.jabatan = jabatan_tb.id");
                    while ($rr = $r->fetch_array()) {
                        ?>
                        <tr>
                            <td><?php echo $rr['nik'];?></td>
                            <td><?php echo $rr['nama'];?></td>
                            <td><?php echo $rr['nama_jabatan'];?></td>
                            <td><?php echo $rr['divisi'];?></td>
                            <td>[<a href="index.php?page=kare&id=<?php echo $rr['nik'];?>">Edit</a>] [<a href="act/kardel.php?id=<?php echo $rr['nik'];?>" onclick="return confirm('Yakin ingin hpus data ?')">Hapus</a>]</td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>

