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
    function generateReceipt(){
        $receiptID = '';
        for($i = 0; $i<5; $i++){
            $receiptID .= rand(0,9);
        }
        return $receiptID;
    }
    
    function generateRandNum(){
        $randID = '';
        
            $randID = rand(1,3);
        
        return $randID;
    }
    function parkingTypeCost($parkType){
        if($parkType == "VIP"){
            return 20;
        }
        if($parkType == "Regular"){
            return 10;
        }


    }
    function genParkID(){
        $randID = '';
        for($i = 0; $i<5; $i++){
            $randID .= rand(0,9);
        }
        return $randID;
    }
    
    function pullCustPay($card_num){
        $lookforMast = "/^[51|552|53|54|55]/";
        $lookforVisa = "/^4/";
        $lookforAE = "/^[34|37]/";

        if(preg_match($lookforMast,$card_num)){
            return "MasterCard";
        }
        if(preg_match($lookforVisa, $card_num)){
            return "Visa";
        }
        if(preg_match($lookforAE, $card_name)){
            return "American Express";
        }
        return "random assortment of numbers";
    }
?>