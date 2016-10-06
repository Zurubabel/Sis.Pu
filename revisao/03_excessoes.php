<?php

	try {
		
		// Mensagem, código, Throwable anterior
		// Erro
		//throw new Exception("Excess&atilde;o pega", 1, NULL);
	} catch(Exception $e) {
		echo "<h1>Errou!</h1> <br />";
		echo "<strong>" . $e->getMessage() . "</strong>";
	} finally {
		echo "Executa no final";
	}
