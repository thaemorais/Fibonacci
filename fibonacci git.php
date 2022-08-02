<?php
    function fibonacci ($number, $f0 = 0, $f1 = 1) {
        $value = [$f0, $f1];
        for($i = 1; $i < $number-1; $i++) {
            $value[] = $value[$i] + $value[$i - 1];
        }
        return $value;
    }

    function verify_if_is_float ($string) {
        if (preg_match('~[0-9].[0-9]~', $string)) {
            return true;
        } else {
            return false;
        }
    }
    
    $user_input = readline("Insira um número: ");

    switch(true) {
        case !$user_input:
            exit("Você deve digitar algo!\n");
            break;
        case !is_numeric($user_input):
            $var_type = gettype($user_input);
            exit("O tipo do que você digitou é {$var_type}. Você deve digitar um número!\n");
            break;
        case verify_if_is_float($user_input):
            exit("Esse número precisa ser inteiro!\n");
            break;
        default:
        print_r(fibonacci($user_input));
            break;
    }