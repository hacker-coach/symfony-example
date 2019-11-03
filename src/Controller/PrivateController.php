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
 * @Route("/private")
 * @Security("has_role('ROLE_ADMIN')")
 *
 */
class PrivateController extends AbstractController
{
    /**
     * @Route("/", name="private")
     */
    public function index()
    {
        return $this->redirectToRoute('private_billin');
    }

    /**
     * @Route("/billin", name="private_billin")
     */
    public function billin(BillinRepository $billinRepository)
    {
        $billins = $billinRepository->findBy( [], ['uid' => 'DESC']);
        $token = md5(time());
        file_put_contents('../var/cache/public.key',$token);
        return $this->render('private/billin.html.twig', ['bills' => $billins,'token' => $token]);
    }


    /**
     * @Route("/billin/{uid}", requirements={"uid": "\d+"}, name="private_billin_show")
     * @Method("GET")
     */
    public function billinShow( Billin $bill)
    {
        return $this->render('private/billin_show.html.twig', [
            'bill' => $bill
        ]);
    }

    /**
     *
     * @Route("/billin/{uid}/edit", requirements={"uid": "\d+"}, name="private_billin_edit")
     * @Method({"GET", "POST"})
     */
    public function billinEdit(Request $request, Billin $bill): Response
    {
        $form = $this->createForm(BillinType::class, $bill)->add('save', SubmitType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('private_billin');
        }

        return $this->render('private/billin_edit.html.twig', [
            'bill' => $bill,
            'form' => $form->createView(),
        ]);
    }

    /**
     *
     * @Route("/billin/new", name="private_billin_new")
     * @Method({"GET", "POST"})
     *
     */
    public function billinNew(Request $request): Response
    {
        $bill = new Billin();

        $form = $this->createForm(BillinType::class, $bill)
            ->add('save', SubmitType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $bill->setTimest(new \DateTime());
            $em->persist($bill);
            $em->flush();

            return $this->redirectToRoute('private_billin');
        }

        return $this->render('private/billin_new.html.twig', [
            'bill' => $bill,
            'form' => $form->createView(),
        ]);
    }












    /**
     * @Route("/billout", name="private_billout")
     */
    public function billout(BilloutRepository $billoutRepository)
    {
        $billouts = $billoutRepository->findBy( [], ['uid' => 'DESC']);
        return $this->render('private/billout.html.twig', ['bills' => $billouts]);
    }


    /**
     * @Route("/billout/{uid}", requirements={"uid": "\d+"}, name="private_billout_show")
     * @Method("GET")
     */
    public function billoutShow( Billout $bill)
    {
        return $this->render('private/billout_show.html.twig', [
            'bill' => $bill
        ]);
    }

    /**
     *
     * @Route("/billout/{uid}/edit", requirements={"uid": "\d+"}, name="private_billout_edit")
     * @Method({"GET", "POST"})
     */
    public function billoutEdit(Request $request, Billout $bill): Response
    {
        $form = $this->createForm(BilloutType::class, $bill)->add('save', SubmitType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('private_billout');
        }

        return $this->render('private/billout_edit.html.twig', [
            'bill' => $bill,
            'form' => $form->createView(),
        ]);
    }

    /**
     *
     * @Route("/billout/new", name="private_billout_new")
     * @Method({"GET", "POST"})
     *
     */
    public function billoutNew(Request $request): Response
    {
        $bill = new Billout();

        $form = $this->createForm(BilloutType::class, $bill)
            ->add('save', SubmitType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $bill->setTimest(new \DateTime());
            $em->persist($bill);
            $em->flush();

            return $this->redirectToRoute('private_billout');
        }

        return $this->render('private/billout_new.html.twig', [
            'bill' => $bill,
            'form' => $form->createView(),
        ]);
    }

}
