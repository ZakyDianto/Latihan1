<?php
    session_start();
    session_destroy();

    if (!isset($_SESSION['status_login'])) {
        echo "<script>
                    alert('Login Terlebih Dahulu')
                    window.location.href = 'index.php'    
              </script>";
    }
    
    else {
        echo "<script>
                    alert('Log Out Berhasil')
                    window.location.href = 'index.php'    
              </script>";
    }
?>
