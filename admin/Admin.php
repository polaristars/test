<?php
require_once'Bdd.php';
class Admin extends Bdd
{
	public function whereisproject($placeholder)
	{
		$table ="user";
		$infos = ["`projets`" => "?", "`date`" => "?", "`screen_1`" => "?", "`links`"=>"?"] ;
		$condition = " WHERE `id_user` = 1";
		parent::modifier($table, $infos, $placeholder, $condition);
	}
}