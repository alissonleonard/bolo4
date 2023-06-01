<?php
namespace App\Policy;

use App\Model\Entity\Console;
use Authorization\IdentityInterface;

class ConsolePolicy
{
    public function canAdd(IdentityInterface $user, Console $console)
    {
        // All logged in users can create articles.
        return true;
    }

    public function canEdit(IdentityInterface $user, Console $console)
    {
        // logged in users can edit their own articles.
        return $this->isAuthor($user, $console);
    }

    public function canDelete(IdentityInterface $user, Console $console)
    {
        // logged in users can delete their own articles.
        return $this->isAuthor($user, $console);
    }

    protected function isAuthor(IdentityInterface $user, Console $console)
    {
        return $console->user_id === $user->getIdentifier();
    }
}