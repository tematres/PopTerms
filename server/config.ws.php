<?php
/*
*      config.ws.php
*
*      Copyright 2015 diego <tematres@r020.com.ar>
*
*      This program is free software; you can redistribute it and/or modify
*      it under the terms of the GNU General Public License as published by
*      the Free Software Foundation; either version 2 of the License, or
*      (at your option) any later version.
*
*      This program is distributed in the hope that it will be useful,
*      but WITHOUT ANY WARRANTY; without even the implied warranty of
*      MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*      GNU General Public License for more details.
*
*      You should have received a copy of the GNU General Public License
*      along with this program; if not, write to the Free Software
*      Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
*      MA 02110-1301, USA.

********************************************************************************************
CONFIGURATION
***************************************************************************************
*/
session_start();
// Base URL
$URL_BASE='';

// Configuration array
$CFG=array();
$CFG["ENCODE"]='UTF-8'; // Character encoding
$CFG["DISPLAY_CODE"]=true; // Display term code if present inside the thesaurus
$CFG["WRITES_BACK"]="code+label"; //Can be either "label" for term label, "code" for term code, "code+label" for both
$CFG["LANGS"]=array("es_AR","en_US","fr_FR","pt_BR");
$CFG["LANG_DEFAULT"]="en_US";// Default lang, can be overwritten through a "lang" GET parameter

date_default_timezone_set('America/Buenos_Aires');

//Uncomment & set the next lines to use a proxy for CURL
//$CURL_PROXY = "http://myproxy.domain.ns";
//$CURL_PROXY_PORT = 3128;


/*Servers configuration*/
$CFG_VOCABS[1]["ALIAS"]="AFIP";
$CFG_VOCABS[1]["URL_BASE"]="http://vocabularios.caicyt.gov.ar/afip/services.php";
$CFG_VOCABS[1]["ALPHA"]=array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");

$CFG_VOCABS[2]["ALIAS"]="SALUD";
$CFG_VOCABS[2]["URL_BASE"]="http://vocabularios.caicyt.gov.ar/salud/services.php";
$CFG_VOCABS[2]["ALPHA"]=array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");

$CFG_VOCABS[3]["ALIAS"]="occupation";
$CFG_VOCABS[3]["URL_BASE"]="http://eured.univ-lemans.fr/thesaurus/occupation/services.php";
$CFG_VOCABS[3]["ALPHA"]=array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");

$CFG_VOCABS[4]["ALIAS"]="encab";
$CFG_VOCABS[4]["URL_BASE"]="https://vocabularyserver.com/bne/encabezamientos/services.php";
$CFG_VOCABS[4]["ALPHA"]=array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");
$CFG_VOCABS[4]["TREE"]=0;

//TTLA
$CFG_VOCABS[5]["ALIAS"]="TTLA_FR";
$CFG_VOCABS[5]["URL_BASE"]="https://vocabularyserver.com/ttla/fr/services.php";
$CFG_VOCABS[5]["ALPHA"]=array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");

$CFG_VOCABS[6]["ALIAS"]="TTLA_EN";
$CFG_VOCABS[6]["URL_BASE"]="https://vocabularyserver.com/ttla/en/services.php";
$CFG_VOCABS[6]["ALPHA"]=array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");

$CFG_VOCABS[7]["ALIAS"]="TTLA_ES";
$CFG_VOCABS[7]["URL_BASE"]="https://vocabularyserver.com/ttla/es/services.php";
$CFG_VOCABS[7]["ALPHA"]=array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");

//UNBIS
$CFG_VOCABS[8]["ALIAS"]="UNBIS_FR";
$CFG_VOCABS[8]["URL_BASE"]="https://vocabularyserver.com/unbis/fr/services.php";
$CFG_VOCABS[8]["ALPHA"]=array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");

$CFG_VOCABS[9]["ALIAS"]="UNBIS_EN";
$CFG_VOCABS[9]["URL_BASE"]="https://vocabularyserver.com/unbis/en/services.php";
$CFG_VOCABS[9]["ALPHA"]=array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");

$CFG_VOCABS[10]["ALIAS"]="UNBIS_ES";
$CFG_VOCABS[10]["URL_BASE"]="https://vocabularyserver.com/unbis/es/services.php";
$CFG_VOCABS[10]["ALPHA"]=array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");


$CFG_VOCABS[11]["ALIAS"]="ARCH_FR";
$CFG_VOCABS[11]["URL_BASE"]="https://www.vocabularyserver.com/architectura/services.php";
$CFG_VOCABS[11]["ALPHA"]=array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");

$CFG_VOCABS[12]["ALIAS"]="CSO_EN";
$CFG_VOCABS[12]["URL_BASE"]="https://vocabularyserver.com/cso/services.php";
$CFG_VOCABS[12]["ALPHA"]=array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");

//EUROVOC
$CFG_VOCABS[13]["ALIAS"]="EUROVOC_ES";
$CFG_VOCABS[13]["URL_BASE"]="https://www.vocabularyserver.com/eurovoc/es/services.php";
$CFG_VOCABS[13]["ALPHA"]=array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z");



/*In almost cases, you don't need to touch nothing here!!*/

// Hide Notice warnings
//error_reporting(E_ERROR);
error_reporting(E_ERROR | E_WARNING | E_PARSE);



//Absolute path to the directory where are located /common/include.
if ( !defined('WEBTHES_ABSPATH') )
	/** Use this for version of PHP < 5.3 */
	define('WEBTHES_ABSPATH', dirname(__FILE__).'/');


if ( !defined('WEBTHES_PATH') )
		define('WEBTHES_PATH', '');

require_once('common/vocabularyservices.php');

if ((!isset($_SESSION['_PARAMS'])) || ($_GET["lc"]==1)){
	$_SESSION['_PARAMS']["target_x"] = $_GET["tx"];
	$_SESSION['_PARAMS']["vocab_id"] = loadVocabularyID($_GET["v"]);
	$_SESSION['_PARAMS']["URL_BASE"] = $CFG_VOCABS[$_SESSION['_PARAMS']["vocab_id"]]["URL_BASE" ];
	$_SESSION['_PARAMS']['LANG'] = configValue($_GET["lang"],$CFG["LANG_DEFAULT"],$CFG["LANGS"]); 
}

if ((!isset($_SESSION['_PARAMS']['LANG'])) || ($_GET["lang"]==1))
	$_SESSION['_PARAMS']['LANG'] = configValue(false,$CFG["LANG_DEFAULT"],$CFG["LANGS"]); 



require_once('common/lang/'.$_SESSION["_PARAMS"]["LANG"].'.php') ;


$URL_BASE=$_SESSION['_PARAMS']["URL_BASE"];

$CFG_URL_PARAM["fetchTerm"]		= '&amp;task=fetchTerm&amp;arg=';
$CFG_URL_PARAM["search"]		= '&amp;task=search&amp;arg=';
$CFG_URL_PARAM["letter"]		= '&amp;task=letter&amp;arg=';
$CFG_URL_PARAM["v"]		= 'index.php?v=';

//search strings with more than x chars
$CFG["MIN_CHAR_SEARCH"]=2;
?>
