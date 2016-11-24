<?php

class ReCaptchaValidation
 {


  // public function foo($field, $value, $parameters){
  // //return true if field value is foo
  // return $value == 'recaptcha';
  // }

  public function recaptcha($field, $value, $parameters){

  			$gRecaptchaResponse = $value;
            $recaptcha = new \ReCaptcha\ReCaptcha(config('app.recaptcha.secret'));
            $resp = $recaptcha->verify($gRecaptchaResponse, $_SERVER['REMOTE_ADDR']);
             if ($resp->isSuccess()) {
                        return $value;
                    } else {
                        $errors = $resp->getErrorCodes();
                        return false;
                    }
                    
  }

 }