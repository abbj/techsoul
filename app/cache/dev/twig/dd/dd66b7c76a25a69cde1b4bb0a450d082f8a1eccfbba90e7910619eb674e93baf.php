<?php

/* CrowdRiseBundle:Default/Contact:contact.html.twig */
class __TwigTemplate_461657a2363e7a12aed8098c3dbf6f0b917dc9c2c90d1406cac780c91133ab59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::layout/layout.html.twig", "CrowdRiseBundle:Default/Contact:contact.html.twig", 2);
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
<section id=\"content\" class=\"mbtm contact_us\">
\t<section class=\"container-fluid container\">
\t
\t\t<section class=\"row-fluid\">
\t\t\t
\t\t\t<figure class=\"span12 mbtm2\" id=\"map_holder\"> \t
           <iframe width=\"100%\" height=\"300\" scrolling=\"no\" frameborder=\"0\" class=\"map-border\" src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d51077.028298033336!2d10.1715608!3d36.8588958!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12e2cb4e31471bf3%3A0x65bc5efbce842198!2sAriana!5e0!3m2!1sen!2stn!4v1454795260297\" marginwidth=\"0\" marginheight=\"0\"></iframe> </figure>
\t\t\t
 
\t\t</section>
\t</section>
\t<section class=\"container-fluid container\">
\t\t\t<section class=\"row-fluid\">
\t\t\t
\t\t\t<section id=\"contact_form\" class=\"span6 form\">
\t\t\t<h3> Contact Form </h3>
\t\t\t<p> Thank you for visiting our website. Please fill out the following form to request information about our products or to provide feedback about our site. When you are finished, click the ‘Submit’ button to send us your message. </p>
\t\t\t
\t\t\t<form method=\"post\" action=\"contact.php\">
\t\t\t\t<input type=\"text\" value=\"Enter Your Name\" name=\"name\" required/>
\t\t\t\t<input type=\"email\" value=\"Email Address\" name=\"email\" required />
\t\t\t\t<textarea name=\"comments\" cols=\"10\" rows=\"10\" required> Enter your Comment</textarea>
\t\t\t\t<input type=\"submit\" class=\"btns\" value=\"Submit\" name=\"submit\" />
\t\t\t</form>
\t\t\t</section>
\t\t
\t\t\t<section id=\"contact_info\" class=\"span6 contact_info\">
\t\t\t<h3> Contact Information </h3>
\t\t\t
\t\t\t<figure class=\"span12 first\"> <i class=\"icon-mobile-phone\"></i> info@behuman.com</figure>
\t\t\t
\t\t\t<figure class=\"span12 first\"> <i class=\"icon-envelope-alt\"></i> 111-22-3333</figure>
\t\t\t\t
\t\t\t\t<figure class=\"span12 first\"> 
\t\t\t\t<div class=\"span6 fisrt\">
\t\t\t\t<i class=\"icon-map-marker\"></i> 
\t\t\t\t533 Azmat st., New-York, USA <br />
 \t\t\t\t</div>
\t\t\t\t</figure>
 

\t\t\t\t<figure id=\"n_social\" class=\"span12 first\"> 
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
\t\t
\t\t\t</section>
\t\t</section>
\t
\t</section>


<!-- Page Content Container -->

";
        // line 72
        $this->displayBlock('javascript', $context, $blocks);
        // line 76
        echo "
";
    }

    // line 72
    public function block_javascript($context, array $blocks = array())
    {
        echo "\t 


";
    }

    public function getTemplateName()
    {
        return "CrowdRiseBundle:Default/Contact:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 72,  105 => 76,  103 => 72,  38 => 9,  35 => 8,  30 => 5,  11 => 2,);
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
/* <section id="content" class="mbtm contact_us">*/
/* 	<section class="container-fluid container">*/
/* 	*/
/* 		<section class="row-fluid">*/
/* 			*/
/* 			<figure class="span12 mbtm2" id="map_holder"> 	*/
/*            <iframe width="100%" height="300" scrolling="no" frameborder="0" class="map-border" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d51077.028298033336!2d10.1715608!3d36.8588958!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12e2cb4e31471bf3%3A0x65bc5efbce842198!2sAriana!5e0!3m2!1sen!2stn!4v1454795260297" marginwidth="0" marginheight="0"></iframe> </figure>*/
/* 			*/
/*  */
/* 		</section>*/
/* 	</section>*/
/* 	<section class="container-fluid container">*/
/* 			<section class="row-fluid">*/
/* 			*/
/* 			<section id="contact_form" class="span6 form">*/
/* 			<h3> Contact Form </h3>*/
/* 			<p> Thank you for visiting our website. Please fill out the following form to request information about our products or to provide feedback about our site. When you are finished, click the ‘Submit’ button to send us your message. </p>*/
/* 			*/
/* 			<form method="post" action="contact.php">*/
/* 				<input type="text" value="Enter Your Name" name="name" required/>*/
/* 				<input type="email" value="Email Address" name="email" required />*/
/* 				<textarea name="comments" cols="10" rows="10" required> Enter your Comment</textarea>*/
/* 				<input type="submit" class="btns" value="Submit" name="submit" />*/
/* 			</form>*/
/* 			</section>*/
/* 		*/
/* 			<section id="contact_info" class="span6 contact_info">*/
/* 			<h3> Contact Information </h3>*/
/* 			*/
/* 			<figure class="span12 first"> <i class="icon-mobile-phone"></i> info@behuman.com</figure>*/
/* 			*/
/* 			<figure class="span12 first"> <i class="icon-envelope-alt"></i> 111-22-3333</figure>*/
/* 				*/
/* 				<figure class="span12 first"> */
/* 				<div class="span6 fisrt">*/
/* 				<i class="icon-map-marker"></i> */
/* 				533 Azmat st., New-York, USA <br />*/
/*  				</div>*/
/* 				</figure>*/
/*  */
/* */
/* 				<figure id="n_social" class="span12 first"> */
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
/* 		*/
/* 			</section>*/
/* 		</section>*/
/* 	*/
/* 	</section>*/
/* */
/* */
/* <!-- Page Content Container -->*/
/* */
/* {% block javascript %}	 */
/* */
/* */
/* {% endblock %}*/
/* */
/* {% endblock %}*/
