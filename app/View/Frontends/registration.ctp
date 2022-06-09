
<style>
    .alert-danger, .alert-error,alert  {
        color: red;
        background-color: #f2dede;
        border-color: #eed3d7;
    }
    .alert, .alert h4 {
        color: red;
    }

    .alert-success {
        background-color: #dff0d8;
        border-color: #d6e9c6;
        color: #3c763d;
    }

</style>
<div class="main">
    <div class="container">

        <?php
        echo $this->Form->create('User', array(
            'inputDefaults' => array(
                'label' => false,
                'div' => false
            ),
            'id' => 'form-validate',
            'class' => 'form-horizontal',
            'novalidate' => 'novalidate',
            'enctype' => 'multipart/form-data'
                )
        );
        ?>
        <ul class="">

        </ul>
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
            <!-- BEGIN SIDEBAR -->

            <!-- END SIDEBAR -->

            <!-- BEGIN CONTENT -->


            <div class="row">

                <div class="col-md-12"style="float: left; text-align: center; margin-left: 331px;">
                    <div class="content-form-page " style="float: left; text-align: center;"  >
                        <h2>FILL UP THE FOLLOWING INFORMATION</h2>
                        <?php echo $this->Session->flash(); ?>
                        <?php
                        if (isset($errors)):
                            echo $errors;
                        endif;
                        ?>  
                    </div>

                </div>
            </div>


            <!-- BEGIN SAMPLE FORM PORTLET-->
            <div class="row">
                <div class="col-md-12">
                    <div class="">

                        <div class="radio-list  alert-info">
                            <label class="radio-inline">
                                <span class=""><input type="radio" name="data[User][service_type]" id="service_type" value="1" checked=""></span> NEW INSTALLATION </label>
                            <label class="radio-inline">
                                <span class="checked"><input type="radio" name="data[User][service_type]" id="service_type" value="2"></span> SERVICE REPAIR </label>
                            <label class="radio-inline">
                                <span class="checked"><input type="radio" name="data[User][service_type]" id="service_type" value="3"></span> CANCEL SERVICE </label>
                        </div>
                    </div>
                </div>
            </div>
            &nbsp;

            <div class="row">
                <div class="col-md-12 ">
                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet box" style=" text-align: center; background-color:   #7c94aa;">
                        <div class="portlet-title">
                            <div class="caption" >
                                Customer Information
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <label for="firstname" class="col-lg-1 control-label">Name: <span class="require">*</span></label>
                <div class="col-md-3">
                    <?php
                    echo $this->Form->input(
                            'first_name', array(
                        'class' => 'form-control required',
                        'placeholder' => 'First',
                            )
                    );
                    ?> 

                </div>
                <div class="col-md-4">                                 
                    <?php
                    echo $this->Form->input(
                            'middle_name', array(
                        'class' => 'form-control required',
                        'placeholder' => 'Middle'
                            )
                    );
                    ?> 
                </div>
                <div class="col-md-4">
                    <?php
                    echo $this->Form->input(
                            'last_name', array(
                        'class' => 'form-control required',
                        'placeholder' => 'Last'
                            )
                    );
                    ?> 
                </div>
            </div>
            &nbsp;
            <div class="row">
                <label for="afs" class="col-lg-1 control-label">Address: <span class="require">*</span></label>
                <div class="col-md-6">                                   
                    <?php
                    echo $this->Form->input(
                            'street', array(
                        'class' => 'form-control required',
                        'placeholder' => 'Address & Street'
                            )
                    );
                    ?> 
                </div>                                
                <div class="col-md-5">
                    <?php
                    echo $this->Form->input(
                            'afs', array(
                        'class' => 'form-control required',
                        'placeholder' => 'Apt/Floor/Suite'
                            )
                    );
                    ?> 
                </div>
            </div>

            &nbsp;

            <div class="row">
                <label for="city" class="col-lg-1 control-label">City: <span class="require">*</span></label>
                <div class="col-md-3">                                  

                    <?php
                    echo $this->Form->input(
                            'city', array(
                        'class' => 'form-control required',
                        'placeholder' => 'City'
                            )
                    );
                    ?> 
                </div>
                <label for="state" class="col-lg-1 control-label">State: <span class="require">*</span></label>
                <div class="col-md-3">                                   
                    <?php
                    echo $this->Form->input(
                            'state', array(
                        'class' => 'form-control required',
                        'placeholder' => 'State'
                            )
                    );
                    ?> 
                </div>
                <label for="zip_code" class="col-lg-1 control-label">Zip:<span class="require">*</span></label>
                <div class="col-md-3">

                    <?php
                    echo $this->Form->input(
                            'zip_code', array(
                        'class' => 'form-control',
                        'type' => 'text',
                        'placeholder' => 'Zip code'
                            )
                    );
                    ?> 
                </div>
            </div>

            &nbsp;

            <div class="row">
                <label for="home" class="col-lg-1 control-label">Phone:<span class="require">*</span></label>
                <div class="col-md-3">
                    <?php
                    echo $this->Form->input(
                            'home', array(
                        'class' => 'form-control',
                        'placeholder' => 'Home'
                            )
                    );
                    ?> 
                </div>
                <label for="cell" class="col-lg-1 control-label">Cell:<span class="require">*</span></label>
                <div class="col-md-3">
                    <?php
                    echo $this->Form->input(
                            'cell', array(
                        'class' => 'form-control required',
                        'placeholder' => 'Cell'
                            )
                    );
                    ?> 
                </div>
                <label for="other" class="col-lg-1 control-label">Other:</label>
                <div class="col-md-3">
                    <?php
                    echo $this->Form->input(
                            'other', array(
                        'class' => 'form-control',
                        'placeholder' => 'Other'
                            )
                    );
                    ?> 
                </div>
            </div>


            &nbsp;
            <div class="row">
                <label for="fax" class="col-lg-1 control-label">Fax:<span class="require">*</span></label>
                <div class="col-md-3">
                    <?php
                    echo $this->Form->input(
                            'fax', array(
                        'class' => 'form-control',
                        'placeholder' => 'Fax'
                            )
                    );
                    ?> 
                </div>

                <label for="email" class="col-lg-1 control-label">Email: <span class="require">*</span></label>
                <div class="col-md-3">                                    
                    <?php
                    echo $this->Form->input(
                            'email', array(
                        'class' => 'form-control required',
                         'placeholder' => 'Type your Email'
                            )
                    );
                    ?> 
                </div>
                 <label for="firstname" class="col-lg-1 control-label">Password: <span class="require">*</span></label>
                <div class="col-md-3">                                    
                    <?php
                    echo $this->Form->input(
                            'password', array(
                        'class' => 'form-control required',
                        'placeholder' => 'Type your password'
                            )
                    );
                    ?> 
                </div>

            </div>

            &nbsp;



            <div class="row">
                <div class="col-md-12 ">
                    <!-- BEGIN SAMPLE FORM PORTLET-->
                    <div class="portlet box" style=" text-align: center; background-color: darkgoldenrod; color: orange;">
                        <div class="portlet-title">
                            <div class="caption" >
                                PAYMENT
                            </div>
                        </div>

                    </div>
                </div>
            </div>




            <div class="row">
                <label for="charge" class="col-lg-1 control-label">CHARGE:</label>
                <div class="col-md-2">
                    <?php
                    echo $this->Form->input(
                            'charge', array(
                        'class' => 'form-control',
                        'type' => 'text',
                        'placeholder' => 'Charge P/M'
                            )
                    );
                    ?>  
                </div>
                <label for="deposit" class="col-lg-1 control-label"><span class="require">SEC.</span>DEPOSIT:</label>
                <div class="col-md-2">
                    <?php
                    echo $this->Form->input(
                            'deposit', array(
                        'class' => 'form-control',
                        'type' => 'text',
                        'placeholder' => 'Deposit'
                            )
                    );
                    ?> 
                </div>
                <label for="router" class="col-lg-1 control-label">ROUTER:</label>
                <div class="col-md-2">
                    <?php
                    echo $this->Form->input(
                            'router', array(
                        'class' => 'form-control',
                        'type' => 'text',
                        'placeholder' => 'Router'
                            )
                    );
                    ?>
                </div>

                <label for="wiringe" class="col-lg-1 control-label">WIRING:</label>
                <div class="col-md-2">
                    <?php
                    echo $this->Form->input(
                            'wiringe', array(
                        'class' => 'form-control',
                        'type' => 'text',
                        'placeholder' => 'Wiring'
                            )
                    );
                    ?>
                </div>

            </div>
            &nbsp;

            <!-- BEGIN BUTTONS PORTLET-->
            <div class="row">
                <div class="col-md-3">
                    <div class="portlet blue box" >
                        <div class="portlet-title">
                            <div class="caption">
                                PAYMENT METHOD
                            </div>
                        </div>
                    </div>

                    <div>
                        <div class="checkbox">
                            <label><?php
                                echo $this->Form->input(
                                        'card', array(
                                    'type' => 'checkbox',
                                    'name' => 'name',
                                ));
                                ?>
                                CARD (DEBIT/CREDIT)
                            </label>
                        </div>
                        <div class="checkbox">
                            <label><?php
                                echo $this->Form->input(
                                        'personal_check', array(
                                    'type' => 'checkbox',
                                    
                                ));
                                ?>
                                PERSONAL CHECK
                            </label>
                        </div>
                        <div class="checkbox">
                            <label><?php
                                echo $this->Form->input(
                                        'certified_check', array(
                                    'type' => 'checkbox',
                                    
                                ));
                                ?>
                                CERTIFIED CHECK
                            </label>
                        </div> 
                        <div class="checkbox">
                            <label><?php
                                echo $this->Form->input(
                                        'money_order', array(
                                    'type' => 'checkbox',
                                    
                                ));
                                ?> 
                                MONEY ORDER
                            </label>
                        </div>
                    </div>


                    &nbsp;
                     <div class="row">
                        <div class="col-md-12">
                            <label for="exampleInputFile1">Card Holder's Signature:</label>&nbsp;

                            <input type="file" name="data[User][ch_signature]" id="required">                                    
                        </div>
                    </div>

                </div>


                <div class="col-md-9">
                    <div class="portlet purple box">
                        <div class="portlet-title">
                            <div class="caption">
                                CARD/CHECK INFORMATION
                            </div>
                        </div>                                      
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="checkbox-list">
                                <label class="checkbox-inline control-label" >

                                    <?php
                                    echo $this->Form->input(
                                            'visa', array(
                                        'type' => 'checkbox',
                                        'id' => 'other',
                                        'label' => 'VISA'
                                    ));
                                    ?> 

                                </label>
                                <label class="checkbox-inline control-label">
                                    <?php
                                    echo $this->Form->input(
                                            'master', array(
                                        'type' => 'checkbox',
                                        'id' => 'other',
                                        'label' => 'MASTER'
                                    ));
                                    ?> 
                                </label>
                                <label class="checkbox-inline control-label">

                                    <?php
                                    echo $this->Form->input(
                                            'bank_name', array(
                                        'type' => 'checkbox',
                                        'id' => 'other',
                                        'label' => 'BANK NAME:'
                                    ));
                                    ?>
                                </label>  
                                <label class="checkbox-inline control-label">


                                    <?php
                                    echo $this->Form->input(
                                            'bank_name', array(
                                        'class' => 'form-control required',
                                        'color' => 'style ="color:black"',
                                        'placeholder' => 'Bank name'
                                            )
                                    );
                                    ?>



                                </label>



                            </div>
                        </div>
                    </div>

                    &nbsp;

                    <div class="row">
                        <label for="name" class="col-lg-2 control-label">Name:<span class="require">*</span></label>
                        <div class="col-md-4">

                            <?php
                            echo $this->Form->input(
                                    'name', array(
                                'class' => 'form-control required',
                                'placeholder' => 'Name',
                            ))
                            ?>

                        </div> 
                        <label for="check" class="col-lg-2 control-label">CHECK NO:<span class="require">*</span></label>
                        <div class="col-md-4">
                            <?php
                            echo $this->Form->input(
                                    'check', array(
                                'class' => 'form-control required',
                                'placeholder' => 'CHECKNO',
                                'type' => 'password'
                            ))
                            ?>
                        </div>                                       
                    </div>

                    &nbsp;

                    <div class="row">
                        <label for="card_check_no" class="col-lg-2 control-label">Card/Check No:<span class="require">*</span></label>
                        <div class="col-md-4">

                            <?php
                            echo $this->Form->input(
                                    'card_check_no', array(
                                'class' => 'form-control required',
                                'placeholder' => 'Card/Check No',
                                'type' => 'password'
                            ))
                            ?>
                        </div> 
                        <label for="exp_date" class="col-lg-2 control-label">Exp. Date: <span class="require">*</span></label>
                        <div class="col-md-4">

                            <?php
                            echo $this->Form->input(
                                    'exp_date', array(
                                'class' => 'form-control date-picker required',
                                'type' => 'text',                                        
                                'placeholder' => 'Exp. Date'
                            ))
                            ?>
                        </div>
                    </div>

                    &nbsp;

                    <div class="row">
                        <label for="cvv_code" class="col-lg-2 control-label">CVV Code:<span class="require">*</span></label>
                        <div class="col-md-4">

                            <?php
                            echo $this->Form->input(
                                    'cvv_code', array(
                                'class' => 'form-control required',
                                'placeholder' => 'CVV Code',
                                'type' => 'password'
                            ))
                            ?>

                        </div> 
                        <label for="charge_amount" class="col-lg-2 control-label">Charged Amount: <span class="require">*</span></label>
                        <div class="col-md-4">

                            <?php
                            echo $this->Form->input(
                                    'charge_amount', array(
                                'class' => 'form-control required',
                                'type' => 'text',
                                'placeholder' => 'Charged Amount',
                            ))
                            ?>

                        </div> 
                    </div>
                    &nbsp;
                    <div class="row">
                        <label for="address_on_card" class="col-lg-2 control-label" >Address on Card: <span class="require">*</span></label>
                        <div class="col-md-4">
                            <?php
                            echo $this->Form->input(
                                    'address_on_card', array(
                                'class' => 'form-control required',
                                'placeholder' => 'Address on Card',
                            ))
                            ?>

                        </div> 
                    </div>
                </div>
            </div>


            &nbsp; &nbsp; &nbsp;
            <div class="row">
                <div class="col-md-12 col-sm-12" style="text-align: justify;">  

                    <div class="checkbox-list">
                        <label class="checkbox-inline" >

                            <?php
                            echo $this->Form->input(
                                    'agreement', array(
                                'type' => 'checkbox',
                            ));
                            ?> 

                            I agree to pay one time installation fee, security deposit and all 
                            charges associated with the services selected by me. I have read 
                            and fully understood the terms and conditions mentioned overleaf 
                            and unconditionally accept them as binding on me. I do understand 
                            that I will be billed applied amount every month for service. 
                            Postpaid bill is due by the <b>7th</b> day of the every months 
                            applied duration. I can be charged an additional $5/$10/$15 service 
                            charge for reconnecting service due to late or non-payment. 
                            Total Cable has the right to discontinue service or change/remove 
                            contents offered as required by law without prior notice.

                        </label>

                    </div>
                    &nbsp;

                    <p><b>Termination of Service:</b> If you (above customer) leave or move from your 
                        current resident, it is your responsibility to notify Total Cable to discontinue 
                        your service. Failure to do so will result in your continued responsibility for 
                        all Total Cable service charges. To complete cancellation/termination of this 
                        subscription, you must return all equipment provided to you by Total Cable in 
                        good working condition immediately along with a check (if applicable) of total 
                        due balance.
                    </p>

                    <div class="checkbox-list">
                        <label class="checkbox-inline require" >

                            <?php
                            echo $this->Form->input(
                                    'agreement', array(
                                'type' => 'checkbox',
                            ));
                            ?> 

                            By signing below I agree to the term and condition on other side of the page.

                        </label>

                    </div>

                </div>
            </div>

            &nbsp;


            <div class="row">
                <div class="col-md-12">
                    <label for="exampleInputFile1">Customer Signature: </label>&nbsp;

                    <input type="file" name="data[User][c_signature]" id="required">                                    
                </div>
            </div>



            &nbsp;

            &nbsp;





            <div class="row">
                <div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-20"> 

                    <?php
                    echo $this->Form->button(
                            'Sign up', array(
                        'class' => 'btn btn-primary submitbtn',
                        'type' => 'submit',
                        'id' => 'signup'
                    ));
                    ?>

                </div>
            </div>  

        </div>
        <?php echo $this->Form->end(); ?>

    </div>


    <!-- END SIDEBAR & CONTENT -->


</div>