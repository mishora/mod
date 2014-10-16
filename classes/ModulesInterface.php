<?php

Interface ModulesInterface
{
	public function sendRequest($in_msg, $data, $publicAccess = true);
	public function getResponse();
}
