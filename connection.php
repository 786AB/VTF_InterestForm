  <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "user_registration";
        
        
      $conn = mysqli_connect($servername,$username,$password,$dbname);
        
        if(!$conn)
        {
            echo "Connection failed because of ".mysqli_connect_error();
        }
        else
        {
            echo "Great!";
        }
 ?>
