<?php
if($_GET["username"] == "mft" && $_GET["password"] == "012345"){
    $out = array();
    $ar1["name"] = "sina";
    $ar1["age"] = "24";
    array_push($out,$ar1);
    $ar1["name"] = "ahmad";
    $ar1["age"] = "22";
    array_push($out,$ar1);
    $ar1["name"] = "yasin";
    $ar1["age"] = "20";
    array_push($out,$ar1);
    $ar1["name"] = "tara";
    $ar1["age"] = "18";
    array_push($out,$ar1);
    $ar1["name"] = "zahra";
    $ar1["age"] = "16";
    array_push($out,$ar1);
    $ar1["name"] = "ali";
    $ar1["age"] = "40";
    array_push($out,$ar1);
    echo json_encode($out);
}
?>