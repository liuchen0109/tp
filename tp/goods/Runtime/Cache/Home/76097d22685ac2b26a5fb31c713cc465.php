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


商品修改

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
                            <li><a href="admin.php?m=home&c=index&a=add">用户添加</a></li>
                            <li><a href="admin.php?m=home&c=index&a=index">用户列表</a></li>
                        </ul>
                    </li>
                
                    <li>
                        <a href="#"><i class="icon-th-list"></i> 商品管理</a>
                        <ul class="closed">
                            <li><a href="goods.php?m=home&c=index&a=add">商品添加</a></li>
                            <li><a href="goods.php?m=home&c=index&a=index">商品列表</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </div>         
        </div>
        <div class="container">
         
	<script type="text/javascript" charset="utf-8" src="/tp/Public/b/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/tp/Public/b/ueditor/ueditor.all.min.js"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8" src="/b/ueditor/lang/zh-cn/zh-cn.js"></script>
    <script type="text/javascript" src="/b/js/libs/jquery-1.8.3.min.js"></script>
 <!-- Main Container Start -->
        <div id="mws-container" class="clearfix">
             

            
                       
            
            
                    <div class="mws-panel grid_8">
          <div class="mws-panel-header">
               <span>商品修改</span>

          </div>
          <div class="mws-panel-body no-padding">
               <form action="goods.php?m=home&c=index&a=edit" method="post" class="mws-form" enctype="multipart/form-data">
                  <?php if(is_array($list)): foreach($list as $key=>$row): ?><div class="mws-form-inline">
                         <div class="mws-form-row">
                              <label class="mws-form-label">商品名称</label>
                              <div class="mws-form-item">
                                   <input value="<?php echo ($row['gname']); ?>" type="text" class="small" name="name" />
                              </div>
                         </div>
                         <div class="mws-form-inline">
                         <div class="mws-form-row">
                              <label class="mws-form-label">
                              	商品价格</label>
                              <div class="mws-form-item">
                                   <input value="<?php echo ($row['price']); ?>" type="text" class="small" name="price" />
                              </div>
                         </div>
                          <div class="mws-form-inline">
                         
                       
                           <div class="mws-form-row">
                            <label class="mws-form-label">商品描述</label>
                            <div class="mws-form-item">
                             <script id="editor" type="text/plain"  name="descr" style="width:550px;height:300px;"><?php echo ($row['descr']); ?></script>
                               
                              </select>
                            </div>
                          </div>


                          
                         <div class="mws-form-row">
                            <label class="mws-form-label">类别</label>
                            <div class="mws-form-item">
                              <select class="large" name="cate">
                                <option value="">--请选择--</option>
                               <?php if(is_array($cate)): foreach($cate as $key=>$row2): if($row['state'] == $row2['id']): ?><option value="<?php echo ($row2['id']); ?>" selected><?php echo ($row2['name']); ?></option>
                                <?php else: ?>
                                <option value="<?php echo ($row2['id']); ?>" ><?php echo ($row2['name']); ?></option><?php endif; endforeach; endif; ?>
                              </select>
                            </div>
                          </div>
                          
                            <div class="mws-form-row bordered">
                                    <label class="mws-form-label">状态</label>
                                    <div class="mws-form-item clearfix">
                                        <ul class="mws-form-list inline">
                                          <?php if($row['state'] == 1): ?><li><input type="radio" name="state" value=1 checked > <label>出售中</label></li>
                                            <li><input type="radio" name="state" value=2 > <label>仓库</label></li>
                                            <?php else: ?>
<li><input type="radio" name="state" value=1  > <label>出售中</label></li>
                                            <li><input type="radio" name="state" value=2 checked> <label>仓库</label></li><?php endif; ?>
                                        </ul>
                                    </div>
                                </div>
                                 
                                
<div class="mws-form-inline">

                        
                         <div class="mws-form-row">
                              <label class="mws-form-label">上传图片</label>
                              <div class="mws-form-item">
                                  <input type="file" name="pic">
                              </div>
                         </div>

<div class="mws-form-inline">
                        <input type="hidden" name='id' value="<?php echo ($row['gid']); ?>"><?php endforeach; endif; ?>
              
                    <div class="mws-button-row">
                 
                         
                          
                         <input type="submit" class="btn btn-danger" value="上传">
                         <input type="reset" class="btn " value="重置">
                    </div>
               </form>
          </div>         
      </div>
</div>
                               
                    <!-- Panels End -->
                </div>
                <!-- footer -->
                <div id="mws-footer">
                    Copyright Your Website 2012. All Rights Reserved.
                </div>
        </div>
        <!-- Main Container End -->
        <script type="text/javascript">
               //实例化编辑器
               //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
               var ue = UE.getEditor('editor');
              
        </script>


        
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