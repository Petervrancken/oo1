<?php
require_once __DIR__ . '/lib/Model/AbstractShip.php';
require_once __DIR__ . '/lib/Model/Ship.php';
require_once __DIR__ . '/lib/Model/RebelShip.php';
require_once __DIR__ . '/lib/Model/BrokenShip.php';
require_once __DIR__ . '/lib/Service/BattleManager.php';
require_once __DIR__ . '/lib/Service/ShipStorageInterface.php';
require_once __DIR__ . '/lib/Service/PdoShipStorage.php';
require_once __DIR__ . '/lib/Service/JsonFileShipStorage.php';
require_once __DIR__ . '/lib/Service/ShipLoader.php';
require_once __DIR__ . '/lib/Model/BattleResult.php';
require_once __DIR__ . '/lib/Service/Container.php';



$configuration = array(
    'db_dsn' => 'mysql:host=localhost;dbname=oo_battle',
    'db_user' => 'root',
    'db_pass' => 'Mywampstack1988',
);

/*function get_ships()
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

    return $ships;*/

    /*return array(
        'starfighter' => array(
            'name' => 'Jedi Starfighter',
            'weapon_power' => 5,
            'jedi_factor' => 15,
            'strength' => 30,
        ),
        'cloakshape_fighter' => array(
            'name' => 'CloakShape Fighter',
            'weapon_power' => 2,
            'jedi_factor' => 2,
            'strength' => 70,
        ),
        'super_star_destroyer' => array(
            'name' => 'Super Star Destroyer',
            'weapon_power' => 70,
            'jedi_factor' => 0,
            'strength' => 500,
        ),
        'rz1_a_wing_interceptor' => array(
            'name' => 'RZ-1 A-wing interceptor',
            'weapon_power' => 4,
            'jedi_factor' => 4,
            'strength' => 50,
        ),
    );
}*/

/**
 * Our complex fighting algorithm!
 *
 * @return array With keys winning_ship, losing_ship & used_jedi_powers
 */
/*function battle(Ship $ship1, $ship1Quantity, Ship $ship2, $ship2Quantity)
{
    $ship1Health = $ship1->getStrength() * $ship1Quantity;
    $ship2Health = $ship2->getStrength() * $ship2Quantity;

    $ship1UsedJediPowers = false;
    $ship2UsedJediPowers = false;
    while ($ship1Health > 0 && $ship2Health > 0) {
        // first, see if we have a rare Jedi hero event!
        if (didJediDestroyShipUsingTheForce($ship1)) {
            $ship2Health = 0;
            $ship1UsedJediPowers = true;

            break;
        }
        if (didJediDestroyShipUsingTheForce($ship2)) {
            $ship1Health = 0;
            $ship2UsedJediPowers = true;

            break;
        }

        // now battle them normally
        $ship1Health = $ship1Health - ($ship2->getWeaponPower() * $ship2Quantity);
        $ship2Health = $ship2Health - ($ship1->getWeaponPower() * $ship1Quantity);
    }

    if ($ship1Health <= 0 && $ship2Health <= 0) {
        // they destroyed each other
        $winningShip = null;
        $losingShip = null;
        $usedJediPowers = $ship1UsedJediPowers || $ship2UsedJediPowers;
    } elseif ($ship1Health <= 0) {
        $winningShip = $ship2;
        $losingShip = $ship1;
        $usedJediPowers = $ship2UsedJediPowers;
    } else {
        $winningShip = $ship1;
        $losingShip = $ship2;
        $usedJediPowers = $ship1UsedJediPowers;
    }

    return array(
        'winning_ship' => $winningShip,
        'losing_ship' => $losingShip,
        'used_jedi_powers' => $usedJediPowers,
    );
}*/

