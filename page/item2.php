<?php
    $id = $_POST['nik2'];
    $r = $con->query("SELECT nama FROM karyawan_tb WHERE nik = '$id'");
    foreach ($r as $rr){
        $nama = $rr['nama'];
    }
?>
<div class="panel panel-default">
    <div class="panel-heading">Form Laporan</div>
    <div class="panel-body">
        <div>
            <p>
                NIK    : <?php echo $id; ?>
            </p>
            <p>
                NAMA   : <?php echo ucfirst($nama); ?>
            </p>
        </div>
        <div>
            <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>Tgl Berangkat</th>
                    <th>Tgl Pulang</th>
                    <th>Tujuan</th>
					<th>Akomodasi</th>
                </tr>
                <?php
                $d = $con->query("SELECT nik, tg_berangkat, tg_pulang, tujuan, u_saku+u_hotel+u_trans as 'akomodasi' FROM pengajuan_tb WHERE nik = '$id'");
                foreach ($d as $dd) {
                    ?>
                    <tr>
                        <td><?php echo $dd['nik'];?></td>
                        <td><?php echo $dd['tg_berangkat'];?></td>
                        <td><?php echo $dd['tg_pulang'];?></td>
                        <td><?php echo ucfirst($dd['tujuan']);?></td>
						<td><?php echo ucfirst($dd['akomodasi']);?></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </div>
    </div>
</div>