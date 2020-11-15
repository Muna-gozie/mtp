<?php
// namespace classes;

class Ravepay{
    private $curl;
    private $cert_path;

    // const BASE_URL = 'http://test.chiplc.com/CoreRest/';
    const LIVE_URL = 'https://api.flutterwave.com/v3';
    const TEST_URL = 'https://ravesandboxapi.com/v3';

    const BASE_URL = 'https://api.flutterwave.com/v3';

    // const SEC_KEY = 'FLWSECK-f516a32dbfa12c361881dec37a751e3d-X';
    const SEC_KEY = 'FLWSECK-f516a32dbfa12c361881dec37a751e3d-X';
    private $url = "https://ravesandboxapi.flutterwave.com/flwv3-pug/getpaidx/api/v2/verify";


    const REQUEST_HEADERS =[
        // "X-CallerID: CHIMOBILE0001",
        // "X-CallerName: CHIMobile",
        // "X-CallerPassword: CHIMOBILE@24912",
        // "X-CallerReference: 7598554555788812",
        // "X-CUST-SESSIONID: 0af3bd68-e557-49a5-9438-ddbd609bec6e",
        // "Content-Type: application/x-www-form-urlencoded",
        "Authorization: Bearer FLWSECK-f516a32dbfa12c361881dec37a751e3d-X"
    ];

 
    public function __construct(){
        $this->curl = curl_init();
        
        //! Do not include in production: Change to server cert path
        $this->cert_path = "C:\Users\CChukwuma.CHIPLC\local_ssl_cert\cacert.pem"; 
    }

    

    // Make API calls with data input as json
    public function pay(array $data){
        $resource_endpoint = '/payments';        
        $url = self::BASE_URL.$resource_endpoint;

        $curl_options = [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_HTTPHEADER => self::REQUEST_HEADERS,
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => json_encode($data)
                    
        ];
        curl_setopt_array($this->curl,$curl_options);
        $response = curl_exec($this->curl);

        if(curl_error($this->curl)){
            $error = curl_error($this->curl);

            // throw new \Exception('There was an error processing your request ');
            throw new Exception($error);
        }

        return $response;
    }

    public function verify_payment($txRef){
        $postdata =  array( 
            'txref' => $txRef,
            'SECKEY' => self::SEC_KEY
        );

        $curl = \curl_init();

        \curl_setopt_array($curl, array(
            CURLOPT_URL => $this->url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => json_encode($postdata),
            // CURLOPT_CAINFO => $this->cert_path,
            // CURLOPT_CAPATH => $this->cert_path,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/json",
            ),
        ));

        $response = \curl_exec($curl);

        if(\curl_error($curl)){
            return \json_encode(
                [
                'status' => 'error',
                'message' => \curl_error($curl)
                ]
            ); 
        }

        \curl_close($curl);

        // print_r(json_decode($response));
        // print_r($response);
        return $response;
    }

}