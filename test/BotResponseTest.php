<?php

	class BotResponseTest extends PHPUnit_Framework_TestCase {

		public function testClassExists() {
			$response = new BotResponse();
		}

		public function testStartReply() {
			$response = new BotResponse();
			$this->assertEquals("start command output", $response->reply("/start"));
		}

		public function testAvviaReply() {
			$response = new BotResponse();
			$this->assertEquals("start command output", $response->reply("/start start"));
		}

		public function testHelpReply() {
			$response = new BotResponse();
			$this->assertEquals("help command output", $response->reply("/help"));
		}

		public function testReverseReply() {
			$response = new BotResponse();
			$this->assertEquals("olleh", $response->reply("hello"));
		}
	}

?>
