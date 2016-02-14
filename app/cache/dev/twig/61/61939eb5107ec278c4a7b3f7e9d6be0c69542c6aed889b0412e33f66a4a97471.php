<?php

/* CrowdRiseBundle:Default/Evenement:detail_evenement.html.twig */
class __TwigTemplate_788d6cc7744e15a74380c65a3a85f7947785eae4b4c3b6159aea1d7e61f4b074 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "CrowdRiseBundle:Default/Evenement:detail_evenement.html.twig", 2);
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

<section class=\"mtop\">
\t<section class=\"container-fluid container\">
\t\t<section class=\"row-fluid\">
\t\t\t<section id=\"donation_box\">
\t\t\t\t<section class=\"container container-fluid\">
\t\t\t\t<section class=\"row-fluid\">
\t\t\t\t\t<div class=\"span8 first\"> <h2> Event Detail </h2> </div>
\t\t\t\t\t<div class=\"span4 title_right\">
\t\t\t\t\t\t<div class=\"dropdown\" id=\"cart_dropdown\">
\t\t\t\t\t\t\t\t<a data-toggle=\"dropdown\" class=\"dropdown-toggle\" role=\"button\" id=\"cart_down\" href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"icon-ticket\"></i>
\t\t\t\t\t\t\t\tEvents
\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"cart_down\" role=\"menu\" id=\"listing_dropdown\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li> Charity Events <a href=\"#\"> 2 </a> </li>
\t\t\t\t\t\t\t\t\t<li> Fundraising <a href=\"#\"> 9 </a> </li>
\t\t\t\t\t\t\t\t\t<li> Non-Profit <a href=\"#\"> 2 </a> </li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t\t</section>
\t\t\t</section>\t\t<!-- end of Page Title -->
\t</section>
 \t\t<section class=\"row-fluid\">
\t\t\t<!-- BreadCrumbs -->
\t\t\t\t<figure id=\"breadcrumbs\" class=\"span12\">
\t\t\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t\t<li><a href=\"#\">Home</a> <span class=\"divider\">/</span></li>
\t\t\t\t\t<li class=\"active\">Event Detail </li>
\t\t\t\t\t</ul>
\t\t\t\t</figure>
\t\t\t<!-- End of breadcrumbs -->
\t\t</section>
\t</section>
</section>
<!-- End of Tile & Breadcrumbs -->

<!-- Page Content Container -->
<section id=\"content\" class=\"mbtm fund_rasising_listing\">
\t<section class=\"container-fluid container\">
\t
\t\t<section class=\"row-fluid\">
\t\t\t
\t\t\t<section class=\"span9 event_listing\" id=\"event_listing\">  
 
\t\t\t<figure id=\"event_grid\" class=\"span12 first outer_lyr mbtm\">
\t\t\t
\t\t\t\t<div class=\"inner_lyr\">
\t\t\t\t\t<img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/event2.jpg"), "html", null, true);
        echo "\" alt=\"Event Image\" />

\t\t\t\t\t <div class=\"event_info\">
\t\t\t\t\t\t\t<div class=\"span4 first\" id=\"event_title\">
\t\t\t\t\t\t\t<h3> Charity Show 2013 </h3>
\t\t\t\t\t\t\t<p> June 5, 2013      <span> 10:00am to 5:00pm </span> </p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"span4\" id=\"event_loc\">
\t\t\t\t\t\t\t<h3> <i class=\"icon-map-marker\"></i> St. Peters Park, San Jose </h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"span4\" id=\"event_counter\">
\t\t\t\t\t\t\t\t<div class=\"hasCountdown\" id=\"countdown156\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"countdown_row countdown_show4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"countdown_section\">\t<span class=\"countdown_amount\">\t009\t</span>\t<br>\tDays\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"countdown_section\">\t<span class=\"countdown_amount\">\t23\t</span>\t<br>\tHours\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"countdown_section\">\t<span class=\"countdown_amount\">\t18\t</span>\t<br>\tMinutes\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"countdown_section\">\t<span class=\"countdown_amount\">\t18\t</span>\t<br>\tSeconds\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t</span>\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t </div>
\t\t\t\t</div>
\t\t\t\t\t
 \t\t\t</figure>
\t\t\t
\t\t\t<figure id=\"event_detail\" class=\"span12 first outer_lyr mbtm2\">
\t\t\t
\t\t\t\t<div class=\"inner_lyr\">
\t\t\t\t\t<h3> Charity Show 2013 </h3>
\t\t\t\t\t<h4> Fundraising for the needy </h4>
\t\t\t\t\t<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. This year show will gaurantee: </p>
\t\t\t\t\t<ol>
\t\t\t\t\t<li> - Fundraising </li>
\t\t\t\t\t<li> - Education needs for those who can not afford </li>
\t\t\t\t\t<li> - Job placement services for the unemployed </li>
\t\t\t\t\t<li> - The State of Biofuel\t </li>
\t\t\t\t\t</ol>
\t\t\t\t\t
\t\t\t\t\t<h3> Why to attend? </h3>
\t\t\t\t\t<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.</p>
\t\t\t\t\t\t
\t\t\t\t<h3> Event Organizers </h3>
\t\t\t\t<h4> Ambitious Force behind this event </h4>
\t\t\t\t<figure class=\"team_member span4 first\">
\t\t\t\t\t<div class=\"member_img\">
\t\t\t\t\t\t<img src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/exective1.jpg"), "html", null, true);
        echo "\" alt=\"Team Member\" />
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"team_member_description\">
\t\t\t\t\t\t<h5>  Willaim Kite </h5>
\t\t\t\t\t\t<span class=\"mem_desig\"> Co-Director </span>
\t\t\t\t
\t\t\t\t\t\t\t<figure id=\"n_social\"> 
\t\t\t\t\t\t\t\t<a href=\"#\"> <i class=\"icon-facebook\"></i> </a> 
\t\t\t\t\t\t\t\t<a href=\"#\"> <i class=\"icon-twitter\"></i> </a> 
\t\t\t\t\t\t\t\t<a href=\"#\"> <i class=\"icon-google-plus\"></i> </a> 
 \t\t\t\t\t\t\t</figure>
\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</figure>

\t\t\t\t
\t\t\t\t<figure class=\"team_member span4\">
\t\t\t\t\t<div class=\"member_img\">
\t\t\t\t\t\t<img src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/exective2.jpg"), "html", null, true);
        echo "\" alt=\"Team Member\" />
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"team_member_description\">
\t\t\t\t\t\t<h5>  Eli Stefen </h5>
\t\t\t\t\t\t<span class=\"mem_desig\"> Marketing Director </span>
\t\t\t\t
\t\t\t\t\t\t\t<figure id=\"n_social\"> 
\t\t\t\t\t\t\t\t<a href=\"#\"> <i class=\"icon-facebook\"></i> </a> 
\t\t\t\t\t\t\t\t<a href=\"#\"> <i class=\"icon-twitter\"></i> </a> 
\t\t\t\t\t\t\t\t<a href=\"#\"> <i class=\"icon-google-plus\"></i> </a> 
 \t\t\t\t\t\t\t</figure>
\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</figure>
\t\t\t\t\t
\t\t\t\t
\t\t\t\t<figure class=\"team_member span4\">
\t\t\t\t\t<div class=\"member_img\">
\t\t\t\t\t\t<img src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/exective3.jpg"), "html", null, true);
        echo "\" alt=\"Team Member\" />
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"team_member_description\">
\t\t\t\t\t\t<h5>  Alana Newman </h5>
\t\t\t\t\t\t<span class=\"mem_desig\"> Art Director </span>
\t\t\t\t
\t\t\t\t\t\t\t<figure id=\"n_social\"> 
\t\t\t\t\t\t\t\t<a href=\"#\"> <i class=\"icon-facebook\"></i> </a> 
\t\t\t\t\t\t\t\t<a href=\"#\"> <i class=\"icon-twitter\"></i> </a> 
\t\t\t\t\t\t\t\t<a href=\"#\"> <i class=\"icon-google-plus\"></i> </a> 
 \t\t\t\t\t\t\t</figure>
\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</figure>
\t\t\t\t\t\t
\t\t\t\t</div>

\t\t\t</figure>

\t\t\t<figure id=\"map_holder\" class=\"span12 first mbtm2\"> \t\t<iframe width=\"100%\" scrolling=\"no\" height=\"300\" frameborder=\"0\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.com/?ie=UTF8&amp;ll=-20.234496,57.603722&amp;spn=0.093419,0.169086&amp;t=m&amp;z=13&amp;output=embed\" class=\"map-border\"></iframe> <div id=\"map_abs\"> <h4> Lets join Together </h4>  <span> <i class=\"icon-map-marker\"></i> <br /> Location Map </span> </div> </figure>
\t\t\t
\t\t\t<figure class=\"span12 first\">
\t\t\t
\t\t\t<section class=\"span6 first form\" id=\"contact_form\">
 \t\t\t<form action=\"contact.php\" method=\"post\">
\t\t\t\t<input type=\"text\" name=\"name\" value=\"\">
\t\t\t\t<input type=\"text\" name=\"email\" value=\"\">
\t\t\t\t<textarea rows=\"10\" cols=\"10\" name=\"comments\"> Enter your Comment</textarea>
\t\t\t\t<input type=\"submit\" name=\"submit\" value=\"Submit\" class=\"btns\">
\t\t\t</form>
\t\t\t</section>
\t\t\t
\t\t\t<section class=\"span5 contact_info offset1\" id=\"contact_info\">
\t\t\t<h3> Contact Information </h3>
\t\t\t
\t\t\t<figure class=\"span12 first\"> <i class=\"icon-envelope-alt\"></i> info@behuman.com</figure>
\t\t\t
\t\t\t<figure class=\"span12 first\"><i class=\"icon-mobile-phone\"></i> 111-22-3333</figure>
\t\t\t\t
\t\t\t\t<figure class=\"span12 first\"> 
\t\t\t\t<i class=\"icon-map-marker\"></i> 
\t\t\t\t533 Azmat st., New-York, USA
\t\t\t\t</figure>
 
\t\t\t\t<figure class=\"span12 first\" id=\"n_social\"> 
\t\t\t\t
\t\t\t\t\t<a href=\"#\"> <i class=\"icon-facebook\"></i> </a> 
\t\t\t\t\t<a href=\"#\"> <i class=\"icon-twitter\"></i> </a> 
\t\t\t\t\t<a href=\"#\"> <i class=\"icon-google-plus\"></i> </a> 
\t\t\t\t\t<a href=\"#\"> <i class=\"icon-linkedin\"></i> </a> 
\t\t\t\t\t<a href=\"#\"> <i class=\"icon-pinterest\"></i> </a> 
\t\t\t\t\t
\t\t\t\t
\t\t\t\t</figure>
\t\t\t\t
\t\t\t</section>
\t\t\t
\t\t\t
\t\t\t</figure>
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
        // line 221
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
        // line 230
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
        // line 239
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
        // line 273
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
    }

    public function getTemplateName()
    {
        return "CrowdRiseBundle:Default/Evenement:detail_evenement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 273,  285 => 239,  273 => 230,  261 => 221,  178 => 141,  157 => 123,  136 => 105,  88 => 60,  31 => 5,  28 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* */
/* {% block body %}*/
/*     */
/* */
/* <section class="mtop">*/
/* 	<section class="container-fluid container">*/
/* 		<section class="row-fluid">*/
/* 			<section id="donation_box">*/
/* 				<section class="container container-fluid">*/
/* 				<section class="row-fluid">*/
/* 					<div class="span8 first"> <h2> Event Detail </h2> </div>*/
/* 					<div class="span4 title_right">*/
/* 						<div class="dropdown" id="cart_dropdown">*/
/* 								<a data-toggle="dropdown" class="dropdown-toggle" role="button" id="cart_down" href="#">*/
/* 								<i class="icon-ticket"></i>*/
/* 								Events*/
/* 								<span class="caret"></span>*/
/* 								</a>*/
/* 						*/
/* 								<div class="dropdown-menu" aria-labelledby="cart_down" role="menu" id="listing_dropdown">*/
/* 								<ul>*/
/* 									<li> Charity Events <a href="#"> 2 </a> </li>*/
/* 									<li> Fundraising <a href="#"> 9 </a> </li>*/
/* 									<li> Non-Profit <a href="#"> 2 </a> </li>*/
/* 								</ul>*/
/* 						</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</section>*/
/* 			</section>*/
/* 			</section>		<!-- end of Page Title -->*/
/* 	</section>*/
/*  		<section class="row-fluid">*/
/* 			<!-- BreadCrumbs -->*/
/* 				<figure id="breadcrumbs" class="span12">*/
/* 					<ul class="breadcrumb">*/
/* 					<li><a href="#">Home</a> <span class="divider">/</span></li>*/
/* 					<li class="active">Event Detail </li>*/
/* 					</ul>*/
/* 				</figure>*/
/* 			<!-- End of breadcrumbs -->*/
/* 		</section>*/
/* 	</section>*/
/* </section>*/
/* <!-- End of Tile & Breadcrumbs -->*/
/* */
/* <!-- Page Content Container -->*/
/* <section id="content" class="mbtm fund_rasising_listing">*/
/* 	<section class="container-fluid container">*/
/* 	*/
/* 		<section class="row-fluid">*/
/* 			*/
/* 			<section class="span9 event_listing" id="event_listing">  */
/*  */
/* 			<figure id="event_grid" class="span12 first outer_lyr mbtm">*/
/* 			*/
/* 				<div class="inner_lyr">*/
/* 					<img src="{{asset('images/event2.jpg')}}" alt="Event Image" />*/
/* */
/* 					 <div class="event_info">*/
/* 							<div class="span4 first" id="event_title">*/
/* 							<h3> Charity Show 2013 </h3>*/
/* 							<p> June 5, 2013      <span> 10:00am to 5:00pm </span> </p>*/
/* 							</div>*/
/* 							<div class="span4" id="event_loc">*/
/* 							<h3> <i class="icon-map-marker"></i> St. Peters Park, San Jose </h3>*/
/* 							</div>*/
/* 							<div class="span4" id="event_counter">*/
/* 								<div class="hasCountdown" id="countdown156">*/
/* 												<span class="countdown_row countdown_show4">*/
/* 														<span class="countdown_section">	<span class="countdown_amount">	009	</span>	<br>	Days	</span>*/
/* 														<span class="countdown_section">	<span class="countdown_amount">	23	</span>	<br>	Hours	</span>*/
/* 														<span class="countdown_section">	<span class="countdown_amount">	18	</span>	<br>	Minutes	</span>*/
/* 														<span class="countdown_section">	<span class="countdown_amount">	18	</span>	<br>	Seconds	</span>*/
/* 												</span>								*/
/* 								</div>*/
/* 							</div>*/
/* 					 </div>*/
/* 				</div>*/
/* 					*/
/*  			</figure>*/
/* 			*/
/* 			<figure id="event_detail" class="span12 first outer_lyr mbtm2">*/
/* 			*/
/* 				<div class="inner_lyr">*/
/* 					<h3> Charity Show 2013 </h3>*/
/* 					<h4> Fundraising for the needy </h4>*/
/* 					<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. This year show will gaurantee: </p>*/
/* 					<ol>*/
/* 					<li> - Fundraising </li>*/
/* 					<li> - Education needs for those who can not afford </li>*/
/* 					<li> - Job placement services for the unemployed </li>*/
/* 					<li> - The State of Biofuel	 </li>*/
/* 					</ol>*/
/* 					*/
/* 					<h3> Why to attend? </h3>*/
/* 					<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.</p>*/
/* 						*/
/* 				<h3> Event Organizers </h3>*/
/* 				<h4> Ambitious Force behind this event </h4>*/
/* 				<figure class="team_member span4 first">*/
/* 					<div class="member_img">*/
/* 						<img src="{{asset('images/exective1.jpg')}}" alt="Team Member" />*/
/* 					</div>*/
/* 					<div class="team_member_description">*/
/* 						<h5>  Willaim Kite </h5>*/
/* 						<span class="mem_desig"> Co-Director </span>*/
/* 				*/
/* 							<figure id="n_social"> */
/* 								<a href="#"> <i class="icon-facebook"></i> </a> */
/* 								<a href="#"> <i class="icon-twitter"></i> </a> */
/* 								<a href="#"> <i class="icon-google-plus"></i> </a> */
/*  							</figure>*/
/* 				*/
/* 					</div>*/
/* 				</figure>*/
/* */
/* 				*/
/* 				<figure class="team_member span4">*/
/* 					<div class="member_img">*/
/* 						<img src="{{asset('images/exective2.jpg')}}" alt="Team Member" />*/
/* 					</div>*/
/* 					<div class="team_member_description">*/
/* 						<h5>  Eli Stefen </h5>*/
/* 						<span class="mem_desig"> Marketing Director </span>*/
/* 				*/
/* 							<figure id="n_social"> */
/* 								<a href="#"> <i class="icon-facebook"></i> </a> */
/* 								<a href="#"> <i class="icon-twitter"></i> </a> */
/* 								<a href="#"> <i class="icon-google-plus"></i> </a> */
/*  							</figure>*/
/* 				*/
/* 					</div>*/
/* 				</figure>*/
/* 					*/
/* 				*/
/* 				<figure class="team_member span4">*/
/* 					<div class="member_img">*/
/* 						<img src="{{asset('images/exective3.jpg')}}" alt="Team Member" />*/
/* 					</div>*/
/* 					<div class="team_member_description">*/
/* 						<h5>  Alana Newman </h5>*/
/* 						<span class="mem_desig"> Art Director </span>*/
/* 				*/
/* 							<figure id="n_social"> */
/* 								<a href="#"> <i class="icon-facebook"></i> </a> */
/* 								<a href="#"> <i class="icon-twitter"></i> </a> */
/* 								<a href="#"> <i class="icon-google-plus"></i> </a> */
/*  							</figure>*/
/* 				*/
/* 					</div>*/
/* 				</figure>*/
/* 						*/
/* 				</div>*/
/* */
/* 			</figure>*/
/* */
/* 			<figure id="map_holder" class="span12 first mbtm2"> 		<iframe width="100%" scrolling="no" height="300" frameborder="0" marginheight="0" marginwidth="0" src="https://maps.google.com/?ie=UTF8&amp;ll=-20.234496,57.603722&amp;spn=0.093419,0.169086&amp;t=m&amp;z=13&amp;output=embed" class="map-border"></iframe> <div id="map_abs"> <h4> Lets join Together </h4>  <span> <i class="icon-map-marker"></i> <br /> Location Map </span> </div> </figure>*/
/* 			*/
/* 			<figure class="span12 first">*/
/* 			*/
/* 			<section class="span6 first form" id="contact_form">*/
/*  			<form action="contact.php" method="post">*/
/* 				<input type="text" name="name" value="">*/
/* 				<input type="text" name="email" value="">*/
/* 				<textarea rows="10" cols="10" name="comments"> Enter your Comment</textarea>*/
/* 				<input type="submit" name="submit" value="Submit" class="btns">*/
/* 			</form>*/
/* 			</section>*/
/* 			*/
/* 			<section class="span5 contact_info offset1" id="contact_info">*/
/* 			<h3> Contact Information </h3>*/
/* 			*/
/* 			<figure class="span12 first"> <i class="icon-envelope-alt"></i> info@behuman.com</figure>*/
/* 			*/
/* 			<figure class="span12 first"><i class="icon-mobile-phone"></i> 111-22-3333</figure>*/
/* 				*/
/* 				<figure class="span12 first"> */
/* 				<i class="icon-map-marker"></i> */
/* 				533 Azmat st., New-York, USA*/
/* 				</figure>*/
/*  */
/* 				<figure class="span12 first" id="n_social"> */
/* 				*/
/* 					<a href="#"> <i class="icon-facebook"></i> </a> */
/* 					<a href="#"> <i class="icon-twitter"></i> </a> */
/* 					<a href="#"> <i class="icon-google-plus"></i> </a> */
/* 					<a href="#"> <i class="icon-linkedin"></i> </a> */
/* 					<a href="#"> <i class="icon-pinterest"></i> </a> */
/* 					*/
/* 				*/
/* 				</figure>*/
/* 				*/
/* 			</section>*/
/* 			*/
/* 			*/
/* 			</figure>*/
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
/* {% endblock %}*/
