<?php
function connect()
{
    $user = "root";
    $password = "";
    $dns = "mysql:host=localhost;port=3306;dbname=geoworld;charset=utf8";
    $connection = new PDO($dns, $user, $password);
    $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $connection;
}

function getContinents(PDO $connection)
{
    $sql = "SELECT * FROM continents";
    $stmt = $connection->prepare($sql);
    $stmt->execute();
    $continents = $stmt->fetchAll();
    return $continents;
}

function getContinent(PDO $connection, $code)
{
    $sql = "SELECT * FROM continents WHERE code=?";
    $stmt = $connection->prepare($sql);
    $stmt->execute([$code]);
    $continent = $stmt->fetch();
    return $continent;
}

function getCountriesByContinent(PDO $connection, $code)
{
    $sql = "SELECT * FROM countries WHERE continent_code=?";
    $stmt = $connection->prepare($sql);
    $stmt->execute([$code]);
    $countries = $stmt->fetchAll();
    return $countries;
}

function getCountry(PDO $connection, $code)
{
    $sql = "SELECT * FROM countries WHERE code=?";
    $stmt = $connection->prepare($sql);
    $stmt->execute([$code]);
    $countries = $stmt->fetchAll();
    return $countries;
}