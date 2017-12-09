<?php

/* captcha_recaptcha.html */
class __TwigTemplate_498b71a90d395017c25985bbf6a2aceb5e19f76f3154533610a5f4d76d8c464a extends Twig_Template
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
        if ((isset($context["S_RECAPTCHA_AVAILABLE"]) ? $context["S_RECAPTCHA_AVAILABLE"] : null)) {
            // line 2
            echo "\t<dl>
\t<dd>
\t<noscript>
\t\t<div>";
            // line 5
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RECAPTCHA_NOSCRIPT");
            echo "</div>
\t</noscript>

\t\t<script src=\"";
            // line 8
            echo (isset($context["RECAPTCHA_SERVER"]) ? $context["RECAPTCHA_SERVER"] : null);
            echo ".js?hl=";
            echo twig_escape_filter($this->env, $this->env->getExtension('phpbb\template\twig\extension')->lang("RECAPTCHA_LANG"), "js");
            echo "\" async defer></script>
\t\t<div class=\"g-recaptcha\" data-sitekey=\"";
            // line 9
            echo (isset($context["RECAPTCHA_PUBKEY"]) ? $context["RECAPTCHA_PUBKEY"] : null);
            echo "\"></div>
\t</dd>
\t</dl>
";
        } else {
            // line 13
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("RECAPTCHA_NOT_AVAILABLE");
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "captcha_recaptcha.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 13,  38 => 9,  32 => 8,  26 => 5,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "captcha_recaptcha.html", "");
    }
}
