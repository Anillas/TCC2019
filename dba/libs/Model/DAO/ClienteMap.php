<?php
/** @package    CanisDatabase::Model::DAO */

/** import supporting libraries */
require_once("verysimple/Phreeze/IDaoMap.php");
require_once("verysimple/Phreeze/IDaoMap2.php");

/**
 * ClienteMap is a static class with functions used to get FieldMap and KeyMap information that
 * is used by Phreeze to map the ClienteDAO to the cliente datastore.
 *
 * WARNING: THIS IS AN AUTO-GENERATED FILE
 *
 * This file should generally not be edited by hand except in special circumstances.
 * You can override the default fetching strategies for KeyMaps in _config.php.
 * Leaving this file alone will allow easy re-generation of all DAOs in the event of schema changes
 *
 * @package CanisDatabase::Model::DAO
 * @author ClassBuilder
 * @version 1.0
 */
class ClienteMap implements IDaoMap, IDaoMap2
{

	private static $KM;
	private static $FM;
	
	/**
	 * {@inheritdoc}
	 */
	public static function AddMap($property,FieldMap $map)
	{
		self::GetFieldMaps();
		self::$FM[$property] = $map;
	}
	
	/**
	 * {@inheritdoc}
	 */
	public static function SetFetchingStrategy($property,$loadType)
	{
		self::GetKeyMaps();
		self::$KM[$property]->LoadType = $loadType;
	}

	/**
	 * {@inheritdoc}
	 */
	public static function GetFieldMaps()
	{
		if (self::$FM == null)
		{
			self::$FM = Array();
			self::$FM["Nomeusuario"] = new FieldMap("Nomeusuario","cliente","nomeUsuario",false,FM_TYPE_VARCHAR,50,null,false);
			self::$FM["Sobrenomeusuario"] = new FieldMap("Sobrenomeusuario","cliente","sobrenomeUsuario",false,FM_TYPE_VARCHAR,75,null,false);
			self::$FM["Telefoneusuario"] = new FieldMap("Telefoneusuario","cliente","telefoneUsuario",false,FM_TYPE_VARCHAR,15,null,false);
			self::$FM["Cpfusuario"] = new FieldMap("Cpfusuario","cliente","cpfUsuario",true,FM_TYPE_VARCHAR,14,null,false);
			self::$FM["Usuario"] = new FieldMap("Usuario","cliente","usuario",false,FM_TYPE_VARCHAR,50,null,false);
			self::$FM["Senha"] = new FieldMap("Senha","cliente","senha",false,FM_TYPE_VARCHAR,50,null,false);
			self::$FM["Cepusuario"] = new FieldMap("Cepusuario","cliente","cepUsuario",false,FM_TYPE_CHAR,11,null,false);
			self::$FM["Estadousuario"] = new FieldMap("Estadousuario","cliente","estadoUsuario",false,FM_TYPE_VARCHAR,50,null,false);
			self::$FM["Cidadeusuario"] = new FieldMap("Cidadeusuario","cliente","cidadeUsuario",false,FM_TYPE_VARCHAR,75,null,false);
			self::$FM["Bairrousuario"] = new FieldMap("Bairrousuario","cliente","bairroUsuario",false,FM_TYPE_VARCHAR,75,null,false);
			self::$FM["Logradourousuario"] = new FieldMap("Logradourousuario","cliente","logradouroUsuario",false,FM_TYPE_VARCHAR,75,null,false);
			self::$FM["Numerousuario"] = new FieldMap("Numerousuario","cliente","numeroUsuario",false,FM_TYPE_VARCHAR,5,null,false);
			self::$FM["Imagem"] = new FieldMap("Imagem","cliente","imagem",false,FM_TYPE_BLOB,null,null,false);
		}
		return self::$FM;
	}

	/**
	 * {@inheritdoc}
	 */
	public static function GetKeyMaps()
	{
		if (self::$KM == null)
		{
			self::$KM = Array();
			self::$KM["fk_cpfUsuario"] = new KeyMap("fk_cpfUsuario", "Cpfusuario", "Pedidos", "Cpfusuario", KM_TYPE_ONETOMANY, KM_LOAD_LAZY);  // use KM_LOAD_EAGER with caution here (one-to-one relationships only)
		}
		return self::$KM;
	}

}

?>