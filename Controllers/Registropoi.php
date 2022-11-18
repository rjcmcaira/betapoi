<?php 

class Registropoi extends Controllers{
	public function __construct()
	{
		parent::__construct();
		session_start();
		session_regenerate_id(true);
		if(empty($_SESSION['login']))
		{
			header('Location: '.base_url().'/login');
		}
		getPermisos(4);
	}

	public function Registropoi()
	{
		if(empty($_SESSION['permisosMod']['r'])){
			header("Location:".base_url().'/dashboard');
		}
		$data['page_tag'] = "Registropoi";
		$data['page_title'] = "Registropoi <small>Tienda POI</small>";
		$data['page_name'] = "registropoi";
		$data['page_functions_js'] = "functions_registropoi.js";
		$this->views->getView($this,"registropoi",$data);
	}

	
	public function setRegistropoi(){
			if($_POST){
				
				if(empty($_POST['txtCc']) || empty($_POST['txtOei']) || empty($_POST['txtCoe']) || empty($_POST['txtIoe']) || empty($_POST['txtUmoe']) || empty($_POST['txtMoe']) || empty($_POST['txtAei'])|| empty($_POST['txtCae'])|| empty($_POST['txtIae'])|| empty($_POST['txtUmae'])|| empty($_POST['txtMae']) )
				{
					$arrResponse = array("status" => false, "msg" => 'Datos incorrectos.');
				}else{ 
					$idRegistropoi = intval($_POST['idRegistropoi']);
					$strCc = strClean($_POST['txtCc']);
					$strOei = ucwords(strClean($_POST['txtOei']));
					$strCoe = ucwords(strClean($_POST['txtCoe']));
					$strIoe = ucwords(strClean($_POST['txtIoe']));
					$strUmoe = ucwords(strClean($_POST['txtUmoe']));
					$intMoe = intval(strClean($_POST['txtMoe']));
					$strAei = ucwords(strClean($_POST['txtAei']));
					$strCae = ucwords(strClean($_POST['txtCae']));
					$strIae = ucwords(strClean($_POST['txtIae']));
					$strUmae = ucwords(strClean($_POST['txtUmae']));
					$intMae = intval(strClean($_POST['txtMae']));


					if($idRegistropoi == 0)
					{

						$option = 1;
						
						$request_user = $this->model->insertRegistropoi($strCc,
																			$strOei,
																			$strCoe,
																			$strIoe,
																			$strUmoe,
																			$intMoe ,
																			$strAei,
																			$strCae ,
																			$strIae,
																			$strUmae,
																			$intMae);
					}else{
						/*
						$option = 2;
						$strPassword =  empty($_POST['txtPassword']) ? "" : hash("SHA256",$_POST['txtPassword']);
						$request_user = $this->model->updateUsuario($idUsuario,
																	$strIdentificacion, 
																	$strNombre,
																	$strApellido, 
																	$intTelefono, 
																	$strEmail,
																	$strPassword, 
																	$intTipoId, 
																	$intStatus);
							*/
					}

					if($request_user > 0 )
					{
						if($option == 1){
							$arrResponse = array('status' => true, 'msg' => 'Datos guardados correctamente.');
						}else{
							$arrResponse = array('status' => true, 'msg' => 'Datos Actualizados correctamente.');
						}
					}else if($request_user == 'exist'){
						$arrResponse = array('status' => false, 'msg' => '¡Atención! el email o la identificación ya existe, ingrese otro.');		
					}else{
						$arrResponse = array("status" => false, "msg" => 'No es posible almacenar los datos.');
					}
				}
				echo json_encode($arrResponse,JSON_UNESCAPED_UNICODE);
			}
			die();
		}

	}
 ?>