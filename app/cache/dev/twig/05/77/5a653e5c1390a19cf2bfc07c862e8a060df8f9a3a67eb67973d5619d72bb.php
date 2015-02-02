<?php

/* OGClubBundle:Page:profile.html.twig */
class __TwigTemplate_05775a653e5c1390a19cf2bfc07c862e8a060df8f9a3a67eb67973d5619d72bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'error' => array($this, 'block_error'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<head>
    <title>";
        // line 2
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 3
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 8
        echo "    <script type=\"text/javascript\" src=\"http://code.jquery.com/jquery.min.js\"></script>
</head>
";
        // line 10
        $this->env->loadTemplate("OGClubBundle:Components:nav.html.twig")->display($context);
        // line 11
        echo "<body style=\"background-image: none;\">
\t<div class=\"wrapper\" align=\"center\">

\t\t<p>
\t\t\tCurrent profile picture:<br><br>
\t\t\t<img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/ogclub/images/" . (isset($context["picture"]) ? $context["picture"] : $this->getContext($context, "picture"))) . "")), "html", null, true);
        echo "\" 
\t\t\t\talt=\"Profile\" 
\t\t\t\theight=\"200px\" 
\t\t\t\twidth=\"200px\"
\t\t\t/> <!-- Show the profile picture the user currently has set -->
\t\t</p>
\t\t<p>
\t\t\t<form name=\"Image\" enctype=\"multipart/form-data\" action=\"\" method=\"POST\"> <!-- Form to upload a new picture -->
\t\t\t\t<input type=\"file\" name=\"Photo\" size=\"2000000\" accept=\"image/jpg, image/jpeg, image/png, image/x-png\" size=\"26\"></input> <!-- File upload submission button -->
\t\t\t\t<input type=\"submit\" class=\"button\" name=\"image\" value=\"Submit\"></input> <!-- Submit button -->
\t\t\t\t<input type=\"reset\" class=\"button\" value=\"Cancel\"></input> <!-- Cancel/Clear button -->
\t\t\t</form>
\t\t</p>
        ";
        // line 29
        $this->displayBlock('error', $context, $blocks);
        // line 34
        echo "        <br><br><br>
        <p>
            I want to receive a Yo every time someone posts to the page. My username is:
            <form name=\"Yo\" action=\"\" method=\"POST\">
                <input type=\"text\" name=\"yoname\" style=\"text-transform:uppercase\" placeholder=\"";
        // line 38
        echo twig_escape_filter($this->env, ((array_key_exists("yo", $context)) ? (_twig_default_filter((isset($context["yo"]) ? $context["yo"] : $this->getContext($context, "yo")), "Yo Username")) : ("Yo Username")), "html", null, true);
        echo "\"></input>
                <input type=\"submit\" class=\"button\" name=\"yo\" value=\"Submit\"></input> <!-- Submit button -->
            </form>
        </p>
\t</div><!-- end main --> 
    ";
        // line 43
        $this->displayBlock('javascripts', $context, $blocks);
        // line 48
        echo "</body>";
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Profile";
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "9ec6083_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9ec6083_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/9ec6083_default_1.css");
            // line 5
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
        // line 7
        echo "    ";
    }

    // line 29
    public function block_error($context, array $blocks = array())
    {
        // line 30
        echo "        <p style=\"color: ";
        echo twig_escape_filter($this->env, (isset($context["color"]) ? $context["color"] : $this->getContext($context, "color")), "html", null, true);
        echo "\">
            ";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
        echo "
        </p>
        ";
    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        // line 44
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "baf17c2_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_baf17c2_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/baf17c2_part_1_classie_1.js");
            // line 45
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
        // line 47
        echo "    ";
    }

    public function getTemplateName()
    {
        return "OGClubBundle:Page:profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 47,  138 => 45,  133 => 44,  130 => 43,  123 => 31,  118 => 30,  115 => 29,  111 => 7,  97 => 5,  92 => 4,  89 => 3,  83 => 2,  79 => 48,  77 => 43,  69 => 38,  63 => 34,  61 => 29,  45 => 16,  38 => 11,  36 => 10,  32 => 8,  30 => 3,  26 => 2,  23 => 1,);
    }
}
