public function convertRate($amount,$userPreferredCurrency,$productCurrency,$baseCurrency){
        if($userPreferredCurrency->code == $productCurrency->code){
            return  $amount;
        }else{
            if($userPreferredCurrency->currency_rate == 1){
               $currencyRate = $userPreferredCurrency->currency_rate / $productCurrency->currency_rate; 
               $finalRate = ($amount * $currencyRate);
               return number_format((float)$finalRate, 2, '.', '');
            }else{
                $userRate = $baseCurrency->currency_rate / $userPreferredCurrency->currency_rate;
                $productRate = $baseCurrency->currency_rate / $productCurrency->currency_rate;
                $convertedRate =   $rateListCurrency /  $rateUserPreferred;
                $finalRate = ($amount * $convertedRate);
                return  number_format((float)$finalRate, 2, '.', '');
            }
        }
    }
