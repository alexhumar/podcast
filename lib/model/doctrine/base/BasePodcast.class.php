<?php

/**
 * BasePodcast
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $idPodcast
 * @property string $nombre
 * @property string $descripcion
 * @property boolean $publicado
 * @property string $imagen
 * @property integer $categoria_idCategoria
 * @property integer $user_id
 * @property Categoria $categoria
 * @property sfGuardUser $User
 * @property Doctrine_Collection $Episodio
 * @property Doctrine_Collection $AdministradorPodcast
 * 
 * @method integer             getIdPodcast()             Returns the current record's "idPodcast" value
 * @method string              getNombre()                Returns the current record's "nombre" value
 * @method string              getDescripcion()           Returns the current record's "descripcion" value
 * @method boolean             getPublicado()             Returns the current record's "publicado" value
 * @method string              getImagen()                Returns the current record's "imagen" value
 * @method integer             getCategoriaIdCategoria()  Returns the current record's "categoria_idCategoria" value
 * @method integer             getUserId()                Returns the current record's "user_id" value
 * @method Categoria           getCategoria()             Returns the current record's "categoria" value
 * @method sfGuardUser         getUser()                  Returns the current record's "User" value
 * @method Doctrine_Collection getEpisodio()              Returns the current record's "Episodio" collection
 * @method Doctrine_Collection getAdministradorPodcast()  Returns the current record's "AdministradorPodcast" collection
 * @method Podcast             setIdPodcast()             Sets the current record's "idPodcast" value
 * @method Podcast             setNombre()                Sets the current record's "nombre" value
 * @method Podcast             setDescripcion()           Sets the current record's "descripcion" value
 * @method Podcast             setPublicado()             Sets the current record's "publicado" value
 * @method Podcast             setImagen()                Sets the current record's "imagen" value
 * @method Podcast             setCategoriaIdCategoria()  Sets the current record's "categoria_idCategoria" value
 * @method Podcast             setUserId()                Sets the current record's "user_id" value
 * @method Podcast             setCategoria()             Sets the current record's "categoria" value
 * @method Podcast             setUser()                  Sets the current record's "User" value
 * @method Podcast             setEpisodio()              Sets the current record's "Episodio" collection
 * @method Podcast             setAdministradorPodcast()  Sets the current record's "AdministradorPodcast" collection
 * 
 * @package    entrega3
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BasePodcast extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('podcast');
        $this->hasColumn('idPodcast', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('nombre', 'string', 50, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 50,
             ));
        $this->hasColumn('descripcion', 'string', 200, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 200,
             ));
        $this->hasColumn('publicado', 'boolean', null, array(
             'type' => 'boolean',
             'notnull' => true,
             'default' => 1,
             ));
        $this->hasColumn('imagen', 'string', 100, array(
             'type' => 'string',
             'notnull' => false,
             'default' => 'no-image.png',
             'length' => 100,
             ));
        $this->hasColumn('categoria_idCategoria', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('user_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Categoria as categoria', array(
             'local' => 'categoria_idCategoria',
             'foreign' => 'idCategoria'));

        $this->hasOne('sfGuardUser as User', array(
             'local' => 'user_id',
             'foreign' => 'id'));

        $this->hasMany('Episodio', array(
             'local' => 'idPodcast',
             'foreign' => 'podcast_idPodcast'));

        $this->hasMany('AdministradorPodcast', array(
             'local' => 'idPodcast',
             'foreign' => 'podcast_idpodcast'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}