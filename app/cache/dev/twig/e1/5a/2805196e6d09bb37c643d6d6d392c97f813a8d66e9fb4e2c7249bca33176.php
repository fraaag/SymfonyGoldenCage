<?php

/* EspritDemoBundle:Client:ListePrestataire.html.twig */
class __TwigTemplate_e15a2805196e6d09bb37c643d6d6d392c97f813a8d66e9fb4e2c7249bca33176 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EspritDemoBundle::layout.html.twig");

        $this->blocks = array(
            'auth' => array($this, 'block_auth'),
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
    public function block_auth($context, array $blocks = array())
    {
        // line 4
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">Inscription</a>
    <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\">Authentification</a>
";
    }

    // line 9
    public function block_ListePrest($context, array $blocks = array())
    {
        // line 10
        echo "
    <section id=\"content\"><div class=\"ic\">More Website Templates @ TemplateMonster.com - January 09, 2012!</div>
        <div class=\"main\">
            <div class=\"container_12\">
                    <article class=\"grid_8\">
                    \t<div class=\"indent-left\">
                            <h2 class=\"indent-bot2\">Liste des prestataires </h2>
                            <div class=\"wrapper p3\">
                                <figure class=\"img-indent\">
                                    <p class=\"p1\"><a href=\"#\"><img class=\"img-border1\" src=";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/page1-img1.jpg"), "html", null, true);
        echo " alt=\"\"></a><span class=\"clear\"></span></p>
                                    <span class=\"text-1\">John Daniels</span>
                                </figure>
                                <div class=\"extra-wrap\">
                                    <blockquote class=\"q1\">
                                    \t<span class=\"quote-marker1\"></span>
                                        <div class=\"quote-bot\">
                                            <div class=\"quote-top\">
                                                <div class=\"quote\">
                                                    <div class=\"padding\">
                                                        <p class=\"p2\">blablabla
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </blockquote>
                                </div>
                            </div>
                            
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "EspritDemoBundle:Client:ListePrestataire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 19,  46 => 10,  43 => 9,  37 => 5,  32 => 4,  29 => 3,);
    }
}
