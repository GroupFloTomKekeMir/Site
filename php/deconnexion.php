
<?php

session_start();
try {
    $_SESSION = array();

    session_destroy();

    echo"reussi";
} catch (Exception $e) {
    echo"echec";
}
?>