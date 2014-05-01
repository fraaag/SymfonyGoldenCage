<?php

/* EspritDemoBundle:Admin:gest_prest.html.twig */
class __TwigTemplate_7abe9cbba22e8964049a5f969c0db0ca84960226f853fa1c64c040fafe15876a extends Twig_Template
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
