<?php 

    
    require 'function.php';
    if (isset($_POST["submit"])) {
        if (tambah($_POST) > 0 ) {
            if($_POST['table'] != 'tahun_sub'){
            echo "
            <script>
                alert ('Data berhasil ditambah');
               document.location.href = 'admin/".$_POST['folder']."/". $_POST['table'] .".php'
            </script>
        ";
    } else {
        echo "
        <script>
            alert ('Data berhasil ditambah');
           document.location.href = 'admin/".$_POST['folder']."/kpisub.php'
        </script>
    ";
    }
    }else {
        echo "
        <script>
            alert ('Data gagal ditambah');
            document.location.href = 'admin/konfigurasiUnit/". $_POST['table'] .".php'
        </script>
"; 
}
} 
?>