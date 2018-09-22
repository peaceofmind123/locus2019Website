<?php

/* pages/admin/add_assignment.twig */
class __TwigTemplate_1fc6aa04fa40e5a28ca5baa813facc18c43a37685f8f2ad61ba9efacc1b9d318 extends Twig_Template
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
        );
    }

    protected function doGetParent(array $context)
    {
        return "templates/base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 6
        $context["selected"] = "assignments";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_icon($context, array $blocks = array())
    {
        echo (((isset($context["edit"]) ? $context["edit"] : null)) ? ("fa-edit") : ("fa-plus-square"));
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo (((isset($context["edit"]) ? $context["edit"] : null)) ? ("Edit") : ("Add"));
        echo " Assignment";
    }

    // line 10
    public function block_head_title($context, array $blocks = array())
    {
        echo (((isset($context["edit"]) ? $context["edit"] : null)) ? ("Edit") : ("Add"));
        echo " Assignment";
    }

    // line 14
    public function block_other_assets($context, array $blocks = array())
    {
        // line 15
        echo "<script type='text/javascript' src=\"";
        echo base_url("assets/js/taboverride.min.js");
        echo "\"></script>
<script>
\t\$(document).ready(function(){
\t\ttabOverride.set(document.getElementsByTagName('textarea'));
\t});
</script>
<script type=\"text/javascript\" src=\"";
        // line 21
        echo base_url("assets/js/jquery-ui-timepicker-addon.js");
        echo "\"></script>
<script>
\tshj.num_of_problems=";
        // line 23
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["problems"]) ? $context["problems"] : null)), "html", null, true);
        echo ";
\tshj.row='<tr><td>PID</td>\\
\t<td><input type=\"text\" name=\"name[]\" class=\"sharif_input short\" value=\"Problem \"/></td>\\
\t<td><input type=\"text\" name=\"score[]\" class=\"sharif_input tiny2\" value=\"100\"/></td>\\
\t<td><input type=\"text\" name=\"c_time_limit[]\" class=\"sharif_input tiny2\" value=\"500\"/></td>\\
\t<td><input type=\"text\" name=\"python_time_limit[]\" class=\"sharif_input tiny2\" value=\"1500\"/></td>\\
\t<td><input type=\"text\" name=\"java_time_limit[]\" class=\"sharif_input tiny2\" value=\"2000\"/></td>\\
\t<td><input type=\"text\" name=\"memory_limit[]\" class=\"sharif_input tiny\" value=\"50000\"/></td>\\
\t<td><input type=\"text\" name=\"languages[]\" class=\"sharif_input short2\" value=\"C,C++,Python 2,Python 3,Java\"/></td>\\
\t<td><input type=\"text\" name=\"diff_cmd[]\" class=\"sharif_input tiny\" value=\"diff\"/></td>\\
\t<td><input type=\"text\" name=\"diff_arg[]\" class=\"sharif_input tiny\" value=\"-bB\"/></td>\\
\t<td><input type=\"checkbox\" name=\"is_upload_only[]\" class=\"check\" value=\"PID\"/><td><i class=\"fa fa-times-circle fa-lg color1 delete_problem pointer\"></i></td></td>\\
</tr>';
\t\$(document).ready(function(){
\t\t\$(\"#add\").click(function(){
\t\t\t\$('#problems_table>tbody').append(shj.row.replace(/PID/g, (shj.num_of_problems+1)));
\t\t\tshj.num_of_problems++;
\t\t\t\$('#nop').attr('value', shj.num_of_problems);
\t\t});
\t\t\$(document).on('click', '.delete_problem', function(){
\t\t\tif (shj.num_of_problems==1) return;
\t\t\tvar row = \$(this).parents('tr');
\t\t\trow.remove();
\t\t\tvar i = 0;
\t\t\t\$('#problems_table>tbody').children('tr').each(function(){
\t\t\t\ti++;
\t\t\t\t\$(this).children(':first').html(i);
\t\t\t\t\$(this).find('[type=\"checkbox\"]').attr('value',i);
\t\t\t});
\t\t\tshj.num_of_problems--;
\t\t\t\$('#nop').attr('value',shj.num_of_problems);
\t\t});
\t\t\$('#start_time').datetimepicker({
\t\t\ttimeFormat: 'HH:mm:ss'
\t\t});
\t\t\$('#finish_time').datetimepicker({
\t\t\ttimeFormat: 'HH:mm:ss'
\t\t});
\t});
</script>
";
    }

    // line 67
    public function block_title_menu($context, array $blocks = array())
    {
        // line 68
        echo "<span class=\"title_menu_item\">
\t<a href=\"http://docs.sharifjudge.ir/en:v1.4:add_assignment\" target=\"_blank\"><i class=\"fa fa-question-circle color1\"></i> Help</a>
</span>
";
    }

    // line 75
    public function block_main_content($context, array $blocks = array())
    {
        // line 76
        $context["msgclasses"] = array("success" => "shj_g", "notice" => "shj_o", "error" => "shj_r");
        // line 77
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 78
            echo "\t<p class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["msgclasses"]) ? $context["msgclasses"] : null), $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "type"), array(), "array"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "text"), "html", null, true);
            echo "</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "
";
        // line 81
        if ((isset($context["edit"]) ? $context["edit"] : null)) {
            // line 82
            echo "<p>
\t<i class=\"fa fa-info-circle fa-lg color8\"></i> If you don't want to change tests or pdf file, just do not upload its file.
</p>
";
        }
        // line 86
        echo "
";
        // line 87
        echo form_open_multipart((((isset($context["edit"]) ? $context["edit"] : null)) ? (("assignments/edit/" . $this->getAttribute((isset($context["edit_assignment"]) ? $context["edit_assignment"] : null), "id"))) : ("assignments/add")));
        echo "
<div class=\"panel_left\">
\t<input type=\"hidden\" name=\"number_of_problems\" id=\"nop\" value=\"";
        // line 89
        echo twig_escape_filter($this->env, (((isset($context["edit"]) ? $context["edit"] : null)) ? ($this->getAttribute((isset($context["edit_assignment"]) ? $context["edit_assignment"] : null), "problems")) : (twig_length_filter($this->env, (isset($context["problems"]) ? $context["problems"] : null)))), "html", null, true);
        echo "\"/>
\t<p class=\"input_p\">
\t\t<label for=\"form_a_name\">Assignment Name</label>
\t\t<input id=\"form_a_name\" type=\"text\" name=\"assignment_name\" class=\"sharif_input medium\" value=\"";
        // line 92
        echo twig_escape_filter($this->env, (((isset($context["edit"]) ? $context["edit"] : null)) ? ($this->getAttribute((isset($context["edit_assignment"]) ? $context["edit_assignment"] : null), "name")) : (set_value("assignment_name"))), "html", null, true);
        echo "\"/>
\t\t";
        // line 93
        echo form_error("assignment_name", "<div class=\"shj_error\">", "</div>");
        echo "
\t</p>
\t<p class=\"input_p\">
\t\t<label for=\"start_time\">Start Time</label>
\t\t<input id=\"start_time\" type=\"text\" name=\"start_time\" class=\"sharif_input medium\" value=\"";
        // line 97
        echo twig_escape_filter($this->env, (((isset($context["edit"]) ? $context["edit"] : null)) ? (twig_date_format_filter($this->env, $this->getAttribute((isset($context["edit_assignment"]) ? $context["edit_assignment"] : null), "start_time"), "m/d/Y H:i:s")) : (set_value("start_time"))), "html", null, true);
        echo "\" />
\t\t";
        // line 98
        echo form_error("start_time", "<div class=\"shj_error\">", "</div>");
        echo "
\t</p>
\t<p class=\"input_p\">
\t\t<label for=\"finish_time\">Finish Time</label>
\t\t<input id=\"finish_time\" type=\"text\" name=\"finish_time\" class=\"sharif_input medium\" value=\"";
        // line 102
        echo twig_escape_filter($this->env, (((isset($context["edit"]) ? $context["edit"] : null)) ? (twig_date_format_filter($this->env, $this->getAttribute((isset($context["edit_assignment"]) ? $context["edit_assignment"] : null), "finish_time"), "m/d/Y H:i:s")) : (set_value("finish_time"))), "html", null, true);
        echo "\" />
\t\t";
        // line 103
        echo form_error("finish_time", "<div class=\"shj_error\">", "</div>");
        echo "
\t</p>
\t<p class=\"input_p clear\">
\t\t<label for=\"form_extra_time\">
\t\t\tExtra Time (minutes)<br>
\t\t\t<span class=\"form_comment\">Extra time for late submissions.</span>
\t\t</label>
\t\t<input id=\"form_extra_time\" type=\"text\" name=\"extra_time\" id=\"extra_time\" class=\"sharif_input medium\" value=\"";
        // line 110
        echo twig_escape_filter($this->env, (((isset($context["edit"]) ? $context["edit"] : null)) ? (call_user_func_array($this->env->getFilter('extra_time_formatter')->getCallable(), array($this->getAttribute((isset($context["edit_assignment"]) ? $context["edit_assignment"] : null), "extra_time")))) : (set_value("extra_time"))), "html", null, true);
        echo "\" />
\t\t";
        // line 111
        echo form_error("extra_time", "<div class=\"shj_error\">", "</div>");
        echo "
\t</p>
\t<p class=\"input_p clear\">
\t\t<label for=\"form_participants\">Participants<br>
\t\t\t<span class=\"form_comment\">Enter username of participants here (comma separated).
\t\t\t\tOnly these users are able to submit. You can use keyword \"ALL\".</span>
\t\t</label>
\t\t<textarea id=\"form_participants\" name=\"participants\" rows=\"5\" class=\"sharif_input medium\">";
        // line 118
        echo twig_escape_filter($this->env, (((isset($context["edit"]) ? $context["edit"] : null)) ? ($this->getAttribute((isset($context["edit_assignment"]) ? $context["edit_assignment"] : null), "participants")) : (set_value("participants", "ALL"))), "html", null, true);
        echo "</textarea>
\t</p>
\t<p class=\"input_p clear\">
\t\t<label for=\"form_tests_desc\">Tests and Descriptions (zip file)<br>
\t\t\t<span class=\"form_comment\">
\t\t\t\t<a href=\"http://docs.sharifjudge.ir/en:v1.4:tests_structure\" target=\"_blank\">Use this structure</a>
\t\t\t</span>
\t\t</label>
\t\t<input id=\"form_tests_desc\" type=\"file\" name=\"tests_desc\" class=\"sharif_input medium\"/>
\t</p>
\t<p class=\"input_p clear\">
\t\t<label for=\"form_pdf\">PDF File<br>
\t\t\t<span class=\"form_comment\">
\t\t\t\tPDF File of Assignment
\t\t\t</span>
\t\t</label>
\t\t<input id=\"form_pdf\" type=\"file\" name=\"pdf\" class=\"sharif_input medium\"/>
\t</p>
</div>
<div class=\"panel_right\">
\t<p class=\"input_p\">
\t\t<input id=\"form_a_open\" type=\"checkbox\" name=\"open\" value=\"1\" ";
        // line 139
        echo (((isset($context["edit"]) ? $context["edit"] : null)) ? ((($this->getAttribute((isset($context["edit_assignment"]) ? $context["edit_assignment"] : null), "open")) ? ("checked") : (""))) : (set_checkbox("open", "1")));
        echo " />
\t\t<label for=\"form_a_open\" class=\"default\">Open</label>
\t\t<span class=\"form_comment space-left\">Open or close this assignment</span>
\t\t";
        // line 142
        echo form_error("open", "<div class=\"shj_error\">", "</div>");
        echo "
\t</p>
\t<p class=\"input_p\">
\t\t<input id=\"form_a_scoreboard\" type=\"checkbox\" name=\"scoreboard\" value=\"1\" ";
        // line 145
        echo (((isset($context["edit"]) ? $context["edit"] : null)) ? ((($this->getAttribute((isset($context["edit_assignment"]) ? $context["edit_assignment"] : null), "scoreboard")) ? ("checked") : (""))) : (set_checkbox("scoreboard", "1")));
        echo " />
\t\t<label for=\"form_a_scoreboard\" class=\"default\">Scoreboard</label>
\t\t<span class=\"form_comment space-left\">Check this to enable scoreboard</span>
\t\t";
        // line 148
        echo form_error("scoreboard", "<div class=\"shj_error\">", "</div>");
        echo "
\t</p>
\t<p class=\"input_p\">
\t\t<input id=\"form_a_javaexceptions\" type=\"checkbox\" name=\"javaexceptions\" value=\"1\" ";
        // line 151
        echo (((isset($context["edit"]) ? $context["edit"] : null)) ? ((($this->getAttribute((isset($context["edit_assignment"]) ? $context["edit_assignment"] : null), "javaexceptions")) ? ("checked") : (""))) : (set_checkbox("javaexceptions", "1")));
        echo " />
\t\t<label for=\"form_a_javaexceptions\" class=\"default\">Java Exceptions</label>
\t\t<span class=\"form_comment space-left\">Check this to show Java exceptions to users</span>
\t\t";
        // line 154
        echo form_error("javaexceptions", "<div class=\"shj_error\">", "</div>");
        echo "
\t</p>
\t<p class=\"input_p\">
\t\t<label for=\"form_late_rule\">Coefficient rule (<a target=\"_blank\" href=\"http://docs.sharifjudge.ir/en:v1.4:add_assignment#coefficient_rule\">?</a>)</label><br>
\t\t<span class=\"form_comment medium clear\" style=\"display: block;\">PHP script without &lt;?php ?&gt; tags</span>
\t\t<textarea id=\"form_late_rule\" name=\"late_rule\" rows=\"20\" class=\"sharif_input add_text\">";
        // line 159
        echo twig_escape_filter($this->env, (((isset($context["edit"]) ? $context["edit"] : null)) ? ($this->getAttribute((isset($context["edit_assignment"]) ? $context["edit_assignment"] : null), "late_rule")) : (set_value("late_rule", (isset($context["default_late_rule"]) ? $context["default_late_rule"] : null)))), "html", null, true);
        echo "</textarea>
\t\t";
        // line 160
        echo form_error("late_rule", "<div class=\"shj_error\">", "</div>");
        echo "
\t</p>
</div>
<p class=\"input_p\" id=\"add_problems\">Problems <i class=\"fa fa-plus-circle fa-lg color11 pointer\" id=\"add\"></i>
<table id=\"problems_table\">
\t<thead>
\t<tr>
\t\t<th rowspan=\"2\"></th>
\t\t<th rowspan=\"2\">Name</th>
\t\t<th rowspan=\"2\">Score</th>
\t\t<th colspan=\"3\" style=\"border-bottom: 1px solid #BDBDBD\">Time Limit (ms)</th>
\t\t<th rowspan=\"2\">Memory<br>Limit (kB)</th>
\t\t<th rowspan=\"2\">Allowed<br>Languages (<a target=\"_blank\" href=\"http://docs.sharifjudge.ir/en:v1.4:add_assignment#allowed_languages\">?</a>)</th>
\t\t<th rowspan=\"2\">Diff<br>Command (<a target=\"_blank\" href=\"http://docs.sharifjudge.ir/en:v1.4:add_assignment#diff_command\">?</a>)</th>
\t\t<th rowspan=\"2\">Diff<br>Argument (<a target=\"_blank\" href=\"http://docs.sharifjudge.ir/en:v1.4:add_assignment#diff_arguments\">?</a>)</th>
\t\t<th rowspan=\"2\">Upload<br>Only (<a target=\"_blank\" href=\"http://docs.sharifjudge.ir/en:v1.4:add_assignment#upload_only\">?</a>)</th>
\t\t<th rowspan=\"2\"></th>
\t</tr>
\t<tr>
\t\t<th>C/C++</th><th>Python</th><th>Java</th>
\t</tr>
\t</thead>
\t<tbody>
\t";
        // line 183
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["problems"]) ? $context["problems"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["problem"]) {
            // line 184
            echo "\t\t<tr>
\t\t\t<td>";
            // line 185
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["problem"]) ? $context["problem"] : null), "id"), "html", null, true);
            echo "</td>
\t\t\t<td><input type=\"text\" name=\"name[]\" class=\"sharif_input short\" value=\"";
            // line 186
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["problem"]) ? $context["problem"] : null), "name"), "html", null, true);
            echo "\"/></td>
\t\t\t<td><input type=\"text\" name=\"score[]\" class=\"sharif_input tiny2\" value=\"";
            // line 187
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["problem"]) ? $context["problem"] : null), "score"), "html", null, true);
            echo "\"/></td>
\t\t\t<td><input type=\"text\" name=\"c_time_limit[]\" class=\"sharif_input tiny2\" value=\"";
            // line 188
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["problem"]) ? $context["problem"] : null), "c_time_limit"), "html", null, true);
            echo "\"/></td>
\t\t\t<td><input type=\"text\" name=\"python_time_limit[]\" class=\"sharif_input tiny2\" value=\"";
            // line 189
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["problem"]) ? $context["problem"] : null), "python_time_limit"), "html", null, true);
            echo "\"/></td>
\t\t\t<td><input type=\"text\" name=\"java_time_limit[]\" class=\"sharif_input tiny2\" value=\"";
            // line 190
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["problem"]) ? $context["problem"] : null), "java_time_limit"), "html", null, true);
            echo "\"/></td>
\t\t\t<td><input type=\"text\" name=\"memory_limit[]\" class=\"sharif_input tiny\" value=\"";
            // line 191
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["problem"]) ? $context["problem"] : null), "memory_limit"), "html", null, true);
            echo "\"/></td>
\t\t\t<td><input type=\"text\" name=\"languages[]\" class=\"sharif_input short2\" value=\"";
            // line 192
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["problem"]) ? $context["problem"] : null), "allowed_languages"), "html", null, true);
            echo "\"/></td>
\t\t\t<td><input type=\"text\" name=\"diff_cmd[]\" class=\"sharif_input tiny\" value=\"";
            // line 193
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["problem"]) ? $context["problem"] : null), "diff_cmd"), "html", null, true);
            echo "\"/></td>
\t\t\t<td><input type=\"text\" name=\"diff_arg[]\" class=\"sharif_input tiny\" value=\"";
            // line 194
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["problem"]) ? $context["problem"] : null), "diff_arg"), "html", null, true);
            echo "\"/></td>
\t\t\t<td><input type=\"checkbox\" name=\"is_upload_only[]\" class=\"check\" value=\"";
            // line 195
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["problem"]) ? $context["problem"] : null), "id"), "html", null, true);
            echo "\" ";
            echo (($this->getAttribute((isset($context["problem"]) ? $context["problem"] : null), "is_upload_only")) ? ("checked") : (""));
            echo "/></td>
\t\t\t<td><i class=\"fa fa-times-circle fa-lg color1 delete_problem pointer\"></i></td>
\t\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['problem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        echo "\t</tbody>
</table>
</p>
";
        // line 202
        echo form_error("name[]", "<div class=\"shj_error\">", "</div>");
        echo "
";
        // line 203
        echo form_error("score[]", "<div class=\"shj_error\">", "</div>");
        echo "
";
        // line 204
        echo form_error("c_time_limit[]", "<div class=\"shj_error\">", "</div>");
        echo "
";
        // line 205
        echo form_error("python_time_limit[]", "<div class=\"shj_error\">", "</div>");
        echo "
";
        // line 206
        echo form_error("java_time_limit[]", "<div class=\"shj_error\">", "</div>");
        echo "
";
        // line 207
        echo form_error("memory_limit[]", "<div class=\"shj_error\">", "</div>");
        echo "
";
        // line 208
        echo form_error("languages[]", "<div class=\"shj_error\">", "</div>");
        echo "
";
        // line 209
        echo form_error("diff_cmd[]", "<div class=\"shj_error\">", "</div>");
        echo "
";
        // line 210
        echo form_error("diff_arg[]", "<div class=\"shj_error\">", "</div>");
        echo "
<p class=\"input_p\">
\t<input type=\"submit\" value=\"";
        // line 212
        echo (((isset($context["edit"]) ? $context["edit"] : null)) ? ("Edit") : ("Add"));
        echo " Assignment\" class=\"sharif_input\"/>
</p>
</form>
";
    }

    public function getTemplateName()
    {
        return "pages/admin/add_assignment.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  416 => 212,  411 => 210,  407 => 209,  403 => 208,  399 => 207,  395 => 206,  391 => 205,  387 => 204,  383 => 203,  379 => 202,  374 => 199,  362 => 195,  358 => 194,  354 => 193,  350 => 192,  346 => 191,  342 => 190,  338 => 189,  334 => 188,  330 => 187,  326 => 186,  322 => 185,  319 => 184,  315 => 183,  289 => 160,  285 => 159,  277 => 154,  271 => 151,  265 => 148,  259 => 145,  253 => 142,  247 => 139,  223 => 118,  213 => 111,  209 => 110,  199 => 103,  195 => 102,  188 => 98,  184 => 97,  177 => 93,  173 => 92,  167 => 89,  162 => 87,  159 => 86,  153 => 82,  151 => 81,  148 => 80,  137 => 78,  133 => 77,  131 => 76,  128 => 75,  121 => 68,  118 => 67,  73 => 23,  68 => 21,  58 => 15,  55 => 14,  48 => 10,  41 => 9,  35 => 8,  30 => 6,);
    }
}
