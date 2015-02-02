<?php

/* ::index.html.twig */
class __TwigTemplate_acaece7a6b9d9288deabaf03328605132b1057fdd3502ac0798cab54db0cdc5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'blog_title' => array($this, 'block_blog_title'),
            'blog_tagline' => array($this, 'block_blog_tagline'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- app/Resources/views/base.html.twig -->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo " - symblog</title>
        <!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

        <section id=\"wrapper\">
            <header id=\"header\">
                <div class=\"top\">
                    ";
        // line 22
        $this->displayBlock('navigation', $context, $blocks);
        // line 31
        echo "                </div>

                <hgroup>
                    <h2>";
        // line 34
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>
                    <h3>";
        // line 35
        $this->displayBlock('blog_tagline', $context, $blocks);
        echo "</h3>
                </hgroup>
            </header>

            <section class=\"main-col\">
                ";
        // line 40
        $this->displayBlock('body', $context, $blocks);
        // line 41
        echo "            </section>
            <aside class=\"sidebar\">
                ";
        // line 43
        $this->displayBlock('sidebar', $context, $blocks);
        // line 44
        echo "            </aside>

            <div id=\"footer\">
                ";
        // line 47
        $this->displayBlock('footer', $context, $blocks);
        // line 50
        echo "            </div>
        </section>

        ";
        // line 53
        $this->displayBlock('javascripts', $context, $blocks);
        // line 54
        echo "    </body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "symblog";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        // line 23
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Home</a></li>
                                <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("about");
        echo "\">About</a></li>
                                <li><a href=\"#\">Contact</a></li>
                            </ul>
                        </nav>
                    ";
    }

    // line 34
    public function block_blog_title($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">symblog</a>";
    }

    // line 35
    public function block_blog_tagline($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">creating a blog in Symfony2</a>";
    }

    // line 40
    public function block_body($context, array $blocks = array())
    {
    }

    // line 43
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 47
    public function block_footer($context, array $blocks = array())
    {
        // line 48
        echo "                    Symfony2 blog tutorial - created by <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 43,  148 => 35,  123 => 23,  82 => 44,  42 => 10,  21 => 1,  259 => 55,  190 => 5,  184 => 1,  164 => 63,  86 => 36,  61 => 22,  182 => 39,  145 => 37,  248 => 103,  244 => 8,  228 => 6,  223 => 5,  220 => 4,  214 => 3,  210 => 108,  199 => 97,  191 => 93,  169 => 48,  159 => 75,  156 => 40,  144 => 45,  139 => 44,  128 => 31,  119 => 29,  99 => 5,  94 => 53,  91 => 40,  64 => 26,  23 => 3,  116 => 47,  113 => 46,  79 => 43,  315 => 27,  301 => 25,  294 => 60,  280 => 58,  273 => 57,  266 => 56,  179 => 83,  174 => 53,  151 => 6,  68 => 19,  167 => 8,  125 => 46,  95 => 8,  87 => 47,  74 => 40,  549 => 162,  543 => 161,  538 => 158,  530 => 155,  526 => 153,  522 => 151,  512 => 149,  505 => 148,  502 => 147,  497 => 146,  491 => 144,  488 => 143,  483 => 142,  473 => 134,  469 => 132,  466 => 131,  460 => 130,  455 => 129,  450 => 126,  444 => 122,  441 => 121,  437 => 120,  434 => 119,  429 => 116,  423 => 112,  420 => 111,  416 => 110,  413 => 109,  408 => 106,  394 => 105,  390 => 103,  375 => 101,  365 => 99,  362 => 98,  359 => 97,  355 => 95,  348 => 91,  344 => 90,  330 => 89,  327 => 88,  321 => 86,  307 => 85,  302 => 84,  295 => 81,  287 => 59,  279 => 78,  256 => 105,  251 => 104,  239 => 69,  231 => 68,  219 => 67,  201 => 66,  143 => 68,  138 => 44,  134 => 62,  131 => 26,  122 => 30,  117 => 36,  108 => 31,  102 => 5,  92 => 25,  84 => 32,  72 => 44,  48 => 13,  35 => 6,  29 => 3,  69 => 1,  54 => 14,  51 => 14,  31 => 5,  312 => 96,  308 => 26,  293 => 92,  285 => 90,  281 => 88,  277 => 86,  274 => 85,  271 => 77,  264 => 74,  261 => 81,  257 => 79,  253 => 77,  249 => 76,  247 => 70,  237 => 73,  204 => 69,  198 => 65,  194 => 64,  150 => 62,  147 => 54,  127 => 25,  112 => 32,  96 => 54,  76 => 41,  71 => 29,  55 => 22,  110 => 11,  89 => 50,  65 => 14,  63 => 13,  58 => 23,  34 => 6,  26 => 3,  227 => 92,  224 => 91,  221 => 90,  207 => 36,  197 => 74,  195 => 65,  192 => 72,  189 => 61,  186 => 60,  181 => 47,  178 => 61,  173 => 58,  162 => 58,  158 => 48,  155 => 55,  152 => 55,  142 => 52,  136 => 43,  133 => 10,  130 => 41,  120 => 22,  105 => 6,  100 => 27,  75 => 4,  53 => 23,  24 => 1,  50 => 7,  38 => 11,  114 => 13,  109 => 7,  106 => 20,  101 => 6,  85 => 37,  77 => 31,  67 => 23,  47 => 6,  28 => 1,  60 => 21,  57 => 31,  43 => 7,  39 => 15,  25 => 2,  19 => 1,  98 => 43,  88 => 4,  80 => 43,  78 => 25,  46 => 11,  44 => 15,  40 => 11,  36 => 10,  32 => 5,  27 => 4,  22 => 1,  232 => 72,  226 => 71,  222 => 76,  215 => 73,  211 => 84,  208 => 103,  202 => 68,  196 => 22,  193 => 63,  187 => 62,  183 => 62,  180 => 59,  171 => 68,  166 => 47,  163 => 50,  160 => 49,  157 => 48,  149 => 42,  146 => 5,  140 => 34,  137 => 35,  129 => 53,  124 => 50,  121 => 46,  118 => 44,  115 => 7,  111 => 32,  107 => 10,  104 => 40,  97 => 38,  93 => 5,  90 => 6,  81 => 35,  70 => 38,  66 => 35,  62 => 34,  59 => 15,  56 => 12,  52 => 20,  49 => 22,  45 => 16,  41 => 9,  37 => 7,  33 => 11,  30 => 4,);
    }
}
