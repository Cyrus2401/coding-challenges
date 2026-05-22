<?php

    /**
     * Sorts the digits of a number in descending order and displays them separated by " - ".
     *
     * @param  int  $number  The integer whose digits will be sorted.
     * @return void          Outputs the sorted digits as a string.
     */
    function descendingOrder(int $number): void
    {
        $array_number = str_split($number);
        rsort($array_number);
        $descendingOrderNumber = "";

        foreach ($array_number as $key => $value) {
            $descendingOrderNumber .= ($key == 0 ? $value : " - " . $value);
        }

        echo $descendingOrderNumber . "\n";
    }

    descendingOrder(5012689347);
