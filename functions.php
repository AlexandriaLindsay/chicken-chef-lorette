<?php
function getConnect()
{
  $dbh = new PDO(DB_DSN, DB_USER, DB_PASS);
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  return $dbh;
}

function getCoupons($dbh)
{
  $query = "SELECT
            *
            FROM
            coupons";

  $params = [];

  $stmt = $dbh->prepare($query);

  $stmt->execute($params);

  $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

  return $results;
}

function getSpecials($dbh)
{
  $query = "SELECT
            *
            FROM
            specials";

  $params = [];

  $stmt = $dbh->prepare($query);

  $stmt->execute($params);

  $specials = $stmt->fetchAll(PDO::FETCH_ASSOC);

  return $specials;
}

function getPromos($dbh)
{
  $query = "SELECT
            *
            FROM
            promotions";

  $params = [];

  $stmt = $dbh->prepare($query);

  $stmt->execute($params);

  $specials = $stmt->fetchAll(PDO::FETCH_ASSOC);

  return $specials;
}
