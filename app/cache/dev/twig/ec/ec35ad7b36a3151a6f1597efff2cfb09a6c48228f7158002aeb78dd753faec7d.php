<?php

/* CrowdRiseBundle:Default/Projets:financement_projets.html.twig */
class __TwigTemplate_136d251019fed1f3644cedcf47fbb34ffd968a7fc949587e9d515822ad3ef7fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "CrowdRiseBundle:Default/Projets:financement_projets.html.twig", 2);
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
\t\t\t<section class=\"span9 fund_rasising_listing\" id=\"fund_rasising_listing\">  
\t\t\t\t\t
\t\t\t\t\t<figure class=\"span12 first outer_lyr\" id=\"category_image\"> 
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"\">
\t\t\t\t\t\t<img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/crowd_funding_detail.jpg"), "html", null, true);
        echo "\" alt=\"Crowd Funding\" />
\t\t\t\t\t<figure class=\"span12 first fund_project\" id=\"charity_progress\">
\t\t\t\t\t\t\t<h3> Help us to build charity hospital </h3>
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
\t\t\t\t\t\t</div>

\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t
\t\t\t\t\t<figure class=\"span12 first form\" id=\"charity_payment\">
\t\t<h3> Pay from your savings </h3>
\t\t<p> We recommend you fill this in with clear instructions about how your project is going to go after you've reached your goal. It would also be very smart to mention what you'll do if you don't reach your goal. </p>
\t\t\t<form class=\"crowd_fund\" method=\"post\" action=\"contact.php\">
\t\t\t\t<input type=\"text\" value=\"First name\" name=\"f_name\" />
\t\t\t\t<input type=\"text\" value=\"Last Name\" name=\"l_name\" />
\t\t\t\t<input type=\"text\" value=\"Email@yourdomain.com\" name=\"email\" />
\t\t\t\t<textarea name=\"address\" cols=\"10\" rows=\"2\"> Enter address</textarea>
\t\t\t\t<input id=\"price_entry\" type=\"text\" value=\"\$10.00\" name=\"price_entry\">
\t\t\t\t<textarea name=\"comments\" cols=\"10\" rows=\"5\"> Enter your Comment</textarea>
\t\t\t\t<input type=\"submit\" class=\"btns\" value=\"Make Payment\" name=\"submit\" />
\t\t\t</form>
\t\t</figure>
\t\t</section>
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
        // line 94
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
        // line 103
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
        // line 112
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
        // line 146
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
<!-- Page Content Container -->

";
        // line 217
        $this->displayBlock('javascript', $context, $blocks);
        // line 221
        echo "
";
    }

    // line 217
    public function block_javascript($context, array $blocks = array())
    {
        echo "\t 


";
    }

    public function getTemplateName()
    {
        return "CrowdRiseBundle:Default/Projets:financement_projets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 217,  265 => 221,  263 => 217,  189 => 146,  152 => 112,  140 => 103,  128 => 94,  51 => 20,  38 => 9,  35 => 8,  30 => 5,  11 => 2,);
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
/* 			<section class="span9 fund_rasising_listing" id="fund_rasising_listing">  */
/* 					*/
/* 					<figure class="span12 first outer_lyr" id="category_image"> */
/* 						*/
/* 						<div class="">*/
/* 						<img src="{{asset('images/crowd_funding_detail.jpg')}}" alt="Crowd Funding" />*/
/* 					<figure class="span12 first fund_project" id="charity_progress">*/
/* 							<h3> Help us to build charity hospital </h3>*/
/* 							*/
/* 					<div class="span12 first">*/
/* 						<span class="current_collection">   </span>*/
/* 						*/
/* 						<h4>  </h4>*/
/* 						*/
/* 						<div class="progress progress-striped active">  */
/* 								<div class="bar p80"></div>  */
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
/* 						</div>*/
/* */
/* 					</figure>*/
/* 								*/
/* 					<figure class="span12 first form" id="charity_payment">*/
/* 		<h3> Pay from your savings </h3>*/
/* 		<p> We recommend you fill this in with clear instructions about how your project is going to go after you've reached your goal. It would also be very smart to mention what you'll do if you don't reach your goal. </p>*/
/* 			<form class="crowd_fund" method="post" action="contact.php">*/
/* 				<input type="text" value="First name" name="f_name" />*/
/* 				<input type="text" value="Last Name" name="l_name" />*/
/* 				<input type="text" value="Email@yourdomain.com" name="email" />*/
/* 				<textarea name="address" cols="10" rows="2"> Enter address</textarea>*/
/* 				<input id="price_entry" type="text" value="$10.00" name="price_entry">*/
/* 				<textarea name="comments" cols="10" rows="5"> Enter your Comment</textarea>*/
/* 				<input type="submit" class="btns" value="Make Payment" name="submit" />*/
/* 			</form>*/
/* 		</figure>*/
/* 		</section>*/
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
/* <!-- Page Content Container -->*/
/* */
/* {% block javascript %}	 */
/* */
/* */
/* {% endblock %}*/
/* */
/* {% endblock %}*/
