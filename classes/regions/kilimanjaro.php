<?php
namespace Regions;
use Region\RegionInterface;
class Kilimanjaro implements RegionInterface{
    public function districtsList(): array{
        return ['Moshi M','Moshi V','Hai','Mwanga','Rombo','Same','Siha'];
        
    }
}