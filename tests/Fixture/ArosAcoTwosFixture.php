<?php

/**
 * CakePHP(tm) Tests <https://book.cakephp.org/2.0/en/development/testing.html>
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://book.cakephp.org/2.0/en/development/testing.html CakePHP(tm) Tests
 * @license       https://www.opensource.org/licenses/mit-license.php MIT License
 */

namespace Acl\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * Short description for class.
 *
 */
class ArosAcoTwosFixture extends TestFixture
{

    /**
     * records property
     *
     * @var array
     */
    public $records = [
        ['aro_id' => '1', 'aco_id' => '1', '_create' => '-1', '_read' => '-1', '_update' => '-1', '_delete' => '-1'],
        ['aro_id' => '2', 'aco_id' => '1', '_create' => '0', '_read' => '1', '_update' => '1', '_delete' => '1'],
        ['aro_id' => '3', 'aco_id' => '2', '_create' => '0', '_read' => '1', '_update' => '0', '_delete' => '0'],
        ['aro_id' => '4', 'aco_id' => '2', '_create' => '1', '_read' => '1', '_update' => '0', '_delete' => '-1'],
        ['aro_id' => '4', 'aco_id' => '6', '_create' => '1', '_read' => '1', '_update' => '0', '_delete' => '0'],
        ['aro_id' => '5', 'aco_id' => '1', '_create' => '1', '_read' => '1', '_update' => '1', '_delete' => '1'],
        ['aro_id' => '6', 'aco_id' => '3', '_create' => '-1', '_read' => '1', '_update' => '-1', '_delete' => '-1'],
        ['aro_id' => '6', 'aco_id' => '4', '_create' => '-1', '_read' => '1', '_update' => '-1', '_delete' => '1'],
        ['aro_id' => '6', 'aco_id' => '6', '_create' => '-1', '_read' => '1', '_update' => '1', '_delete' => '-1'],
        ['aro_id' => '7', 'aco_id' => '2', '_create' => '-1', '_read' => '-1', '_update' => '-1', '_delete' => '-1'],
        ['aro_id' => '7', 'aco_id' => '7', '_create' => '1', '_read' => '1', '_update' => '1', '_delete' => '0'],
        ['aro_id' => '7', 'aco_id' => '8', '_create' => '1', '_read' => '1', '_update' => '1', '_delete' => '0'],
        ['aro_id' => '7', 'aco_id' => '9', '_create' => '1', '_read' => '1', '_update' => '1', '_delete' => '1'],
        ['aro_id' => '7', 'aco_id' => '10', '_create' => '0', '_read' => '0', '_update' => '0', '_delete' => '1'],
        ['aro_id' => '8', 'aco_id' => '10', '_create' => '1', '_read' => '1', '_update' => '1', '_delete' => '1'],
        ['aro_id' => '8', 'aco_id' => '2', '_create' => '-1', '_read' => '-1', '_update' => '-1', '_delete' => '-1'],
        ['aro_id' => '9', 'aco_id' => '4', '_create' => '1', '_read' => '1', '_update' => '1', '_delete' => '-1'],
        ['aro_id' => '9', 'aco_id' => '9', '_create' => '0', '_read' => '0', '_update' => '1', '_delete' => '1'],
        ['aro_id' => '10', 'aco_id' => '9', '_create' => '1', '_read' => '1', '_update' => '1', '_delete' => '1'],
        ['aro_id' => '10', 'aco_id' => '10', '_create' => '-1', '_read' => '-1', '_update' => '-1', '_delete' => '-1'],
    ];
}
