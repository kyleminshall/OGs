<?php

/* OGClubBundle:Page:home.html.twig */
class __TwigTemplate_c3da425091703000bf2441f36e1f8bc56734fa89405003831e5a3e180ab56450 extends Twig_Template
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
\t<title>";
        // line 3
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 4
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "    <script type=\"text/javascript\" src=\"http://code.jquery.com/jquery.min.js\"></script>
</head>
<body style=\"background-image: none;\">
\t<div id=\"main\">
\t\t<p>
\t\t\tSuccessfully authenticated user: <h1><b>";
        // line 14
        if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
        echo twig_escape_filter($this->env, $_name_, "html", null, true);
        echo "<b><h1><!-- Displaying that they were successfully authenticated -->
\t\t</p>
\t\t<p style=\"font-size:22px; text-decoration:none\">
\t\t\t<a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("profile");
        echo "\"><button class=\"turquoise-flat-button\">Profile</button></a> <!-- Button to go to the profile page (profile.php) -->
\t\t</p>
\t\t<p style=\"font-size:22px; text-decoration:none\">
\t\t\t<a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("main");
        echo "\"><button class=\"turquoise-flat-button\">Main Board</button></a> <!-- Button to go to the comments page (comments.php) -->
\t\t</p>
\t\t<p style=\"font-size:22px; text-decoration:none\">
\t\t\t<a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("progress");
        echo "\"><button class=\"turquoise-flat-button\">Progress</button></a> <!-- Link to the stuff that is currently in progress on the site (progress.php) -->
\t\t</p>
\t\t<p style=\"font-size:22px; text-decoration:none\">
\t\t\t<a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\"><button class=\"turquoise-flat-button\" style=\"background:#FC4144\">Log Out</button></a> <!-- Opens the logout.php to sign the user out of the site -->
\t\t</p>
\t</div><!-- end main -->

\t<div id=\"sidebar\">
\t\t<h1 style=\"text-align:center\">Activity</h1>
\t\t<hr style=\"color:black\" noshade>
        
        ";
        // line 34
        if (isset($context["activity"])) { $_activity_ = $context["activity"]; } else { $_activity_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_activity_);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["act"]) {
            // line 35
            echo "\t\t\t<div class=\"activity\">
\t\t\t\t<p class=\"element\">
                    <a class=\"elem\" style=\"text-size:12px;text-decoration:none;color:#000;font-weight:bold\" href=\"";
            // line 37
            if (isset($context["act"])) { $_act_ = $context["act"]; } else { $_act_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_act_, "server"), "html", null, true);
            echo "\">";
            if (isset($context["act"])) { $_act_ = $context["act"]; } else { $_act_ = null; }
            echo $this->getAttribute($_act_, "message");
            echo "</a>
                    <br>
                    <span style=\"font-size:12px;color:#494949\"> ";
            // line 39
            if (isset($context["act"])) { $_act_ = $context["act"]; } else { $_act_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_act_, "time"), "html", null, true);
            echo "</span>
                </p>
\t\t\t</div>
\t\t\t<hr class=\"activity\" style=\"color:black\" noshade>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 44
            echo "\t\t    <div class=\"activity\">
\t\t\t    <p class=\"element\" style=\"text-align:center\"> No recent activity. Feel free to post! </p>
\t\t    </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['act'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        
        <!-- Spacer. Cheap, I know.-->
\t\t<div class=\"activity\">
\t\t    <p class=\"element\"></p>
\t\t</div>
\t\t<div class=\"replacement\">
\t\t    <p class=\"element\" id=\"replace\" style=\"text-align:center\"></p>
\t\t</div>
        <!-- End Spacer-->
        
\t</div>
    ";
        // line 59
        if (isset($context["activity"])) { $_activity_ = $context["activity"]; } else { $_activity_ = null; }
        if ((!twig_test_empty($_activity_))) {
            echo "    
\t\t<div id=\"sidebar-footer\">
\t\t\t<p style=\"font-size:22px;text-decoration:none;margin:0;\">
        \t\t<a id=\"actbutton\" style=\"text-decoration:none\" href=\"#\" ajax=\"";
            // line 62
            echo $this->env->getExtension('routing')->getPath("ajax_remove_activity");
            echo "\" onclick=\"remove_activity(); return false;\">
        \t\t    <button class=\"mark-button activity\">Mark All As Read</button>
                </a>
\t\t\t</p>
        </div>
    ";
        }
        // line 68
        echo "    
\t<div id=\"notifications\">
\t\t<h1 style=\"text-align:center\">Notifications</h1>
\t\t<hr style=\"color:black\" noshade>
        
        ";
        // line 73
        if (isset($context["notifications"])) { $_notifications_ = $context["notifications"]; } else { $_notifications_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_notifications_);
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["notif"]) {
            // line 74
            echo "            <div class=\"notif\">
\t\t\t\t<p class=\"notif\">";
            // line 75
            if (isset($context["notif"])) { $_notif_ = $context["notif"]; } else { $_notif_ = null; }
            echo $this->getAttribute($_notif_, "message");
            echo "<br></p>
            </div>
\t\t    <hr class=\"notif\" style=\"color:black;padding:0\" noshade>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 78
            echo "    
\t\t\t<div class=\"notif\">
\t\t\t\t<p class=\"notif\" style=\"text-align:center;margin:0\"> Nothing here! </p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notif'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "        
        <!-- Spacer. Cheap, I know.-->
        <div class=\"notif\">
\t\t    <p class=\"notif\"></p>
\t\t</div>
\t\t<div class=\"replacement\">
\t\t    <p class=\"element\" id=\"replace_notif\" style=\"text-align:center\"></p>
\t\t</div>
         <!-- End Spacer-->
         
    ";
        // line 93
        if (isset($context["notifications"])) { $_notifications_ = $context["notifications"]; } else { $_notifications_ = null; }
        if ((!twig_test_empty($_notifications_))) {
            echo "         
\t</div>
\t\t<div id=\"notbar-footer\">
\t\t<p style=\"font-size:22px;text-decoration:none;margin:0;\">
\t\t    <a id=\"notifbutton\" style=\"text-decoration:none\" href=\"#\" ajax=\"";
            // line 97
            echo $this->env->getExtension('routing')->getPath("ajax_remove_notifs");
            echo "\" onclick=\"remove_notifs(); return false;\">
                <button class=\"mark-button notif\">Mark All As Read</button>
            </a>
\t\t</p>
    </div>
    ";
        }
        // line 103
        $this->displayBlock('javascripts', $context, $blocks);
        // line 108
        echo "</body>";
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "The OG Club";
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 5
        echo "        ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "9ec6083_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9ec6083_0") : $this->env->getExtension('assets')->getAssetUrl("css/9ec6083_default_1.css");
            // line 6
            echo "            <link rel=\"stylesheet\" href=\"";
            if (isset($context["asset_url"])) { $_asset_url_ = $context["asset_url"]; } else { $_asset_url_ = null; }
            echo twig_escape_filter($this->env, $_asset_url_, "html", null, true);
            echo "\" />
        ";
        } else {
            // asset "9ec6083"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9ec6083") : $this->env->getExtension('assets')->getAssetUrl("css/9ec6083.css");
            echo "            <link rel=\"stylesheet\" href=\"";
            if (isset($context["asset_url"])) { $_asset_url_ = $context["asset_url"]; } else { $_asset_url_ = null; }
            echo twig_escape_filter($this->env, $_asset_url_, "html", null, true);
            echo "\" />
        ";
        }
        unset($context["asset_url"]);
        // line 8
        echo "    ";
    }

    // line 103
    public function block_javascripts($context, array $blocks = array())
    {
        // line 104
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "baf17c2_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_baf17c2_0") : $this->env->getExtension('assets')->getAssetUrl("js/baf17c2_part_1_classie_1.js");
            // line 105
            echo "        <script type=\"text/javascript\" src=\"";
            if (isset($context["asset_url"])) { $_asset_url_ = $context["asset_url"]; } else { $_asset_url_ = null; }
            echo twig_escape_filter($this->env, $_asset_url_, "html", null, true);
            echo "\"></script>
    ";
            // asset "baf17c2_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_baf17c2_1") : $this->env->getExtension('assets')->getAssetUrl("js/baf17c2_part_1_expand_2.js");
            echo "        <script type=\"text/javascript\" src=\"";
            if (isset($context["asset_url"])) { $_asset_url_ = $context["asset_url"]; } else { $_asset_url_ = null; }
            echo twig_escape_filter($this->env, $_asset_url_, "html", null, true);
            echo "\"></script>
    ";
            // asset "baf17c2_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_baf17c2_2") : $this->env->getExtension('assets')->getAssetUrl("js/baf17c2_part_1_like_3.js");
            echo "        <script type=\"text/javascript\" src=\"";
            if (isset($context["asset_url"])) { $_asset_url_ = $context["asset_url"]; } else { $_asset_url_ = null; }
            echo twig_escape_filter($this->env, $_asset_url_, "html", null, true);
            echo "\"></script>
    ";
            // asset "baf17c2_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_baf17c2_3") : $this->env->getExtension('assets')->getAssetUrl("js/baf17c2_part_1_main_4.js");
            echo "        <script type=\"text/javascript\" src=\"";
            if (isset($context["asset_url"])) { $_asset_url_ = $context["asset_url"]; } else { $_asset_url_ = null; }
            echo twig_escape_filter($this->env, $_asset_url_, "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "baf17c2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_baf17c2") : $this->env->getExtension('assets')->getAssetUrl("js/baf17c2.js");
            echo "        <script type=\"text/javascript\" src=\"";
            if (isset($context["asset_url"])) { $_asset_url_ = $context["asset_url"]; } else { $_asset_url_ = null; }
            echo twig_escape_filter($this->env, $_asset_url_, "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
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
        return array (  248 => 103,  244 => 8,  228 => 6,  223 => 5,  220 => 4,  214 => 3,  210 => 108,  199 => 97,  191 => 93,  169 => 78,  159 => 75,  156 => 74,  144 => 45,  139 => 44,  128 => 31,  119 => 29,  99 => 5,  94 => 39,  91 => 3,  64 => 26,  23 => 1,  116 => 45,  113 => 44,  79 => 43,  315 => 27,  301 => 25,  294 => 24,  280 => 22,  273 => 21,  266 => 20,  179 => 83,  174 => 51,  151 => 6,  68 => 19,  167 => 8,  125 => 46,  95 => 8,  87 => 5,  74 => 49,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 23,  279 => 78,  256 => 105,  251 => 104,  239 => 69,  231 => 68,  219 => 67,  201 => 66,  143 => 68,  138 => 44,  134 => 62,  131 => 42,  122 => 30,  117 => 36,  108 => 31,  102 => 28,  92 => 25,  84 => 30,  72 => 44,  48 => 7,  35 => 10,  29 => 3,  69 => 36,  54 => 14,  51 => 8,  31 => 8,  312 => 96,  308 => 26,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  237 => 73,  204 => 69,  198 => 65,  194 => 64,  150 => 73,  147 => 51,  127 => 59,  112 => 32,  96 => 25,  76 => 44,  71 => 29,  55 => 31,  110 => 20,  89 => 16,  65 => 14,  63 => 13,  58 => 23,  34 => 5,  26 => 3,  227 => 92,  224 => 91,  221 => 90,  207 => 70,  197 => 74,  195 => 65,  192 => 72,  189 => 61,  186 => 60,  181 => 47,  178 => 61,  173 => 58,  162 => 58,  158 => 48,  155 => 55,  152 => 55,  142 => 52,  136 => 43,  133 => 50,  130 => 41,  120 => 40,  105 => 44,  100 => 27,  75 => 34,  53 => 19,  24 => 4,  50 => 7,  38 => 11,  114 => 48,  109 => 7,  106 => 20,  101 => 39,  85 => 37,  77 => 12,  67 => 15,  47 => 6,  28 => 4,  60 => 21,  57 => 9,  43 => 7,  39 => 14,  25 => 2,  19 => 1,  98 => 40,  88 => 4,  80 => 15,  78 => 25,  46 => 17,  44 => 16,  40 => 6,  36 => 10,  32 => 9,  27 => 4,  22 => 1,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 103,  202 => 68,  196 => 64,  193 => 63,  187 => 62,  183 => 62,  180 => 59,  171 => 50,  166 => 51,  163 => 50,  160 => 49,  157 => 48,  149 => 42,  146 => 5,  140 => 46,  137 => 3,  129 => 48,  124 => 35,  121 => 46,  118 => 44,  115 => 7,  111 => 32,  107 => 41,  104 => 40,  97 => 38,  93 => 5,  90 => 6,  81 => 35,  70 => 38,  66 => 13,  62 => 29,  59 => 15,  56 => 12,  52 => 20,  49 => 18,  45 => 16,  41 => 9,  37 => 11,  33 => 11,  30 => 4,);
    }
}
