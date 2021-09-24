<?php 
    require './function.php';

    $id = $_GET["id"];
    $table = $_GET['table'];
    if($id == ["ID_PERSPECTIVE"]){
    if (clean($id,$table) > 0) {
        # code..
        echo "
            <script>
                alert ('Data berhasil dihapus');
                document.location.href = 'admin/konfigurasiUnit/$table.php'
            </script>
        ";
        
    }
//     else {
//         echo "
//     <script>
//         alert ('Data gagal dihapus');
//         document.location.href = 'admin/konfigurasiUnit/$table.php'
//     </script>
// "; }
}
?>