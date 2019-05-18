<?php
// array
$array = Array (
    "0" => Array (
        "nama" => "Muhammad Ihtisamul Hasan",
        "addres" => "jln.Ibrahim adjie no 208",
        "hobbies" => "sleep,traveling",
        "is_married" => FALSE,
        "school" => "SMKN13BANDUNG",
        "skill" => "C++,50%"


    )
);

// encode array to json
$json = json_encode(array('data' => $array));

// write json to file
if (file_put_contents("data.json", $json))
    echo "File JSON sukses dibuat...";
else 
    echo "Oops! Terjadi error saat membuat file JSON...";

// data.json


?>