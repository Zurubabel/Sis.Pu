<?php

	class Conexao {
		
		public static function retornarNovaConexao() {
			
			try {
				return new PDO("mysql:dbname=sisp;host=localhost","root", "");
			} catch(PDOException $e) {
				throw new Exception("Erro na conex�o de base: " . $e->getMessage());
			}
			
		}
		
	}
