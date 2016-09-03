<?php

	include_once 'php/DAO/Conexao.php';
	
	try {
		$con = Conexao::retornarNovaConexao();
		print_r($con);
	} catch(Exception $e) {
		echo $e->getMessage();
	}