<?php

/* index_body.html */
class __TwigTemplate_a79e28149db298d41f000c456fc4a15564ce427083e474b809b1a6645389c9ab extends Twig_Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "index_body.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<p class=\"";
        // line 3
        echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
        echo " responsive-center time";
        if ((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
            echo " rightside";
        }
        echo "\">";
        if ((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
            echo (isset($context["LAST_VISIT_DATE"]) ? $context["LAST_VISIT_DATE"] : null);
        } else {
            echo (isset($context["CURRENT_TIME"]) ? $context["CURRENT_TIME"] : null);
        }
        echo "</p>
";
        // line 4
        if ((isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null)) {
            echo "<p class=\"responsive-center time\">";
            echo (isset($context["CURRENT_TIME"]) ? $context["CURRENT_TIME"] : null);
            echo "</p>";
        }
        // line 5
        echo "
";
        // line 6
        // line 7
        if ((isset($context["U_MARK_FORUMS"]) ? $context["U_MARK_FORUMS"] : null)) {
            // line 8
            echo "\t<div class=\"action-bar compact\">
\t\t<a href=\"";
            // line 9
            echo (isset($context["U_MARK_FORUMS"]) ? $context["U_MARK_FORUMS"] : null);
            echo "\" class=\"mark-read rightside\" accesskey=\"m\" data-ajax=\"mark_forums_read\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("MARK_FORUMS_READ");
            echo "</a>
\t</div>
";
        }
        // line 12
        // line 13
        echo "
";
        // line 14
        $location = "forumlist_body.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("forumlist_body.html", "index_body.html", 14)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 15
        echo "
";
        // line 16
        // line 17
        echo "
";
        // line 18
        if (( !(isset($context["S_USER_LOGGED_IN"]) ? $context["S_USER_LOGGED_IN"] : null) &&  !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
            // line 19
            echo "\t<form method=\"post\" action=\"";
            echo (isset($context["S_LOGIN_ACTION"]) ? $context["S_LOGIN_ACTION"] : null);
            echo "\" class=\"headerspace\">
\t<h3><a href=\"";
            // line 20
            echo (isset($context["U_LOGIN_LOGOUT"]) ? $context["U_LOGIN_LOGOUT"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN_LOGOUT");
            echo "</a>";
            if ((isset($context["S_REGISTER_ENABLED"]) ? $context["S_REGISTER_ENABLED"] : null)) {
                echo "&nbsp; &bull; &nbsp;<a href=\"";
                echo (isset($context["U_REGISTER"]) ? $context["U_REGISTER"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REGISTER");
                echo "</a>";
            }
            echo "</h3>
\t\t<fieldset class=\"quick-login\">
\t\t\t<label for=\"username\"><span>";
            // line 22
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</span> <input type=\"text\" tabindex=\"1\" name=\"username\" id=\"username\" size=\"10\" class=\"inputbox\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("USERNAME");
            echo "\" /></label>
\t\t\t<label for=\"password\"><span>";
            // line 23
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PASSWORD");
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
            echo "</span> <input type=\"password\" tabindex=\"2\" name=\"password\" id=\"password\" size=\"10\" class=\"inputbox\" title=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("PASSWORD");
            echo "\" autocomplete=\"off\" /></label>
\t\t\t";
            // line 24
            if ((isset($context["U_SEND_PASSWORD"]) ? $context["U_SEND_PASSWORD"] : null)) {
                // line 25
                echo "\t\t\t\t<a href=\"";
                echo (isset($context["U_SEND_PASSWORD"]) ? $context["U_SEND_PASSWORD"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORGOT_PASS");
                echo "</a>
\t\t\t";
            }
            // line 27
            echo "\t\t\t";
            if ((isset($context["S_AUTOLOGIN_ENABLED"]) ? $context["S_AUTOLOGIN_ENABLED"] : null)) {
                // line 28
                echo "\t\t\t\t<span class=\"responsive-hide\">|</span> <label for=\"autologin\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOG_ME_IN");
                echo " <input type=\"checkbox\" tabindex=\"4\" name=\"autologin\" id=\"autologin\" /></label>
\t\t\t";
            }
            // line 30
            echo "\t\t\t<input type=\"submit\" tabindex=\"5\" name=\"login\" value=\"";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LOGIN");
            echo "\" class=\"button2\" />
\t\t\t";
            // line 31
            echo (isset($context["S_LOGIN_REDIRECT"]) ? $context["S_LOGIN_REDIRECT"] : null);
            echo "
\t\t</fieldset>
\t</form>
";
        }
        // line 35
        echo "
";
        // line 36
        // line 37
        echo "<div class=\"stats\">";
        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("STATISTICS");
        echo "</div>
<div class=\"statsblock\">
";
        // line 39
        if ((isset($context["S_DISPLAY_ONLINE_LIST"]) ? $context["S_DISPLAY_ONLINE_LIST"] : null)) {
            // line 40
            echo "\t<div class=\"stat-block online-list\">
\t\t";
            // line 41
            if ((isset($context["U_VIEWONLINE"]) ? $context["U_VIEWONLINE"] : null)) {
                echo "<h3><a href=\"";
                echo (isset($context["U_VIEWONLINE"]) ? $context["U_VIEWONLINE"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WHO_IS_ONLINE");
                echo "</a></h3>";
            } else {
                echo "<h3>";
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("WHO_IS_ONLINE");
                echo "</h3>";
            }
            // line 42
            echo "\t\t<div class=\"onlinestat\"><i class=\"fa fa-users\" aria-hidden=\"true\"></i>
\t\t<p class=\"whois\">
\t\t\t";
            // line 44
            // line 45
            echo "\t\t\t";
            echo (isset($context["TOTAL_USERS_ONLINE"]) ? $context["TOTAL_USERS_ONLINE"] : null);
            echo " (";
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("ONLINE_EXPLAIN");
            echo ")<br />";
            echo (isset($context["RECORD_USERS"]) ? $context["RECORD_USERS"] : null);
            echo "<br /> 
\t\t\t";
            // line 46
            if ((isset($context["U_VIEWONLINE"]) ? $context["U_VIEWONLINE"] : null)) {
                // line 47
                echo "\t\t\t\t<br />";
                echo (isset($context["LOGGED_IN_USER_LIST"]) ? $context["LOGGED_IN_USER_LIST"] : null);
                echo "
\t\t\t\t";
                // line 48
                if ((isset($context["LEGEND"]) ? $context["LEGEND"] : null)) {
                    echo "<br /><em>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LEGEND");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo " ";
                    echo (isset($context["LEGEND"]) ? $context["LEGEND"] : null);
                    echo "</em>";
                }
                // line 49
                echo "\t\t\t";
            }
            // line 50
            echo "\t\t\t";
            // line 51
            echo "\t\t</p></div>
\t</div>
";
        }
        // line 54
        // line 55
        echo "
";
        // line 56
        if ((isset($context["S_DISPLAY_BIRTHDAY_LIST"]) ? $context["S_DISPLAY_BIRTHDAY_LIST"] : null)) {
            // line 57
            echo "\t<div class=\"stat-block birthday-list\">
\t\t<h3>";
            // line 58
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("BIRTHDAYS");
            echo "</h3>
\t\t<i class=\"fa fa-birthday-cake\" aria-hidden=\"true\"></i>
\t\t<p class=\"bday\">
\t\t\t";
            // line 61
            // line 62
            echo "\t\t\t";
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "birthdays", array()))) {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("CONGRATULATIONS");
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                echo " <strong>";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "birthdays", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["birthdays"]) {
                    echo $this->getAttribute($context["birthdays"], "USERNAME", array());
                    if (($this->getAttribute($context["birthdays"], "AGE", array()) !== "")) {
                        echo " (";
                        echo $this->getAttribute($context["birthdays"], "AGE", array());
                        echo ")";
                    }
                    if ( !$this->getAttribute($context["birthdays"], "S_LAST_ROW", array())) {
                        echo ", ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['birthdays'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "</strong>";
            } else {
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_BIRTHDAYS");
            }
            // line 63
            echo "\t\t\t";
            // line 64
            echo "\t\t</p>
\t</div>
\t
";
        }
        // line 68
        echo "
";
        // line 69
        if ((isset($context["NEWEST_USER"]) ? $context["NEWEST_USER"] : null)) {
            // line 70
            echo "\t<div class=\"stat-block statistics\">
\t\t<h3>";
            // line 71
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("STATISTICS");
            echo "</h3>
\t\t<i class=\"fa fa-pie-chart\" aria-hidden=\"true\"></i>
\t\t<p class=\"statistics\">
\t\t\t";
            // line 74
            // line 75
            echo "\t\t\t";
            echo (isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null);
            echo " &bull; ";
            echo (isset($context["TOTAL_TOPICS"]) ? $context["TOTAL_TOPICS"] : null);
            echo " &bull; ";
            echo (isset($context["TOTAL_USERS"]) ? $context["TOTAL_USERS"] : null);
            echo " &bull; ";
            echo (isset($context["NEWEST_USER"]) ? $context["NEWEST_USER"] : null);
            echo "
\t\t\t";
            // line 76
            // line 77
            echo "\t\t</p>
\t</div>
</div>
";
        }
        // line 81
        echo "
";
        // line 82
        // line 83
        echo "
";
        // line 84
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "index_body.html", 84)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "index_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 84,  315 => 83,  314 => 82,  311 => 81,  305 => 77,  304 => 76,  293 => 75,  292 => 74,  286 => 71,  283 => 70,  281 => 69,  278 => 68,  272 => 64,  270 => 63,  244 => 62,  243 => 61,  237 => 58,  234 => 57,  232 => 56,  229 => 55,  228 => 54,  223 => 51,  221 => 50,  218 => 49,  209 => 48,  204 => 47,  202 => 46,  193 => 45,  192 => 44,  188 => 42,  176 => 41,  173 => 40,  171 => 39,  165 => 37,  164 => 36,  161 => 35,  154 => 31,  149 => 30,  143 => 28,  140 => 27,  132 => 25,  130 => 24,  123 => 23,  116 => 22,  101 => 20,  96 => 19,  94 => 18,  91 => 17,  90 => 16,  87 => 15,  75 => 14,  72 => 13,  71 => 12,  63 => 9,  60 => 8,  58 => 7,  57 => 6,  54 => 5,  48 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index_body.html", "");
    }
}
