
<select>
<?php
/**
 * Created by PhpStorm.
 * User: 1615154
 * Date: 14/03/2017
 * Time: 14:29

$i = 1;
while($i < 100){

    echo "<option>{$i}</option>";
$i++;
}*/
?>



</select>

<?php




while($i < 22){
    $value = (rand(0,2));
    if($value == 0){
        echo "{$i} day , u get Specs";

    }else if($value == 1){
        echo "{$i} day , u get Sausage Rolls";

    }else{
        echo "{$i} day , u get Mugs";
    }


}
 echo " No more Available anything anything!";

?>