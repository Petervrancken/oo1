<?php
class ShipLoader
{
    private $pdo;

    private $dbDsn;

    private $dbUser;

    private $dbPass;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getShips()
    {
        $shipsData = $this->queryForShips();

        $ships = array();
        foreach ($shipsData as $shipData){
            $ships[] = $this->createShipFromData($shipData);
        }

        return $ships;
    }

    public function findOneById($id)
    {
        $pdo = $this->getPDO();
        $statement = $pdo->prepare('SELECT * FROM ship WHERE id= :id');
        $statement->execute(array('id' => $id));
        $shipArray = $statement->fetch(PDO::FETCH_ASSOC);


        if (!$shipArray){
            return null;
        }

        return $this->createShipFromData($shipArray);
    }

    private function createShipFromData(array $shipData)
    {
        $ship = new Ship($shipData['name']);
        $ship->setId($shipData['id']);
        $ship->setWeaponPower($shipData['weapon_power']);
        $ship->setJediFactor($shipData['jedi_factor']);
        $ship->setStrength($shipData['strength']);

        return $ship;
    }

    private function queryForShips()
    {
        $pdo = $this->getPDO();
        $statement = $pdo->prepare('SELECT * FROM ship');
        $statement->execute();
        $shipsArray = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $shipsArray;
    }

    /**
     * @return PDO
     */
    private function getPDO()
    {
        return $this->pdo;
    }
}