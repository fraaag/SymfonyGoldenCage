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
            'ListePrest' => array($this, 'block_ListePrest'),
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
                                <li><a  href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("produit");
        echo "\">Produits</a></li>
                                    <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("prestataire");
        echo "\">Espace perso</a></li>
                                    <li><a>Contact </a></li>
                            </ul>
                            
                              
  ";
    }

    // line 14
    public function block_ListePrest($context, array $blocks = array())
    {
        // line 15
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
        return array (  52 => 15,  49 => 14,  39 => 7,  35 => 6,  32 => 5,  29 => 4,);
    }
}
