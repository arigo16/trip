<?php
$id = $_GET['id'];
$r = $con->query("SELECT * FROM user_tb WHERE id = '$id'");
foreach ($r as $rr) {
	$level = $rr['level'];
    ?>
    <div class="panel panel-default">
        <div class="panel-heading">Form User</div>
        <div class="panel-body">
            <div class="col-lg-8">
                <form class="form-horizontal" action="act/usup.php?id=<?php echo $id; ?>" method="post">
                    <div class="form-group">
                        <label for="" class="control-label col-sm-3">ID</label>
                        <div class="col-sm-9">
                            <input type="text" name="username" class="form-control" value="<?php echo $id ?>" readonly>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label col-sm-3">Username</label>
                        <div class="col-sm-9">
                            <input type="text" name="username" class="form-control"
                                   value="<?php echo $rr['username']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label col-sm-3">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" name="nama" class="form-control" value="<?php echo $rr['nama']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label col-sm-3">Level</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="level">
                                <option value="admin" <?php if($level=='admin'){echo "selected"; } ?> >Admin</option>
								<option value="divhead" <?php if($level=='divhead'){echo "selected"; } ?> >Div.Head</option>
                                <option value="finance" <?php if($level=='finance'){echo "selected"; } ?> >Finance</option>
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