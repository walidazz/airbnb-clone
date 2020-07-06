<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\AccountType;
use App\Entity\PasswordUpdate;
use App\Form\RegistrationType;
use App\Form\PasswordUpdateType;
use Symfony\Component\Form\FormError;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AccountController extends AbstractController
{
    /**
     * @Route("/account_login", name="account_login")
     */
    public function login(AuthenticationUtils $utils)
    {
        $error = $utils->getLastAuthenticationError();
        $username = $utils->getLastUsername();
        return $this->render('account/login.html.twig', [
            'Error' => $error !== null,
            'username' => $username
        ]);
    }


    /**
     * @Route("/logout", name="logout")
     */
    public function logout()
    {
        return $this->render('account/login.html.twig');
    }

    /**
     * @Route("/register", name="account_register")
     */
    public function register(Request $request, EntityManagerInterface $manager, UserPasswordEncoderInterface $encoder)
    {
        $user = new User();
        $form = $this->createForm(RegistrationType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $crypt = $encoder->encodePassword($user, $user->getPassword());
            $user->setHash($crypt);

            $user->setRoles('ROLE_USER');
            $manager->persist($user);
            $manager->flush();
            $this->addFlash('success', 'Inscription réussie ! ');
            return  $this->redirectToRoute('annonces');
        }

        return $this->render('account/registration.html.twig', [
            'form' => $form->createView()
        ]);
    }


    /**
     * @Route("account/profile/{slug}", name="edit_profile")
     * @IsGranted("ROLE_USER")
     */
    public function profile(User $user, Request $request, EntityManagerInterface $manager)
    {
        $form = $this->createForm(AccountType::class, $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $manager->persist($user);
            $manager->flush();
            $this->addFlash('success', 'modification effectué avec succès ! ');
            return $this->redirectToRoute('annonces');
        }
        return $this->render('account/profile.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/account/update-password", name="account_password")
     * @IsGranted("ROLE_USER")
     */
    public function updatePassword(Request $request, UserPasswordEncoderInterface $encoder, EntityManagerInterface $manager)
    {
        $user = $this->getUser();

        $passwordUpdate = new PasswordUpdate();
        $form = $this->createForm(PasswordUpdateType::class, $passwordUpdate);
        $form->handleRequest($request);

        if ($form->isSubmitted() &&  $form->isValid()) {
            if ($encoder->isPasswordValid($user, $passwordUpdate->getOldPassword())) {
                $newPassword = $passwordUpdate->getNewPassword();
                $newHash =  $encoder->encodePassword($user, $newPassword);
                $user->setHash($newHash);
                $manager->persist($user);
                $manager->flush();
                $this->addFlash('success', ' mot de passe modifié avec succès !');
                return $this->redirectToRoute('annonces');
            } else {
                $form->get('oldPassword')->addError(new FormError("ce n'est pas votre mot de passe actuel"));
            }
        }
        return $this->render('account/password.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/myProfile", name="profile_page")
     * @IsGranted("ROLE_USER")
     */
    public function myProfile()
    {
        $user = $this->getUser();
        return $this->render('user/index.html.twig', [
            'user' => $user
        ]);
    }




    /**
     * @Route("/account/myBookins", name="account_bookings")
     * @IsGranted("ROLE_USER")
     */
    public function bookings()
    {
        return $this->render('account/bookings.html.twig', []);
    }
}
