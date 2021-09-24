<?php 
    require './function.php';

    $id = $_GET["id"];
    $table = $_GET['table'];
    $folder = $_GET['folder'];
    if (clean($id,$table) > 0) {
        # code..
        echo "
            <script>
                alert ('Data berhasil dihapus');
                document.location.href = 'admin/$folder/$table.php'
            </script>
        ";
        
    }
    else {
        echo "
    <script>
        alert ('Data gagal dihapus');
        document.location.href = 'admin/$folder/$table.php'
    </script>
"; }
?>