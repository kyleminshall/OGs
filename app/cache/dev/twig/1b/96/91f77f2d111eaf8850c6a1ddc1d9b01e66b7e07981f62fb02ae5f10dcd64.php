<?php

/* OGClubBundle:Page:home.html.twig */
class __TwigTemplate_1b9691f77f2d111eaf8850c6a1ddc1d9b01e66b7e07981f62fb02ae5f10dcd64 extends Twig_Template
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
\t\t<title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        <script type=\"text/javascript\" src=\"http://code.jquery.com/jquery.min.js\"></script>
\t</head>
\t<body style=\"background-image: none;\">
\t\t<div id=\"main\">
\t\t\t<p>
\t\t\t\tSuccessfully authenticated user: <h1><b>";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "<b><h1><!-- Displaying that they were successfully authenticated -->
\t\t\t</p>
\t\t\t<p style=\"font-size:22px; text-decoration:none\">
\t\t\t\t<a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("profile");
        echo "\"><button class=\"turquoise-flat-button\">Profile</button></a> <!-- Button to go to the profile page (profile.php) -->
\t\t\t</p>
\t\t\t<p style=\"font-size:22px; text-decoration:none\">
\t\t\t\t<a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("main");
        echo "\"><button class=\"turquoise-flat-button\">Main Board</button></a> <!-- Button to go to the comments page (comments.php) -->
\t\t\t</p>
\t\t\t<p style=\"font-size:22px; text-decoration:none\">
\t\t\t\t<a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("progress");
        echo "\"><button class=\"turquoise-flat-button\">Progress</button></a> <!-- Link to the stuff that is currently in progress on the site (progress.php) -->
\t\t\t</p>
\t\t\t<p style=\"font-size:22px; text-decoration:none\">
\t\t\t\t<a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\"><button class=\"turquoise-flat-button\" style=\"background:#FC4144\">Log Out</button></a> <!-- Opens the logout.php to sign the user out of the site -->
\t\t\t</p>
\t\t</div><!-- end main -->

\t\t<div id=\"sidebar\">
\t\t\t<h1 style=\"text-align:center\">Activity</h1>
\t\t\t<hr style=\"color:black\" noshade>
            
            ";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["activity"]) ? $context["activity"] : $this->getContext($context, "activity")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["act"]) {
            // line 36
            echo "    \t\t\t<div class=\"activity\">
    \t\t\t\t<p class=\"element\">
                        <a class=\"elem\" style=\"text-size:12px;text-decoration:none;color:#000;font-weight:bold\" href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "server"), "html", null, true);
            echo "\">";
            echo $this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "message");
            echo "</a>
                        <br>
                        <span style=\"font-size:12px;color:#494949\"> ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["act"]) ? $context["act"] : $this->getContext($context, "act")), "time"), "html", null, true);
            echo "</span>
                    </p>
    \t\t\t</div>
    \t\t\t<hr class=\"activity\" style=\"color:black\" noshade>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 45
            echo "\t\t\t    <div class=\"activity\">
\t\t\t\t    <p class=\"element\" style=\"text-align:center\"> No recent activity. Feel free to post! </p>
\t\t\t    </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['act'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "            
            <!-- Spacer. Cheap, I know.-->
\t\t\t<div class=\"activity\">
\t\t\t    <p class=\"element\"></p>
\t\t\t</div>
\t\t\t<div class=\"replacement\">
\t\t\t    <p class=\"element\" id=\"replace\" style=\"text-align:center\"></p>
\t\t\t</div>
            <!-- End Spacer-->
            
\t\t</div>
        ";
        // line 60
        if ((!twig_test_empty((isset($context["activity"]) ? $context["activity"] : $this->getContext($context, "activity"))))) {
            echo "    
    \t\t<div id=\"sidebar-footer\">
    \t\t\t<p style=\"font-size:22px;text-decoration:none;margin:0;\">
            \t\t<a id=\"actbutton\" style=\"text-decoration:none\" href=\"#\" ajax=\"";
            // line 63
            echo $this->env->getExtension('routing')->getPath("ajax_remove_activity");
            echo "\" onclick=\"remove_activity(); return false;\">
            \t\t    <button class=\"mark-button activity\">Mark All As Read</button>
                    </a>
    \t\t\t</p>
            </div>
        ";
        }
        // line 69
        echo "        
\t\t<div id=\"notifications\">
\t\t\t<h1 style=\"text-align:center\">Notifications</h1>
\t\t\t<hr style=\"color:black\" noshade>
            
            ";
        // line 74
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notifications"]) ? $context["notifications"] : $this->getContext($context, "notifications")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["notif"]) {
            // line 75
            echo "                <div class=\"notif\">
\t\t\t\t\t<p class=\"notif\">";
            // line 76
            echo $this->getAttribute((isset($context["notif"]) ? $context["notif"] : $this->getContext($context, "notif")), "message");
            echo "<br></p>
                </div>
\t\t\t    <hr class=\"notif\" style=\"color:black;padding:0\" noshade>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 79
            echo "    
    \t\t\t<div class=\"notif\">
    \t\t\t\t<p class=\"notif\" style=\"text-align:center;margin:0\"> Nothing here! </p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notif'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "            
            <!-- Spacer. Cheap, I know.-->
            <div class=\"notif\">
\t\t\t    <p class=\"notif\"></p>
\t\t\t</div>
\t\t\t<div class=\"replacement\">
\t\t\t    <p class=\"element\" id=\"replace_notif\" style=\"text-align:center\"></p>
\t\t\t</div>
             <!-- End Spacer-->
             
        ";
        // line 94
        if ((!twig_test_empty((isset($context["notifications"]) ? $context["notifications"] : $this->getContext($context, "notifications"))))) {
            echo "         
\t\t</div>
\t\t\t<div id=\"notbar-footer\">
\t\t\t<p style=\"font-size:22px;text-decoration:none;margin:0;\">
\t\t\t    <a id=\"notifbutton\" style=\"text-decoration:none\" href=\"#\" ajax=\"";
            // line 98
            echo $this->env->getExtension('routing')->getPath("ajax_remove_notifs");
            echo "\" onclick=\"remove_notifs(); return false;\">
                    <button class=\"mark-button notif\">Mark All As Read</button>
                </a>
\t\t\t</p>
        </div>
        ";
        }
        // line 104
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 109
        echo "\t</body>
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "The OG Club";
    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 6
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "9ec6083_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9ec6083_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/9ec6083_default_1.css");
            // line 7
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
        } else {
            // asset "9ec6083"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9ec6083") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/9ec6083.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
        }
        unset($context["asset_url"]);
        // line 9
        echo "        ";
    }

    // line 104
    public function block_javascripts($context, array $blocks = array())
    {
        // line 105
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "baf17c2_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_baf17c2_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/baf17c2_part_1_classie_1.js");
            // line 106
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
        // line 108
        echo "    ";
    }

    public function getTemplateName()
    {
        return "OGClubBundle:Page:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 108,  248 => 106,  243 => 105,  240 => 104,  236 => 9,  222 => 7,  217 => 6,  214 => 5,  208 => 4,  203 => 109,  200 => 104,  191 => 98,  184 => 94,  172 => 84,  162 => 79,  153 => 76,  150 => 75,  145 => 74,  138 => 69,  129 => 63,  123 => 60,  110 => 49,  101 => 45,  91 => 40,  84 => 38,  80 => 36,  75 => 35,  64 => 27,  58 => 24,  52 => 21,  46 => 18,  40 => 15,  33 => 10,  31 => 5,  27 => 4,  22 => 1,);
    }
}
