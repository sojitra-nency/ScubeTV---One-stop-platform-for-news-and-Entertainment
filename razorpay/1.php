
<button id="rzp-button1"><strong>Click Here To Pay!!!</strong></button>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var txt = "3";
var options = {
    "key": "rzp_test_ACclvpMUj9txXU", 
    "amount": "50000",
    "currency": "INR",
    "name": "S3TV",
    "description": "PAYMENT FOR PREMIUM PACKAGES",
    "image": "../images/pay.jpg",
    "handler": function (response){
    console.log(response);
     }
};
var rzp1 = new Razorpay(options);
document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}

</script>
