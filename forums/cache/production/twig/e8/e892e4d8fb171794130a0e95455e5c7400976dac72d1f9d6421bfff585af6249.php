<?php

/* forumlist_body.html */
class __TwigTemplate_b7beac8bac5cf6a6f069e73c64cd760f55fd6fb8d5a4eaef2f295bdb8badf7b9 extends Twig_Template
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
        echo "
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "forumrow", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["forumrow"]) {
            // line 3
            echo "
\t";
            // line 4
            if ((($this->getAttribute($context["forumrow"], "S_IS_CAT", array()) &&  !$this->getAttribute($context["forumrow"], "S_FIRST_ROW", array())) || $this->getAttribute($context["forumrow"], "S_NO_CAT", array()))) {
                // line 5
                echo "\t\t\t</ul>
\t\t
\t\t\t
\t\t\t</div>
\t\t</div>
\t";
            }
            // line 11
            echo "
\t";
            // line 12
            // line 13
            echo "\t";
            if ((($this->getAttribute($context["forumrow"], "S_IS_CAT", array()) || $this->getAttribute($context["forumrow"], "S_FIRST_ROW", array())) || $this->getAttribute($context["forumrow"], "S_NO_CAT", array()))) {
                // line 14
                echo "\t\t<div class=\"forabg\">
\t\t\t<div class=\"inner\">
\t\t\t<ul class=\"topiclist\">
\t\t\t\t<li class=\"header\">
\t\t\t\t\t";
                // line 18
                // line 19
                echo "\t\t\t\t\t<dl class=\"row-item\">
\t\t\t\t\t\t<dt><div class=\"list-inner\">";
                // line 20
                if ($this->getAttribute($context["forumrow"], "S_IS_CAT", array())) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["forumrow"], "U_VIEWFORUM", array());
                    echo "\">";
                    echo $this->getAttribute($context["forumrow"], "FORUM_NAME", array());
                    echo "</a>";
                } else {
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FORUM");
                }
                echo "</div></dt>
\t\t\t\t\t\t<dd class=\"topics\">";
                // line 21
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS");
                echo "</dd>
\t\t\t\t\t\t<dd class=\"posts\">";
                // line 22
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS");
                echo "</dd>
\t\t\t\t\t\t<dd class=\"lastpost\"><span>";
                // line 23
                echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
                echo "</span></dd>
\t\t\t\t\t</dl>
\t\t\t\t\t";
                // line 25
                // line 26
                echo "\t\t\t\t</li>
\t\t\t</ul>

\t\t\t<ul class=\"topiclist forums\">
\t\t\t    
\t";
            }
            // line 32
            echo "\t";
            // line 33
            echo "
\t";
            // line 34
            if ( !$this->getAttribute($context["forumrow"], "S_IS_CAT", array())) {
                // line 35
                echo "\t\t";
                // line 36
                echo "\t\t<li class=\"row\">
\t\t\t";
                // line 37
                // line 38
                echo "\t\t\t<dl class=\"row-item ";
                echo $this->getAttribute($context["forumrow"], "FORUM_IMG_STYLE", array());
                echo "\">
\t\t\t\t<dt title=\"";
                // line 39
                echo $this->getAttribute($context["forumrow"], "FORUM_FOLDER_IMG_ALT", array());
                echo "\">
\t\t\t\t\t";
                // line 40
                if ($this->getAttribute($context["forumrow"], "S_UNREAD_FORUM", array())) {
                    echo "<a href=\"";
                    echo $this->getAttribute($context["forumrow"], "U_VIEWFORUM", array());
                    echo "\" class=\"row-item-link\"></a>";
                }
                // line 41
                echo "\t\t\t\t\t<div class=\"list-inner\">
\t\t\t\t\t\t";
                // line 42
                if (((isset($context["S_ENABLE_FEEDS"]) ? $context["S_ENABLE_FEEDS"] : null) && $this->getAttribute($context["forumrow"], "S_FEED_ENABLED", array()))) {
                    // line 43
                    echo "\t\t\t\t\t\t\t<!--
\t\t\t\t\t\t\t\t<a class=\"feed-icon-forum\" title=\"";
                    // line 44
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                    echo " - ";
                    echo $this->getAttribute($context["forumrow"], "FORUM_NAME", array());
                    echo "\" href=\"";
                    echo (isset($context["U_FEED"]) ? $context["U_FEED"] : null);
                    echo "?f=";
                    echo $this->getAttribute($context["forumrow"], "FORUM_ID", array());
                    echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-rss-square fa-fw icon-orange\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                    // line 45
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("FEED");
                    echo " - ";
                    echo $this->getAttribute($context["forumrow"], "FORUM_NAME", array());
                    echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t-->
\t\t\t\t\t\t";
                }
                // line 49
                echo "\t\t\t\t\t\t";
                if ($this->getAttribute($context["forumrow"], "FORUM_IMAGE", array())) {
                    echo "<span class=\"forum-image\">";
                    echo $this->getAttribute($context["forumrow"], "FORUM_IMAGE", array());
                    echo "</span>";
                }
                // line 50
                echo "\t\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["forumrow"], "U_VIEWFORUM", array());
                echo "\" class=\"forumtitle\">";
                echo $this->getAttribute($context["forumrow"], "FORUM_NAME", array());
                echo "</a>
\t\t\t\t\t\t";
                // line 51
                if ($this->getAttribute($context["forumrow"], "FORUM_DESC", array())) {
                    echo "<br />";
                    echo $this->getAttribute($context["forumrow"], "FORUM_DESC", array());
                }
                // line 52
                echo "\t\t\t\t\t\t";
                if ($this->getAttribute($context["forumrow"], "MODERATORS", array())) {
                    // line 53
                    echo "\t\t\t\t\t\t\t<br /><strong>";
                    echo $this->getAttribute($context["forumrow"], "L_MODERATOR_STR", array());
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "</strong> ";
                    echo $this->getAttribute($context["forumrow"], "MODERATORS", array());
                    echo "
\t\t\t\t\t\t";
                }
                // line 55
                echo "\t\t\t\t\t\t";
                if ((twig_length_filter($this->env, $this->getAttribute($context["forumrow"], "subforum", array())) && $this->getAttribute($context["forumrow"], "S_LIST_SUBFORUMS", array()))) {
                    // line 56
                    echo "\t\t\t\t\t\t\t";
                    // line 57
                    echo "\t\t\t\t\t\t\t<br /><strong>";
                    echo $this->getAttribute($context["forumrow"], "L_SUBFORUM_STR", array());
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo "</strong>
\t\t\t\t\t\t\t";
                    // line 58
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["forumrow"], "subforum", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["subforum"]) {
                        // line 59
                        echo "\t\t\t\t\t\t\t\t";
                        echo "<a href=\"";
                        echo $this->getAttribute($context["subforum"], "U_SUBFORUM", array());
                        echo "\" class=\"subforum";
                        if ($this->getAttribute($context["subforum"], "S_UNREAD", array())) {
                            echo " unread";
                        } else {
                            echo " read";
                        }
                        echo "\" title=\"";
                        if ($this->getAttribute($context["subforum"], "S_UNREAD", array())) {
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("UNREAD_POSTS");
                        } else {
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_UNREAD_POSTS");
                        }
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon ";
                        // line 60
                        if ($this->getAttribute($context["subforum"], "IS_LINK", array())) {
                            echo "fa-external-link";
                        } else {
                            echo "fa-file-o";
                        }
                        echo " fa-fw ";
                        if ($this->getAttribute($context["subforum"], "S_UNREAD", array())) {
                            echo " icon-red";
                        } else {
                            echo " icon-blue";
                        }
                        echo " icon-md\" aria-hidden=\"true\"></i>";
                        echo $this->getAttribute($context["subforum"], "SUBFORUM_NAME", array());
                        echo "</a>";
                        if ( !$this->getAttribute($context["subforum"], "S_LAST_ROW", array())) {
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COMMA_SEPARATOR");
                        }
                        // line 61
                        echo "\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subforum'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 62
                    echo "\t\t\t\t\t\t\t";
                    // line 63
                    echo "\t\t\t\t\t\t";
                }
                // line 64
                echo "
\t\t\t\t\t\t";
                // line 65
                if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                    // line 66
                    echo "\t\t\t\t\t\t<div class=\"responsive-show\" style=\"display: none;\">
\t\t\t\t\t\t\t";
                    // line 67
                    if ($this->getAttribute($context["forumrow"], "CLICKS", array())) {
                        // line 68
                        echo "\t\t\t\t\t\t\t\t";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REDIRECTS");
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                        echo " <strong>";
                        echo $this->getAttribute($context["forumrow"], "CLICKS", array());
                        echo "</strong>
\t\t\t\t\t\t\t";
                    } elseif (( !$this->getAttribute(                    // line 69
$context["forumrow"], "S_IS_LINK", array()) && $this->getAttribute($context["forumrow"], "TOPICS", array()))) {
                        // line 70
                        echo "\t\t\t\t\t\t\t\t";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS");
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                        echo " <strong>";
                        echo $this->getAttribute($context["forumrow"], "TOPICS", array());
                        echo "</strong>
\t\t\t\t\t\t\t";
                    }
                    // line 72
                    echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 74
                echo "\t\t\t\t\t</div>
\t\t\t\t</dt>
\t\t\t\t";
                // line 76
                if ($this->getAttribute($context["forumrow"], "CLICKS", array())) {
                    // line 77
                    echo "\t\t\t\t\t<dd class=\"redirect\"><span>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("REDIRECTS");
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("COLON");
                    echo " ";
                    echo $this->getAttribute($context["forumrow"], "CLICKS", array());
                    echo "</span></dd>
\t\t\t\t";
                } elseif ( !$this->getAttribute(                // line 78
$context["forumrow"], "S_IS_LINK", array())) {
                    // line 79
                    echo "\t\t\t\t\t<dd class=\"topics\">";
                    echo $this->getAttribute($context["forumrow"], "TOPICS", array());
                    echo " <dfn>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS");
                    echo "</dfn></dd>
\t\t\t\t\t<dd class=\"posts\">";
                    // line 80
                    echo $this->getAttribute($context["forumrow"], "POSTS", array());
                    echo " <dfn>";
                    echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS");
                    echo "</dfn></dd>
\t\t\t\t\t<dd class=\"lastpost\">
\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t";
                    // line 83
                    if ($this->getAttribute($context["forumrow"], "U_UNAPPROVED_TOPICS", array())) {
                        // line 84
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["forumrow"], "U_UNAPPROVED_TOPICS", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS_UNAPPROVED");
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-question fa-fw icon-blue\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 85
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("TOPICS_UNAPPROVED");
                        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                    } elseif ($this->getAttribute(                    // line 87
$context["forumrow"], "U_UNAPPROVED_POSTS", array())) {
                        // line 88
                        echo "\t\t\t\t\t\t\t\t<a href=\"";
                        echo $this->getAttribute($context["forumrow"], "U_UNAPPROVED_POSTS", array());
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS_UNAPPROVED_FORUM");
                        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-question fa-fw icon-blue\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                        // line 89
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POSTS_UNAPPROVED_FORUM");
                        echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t";
                    }
                    // line 92
                    echo "\t\t\t\t\t\t\t";
                    if ($this->getAttribute($context["forumrow"], "LAST_POST_TIME", array())) {
                        // line 93
                        echo "\t\t\t\t\t\t\t\t<dfn>";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("LAST_POST");
                        echo "</dfn>
\t\t\t\t\t\t\t\t";
                        // line 94
                        if ($this->getAttribute($context["forumrow"], "S_DISPLAY_SUBJECT", array())) {
                            // line 95
                            echo "\t\t\t\t\t\t\t\t\t";
                            // line 96
                            echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                            echo $this->getAttribute($context["forumrow"], "U_LAST_POST", array());
                            echo "\" title=\"";
                            echo $this->getAttribute($context["forumrow"], "LAST_POST_SUBJECT", array());
                            echo "\" class=\"lastsubject\">";
                            echo $this->getAttribute($context["forumrow"], "LAST_POST_SUBJECT_TRUNCATED", array());
                            echo "</a> <br />
\t\t\t\t\t\t\t\t";
                        }
                        // line 98
                        echo "\t\t\t\t\t\t\t\t\t";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("POST_BY_AUTHOR");
                        echo " ";
                        echo $this->getAttribute($context["forumrow"], "LAST_POSTER_FULL", array());
                        echo "
\t\t\t\t\t\t\t\t";
                        // line 99
                        if ( !(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                            // line 100
                            echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                            echo $this->getAttribute($context["forumrow"], "U_LAST_POST", array());
                            echo "\" title=\"";
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_LATEST_POST");
                            echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon fa-external-link-square fa-fw icon-lightgray icon-md\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
                            // line 101
                            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("VIEW_LATEST_POST");
                            echo "</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                        }
                        // line 104
                        echo "\t\t\t\t\t\t\t\t<br />";
                        echo $this->getAttribute($context["forumrow"], "LAST_POST_TIME", array());
                        echo "
\t\t\t\t\t\t\t";
                    } else {
                        // line 106
                        echo "\t\t\t\t\t\t\t\t";
                        echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_POSTS");
                        echo "<br />&nbsp;
\t\t\t\t\t\t\t";
                    }
                    // line 108
                    echo "\t\t\t\t\t\t</span>
\t\t\t\t\t</dd>
\t\t\t\t";
                } else {
                    // line 111
                    echo "\t\t\t\t\t<dd>&nbsp;</dd>
\t\t\t\t";
                }
                // line 113
                echo "\t\t\t</dl>
\t\t\t";
                // line 114
                // line 115
                echo "\t\t</li>
\t\t";
                // line 116
                // line 117
                echo "\t";
            }
            // line 118
            echo "
\t";
            // line 119
            if ($this->getAttribute($context["forumrow"], "S_LAST_ROW", array())) {
                // line 120
                echo "\t\t\t</ul>
\t

\t\t\t</div>
\t\t</div>
\t";
                // line 125
                // line 126
                echo "\t";
            }
            // line 127
            echo "
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 129
            echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t<strong>";
            // line 131
            echo $this->env->getExtension('phpbb\template\twig\extension')->lang("NO_FORUMS");
            echo "</strong>
\t\t</div>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forumrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "forumlist_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  434 => 131,  430 => 129,  424 => 127,  421 => 126,  420 => 125,  413 => 120,  411 => 119,  408 => 118,  405 => 117,  404 => 116,  401 => 115,  400 => 114,  397 => 113,  393 => 111,  388 => 108,  382 => 106,  376 => 104,  370 => 101,  363 => 100,  361 => 99,  354 => 98,  344 => 96,  342 => 95,  340 => 94,  335 => 93,  332 => 92,  326 => 89,  319 => 88,  317 => 87,  312 => 85,  305 => 84,  303 => 83,  295 => 80,  288 => 79,  286 => 78,  278 => 77,  276 => 76,  272 => 74,  268 => 72,  259 => 70,  257 => 69,  249 => 68,  247 => 67,  244 => 66,  242 => 65,  239 => 64,  236 => 63,  234 => 62,  228 => 61,  210 => 60,  192 => 59,  188 => 58,  182 => 57,  180 => 56,  177 => 55,  168 => 53,  165 => 52,  160 => 51,  153 => 50,  146 => 49,  137 => 45,  127 => 44,  124 => 43,  122 => 42,  119 => 41,  113 => 40,  109 => 39,  104 => 38,  103 => 37,  100 => 36,  98 => 35,  96 => 34,  93 => 33,  91 => 32,  83 => 26,  82 => 25,  77 => 23,  73 => 22,  69 => 21,  57 => 20,  54 => 19,  53 => 18,  47 => 14,  44 => 13,  43 => 12,  40 => 11,  32 => 5,  30 => 4,  27 => 3,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "forumlist_body.html", "");
    }
}
