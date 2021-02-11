<?php
class ShipLoader
{
    public function getShips()
    {
        $ships = array();

        $ship = new Ship('Jedi Starfighter');
        //$ship->setName('Jedi Starfighter');
        $ship->setWeaponPower(5);
        $ship->setJediFactor(15);
        $ship->setStrength(30);
        $ships['starfighter'] = $ship;

        $ship2 = new Ship('Flat Starfighter');
        //$ship2->setName('Flat Starfighter');
        $ship2->setWeaponPower(2);
        $ship2->setJediFactor(2);
        $ship2->setStrength(70);
        $ships['flat_starfighter'] = $ship2;

        $ship3 = new Ship('Star Destroyer');
        //$ship3->setName('Star Destroyer');
        $ship3->setWeaponPower(70);
        $ship3->setJediFactor(0);
        $ship3->setStrength(500);
        $ships['star_destroyer'] = $ship3;

        $ship4 = new Ship('A-wing interceptor');
        //$ship4->setName('A-wing interceptor');
        $ship4->setWeaponPower(70);
        $ship4->setJediFactor(0);
        $ship4->setStrength(500);
        $ships['a_wing_interceptor'] = $ship4;

        return $ships;
    }
}