<?php
    require_once 'vendor/autoload.php';
    
 
    use App\Models\UserModel;

    $databaseConfiguration = new App\Core\DatabaseConfiguration('localhost','root','','aukcije');
    $databaseConnection = new App\Core\DatabaseConnection($databaseConfiguration);

    $constroller = new \App\Controllers\MainController($databaseConnection);
    $data = $constroller->home();
   
    foreach($data as $name => $value){
        $$name = $value;
    }

    require_once 'views/Main/home.php';