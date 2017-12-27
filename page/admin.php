<div class="panel panel-default">
    <div class="panel-heading">Form User</div>
    <div class="panel-body">
        <div class="col-lg-8">
            <form class="form-horizontal" action="act/usersv.php" method="post">
                <div class="form-group">
                    <label for="" class="control-label col-sm-3">Nama</label>
                    <div class="col-sm-9">
                        <input type="text" name="nama" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="control-label col-sm-3">Username</label>
                    <div class="col-sm-9">
                        <input type="text" name="username" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="control-label col-sm-3">Password</label>
                    <div class="col-sm-9">
                        <input type="text" name="password" class="form-control">
                    </div>
                </div>

                <div class="form-group">
                    <label for="" class="control-label col-sm-3">Level</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="level">
                            <option value="admin">Admin</option>
							<option value="divhead">Div.Head</option>
                            <option value="finance">Finance</option>
                        </select>
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
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Level</th>
                        <th>Action</th>
                    </tr>
                    <?php
                    $r = $con->query("SELECT * FROM user_tb WHERE level <> 'karyawan'");
                    while ($rr = $r->fetch_array()) {
                        ?>
                        <tr>
                            <td><?php echo $rr['id'];?></td>
                            <td><?php echo $rr['nama'];?></td>
                            <td><?php echo $rr['username'];?></td>
                            <td><?php echo $rr['password'];?></td>
                            <td><?php echo $rr['level'];?></td>
                            <td>[<a href="index.php?page=admine&id=<?php echo $rr['id'];?>">Edit</a>] [<a href="act/usdel.php?id=<?php echo $rr['id'];?>" onclick="return confirm('Yakin ingin hapus data ?')">Hapus</a>]</td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>

