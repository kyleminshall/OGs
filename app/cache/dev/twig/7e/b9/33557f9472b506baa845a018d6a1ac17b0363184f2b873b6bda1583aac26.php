<?php

/* OGClubBundle:Components:reply.html.twig */
class __TwigTemplate_7eb933557f9472b506baa845a018d6a1ac17b0363184f2b873b6bda1583aac26 extends Twig_Template
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
        if ($this->getAttribute((isset($context["reply"]) ? $context["reply"] : $this->getContext($context, "reply")), "deletable")) {
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reply"]) ? $context["reply"] : $this->getContext($context, "reply")), "commenter"), "html", null, true);
        echo "</b> ";
        echo $this->getAttribute((isset($context["reply"]) ? $context["reply"] : $this->getContext($context, "reply")), "text");
        echo "<br>
            <span style=\"font-size:12px;color:#494949;\">";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reply"]) ? $context["reply"] : $this->getContext($context, "reply")), "replied"), "html", null, true);
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
        return array (  71 => 4,  56 => 15,  50 => 14,  47 => 13,  40 => 9,  36 => 7,  34 => 6,  28 => 4,  21 => 1,  282 => 60,  276 => 59,  270 => 58,  264 => 57,  258 => 56,  252 => 55,  200 => 36,  189 => 22,  183 => 5,  177 => 1,  165 => 68,  158 => 63,  144 => 62,  141 => 54,  124 => 53,  119 => 50,  111 => 47,  108 => 46,  106 => 45,  95 => 43,  83 => 36,  73 => 29,  65 => 1,  59 => 22,  45 => 11,  41 => 10,  32 => 5,  24 => 1,);
    }
}
