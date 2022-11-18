<?php 
	
	//define("BASE_URL", "http://localhost/tienda_virtual/");
	const BASE_URL = "http://localhost/civilweb";

	//Zona horaria
	//date_default_timezone_set('America/Guatemala');
	date_default_timezone_set("America/Lima");
	//date_default_timezone_set('sudamerica/peru');
	

	//Datos de conexión a Base de Datos
	//const DB_HOST = "localhost";
	//const DB_NAME = "poi_tienda";
	//const DB_USER = "root";
	//const DB_PASSWORD = "";
	//const DB_CHARSET = "utf8";

	//conexion HEROKU
	const DB_HOST = "us-cdbr-east-06.cleardb.net";
	const DB_NAME = "heroku_197d7971b7af28c";
	const DB_USER = "bb9f8d45e4b14c";
	const DB_PASSWORD = "889005b4";
	const DB_CHARSET = "utf8";

	//Deliminadores decimal y millar Ej. 24,1989.00
	const SPD = ".";
	const SPM = ",";

	//Simbolo de moneda
	const SMONEY = "Q";

	//Datos envio de correo
	const NOMBRE_REMITENTE = "Tienda Virtual";
	const EMAIL_REMITENTE = "no-reply@abelosh.com";
	const NOMBRE_EMPESA = "Tienda Virtual";
	const WEB_EMPRESA = "www.abelosh.com";
	



	


 ?>


