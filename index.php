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


?>