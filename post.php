<?php
if($_POST["username"] == "mft" && $_POST["password"] == "012345"){
    $out = array();
    $ar1["course"] = "Fizik";
    $ar1["score"] = "20";
    array_push($out,$ar1);
    $ar1["course"] = "Riazi";
    $ar1["score"] = "14";
    array_push($out,$ar1);
    $ar1["course"] = "Zist";
    $ar1["score"] = "20";
    array_push($out,$ar1);
    $ar1["course"] = "Shimi";
    $ar1["score"] = "20";
    array_push($out,$ar1);
    $ar1["course"] = "English";
    $ar1["score"] = "20";
    array_push($out,$ar1);
    echo json_encode(["karname"=>$out,"name"=>$_POST["name"]]);
}
?>