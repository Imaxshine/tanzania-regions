<?php
namespace Regions;
use Region\RegionInterface;
class Dodoma implements RegionInterface{
    public function districtsList(): array{
        return ['Dodoma Mjini','Bahi','Chamwino','Chemba','Kondoa','Kongwa','Mpwapwa'];
    }
}