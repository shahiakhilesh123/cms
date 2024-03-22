<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\XmlToExcel;
use App\Models\VendorsModel;
use Mail;
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of BaseApiController
 *
 * @author apple
 */
class BaseApiController extends XmlToExcel {
    //put your code here
    public static function getCommission($vendor_id){
        $commission = VendorsModel::select('commission')->where('id', $vendor_id)->first();
        if(isset($commission->commission) && !empty($commission)){
            return  (intval($commission->commission) == 0) ? 1 : intval($commission->commission);
        }
        return 1;
    }
    public static function getVehiclePriceWithCommission($commission, $actual_price){
        $actual_price = floatval(str_replace(',', '', $actual_price)); 
        return ($actual_price + (
             $actual_price * ($commission / 100 )));
    }
    
    public static function addAdditionalData($vehicles, $additionalData){
        foreach ($vehicles as $index => $vehicle) {
            $vehicle['company_name'] = isset($additionalData['company_name']) ? $additionalData['company_name'] : (isset($vehicle['company_name']) ? $vehicle['company_name'] : '');
            $vehicle['api_url_code'] = isset($additionalData['api_url_code']) ? $additionalData['api_url_code'] : '';
            $vehicles[$index] = $vehicle;
        }
        return $vehicles;
    }
    
    public function sendEmail() {
        $info = array(
            'name' => "Cars4Hires.com"
        );
        Mail::send(['html' => 'testmail'], $info, function ($message) 
        {
            $message->to(env('SUPPROT_EMAIL'), 'Cars4Hires')
            ->subject("New Booking arrived");
            $message->from(env('MAIL_USERNAME'), 'Cars4Hires.com');
        });
    }
}
