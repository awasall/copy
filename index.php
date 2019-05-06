<!DOCTYPE html>
<html>
        <head>
        <Title>AUTHENTIFICATION</Title> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
         </head>
         <body>
         <div class="container">
         <header>
         <h1 class="text-center">AUTHENTIFICATION</h1>
         <header>
         <form  action='#' method='POST'>
         
  <div class="form-group">
  <input type="text"  name="login" class="form-control" id="login" placeholder="Enter votre login">
    </div>
  <div class="form-group">
 
    <input type="password"  name="password" class="form-control" id="password" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" name="connexion" class="btn btn-primary">Connexion</button>
  
  </div>
  </form>

<?php
               $fp =fopen('fichier.txt','r');
          
                if (isset ($_POST['connexion']))
                {
                  $login=$_POST['login'];
                  $password=$_POST['password'];
                    $lp=false;
                    while (!feof($fp)){
                      $ligne=fgets($fp);
                      $user=explode(",",$ligne);
                      
                      if($user[1]==$login &&  $user[2]==$password){
                        $lp=true;
                      
                     }
                    }

                    if($lp==true){
                      header("Location: acceuil.php");
                    }
                    else{
                      echo"login ou mot de pass incorrect";

                    }
  
                        }
                          fclose($fp);
                ?>
                
  
        
            
            
           </body>
   </html>         
