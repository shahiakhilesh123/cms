<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Http\Controllers\Api;
use Illuminate\Http\Request;
/**
 * Description of YesAwayApiController
 *
 * @author apple
 */
class EasygoApiController extends BaseApiController {

    private static $baseUrl = "http://easygoxml.com";
    private static $keyHack = "DVd5.GtfE4yW";
    private static $requestTimeout = 60;

    private static $apiUsername = "EasyGoCarCar4HiRes";
    private static $apiPassword = "n885esuy5kttg69";
    private static $apiDefaultCurrency = "USD";
    
    
    
    /*
     * like
     * http://easygoxml.com/XML_Locations.Asp?Key_Hack=DVd5.GtfE4yW
     */
    public static function getAllLocations()
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
          //CURLOPT_URL => "http://easygoxml.com/XML_Locations.Asp?Key_Hack=DVd5.GtfE4yW",
          CURLOPT_URL => self::$baseUrl."/XML_Locations.Asp?Key_Hack=".self::$keyHack,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => self::$requestTimeout,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "cache-control: no-cache",
          ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
          echo "cURL Error #:" . $err;
        } else if ($response) {
            self::convertXMLResponseToExcel($response);
        } else {
          echo "Unknown Error";  
        }
    }
    

    /**
     * like
     * http://easygoxml.com/xml_Rez.asp?Key_Hack=DVd5.GtfE4yW&Drop_Off_ID=33&Pickup_ID=33&Pickup_Day=01&Pickup_Month=04&Pickup_Year=2023&Drop_Off_Day=07&Drop_Off_Month=04&Drop_Off_Year=2023&Pickup_Hour=23&Pickup_Min=00&Drop_Off_Hour=23&Drop_Off_Min=00&User_Name=EasyGoCarCar4HiRes&User_Pass=n885esuy5kttg69&Currency=TL
     */
    public static function searchVehiclesForLocation($input)
    {
        //$input = $request->input();
        $dropOffLocationId = isset($input['dropoff_location_id']) ? $input['dropoff_location_id'] : '';
        $pickUpLocationId = isset($input['pickup_location_id']) ? $input['pickup_location_id'] : '';
        $pickUpDay = isset($input['pickup_day']) ? $input['pickup_day'] : '';
        $pickUpMonth = isset($input['pickup_month']) ? $input['pickup_month'] : '';
        $pickUpYear = isset($input['pickup_year']) ? $input['pickup_year'] : '';
        $dropOffDay = isset($input['dropoff_day']) ? $input['dropoff_day'] : '';
        $dropOffMonth = isset($input['dropoff_month']) ? $input['dropoff_month'] : '';
        $dropOffYear = isset($input['dropoff_year']) ? $input['dropoff_year'] : '';
        $pickUpHour = isset($input['pickup_hour']) ? $input['pickup_hour'] : '';
        $pickUpMin = isset($input['pickup_min']) ? $input['pickup_min'] : '';
        $dropOffHour = isset($input['dropoff_hour']) ? $input['dropoff_hour'] : '';
        $dropOffMin = isset($input['dropoff_min']) ? $input['dropoff_min'] : '';
        $currency = isset($input['currency']) ? $input['currency'] : self::$apiDefaultCurrency;

        $curl = curl_init();
        curl_setopt_array($curl, array(
         //CURLOPT_URL => "http://easygoxml.com/xml_Rez.asp?Key_Hack=DVd5.GtfE4yW&Drop_Off_ID=33&Pickup_ID=33&Pickup_Day=01&Pickup_Month=04&Pickup_Year=2023&Drop_Off_Day=07&Drop_Off_Month=04&Drop_Off_Year=2023&Pickup_Hour=23&Pickup_Min=00&Drop_Off_Hour=23&Drop_Off_Min=00&User_Name=EasyGoCarCar4HiRes&User_Pass=n885esuy5kttg69&Currency=TL",
          CURLOPT_URL => self::$baseUrl."/xml_Rez.asp?Key_Hack=".self::$keyHack."&Drop_Off_ID=".$dropOffLocationId."&Pickup_ID=".$pickUpLocationId."&Pickup_Day=".$pickUpDay."&Pickup_Month=".$pickUpMonth."&Pickup_Year=".$pickUpYear."&Drop_Off_Day=".$dropOffDay."&Drop_Off_Month=".$dropOffMonth."&Drop_Off_Year=".$dropOffYear."&Pickup_Hour=".$pickUpHour."&Pickup_Min=".$pickUpMin."&Drop_Off_Hour=".$dropOffHour."&Drop_Off_Min=".$dropOffMin."&User_Name=".self::$apiUsername."&User_Pass=".self::$apiPassword."&Currency=".$currency,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => self::$requestTimeout,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "cache-control: no-cache",
          ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
          echo "cURL Error #:" . $err;
        } else if ($response) {
            $data = self::convertXMLResponseToArray($response);
            return self::formatData($data,$input);
        } else {
            return response()->json(['message' => "Unknown Error", 'status' => 0], 200);
        }
    }
    
    private static function formatData($data,$input) {
        if(isset($data['Car']) && is_array($data['Car']) && !empty($data['Car'])) {            
            $currencyModel = self::getCurrency($input);
            $responseData['vehicles'] = [];
            $commission = \App\Http\Controllers\Api\BaseApiController::getCommission($input['vendor_id']);
            foreach($data['Car'] as $object) {
                $object['vehicle_name'] = (isset($object['Car_Name']) && !empty($object['Car_Name'])) ? $object['Car_Name'] : '';
                $object['vehicle_image'] = (isset($object['Image_Path']) && !empty($object['Image_Path'])) ? $object['Image_Path'] : '';
                $object['vehicle_actual_price'] = (isset($object['Daily_Rental']) && !empty($object['Daily_Rental'])) ? $object['Daily_Rental'] : '';
                $object['vehicle_price'] = \App\Http\Controllers\Api\BaseApiController::getVehiclePriceWithCommission($commission, $object['vehicle_actual_price']);
                $object['vehicle_price_currency'] = (isset($input['currency']) && !empty($input['currency'])) ? $input['currency'] : self::$apiDefaultCurrency;
                $object['vendor_id'] = $input['vendor_id'];
                if(isset($currencyModel) && !empty($currencyModel)) {
                    $object['vehicle_price_symbol'] = isset($currencyModel->symbol) ? $currencyModel->symbol : NULL;
                    $object['vehicle_price_currency_name'] = isset($currencyModel->currency_name) ? $currencyModel->currency_name : NULL;
                }
                $responseData['vehicles'][] = $object;
            }
            return $responseData;
        }
    }
    
    private static function getCurrency($input) {
        $vehicle_price_currency = isset($input['currency']) ? $input['currency'] : self::$apiDefaultCurrency;
        $countryModel = \App\Models\CountryModel::select('symbol','currency_name')->where('currency',$vehicle_price_currency)->first();
        if(isset($countryModel) && !empty($countryModel)) {
            return $countryModel;
        }
        return [];
    }
}
