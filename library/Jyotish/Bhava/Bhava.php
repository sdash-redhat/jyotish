<?php
/**
 * @link      http://github.com/kunjara/jyotish for the canonical source repository
 * @license   GNU General Public License version 2 or later
 */

namespace Jyotish\Bhava;

/**
 * Class with Bhava names.
 *
 * @author Kunjara Lila das <vladya108@gmail.com>
 */
class Bhava {
	/**
	 * Array of all bhavas.
	 * 
	 * @var array 
	 * @see Maharishi Parashara. Brihat Parashara Hora Shastra. Chapter 7, Verse 37-38.
	 */
	static public $bhava = array(
		1 => 'Tanu',
		2 => 'Dhana',
		3 => 'Sahaja',
		4 => 'Sukha',
		5 => 'Putra',
		6 => 'Ari',
		7 => 'Yuvati',
		8 => 'Mrityu',
		9 => 'Dharma',
		10 => 'Karma',
		11 => 'Labha',
		12 => 'Vyaya',
	);
	
	/**
	 * Upachaya bhavas.
	 * 
	 * @var array
	 * @see Varahamihira. Brihat Jataka. Chapter 1, Verse 15.
	 */
	static public $bhavaUpachaya = array(3, 6, 10, 11);
	
	/**
	 * Kendra (chatustaya) bhavas.
	 * 
	 * @var array
	 * @see Varahamihira. Brihat Jataka. Chapter 1, Verse 17.
	 */
	static public $bhavaKendra = array(1, 4, 7, 10);
	
	/**
	 * Trikon bhavas.
	 * 
	 * @var array
	 */
	static public $bhavaTrikon = array(1, 5, 9);
	
	/**
	 * Dusthana bhavas.
	 * 
	 * @var array
	 */
	static public $bhavaDusthana = array(6, 8, 12);

	/**
	 * Devanagari 'bhava' in transliteration.
	 * 
	 * @var array
	 * @see Jyotish\Alphabet\Devanagari
	 */
	static public $translit = array(
		'bha','aa','va'
	);

	/**
	 * Returns the requested instance of bhava class.
	 * 
	 * @param int $number The number of bhava
	 * @param null|array $options (Optional) Options to set
	 * @return the requested instance of bhava class
	 * @throws Exception\InvalidArgumentException
	 */
	static public function getInstance($number, $options = null) {
		if (array_key_exists($number, self::$bhava)) {
			$bhavaClass = 'Jyotish\\Bhava\\Object\\B' . $number;
			$bhavaObject = new $bhavaClass($options);

			return $bhavaObject;
		} else {
			throw new Exception\InvalidArgumentException("Bhava with the number '$number' does not exist.");
		}
	}

}