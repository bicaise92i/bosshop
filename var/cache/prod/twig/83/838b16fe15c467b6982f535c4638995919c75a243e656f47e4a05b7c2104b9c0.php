<?php

/* @PrestaShop/Admin/Common/Grid/Columns/Content/date_time.html.twig */
class __TwigTemplate_f168bf758c2c9eb0d84878fd92c9d5bc9e53245f8961a3be4840b4498e7f1f73 extends Twig_Template
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
        // line 25
        echo "
";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["record"] ?? null), $this->getAttribute(($context["column"] ?? null), "id", array()), array(), "array"), $this->getAttribute($this->getAttribute(($context["column"] ?? null), "options", array()), "format", array())), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Common/Grid/Columns/Content/date_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 26,  19 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Common/Grid/Columns/Content/date_time.html.twig", "/var/www/html/Bosshopping/src/PrestaShopBundle/Resources/views/Admin/Common/Grid/Columns/Content/date_time.html.twig");
    }
}
