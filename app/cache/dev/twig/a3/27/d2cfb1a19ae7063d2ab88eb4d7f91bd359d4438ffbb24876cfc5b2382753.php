<?php

/* EspritDemoBundle:Default:espaceprestataire.html.twig */
class __TwigTemplate_a327d2cfb1a19ae7063d2ab88eb4d7f91bd359d4438ffbb24876cfc5b2382753 extends Twig_Template
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

    // line 3
    public function block_nav1($context, array $blocks = array())
    {
        // line 4
        echo "                            <ul class=\"menu\">
                                <li><a   href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("produit");
        echo "\">Produit</a></li>
                                    <li><a>Espace perso</a></li>
                                   
                            </ul>
                              </ul>
  ";
    }

    // line 12
    public function block_ListePrest($context, array $blocks = array())
    {
        // line 13
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
        return array (  48 => 13,  45 => 12,  35 => 5,  32 => 4,  29 => 3,);
    }
}
