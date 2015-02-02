<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_f9fdea79cb0758c7bdc7b88e45fef82a28fa748ebddda33100f18f1e0a8c402b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                options.maxTries = options.maxTries || 0;
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 !== xhr.readyState) {
                        return null;
                    }

                    if (xhr.status == 404 && options.maxTries > 1) {
                        setTimeout(function(){
                            options.maxTries--;
                            request(url, onSuccess, onError, payload, options);
                        }, 500);

                        return null;
                    }

                    if (200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className && el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                if (el.className) {
                    el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
                }
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) {
                    el.className += \" \" + klass;
                }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        '',
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  79 => 29,  75 => 28,  66 => 25,  62 => 24,  42 => 12,  71 => 4,  56 => 15,  50 => 15,  47 => 13,  34 => 6,  28 => 4,  21 => 1,  282 => 60,  276 => 59,  270 => 58,  264 => 57,  258 => 56,  252 => 55,  200 => 36,  189 => 22,  183 => 5,  177 => 1,  165 => 68,  158 => 63,  144 => 62,  141 => 54,  124 => 53,  111 => 47,  108 => 46,  106 => 45,  95 => 43,  73 => 29,  65 => 1,  59 => 22,  45 => 11,  41 => 10,  24 => 2,  40 => 9,  27 => 4,  23 => 3,  19 => 1,  295 => 27,  289 => 26,  283 => 25,  277 => 24,  271 => 23,  265 => 22,  259 => 21,  253 => 20,  171 => 52,  166 => 51,  163 => 50,  159 => 8,  145 => 6,  140 => 5,  137 => 4,  131 => 3,  127 => 50,  123 => 48,  119 => 50,  113 => 44,  110 => 43,  104 => 41,  102 => 40,  99 => 39,  96 => 38,  83 => 30,  70 => 26,  67 => 19,  49 => 18,  46 => 14,  44 => 16,  38 => 12,  36 => 7,  32 => 6,  30 => 5,  26 => 3,  22 => 1,);
    }
}
