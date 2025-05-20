<?php
namespace Regions;

use Region\RegionInterface;

class Arusha implements RegionInterface{
    public function districtsList():Array{
        return ['Arusha Jiji','Arusha Vijijini','Karatu','Longido','Ngorongoro','Meru','Monduli'];
    }
}