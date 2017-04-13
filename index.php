<?php

include("lib/config.php");


$ticker = $coinmarketcap->ticker();
$btcprice = $ticker['return']['last_all']['value'];

echo '<center><br><br><img src="weAcceptBitcoin.png"><br><br><br><br>'.$lang_currentprice.round($btcprice,2).' '.$currency;
echo '<hr>';
echo '<a href=payment.php?orderid=0.5_'.$lang_orderlabel.'&ordertotal=0.5>';
	echo $lang_pay.' '.round(0.5/$btcprice,3).' BTC (0.5 '.$currency.')';
echo '</a>';
echo '<br>';
echo '<a href=payment.php?orderid=1.0_';
echo $lang_orderlabel;
echo '&ordertotal=1.0>';
echo $lang_pay . " " . round(1.0/$btcprice,3) ." BTC (1.0 " . $currency .') ';
echo '<hr>';
echo $lang_customtotal;
echo '<br>';
echo '<form action="payment.php" method="get">';
echo '<input type="hidden" name="orderid" value="'.$lang_orderlabel.'" />';
echo '<input type="text" name="ordertotal" value='1.5'> <?echo $currency;?><br>
echo '<input type='submit' value="'.$lang_topaymentsite.'" />'; 
echo '</form>';

?>



http://chainz.cryptoid.info/dash/api.dws?q=multiaddr&active=Xfh48kkftKnvwPRwPSponzUE2zcMzrHgWj&key=CRYPTOID_API_KEY

