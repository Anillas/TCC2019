<?php
/** @package    CanisDatabase::Model::DAO */

/** import supporting libraries */
require_once("verysimple/Phreeze/IDaoMap.php");
require_once("verysimple/Phreeze/IDaoMap2.php");

/**
 * ProdutoMap is a static class with functions used to get FieldMap and KeyMap information that
 * is used by Phreeze to map the ProdutoDAO to the produtos datastore.
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
class ProdutoMap implements IDaoMap, IDaoMap2
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
			self::$FM["Id"] = new FieldMap("Id","produtos","id",true,FM_TYPE_INT,3,null,true);
			self::$FM["Nome"] = new FieldMap("Nome","produtos","nome",false,FM_TYPE_VARCHAR,45,null,false);
			self::$FM["Tipo"] = new FieldMap("Tipo","produtos","tipo",false,FM_TYPE_VARCHAR,45,null,false);
			self::$FM["Descricao"] = new FieldMap("Descricao","produtos","descricao",false,FM_TYPE_VARCHAR,600,null,false);
			self::$FM["Preco"] = new FieldMap("Preco","produtos","preco",false,FM_TYPE_DECIMAL,10.2,null,false);
			self::$FM["Quantidade"] = new FieldMap("Quantidade","produtos","quantidade",false,FM_TYPE_INT,3,null,false);
			self::$FM["Imagem"] = new FieldMap("Imagem","produtos","imagem",false,FM_TYPE_BLOB,null,null,false);
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
		}
		return self::$KM;
	}

}

?>