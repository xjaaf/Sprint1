<?php 
function isBitten(){
    $randomNumber = rand(0, 1);
    return $randomNumber == 1;
}
if (isBitten()){
    echo "TRUE!! Charlie me mordió el dedo ";
}else{
    echo "FALSE!! Charlie no me merdió el dedo";
}
?>