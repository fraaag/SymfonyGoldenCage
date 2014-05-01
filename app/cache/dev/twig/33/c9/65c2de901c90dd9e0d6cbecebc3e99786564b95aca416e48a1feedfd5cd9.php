<?php

/* EspritDemoBundle:Default:home.html.twig */
class __TwigTemplate_33c965c2de901c90dd9e0d6cbecebc3e99786564b95aca416e48a1feedfd5cd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EspritDemoBundle::layout.html.twig");

        $this->blocks = array(
            'auth' => array($this, 'block_auth'),
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

    // line 5
    public function block_auth($context, array $blocks = array())
    {
        // line 6
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">Inscription</a>
     
";
    }

    public function getTemplateName()
    {
        return "EspritDemoBundle:Default:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 6,  28 => 5,);
    }
}
