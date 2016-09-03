<?php

	class Conexao {
		
		public static function retornarConexao() {
			try {
				return new PDO("mysql:dbname=sispu;host=localhost", "root", "");
			} catch(PDOException $e) {
				throw new Exception("Erro ao conecar na base", $e);
			}
		}
		
		
	}
