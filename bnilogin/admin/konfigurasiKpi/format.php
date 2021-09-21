<?php 

    require '../../function.php';
    session_start();
	if (empty($_SESSION['username'])) {
		echo "<script>
                alert('Maaf Anda Belum Login');
				document.location = '../../login.php'
            </script>";
	}

    $kodesektor = query("SELECT*FROM perspective");
    $kodesektor2 = query("SELECT*FROM format_perspective GROUP BY id_format");
?>
<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<title>Dashboard</title>

<!-- Bootstrap CSS CDN -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<link rel="stylesheet" href="../../assets/DataTables/datatables.min.css">
<!-- Our Custom CSS -->
<link rel="stylesheet" href="../css/style.css">
<link rel="icon" href="../favicon.ico">


<!-- Font Awesome JS -->
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
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
                        <a href="../konfigurasiUnit/sektor.php"><i class="fas fa-fw fa-wrench"></i> Sektor</a>
                    </li>
                    <li>
                        <a href="../konfigurasiUnit/divisi.php"><i class="fas fa-fw fa-wrench"></i> Divisi</a>
                    </li>
                    <li>
                        <a href="../konfigurasiUnit/wilayah.php"><i class="fas fa-fw fa-wrench"></i> Wilayah</a>
                    </li>
                    <li>
                        <a href="../konfigurasiUnit/cabang.php"><i class="fas fa-fw fa-wrench"></i> cabang</a>
                    </li>
                    <li>
                        <a href="../konfigurasiUnit/sentra.php"><i class="fas fa-fw fa-wrench"></i> Sentra Kredit</a>
                    </li>
                    <li>
                        <a href="../konfigurasiUnit/risiko.php"><i class="fas fa-fw fa-wrench"></i> Risiko Kredit</a>
                    </li>
                    <li>
                        <a href="../konfigurasiUnit/perusahaan.php"><i class="fas fa-fw fa-wrench"></i> Perusahaan Anak</a>
                    </li>
                    <li>
                        <a href="../konfigurasiUnit/cabangLn.php"><i class="fas fa-fw fa-wrench"></i> Cabang LN</a>
                    </li>
                </ul>
            </li>
          
            <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-key"></i> Konfigurasi KPI</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="./perspective.php"><i class="fas fa-fw fa-cog"></i> Perspective</a>
                    </li>
                    <li>
                        <a href="#"><i class="fas fa-fw fa-cog"></i> Format Perspective</a>
                    </li>
                    <li>
                        <a href="./kpiUnit.php"><i class="fas fa-fw fa-cog"></i> KPI Unit Level</a>
                    </li>
                    <li>
                        <a href="./kpiSub.php"><i class="fas fa-fw fa-cog"></i> KPI Unit Sub Type</a>
                    </li>
                    <li>
                        <a href="./kelolaan.php"> <i class="fas fa-fw fa-cog"></i> Kelolaan</a>
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

        <table class="table table-striped table-bordered" id="myTable">
            <thead>
                <td>NO</td>
                <td>FORMAT NAME</td>
                <td>VIEW</td>
            </thead>
            <tbody>
                <?php
                    foreach ($kodesektor2 as $key => $kode) {
                ?>
<tr>
                        <td> <?= ++$key;?> </td>
                        <td>
                        <a style="text-decoration:none" title="Double Click untuk Edit" ondblclick="editFormatPerspective(1,35)">
		                <?=$kode['nm_format']?></a>
                        </td>
                        <td>
                        <button type="button" class="btn btn-primary tambahDatas" data-id="<?=$kode['id_format']?>" data-bs-toggle="modal" data-bs-target="#exampleModal<?=$kode['id_format']?>">
                            <i class="fa fa-map-pin"></i>
                            <span>View</span>
                        </button>
                        <div class="modal fade" id="exampleModal<?=$kode['id_format']?>" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="formModalLabel">Input Sektor</h5>
                            <button type="button" class="fa fa-window-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <table class="table table-stripped table-bordered" id="myTable">
                            <tr>
                                <th>ORDER</th>
                                <th>PERSPECTIVE</th>
                            </tr>
                            <?php
                                $order = changeValue($kode['id_format']);
                                foreach ( $order as $p) {
                                    ?>
                                        <tr>
                                            <td><?=$p['PERSPECTIVE']?></td>
                                            <td><?=$p['order_perspective']?></td>
                                        </tr>
                                    <?php
                                }
                            ?>
                        </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
                        </div>
                        </div>
                    </div>
                    </div>
                        </td>                   
                     </tr>
                     
                <?php
                
                    }
                    $id = $kode['id_format']+1;
                ?>
            </tbody>


        </table>

        

        <button type="button" class="btn btn-primary format" data-bs-toggle="modal" data-bs-target="#tambahFormat">
                 <i class="fa fa-map-pin"></i>
                    <span>Tambah Format</span>
        </button>
        <!-- modal tambah -->
        <div class="modal fade" id="tambahFormat" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="formModalLabel">Input Sektor</h5>
                            <button type="button" class="fa fa-window-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                        <form action="../../tambah.php" method="POST">
                        <label for="Tambah Format"> <strong>Tambah Format</strong></label>
                        &nbsp;
                        <br>
                        <input type="text" name="format" id="format">
                        <br>
                        <br>
                        <table class="table table-stripped table-bordered" id="myTable">
                            <tr>
                                <th rowspan="2" class="text-center">NO</th>
                                <th rowspan="2" class="text-center">NAMA PERSPECTIVE</th>
                                <th colspan="2" class="text-center">STATUS</th>
                                <th rowspan="2" class="text-center">ORDER</th>
                            </tr>
                            <tr>
                                <th class="text-center">TIDAK AKTIF</th>
                                <th class="text-center">AKTIF</th>
                            </tr>
                            <?php foreach ($kodesektor as $kodi) : ?>
                            <tr>
                                <td><?= $kodi['ID_PERSPECTIVE']; ?></td>
                                <td><?= $kodi['PERSPECTIVE'];?></td>
                                <td> <input name="status[<?=$kodi['ID_PERSPECTIVE']?>]" class="unaktif-radio" data-id="<?=$kodi['ID_PERSPECTIVE']?>" type="radio" value="0" checked></td>
                                <td> <input name="status[<?=$kodi['ID_PERSPECTIVE']?>]" class="aktif-radio" data-id="<?=$kodi['ID_PERSPECTIVE']?>" type="radio" value="<?=$kodi['ID_PERSPECTIVE']?>" ></td>
                                <td>
                                <select name="order[<?=$kodi['ID_PERSPECTIVE']?>]" id="order<?=$kodi['ID_PERSPECTIVE']?>" disabled="disabled" required="">
                                <option class="default-value<?=$kodi['ID_PERSPECTIVE']?>" value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
			                    </select>
                                </td>
                            </tr>
                            <?php endforeach; ?>

                        </table>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden"  id="table" name="table" value="format_perspective">
                            <input type="hidden"  id="id" name="id" value="<?=$id?>">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
                        </div>
                        </form>
                        </div>
                    </div>
                    </div>
            </form>
    </div>
</div>

<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="../../assets/DataTables/datatables.min.js"></script>
<script src="../js/script.js"></script>
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
<script>    
	function hapusFormat(id1,id2) {
		var idFormat = id1;
		var id_page = id2;
		
		konfirm = confirm("Hapus data Format Perspective ini ?");
		if (konfirm) { 
			document.location.href='submit_format_perspective.php?Submit=Hapus&&idFormat='+idFormat+'&&id_page='+id_page;
		}
		else {
			document.location.href='ris_config_format_perspective.php?id='+id_page;
	 	}
	}
	
	function editFormatPerspective(id1,id2) {
		var idFormat = id1;
		var id_page = id2;
		window.open('edit_format_perspective.php?idFormat='+idFormat+'&&id='+id_page, '', 'width=1024, height=1024, left=0, top=0, menubar=yes,location=yes,scrollbars=yes, resizeable=yes, status=no, copyhistory=yes,toolbar=yes, titlebar=yes');
	}

</script>
</body>

</html>