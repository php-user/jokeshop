<?php

namespace Admin\Controller\Plugin;

use Zend\Mvc\Controller\Plugin\AbstractPlugin;

class GetAccess extends AbstractPlugin
{
    private $ormAuthService;

    public function __construct($ormAuthService)
    {
        $this->ormAuthService = $ormAuthService;
    }

    public function __invoke()
    {
        $user = $this->ormAuthService->getIdentity();

        if ($user && ($user->getRole() === 'admin' || $user->getRole() === 'superadmin')) {
            return true;
        }

        die('Access denied');
    }
}
