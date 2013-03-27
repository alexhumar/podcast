<?php

/**
 * sfGuardUserTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class sfGuardUserTable extends PluginsfGuardUserTable
{
    /**
     * Returns an instance of this class.
     *
     * @return object sfGuardUserTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('sfGuardUser');
    }
    
    public static function getPublicadores()
    {
    	$q=
	    	Doctrine_Query::create()
	    	->select('s.id')
	    	->from('sfGuardPermission s')
    		->where('s.name = ?','publicador');
    	$conf = $q->execute();
		$idpublicador= $conf[0]['id'];
    	$query = Doctrine_Query::create()
    	->select('s.user_id, u.username')
    	->from('sfGuardUser u')
    	->leftJoin('u.sfGuardUserPermission s')
    	->where('permission_id='.$idpublicador);
    	return $query;
    }
    
    public static function getTodos(){
    	$query = Doctrine_Query::create()
    	->select('u.*')
    	->from('sfGuardUser u');
    	return $query;
    }
}