<?php
/**
 * MobileDetectComponent
 *
 * A component for identifying mobile devices using the Mobile_Detect project.
 * https://github.com/serbanghita/Mobile-Detect
 *
 * PHP version 5
 *
 * @package		MobileDetectComponent
 * @author		Gregory Gaskill <gregory@chronon.com>
 * @license		MIT License (http://www.opensource.org/licenses/mit-license.php)
 * @link		https://github.com/chronon/CakePHP-MobileDetectComponent-Plugin
 */

App::uses('Component', 'Controller');
App::uses('MobileDetect', 'MobileDetect.Lib');

/**
 * MobileDetectComponent
 *
 * @package		MobileDetectComponent
 */
class MobileDetectComponent extends Component {

/**
 * Loads the Mobile_Detect class, runs the given Mobile_Detect method. Uses
 * 'isMobile' if no method given.
 *
 * @param string $method The method to run
 * @param string $args Optional arguments to the given method
 * @return mixed
 * @throws CakeException
 */
	public function detect($method = 'isMobile', $args = null) {
		if(!isset($MobileDetect))
			$MobileDetect = new MobileDetect();
		return $MobileDetect::detect($method, $args);
	}
}
