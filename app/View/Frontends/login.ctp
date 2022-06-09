<div class="main">
    <div class="container">
    	
    	<div class="row">
            
				<!-- BEGIN LOGIN FORM -->
				<div class="col-md-12 col-sm-12 text-center">
					<div class="col-md-12 col-sm-12">
                            <div class="portlet green box">
                                    <div class="portlet-title">
                                            <div class="caption">
                                                  Sign in
                                            </div>
                                           
                                    </div>
                                  
                            </div>
                    </div>
                    <div class="title" style="color:red;">
                            <?php echo $this->Session->flash(); ?> 
                    </div>
                    <div class="loginsection">
						 <?php
					    echo $this->Form->create('User', array(
					        'inputDefaults' => array(
					            'label' => false,
					            'div' => false
					        ),
					        'id' => 'form-validate',
					        'class' => 'form-horizontal',
					        'novalidate' => 'novalidate',
					        'enctype' => 'multipart/form-data',
					        'url' => array('controller' =>'/','action'=>'login')
					            )
					    );
					    ?>
					    <ul class="">

					    </ul>
					    <!-- BEGIN SIDEBAR & CONTENT -->
					    <div class="row margin-bottom-40">
					        <!-- BEGIN SIDEBAR -->
					          <div class="col-md-12 col-sm-12"> 


					                    <div class="row">
					                        <label for="firstname" class="col-lg-1 control-label">Email: <span class="require">*</span></label>
					                        <div class="col-md-3">
					                            <?php
					                            echo $this->Form->input(
					                                    'email', array(
					                                'class' => 'form-control needed',
					                                'placeholder' => 'Type your email ',
					                                 
					                                    )
					                            );
					                            ?> 

					                        </div>
					                       
					                    </div>
					                    <div class="row">
					                        <label for="firstname" class="col-lg-1 control-label">Password: <span class="require">*</span></label>
					                        <div class="col-md-3">                                 
					                            <?php
					                            echo $this->Form->input(
					                                    'password', array(
					                                'class' => 'form-control',
					                                'placeholder' => 'Type your Password'
					                                    )
					                            );
					                            ?> 
					                        </div>
					                       
					                    </div>
					                    <div class="row">
					                      <div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-20"> 

					                          <?php
					                          echo $this->Form->button(
					                                  'Login', array(
					                              'class' => 'btn btn-primary',
					                              'type' => 'submit',
					                              'id' => 'Login'
					                          ));
					                          ?>

					                      </div>
					                    </div>
					              
					          </div>
					    </div>
					    <?php echo $this->Form->end(); ?>
					 </div>
                    
                </div>

				
		                     

				    
				
				<!-- END LOGIN FORM -->
			
	
		</div>
	</div>
	
</div>