<?php

/* mcp_warn_list.html */
class __TwigTemplate_b87206173db3d22dc61321a28fd29e12d454836a581cfff783becf32c379aec0 extends Twig_Template
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
        $location = "mcp_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_header.html", "mcp_warn_list.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<form method=\"post\" id=\"mcp\" action=\"";
        // line 3
        echo (isset($context["U_POST_ACTION"]) ? $context["U_POST_ACTION"] : null);
        echo "\">

<h2>";
        // line 5
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WARNED_USERS");
        echo "</h2>

<div class=\"panel\">
\t<div class=\"inner\">

\t<p>";
        // line 10
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WARNED_USERS_EXPLAIN");
        echo "</p>

\t";
        // line 12
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "user", array()))) {
            // line 13
            echo "\t\t<div class=\"action-bar bar-top\">
\t\t\t<div class=\"pagination\">
\t\t\t\t";
            // line 15
            echo (isset($context["TOTAL_USERS"]) ? $context["TOTAL_USERS"] : null);
            echo "
\t\t\t\t";
            // line 16
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                // line 17
                echo "\t\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "mcp_warn_list.html", 17)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 18
                echo "\t\t\t\t";
            } else {
                // line 19
                echo "\t\t\t\t\t &bull; ";
                echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                echo "
\t\t\t\t";
            }
            // line 21
            echo "\t\t\t</div>
\t\t</div>

\t\t<table class=\"table1\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th class=\"name\">";
            // line 27
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
            echo "</th>
\t\t\t\t<th class=\"name\">";
            // line 28
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WARNINGS");
            echo "</th>
\t\t\t\t<th class=\"name\">";
            // line 29
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LATEST_WARNING_TIME");
            echo "</th>
\t\t\t\t<th></th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>

\t\t";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "user", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 36
                echo "\t\t\t<tr class=\"";
                if (($this->getAttribute($context["user"], "S_ROW_COUNT", array()) % 2 == 0)) {
                    echo "bg1";
                } else {
                    echo "bg2";
                }
                echo "\">
\t\t\t\t<td>";
                // line 37
                echo $this->getAttribute($context["user"], "USERNAME_FULL", array());
                echo "</td>
\t\t\t\t<td>";
                // line 38
                echo $this->getAttribute($context["user"], "WARNINGS", array());
                echo "</td>
\t\t\t\t<td>";
                // line 39
                echo $this->getAttribute($context["user"], "WARNING_TIME", array());
                echo "</td>
\t\t\t\t<td><a href=\"";
                // line 40
                echo $this->getAttribute($context["user"], "U_NOTES", array());
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_NOTES");
                echo "</a></td>
\t\t\t</tr>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "\t\t</tbody>
\t\t</table>

\t\t<div class=\"action-bar bottom\">
\t\t\t";
            // line 47
            $location = "display_options.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("display_options.html", "mcp_warn_list.html", 47)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 48
            echo "
\t\t\t<div class=\"pagination\">
\t\t\t\t";
            // line 50
            echo (isset($context["TOTAL_USERS"]) ? $context["TOTAL_USERS"] : null);
            echo "
\t\t\t\t";
            // line 51
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                // line 52
                echo "\t\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "mcp_warn_list.html", 52)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 53
                echo "\t\t\t\t";
            } else {
                // line 54
                echo "\t\t\t\t\t &bull; ";
                echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                echo "
\t\t\t\t";
            }
            // line 56
            echo "\t\t\t</div>
\t\t</div>

\t";
        } else {
            // line 60
            echo "\t\t<p><strong>";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_WARNINGS");
            echo "</strong></p>
\t";
        }
        // line 62
        echo "
\t</div>

";
        // line 65
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
</div>

</form>

";
        // line 70
        $location = "mcp_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("mcp_footer.html", "mcp_warn_list.html", 70)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "mcp_warn_list.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 70,  214 => 65,  209 => 62,  203 => 60,  197 => 56,  191 => 54,  188 => 53,  175 => 52,  173 => 51,  169 => 50,  165 => 48,  153 => 47,  147 => 43,  136 => 40,  132 => 39,  128 => 38,  124 => 37,  115 => 36,  111 => 35,  102 => 29,  98 => 28,  94 => 27,  86 => 21,  80 => 19,  77 => 18,  64 => 17,  62 => 16,  58 => 15,  54 => 13,  52 => 12,  47 => 10,  39 => 5,  34 => 3,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "mcp_warn_list.html", "");
    }
}
