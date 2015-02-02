<?php

/* OGClubBundle:Components:nav.html.twig */
class __TwigTemplate_db8dbc78890bef1ebc1d58b1f559e5e301bf4bd9d4c27cda28f904345df69590 extends Twig_Template
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
        return array (  40 => 11,  36 => 10,  23 => 3,  19 => 1,  300 => 28,  294 => 27,  288 => 26,  282 => 25,  276 => 24,  270 => 23,  264 => 22,  258 => 21,  206 => 55,  174 => 53,  169 => 52,  166 => 51,  162 => 9,  148 => 7,  143 => 6,  140 => 5,  134 => 4,  130 => 56,  128 => 51,  124 => 49,  120 => 47,  114 => 45,  111 => 44,  105 => 42,  103 => 41,  100 => 40,  97 => 39,  84 => 31,  71 => 30,  68 => 20,  50 => 19,  47 => 18,  45 => 17,  39 => 13,  37 => 12,  33 => 10,  31 => 5,  27 => 4,  22 => 1,);
    }
}
