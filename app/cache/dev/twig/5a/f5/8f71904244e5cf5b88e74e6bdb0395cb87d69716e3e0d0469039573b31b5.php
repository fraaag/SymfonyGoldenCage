<?php

/* EspritDemoBundle:Default:home.html.twig */
class __TwigTemplate_5af58f71904244e5cf5b88e74e6bdb0395cb87d69716e3e0d0469039573b31b5 extends Twig_Template
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

    // line 4
    public function block_auth($context, array $blocks = array())
    {
        // line 5
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">Inscription</a>
    <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">Authentification</a>
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        echo " 
    <div class=\"main\">
        \t<div class=\"slider-wrapper\">
                <div class=\"slider\">
                    <ul class=\"items\">
                        <li>
                            <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider-img1.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                        </li>
                        <li>
                            <img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slider-img2.jpg"), "html", null, true);
        echo "\" alt=\"\" />
                        </li>
                        <li>
                            <img src=\"";
        // line 20
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
        return array (  65 => 20,  59 => 17,  53 => 14,  43 => 8,  37 => 6,  32 => 5,  29 => 4,);
    }
}
