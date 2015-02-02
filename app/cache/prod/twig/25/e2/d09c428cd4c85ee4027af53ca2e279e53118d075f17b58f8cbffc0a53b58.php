<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_25e2d09c428cd4c85ee4027af53ca2e279e53118d075f17b58f8cbffc0a53b58 extends Twig_Template
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
        if (isset($context["status_code"])) { $_status_code_ = $context["status_code"]; } else { $_status_code_ = null; }
        if (isset($context["status_text"])) { $_status_text_ = $context["status_text"]; } else { $_status_text_ = null; }
        echo twig_jsonencode_filter(array("error" => array("code" => $_status_code_, "message" => $_status_text_)));
        echo "
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 15,  110 => 20,  89 => 16,  65 => 14,  63 => 13,  58 => 12,  34 => 5,  26 => 5,  227 => 92,  224 => 91,  221 => 90,  207 => 82,  197 => 74,  195 => 73,  192 => 72,  189 => 71,  186 => 70,  181 => 67,  178 => 66,  173 => 63,  162 => 59,  158 => 57,  155 => 56,  152 => 55,  142 => 47,  136 => 44,  133 => 43,  130 => 42,  120 => 40,  105 => 31,  100 => 19,  75 => 24,  53 => 19,  24 => 4,  50 => 7,  38 => 13,  114 => 22,  109 => 21,  106 => 20,  101 => 19,  85 => 16,  77 => 12,  67 => 9,  47 => 6,  28 => 4,  60 => 21,  57 => 9,  43 => 14,  39 => 7,  25 => 3,  19 => 1,  98 => 40,  88 => 17,  80 => 15,  78 => 25,  46 => 9,  44 => 9,  40 => 7,  36 => 9,  32 => 3,  27 => 2,  22 => 2,  232 => 82,  226 => 78,  222 => 76,  215 => 73,  211 => 84,  208 => 70,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 60,  180 => 59,  171 => 54,  166 => 51,  163 => 50,  160 => 49,  157 => 48,  149 => 42,  146 => 41,  140 => 46,  137 => 37,  129 => 36,  124 => 35,  121 => 24,  118 => 33,  115 => 39,  111 => 30,  107 => 28,  104 => 27,  97 => 24,  93 => 18,  90 => 21,  81 => 14,  70 => 23,  66 => 13,  62 => 16,  59 => 8,  56 => 20,  52 => 11,  49 => 10,  45 => 6,  41 => 8,  37 => 4,  33 => 10,  30 => 4,);
    }
}
