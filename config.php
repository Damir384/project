<? 
   session_start();
   define("PATH","http://ardver");
   define("CSS_PATH",PATH."/pages/css");
   define("HOST","localhost");
   define("USER","root");
   define("PASS","");
   define("DB","DB");
$conn= new mysqli(HOST,USER,PASS,DB);
if($conn->errno){
   echo "Ошибка при подключении к БД".$conn->error;
}


















































/*if($conn->errno){
      echo "Ошибка при подключении к БД".$conn->error;
   }*/