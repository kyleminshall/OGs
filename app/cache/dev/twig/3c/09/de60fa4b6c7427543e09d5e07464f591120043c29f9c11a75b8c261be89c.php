<?php

/* OGClubBundle:Components:reply.html.twig */
class __TwigTemplate_3c09de60fa4b6c7427543e09d5e07464f591120043c29f9c11a75b8c261be89c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'reply_id' => array($this, 'block_reply_id'),
            'profile' => array($this, 'block_profile'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<tr id=\"reply_";
        $this->displayBlock('reply_id', $context, $blocks);
        echo "\" style=\"background-color:#f6f6f6;\">
    <td colspan=\"4\" style=\"position:relative; padding: 5px 10px;\"> 
        <div style=\"float:left;padding-right:10px\"> 
            <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ogclub/images/"), "html", null, true);
        $this->displayBlock('profile', $context, $blocks);
        echo "\" alt=\"Profile\" height=\"30px\" width=\"30px\"/>
        </div>
        ";
        // line 6
        if ($this->getAttribute($this->getContext($context, "reply"), "deletable")) {
            // line 7
            echo "        <div style=\"float:right;display:block;\">
            <span style=\"color:#ddd;font-size:12px\">
                <a class=\"reply_delete\" style=\"text-decoration:none;color:#ddd;\" href=\"#\" onclick=\"delete_reply(";
            // line 9
            $this->displayBlock("reply_id", $context, $blocks);
            echo ");return false;\">X</a> 
            </span>
        </div>
        ";
        }
        // line 13
        echo "        <p style=\"font-size:14px;color:#000;margin:0;padding-left:40px;padding-right:20px;\">
            <b>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "reply"), "commenter"), "html", null, true);
        echo "</b> ";
        echo $this->getAttribute($this->getContext($context, "reply"), "text");
        echo "<br>
            <span style=\"font-size:12px;color:#494949;\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "reply"), "replied"), "html", null, true);
        echo "</span>
        </p>
    </td>
</tr>
";
    }

    // line 1
    public function block_reply_id($context, array $blocks = array())
    {
        echo "0";
    }

    // line 4
    public function block_profile($context, array $blocks = array())
    {
        echo "profile.jpg";
    }

    public function getTemplateName()
    {
        return "OGClubBundle:Components:reply.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 4,  56 => 15,  50 => 14,  47 => 13,  34 => 6,  28 => 4,  21 => 1,  282 => 60,  276 => 59,  270 => 58,  264 => 57,  258 => 56,  252 => 55,  200 => 36,  189 => 22,  183 => 5,  177 => 1,  165 => 68,  158 => 63,  144 => 62,  141 => 54,  124 => 53,  111 => 47,  108 => 46,  106 => 45,  95 => 43,  73 => 29,  65 => 1,  59 => 22,  45 => 11,  41 => 10,  24 => 1,  40 => 9,  27 => 4,  23 => 3,  19 => 1,  295 => 27,  289 => 26,  283 => 25,  277 => 24,  271 => 23,  265 => 22,  259 => 21,  253 => 20,  171 => 52,  166 => 51,  163 => 50,  159 => 8,  145 => 6,  140 => 5,  137 => 4,  131 => 3,  127 => 50,  123 => 48,  119 => 50,  113 => 44,  110 => 43,  104 => 41,  102 => 40,  99 => 39,  96 => 38,  83 => 36,  70 => 29,  67 => 19,  49 => 18,  46 => 17,  44 => 16,  38 => 12,  36 => 7,  32 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }
}
