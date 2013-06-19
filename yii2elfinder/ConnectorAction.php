<?php

 /**
 * This class is merely used to publish a TOC based upon the headings within a defined container
 * @copyright Frenzel GmbH - www.frenzel.net
 * @link http://www.frenzel.net
 * @author Philipp Frenzel <philipp@frenzel.net>
 *
 * don't forget to add the classmap to your index file!
 *
 * Original yii version by
 * @author z_bodya
 */

namespace yii2elfinder;

require_once(__DIR__ . '/php/elFinderConnector.class.php');
require_once(__DIR__ . '/php/elFinder.class.php');
require_once(__DIR__ . '/php/elFinderVolumeDriver.class.php');
require_once(__DIR__ . '/php/elFinderVolumeLocalFileSystem.class.php');

use Yii;
use \yii\base\Action;

use elFinder;
use elFinderConnector;

class ConnectorAction extends Action
{
    /**
     * @var array
     */
    public $clientOptions = array();

    public function run()
    {
        $fm = new elFinderConnector(new elFinder($this->clientOptions));
        $fm->run();

    }
}
