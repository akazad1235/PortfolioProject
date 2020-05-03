<?php
	function setMessage($type, $message){
		session()->flash('type', $type);
		session()->flash('message', $message);
	}

?>