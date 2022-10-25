<?php

function run(string $string, string $letters): void
{
    for ($i = 0; $i < strlen($letters); $i++) {
        $c = 0;
        for ($j=0; $j < strlen($string); $j++) { 
            if ($string[$j] == $letters[$i]) {
                $c++;
            }
        }
        print("Il y a $c '$letters[$i]'\n");
    }
}

function main($argc, $argv)
{
    if ($argc != 3) {
        fwrite(STDERR, "Il doit y avoir 2 arguments");
        exit(1);
    }
    run($argv[1], $argv[2]);
}

main($argc, $argv);

?>