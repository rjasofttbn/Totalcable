<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $admin_title; ?></title>
    <meta name="author" content="SuggeElson" />
    <meta name="description" content="Supr admin template - new premium responsive admin template. This template is designed to help you build the site administration without losing valuable time.Template contains all the important functions which must have one backend system.Build on great twitter boostrap framework" />
    <meta name="keywords" content="admin, admin template, admin theme, responsive, responsive admin, responsive admin template, responsive theme, themeforest, 960 grid system, grid, grid theme, liquid, masonry, jquery, administration, administration template, administration theme, mobile, touch , responsive layout, boostrap, twitter boostrap" />
    <meta name="application-name" content="Supr admin template" />

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Le styles -->
    <!-- Use new way for google web fonts 
    http://www.smashingmagazine.com/2012/07/11/avoiding-faux-weights-styles-google-web-fonts -->
    <!-- Headings -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css' />  -->
    <!-- Text -->
    <!-- <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css' /> --> 
    <!--[if lt IE 9]>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:700" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Droid+Sans:400" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Droid+Sans:700" rel="stylesheet" type="text/css" />
    <![endif]-->

    <!-- Core stylesheets do not remove -->
 
    <!-- Le fav and touch icons -->

     <?php echo $this->Html->css(
         array(
            'http://fonts.googleapis.com/css?family=Open+Sans:400,700',
            'http://fonts.googleapis.com/css?family=Droid+Sans:400,700',
            'bootstrap/bootstrap.min',
            'bootstrap/bootstrap-responsive.min',
            'supr-theme/jquery.ui.supr',
            'icons',
            '/plugins/forms/uniform/uniform.default',           
            '/plugins/misc/qtip/jquery.qtip',
            '/plugins/misc/fullcalendar/fullcalendar',
            '/plugins/misc/search/tipuesearch',
            '/plugins/forms/uniform/uniform.default',
            '/plugins/tables/dataTables/jquery.dataTables',
            '/plugins/forms/select/select2',
            '/plugins/forms/validate/validate',
            '/plugins/forms/smartWizzard/smart_wizard',
            '/assets/frontend/layout/css/themes/red',
            '/assets/frontend/layout/css/style',
            '/assets/global/plugins/bootstrap/css/bootstrap.min',
            '/assets/global/css/components',
             'main',
             'custom',
            )

        );?>
   
    
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo $this->webroot; ?>/images/favicon.ico" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $this->webroot; ?>/images/apple-touch-icon-144-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $this->webroot; ?>/images/apple-touch-icon-114-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $this->webroot; ?>/images/apple-touch-icon-72-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" href="<?php echo $this->webroot; ?>/images/apple-touch-icon-57-precomposed.png" />
    
    <script type="text/javascript">
        //adding load class to body and hide page
        document.documentElement.className += 'loadstate';
    </script>

    </head>
      
    <body>
    <!-- loading animation -->
    <div id="qLoverlay"></div>
    <div id="qLbar"></div>
        
    <div id="header">

        <div class="navbar">
            <div class="navbar-inner">
              <div class="container-fluid">
                <a class="brand" href="<?php echo Router::url(array('controller'=>'users','action'=>'deshboard'))?>"><?php echo $admin_title; ?></a>
                <div class="nav-no-collapse">
                    <ul class="nav pull-right usernav">
                     
                      
                        <li>
                             <?php
                                 if ($admin_logout == true) {
                                        $url = Router::url(array('controller' => 'users', 'action' => 'logout'));
                                        
                                        
                                    }
                                    else {
                                        $url = Router::url(array('controller' => '/','action' => 'logout'));
                                      

                                    }
                                    ?>
                            <a href="<?php echo $url; ?>"><span class="icon16 icomoon-icon-exit"></span> Logout</a>
                        </li>
                    </ul>
                </div><!-- /.nav-collapse -->
              </div>
            </div><!-- /navbar-inner -->
          </div><!-- /navbar --> 

    </div><!-- End #header -->