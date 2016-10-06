<?php

	include_once "../private/php/DAO/Conexao.php";

	class TipoTrabalho {
		
		private $cdTipoTrabalho;
		private $nmTipoTrabalho;
		private $bAtivo;
		private $dtInclusao;
		private $dtAlteracao;
		
		public function inserir() {
			try {
				
				$con = Conexao::retornarNovaConexao();
				
				$sql = "INSERT INTO tb_TipoTrabalho(nmTipoTrabalho, bAtivo, dtInclusao) "
						. "VALUES (:nmTipoTrabalho, :bAtivo, NOW());";
				$stmt = $con->prepare($sql);
				
				$stmt->bindParam(":nmTipoTrabalho", $this->nmTipoTrabalho);
				$stmt->bindParam(":bAtivo", $this->bAtivo);
				
				$stmt->execute();
				
				$afetados = $stmt->rowCount();
				
				if ($afetados <= 0) {
					throw new Exception("Não inseriu");
				}
				
			} catch (Exception $e) {
				echo $e->getMessage();
			}
		}
		
		
	    public function getCdTipoTrabalho(){
	        return $this->cdTipoTrabalho;
	    }
	
	    public function setCdTipoTrabalho($cdTipoTrabalho){
	        $this->cdTipoTrabalho = $cdTipoTrabalho;
	    }
	
	    public function getNmTipoTrabalho(){
	        return $this->nmTipoTrabalho;
	    }
	
	    public function setNmTipoTrabalho($nmTipoTrabalho){
	        $this->nmTipoTrabalho = $nmTipoTrabalho;
	    }
	
	    public function getBAtivo(){
	        return $this->bAtivo;
	    }
	
	    public function setBAtivo($bAtivo){
	        $this->bAtivo = $bAtivo;
	    }
	
	    public function getDtInclusao(){
	        return $this->dtInclusao;
	    }
	
	    public function setDtInclusao($dtInclusao){
	        $this->dtInclusao = $dtInclusao;
	    }
	
	    public function getDtAlteracao(){
	        return $this->dtAlteracao;
	    }
	
	    public function setDtAlteracao($dtAlteracao){
	        $this->dtAlteracao = $dtAlteracao;
	    }

}