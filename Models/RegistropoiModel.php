<?php

	class RegistropoiModel extends Mysql
	{
		private $strCc;
		private $strOei;
		private $strCoe;
		private $strIoe;
		private $strUmoe;
		private $intMoe;
		private $strAei;
		private $strCae;
		private $strIae;
		private $strUmae;
		private $intMae;
/**
		public function __construct()
		{
			parent::__construct();
		}	

		public function insertRegistropoi(string $Cc, string $Oei, string $Coe, , string $Ioe, string $Umoe, int $Moe,string $Aei , string $Cae, string $Iae, string $Umae, int $Mae){

			$this->strCc = $Cc;
			$this->strOei = $Oei;
			$this->strCoe = $Coe;
			$this->strIoe = $Ioe;
			$this->strUmoe = $Umoe;
			$this->intMoe = $Moe;
			$this->strAei = $Aei;
			$this->strCae = $Cae;
			$this->strIae = $Iae;
			$this->strUmae = $Umae;
			$this->intMae = $Mae;

			$return = 0;

			//$sql = "SELECT * FROM Registropoi WHERE 
			//		email_user = '{$this->strEmail}' or identificacion = '{$this->strIdentificacion}' ";
			//$request = $this->select_all($sql);

			//if(empty($request))
			//{
				$query_insert  = "INSERT INTO registropoi(centroCosto ,objEstrInst,codigoOE,indicadorOE,unidMedidaOE,metaOE,accEstrInst,codigoAE,indicadorAE,unidMedidaAE,metaAE) 
								  VALUES(?,?,?,?,?,?,?,?)";
	        	$arrData = array($this->strIdentificacion,
        						$this->strNombre,
        						$this->strApellido,
        						$this->intTelefono,
        						$this->strEmail,
        						$this->strPassword,
        						$this->intTipoId,
        						$this->intStatus);
	        	$request_insert = $this->insert($query_insert,$arrData);
	        	$return = $request_insert;
			//}else{
			//	$return = "exist";
			//}
	        return $return;
		}
	*/	
	}
	
?>