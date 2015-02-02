<?php

/* OGClubBundle:Page:progress.html.twig */
class __TwigTemplate_3d301576399e776ac231918b160a05f0d60c6c40d11c8f95e690dada255dc84d extends Twig_Template
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
    <div class=\"wrapper\">
\t\t<div>
\t\t\t<center>
\t\t\t\t<p>
\t\t\t\t\tWebsite Version : 1.0.0<br> <!-- Current version of the site -->
\t\t\t\t\tThe OG Social Network <!-- Working title -->
\t\t\t\t</p>
\t\t\t</center>
\t\t</div>
\t\t<div class=\"content\">
            <center>
    \t\t\t<p>
    \t\t\t\t<b>Work in Progress:</b> <!-- Feature that is currently being worked on -->
    \t\t\t\t<br>
                    - Site Redesign
    \t\t\t</p>
    \t\t\t<p>
    \t\t\t\t<b>Features to be worked on:</b> <!-- Features to be worked on at a later time -->
    \t\t\t\t<br>
    \t\t\t\t- Image posts<br>
    \t\t\t\t<br>
    \t\t\t\t<br>
    \t\t\t</p>
    \t\t\t<p>
    \t\t\t\t<b>If you guys want to start developing:</b>
    \t\t\t\t<br>
    \t\t\t\t<a href=\"https://docs.google.com/document/d/1A2_5uLfmEyhjBgcmf-18gLY7lN3o17iSmO3ci6hDMRQ/edit?usp=sharing\">Engineering Intro!</a>
    \t\t\t\t<br>
    \t\t\t</p>
            </center>
\t\t</div><!-- end main --> 
    </div>
    ";
        // line 44
        $this->displayBlock('javascripts', $context, $blocks);
        // line 49
        echo "</body>
";
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Current Work In Progress";
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

    // line 44
    public function block_javascripts($context, array $blocks = array())
    {
        // line 45
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "baf17c2_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_baf17c2_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/baf17c2_part_1_classie_1.js");
            // line 46
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
        // line 48
        echo "    ";
    }

    public function getTemplateName()
    {
        return "OGClubBundle:Page:progress.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 48,  119 => 46,  114 => 45,  111 => 44,  107 => 7,  93 => 5,  88 => 4,  85 => 3,  79 => 2,  74 => 49,  72 => 44,  37 => 11,  35 => 10,  31 => 8,  29 => 3,  25 => 2,  22 => 1,);
    }
}
