<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_4ebec6690bff898feac44d658f1acc5bb1f68c92f15e4f2e07adc77454921dfb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        <div>
            ";
        // line 8
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 9
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username")), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 10
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 14
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 16
        echo "        </div>

        ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 19
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getContext($context, "messages"));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 20
                echo "                <div class=\"flash-";
                echo twig_escape_filter($this->env, $this->getContext($context, "type"), "html", null, true);
                echo "\">
                    ";
                // line 21
                echo twig_escape_filter($this->env, $this->getContext($context, "message"), "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
        <div>
            ";
        // line 27
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 29
        echo "        </div>
    </body>
</html>
";
    }

    // line 27
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 28
        echo "            ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  84 => 37,  110 => 40,  76 => 29,  134 => 66,  126 => 61,  114 => 42,  58 => 18,  113 => 54,  81 => 24,  100 => 27,  70 => 25,  23 => 1,  231 => 74,  228 => 73,  223 => 66,  206 => 49,  195 => 32,  192 => 31,  137 => 87,  118 => 76,  97 => 34,  34 => 6,  65 => 21,  53 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 65,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 38,  61 => 27,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 54,  119 => 48,  102 => 46,  71 => 29,  67 => 20,  63 => 24,  59 => 20,  38 => 5,  94 => 34,  89 => 32,  85 => 38,  75 => 30,  68 => 14,  56 => 21,  87 => 25,  21 => 2,  26 => 6,  93 => 29,  88 => 38,  78 => 34,  46 => 14,  27 => 4,  44 => 8,  31 => 9,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 37,  91 => 27,  62 => 19,  49 => 14,  24 => 1,  25 => 3,  19 => 2,  79 => 31,  72 => 21,  69 => 11,  47 => 12,  40 => 11,  37 => 7,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 56,  131 => 84,  123 => 47,  120 => 45,  115 => 43,  111 => 37,  108 => 36,  101 => 35,  98 => 45,  96 => 31,  83 => 31,  74 => 30,  66 => 15,  55 => 15,  52 => 15,  50 => 21,  43 => 9,  41 => 7,  35 => 4,  32 => 5,  29 => 8,  209 => 82,  203 => 78,  199 => 46,  193 => 73,  189 => 71,  187 => 4,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 70,  133 => 55,  130 => 41,  125 => 81,  122 => 43,  116 => 43,  112 => 43,  109 => 50,  106 => 50,  103 => 28,  99 => 46,  95 => 42,  92 => 42,  86 => 28,  82 => 31,  80 => 30,  73 => 19,  64 => 26,  60 => 22,  57 => 14,  54 => 16,  51 => 17,  48 => 9,  45 => 17,  42 => 10,  39 => 10,  36 => 10,  33 => 6,  30 => 3,);
    }
}
