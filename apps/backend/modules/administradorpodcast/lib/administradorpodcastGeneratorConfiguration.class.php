<?php

/**
 * administradorpodcast module configuration.
 *
 * @package    entrega3
 * @subpackage administradorpodcast
 * @author     Your name here
 * @version    SVN: $Id: configuration.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class administradorpodcastGeneratorConfiguration extends BaseAdministradorpodcastGeneratorConfiguration
{
public function getPagerMaxPerPage()
	{
		$conf = ConfiguracionTable::getCantidadItemsPorPagina()->execute();
		return $conf[0]['cantidadItemsPorPagina'];
	}
	
	public function getTableMethod()
	{
		if(sfContext::getInstance()->getUser()->hasPermission('administrador')){
			return '';
		}else{
			return 'getPermisosPropios';
		}
	}
}
