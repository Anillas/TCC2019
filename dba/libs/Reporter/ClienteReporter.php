<?php
/** @package    CanisDatabase::Reporter */

/** import supporting libraries */
require_once("verysimple/Phreeze/Reporter.php");

/**
 * This is an example Reporter based on the Cliente object.  The reporter object
 * allows you to run arbitrary queries that return data which may or may not fith within
 * the data access API.  This can include aggregate data or subsets of data.
 *
 * Note that Reporters are read-only and cannot be used for saving data.
 *
 * @package CanisDatabase::Model::DAO
 * @author ClassBuilder
 * @version 1.0
 */
class ClienteReporter extends Reporter
{

	// the properties in this class must match the columns returned by GetCustomQuery().
	// 'CustomFieldExample' is an example that is not part of the `cliente` table
	public $CustomFieldExample;

	public $Nomeusuario;
	public $Sobrenomeusuario;
	public $Telefoneusuario;
	public $Cpfusuario;
	public $Usuario;
	public $Senha;
	public $Cepusuario;
	public $Estadousuario;
	public $Cidadeusuario;
	public $Bairrousuario;
	public $Logradourousuario;
	public $Numerousuario;
	public $Imagem;

	/*
	* GetCustomQuery returns a fully formed SQL statement.  The result columns
	* must match with the properties of this reporter object.
	*
	* @see Reporter::GetCustomQuery
	* @param Criteria $criteria
	* @return string SQL statement
	*/
	static function GetCustomQuery($criteria)
	{
		$sql = "select
			'custom value here...' as CustomFieldExample
			,`cliente`.`nomeUsuario` as Nome
			,`cliente`.`sobrenomeUsuario` as Sobrenome
			,`cliente`.`telefoneUsuario` as Telefone
			,`cliente`.`cpfUsuario` as CPF
			,`cliente`.`usuario` as Usuario
			,`cliente`.`senha` as Senha
			,`cliente`.`cepUsuario` as CEP
			,`cliente`.`estadoUsuario` as Estado
			,`cliente`.`cidadeUsuario` as Cidade
			,`cliente`.`bairroUsuario` as Bairro
			,`cliente`.`logradouroUsuario` as Logradouro
			,`cliente`.`numeroUsuario` as Numero
			,`cliente`.`imagem` as Imagem
		from `cliente`";

		// the criteria can be used or you can write your own custom logic.
		// be sure to escape any user input with $criteria->Escape()
		$sql .= $criteria->GetWhere();
		$sql .= $criteria->GetOrder();

		return $sql;
	}
	
	/*
	* GetCustomCountQuery returns a fully formed SQL statement that will count
	* the results.  This query must return the correct number of results that
	* GetCustomQuery would, given the same criteria
	*
	* @see Reporter::GetCustomCountQuery
	* @param Criteria $criteria
	* @return string SQL statement
	*/
	static function GetCustomCountQuery($criteria)
	{
		$sql = "select count(1) as counter from `cliente`";

		// the criteria can be used or you can write your own custom logic.
		// be sure to escape any user input with $criteria->Escape()
		$sql .= $criteria->GetWhere();

		return $sql;
	}
}

?>