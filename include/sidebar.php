<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">

    <ul class="nav menu">
        <li class=""><a href="index.php">
                <svg class="glyph stroked dashboard-dial">
                    <use xlink:href="#stroked-dashboard-dial"></use>
                </svg>
                Dashboard</a></li>
        <?php
        if ($level == "admin") {
            ?>
            <li><a href="index.php?page=admin">
                    <svg class="glyph stroked calendar">
                        <use xlink:href="#stroked-calendar"></use>
                    </svg>
                    User</a></li>
            <li><a href="index.php?page=karyawan">
                    <svg class="glyph stroked line-graph">
                        <use xlink:href="#stroked-line-graph"></use>
                    </svg>
                    Data Karyawan</a></li>
			<li><a href="index.php?page=form">
                    <svg class="glyph stroked pencil">
                        <use xlink:href="#stroked-pencil"></use>
                    </svg>
                    Form Pengajuan</a></li>
					<li><a href="index.php?page=inptjabatan">
                    <svg class="glyph stroked app-window">
                        <use xlink:href="#stroked-app-window"></use>
                    </svg>
                    Jabatan Baru</a></li>
					<li><a href="index.php?page=tunjangan">
                    <svg class="glyph stroked bag">
                        <use xlink:href="#stroked-bag"></use>
                    </svg>
                    Tunjangan</a></li>
            <li><a href="index.php?page=appadm">
                    <svg class="glyph stroked star">
                        <use xlink:href="#stroked-star"></use>
                    </svg>
                    Approval</a></li>
					 <li><a href="index.php?page=formchangepswrd">
                    <svg class="glyph stroked lock">
                        <use xlink:href="#stroked-lock"></use>
                    </svg>
                    Form Ganti Password</a></li>
            <li><a href="index.php?page=laporan"><svg class="glyph stroked table"><use xlink:href="#stroked-table"></use></svg> Laporan</a></li>
            <?php
        }else if ($level == "karyawan") {
            ?>
            <li><a href="index.php?page=formkar">
                    <svg class="glyph stroked pencil">
                        <use xlink:href="#stroked-pencil"></use>
                    </svg>
                    Form Pengajuan</a></li>
					 <li><a href="index.php?page=formchangepswrd">
                    <svg class="glyph stroked lock">
                        <use xlink:href="#stroked-lock"></use>
                    </svg>
                    Form Ganti Password</a></li>
            <?php
        }
        else if ($level == "finance"){
            ?>
            <li><a href="index.php?page=appfin">
                    <svg class="glyph stroked app-window">
                        <use xlink:href="#stroked-app-window"></use>
                    </svg>
                    Approval</a></li>
					 <li><a href="index.php?page=formchangepswrd">
                    <svg class="glyph stroked lock">
                        <use xlink:href="#stroked-lock"></use>
                    </svg>
                    Form Ganti Password</a></li>
            <?php
        }
		else if ($level == "divhead"){
            ?>
            <li><a href="index.php?page=appadm">
                    <svg class="glyph stroked app-window">
                        <use xlink:href="#stroked-app-window"></use>
                    </svg>
                    Approval</a></li>
					 <li><a href="index.php?page=formchangepswrd">
                    <svg class="glyph stroked lock">
                        <use xlink:href="#stroked-lock"></use>
                    </svg>
                    Form Ganti Password</a></li>
            <?php
        }
            ?>
        <li role="presentation" class="divider"></li>
        <li><a href="lout.php"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Login Page</a></li>
    </ul>
</div>