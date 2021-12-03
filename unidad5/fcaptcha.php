<?php
	function clave_captcha()
		{
			$valores = "0123456789abcedfghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPRSTUVWXYZ";
			$captcha = '';
		  	for ($i=0; $i < 6 ; $i++) 
			  	{ 
					$captcha .= $valores[rand(0,strlen($valores)-1)];
			  	}
		  	return $captcha;
		}
?>