<?php
    session_start();
    session_destroy();

    echo "
            <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/TCC/ERise/login.php'>
        ";
