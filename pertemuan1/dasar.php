<?php
//    $str_satu = "pemrograman";
//    $str_dua = " website";

//   echo $str_satu . $str_dua;

$array = ['pemrograman', 'website', ' kelas', 'b'];

//var_dump($array);

foreach ($array as $value) {
   echo $value . " ";
}

<br/>
for ($i=0 ; $i < count($array) ; $i++ ) { 
   echo $array[$i] . " ";
}
?>