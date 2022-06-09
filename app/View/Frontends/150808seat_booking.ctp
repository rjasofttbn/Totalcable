<?php

function status($db, $seatNo) {
    if (array_key_exists($seatNo, $db)) {
        return $db[$seatNo];
    } else {
        return 'notAvaiable';
    }
}
?>
<style>
    .page-header-fixed .header {

    z-index: 9 !important;
}
    </style>

<div class="main">
    <div class="container">
        <div class="content-page">
            <div class="row page-seat">
                <!-- BEGIN SERVICE BLOCKS -->               
                <div class="col-md-12">

                    <div class="dashboard-stat2">
                        <div class="display">
                            <div class="number">
                                <h3 class="font-blue-sharp">Please reserve and confirm your seat as soon as possible</h3>
                                <small>(Online booking will close 1 hr prior to engagement).</small>
                                <?php echo $this->Session->flash(); ?>
                            </div>
                           
                        </div>
                        
                    </div>

                </div>
                <div class="col-md-12">
                    <div class="col-md-6 col-sm-12">
                            <div class="portlet green box">
                                    <div class="portlet-title">
                                            <div class="caption">
                                                  All Green color seats are Available
                                            </div>
                                           
                                    </div>
                                  
                            </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                            <div class="portlet gray box">
                                    <div class="portlet-title">
                                            <div class="caption">
                                                  All Gray color seats are Booked
                                            </div>
                                           
                                    </div>
                                  
                            </div>
                    </div>
                    
                    

                    <div id="showprview" class="localcss" align="center" style="width: 100%; margin-left: auto; margin-right: auto; position: relative;">



                        <div class="row">
                            <div class="col-md-3 col-sm-3 col-xs-6 text-stat">

                            </div>
                            
                            <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
                               

                            </div>
                          

                        </div>


                        


                        <!-- section 1 -->
                        <div class="seperate st-sec">


                            <div class="seatplan_row">
                                <div class="l" style="list-style:none;">

                                    <div class="quater">
                                        <?php
                                        $level = array('UU', 'TT', 'SS', 'RR', 'QQ', 'PP', 'OO', 'NN', 'MM', 'LL');
                                        $reverse = array_reverse($even, true); // true to preserve keys
                                        $seatNo = 1;
                                        for ($row = 0; $row < 5; $row++):
                                            ?>
                                            <div class="quater-half">

                                                <?php
                                                foreach ($reverse as $seat):
                                                    ?>
                                                    <div class="<?php echo status($status, $seatNo); ?> showseats" name="<?php echo $level[$row] . $seat; ?>" id="<?php echo $seatNo++; ?>" title="This seat is <?php echo status($status, $seatNo); ?>"><?php echo $seat; ?>
                                                    </div>

                                                    <?php
                                                endforeach;
                                                ?>
                                            </div>
                                            <?php
                                        endfor;
                                        ?>
                                    </div>


                                    <div class="quater">
                                        <div class="quater-half">

                                            <div class=" seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php ?>UU
                                            </div>
                                        </div>
                                        <div class="quater-half">

                                            <div class=" seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php ?>TT
                                            </div>
                                        </div>
                                        <div class="quater-half">

                                            <div class="seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php ?>SS
                                            </div>
                                        </div>
                                        <div class="quater-half">

                                            <div class=" seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php ?>RR
                                            </div>
                                        </div>
                                        <div class="quater-half">

                                            <div class=" seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php ?>QQ
                                            </div>
                                        </div>
                                    </div>




                                    <div class="quater">
                                        <div class="quater-half">
                                            <div name="UU101" class="<?php echo status($status, $seatNo); ?> showseats" id="<?php
                                            echo $seatNo++;
                                            ?>" title="This seat is <?php echo status($status, $seatNo); ?>">101
                                            </div>

                                            <div name="UU102" class="<?php echo status($status, $seatNo); ?> showseats" id="<?php
                                            echo $seatNo++;
                                            ?>" title="This seat is <?php echo status($status, $seatNo); ?>">102
                                            </div>
                                            <div class="showseats noborder" > </div>
                                            <div name="UU116" class="<?php echo status($status, $seatNo); ?> showseats" id="<?php
                                            echo $seatNo++;
                                            ?>" title="This seat is <?php echo status($status, $seatNo); ?>">116
                                            </div>
                                        </div>
                                        <div class="quater-half">
                                            <div name="TT101"class="<?php echo status($status, $seatNo); ?> showseats" id="<?php
                                            echo $seatNo++;
                                            ?>" title="This seat is <?php echo status($status, $seatNo); ?>">101
                                            </div>
                                            <div class="showseats noborder"></div>
                                            <div name="TT115" class="<?php echo status($status, $seatNo); ?> showseats" id="<?php
                                            echo $seatNo++;
                                            ?>" title="This seat is <?php echo status($status, $seatNo); ?>">115
                                            </div>
                                            <div name="TT116" class="<?php echo status($status, $seatNo); ?> showseats" id="<?php
                                            echo $seatNo++;
                                            ?>" title="This seat is <?php echo status($status, $seatNo); ?>">116
                                            </div>


                                        </div>
                                        <?php
                                        for ($row = 0; $row < 3; $row++):
                                            ?>
                                            <div class="quater-half">

                                                <?php
                                                foreach ($seats101 as $seat):
                                                    ?>
                                                    <div name="<?php echo $level[$row + 2] . $seat; ?>" class="<?php echo status($status, $seatNo); ?> showseats showseats101 "  id="<?php echo $seatNo++; ?>" title="This seat is <?php echo status($status, $seatNo); ?>"><?php echo $seat; ?>
                                                    </div>
                                                    <?php
                                                endforeach;
                                                ?>
                                            </div>
                                            <?php
                                        endfor;
                                        ?>
                                    </div>



                                    <div class="r" style="list-style:none;">

                                        <div class="quater">
                                            <div class="quater-half">

                                                <div class="  seattext" title="This seat is <?php echo status($status, $seatNo); ?>">UU
                                                </div>
                                            </div>
                                            <div class="quater-half">

                                                <div class="  seattext" title="This seat is <?php echo status($status, $seatNo); ?>">TT
                                                </div>
                                            </div>
                                            <div class="quater-half">

                                                <div class="  seattext" title="This seat is <?php echo status($status, $seatNo); ?>">SS
                                                </div>
                                            </div>
                                            <div class="quater-half">

                                                <div class=" seattext" title="This seat is <?php echo status($status, $seatNo); ?>">RR
                                                </div>
                                            </div>
                                            <div class="quater-half">

                                                <div class="  seattext" title="This seat is <?php echo status($status, $seatNo); ?>">QQ
                                                </div>
                                            </div>
                                        </div>


                                        <div class="quater">
                                            <?php
                                            for ($row = 0; $row < 5; $row++):
                                                ?>
                                                <div class="quater-half">
                                                    <?php
                                                    foreach ($odd as $seat):
                                                        ?>
                                                        <div name="<?php echo $level[$row] . $seat; ?>"  class="<?php echo status($status, $seatNo); ?> showseats" id="<?php echo $seatNo++; ?>" title="This seat is <?php echo status($status, $seatNo); ?>"><?php echo $seat; ?>
                                                        </div>

                                                        <?php
                                                    endforeach;
                                                    ?>
                                                </div>
                                                <?php
                                            endfor;
                                            ?>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="seatplan_row">
                                <div class="l" style="list-style:none;float: left;">
                                    <!-- <li class="ltr">A</li> -->
                                    <div class="quater">
                                        <?php
                                        for ($row = 0; $row < 4; $row++):
                                            if ($row == 2 || $row == 3) {
                                                ?>
                                                <div class="quater-half">


                                                    <?php
                                                    $reverse = array_reverse($even16, true); // true to preserve keys

                                                    foreach ($reverse as $seat):
                                                        //foreach (range(0, 12) as $seat) :
                                                        ?>
                                                        <div class="<?php echo status($status, $seatNo); ?>  showseats row_color "  name="<?php echo $level[$row + 5] . $seat; ?>"  id="<?php echo $seatNo++; ?>" title="This seat is <?php echo status($status, $seatNo); ?>"><?php echo $seat; ?>
                                                        </div>

                                                        <?php
                                                    endforeach;
                                                    ?>
                                                </div>

                                            <?php }else { ?>
                                                <div class="quater-half">


                                                    <?php
                                                    $reverse = array_reverse($even16, true); // true to preserve keys

                                                    foreach ($reverse as $seat):
                                                        //foreach (range(0, 12) as $seat) :
                                                        ?>
                                                        <div class="<?php echo status($status, $seatNo); ?> showseats" name="<?php echo $level[$row + 5] . $seat; ?>" id="<?php echo $seatNo++; ?>" title="This seat is <?php echo status($status, $seatNo); ?>"><?php echo $seat; ?>
                                                        </div>

                                                        <?php
                                                    endforeach;
                                                    ?>
                                                </div>

                                            <?php } ?>

                                            <?php
                                        endfor
                                        ?>

                                    </div>



                                    <div class="quater">
                                        <div class="quater-half">
                                            <div class="<?php echo status($status, $seatNo); ?> noborder-left" title="This seat is <?php echo status($status, $seatNo); ?>">
                                                <div class="dashboard-stat2 drow-border">
                                                    <div class="display number_color">
                                                        <div class="number">
                                                            <h3  id="<?php echo $seatNo++; ?>">92</h3>

                                                        </div>

                                                    </div>

                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="quater">
                                        <div class="quater-half">

                                            <div class="seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php ?>PP
                                            </div>
                                        </div>
                                        <div class="quater-half">

                                            <div class=" seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php ?>OO
                                            </div>
                                        </div>
                                        <div class="quater-half">

                                            <div class=" seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php ?>NN
                                            </div>
                                        </div>
                                        <div class="quater-half">

                                            <div class=" seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php ?>MM
                                            </div>
                                        </div>
                                        <div class="quater-half">

                                            <div class=" seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php ?>LL
                                            </div>
                                        </div>
                                    </div>
                                    <div class="quater">
                                        <?php
                                        for ($row = 0; $row < 5; $row++):
                                            if ($row == 4) {
                                                ?>
                                                <div class="quater-half">

                                                    <div class="text-sec">
                                                        <div class="text-secpart">

                                                            <?php
                                                            foreach ($seats101 as $seat):
                                                                ?>
                                                                <div class="<?php echo status($status, $seatNo); ?> showseats showseats101  row_color" name="<?php echo $level[$row + 5] . $seat; ?>" id="<?php echo $seatNo++; ?>" title="This seat is <?php echo status($status, $seatNo); ?>"><?php echo $seat; ?>
                                                                </div>
                                                                <?php
                                                            endforeach;
                                                            ?>

                                                        </div>


                                                    </div>
                                                </div>
                                            <?php }else { ?>
                                                <div class="quater-half">

                                                    <div class="text-sec">
                                                        <div class="text-secpart">



                                                            <?php
                                                            foreach ($seats101 as $seat):
                                                                ?>
                                                                <div class="<?php echo status($status, $seatNo); ?> showseats showseats101  "  name="<?php echo $level[$row + 5] . $seat; ?>" id="<?php echo $seatNo++; ?>" title="This seat is <?php echo status($status, $seatNo); ?>"><?php echo $seat; ?>
                                                                </div>
                                                                <?php
                                                            endforeach;
                                                            ?>

                                                        </div>


                                                    </div>
                                                </div>
                                            <?php } ?>

                                            <?php
                                        endfor
                                        ?>
                                    </div>
                                </div>



                                <div class="r" style="list-style:none;">
                                    <div class="quater">
                                        <div class="quater-half">

                                            <div class="seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php ?>PP
                                            </div>
                                        </div>
                                        <div class="quater-half">

                                            <div class="seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php ?>OO
                                            </div>
                                        </div>
                                        <div class="quater-half">

                                            <div class=" seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php ?>NN
                                            </div>
                                        </div>
                                        <div class="quater-half">

                                            <div class=" seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php ?>MM
                                            </div>
                                        </div>
                                        <div class="quater-half">

                                            <div class=" seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php ?>LL
                                            </div>
                                        </div>
                                    </div>
                                    <div class="quater">
                                        <div class="quater-half">
                                            <div class="<?php echo status($status, $seatNo); ?> noborder-left" title="This seat is <?php echo status($status, $seatNo); ?>">
                                                <div class="dashboard-stat2 drow-border">
                                                    <div class="display number_color">
                                                        <div class="number">
                                                            <h3  id="<?php echo $seatNo++; ?>" >92</h3>

                                                        </div>

                                                    </div>

                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="quater">
                                        <?php
                                        for ($row = 0; $row < 4; $row++):
                                            if ($row == 2 || $row == 3) {
                                                ?>
                                                <div class="quater-half">
                                                    <?php
                                                    foreach ($odd16 as $seat):
                                                        //foreach (range(0, 12) as $seat) :
                                                        ?>
                                                        <div class="<?php echo status($status, $seatNo); ?> showseats row_color"  name="<?php echo $level[$row + 5] . $seat; ?>" id="<?php echo $seatNo++; ?>" title="This seat is <?php echo status($status, $seatNo); ?>"><?php echo $seat; ?>
                                                        </div>
                                                        <?php
                                                        $seatNo++;
                                                    endforeach;
                                                    ?>
                                                </div>
                                            <?php } else { ?>
                                                <div class="quater-half">
                                                    <?php
                                                    foreach ($odd16 as $seat):
                                                        //foreach (range(0, 12) as $seat) :
                                                        ?>
                                                        <div class="<?php echo status($status, $seatNo); ?> showseats " name="<?php echo $level[$row + 5] . $seat; ?>" id="<?php echo $seatNo++; ?>" title="This seat is <?php echo status($status, $seatNo); ?>"><?php echo $seat; ?>
                                                        </div>
                                                        <?php
                                                        $seatNo++;
                                                    endforeach;
                                                    ?>
                                                </div>
                                            <?php } ?>

                                            <?php
                                        endfor
                                        ?>


                                    </div>
                                </div>




                            </div>
                        </div>

                        <!-- section 1 end -->






                        <!--section 2-->

                        <div class="col-md-12">
                            <div class="col-md-6">

                                <label style="float: left; margin-left:  197px; border:  black solid 2px; font-weight: bold; background-color: white; color: red; width: 131px;">EXIT</label>
                            </div>

                            <div class="col-md-6">
                                <label style="float: left; margin-left:  247px; border:  black solid 2px; font-weight: bold; background-color: white; color: red; width: 131px;">EXIT</label>
                            </div>

                        </div>
                        <div class="seperate">

                            <div class="seatplan_row" >
                                <div class="l" style="list-style:none;">
                                    <div class="quater">

                                        <?php
                                        $levels = array('LL', 'KK', 'JJ', 'HH', 'GG');

                                        $reverse = array_reverse($even15, true); // true to preserve keys

                                        for ($row = 0; $row < 5; $row++):
                                            ?>
                                            <div class="quater-half">

                                                <?php
                                                foreach ($reverse as $seat):
                                                    ?>
                                                    <div class="<?php echo status($status, $seatNo); ?> showseats"   name="<?php echo $levels[$row] . $seat; ?>"  id="<?php echo $seatNo++; ?>" title="This seat is <?php echo status($status, $seatNo); ?>"><?php echo $seat; ?>
                                                    </div>

                                                <?php endforeach; ?>
                                            </div>

                                            <?php
                                        endfor;
                                        ?>

                                    </div> 
                                    <div class="hgap quater"></div>

                                    <div class="quater">

                                        <?php
                                        $reverse = array_reverse($even9, true); // true to preserve keys
                                        for ($row = 0; $row < 4; $row++):
                                            ?>

                                            <div class="quater-half">
                                                <?php
                                                if ($row < 3):
                                                    foreach ($reverse as $seat):
                                                        //foreach (range(0, 12) as $seat) :
                                                        ?>
                                                        <div class="<?php echo status($status, $seatNo); ?> showseats"  name="<?php echo $levels[$row] . $seat; ?>"  id="<?php echo $seatNo++; ?>" title="This seat is <?php echo status($status, $seatNo); ?>"><?php echo $seat; ?>
                                                        </div>

                                                        <?php
                                                    endforeach;
                                                endif;
                                                ?>
                                                <div class=" seattext l<?php echo $row; ?>" ><?php echo $levels[$row]; ?></div>
                                            </div>

                                            <?php
                                        endfor;
                                        ?>

                                        <div class="<?php echo status($status, $seatNo); ?> showseats" name="<?php echo $levels[$row] . $seat; ?>" id="<?php echo $seatNo++; ?>" >18
                                        </div>


                                        <div class=" seattext seattextL" >GG</div>
                                    </div>  
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="quater" style="margin-left: 80px;">
                                    <div class="quater-half">
                                        <div class=" noborder-left" title="This seat is ">
                                            <div class="dashboard-stat2 drow-border">
                                                <div class="display number_color"style=" margin-left:  55px">
                                                    <div class="number number_color">
                                                        <h3 id="861">118</h3>

                                                    </div>

                                                </div>

                                            </div>
                                            <div class="dashboard-stat2 inside-txt " style="margin-top: 20px; margin-left: 93px;">
                                                <div class="display">
                                                    <div class="number">
                                                        <h4 class="font-black-sharp">BALCONY-338</h4>

                                                    </div>

                                                </div>

                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="r">

                                <div class="quater">

                                    <?php
                                    for ($row = 0; $row < 4; $row++):
                                        ?>

                                        <div class="quater-half">
                                            <div class=" seattext r<?php echo $row; ?>"><?php echo $levels[$row]; ?></div>
                                            <?php
                                            if ($row < 3):
                                                foreach ($odd9 as $seat):
                                                    //foreach (range(0, 12) as $seat) :
                                                    ?>
                                                    <div class="<?php echo status($status, $seatNo); ?> showseats"  name="<?php echo $levels[$row] . $seat; ?>" id="<?php echo $seatNo++; ?>" title="This seat is <?php echo status($status, $seatNo); ?>"><?php echo $seat; ?>
                                                    </div>

                                                    <?php
                                                endforeach;
                                            endif;
                                            ?>
                                        </div>
                                        <?php
                                    endfor;
                                    ?>
                                    <br/>
                                    <div class="seattext seattextR" title="This seat is <?php echo status($status, $seatNo); ?>">GG</div>
                                    <div class="<?php echo status($status, $seatNo); ?> showseats rightone"  name="<?php echo $levels[$row] . $seat; ?>" id="<?php echo $seatNo++; ?>" title="This seat is <?php echo status($status, $seatNo); ?>">18
                                    </div>



                                </div>  
                                <div class="hgap quater"></div>
                                <div class="quater">

                                    <?php
                                    for ($row = 0; $row < 5; $row++):
                                        ?>
                                        <div class="quater-half">

                                            <?php
                                            foreach ($odd15 as $seat):
                                                //foreach (range(0, 12) as $seat) :
                                                ?>
                                                <div class="<?php echo status($status, $seatNo); ?> showseats"  name="<?php echo $levels[$row] . $seat; ?>" id="<?php echo $seatNo++; ?>" title="This seat is <?php echo status($status, $seatNo); ?>"><?php echo $seat; ?>
                                                </div>

                                            <?php endforeach; ?>
                                        </div>
                                        <?php
                                    endfor;
                                    ?>


                                </div>

                            </div>
                        </div>

                        <!--end  section 2--> 







                        <!-- Section 3 -->

                        <div class="col-md-12">
                            <div class="col-md-6">

                                <label style="float: left; margin-left:  197px; border:  black solid 2px; font-weight: bold; background-color: white; color: red; width: 131px;">EXIT</label>
                            </div>

                            <div class="col-md-6">
                                <label style="float: left; margin-left:  247px; border:  black solid 2px; font-weight: bold; background-color: white; color: red; width: 131px;">EXIT</label>
                            </div>

                        </div>

                        <div class="seperate">



                            <div class="seatplan_row">
                                <div class="l" style="list-style:none;">
                                    <div class="quater">
                                        <?php
                                        $levels_mid = array('Z', 'V', 'X', 'W', 'V', 'U', 'T', 'S', 'R', 'Q', 'P', 'O');
                                        for ($row = 0; $row < 12; $row++):
                                            ?>
                                            <div class="quater-half">

                                                <?php
                                                $reverse = array_reverse($even20, true);
                                                foreach ($reverse as $seat):
                                                    ?>
                                                    <div class="<?php echo status($status, $seatNo); ?> showseats" name="<?php echo $levels_mid[$row] . $seat; ?>" id="<?php echo $seatNo++; ?>" title="This seat is <?php echo status($status, $seatNo); ?>"><?php echo $seat; ?>
                                                    </div>

                                                <?php endforeach; ?>
                                            </div>

                                            <?php
                                        endfor;
                                        ?>


                                    </div>
                                    <div class="quater sep-txt">
                                        <div class="quater-half">
                                            <div class=" seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;       ?>Z
                                            </div>
                                        </div>
                                        <div class="quater-half">
                                            <div class=" seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;        ?>V
                                            </div>
                                        </div>
                                        <div class="quater-half">
                                            <div class=" seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;        ?>X
                                            </div>
                                        </div>
                                        <div class="quater-half">
                                            <div class=" seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;        ?>W
                                            </div>
                                        </div>
                                        <div class="quater-half">
                                            <div class=" seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;       ?>V
                                            </div>
                                        </div>
                                        <div class="quater-half">
                                            <div class=" seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;       ?>U
                                            </div>
                                        </div>
                                        <div class="quater-half">
                                            <div class=" seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;       ?>T
                                            </div>
                                        </div>
                                        <div class="quater-half">
                                            <div class=" seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;        ?>S
                                            </div>
                                        </div>
                                        <div class="quater-half">
                                            <div class=" seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;        ?>R
                                            </div>
                                        </div>
                                        <div class="quater-half">
                                            <div class=" seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;        ?>Q
                                            </div>
                                        </div>
                                        <div class="quater-half">
                                            <div class=" seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;       ?>P
                                            </div>
                                        </div>
                                        <div class="quater-half">
                                            <div class=" seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;        ?>O
                                            </div>
                                        </div>


                                    </div>
                                    <div class="quater">
                                        <?php
                                        for ($row = 0; $row < 12; $row++):
                                            if ($row == 0) {
                                            ?>
                                                
                                                <div class="quater-half" value="<?php echo $row; ?>">
                                                    <!-- <li class="ltr">A</li> -->
                                                        <?php
                                                        

                                                        foreach ($seats118 as $seat):
                                                            if ($seat == 108) {
                                                            //foreach (range(0, 12) as $seat) :
                                                            ?>
                                                        

                                                        <div class="<?php echo status($status, $seatNo); ?> showseats"  name="<?php echo $levels_mid[$row] . $seat; ?>" id="<?php echo $seatNo++; ?>" style="border: 2px solid black;width: 74px;font-size: 10px;" title="This seat is <?php echo status($status, $seatNo); ?>">
                                                             1 WC SPACE
                                                        </div>










                                                            <?php 
                                                        } 
                                                         elseif ($seat == 109) {
                                                            //foreach (range(0, 12) as $seat) :
                                                            ?>
                                                        <div class="booked "style="border: none;width: 0px;float: left;" title="Seat A1 Booked">
                                                           
                                                        </div>










                                                            <?php 
                                                        } 
                                                         elseif ($seat == 110) {
                                                            //foreach (range(0, 12) as $seat) :
                                                            ?>
                                                        <div class="booked "style="border: none;width: 0px;float: left;" title="Seat A1 Booked">
                                                          
                                                        </div>










                                                            <?php 
                                                        } 
                                                         elseif ($seat == 111) {
                                                            //foreach (range(0, 12) as $seat) :
                                                            ?>
                                                        <div class="booked "style="border: none;width: 0px;float: left;" title="Seat A1 Booked">
                                                            
                                                        </div>










                                                            <?php 
                                                        } 

                                                        else {
                                                            ?>
                                                            <div class="<?php echo status($status, $seatNo); ?> showseats" name="<?php echo $levels_mid[$row] . $seat; ?>" id="<?php echo $seatNo++; ?>" title="This seat is <?php echo status($status, $seatNo); ?>"><?php echo $seat; ?>
                                                            </div>
                                                        
                                                            <?php 
                                                        }

                                                            endforeach; ?>
                                                </div>
                                                <?php

                                            } 
                                            elseif ($row == 11) {
                                                ?>
                                                
                                                <div class="quater-half" value="<?php echo $row; ?>">
                                                    <!-- <li class="ltr">A</li> -->
                                                        <?php
                                                        

                                                        foreach ($seats118 as $seat):
                                                            if ($seat == 108) {
                                                            //foreach (range(0, 12) as $seat) :
                                                            ?>
                                                      
                                                        <div class="<?php echo status($status, $seatNo); ?> showseats" name="<?php echo $levels_mid[$row] . $seat; ?>" id="<?php echo $seatNo++; ?>" style="border: 2px solid black;width: 146px;font-size: 12px;" title="This seat is <?php echo status($status, $seatNo); ?>">
                                                            Audio Bay
                                                        </div>










                                                            <?php 
                                                        } 
                                                        elseif ($seat == 107) {
                                                            //foreach (range(0, 12) as $seat) :
                                                            ?>
                                                        <div class="booked "style="border: none;width: 0px;float: left;" title="Seat A1 Booked">
                                                           
                                                        </div>










                                                            <?php 
                                                        } 
                                                         elseif ($seat == 109) {
                                                            //foreach (range(0, 12) as $seat) :
                                                            ?>
                                                        <div class="booked "style="border: none;width: 0px;float: left;" title="Seat A1 Booked">
                                                           
                                                        </div>










                                                            <?php 
                                                        } 
                                                         elseif ($seat == 110) {
                                                            //foreach (range(0, 12) as $seat) :
                                                            ?>
                                                        <div class="booked "style="border: none;width: 0px;float: left;" title="Seat A1 Booked">
                                                          
                                                        </div>










                                                            <?php 
                                                        } 
                                                         elseif ($seat == 111) {
                                                            //foreach (range(0, 12) as $seat) :
                                                            ?>
                                                        <div class="booked "style="border: none;width: 0px;float: left;" title="Seat A1 Booked">
                                                            
                                                        </div>










                                                            <?php 
                                                        } 
                                                         elseif ($seat == 112) {
                                                            //foreach (range(0, 12) as $seat) :
                                                            ?>
                                                        <div class="booked "style="border: none;width: 0px;float: left;" title="Seat A1 Booked">
                                                            
                                                        </div>










                                                            <?php 
                                                        }

                                                        else {
                                                            ?>
                                                            
                                                            <div class="<?php echo status($status, $seatNo); ?> showseats" name="<?php echo $levels_mid[$row] . $seat; ?>" id="<?php echo $seatNo++; ?>" title="This seat is <?php echo status($status, $seatNo); ?>"><?php echo $seat; ?>
                                                            </div>
                                                            <?php 
                                                        }

                                                            endforeach; ?>
                                                </div>
                                                <?php

                                            } 
                                            else {
                                            ?>
                                            <div class="quater-half">
                                                <?php
                                                foreach ($seats118 as $seat):
                                                    ?>
                                                    <div class="<?php echo status($status, $seatNo); ?> showseats showseats101" name="<?php echo $levels_mid[$row] . $seat; ?>" id="<?php echo $seatNo++; ?>" title="This seat is <?php echo status($status, $seatNo); ?>"><?php echo $seat; ?>
                                                    </div>
                                                <?php endforeach; ?>
                                            </div>
                                            <?php
                                        }
                                        endfor;
                                        ?>

                                    </div>
                                    <div class="quater sep-txt">
                                        <div class="quater-half">
                                            <div class="  seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;      ?>Z
                                            </div>
                                        </div>
                                        <div class="quater-half">
                                            <div class="  seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;       ?>V
                                            </div>
                                        </div>
                                        <div class="quater-half">
                                            <div class="  seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;      ?>X
                                            </div>
                                        </div>
                                        <div class="quater-half">
                                            <div class=" seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;       ?>W
                                            </div>
                                        </div>
                                        <div class="quater-half">
                                            <div class="  seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;        ?>V
                                            </div>
                                        </div>
                                        <div class="quater-half">
                                            <div class="  seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;       ?>U
                                            </div>
                                        </div>
                                        <div class="quater-half">
                                            <div class="  seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;        ?>T
                                            </div>
                                        </div>
                                        <div class="quater-half">
                                            <div class=" seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;        ?>S
                                            </div>
                                        </div>
                                        <div class="quater-half">
                                            <div class=" seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;       ?>R
                                            </div>
                                        </div>
                                        <div class="quater-half">
                                            <div class="  seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;        ?>Q
                                            </div>
                                        </div>
                                        <div class="quater-half">
                                            <div class=" seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;       ?>P
                                            </div>
                                        </div>
                                        <div class="quater-half">
                                            <div class="  seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;       ?>O
                                            </div>
                                        </div>


                                    </div>

                                    <div class="r" style="list-style:none;">
                                        <div class="quater">
                                            
                                            
                                            
                                            <?php
                                            for ($row = 0; $row < 12; $row++):
                                                if ($row == 0) {
                                                ?>
                                                    <div class="<?php echo status($status, $seatNo); ?> showseats" name="<?php echo $levels_mid[$row]; ?>1" id="1" style="border: 2px solid black;width: 61px;height: 46px;font-size: 10px;position: absolute;right: 192px;/* z-index: 1; */"title="This seat is <?php echo status($status, $seatNo); ?>">
                                                        1 WC SPACE
                                                    </div>
                                                    
                                                    <div class="quater-half" value="<?php echo $row; ?>" style="padding-left: 38px;">
                                                        <!-- <li class="ltr">A</li> -->
                                                            <?php
                                                          

                                                            foreach ($odd20 as $seat):
                                                                  if ($seat == 1) {
                                                                //foreach (range(0, 12) as $seat) :
                                                                ?>
                                                            <div class="booked showseats"style="border: none;width: 12%;" title="Seat A1 Booked"><?php //echo $seat; ?>
                                                            </div>










                                                                <?php 
                                                            }
                                                                elseif ($seat == 3 || $seat == 5) {
                                                                //foreach (range(0, 12) as $seat) :
                                                                ?>
                                                            <div class="booked showseats"style="border: none;width: 6%;" title="Seat A1 Booked"><?php //echo $seat; ?>
                                                            </div>










                                                                <?php 
                                                            } else {
                                                                ?>
                                                                <div class="<?php echo status($status, $seatNo); ?> showseats showseats101" name="<?php echo $levels_mid[$row] . $seat; ?>" id="<?php echo $seatNo++; ?>" title="This seat is <?php echo status($status, $seatNo); ?>"><?php echo $seat; ?>
                                                                </div>
                                                                <?php 
                                                            }

                                                                endforeach; ?>
                                                    </div>
                                                    <?php

                                                }
                                             elseif ($row == 1) {
                                                ?>
                                                
                                                <div class="quater-half" value="<?php echo $row; ?>" style="padding-left: 38px;">
                                                    <!-- <li class="ltr">A</li> -->
                                                        <?php
                                                      

                                                        foreach ($odd20 as $seat):
                                                            if ($seat == 1) {
                                                            //foreach (range(0, 12) as $seat) :
                                                            ?>
                                                        <div class="booked showseats"style="border: none;width: 12%;" title="Seat A1 Booked"><?php //echo $seat; ?>
                                                        </div>










                                                            <?php 
                                                        }
                                                            elseif ($seat == 3 || $seat == 5) {
                                                            //foreach (range(0, 12) as $seat) :
                                                            ?>
                                                        <div class="booked showseats"style="border: none;width: 6%;" title="Seat A1 Booked"><?php //echo $seat; ?>
                                                        </div>










                                                            <?php 
                                                        } else {
                                                            ?>
                                                            <div class="<?php echo status($status, $seatNo); ?> showseats showseats101" name="<?php echo $levels_mid[$row] . $seat; ?>" id="<?php echo $seatNo++; ?>" title="This seat is <?php echo status($status, $seatNo); ?>"><?php echo $seat; ?>
                                                            </div>
                                                            <?php 
                                                        }

                                                            endforeach; ?>
                                                </div>
                                                <?php

                                            }
                                            else {


                                                ?>
                                                <div class="quater-half">



                                                    <?php
                                                    // $reverse = array_reverse($odd, true); // true to preserve keys

                                                    foreach ($odd20 as $seat):
                                                        //foreach (range(0, 12) as $seat) :
                                                        ?>
                                                        <div class="<?php echo status($status, $seatNo); ?> showseats" name="<?php echo $levels_mid[$row] . $seat; ?>" id="<?php echo $seatNo++; ?>" title="This seat is <?php echo status($status, $seatNo); ?>"><?php echo $seat; ?>
                                                        </div>

                                                    <?php endforeach; ?>
                                                </div>
                                                <?php
                                            }
                                            endfor;
                                            ?>

                                        </div>
                                    </div>

                                </div>
                            </div>



                        </div>
                        <div class="col-md-12">
                            <div class="col-md-3">
                                <label style="float: left; margin-left: 0px; border:  black solid 2px; font-weight: bold; background-color: white; color: red; width: 64px;-webkit-transform: rotate(90deg);      -moz-transform: rotate(90deg);      -o-transform: rotate(90deg);      -ms-transform: rotate(90deg);      transform: rotate(-90deg);position: absolute;left: -36px;top: 17px;">EXIT</label>
                            </div>
                            <div class="col-md-9">
                                <label style=" float: right;    border: black solid 2px;      font-weight: bold;      background-color: white;      color: red;         width: 64px;      -webkit-transform: rotate(90deg);      -moz-transform: rotate(90deg);      -o-transform: rotate(90deg);      -ms-transform: rotate(90deg);      transform: rotate(90deg);      position: absolute;      right: -32px;      top: 17px;">EXIT</label>
                            </div>
                        </div>

                        <div class="way">

                            <div class="col-md-3">

                                <div class="quater">
                                    <div class="quater-half">
                                        <div class="<?php echo status($status, $seatNo); ?> noborder-left" title="This seat is <?php echo status($status, $seatNo); ?>">
                                            <div class="dashboard-stat2 drow-border">
                                                <div class="display number_color" style="margin-left: 84px;">
                                                    <div class="number">
                                                        <h3  id="<?php echo $seatNo++; ?>">120</h3>

                                                    </div>

                                                </div>

                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="quater">
                                    <div class="quater-half">
                                        <div class="<?php echo status($status, $seatNo); ?> noborder-left" title="This seat is <?php echo status($status, $seatNo); ?>">
                                            <div class="dashboard-stat2 drow-border">
                                                <div class="display number_color" style="margin-left: 84px;">
                                                    <div class="number number_color">
                                                        <h3  id="<?php echo $seatNo++; ?>">206</h3>

                                                    </div>

                                                </div>

                                            </div>
                                            <div class="dashboard-stat2 inside-txt">
                                                <div class="display">
                                                    <div class="number" style="margin-left: 54px;">
                                                        <h5 class="font-black-sharp">MAZZANINE-440</h5>

                                                    </div>

                                                </div>

                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="quater">
                                    <div class="quater-half">
                                        <div class="<?php echo status($status, $seatNo); ?> noborder-left" title="This seat is <?php echo status($status, $seatNo); ?>">
                                            <div class="dashboard-stat2 drow-border">
                                                <div class="display number_color" style=" margin-left: 64px;">
                                                    <div class="number">
                                                        <h3 id="<?php echo $seatNo++; ?>">114</h3>

                                                    </div>

                                                </div>

                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--end  section 3--> 



                        <!-- Section 4 -->

                        <div class="seperate">



                            <div class="seatplan_row">
                                <div class="l" style="list-style:none;">
                                    <div class="quater">
                                        <?php
                                        $levels_bottom = array('N', 'M', 'L', 'K', 'J', 'J', 'G', 'F', 'E', 'D', 'C', 'B', 'A', 'EE', 'DD', 'CC');
                                        for ($row = 0; $row < 16; $row++):

                                              if ($row == 0) {
                                                ?>
                                                
                                                <div class="quater-half" value="<?php echo $row; ?>">
                                                    <!-- <li class="ltr">A</li> -->
                                                        <?php
                                                        $reverse = array_reverse($even20, true); // true to preserve keys

                                                        foreach ($reverse as $seat):
                                                            if ($seat == 20 || $seat == 18 || $seat == 16) {
                                                            //foreach (range(0, 12) as $seat) :
                                                            ?>
                                                        <div class="booked showseats"style="border: none;width: 11%;" title="Seat A1 Booked"><?php //echo $seat; ?>
                                                        </div>










                                                            <?php 
                                                        } else {
                                                            ?>
                                                            

                                                            <div class="<?php echo status($status, $seatNo); ?> showseats" name="<?php echo $levels_bottom[$row] . $seat; ?>" id="<?php echo $seatNo++; ?>" title="This seat is <?php echo status($status, $seatNo); ?>"><?php echo $seat; ?>
                                                            </div>
                                                            <?php 
                                                        }

                                                            endforeach; ?>
                                                </div>
                                                <?php

                                            }






                                            elseif ($row == 12) {
                                                ?>

                                                <div class="quater-half" value="<?php echo $row; ?>">
                                                    <!-- <li class="ltr">A</li> -->
                                                    <?php
                                                    $reverse = array_reverse($even20, true); // true to preserve keys

                                                    foreach ($reverse as $seat):
                                                        if ($seat == 20) {
                                                            //foreach (range(0, 12) as $seat) :
                                                            ?>
                                                            <div class="<?php echo status($status, $seatNo); ?> showseats"   name="<?php echo $levels_bottom[$row] . $seat; ?>" style="border: none;width: 11%;" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;      ?>
                                                            </div>










                                                            <?php
                                                        } else {
                                                            ?>
                                                            <div class="<?php echo status($status, $seatNo); ?> showseats"  name="<?php echo $levels_bottom[$row] . $seat; ?>"  id="<?php echo $seatNo++; ?>" title="This seat is <?php echo status($status, $seatNo); ?>"><?php echo $seat; ?>
                                                            </div>
                                                            <?php
                                                        }

                                                    endforeach;
                                                    ?>
                                                </div>
                                                <?php
                                            } elseif ($row == 13) {
                                                ?>

                                                <div class="quater-half" value="<?php echo $row; ?>">
                                                    <!-- <li class="ltr">A</li> -->
                                                    <?php
                                                    $reverse = array_reverse($even20, true); // true to preserve keys

                                                    foreach ($reverse as $seat):
                                                        if ($seat == 20 || $seat == 18) {
                                                            //foreach (range(0, 12) as $seat) :
                                                            ?>
                                                            <div class="<?php echo status($status, $seatNo); ?> showseats"  name="<?php echo $levels_bottom[$row] . $seat; ?>" style="border: none;width: 11%;" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;      ?>
                                                            </div>










                                                            <?php
                                                        } else {
                                                            ?>
                                                            <div class="<?php echo status($status, $seatNo); ?> showseats"  name="<?php echo $levels_bottom[$row] . $seat; ?>" id="<?php echo $seatNo++; ?>" title="This seat is <?php echo status($status, $seatNo); ?>"><?php echo $seat; ?>
                                                            </div>
                                                            <?php
                                                        }

                                                    endforeach;
                                                    ?>
                                                </div>
                                                <?php
                                            } elseif ($row == 14) {
                                                ?>

                                                <div class="quater-half"  value="<?php echo $row; ?>">
                                                    <!-- <li class="ltr">A</li> -->
                                                    <?php
                                                    $reverse = array_reverse($even20, true); // true to preserve keys

                                                    foreach ($reverse as $seat):
                                                        if ($seat == 20 || $seat == 18 || $seat == 16) {
                                                            //foreach (range(0, 12) as $seat) :
                                                            ?>
                                                            <div class="<?php echo status($status, $seatNo); ?> showseats"  name="<?php echo $levels_bottom[$row] . $seat; ?>" style="border: none; width: 11%;" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;      ?>
                                                            </div>










                                                            <?php
                                                        } else {
                                                            ?>
                                                            <div class="<?php echo status($status, $seatNo); ?> showseats" name="<?php echo $levels_bottom[$row] . $seat; ?>"  id="<?php echo $seatNo++; ?>" title="This seat is <?php echo status($status, $seatNo); ?>"><?php echo $seat; ?>
                                                            </div>
                                                            <?php
                                                        }

                                                    endforeach;
                                                    ?>
                                                </div>
                                                <?php
                                            } elseif ($row == 15) {
                                                ?>

                                                <div class="quater-half"  value="<?php echo $row; ?>">
                                                    <!-- <li class="ltr">A</li> -->
                                                    <?php
                                                    $reverse = array_reverse($even20, true); // true to preserve keys

                                                    foreach ($reverse as $seat):
                                                        if ($seat == 20 || $seat == 18 || $seat == 16 || $seat == 14) {
                                                            //foreach (range(0, 12) as $seat) :
                                                            ?>
                                                            <div class="<?php echo status($status, $seatNo); ?> showseats" name="<?php echo $levels_bottom[$row] . $seat; ?>" style="border: none;width: 11%;" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;       ?>
                                                            </div>
                                                            <?php
                                                        } else {
                                                            ?>
                                                            <div class="<?php echo status($status, $seatNo); ?> showseats"  name="<?php echo $levels_bottom[$row] . $seat; ?>"  id="<?php echo $seatNo++; ?>" title="This seat is <?php echo status($status, $seatNo); ?>"><?php echo $seat; ?>
                                                            </div>
                                                            <?php
                                                        }

                                                    endforeach;
                                                    ?>
                                                </div>
                                                <?php
                                            } else {
                                                ?>

                                                <div class="quater-half" >
                                                    <!-- <li class="ltr">A</li> -->
                                                    <?php
                                                    $reverse = array_reverse($even20, true); // true to preserve keys

                                                    foreach ($reverse as $seat):
                                                        //foreach (range(0, 12) as $seat) :
                                                        ?>
                                                        <div class="<?php echo status($status, $seatNo); ?> showseats"  name="<?php echo $levels_bottom[$row] . $seat; ?>" id="<?php echo $seatNo++; ?>" title="This seat is <?php echo status($status, $seatNo); ?>"><?php echo $seat; ?>
                                                        </div>










                                                    <?php endforeach; ?>
                                                </div>
                                                <?php
                                            }

                                        endfor;
                                        ?>


                                    </div>
                                    <div class="quater">
                                        <div class="quater-half">
                                            <div class="  seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;       ?>N
                                            </div>
                                        </div>
                                        <div class="quater-half">
                                            <div class="  seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;        ?>M
                                            </div>
                                        </div>
                                        <div class="quater-half">
                                            <div class="  seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;      ?>L
                                            </div>
                                        </div>
                                        <div class="quater-half">
                                            <div class=" seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;      ?>K
                                            </div>
                                        </div>
                                        <div class="quater-half">
                                            <div class="  seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;       ?>J
                                            </div>
                                        </div>
                                        <div class="quater-half">
                                            <div class="  seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;        ?>J
                                            </div>
                                        </div>
                                        <div class="quater-half">
                                            <div class="  seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;        ?>G
                                            </div>
                                        </div>
                                        <div class="quater-half">
                                            <div class="  seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;       ?>F
                                            </div>
                                        </div>
                                        <div class="quater-half">
                                            <div class="  seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;       ?>E
                                            </div>
                                        </div>
                                        <div class="quater-half">
                                            <div class="  seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;        ?>D
                                            </div>
                                        </div>
                                        <div class="quater-half">
                                            <div class="  seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;       ?>C
                                            </div>
                                        </div>
                                        <div class="quater-half">
                                            <div class=" seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;       ?>B
                                            </div>
                                        </div>
                                        <div class="quater-half">
                                            <div class="  seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;        ?>A
                                            </div>
                                        </div>
                                        <div class="quater-half">
                                            <div class="  seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;        ?>EE
                                            </div>
                                        </div>
                                        <div class="quater-half">
                                            <div class=" seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;        ?>DD
                                            </div>
                                        </div>
                                        <div class="quater-half">
                                            <div class="  seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;       ?>CC
                                            </div>
                                        </div>


                                    </div>
                                    <div class="quater">
                                        <?php
                                        for ($row = 0; $row < 16; $row++):

                                            if ($row == 11 || $row == 10 || $row == 9) {
                                                ?>
                                                <div class="quater-half">
                                                    <?php
                                                    foreach ($seats118 as $seat):
                                                        ?>
                                                        <div class="<?php echo status($status, $seatNo); ?> showseats showseats101" name="<?php echo $levels_bottom[$row] . $seat; ?>" id="<?php echo $seatNo++; ?>"  title="This seat is <?php echo status($status, $seatNo); ?>"><?php echo $seat; ?>
                                                        </div>
                                                    <?php endforeach; ?>
                                                </div>


                                            <?php }else { ?>

                                                <div class="quater-half">
                                                    <?php
                                                    foreach ($seats118 as $seat):
                                                        ?>
                                                        <div class="<?php echo status($status, $seatNo); ?> showseats showseats101" name="<?php echo $levels_bottom[$row] . $seat; ?>" title="This seat is <?php echo status($status, $seatNo); ?>" id="<?php echo $seatNo++; ?>"><?php echo $seat; ?>
                                                        </div>
                                                    <?php endforeach; ?>
                                                </div>
                                            <?php } ?>

                                            <?php
                                        endfor;
                                        ?>
                                    </div>
                                    <div class="quater">
                                        <div class="quater-half">
                                            <div class="  seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;        ?>N
                                            </div>
                                        </div>
                                        <div class="quater-half">
                                            <div class="  seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;       ?>M
                                            </div>
                                        </div>
                                        <div class="quater-half">
                                            <div class="  seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;       ?>L
                                            </div>
                                        </div>
                                        <div class="quater-half">
                                            <div class="seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;       ?>K
                                            </div>
                                        </div>
                                        <div class="quater-half">
                                            <div class="  seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;        ?>J
                                            </div>
                                        </div>
                                        <div class="quater-half">
                                            <div class=" seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;        ?>J
                                            </div>
                                        </div>
                                        <div class="quater-half">
                                            <div class="  seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;       ?>G
                                            </div>
                                        </div>
                                        <div class="quater-half">
                                            <div class="  seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;        ?>F
                                            </div>
                                        </div>
                                        <div class="quater-half">
                                            <div class=" seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;       ?>E
                                            </div>
                                        </div>
                                        <div class="quater-half">
                                            <div class=" seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;        ?>D
                                            </div>
                                        </div>
                                        <div class="quater-half">
                                            <div class="  seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;       ?>C
                                            </div>
                                        </div>
                                        <div class="quater-half">
                                            <div class=" seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;       ?>B
                                            </div>
                                        </div>
                                        <div class="quater-half">
                                            <div class="  seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;        ?>A
                                            </div>
                                        </div>
                                        <div class="quater-half">
                                            <div class="  seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;       ?>EE
                                            </div>
                                        </div>
                                        <div class="quater-half">
                                            <div class="  seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;       ?>DD
                                            </div>
                                        </div>
                                        <div class="quater-half">
                                            <div class="  seattext" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;        ?>CC
                                            </div>
                                        </div>


                                    </div>

                                    <div class="r" style="list-style:none;">
                                        <div class="quater">
                                            <?php
                                            for ($row = 0; $row < 16; $row++):
                                                 if ($row == 0) { 
                                                        ?>
                                                    
                                                        <div class="quater-half"  value="<?php echo $row; ?>" style="width: 267px;float: left;">
                                                            <!-- <li class="ltr">A</li> -->
                                                                <?php
                                                              

                                                                foreach ($odd20 as $seat):
                                                                    if ($seat == 19 || $seat == 17 || $seat == 15) {
                                                                    //foreach (range(0, 12) as $seat) :
                                                                    ?>
                                                                <div class="booked showseats" style="border: none; width: 11%;" title="Seat A1 Booked"><?php //echo $seat; ?>
                                                                </div>










                                                                    <?php 
                                                                } else {
                                                                    ?>
                                                                    
                                                                     <div class="<?php echo status($status, $seatNo); ?> showseats"  name="<?php echo $levels_bottom[$row] . $seat; ?>" id="<?php echo $seatNo++; ?>" title="This seat is <?php echo status($status, $seatNo); ?>"><?php echo $seat; ?>
                                                                    </div>
                                                                    <?php 
                                                                }

                                                                    endforeach; ?>
                                                        </div>
                                                        <?php

                                                    }
                                                elseif ($row == 12) {
                                                    ?>

                                                    <div class="quater-half" style="float: left;"value="<?php echo $row; ?>">
                                                        <!-- <li class="ltr">A</li> -->
                                                        <?php
                                                        foreach ($odd20 as $seat):
                                                            if ($seat == 19) {
                                                                //foreach (range(0, 12) as $seat) :
                                                                ?>
                                                                <div class="<?php echo status($status, $seatNo); ?> showseats" name="<?php echo $levels_bottom[$row] . $seat; ?>" style="border: none;width: 11%;" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;       ?>
                                                                </div>










                                                                <?php
                                                            } else {
                                                                ?>
                                                                <div class="<?php echo status($status, $seatNo); ?> showseats" name="<?php echo $levels_bottom[$row] . $seat; ?>" id="<?php echo $seatNo++; ?>"  title="This seat is <?php echo status($status, $seatNo); ?>"><?php echo $seat; ?>
                                                                </div>
                                                                <?php
                                                            }

                                                        endforeach;
                                                        ?>
                                                    </div>
                                                    <?php
                                                } elseif ($row == 13) {
                                                    ?>

                                                    <div class="quater-half" value="<?php echo $row; ?>"style="padding-right: 14%;">
                                                        <!-- <li class="ltr">A</li> -->
                                                        <?php
                                                        foreach ($odd20 as $seat):
                                                            if ($seat == 19 || $seat == 17) {
                                                                //foreach (range(0, 12) as $seat) :
                                                                ?>
                                                                <div class="<?php echo status($status, $seatNo); ?> showseats" name="<?php echo $levels_bottom[$row] . $seat; ?>" style="border: none;width: 11%;" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;      ?>
                                                                </div>










                                                                <?php
                                                            } else {
                                                                ?>
                                                                <div class="<?php echo status($status, $seatNo); ?> showseats" name="<?php echo $levels_bottom[$row] . $seat; ?>" id="<?php echo $seatNo++; ?>"  title="This seat is <?php echo status($status, $seatNo); ?>"><?php echo $seat; ?>
                                                                </div>
                                                                <?php
                                                            }

                                                        endforeach;
                                                        ?>
                                                    </div>
                                                    <?php
                                                } elseif ($row == 14) {
                                                    ?>

                                                    <div class="quater-half"  value="<?php echo $row; ?>" style="padding-right: 26%;">
                                                        <!-- <li class="ltr">A</li> -->
                                                        <?php
                                                        foreach ($odd20 as $seat):
                                                            if ($seat == 19 || $seat == 17 || $seat == 15) {
                                                                //foreach (range(0, 12) as $seat) :
                                                                ?>
                                                                <div class="<?php echo status($status, $seatNo); ?> showseats" name="<?php echo $levels_bottom[$row] . $seat; ?>" style="border: none; width: 11%;" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;      ?>
                                                                </div>










                                                                <?php
                                                            } else {
                                                                ?>
                                                                <div class="<?php echo status($status, $seatNo); ?> showseats" name="<?php echo $levels_bottom[$row] . $seat; ?>" id="<?php echo $seatNo++; ?>"  title="This seat is <?php echo status($status, $seatNo); ?>"><?php echo $seat; ?>
                                                                </div>
                                                                <?php
                                                            }

                                                        endforeach;
                                                        ?>
                                                    </div>
                                                    <?php
                                                } elseif ($row == 15) {
                                                    ?>

                                                    <div class="quater-half"  value="<?php echo $row; ?>"style="padding-right: 32%;">
                                                        <!-- <li class="ltr">A</li> -->
                                                        <?php
                                                        foreach ($odd20 as $seat):
                                                            if ($seat == 19 || $seat == 17 || $seat == 15 || $seat == 13) {
                                                                //foreach (range(0, 12) as $seat) :
                                                                ?>
                                                                <div class="<?php echo status($status, $seatNo); ?> showseats" name="<?php echo $levels_bottom[$row] . $seat; ?>" style="border: none;width: 11%;" title="This seat is <?php echo status($status, $seatNo); ?>"><?php //echo $seat;      ?>
                                                                </div>










                                                                <?php
                                                            } else {
                                                                ?>
                                                                <div class="<?php echo status($status, $seatNo); ?> showseats" name="<?php echo $levels_bottom[$row] . $seat; ?>" id="<?php echo $seatNo++; ?>" title="This seat is <?php echo status($status, $seatNo); ?>"><?php echo $seat; ?>
                                                                </div>
                                                                <?php
                                                            }

                                                        endforeach;
                                                        ?>
                                                    </div>
                                                    <?php
                                                } else {
                                                    ?>

                                                    <div class="quater-half" value="<?php echo $row; ?>" >
                                                        <!-- <li class="ltr">A</li> -->
                                                        <?php
                                                        foreach ($odd20 as $seat):
                                                            //foreach (range(0, 12) as $seat) :
                                                            ?>
                                                            <div class="<?php echo status($status, $seatNo); ?> showseats" name="<?php echo $levels_bottom[$row] . $seat; ?>" title="This seat is <?php echo status($status, $seatNo); ?>" id="<?php echo $seatNo++; ?>" ><?php echo $seat; ?>
                                                            </div>










                                                        <?php endforeach; ?>
                                                    </div>
                                                    <?php
                                                }

                                            endfor;
                                            ?>


                                        </div>
                                    </div>



                                </div>
                            </div>



                        </div>
                        <div class="col-md-12">

                            <div class="col-md-9">
                                <label style=" float: right;    border: black solid 2px;      font-weight: bold;      background-color: white;      color: red;         width: 64px;      -webkit-transform: rotate(90deg);      -moz-transform: rotate(90deg);      -o-transform: rotate(90deg);      -ms-transform: rotate(90deg);      transform: rotate(90deg);      position: absolute;      right: -340px;      top: 17px;">EXIT</label>
                            </div>
                        </div>
                        <div class="way">

                            <div class="col-md-3">

                                <div class="quater">
                                    <div class="quater-half">
                                        <div class="<?php echo status($status, $seatNo); ?> noborder-left" title="This seat is <?php echo status($status, $seatNo); ?>">
                                            <div class="dashboard-stat2 drow-border">
                                                <div class="display number_color" style="float: left; margin-left: 127px;">
                                                    <div class="number">
                                                        <h3 id="<?php echo $seatNo++; ?>">147</h3>

                                                    </div>

                                                </div>

                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="quater">
                                    <div class="quater-half">
                                        <div class="<?php echo status($status, $seatNo); ?> noborder-left" title="This seat is <?php echo status($status, $seatNo); ?>">
                                            <div class="dashboard-stat2 drow-border"style="float: left; margin: 0; padding: 0;margin-top: 5px;">
                                                <div class="display number_color" style="margin-left: 5px;">
                                                    <div class="number">
                                                        <h3 id="<?php echo $seatNo++; ?>">288</h3>

                                                    </div>

                                                </div>

                                            </div>
                                            <div class="dashboard-stat2 inside-txt">
                                                <div class="display">
                                                    <div class="number" style="margin-left: 170px;">
                                                        <h5 class="font-black-sharp">ORCHESTRA-582</h5>

                                                    </div>

                                                </div>

                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="quater">
                                    <div class="quater-half">
                                        <div class="<?php echo status($status, $seatNo); ?> noborder-left" title="This seat is <?php echo status($status, $seatNo); ?>">
                                            <div class="dashboard-stat2 drow-border">
                                                <div class="display number_color">
                                                    <div class="number">
                                                        <h3 id="<?php echo $seatNo++; ?>">147</h3>

                                                    </div>

                                                </div>

                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!--end  section 4--> 

                        <div id="gap">&nbsp;</div>



                        <div id="gap">&nbsp;</div>
                        <a name="view_cart"></a>
                        <div class="cart">
                            <div class="cartitems">

                                <div class="clearfix"></div>





                                <button type="button" id="bookbtn" class="btn btn-info btn-lg buttonglowing" data-toggle="modal" data-target="#bookForm">Book</button>


                                <!-- Modal -->

                                <div id="bookForm" style="position: absolute;top: 70%;" class="modal fade" role="dialog">
                                    <div class="modal-dialog">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Fill up the Following Information and hit 'Confirm Book' button</h4>
                                            </div>
                                            <div class="modal-body">
                                                <?php
                                                echo $this->Form->create('Seat', array(
                                                    'inputDefaults' => array(
                                                        'label' => false,
                                                        'div' => false
                                                    ),
                                                    'id' => 'form-validate',
                                                    'class' => 'form-horizontal',
                                                    'novalidate' => 'novalidate'
                                                        )
                                                );
                                                ?>
                                                <?php
                                                echo $this->Form->input(
                                                        'selected', array(
                                                    'id' => 'selectedSeat',
                                                    'class' => 'span9 text',
                                                    'typr' => 'text'
                                                        )
                                                );
                                                ?>
                                                <div class="col-md-7 col-sm-7">  


                                                    <div class="form-group">
                                                        <label for="name" class="col-lg-4 control-label">Name <span class="require">*</span></label>
                                                        <div class="col-lg-8">
                                                            <?php
                                                            echo $this->Form->input(
                                                                    'name', array(
                                                                'class' => 'form-control',
                                                                'placeholder' => 'Type Name here'
                                                                    )
                                                            );
                                                            ?>                                                    
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7 col-sm-7">  

                                                    <div class="form-group">
                                                        <label for="country" class="col-lg-4 control-label">Sex<span class="require">*</span></label>
                                                        <div class="col-md-8">
                                                            <?php
                                                            echo $this->Form->input('sex', array(
                                                                'class' => 'form-control',
                                                                'empty' => 'Select gender',
                                                                'options' => array('Male' => 'Male',
                                                                    'Female' => 'Female',
                                                                    'Others' => 'Others')
                                                                    )
                                                            );
                                                            ?> 
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                 <div class="col-md-7 col-sm-7">  


                                                    <div class="form-group">
                                                        <label for="name" class="col-lg-4 control-label">Email <span class="require">*</span></label>
                                                        <div class="col-lg-8">
                                                            <?php
                                                            echo $this->Form->input(
                                                                    'email', array(
                                                                'class' => 'form-control',
                                                                'placeholder' => 'Type Email here'
                                                                    )
                                                            );
                                                            ?>                                                    
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                  <div class="col-md-7 col-sm-7">  


                                                    <div class="form-group">
                                                        <label for="name" class="col-lg-4 control-label">Phone <span class="require">*</span></label>
                                                        <div class="col-lg-8">
                                                            <?php
                                                            echo $this->Form->input(
                                                                    'phone', array(
                                                                'class' => 'form-control',
                                                                'placeholder' => 'Type Phone number here'
                                                                    )
                                                            );
                                                            ?>                                                    
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                  <div class="col-md-7 col-sm-7">  


                                                    <div class="form-group">
                                                        <label for="name" class="col-lg-4 control-label">Address <span class="require">*</span></label>
                                                        <div class="col-lg-8">
                                                            <?php
                                                            echo $this->Form->input(
                                                                    'address', array(
                                                                'class' => 'form-control',
                                                                'placeholder' => 'Type address here'
                                                                    )
                                                            );
                                                            ?>                                                    
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-md-7 col-sm-7">  

                                                    <div class="form-group">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        <?php
                                                        echo $this->Form->button(
                                                                'Confirm Book', array('class' => 'btn marginR10', 'type' => 'submit')
                                                        );
                                                        ?>
                                                        <?php echo $this->Form->end(); ?>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="modal-footer">

                                            </div>


                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- END SERVICE BLOCKS --> 



                </div>
                <!-- END BEGIN VIDEO AND TESTIMONIALS -->   
            </div>

            <div id="currentcart">
                <div id="maindiv">
                    <div id="pardiv">

                    </div>
                    <br><br>
                </div>
            </div>




        </div>
    </div>