<?php

namespace Adly\EasyParcel\Services;

use Exception;

class OrderPayment
{
    public function orderPayment($arr)
    {
        try {

            $domain = config('easyparcel.easyparcel_url');

            $action = "EPPayOrderBulk";
            $postparam = array(
                'api'   => config('easyparcel.easyparcel_api_key'),
                'bulk'  => $arr
            );

            $url = $domain . $action;
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postparam));
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

            ob_start();
            $return = curl_exec($ch);
            ob_end_clean();
            curl_close($ch);

            $json = json_decode($return);

            return $json;
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
