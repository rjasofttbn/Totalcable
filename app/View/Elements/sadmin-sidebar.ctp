<div id="wrapper">

    <!--Responsive navigation button-->  
    <div class="resBtn">
        <a href="#"><span class="icon16 minia-icon-list-3"></span></a>
    </div>

    <!--Left Sidebar collapse button-->  
    <div class="collapseBtn leftbar">
        <a href="#" class="tipR" title="Hide Left Sidebar"><span class="icon12 minia-icon-layout"></span></a>
    </div>

    <!--Sidebar background-->
    <div id="sidebarbg"></div>
    <!--Sidebar content-->
    <div id="sidebar">

        <div class="shortcuts">
            <ul>
                <li><a href="support.html" title="Support section" class="tip"><span class="icon24 icomoon-icon-support"></span></a></li>
                <li><a href="#" title="Database backup" class="tip"><span class="icon24 icomoon-icon-database"></span></a></li>
                <li><a href="charts.html" title="Sales statistics" class="tip"><span class="icon24 icomoon-icon-pie-2"></span></a></li>
                <li><a href="#" title="Write post" class="tip"><span class="icon24 icomoon-icon-pencil"></span></a></li>
            </ul>
        </div><!-- End search -->            

        <div class="sidenav">

            <div class="sidebar-widget" style="margin: -1px 0 0 0;">
                <h5 class="title" style="margin-bottom:0">Navigation</h5>
            </div><!-- End .sidenav-widget -->

            <div class="mainnav">
                <ul>
                    <li>
                        <a href="#"><span class="icon16 icomoon-icon-list-view-2"></span>User Manaement</a>
                        <ul class="sub">
                            <li>
                                <a href="<?php echo Router::url(array('controller' => 'users', 'action' => 'role')) ?>"><span class="icon16 icomoon-icon-arrow-right-2"></span>Create Role</a>
                            </li>
                            <li>
                                <a href="<?php echo Router::url(array('controller' => 'users', 'action' => 'editrole')) ?>"><span class="icon16 icomoon-icon-arrow-right-2"></span>Edit Role</a>
                            </li>
                            <li>
                                <a href="<?php echo Router::url(array('controller' => 'users', 'action' => 'registration')) ?>"><span class="icon16 icomoon-icon-arrow-right-2"></span>Create User</a>
                            </li>
                            <li>
                                <a href="<?php echo Router::url(array('controller' => 'users', 'action' => 'manage_user')) ?>"><span class="icon16 icomoon-icon-arrow-right-2"></span>Manage User</a>
                            </li>

                        </ul>                        
                    </li>
                    <li>
                        <a href="#"><span class="icon16 icomoon-icon-list-view-2"></span>Tariff plan State</a>
                        <ul class="sub">
                            <li>
                                <a href="<?php echo Router::url(array('controller' => 'users', 'action' => 'addstate')) ?>"><span class="icon16 icomoon-icon-arrow-right-2"></span>Add</a>
                            </li>
                            <li>
                                <a href="<?php echo Router::url(array('controller' => 'users', 'action' => 'editstate')) ?>"><span class="icon16 icomoon-icon-arrow-right-2"></span>Edit</a>
                            </li>

                        </ul>                        
                    </li>
                    
                    
                     <li>
                        <a href="#"><span class="icon16 icomoon-icon-list-view-2"></span>Data Entry</a>
                        <ul class="sub">
                            <li>
                                <a href="<?php echo Router::url(array('controller' => 'users', 'action' => 'insertcountry')) ?>"><span class="icon16 icomoon-icon-arrow-right-2"></span>Insert Country</a>
                            </li>
                            <li>
                                <a href="<?php echo Router::url(array('controller' => 'users', 'action' => 'editcountry')) ?>"><span class="icon16 icomoon-icon-arrow-right-2"></span>Manage Country</a>
                            </li>

                        </ul>                        
                    </li>
                    

                    <li>
                        <a href="<?php echo Router::url(array('controller' => 'users', 'action' => 'emailsetting')) ?>"><span class="icon16 icomoon-icon-list-view-2"></span>Setting</a>
                    </li>
                    <li>
                        <a href="#"><span class="icon16 icomoon-icon-list-view-2"></span>Reseller</a>
                        <ul class="sub">                                         
                            <li>
                                <a href="<?php echo Router::url(array('controller' => 'users', 'action' => 'ordernotchecked')) ?>"><span class="icon16 icomoon-icon-arrow-right-2"></span>Order not Checked</a>
                            </li>
                            <li>
                                <a href="<?php echo Router::url(array('controller' => 'users', 'action' => 'orderconfirmed')) ?>"><span class="icon16 icomoon-icon-arrow-right-2"></span>Order Conformed</a>
                            </li>

                            <li>
                                <a href="<?php echo Router::url(array('controller' => 'users', 'action' => 'ordercancelled')) ?>"><span class="icon16 icomoon-icon-arrow-right-2"></span>Order Cancelled</a>
                            </li>
                        </ul>                        
                    </li>    

                    <li>
                        <a href="#"><span class="icon16 icomoon-icon-list-view-2"></span>Complain</a>
                        <ul class="sub">                                         
                            <li>
                                <a href="<?php echo Router::url(array('controller' => 'users', 'action' => 'complain_notchecked')) ?>"><span class="icon16 icomoon-icon-arrow-right-2"></span>Not Check Data</a>
                            </li>
                            <li>
                                <a href="<?php echo Router::url(array('controller' => 'users', 'action' => 'complain_checked')) ?>"><span class="icon16 icomoon-icon-arrow-right-2"></span>Checked Data</a>
                            </li> 
                        </ul> 
                    </li>  

                    <li>
                        <a href="#"><span class="icon16 icomoon-icon-list-view-2"></span>Package Management</a>
                        <ul class="sub">                                         
                            <li>
                                <a href="<?php echo Router::url(array('controller' => 'users', 'action' => 'package')) ?>"><span class="icon16 icomoon-icon-arrow-right-2"></span>Create Package</a>
                            </li>
                            <li>
                                <a href="<?php echo Router::url(array('controller' => 'users', 'action' => 'editpackage')) ?>"><span class="icon16 icomoon-icon-arrow-right-2"></span>Edit Package</a>
                            </li> 
                            <li>
                                <a href="<?php echo Router::url(array('controller' => 'users', 'action' => 'psetting')) ?>"><span class="icon16 icomoon-icon-arrow-right-2"></span>Package Settings</a>
                            </li> 
                        </ul> 
                    </li>
                    <li>
                        <a href="#"><span class="icon16 icomoon-icon-list-view-2"></span>Seat Management</a>
                        <ul class="sub">                                         
                            <li>
                               
                                <a target="_blank" href="<?php echo Router::url(array('controller' => 'users', 'action' => 'seat_booking')) ?>"><span class="icon16 icomoon-icon-arrow-right-2">Seat Management</a>
                            </li>
                            <li>
                                <a href="<?php echo Router::url(array('controller' => 'users', 'action' => 'new_booking')) ?>"><span class="icon16 icomoon-icon-arrow-right-2">New Booking</a>
                                
                            </li>
                        </ul> 
                        
                    </li>

                </ul>
            </div>
        </div><!-- End sidenav -->
    </div><!-- End #sidebar -->