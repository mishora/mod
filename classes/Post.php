<?php

require_once 'ModulesInterface.php';

class Post implements ModulesInterface
{
	private $in_msg;
	private $data;
	private $publicAccess;
	protected $out_msg;

	public function sendRequest($in_msg, $data, $publicAccess = true)
	{
		$this->in_msg = $in_msg;
		$this->data = $data;
		$this->publicAccess = $publicAccess;

		$this->work();
	}

	public function getResponse()
	{
		return $this->out_msg;
	}

	private function work()
	{
		$this->out_msg = "Post sey: " . ($this->data[0] + $this->data[1]);
	}
}
