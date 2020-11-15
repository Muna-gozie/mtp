<?php
require_once '../autoload.php';
// require_once '../classes/Ravepay.php';


if(isset($_POST['txref'])){    
    $transac_ref = htmlentities($_POST['txref']);

}else{
    $error = [
        'status' => 'error',
        'message' => 'Invalid amount'
    ];

    print_r(json_encode($error));
}


// // get values
// $transac_ref = rand(00000,99999);

if(isset($_POST['amount'])){    
    $amount = htmlentities($_POST['amount']);

}else{
    $error = [
        'status' => 'error',
        'message' => 'Invalid amount'
    ];

    print_r(json_encode($error));
}

// if(isset($_POST['email'])){    
//     $email = htmlentities($_POST['email']);
// }else{
//     $error = [
//         'status' => 'error',
//         'message' => 'Invalid email address'
//     ];
//     print_r(json_encode($error));
// }

// if(isset($_POST['name'])){    
//     $name = htmlentities($_POST['name']);
// }else{
//     $error = [
//         'status' => 'error',
//         'message' => 'Invalid name'
//     ];
//     print_r(json_encode($error));
// }

// if(isset($_POST['mobile_no'])){    
//     $mobile_no = htmlentities($_POST['mobile_no']);
// }else{
//     $error = [
//         'status' => 'error',
//         'message' => 'Invalid mobile number'
//     ];
//     print_r(json_encode($error));
// }

// // Api parameters
// $pay_params = [
//     'tx_ref' => $transac_ref,
//     'amount' => $amount,
//     'currency' => 'NGN',
//     'payment_options' => 'card',
//     'customer' => [
//         'email' => $email,
//         'phonenumber' => $mobile_no,
//         'name' => $name
//     ]
// ];

// $params_encoded = json_encode($pay_params);


// call Ravepay Api
try{
    $ravepay = new Ravepay();
    $data = $ravepay->verify_payment($transac_ref);

    // check response 
    $response = json_decode($data);
    // print_r($response);

    if($response->data->status == 'successful' && $response->data->chargecode == '00'){
        // check 
        if($response->data->chargedamount == $amount){
            echo 'Proceed to give value';
        }else{
            // return error
            $error = [
                'status' => 'error',
                'message' => 'Wrong premium amount paid'
            ];
            print_r(json_encode($error));
        }
    }


}catch(Exception $e){
    $error_msg = $e->getMessage();

    print_r($error_msg);
}

