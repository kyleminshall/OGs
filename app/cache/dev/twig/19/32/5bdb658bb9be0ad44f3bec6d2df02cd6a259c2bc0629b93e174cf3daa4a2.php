<?php

/* OGClubBundle:Components:post.html.twig */
class __TwigTemplate_19325bdb658bb9be0ad44f3bec6d2df02cd6a259c2bc0629b93e174cf3daa4a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'id' => array($this, 'block_id'),
            'picture' => array($this, 'block_picture'),
            'likes' => array($this, 'block_likes'),
            'comments' => array($this, 'block_comments'),
            'like' => array($this, 'block_like'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<table id=\"post_";
        $this->displayBlock('id', $context, $blocks);
        echo "\" style=\"border-collapse:collapse;table-layout:fixed;box-shadow: 0px 0px 3px #484848;margin:40px 0 40px 0\" width=\"500px\" cellpadding=\"10px\">
    <tr>

        <td style=\"width:40px\">
            <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ogclub/images/"), "html", null, true);
        $this->displayBlock('picture', $context, $blocks);
        echo "\" alt=\"Profile\" height=\"50px\" width=\"50px\"/>
        </td>

        <td style=\"width:65%\">
            <p style=\"font-size:18px;color:#000;margin:0;\">
                <b>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "poster"), "html", null, true);
        echo "</b><br>
                <span style=\"font-size:12px;color:#494949;\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "submitted"), "html", null, true);
        echo "</span>
            </p>
        </td>

        <td style=\"width:30%;padding:0;\">
            <p style=\"font-size:14px;color:#000;text-align:right\">Likes :<br>Comments :
            </p>
        </td>

        <td style=\"width:5%;padding:0;\">
            <p style=\"font-size:14px;color:#000;text-align:center\">
                <span id=\"post_";
        // line 22
        $this->displayBlock("id", $context, $blocks);
        echo "_likes\">";
        $this->displayBlock('likes', $context, $blocks);
        echo "</span><br>";
        $this->displayBlock('comments', $context, $blocks);
        // line 23
        echo "            </p>
        </td>
    </tr>

    <tr>
        <td colspan=\"4\" style=\"word-wrap:break-word\"> 
            <p style=\"font-size:18px;color:#000;margin-top:0\">";
        // line 29
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "message");
        echo "</p>
            <br>
        </td>
    </tr>

    <tr style=\"background-color:#f6f6f6;\">
        <td colspan=\"4\" style=\"padding-left: 10px;\">
            <p id=\"likes_";
        // line 36
        $this->displayBlock("id", $context, $blocks);
        echo "\" style=\"font-size:12px;padding:0;text-align:left;margin:0;\">";
        $this->displayBlock('like', $context, $blocks);
        echo "</p>
        </td>
    </tr>
    
    <tr style=\"background-color:#dddddd;\">
        <td colspan=\"4\" style=\"padding-left: 10px;\">
            <span style=\"font-size:12px;padding:0;display:block;float:left\">
                <a id=\"like_";
        // line 43
        $this->displayBlock("id", $context, $blocks);
        echo "\" style=\"text-decoration:none;color:#1F80C9;\" ajax=\"";
        echo $this->env->getExtension('routing')->getPath("ajax_like_add");
        echo "\" href=\"#\" onclick=\"like_add(";
        $this->displayBlock("id", $context, $blocks);
        echo ");return false;\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "button"), "html", null, true);
        echo "</a> 
            </span>
            ";
        // line 45
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "deletable")) {
            // line 46
            echo "                <span style=\"font-size:12px;padding:0;display:block;float:right\">
                    <a id=\"delete_";
            // line 47
            $this->displayBlock("id", $context, $blocks);
            echo "\" style=\"text-decoration:none;color:#FD0D1B;\" href=\"#\" onclick=\"delete_post(";
            $this->displayBlock("id", $context, $blocks);
            echo ");return false;\">Delete</a> 
                </span>
            ";
        }
        // line 50
        echo "        </td>
    </tr>
    
    ";
        // line 53
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "replies"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["reply"]) {
            // line 54
            echo "        ";
            $this->env->loadTemplate("OGClubBundle:Components:post.html.twig", "1932973160")->display($context);
            // line 62
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reply'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "    
    <tr style=\"background-color:#f6f6f6;border-top:1px solid black;\">
        <td colspan=\"4\" style=\"padding:5px\">
            <form style=\"margin:0;\" name=\"like\" action=\"\" method=\"post\">
                <textarea name=\"reply\" class=\"autoExpand\" placeholder=\"Reply...\" style=\"width:100%;resize:none;border:none;background:transparent;font-size:12px;outline:none;\" rows=\"1\" wrap=\"physical\"></textarea>
                <input type=\"hidden\" name=\"post\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "post_number"), "html", null, true);
        echo "\">
                <div align=\"right\">
                    <input style=\"vertical-align:top;align:right\" type=\"submit\" name=\"comment\" value=\"Post\">
                </div>
            </form>
        </td>
    </tr>
</table>";
    }

    // line 1
    public function block_id($context, array $blocks = array())
    {
        echo "0";
    }

    // line 5
    public function block_picture($context, array $blocks = array())
    {
        echo "profile.jpg";
    }

    // line 22
    public function block_likes($context, array $blocks = array())
    {
        echo "0";
    }

    public function block_comments($context, array $blocks = array())
    {
        echo "0";
    }

    // line 36
    public function block_like($context, array $blocks = array())
    {
        echo "No one likes this.";
    }

    public function getTemplateName()
    {
        return "OGClubBundle:Components:post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 36,  189 => 22,  183 => 5,  177 => 1,  165 => 68,  158 => 63,  144 => 62,  141 => 54,  124 => 53,  119 => 50,  111 => 47,  108 => 46,  106 => 45,  95 => 43,  83 => 36,  73 => 29,  65 => 23,  59 => 22,  45 => 11,  41 => 10,  32 => 5,  24 => 1,);
    }
}


/* OGClubBundle:Components:post.html.twig */
class __TwigTemplate_19325bdb658bb9be0ad44f3bec6d2df02cd6a259c2bc0629b93e174cf3daa4a2_1932973160 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("OGClubBundle:Components:reply.html.twig");

        $this->blocks = array(
            'profile' => array($this, 'block_profile'),
            'replied' => array($this, 'block_replied'),
            'reply_id' => array($this, 'block_reply_id'),
            'text' => array($this, 'block_text'),
            'deletable' => array($this, 'block_deletable'),
            'commenter' => array($this, 'block_commenter'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OGClubBundle:Components:reply.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 55
    public function block_profile($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reply"]) ? $context["reply"] : $this->getContext($context, "reply")), "profile"), "html", null, true);
    }

    // line 56
    public function block_replied($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reply"]) ? $context["reply"] : $this->getContext($context, "reply")), "replied"), "html", null, true);
    }

    // line 57
    public function block_reply_id($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reply"]) ? $context["reply"] : $this->getContext($context, "reply")), "reply_id"), "html", null, true);
    }

    // line 58
    public function block_text($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reply"]) ? $context["reply"] : $this->getContext($context, "reply")), "text"), "html", null, true);
    }

    // line 59
    public function block_deletable($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reply"]) ? $context["reply"] : $this->getContext($context, "reply")), "deletable"), "html", null, true);
    }

    // line 60
    public function block_commenter($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reply"]) ? $context["reply"] : $this->getContext($context, "reply")), "commenter"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "OGClubBundle:Components:post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 60,  276 => 59,  270 => 58,  264 => 57,  258 => 56,  252 => 55,  200 => 36,  189 => 22,  183 => 5,  177 => 1,  165 => 68,  158 => 63,  144 => 62,  141 => 54,  124 => 53,  119 => 50,  111 => 47,  108 => 46,  106 => 45,  95 => 43,  83 => 36,  73 => 29,  65 => 23,  59 => 22,  45 => 11,  41 => 10,  32 => 5,  24 => 1,);
    }
}
