<?php

    if(isset($_GET['channel']) && isset($_GET['state'])){
        include 'connection.php';

        $channel = $_GET['channel'];
        $state = $_GET['state'];

        if($channel == 1){
            mysqli_query($db_connect, "UPDATE tb_control SET lampu1='$state'");
        }
        else if($channel == 2){
            mysqli_query($db_connect, "UPDATE tb_control SET lampu2='$state'");
        }
        header('location: index.php');
        exit;
    }

?>