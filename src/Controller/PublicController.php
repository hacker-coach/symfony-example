<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Repository\BillinRepository;
use App\Repository\BilloutRepository;
use App\Entity\Billin;
use App\Entity\Billout;

use App\Form\BillinType;
use App\Form\BilloutType;

/**
 *
 * @Route("/public")
 *
 */
class PublicController extends AbstractController
{

    /**
     * @Route("/billin/{uid}/{token}", requirements={"uid": "\d+"}, name="public_billin_show")
     * @Method("GET")
     */
    public function billinShow( Billin $bill,$token='')
    {
        $publicKey = file_get_contents('../var/cache/public.key');
        if(trim($publicKey)==trim($token)){
            return $this->render('public/billin_show.html.twig', [
                'bill' => $bill,'token' => $token
            ]);
        }else{
            return $this->redirectToRoute('security_login');
        }

    }




}
