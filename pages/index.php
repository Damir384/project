<? 
   if((isset($_SESSION['auth']['login'])) && (!empty($_SESSION['auth']['login']))){
    require $page.'.php';
   }else{
    require 'auth.php';
   }