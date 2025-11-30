<?php
    $array = [
        "html",
        "css",
        "javascript",
        "react",
        "php"
    ];

    


    if(isset($_POST['new'])){
        $element = $_POST['new'];
        $array[] = $element;


        $length = count($array);
        for ($i=0; $i < $length; $i++) { 
            echo $array[$i] , "<br/>";
        }
    }



    $arr2 =[
        ["John", "Kylian", "Eden", "Eduardo"],
        ["sf", "gf", "slk", "dos"],
        ["20", "15", "7", "17"]
    ];

    echo $arr2[0][1], " ", $arr2[1][1], " ", $arr2[2][2];

?>