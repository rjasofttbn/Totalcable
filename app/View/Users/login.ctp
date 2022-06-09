
<div class="container-fluid">

        <div class="loginContainer">
            <?php echo $this->Session->flash();  ?>
            <?php
            echo $this->Form->create('User', array(
                'inputDefaults' => array(
                            'label' => false,
                            'div'   => false                                  
                            ),
                'class' => 'form-horizontal',
                'role' => 'form',
                'url' => array('controller' => 'users', 'action' => 'login'),
                'id' => 'loginForm'
            ));
            ?>
          
                <div class="form-row row-fluid">
                    <div class="span12">
                        <div class="row-fluid">
                            <label class="form-label span12" for="username">
                                Email:
                                <span class="icon16 icomoon-icon-user-3 right gray marginR10"></span>
                            </label>
                            <?php 
                            echo $this->Form->input('email', array(
                                'class' => 'span12',
                                 'id' => 'username',
                                //'div' => array('class' => 'form-group'),
                                'placeholder' => __('enter username'),
                                'type' => 'text',
                            ));
                            ?>
                            <!-- <input class="span12" id="username" type="text" name="username" value="Administrator" /> -->
                        </div>
                    </div>
                </div>

                <div class="form-row row-fluid">
                    <div class="span12">
                        <div class="row-fluid">
                            <label class="form-label span12" for="password">
                                Password:
                                <span class="icon16 icomoon-icon-locked right gray marginR10"></span>
                              
                            </label>
                            <?php
                            echo $this->Form->input('password', array(
                                'class' => 'span12',
                                'id'=>'password',
                                'div' => array('class' => 'form-group'),
                                //'label' => 'Password',
                                'placeholder' => __('enter password'),
                            )); 
                            ?>
                           
                        </div>
                    </div>
                </div>
                <div class="form-row row-fluid">                       
                    <div class="span12">
                        <div class="row-fluid">
                            <div class="form-actions">
                            <div class="span12 controls">
                             
                               
                                <?php 
                                   echo $this->Form->button(
                                    'Login', 
                                    array('class' => 'btn btn-info right', 'type' => 'submit')
                                    ); ?>
                                <?php
                                

                                echo $this->Html->link(__('Forgot your password?'), array('action' => 'forgot_password'), array(
                                    'class' => 'after-button'
                                ));

                                echo '<br />';
                                echo $this->Form->end();
 
                                ?>

                                
                            </div>
                            <div class="col-md-6">
                                <h3><?php echo __('No Account?'); ?></h3>
                                <p>
                                    <?php echo $this->Html->link(__('Create one!'), array('action' => 'registration'), array(
                                        'class' => 'btn btn-success',
                                        'role' => 'button'
                                    )); ?>
                                </p>
                            </div>
                            </div>
                        </div>
                    </div> 
                </div>

            <!-- </form> -->
        </div>

    </div><!-- End .container-fluid -->