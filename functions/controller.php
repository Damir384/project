<? 
   require 'model.php';
   if(isset($_GET['page'])&&(!empty($_GET['page']))){
    $page=$_GET['page'];
   }else{
      if($_SESSION['auth']['login']){
         $page='main';
      }else{
         $page = 'auth';
      }
      
   }

   if(isset($_POST['entry'])){      //Обработчик кнопки
      auth( $conn);
      header("Location: ./");
      exit;
   }


   switch($page){
    case 'main':

    break;
   }
   require($_SERVER["DOCUMENT_ROOT"].'/pages/index.php');