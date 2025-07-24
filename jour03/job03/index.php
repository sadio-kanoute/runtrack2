<?php
$voyelles = "aeiouyAEIOUY";
$str = "I'm sorry Dave I'm afraid I can't do that.";

for ($i = 0; $i < strlen($str); $i++) {
    if (strpos($voyelles, $str[$i]) !== false) {
        echo $str[$i];
    }
}
?>
