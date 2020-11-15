// onclick pay with debit card button
var debitCardBtn = document.getElementById('debit-card-btn');

debitCardBtn.addEventListener('click',()=>{
    alert('You clicked me');
    // get form data
    let amount = '1000';
    let email = 'someone@domain.com';
    let name = 'Tester';
    let mobileNumber = '09093889382';
    let product = 'THIRD PARTY';


    // ravepay
    // $.ajax({
    //     url : '../helpers/pay-debit-card.php',
    //     type : 'POST',
    //     data : {
    //         'amount' : amount,
    //         'email' : email,
    //         'name' : name,
    //         'mobile_no' : mobileNumber
    //     },
    //     success : (data)=>{
    //         console.log(data);
    //     }
    // });
    
    /**
 * This function initiaties payment from customer's debit card
 */

    
    const API_publicKey = "FLWPUBK-07743ba9e44bf8ccadb21b4b72449146-X";

    var x = getpaidSetup({
        PBFPubKey: API_publicKey,
        customer_email: email,
        amount: amount,
        customer_phone: mobileNumber,
        currency: "NGN",
        txref: "MTP" + Date.now(),
        meta: [{
            metaname: "Product",
            metavalue: product
        }],
        onclose: function() {},
        callback: function(response) {
            var txref = response.tx.txRef;   // collect txRef returned and pass to a server page to complete status check.
            // console.log(response);

               $.ajax({
                    url : '../helpers/pay-debit-card.php',
                    type : 'POST',
                    data : {
                        'txref' : txref,
                        'amount' : amount
                        
                    },
                    success : (data)=>{
                        console.log(data);
                    }
                });

            // console.log("This is the response returned after a charge", response);
            // if (
            //     response.data.respcode == "00" ||
            //     response.data.respcode == "0"
            // ) {
            //     // return txref;
            //     resolve(txref);
                                
            
            // } else {
            //     // redirect to a failure page.
            //     reject(response);
            // }

            x.close(); // use this to close the modal immediately after payment.
        }
    });

});