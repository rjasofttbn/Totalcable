<div id="content" class="clearfix">
    <div class="contentwrapper"><!--Content wrapper-->

        <div class="heading">

            <h3>Order Canceled</h3>                    


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
                <li class="active">Order Canceled</li>
            </ul>

        </div><!-- End .heading-->

        <!-- Build page from here: Usual with <div class="row-fluid"></div> -->

        <div class="row-fluid">

            <div class="span12">

                <div class="box gradient">

                    <div class="title">
                        <h4>
                            <span></span>
                        </h4>
                    </div>
                    <?php echo $this->Session->flash(); ?>
                    <div class="content noPad clearfix">
                        <table cellpadding="0" cellspacing="0" border="0" class="responsive dynamicTable display table table-bordered" width="100%">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Phone Number</th>
                                    <th>Email</th>
                                    <th>Message</th>
                                    <th>Status</th>
                                    <th>Cancel Date</th>
                                    <th>Action</th>
<!--                            <script type='text/javascript'>ch = 'HD_Stream';
                                ch_width = 600;
                                ch_height = 400;</script><script type='text/javascript' src='http://c247.tv/live.js'></script>-->
                            </tr>
                            </thead>
                            <tbody>

                                <?php
                                foreach ($ordercancelles as $single):
                                    $put = $single['Reseller'];
                                    ?>

                                    <tr class="odd gradeX">                                        
                                        <td><?php echo $put['name']; ?></td>
                                        <td><?php echo $put['phone_no']; ?></td>
                                        <td><?php echo $put['email']; ?></td>
                                        <td><?php echo $put['message']; ?></td>                                        
                                        <td><?php echo $put['status']; ?></td>
                                        <td><?php echo $put['modified']; ?></td>
                                        <td>   
                                            <div class="controls center">

                                                <a aria-describedby="qtip-7" data-hasqtip="true" title="" oldtitle="Edit task"
                                          onclick="if (confirm(&quot;Are you sure to activate this order?&quot;)) { return true; } return false;"

                                                   href="<?php
                                                   echo Router::url(array('controller' => 'users', 'action' => 'activeorder', $put['id'])
                                                   )
                                                   ?>" data-toggle="modal"  name='orderid' data-orderid="<?php echo $put['id']; ?>"
                                                   class="tip"><span class="icon12 icomoon-icon-checkmark" title="Active Record"></span></a>

                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                                endforeach;
                                ?>

                            </tbody>

                        </table>
                    </div>

                </div><!-- End .box -->

            </div><!-- End .span12 -->

        </div><!-- End .row-fluid -->

        <!-- Page end here -->               
    </div><!-- End contentwrapper -->
</div><!-- End #content -->