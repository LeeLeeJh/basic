<?php

// if(!empty($_POST['data'])){
//   echo "안비었다.";
// } else {
//   echo "비었다.";
// }
// $idx = $_POST['data'];
$idx = array($_POST['data']);
$idx = explode(",", $idx);
for($i = 0; $i < count($idx); $i++){
  echo "$idx[$i]";
}
// $idx2 = explode(",", $idx);
// print_r($idx2);



//foreach ($idx as $value) {
  // $list = array($value);
//}
// echo $value[0];
// echo $value[1];
//
// echo $value[2];

// for($i = 0; $i < count($value); $i++){
//   echo "$value[$i]";
// }
?>
