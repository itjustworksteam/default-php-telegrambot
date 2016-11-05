<?php

	class BotResponse {

		public function reply($text, $choise = null){

			$response = "";

			if($text == "/start" || $text == "/start start"){
				$response = "start command output";
			} else if($text == "/help" || $text == "HELP") {
				$response = "help command output";
			} else {
				$response = strrev($text);
			}			
			return $response;
		}

	}

?>
