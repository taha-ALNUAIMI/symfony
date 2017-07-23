<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class GitHutController extends Controller
{
    /**
     * @Route("/", name="githut")
     */
    public function githutAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('githut/index.html.twig',[
            'ahmed'=>"../img/ahmed.jpg",
            'nname' =>'taha',
            'login'=>'logon-taha',
            'details'=>[
            'cpmpany'=>'ddddd',
            'location'=>'llllllllll',
            'joined-on'=>'gggggggg'
            ],
            'blog'=>'wwwwwww',
            'social_data' => [
            "public Repos"=>11,
            "Followers"=>0,
            "Following"=>0,
            ]
            ]);
    }
   
}
