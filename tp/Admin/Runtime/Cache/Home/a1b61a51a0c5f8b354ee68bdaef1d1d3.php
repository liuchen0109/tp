<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">

<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Plugin Stylesheets first to ease overrides -->
<link rel="stylesheet" type="text/css" href="/tp/Public/b/plugins/colorpicker/colorpicker.css" media="screen">
<link rel="stylesheet" type="text/css" href="/tp/Public/b/custom-plugins/wizard/wizard.css" media="screen">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/tp/Public/b/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/tp/Public/b/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="/tp/Public/b/css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="/tp/Public/b/css/mws-style.css" media="screen">
<link rel="stylesheet" type="text/css" href="/tp/Public/b/css/icons/icol16.css" media="screen">
<link rel="stylesheet" type="text/css" href="/tp/Public/b/css/icons/icol32.css" media="screen">

<!-- Demo Stylesheet -->
<link rel="stylesheet" type="text/css" href="/tp/Public/b/css/demo.css" media="screen">

<!-- jQuery-UI Stylesheet -->
<link rel="stylesheet" type="text/css" href="/tp/Public/b/jui/css/jquery.ui.all.css" media="screen">
<link rel="stylesheet" type="text/css" href="/tp/Public/b/jui/jquery-ui.custom.css" media="screen">

<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="/tp/Public/b/css/mws-theme.css" media="screen">
<link rel="stylesheet" type="text/css" href="/tp/Public/b/css/themer.css" media="screen">
<link rel="stylesheet" type="text/css" href="/tp/Public/b/css/my.css" media="screen">


<title>用户管理</title>

</head>

<body>
	<!-- Header -->
	<div id="mws-header" class="clearfix">
    
    	<!-- Logo Container -->
    	<div id="mws-logo-container">
        
        	<!-- Logo Wrapper, images put within this wrapper will always be vertically centered -->
        	<div id="mws-logo-wrap">
            	<img src="/tp/Public/b/images/mws-logo.png" alt="mws admin">
			</div>
        </div>
        
        <!-- User Tools (notifications, logout, profile, change password) -->
        <div id="mws-user-tools" class="clearfix">
        
        	<!-- Notifications -->
        	<div id="mws-user-notif" class="mws-dropdown-menu">
            	<a href="#" data-toggle="dropdown" class="mws-dropdown-trigger"><i class="icon-exclamation-sign"></i></a>
                
                <!-- Unread notification count -->
                <span class="mws-dropdown-notif">35</span>
                
                <!-- Notifications dropdown -->
                <div class="mws-dropdown-box">
                	<div class="mws-dropdown-content">
                        <ul class="mws-notifications">
                        	<li class="read">
                            	<a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="read">
                            	<a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="mws-dropdown-viewall">
	                        <a href="#">View All Notifications</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Messages -->
            <div id="mws-user-message" class="mws-dropdown-menu">
            	<a href="#" data-toggle="dropdown" class="mws-dropdown-trigger"><i class="icon-envelope"></i></a>
                
                <!-- Unred messages count -->
                <span class="mws-dropdown-notif">35</span>
                
                <!-- Messages dropdown -->
                <div class="mws-dropdown-box">
                	<div class="mws-dropdown-content">
                        <ul class="mws-messages">
                        	<li class="read">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="read">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        	<li class="unread">
                            	<a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="mws-dropdown-viewall">
	                        <a href="#">View All Messages</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- User Information and functions section -->
            <div id="mws-user-info" class="mws-inset">
            
            	<!-- User Photo -->
            	<div id="mws-user-photo">
                	<img src="/b/example/profile.jpg" alt="User Photo">
                </div>
                
                <!-- Username and Functions -->
                <div id="mws-user-functions">
                    <div id="mws-username">
                        Hello
                    </div>
                    <ul>
                    	<li><a href="#">Profile</a></li>
                        <li><a href="#">Change Password</a></li>
                        <li><a href="/admins/login/logout">Logout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Start Main Wrapper -->
    <div id="mws-wrapper">
    
    	<!-- Necessary markup, do not remove -->
		<div id="mws-sidebar-stitch"></div>
		<div id="mws-sidebar-bg"></div>
        
        <!-- Sidebar Wrapper -->
        <div id="mws-sidebar">
        
            <!-- Hidden Nav Collapse Button -->
            <div id="mws-nav-collapse">
                <span></span>
                <span></span>
                <span></span>
            </div>
            
        	<!-- Searchbox -->
        	<div id="mws-searchbox" class="mws-inset">
            	<form action="typography.html">
                	<input type="text" class="mws-search-input" placeholder="Search...">
                    <button type="submit" class="mws-search-submit"><i class="icon-search"></i></button>
                </form>
            </div>
            
            <!-- Main Navigation -->
            <div id="mws-navigation">
                <ul>
                    <li>
                        <a href="#"><i class="icon-user"></i> 用户管理</a>
                        <ul class="closed">
                            <li><a href="/tp/Admin.php?m=home&c=index&a=add">用户添加</a></li>
                            <li><a href="/tp/Admin.php?m=home&c=index&a=index"">用户列表</a></li>
                        </ul>
                    </li>
                
                    <li>
                        <a href="#"><i class="icon-th-list"></i> 分类管理</a>
                        <ul class="closed">
                            <li><a href="/admins/cate/add">分类添加</a></li>
                            <li><a href="/admins/cate/list">分类列表</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </div>         
        </div>
        <div class="container">
          
 <div id="mws-container" class="clearfix">
  <div class="mws-panel grid_8"> 
   <div class="mws-panel-header"> 
    <span><i class="icon-table"></i> 用户列表</span> 
   </div> 
   <div class="mws-panel-body no-padding"> 
    <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid">
     <form action="/tp/Admin.php?m=home&c=index&a=search" method="post">
     <div class="dataTables_filter" id="DataTables_Table_1_filter">
      <label>搜索: 
        <?php if(!empty($key)): ?><input  type="text" name="keywords" value="<?php echo ($key); ?>"/></label><?php endif; ?>
      <?php if(empty($key)): ?><input  type="text" name="keywords" value=""/></label><?php endif; ?>
        <input type="submit" value="搜索">
     </div>
 </form>

<div id="DataTables_Table_1_wrapper" class="dataTables_wrapper" role="grid"><table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
 <thead>
      <tr role="row">
         <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 134px;" aria-label="Browser: activate to sort column ascending">ID</th>
          <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 124px;" aria-label="Platform(s): activate to sort column ascending">用户名</th>
         <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 80px;" aria-label="Engine version: activate to sort column ascending">邮箱</th>
         <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 55px;" aria-label="CSS grade: activate to sort column ascending">权限</th>
       
        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 55px;" aria-label="CSS grade: activate to sort column ascending">操作</th>

        </tr>
        </thead>
                            
         <tbody role="alert" aria-live="polite" aria-relevant="all">
           <?php if(is_array($info)): foreach($info as $key=>$row): ?><tr class="odd">
                    <td class="  sorting_1"><?php echo ($row['id']); ?></td>
                    <td class=" "><?php echo ($row['username']); ?></td>
                    <td class=" "><?php echo ($row['email']); ?></td>
                    <td class=" "><?php echo ($row['state']); ?></td>
                    
                    <td class=" "><a href="/tp/Admin.php?m=home&c=index&a=delete&id=<?php echo ($row['id']); ?>"><i class="icon-trash"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/admins/user/edit/{<?php echo ($row->id); ?>}"><i class="icon-wrench"></i></a></li></td>
                </tr><?php endforeach; endif; ?>
                 </div>
               </table>
                 <div class="dataTables_info" id="pages" >
                           <?php echo ($page); ?>
                        </div> 
   </div> 
  </div>

        
    </div>

    <!-- JavaScript Plugins -->
    <script src="/tp/Public/b/js/libs/jquery-1.8.3.min.js"></script>
    <script src="/tp/Public/b/js/libs/jquery.mousewheel.min.js"></script>
     <script src="/tp/Public/b/js/libs/jquery.placeholder.min.js"></script>
    <script src="/tp/Public/b/custom-plugins/fileinput.js"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
    <script src="/tp/Public/b/jui/js/jquery-ui-1.9.2.min.js"></script>
    <script src="/tp/Public/b/jui/jquery-ui.custom.min.js"></script>
    <script src="/tp/Public/b/jui/js/jquery.ui.touch-punch.js"></script>

    <!-- Plugin Scripts -->
    <script src="/tp/Public/b/plugins/datatables/jquery.dataTables.min.js"></script>
    <!--[if lt IE 9]>
    <script src="js/libs/excanvas.min.js"></script>
    <![endif]-->
    <script src="/tp/Public/b/plugins/flot/jquery.flot.min.js"></script>
    <script src="/tp/Public/b/plugins/flot/plugins/jquery.flot.tooltip.min.js"></script>
    <script src="/tp/Public/b/plugins/flot/plugins/jquery.flot.pie.min.js"></script>
    <script src="/tp/Public/b/plugins/flot/plugins/jquery.flot.stack.min.js"></script>
    <script src="/tp/Public/b/plugins/flot/plugins/jquery.flot.resize.min.js"></script>
    <script src="/tp/Public/b/plugins/colorpicker/colorpicker-min.js"></script>
    <script src="/tp/Public/b/plugins/validate/jquery.validate-min.js"></script>
    <script src="/tp/Public/b/custom-plugins/wizard/wizard.min.js"></script>

    <!-- Core Script -->
    <script src="/tp/Public/b/bootstrap/js/bootstrap.min.js"></script>
    <script src="/tp/Public/b/js/core/mws.js"></script>

    <!-- Themer Script (Remove if not needed) -->
    <script src="/tp/Public/b/js/core/themer.js"></script>

    <!-- Demo Scripts (remove if not needed) -->
    <script src="/tp/Public/b/js/demo/demo.dashboard.js"></script>

</body>
</html>