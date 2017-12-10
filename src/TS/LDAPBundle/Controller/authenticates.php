<?php session_start();
include 'connexionBD.php';

define("LDAP_SERVER_NAME", "emea-tc2-dc01.internal.sungard.corp");
define("LDAP_SERVER_PORT", 389);
define("DEFAULT_PREFIX_LOGIN", "internal\\");

function check_user($user_name_s, $password_s) {
	if ((strlen(trim($user_name_s)) == 0) or (strlen(trim($password_s)) == 0)) {
		return (-1);
	}
	$ldapConnection = ldap_connect(LDAP_SERVER_NAME, LDAP_SERVER_PORT);
	if (!$ldapConnection) {
		return 1;
	}
	$ldapSettingVer = ldap_set_option($ldapConnection, LDAP_OPT_PROTOCOL_VERSION, 3);
	if (!$ldapSettingVer) {
		return 2;
	}
	#ldap_set_option($con, LDAP_OPT_REFERRALS, 0);
	if (@$bindServerLDAP = ldap_bind($ldapConnection, DEFAULT_PREFIX_LOGIN . $user_name_s, $password_s)) {
		
            header("Location:TunisiaSite/web/app_dev.php/admin/cvs");
	}
	else {
		
	}

		/*echo "loggedin";
	else
		echo "fail";
	 header("Location: ../index.php");*/

	ldap_close($ldapConnection);
	if ($bindServerLDAP !== TRUE) {
		return (-2);
	}
	return 0;
	
}



function addUser($login)
{
	$sql = "SELECT * FROM utilisateur WHERE username='" . $login . "'";
	
	$run = mysql_query($sql) or die(mysql_error());

	if (mysql_num_rows($run) == 0) {
		$mail=$login."@sungard.com";
                $u = explode(".", $login);
                $uprenom= $u[0];
                $unom= $u[1];
		$query = "INSERT INTO utilisateur (login, username, type, prenom, nom, adresse) values ('$mail', '$login',  'User', '$uprenom', '$unom', '$mail')";
                
		mysql_query($query) or die(mysql_error());
		
		$sql = "SELECT LAST_INSERT_ID() as id";
		$run = mysql_query($sql) or die(mysql_error());
		$row = mysql_fetch_array($run);
                $sql2 = "SELECT * FROM utilisateur WHERE utilisateur.id='".$row['id']."'";
                $run2 = mysql_query($sql2) or die(mysql_error());
		$row2 = mysql_fetch_array($run2);
                $utilisateur = $row2['id'];
                $username= $row2['username'];
                $date2= $row2['date'];
                $pieces = explode(".", $username);
                $prenom= $pieces[0];
                $nom= $pieces[1];
                $query2 = "INSERT INTO personne (utilisateur_id, nom_malade, prenom_malade, ordre ,valider ,date) values ('$utilisateur', '$nom', '$prenom', 'Adherent', '1', '$date2')";
                mysql_query($query2) or die(mysql_error());
	}
	else {
		$row = mysql_fetch_array($run);
	}
	$_SESSION['id'] = $row['id'];
        
}


function checkldapuser($username, $password, $ldap_server){
  if($connect=@ldap_connect($ldap_server, LDAP_SERVER_PORT)){ // if connected to ldap server

    if (ldap_set_option($connect, LDAP_OPT_PROTOCOL_VERSION, 3)) {
      echo "version 3<br>\n";
    } else {
      echo "version 2<br>\n";
    }
    echo "verification on '$ldap_server': ";

    // bind to ldap connection
    if(($bind=@ldap_bind($connect)) == false){
      print "bind:__FAILED__<br>\n";
      return false;
    }

    // search for user
    if (($res_id = ldap_search( $connect,
                                "dc=auto,dc=tuwien,dc=ac,dc=at",
                                "uid=$username")) == false) {
      print "failure: search in LDAP-tree failed<br>";
      return false;
    }

    if (ldap_count_entries($connect, $res_id) != 1) {
      print "failure: username $username found more than once<br>\n";
      return false;
    }

    if (( $entry_id = ldap_first_entry($connect, $res_id))== false) {
      print "failur: entry of searchresult couln't be fetched<br>\n";
      return false;
    }

    if (( $user_dn = ldap_get_dn($connect, $entry_id)) == false) {
      print "failure: user-dn coulnd't be fetched<br>\n";
      return false;
    }

    /* Authentifizierung des User */
    if (($link_id = ldap_bind($connect, $user_dn, $password)) == false) {
      print "failure: username, password didn't match: $user_dn<br>\n";
      return false;
    }

    return true;
    @ldap_close($connect);
  } else {                                  // no conection to ldap server
    echo "no connection to '$ldap_server'<br>\n";
  }

  echo "failed: ".ldap_error($connect)."<BR>\n";

  @ldap_close($connect);
  return(false);

}//end function checkldapuser

$username = $_POST['login'];
$password = $_POST['password'];
$cryptPass = md5($password);

	$LDAP_Response= check_user($username, $password); #checkldapuser($username,$password,LDAP_SERVER_NAME); #
	$_SESSION['logged_in'] = true;

	$_SESSION['username'] = $username;
	$_SESSION['login'] = $username."@sungard.com";
	
	if ($LDAP_Response != 0) {
		$sql = "SELECT * FROM utilisateur WHERE type = 'admin' and username='" . $username . "' AND (password='" . $cryptPass . "' OR password='" . $password . "') ";
		
		$run = mysql_query($sql) or die(mysql_error());

		if (mysql_num_rows($run)>0) {
			$row = mysql_fetch_array($run);
			$_SESSION['type'] = $row['type'];
			$_SESSION['id'] = $row['id'];
                        
			# verify if is admin 
			header("Location:../backend.php/utilisateur");
		}
		else {
			$_SESSION['logged_in'] = false;
			header("Location: Error.php");
		}
	}
	else {
		addUser($username);
               
                /*$sql = "SELECT * FROM utilisateur WHERE type = 'user' and username='" . $username . "' AND (password='" . $cryptPass . "' OR password='" . $password . "') ";
		$run = mysql_query($sql) or die(mysql_error());
                $row = mysql_fetch_array($run);
                        $_SESSION['logged_in'] = true;
			$_SESSION['type'] = $row['type'];
			$_SESSION['id'] = $row['id'];
                        $_SESSION['photo'] = $row['photo'];
			$_SESSION['username'] = $row['username'];
                        $_SESSION['login'] = $row['login'];*/
                
		header("Location:../cnx_dev.php/utilisateur/auth?username=".$username);
	}
      

?>
