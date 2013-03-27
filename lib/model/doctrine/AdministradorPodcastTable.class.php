<?php

/**
 * AdministradorPodcastTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class AdministradorPodcastTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object AdministradorPodcastTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('AdministradorPodcast');
    }
    
    public static function getPermisosPropios()
    {
    	$user_id=sfContext::getInstance()->getUser()->getAttribute('user_id', null, 'sfGuardSecurityUser');
    	$query = Doctrine_Query::create()
    	->select('ap.*')
    	->from('administradorpodcast ap')
    	->where('ap.user_id = ?', $user_id);
    	return $query;
    }
}