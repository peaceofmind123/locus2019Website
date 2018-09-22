<?php

/* pages/admin/delete_assignment.twig */
class __TwigTemplate_a2a225c7b5f9b02cfafe8c5fb9b32d0fe19fa0270ef2e093a67e9068d7ffc6ac extends Twig_Template
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
        $context["selected"] = "assignments";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_icon($context, array $blocks = array())
    {
        echo "fa-times";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Delete Assignment";
    }

    // line 10
    public function block_head_title($context, array $blocks = array())
    {
        echo "Delete Assignment";
    }

    // line 14
    public function block_main_content($context, array $blocks = array())
    {
        // line 15
        echo "<p>Are you sure you want to delete this assignment?</p>
<p>
\tAssignment id: ";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo "<br>
\tAssignment name: <span dir=\"auto\">";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
        echo "</span>
</p>
<p>All test cases, submission results and submitted files will be deleted.</p>
<p>You may want to keep a backup of this assignment before deleting.</p>
";
        // line 22
        echo form_open(("assignments/delete/" . (isset($context["id"]) ? $context["id"] : null)));
        echo "
<input type=\"hidden\" name=\"delete\" value=\"delete\"/>
<p class=\"input_p\">
\t<input type=\"submit\" class=\"btn shj-red\" value=\"Delete this assignment\"/>
\t<a href=\"";
        // line 26
        echo site_url("assignments");
        echo "\" class=\"btn shj-blue\">Do not delete</a>
</p>
</form>
";
    }

    public function getTemplateName()
    {
        return "pages/admin/delete_assignment.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 26,  69 => 22,  62 => 18,  58 => 17,  54 => 15,  51 => 14,  45 => 10,  39 => 9,  33 => 8,  28 => 6,);
    }
}
