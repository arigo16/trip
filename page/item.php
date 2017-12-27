<?php
    $id = $_POST['nik'];
    $tg1 = $_POST['tg1'];
    $th1 = $_POST['th1'];
    $w = $th1."-".$tg1;
    // $tgl = strtotime($w);
    // $tg = date("Y-m");
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
			<p>
                Periode    : <?php echo $w; ?>
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
                $d = $con->query("SELECT nik, tg_berangkat, tg_pulang, tujuan, u_saku+u_hotel+u_trans as 'akomodasi' FROM pengajuan_tb WHERE nik = '$id' AND month(tg_berangkat) = '$tg1' AND year(tg_berangkat) = '$th1'");
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