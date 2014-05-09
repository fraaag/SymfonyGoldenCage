<?php

/* SonataBlockBundle:Block:block_side_menu_template.html.twig */
class __TwigTemplate_f6294ba8e8d196648dd99e7822d7fd09d71bf5f075ebdcbc54c935723b5df298 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("knp_menu.html.twig");

        $this->blocks = array(
            'list' => array($this, 'block_list'),
            'item' => array($this, 'block_item'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_list($context, array $blocks = array())
    {
        // line 15
        $context["macros"] = $this->env->loadTemplate("knp_menu.html.twig");
        // line 16
        echo "    ";
        if ((($this->getAttribute($this->getContext($context, "item"), "hasChildren") && (!($this->getAttribute($this->getContext($context, "options"), "depth") === 0))) && $this->getAttribute($this->getContext($context, "item"), "displayChildren"))) {
            // line 17
            echo "        <div";
            echo $context["macros"]->getattributes($this->getContext($context, "listAttributes"));
            echo ">
            ";
            // line 18
            $this->displayBlock("children", $context, $blocks);
            echo "
        </div>
    ";
        }
    }

    // line 23
    public function block_item($context, array $blocks = array())
    {
        // line 24
        $context["macros"] = $this->env->loadTemplate("knp_menu.html.twig");
        // line 25
        echo "    ";
        if ($this->getAttribute($this->getContext($context, "item"), "displayed")) {
            // line 26
            echo "        ";
            // line 27
            $context["classes"] = (((!twig_test_empty($this->getAttribute($this->getContext($context, "item"), "attribute", array(0 => "class"), "method")))) ? (array(0 => $this->getAttribute($this->getContext($context, "item"), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 28
            if ($this->getAttribute($this->getContext($context, "item"), "current")) {
                // line 29
                $context["classes"] = twig_array_merge($this->getContext($context, "classes"), array(0 => $this->getAttribute($this->getContext($context, "options"), "currentClass")));
            } elseif ($this->getAttribute($this->getContext($context, "item"), "currentAncestor")) {
                // line 31
                $context["classes"] = twig_array_merge($this->getContext($context, "classes"), array(0 => $this->getAttribute($this->getContext($context, "options"), "ancestorClass")));
            }
            // line 33
            if ($this->getAttribute($this->getContext($context, "item"), "actsLikeFirst")) {
                // line 34
                $context["classes"] = twig_array_merge($this->getContext($context, "classes"), array(0 => $this->getAttribute($this->getContext($context, "options"), "firstClass")));
            }
            // line 36
            if ($this->getAttribute($this->getContext($context, "item"), "actsLikeLast")) {
                // line 37
                $context["classes"] = twig_array_merge($this->getContext($context, "classes"), array(0 => $this->getAttribute($this->getContext($context, "options"), "lastClass")));
            }
            // line 39
            $context["attributes"] = $this->getAttribute($this->getContext($context, "item"), "attributes");
            // line 40
            if ((!twig_test_empty($this->getContext($context, "classes")))) {
                // line 41
                $context["attributes"] = twig_array_merge($this->getContext($context, "attributes"), array("class" => twig_join_filter($this->getContext($context, "classes"), " ")));
            }
            // line 43
            echo "        ";
            // line 44
            if (((!twig_test_empty($this->getAttribute($this->getContext($context, "item"), "uri"))) && ((!$this->getAttribute($this->getContext($context, "item"), "current")) || $this->getAttribute($this->getContext($context, "options"), "currentAsLink")))) {
                // line 45
                echo "            ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 47
                echo "            ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 49
            echo "        ";
            // line 50
            $context["childrenClasses"] = (((!twig_test_empty($this->getAttribute($this->getContext($context, "item"), "childrenAttribute", array(0 => "class"), "method")))) ? (array(0 => $this->getAttribute($this->getContext($context, "item"), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 51
            $context["childrenClasses"] = twig_array_merge($this->getContext($context, "childrenClasses"), array(0 => ("menu_level_" . $this->getAttribute($this->getContext($context, "item"), "level"))));
            // line 52
            $context["listAttributes"] = twig_array_merge($this->getAttribute($this->getContext($context, "item"), "childrenAttributes"), array("class" => twig_join_filter($this->getContext($context, "childrenClasses"), " ")));
            // line 53
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    ";
        }
    }

    // line 57
    public function block_linkElement($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "item"), "uri"), "html", null, true);
        echo "\"";
        echo $this->getAttribute($this->getContext($context, "macros"), "attributes", array(0 => twig_array_merge(twig_array_merge($this->getAttribute($this->getContext($context, "item"), "attributes"), $this->getAttribute($this->getContext($context, "item"), "linkAttributes")), $this->getContext($context, "attributes"))), "method");
        echo ">";
        $this->displayBlock("label", $context, $blocks);
        echo "</a>";
    }

    // line 59
    public function block_spanElement($context, array $blocks = array())
    {
        echo "<div";
        echo $this->getAttribute($this->getContext($context, "macros"), "attributes", array(0 => twig_array_merge(twig_array_merge($this->getAttribute($this->getContext($context, "item"), "attributes"), $this->getAttribute($this->getContext($context, "item"), "labelAttributes")), $this->getContext($context, "attributes"))), "method");
        echo "><h4 class=\"list-group-item-heading\">";
        $this->displayBlock("label", $context, $blocks);
        echo "</h4></div>";
    }

    public function getTemplateName()
    {
        return "SonataBlockBundle:Block:block_side_menu_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 59,  117 => 57,  109 => 53,  107 => 52,  105 => 51,  103 => 50,  97 => 47,  93 => 45,  89 => 43,  86 => 41,  84 => 40,  82 => 39,  79 => 37,  72 => 33,  69 => 31,  66 => 29,  64 => 28,  62 => 27,  57 => 25,  55 => 24,  39 => 17,  34 => 15,  53 => 23,  50 => 22,  45 => 20,  40 => 19,  37 => 18,  67 => 25,  60 => 26,  52 => 23,  44 => 18,  41 => 18,  101 => 49,  98 => 24,  91 => 44,  77 => 36,  74 => 34,  56 => 23,  51 => 22,  48 => 21,  42 => 18,  29 => 15,  32 => 16,  27 => 13,  25 => 12,  20 => 11,  36 => 16,  31 => 14,  26 => 14,  23 => 12,  19 => 11,);
    }
}
