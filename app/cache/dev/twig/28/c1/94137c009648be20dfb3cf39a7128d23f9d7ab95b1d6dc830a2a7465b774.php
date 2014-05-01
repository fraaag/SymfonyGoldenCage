<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_28c194137c009648be20dfb3cf39a7128d23f9d7ab95b1d6dc830a2a7465b774 extends Twig_Template
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
        echo "Modifier Profil";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        $this->env->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
