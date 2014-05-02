<?php

/* EspritDemoBundle:Admin:gest_prest.html.twig */
class __TwigTemplate_a67da68756cf036cd4217528fbf0dda6a418490617084a37c5375d19f71d4839 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EspritDemoBundle:Default:home.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EspritDemoBundle:Default:home.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Gestion Prestataire";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    aaaa
";
    }

    public function getTemplateName()
    {
        return "EspritDemoBundle:Admin:gest_prest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 5,  35 => 4,  29 => 2,);
    }
}
