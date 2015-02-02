<?php

/* OGClubBundle:Page:login.html.twig */
class __TwigTemplate_7ad914c491771377e06402241cc03465d26ce7f7174f85d4141f82eae89ec7dd extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\" class=\"no-js\">
\t<head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "\t</head>
\t<body>
\t\t<div id=\"signup\">
\t\t\t<a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("signup");
        echo "\">
\t\t\t\t<button style=\"margin-top: 0; width: 100px; background-color:#56d8f8\" class=\"turquoise-flat-button\">Register</button>
\t\t\t</a> <!-- Button to go to the profile page (profile.php) -->
\t\t</div>
\t\t<div id=\"login\">
\t\t\t<div id=\"box\">
\t\t\t\t<form method=\"post\" action=\"\">
                    ";
        // line 21
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "26aa141_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_26aa141_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/26aa141_avatar_2x_1.png");
            // line 22
            echo "                        <img class=\"profile-img\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"\" />
                    ";
        } else {
            // asset "26aa141"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_26aa141") : $this->env->getExtension('assets')->getAssetUrl("_controller/images/26aa141.png");
            echo "                        <img class=\"profile-img\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" alt=\"\" />
                    ";
        }
        unset($context["asset_url"]);
        // line 24
        echo "\t\t\t\t\t<p>
\t\t\t\t\t\t<input class=\"form\" id=\"Username\" name=\"username\" type=\"text\" placeholder=\"Username\" ><br> <!-- Username input box -->
\t\t\t\t\t\t<input class=\"form\" id=\"Password\" name=\"password\" type=\"password\" placeholder=\"Password\"><br> <!-- Password input box -->
\t\t\t\t\t\t<button type=\"submit\" name=\"submit\" class=\"btn btn-4 btn-4a\">Login</button> <!-- Login (submit) button -->
\t\t\t\t\t</p>
\t\t\t\t</form>
                ";
        // line 30
        if (array_key_exists("error", $context)) {
            echo "<h4 class='alert'>";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "</h4>";
        }
        // line 31
        echo "\t\t\t</div>
\t\t</div><!-- end login -->
\t</body>
    ";
        // line 34
        $this->displayBlock('javascripts', $context, $blocks);
        // line 39
        echo "</html>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "We're the OGs";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "9a59fc4_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9a59fc4_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/9a59fc4_default_1.css");
            // line 8
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
            // asset "9a59fc4_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9a59fc4_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/9a59fc4_component_2.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
        } else {
            // asset "9a59fc4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9a59fc4") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/9a59fc4.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
        }
        unset($context["asset_url"]);
        // line 10
        echo "        ";
    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
        // line 35
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "baf17c2_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_baf17c2_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/baf17c2_part_1_classie_1.js");
            // line 36
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "baf17c2_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_baf17c2_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/baf17c2_part_1_expand_2.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "baf17c2_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_baf17c2_2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/baf17c2_part_1_like_3.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "baf17c2_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_baf17c2_3") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/baf17c2_part_1_main_4.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "baf17c2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_baf17c2") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/baf17c2.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 38
        echo "    ";
    }

    public function getTemplateName()
    {
        return "OGClubBundle:Page:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 38,  138 => 36,  133 => 35,  130 => 34,  126 => 10,  106 => 8,  101 => 6,  98 => 5,  92 => 4,  87 => 39,  85 => 34,  80 => 31,  74 => 30,  66 => 24,  52 => 22,  48 => 21,  38 => 14,  33 => 11,  31 => 5,  27 => 4,  22 => 1,);
    }
}
