<?php 
session_start(); 

require ("db.php");
require_once("function.php");


if (isset($_POST["name"]) && 
    isset($_POST["password"]))
{
  $name  = htmlspecialchars($_POST["name"]);
  $password= htmlspecialchars($_POST["password"]);

    $request = $db->prepare("SELECT id FROM users WHERE name LIKE :name AND password LIKE :password"); 
     $request->execute(
      array(
        "name" => $name,
        "password" => $password
      ));

   $users = $request->fetchAll(); 

  if (sizeof($users) > 0){
    $id_users = $users[0]["id"];
    $_SESSION["id_users"] = $id_users;
    header("Location:index.php");

  } else {
  echo "Error : Your password/pseudo is incorrect";
  }
}

 
include ("header.php"); 

?>

  <div class="col-md-6">
  <div class="panel panel-primary">
  <div class="panel-heading">Login</div>
  <hr>

  <div class="panel-body">
            <form method="post" action="login.php" class="form-horizontal" role="form">

                      <div class="form-group">
                    <label class="control-label col-sm-2" for="name">Name</label>
                  <div class="col-sm-10">
                      <input type="text" name="name" id="name" class="form-control" placeholder="Pseudo"/> 
                  </div>
              </div>
            

               <div class="form-group">
                    <label class="control-label col-sm-2" for="password">Password</label>
                  <div class="col-sm-10">
                      <input type="password" name="password" class="form-control" id="password" placeholder="Password"/> 
                  </div>
                </div>
            
            

            <div class="form-group">
                  <div class="col-xs-offset-2 col-xs-10">
                      <button type="submit" class="btn btn-primary">Login</button>
                  </div>
              </div>
            </form>
</div>
</div>
</div>
    




<?php include ("footer.php"); ?>