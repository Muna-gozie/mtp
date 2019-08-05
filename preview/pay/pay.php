<script src="https://js.paystack.co/v1/inline.js"></script>
<div id="paystackEmbedContainer"></div>

<script>
  PaystackPop.setup({
   key: 'pk_test_221221122121',
   email: 'customer@email.com',
   amount: 10000,
   container: 'paystackEmbedContainer',
   callback: function(response){
        alert('successfully subscribed. transaction ref is ' + response.reference);
    },
  });
</script>