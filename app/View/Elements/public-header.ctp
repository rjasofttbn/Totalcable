<!-- Body BEGIN -->
<body class="corporate">
    <!-- BEGIN STYLE CUSTOMIZER -->

    <!-- END BEGIN STYLE CUSTOMIZER --> 


    <!-- BEGIN HEADER -->
    <div class="header page-header-fixed">
        <!-- BEGIN TOP BAR -->
        <div class="pre-header">
            <div class="container">
                <div class="row">
                    <!-- BEGIN TOP BAR LEFT PART -->
                    <div class="col-md-6 col-sm-6 additional-shop-info">
                        <ul class="list-unstyled list-inline">
                            <li><i class="fa fa-phone"></i><span>1-212-444-8138</span></li>
                            <li><i class="fa fa-envelope-o"></i><span>Info@TotalCableUSA.com</span></li>
                        </ul>
                    </div>
                    <!-- END TOP BAR LEFT PART -->
                    <!-- BEGIN TOP BAR MENU -->
                    <div class="col-md-6 col-sm-6 additional-nav">
                        <ul class="list-unstyled list-inline pull-right">
                            <li>
                                <?php
                                 if (isset($isloggedin) && $isloggedin == true) {
                                        $url = Router::url(array('controller' => '/','action' => 'logout'));
                                        $url2 = Router::url(array('controller' => '/','action' => 'profile'));
                                        $name = "logout";
                                        $status = "Profile";
                                    }
                                    else {
                                        $url = Router::url(array('action' => 'login'));
                                        $url2 = Router::url(array('action' => 'tariffplan'));
                                        //$url2 = 0;
                                        $name = "log in";
                                        $status = "Registration";

                                    }
                                    ?>
                                <a href="<?php echo $url; ?>" class="after-button"><?php echo $name; ?></a>
                            </li>
                            <?php if (!empty($url2)) { ?>
                            <li><a href="<?php echo $url2;?>"><?php echo $status; ?></a>
                            </li>
                            <?php } ?>
                        </ul>
                    </div>
                    <!-- END TOP BAR MENU -->
                </div>
            </div>        
        </div>
        <!-- END TOP BAR -->
        <div class="col-md-12 col-sm-12">

            <div class="container">
                <a class="site-logo" href="<?php echo Router::url(array('action' => 'index')) ?>"><img src="<?php echo $this->webroot; ?>assets/frontend/layout/img/logos/logo-corp-red.png" alt="Total Cable USA" title="Total Cable USA"></a>

                <a href="javascript:void(0);" class="mobi-toggler"><i class="fa fa-bars"></i></a>

                <!-- **************************BEGIN MENU HERE -->
                <div class="header-navigation pull-right font-transform-inherit">
                    <ul>
                        <li>

                            <a class="" href="<?php echo Router::url(array('action' => 'index')) ?>">
                                Home 

                            </a>


                        </li>



                        <li>

                            <a class="dropdown-toggle" href="<?php echo Router::url(array('action' => 'package')) ?>">
                                Packages 

                            </a>


                        </li>
                        <li>
                            <a class="dropdown-toggle" href="<?php echo Router::url(array('action' => 'troubleshoot')) ?>">
                                Troubleshoot 

                            </a>


                        </li>
                        <li >
                            <a class="dropdown-toggle" href="<?php echo Router::url(array('action' => 'channels')) ?>">
                                Channels

                            </a>


                        </li>

                        <li>

                            <a href="<?php echo Router::url(array('action' => 'whytotalcable')) ?>" > Why Total Cable </a>

                        </li>
                        <li><a href="<?php echo Router::url(array('action' => 'reseller')) ?>" >Reseller</a></li>                  
                        <li><a href="<?php echo Router::url(array('action' => 'newses')) ?>" >News</a></li>
                        <li><a href="<?php echo Router::url(array('action' => 'musical_night')) ?>" >Musical Night</a></li>
                        <li><a href="<?php echo Router::url(array('action' => 'contactus')) ?>" >Contact Us</a></li>
                  
                      

                        <!-- ***************************** END OF MENU HERE************ -->
                        <!--  <li><a href="http://keenthemes.com/preview/metronic/theme/templates/admin" target="_blank">Admin theme</a></li> -->

                        <!-- BEGIN TOP SEARCH -->
<!--                        <li class="menu-search">
                            <span class="sep"></span>
                            <i class="fa fa-search search-btn"></i>
                            <div class="search-box" style="display: none;">
                                <form action="#">
                                    <div class="input-group">
                                        <input type="text" placeholder="Search" class="form-control">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary" type="submit">Search</button>
                                        </span>
                                    </div>
                                </form>
                            </div> 
                        </li>-->
                        <!-- END TOP SEARCH -->
                    </ul>
                       
                </div>
                <!-- END NAVIGATION -->
                <div class="clearboth">
                </div>
                   <div id="info-container"> 
                    </div>
            </div>
        </div>
    </div>
