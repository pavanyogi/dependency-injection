<?php

interface GeolocationService
{
    public function getCoordinatesFromAddress($address);
}

class GoogleMaps implements GeolocationService
{
    public function getCoordinatesFromAddress($address)
    {
        // calls Google Maps webservice
        var_dump('getCoordinatesFromAddress GoogleMaps: ' . $address);
    }
}

class OpenStreetMap implements GeolocationService
{
    public function getCoordinatesFromAddress($address)
    {
        // calls OpenStreetMap webservice
        var_dump('getCoordinatesFromAddress OpenStreetMap: ' . $address);
    }
}

class StoreService
{
    private $geolocationService;

    public function __construct(GeolocationService $geolocationService)
    {
        $this->geolocationService = $geolocationService;
    }

    public function getStoreCoordinates($store)
    {
        return $this
            ->geolocationService
            ->getCoordinatesFromAddress($store);
    }
}

$store = new StoreService(new GoogleMaps);
$store->getStoreCoordinates('store');

$store = new StoreService(new OpenStreetMap);
$store->getStoreCoordinates('store');

