<?php

	class Profissional {
		
		private $cdProfissional;
		private $nmProfissional;
		private $nmSexo;
		private $cdTipoSexo;
		private $qtBusto;
		private $qtBenga;
		private $dtInclusao;
		private $dtAlteracao;
		
	    public function getCdProfissional(){
	        return $this->cdProfissional;
	    }
	
	    public function setCdProfissional($cdProfissional){
	        $this->cdProfissional = $cdProfissional;
	    }
	
	    public function getNmProfissional(){
	        return $this->nmProfissional;
	    }
	
	    public function setNmProfissional($nmProfissional){
	        $this->nmProfissional = $nmProfissional;
	    }
	
	    public function getNmSexo(){
	        return $this->nmSexo;
	    }
	
	    public function setNmSexo($nmSexo){
	        $this->nmSexo = $nmSexo;
	    }
	
	    public function getCdTipoSexo(){
	        return $this->cdTipoSexo;
	    }
	
	    public function setCdTipoSexo($cdTipoSexo){
	        $this->cdTipoSexo = $cdTipoSexo;
	    }
	
	    public function getQtBusto(){
	        return $this->qtBusto;
	    }
	
	    public function setQtBusto($qtBusto){
	        $this->qtBusto = $qtBusto;
	    }
	
	    public function getQtBenga(){
	        return $this->qtBenga;
	    }
	
	    public function setQtBenga($qtBenga){
	        $this->qtBenga = $qtBenga;
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