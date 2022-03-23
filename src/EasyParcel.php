<?php

namespace Adly\EasyParcel;

use Adly\EasyParcel\Services\CreditBalance;
use Adly\EasyParcel\Services\DomesticOrder;
use Adly\EasyParcel\Services\MakingOrder;
use Adly\EasyParcel\Services\OrderPayment;
use Adly\EasyParcel\Services\OrderStatus;
use Adly\EasyParcel\Services\ParcelStatus;
use Adly\EasyParcel\Services\PriceCheck;
use Adly\EasyParcel\Services\TrackingParcel;

class EasyParcel
{
    public static function priceCheck($arr, $exclude = null)
    {
        $easyParcel = new PriceCheck;

        return $easyParcel->priceCheck($arr, $exclude);
    }

    public static function makingOrder($arr)
    {
        $easyParcel = new MakingOrder;

        return $easyParcel->makingOrder($arr);
    }

    public static function orderPayment($arr)
    {
        $easyParcel = new OrderPayment;

        return $easyParcel->orderPayment($arr);
    }

    public static function orderStatus($arr)
    {
        $easyParcel = new OrderStatus;

        return $easyParcel->orderStatus($arr);
    }

    public static function parcelStatus($arr)
    {
        $easyParcel = new ParcelStatus;

        return $easyParcel->parcelStatus($arr);
    }

    public static function trackingParcel($arr)
    {
        $easyParcel = new TrackingParcel($arr);

        return $easyParcel->trackingParcel($arr);
    }

    public static function creditBalance()
    {
        $easyParcel = new CreditBalance;

        return $easyParcel->creditBalance();
    }

    public static function domesticOrder($arr, $courier, $dropoff = 0)
    {
        $easyParcel = new DomesticOrder;

        return $easyParcel->domesticOrder($arr, $courier, $dropoff);
    }
}
