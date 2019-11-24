<?php
/** @package    CanisDatabase::Model::DAO */

/** import supporting libraries */
require_once("verysimple/Phreeze/Criteria.php");

/**
 * ClienteCriteria allows custom querying for the Cliente object.
 *
 * WARNING: THIS IS AN AUTO-GENERATED FILE
 *
 * This file should generally not be edited by hand except in special circumstances.
 * Add any custom business logic to the ModelCriteria class which is extended from this class.
 * Leaving this file alone will allow easy re-generation of all DAOs in the event of schema changes
 *
 * @inheritdocs
 * @package CanisDatabase::Model::DAO
 * @author ClassBuilder
 * @version 1.0
 */
class ClienteCriteriaDAO extends Criteria
{

	public $Nomeusuario_Equals;
	public $Nomeusuario_NotEquals;
	public $Nomeusuario_IsLike;
	public $Nomeusuario_IsNotLike;
	public $Nomeusuario_BeginsWith;
	public $Nomeusuario_EndsWith;
	public $Nomeusuario_GreaterThan;
	public $Nomeusuario_GreaterThanOrEqual;
	public $Nomeusuario_LessThan;
	public $Nomeusuario_LessThanOrEqual;
	public $Nomeusuario_In;
	public $Nomeusuario_IsNotEmpty;
	public $Nomeusuario_IsEmpty;
	public $Nomeusuario_BitwiseOr;
	public $Nomeusuario_BitwiseAnd;
	public $Sobrenomeusuario_Equals;
	public $Sobrenomeusuario_NotEquals;
	public $Sobrenomeusuario_IsLike;
	public $Sobrenomeusuario_IsNotLike;
	public $Sobrenomeusuario_BeginsWith;
	public $Sobrenomeusuario_EndsWith;
	public $Sobrenomeusuario_GreaterThan;
	public $Sobrenomeusuario_GreaterThanOrEqual;
	public $Sobrenomeusuario_LessThan;
	public $Sobrenomeusuario_LessThanOrEqual;
	public $Sobrenomeusuario_In;
	public $Sobrenomeusuario_IsNotEmpty;
	public $Sobrenomeusuario_IsEmpty;
	public $Sobrenomeusuario_BitwiseOr;
	public $Sobrenomeusuario_BitwiseAnd;
	public $Telefoneusuario_Equals;
	public $Telefoneusuario_NotEquals;
	public $Telefoneusuario_IsLike;
	public $Telefoneusuario_IsNotLike;
	public $Telefoneusuario_BeginsWith;
	public $Telefoneusuario_EndsWith;
	public $Telefoneusuario_GreaterThan;
	public $Telefoneusuario_GreaterThanOrEqual;
	public $Telefoneusuario_LessThan;
	public $Telefoneusuario_LessThanOrEqual;
	public $Telefoneusuario_In;
	public $Telefoneusuario_IsNotEmpty;
	public $Telefoneusuario_IsEmpty;
	public $Telefoneusuario_BitwiseOr;
	public $Telefoneusuario_BitwiseAnd;
	public $Cpfusuario_Equals;
	public $Cpfusuario_NotEquals;
	public $Cpfusuario_IsLike;
	public $Cpfusuario_IsNotLike;
	public $Cpfusuario_BeginsWith;
	public $Cpfusuario_EndsWith;
	public $Cpfusuario_GreaterThan;
	public $Cpfusuario_GreaterThanOrEqual;
	public $Cpfusuario_LessThan;
	public $Cpfusuario_LessThanOrEqual;
	public $Cpfusuario_In;
	public $Cpfusuario_IsNotEmpty;
	public $Cpfusuario_IsEmpty;
	public $Cpfusuario_BitwiseOr;
	public $Cpfusuario_BitwiseAnd;
	public $Usuario_Equals;
	public $Usuario_NotEquals;
	public $Usuario_IsLike;
	public $Usuario_IsNotLike;
	public $Usuario_BeginsWith;
	public $Usuario_EndsWith;
	public $Usuario_GreaterThan;
	public $Usuario_GreaterThanOrEqual;
	public $Usuario_LessThan;
	public $Usuario_LessThanOrEqual;
	public $Usuario_In;
	public $Usuario_IsNotEmpty;
	public $Usuario_IsEmpty;
	public $Usuario_BitwiseOr;
	public $Usuario_BitwiseAnd;
	public $Senha_Equals;
	public $Senha_NotEquals;
	public $Senha_IsLike;
	public $Senha_IsNotLike;
	public $Senha_BeginsWith;
	public $Senha_EndsWith;
	public $Senha_GreaterThan;
	public $Senha_GreaterThanOrEqual;
	public $Senha_LessThan;
	public $Senha_LessThanOrEqual;
	public $Senha_In;
	public $Senha_IsNotEmpty;
	public $Senha_IsEmpty;
	public $Senha_BitwiseOr;
	public $Senha_BitwiseAnd;
	public $Cepusuario_Equals;
	public $Cepusuario_NotEquals;
	public $Cepusuario_IsLike;
	public $Cepusuario_IsNotLike;
	public $Cepusuario_BeginsWith;
	public $Cepusuario_EndsWith;
	public $Cepusuario_GreaterThan;
	public $Cepusuario_GreaterThanOrEqual;
	public $Cepusuario_LessThan;
	public $Cepusuario_LessThanOrEqual;
	public $Cepusuario_In;
	public $Cepusuario_IsNotEmpty;
	public $Cepusuario_IsEmpty;
	public $Cepusuario_BitwiseOr;
	public $Cepusuario_BitwiseAnd;
	public $Estadousuario_Equals;
	public $Estadousuario_NotEquals;
	public $Estadousuario_IsLike;
	public $Estadousuario_IsNotLike;
	public $Estadousuario_BeginsWith;
	public $Estadousuario_EndsWith;
	public $Estadousuario_GreaterThan;
	public $Estadousuario_GreaterThanOrEqual;
	public $Estadousuario_LessThan;
	public $Estadousuario_LessThanOrEqual;
	public $Estadousuario_In;
	public $Estadousuario_IsNotEmpty;
	public $Estadousuario_IsEmpty;
	public $Estadousuario_BitwiseOr;
	public $Estadousuario_BitwiseAnd;
	public $Cidadeusuario_Equals;
	public $Cidadeusuario_NotEquals;
	public $Cidadeusuario_IsLike;
	public $Cidadeusuario_IsNotLike;
	public $Cidadeusuario_BeginsWith;
	public $Cidadeusuario_EndsWith;
	public $Cidadeusuario_GreaterThan;
	public $Cidadeusuario_GreaterThanOrEqual;
	public $Cidadeusuario_LessThan;
	public $Cidadeusuario_LessThanOrEqual;
	public $Cidadeusuario_In;
	public $Cidadeusuario_IsNotEmpty;
	public $Cidadeusuario_IsEmpty;
	public $Cidadeusuario_BitwiseOr;
	public $Cidadeusuario_BitwiseAnd;
	public $Bairrousuario_Equals;
	public $Bairrousuario_NotEquals;
	public $Bairrousuario_IsLike;
	public $Bairrousuario_IsNotLike;
	public $Bairrousuario_BeginsWith;
	public $Bairrousuario_EndsWith;
	public $Bairrousuario_GreaterThan;
	public $Bairrousuario_GreaterThanOrEqual;
	public $Bairrousuario_LessThan;
	public $Bairrousuario_LessThanOrEqual;
	public $Bairrousuario_In;
	public $Bairrousuario_IsNotEmpty;
	public $Bairrousuario_IsEmpty;
	public $Bairrousuario_BitwiseOr;
	public $Bairrousuario_BitwiseAnd;
	public $Logradourousuario_Equals;
	public $Logradourousuario_NotEquals;
	public $Logradourousuario_IsLike;
	public $Logradourousuario_IsNotLike;
	public $Logradourousuario_BeginsWith;
	public $Logradourousuario_EndsWith;
	public $Logradourousuario_GreaterThan;
	public $Logradourousuario_GreaterThanOrEqual;
	public $Logradourousuario_LessThan;
	public $Logradourousuario_LessThanOrEqual;
	public $Logradourousuario_In;
	public $Logradourousuario_IsNotEmpty;
	public $Logradourousuario_IsEmpty;
	public $Logradourousuario_BitwiseOr;
	public $Logradourousuario_BitwiseAnd;
	public $Numerousuario_Equals;
	public $Numerousuario_NotEquals;
	public $Numerousuario_IsLike;
	public $Numerousuario_IsNotLike;
	public $Numerousuario_BeginsWith;
	public $Numerousuario_EndsWith;
	public $Numerousuario_GreaterThan;
	public $Numerousuario_GreaterThanOrEqual;
	public $Numerousuario_LessThan;
	public $Numerousuario_LessThanOrEqual;
	public $Numerousuario_In;
	public $Numerousuario_IsNotEmpty;
	public $Numerousuario_IsEmpty;
	public $Numerousuario_BitwiseOr;
	public $Numerousuario_BitwiseAnd;
	public $Imagem_Equals;
	public $Imagem_NotEquals;
	public $Imagem_IsLike;
	public $Imagem_IsNotLike;
	public $Imagem_BeginsWith;
	public $Imagem_EndsWith;
	public $Imagem_GreaterThan;
	public $Imagem_GreaterThanOrEqual;
	public $Imagem_LessThan;
	public $Imagem_LessThanOrEqual;
	public $Imagem_In;
	public $Imagem_IsNotEmpty;
	public $Imagem_IsEmpty;
	public $Imagem_BitwiseOr;
	public $Imagem_BitwiseAnd;

}

?>