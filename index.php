
<select>
<?php
/**
 * Created by PhpStorm.
 * User: 1615154
 * Date: 14/03/2017
 * Time: 14:29
 */
$i = 1;
while($i < 100){

    echo "<option>{$i}</option>";
$i++;
}
?>



</select>

<?php



$value = (rand(0,2));
if($value == 0){
    echo "Specs";

}else if($value == 1){
    echo "Sausage Rolls";

}else{
    echo "Mugs";
}


?>