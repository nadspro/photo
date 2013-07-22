<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   <title>Metronic | Form Stuff - Form Wizard</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
   <link href="assets/css/metro.css" rel="stylesheet" />
   <link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
   <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
   <link href="assets/css/style.css" rel="stylesheet" />
   <link href="assets/css/style_responsive.css" rel="stylesheet" />
   <link href="assets/css/style_default.css" rel="stylesheet" id="style_color" />
   <link rel="stylesheet" type="text/css" href="assets/gritter/css/jquery.gritter.css" />
   <link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />
   <link rel="stylesheet" type="text/css" href="assets/chosen-bootstrap/chosen/chosen.css" />
   <link rel="stylesheet" type="text/css" href="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
   <link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css" />
   <link rel="stylesheet" type="text/css" href="assets/bootstrap-timepicker/compiled/timepicker.css" />
   <link rel="stylesheet" type="text/css" href="assets/bootstrap-colorpicker/css/colorpicker.css" />
   <link rel="stylesheet" href="assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" />
   <link rel="stylesheet" href="assets/data-tables/DT_bootstrap.css" />
   <link rel="stylesheet" type="text/css" href="assets/bootstrap-daterangepicker/daterangepicker.css" />
   <link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />
   <link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
   <!-- BEGIN HEADER -->
   <div class="header navbar navbar-inverse navbar-fixed-top">
      <!-- BEGIN TOP NAVIGATION BAR -->
      <div class="navbar-inner">
         <div class="container-fluid">
            <!-- BEGIN LOGO -->
            <a class="brand" href="index.html">
            <img src="assets/img/logo.png" alt="logo" />
            </a>
            <!-- END LOGO -->
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
            <img src="assets/img/menu-toggler.png" alt="" />
            </a>          
            <!-- END RESPONSIVE MENU TOGGLER -->            
            <!-- BEGIN TOP NAVIGATION MENU -->              
            <ul class="nav pull-right">
               <!-- BEGIN NOTIFICATION DROPDOWN -->   
               <li class="dropdown" id="header_notification_bar">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="icon-warning-sign"></i>
                  <span class="badge">6</span>
                  </a>
                  <ul class="dropdown-menu extended notification">
                     <li>
                        <p>You have 14 new notifications</p>
                     </li>
                     <li>
                        <a href="#">
                        <span class="label label-success"><i class="icon-plus"></i></span>
                        New user registered. 
                        <span class="time">Just now</span>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                        <span class="label label-important"><i class="icon-bolt"></i></span>
                        Server #12 overloaded. 
                        <span class="time">15 mins</span>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                        <span class="label label-warning"><i class="icon-bell"></i></span>
                        Server #2 not respoding.
                        <span class="time">22 mins</span>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                        <span class="label label-info"><i class="icon-bullhorn"></i></span>
                        Application error.
                        <span class="time">40 mins</span>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                        <span class="label label-important"><i class="icon-bolt"></i></span>
                        Database overloaded 68%. 
                        <span class="time">2 hrs</span>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                        <span class="label label-important"><i class="icon-bolt"></i></span>
                        2 user IP blocked.
                        <span class="time">5 hrs</span>
                        </a>
                     </li>
                     <li class="external">
                        <a href="#">See all notifications <i class="m-icon-swapright"></i></a>
                     </li>
                  </ul>
               </li>
               <!-- END NOTIFICATION DROPDOWN -->
               <!-- BEGIN INBOX DROPDOWN -->
               <li class="dropdown" id="header_inbox_bar">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="icon-envelope-alt"></i>
                  <span class="badge">5</span>
                  </a>
                  <ul class="dropdown-menu extended inbox">
                     <li>
                        <p>You have 12 new messages</p>
                     </li>
                     <li>
                        <a href="#">
                        <span class="photo"><img src="./assets/img/avatar2.jpg" alt="" /></span>
                        <span class="subject">
                        <span class="from">Lisa Wong</span>
                        <span class="time">Just Now</span>
                        </span>
                        <span class="message">
                        Vivamus sed auctor nibh congue nibh. auctor nibh
                        auctor nibh...
                        </span>  
                        </a>
                     </li>
                     <li>
                        <a href="#">
                        <span class="photo"><img src="./assets/img/avatar3.jpg" alt="" /></span>
                        <span class="subject">
                        <span class="from">Richard Doe</span>
                        <span class="time">16 mins</span>
                        </span>
                        <span class="message">
                        Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh
                        auctor nibh...
                        </span>  
                        </a>
                     </li>
                     <li>
                        <a href="#">
                        <span class="photo"><img src="./assets/img/avatar1.jpg" alt="" /></span>
                        <span class="subject">
                        <span class="from">Bob Nilson</span>
                        <span class="time">2 hrs</span>
                        </span>
                        <span class="message">
                        Vivamus sed nibh auctor nibh congue nibh. auctor nibh
                        auctor nibh...
                        </span>  
                        </a>
                     </li>
                     <li class="external">
                        <a href="#">See all messages <i class="m-icon-swapright"></i></a>
                     </li>
                  </ul>
               </li>
               <!-- END INBOX DROPDOWN -->
               <!-- BEGIN TODO DROPDOWN -->
               <li class="dropdown" id="header_task_bar">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="icon-tasks"></i>
                  <span class="badge">5</span>
                  </a>
                  <ul class="dropdown-menu extended tasks">
                     <li>
                        <p>You have 12 pending tasks</p>
                     </li>
                     <li>
                        <a href="#">
                        <span class="task">
                        <span class="desc">New release v1.2</span>
                        <span class="percent">30%</span>
                        </span>
                        <span class="progress progress-success ">
                        <span style="width: 30%;" class="bar"></span>
                        </span>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                        <span class="task">
                        <span class="desc">Application deployment</span>
                        <span class="percent">65%</span>
                        </span>
                        <span class="progress progress-danger progress-striped active">
                        <span style="width: 65%;" class="bar"></span>
                        </span>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                        <span class="task">
                        <span class="desc">Mobile app release</span>
                        <span class="percent">98%</span>
                        </span>
                        <span class="progress progress-success">
                        <span style="width: 98%;" class="bar"></span>
                        </span>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                        <span class="task">
                        <span class="desc">Database migration</span>
                        <span class="percent">10%</span>
                        </span>
                        <span class="progress progress-warning progress-striped">
                        <span style="width: 10%;" class="bar"></span>
                        </span>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                        <span class="task">
                        <span class="desc">Web server upgrade</span>
                        <span class="percent">58%</span>
                        </span>
                        <span class="progress progress-info">
                        <span style="width: 58%;" class="bar"></span>
                        </span>
                        </a>
                     </li>
                     <li>
                        <a href="#">
                        <span class="task">
                        <span class="desc">Mobile development</span>
                        <span class="percent">85%</span>
                        </span>
                        <span class="progress progress-success">
                        <span style="width: 85%;" class="bar"></span>
                        </span>
                        </a>
                     </li>
                     <li class="external">
                        <a href="#">See all tasks <i class="m-icon-swapright"></i></a>
                     </li>
                  </ul>
               </li>
               <!-- END TODO DROPDOWN -->
               <!-- BEGIN USER LOGIN DROPDOWN -->
               <li class="dropdown user">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img alt="" src="assets/img/avatar1_small.jpg" />
                  <span class="username">Bob Nilson</span>
                  <i class="icon-angle-down"></i>
                  </a>
                  <ul class="dropdown-menu">
                     <li><a href="extra_profile.html"><i class="icon-user"></i> My Profile</a></li>
                     <li><a href="calendar.html"><i class="icon-calendar"></i> My Calendar</a></li>
                     <li><a href="#"><i class="icon-tasks"></i> My Tasks</a></li>
                     <li class="divider"></li>
                     <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
                  </ul>
               </li>
               <!-- END USER LOGIN DROPDOWN -->
            </ul>
            <!-- END TOP NAVIGATION MENU --> 
         </div>
      </div>
      <!-- END TOP NAVIGATION BAR -->
   </div>
   <!-- END HEADER -->
   <!-- BEGIN CONTAINER -->
   <div class="page-container row-fluid">
      <!-- BEGIN SIDEBAR -->
      <div class="page-sidebar nav-collapse collapse">
         <!-- BEGIN SIDEBAR MENU -->         
         <ul>
            <li>
               <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
               <div class="sidebar-toggler hidden-phone"></div>
               <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            </li>
            <li>
               <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
               <form class="sidebar-search">
                  <div class="input-box">
                     <a href="javascript:;" class="remove"></a>
                     <input type="text" placeholder="Search..." />            
                     <input type="button" class="submit" value=" " />
                  </div>
               </form>
               <!-- END RESPONSIVE QUICK SEARCH FORM -->
            </li>
            <li class="start ">
               <a href="index.html">
               <i class="icon-home"></i> 
               <span class="title">Dashboard</span>
               </a>
            </li>
            <li class="has-sub ">
               <a href="javascript:;">
               <i class="icon-bookmark-empty"></i> 
               <span class="title">UI Features</span>
               <span class="arrow "></span>
               </a>
               <ul class="sub">
                  <li ><a href="ui_general.html">General</a></li>
                  <li ><a href="ui_buttons.html">Buttons</a></li>
                  <li ><a href="ui_tabs_accordions.html">Tabs & Accordions</a></li>
                  <li ><a href="ui_sliders.html">Sliders</a></li>
                  <li ><a href="ui_tiles.html">Tiles</a></li>
                  <li ><a href="ui_typography.html">Typography</a></li>
                  <li ><a href="ui_tree.html">Tree View</a></li>
                  <li ><a href="ui_nestable.html">Nestable List</a></li>
               </ul>
            </li>
            <li class="active has-sub ">
               <a href="javascript:;">
               <i class="icon-table"></i> 
               <span class="title">Form Stuff</span>
               <span class="selected"></span>
               <span class="arrow open"></span>
               </a>
               <ul class="sub">
                  <li ><a href="form_layout.html">Form Layouts</a></li>
                  <li ><a href="form_samples.html">Advance Form Samples</a></li>
                  <li ><a href="form_component.html">Form Components</a></li>
                  <li class="active"><a href="form_wizard.html">Form Wizard</a></li>
                  <li ><a href="form_validation.html">Form Validation</a></li>
                  <li ><a href="form_fileupload.html">Multiple File Upload</a></li>
                  <li ><a href="form_dropzone.html">Dropzone File Upload</a></li>
               </ul>
            </li>
            <li class="has-sub ">
               <a href="javascript:;">
               <i class="icon-th-list"></i> 
               <span class="title">Data Tables</span>
               <span class="arrow "></span>
               </a>
               <ul class="sub">
                  <li ><a href="table_basic.html">Basic Tables</a></li>
                  <li ><a href="table_managed.html">Managed Tables</a></li>
                  <li ><a href="table_editable.html">Editable Tables</a></li>
               </ul>
            </li>
            <li class="has-sub ">
               <a href="javascript:;">
               <i class="icon-th-list"></i> 
               <span class="title">Portlets</span>
               <span class="arrow "></span>
               </a>
               <ul class="sub">
                  <li ><a href="portlet_general.html">General Portlets</a></li>
                  <li ><a href="portlet_draggable.html">Draggable Portlets</a></li>
               </ul>
            </li>
            <li class="has-sub ">
               <a href="javascript:;">
               <i class="icon-map-marker"></i> 
               <span class="title">Maps</span>
               <span class="arrow "></span>
               </a>
               <ul class="sub">
                  <li ><a href="maps_google.html">Google Maps</a></li>
                  <li ><a href="maps_vector.html">Vector Maps</a></li>
               </ul>
            </li>
            <li class="">
               <a href="charts.html">
               <i class="icon-bar-chart"></i> 
               <span class="title">Visual Charts</span>
               </a>
            </li>
            <li class="">
               <a href="calendar.html">
               <i class="icon-calendar"></i> 
               <span class="title">Calendar</span>
               </a>
            </li>
            <li class="">
               <a href="gallery.html">
               <i class="icon-camera"></i> 
               <span class="title">Gallery</span>
               </a>
            </li>
            <li class="has-sub ">
               <a href="javascript:;">
               <i class="icon-briefcase"></i> 
               <span class="title">Extra</span>
               <span class="arrow "></span>
               </a>
               <ul class="sub">
                  <li ><a href="extra_profile.html">User Profile</a></li>
                  <li ><a href="extra_faq.html">FAQ</a></li>
                  <li ><a href="extra_search.html">Search Results</a></li>
                  <li ><a href="extra_invoice.html">Invoice</a></li>
                  <li ><a href="extra_pricing_table.html">Pricing Tables</a></li>
                  <li ><a href="extra_404.html">404 Page</a></li>
                  <li ><a href="extra_500.html">500 Page</a></li>
                  <li ><a href="extra_blank.html">Blank Page</a></li>
                  <li ><a href="extra_full_width.html">Full Width Page</a></li>
               </ul>
            </li>
            <li class="">
               <a href="login.html">
               <i class="icon-user"></i> 
               <span class="title">Login Page</span>
               </a>
            </li>
         </ul>
         <!-- END SIDEBAR MENU -->
      </div>
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE -->  
      <div class="page-content">
         <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
         <div id="portlet-config" class="modal hide">
            <div class="modal-header">
               <button data-dismiss="modal" class="close" type="button"></button>
               <h3>portlet Settings</h3>
            </div>
            <div class="modal-body">
               <p>Here will be a configuration form</p>
            </div>
         </div>
         <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN STYLE CUSTOMIZER -->
                  <div class="color-panel hidden-phone">
                     <div class="color-mode-icons icon-color"></div>
                     <div class="color-mode-icons icon-color-close"></div>
                     <div class="color-mode">
                        <p>THEME COLOR</p>
                        <ul class="inline">
                           <li class="color-black current color-default" data-style="default"></li>
                           <li class="color-blue" data-style="blue"></li>
                           <li class="color-brown" data-style="brown"></li>
                           <li class="color-purple" data-style="purple"></li>
                           <li class="color-white color-light" data-style="light"></li>
                        </ul>
                        <label class="hidden-phone">
                        <input type="checkbox" class="header" checked value="" />
                        <span class="color-mode-label">Fixed Header</span>
                        </label>                    
                     </div>
                  </div>
                  <!-- END BEGIN STYLE CUSTOMIZER -->   
                  <h3 class="page-title">
                     Form Wizard
                     <small>form wizard sample</small>
                  </h3>
                  <ul class="breadcrumb">
                     <li>
                        <i class="icon-home"></i>
                        <a href="index.html">Home</a> 
                        <span class="icon-angle-right"></span>
                     </li>
                     <li>
                        <a href="#">Form Stuff</a>
                        <span class="icon-angle-right"></span>
                     </li>
                     <li><a href="#">Form Wizard</a></li>
                  </ul>
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
               <div class="span12">
                  <div class="portlet box blue" id="form_wizard_1">
                     <div class="portlet-title">
                        <h4>
                           <i class="icon-reorder"></i> Form Wizard - <span class="step-title">Step 1 of 4</span>
                        </h4>
                        <div class="tools hidden-phone">
                           <a href="javascript:;" class="collapse"></a>
                           <a href="#portlet-config" data-toggle="modal" class="config"></a>
                           <a href="javascript:;" class="reload"></a>
                           <a href="javascript:;" class="remove"></a>
                        </div>
                     </div>
                     <div class="portlet-body form">
                        <form action="#" class="form-horizontal">
                           <div class="form-wizard">
                              <div class="navbar steps">
                                 <div class="navbar-inner">
                                    <ul class="row-fluid">
                                       <li class="span3">
                                          <a href="#tab1" data-toggle="tab" class="step active">
                                          <span class="number">1</span>
                                          <span class="desc"><i class="icon-ok"></i> Student Details</span>   
                                          </a>
                                       </li>
                                       <li class="span3">
                                          <a href="#tab2" data-toggle="tab" class="step">
                                          <span class="number">2</span>
                                          <span class="desc"><i class="icon-ok"></i> Parent Details</span>   
                                          </a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                              <div id="bar" class="progress progress-success progress-striped">
                                 <div class="bar"></div>
                              </div>
                              <div class="tab-content">
                                 <div class="tab-pane active" id="tab1">
                                    <h3 class="block">Students Personal Details</h3>
                                    <div class="control-group">
                                       <label class="control-label">Name </label>
                                       <div class="controls">
                                          <?php echo $form->textField($model,'S_fname',array('size'=>30,'maxlength'=>30))." ".$form->labelEx($model,'S_mname').$form->textField($model,'S_mname',array('size'=>30,'maxlength'=>30))." ".$form->textField($model,'S_lname',array('size'=>30,'maxlength'=>30)); ?>
                                          <span class="help-inline">Provide Students Full Name </span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Password</label>
                                       <div class="controls">
                                          <input type="password" class="span6 m-wrap" />
                                          <span class="help-inline">Provide your username</span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Confirm Password</label>
                                       <div class="controls">
                                          <input type="password" class="span6 m-wrap" />
                                          <span class="help-inline">Confirm your password</span>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tab-pane" id="tab2">
                                    <h3 class="block">Provide your profile details</h3>
                                    <div class="control-group">
                                       <label class="control-label">Fullname</label>
                                       <div class="controls">
                                          <input type="text" class="span6 m-wrap" />
                                          <span class="help-inline">Provide your fullname</span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Email</label>
                                       <div class="controls">
                                          <input type="text" class="span6 m-wrap" />
                                          <span class="help-inline">Provide your email address</span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Phone Number</label>
                                       <div class="controls">
                                          <input type="text" class="span6 m-wrap" />
                                          <span class="help-inline">Provide your phone number</span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Gender</label>
                                       <div class="controls">
                                          <label class="radio">
                                          <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked />
                                          Male
                                          </label>
                                          <div class="clearfix"></div>
                                          <label class="radio">
                                          <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" />
                                          Female
                                          </label>  
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Address</label>
                                       <div class="controls">
                                          <input type="text" class="span6 m-wrap" />
                                          <span class="help-inline">Provide your street address</span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">City/Town</label>
                                       <div class="controls">
                                          <input type="text" class="span6 m-wrap" />
                                          <span class="help-inline">Provide your city or town</span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Remarks</label>
                                       <div class="controls">
                                          <textarea class="span6 m-wrap" rows="3"></textarea>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tab-pane" id="tab3">
                                    <h3 class="block">Provide your billing and credit card details</h3>
                                    <div class="control-group">
                                       <label class="control-label">Card Holder Name</label>
                                       <div class="controls">
                                          <input type="text" class="span6 m-wrap" />
                                          <span class="help-inline"></span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Bank Name</label>
                                       <div class="controls">
                                          <input type="text" class="span6 m-wrap" />
                                          <span class="help-inline"></span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Debit/Credit Card Number</label>
                                       <div class="controls">
                                          <input type="text" class="span6 m-wrap" />
                                          <span class="help-inline"></span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">CVC</label>
                                       <div class="controls">
                                          <input type="text" placeholder="" class="m-wrap" />
                                          <span class="help-inline"></span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Expiration Date(MM/YYYY)</label>
                                       <div class="controls">
                                          <input type="text" placeholder="MM" class="m-wrap small" />
                                          <input type="text" placeholder="YYYY" class="m-wrap small" />
                                          <span class="help-inline"></span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Payment Options</label>
                                       <div class="controls">
                                          <label class="checkbox line">
                                          <input type="checkbox" value="" /> Auto-Pay with this Credit Card
                                          </label>
                                          <label class="checkbox line">
                                          <input type="checkbox" value="" /> Email me monthly billing
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tab-pane" id="tab4">
                                    <h3 class="block">Confirm your account</h3>
                                    <div class="control-group">
                                       <label class="control-label">Fullname:</label>
                                       <div class="controls">
                                          <span class="text">Bob Nilson</span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Email:</label>
                                       <div class="controls">
                                          <span class="text">bob@nilson.com</span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Phone:</label>
                                       <div class="controls">
                                          <span class="text">101234023223</span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label">Credit Card Number:</label>
                                       <div class="controls">
                                          <span class="text">*************1233</span>
                                       </div>
                                    </div>
                                    <div class="control-group">
                                       <label class="control-label"></label>
                                       <div class="controls">
                                          <label class="checkbox">
                                          <input type="checkbox" value="" /> I confirm my account
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="form-actions clearfix">
                                 <a href="javascript:;" class="btn button-previous">
                                 <i class="m-icon-swapleft"></i> Back 
                                 </a>
                                 <a href="javascript:;" class="btn blue button-next">
                                 Continue <i class="m-icon-swapright m-icon-white"></i>
                                 </a>
                                 <a href="javascript:;" class="btn green button-submit">
                                 Submit <i class="m-icon-swapright m-icon-white"></i>
                                 </a>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
            <!-- END PAGE CONTENT-->         
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->  
   </div>
   <!-- END CONTAINER -->
   <!-- BEGIN FOOTER -->
   <div class="footer">
      2013 &copy; Metronic by keenthemes.
      <div class="span pull-right">
         <span class="go-top"><i class="icon-angle-up"></i></span>
      </div>
   </div>
   <!-- END FOOTER -->
   <!-- BEGIN JAVASCRIPTS -->    
   <!-- Load javascripts at bottom, this will reduce page load time -->
   <script src="assets/js/jquery-1.8.3.min.js"></script>    
   <script src="assets/breakpoints/breakpoints.js"></script>       
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   <script src="assets/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
   <script src="assets/js/jquery.blockui.js"></script>
   <script src="assets/js/jquery.cookie.js"></script>
   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="assets/js/excanvas.js"></script>
   <script src="assets/js/respond.js"></script>
   <![endif]-->
   <script type="text/javascript" src="assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
   <script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
   <script type="text/javascript" src="assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script> 
   <script type="text/javascript" src="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
   <script type="text/javascript" src="assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
   <script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
   <script type="text/javascript" src="assets/bootstrap-daterangepicker/date.js"></script>
   <script type="text/javascript" src="assets/bootstrap-daterangepicker/daterangepicker.js"></script> 
   <script type="text/javascript" src="assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>  
   <script type="text/javascript" src="assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
   <script src="assets/js/app.js"></script>     
   <script>
      jQuery(document).ready(function() {       
         // initiate layout and plugins
         App.init();
      });
   </script>
   <!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->
</html>
