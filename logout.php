<?php

// mulai session
session_start();
// hapus session
$_SESSION['login-itdri'] = false;

// alert
echo "
    <script>
        window.location = 'index.php';
    </script>
    ";

?>