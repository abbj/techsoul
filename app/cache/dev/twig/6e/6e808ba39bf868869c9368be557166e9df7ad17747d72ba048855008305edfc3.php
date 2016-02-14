<?php

/* CrowdRiseBundle:Default:connecte/connecte.html.twig */
class __TwigTemplate_462b049f9399a255e574ac491808112f36a7e90cb27ac5bfb8e6f41cd856fb3d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "CrowdRiseBundle:Default:connecte/connecte.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
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
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "    
               
<div class=\"row\">
<div class=\"col-sm-6 col-md-4\">
    <div class=\"thumbnail\">
      <img src=\"https://upload.wikimedia.org/wikipedia/commons/d/d8/Taraji_P._Henson_2010.jpg\" alt=\"...\">
      <div class=\"caption\">
        <h3>Thumbnail label</h3>
        <p>...</p>
        <p><a href=\"#\" class=\"btn btn-primary\" role=\"button\">Button</a> <a href=\"#\" class=\"btn btn-default\" role=\"button\">Button</a></p>
      </div>
  </div><div class=\"col-sm-6 col-md-4\">
    <div class=\"thumbnail\">
      <img src=\"https://upload.wikimedia.org/wikipedia/commons/d/d8/Taraji_P._Henson_2010.jpg\" alt=\"...\">
      <div class=\"caption\">
        <h3>Thumbnail label</h3>
        <p>...</p>
        <p><a href=\"#\" class=\"btn btn-primary\" role=\"button\">Button</a> <a href=\"#\" class=\"btn btn-default\" role=\"button\">Button</a></p>
      </div>
  </div>
</div>
    ";
    }

    public function getTemplateName()
    {
        return "CrowdRiseBundle:Default:connecte/connecte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  28 => 4,  11 => 1,);
    }
}
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* */
/* {% block body %}*/
/*     */
/*                */
/* <div class="row">*/
/* <div class="col-sm-6 col-md-4">*/
/*     <div class="thumbnail">*/
/*       <img src="https://upload.wikimedia.org/wikipedia/commons/d/d8/Taraji_P._Henson_2010.jpg" alt="...">*/
/*       <div class="caption">*/
/*         <h3>Thumbnail label</h3>*/
/*         <p>...</p>*/
/*         <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>*/
/*       </div>*/
/*   </div><div class="col-sm-6 col-md-4">*/
/*     <div class="thumbnail">*/
/*       <img src="https://upload.wikimedia.org/wikipedia/commons/d/d8/Taraji_P._Henson_2010.jpg" alt="...">*/
/*       <div class="caption">*/
/*         <h3>Thumbnail label</h3>*/
/*         <p>...</p>*/
/*         <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>*/
/*       </div>*/
/*   </div>*/
/* </div>*/
/*     {% endblock %}*/
