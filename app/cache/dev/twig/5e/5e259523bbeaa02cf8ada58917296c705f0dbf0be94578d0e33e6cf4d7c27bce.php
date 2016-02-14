<?php

/* CrowdRiseBundle:Default/login:login.html.twig */
class __TwigTemplate_83a11eb984ac82c4c119e33bc8a46d0a9b0c7aa525aa7abbe6e43955fb5fc188 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "CrowdRiseBundle:Default/login:login.html.twig", 3);
        $this->blocks = array(
            'scriptcss' => array($this, 'block_scriptcss'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_scriptcss($context, array $blocks = array())
    {
        // line 5
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/test/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            

";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "<div class=\"row\">
  <div class=\"col-sm-6 col-md-4\">
    <div class=\"thumbnail\">
      <img src=\"...\" alt=\"...\">
      <div class=\"caption\">
        <h3>Thumbnail label</h3>
        <p>...</p>
        <p><a href=\"#\" class=\"btn btn-primary\" role=\"button\">Button</a> <a href=\"#\" class=\"btn btn-default\" role=\"button\">Button</a></p>
      </div>
    </div>
  </div>
</div>
";
    }

    // line 24
    public function block_javascript($context, array $blocks = array())
    {
        echo "\t 

        <script type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/test/jquery-1.9.1.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/test/jquery.leanModal.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/test/login.js"), "html", null, true);
        echo "\"></script>



";
    }

    public function getTemplateName()
    {
        return "CrowdRiseBundle:Default/login:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 28,  71 => 27,  67 => 26,  61 => 24,  45 => 11,  42 => 10,  33 => 5,  30 => 4,  11 => 3,);
    }
}
/* */
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* {% block scriptcss %}*/
/*             <link href="{{asset('css/test/style.css')}}" rel="stylesheet" type="text/css" />*/
/*             */
/* */
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* <div class="row">*/
/*   <div class="col-sm-6 col-md-4">*/
/*     <div class="thumbnail">*/
/*       <img src="..." alt="...">*/
/*       <div class="caption">*/
/*         <h3>Thumbnail label</h3>*/
/*         <p>...</p>*/
/*         <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {% endblock %}*/
/* {% block javascript %}	 */
/* */
/*         <script type="text/javascript" src="{{asset('js/test/jquery-1.9.1.min.js')}}"></script>*/
/*         <script type="text/javascript" src="{{asset('js/test/jquery.leanModal.min.js')}}"></script>*/
/*         <script type="text/javascript" src="{{asset('js/test/login.js')}}"></script>*/
/* */
/* */
/* */
/* {% endblock %}*/
