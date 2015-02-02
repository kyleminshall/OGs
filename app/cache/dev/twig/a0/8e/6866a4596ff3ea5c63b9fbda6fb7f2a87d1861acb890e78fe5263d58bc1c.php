<?php

/* OGClubBundle:Page:signup.html.twig */
class __TwigTemplate_a08e6866a4596ff3ea5c63b9fbda6fb7f2a87d1861acb890e78fe5263d58bc1c extends Twig_Template
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
\t\t<div id=\"login\">
\t\t\t<div id=\"box\">
\t\t\t\t<p>
\t\t\t\t\t<h1 style=\"color:#494949\">Register</h1> <!-- Register header text -->
\t\t\t\t</p>
\t\t\t\t<form method=\"post\" action=\"\">
\t\t\t\t\t<p style=\"margin-bottom:0\">
\t\t\t\t\t\t<input class=\"form\" id=\"number\" name=\"key\" type=\"text\" placeholder=\"Permission Key\" ><br> <!-- Box to type in the permission key -->
\t\t\t\t\t\t<input class=\"form\" id=\"Password\" name=\"firstName\" type=\"text\" placeholder=\"First Name\" ><br> <!-- Box to type in first name -->
\t\t\t\t\t\t<input class=\"form\" id=\"Password\" name=\"lastName\" type=\"text\" placeholder=\"Last Name\" ><br> <!-- Box to type in last name -->
\t\t\t\t\t\t<input class=\"form\" id=\"Password\" name=\"username\" type=\"text\" placeholder=\"Username\" ><br> <!-- Box to type in desired username -->
\t\t\t\t\t\t<input class=\"form\" id=\"Password\" name=\"password\" type=\"password\" placeholder=\"Password\"><br> <!-- Box to type in password -->
\t\t\t\t\t\t<input class=\"form\" id=\"Password\" name=\"cpassword\" type=\"password\" placeholder=\"Confirm Password\"><br> <!-- Box to confirm password -->
\t\t\t\t\t\t<button type=\"submit\" name=\"submit\" class=\"btn btn-4 btn-4a\" style=\"padding:10px 62px !important;\">Sign Up!</button> <!-- Signup/Submission button -->
\t\t\t\t\t</p>
\t\t\t\t</form>
\t\t\t\t<p style=\"margin-top:0\">
\t\t\t\t\t<a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\">
\t\t\t\t\t\t<button class=\"btn back btn-4 btn-4a\" style=\"padding:10px 59px !important; background:#FC4144;color: #fff;\">Go Home</button>  <!-- Button to send the user back to the main page -->
\t\t\t\t\t</a>
\t\t\t\t</p>
\t\t\t\t";
        // line 34
        if (array_key_exists("error", $context)) {
            echo "<h4 class='alert'>";
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "</h4>";
        }
        // line 35
        echo "\t\t\t</div>
\t\t</div><!-- end signup -->
\t</body>
    ";
        // line 38
        $this->displayBlock('javascripts', $context, $blocks);
        // line 43
        echo "</html>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome to the Site";
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

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        // line 39
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "baf17c2_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_baf17c2_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/baf17c2_part_1_classie_1.js");
            // line 40
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
        // line 42
        echo "    ";
    }

    public function getTemplateName()
    {
        return "OGClubBundle:Page:signup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 42,  125 => 40,  120 => 39,  117 => 38,  113 => 10,  93 => 8,  88 => 6,  85 => 5,  79 => 4,  74 => 43,  72 => 38,  67 => 35,  61 => 34,  54 => 30,  33 => 11,  31 => 5,  27 => 4,  22 => 1,);
    }
}
