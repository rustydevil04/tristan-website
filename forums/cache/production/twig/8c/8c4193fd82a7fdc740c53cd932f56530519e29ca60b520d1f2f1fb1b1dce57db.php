<?php

/* breadcrumb.html */
class __TwigTemplate_978316748a7930cf1f4b1ec10b1fe317982084319df616f4eb2ab9193b1e86f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"navbar\" role=\"navigation\">
\t<div class=\"inner\">

\t

\t<ul id=\"nav-breadcrumbs\" class=\"nav-breadcrumbs linklist navlinks\" role=\"menubar\">
\t\t";
        // line 7
        $value = " itemtype=\"http://data-vocabulary.org/Breadcrumb\" itemscope=\"\"";
        $context['definition']->set('MICRODATA', $value);
        // line 8
        echo "\t\t";
        // line 9
        echo "\t\t<li class=\"breadcrumbs\">
\t\t\t";
        // line 10
        if ((isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
            // line 11
            echo "\t\t\t\t<span class=\"crumb\" ";
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA", array());
            echo "><a href=\"";
            echo (isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null);
            echo "\" itemprop=\"url\" data-navbar-reference=\"home\"><i class=\"icon fa-home fa-fw\" aria-hidden=\"true\"></i><span itemprop=\"title\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SITE_HOME");
            echo "</span></a></span>
\t\t\t";
        }
        // line 13
        echo "\t\t\t";
        // line 14
        echo "\t\t\t\t<span class=\"crumb\" ";
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA", array());
        echo "><a href=\"";
        echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
        echo "\" itemprop=\"url\" accesskey=\"h\" data-navbar-reference=\"index\">";
        if ( !(isset($context["U_SITE_HOME"]) ? $context["U_SITE_HOME"] : null)) {
            echo "<i class=\"icon fa-home fa-fw\"></i>";
        }
        echo "<span itemprop=\"title\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("INDEX");
        echo "</span></a></span>

\t\t\t";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "navlinks", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["navlinks"]) {
            // line 17
            echo "\t\t\t\t";
            // line 18
            echo "\t\t\t\t<span class=\"crumb\" ";
            echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "MICRODATA", array());
            if ($this->getAttribute($context["navlinks"], "MICRODATA", array())) {
                echo " ";
                echo $this->getAttribute($context["navlinks"], "MICRODATA", array());
            }
            echo "><a href=\"";
            echo $this->getAttribute($context["navlinks"], "U_VIEW_FORUM", array());
            echo "\" itemprop=\"url\"><span itemprop=\"title\">";
            echo $this->getAttribute($context["navlinks"], "FORUM_NAME", array());
            echo "</span></a></span>
\t\t\t\t";
            // line 19
            // line 20
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlinks'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t\t\t";
        // line 22
        echo "\t\t</li>
\t\t";
        // line 23
        // line 24
        echo "
\t\t";
        // line 25
        if (((isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null) &&  !(isset($context["S_IN_SEARCH"]) ? $context["S_IN_SEARCH"] : null))) {
            // line 26
            echo "\t\t\t<li class=\"rightside responsive-search\">
\t\t\t\t<a href=\"";
            // line 27
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH_ADV_EXPLAIN");
            echo "\" role=\"menuitem\">
\t\t\t\t\t<i class=\"icon fa-search fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 28
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("SEARCH");
            echo "</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t";
        }
        // line 32
        echo "\t\t
\t</ul>

\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "breadcrumb.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 32,  109 => 28,  103 => 27,  100 => 26,  98 => 25,  95 => 24,  94 => 23,  91 => 22,  89 => 21,  83 => 20,  82 => 19,  69 => 18,  67 => 17,  63 => 16,  49 => 14,  47 => 13,  37 => 11,  35 => 10,  32 => 9,  30 => 8,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "breadcrumb.html", "");
    }
}
