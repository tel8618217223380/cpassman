<?php
/**
 * @file 		views.queries.php
 * @author		Nils Laumaill�
 * @version 	2.0
 * @copyright 	(c) 2009-2011 Nils Laumaill�
 * @licensing 	CC BY-ND (http://creativecommons.org/licenses/by-nd/3.0/legalcode)
 * @link		http://cpassman.org
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */

include('../includes/settings.php');
header("Content-type: text/html; charset=utf-8");

require_once '../includes/libraries/crypt/aes.class.php';     // AES PHP implementation
require_once '../includes/libraries/crypt/aesctr.class.php';  // AES Counter Mode implementation

// connect to the server
require_once("../sources/class.database.php");
$db = new Database($server, $user, $pass, $database, $pre);
$db->connect();

//get backups infos
$rows = $db->fetch_all_array("SELECT * FROM ".$pre."misc WHERE type = 'settings'");
foreach( $rows as $reccord ){
	$settings[$reccord['intitule']] = $reccord['valeur'];
}

if (!empty($settings['bck_script_filename']) && !empty($settings['bck_script_path'])) {
	//get all of the tables
	$tables = array();
	$result = mysql_query('SHOW TABLES');
	while($row = mysql_fetch_row($result))
	{
		$tables[] = $row[0];
	}

	$return = "";

		//cycle through each table and format the data
	foreach($tables as $table)
	{
		$result = mysql_query('SELECT * FROM '.$table);
		$num_fields = mysql_num_fields($result);

		$return.= 'DROP TABLE '.$table.';';
		$row2 = mysql_fetch_row(mysql_query('SHOW CREATE TABLE '.$table));
		$return.= "\n\n".$row2[1].";\n\n";

		for ($i = 0; $i < $num_fields; $i++)
		{
			while($row = mysql_fetch_row($result))
			{
				$return.= 'INSERT INTO '.$table.' VALUES(';
				for($j=0; $j<$num_fields; $j++)
				{
					$row[$j] = addslashes($row[$j]);
					$row[$j] = preg_replace('/\n/','/\\n/',$row[$j]);
					if (isset($row[$j])) { $return.= '"'.$row[$j].'"' ; } else { $return.= '""'; }
					if ($j<($num_fields-1)) { $return.= ','; }
				}
				$return.= ");\n";
			}
		}
		$return.="\n\n\n";
	}

	if (!empty($settings['bck_script_key'])) {
		$return = AesCtr::encrypt($return, $settings['bck_script_key'], 256);
	}

	//save the file
	$handle = fopen($settings['bck_script_path'].'/'.$settings['bck_script_filename'].'-'.time().'.sql','w+');
	fwrite($handle,$return);
	fclose($handle);
}



?>