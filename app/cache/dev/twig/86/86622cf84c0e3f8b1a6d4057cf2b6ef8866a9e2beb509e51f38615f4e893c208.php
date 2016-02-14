<?php

/* CrowdRiseBundle:Default/Projets:detail_projets.html.twig */
class __TwigTemplate_8abf8b37bff28d582c32764f2951338bd06cf21664138d52ae1d390fb62b1815 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "CrowdRiseBundle:Default/Projets:detail_projets.html.twig", 2);
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
        echo "<!-- Page Content Container -->
<section id=\"content\" class=\"mbtm fund_rasising_listing\">
\t<section class=\"container-fluid container\">
\t
\t\t<section class=\"row-fluid\">
\t\t\t
\t\t\t<section class=\"span9 fund_project_detail\" id=\"fund_project_detail\">  
\t\t\t\t\t
\t\t\t\t\t<figure class=\"span12 first outer_lyr\" id=\"category_image\"> 
\t\t\t\t\t\t
\t\t\t\t\t\t<img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/crowd_funding_detail.jpg"), "html", null, true);
        echo "\" alt=\"Crowd Funding\" />

\t\t\t\t\t<figure class=\"span12 first fund_project\" id=\"charity_progress\">
 \t\t\t\t\t\t\t
\t\t\t\t\t<div class=\"span12 first\">
\t\t\t\t\t\t<span class=\"current_collection\">   </span>
\t\t\t\t\t\t
\t\t\t\t\t\t<h4>  </h4>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"progress progress-striped active\">  
\t\t\t\t\t\t\t\t<div class=\"bar p80\"></div>    
\t\t\t\t\t\t</div>
\t\t\t\t\t\t 
\t\t\t\t\t\t <div class=\"info\"> 
\t\t\t\t\t\t\t\t\t<div class=\"span3 first\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon-user\"></i> <span> 39 </span> Pledgers
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"span4 first\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-fullscreen\"></i> <span> Pledged of \$200,000 Goal </span> 
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"span2 first\">
\t\t\t\t\t\t\t\t\t\t <i class=\"icon-dashboard\"></i>  <span> \$9,721 </span>  
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"span3\" id=\"dayz\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon-calendar-empty\"></i> <span> 74 </span> Days Left
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t
\t\t\t\t\t\t</div>\t\t\t\t\t\t\t
\t\t\t\t\t\t
\t\t\t\t\t</figure>
\t\t\t\t
\t\t\t\t\t</figure>
\t\t\t
\t\t\t\t\t<figure class=\"span12 first outer_lyr\" id=\"project_contet\">
\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"inner_lyr\">
\t\t\t\t\t\t\t<h3> Help us to build charity hospital </h3>
\t\t\t\t\t\t\t<p> At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. </p>
\t\t\t\t\t\t\t<p> At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. </p>
\t\t\t\t\t\t\t<p> At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. </p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t</figure>
\t\t\t\t\t
\t\t\t\t\t<figure class=\"span12 first\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"tier_button\"> Donation Tiers </a>
\t\t\t\t\t\t\t<ul  id=\"tiers\">
\t\t\t\t\t\t\t\t<li> \t<span class=\"span3 first\">  <strong>  Tier 1 </strong> : \$1 to 50 </span> <span class=\"span8\"> Every little bit counts. After all, it all adds up in the end.  \t\t<a href=\"#\" class=\"donate_btn pull-right\"> Donate </a> </span> </li>
\t\t\t\t\t\t\t\t<li> \t<span class=\"span3 first\">  <strong> Tier 2 </strong> : \$50 to 100 </span> <span class=\"span8\"> There are friends and then there are best friends. Welcome! \t\t<a href=\"#\" class=\"donate_btn pull-right\"> Donate </a> </span> </li>
\t\t\t\t\t\t\t\t<li> \t<span class=\"span3 first\">  <strong> Tier 3 </strong> : \$100 to 500 </span> <span class=\"span8\"> Your relationship is strong enough for some serious support. \t\t<a href=\"#\" class=\"donate_btn pull-right\"> Donate </a></span> </li>
\t\t\t\t\t\t\t\t<li> \t<span class=\"span3 first\">  <strong> Tier 4 </strong> : \$501 to 1000 </span> <span class=\"span8\"> Everyone has an adoring fan somewhere. That person is you. \t\t<a href=\"#\" class=\"donate_btn pull-right\"> Donate </a> </span> </li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t
\t\t\t\t\t</figure>
\t\t\t</section>
\t\t\t\t
\t\t\t\t
\t\t\t<section id=\"sidebar\" class=\"span3\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<figure class=\"widget social_follow\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div id=\"social_follow\">
\t\t\t\t\t\t\t\t\t<span class=\"social_fb\"> <i class=\"icon-facebook\"></i> <em> 5678 Folowers </em> </span>
\t\t\t\t\t\t\t\t\t<span class=\"social_twitter\"> <i class=\"icon-twitter\"></i> <em> 5678 Folowers</em> </span>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<figure class=\"widget events\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<h3> <i class=\"icon-bullhorn\"></i> Recent Events </h3>
\t\t\t\t\t\t\t\t\t<ul id=\"posts\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"img span4 first\"> <img src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/post_img.png"), "html", null, true);
        echo "\" alt=\"recent Event Image\" /> </div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_content span8\"> 
\t\t\t\t\t\t\t\t\t\t\t\t<h4> <a href=\"#\" alt=\"post Title\"> Food Expo </a> </h4>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"location_date\"> <span> <i class=\"icon-calendar\"></i> 12 june 2013</span> <span> <i class=\"icon-map-marker\"></i> San Jose  </span> </div>
 \t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"img span4 first\"> <img src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/post_img.png"), "html", null, true);
        echo "\" alt=\"recent Event Image\" /> </div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_content span8\"> 
\t\t\t\t\t\t\t\t\t\t\t\t<h4> <a href=\"#\" alt=\"post Title\"> Volunteer Training </a> </h4>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"location_date\"> <span> <i class=\"icon-calendar\"></i> 12 june 2013</span> <span> <i class=\"icon-map-marker\"></i> LUM, Ohayo   </span> </div>
 \t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"img span4 first\"> <img src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/post_img.png"), "html", null, true);
        echo "\" alt=\"recent Event Image\" /> </div>
\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"post_content span8\"> 
\t\t\t\t\t\t\t\t\t\t\t\t<h4> <a href=\"#\" alt=\"post Title\"> Fund Raising </a> </h4>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"location_date\"> <span> <i class=\"icon-calendar\"></i> 12 june 2013</span> <span> <i class=\"icon-map-marker\"></i> Redox Park, Oslo   </span> </div>
 \t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</figure>
\t\t\t\t
\t\t\t\t\t\t\t<figure class=\"widget recent_comments\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<h3> <i class=\"icon-comments\"></i> Recent Comments </h3>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<ul id=\"recent_Comments\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<li> <i class=\"icon-comments-alt\"></i> <span>  <a href=\"#\"> morbi tristique </a> senectus et netus et a fames ac turpis egestas. </span> </li>
\t\t\t\t\t\t\t\t\t\t<li> <i class=\"icon-comments-alt\"></i> <span>  <a href=\"#\"> morbi tristique </a> senectus et netus et a fames ac turpis egestas. </span> </li>
\t\t\t\t\t\t\t\t\t\t<li> <i class=\"icon-comments-alt\"></i> <span> Pellentesque habitant <a href=\"#\"> Pellentesque habitant </a> senectus et netus et a fames ac turpis egestas. </span> </li>
\t\t\t\t\t\t\t\t\t\t<li> <i class=\"icon-comments-alt\"></i> <span>  <a href=\"#\"> morbi tristique </a> senectus et netus et a fames ac turpis egestas. </span> </li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</figure>

\t\t\t\t\t\t\t<figure class=\"widget slider_products\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<h3> <i class=\"icon-pushpin\"></i> Charity Store </h3>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<ul id=\"slider_products\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<li> 
\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_img\"> <img src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/product_image.jpg"), "html", null, true);
        echo "\" alt=\"Product Image\" /> </div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"bottom_sec\"> <span class=\"price\"> \$22.45</span> <span> <a href=\"#\"> Add to cart  <i class=\"icon-shopping-cart\"></i></a>  </span> </div>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t
\t\t\t\t\t\t\t<figure class=\"widget latest_tweets\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<h3> <i class=\"icon-twitter\"></i> Social Updates </h3>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<ul id=\"latest_tweets\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\tCheck out tht #themeforest item 'Outshined - Responsive HTML5 Template' <a href=\"#\"> http://t.co/eG4MjTOdUJ </a>
\t\t\t\t\t\t\t\t\t<span> About 10 hours ago </span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\tNew Design by @trendyWebStar on @dribbble  <a href=\"#\">http://t.co/zVLLkLabus </a>
\t\t\t\t\t\t\t\t\t<span> About 23 hours ago </span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\tCheck out tht #themeforest item 'Outshined - Responsive HTML5  <a href=\"#\"> http://t.co/eG4MjTOdUJ </a>
\t\t\t\t\t\t\t\t\t<span> About 10 hours ago </span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\tCheck out tht #themeforest item 'Outshined - Responsive HTML5 Template' <a href=\"#\"> http://t.co/eG4MjTOdUJ </a>
\t\t\t\t\t\t\t\t\t<span> About 10 hours ago </span>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t
\t\t\t\t\t\t\t<figure class=\"widget tags\">
\t\t\t\t\t\t\t\t<h3> <i class=\"icon-tags\"></i> Tags </h3>
\t\t\t\t\t\t\t\t<ul id=\"tags\">
\t\t\t\t\t\t\t\t\t<li> <a href=\"#\"> charity </a> </li>
\t\t\t\t\t\t\t\t\t<li> <a href=\"#\"> donate </a> </li>
\t\t\t\t\t\t\t\t\t<li> <a href=\"#\"> donations </a> </li>
\t\t\t\t\t\t\t\t\t<li> <a href=\"#\" class=\"active\"> give </a> </li>
\t\t\t\t\t\t\t\t\t<li> <a href=\"#\"> giving </a> </li>
\t\t\t\t\t\t\t\t\t<li> <a href=\"#\"> non-profit </a> </li>
\t\t\t\t\t\t\t\t\t<li> <a href=\"#\"> volunteer </a> </li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</figure>
\t\t\t\t
\t\t\t\t\t\t\t<figure class=\"widget post_archives\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<h3> <i class=\"icon-folder-open\"></i> Past Events </h3>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<ul id=\"post_archives\">
\t\t\t\t\t\t\t\t<li> <a href=\"#\"> January \t\t<span> (2013) </span> </a> </li>
\t\t\t\t\t\t\t\t<li> <a href=\"#\"> Feburary  \t<span> (2013) </span> </a> </li>
\t\t\t\t\t\t\t\t<li> <a href=\"#\"> March\t\t \t<span> (2013) </span> </a> </li>
\t\t\t\t\t\t\t\t<li> <a href=\"#\"> April \t\t<span> (2013) </span> </a> </li>
\t\t\t\t\t\t\t\t<li> <a href=\"#\"> May   \t\t<span> (2013) </span> </a> </li>
\t\t\t\t\t\t\t\t<li> <a href=\"#\"> June  \t\t<span> (2013) </span> </a> </li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</figure>
\t\t\t
\t\t\t</section>
 
\t\t</section>
\t</section>

</section>


";
        // line 223
        $this->displayBlock('javascript', $context, $blocks);
        // line 227
        echo "
";
    }

    // line 223
    public function block_javascript($context, array $blocks = array())
    {
        echo "\t 


";
    }

    public function getTemplateName()
    {
        return "CrowdRiseBundle:Default/Projets:detail_projets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 223,  271 => 227,  269 => 223,  195 => 152,  158 => 118,  146 => 109,  134 => 100,  50 => 19,  38 => 9,  35 => 8,  30 => 5,  11 => 2,);
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
/* <!-- Page Content Container -->*/
/* <section id="content" class="mbtm fund_rasising_listing">*/
/* 	<section class="container-fluid container">*/
/* 	*/
/* 		<section class="row-fluid">*/
/* 			*/
/* 			<section class="span9 fund_project_detail" id="fund_project_detail">  */
/* 					*/
/* 					<figure class="span12 first outer_lyr" id="category_image"> */
/* 						*/
/* 						<img src="{{asset('images/crowd_funding_detail.jpg')}}" alt="Crowd Funding" />*/
/* */
/* 					<figure class="span12 first fund_project" id="charity_progress">*/
/*  							*/
/* 					<div class="span12 first">*/
/* 						<span class="current_collection">   </span>*/
/* 						*/
/* 						<h4>  </h4>*/
/* 						*/
/* 						<div class="progress progress-striped active">  */
/* 								<div class="bar p80"></div>    */
/* 						</div>*/
/* 						 */
/* 						 <div class="info"> */
/* 									<div class="span3 first">*/
/* 										<i class="icon-user"></i> <span> 39 </span> Pledgers*/
/* 									</div>*/
/* 									*/
/* 									<div class="span4 first">*/
/* 									<i class="icon-fullscreen"></i> <span> Pledged of $200,000 Goal </span> */
/* 									</div>*/
/* 									*/
/* 									<div class="span2 first">*/
/* 										 <i class="icon-dashboard"></i>  <span> $9,721 </span>  */
/* 									</div>*/
/* 									*/
/* 									<div class="span3" id="dayz">*/
/* 										<i class="icon-calendar-empty"></i> <span> 74 </span> Days Left*/
/* 									</div>*/
/* 									*/
/* 							  </div>*/
/* 						*/
/* 						</div>							*/
/* 						*/
/* 					</figure>*/
/* 				*/
/* 					</figure>*/
/* 			*/
/* 					<figure class="span12 first outer_lyr" id="project_contet">*/
/* 					*/
/* 							<div class="inner_lyr">*/
/* 							<h3> Help us to build charity hospital </h3>*/
/* 							<p> At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. </p>*/
/* 							<p> At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. </p>*/
/* 							<p> At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. </p>*/
/* 							</div>*/
/* 					</figure>*/
/* 					*/
/* 					<figure class="span12 first">*/
/* 							<a href="#" class="tier_button"> Donation Tiers </a>*/
/* 							<ul  id="tiers">*/
/* 								<li> 	<span class="span3 first">  <strong>  Tier 1 </strong> : $1 to 50 </span> <span class="span8"> Every little bit counts. After all, it all adds up in the end.  		<a href="#" class="donate_btn pull-right"> Donate </a> </span> </li>*/
/* 								<li> 	<span class="span3 first">  <strong> Tier 2 </strong> : $50 to 100 </span> <span class="span8"> There are friends and then there are best friends. Welcome! 		<a href="#" class="donate_btn pull-right"> Donate </a> </span> </li>*/
/* 								<li> 	<span class="span3 first">  <strong> Tier 3 </strong> : $100 to 500 </span> <span class="span8"> Your relationship is strong enough for some serious support. 		<a href="#" class="donate_btn pull-right"> Donate </a></span> </li>*/
/* 								<li> 	<span class="span3 first">  <strong> Tier 4 </strong> : $501 to 1000 </span> <span class="span8"> Everyone has an adoring fan somewhere. That person is you. 		<a href="#" class="donate_btn pull-right"> Donate </a> </span> </li>*/
/* 								*/
/* 							</ul>*/
/* 							*/
/* 					</figure>*/
/* 			</section>*/
/* 				*/
/* 				*/
/* 			<section id="sidebar" class="span3">*/
/* 							*/
/* 							<figure class="widget social_follow">*/
/* 								*/
/* 								<div id="social_follow">*/
/* 									<span class="social_fb"> <i class="icon-facebook"></i> <em> 5678 Folowers </em> </span>*/
/* 									<span class="social_twitter"> <i class="icon-twitter"></i> <em> 5678 Folowers</em> </span>*/
/* 									*/
/* 								</div>*/
/* 									*/
/* 							</figure>*/
/* 							*/
/* 							<figure class="widget events">*/
/* 									*/
/* 									<h3> <i class="icon-bullhorn"></i> Recent Events </h3>*/
/* 									<ul id="posts">*/
/* 									*/
/* 										<li>*/
/* 											*/
/* 											<div class="img span4 first"> <img src="{{asset('images/post_img.png')}}" alt="recent Event Image" /> </div>*/
/* 											*/
/* 											<div class="post_content span8"> */
/* 												<h4> <a href="#" alt="post Title"> Food Expo </a> </h4>*/
/* 												<div class="location_date"> <span> <i class="icon-calendar"></i> 12 june 2013</span> <span> <i class="icon-map-marker"></i> San Jose  </span> </div>*/
/*  											</div>*/
/* 										</li>*/
/* 										<li>*/
/* 											*/
/* 											<div class="img span4 first"> <img src="{{asset('images/post_img.png')}}" alt="recent Event Image" /> </div>*/
/* 											*/
/* 											<div class="post_content span8"> */
/* 												<h4> <a href="#" alt="post Title"> Volunteer Training </a> </h4>*/
/* 												<div class="location_date"> <span> <i class="icon-calendar"></i> 12 june 2013</span> <span> <i class="icon-map-marker"></i> LUM, Ohayo   </span> </div>*/
/*  											</div>*/
/* 										</li>*/
/* 										<li>*/
/* 											*/
/* 											<div class="img span4 first"> <img src="{{asset('images/post_img.png')}}" alt="recent Event Image" /> </div>*/
/* 											*/
/* 											<div class="post_content span8"> */
/* 												<h4> <a href="#" alt="post Title"> Fund Raising </a> </h4>*/
/* 												<div class="location_date"> <span> <i class="icon-calendar"></i> 12 june 2013</span> <span> <i class="icon-map-marker"></i> Redox Park, Oslo   </span> </div>*/
/*  											</div>*/
/* 										</li>*/
/* 									*/
/* 									</ul>*/
/* 									*/
/* 							*/
/* 							</figure>*/
/* 				*/
/* 							<figure class="widget recent_comments">*/
/* 							*/
/* 								<h3> <i class="icon-comments"></i> Recent Comments </h3>*/
/* 								*/
/* 								<ul id="recent_Comments">*/
/* 										*/
/* 										<li> <i class="icon-comments-alt"></i> <span>  <a href="#"> morbi tristique </a> senectus et netus et a fames ac turpis egestas. </span> </li>*/
/* 										<li> <i class="icon-comments-alt"></i> <span>  <a href="#"> morbi tristique </a> senectus et netus et a fames ac turpis egestas. </span> </li>*/
/* 										<li> <i class="icon-comments-alt"></i> <span> Pellentesque habitant <a href="#"> Pellentesque habitant </a> senectus et netus et a fames ac turpis egestas. </span> </li>*/
/* 										<li> <i class="icon-comments-alt"></i> <span>  <a href="#"> morbi tristique </a> senectus et netus et a fames ac turpis egestas. </span> </li>*/
/* 								</ul>*/
/* 							*/
/* 							</figure>*/
/* */
/* 							<figure class="widget slider_products">*/
/* 							*/
/* 								<h3> <i class="icon-pushpin"></i> Charity Store </h3>*/
/* 								*/
/* 								<ul id="slider_products">*/
/* 								*/
/* 									<li> */
/* 											<div class="product_img"> <img src="{{asset('images/product_image.jpg')}}" alt="Product Image" /> </div>*/
/* 											<div class="bottom_sec"> <span class="price"> $22.45</span> <span> <a href="#"> Add to cart  <i class="icon-shopping-cart"></i></a>  </span> </div>*/
/* 									</li>*/
/* 								*/
/* 								</ul>*/
/* 								*/
/* 							*/
/* 							</figure>*/
/* 						*/
/* 							<figure class="widget latest_tweets">*/
/* 							*/
/* 								<h3> <i class="icon-twitter"></i> Social Updates </h3>*/
/* 								*/
/* 								<ul id="latest_tweets">*/
/* 									<li>*/
/* 									Check out tht #themeforest item 'Outshined - Responsive HTML5 Template' <a href="#"> http://t.co/eG4MjTOdUJ </a>*/
/* 									<span> About 10 hours ago </span>*/
/* 									</li>*/
/* 									<li>*/
/* 									New Design by @trendyWebStar on @dribbble  <a href="#">http://t.co/zVLLkLabus </a>*/
/* 									<span> About 23 hours ago </span>*/
/* 									</li>*/
/* 									<li>*/
/* 									Check out tht #themeforest item 'Outshined - Responsive HTML5  <a href="#"> http://t.co/eG4MjTOdUJ </a>*/
/* 									<span> About 10 hours ago </span>*/
/* 									</li>*/
/* 									<li>*/
/* 									Check out tht #themeforest item 'Outshined - Responsive HTML5 Template' <a href="#"> http://t.co/eG4MjTOdUJ </a>*/
/* 									<span> About 10 hours ago </span>*/
/* 									</li>*/
/* 								</ul>*/
/* 							*/
/* 							</figure>*/
/* 						*/
/* 							<figure class="widget tags">*/
/* 								<h3> <i class="icon-tags"></i> Tags </h3>*/
/* 								<ul id="tags">*/
/* 									<li> <a href="#"> charity </a> </li>*/
/* 									<li> <a href="#"> donate </a> </li>*/
/* 									<li> <a href="#"> donations </a> </li>*/
/* 									<li> <a href="#" class="active"> give </a> </li>*/
/* 									<li> <a href="#"> giving </a> </li>*/
/* 									<li> <a href="#"> non-profit </a> </li>*/
/* 									<li> <a href="#"> volunteer </a> </li>*/
/* 								</ul>*/
/* 							*/
/* 							</figure>*/
/* 				*/
/* 							<figure class="widget post_archives">*/
/* 							*/
/* 							<h3> <i class="icon-folder-open"></i> Past Events </h3>*/
/* 							*/
/* 							<ul id="post_archives">*/
/* 								<li> <a href="#"> January 		<span> (2013) </span> </a> </li>*/
/* 								<li> <a href="#"> Feburary  	<span> (2013) </span> </a> </li>*/
/* 								<li> <a href="#"> March		 	<span> (2013) </span> </a> </li>*/
/* 								<li> <a href="#"> April 		<span> (2013) </span> </a> </li>*/
/* 								<li> <a href="#"> May   		<span> (2013) </span> </a> </li>*/
/* 								<li> <a href="#"> June  		<span> (2013) </span> </a> </li>*/
/* 							</ul>*/
/* 								*/
/* 							</figure>*/
/* 			*/
/* 			</section>*/
/*  */
/* 		</section>*/
/* 	</section>*/
/* */
/* </section>*/
/* */
/* */
/* {% block javascript %}	 */
/* */
/* */
/* {% endblock %}*/
/* */
/* {% endblock %}*/
