<?php

	include_once 'php/DAO/Conexao.php';

	$con = Conexao::retornarConexao();
	
	try {
		print_r($con);
	} catch (Exception $e) {
		echo $e->getMessage();
	}
	
	