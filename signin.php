<?php session_start(); ?>
<?php require ("db.php");
      require_once("function.php"); ?>
<?php include ("header.php"); ?>

<?php 

if (isset($_POST["name"]) 
&& isset($_POST["password"])) 
{
  $name  = htmlspecialchars($_POST["name"]);
  $password= htmlspecialchars($_POST["password"]);
  $ville= htmlspecialchars($_POST["ville"]);
  $pays= htmlspecialchars($_POST["pays"]);
  $email= htmlspecialchars($_POST["email"]);



   $request = $db->prepare("SELECT id FROM users WHERE name LIKE :name"); 
     $request->execute(
      array(
        "name" => $name,
    
      ));

   $users = $request->fetchAll(); 

  if (sizeof($users) == 0)
  {
    $request = $db->prepare("INSERT INTO users (name, password, ville, pays, email) VALUES (:name, :password, :ville, :pays, :email)"); 
    $request->execute(
      array(
        "name" => $name,
        "password" => $password,
        "ville" => $ville,
        "pays" => $pays,
        "email" => $email,
    ));
  
  }else {
   echo "Error : This member already exists";
  }

}
?>



  <div class="col-md-6">
  <div class="panel panel-primary">
    <div class="panel-heading">S'inscrire</div>
    <div class="panel-body">
      <form method="post" action="signin.php" class="form-horizontal" role="form">
          
              <div class="form-group">
                    <label class="control-label col-sm-2" for="name">Name</label>
                  <div class="col-sm-10">
                      <input type="text" name="name" id="name" class="form-control" placeholder="Pseudo"/> 
                  </div>
              </div>
            

               <div class="form-group">
                    <label class="control-label col-sm-2" for="password">Mot de Passe</label>
                  <div class="col-sm-10">
                      <input type="password" name="password" class="form-control" id="password" placeholder="Password"/> 
                  </div>
                </div>

               <div class="form-group">
                    <label class="control-label col-sm-2" for="pays">Pays</label>
                  <div class="col-sm-10">
                      <input type="text" name="pays" id="pays" class="form-control" placeholder="Pays"/> 
                  </div>
                </div> 
                <div class="form-group">
                    <label class="control-label col-sm-2" for="ville">Ville</label>
                  <div class="col-sm-10">
                      <input type="text" name="ville" id="ville" class="form-control" placeholder="Ville"/> 
                  </div>
              </div>   
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">E-mail</label>
                  <div class="col-sm-10">
                      <input type="text" name="email" id="email" class="form-control" placeholder="E-mail"/> 
                  </div>
              </div>          
            
            

            <div class="form-group">
                  <div class="col-xs-offset-2 col-xs-10">
                      <button type="submit" class="btn btn-primary">Sign in</button>
                  </div>
              </div>
       </div>
      </div>
    </div>
  </div>

   
</form>

<?php include ("footer.php"); ?>