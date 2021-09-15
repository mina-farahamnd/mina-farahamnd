<?php


namespace App\Helper;



use App\Helper\Sms;

class Helper
{
    /**
     * create verification code for register user
     * @return int
     * @throws \Exception
     */
    static function generate_verification_code(){
        return random_int(100000,999999);
    }

    static function sendSms($number, $verify_key)
    {
        try {
            date_default_timezone_set("Asia/Tehran");
            // your   panel configuration
            $APIKey = 'b37c10284cda7476bbfe1028';
            $SecretKey = ']>*2Q"*.+Y8}q]hf';
            $data = array(
                'ParameterArray' => array(
                    array(
                        'Parameter' => 'key',
                        'ParameterValue' => $verify_key
                    )
                ),
                'Mobile' => $number,
                'TemplateId' => 50143
            );
            $SmsIR_UltraFastSend = new Sms($APIKey, $SecretKey);
            $Result = $SmsIR_UltraFastSend->UltraFastSend($data);
            $status = $Result['VerificationCodeId'];
            if ($status != -1) {
                return true;
            } else {
                return false;
            }
        } catch (Exeption $e) {
            return false;
        }
    }

}