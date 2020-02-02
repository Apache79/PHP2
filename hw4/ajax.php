<?php
include 'PDO.php';

$countView = (int)$_POST['count_add'];
$startIndex = (int)$_POST['count_show'];
 
$stm = $db->prepare("SELECT * FROM `goods` LIMIT $startIndex, $countView");
$stm->execute();
$allGoods = $stm->fetchAll();
 

if(!empty($allGoods)){
    $html = "";
    foreach($allGoods as $good){
        $html .= "
        <div class = "good">
            <p><?=$good['title'];?></p>
            <p><?=$good['desc'];?></p>
            <p><?=$good['price'];?></p>
        </div>
        ";
    }
    echo json_encode(array(
        'stm' 	=> 'success',
        'html'		=> $html
    ));
} else {
    echo json_encode(array(
        'stm' 	=> 'finish'
}

    
    
