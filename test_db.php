<?php
require "db.php" ;



   class User {
      /* Member variables */
      var $mode = $_GET["case_label"];
       var $fname = "harris";
       var $date = date('Y-m-d',time());

     
      /* Member functions */
    
      function insert(){
      if ($mode == 'insert'){
        $sql = "insert into accounts (email, fname, lname,phone, birthday,gender,password) values ('smv30@njit.edu','harris', 'clark','12458899','$date','Male','1244');";
          $results = runQuery($sql);
           $this->results."<br/>";
       
      }
     
      
    }
      
    function delete(){
      if ($mode == 'delete'){
        $sql ="delete from accounts where fname = '$fname'";
      
    $results = runQuery($sql);
       $this->results."<br/>";
     
      }
    }
      
      function update(){
        if ($mode == 'update'){}
    $sql ="update accounts set password = '4321' where fname = '$fname' ";
    $results = runQuery($sql);
       $this->results ." <br/>";
        
      }
    }
   }



$insertion= new User;
$updation= new User;
$deletion= new User;

$insertion->insert();
$updation->delete();
$deletion->update();



?>