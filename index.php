

<?php


$i = 1;

while($i < 22){
    $value = (rand(0,2));
    if($value == 0){
        echo "{$i} day , u get Specs";

    }else if($value == 1){
        echo "{$i} day , u get Sausage Rolls";

    }else{
        echo "{$i} day , u get Mugs";
    }
$i++;

}
 echo " No more Available anything anything!";

?>