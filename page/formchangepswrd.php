<div class="panel panel-default">
    <div class="panel-heading">Form Ganti Password</div>
    <div class="panel-body">
        <div class="col-lg-8">
            <form class="form-horizontal" action="act/gantipassword.php" method="post">
                <div class="form-group">
                    <label for="" class="control-label col-sm-3">Password Lama</label>
                    <div class="col-sm-9">
						<input type="text" id="passwordlm" name="passwordlm" class="form-control" placeholder="Masukan Password Lama"  required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="control-label col-sm-3">Password Baru</label>
                    <div class="col-sm-9">
						<input type="text" id="passwordlm" name="passwordbr" class="form-control" placeholder="Masukan Password Baru"  required>
						<div class="text-success"><?php  isset($_SESSION['error']) ? $e=$_SESSION['error'] : $e=""; echo $e;?></div>
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
        
    </div>
</div>

