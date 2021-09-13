<?php 

    require '../../function.php';

    session_start();
	if (empty($_SESSION['username'])) {
		echo "<script>
                alert('Maaf Anda Belum Login');
				document.location = '../../login.php'
            </script>";
	}

    $kodesektor = query("SELECT * FROM divisi");


?>
<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<title>Dashboard</title>

<!-- Bootstrap CSS CDN -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" 
integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css">
<!-- Our Custom CSS -->
<link rel="stylesheet" href="../css/style.css">
<link rel="icon" href="../favicon.ico">


<!-- Font Awesome JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar">
        <div class="sidebar-header">
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../index.php">
            <div class="sidebar-brand-icon rotate-n-15" style="font-size: 0,5rem;">
                 <i class="fas fa-bell fa-2x"></i>
            </div>
            <h3 class="sidebar-brand-text mx-3">Program Management System</h3>
        </div>
        </a>

        <ul class="list-unstyled components">
            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-key"></i> Konfigurasi Unit</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="./sektor.php"><i class="fas fa-fw fa-wrench"></i> Sektor</a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-fw fa-wrench"></i> Divisi</a>
                    </li>
                    <li>
                        <a href="./wilayah.php"><i class="fas fa-fw fa-wrench"></i> Wilayah</a>
                    </li>
                    <li>
                        <a href="./cabang.php"><i class="fas fa-fw fa-wrench"></i> cabang</a>
                    </li>
                    <li>
                        <a href="./sentra.php"><i class="fas fa-fw fa-wrench"></i> Sentra Kredit</a>
                    </li>
                    <li>
                        <a href="./risiko.php"><i class="fas fa-fw fa-wrench"></i> Risiko Kredit</a>
                    </li>
                    <li>
                        <a href="./perusahaan.php"><i class="fas fa-fw fa-wrench"></i> Perusahaan Anak</a>
                    </li>
                    <li>
                        <a href="./cabangLn.php"><i class="fas fa-fw fa-wrench"></i> Cabang LN</a>
                    </li>
                </ul>
            </li>
          
            <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-key"></i> Konfigurasi KPI</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="../konfigurasiKpi/perspective.php"><i class="fas fa-fw fa-cog"></i> Perspective</a>
                    </li>
                    <li>
                        <a href="../konfigurasiKpi/format.php"><i class="fas fa-fw fa-cog"></i> Format Perspective</a>
                    </li>
                    <li>
                        <a href="../konfigurasiKpi/kpiUnit.php"><i class="fas fa-fw fa-cog"></i> KPI Unit Level</a>
                    </li>
                    <li>
                        <a href="../konfigurasiKpi/kpiSub.php"><i class="fas fa-fw fa-cog"></i> KPI Unit Sub Type</a>
                    </li>
                    <li>
                        <a href="../konfigurasiKpi/kelolaan.php"> <i class="fas fa-fw fa-cog"></i> Kelolaan</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">About</a>
            </li>
            <li>
            <a href="../../logout.php" >
                            <i class="fas fa-sign-out-alt tm-nav-fa-icon"></i>
                            <span>Logout</span> </a>
            </li>
        </ul>
    </nav>

    <!-- Page Content  -->
    <div id="content">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <button type="button" id="sidebarCollapse" class="btn btn-info">
                    <i class="fas fa-align-left"></i>
                    <span>Toggle Sidebar</span>
                </button>
                <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-align-justify"></i>
                </button>

                <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Page</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Page</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Page</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Page</a>
                        </li>
                    </ul>
                </div> -->
            </div>
        </nav>

        <!-- <form action="" method="post">
            <input type="text" name="keyword" size="40" autofocus placeholder="Masukkan Keyword pencarian...." autocomplete="off">
            <button type="submit" name="cari">Cari!</button>

            <br>
            <br> -->

        <table id="myTable" border="2" cellpadding = "10" cellspacing = "0">
                    <tr>
                        <td>No.</td>
                        <td>KODE SEKTOR</td>
                        <td>KODE DIVISI</td>
                        <td>NAMA DIVISI</td>
                        <td>NAMA GM</td>
                        <td>TIPE DIVISI</td>
                        <td>LEVEL</td>
                        <td>STATUS</td>
                        <td>AKSI</td>
                    </tr>
                    <?php $i = 1; ?>
                    <?php foreach($kodesektor as $kode) : ?>
                    <tr>
                        <td> <?= $i;?> </td> 
                        <td><?= $kode["kd_sektor"];?> </td>
                        <td><?= $kode["kd_divisi"];?></td>
                        <td><?= $kode["nm_divisi"];?></td>
                        <td><?= $kode["nm_gm"];?></td>
                        <td><?= $kode["tipe_divisi"];?></td>
                        <td><?= $kode["level_divisi"];?></td>
                        <td><?= $kode["status"];?></td>
                        <td><a href="../../clean.php?id=<?= $kode["id"]; ?>&table=divisi" onclick="return confirm('Hapus Data?');"><i class="fa fa-trash" aria-hidden="true"></i></a> | <a href="../../edit.php?id=<?=$kode["id"];?>"> <i class="fas fa-pencil-alt" aria-hidden="true"></i> </a> </td>
                    </tr>
                    <?php $i++; ?>
                    <?php endforeach; ?>
        </table>
            <br>
            <br>
            <form action="../../tambah.php" method="POST">
                    <!-- Button trigger modal -->
                    <div class="container-fluid">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalBox">
                    <i class="fa fa-map-pin"></i>
                   <span>Tambah Divisi</span>
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="modalBox" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Input Divisi</h5>
                            <button type="button" class="fa fa-window-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <div class="mb-3">
                            <label for="id" class="form-label">ID Divisi : <?= $kode["id"];?> </label>
                            </div>
                        <div class="mb-3">
                            <label for="kd_sektor" class="form-label">Kode Sektor :</label>
                            <select class="form-select" id="kd_sektor" name="kd_sektor" required>
                                    <option value=""><strong>-Pilih Sektor-</strong></option>
                                    <option value="DIU">DIU</option>
                                    <option value="WADIU">WADIU</option>
                                    <option value="DKP">DKP</option>
                                    <option value="DMK">DMK</option>
                                    <option value="DKR">DKR</option>
                                    <option value="DKU">DKU</option>
                                    <option value="DTS">DTS</option>
                                    <option value="DHL">DHL</option>
                                    <option value="DMR">DMR</option>
                                    <option value="DHN">DHN</option>
                                    <option value="DTI">DTI</option>
                                    <option value="SRR">SRR</option>
                                    <option value="SJR">SJR</option>
                                    <option value="DLJ">DLJ</option>
                            </select>
                            <input type="hidden"  id="table" name="table" value="divisi">
                        </div>
                        <div class="mb-3">
                            <label for="kd_divisi" class="form-label">Kode Divisi :</label>
                            <input type="text" class="form-control" id="kd_divisi" name="kd_divisi" required>
                        </div>
                        <div class="mb-3">
                            <label for="nm_divisi" class="form-label">Nama Divisi :</label>
                            <input type="text" class="form-control" id="nm_divisi" name="nm_divisi" required>
                        </div>
                        <div class="mb-3">
                            <label for="nm_gm" class="form-label">Nama Pemimpin :</label>
                            <input type="text" class="form-control" id="nm_gm" name="nm_gm" required>
                        </div>
                            <div class="form-group">
                                <label for="tipe_divisi">Tipe Divisi</label>
                                <br>
                                <select class="form-select" id="tipe_divisi" name="tipe_divisi" required>
                                    <option value=""><strong>-Pilih Tipe-</strong></option>
                                    <option value="BUSINESS">Business Unit</option>
                                    <option value="FUNCTION">Functional Unit</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="level_divisi">Level</label>
                                <br>
                                <select class="form-select" id="level_divisi" name="level_divisi" required>
                                    <option value=""><strong>-Pilih Level-</strong></option>
                                    <option value="divisi">Divisi</option>
                                    <option value="satuan">Satuan</option>
                                    <option value="unit">unit</option>
                                </select>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
                        </div>
                        </div>
                    </div>
                    </div>
                    </div>
        </form>


       
        
    </div>
</div>

<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>

<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

<script type="text/javascript">
    $(document).ready(function () {
            $('#myTable').DataTable();
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
        });
    });
</script>
</body>

</html>