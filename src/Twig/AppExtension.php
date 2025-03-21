<?php

namespace App\Twig;

use Symfony\Component\Security\Core\Security;
use Twig\Extension\AbstractExtension;
use Twig\Extension\GlobalsInterface;

class AppExtension extends AbstractExtension implements GlobalsInterface
{
    private Security $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    public function getGlobals(): array
    {
        $user = $this->security->getUser();
        return [
            'user' => $user,
            'is_admin' => $user && in_array('ROLE_ADMIN', $user->getRoles(), true),
        ];
    }
}
