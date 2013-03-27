<?php
class componentesbeComponents extends sfComponents
{
  public function executeTitulo()
  {
    $titulo = ConfiguracionTable::getTitulo()->execute();
    $titulo = $titulo[0]['nombreSitio'];
    $this->titulo = $titulo;
  }
  
  public function executeEstilo()
  {
  	$estilo = ConfiguracionTable::getEstilo()->execute();
  	$estilo = $estilo[0]['plantillaDefecto'];
  	if($estilo == "estilo1.css")
  	{
  		$this->estilo = '/alumno/entrega3/web/css/backEnd1.css';
  	}
  	else
  	{
  		$this->estilo = '/alumno/entrega3/web/css/backEnd2.css';
  	}
  	
  }
}
?>