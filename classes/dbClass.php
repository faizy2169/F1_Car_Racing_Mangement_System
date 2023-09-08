

 <?php
        class dbClass
        {
          

          function __construct()
          {
          	   $this->conn=new mysqli("localhost", "root","","f1_racing")or die("connection error");
            

          }
        }
        $obj =new dbClass();
        
 ?>

