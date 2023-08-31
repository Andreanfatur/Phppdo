<?php
//    class database{
//        private $host,$db,$user,$pdo,$password;
//         public function __construct($host,$user,$password,$db)
//         {
//             $this->host=$host;
//             $this->user=$user;
//             $this->password=$password;
//             $this->db=$db;
//         }
//         public function dump(){
//             var_dump($this->host);
//         }
        
    // };
    $host="localhost";
    $user="root";
    $password="";
    $db="products";


    
    $pdo =new PDO("mysql:host=$host;dbname=$db",$user,$password);
    
   var_dump(PDO::getAvailableDrivers());
?>