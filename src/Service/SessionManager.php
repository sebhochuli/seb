<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class SessionManager
{
    private Session $session;

    public function __construct()
    {
        $this->session = new Session();
        $this->session->start();
    }

    /**
     * Retourne le nom de l'utilisateur
     */
    public function getUsername(): string
    {
        return $this->session->get('username');
    }

    /**
     * Retourne vrai si l'utilisateur est connecté
     */
    public function isConnected(): bool
    {
        return $this->session->get('username') !== null;
    }

    /**
     * Déconnecte l'utilisateur
     */
    public function logout(Request $request)
    {
        $request->getSession()->invalidate();
        $this->session->set('username', null);
    }

    /**
     * Connecte l'utilisateur
     */
    public function setUsername(string $username)
    {
        $this->session->set('username', $username);
    }

}
