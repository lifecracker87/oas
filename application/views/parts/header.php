<?php $this->load->helper('url');?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <meta name="description" content=""/>
        <meta name="viewport" content="width=device-width"/>

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <!--base css styles-->
        <link rel="stylesheet" href="<?php echo base_url();?>public/assets/bootstrap/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="<?php echo base_url();?>public/assets/bootstrap/css/bootstrap-responsive.min.css"/>
        <link rel="stylesheet" href="<?php echo base_url();?>public/assets/font-awesome/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="<?php echo base_url();?>public/assets/flaty/normalize.css"/>
        <!--Theme css styles-->
        <link rel="stylesheet" href="<?php echo base_url();?>public/assets/flaty/flaty.css"/>
        <link rel="stylesheet" href="<?php echo base_url();?>public/assets/flaty/flaty-responsive.css"/>

        <link rel="shortcut icon" href="favicon.ico"/>
        <!--Scripts below-->
        <script src="<?php echo base_url();?>public/js/jquery-1.11.1.min.js"></script>
        <script src="<?php echo base_url();?>public/assets/flaty/modernizr-2.6.2.min.js"></script>
        <script src="<?php echo base_url();?>public/assets/flaty/jquery.nicescroll.min.js"></script>
        <script src="<?php echo base_url();?>public/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>public/assets/flaty/flaty.js"></script>
        <script>
            $(document).ready(function(){
                backForward();
            });
        </script>


        <title>Member's Page</title>
    </head>
    <body class="body">

        <div id="theme-setting" style="z-index:999;">
            <a href="#"><i class="icon-gears icon-2x"></i></a>
            <ul>
                <li>
                    <span>Skin</span>
                    <ul class="colors" data-target="body" data-prefix="skin-">
                        <li class="active"><a class="blue" href="#"></a></li>
                        <li><a class="red" href="#"></a></li>
                        <li><a class="green" href="#"></a></li>
                        <li><a class="orange" href="#"></a></li>
                        <li><a class="yellow" href="#"></a></li>
                        <li><a class="pink" href="#"></a></li>
                        <li><a class="magenta" href="#"></a></li>
                        <li><a class="gray" href="#"></a></li>
                        <li><a class="black" href="#"></a></li>
                    </ul>
                </li>
                <li>
                    <span>Navbar</span>
                    <ul class="colors" data-target="#navbar" data-prefix="navbar-">
                        <li class="active"><a class="blue" href="#"></a></li>
                        <li><a class="red" href="#"></a></li>
                        <li><a class="green" href="#"></a></li>
                        <li><a class="orange" href="#"></a></li>
                        <li><a class="yellow" href="#"></a></li>
                        <li><a class="pink" href="#"></a></li>
                        <li><a class="magenta" href="#"></a></li>
                        <li><a class="gray" href="#"></a></li>
                        <li><a class="black" href="#"></a></li>
                    </ul>
                </li>
                <li>
                    <span>Sidebar</span>
                    <ul class="colors" data-target="#main-container" data-prefix="sidebar-">
                        <li class="active"><a class="blue" href="#"></a></li>
                        <li><a class="red" href="#"></a></li>
                        <li><a class="green" href="#"></a></li>
                        <li><a class="orange" href="#"></a></li>
                        <li><a class="yellow" href="#"></a></li>
                        <li><a class="pink" href="#"></a></li>
                        <li><a class="magenta" href="#"></a></li>
                        <li><a class="gray" href="#"></a></li>
                        <li><a class="black" href="#"></a></li>
                    </ul>
                </li>
                <li>
                    <span></span>
                    <a data-target="navbar" href="#"><i class="icon-check-empty"></i> Fixed Navbar</a>
                    <a class="pull-right visible-desktop" data-target="sidebar" href="#"><i class="icon-check-empty"></i> Fixed Sidebar</a>
                </li>
            </ul>
        </div>
        <!-- END Theme Setting -->

        <!-- BEGIN Navbar -->
        <div id="navbar" class="navbar">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <!-- BEGIN Brand -->
                    <a href="/main/dashboard1" class="brand" data-ajax="ajax">
                        <small>
                            <i class="icon-home"></i>	
                            प्रधानमन्त्री तथा मन्त्रिपरिषद्को कार्यालय
                        </small>
                    </a>
                    <!-- END Brand -->

                    <!-- BEGIN Responsive Sidebar Collapse -->
                    <a href="#" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
                        <i class="icon-reorder"></i>
                    </a>
                    <!-- END Responsive Sidebar Collapse -->
                    <!-- BEGIN Navbar Buttons -->
                    <ul class="nav flaty-nav pull-left">
                        <li><div id="progress"></div></li>
                        <li><div id="div_error"></div></li>
                    </ul>
                    <ul class="nav flaty-nav pull-right">

                        <!-- BEGIN Button Messages -->
                        <li class="hidden-phone">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#" 
                               onclick="javascript:navigates('../leftmenu/fileindex.php?linkid=2021&stat=1&filter=NEW', 'scrollcontent');">
                                <i class="icon-envelope"></i>
                                <span class="badge badge-success" id="cnt"></span>
                            </a>

                            <!-- BEGIN Messages Dropdown -->
                            <!--<ul class="dropdown-navbar dropdown-menu">
                                <li class="nav-header">
                                    <i class="icon-comments"></i>
                                    3 Messages
                                </li>
        
                                <li class="msg">
                                    <a href="#">
                                        <img src="assets/avatar/avatar3.jpg" alt="Raju's Avatar" />
                                        <div>
                                            <span class="msg-title">Raju</span>
                                            <span class="msg-time">
                                                <i class="icon-time"></i>
                                                <span>a moment ago</span>
                                            </span>
                                        </div>
                                        <p>this is just a test message just for testing it i hope it works</p>
                                    </a>
                                </li>
        
                                <li class="msg">
                                    <a href="#">
                                        <img src="assets/avatar/avatar4.jpg" alt="Arati's Avatar" />
                                        <div>
                                            <span class="msg-title">Arati</span>
                                            <span class="msg-time">
                                                <i class="icon-time"></i>
                                                <span>2 Days ago</span>
                                            </span>
                                        </div>
                                        <p>this is just a test message just for testing it i hope it works ...</p>
                                    </a>
                                </li>
        
                                <li class="msg">
                                    <a href="#">
                                        <img src="assets/avatar/avatar5.jpg" alt="John's Avatar" />
                                        <div>
                                            <span class="msg-title">Subash</span>
                                            <span class="msg-time">
                                                <i class="icon-time"></i>
                                                <span>8:24 PM</span>
                                            </span>
                                        </div>
                                        <p>this is just a test message just for testing it i hope it works ...</p>
                                    </a>
                                </li>
        
                                <li class="more">
                                    <a href="#">See all messages</a>
                                </li>
                            </ul>
                            <!-- END Notifications Dropdown -->
                        </li>
                        <!-- END Button Messages -->



                        <!-- ====================================================================================================== -->



                        <!-- BEGIN Button User -->
                        <li class="user-profile">
                            <a data-toggle="dropdown" href="#" class="user-menu dropdown-toggle">
                                <span class="hidden-phone" id="user_info">
                                    <?php //echo $_SESSION['username']; ?>
                                </span>
                                <i class="icon-caret-down"></i>
                            </a>

                            <!-- BEGIN User Dropdown -->
                            <ul class="dropdown-menu dropdown-navbar" id="user_menu">

                                <li>
                                    <a href="#" onclick="navigates('../leftmenu/fileindex.php?linkid=101', 'scrollcontent');">
                                        <i class="icon-cog"></i>
                                        My Profile
                                    </a>
                                </li>

                                <li>
                                    <a href="javascript:navigates1('../leftmenu/fileindex.php?linkid=10101','scrollcontent');">
                                        <i class="icon-user"></i>
                                        Edit Profile
                                    </a>
                                </li>

                                <li>
                                    <a href="#" onclick="navigates('../leftmenu/fileindex.php?linkid=102', 'scrollcontent');">
                                        <i class="icon-edit"></i> <!--icon-question-->
                                        Change Password
                                    </a>
                                </li>
                                <li>
                                    <a href="#" onclick="navigates('../leftmenu/fileindex.php?linkid=10201', 'scrollcontent');">
                                        <i class="icon-edit"></i>
                                        Change Code
                                    </a>
                                </li>

                                <li class="divider visible-phone"></li>

                                <!--<li class="visible-phone">
                                    <a href="#">
                                        <i class="icon-tasks"></i>
                                        Tasks
                                        <span class="badge badge-warning">4</span>
                                    </a>
                                </li>
                                <li class="visible-phone">
                                    <a href="#">
                                        <i class="icon-bell-alt"></i>
                                        Notifications
                                        <span class="badge badge-important">8</span>
                                    </a>
                                </li>
                                <li class="visible-phone">
                                    <a href="#">
                                        <i class="icon-envelope"></i>
                                        Messages
                                        <span class="badge badge-success">5</span>
                                    </a>
                                </li>-->

                                <li class="divider"></li>

                                <li>
                                    <a href="staffhome.php?action=<?php echo md5('logout');?>" >
                                        <i class="icon-off"></i>
                                        Logout
                                    </a>
                                </li>
                            </ul>


                        </li>
                        <!-- END Button User -->
                        <!-- ====================================================================================================== -->

                        <li>
                            <span style="color:white"><?php //echo $utils->ConvertToUTF8($curdate); ?></span>
                        </li>

                    </ul>
                    <!-- END Navbar Buttons -->
                </div><!--/.container-fluid-->
            </div><!--/.navbar-inner-->
        </div>
        <!-- END Navbar -->





        <!-- BEGIN Container -->
        <div class="container-fluid" id="main-container">
            <!-- BEGIN Sidebar -->
            <div id="sidebar" class="nav-collapse">
                <!-- BEGIN Navlist -->
                <ul class="nav nav-list">


                    <li>
                        <a href="/main/dashboard" data-ajax="ajax">
                            <i class="icon-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-spinner"></i>
                            <span>र्दर्ता पत्र व्यवस्थापन</span>
                            <b class="arrow icon-angle-right"></b>
                        </a>

                        <!-- BEGIN Submenu -->
                        <ul class="submenu">
                            <li><a href="javascript:navigates('../leftmenu/fileindex.php?linkid=2021&stat=1&menu=1&filter=NEW','scrollcontent');">प्राप्त पत्र </a></li>
                            <li><a href="javascript:navigates1('../leftmenu/fileindex.php?linkid=2021&stat=1&filter=CURRENT','scrollcontent');">कारवाहीमा रहेका पत्र</a></li>
                            <li><a href="javascript:navigates('../leftmenu/fileindex.php?linkid=2021&nextdiv=1&filter=PANDING','scrollcontent');"> तामेली</a></li>
                            <li><a href="javascript:navigates('../leftmenu/fileindex.php?linkid=202101&stat=1&filter=FORWARD','scrollcontent');">दर्ता फरवारडेड</a></li>
                            <li><a href="javascript:navigates('../leftmenu/fileindex.php?linkid=204&stat=1','scrollcontent');">दर्ता फाइनलाइज</a></li>
                        </ul>
                        <!-- END Submenu -->
                    </li>

                    <li>
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-edit"></i>
                            <span>टिप्पणी</span>
                            <b class="arrow icon-angle-right"></b>
                        </a>

                        <!-- BEGIN Submenu -->
                        <ul class="submenu">
                            <li><a  href="javascript:navigates('../leftmenu/fileindex.php?linkid=301&stat=1&menu=301','scrollcontent');">प्रविष्टि</a></li>	     
                            <li><a href="javascript:navigates('../leftmenu/fileindex.php?linkid=302&stat=1&menu=302','scrollcontent');">हेर्ने</a></li>
                            <li><a href="javascript:navigates('../leftmenu/fileindex.php?linkid=303&stat=1','scrollcontent');">फाइनलाइज</a></li>
                            <li><a href="javascript:navigates('../leftmenu/fileindex.php?linkid=306101&stat=1','scrollcontent');">खोज्ने</a></li>
                        </ul>
                        <!-- END Submenu -->
                    </li>

                    <li>
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-picture"></i>
                            <span>आन्तरीक चिट्ठीपत्र</span>
                            <b class="arrow icon-angle-right"></b>
                        </a>

                        <!-- BEGIN Submenu -->
                        <ul class="submenu">
                            <li> <a  href="javascript:navigates('../leftmenu/fileindex.php?linkid=601&stat=1&menu=601','scrollcontent');">तयार पार्ने</a></li>
                            <li><a href="javascript:navigates('../leftmenu/fileindex.php?linkid=202&stat=1&menu=602','scrollcontent');"> प्राप्त पत्र </a></li>
                            <li><a  href="javascript:navigates('../leftmenu/fileindex.php?linkid=602&filter=draft','scrollcontent');">ड्राफ्ट पत्र</a></li>
                            <li> <a  href="javascript:navigates('../leftmenu/fileindex.php?linkid=602&filter=sent','scrollcontent');">पठाएका पत्र</a></li>
                            <li><a href="javascript:navigates('../leftmenu/fileindex.php?linkid=603&stat=1','scrollcontent');">फाइनलाइज</a>    </li>           
                        </ul>
                        <!-- END Submenu -->
                    </li>


                    <li>
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-list"></i>
                            <span>Share</span>
                            <b class="arrow icon-angle-right"></b>
                        </a>

                        <!-- BEGIN Submenu -->
                        <ul class="submenu">
                            <li><a  href="javascript:navigates('../leftmenu/fileindex.php?linkid=701&stat=1&menu=701','scrollcontent');"> तयार पार्ने</a></li>
                            <li><a href="javascript:navigates('../leftmenu/fileindex.php?linkid=702&stat=1&menu=702','scrollcontent');"> हेर्ने </a></li>                       
                        </ul>
                        <!-- END Submenu -->
                    </li>

                    <li>
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-list-alt"></i>
                            <span>दर्ता प्रविष्टि</span>
                            <b class="arrow icon-angle-right"></b>
                        </a>


                        <!-- BEGIN Submenu -->
                        <ul class="submenu">
                            <li><a href="javascript:navigates('../leftmenu/fileindex.php?linkid=401&stat=1&setfocus=txt_refno','scrollcontent');"> पत्र दर्ता </a></li>
                            <li><a href="javascript:navigates('../leftmenu/fileindex.php?linkid=402&stat=1','scrollcontent');">दर्ता भएका पत्रहरु </a></li>
                            <li><a href="javascript:navigates('../leftmenu/fileindex.php?linkid=406&stat=1','scrollcontent');">शाखामा पठाएका पत्रहरु</a></li>
                            <li><a href="javascript:navigates('../leftmenu/fileindex.php?linkid=407&stat=1','scrollcontent');">दर्ता भएका पत्रहरु खोज्ने</a></li>                       
                        </ul>
                        <!-- END Submenu -->

                    </li>

                    <li>
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-file"></i>
                            <span>चलानी प्रविष्टि</span>
                            <b class="arrow icon-angle-right"></b>
                        </a>

                        <!-- BEGIN Submenu -->
                        <ul class="submenu">
                            <li><a href="javascript:navigates('../leftmenu/fileindex.php?linkid=501&stat=1','scrollcontent');">चलानी दर्ता</a></li>
                            <li><a href="javascript:navigates('../leftmenu/fileindex.php?linkid=503&stat=1','scrollcontent');"> चलानी भएका पत्रहरु</a></li>
                            <li><a href="javascript:navigates('../leftmenu/fileindex.php?linkid=506&stat=1&filter=finalized','scrollcontent');">चलानी फाइनलाइज</a></li>
                            <li><a href="javascript:navigates('../leftmenu/fileindex.php?linkid=507&stat=1','scrollcontent');">चलानी पत्रहरु खोज्ने</a></li>
                        </ul>
                        <!-- END Submenu -->
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-search"></i>
                            <span>पत्र खोज्न</span>
                            <b class="arrow icon-angle-right"></b>
                        </a>

                        <!-- BEGIN Submenu -->
                        <ul class="submenu">
                            <li><a href="javascript:navigates('../leftmenu/fileindex.php?linkid=407&stat=1','scrollcontent');">दर्ता </a></li>
                            <li><a href="javascript:navigates('../leftmenu/fileindex.php?linkid=507&stat=1','scrollcontent');">चलानी </a></li>
                        </ul>
                        <!-- END Submenu -->
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-bar-chart"></i>
                            <span>प्रतिबेदन</span>
                            <b class="arrow icon-angle-right"></b>
                        </a>

                        <!-- BEGIN Submenu -->
                        <ul class="submenu">
                            <li><a href="javascript:navigates('../leftmenu/fileindex.php?linkid=8011&stat=1','scrollcontent');">पत्र 22</a></li>
                            <li><a href="javascript:navigates('../leftmenu/fileindex.php?linkid=8012&stat=1','scrollcontent');">कार्य</a></li>	
                        </ul>
                        <!-- END Submenu -->
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-file"></i>
                            <span>विविध</span>
                            <b class="arrow icon-angle-right"></b>
                        </a>

                        <!-- BEGIN Submenu -->
                        <ul class="submenu">
                            <li><a href="javascript:navigates('../leftmenu/fileindex.php?linkid=9011&stat=1','scrollcontent');">कार्य सुपेरिवेक्षण</a></li>
                            <li><a href="../staffhome/togoadmin.php">Admin</a></li>
                        </ul>
                        <!-- END Submenu -->
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle">
                            <i class="icon-user"></i>
                            <span>युजर  व्यवस्थापन</span>
                            <b class="arrow icon-angle-right"></b>
                        </a>

                        <!-- BEGIN Submenu -->
                        <ul class="submenu">
                            <li><a href="javascript:navigates('../leftmenu/fileindex.php?linkid=101093&stat=1','scrollcontent');" data-request-type="ajax">View Problem</a></li>
                            <li><a href="javascript:navigates('../leftmenu/fileindex.php?linkid=9910101&stat=1','scrollcontent');">जनशक्ति व्यवस्थापन</a></li>
                            <li><a href="javascript:navigates('../leftmenu/fileindex.php?linkid=9910103&stat=1','scrollcontent');">कर्मचारीको नाम राख्ने</a></li>
                            <li><a href="javascript:navigates('../leftmenu/fileindex.php?linkid=9910102&stat=1','scrollcontent');">कर्मचारीहरुको नाम </a></li>
                            <li><a href="javascript:navigates('../leftmenu/fileindex.php?linkid=99101041&stat=1','scrollcontent');">संगठन स्वरुप</a></li>
                            <li><a href="javascript:navigates('../leftmenu/fileindex.php?linkid=987101&stat=1','scrollcontent');">पत्रको प्रापक परिबर्तन गर्ने</a></li>
                            <li><a href="javascript:navigates('../leftmenu/fileindex.php?linkid=987201&stat=1','scrollcontent');">पद हटाउने</a></li>
                            <li><a  href="javascript:navigates('../leftmenu/fileindex.php?linkid=10401&stat=1','scrollcontent');">Reset User Password </a></li>
                            <li><a  href="javascript:navigates('../leftmenu/fileindex.php?linkid=10402&stat=1','scrollcontent');">Reset User Code </a></li>
                        </ul>
                        <!-- END Submenu -->
                    </li>
                </ul>
                <!-- END Navlist -->

                <!-- BEGIN Sidebar Collapse Button -->
                <div id="sidebar-collapse" class="visible-desktop">
                    <i class="icon-double-angle-left"></i>
                </div>
                <!-- END Sidebar Collapse Button -->
            </div>
            <!-- END Sidebar -->

            <!-- BEGIN Content -->
            <div id="main-content">
                <!-- BEGIN Page Title -->
                <!--<div class="page-title">
                    <div>
                        <h1 id="pagetitle"><i class="icon-file-alt"></i> </h1>                 
                    </div>
                </div>
                <!-- END Page Title -->
                <!-- BEGIN Main Content -->
                <div class="row-fluid">

                    <div id="scrollcontent">