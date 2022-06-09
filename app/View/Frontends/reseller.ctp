
<div class="main">
    <div class="services-block content content-center" id="services">
        <div class="container">

            <div class="row">


            </div>
        </div>
    </div>

    <!-- BEGIN LOGO -->
    <div class="login backstretch">

        <div class="flash">
            <?php echo $this->Session->flash(); ?> 

        </div>

        <div class="content reseller">

            <?php
            echo $this->Form->create('Reseller', array(
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
            <div style="text-align: center;">
                <h2>RESELLER & DISTRIBUTION INQUIRY</h2>

                <p style="color: maroon;">  <strong >PLEASE FILL THE FORM BELOW AND WE WILL GET BACK TO YOU SHORTLY !</strong> 
                    <?php echo $this->Session->flash(); ?>
                        <?php
                        if (isset($errors)):
                            echo $errors;
                        endif;
                        ?> 

                </p>

            </div>
            <div class="alert alert-danger display-hide">
                <button class="close" data-close="alert"></button>
                <span>
                    Enter any username and password. </span>
            </div>
            <div class="form-group">
                <div class="input-icon">
                    <i></i>
                    <?php
                    echo $this->Form->input(
                            'name', array(
                        
                        'class' => 'form-control placeholder-no-fix required',
                        'placeholder' => 'Your Name'
                            )
                    );
                    ?>
                </div>
            </div>
            <div class="form-group">

                <div class="input-icon">
                    <i></i>
                    <!--<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Your Phone Number" name="password"/>-->
                    <?php
                    echo $this->Form->input(
                            'phone_no', array(
                       
                        'class' => 'form-control placeholder-no-fix required',
                        'placeholder' => 'Your Phone No'
                            )
                    );
                    ?>
                </div>
            </div>

            <div class="form-group">
                <div class="input-icon">
                    <i></i>
                    <?php
                    echo $this->Form->input(
                            'email', array(
                        
                        'class' => 'form-control placeholder-no-fix required',
                        'placeholder' => 'Your Email'
                            )
                    );
                    ?>
                </div>
            </div>
            <div class="form-group">
                <div class="input-icon">
                    <i></i>
                    <?php
                    echo $this->Form->input(
                            'message', array(
                        
                        'style' => 'height: 231px',
                        'class' => 'form-control placeholder-no-fix required',
                        'placeholder' => 'Your Message',
                        'type' => 'textarea'
                            )
                    );
                    ?>
                </div>
            </div>
            <div class="form-actions">
                <?php
                echo $this->Form->button(
                        'Submit', array('class' => 'btn blue btn-sm pull-right submitbtn', 'type' => 'submit')
                );
                ?>
            </div>
            <?php echo $this->Form->end(); ?>

        </div>

    </div>

</div>


