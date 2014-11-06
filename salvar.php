<?
	
	$con = mysql_connect('192.168.1.155','lionsoft','*lionsoft.2013$')or die(mysql_error());
	mysql_select_db('phonegap_teste', $con);
	
	$nome = mysql_real_escape_string($_REQUEST['nome']);
	$sobrenome = mysql_real_escape_string($_REQUEST['sobrenome']);
	$email = mysql_real_escape_string($_REQUEST['email']);
	
	$sql = "INSERT INTO cadastro ( nome, sobrenome, email) VALUES('$nome', '$sobrenome', '$email')";
	$res = mysql_query($sql);
	
	if($res == true){
		$cadastro = 1;
	}else{
		$cadastro = 0;	
	}
	
	echo (json_encode($cadastro));
?>