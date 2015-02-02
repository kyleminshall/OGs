<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_fd94190d2e786cb8e38d9a4a915ec21746aa42c9c64c10839ebdb0e8a8004aab extends Twig_Template
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
        if (isset($context["exception"])) { $_exception_ = $context["exception"]; } else { $_exception_ = null; }
        $this->env->loadTemplate("TwigBundle:Exception:exception.xml.twig")->display(array_merge($context, array("exception" => $_exception_)));
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 22,  109 => 21,  106 => 20,  101 => 19,  85 => 16,  77 => 12,  67 => 9,  47 => 7,  28 => 4,  60 => 12,  57 => 11,  43 => 8,  39 => 7,  25 => 3,  19 => 1,  98 => 40,  88 => 17,  80 => 41,  78 => 40,  46 => 10,  44 => 9,  40 => 7,  36 => 9,  32 => 4,  27 => 3,  22 => 2,  232 => 82,  226 => 78,  222 => 76,  215 => 73,  211 => 71,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 60,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 38,  137 => 37,  129 => 36,  124 => 35,  121 => 24,  118 => 33,  115 => 32,  111 => 30,  107 => 28,  104 => 27,  97 => 24,  93 => 18,  90 => 21,  81 => 14,  70 => 15,  66 => 13,  62 => 12,  59 => 8,  56 => 10,  52 => 9,  49 => 8,  45 => 6,  41 => 8,  37 => 5,  33 => 4,  30 => 3,);
    }
}
