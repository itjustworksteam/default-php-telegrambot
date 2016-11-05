# default-php-telegrambot

[![Build Status](https://travis-ci.org/itjustworksteam/default-php-telegrambot.svg?branch=master)](https://travis-ci.org/itjustworksteam/default-php-telegrambot)

## GETTING STARTED

On Telegram:

* start a chat with the BotFather
* use the command ```/newbot``` to create a new bot
* give it a name
* give it a unique identifier that ends with the word ```bot```
* Remember the bot token that Telegram gives to you if all go right

On your laptop/server:

* clone the repo
* open the file ```connect.inc.php``
* insert the Telegram token and a version if you want
* upload the code to your server or run it locally
* set the webhook for the bot with this command ```php setwebhook.php <YOUR_SERVER_URL>/botpost345.php```

I recommend to see the [Telegram API](https://core.telegram.org/bots/api)
