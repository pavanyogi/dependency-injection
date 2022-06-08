<?php

class GoogleMaps
{
    public function getCoordinatesFromAddress($address)
    {
        // calls Google Maps webservice
        var_dump('getCoordinatesFromAddress GoogleMaps: ' . $address);
    }
}

class OpenStreetMap
{
    public function getCoordinatesFromAddress($address)
    {
        // calls OpenStreetMap webservice
        var_dump('getCoordinatesFromAddress OpenStreetMap: ' . $address);
    }
}

class StoreService
{

    public function __construct()
    {

    }

    public function getStoreCoordinates($store)
    {
        // $geolocationService = new GoogleMaps();
        /*
         * Now we want to use the OpenStreetMap instead of GoogleMaps,
         * how do we do? We have to change the code of StoreService, and all
         * the other classes that use GoogleMaps.
         * Without dependency injection, your classes are tightly coupled to their dependencies.
        */
        $geolocationService = new OpenStreetMap();
        // or $geolocationService = GoogleMaps::getInstance() if you use singletons
        // return $geolocationService->getCoordinatesFromAddress($store->getAddress());
        return $geolocationService->getCoordinatesFromAddress($store);
    }
}

$store = new StoreService();
$store->getStoreCoordinates('store');

