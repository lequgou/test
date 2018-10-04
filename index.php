<?php
$a = "Original";
$my_array = array("a" => "Cat", "b" => "Dog", "c" => "Horse");

extract($my_array, EXTR_PREFIX_SAME, "dup");

echo  $a.'<br>';
$age=array("Bill"=>"60","Steve"=>"56","Mark"=>"31");
print_r(array_change_key_case($age,CASE_UPPER));
?>
<h1>这是一行测试</h1>
