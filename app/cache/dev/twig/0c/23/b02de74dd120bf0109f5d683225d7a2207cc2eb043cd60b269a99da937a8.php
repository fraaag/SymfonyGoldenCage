<?php

/* EspritDemoBundle:Produit:show.html.twig */
class __TwigTemplate_0c23b02de74dd120bf0109f5d683225d7a2207cc2eb043cd60b269a99da937a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EspritDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'nav1' => array($this, 'block_nav1'),
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "nomproduit"), "html", null, true);
        echo "
";
    }

    // line 6
    public function block_nav1($context, array $blocks = array())
    {
        // line 7
        echo "                            <ul class=\"menu\">
                                <li><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("Home_prestataire");
        echo "\">Acceuil</a></li>
                                <li><a class=\"active\"  href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("produit");
        echo "\">Produits</a></li>
                                <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("prestataire_show", array("id" => "1"));
        echo "\">Espace perso</a></li>
                                   
                            </ul>
                            
  ";
    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        // line 17
        echo "<h2 style=\"padding-left:280px \">Details de ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "nomproduit"), "html", null, true);
        echo "</h2>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Nomproduit</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "nomproduit"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Photo</th>
                <td class=\"khaled\"><img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "photo"), "html", null, true);
        echo "\"/></td>
            </tr>
            <tr>
                <th>Coutproduit</th>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "coutproduit"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Coutsolde</th>
                <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "coutsolde"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Descriptionproduit</th>
                <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "descriptionproduit"), "html", null, true);
        echo "</td>
            </tr>
           ";
        // line 45
        echo "        </tbody>
    </table>

       
        <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("produit");
        echo "\">
           <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/voir.png"), "html", null, true);
        echo "\" alt=\"\" />
        </a>
    
        <a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("produit_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
   
    ";
        // line 57
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "delete_form"), 'form');
        echo "

";
    }

    public function getTemplateName()
    {
        return "EspritDemoBundle:Produit:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 57,  124 => 53,  118 => 50,  114 => 49,  108 => 45,  103 => 39,  96 => 35,  89 => 31,  82 => 27,  75 => 23,  65 => 17,  62 => 16,  53 => 10,  49 => 9,  45 => 8,  42 => 7,  39 => 6,  33 => 4,  30 => 3,);
    }
}
