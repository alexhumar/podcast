<?php

/**
 * Configuracion form.
 *
 * @package    podcast
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ConfiguracionForm extends BaseConfiguracionForm
{
  public function configure()
  {
  	$this->widgetSchema['plantillaDefecto'] = new sfWidgetFormChoice(array(
      'choices'  => array(
                      "estilo1.css" => "Estilo 1",
                      "estilo2.css" => "Estilo 2"
      ),
      'expanded' => true,
      'label'	 => 'Plantilla del sitio:'
    ));
  	$this->widgetSchema['cantidadItemsPorPagina'] = new sfWidgetFormInputText(array('label'=>'Cantidad de items mostrados por pagina'));
  	$this->widgetSchema['cantidadPodcastPorPagina'] = new sfWidgetFormInputText(array('label'=>'Cantidad de podcasts mostrados por pagina'));
  	$this->widgetSchema['nombreSitio'] = new sfWidgetFormInputText(array('label'=>'Nombre del sitio'));
  }
}
