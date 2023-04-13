<?php
function getPlaintext(){
    $Plaintext = "GoodMorning";
    return $Plaintext;
}

function randNumber(){
    $rand = 5;
    if($rand > 28){
        echo " Number should be between 1  to 28";
    }
    else{
        return $rand;
    }
}
$Plaintext = getPlaintext();
echo $Plaintext."\n";

$rand = randNumber();
echo $rand."\n";

function shiftLeft($Plaintext, $rand){
    $result = "";
        for ($i = 0 ; $i < strlen($Plaintext); $i++) {
            $ch = $Plaintext[$i];
            if (ctype_alpha($ch)) {
                $base = ctype_upper($ch) ? 'A' : 'a';
                $ch = chr(((ord($ch) - ord($base) + $rand) % 26 + 26) % 26 + ord($base));
                if ($ch == 'a') {
                    $ch = 'z';
                } else if ($ch == 'z') {
                    $ch = 'a';
                }
            }
            $result .= $ch;
        }
        return $result;
}

$result = shiftLeft($Plaintext, $rand);
echo $result."\n";
?>
