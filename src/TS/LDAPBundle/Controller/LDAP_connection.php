<?php
         include 'connexionBD.php';
       
       define ( "LDAP_SERVER_NAME"    , "emea-tc2-dc01.internal.sungard.corp" ) ;
       define ( "LDAP_SERVER_PORT"    ,  389 ) ;
       define ( "DEFAULT_PREFIX_LOGIN", "internal\\" ) ;     
       define ( "DEFAULT_POSTFIX_LOGIN", "@sungard.com" ) ;   
       function check_user ( $user_name_s, $password_s ) {
             if ( ( strlen ( trim ( $user_name_s ) ) == 0 ) or
                  ( strlen ( trim ( $password_s ) ) == 0 ) ) {
                    return ( -1 ) ;            
             }
             $ldapConnection = ldap_connect ( LDAP_SERVER_NAME, LDAP_SERVER_PORT ) ;
             if ( ! $ldapConnection ) {
                    return 1 ;
             }
             $ldapSettingVer = ldap_set_option ( $ldapConnection, LDAP_OPT_PROTOCOL_VERSION, 3 ) ;
             if ( ! $ldapSettingVer ) {
                    return 2 ;
             }       
             if(@$bindServerLDAP = ldap_bind ( $ldapConnection, DEFAULT_PREFIX_LOGIN . $user_name_s, $password_s ))
			
					echo "loggedin";
					else
					echo "fail";
					
			 
             ldap_close ( $ldapConnection ) ;
             if ( $bindServerLDAP !== TRUE ) {
                    return ( -2 ) ;
             }
             return 0 ;
       }
	   
	     // check_user ( "nesrine.maaouia", "Mehdi2013" );
	     
	    

	
?>
