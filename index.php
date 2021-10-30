<?php
include("connection.php");
?>


<html>
    <head>
        <title> VTS | Interest Form </title>
        <meta charset="UTF-8">
        <style>
            body{
                background-color: #f2f6ff;
                margin: 0;
                padding:16px;
            }
            .social-icon{
                width:10px;
                height:20px;
                padding-top: 10px;
                padding-bottom: 10px;
                padding-left: 24px;
                padding-right: 24px;
            }
            
            form{
                background-color: blueviolet;
                width: 700px;
                margin-left: auto;
                margin-right: auto;
                text-align: center;
                border: 1px solid white
            }
            #form-heading{
                font-size: 32px;
                padding-top: 34px;
                padding-bottom: 24px;  
            }
            #social-wrapper{
                 background-color: gray ;
                 padding: 14px;  
                 text-align: center;
            }
           #input-wrapper{
                padding-top: 80px;
                padding-bottom: 40px;
                padding-left: 80px;
                padding-right: 80px;
            } 
            .input-box{
                font-size: 18px;
                padding-bottom: 12px;
                margin-bottom: 36px;
                border: 0;
                border-bottom: 1px solid black ;
                width:100%;
            }
            #btn-submit{
                background-color: greenyellow;
                padding-top: 24px;
                padding-bottom: 24px;
                padding-left: 34px;
                padding-right: 34px;
                color: white;
                border:none;
            } 
        </style>
    </head>
    <body>
        <form action = "#" method = "POST">
            <h1 id="form-heading">Interest Form</h1>
            <p> <h2> For Virtually Testing Foundation Company </h2></p>
        
        <div id="social-wrapper">
            <img class="Social-icon" src="https://media-exp1.licdn.com/dms/image/C560BAQEHL1ckncGRgw/company-logo_200_200/0/1590873280490?e=2159024400&v=beta&t=-QOvxiHQoFLPwk-1CIM7790h8fjDYxuij4v5W_T-7ms" alt="Company logo"/>
        </div>
            <div id="input-wrapper">
                <div>
                    <input class="input-box"
                           type="text"
                           name="fullname"
                           placeholder="Name">
                </div>
                <div>
                    <input class="input-box"
                           type="email"
                           name="email"
                           placeholder="Email">
                </div>
                <div>
                    <input class="input-box"
                           type="Contact Number"
                           name="contact_number"
                           placeholder="Phone Number">
                </div>
                <div>
                    <input class="input-box"
                           type="WhatsApp Number"
                           name="whno"
                           placeholder="Wp Number">
                </div>
                  <div>
                    <input class="input-box"
                           type="Address"
                           name="address"
                           placeholder="Address">
                </div>
                   <div>
                    <input class="input-box"
                           type="City"
                           name="city"
                           placeholder="City">
                </div>
                  <div>
                    <input class="input-box"
                           type="State"
                           name="state"
                           placeholder="State">
                </div>
                
                <div>
                    <input class="input-box"
                           type="Country"
                           name="country"
                           placeholder="Country">
                </div>
                
                <input id="btn-submit" type="submit" name = "submit" value="Submit">
            </div>  
            <script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
        </form>
        <?php
        if(isset($_POST['submit'])){
        $name = $_POST['fullname'];
        $email = $_POST['email'];
        $cont = $_POST['contact_number'];
        $wh = $_POST['whno'];
        $addr = $_POST['address'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $country = $_POST['country'];
        
        $query = "INSERT INTO details(fullname, email, contact_number, whno, address, city, state, country) VALUES('$name','$email', '$cont', '$wh', '$addr', '$city', '$state', '$country')";
        $res = mysqli_query($conn, $query);
        if(!$res){
            echo "Try once again";
        }
        else{
            echo "1 row inserted!";
        }
        unset($name, $email, $cont, $wh, $addr, $city, $state, $country);
         }
        
        ?>
    </body>
</html>
