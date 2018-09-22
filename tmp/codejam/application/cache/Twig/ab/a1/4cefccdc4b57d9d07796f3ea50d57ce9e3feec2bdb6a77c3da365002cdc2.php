<?php

/* pages/submissions.twig */
class __TwigTemplate_aba14cefccdc4b57d9d07796f3ea50d57ce9e3feec2bdb6a77c3da365002cdc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("templates/base.twig");

        $this->blocks = array(
            'icon' => array($this, 'block_icon'),
            'title' => array($this, 'block_title'),
            'head_title' => array($this, 'block_head_title'),
            'other_assets' => array($this, 'block_other_assets'),
            'title_menu' => array($this, 'block_title_menu'),
            'main_content' => array($this, 'block_main_content'),
            'body_end' => array($this, 'block_body_end'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "templates/base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 6
        $context["selected"] = ((isset($context["view"]) ? $context["view"] : null) . "_submissions");
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_icon($context, array $blocks = array())
    {
        echo ((((isset($context["view"]) ? $context["view"] : null) == "all")) ? ("fa-bars") : ("fa-map-marker"));
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, (isset($context["view"]) ? $context["view"] : null)), "html", null, true);
        echo " Submissions";
    }

    // line 10
    public function block_head_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, (isset($context["view"]) ? $context["view"] : null)), "html", null, true);
        echo " Submissions";
    }

    // line 14
    public function block_other_assets($context, array $blocks = array())
    {
        // line 15
        echo "\t<link rel='stylesheet' type='text/css' href='";
        echo base_url("assets/snippet/jquery.snippet.css");
        echo "'/>
\t<link rel='stylesheet' type='text/css' href='";
        // line 16
        echo base_url("assets/snippet/themes/github.css");
        echo "'/>
\t<script type='text/javascript' src=\"";
        // line 17
        echo base_url("assets/snippet/jquery.snippet.js");
        echo "\"></script>

\t<link rel='stylesheet' type='text/css' href='";
        // line 19
        echo base_url("assets/reveal/reveal.css");
        echo "'/>
\t<script type='text/javascript' src=\"";
        // line 20
        echo base_url("assets/reveal/jquery.reveal.js");
        echo "\"></script>
\t<script type='text/javascript' src=\"";
        // line 21
        echo base_url("assets/js/shj_submissions.js");
        echo "\"></script>
";
    }

    // line 26
    public function block_title_menu($context, array $blocks = array())
    {
        // line 27
        echo "\t<span class=\"title_menu_item\">
\t\t<a href=\"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["excel_link"]) ? $context["excel_link"] : null), "html", null, true);
        echo "\"><i class=\"fa fa-download color2\"></i> Excel</a>
\t</span>
\t";
        // line 30
        if ((isset($context["filter_user"]) ? $context["filter_user"] : null)) {
            // line 31
            echo "\t<span class=\"title_menu_item\">
\t\t<a href=\"";
            // line 32
            echo site_url((("submissions/" . (isset($context["view"]) ? $context["view"] : null)) . (((isset($context["filter_problem"]) ? $context["filter_problem"] : null)) ? (("/problem/" . (isset($context["filter_problem"]) ? $context["filter_problem"] : null))) : (""))));
            echo "\">
\t\t<i class=\"fa fa-filter color1\"></i> Remove Username Filter</a>
\t</span>
\t";
        }
        // line 36
        echo "\t";
        if ((isset($context["filter_problem"]) ? $context["filter_problem"] : null)) {
            // line 37
            echo "\t<span class=\"title_menu_item\">
\t\t<a href=\"";
            // line 38
            echo site_url((("submissions/" . (isset($context["view"]) ? $context["view"] : null)) . (((isset($context["filter_user"]) ? $context["filter_user"] : null)) ? (("/user/" . (isset($context["filter_user"]) ? $context["filter_user"] : null))) : (""))));
            echo "\">
\t\t<i class=\"fa fa-filter color4\"></i> Remove Problem Filter</a>
\t</span>
\t";
        }
    }

    // line 47
    public function block_main_content($context, array $blocks = array())
    {
        // line 48
        echo "
<p>";
        // line 49
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, (isset($context["view"]) ? $context["view"] : null)), "html", null, true);
        echo " Submissions of <span dir=\"auto\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "selected_assignment"), "name"), "html", null, true);
        echo "</span></p>
";
        // line 50
        if (((isset($context["view"]) ? $context["view"] : null) == "all")) {
            // line 51
            echo "<p><i class=\"fa fa-warning color3\"></i> You cannot change your final submissions after assignment finishes.</p>
";
        }
        // line 53
        echo "<table class=\"sharif_table\">
\t<thead>
\t\t<tr>
\t\t";
        // line 56
        if (((isset($context["view"]) ? $context["view"] : null) == "all")) {
            // line 57
            echo "\t\t\t<th width=\"1%\" rowspan=\"2\">Final</th>
\t\t";
        }
        // line 59
        echo "\t\t";
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "level") > 0)) {
            // line 60
            echo "\t\t\t\t";
            if (((isset($context["view"]) ? $context["view"] : null) == "all")) {
                // line 61
                echo "\t\t\t\t<th width=\"3%\" rowspan=\"2\">ID</th>
\t\t\t\t";
            } else {
                // line 63
                echo "\t\t\t\t<th width=\"2%\" rowspan=\"2\">#</th>
\t\t\t\t<th width=\"3%\" rowspan=\"2\">ID</th>
\t\t\t\t";
            }
            // line 66
            echo "\t\t\t\t<th width=\"6%\" rowspan=\"2\">Username</th>
\t\t\t\t<th width=\"14%\" rowspan=\"2\">Name</th>
\t\t\t\t<th width=\"4%\" rowspan=\"2\">Problem</th>
\t\t\t\t<th width=\"14%\" rowspan=\"2\">Submit Time</th>
\t\t\t\t<th colspan=\"3\">Score</th>
\t\t\t\t<th width=\"1%\" rowspan=\"2\">Language</th>
\t\t\t\t<th width=\"6%\" rowspan=\"2\">Status</th>
\t\t\t\t<th width=\"6%\" rowspan=\"2\">Code</th>
\t\t\t\t<th width=\"6%\" rowspan=\"2\">Log</th>
\t\t\t\t";
            // line 75
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "level") >= 2)) {
                // line 76
                echo "\t\t\t\t<th width=\"1%\" rowspan=\"2\">Actions</th>
\t\t\t\t";
            }
            // line 78
            echo "\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th width=\"5%\" class=\"score\">Score</th>
\t\t\t\t<th width=\"5%\" class=\"score\">Delay<br>%</th>
\t\t\t\t<th width=\"5%\" class=\"score\">Final Score</th>
\t\t\t</tr>
\t\t";
        } else {
            // line 85
            echo "\t\t\t\t<th width=\"10%\" rowspan=\"2\">Problem</th>
\t\t\t\t<th width=\"30%\" rowspan=\"2\">Submit Time</th>
\t\t\t\t<th width=\"7%\" colspan=\"3\">Score</th>
\t\t\t\t<th width=\"1%\" rowspan=\"2\">Language</th>
\t\t\t\t<th width=\"30%\" rowspan=\"2\">Status</th>
\t\t\t\t<th width=\"15%\" rowspan=\"2\">Code</th>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th width=\"7%\" class=\"score\">Score</th>
\t\t\t\t<th width=\"7%\" class=\"score\">Delay<br>%</th>
\t\t\t\t<th width=\"7%\" class=\"score\">Final Score</th>
\t\t\t</tr>
\t\t";
        }
        // line 98
        echo "\t</thead>
\t";
        // line 99
        $context["i"] = 0;
        // line 100
        echo "\t";
        $context["j"] = 0;
        // line 101
        echo "\t";
        $context["un"] = "";
        // line 102
        echo "\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["submissions"]) ? $context["submissions"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["submission"]) {
            // line 103
            echo "\t\t";
            $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
            // line 104
            echo "\t\t";
            if (($this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "username") != (isset($context["un"]) ? $context["un"] : null))) {
                // line 105
                echo "\t\t\t";
                $context["j"] = ((isset($context["j"]) ? $context["j"] : null) + 1);
                // line 106
                echo "\t\t";
            }
            // line 107
            echo "\t\t";
            $context["un"] = $this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "username");
            // line 108
            echo "\t\t<tr data-u=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "username"), "html", null, true);
            echo "\" data-a=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "assignment"), "html", null, true);
            echo "\" data-p=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "problem"), "html", null, true);
            echo "\" data-s=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "submit_id"), "html", null, true);
            echo "\" ";
            if ((((isset($context["view"]) ? $context["view"] : null) == "final") && ((isset($context["j"]) ? $context["j"] : null) % 2 == 0))) {
                echo "class=\"hl\"";
            }
            echo ">
\t\t";
            // line 109
            if (((isset($context["view"]) ? $context["view"] : null) == "all")) {
                // line 110
                echo "\t\t\t<td>
\t\t\t\t<i class=\"pointer set_final fa ";
                // line 111
                echo (($this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "is_final")) ? ("fa-check-circle-o color11") : ("fa-circle-o"));
                echo " fa-2x\"></i>
\t\t\t</td>
\t\t";
            }
            // line 114
            echo "\t\t";
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "level") > 0)) {
                // line 115
                echo "\t\t\t";
                if (((isset($context["view"]) ? $context["view"] : null) == "all")) {
                    // line 116
                    echo "\t\t\t\t<td>";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "submit_id"), "html", null, true);
                    echo "</td>
\t\t\t";
                } else {
                    // line 118
                    echo "\t\t\t\t<td>";
                    echo twig_escape_filter($this->env, ((((isset($context["page_number"]) ? $context["page_number"] : null) - 1) * (isset($context["per_page"]) ? $context["per_page"] : null)) + (isset($context["i"]) ? $context["i"] : null)), "html", null, true);
                    echo "</td>
\t\t\t\t<td>";
                    // line 119
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "submit_id"), "html", null, true);
                    echo "</td>
\t\t\t";
                }
                // line 121
                echo "
\t\t\t<td><a href=\"";
                // line 122
                echo site_url((((("submissions/" . (isset($context["view"]) ? $context["view"] : null)) . "/user/") . $this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "username")) . (((isset($context["filter_problem"]) ? $context["filter_problem"] : null)) ? (("/problem/" . (isset($context["filter_problem"]) ? $context["filter_problem"] : null))) : (""))));
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "username"), "html", null, true);
                echo "</a></td>
\t\t\t<td dir=\"auto\">";
                // line 123
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "name"), "html", null, true);
                echo "</td>
\t\t";
            }
            // line 125
            echo "\t\t\t<td><a href=\"";
            echo site_url((((("submissions/" . (isset($context["view"]) ? $context["view"] : null)) . (((isset($context["filter_user"]) ? $context["filter_user"] : null)) ? (("/user/" . (isset($context["filter_user"]) ? $context["filter_user"] : null))) : (""))) . "/problem/") . $this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "problem")));
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["problems"]) ? $context["problems"] : null), $this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "problem"), array(), "array"), "name"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "problem"), "html", null, true);
            echo "</a></td>
\t\t\t<td>";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "time"), "html", null, true);
            echo "</td>
\t\t\t<td>";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "pre_score"), "html", null, true);
            echo "</td>
\t\t\t<td>
\t\t\t\t<span class=\"tiny_text\" ";
            // line 129
            echo ((($this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "delay") > 0)) ? ("style=\"color:red;\"") : (""));
            echo "'>
\t\t\t\t";
            // line 130
            if (($this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "delay") <= 0)) {
                // line 131
                echo "\t\t\t\t\tNo Delay
\t\t\t\t";
            } else {
                // line 133
                echo "\t\t\t\t\t<span title=\"HH:MM\">";
                echo time_hhmm($this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "delay"));
                echo "</span>
\t\t\t\t";
            }
            // line 135
            echo "\t\t\t\t</span><br>
\t\t\t\t";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "coefficient"), "html", null, true);
            echo "%
\t\t\t</td>
\t\t\t<td style=\"font-weight: bold;\">";
            // line 138
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "final_score"), "html", null, true);
            echo " </td>
\t\t\t<td>";
            // line 139
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "language"), "html", null, true);
            echo "</td>
\t\t\t<td class=\"status\">
\t\t\t\t";
            // line 141
            if (($this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "status") == "Uploaded")) {
                // line 142
                echo "\t\t\t\t\tUploaded
\t\t\t\t";
            } else {
                // line 144
                echo "\t\t\t\t\t";
                if ((twig_lower_filter($this->env, $this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "status")) == "pending")) {
                    // line 145
                    echo "\t\t\t\t\t\t";
                    $context["submission_class"] = "btn";
                    // line 146
                    echo "\t\t\t\t\t";
                } elseif ((twig_lower_filter($this->env, $this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "status")) == "score")) {
                    // line 147
                    echo "\t\t\t\t\t\t";
                    $context["submission_class"] = (($this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "fullmark")) ? ("btn shj-green") : ("btn shj-red"));
                    // line 148
                    echo "\t\t\t\t\t";
                } else {
                    // line 149
                    echo "\t\t\t\t\t\t";
                    $context["submission_class"] = "btn shj-blue";
                    // line 150
                    echo "\t\t\t\t\t";
                }
                // line 151
                echo "\t\t\t\t\t<div class=\"";
                echo twig_escape_filter($this->env, (isset($context["submission_class"]) ? $context["submission_class"] : null), "html", null, true);
                echo "\" data-type=\"result\" >
\t\t\t\t\t\t";
                // line 152
                if (($this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "status") == "SCORE")) {
                    // line 153
                    echo "\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "final_score"), "html", null, true);
                    echo "
\t\t\t\t\t\t";
                } else {
                    // line 155
                    echo "\t\t\t\t\t\t\t";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "status"), "html", null, true);
                    echo "
\t\t\t\t\t\t";
                }
                // line 157
                echo "\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 159
            echo "\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
            // line 161
            if ((($this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "file_type") == "zip") || ($this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "file_type") == "pdf"))) {
                // line 162
                echo "\t\t\t\t\t<div class=\"btn shj-orange\" data-type=\"download\">Download</div>
\t\t\t\t";
            } else {
                // line 164
                echo "\t\t\t\t\t<div class=\"btn shj-orange\" data-type=\"code\" >Code</div>
\t\t\t\t";
            }
            // line 166
            echo "\t\t\t</td>
\t\t\t";
            // line 167
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "level") > 0)) {
                // line 168
                echo "\t\t\t<td>
\t\t\t\t";
                // line 169
                if (($this->getAttribute((isset($context["submission"]) ? $context["submission"] : null), "status") == "Uploaded")) {
                    // line 170
                    echo "\t\t\t\t\t---
\t\t\t\t";
                } else {
                    // line 172
                    echo "\t\t\t\t\t<div class=\"btn\" data-type=\"log\" >Log</div>
\t\t\t\t";
                }
                // line 174
                echo "\t\t\t</td>
\t\t\t";
            }
            // line 176
            echo "\t\t\t";
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "level") >= 2)) {
                // line 177
                echo "\t\t\t\t<td>
\t\t\t\t\t<div class=\"shj_rejudge pointer\"><i class=\"fa fa-refresh fa-lg color10\"></i></div>
\t\t\t\t</td>
\t\t\t";
            }
            // line 181
            echo "\t\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submission'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 183
        echo "</table>

<p>
";
        // line 186
        echo (isset($context["pagination"]) ? $context["pagination"] : null);
        echo "
</p>

";
    }

    // line 193
    public function block_body_end($context, array $blocks = array())
    {
        // line 194
        echo "<div id=\"shj_modal\" class=\"reveal-modal xlarge\">
\t<div class=\"modal_inside\">
\t\t<div style=\"text-align: center;\">Loading<br><img src=\"";
        // line 196
        echo base_url("assets/images/loading.gif");
        echo "\"/></div>
\t</div>
\t<a class=\"close-reveal-modal\">&#215;</a>
</div>
";
    }

    public function getTemplateName()
    {
        return "pages/submissions.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  476 => 196,  472 => 194,  469 => 193,  461 => 186,  456 => 183,  449 => 181,  443 => 177,  440 => 176,  436 => 174,  432 => 172,  428 => 170,  426 => 169,  423 => 168,  421 => 167,  418 => 166,  414 => 164,  410 => 162,  408 => 161,  404 => 159,  400 => 157,  394 => 155,  388 => 153,  386 => 152,  381 => 151,  378 => 150,  375 => 149,  372 => 148,  369 => 147,  366 => 146,  363 => 145,  360 => 144,  356 => 142,  354 => 141,  349 => 139,  345 => 138,  340 => 136,  337 => 135,  331 => 133,  327 => 131,  325 => 130,  321 => 129,  316 => 127,  312 => 126,  303 => 125,  298 => 123,  292 => 122,  289 => 121,  284 => 119,  279 => 118,  273 => 116,  270 => 115,  267 => 114,  261 => 111,  258 => 110,  256 => 109,  241 => 108,  238 => 107,  235 => 106,  232 => 105,  229 => 104,  226 => 103,  221 => 102,  218 => 101,  215 => 100,  213 => 99,  210 => 98,  195 => 85,  186 => 78,  182 => 76,  180 => 75,  169 => 66,  164 => 63,  160 => 61,  157 => 60,  154 => 59,  150 => 57,  148 => 56,  143 => 53,  139 => 51,  137 => 50,  131 => 49,  128 => 48,  125 => 47,  116 => 38,  113 => 37,  110 => 36,  103 => 32,  100 => 31,  98 => 30,  93 => 28,  90 => 27,  87 => 26,  81 => 21,  77 => 20,  73 => 19,  68 => 17,  64 => 16,  59 => 15,  56 => 14,  49 => 10,  42 => 9,  36 => 8,  31 => 6,);
    }
}
