<?php

	class Logs {
		
		public static final function criarLog($mensagem) {
			// 1 - Criar o arquivo de log
			$arquivo = fopen("log.txt", "a");
			// 2 - Escrever no arquivo
			fwrite($arquivo, $mensagem);
			// 3 - Fechar o arquivo
			fclose($arquivo);
		}
		
	}