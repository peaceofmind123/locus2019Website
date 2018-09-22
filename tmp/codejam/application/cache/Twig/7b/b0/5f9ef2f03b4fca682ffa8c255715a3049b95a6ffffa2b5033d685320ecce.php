<?php

/* pages/profile.twig */
class __TwigTemplate_7bb05f9ef2f03b4fca682ffa8c255715a3049b95a6ffffa2b5033d685320ecce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("templates/base.twig");

        $this->blocks = array(
            'icon' => array($this, 'block_icon'),
            'title' => array($this, 'block_title'),
            'head_title' => array($this, 'block_head_title'),
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
        $context["selected"] = "users";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_icon($context, array $blocks = array())
    {
        echo "fa-user";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Profile";
    }

    // line 10
    public function block_head_title($context, array $blocks = array())
    {
        echo "Profile";
    }

    // line 14
    public function block_main_content($context, array $blocks = array())
    {
        // line 15
        echo "<p class=\"input_p\">
";
        // line 16
        if (((isset($context["form_status"]) ? $context["form_status"] : null) == "ok")) {
            // line 17
            echo "<div class=\"shj_ok\">Profile updated successfully.</div>
";
        } elseif (((isset($context["form_status"]) ? $context["form_status"] : null) == "error")) {
            // line 19
            echo "\t<div class=\"shj_error\">Error updating profile.</div>
";
        }
        // line 21
        echo "</p>
";
        // line 22
        echo form_open(("profile/" . (isset($context["id"]) ? $context["id"] : null)));
        echo "
<p class=\"input_p clear\">
\t<label for=\"form_username\" class=\"short2\">Username:<br>
\t\t<span class=\"form_comment\">You cannot change username.</span>
\t</label>
\t<input id=\"form_username\" type=\"text\" name=\"username\" class=\"sharif_input medium\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["edit_username"]) ? $context["edit_username"] : null), "html", null, true);
        echo "\"  disabled/>
</p>
<p class=\"input_p clear\">
\t<label for=\"form_name\" class=\"short2\">Name:</label>
\t<input id=\"form_name\" type=\"text\" name=\"display_name\" class=\"sharif_input medium\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["display_name"]) ? $context["display_name"] : null), "html", null, true);
        echo "\"/>
\t";
        // line 32
        echo form_error("display_name", "<div class=\"shj_error\">", "</div>");
        echo "
</p>
<p class=\"input_p clear\">
\t<label for=\"form_email\" class=\"short2\">Email:</label>
\t<input id=\"form_email\" type=\"text\" name=\"email\" class=\"sharif_input medium\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : null), "html", null, true);
        echo "\"/>
\t";
        // line 37
        echo form_error("email", "<div class=\"shj_error\">", "</div>");
        echo "
</p>
<p class=\"input_p clear\">
\t<label for=\"form_password\" class=\"short2\">Password:<br>
\t\t<span class=\"form_comment\">If you don't want to change password, leave this blank.</span>
\t</label>
\t<input id=\"form_password\" type=\"password\" name=\"password\" class=\"sharif_input medium\"/>
\t";
        // line 44
        echo form_error("password", "<br><span class=\"shj_error\">", "</span>");
        echo "
</p>
<p class=\"input_p clear\">
\t<label for=\"form_password_2\" class=\"short2\">Password, Again:</label>
\t<input id=\"form_password_2\" type=\"password\" name=\"password_again\" class=\"sharif_input medium\"/>
\t";
        // line 49
        echo form_error("password_again", "<div class=\"shj_error\">", "</div>");
        echo "
</p>
";
        // line 51
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "level") == 3)) {
            // line 52
            echo "<p class=\"input_p clear\">
\t<label for=\"form_role\" class=\"short2\">User Role:</label>
\t<select id=\"form_role\" name=\"role\" class=\"sharif_input\">
\t\t<option value=\"admin\" ";
            // line 55
            echo ((((isset($context["role"]) ? $context["role"] : null) == "admin")) ? ("selected=\"selected\"") : (""));
            echo " >admin</option>
\t\t<option value=\"head_instructor\" ";
            // line 56
            echo ((((isset($context["role"]) ? $context["role"] : null) == "head_instructor")) ? ("selected=\"selected\"") : (""));
            echo " >head_instructor</option>
\t\t<option value=\"instructor\" ";
            // line 57
            echo ((((isset($context["role"]) ? $context["role"] : null) == "instructor")) ? ("selected=\"selected\"") : (""));
            echo " >instructor</option>
\t\t<option value=\"student\" ";
            // line 58
            echo ((((isset($context["role"]) ? $context["role"] : null) == "student")) ? ("selected=\"selected\"") : (""));
            echo " >student</option>
\t</select>
\t";
            // line 60
            echo form_error("role", "<div class=\"shj_error\">", "</div>");
            echo "
</p>
";
        }
        // line 63
        echo "<p class=\"input_p\">
\t<input type=\"submit\" value=\"Save\" class=\"sharif_input\"/>
</p>
</form>
";
    }

    public function getTemplateName()
    {
        return "pages/profile.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 63,  147 => 60,  142 => 58,  138 => 57,  134 => 56,  130 => 55,  125 => 52,  123 => 51,  118 => 49,  110 => 44,  100 => 37,  96 => 36,  89 => 32,  85 => 31,  78 => 27,  70 => 22,  67 => 21,  63 => 19,  59 => 17,  57 => 16,  54 => 15,  51 => 14,  45 => 10,  39 => 9,  33 => 8,  28 => 6,);
    }
}
