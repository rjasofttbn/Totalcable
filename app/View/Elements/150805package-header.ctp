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
                            <li><a href="<?php echo Router::url(array('action' => 'login')) ?>">Log In</a></li>
                            <li><a href="<?php echo Router::url(array('action' => 'registration')) ?>">Registration</a></li>
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
                <div class="row-fluid">
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
                           <!--  <li class="menu-search">
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
                            </li> -->
                            <!-- END TOP SEARCH -->
                        </ul>

                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span12">

                        <div class="title">
                            <?php echo $this->Session->flash(); ?> 
                        </div>
                        <div class="content">
                            <?php
                            echo $this->Form->create('Usps', array(
                                'inputDefaults' => array(
                                    'label' => false,
                                    'div' => false
                                ),
                                'id' => 'form-validate',
                                'class' => 'form-horizontal',
                                'novalidate' => 'novalidate',
                                'url' => array('controller' => '/', 'action' => 'tariffplan')
                                    )
                            );
                            ?>

                            <div class="form-row row-fluid">
                                <div class="span6">
                                    <div class="row-fluid">
                                        <label class="form-label span3" style="margin-left: 46px;" for="required">Enter your ZIP CODE</label>

                                        <?php
                                        echo $this->Form->input(
                                                'zipcode', array(
                                            'id' => 'required',
                                            'class' => 'span9 text zipcode'
                                                )
                                        );
                                        ?>


                                        <div class="btn" style="margin-top: -3px;">
                                            <?php
                                            echo $this->Form->button(
                                                    'Find your plan', array('class' => 'btn btn-success', 'type' => 'submit')
                                            );
                                            ?>
                                        </div>
                                        <div class="btn btn-primary pull-right"  id="shipbutton" style="margin-right: 100px; margin-top: 4px;"><a style="color: aliceblue;" href="<?php echo Router::url(array('action' => 'shipping_and_returns')) ?>" >Shipping and Returns </a></div>
                                    </div>
                                </div>

                            </div> 


                            <?php echo $this->Form->end(); ?>

                        </div>

                        <!-- End .box -->

                    </div><!-- End .span12 -->

                </div><!-- End .row-fluid -->  

                <!-- END NAVIGATION -->
            </div>
        </div>


    </div>
