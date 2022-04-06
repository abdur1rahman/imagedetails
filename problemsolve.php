<?php
// $a = readline();
// echo number_format($a);

// for ($i=0; $i < 3; $i++) {
//     $line = readline("Command: ");
//     echo readline_add_history($line);
// }

// Given a word, print \texttt{Yes}Yes if it is a palindrome, otherwise \texttt{No}No.
// A palindrome is a word which reads the same backward as forward, e.g. racecar.

$name= readline(false);
if(strrev($name)==$name) {
    echo "Yes";
}else{
    echo "No";
}


?>