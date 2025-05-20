<?php
namespace Regions;
use Region\RegionInterface;
class Dar_es_salaam implements RegionInterface{
    public function districtsList(): array{
        return ['Ilala','Kinondoni','Temeke','Ubungo','Kigamboni'];
    }
}