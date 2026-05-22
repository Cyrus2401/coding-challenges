<?php

    /**
     * Formats an array of 10 digits into an international phone number. Format: (XXX) XXX-XXXX
     *
     * @param  int[]  $digits  Array of exactly 10 digits (0–9).
     * @return void            Outputs the formatted phone number.
     *
     */
    function formatPhoneNumber(array $digits): void
    {
        $phoneNumber = "";
        $str = "";
        for ($i = 0; $i < 3; $i++) {
            $str .= $digits[$i];
        }

        $phoneNumber = "(" . $str . ") ";
        $str = "";
        for ($i = 3; $i < 6; $i++) {
            $str .= $digits[$i];
        }

        $phoneNumber .= $str . "-";
        $str = "";
        for ($i = 6; $i < count($digits); $i++) {
            $str .= $digits[$i];
        }

        $phoneNumber .= $str;
        echo "Phone Number : " . $phoneNumber . "\n";
    }

    $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];
    formatPhoneNumber($array);
