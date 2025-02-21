<?php

require_once SCRIPT_BASECLASSES . '/DatabaseReaderBase.php';

/**
 * DatabaseReader
 * 
 * Class that reads information from the database and converts the result
 * 
 * @author Raoul de Grunt
 * @package Final Fantasy XII
 * @uses DatabaseReaderBase 1.0.0
 * @version 1.2.0
 */
class BazaarSheetDatabaseReader extends DatabaseReaderBase
{
    /**
     * Constructor
     * 
     * Set the properties
     */
    public function __construct()
    {
        $this->setClassProperties();
    }

    /**
     * Get the loot required for the specified bazaar item
     * 
     * @param string $bazaarName The name of the bazaar item
     * @return BazaarLoot[]
     */
    public function getBazaarLoot(string $bazaarName): array
    {
        $select = array('Loot.Name', 'BazaarLoot.Amount', 'Loot.SheetRow AS LootSheetRow', 'Bazaar.SheetRow AS BazaarSheetRow');
        return $this->runGetBazaarLoot($select, $bazaarName);
    }
}