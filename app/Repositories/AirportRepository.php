<?php

namespace App\Repositories;

use App\Interfaces\AirlineRepositoryInterface;
use App\Models\Airport;

class AirportRepository implements AirportRepositoryInterface
{
    public function getAllAirport()
    {
        return Airport::all();
    }

    public function getAirportBySlug($slug)
    {
        return Airport::where('slug', $slug)->first();
    }

    public function getAirportByIataCode($iataCode)
    {
        return Airport::where('iata_code', $iataCode)->first();
    }
    
}