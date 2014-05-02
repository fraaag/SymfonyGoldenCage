<?php

/* EspritDemoBundle:Default:home.html.twig */
class __TwigTemplate_c19735235b250c422ae7b57a40282a5fac233005fccccc0b002a2a1528f60d2e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EspritDemoBundle::layout.html.twig");

        $this->blocks = array(
            'auth' => array($this, 'block_auth'),
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

    // line 5
    public function block_auth($context, array $blocks = array())
    {
        // line 6
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">Inscription</a>
    <a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">Authentification</a>
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        echo " 
    <div class=\"main\">
        \t<div class=\"slider-wrapper\">
                <div class=\"slider\">
                    <ul class=\"items\">
                        <li>
                            <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider-img1.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                        </li>
                        <li>
                            <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider-img2.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                        </li>
                        <li>
                            <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider-img3.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                        </li>
                    </ul>
                </div>
            </div>
        </div>
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
        return array (  65 => 21,  59 => 18,  53 => 15,  43 => 9,  37 => 7,  32 => 6,  29 => 5,);
    }
}
