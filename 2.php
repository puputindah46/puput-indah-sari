<?php


$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVXYZ';
function generate_string($input, $strengt = 32) {
    $input_length =strlen($input);
    $random_string ='';
    for ($i = 0; $i < $strengt; $i++) {

        $random_character =$input [random_int(0, $input_length - 1)];
        $random_string .= $random_character;
    }

    return $random_string;


}

// output: da2c312dfe804ef5bd318133a342251a
echo generate_string($permitted_chars,32);

?>