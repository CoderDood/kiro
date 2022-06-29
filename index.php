
<?php
SESSION_START();
if (session['loggedin'] == false){
  header('Location: //login.php')}
else {
  header('Location: //home.php')
    
    
