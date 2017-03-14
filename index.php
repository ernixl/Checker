

<?php










$arrItems = array();
$sa = 0;
$mu = 0;
$sp = 0;
$i = 0;
while($arrItems[22] != "xxx"){
    $value = (rand(0,2));
    if($value == 0){
        if($sp < 8) {
            $arrItems[$i] = "Spec";
            $i++;
            $sp ++;
        }
    }
   else if($value == 0){
        if($sa < 8) {
            $arrItems[$i] = "Sausage";
            $i++;
            $sa ++;
        }
    }
   else{
       if($sa < 8) {
           $arrItems[$i] = "Sausage";
           $i++;
           $sa ++;
       }
   }
}








$ix = 1;

while($ix < 22){
    echo "{$ix} day, u get ".$arrItems[$ix]."<br/>";
    $ix++;
}
echo " No more Available anything anything!";
?>