<?php
for ($i = 1; $i <= 100; $i++) {

    // verifye si son divisable par  3 et  5 (% mudulo dision) (== est utilisé pour fiare une comparaison)

    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz<br />";
    } 
    // verifye si son divisable par  3 
    else if ($i % 3 == 0) {
        echo "Fizz<br />";
    } 
    // verifye si son divisable par  5
    else if ($i % 5 == 0) {
        echo "Buzz<br />";
    } 
    // si no le nombre en soi
    else {
        echo "$i<br />";
    }
}
?>
