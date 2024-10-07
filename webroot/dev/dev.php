<?php
    foreach($_POST as $key => $val) {
        echo $key.': '.$val.'<br>';
        $data[$key] = $val;
        }
?>