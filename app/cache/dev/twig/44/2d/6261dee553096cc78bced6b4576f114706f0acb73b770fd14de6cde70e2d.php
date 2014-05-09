<?php

/* EspritDemoBundle:Produit:index.html.twig */
class __TwigTemplate_442d6261dee553096cc78bced6b4576f114706f0acb73b770fd14de6cde70e2d extends Twig_Template
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
        echo "Liste des produits
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

    // line 15
    public function block_body($context, array $blocks = array())
    {
        // line 16
        echo "<h2 style=\"margin-left:550px\">Liste des produits</h2>

<table  cellspacing=\"0\" >
        <thead>
            <tr>
                <th>Nomproduit</th>
                <th>Coutproduit</th>
                <th>Coutsolde</th>
                <th>Descriptionproduit</th>
               <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 30
            echo "      
            <tr  class=\"khaled\">
                <td><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("produit_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "nomproduit"), "html", null, true);
            echo "</a></td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "coutproduit"), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "coutsolde"), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "descriptionproduit"), "html", null, true);
            echo "</td>
              ";
            // line 37
            echo "                <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("produit_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/voir.png"), "html", null, true);
            echo "\" alt=\"\" />details</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("produit_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/modifier.png"), "html", null, true);
            echo "\" alt=\"\" />Modifier</a>
                    </li>
                </ul>
                </td>
            </tr>
        
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "        </tbody>
    </table>

        <ul>
        <li>
            <a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("produit_new");
        echo "\">
                Ajouter un nouveau produit
            </a>
           
        </li>
    </ul>
    ";
    }

    public function getTemplateName()
    {
        return "EspritDemoBundle:Produit:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 55,  133 => 50,  118 => 43,  110 => 40,  105 => 37,  101 => 35,  97 => 34,  93 => 33,  87 => 32,  83 => 30,  79 => 29,  64 => 16,  61 => 15,  52 => 10,  48 => 9,  44 => 8,  41 => 7,  38 => 6,  33 => 4,  30 => 3,);
    }
}
