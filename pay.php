
<?php
session_start();
$amt=$_GET["amt"];
$amt=$amt*100;
$uid=$_SESSION["semail"];
$name=$_SESSION["sname"];
$cno=$_SESSION["sphone"];
echo"
<input type='hidden' value='$amt' id='amt'>
<input type='hidden' value='$uid' id='uid'>
<input type='hidden' value='$name' id='name'>
<input type='hidden' value='$cno' id='cno'>
";
 ?>

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var amt1=document.getElementById("amt").value;
var uid1=document.getElementById("uid").value;
var name1=document.getElementById("name").value;
var cno1=document.getElementById("cno").value;
var options = {
    "key": "rzp_live_nXFMiyw5gGT54F",
    "amount": amt1,
    "currency": "INR",
    "name": "LawHub",
    "description": "Buy Course",
    "image": "http://lawhub.org.in/favicon.jpg",
    //"order_id": "order_9A33XWu170gUtm",
    "handler": function (response){
        alert(response.razorpay_payment_id);
        alert(response.razorpay_order_id);
        alert(response.razorpay_signature)
    },
    "prefill": {
        "name": name1,
        "email": uid1,
        "contact": cno1
    },
    "notes": {
        "address": "LawHub Office"
    },
    "theme": {
        "color": "#3399cc"
    }
};
var rzp1 = new Razorpay(options);
rzp1.on('payment.failed', function (response){
        alert(response.error.code);
        alert(response.error.description);
        alert(response.error.source);
        alert(response.error.step);
        alert(response.error.reason);
        alert(response.error.metadata.order_id);
        alert(response.error.metadata.payment_id);
});
    rzp1.open();
    e.preventDefault();
</script>