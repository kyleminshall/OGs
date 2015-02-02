<?php

/* OGClubBundle:Components:submit.html.twig */
class __TwigTemplate_1617df0e3b90b5600dd1b230e910f34ecb373c6b95176ed465ab500d9580ec45 extends Twig_Template
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
        echo "<div align=\"center\">
    <form name=\"comments\" action=\"\" method=\"post\"> <!-- Form for comment submission -->
        <table width=\"500px\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"box-shadow: 0px 0px 3px #484848;\"> 
            <tr style=\"background-color: #f6f6f6\"> 
                <td>
                    <textarea class='autoExpand' data-min-rows='3' name=\"comment\" placeholder=\"Submit a post...\" style=\"width:480px;resize:none;border:none;padding:10px;background:transparent;font-size:18px;outline:none;\" rows=\"3\" wrap=\"VIRTUAL\"></textarea></textarea> <!-- Text area for typing into the post -->
                </td> 
            </tr> 
            <tr align=\"right\" style=\"background-color: #dddddd\"> 
                <td>
                    <input type=\"submit\" name=\"submit\" value=\"Submit\"> <!-- Button to submit the post -->
                </td> 
            </tr> 
        </table> 
    </form>
</div> ";
    }

    public function getTemplateName()
    {
        return "OGClubBundle:Components:submit.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,  307 => 35,  301 => 34,  295 => 33,  289 => 32,  283 => 31,  277 => 30,  271 => 29,  265 => 28,  213 => 62,  181 => 60,  176 => 59,  173 => 58,  169 => 9,  155 => 7,  150 => 6,  147 => 5,  141 => 4,  137 => 63,  135 => 58,  131 => 56,  127 => 54,  121 => 52,  118 => 51,  112 => 49,  110 => 48,  107 => 47,  104 => 46,  91 => 38,  78 => 37,  75 => 27,  57 => 26,  51 => 22,  49 => 21,  40 => 15,  33 => 10,  31 => 5,  27 => 4,  22 => 1,);
    }
}
