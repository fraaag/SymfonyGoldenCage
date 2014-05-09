<?php

/* EspritDemoBundle:Prestataire:show.html.twig */
class __TwigTemplate_aaf73b4f03fb88bc637d47589fb4f47b551a89a50f2953cfbdc36b85ec2ad119 extends Twig_Template
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
        echo "Espace Personnel
";
    }

    // line 6
    public function block_nav1($context, array $blocks = array())
    {
        // line 7
        echo "                             <ul class=\"menu\">
                                <li><a  href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("Home_prestataire");
        echo "\">Acceuil</a></li>
                                <li><a   href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("produit");
        echo "\">Produits</a></li>
                                    <li><a class=\"active\" href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("prestataire_show", array("id" => "1"));
        echo "\">Espace perso</a></li>
                                    <li><a>Contact </a></li>
                            </ul>
                            
  
     
                              
  ";
    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        // line 19
        echo "<h1>Prestataire</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Adresse</th>
                <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "adresse"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Adressmail</th>
                <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "adressmail"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fax</th>
                <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "fax"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Gsm</th>
                <td>";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "gsm"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Login</th>
                <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "login"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Motdepasse</th>
                <td>";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "motdepasse"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nomsociete</th>
                <td>";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "nomsociete"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Photo</th>
                <td>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "photo"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Presentation</th>
                <td>";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "presentation"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Siteweb</th>
                <td>";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "siteweb"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tel</th>
                <td>";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "tel"), "html", null, true);
        echo "</td>
            </tr>
           ";
        // line 71
        echo "        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("prestataire");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("prestataire_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 85
        echo         $this->env->getExtension('form')->renderer->renderBlock($this->getContext($context, "delete_form"), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "EspritDemoBundle:Prestataire:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 85,  165 => 81,  157 => 76,  150 => 71,  145 => 65,  138 => 61,  131 => 57,  124 => 53,  117 => 49,  110 => 45,  103 => 41,  96 => 37,  89 => 33,  82 => 29,  75 => 25,  67 => 19,  64 => 18,  52 => 10,  48 => 9,  44 => 8,  41 => 7,  38 => 6,  33 => 4,  30 => 3,);
    }
}
