<?php

$mixCheckResult = 'Update can not be applied';

if ('7.0.4' == $this->oDb->getOne("SELECT `VALUE` FROM `sys_options` WHERE `Name` = 'sys_tmp_version'"))
	$mixCheckResult = true;

return $mixCheckResult;

?>
