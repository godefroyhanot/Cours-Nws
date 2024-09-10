<?php
function login($username, $password, $loginConfig){
    // dd($loginConfig);
    foreach ($loginConfig as $account) {
        if($username === $account["username"]){
            if($password === $account["password"]){
                return true;
            }
        }
    }
    return false;
}

if(isset($_POST) && count($_POST) && isset($_POST["username"]) && isset($_POST["password"])){
  $_SESSION["isLogged"] = login($_POST["username"], $_POST["password"], $loginConfig);
} 
if(! $_SESSION["isLogged"]) { 
?>
    <form action="#" method="post" >

    <div>
        <label for="username">Nom d'utilisateur</label>
        <input type="text" name="username" required>
    </div>
    <div>
        <label for="password"> Mot de passe </label>
        <input type="password" name="password" required>
    </div>

    <div>
        <input type="submit" value="Se connecter">
    </div>
    </form>
<?php
}
?>
