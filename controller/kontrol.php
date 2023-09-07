<?php   

if(isset($_POST['token'])){
    include 'connection.php';
    $key = $_POST['token'];

    $sql = mysqli_query($db_connect, "SELECT * FROM tb_control WHERE token='$key'");
    $query = mysqli_num_rows($sql);

    if($query > 0){
        $data = mysqli_fetch_assoc($sql);
    }
    else{
        $data = ['token' => 'Not Valid'];
    }

    $res = json_encode($data);
    echo $res;
}

?>