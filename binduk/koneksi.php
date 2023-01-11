<?php 
$conn = mysqli_connect('localhost','root','','binduk');

function ambildata($conn,$query){
    $data = mysqli_query($conn,$query);
    if (mysqli_num_rows($data) > 0) {
        while($row = mysqli_fetch_assoc($data)){
        $hasil[] = $row;
    }

    return $hasil;
    }
}

function ambilsatubaris($conn,$query){
    $db = mysqli_query($conn,$query);
    return mysqli_fetch_assoc($db);
}

function bisa($conn,$query){
    $db = mysqli_query($conn,$query);

    if($db){
        return 1;
    }else{
        return 0;
    }
}
?>