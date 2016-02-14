<?php

namespace Crowd\CrowdRiseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CrowdController extends Controller
{
    public function acceuilAction()
    {
        return $this->render('CrowdRiseBundle:Default:acceuil/acceuil.html.twig');
    }
     public function freelancerAction()
    {
        return $this->render('CrowdRiseBundle:Default:acceuil/freelancer.html.twig');
    }
      public function Calendrier_evenementsAction()
    {
        return $this->render('CrowdRiseBundle:Default:Evenement/Calendrier_evenements.html.twig');
    }
      public function detail_evenementAction()
    {
        return $this->render('CrowdRiseBundle:Default:Evenement/detail_evenement.html.twig');
    }
      public function evenement_avenirAction()
    {
        return $this->render('CrowdRiseBundle:Default:Evenement/evenement_avenir.html.twig');
    }
    
      public function List_projetsAction()
    {
        return $this->render('CrowdRiseBundle:Default:Projets/List_projets.html.twig');
    }
    
    
     public function     detail_projetsAction()
    {
        return $this->render('CrowdRiseBundle:Default:Projets/detail_projets.html.twig');
    }
      public function     financement_projetsAction()
    {
        return $this->render('CrowdRiseBundle:Default:Projets/financement_projets.html.twig');
    }
    
      public function     contactAction()
    {
        return $this->render('CrowdRiseBundle:Default:Contact/contact.html.twig');
    }
    
      public function loginAction()
    {
          
        return $this->render('CrowdRiseBundle:Default:login/login.html.twig');
    }
    
       public function publier_projetAction()
    {
          
        return $this->render('CrowdRiseBundle:Default:Projets/publier_projet.html.twig');
    }
           public function connecteAction()
    {
          
        return $this->render('CrowdRiseBundle:Default:connecte/connecte.html.twig');
    }
    
    
}
