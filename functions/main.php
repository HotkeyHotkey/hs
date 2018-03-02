<?php
  $mysql = false;
  function connectDB(){
    global $mysql;
    $mysql = mysqli_connect('localhost', 'root', '', 'manapoint') or die('Ошибка подключения');
    $mysql -> query("SET NAMES 'utf8'");
  }
  function closeDB(){
    global $mysql;
    $mysql -> close();
  }
  function getAll($table){
		global $mysql;
		connectDB();
		$result_set = $mysql -> query("SELECT * FROM `$table`");
		closeDB();
		$result = resultSetToArray($result_set);
		return $result;
	}
  function isUser($login, $password){
    global $mysql;
    connectDB();
    $result = $mysql -> query("SELECT * FROM `users` WHERE `login`='$login' AND `password`='$password' OR `email`='$login' AND `password` ='$password'");
    closeDB();
    $result_arr = resultSetToArray($result);

    if(!empty($result_arr)){
      $result_arr = true;
    }else {
      $result_arr = false;
    }
    return $result_arr;
  }
  function idUser($login){
    global $mysql;
    connectDB();
    $result = $mysql -> query("SELECT `id` FROM `users` WHERE `login` = '$login' OR `email` = '$login'");
    closeDB();
    $result = resultSetToArray($result);
    $result = $result[0]['id'];
    return $result;
  }
  function getUserLogin($id){
    global $mysql;
    connectDB();
    $result = $mysql -> query("SELECT `login` FROM `users` WHERE `id` = '$id'");
    closeDB();
    $result = resultSetToArray($result);
    $result = $result[0]['login'];
    return $result;
  }
  function getUserLevel($id){
    global $mysql;
    connectDB();
    $result = $mysql -> query("SELECT `level` FROM `users` WHERE `id` = '$id'");
    closeDB();
    $result = resultSetToArray($result);
    $result = $result[0]['level'];
    return $result;
  }
  function getUserXp($id){
    global $mysql;
    connectDB();
    $result = $mysql -> query("SELECT `xp` FROM `users` WHERE `id` = '$id'");
    closeDB();
    $result = resultSetToArray($result);
    $result = $result[0]['xp'];
    return $result;
  }
  function getUserMaxXp($id){
    global $mysql;
    connectDB();
    $result = $mysql -> query("SELECT `maxXp` FROM `users` WHERE `id` = '$id'");
    closeDB();
    $result = resultSetToArray($result);
    $result = $result[0]['maxXp'];
    return $result;
  }
  function getUserBonus($id){
    global $mysql;
    connectDB();
    $result = $mysql -> query("SELECT `bonus` FROM `users` WHERE `id` = '$id'");
    closeDB();
    $result = resultSetToArray($result);
    $result = $result[0]['bonus'];
    return $result;
  }
  function getUserMoney($id){
    global $mysql;
    connectDB();
    $result = $mysql -> query("SELECT `money` FROM `users` WHERE `id` = '$id'");
    closeDB();
    $result = resultSetToArray($result);
    $result = $result[0]['money'];
    return $result;
  }
  function getUserBattleTag($id){
    global $mysql;
    connectDB();
    $result = $mysql -> query("SELECT `battleTag` FROM `users` WHERE `id` = '$id'");
    closeDB();
    $result = resultSetToArray($result);
    $result = $result[0]['battleTag'];
    return $result;
  }
  function getUserEmail($id){
    global $mysql;
    connectDB();
    $result = $mysql -> query("SELECT `email` FROM `users` WHERE `id` = '$id'");
    closeDB();
    $result = resultSetToArray($result);
    $result = $result[0]['email'];
    return $result;
  }
  function getUserVerify($id){
    global $mysql;
    connectDB();
    $result = $mysql -> query("SELECT `verifyEmail` FROM `users` WHERE `id` = '$id'");
    closeDB();
    $result = resultSetToArray($result);
    $result = $result[0]['verifyEmail'];
    return $result;
  }
  function getUsers(){
		$result = getAll('users');
		return $result;
	}
  function resultSetToArray($result_set){
		$array = array();
		while(($row = $result_set->fetch_assoc()) != false)
			$array[] = $row;
		return $array;
	}
  function hasOb($ob, $name, $table){
    global $mysql;
    connectDB();
    $result = $mysql -> query("SELECT `id` FROM `$table` WHERE `$ob` = '$name'");
    closeDB();
    if(isset($result)){
      return true;
    }
    else {
      return false;
    }
  }
  function newUser($login, $email, $password){
    $password = sha1($password);
    global $mysql;
    connectDB();
    $mysql -> query("INSERT INTO `users`(`login`, `email`, `password`) VALUES ('$login', '$email', '$password')");
    closeDB();
  }
  function updateUsers($id, $value, $valueName){
    global $mysql;
    connectDB();
    $mysql -> query("UPDATE `users` SET `$valueName` = '$value' WHERE `id` = '$id'");
    closeDB();
  }
?>
