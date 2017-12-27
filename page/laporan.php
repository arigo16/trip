<div class="panel panel-default">
    <div class="panel-heading">Form Laporan</div>
    <div class="panel-body">
        <div class="col-lg-8">
            <form class="form-horizontal" action="laporan/item1.php" method="post">
                <div class="form-group">
                    <label for="" class="control-label col-sm-3">Karyawan</label>
                    <div class="col-sm-9">
                        <input type="text" id="nik" name="nik" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="" class="control-label col-sm-3">Periode</label>
                    <div class="col-sm-5">
                        <select name="tg1" class="form-control" required>
                            <option value="">--Bulan--</option>
                            <option value="1">Januari</option>
                            <option value="2">Februari</option>
                            <option value="3">Maret</option>
                            <option value="4">April</option>
                            <option value="5">Mei</option>
                            <option value="6">Juni</option>
                            <option value="7">Juli</option>
                            <option value="8">Agustus</option>
                            <option value="9">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                        </select>
                    </div>
                    <div class="col-sm-4">
                        <select name="th1" class="form-control" required>
                            <option value="">--Tahun--</option>
                            <?php
                            for ($i=2017; $i<=2050; $i++) {
                                ?>
                                <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="btn-group col-sm-9 col-sm-offset-3">
                        <button class="btn btn-primary" type="submit" >Tampilkan</button>
                        <button class="btn btn-primary" type="reset" >Reset</button>
                    </div>
                </div>
            </form>
			<form class="form-horizontal" action="index.php?page=item2" method="post">
                <div class="form-group">
                    <label for="" class="control-label col-sm-3">Karyawan</label>
                    <div class="col-sm-9">
                        <input type="text" id="nik2" name="nik2" class="form-control" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="btn-group col-sm-9 col-sm-offset-3">
                        <button class="btn btn-primary" type="submit" >Tampilkan</button>
                        <button class="btn btn-primary" type="reset" >Reset</button>
                    </div>
                </div>
            </form>
			<form class="form-horizontal" action="index.php?page=item3" method="post">
                <div class="form-group">
                    <label for="" class="control-label col-sm-3">Periode</label>
                    <div class="col-sm-5">
                        <select name="tg1" class="form-control" required>
                            <option value="">--Bulan--</option>
                            <option value="1">Januari</option>
                            <option value="2">Februari</option>
                            <option value="3">Maret</option>
                            <option value="4">April</option>
                            <option value="5">Mei</option>
                            <option value="6">Juni</option>
                            <option value="7">Juli</option>
                            <option value="8">Agustus</option>
                            <option value="9">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                        </select>
                    </div>
                    <div class="col-sm-4">
                        <select name="th1" class="form-control" required>
                            <option value="">--Tahun--</option>
                            <?php
                            for ($i=2017; $i<=2050; $i++) {
                                ?>
                                <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="btn-group col-sm-9 col-sm-offset-3">
                        <button class="btn btn-primary" type="submit" >Tampilkan</button>
                        <button class="btn btn-primary" type="reset" >Reset</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-4">
        </div>
    </div>
</div>