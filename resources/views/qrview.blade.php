<!-- View stored in resources/views/greeting.blade.php -->

<html>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js" integrity="sha512-CNgIRecGo7nphbeZ04Sc13ka07paqdeTu0WR1IM4kNcpmBAUSHSQX0FslNhTDadL4O5SAGapGt4FodqL8My0mA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <body>
       <div id="qrcode"></div>
       <script>
        console.log("https://8090-113-11-180-8.ngrok-free.app/test?token={{$name}}");
        new QRCode(document.getElementById("qrcode"), "https://8090-113-11-180-8.ngrok-free.app/test?token={{$name}}");
       </script>
    </body>
</html>
