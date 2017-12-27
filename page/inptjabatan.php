<div class="panel panel-default">
    <div class="panel-heading">Jabatan Baru</div>
    <div class="panel-body">
        <div class="col-lg-8">
            <form class="form-horizontal" action="act/inptjbtn.php" method="post">
                <div class="form-group">
                    <label for="" class="control-label col-sm-3">ID Jabatan</label>
                    <div class="col-sm-9">
                        <input type="text" name="nik" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="control-label col-sm-3">Nama Jabatan Baru</label>
                    <div class="col-sm-9">
                        <input type="text" name="nama" class="form-control" required>
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
                        <th>ID JABATAN</th>
                        <th>NAMA JABATAN</th>
						<th>ACTION</th>
                      
                    </tr>
                    <?php
                    $r = $con->query("Select * From jabatan_tb");
                    while ($rr = $r->fetch_array()) {
                        ?>
                        <tr>
                            <td><?php echo $rr['id'];?></td>
                            <td><?php echo $rr['nama_jabatan'];?></td>
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

