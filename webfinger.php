<?php
if (
  isset($_GET["resource"])
  &&
  strtolower($_GET["resource"]) == ("cas@atico.ga" || "acct:cas@atico.ga")
) {
  header("Content-type: application/json");
  die('{"subject":"acct:cas@atico.ga","aliases":["https://ieji.de/@Lu","https://ieji.de/users/Lu"],"links":[{"rel":"http://webfinger.net/rel/profile-page","type":"text/html","href":"https://ieji.de/@Lu"},{"rel":"self","type":"application/activity+json","href":"https://ieji.de/users/Lu"},{"rel":"http://ostatus.org/schema/1.0/subscribe","template":"https://ieji.de/authorize_interaction?uri={uri}"}]}');
}
