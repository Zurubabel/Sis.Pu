<?php

	class Conexao {
		
		public static function retornarNovaConexao() {
			
			try {
				return new PDO("mysql:dbname=sispu;host=localhost","root", "");
			} catch(PDOException $e) {
				throw new Exception("Erro na conex�o de base: " . $e->getMessage());
			}
			
		}
		
	}
