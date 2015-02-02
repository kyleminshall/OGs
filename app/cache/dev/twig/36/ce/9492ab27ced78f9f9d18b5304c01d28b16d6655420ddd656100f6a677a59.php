<?php

/* OGClubBundle:Components:submit.html.twig */
class __TwigTemplate_36ce9492ab27ced78f9f9d18b5304c01d28b16d6655420ddd656100f6a677a59 extends Twig_Template
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
        return array (  40 => 11,  27 => 4,  23 => 3,  19 => 1,  295 => 27,  289 => 26,  283 => 25,  277 => 24,  271 => 23,  265 => 22,  259 => 21,  253 => 20,  171 => 52,  166 => 51,  163 => 50,  159 => 8,  145 => 6,  140 => 5,  137 => 4,  131 => 3,  127 => 50,  123 => 48,  119 => 46,  113 => 44,  110 => 43,  104 => 41,  102 => 40,  99 => 39,  96 => 38,  83 => 30,  70 => 29,  67 => 19,  49 => 18,  46 => 17,  44 => 16,  38 => 12,  36 => 10,  32 => 9,  30 => 4,  26 => 3,  22 => 1,);
    }
}
