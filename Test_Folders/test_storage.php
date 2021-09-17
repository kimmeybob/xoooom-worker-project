<html>
<body>
    
<p style="font-size: 100px;" id="result">SAMPLE</p>
<p style="font-size: 100px;" id="result1">SAMPLE</p>
<p style="font-size: 100px;" id="result2">SAMPLE</p>

</body>
<script>
 
    window.onload = function () { document.getElementById("result").innerHTML = localStorage.getItem("date_serviced") }
    display();
    function display(){
        document.getElementById("result").innerHTML = localStorage.getItem("workers");
        document.getElementById("result1").innerHTML = localStorage.getItem("products_wax_quantity");
        document.getElementById("result2").innerHTML = localStorage.getItem("products_promo");
    }
   
</script>
</html>