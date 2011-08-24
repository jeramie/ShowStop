<?php

/* ShowStopTelevisionBundle:Default:index.html.twig */
class __TwigTemplate_d10c9274d35bb499efd7d04d477e987c extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        }

        return $this->parent;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        echo $this->renderParentBlock("body", $context, $blocks);
        echo "
\t
\t<div id=\"search\">
\t\t\t\t<form method=\"post\" action=\"/\">
\t\t\t\t\t<input type=\"text\" name=\"search-box\" id=\"search-box\" />
\t\t\t\t\t<input type=\"submit\" id=\"submit\" value=\"\" />
\t\t\t\t\t<div id=\"search-results\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</form>
\t</div>
 ";
    }

    public function getTemplateName()
    {
        return "ShowStopTelevisionBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
