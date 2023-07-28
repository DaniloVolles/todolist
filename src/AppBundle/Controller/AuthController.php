<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AuthController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function login(){
        return $this->render("auth/login.html.twig");
    }
    
    /**
     * @Route("/signup", name="signin")
     */
    public function signup(){
        return $this->render("auth/signup.html.twig");
    }
}
