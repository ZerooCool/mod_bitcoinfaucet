<?php
/**
 * Helper class for Bitcoin Faucet module
 * 
 * @package    Joomla.Tutorials
 * @subpackage Modules
 * @link http://docs.joomla.org/J3.x:Creating_a_simple_module/Developing_a_Basic_Module
 * @license        GNU/GPL, see LICENSE.php
 * mod_BitcoinFaucet is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */
class ModBitcoinFaucet
{
    /**
     * Retrieves the BitcoinFaucet message
     *
     * @param   array  $params An object containing the module parameters
     *
     * @access public
     */    
    public static function getBitcoinFaucet($params)
    {

		// Obtain a database connection
		$db = JFactory::getDbo();
		// Retrieve the shout - note we are now retrieving the id not the lang field.
		$query = $db->getQuery(true)
		            ->select($db->quoteName('BitcoinFaucet'))
		            ->from($db->quoteName('#__BitcoinFaucet'))
		            ->where('id = '. $db->Quote($params));
		// Prepare the query
		$db->setQuery($query);
		// Load the row.
		$result = $db->loadResult();
		// Return the Bitcoin Faucet Message
		return $result;
    }
}
