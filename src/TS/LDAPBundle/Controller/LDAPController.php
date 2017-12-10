<?php

namespace TS\LDAPBundle\Controller;

use Symfony\Component\Security\Core\SecurityContext;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LDAPController extends Controller {

    public function logoutAction() {
        $request = $this->getRequest();
        $session = $request->getSession();
        $session->invalidate();
        return $this->redirect($this->generateUrl('adminLogin'));
    }
    
     public function EmployeelogoutAction() {
        $request = $this->getRequest();
        $session = $request->getSession();
        $session->invalidate();
        return $this->redirect($this->generateUrl('employeeLogin'));
    }

    
     public function loginEmployeeAction() {
        
        if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirect($this->generateUrl('ts_quiz_home'));
        }
        $request = $this->getRequest();
        $session = $request->getSession();

        if ($request->getMethod() == 'POST') { 
            $dom = new \DOMDocument();
            $dom->load('../web/config.xml');
            $project = $dom->getElementsByTagName('quiz')->item(0);
            $ldaps = $project->getElementsByTagName('ldap');
            $statusLdap = '';
            foreach ($ldaps as $ldap) {
                $status = $ldap->getElementsByTagName('status');
                foreach ($status as $stat) {
                    $statusLdap = $stat->firstChild->nodeValue;
                }
            }
             
             if($statusLdap == 'true')
             {
              return  $this->forward('TSLDAPBundle:LDAP:loginEmployeeLdap');
             }
            else {
            include 'connexionBD.php';


            $username = $request->get('login');
            $password = $request->get('password');
            $picture = "https://my.knowhow.sungard.com/User%20Photos/Profile%20Pictures/internal_". $username ."_LThumb.jpg";

            $cryptPass = md5($password);

      

            $session->set('username', $username);
            $session->set('picture', $picture);
            $session->set('email', $username . "@sungard.com");

         

                $sql = "SELECT * FROM Candidate WHERE username='" . $username . "' AND  state = 'enable'";
                
                $run = mysql_query($sql) or die(mysql_error());
                if (mysql_num_rows($run) > 0) {
                     $row = mysql_fetch_array($run);
                    $session->set('role',$row['role']);
                    $session->set('logged_in', true);
                    return $this->redirect($this->generateUrl('ts_admin_candidateTests'));
                } else {
                    return $this->render('TSLDAPBundle:LDAP:AccessEmployeeError.html.twig');
               }
            
        }
        }
        return $this->render('TSLDAPBundle:LDAP:quizLogin.html.twig');
    }

      public function loginEmployeeLdapAction() {
        
        if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirect($this->generateUrl('ts_quiz_home'));
        }
        $request = $this->getRequest();
        $session = $request->getSession();

        if ($request->getMethod() == 'POST') { 
           
            include 'connexionBD.php';

            define("LDAP_SERVER_NAME", "emea-tc2-dc01.internal.sungard.corp");
            define("LDAP_SERVER_PORT", 389);
            define("DEFAULT_PREFIX_LOGIN", "internal\\");

            $username = $request->get('login');
            $password = $request->get('password');
            $picture = "https://my.knowhow.sungard.com/User%20Photos/Profile%20Pictures/internal_". $username ."_LThumb.jpg";

            $cryptPass = md5($password);

            $LDAP_Response = $this->check_userAction($username, $password);

            $session->set('username', $username);
            $session->set('picture', $picture);
            $session->set('email', $username . "@sungard.com");

           if ($LDAP_Response != 0) {
                return $this->render('TSLDAPBundle:LDAP:LDAPEmpleyeeError.html.twig');
            } else {

                $sql = "SELECT * FROM Candidate WHERE username='" . $username . "' AND  state = 'enable'";
                
                $run = mysql_query($sql) or die(mysql_error());
                if (mysql_num_rows($run) > 0) {
                     $row = mysql_fetch_array($run);
                    $session->set('role',$row['role']);
                    $session->set('logged_in', true);
                    return $this->redirect($this->generateUrl('ts_admin_candidateTests'));
                } else {
                    return $this->render('TSLDAPBundle:LDAP:AccessEmployeeError.html.twig');
               }
            }
       
        }
        return $this->render('TSLDAPBundle:LDAP:quizLogin.html.twig');
    }

    
    public function loginAction() {
        if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirect($this->generateUrl('ts_admin_cvs'));
        }
        $request = $this->getRequest();
        $session = $request->getSession();

        if ($request->getMethod() == 'POST') { 
           
            
            $dom = new \DOMDocument();
            $dom->load('../web/config.xml');
            $project = $dom->getElementsByTagName('testtool')->item(0);
            $ldaps = $project->getElementsByTagName('ldap');
            $statusLdap = '';
            foreach ($ldaps as $ldap) {
                $status = $ldap->getElementsByTagName('status');
                foreach ($status as $stat) {
                    $statusLdap = $stat->firstChild->nodeValue;
                }
            }
             
             if($statusLdap == 'true')
             {
              return  $this->forward('TSLDAPBundle:LDAP:loginLdap');
             }
            else {
            
            include 'connexionBD.php';
            $username = $request->get('login');
            $password = $request->get('password');
            $picture = "https://my.knowhow.sungard.com/User%20Photos/Profile%20Pictures/internal_". $username ."_LThumb.jpg";

            $cryptPass = md5($password);

      

            $session->set('username', $username);
            $session->set('picture', $picture);
            $session->set('email', $username . "@sungard.com");


                $sql = "SELECT * FROM TSadmin WHERE username='" . $username . "'";
                
                $run = mysql_query($sql) or die(mysql_error());
                if (mysql_num_rows($run) > 0) {
                     $row = mysql_fetch_array($run);
                    $session->set('role',$row['role']);
                    $session->set('logged_in', true);
                    return $this->redirect($this->generateUrl('ts_admin_allTests'));
                } else {
                    return $this->render('TSLDAPBundle:LDAP:AccessError.html.twig');
                }
         
        }
       
        }
         return $this->render('TSLDAPBundle:LDAP:login.html.twig');
    }
    
    
    
     public function loginLdapAction() {
        if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return $this->redirect($this->generateUrl('ts_admin_cvs'));
        }
        $request = $this->getRequest();
        $session = $request->getSession();

        if ($request->getMethod() == 'POST') { 
            include 'connexionBD.php';
            
           define("LDAP_SERVER_NAME", "emea-tc2-dc01.internal.sungard.corp");
            define("LDAP_SERVER_PORT", 389);
            define("DEFAULT_PREFIX_LOGIN", "internal\\");

            $username = $request->get('login');
            $password = $request->get('password');
            $picture = "https://my.knowhow.sungard.com/User%20Photos/Profile%20Pictures/internal_". $username ."_LThumb.jpg";

            $cryptPass = md5($password);

         $LDAP_Response = $this->check_userAction($username, $password);

            $session->set('username', $username);
            $session->set('picture', $picture);
            $session->set('email', $username . "@sungard.com");

           if ($LDAP_Response != 0) {
               return $this->render('TSLDAPBundle:LDAP:LDAPerror.html.twig');
            } else {

                $sql = "SELECT * FROM TSadmin WHERE username='" . $username . "'";
                
                $run = mysql_query($sql) or die(mysql_error());
                if (mysql_num_rows($run) > 0) {
                     $row = mysql_fetch_array($run);
                    $session->set('role',$row['role']);
                    $session->set('logged_in', true);
                    return $this->redirect($this->generateUrl('ts_admin_allTests'));
                } else {
                    return $this->render('TSLDAPBundle:LDAP:AccessError.html.twig');
                }
            }
       
       
        }
        
       return $this->render('TSLDAPBundle:LDAP:login.html.twig');
    }
    
    
    public function check_userAction($user_name_s, $password_s) {
        if ((strlen(trim($user_name_s)) == 0) or ( strlen(trim($password_s)) == 0)) {
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
//            header("Location:cvs");
        } else {
            
        }

        /* echo "loggedin";
          else
          echo "fail";
          header("Location: ../index.php"); */

        ldap_close($ldapConnection);
        if ($bindServerLDAP !== TRUE) {
            return (-2);
        }
        return 0;
    }

    
    
    
    
    
    public function addUserAction($login) {
        $sql = "SELECT * FROM utilisateur WHERE username='" . $login . "'";

        $run = mysql_query($sql) or die(mysql_error());

        if (mysql_num_rows($run) == 0) {
            $mail = $login . "@sungard.com";
            $u = explode(".", $login);
            $uprenom = $u[0];
            $unom = $u[1];
            $query = "INSERT INTO utilisateur (login, username, type, prenom, nom, adresse) values ('$mail', '$login',  'User', '$uprenom', '$unom', '$mail')";

            mysql_query($query) or die(mysql_error());

            $sql = "SELECT LAST_INSERT_ID() as id";
            $run = mysql_query($sql) or die(mysql_error());
            $row = mysql_fetch_array($run);
            $sql2 = "SELECT * FROM utilisateur WHERE utilisateur.id='" . $row['id'] . "'";
            $run2 = mysql_query($sql2) or die(mysql_error());
            $row2 = mysql_fetch_array($run2);
            $utilisateur = $row2['id'];
            $username = $row2['username'];
            $date2 = $row2['date'];
            $pieces = explode(".", $username);
            $prenom = $pieces[0];
            $nom = $pieces[1];
            $query2 = "INSERT INTO personne (utilisateur_id, nom_malade, prenom_malade, ordre ,valider ,date) values ('$utilisateur', '$nom', '$prenom', 'Adherent', '1', '$date2')";
            mysql_query($query2) or die(mysql_error());
        } else {
            $row = mysql_fetch_array($run);
        }
        $_SESSION['id'] = $row['id'];
    }

    public function checkldapuserAction($username, $password, $ldap_server) {
        if ($connect = @ldap_connect($ldap_server, LDAP_SERVER_PORT)) { // if connected to ldap server
            if (ldap_set_option($connect, LDAP_OPT_PROTOCOL_VERSION, 3)) {
                echo "version 3<br>\n";
            } else {
                echo "version 2<br>\n";
            }
            echo "verification on '$ldap_server': ";

            // bind to ldap connection
            if (($bind = @ldap_bind($connect)) == false) {
                print "bind:__FAILED__<br>\n";
                return false;
            }

            // search for user
            if (($res_id = ldap_search($connect, "dc=auto,dc=tuwien,dc=ac,dc=at", "uid=$username")) == false) {
                print "failure: search in LDAP-tree failed<br>";
                return false;
            }

            if (ldap_count_entries($connect, $res_id) != 1) {
                print "failure: username $username found more than once<br>\n";
                return false;
            }

            if (( $entry_id = ldap_first_entry($connect, $res_id)) == false) {
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

        echo "failed: " . ldap_error($connect) . "<BR>\n";

        @ldap_close($connect);
        return(false);
    }

}
