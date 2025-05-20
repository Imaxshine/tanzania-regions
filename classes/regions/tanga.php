<?php
namespace Regions;
use Region\RegionInterface;
class Tanga implements RegionInterface{
    public function districtsList(): array{
        return ['Tanga M','Handeni Mjini','Handeni Vijijini','Kilindi','Korogwe M','Korogwe V','Lushoto','Mkinga','Muheza','Pangani'];
        
    }
}