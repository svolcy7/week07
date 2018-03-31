<?php  require 'db.php';

class User{



public function insert(){
    
$mode = $_GET["case_label"];
switch ($mode) {
  case 'insert':
    $date = date('Y-m-d',time());
    $sql = "insert into accounts (email, fname, lname,phone, birthday,
    gender,password) values ('volcsa@gmail.com','Blaise', 'Pascal','1458','$date','Male','Njit21');";
    $results = runQuery($sql);
    header("Location: index.php");
    break;
    
    
}}
  public function update(){
    $mode = $_GET["case_label"];
   switch ($mode) {
  case 'update':
    $fname = 'Blaise';
    $sql ="update accounts set password = '4321' where fname = '$fname' ";
    $results = runQuery($sql);
    header("Location: index.php");
    break;
    
    }
  }
  public function select(){
$mode = $_GET["case_label"];
switch ($mode) {
  case 'select':
    $sql = "select * from accounts";
    $results = runQuery($sql);
    header("Location: index.php");
    break;
    }
 }
    public function delete(){
      $mode = $_GET["case_label"];
     switch ($mode){
  case 'delete':
    $fname = 'Blaise';
    $sql ="delete from accounts where fname = '$fname' ";
    $results = runQuery($sql);
    header("Location: index.php");
    break;
    }
  }

    

}

$insertion = new User;
$updation = new User;
$deletion = new User;

 echo $insertion->insert();
echo $updation->delete();
echo $deletion->update();


 

    ?>