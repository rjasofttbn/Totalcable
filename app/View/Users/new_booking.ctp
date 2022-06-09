<div id="content" class="clearfix">
    <div class="contentwrapper"><!--Content wrapper-->

        <div class="heading">

            <h3>All Booked seats</h3>                    


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
                <li class="active">All Booked seats</li>
            </ul>

        </div><!-- End .heading-->

        <!-- Build page from here: Usual with <div class="row-fluid"></div> -->

        <div class="row-fluid">
            <?php echo $this->Session->flash(); ?>
            <div class="span12">

                <div class="box gradient">

                    <div class="title">
                        <h4>
                            <span>All Booked seats list</span>
                        </h4>
                    </div>

                    <div class="content noPad clearfix">
                        <table cellpadding="0" cellspacing="0" border="0" class="responsive dynamicTable display table table-bordered" width="100%">
                            <thead>
                                <tr>
                                    
                                    <th>Customer Details</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $prefix = '';


                                foreach($seats as $child) {
                                    $childids[] = $child['customers']['email'];
                                }
                                $fruitList = null;
                                $seatlist = null;
                                foreach($seats as $fruit) {
                                    if(in_array($fruit['customers']['email'], $childids) && !empty($fruit['Seat']['real'])) {
                                        $fruitList .= $prefix . '"' . $fruit['Seat']['real'] . '"';
                                        $seatlist .= $prefix . '"' . $fruit['Seat']['id'] . '"';
                                        $prefix = ', ';
                                    }
                                }




                                $last_v = null;


                                foreach ($seats as $single):
                                    if ( $last_v == $single['customers']['email'] ) {
                                            /**
                                             *  Duplicate value, so skip it
                                             */
                                            continue;
                                        }
                                                                        
                                    if(!empty($single['Seat']['real']))
                                     {
       
                                        $seat = $single['Seat'];
                                          // pr($single);
                                       // exit;
                                        
                                        ?>
                                        <tr class="odd gradeX">
                                          
                                            <td><?php 

                                             // if (count($single['Seat']['real'])<1){
                                             //    $fruitList = $single['Seat']['real'];

                                             // }
                                                       
                                           
                                            $mail_content = __('<strong>Name: </strong>', 'beopen') . $single['customers']['name'] . '<br/>'.
                                                __('<strong>Email: </strong>', 'beopen') . $single['customers']['email'] . '<br/>'.
                                                 __('<strong>Phone Number: </strong>', 'beopen') . $single['customers']['phone'] . '<br/>'.
                                                    __('<strong>Seat No: </strong>', 'beopen') . $fruitList . '<br/>';
                                            echo $mail_content;
                                        ?>
                                          </td>
                                        <td><?php echo $seat['status']; ?></td>

                                        <td>   
                                            <div class="controls center">

                                                 <?php  
                                                     $seatlist = str_replace('"', '', $seatlist); 
                                                      $seatlist = str_replace(',', '/', $seatlist);
                                                      $seatlist = preg_replace('/\s+/', '', $seatlist);
                                                     //echo $seatlist;  exit;
                                                 ?>

                                                    <a aria-describedby="qtip-7" data-hasqtip="true" title="confirm booking" 
                                                       onclick="if (confirm( &quot; Are you sure to confirm booking this seat? &quot; )) { return true; } return false;"

                                                       href="<?php
                                                       echo Router::url(array('controller' => 'users', 'action' => 'confirm_booking', $seatlist)
                                                       )
                                                       ?>" class="tip"><span class="icon12 icomoon-icon-checkmark"></span></a>
                                                  

                                              
                                                    <a aria-describedby="qtip-8" data-hasqtip="true" title="cancel booking" placeholder="Block" oldtitle="" 
                                                       onclick="if (confirm( &quot; Are you sure to cancel this booking ? &quot; )) { return true; } return false;"

                                                       href="<?php
                                                       echo Router::url(array('controller' => 'users', 'action' => 'cancel_booking', $seatlist)
                                                       )
                                                       ?>"
                                                       class="tip"><span class="icon12 iconic-icon-move-horizontal-alt2"></span></a>
                                                   
                                            </div>
                                        </td>
                                    </tr>

                                    <?php
                                }
                                 $last_v = $single['customers']['email'];
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