<?php

/* CrowdRiseBundle:Default/Evenement:Calendrier_evenements.html.twig */
class __TwigTemplate_33d7896561e2381f7875c52c1d68714befe7d3b7fb5455eed8110128f84f254e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "CrowdRiseBundle:Default/Evenement:Calendrier_evenements.html.twig", 4);
        $this->blocks = array(
            'scriptcss' => array($this, 'block_scriptcss'),
            'javascript' => array($this, 'block_javascript'),
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

    // line 5
    public function block_scriptcss($context, array $blocks = array())
    {
        // line 6
        echo "    <link href='";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/calendar.css"), "html", null, true);
        echo "' rel='stylesheet' /> <!-- Event Calander -->

    ";
    }

    // line 10
    public function block_javascript($context, array $blocks = array())
    {
        // line 11
        echo "    <script type=\"text/javascript\">
  /* <![CDATA[ */
  \t\$(document).ready(function() {
\t\tvar date = new Date();
\t\tvar d = date.getDate();
\t\tvar m = date.getMonth();
\t\tvar y = date.getFullYear();
\t\t
\t\t\$('#calendar').fullCalendar({
\t\t\t\tviewDisplay: function() {
\t\t\tvar calendar = \$(this);
 
\t\t\t\$('.fc-event').each(function(){
\t\t\t\t// Grab event data
\t\t\t\tvar excerpt = \$(this).find('.fc-event-excerpt').text();
\t\t\t\t\tif ( excerpt){
\t\t\t\t\$(this).qtip({
\t\t\t\t\tcontent: excerpt,
\t\t\t\t\tposition: {
\t\t\t\t\t\tmy: 'bottom center',
\t\t\t\t\t\tat: 'top center'
\t\t\t\t\t},
\t\t\t\t\tshow: 'click',
\t\t\t\t\thide: 'click',
\t\t\t\t\tstyle: {
\t\t\t\t\t\ttip: true
\t\t\t\t\t}
\t\t\t\t})
\t\t\t\t\t\t\t\t}
\t\t\t})
\t\t},
\t\t\theader: {
\t\t\t\tleft: 'prev,next',
\t\t\t\tcenter: 'title',
\t\t\t\tright: ''
\t\t\t},
\t\t\t\tbuttonText: {
\t\tprev: \"<span class='fc-text-arrow'>Previous Month</span>\",
\t\tnext: \"<span class='fc-text-arrow'>Next Month</span>\",
 \t},
\t\t\t\tcolumnFormat: {
                 month: 'dddd'    // Monday, Wednesday, etc
            },
\t\t\teditable: false,
\t\t\tdisableDragging: true,
\t\t\tevents: [
\t\t\t\t{
\t\t\t\t\ttitle: 'All Day Event',
\t\t\t\t\tstart: new Date(y, m, 1),
\t\t\t\t\texcerpt: 'All Day dEscription for the content , All Day dEscription for the content , All Day dEscription for the content , All Day dEscription for the content , All Day dEscription for the content , All Day dEscription for the content ,All Day dEscription for the content All Day dEscription for the content'
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\ttitle: 'Long Event',
\t\t\t\t\tstart: new Date(y, m, d-5),
\t\t\t\t\tend: new Date(y, m, d-2)
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tid: 999,
\t\t\t\t\ttitle: 'Repeating Event',
\t\t\t\t\tstart: new Date(y, m, d-3, 16, 0),
\t\t\t\t\tallDay: false
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\tid: 999,
\t\t\t\t\ttitle: 'Repeating Event',
\t\t\t\t\tstart: new Date(y, m, d+4, 16, 0),
\t\t\t\t\tallDay: false
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\ttitle: 'Meeting',
\t\t\t\t\tstart: new Date(y, m, d, 10, 30),
\t\t\t\t\tallDay: false
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\ttitle: 'Lunch',
\t\t\t\t\tstart: new Date(y, m, d, 12, 0),
\t\t\t\t\tend: new Date(y, m, d, 14, 0),
\t\t\t\t\tallDay: false
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\ttitle: 'Birthday Party',
\t\t\t\t\tstart: new Date(y, m, d+1, 19, 0),
\t\t\t\t\tend: new Date(y, m, d+1, 22, 30),
\t\t\t\t\tallDay: false
\t\t\t\t},
\t\t\t\t{
\t\t\t\t\ttitle: 'Click for Google',
\t\t\t\t\tstart: new Date(y, m, 28),
\t\t\t\t\tend: new Date(y, m, 29),
\t\t\t\t\turl: 'http://google.com/'
\t\t\t\t}
\t\t\t]
\t\t});
\t\t
\t});

/* ]]> */
</script>


<script type=\"text/javascript\" src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/lib-1-9-1.js"), "html", null, true);
        echo "\"></script><!-- lib Js -->
<script type=\"text/javascript\" src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/lib-1-7-1.js"), "html", null, true);
        echo "\"></script><!-- lib Js -->
 <script type=\"text/javascript\" src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/modernizr.js"), "html", null, true);
        echo "\"></script><!-- Modernizr -->
<script type=\"text/javascript\" src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/easing.js"), "html", null, true);
        echo "\"></script><!-- Easing js -->
<script type=\"text/javascript\" src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script><!-- Bootstrap -->
<script type=\"text/javascript\" src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bxslider.js"), "html", null, true);
        echo "\"></script><!-- BX Slider -->
<script type=\"text/javascript\" src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/clearInput.js"), "html", null, true);
        echo "\"></script><!-- Input Clear -->
<script type=\"text/javascript\" src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/smooth-scroll.js"), "html", null, true);
        echo "\"></script><!-- smooth Scroll -->
<script type=\"text/javascript\" src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/prettyPhoto.js"), "html", null, true);
        echo "\"></script><!-- Pretty Photo -->
<script type=\"text/javascript\" src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/social.js"), "html", null, true);
        echo "\"></script><!-- Social Media Hover Effect -->
<script type=\"text/javascript\" src='";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/calendar.js"), "html", null, true);
        echo "'></script> <!-- Event Calander -->
<script type=\"text/javascript\" src='";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/qtip.js"), "html", null, true);
        echo "'></script> <!-- Event Calander -->
<script type=\"text/javascript\" src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/countdown.js"), "html", null, true);
        echo "\"></script><!-- Event Counter -->
<script type=\"text/javascript\" src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>
   
    ";
    }

    // line 128
    public function block_body($context, array $blocks = array())
    {
        // line 129
        echo "

<section class=\"mtop\">
\t<section class=\"container-fluid container\">
\t\t<section class=\"row-fluid\">
\t\t\t<section id=\"donation_box\">
\t\t\t<section class=\"container container-fluid\">
\t\t\t\t<section class=\"row-fluid\">
\t\t\t\t\t<div class=\"span8 first\"> <h2> Event Calander </h2> </div>
\t\t\t\t\t<div class=\"span4 title_right\">
\t\t\t\t\t\t<div class=\"dropdown\" id=\"cart_dropdown\">
\t\t\t\t\t\t\t\t<a data-toggle=\"dropdown\" class=\"dropdown-toggle\" role=\"button\" id=\"cart_down\" href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"icon-ticket\"></i>
\t\t\t\t\t\t\t\tEvents
\t\t\t\t\t\t\t\t<span class=\"caret\"></span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu\" aria-labelledby=\"cart_down\" role=\"menu\" id=\"listing_dropdown\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li> Charity Events <a href=\"#\"> 2 </a> </li>
\t\t\t\t\t\t\t\t\t\t<li> Fundraising <a href=\"#\"> 9 </a> </li>
\t\t\t\t\t\t\t\t\t\t<li> Non-Profit <a href=\"#\"> 2 </a> </li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</section>
\t\t\t</section>
\t\t</section>\t\t<!-- end of Page Title -->
\t\t</section>
 \t\t<section class=\"row-fluid\">
\t\t\t<!-- BreadCrumbs -->
\t\t\t\t<figure id=\"breadcrumbs\" class=\"span12\">
\t\t\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t\t<li><a href=\"#\">Home</a> <span class=\"divider\">/</span></li>
\t\t\t\t\t<li class=\"active\">Event Calender </li>
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
\t\t\t<section class=\"span12 event_calander\" id=\"event_calander\">  
\t\t\t\t
\t\t\t\t<section class=\"span3 first\" id=\"calander_list\">
\t\t\t\t<h1> June 2013 </h1>
\t\t\t\t<em> Upcoming events </em>
\t\t\t\t<p> Lorem minim veniam, quis nostrud exercitation ullamco pariatur. deserunt mollit anim id est. Main events for this month are:  </p>
\t\t\t\t<ul id=\"tiers\">
\t\t\t\t\t\t\t\t<li> \t<span class=\"span12 first\"> Charity Walk - <em> 5.6.2013 </em> <a class=\"donate_btn pull-right\" href=\"#\"> Donate </a> </span> </li>
\t\t\t\t\t\t\t\t<li> \t<span class=\"span12 first\"> Fundraising  - <em> 7.6.2013 </em>  <a class=\"donate_btn pull-right\" href=\"#\"> Donate </a> </span> </li>
\t\t\t\t\t\t\t\t<li> \t<span class=\"span12 first\">  Seminar  - <em> 9.6.2013 </em> <a class=\"donate_btn pull-right\" href=\"#\"> Donate </a></span> </li>
\t\t\t\t\t\t\t\t<li> \t<span class=\"span12 first\">  Gala Show - <em> 11.6.2013 </em> <a class=\"donate_btn pull-right\" href=\"#\"> Donate </a> </span> </li>
\t\t\t\t\t\t\t\t<li> \t<span class=\"span12 first\"> Walk for Poor  - <em> 13.6.2013 </em> <a class=\"donate_btn pull-right\" href=\"#\"> Donate </a> </span> </li>
\t\t\t\t\t\t\t\t<li> \t<span class=\"span12 first\"> Charity Walk - <em> 17.6.2013 </em> <a class=\"donate_btn pull-right\" href=\"#\"> Donate </a> </span> </li>
\t\t\t\t\t\t\t\t<li> \t<span class=\"span12 first\"> Fundraising  - <em> 21.6.2013 </em>  <a class=\"donate_btn pull-right\" href=\"#\"> Donate </a> </span> </li>
\t\t\t\t\t\t\t\t<li> \t<span class=\"span12 first\">  Seminar  - <em> 26.6.2013 </em> <a class=\"donate_btn pull-right\" href=\"#\"> Donate </a></span> </li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t</section>
\t\t\t\t
\t\t\t\t<section class=\"span9\" id=\"calendar\">
\t\t\t\t
\t\t\t\t</section>
\t\t\t\t
\t\t\t
\t\t\t</section>
 
\t\t</section>
\t</section>

</section>
<!-- Page Content Container -->


";
    }

    public function getTemplateName()
    {
        return "CrowdRiseBundle:Default/Evenement:Calendrier_evenements.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 129,  205 => 128,  198 => 124,  194 => 123,  190 => 122,  186 => 121,  182 => 120,  178 => 119,  174 => 118,  170 => 117,  166 => 116,  162 => 115,  158 => 114,  154 => 113,  150 => 112,  146 => 111,  44 => 11,  41 => 10,  33 => 6,  30 => 5,  11 => 4,);
    }
}
/* */
/* */
/* */
/* {% extends "::layout/layout.html.twig" %}*/
/* {% block scriptcss %}*/
/*     <link href='{{asset('css/calendar.css')}}' rel='stylesheet' /> <!-- Event Calander -->*/
/* */
/*     {% endblock %}*/
/* */
/* {% block javascript %}*/
/*     <script type="text/javascript">*/
/*   /* <![CDATA[ *//* */
/*   	$(document).ready(function() {*/
/* 		var date = new Date();*/
/* 		var d = date.getDate();*/
/* 		var m = date.getMonth();*/
/* 		var y = date.getFullYear();*/
/* 		*/
/* 		$('#calendar').fullCalendar({*/
/* 				viewDisplay: function() {*/
/* 			var calendar = $(this);*/
/*  */
/* 			$('.fc-event').each(function(){*/
/* 				// Grab event data*/
/* 				var excerpt = $(this).find('.fc-event-excerpt').text();*/
/* 					if ( excerpt){*/
/* 				$(this).qtip({*/
/* 					content: excerpt,*/
/* 					position: {*/
/* 						my: 'bottom center',*/
/* 						at: 'top center'*/
/* 					},*/
/* 					show: 'click',*/
/* 					hide: 'click',*/
/* 					style: {*/
/* 						tip: true*/
/* 					}*/
/* 				})*/
/* 								}*/
/* 			})*/
/* 		},*/
/* 			header: {*/
/* 				left: 'prev,next',*/
/* 				center: 'title',*/
/* 				right: ''*/
/* 			},*/
/* 				buttonText: {*/
/* 		prev: "<span class='fc-text-arrow'>Previous Month</span>",*/
/* 		next: "<span class='fc-text-arrow'>Next Month</span>",*/
/*  	},*/
/* 				columnFormat: {*/
/*                  month: 'dddd'    // Monday, Wednesday, etc*/
/*             },*/
/* 			editable: false,*/
/* 			disableDragging: true,*/
/* 			events: [*/
/* 				{*/
/* 					title: 'All Day Event',*/
/* 					start: new Date(y, m, 1),*/
/* 					excerpt: 'All Day dEscription for the content , All Day dEscription for the content , All Day dEscription for the content , All Day dEscription for the content , All Day dEscription for the content , All Day dEscription for the content ,All Day dEscription for the content All Day dEscription for the content'*/
/* 				},*/
/* 				{*/
/* 					title: 'Long Event',*/
/* 					start: new Date(y, m, d-5),*/
/* 					end: new Date(y, m, d-2)*/
/* 				},*/
/* 				{*/
/* 					id: 999,*/
/* 					title: 'Repeating Event',*/
/* 					start: new Date(y, m, d-3, 16, 0),*/
/* 					allDay: false*/
/* 				},*/
/* 				{*/
/* 					id: 999,*/
/* 					title: 'Repeating Event',*/
/* 					start: new Date(y, m, d+4, 16, 0),*/
/* 					allDay: false*/
/* 				},*/
/* 				{*/
/* 					title: 'Meeting',*/
/* 					start: new Date(y, m, d, 10, 30),*/
/* 					allDay: false*/
/* 				},*/
/* 				{*/
/* 					title: 'Lunch',*/
/* 					start: new Date(y, m, d, 12, 0),*/
/* 					end: new Date(y, m, d, 14, 0),*/
/* 					allDay: false*/
/* 				},*/
/* 				{*/
/* 					title: 'Birthday Party',*/
/* 					start: new Date(y, m, d+1, 19, 0),*/
/* 					end: new Date(y, m, d+1, 22, 30),*/
/* 					allDay: false*/
/* 				},*/
/* 				{*/
/* 					title: 'Click for Google',*/
/* 					start: new Date(y, m, 28),*/
/* 					end: new Date(y, m, 29),*/
/* 					url: 'http://google.com/'*/
/* 				}*/
/* 			]*/
/* 		});*/
/* 		*/
/* 	});*/
/* */
/* /* ]]> *//* */
/* </script>*/
/* */
/* */
/* <script type="text/javascript" src="{{asset('js/lib-1-9-1.js')}}"></script><!-- lib Js -->*/
/* <script type="text/javascript" src="{{asset('js/lib-1-7-1.js')}}"></script><!-- lib Js -->*/
/*  <script type="text/javascript" src="{{asset('js/modernizr.js')}}"></script><!-- Modernizr -->*/
/* <script type="text/javascript" src="{{asset('js/easing.js')}}"></script><!-- Easing js -->*/
/* <script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script><!-- Bootstrap -->*/
/* <script type="text/javascript" src="{{asset('js/bxslider.js')}}"></script><!-- BX Slider -->*/
/* <script type="text/javascript" src="{{asset('js/clearInput.js')}}"></script><!-- Input Clear -->*/
/* <script type="text/javascript" src="{{asset('js/smooth-scroll.js')}}"></script><!-- smooth Scroll -->*/
/* <script type="text/javascript" src="{{asset('js/prettyPhoto.js')}}"></script><!-- Pretty Photo -->*/
/* <script type="text/javascript" src="{{asset('js/social.js')}}"></script><!-- Social Media Hover Effect -->*/
/* <script type="text/javascript" src='{{asset('js/calendar.js')}}'></script> <!-- Event Calander -->*/
/* <script type="text/javascript" src='{{asset('js/qtip.js')}}'></script> <!-- Event Calander -->*/
/* <script type="text/javascript" src="{{asset('js/countdown.js')}}"></script><!-- Event Counter -->*/
/* <script type="text/javascript" src="{{asset('js/custom.js')}}"></script>*/
/*    */
/*     {% endblock %}*/
/*     */
/* {% block body %}*/
/* */
/* */
/* <section class="mtop">*/
/* 	<section class="container-fluid container">*/
/* 		<section class="row-fluid">*/
/* 			<section id="donation_box">*/
/* 			<section class="container container-fluid">*/
/* 				<section class="row-fluid">*/
/* 					<div class="span8 first"> <h2> Event Calander </h2> </div>*/
/* 					<div class="span4 title_right">*/
/* 						<div class="dropdown" id="cart_dropdown">*/
/* 								<a data-toggle="dropdown" class="dropdown-toggle" role="button" id="cart_down" href="#">*/
/* 								<i class="icon-ticket"></i>*/
/* 								Events*/
/* 								<span class="caret"></span>*/
/* 								</a>*/
/* 						*/
/* 								<div class="dropdown-menu" aria-labelledby="cart_down" role="menu" id="listing_dropdown">*/
/* 									<ul>*/
/* 										<li> Charity Events <a href="#"> 2 </a> </li>*/
/* 										<li> Fundraising <a href="#"> 9 </a> </li>*/
/* 										<li> Non-Profit <a href="#"> 2 </a> </li>*/
/* 									</ul>*/
/* 								</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</section>*/
/* 			</section>*/
/* 		</section>		<!-- end of Page Title -->*/
/* 		</section>*/
/*  		<section class="row-fluid">*/
/* 			<!-- BreadCrumbs -->*/
/* 				<figure id="breadcrumbs" class="span12">*/
/* 					<ul class="breadcrumb">*/
/* 					<li><a href="#">Home</a> <span class="divider">/</span></li>*/
/* 					<li class="active">Event Calender </li>*/
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
/* 			<section class="span12 event_calander" id="event_calander">  */
/* 				*/
/* 				<section class="span3 first" id="calander_list">*/
/* 				<h1> June 2013 </h1>*/
/* 				<em> Upcoming events </em>*/
/* 				<p> Lorem minim veniam, quis nostrud exercitation ullamco pariatur. deserunt mollit anim id est. Main events for this month are:  </p>*/
/* 				<ul id="tiers">*/
/* 								<li> 	<span class="span12 first"> Charity Walk - <em> 5.6.2013 </em> <a class="donate_btn pull-right" href="#"> Donate </a> </span> </li>*/
/* 								<li> 	<span class="span12 first"> Fundraising  - <em> 7.6.2013 </em>  <a class="donate_btn pull-right" href="#"> Donate </a> </span> </li>*/
/* 								<li> 	<span class="span12 first">  Seminar  - <em> 9.6.2013 </em> <a class="donate_btn pull-right" href="#"> Donate </a></span> </li>*/
/* 								<li> 	<span class="span12 first">  Gala Show - <em> 11.6.2013 </em> <a class="donate_btn pull-right" href="#"> Donate </a> </span> </li>*/
/* 								<li> 	<span class="span12 first"> Walk for Poor  - <em> 13.6.2013 </em> <a class="donate_btn pull-right" href="#"> Donate </a> </span> </li>*/
/* 								<li> 	<span class="span12 first"> Charity Walk - <em> 17.6.2013 </em> <a class="donate_btn pull-right" href="#"> Donate </a> </span> </li>*/
/* 								<li> 	<span class="span12 first"> Fundraising  - <em> 21.6.2013 </em>  <a class="donate_btn pull-right" href="#"> Donate </a> </span> </li>*/
/* 								<li> 	<span class="span12 first">  Seminar  - <em> 26.6.2013 </em> <a class="donate_btn pull-right" href="#"> Donate </a></span> </li>*/
/* 							</ul>*/
/* 				</section>*/
/* 				*/
/* 				<section class="span9" id="calendar">*/
/* 				*/
/* 				</section>*/
/* 				*/
/* 			*/
/* 			</section>*/
/*  */
/* 		</section>*/
/* 	</section>*/
/* */
/* </section>*/
/* <!-- Page Content Container -->*/
/* */
/* */
/* {% endblock %}*/
