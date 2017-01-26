    <?php 
       $host = "localhost";
       $dbname = "mydb";
       $user = "root";
       $password = "root";

       try {
        $db = new PDO('mysql:host='. $host. ';dbname=' .$dbname. ';charset=utf8', $user, $password);
       }

       catch (Exception $e) {
        die('Erreur : '. $e->getMessage());
       }?>