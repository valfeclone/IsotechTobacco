<?php

use Illuminate\Support\Facades\Auth;

if(!function_exists('to_rupiah')){
    function to_rupiah($price){
        $format_price = "Rp ". number_format($price, 0, ',','.');
        
        return $format_price;
    }
}

if(!function_exists('to_rupiah_norp')){
    function to_rupiah_norp($price){
        $format_price = number_format($price, 0, ',','.');
        
        return $format_price;
    }
}

if(!function_exists('to_number')){
    function to_number($price){
        $cleanString = preg_replace('/([^0-9\.,])/i', '', $price);
        $onlyNumbersString = preg_replace('/([^0-9])/i', '', $price);

        $separatorsCountToBeErased = strlen($cleanString) - strlen($onlyNumbersString) - 1;

        $stringWithCommaOrDot = preg_replace('/([,\.])/', '', $cleanString, $separatorsCountToBeErased);
        $removedThousandSeparator = preg_replace('/(\.|,)(?=[0-9]{3,}$)/', '',  $stringWithCommaOrDot);

        return (int) str_replace(',', '.', $removedThousandSeparator);
    }
}