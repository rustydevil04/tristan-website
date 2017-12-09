<?php

/* options.html */
class __TwigTemplate_b4c22a586ce30e366ac5a0f1d444b728a32457a4ff5d5eaf8da524fe4d06c510 extends Twig_Template
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
        echo "<!--

";
        // line 3
        $value = "no";
        $context['definition']->set('SIDEBAR', $value);
        echo " Options: Yes | No
";
        // line 4
        $value = "yes";
        $context['definition']->set('HEADSEARCH', $value);
        echo " Options: Yes | No
-->";
    }

    public function getTemplateName()
    {
        return "options.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "options.html", "");
    }
}
