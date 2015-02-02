<?php

/* OGClubBundle:Components:nav.html.twig */
class __TwigTemplate_4246e7ab2f307283ab8e487039fe405970187aa3ea17ae0d4b09661a68f33348 extends Twig_Template
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
        echo "<nav id=\"fixedbar\">
    <ul id=\"fixednav\">
        <li><div id=\"nava\"><a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("main");
        echo "\">Main</a></div></li>
        <li><div id=\"nava\"><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("profile");
        echo "\">Profile</a></div></li>
        <li class=\"navbar-right\">
            <div id=\"nava\">
                <a href=\"#\" onclick=\"dropdown()\">More</a>
            </div>
            <ul id=\"dropdown\">
                <li class=\"drop\"><div id=\"navb\"><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("progress");
        echo "\">Progress</a></div></li>
                <li class=\"drop\"><div id=\"navb\"><a id=\"logout\" href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Logout</a></div></li>
            </ul>
        </li>
    </ul>
</nav>";
    }

    public function getTemplateName()
    {
        return "OGClubBundle:Components:nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 11,  27 => 4,  23 => 3,  19 => 1,  295 => 27,  289 => 26,  283 => 25,  277 => 24,  271 => 23,  265 => 22,  259 => 21,  253 => 20,  171 => 52,  166 => 51,  163 => 50,  159 => 8,  145 => 6,  140 => 5,  137 => 4,  131 => 3,  127 => 50,  123 => 48,  119 => 46,  113 => 44,  110 => 43,  104 => 41,  102 => 40,  99 => 39,  96 => 38,  83 => 30,  70 => 29,  67 => 19,  49 => 18,  46 => 17,  44 => 16,  38 => 12,  36 => 10,  32 => 9,  30 => 4,  26 => 3,  22 => 1,);
    }
}
