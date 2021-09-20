<?php 
    
    $conn = mysqli_connect('localhost', 'root', '', 'bni_multiuser') or die(mysqli_error($conn));
    $prefix = "tbl_pmg_";
    // Query ke Database
    function query($query)
    {
        global $conn;
        $result = mysqli_query($conn,$query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }

    // Hapus
    function clean($id, $table){
        global $conn;
        
        mysqli_query($conn , "DELETE FROM $table WHERE id = $id");
        return mysqli_affected_rows($conn);
    } 

    function edit($data){
        global $conn;
        $table = $data['table'];
        switch ($table) {
            case 'sektor':
                $values =  "kd_sektor='".$data['kd_sektor']."',nm_sektor='".$data['nm_sektor']."',nm_dir='".$data['nm_dir']."',level_dir='".$data['level_dir']."',status='".$data['status']."'";
                break;
            case 'divisi':
                $values =  "kd_sektor='".$data['kd_sektor']."',kd_divisi='".$data['kd_divisi']."',nm_divisi='".$data['nm_divisi']."',nm_gm='".$data['nm_gm']."',tipe_divisi='".$data['tipe_divisi']."',level_divisi='".$data['level_divisi']."',status='".$data['status']."'";
                break;
            case 'wilayah':
                $values =  "id_wil='".$data['id_wil']."',kd_wil='".$data['kd_wil']."',nm_wil='".$data['nm_wil']."',nm_ceo='".$data['nm_ceo']."',status='".$data['status']."'";
                break;
            case 'cabang':
                    $values =  "id_wil='".$data['id_wil']."',id_cab='".$data['id_cab']."',kd_cab='".$data['kd_cab']."',nm_cab='".$data['nm_cab']."',tipe_cab_1='".$data['tipe_cab_1']."', tipe_cab_2='".$data['tipe_cab_2']."',status='".$data['status']."'";
                break;   
            case 'sentra':
                    $values = "id_wil='".$data['id_wil']."',id_sentra='".$data['id_sentra']."',kd_sentra='".$data['kd_sentra']."',nm_sentra='".$data['nm_sentra']."',tipe_sentra='".$data['tipe_sentra']."',status='".$data['status']."'";
                break;
            case 'perusahaan':
                    $values =  "kd_pa='" . $data['kd_pa']. "',nm_pa='" . $data['nm_pa']. "',nm_dir='" . $data['nm_dir']. "',status='" . $data['status']. "'";
                    break;   
            // case 'cabangln':
            //         $values =  "'', '".$data['id_cab']."', '".$data['kd_cab']."', '".$data['nm_cab']."','".$data['status']."'";
            //         break; 

            //     default :
            //         break;
        }
        $query = "UPDATE `$table` SET $values WHERE id=".$data['id']."";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }



    // Tambah
    function tambah($data){
        global $conn;

        // $id = $data["id"];
        $table = $data['table'];
        switch ($table) {
            case 'sektor':
                $values =  "'', '".$data['kd_sektor']."', '".$data['nm_sektor']."', '".$data['nm_dir']."','".$data['level_dir']."','".$data['status']."'";
                break;
            case 'divisi':
                    $values =  "'', '".$data['kd_sektor']."', '".$data['kd_divisi']."', '".$data['nm_divisi']."','".$data['nm_gm']."','".$data['tipe_divisi']."','".$data['level_divisi']."','". $data['status'] ."'";
                break;
            case 'wilayah':
                    $values =  "'', '".$data['id_wil']."', '".$data['kd_wil']."', '".$data['nm_wil']."','".$data['nm_ceo']."','".$data['status']."'";
                break;
            case 'cabang':
                    $values =  "'', '".$data['id_wil']."', '".$data['id_cab']."', '".$data['kd_cab']."','".$data['nm_cab']."','".$data['tipe_cab_1']."','".$data['tipe_cab_2']."','". $data['status'] ."'";
                break;   
            case 'sentra':
                    $values =  "'', '".$data['id_wil']."', '".$data['id_sentra']."', '".$data['kd_sentra']."','".$data['nm_sentra']."','".$data['tipe_sentra']."','". $data['status'] ."'";
                break;
            case 'perusahaan':
                    $values =  "'', '".$data['kd_pa']."', '".$data['nm_pa']."', '".$data['nm_dir']."','".$data['status']."'";
                    break;   
            case 'cabangln':
                    $values =  "'', '".$data['id_cab']."', '".$data['kd_cab']."', '".$data['nm_cab']."','".$data['type_cab']."','".$data['status']."'";
                    break; 
            case 'perspective' :
                    $values = "'', '".$data['ID_PERSPECTIVE']."','".$data['PERSPECTIVE']."','".$data['STATUS']."','".$data['ORDER_STATUS']."'";
                default :
                    break;
        }

        $query = "INSERT INTO $table VALUES ($values)";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }
    

    // login
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // CEK USER
        $cek = mysqli_query($conn , "SELECT * from users where username = '$username' and password = '$password'");
        
        // hitung jumlah baris
        $hitung = mysqli_num_rows($cek);

        if ($hitung > 0) {
            // kalau data ditemukan
            $ambildata = mysqli_fetch_array($cek);
            $role = $ambildata['role'];
            $nama = $ambildata['username'];

            if ($role == 'admin') {
              
                // kalau admin
                session_start();
                $_SESSION['log'] = 'Logged';
                $_SESSION['username'] = $ambildata['username'];
                $_SESSION['role'] = 'admin';
                header('Location: admin');
            }else {
                // kalau user
                session_start();
                $_SESSION['log'] = 'Logged';
                $_SESSION['role'] = 'user';
                $_SESSION['username'] = $ambildata['username'];
                header('Location: user');
            }

        }else {
            // kalo tidak ditemukan
            echo "<script>
                alert('Maaf Data Tidak Ditemukan');
            </script>";
        }

    };
?>