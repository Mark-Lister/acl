<?php

/**
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @license       https://www.opensource.org/licenses/mit-license.php MIT License
 */

namespace Acl\Auth;

use Cake\Http\ServerRequest;

/**
 * An authorization adapter for AuthComponent. Provides the ability to authorize using the AclComponent,
 * If AclComponent is not already loaded it will be loaded using the Controller's ComponentRegistry.
 *
 * @see AuthComponent::$authenticate
 * @see AclComponent::check()
 */
class ActionsAuthorize extends BaseAuthorize
{

    /**
     * Authorize a user using the AclComponent.
     *
     * @param array $user The user to authorize
     * @param \Cake\Network\Request $request The request needing authorization.
     * @return bool
     */
    public function authorize($user, ServerRequest $request) :bool
    {
        $Acl = $this->_registry->load('Acl');
        $user = [$this->_config['userModel'] => $user];

        return $Acl->check($user, $this->action($request));
    }
}
