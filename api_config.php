<?php
// CHI API Urls and key

Class Api{
    
    function getKey(){
        // Allow self signed ssl certificate
        $api_params = array(
        'cache_wsdl' => 0,
        'trace' => 1,
        'stream_context' => stream_context_create(array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        )));

        //  $live_url = 'https://onboarding.chiplc.com:4443/chisoapapi/mtpapp.asmx?wsdl';
        // $test_url = 'http://test.chiplc.com/chisoapapi/mtpapp.asmx?wsdl';
        // // 'url' => 'http://52.213.72.87/chisoapapi/mtpapp.asmx?wsdl'
        // $live_key = 'x76o-XInterAP-MTP1920';
        // $test_key = 'x76o-XInterAP';

        // Api key and url for policy renewal
        return [
            // 'url' => $test_url,
            // 'key' => $test_key,
            'url' => 'http://test.chiplc.com/chisoapapi/mtpapp.asmx?wsdl',
            'key' => 'x76o-XInterAP',
            'api_params' => [
                'cache_wsdl' => 0,
                'trace' => 1,
            ]
        ];
    }
}






