<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\User\UserChecker;

/**
 * Controller used to manage the application security.
 * See http://symfony.com/doc/current/cookbook/security/form_login_setup.html.
 *
 * @author Ryan Weaver <weaverryan@gmail.com>
 * @author Javier Eguiluz <javier.eguiluz@gmail.com>
 */
class SecurityController extends Controller
{
    /**
     * @Route("/login", name="security_login")
     */
    public function loginAction(Request $request)
    {
        $authenticationUtils = $this->get('security.authentication_utils');

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        $users = $this->getDoctrine()
        ->getRepository('AppBundle:User')
        ->findAll();

        return $this->render(
            'security/login.html.twig',
            array(
                // last username entered by the user
                'last_username' => $lastUsername,
                'error'         => $error,
                'users'         => $users
            )
        );
    }

    /**
     * This is the route the login form submits to.
     *
     * But, this will never be executed. Symfony will intercept this first
     * and handle the login automatically. See form_login in app/config/security.yml
     *
     * @Route("/login_check", name="security_login_check")
     */
    public function loginCheckAction(Request $request)
    {

        $username = $request->request->get("_username");
        $pwd = $request->request->get("_password");

        $userChecker = new UserChecker();

        $user = $this->getDoctrine()
        ->getRepository('AppBundle:User')
        ->findOneBy(array("username" => $username));

        if($user && in_array("ROLE_ADMIN", $user->getRoles())) {
            $_SESSION['current_user'] = $user;
            return $this->redirectToRoute('admin_index');
        } else {
             throw new \Exception('This should never be reached!');
        }


        // $user = $this->getDoctrine()
        //     ->getRepository('AppBundle:User')
        //     ->findOneByUsername($credentials['email']);
        
        // if ($user && $user->getIsActive()) {
        //     if (password_verify($credentials['password'], $user->getPassword())) {
        //         foreach ($user->getRoles() as $r) {
        //             $this->get('gl.login_service')->autoLogin($user, $r->getFirewall() . '_firewall');
        //         }
        //         $this->get('gl.login_service')->autoLogin($user, 'root_firewall');
                
        //         if ($user->getRoles()[0]->getRole() != 'ROLE_NOTHING') {
        //             if ($credentials['redirect'] == 0) {
        //                 return $this->redirect($this->generateUrl($credentials['route'], json_decode($credentials['route_params'], 1)));
        //             } else {    
        //                 if ($this->get('session')->has('goto_page') && $this->get('session')->get('goto_page') != ''){
        //                     return $this->redirect($this->get('session')->get('goto_page'));
        //                 }else{
        //                     return $this->redirect('/' . $user->getRoles()[0]->getFirewall() . '/');
        //                 }
        //             }
        //         } else {
        //             return $this->redirect('/');
        //         }
        //     } else {
        //         return $this->redirect('/');
        //     }
        // } else {
        //     $this->addFlash('error', 'Access denied! Bad credentials.');
        //     return $this->redirect('/');
        // }
    }

    /**
     * This is the route the user can use to logout.
     *
     * But, this will never be executed. Symfony will intercept this first
     * and handle the logout automatically. See logout in app/config/security.yml
     *
     * @Route("/logout", name="security_logout")
     */
    public function logoutAction()
    {
        throw new \Exception('This should never be reached!');
    }
}
