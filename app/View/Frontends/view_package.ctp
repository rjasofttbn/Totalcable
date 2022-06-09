<div id="content" class="clearfix">
            <div class="contentwrapper"><!--Content wrapper-->

                <div class="heading">

                    <h3>All Packages</h3>                    
                   

                    <div class="resBtnSearch">
                        <a href="#"><span class="icon16 icomoon-icon-search-3"></span></a>
                    </div>

                    <div class="search">

                        <form id="searchform" action="search.html">
                            <input type="text" id="tipue_search_input" class="top-search" placeholder="Search here ..." />
                            <input type="submit" id="tipue_search_button" class="search-btn" value=""/>
                        </form>
                
                    </div><!-- End search -->
                    
                    <ul class="breadcrumb">
                        <li>You are here:</li>
                        <li>
                            <a href="#" class="tip" title="back to dashboard">
                                <span class="icon16 icomoon-icon-screen-2"></span>
                            </a> 
                            <span class="divider">
                                <span class="icon16 icomoon-icon-arrow-right-2"></span>
                            </span>
                        </li>
                        <li class="active">All Packages</li>
                    </ul>

                </div><!-- End .heading-->
                    
                <!-- Build page from here: Usual with <div class="row-fluid"></div> -->

                    <div class="span12">

                        <div class="portlet box purple-sharp">
                            <div class="portlet-title">
                                <div class="caption">
                                    <i class="fa  fa-arrow-right"></i><?php echo $packageName;?>
                                </div>
                                <div class="tools">
                                    <a href="javascript:;" class="collapse" data-original-title="" title="">
                                    </a>

                                </div>
                            </div>
                            <div class="portlet-body">
                                <div class="row margin-bottom-40">
                                    <?php foreach($packages as $package): 

                                        

                                   
                                        echo $package['psettings']['offer']; 


                                        ?>
                                       <div class="pricing-footer">

                                            <?php

                                            echo $this->Form->create('User', array(
                                                'inputDefaults' => array(
                                                    'label' => false,
                                                    'div' => false
                                                ),
                                                'id' => 'form-validate',
                                                'class' => 'form-horizontal',
                                                'novalidate' => 'novalidate'

                                                    )
                                            );
                        
                                            if ($psetting_id == $package['psettings']['id']) {
                                                    ?>

                                                        <a class="btn yellow-crusta subscribe-btn" id="<?php echo $package['psettings']['id']; ?>" data-toggle="modal" data-target="#bookForm" href=""> my package </a>
                                                        <?php
                                            }
                                            else {
                                                ?>
                                                    <div class="hide">
                                                      <?php
                                                        echo $this->Form->input(
                                                                'psetting_id', array(
                                                                'type' => 'text',
                                                                'value' => $package['psettings']['id']
                                                                )
                                                        );
                                                        ?> 
                                                   </div>
                                                    <?php
                                                    echo $this->Form->button(
                                                            'Migrate to this package', array(
                                                        'class' => 'btn yellow-crusta subscribe-btn',
                                                        'type' => 'submit',
                                                                
                                                    ));
                                                    ?>
                                                               <!--  <a class="btn yellow-crusta subscribe-btn"  data-toggle="modal" data-target="#bookForm" href=""> upgrade package </a> -->
                                                                <?php
                                            }

                                                 
                                            ?>
                                             <?php echo $this->Form->end(); ?>
                                                
                                            
                                          </div>
                                      </div> 
                                      </div>
                                      <?php
                                    endforeach; ?>

                       
                                </div>
                            </div>




                            <div class="alert alert-danger">
                                <span class="label label-danger">NOTE</span> $10 will be charged as additional per box bill. $50 will be charged as SD for per box.
                            </div>



                        </div>

                    </div><!-- End .row-fluid -->
               
                <!-- Page end here -->               
            </div><!-- End contentwrapper -->
        </div><!-- End #content -->