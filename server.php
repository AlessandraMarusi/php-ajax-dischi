<?php 
include __DIR__.'/database.php';
$result = [];
if(isset($_GET['genre'])){
    foreach($dischi as $val){
        if($val['genre'] == $_GET['genre']){
            $result[] = $val;
        }
    }
} else {
    $result = $dischi;
}

header('Content-Type: application/json');
echo json_encode($result);
?>