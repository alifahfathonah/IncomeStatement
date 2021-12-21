<?php
require 'functions.php';
$id = $_GET['id'];
if(hapusData($id) > 0){
    echo "
        <script>
        alert('Data telah dihapus !');
        document.location.href = 'testimonials.php';
        </script>";
} else {
    echo "
        <script>
        alert('Data gagal dihapus !');
        document.location.href = 'testimonials.php';
        </script>";
}


?>