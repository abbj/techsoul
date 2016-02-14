<?php

/* CrowdRiseBundle:Default/Projets:publier_projet.html.twig */
class __TwigTemplate_e5947344e3a32e79aa82e5e14b46f371bbe321e47f8c592c22b489a06be49fdd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "CrowdRiseBundle:Default/Projets:publier_projet.html.twig", 2);
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

    // line 5
    public function block_scriptcss($context, array $blocks = array())
    {
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "<div class=\"container\">
  
            <div class=\"row\">
                
                <div class=\"span6 offset3\">
                
               <form class=\"span6 form\" role=\"form\" method=\"post\" action=\"index.php\">
\t<div class=\"form-group\">
            <label for=\"name\" ><h3>Name</h3></label>
\t\t<div class=\"col-lg-10\">
\t\t\t<input type=\"text\" class=\"form-control\" id=\"name\" name=\"name\" placeholder=\"First & Last Name\" value=\"\">
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"email\" class=\"col-lg-2 control-label\">Email</label>
\t\t<div class=\"col-lg-10\">
\t\t\t<input type=\"email\" class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"example@domain.com\" value=\"\">
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"message\" class=\"col-lg-2 control-label\">Message</label>
\t\t<div class=\"col-lg-10\">
\t\t\t<textarea class=\"form-control\" rows=\"4\" name=\"message\"></textarea>
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<label for=\"human\" class=\"col-lg-2 control-label\">2 + 3 = ?</label>
\t\t<div class=\"col-lg-10\">
\t\t\t<input type=\"text\" class=\"form-control\" id=\"human\" name=\"human\" placeholder=\"Your Answer\">
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<div class=\"col-lg-10 col-lg-offset-2\">
\t\t\t<input id=\"submit\" name=\"submit\" type=\"submit\" value=\"Send\" class=\"btn btn-primary\">
\t\t</div>
\t</div>
\t<div class=\"form-group\">
\t\t<div class=\"col-lg-10 col-lg-offset-2\">
\t\t\t<! Will be used to display an alert to the user>
\t\t</div>
\t</div>
</form>

                  
                
         
       </div>
            </div>
    </div>
</div>


<!-- Page Content Container -->
";
        // line 62
        $this->displayBlock('javascript', $context, $blocks);
        // line 79
        echo "
";
    }

    // line 62
    public function block_javascript($context, array $blocks = array())
    {
        echo "\t 

<script type=\"text/javascript\" src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/lib-1-9-1.js"), "html", null, true);
        echo "\"></script><!-- lib Js -->
<script type=\"text/javascript\" src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/lib-1-7-1.js"), "html", null, true);
        echo "\"></script><!-- lib Js -->
<script type=\"text/javascript\" src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/modernizr.js"), "html", null, true);
        echo "\"></script><!-- Modernizr -->
<script type=\"text/javascript\" src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/easing.js"), "html", null, true);
        echo "\"></script><!-- Easing js -->
<script type=\"text/javascript\" src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script><!-- Bootstrap -->
<script type=\"text/javascript\" src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bxslider.js"), "html", null, true);
        echo "\"></script><!-- BX Slider -->
<script type=\"text/javascript\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/clearInput.js"), "html", null, true);
        echo "\"></script><!-- Input Clear -->
<script type=\"text/javascript\" src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/lgooth-scroll.js"), "html", null, true);
        echo "\"></script><!-- lgooth Scroll -->
<script type=\"text/javascript\" src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/prettyPhoto.js"), "html", null, true);
        echo "\"></script><!-- Pretty Photo -->
<script type=\"text/javascript\" src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/social.js"), "html", null, true);
        echo "\"></script><!-- Social Media Hover Effect -->
<script type=\"text/javascript\" src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/countdown.js"), "html", null, true);
        echo "\"></script><!-- Event Counter -->
<script type=\"text/javascript\" src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script><!-- Custom / Functions -->


";
    }

    public function getTemplateName()
    {
        return "CrowdRiseBundle:Default/Projets:publier_projet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 75,  146 => 74,  142 => 73,  138 => 72,  134 => 71,  130 => 70,  126 => 69,  122 => 68,  118 => 67,  114 => 66,  110 => 65,  106 => 64,  100 => 62,  95 => 79,  93 => 62,  38 => 9,  35 => 8,  30 => 5,  11 => 2,);
    }
}
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* */
/* {% block scriptcss %}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* <div class="container">*/
/*   */
/*             <div class="row">*/
/*                 */
/*                 <div class="span6 offset3">*/
/*                 */
/*                <form class="span6 form" role="form" method="post" action="index.php">*/
/* 	<div class="form-group">*/
/*             <label for="name" ><h3>Name</h3></label>*/
/* 		<div class="col-lg-10">*/
/* 			<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="">*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="form-group">*/
/* 		<label for="email" class="col-lg-2 control-label">Email</label>*/
/* 		<div class="col-lg-10">*/
/* 			<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="form-group">*/
/* 		<label for="message" class="col-lg-2 control-label">Message</label>*/
/* 		<div class="col-lg-10">*/
/* 			<textarea class="form-control" rows="4" name="message"></textarea>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="form-group">*/
/* 		<label for="human" class="col-lg-2 control-label">2 + 3 = ?</label>*/
/* 		<div class="col-lg-10">*/
/* 			<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="form-group">*/
/* 		<div class="col-lg-10 col-lg-offset-2">*/
/* 			<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="form-group">*/
/* 		<div class="col-lg-10 col-lg-offset-2">*/
/* 			<! Will be used to display an alert to the user>*/
/* 		</div>*/
/* 	</div>*/
/* </form>*/
/* */
/*                   */
/*                 */
/*          */
/*        </div>*/
/*             </div>*/
/*     </div>*/
/* </div>*/
/* */
/* */
/* <!-- Page Content Container -->*/
/* {% block javascript %}	 */
/* */
/* <script type="text/javascript" src="{{asset('js/lib-1-9-1.js')}}"></script><!-- lib Js -->*/
/* <script type="text/javascript" src="{{asset('js/lib-1-7-1.js')}}"></script><!-- lib Js -->*/
/* <script type="text/javascript" src="{{asset('js/modernizr.js')}}"></script><!-- Modernizr -->*/
/* <script type="text/javascript" src="{{asset('js/easing.js')}}"></script><!-- Easing js -->*/
/* <script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script><!-- Bootstrap -->*/
/* <script type="text/javascript" src="{{asset('js/bxslider.js')}}"></script><!-- BX Slider -->*/
/* <script type="text/javascript" src="{{asset('js/clearInput.js')}}"></script><!-- Input Clear -->*/
/* <script type="text/javascript" src="{{asset('js/lgooth-scroll.js')}}"></script><!-- lgooth Scroll -->*/
/* <script type="text/javascript" src="{{asset('js/prettyPhoto.js')}}"></script><!-- Pretty Photo -->*/
/* <script type="text/javascript" src="{{asset('js/social.js')}}"></script><!-- Social Media Hover Effect -->*/
/* <script type="text/javascript" src="{{asset('js/countdown.js')}}"></script><!-- Event Counter -->*/
/* <script type="text/javascript" src="{{asset('js/custom.js')}}"></script><!-- Custom / Functions -->*/
/* */
/* */
/* {% endblock %}*/
/* */
/* {% endblock %}*/
