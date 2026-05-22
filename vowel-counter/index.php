<?php

    /**
     * Counts and lists the vowels found in a sentence.
     *
     * @param string $sentence The sentence to analyze.
     * @return string A descriptive sentence summarizing the vowels found and their number.
     */
    function vowelCount(string $sentence): string {
        $vowels = ["a", "e", "i", "o", "u", "y", "A", "E", "I", "O", "U", "Y"];
        $vowelFound = []; 
        $showVowel = "";
        $count = 0;

        for ($i = 0; $i < strlen($sentence); $i++) { 
            if (in_array($sentence[$i], $vowels)) {
                $count++;
                $vowelFound[] = $sentence[$i];
            }
        }

        switch ($count) {
            case 0:
                $result = "'" . $sentence . "' : ne contient aucune voyelle.\n";
                break;

            case 1:
                $result = "'" . $sentence . "' : ne contient qu'une seule voyelle qui est : " . $vowelFound[0] . "\n";
                break;
            
            default:
                foreach ($vowelFound as $key => $value) {
                    if ($key != array_key_last($vowelFound)) {
                        $showVowel .=  $value . ", ";
                    } else {
                        $showVowel .=  $value;
                    }
                }
                $result = "'" . $sentence . "' : contient " . $count . " voyelles qui sont : " . $showVowel . "\n";
                break;
        }

        return $result;
    }

    echo vowelCount("Hmmm");
    echo vowelCount("Bro");
    echo vowelCount("Cyrus est un développeur Système");
    