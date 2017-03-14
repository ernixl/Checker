

<?php










$arrItems = array();
$sa = 0;
$mu = 0;
$sp = 0;
$i = 0;
$arrItems[22] = "xxx";
while($arrItems[22] == "xxx"){
    $value = (rand(0,2));
    echo $value . " *****************<br/>";
    if($value == 0){
        if($sp < 8) {
            $arrItems[$i] = "Spec";
            $i++;
            $sp ++;
        }
    }
   else if($value == 1){
        if($sa < 8) {
            $arrItems[$i] = "Sausage";
            $i++;
            $sa++;
        }
    }
   else{
       if($mu < 8) {
           $arrItems[$i] = "Mug";
           $i++;
           $mu++;
       }
   }
}





print_r($arrItems);


$ix = 0;

while($ix < 21){
    echo $ix+1 ." day, u get ".$arrItems[$ix]."<br/>";
    $ix++;
}
echo " No more Available anything anything!";
?>