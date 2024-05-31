<?php
require "./include/db.php";
header("Access-Control-Allow-Origin:*");

if ($_SERVER["REQUEST_METHOD"]==="GET") {
    $stmt="select name from category where status=1";
    if($result=$conn->query($stmt)){
        $arr=array();
        while($name = $result->fetch_assoc()["name"]){
            array_push($arr,$name);
    }
    echo json_encode(["categories"=> $arr]);
}
else{
    echo json_encode(["error"=> "something went wrong... try again later"]);
}
exit();
}


