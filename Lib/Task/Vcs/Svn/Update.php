<?php
 /**
 * Perform a "svn update" on the given repository
 * 
 * PHP Version 5
 *
 * @category Build
 * @package  Usher
 * @author   Chris Cornutt <ccornutt@phpdeveloper.org>
 * @license  http://www.opensource.org/licenses/mit-license.php MIT
 * @link     http://github.com/enygma/usher
 */

namespace Lib\Task\Vcs\Svn;

/**
 * Class PullTask
 *
 * @category Build
 * @package  Usher
 * @author   Chris Cornutt <ccornutt@phpdeveloper.org>
 * @license  http://www.opensource.org/licenses/mit-license.php MIT
 * @link     http://github.com/enygma/usher
 */
class UpdateTask extends \Usher\Lib\Task
{
    /**
     * Default "git pull" command
     */
    private $_command = 'svn up';
    
    /**
     * Execute the task
     *
     * @return void
     */
    public function execute()
    {
        $destinationPath = $this->getOption('destinationPath'); 
        $currentDir      = getcwd();
        
        // change to the destination directory
        chdir($destinationPath);

        \Usher\Lib\Console\Execute::run($this->_command);

        // change back to our working directory
        chdir($currentDir);
    }

}


?>