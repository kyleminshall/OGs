<?php

/* OGClubBundle:Page:main.html.twig */
class __TwigTemplate_669a754c063ddde8fd057af67c7e1ced1b7869c419e047b917e2f52a35a1d5d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<head>
    <title>";
        // line 3
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 4
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "    <script type=\"text/javascript\" src=\"http://code.jquery.com/jquery.min.js\"></script>
</head>
";
        // line 11
        $this->env->loadTemplate("OGClubBundle:Components:nav.html.twig")->display($context);
        // line 12
        echo "<body style=\"font-family:helvetica;background-image:none;\">
    <br>
    <br>
    <br>
    ";
        // line 16
        $this->env->loadTemplate("OGClubBundle:Components:submit.html.twig")->display($context);
        // line 17
        echo "    <div align=\"center\" display=\"inline-block;\">
        ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 19
            echo "            ";
            $this->env->loadTemplate("OGClubBundle:Page:main.html.twig", "2100681323")->display($context);
            // line 29
            echo "        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 30
            echo "            <br>
            <br>
             <p style=\"font-size:22px; text-decoration:none\">
                 There doesn't seem to be anything here! Feel free to post!
             </p>
             <br>
             <br>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "        ";
        if ((twig_length_filter($this->env, (isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts"))) > 1)) {
            // line 39
            echo "            <span>
\t\t\t\t";
            // line 40
            if (((isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page")) > 1)) {
                // line 41
                echo "                <a style=\"text-decoration:none;color:#1F80C9;\" href=\"main?page=";
                echo twig_escape_filter($this->env, ((isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page")) - 1), "html", null, true);
                echo "\">Previous</a>&nbsp;
\t\t\t\t";
            }
            // line 43
            echo "\t\t\t\t";
            if ((!(isset($context["last_page"]) ? $context["last_page"] : $this->getContext($context, "last_page")))) {
                // line 44
                echo "                <a style=\"text-decoration:none;color:#1F80C9;\" href=\"main?page=";
                echo twig_escape_filter($this->env, ((isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page")) + 1), "html", null, true);
                echo "\">&nbsp;Next</a>
\t\t\t\t";
            }
            // line 46
            echo "            </span>
        ";
        }
        // line 48
        echo "    </div>
</body>
";
        // line 50
        $this->displayBlock('javascripts', $context, $blocks);
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Main";
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "9ec6083_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9ec6083_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/9ec6083_default_1.css");
            // line 6
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "9ec6083"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9ec6083") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/9ec6083.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 8
        echo "    ";
    }

    // line 50
    public function block_javascripts($context, array $blocks = array())
    {
        // line 51
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "baf17c2_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_baf17c2_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/baf17c2_part_1_classie_1.js");
            // line 52
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "baf17c2_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_baf17c2_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/baf17c2_part_1_expand_2.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "baf17c2_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_baf17c2_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/baf17c2_part_1_like_3.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "baf17c2_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_baf17c2_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/baf17c2_part_1_main_4.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "baf17c2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_baf17c2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/baf17c2.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
    }

    public function getTemplateName()
    {
        return "OGClubBundle:Page:main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 52,  166 => 51,  163 => 50,  159 => 8,  145 => 6,  140 => 5,  137 => 4,  131 => 3,  127 => 50,  123 => 48,  119 => 46,  113 => 44,  110 => 43,  104 => 41,  102 => 40,  99 => 39,  96 => 38,  83 => 30,  70 => 29,  67 => 19,  49 => 18,  46 => 17,  44 => 16,  38 => 12,  36 => 11,  32 => 9,  30 => 4,  26 => 3,  22 => 1,);
    }
}


/* OGClubBundle:Page:main.html.twig */
class __TwigTemplate_669a754c063ddde8fd057af67c7e1ced1b7869c419e047b917e2f52a35a1d5d2_2100681323 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("OGClubBundle:Components:post.html.twig");

        $this->blocks = array(
            'id' => array($this, 'block_id'),
            'submitted' => array($this, 'block_submitted'),
            'count' => array($this, 'block_count'),
            'likes' => array($this, 'block_likes'),
            'people' => array($this, 'block_people'),
            'like' => array($this, 'block_like'),
            'picture' => array($this, 'block_picture'),
            'replies' => array($this, 'block_replies'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OGClubBundle:Components:post.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 20
    public function block_id($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "post_number"), "html", null, true);
    }

    // line 21
    public function block_submitted($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "submitted"), "html", null, true);
    }

    // line 22
    public function block_count($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "count"), "html", null, true);
    }

    // line 23
    public function block_likes($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "likes"), "html", null, true);
    }

    // line 24
    public function block_people($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "people"), "html", null, true);
    }

    // line 25
    public function block_like($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "like"), "html", null, true);
    }

    // line 26
    public function block_picture($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "profile"), "html", null, true);
    }

    // line 27
    public function block_replies($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "replies"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "OGClubBundle:Page:main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 27,  289 => 26,  283 => 25,  277 => 24,  271 => 23,  265 => 22,  259 => 21,  253 => 20,  171 => 52,  166 => 51,  163 => 50,  159 => 8,  145 => 6,  140 => 5,  137 => 4,  131 => 3,  127 => 50,  123 => 48,  119 => 46,  113 => 44,  110 => 43,  104 => 41,  102 => 40,  99 => 39,  96 => 38,  83 => 30,  70 => 29,  67 => 19,  49 => 18,  46 => 17,  44 => 16,  38 => 12,  36 => 11,  32 => 9,  30 => 4,  26 => 3,  22 => 1,);
    }
}
