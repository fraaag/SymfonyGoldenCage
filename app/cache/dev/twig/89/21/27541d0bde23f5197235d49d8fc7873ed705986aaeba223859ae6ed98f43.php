<?php

/* EspritDemoBundle:Default:espaceprestataire.html.twig */
class __TwigTemplate_892127541d0bde23f5197235d49d8fc7873ed705986aaeba223859ae6ed98f43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EspritDemoBundle::layout.html.twig");

        $this->blocks = array(
            'nav1' => array($this, 'block_nav1'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EspritDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_nav1($context, array $blocks = array())
    {
        // line 5
        echo "                             <ul class=\"menu\">
                                <li><a class=\"active\" href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("Home_prestataire");
        echo "\">Acceuil</a></li>
                                <li><a  href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("produit");
        echo "\">Produits</a></li>
                                    <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("prestataire_show", array("id" => "1"));
        echo "\">Espace perso</a></li>
                                    <li><a>Contact </a></li>
                            </ul>
                            
  
     
                              
  ";
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        // line 18
        echo "

  ";
    }

    public function getTemplateName()
    {
        return "EspritDemoBundle:Default:espaceprestataire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 18,  55 => 17,  43 => 8,  39 => 7,  35 => 6,  32 => 5,  29 => 4,);
    }
}
