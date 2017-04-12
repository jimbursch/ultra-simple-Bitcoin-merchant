ultra simple Dash merchant

forked from https://github.com/zooitje/ultra-simple-bitcoin-merchant

this is a (very) simple Dash payment system in PHP written conform the Lazy API (https://en.bitcoin.it/wiki/Lazy_API)

features
- offer Bitcoin payments on your website in minutes
- quick setup
- easy configuration
- suitable for the incompetent webdeveloper
- few lines of code
// - multi language (french, spanish, portuguese, dutch, english)
// - multi currency (USD and EUR)
- no database
- no pesky filesystem rights issues
- no shopping cart
- no order handling
- no backend
- no formatting and stylesheets
- easy to implement in existing websites
- easy expandable
- no validation (not sure if that's a good thing ;-)

requirements
- PHP
- curl

setup
- copy the files to a webfolder
- communicate your url
- Dash!

customize
- you can just place a link on your website to offer Dash payments. here's an example of 0.5 USD or EUR you can copy paste to your website: 
<a href=payment.php?orderid=donation&ordertotal=0.5>donate BTC</a>
- you can change the currency from USD to EUR
- you can set the language



disclaimer
- this software is not fully tested 
- use it at your own risk
