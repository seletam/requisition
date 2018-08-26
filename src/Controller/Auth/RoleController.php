<?php
namespace App\Auth;
use Cake\Auth\BaseAuthorize;
use Cake\Network\Request;
use App\Model\Entity\User;
class RoleAuthorize extends BaseAuthorize
{
    public function authorize($user, Request $request)
    {
        $this->_user = $user;
        // assume false
        $authorized = false;
        // admins see everything, return immediately
        if ($this->userHasRole('admin')) {
            return true;
        }
        switch($request->params['controller']) {
            case 'Users':
                // check the action param to control for a specific controller action
                if ($request->params['action'] == 'logout') {
                    $authorized = true; // everyone can log out
                }
                break;
            case 'Money':
                // you need the finance role to see this entire controller/section
                if ($this->userHasRole('finance')) {
                    return true;
                }
            default: // by default, all logged in users have access to everything
                if (!empty($user)) {
                    $authorized = true;
                }
                break;
        }
        return $authorized;
    }
    protected function userHasRole($role) {
        if (isset($this->_user['roles']) && in_array($role, $this->_user['roles'])) {
            return true;
        }
        return false;
    }
}