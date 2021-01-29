
<?php

$data = array("textdata","optradio","form");

    file_put_contents("data.txt",serialize($data));

    $datas = unserialize(file_get_contents("data.txt"));
    print_r($datas);

 fann_cascadetrain_on_data
?>
