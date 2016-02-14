<?php

/* ::layout/layout.html.twig */
class __TwigTemplate_8093c4bf96ce2e6f8e40829c2fa8ec7f250e15ce9cf8de2d55329b9c67e6dc89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'scriptcss' => array($this, 'block_scriptcss'),
            'body' => array($this, 'block_body'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\"> 
<html xmlns=\"http://www.w3.org/1999/xhtml\"> 
    <head> 
        <title>Charity Theme Home Page </title>         
        <!--[if lt IE 9]>
\t<script src=\"js/html5shiv.js\"></script>
<![endif]-->         
        <!--[if lt IE 9]>
\t<script src=\"js/mq.js\"></script>
<![endif]-->         
        <meta http-equiv=\"cache-control\" content=\"no-cache\"> 
        <meta http-equiv=\"Content-Type\" content=\"text/html;charset=UTF-8\"> 
        <meta charset=\"UTF-8\"> 
        <meta name=\"viewport\" content=\"initial-scale=1, maximum-scale=1\"> 
        <meta name=\"viewport\" content=\"width=device-width\"> 
        <!-- Css Files Start -->         
      <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" /> 
        <!-- All css -->         
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- Bootstrap Css -->         
        <!--[if lte IE 9]><link rel=\"stylesheet\" type=\"text/css\" href=\"css/customIE.css\" /><![endif]-->         
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- Font Awesome Css -->         
        <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/font-awesome-ie7.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- Font Awesome iE7 Css -->         
        <!-- Css Files End -->         
        <!-- Social Icons no JS -->         
        <noscript> 
           <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/nj.css"), "html", null, true);
        echo "\" /> 
        </noscript>         
        <!-- Social Icons no JS -->     
  <!-- yooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo loginnnn -->
    
  <link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/test/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    
  <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/test/login.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
              
              <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/test/inscription.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />

        <!-------------------------->


        ";
        // line 43
        $this->displayBlock('scriptcss', $context, $blocks);
        // line 45
        echo "    </head>    
    
    <!----------------------------login yo http://andwecode.com/create-popup-login-and-signup-form/#live---------------------------------------------------->
    

    
    <div id=\"loginmodal\" style=\"display:none;\">
    <h1>Connexion</h1>
    <form id=\"loginform\" name=\"loginform\" method=\"post\" action=\"index.html\">
      <label for=\"username\">Username:</label>
      <input type=\"text\" name=\"username\" id=\"username\" class=\"txtfield\" tabindex=\"1\">
      
      <label for=\"password\">Password:</label>
      <input type=\"password\" name=\"password\" id=\"password\" class=\"txtfield\" tabindex=\"2\">
      
      <div class=\"center\"><input type=\"submit\" name=\"loginbtn\" id=\"loginbtn\" class=\"flatbtn-blu hidemodal\" value=\"Log In\" tabindex=\"3\"></div>
    </form>
  </div>
    <!------------------------------------------------------------------------------------------->
        <!----------------------------inscription yo---------------------------------------------------->
    
    
    <div id=\"inscriptionmodal\" style=\"display:none;\">
    <h1>Inscription</h1>
    <form id=\"inscriptionform\" name=\"inscriptionform\" method=\"post\" action=\"index.html\">
      <label for=\"username\">Username:</label>
      <input type=\"text\" name=\"username\" id=\"username\" class=\"txtfield\" tabindex=\"1\">
      
      <label for=\"password\">Password:</label>
      <input type=\"password\" name=\"password\" id=\"password\" class=\"txtfield\" tabindex=\"2\">
      
      <div class=\"center\"><input type=\"submit\" name=\"loginbtn\" id=\"loginbtn\" class=\"flatbtn-blu hidemodal\" value=\"Log In\" tabindex=\"3\"></div>
    </form>
  </div>
    <!------------------------------------------------------------------------------------------->
    
    
    <body class=\"\"> 
            <!-- Start Main Wrapper -->         
        <div class=\"wrapper\"> 
            <!-- Start of Header -->             
            <header class=\"\"> 
                <!-- Start Main Header -->                 
                <section class=\"logo_container\"> 
                    <section class=\"container-fluid container\"> 
                        <section class=\"row-fluid\"> 
                            <section class=\"span4\"> 
                                <h1 id=\"logo\"> <a href=\"index.html\"> 
                                        <img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\"> 
                                    </a> </h1> 
                            </section>                             
                            <section class=\"span5 pull-right\"> 
                                <figure class=\"charity_counter_wrapper\"> 
                                    <section class=\"span5\"> 
                                        <div class=\"charity_title\"> 
                                            evenement 
                                            <br /> prochain 2016
                                        </div>                                         
                                    </section>                                     
                                    <section class=\"span1 event_more pull-right\"> 
                                        <a href=\"event_detail.html\" data-placement=\"bottom\" rel=\"tooltip\" title=\"View Event Detail\"> <i class=\"icon\">+</i> </a> 
                                    </section>                                     
                                    <section class=\"span6 counter_bg pull-right\"> 
                                        <div id=\"countdown162\" class=\"tCountdOwn\"> 
</div>                                         
                                    </section>                                     
                                </figure>                                 
                            </section>                             
                        </section>                         
                    </section>                     
                </section>                 
                <!-- Main Nav Bar -->                 
                <nav id=\"nav\" class=\"\"> 
                    <section class=\"container-fluid container\"> 
                        <section class=\"row-fluid\"> 
                            <div class=\"navbar navbar-inverse\"> 
                                <div class=\"navbar-inner\"> 
                                    <button type=\"button\" class=\"btn btn-navbar\" data-toggle=\"collapse\" data-target=\".nav-collapse\"> 
                                        <span class=\"icon-bar\"></span> 
                                        <span class=\"icon-bar\"></span> 
                                        <span class=\"icon-bar\"></span> 
                                    </button>                                     
                                    <div class=\"nav-collapse collapse\"> 
                                        <ul class=\"nav\"> 
                                            <li class=\"active\"> 
                                                <a href=\"";
        // line 130
        echo $this->env->getExtension('routing')->getPath("acceuil");
        echo "\"> Home </a> 
                                            </li>                                             
                                            <li class=\"dropdown\"> 
                                                <a class=\"dropdown-toggle\" href=\"";
        // line 133
        echo $this->env->getExtension('routing')->getPath("freelancer");
        echo "\">Freelance<br></a> 
                                                <ul class=\"dropdown-menu\"> 
                                                    <li>
                                                        <a href=\"team.html\"> je veux travailler</a>
                                                    </li>                                                     
                                                    <li>
                                                        <a href=\"career.html\">je veux embaucher</a>
                                                    </li>                                                     
                                                </ul>                                                 
                                            </li>                                             
                                            <li class=\"dropdown\"> 
                                                <a class=\"dropdown-toggle\" href=\"\"> evenements<b class=\"caret\"></b> </a> 
                                                <ul class=\"dropdown-menu\"> 
                                                    <li>
                                                        <a href=\"";
        // line 147
        echo $this->env->getExtension('routing')->getPath("detail_evenement");
        echo "\">detail de l'evenements</a>
                                                    </li>                                                     
                                                    <li>
                                                        <a href=\"";
        // line 150
        echo $this->env->getExtension('routing')->getPath("Calendrier_evenements");
        echo "\">calendrier des evenements</a>
                                                    </li>                                                     
                                                    <li>
                                                        <a href=\"";
        // line 153
        echo $this->env->getExtension('routing')->getPath("evenement_avenir");
        echo "\">evenement à venir</a>
                                                    </li>                                                     
                                                </ul>                                                 
                                            </li>                                             
                                            <li class=\"dropdown\"> 
                                                <a class=\"dropdown-toggle\" href=\"\">  Projects\t<b class=\"caret\"></b> </a> 
                                                <ul class=\"dropdown-menu\"> 
                                                    <li>
                                                        <a href=\"";
        // line 161
        echo $this->env->getExtension('routing')->getPath("List_projets");
        echo "\">Liste des Projets</a>
                                                    </li>                                                     
                                                    <li>
                                                        <a href=\"";
        // line 164
        echo $this->env->getExtension('routing')->getPath("detail_projets");
        echo "\">Detail du projets</a>
                                                    </li>                                                     
                                                    <li>
                                                        <a href=\"";
        // line 167
        echo $this->env->getExtension('routing')->getPath("financement_projets");
        echo "\">payement</a>
                                                    </li>                                                     
                                                </ul>                                                 
                                            </li>                                             
                                            <li class=\"dropdown\"> 
                                                <a class=\"dropdown-toggle\" href=\"blog.html\">  Forum <b class=\"caret\"></b> </a> 
                                                <ul class=\"dropdown-menu\"> 
                                                    <li>
                                                        <a href=\"blog.html\">Liste des sujets</a>
                                                    </li>                                                     
                                                    <li>
                                                        <a href=\"blog_detail.html\">description sujet</a>
                                                    </li>                                                     
                                                </ul>                                                 
                                            </li>                                             
                                            <li class=\"dropdown\"> 
                                                <ul class=\"dropdown-menu\"> 
                                                    <li> 
                                                        <a href=\"gallery_1_col.html\">Single Column\t\t\t</a>
                                                    </li>                                                     
                                                    <li> 
                                                        <a href=\"gallery_2_col.html\">\tTwo Column\t\t</a>
                                                    </li>                                                     
                                                    <li> 
                                                        <a href=\"gallery_3_col.html\">\tThree Column\t</a>
                                                    </li>                                                     
                                                    <li> 
                                                        <a href=\"gallery_4_col.html\">\tFour Column\t\t</a>
                                                    </li>                                                     
                                                    <li> 
                                                        <a href=\"gallery_detail.html\">\tGallery Detail\t\t</a>
                                                    </li>                                                     
                                                </ul>                                                 
                                            </li>                                             
                                            <!--<li class=\"dropdown\"> 
                                                <a class=\"dropdown-toggle\" href=\"#\">  Pages <b class=\"caret\"></b> </a> 
                                                <ul class=\"dropdown-menu\"> 
                                                    <li>
                                                        <a href=\"faqs.html\">Frequently Asked Questions </a>
                                                    </li>                                                     
                                                    <li>
                                                        <a href=\"404.html\">404 Page </a>
                                                    </li>                                                     
                                                    <li>
                                                        <a href=\"search.html\">Search Page </a>
                                                    </li>                                                     
                                                    <li>
                                                        <a href=\"sitemap.html\">Sitemap </a>
                                                    </li>                                                     
                                                    <li>
                                                        <a href=\"shortcodes.html\">ShortCodes </a>
                                                    </li>                                                     
                                                </ul>                                                 
                                            </li>  
                                            -->
                                            <li> 
                                                <a href=\"";
        // line 223
        echo $this->env->getExtension('routing')->getPath("contact");
        echo "\"> Contact </a> 
                                            </li>                                             
                                            <li class=\"dropdown\"> 
                                                <a class=\"dropdown-toggle\" href=\"#inscriptionmodal\" class=\"flatbtn\" id=\"inscriptiontrigger\">Inscription<br></a> 
                                            </li>                                             
                                            <li class=\"dropdown\"> 
                                                <a class=\"dropdown-toggle\" href=\"#loginmodal\" class=\"flatbtn\" id=\"logintrigger\">Connexion<br></a> 
                                            </li>                                             
                                        </ul>                                         
                                    </div>                                     
                                    <!--/.nav-collapse -->                                     
                                </div>                                 
                                <!-- /.navbar-inner -->                                 
                            </div>                             
                            <div class=\"nav_search pull-right\">
                                <form method=\"post\" actoion=\"#\"> 
                                    <input type=\"text\" value=\"Search Here...\" name=\"s\" id=\"s\" /> 
                                    <button>
                                        <i class=\"icon-search\"></i> 
                                    </button>
                                </form>                                 
                            </div>                             
                            <!-- /.navbar -->                             
                        </section>                         
                    </section>                     
                </nav>                 
                <!-- End Main Nav Bar -->                 
            </header>             
            <!-- End of Header --> 
        ";
        // line 252
        $this->displayBlock('body', $context, $blocks);
        // line 256
        echo "                <!-- End of Footer 2 -->                 
                <!-- Start of Footer 3 -->                 
                <section class=\"footer_3\"> 
                    <section class=\"container-fluid container\"> 
                        <section class=\"row-fluid\"> 
                            <figure class=\"span6\" id=\"footer_left\"> 
                                <ul class=\"footer_nav\"> 
                                    <li> 
                                        <a href=\"";
        // line 264
        echo $this->env->getExtension('routing')->getPath("acceuil");
        echo "\">\tHome \t\t</a> 
                                    </li>                                     
                                    <li> 
                                        <a href=\"shortcodes.html\"> \tFeatures\t</a> 
                                    </li>                                     
                                    <li> 
                                        <a href=\"blog.html\"> \tBlog \t\t</a> 
                                    </li>                                     
                                    <li> 
                                        <a href=\"shortcodes.html\"> \tPortfolio\t</a> 
                                    </li>                                     
                                    <li> 
                                        <a href=\"contact_us.html\"> \tContact\t\t</a> 
                                    </li>                                     
                                </ul>                                 
                                <p> Copyright © 2013 - Be Human by <a href=\"http://www.crunchpress.com\"> crunchpress.com </a></p> 
                            </figure>                             
                            <figure class=\"span6\" id=\"footer_right\"> 
                                <div id=\"tweets\" class=\"latest_tweets\"> 
                                    <ul id=\"latest_tweets\"> 
                                        <li> Have a look at new theme of crunchpress at 
                                            <a href=\"http://www.themeforest.net/user/crunchpress\"> http://bit.ly/ju89ytg </a> - we've added new great stuff and refreshed the theme!
                                        </li>                                         
                                    </ul>                                     
                                </div>                                 
                            </figure>                             
                        </section>                         
                    </section>                     
                </section>                 
                <!-- End of Footer 3 -->                 
            </footer>             
            <!-- End of Footer -->             
        </div>         
        <!-- End Main Wrapper -->         
        <!-- JS Files Start -->         
        <script type=\"text/javascript\" src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/lib-1-9-1.js"), "html", null, true);
        echo "\"></script>
        <!-- lib Js -->         
        <script type=\"text/javascript\" src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/lib-1-7-1.js"), "html", null, true);
        echo "\"></script>
        <!-- lib Js -->         
        <script type=\"text/javascript\" src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/modernizr.js"), "html", null, true);
        echo "\"></script>
        <!-- Modernizr -->         
        <script type=\"text/javascript\" src=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/easing.js"), "html", null, true);
        echo "\"></script>
        <!-- Easing js -->         
        <script type=\"text/javascript\" src=\"";
        // line 307
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        <!-- Bootstrap -->         
        <script type=\"text/javascript\" src=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bxslider.js"), "html", null, true);
        echo "\"></script>
        <!-- BX Slider -->         
        <script type=\"text/javascript\" src=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fitvids.js"), "html", null, true);
        echo "\"></script>
        <!-- fIt Video -->         
        <script type=\"text/javascript\" src=\"";
        // line 313
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/clearInput.js"), "html", null, true);
        echo "\"></script>
        <!-- Input Clear -->         
        <script type=\"text/javascript\" src=\"";
        // line 315
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/smooth-scroll.js"), "html", null, true);
        echo "\"></script>
        <!-- smooth Scroll -->         
        <script type=\"text/javascript\" src=\"";
        // line 317
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/prettyPhoto.js"), "html", null, true);
        echo "\"></script>
        <!-- Pretty Photo -->         
        <script type=\"text/javascript\" src=\"";
        // line 319
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/social.js"), "html", null, true);
        echo "\"></script>
        <!-- Social Media Hover Effect -->         
        <script type=\"text/javascript\" src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/countdown.js"), "html", null, true);
        echo "\"></script>
        <!-- Event Counter -->         
        <script type=\"text/javascript\" src=\"";
        // line 323
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>
        
        
        <!--------------------------------------login ------------------>
        
        <script type=\"text/javascript\" src=\"";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/test/jquery.leanModal.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/test/login.js"), "html", null, true);
        echo "\"></script>
        
        <!------------------------------------/login------------------------>
        
        ";
        // line 333
        $this->displayBlock('javascript', $context, $blocks);
        // line 335
        echo "        <!-- Custom / Functions -->         
        <!--[if IE 8]>
     <script src=\"js/ie8_fix_maxwidth.js\" type=\"text/javascript\"></script>
<![endif]-->         
    </body>     
</html>";
    }

    // line 43
    public function block_scriptcss($context, array $blocks = array())
    {
        // line 44
        echo "        ";
    }

    // line 252
    public function block_body($context, array $blocks = array())
    {
        // line 253
        echo "            
            
            ";
    }

    // line 333
    public function block_javascript($context, array $blocks = array())
    {
        // line 334
        echo "            ";
    }

    public function getTemplateName()
    {
        return "::layout/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  490 => 334,  487 => 333,  481 => 253,  478 => 252,  474 => 44,  471 => 43,  462 => 335,  460 => 333,  453 => 329,  449 => 328,  441 => 323,  436 => 321,  431 => 319,  426 => 317,  421 => 315,  416 => 313,  411 => 311,  406 => 309,  401 => 307,  396 => 305,  391 => 303,  386 => 301,  381 => 299,  343 => 264,  333 => 256,  331 => 252,  299 => 223,  240 => 167,  234 => 164,  228 => 161,  217 => 153,  211 => 150,  205 => 147,  188 => 133,  182 => 130,  142 => 93,  92 => 45,  90 => 43,  82 => 38,  77 => 36,  72 => 34,  64 => 29,  56 => 24,  51 => 22,  45 => 19,  40 => 17,  22 => 1,);
    }
}
/* <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> */
/* <html xmlns="http://www.w3.org/1999/xhtml"> */
/*     <head> */
/*         <title>Charity Theme Home Page </title>         */
/*         <!--[if lt IE 9]>*/
/* 	<script src="js/html5shiv.js"></script>*/
/* <![endif]-->         */
/*         <!--[if lt IE 9]>*/
/* 	<script src="js/mq.js"></script>*/
/* <![endif]-->         */
/*         <meta http-equiv="cache-control" content="no-cache"> */
/*         <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"> */
/*         <meta charset="UTF-8"> */
/*         <meta name="viewport" content="initial-scale=1, maximum-scale=1"> */
/*         <meta name="viewport" content="width=device-width"> */
/*         <!-- Css Files Start -->         */
/*       <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" /> */
/*         <!-- All css -->         */
/*         <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css" />*/
/*         <!-- Bootstrap Css -->         */
/*         <!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="css/customIE.css" /><![endif]-->         */
/*         <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet" type="text/css" />*/
/*         <!-- Font Awesome Css -->         */
/*         <link href="{{asset('css/font-awesome-ie7.css')}}" rel="stylesheet" type="text/css" />*/
/*         <!-- Font Awesome iE7 Css -->         */
/*         <!-- Css Files End -->         */
/*         <!-- Social Icons no JS -->         */
/*         <noscript> */
/*            <link rel="stylesheet" type="text/css" href="{{asset('css/nj.css')}}" /> */
/*         </noscript>         */
/*         <!-- Social Icons no JS -->     */
/*   <!-- yooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo loginnnn -->*/
/*     */
/*   <link href="{{asset('css/test/style.css')}}" rel="stylesheet" type="text/css" />*/
/*     */
/*   <link href="{{asset('css/test/login.css')}}" rel="stylesheet" type="text/css" />*/
/*               */
/*               <link href="{{asset('css/test/inscription.css')}}" rel="stylesheet" type="text/css" />*/
/* */
/*         <!-------------------------->*/
/* */
/* */
/*         {% block scriptcss %}*/
/*         {% endblock %}*/
/*     </head>    */
/*     */
/*     <!----------------------------login yo http://andwecode.com/create-popup-login-and-signup-form/#live---------------------------------------------------->*/
/*     */
/* */
/*     */
/*     <div id="loginmodal" style="display:none;">*/
/*     <h1>Connexion</h1>*/
/*     <form id="loginform" name="loginform" method="post" action="index.html">*/
/*       <label for="username">Username:</label>*/
/*       <input type="text" name="username" id="username" class="txtfield" tabindex="1">*/
/*       */
/*       <label for="password">Password:</label>*/
/*       <input type="password" name="password" id="password" class="txtfield" tabindex="2">*/
/*       */
/*       <div class="center"><input type="submit" name="loginbtn" id="loginbtn" class="flatbtn-blu hidemodal" value="Log In" tabindex="3"></div>*/
/*     </form>*/
/*   </div>*/
/*     <!------------------------------------------------------------------------------------------->*/
/*         <!----------------------------inscription yo---------------------------------------------------->*/
/*     */
/*     */
/*     <div id="inscriptionmodal" style="display:none;">*/
/*     <h1>Inscription</h1>*/
/*     <form id="inscriptionform" name="inscriptionform" method="post" action="index.html">*/
/*       <label for="username">Username:</label>*/
/*       <input type="text" name="username" id="username" class="txtfield" tabindex="1">*/
/*       */
/*       <label for="password">Password:</label>*/
/*       <input type="password" name="password" id="password" class="txtfield" tabindex="2">*/
/*       */
/*       <div class="center"><input type="submit" name="loginbtn" id="loginbtn" class="flatbtn-blu hidemodal" value="Log In" tabindex="3"></div>*/
/*     </form>*/
/*   </div>*/
/*     <!------------------------------------------------------------------------------------------->*/
/*     */
/*     */
/*     <body class=""> */
/*             <!-- Start Main Wrapper -->         */
/*         <div class="wrapper"> */
/*             <!-- Start of Header -->             */
/*             <header class=""> */
/*                 <!-- Start Main Header -->                 */
/*                 <section class="logo_container"> */
/*                     <section class="container-fluid container"> */
/*                         <section class="row-fluid"> */
/*                             <section class="span4"> */
/*                                 <h1 id="logo"> <a href="index.html"> */
/*                                         <img src="{{asset('images/logo.png')}}"> */
/*                                     </a> </h1> */
/*                             </section>                             */
/*                             <section class="span5 pull-right"> */
/*                                 <figure class="charity_counter_wrapper"> */
/*                                     <section class="span5"> */
/*                                         <div class="charity_title"> */
/*                                             evenement */
/*                                             <br /> prochain 2016*/
/*                                         </div>                                         */
/*                                     </section>                                     */
/*                                     <section class="span1 event_more pull-right"> */
/*                                         <a href="event_detail.html" data-placement="bottom" rel="tooltip" title="View Event Detail"> <i class="icon">+</i> </a> */
/*                                     </section>                                     */
/*                                     <section class="span6 counter_bg pull-right"> */
/*                                         <div id="countdown162" class="tCountdOwn"> */
/* </div>                                         */
/*                                     </section>                                     */
/*                                 </figure>                                 */
/*                             </section>                             */
/*                         </section>                         */
/*                     </section>                     */
/*                 </section>                 */
/*                 <!-- Main Nav Bar -->                 */
/*                 <nav id="nav" class=""> */
/*                     <section class="container-fluid container"> */
/*                         <section class="row-fluid"> */
/*                             <div class="navbar navbar-inverse"> */
/*                                 <div class="navbar-inner"> */
/*                                     <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> */
/*                                         <span class="icon-bar"></span> */
/*                                         <span class="icon-bar"></span> */
/*                                         <span class="icon-bar"></span> */
/*                                     </button>                                     */
/*                                     <div class="nav-collapse collapse"> */
/*                                         <ul class="nav"> */
/*                                             <li class="active"> */
/*                                                 <a href="{{path('acceuil')}}"> Home </a> */
/*                                             </li>                                             */
/*                                             <li class="dropdown"> */
/*                                                 <a class="dropdown-toggle" href="{{path('freelancer')}}">Freelance<br></a> */
/*                                                 <ul class="dropdown-menu"> */
/*                                                     <li>*/
/*                                                         <a href="team.html"> je veux travailler</a>*/
/*                                                     </li>                                                     */
/*                                                     <li>*/
/*                                                         <a href="career.html">je veux embaucher</a>*/
/*                                                     </li>                                                     */
/*                                                 </ul>                                                 */
/*                                             </li>                                             */
/*                                             <li class="dropdown"> */
/*                                                 <a class="dropdown-toggle" href=""> evenements<b class="caret"></b> </a> */
/*                                                 <ul class="dropdown-menu"> */
/*                                                     <li>*/
/*                                                         <a href="{{path('detail_evenement')}}">detail de l'evenements</a>*/
/*                                                     </li>                                                     */
/*                                                     <li>*/
/*                                                         <a href="{{path('Calendrier_evenements')}}">calendrier des evenements</a>*/
/*                                                     </li>                                                     */
/*                                                     <li>*/
/*                                                         <a href="{{path('evenement_avenir')}}">evenement à venir</a>*/
/*                                                     </li>                                                     */
/*                                                 </ul>                                                 */
/*                                             </li>                                             */
/*                                             <li class="dropdown"> */
/*                                                 <a class="dropdown-toggle" href="">  Projects	<b class="caret"></b> </a> */
/*                                                 <ul class="dropdown-menu"> */
/*                                                     <li>*/
/*                                                         <a href="{{path('List_projets')}}">Liste des Projets</a>*/
/*                                                     </li>                                                     */
/*                                                     <li>*/
/*                                                         <a href="{{path('detail_projets')}}">Detail du projets</a>*/
/*                                                     </li>                                                     */
/*                                                     <li>*/
/*                                                         <a href="{{path('financement_projets')}}">payement</a>*/
/*                                                     </li>                                                     */
/*                                                 </ul>                                                 */
/*                                             </li>                                             */
/*                                             <li class="dropdown"> */
/*                                                 <a class="dropdown-toggle" href="blog.html">  Forum <b class="caret"></b> </a> */
/*                                                 <ul class="dropdown-menu"> */
/*                                                     <li>*/
/*                                                         <a href="blog.html">Liste des sujets</a>*/
/*                                                     </li>                                                     */
/*                                                     <li>*/
/*                                                         <a href="blog_detail.html">description sujet</a>*/
/*                                                     </li>                                                     */
/*                                                 </ul>                                                 */
/*                                             </li>                                             */
/*                                             <li class="dropdown"> */
/*                                                 <ul class="dropdown-menu"> */
/*                                                     <li> */
/*                                                         <a href="gallery_1_col.html">Single Column			</a>*/
/*                                                     </li>                                                     */
/*                                                     <li> */
/*                                                         <a href="gallery_2_col.html">	Two Column		</a>*/
/*                                                     </li>                                                     */
/*                                                     <li> */
/*                                                         <a href="gallery_3_col.html">	Three Column	</a>*/
/*                                                     </li>                                                     */
/*                                                     <li> */
/*                                                         <a href="gallery_4_col.html">	Four Column		</a>*/
/*                                                     </li>                                                     */
/*                                                     <li> */
/*                                                         <a href="gallery_detail.html">	Gallery Detail		</a>*/
/*                                                     </li>                                                     */
/*                                                 </ul>                                                 */
/*                                             </li>                                             */
/*                                             <!--<li class="dropdown"> */
/*                                                 <a class="dropdown-toggle" href="#">  Pages <b class="caret"></b> </a> */
/*                                                 <ul class="dropdown-menu"> */
/*                                                     <li>*/
/*                                                         <a href="faqs.html">Frequently Asked Questions </a>*/
/*                                                     </li>                                                     */
/*                                                     <li>*/
/*                                                         <a href="404.html">404 Page </a>*/
/*                                                     </li>                                                     */
/*                                                     <li>*/
/*                                                         <a href="search.html">Search Page </a>*/
/*                                                     </li>                                                     */
/*                                                     <li>*/
/*                                                         <a href="sitemap.html">Sitemap </a>*/
/*                                                     </li>                                                     */
/*                                                     <li>*/
/*                                                         <a href="shortcodes.html">ShortCodes </a>*/
/*                                                     </li>                                                     */
/*                                                 </ul>                                                 */
/*                                             </li>  */
/*                                             -->*/
/*                                             <li> */
/*                                                 <a href="{{path('contact')}}"> Contact </a> */
/*                                             </li>                                             */
/*                                             <li class="dropdown"> */
/*                                                 <a class="dropdown-toggle" href="#inscriptionmodal" class="flatbtn" id="inscriptiontrigger">Inscription<br></a> */
/*                                             </li>                                             */
/*                                             <li class="dropdown"> */
/*                                                 <a class="dropdown-toggle" href="#loginmodal" class="flatbtn" id="logintrigger">Connexion<br></a> */
/*                                             </li>                                             */
/*                                         </ul>                                         */
/*                                     </div>                                     */
/*                                     <!--/.nav-collapse -->                                     */
/*                                 </div>                                 */
/*                                 <!-- /.navbar-inner -->                                 */
/*                             </div>                             */
/*                             <div class="nav_search pull-right">*/
/*                                 <form method="post" actoion="#"> */
/*                                     <input type="text" value="Search Here..." name="s" id="s" /> */
/*                                     <button>*/
/*                                         <i class="icon-search"></i> */
/*                                     </button>*/
/*                                 </form>                                 */
/*                             </div>                             */
/*                             <!-- /.navbar -->                             */
/*                         </section>                         */
/*                     </section>                     */
/*                 </nav>                 */
/*                 <!-- End Main Nav Bar -->                 */
/*             </header>             */
/*             <!-- End of Header --> */
/*         {% block body %}*/
/*             */
/*             */
/*             {% endblock %}*/
/*                 <!-- End of Footer 2 -->                 */
/*                 <!-- Start of Footer 3 -->                 */
/*                 <section class="footer_3"> */
/*                     <section class="container-fluid container"> */
/*                         <section class="row-fluid"> */
/*                             <figure class="span6" id="footer_left"> */
/*                                 <ul class="footer_nav"> */
/*                                     <li> */
/*                                         <a href="{{path('acceuil')}}">	Home 		</a> */
/*                                     </li>                                     */
/*                                     <li> */
/*                                         <a href="shortcodes.html"> 	Features	</a> */
/*                                     </li>                                     */
/*                                     <li> */
/*                                         <a href="blog.html"> 	Blog 		</a> */
/*                                     </li>                                     */
/*                                     <li> */
/*                                         <a href="shortcodes.html"> 	Portfolio	</a> */
/*                                     </li>                                     */
/*                                     <li> */
/*                                         <a href="contact_us.html"> 	Contact		</a> */
/*                                     </li>                                     */
/*                                 </ul>                                 */
/*                                 <p> Copyright © 2013 - Be Human by <a href="http://www.crunchpress.com"> crunchpress.com </a></p> */
/*                             </figure>                             */
/*                             <figure class="span6" id="footer_right"> */
/*                                 <div id="tweets" class="latest_tweets"> */
/*                                     <ul id="latest_tweets"> */
/*                                         <li> Have a look at new theme of crunchpress at */
/*                                             <a href="http://www.themeforest.net/user/crunchpress"> http://bit.ly/ju89ytg </a> - we've added new great stuff and refreshed the theme!*/
/*                                         </li>                                         */
/*                                     </ul>                                     */
/*                                 </div>                                 */
/*                             </figure>                             */
/*                         </section>                         */
/*                     </section>                     */
/*                 </section>                 */
/*                 <!-- End of Footer 3 -->                 */
/*             </footer>             */
/*             <!-- End of Footer -->             */
/*         </div>         */
/*         <!-- End Main Wrapper -->         */
/*         <!-- JS Files Start -->         */
/*         <script type="text/javascript" src="{{asset('js/lib-1-9-1.js')}}"></script>*/
/*         <!-- lib Js -->         */
/*         <script type="text/javascript" src="{{asset('js/lib-1-7-1.js')}}"></script>*/
/*         <!-- lib Js -->         */
/*         <script type="text/javascript" src="{{asset('js/modernizr.js')}}"></script>*/
/*         <!-- Modernizr -->         */
/*         <script type="text/javascript" src="{{asset('js/easing.js')}}"></script>*/
/*         <!-- Easing js -->         */
/*         <script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>*/
/*         <!-- Bootstrap -->         */
/*         <script type="text/javascript" src="{{asset('js/bxslider.js')}}"></script>*/
/*         <!-- BX Slider -->         */
/*         <script type="text/javascript" src="{{asset('js/fitvids.js')}}"></script>*/
/*         <!-- fIt Video -->         */
/*         <script type="text/javascript" src="{{asset('js/clearInput.js')}}"></script>*/
/*         <!-- Input Clear -->         */
/*         <script type="text/javascript" src="{{asset('js/smooth-scroll.js')}}"></script>*/
/*         <!-- smooth Scroll -->         */
/*         <script type="text/javascript" src="{{asset('js/prettyPhoto.js')}}"></script>*/
/*         <!-- Pretty Photo -->         */
/*         <script type="text/javascript" src="{{asset('js/social.js')}}"></script>*/
/*         <!-- Social Media Hover Effect -->         */
/*         <script type="text/javascript" src="{{asset('js/countdown.js')}}"></script>*/
/*         <!-- Event Counter -->         */
/*         <script type="text/javascript" src="{{asset('js/custom.js')}}"></script>*/
/*         */
/*         */
/*         <!--------------------------------------login ------------------>*/
/*         */
/*         <script type="text/javascript" src="{{asset('js/test/jquery.leanModal.min.js')}}"></script>*/
/*         <script type="text/javascript" src="{{asset('js/test/login.js')}}"></script>*/
/*         */
/*         <!------------------------------------/login------------------------>*/
/*         */
/*         {% block javascript %}*/
/*             {% endblock %}*/
/*         <!-- Custom / Functions -->         */
/*         <!--[if IE 8]>*/
/*      <script src="js/ie8_fix_maxwidth.js" type="text/javascript"></script>*/
/* <![endif]-->         */
/*     </body>     */
/* </html>*/
