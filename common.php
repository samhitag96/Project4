<?php

    function validPay($card_name, $card_num, $security_code, $exp_month, $exp_year){
        if(!confirmValidName($card_name)){
            return false;
        }
        if(!confirmValidNumber($card_num)){
            return false;
        }
        if(!confirmValidCode($security_code)){
            return false;
        }
        if(!confirmValidExp($exp_month, $exp_year)){
            return false;
        }
        return true;
    }

    function confirmValidName($card_name){
        if($card_name !=null){
            return true;
        }
    }
    function confirmValidNumber($card_num){
        $lookfor = "/^\d+$/";

        if(!(preg_match($lookfor, $card_num))){
            return false;
        }else{
            return true;
        }

    }
    function confirmValidCode($security_code){
        $lookfor = "/[^0-9]/";
        if(preg_match($lookfor, $security_code)){
            return false;
        }else{
            return true;
        }
    }
    function confirmValidExp($exp_month, $exp_year){
        if( ($exp_month < 12) && ($exp_year==2019) ){
            return false;
        }else{
            return true;
        }
    }
    


    
    function pullCustPay($card_num){
        $lookforMast = "/^5[1-5]/";
        $lookforVisa = "/^4/";
        $lookforAE = "/^3[4|7]/";

        if(preg_match($lookforMast,$card_num)){
            return "MasterCard";
        }else
        if(preg_match($lookforVisa, $card_num)){
            return "Visa";
        }else
        if(preg_match($lookforAE, $card_num)){
            return "American Express";
        }else{
        return "random assortment of numbers";
        }
    }
?>