<? 
function auth($conn){

    $login = $_POST['login'];
    $pass = $_POST['pass'];

    $result = $conn->query("SELECT * FROM user WHERE login = '$login' AND password = '$pass'");
    
    
    if($result->num_rows > 0){
        
        while($row=$result->fetch_assoc()){
            $user = $row;
        }
        $_SESSION['auth']['id_user'] = $user['id_user'];
        $_SESSION['auth']['login'] = $user['login'];
        $_SESSION['auth']['name'] = $user['name'];
    }else{
        $_SESSION['auth']['answer'] = "Error";
    }

}
?>