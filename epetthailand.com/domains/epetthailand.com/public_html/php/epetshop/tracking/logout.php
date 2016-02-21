<? 

session_start(); 

session_destroy(); 
if(!session_is_registered('login')){ 
	echo "<center><font color=red><strong>You are now logged out!</strong></font></center><br />"; 
	echo "<center><strong>Login:</strong></center><br />"; 
} 
?> 

