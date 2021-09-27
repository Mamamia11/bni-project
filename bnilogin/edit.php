<?php 
    require 'function.php';
    $folder = $_GET['folder'];
    if (isset($_POST["submit"])) {
        if (edit($_POST) > 0 ) {
            echo "
            <script>
                alert ('Data berhasil diubah');
               document.location.href = 'admin/$folder/". $_POST['table'] .".php'
            </script>
        ";
    }else {
        echo "
        <script>
            alert ('Data gagal diubah');
            document.location.href = 'admin/$folder/". $_POST['table'] .".php'
        </script>
"; 
}
} 
?>