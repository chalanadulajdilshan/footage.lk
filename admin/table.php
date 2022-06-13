<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Xenon Boostrap Admin Panel" />
	<meta name="author" content="" />

	<title>Xenon - Data Tables</title>

	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Arimo:400,700,400italic">
	<link rel="stylesheet" href="assets/css/fonts/linecons/css/linecons.css">
	<link rel="stylesheet" href="assets/css/fonts/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/xenon-core.css">
	<link rel="stylesheet" href="assets/css/xenon-forms.css">
	<link rel="stylesheet" href="assets/css/xenon-components.css">
	<link rel="stylesheet" href="assets/css/xenon-skins.css">
	<link rel="stylesheet" href="assets/css/custom.css">

	<script src="assets/js/jquery-1.11.1.min.js"></script>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>
<body class="page-body">

	<div class="settings-pane">
			
		<a href="#" data-toggle="settings-pane" data-animate="true">
			&times;
		</a>
		
		<div class="settings-pane-inner">
			
			<div class="row">
				
				<div class="col-md-4">
					
					<div class="user-info">
						
						<div class="user-image">
							<a href="extra-profile.html">
								<img src="assets/images/user-2.png" class="img-responsive img-circle" />
							</a>
						</div>
						
						<div class="user-details">
							
							<h3>
								<a href="extra-profile.html">John Smith</a>
								
								<!-- Available statuses: is-online, is-idle, is-busy and is-offline -->
								<span class="user-status is-online"></span>
							</h3>
							
							<p class="user-title">Web Developer</p>
							
							<div class="user-links">
								<a href="extra-profile.html" class="btn btn-primary">Edit Profile</a>
								<a href="extra-profile.html" class="btn btn-success">Upgrade</a>
							</div>
							
						</div>
						
					</div>
					
				</div>
				
				<div class="col-md-8 link-blocks-env">
					
					<div class="links-block left-sep">
						<h4>
							<span>Notifications</span>
						</h4>
						
						<ul class="list-unstyled">
							<li>
								<input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk1" />
								<label for="sp-chk1">Messages</label>
							</li>
							<li>
								<input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk2" />
								<label for="sp-chk2">Events</label>
							</li>
							<li>
								<input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk3" />
								<label for="sp-chk3">Updates</label>
							</li>
							<li>
								<input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk4" />
								<label for="sp-chk4">Server Uptime</label>
							</li>
						</ul>
					</div>
					
					<div class="links-block left-sep">
						<h4>
							<a href="#">
								<span>Help Desk</span>
							</a>
						</h4>
						
						<ul class="list-unstyled">
							<li>
								<a href="#">
									<i class="fa-angle-right"></i>
									Support Center
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa-angle-right"></i>
									Submit a Ticket
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa-angle-right"></i>
									Domains Protocol
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa-angle-right"></i>
									Terms of Service
								</a>
							</li>
						</ul>
					</div>
					
				</div>
				
			</div>
		
		</div>
		
	</div>
	
	<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
			
		<!-- Add "fixed" class to make the sidebar fixed always to the browser viewport. -->
		<!-- Adding class "toggle-others" will keep only one menu item open at a time. -->
		<!-- Adding class "collapsed" collapse sidebar root elements and show only icons. -->
		<div class="sidebar-menu toggle-others fixed">
		
			<div class="sidebar-menu-inner">
				
				<header class="logo-env">
		
					<!-- logo -->
					<div class="logo">
						<a href="dashboard-1.html" class="logo-expanded">
							<img src="assets/images/logo@2x.png" width="80" alt="" />
						</a>
		
						<a href="dashboard-1.html" class="logo-collapsed">
							<img src="assets/images/logo-collapsed@2x.png" width="40" alt="" />
						</a>
					</div>
		
					<!-- This will toggle the mobile menu and will be visible only on mobile devices -->
					<div class="mobile-menu-toggle visible-xs">
						<a href="#" data-toggle="user-info-menu">
							<i class="fa-bell-o"></i>
							<span class="badge badge-success">7</span>
						</a>
		
						<a href="#" data-toggle="mobile-menu">
							<i class="fa-bars"></i>
						</a>
					</div>
		
					<!-- This will open the popup with user profile settings, you can use for any purpose, just be creative -->
					<div class="settings-icon">
						<a href="#" data-toggle="settings-pane" data-animate="true">
							<i class="linecons-cog"></i>
						</a>
					</div>
		
					
				</header>
				
				
						
				<ul id="main-menu" class="main-menu">
					<!-- add class "multiple-expanded" to allow multiple submenus to open -->
					<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
					<li>
						<a href="dashboard-1.html">
							<i class="linecons-cog"></i>
							<span class="title">Dashboard</span>
						</a>
						<ul>
							<li>
								<a href="dashboard-1.html">
									<span class="title">Dashboard 1</span>
								</a>
							</li>
							<li>
								<a href="dashboard-2.html">
									<span class="title">Dashboard 2</span>
								</a>
							</li>
							<li>
								<a href="dashboard-3.html">
									<span class="title">Dashboard 3</span>
								</a>
							</li>
							<li>
								<a href="dashboard-4.html">
									<span class="title">Dashboard 4</span>
								</a>
							</li>
							<li>
								<a href="skin-generator.html">
									<span class="title">Skin Generator</span>
								</a>
							</li>
							<li>
								<a href="update-highlights.html">
									<span class="title">Update Highlights</span>
									<span class="label label-pink pull-right hidden-collapsed">v1.3</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="layout-variants.html">
							<i class="linecons-desktop"></i>
							<span class="title">Layouts</span>
						</a>
						<ul>
							<li>
								<a href="layout-variants.html">
									<span class="title">Layout Variants &amp; API</span>
								</a>
							</li>
							<li>
								<a href="layout-collapsed-sidebar.html">
									<span class="title">Collapsed Sidebar</span>
								</a>
							</li>
							<li>
								<a href="layout-static-sidebar.html">
									<span class="title">Static Sidebar</span>
								</a>
							</li>
							<li>
								<a href="layout-horizontal-menu.html">
									<span class="title">Horizontal Menu</span>
								</a>
							</li>
							<li>
								<a href="layout-horizontal-plus-sidebar.html">
									<span class="title">Horizontal &amp; Sidebar Menu</span>
								</a>
							</li>
							<li>
								<a href="layout-horizontal-menu-click-to-open-subs.html">
									<span class="title">Horizontal Open On Click</span>
								</a>
							</li>
							<li>
								<a href="layout-horizontal-menu-min.html">
									<span class="title">Horizontal Menu Minimal</span>
								</a>
							</li>
							<li>
								<a href="layout-right-sidebar.html">
									<span class="title">Right Sidebar</span>
								</a>
							</li>
							<li>
								<a href="layout-chat-open.html">
									<span class="title">Chat Open</span>
								</a>
							</li>
							<li>
								<a href="layout-horizontal-sidebar-menu-collapsed-right.html">
									<span class="title">Both Menus &amp; Collapsed</span>
								</a>
							</li>
							<li>
								<a href="layout-boxed.html">
									<span class="title">Boxed Layout</span>
								</a>
							</li>
							<li>
								<a href="layout-boxed-horizontal-menu.html">
									<span class="title">Boxed &amp; Horizontal Menu</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="ui-panels.html">
							<i class="linecons-note"></i>
							<span class="title">UI Elements</span>
						</a>
						<ul>
							<li>
								<a href="ui-panels.html">
									<span class="title">Panels</span>
								</a>
							</li>
							<li>
								<a href="ui-buttons.html">
									<span class="title">Buttons</span>
								</a>
							</li>
							<li>
								<a href="ui-tabs-accordions.html">
									<span class="title">Tabs &amp; Accordions</span>
								</a>
							</li>
							<li>
								<a href="ui-modals.html">
									<span class="title">Modals</span>
								</a>
							</li>
							<li>
								<a href="ui-breadcrumbs.html">
									<span class="title">Breadcrumbs</span>
								</a>
							</li>
							<li>
								<a href="ui-blockquotes.html">
									<span class="title">Blockquotes</span>
								</a>
							</li>
							<li>
								<a href="ui-progressbars.html">
									<span class="title">Progress Bars</span>
								</a>
							</li>
							<li>
								<a href="ui-navbars.html">
									<span class="title">Navbars</span>
								</a>
							</li>
							<li>
								<a href="ui-alerts.html">
									<span class="title">Alerts</span>
								</a>
							</li>
							<li>
								<a href="ui-pagination.html">
									<span class="title">Pagination</span>
								</a>
							</li>
							<li>
								<a href="ui-typography.html">
									<span class="title">Typography</span>
								</a>
							</li>
							<li>
								<a href="ui-other-elements.html">
									<span class="title">Other Elements</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="ui-widgets.html">
							<i class="linecons-star"></i>
							<span class="title">Widgets</span>
						</a>
					</li>
					<li>
						<a href="mailbox-main.html">
							<i class="linecons-mail"></i>
							<span class="title">Mailbox</span>
							<span class="label label-success pull-right">5</span>
						</a>
						<ul>
							<li>
								<a href="mailbox-main.html">
									<span class="title">Inbox</span>
								</a>
							</li>
							<li>
								<a href="mailbox-compose.html">
									<span class="title">Compose Message</span>
								</a>
							</li>
							<li>
								<a href="mailbox-message.html">
									<span class="title">View Message</span>
								</a>
							</li>
						</ul>
					</li>
					<li class="opened active">
						<a href="tables-basic.html">
							<i class="linecons-database"></i>
							<span class="title">Tables</span>
						</a>
						<ul>
							<li>
								<a href="tables-basic.html">
									<span class="title">Basic Tables</span>
								</a>
							</li>
							<li>
								<a href="tables-responsive.html">
									<span class="title">Responsive Table</span>
								</a>
							</li>
							<li class="active">
								<a href="tables-datatables.html">
									<span class="title">Data Tables</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="forms-native.html">
							<i class="linecons-params"></i>
							<span class="title">Forms</span>
						</a>
						<ul>
							<li>
								<a href="forms-native.html">
									<span class="title">Native Elements</span>
								</a>
							</li>
							<li>
								<a href="forms-advanced.html">
									<span class="title">Advanced Plugins</span>
								</a>
							</li>
							<li>
								<a href="forms-wizard.html">
									<span class="title">Form Wizard</span>
								</a>
							</li>
							<li>
								<a href="forms-validation.html">
									<span class="title">Form Validation</span>
								</a>
							</li>
							<li>
								<a href="forms-input-masks.html">
									<span class="title">Input Masks</span>
								</a>
							</li>
							<li>
								<a href="forms-file-upload.html">
									<span class="title">File Upload</span>
								</a>
							</li>
							<li>
								<a href="forms-editors.html">
									<span class="title">Editors</span>
								</a>
							</li>
							<li>
								<a href="forms-sliders.html">
									<span class="title">Sliders</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="extra-gallery.html">
							<i class="linecons-beaker"></i>
							<span class="title">Extra</span>
							<span class="label label-purple pull-right hidden-collapsed">New Items</span>
						</a>
						<ul>
							<li>
								<a href="extra-icons-fontawesome.html">
									<span class="title">Icons</span>
								</a>
								<ul>
									<li>
										<a href="extra-icons-fontawesome.html">
											<span class="title">Font Awesome</span>
										</a>
									</li>
									<li>
										<a href="extra-icons-linecons.html">
											<span class="title">Linecons</span>
										</a>
									</li>
									<li>
										<a href="extra-icons-elusive.html">
											<span class="title">Elusive</span>
										</a>
									</li>
									<li>
										<a href="extra-icons-meteocons.html">
											<span class="title">Meteocons</span>
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="extra-maps-google.html">
									<span class="title">Maps</span>
								</a>
								<ul>
									<li>
										<a href="extra-maps-google.html">
											<span class="title">Google Maps</span>
										</a>
									</li>
									<li>
										<a href="extra-maps-advanced.html">
											<span class="title">Advanced Map</span>
										</a>
									</li>
									<li>
										<a href="extra-maps-vector.html">
											<span class="title">Vector Map</span>
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="extra-members-list.html">
									<span class="title">Members</span>
									<span class="label label-warning pull-right">New</span>
								</a>
								<ul>
									<li>
										<a href="extra-members-list.html">
											<span class="title">Members List</span>
										</a>
									</li>
									<li>
										<a href="extra-members-add.html">
											<span class="title">Add Member</span>
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="extra-gallery.html">
									<span class="title">Gallery</span>
								</a>
							</li>
							<li>
								<a href="extra-calendar.html">
									<span class="title">Calendar</span>
								</a>
							</li>
							<li>
								<a href="extra-profile.html">
									<span class="title">Profile</span>
								</a>
							</li>
							<li>
								<a href="extra-login.html">
									<span class="title">Login</span>
								</a>
							</li>
							<li>
								<a href="extra-lockscreen.html">
									<span class="title">Lockscreen</span>
								</a>
							</li>
							<li>
								<a href="extra-login-light.html">
									<span class="title">Login Light</span>
								</a>
							</li>
							<li>
								<a href="extra-timeline.html">
									<span class="title">Timeline</span>
								</a>
							</li>
							<li>
								<a href="extra-timeline-center.html">
									<span class="title">Timeline Centerd</span>
								</a>
							</li>
							<li>
								<a href="extra-notes.html">
									<span class="title">Notes</span>
								</a>
							</li>
							<li>
								<a href="extra-image-crop.html">
									<span class="title">Image Crop</span>
								</a>
							</li>
							<li>
								<a href="extra-portlets.html">
									<span class="title">Portlets</span>
								</a>
							</li>
							<li>
								<a href="blank-sidebar.html">
									<span class="title">Blank Page</span>
								</a>
							</li>
							<li>
								<a href="extra-search.html">
									<span class="title">Search</span>
								</a>
							</li>
							<li>
								<a href="extra-invoice.html">
									<span class="title">Invoice</span>
								</a>
							</li>
							<li>
								<a href="extra-not-found.html">
									<span class="title">404 Page</span>
								</a>
							</li>
							<li>
								<a href="extra-tocify.html">
									<span class="title">Tocify</span>
								</a>
							</li>
							<li>
								<a href="extra-loader.html">
									<span class="title">Loading Progress</span>
								</a>
							</li>
							<li>
								<a href="extra-page-loading-ol.html">
									<span class="title">Page Loading Overlay</span>
								</a>
							</li>
							<li>
								<a href="extra-notifications.html">
									<span class="title">Notifications</span>
								</a>
							</li>
							<li>
								<a href="extra-nestable-lists.html">
									<span class="title">Nestable Lists</span>
								</a>
							</li>
							<li>
								<a href="extra-scrollable.html">
									<span class="title">Scrollable</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="charts-main.html">
							<i class="linecons-globe"></i>
							<span class="title">Charts</span>
						</a>
						<ul>
							<li>
								<a href="charts-main.html">
									<span class="title">Chart Variants</span>
								</a>
							</li>
							<li>
								<a href="charts-range.html">
									<span class="title">Range Selector</span>
								</a>
							</li>
							<li>
								<a href="charts-sparklines.html">
									<span class="title">Sparklines</span>
								</a>
							</li>
							<li>
								<a href="charts-map.html">
									<span class="title">Map Charts</span>
								</a>
							</li>
							<li>
								<a href="charts-gauges.html">
									<span class="title">Circular Gauges</span>
								</a>
							</li>
							<li>
								<a href="charts-bar-gauges.html">
									<span class="title">Bar Gauges</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">
							<i class="linecons-cloud"></i>
							<span class="title">Menu Levels</span>
						</a>
						<ul>
							<li>
								<a href="#">
									<i class="entypo-flow-line"></i>
									<span class="title">Menu Level 1.1</span>
								</a>
								<ul>
									<li>
										<a href="#">
											<i class="entypo-flow-parallel"></i>
											<span class="title">Menu Level 2.1</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="entypo-flow-parallel"></i>
											<span class="title">Menu Level 2.2</span>
										</a>
										<ul>
											<li>
												<a href="#">
													<i class="entypo-flow-cascade"></i>
													<span class="title">Menu Level 3.1</span>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="entypo-flow-cascade"></i>
													<span class="title">Menu Level 3.2</span>
												</a>
												<ul>
													<li>
														<a href="#">
															<i class="entypo-flow-branch"></i>
															<span class="title">Menu Level 4.1</span>
														</a>
													</li>
												</ul>
											</li>
										</ul>
									</li>
									<li>
										<a href="#">
											<i class="entypo-flow-parallel"></i>
											<span class="title">Menu Level 2.3</span>
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="#">
									<i class="entypo-flow-line"></i>
									<span class="title">Menu Level 1.2</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="entypo-flow-line"></i>
									<span class="title">Menu Level 1.3</span>
								</a>
							</li>
						</ul>
					</li>
				</ul>
				
			</div>
		
		</div>
	
		<div class="main-content">
					
			<nav class="navbar user-info-navbar"  role="navigation"><!-- User Info, Notifications and Menu Bar -->
			
				<!-- Left links for user info navbar -->
				<ul class="user-info-menu left-links list-inline list-unstyled">
			
					<li class="hidden-sm hidden-xs">
						<a href="#" data-toggle="sidebar">
							<i class="fa-bars"></i>
						</a>
					</li>
			
					<li class="dropdown hover-line">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa-envelope-o"></i>
							<span class="badge badge-green">15</span>
						</a>
			
						<ul class="dropdown-menu messages">
							<li>
								
								<ul class="dropdown-menu-list list-unstyled ps-scrollbar">
							
									<li class="active"><!-- "active" class means message is unread -->
										<a href="#">
											<span class="line">
												<strong>Luc Chartier</strong>
												<span class="light small">- yesterday</span>
											</span>
							
											<span class="line desc small">
												This ain’t our first item, it is the best of the rest.
											</span>
										</a>
									</li>
							
									<li class="active">
										<a href="#">
											<span class="line">
												<strong>Salma Nyberg</strong>
												<span class="light small">- 2 days ago</span>
											</span>
							
											<span class="line desc small">
												Oh he decisively impression attachment friendship so if everything.
											</span>
										</a>
									</li>
							
									<li>
										<a href="#">
											<span class="line">
												Hayden Cartwright
												<span class="light small">- a week ago</span>
											</span>
							
											<span class="line desc small">
												Whose her enjoy chief new young. Felicity if ye required likewise so doubtful.
											</span>
										</a>
									</li>
							
									<li>
										<a href="#">
											<span class="line">
												Sandra Eberhardt
												<span class="light small">- 16 days ago</span>
											</span>
							
											<span class="line desc small">
												On so attention necessary at by provision otherwise existence direction.
											</span>
										</a>
									</li>
							
									<!-- Repeated -->
							
									<li class="active"><!-- "active" class means message is unread -->
										<a href="#">
											<span class="line">
												<strong>Luc Chartier</strong>
												<span class="light small">- yesterday</span>
											</span>
							
											<span class="line desc small">
												This ain’t our first item, it is the best of the rest.
											</span>
										</a>
									</li>
							
									<li class="active">
										<a href="#">
											<span class="line">
												<strong>Salma Nyberg</strong>
												<span class="light small">- 2 days ago</span>
											</span>
							
											<span class="line desc small">
												Oh he decisively impression attachment friendship so if everything.
											</span>
										</a>
									</li>
							
									<li>
										<a href="#">
											<span class="line">
												Hayden Cartwright
												<span class="light small">- a week ago</span>
											</span>
							
											<span class="line desc small">
												Whose her enjoy chief new young. Felicity if ye required likewise so doubtful.
											</span>
										</a>
									</li>
							
									<li>
										<a href="#">
											<span class="line">
												Sandra Eberhardt
												<span class="light small">- 16 days ago</span>
											</span>
							
											<span class="line desc small">
												On so attention necessary at by provision otherwise existence direction.
											</span>
										</a>
									</li>
							
								</ul>
							
							</li>
							
							<li class="external">
								<a href="mailbox-main.html">
									<span>All Messages</span>
									<i class="fa-link-ext"></i>
								</a>
							</li>
						</ul>
					</li>
			
					<li class="dropdown hover-line">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa-bell-o"></i>
							<span class="badge badge-purple">7</span>
						</a>
			
						<ul class="dropdown-menu notifications">
							<li class="top">
								<p class="small">
									<a href="#" class="pull-right">Mark all Read</a>
									You have <strong>3</strong> new notifications.
								</p>
							</li>
							
							<li>
								<ul class="dropdown-menu-list list-unstyled ps-scrollbar">
									<li class="active notification-success">
										<a href="#">
											<i class="fa-user"></i>
											
											<span class="line">
												<strong>New user registered</strong>
											</span>
											
											<span class="line small time">
												30 seconds ago
											</span>
										</a>
									</li>
									
									<li class="active notification-secondary">
										<a href="#">
											<i class="fa-lock"></i>
											
											<span class="line">
												<strong>Privacy settings have been changed</strong>
											</span>
											
											<span class="line small time">
												3 hours ago
											</span>
										</a>
									</li>
									
									<li class="notification-primary">
										<a href="#">
											<i class="fa-thumbs-up"></i>
											
											<span class="line">
												<strong>Someone special liked this</strong>
											</span>
											
											<span class="line small time">
												2 minutes ago
											</span>
										</a>
									</li>
									
									<li class="notification-danger">
										<a href="#">
											<i class="fa-calendar"></i>
											
											<span class="line">
												John cancelled the event
											</span>
											
											<span class="line small time">
												9 hours ago
											</span>
										</a>
									</li>
									
									<li class="notification-info">
										<a href="#">
											<i class="fa-database"></i>
											
											<span class="line">
												The server is status is stable
											</span>
											
											<span class="line small time">
												yesterday at 10:30am
											</span>
										</a>
									</li>
									
									<li class="notification-warning">
										<a href="#">
											<i class="fa-envelope-o"></i>
											
											<span class="line">
												New comments waiting approval
											</span>
											
											<span class="line small time">
												last week
											</span>
										</a>
									</li>
								</ul>
							</li>
							
							<li class="external">
								<a href="#">
									<span>View all notifications</span>
									<i class="fa-link-ext"></i>
								</a>
							</li>
						</ul>
					</li>
			
					<!-- Added in v1.2 -->
					<li class="dropdown hover-line language-switcher">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<img src="assets/images/flags/flag-uk.png" alt="flag-uk" />
							English
						</a>
			
						<ul class="dropdown-menu languages">
							<li>
								<a href="#">
									<img src="assets/images/flags/flag-al.png" alt="flag-al" />
									Shqip
								</a>
							</li>
							<li class="active">
								<a href="#">
									<img src="assets/images/flags/flag-uk.png" alt="flag-uk" />
									English
								</a>
							</li>
							<li>
								<a href="#">
									<img src="assets/images/flags/flag-de.png" alt="flag-de" />
									Deutsch
								</a>
							</li>
							<li>
								<a href="#">
									<img src="assets/images/flags/flag-fr.png" alt="flag-fr" />
									Fran&ccedil;ais
								</a>
							</li>
							<li>
								<a href="#">
									<img src="assets/images/flags/flag-br.png" alt="flag-br" />
									Portugu&ecirc;s
								</a>
							</li>
							<li>
								<a href="#">
									<img src="assets/images/flags/flag-es.png" alt="flag-es" />
									Espa&ntilde;ol
								</a>
							</li>
						</ul>
					</li>
			
				</ul>
			
			
				<!-- Right links for user info navbar -->
				<ul class="user-info-menu right-links list-inline list-unstyled">
							<li class="search-form"><!-- You can add "always-visible" to show make the search input visible -->
			
						<form name="userinfo_search_form" method="get" action="extra-search.html">
							<input type="text" name="s" class="form-control search-field" placeholder="Type to search..." />
			
							<button type="submit" class="btn btn-link">
								<i class="linecons-search"></i>
							</button>
						</form>
			
					</li>
			
					<li class="dropdown user-profile">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<img src="assets/images/user-4.png" alt="user-image" class="img-circle img-inline userpic-32" width="28" />
							<span>
								John Smith
								<i class="fa-angle-down"></i>
							</span>
						</a>
			
						<ul class="dropdown-menu user-profile-menu list-unstyled">
							<li>
								<a href="#edit-profile">
									<i class="fa-edit"></i>
									New Post
								</a>
							</li>
							<li>
								<a href="#settings">
									<i class="fa-wrench"></i>
									Settings
								</a>
							</li>
							<li>
								<a href="#profile">
									<i class="fa-user"></i>
									Profile
								</a>
							</li>
							<li>
								<a href="#help">
									<i class="fa-info"></i>
									Help
								</a>
							</li>
							<li class="last">
								<a href="extra-lockscreen.html">
									<i class="fa-lock"></i>
									Logout
								</a>
							</li>
						</ul>
					</li>
			
					<li>
						<a href="#" data-toggle="chat">
							<i class="fa-comments-o"></i>
						</a>
					</li>
			
				</ul>
			
			</nav>
			
			<div class="page-title">
			
				<div class="title-env">
					<h1 class="title">DataTable</h1>
					<p class="description">Dynamic table variants with pagination and other controls</p>
				</div>
			
					<div class="breadcrumb-env">
			
								<ol class="breadcrumb bc-1" >
									<li>
							<a href="dashboard-1.html"><i class="fa-home"></i>Home</a>
						</li>
								<li>
			
										<a href="tables-basic.html">Tables</a>
								</li>
							<li class="active">
			
										<strong>Data Tables</strong>
								</li>
								</ol>
						
				</div>
				
			</div>
			
			
			<!-- Basic Setup -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Basic Setup</h3>
					
					<div class="panel-options">
						<a href="#" data-toggle="panel">
							<span class="collapse-icon">&ndash;</span>
							<span class="expand-icon">+</span>
						</a>
						<a href="#" data-toggle="remove">
							&times;
						</a>
					</div>
				</div>
				<div class="panel-body">
					
					<script type="text/javascript">
					jQuery(document).ready(function($)
					{
						$("#example-1").dataTable({
							aLengthMenu: [
								[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]
							]
						});
					});
					</script>
					
					<table id="example-1" class="table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>Name</th>
								<th>Position</th>
								<th>Office</th>
								<th>Age</th>
								<th>Start date</th>
								<th>Salary</th>
							</tr>
						</thead>
					
						<tfoot>
							<tr>
								<th>Name</th>
								<th>Position</th>
								<th>Office</th>
								<th>Age</th>
								<th>Start date</th>
								<th>Salary</th>
							</tr>
						</tfoot>
					
						<tbody>
							<tr>
								<td>Tiger Nixon</td>
								<td>System Architect</td>
								<td>Edinburgh</td>
								<td>61</td>
								<td>2011/04/25</td>
								<td>$320,800</td>
							</tr>
							<tr>
								<td>Garrett Winters</td>
								<td>Accountant</td>
								<td>Tokyo</td>
								<td>63</td>
								<td>2011/07/25</td>
								<td>$170,750</td>
							</tr>
							<tr>
								<td>Ashton Cox</td>
								<td>Junior Technical Author</td>
								<td>San Francisco</td>
								<td>66</td>
								<td>2009/01/12</td>
								<td>$86,000</td>
							</tr>
							<tr>
								<td>Cedric Kelly</td>
								<td>Senior Javascript Developer</td>
								<td>Edinburgh</td>
								<td>22</td>
								<td>2012/03/29</td>
								<td>$433,060</td>
							</tr>
							<tr>
								<td>Airi Satou</td>
								<td>Accountant</td>
								<td>Tokyo</td>
								<td>33</td>
								<td>2008/11/28</td>
								<td>$162,700</td>
							</tr>
							<tr>
								<td>Brielle Williamson</td>
								<td>Integration Specialist</td>
								<td>New York</td>
								<td>61</td>
								<td>2012/12/02</td>
								<td>$372,000</td>
							</tr>
							<tr>
								<td>Herrod Chandler</td>
								<td>Sales Assistant</td>
								<td>San Francisco</td>
								<td>59</td>
								<td>2012/08/06</td>
								<td>$137,500</td>
							</tr>
							<tr>
								<td>Rhona Davidson</td>
								<td>Integration Specialist</td>
								<td>Tokyo</td>
								<td>55</td>
								<td>2010/10/14</td>
								<td>$327,900</td>
							</tr>
							<tr>
								<td>Colleen Hurst</td>
								<td>Javascript Developer</td>
								<td>San Francisco</td>
								<td>39</td>
								<td>2009/09/15</td>
								<td>$205,500</td>
							</tr>
							<tr>
								<td>Sonya Frost</td>
								<td>Software Engineer</td>
								<td>Edinburgh</td>
								<td>23</td>
								<td>2008/12/13</td>
								<td>$103,600</td>
							</tr>
							<tr>
								<td>Jena Gaines</td>
								<td>Office Manager</td>
								<td>London</td>
								<td>30</td>
								<td>2008/12/19</td>
								<td>$90,560</td>
							</tr>
							<tr>
								<td>Quinn Flynn</td>
								<td>Support Lead</td>
								<td>Edinburgh</td>
								<td>22</td>
								<td>2013/03/03</td>
								<td>$342,000</td>
							</tr>
							<tr>
								<td>Charde Marshall</td>
								<td>Regional Director</td>
								<td>San Francisco</td>
								<td>36</td>
								<td>2008/10/16</td>
								<td>$470,600</td>
							</tr>
							<tr>
								<td>Haley Kennedy</td>
								<td>Senior Marketing Designer</td>
								<td>London</td>
								<td>43</td>
								<td>2012/12/18</td>
								<td>$313,500</td>
							</tr>
							<tr>
								<td>Tatyana Fitzpatrick</td>
								<td>Regional Director</td>
								<td>London</td>
								<td>19</td>
								<td>2010/03/17</td>
								<td>$385,750</td>
							</tr>
							<tr>
								<td>Michael Silva</td>
								<td>Marketing Designer</td>
								<td>London</td>
								<td>66</td>
								<td>2012/11/27</td>
								<td>$198,500</td>
							</tr>
							<tr>
								<td>Paul Byrd</td>
								<td>Chief Financial Officer (CFO)</td>
								<td>New York</td>
								<td>64</td>
								<td>2010/06/09</td>
								<td>$725,000</td>
							</tr>
							<tr>
								<td>Gloria Little</td>
								<td>Systems Administrator</td>
								<td>New York</td>
								<td>59</td>
								<td>2009/04/10</td>
								<td>$237,500</td>
							</tr>
							<tr>
								<td>Bradley Greer</td>
								<td>Software Engineer</td>
								<td>London</td>
								<td>41</td>
								<td>2012/10/13</td>
								<td>$132,000</td>
							</tr>
							<tr>
								<td>Dai Rios</td>
								<td>Personnel Lead</td>
								<td>Edinburgh</td>
								<td>35</td>
								<td>2012/09/26</td>
								<td>$217,500</td>
							</tr>
							<tr>
								<td>Jenette Caldwell</td>
								<td>Development Lead</td>
								<td>New York</td>
								<td>30</td>
								<td>2011/09/03</td>
								<td>$345,000</td>
							</tr>
							<tr>
								<td>Yuri Berry</td>
								<td>Chief Marketing Officer (CMO)</td>
								<td>New York</td>
								<td>40</td>
								<td>2009/06/25</td>
								<td>$675,000</td>
							</tr>
							<tr>
								<td>Caesar Vance</td>
								<td>Pre-Sales Support</td>
								<td>New York</td>
								<td>21</td>
								<td>2011/12/12</td>
								<td>$106,450</td>
							</tr>
							<tr>
								<td>Doris Wilder</td>
								<td>Sales Assistant</td>
								<td>Sidney</td>
								<td>23</td>
								<td>2010/09/20</td>
								<td>$85,600</td>
							</tr>
							<tr>
								<td>Angelica Ramos</td>
								<td>Chief Executive Officer (CEO)</td>
								<td>London</td>
								<td>47</td>
								<td>2009/10/09</td>
								<td>$1,200,000</td>
							</tr>
							<tr>
								<td>Gavin Joyce</td>
								<td>Developer</td>
								<td>Edinburgh</td>
								<td>42</td>
								<td>2010/12/22</td>
								<td>$92,575</td>
							</tr>
							<tr>
								<td>Jennifer Chang</td>
								<td>Regional Director</td>
								<td>Singapore</td>
								<td>28</td>
								<td>2010/11/14</td>
								<td>$357,650</td>
							</tr>
							<tr>
								<td>Brenden Wagner</td>
								<td>Software Engineer</td>
								<td>San Francisco</td>
								<td>28</td>
								<td>2011/06/07</td>
								<td>$206,850</td>
							</tr>
							<tr>
								<td>Fiona Green</td>
								<td>Chief Operating Officer (COO)</td>
								<td>San Francisco</td>
								<td>48</td>
								<td>2010/03/11</td>
								<td>$850,000</td>
							</tr>
							<tr>
								<td>Shou Itou</td>
								<td>Regional Marketing</td>
								<td>Tokyo</td>
								<td>20</td>
								<td>2011/08/14</td>
								<td>$163,000</td>
							</tr>
							<tr>
								<td>Michelle House</td>
								<td>Integration Specialist</td>
								<td>Sidney</td>
								<td>37</td>
								<td>2011/06/02</td>
								<td>$95,400</td>
							</tr>
							<tr>
								<td>Suki Burks</td>
								<td>Developer</td>
								<td>London</td>
								<td>53</td>
								<td>2009/10/22</td>
								<td>$114,500</td>
							</tr>
							<tr>
								<td>Prescott Bartlett</td>
								<td>Technical Author</td>
								<td>London</td>
								<td>27</td>
								<td>2011/05/07</td>
								<td>$145,000</td>
							</tr>
							<tr>
								<td>Gavin Cortez</td>
								<td>Team Leader</td>
								<td>San Francisco</td>
								<td>22</td>
								<td>2008/10/26</td>
								<td>$235,500</td>
							</tr>
							<tr>
								<td>Martena Mccray</td>
								<td>Post-Sales support</td>
								<td>Edinburgh</td>
								<td>46</td>
								<td>2011/03/09</td>
								<td>$324,050</td>
							</tr>
							<tr>
								<td>Unity Butler</td>
								<td>Marketing Designer</td>
								<td>San Francisco</td>
								<td>47</td>
								<td>2009/12/09</td>
								<td>$85,675</td>
							</tr>
							<tr>
								<td>Howard Hatfield</td>
								<td>Office Manager</td>
								<td>San Francisco</td>
								<td>51</td>
								<td>2008/12/16</td>
								<td>$164,500</td>
							</tr>
							<tr>
								<td>Hope Fuentes</td>
								<td>Secretary</td>
								<td>San Francisco</td>
								<td>41</td>
								<td>2010/02/12</td>
								<td>$109,850</td>
							</tr>
							<tr>
								<td>Vivian Harrell</td>
								<td>Financial Controller</td>
								<td>San Francisco</td>
								<td>62</td>
								<td>2009/02/14</td>
								<td>$452,500</td>
							</tr>
							<tr>
								<td>Timothy Mooney</td>
								<td>Office Manager</td>
								<td>London</td>
								<td>37</td>
								<td>2008/12/11</td>
								<td>$136,200</td>
							</tr>
							<tr>
								<td>Jackson Bradshaw</td>
								<td>Director</td>
								<td>New York</td>
								<td>65</td>
								<td>2008/09/26</td>
								<td>$645,750</td>
							</tr>
							<tr>
								<td>Olivia Liang</td>
								<td>Support Engineer</td>
								<td>Singapore</td>
								<td>64</td>
								<td>2011/02/03</td>
								<td>$234,500</td>
							</tr>
							<tr>
								<td>Bruno Nash</td>
								<td>Software Engineer</td>
								<td>London</td>
								<td>38</td>
								<td>2011/05/03</td>
								<td>$163,500</td>
							</tr>
							<tr>
								<td>Sakura Yamamoto</td>
								<td>Support Engineer</td>
								<td>Tokyo</td>
								<td>37</td>
								<td>2009/08/19</td>
								<td>$139,575</td>
							</tr>
							<tr>
								<td>Thor Walton</td>
								<td>Developer</td>
								<td>New York</td>
								<td>61</td>
								<td>2013/08/11</td>
								<td>$98,540</td>
							</tr>
							<tr>
								<td>Finn Camacho</td>
								<td>Support Engineer</td>
								<td>San Francisco</td>
								<td>47</td>
								<td>2009/07/07</td>
								<td>$87,500</td>
							</tr>
							<tr>
								<td>Serge Baldwin</td>
								<td>Data Coordinator</td>
								<td>Singapore</td>
								<td>64</td>
								<td>2012/04/09</td>
								<td>$138,575</td>
							</tr>
							<tr>
								<td>Zenaida Frank</td>
								<td>Software Engineer</td>
								<td>New York</td>
								<td>63</td>
								<td>2010/01/04</td>
								<td>$125,250</td>
							</tr>
							<tr>
								<td>Zorita Serrano</td>
								<td>Software Engineer</td>
								<td>San Francisco</td>
								<td>56</td>
								<td>2012/06/01</td>
								<td>$115,000</td>
							</tr>
							<tr>
								<td>Jennifer Acosta</td>
								<td>Junior Javascript Developer</td>
								<td>Edinburgh</td>
								<td>43</td>
								<td>2013/02/01</td>
								<td>$75,650</td>
							</tr>
							<tr>
								<td>Cara Stevens</td>
								<td>Sales Assistant</td>
								<td>New York</td>
								<td>46</td>
								<td>2011/12/06</td>
								<td>$145,600</td>
							</tr>
							<tr>
								<td>Hermione Butler</td>
								<td>Regional Director</td>
								<td>London</td>
								<td>47</td>
								<td>2011/03/21</td>
								<td>$356,250</td>
							</tr>
							<tr>
								<td>Lael Greer</td>
								<td>Systems Administrator</td>
								<td>London</td>
								<td>21</td>
								<td>2009/02/27</td>
								<td>$103,500</td>
							</tr>
							<tr>
								<td>Jonas Alexander</td>
								<td>Developer</td>
								<td>San Francisco</td>
								<td>30</td>
								<td>2010/07/14</td>
								<td>$86,500</td>
							</tr>
							<tr>
								<td>Shad Decker</td>
								<td>Regional Director</td>
								<td>Edinburgh</td>
								<td>51</td>
								<td>2008/11/13</td>
								<td>$183,000</td>
							</tr>
							<tr>
								<td>Michael Bruce</td>
								<td>Javascript Developer</td>
								<td>Singapore</td>
								<td>29</td>
								<td>2011/06/27</td>
								<td>$183,000</td>
							</tr>
							<tr>
								<td>Donna Snider</td>
								<td>Customer Support</td>
								<td>New York</td>
								<td>27</td>
								<td>2011/01/25</td>
								<td>$112,000</td>
							</tr>
						</tbody>
					</table>
					
				</div>
			</div>
			
			
			<!-- Removing search and results count filter -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Removing search and results count filter</h3>
					
					<div class="panel-options">
						<a href="#" data-toggle="panel">
							<span class="collapse-icon">&ndash;</span>
							<span class="expand-icon">+</span>
						</a>
						<a href="#" data-toggle="remove">
							&times;
						</a>
					</div>
				</div>
				<div class="panel-body">
					
					<script type="text/javascript">
					jQuery(document).ready(function($)
					{
						$("#example-2").dataTable({
							dom: "t" + "<'row'<'col-xs-6'i><'col-xs-6'p>>",
							aoColumns: [
								{bSortable: false},
								null,
								null,
								null,
								null
							],
						});
						
						// Replace checkboxes when they appear
						var $state = $("#example-2 thead input[type='checkbox']");
						
						$("#example-2").on('draw.dt', function()
						{
							cbr_replace();
							
							$state.trigger('change');
						});
						
						// Script to select all checkboxes
						$state.on('change', function(ev)
						{
							var $chcks = $("#example-2 tbody input[type='checkbox']");
							
							if($state.is(':checked'))
							{
								$chcks.prop('checked', true).trigger('change');
							}
							else
							{
								$chcks.prop('checked', false).trigger('change');
							}
						});
					});
					</script>
					
					<table class="table table-bordered table-striped" id="example-2">
						<thead>
							<tr>
								<th class="no-sorting">
									<input type="checkbox" class="cbr">
								</th>
								<th>Student Name</th>
								<th>Average Grade</th>
								<th>Curriculum / Occupation</th>
								<th>Actions</th>
							</tr>
						</thead>
						
						<tbody class="middle-align">
						
							<tr>
								<td>
									<input type="checkbox" class="cbr">
								</td>
								<td>Randy S. Smith</td>
								<td>8.7</td>
								<td>Social and human service</td>
								<td>
									<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
									</a>
									
									<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
										Delete
									</a>
									
									<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
										Profile
									</a>
								</td>
							</tr>
							
							<tr>
								<td>
									<input type="checkbox" class="cbr">
								</td>
								<td>Ellen C. Jones</td>
								<td>7.2</td>
								<td>Education and development manager</td>
								<td>
									<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
									</a>
									
									<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
										Delete
									</a>
									
									<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
										Profile
									</a>
								</td>
							</tr>
							
							<tr>
								<td>
									<input type="checkbox" class="cbr">
								</td>
								<td>Carl D. Kaya</td>
								<td>9.5</td>
								<td>Express Merchant Service</td>
								<td>
									<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
									</a>
									
									<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
										Delete
									</a>
									
									<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
										Profile
									</a>
								</td>
							</tr>
							
							<tr>
								<td>
									<input type="checkbox" class="cbr">
								</td>
								<td>Jennifer J. Jefferson</td>
								<td>10</td>
								<td>Maxillofacial surgeon</td>
								<td>
									<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
									</a>
									
									<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
										Delete
									</a>
									
									<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
										Profile
									</a>
								</td>
							</tr>
							
							<tr>
								<td>
									<input type="checkbox" class="cbr">
								</td>
								<td>April L. Baker <span class="label label-success">New Applicant</span></td>
								<td>6.8</td>
								<td>Set and exhibit designer</td>
								<td>
									<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
									</a>
									
									<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
										Delete
									</a>
									
									<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
										Profile
									</a>
								</td>
							</tr>
							
							<tr>
								<td>
									<input type="checkbox" class="cbr">
								</td>
								<td>Lillian J. Earl</td>
								<td>7.6</td>
								<td>Social and human service assistant</td>
								<td>
									<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
									</a>
									
									<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
										Delete
									</a>
									
									<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
										Profile
									</a>
								</td>
							</tr>
							
							<tr>
								<td>
									<input type="checkbox" class="cbr">
								</td>
								<td>Ellen C. Jones</td>
								<td>7.2</td>
								<td>Education and development manager</td>
								<td>
									<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
									</a>
									
									<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
										Delete
									</a>
									
									<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
										Profile
									</a>
								</td>
							</tr>
							
							<tr>
								<td>
									<input type="checkbox" class="cbr">
								</td>
								<td>Randy S. Smith</td>
								<td>8.7</td>
								<td>Social and human service</td>
								<td>
									<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
									</a>
									
									<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
										Delete
									</a>
									
									<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
										Profile
									</a>
								</td>
							</tr>
							
							<tr>
								<td>
									<input type="checkbox" class="cbr">
								</td>
								<td>Jennifer J. Jefferson</td>
								<td>10</td>
								<td>Maxillofacial surgeon</td>
								<td>
									<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
									</a>
									
									<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
										Delete
									</a>
									
									<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
										Profile
									</a>
								</td>
							</tr>
							
							<tr>
								<td>
									<input type="checkbox" class="cbr">
								</td>
								<td>Carl D. Kaya</td>
								<td>9.5</td>
								<td>Express Merchant Service</td>
								<td>
									<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
									</a>
									
									<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
										Delete
									</a>
									
									<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
										Profile
									</a>
								</td>
							</tr>
							
							<tr>
								<td>
									<input type="checkbox" class="cbr">
								</td>
								<td>Lillian J. Earl</td>
								<td>7.6</td>
								<td>Social and human service assistant</td>
								<td>
									<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
									</a>
									
									<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
										Delete
									</a>
									
									<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
										Profile
									</a>
								</td>
							</tr>
							
							<tr>
								<td>
									<input type="checkbox" class="cbr">
								</td>
								<td>April L. Baker <span class="label label-success">New Applicant</span></td>
								<td>6.8</td>
								<td>Set and exhibit designer</td>
								<td>
									<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
									</a>
									
									<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
										Delete
									</a>
									
									<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
										Profile
									</a>
								</td>
							</tr>
						
							<tr>
								<td>
									<input type="checkbox" class="cbr">
								</td>
								<td>Randy S. Smith</td>
								<td>8.7</td>
								<td>Social and human service</td>
								<td>
									<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
									</a>
									
									<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
										Delete
									</a>
									
									<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
										Profile
									</a>
								</td>
							</tr>
							
							<tr>
								<td>
									<input type="checkbox" class="cbr">
								</td>
								<td>Ellen C. Jones</td>
								<td>7.2</td>
								<td>Education and development manager</td>
								<td>
									<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
									</a>
									
									<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
										Delete
									</a>
									
									<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
										Profile
									</a>
								</td>
							</tr>
							
							<tr>
								<td>
									<input type="checkbox" class="cbr">
								</td>
								<td>Carl D. Kaya</td>
								<td>9.5</td>
								<td>Express Merchant Service</td>
								<td>
									<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
									</a>
									
									<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
										Delete
									</a>
									
									<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
										Profile
									</a>
								</td>
							</tr>
							
							<tr>
								<td>
									<input type="checkbox" class="cbr">
								</td>
								<td>Jennifer J. Jefferson</td>
								<td>10</td>
								<td>Maxillofacial surgeon</td>
								<td>
									<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
									</a>
									
									<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
										Delete
									</a>
									
									<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
										Profile
									</a>
								</td>
							</tr>
							
							<tr>
								<td>
									<input type="checkbox" class="cbr">
								</td>
								<td>April L. Baker <span class="label label-success">New Applicant</span></td>
								<td>6.8</td>
								<td>Set and exhibit designer</td>
								<td>
									<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
									</a>
									
									<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
										Delete
									</a>
									
									<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
										Profile
									</a>
								</td>
							</tr>
							
							<tr>
								<td>
									<input type="checkbox" class="cbr">
								</td>
								<td>Lillian J. Earl</td>
								<td>7.6</td>
								<td>Social and human service assistant</td>
								<td>
									<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
									</a>
									
									<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
										Delete
									</a>
									
									<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
										Profile
									</a>
								</td>
							</tr>
							
							<tr>
								<td>
									<input type="checkbox" class="cbr">
								</td>
								<td>Ellen C. Jones</td>
								<td>7.2</td>
								<td>Education and development manager</td>
								<td>
									<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
									</a>
									
									<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
										Delete
									</a>
									
									<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
										Profile
									</a>
								</td>
							</tr>
							
							<tr>
								<td>
									<input type="checkbox" class="cbr">
								</td>
								<td>Randy S. Smith</td>
								<td>8.7</td>
								<td>Social and human service</td>
								<td>
									<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
									</a>
									
									<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
										Delete
									</a>
									
									<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
										Profile
									</a>
								</td>
							</tr>
							
							<tr>
								<td>
									<input type="checkbox" class="cbr">
								</td>
								<td>Jennifer J. Jefferson</td>
								<td>10</td>
								<td>Maxillofacial surgeon</td>
								<td>
									<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
									</a>
									
									<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
										Delete
									</a>
									
									<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
										Profile
									</a>
								</td>
							</tr>
							
							<tr>
								<td>
									<input type="checkbox" class="cbr">
								</td>
								<td>Carl D. Kaya</td>
								<td>9.5</td>
								<td>Express Merchant Service</td>
								<td>
									<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
									</a>
									
									<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
										Delete
									</a>
									
									<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
										Profile
									</a>
								</td>
							</tr>
							
							<tr>
								<td>
									<input type="checkbox" class="cbr">
								</td>
								<td>Lillian J. Earl</td>
								<td>7.6</td>
								<td>Social and human service assistant</td>
								<td>
									<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
									</a>
									
									<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
										Delete
									</a>
									
									<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
										Profile
									</a>
								</td>
							</tr>
							
							<tr>
								<td>
									<input type="checkbox" class="cbr">
								</td>
								<td>April L. Baker <span class="label label-success">New Applicant</span></td>
								<td>6.8</td>
								<td>Set and exhibit designer</td>
								<td>
									<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
									</a>
									
									<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
										Delete
									</a>
									
									<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
										Profile
									</a>
								</td>
							</tr>
						
							<tr>
								<td>
									<input type="checkbox" class="cbr">
								</td>
								<td>Randy S. Smith</td>
								<td>8.7</td>
								<td>Social and human service</td>
								<td>
									<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
									</a>
									
									<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
										Delete
									</a>
									
									<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
										Profile
									</a>
								</td>
							</tr>
							
							<tr>
								<td>
									<input type="checkbox" class="cbr">
								</td>
								<td>Ellen C. Jones</td>
								<td>7.2</td>
								<td>Education and development manager</td>
								<td>
									<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
									</a>
									
									<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
										Delete
									</a>
									
									<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
										Profile
									</a>
								</td>
							</tr>
							
							<tr>
								<td>
									<input type="checkbox" class="cbr">
								</td>
								<td>Carl D. Kaya</td>
								<td>9.5</td>
								<td>Express Merchant Service</td>
								<td>
									<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
									</a>
									
									<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
										Delete
									</a>
									
									<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
										Profile
									</a>
								</td>
							</tr>
							
							<tr>
								<td>
									<input type="checkbox" class="cbr">
								</td>
								<td>Jennifer J. Jefferson</td>
								<td>10</td>
								<td>Maxillofacial surgeon</td>
								<td>
									<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
									</a>
									
									<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
										Delete
									</a>
									
									<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
										Profile
									</a>
								</td>
							</tr>
							
							<tr>
								<td>
									<input type="checkbox" class="cbr">
								</td>
								<td>April L. Baker <span class="label label-success">New Applicant</span></td>
								<td>6.8</td>
								<td>Set and exhibit designer</td>
								<td>
									<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
									</a>
									
									<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
										Delete
									</a>
									
									<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
										Profile
									</a>
								</td>
							</tr>
							
							<tr>
								<td>
									<input type="checkbox" class="cbr">
								</td>
								<td>Lillian J. Earl</td>
								<td>7.6</td>
								<td>Social and human service assistant</td>
								<td>
									<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
									</a>
									
									<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
										Delete
									</a>
									
									<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
										Profile
									</a>
								</td>
							</tr>
							
							<tr>
								<td>
									<input type="checkbox" class="cbr">
								</td>
								<td>Ellen C. Jones</td>
								<td>7.2</td>
								<td>Education and development manager</td>
								<td>
									<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
									</a>
									
									<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
										Delete
									</a>
									
									<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
										Profile
									</a>
								</td>
							</tr>
							
							<tr>
								<td>
									<input type="checkbox" class="cbr">
								</td>
								<td>Randy S. Smith</td>
								<td>8.7</td>
								<td>Social and human service</td>
								<td>
									<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
									</a>
									
									<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
										Delete
									</a>
									
									<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
										Profile
									</a>
								</td>
							</tr>
							
							<tr>
								<td>
									<input type="checkbox" class="cbr">
								</td>
								<td>Jennifer J. Jefferson</td>
								<td>10</td>
								<td>Maxillofacial surgeon</td>
								<td>
									<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
									</a>
									
									<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
										Delete
									</a>
									
									<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
										Profile
									</a>
								</td>
							</tr>
							
							<tr>
								<td>
									<input type="checkbox" class="cbr">
								</td>
								<td>Carl D. Kaya</td>
								<td>9.5</td>
								<td>Express Merchant Service</td>
								<td>
									<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
									</a>
									
									<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
										Delete
									</a>
									
									<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
										Profile
									</a>
								</td>
							</tr>
							
							<tr>
								<td>
									<input type="checkbox" class="cbr">
								</td>
								<td>Lillian J. Earl</td>
								<td>7.6</td>
								<td>Social and human service assistant</td>
								<td>
									<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
									</a>
									
									<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
										Delete
									</a>
									
									<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
										Profile
									</a>
								</td>
							</tr>
							
							<tr>
								<td>
									<input type="checkbox" class="cbr">
								</td>
								<td>April L. Baker <span class="label label-success">New Applicant</span></td>
								<td>6.8</td>
								<td>Set and exhibit designer</td>
								<td>
									<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
									</a>
									
									<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
										Delete
									</a>
									
									<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
										Profile
									</a>
								</td>
							</tr>
						
							<tr>
								<td>
									<input type="checkbox" class="cbr">
								</td>
								<td>Randy S. Smith</td>
								<td>8.7</td>
								<td>Social and human service</td>
								<td>
									<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
									</a>
									
									<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
										Delete
									</a>
									
									<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
										Profile
									</a>
								</td>
							</tr>
							
							<tr>
								<td>
									<input type="checkbox" class="cbr">
								</td>
								<td>Ellen C. Jones</td>
								<td>7.2</td>
								<td>Education and development manager</td>
								<td>
									<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
									</a>
									
									<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
										Delete
									</a>
									
									<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
										Profile
									</a>
								</td>
							</tr>
							
							<tr>
								<td>
									<input type="checkbox" class="cbr">
								</td>
								<td>Carl D. Kaya</td>
								<td>9.5</td>
								<td>Express Merchant Service</td>
								<td>
									<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
									</a>
									
									<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
										Delete
									</a>
									
									<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
										Profile
									</a>
								</td>
							</tr>
							
							<tr>
								<td>
									<input type="checkbox" class="cbr">
								</td>
								<td>Jennifer J. Jefferson</td>
								<td>10</td>
								<td>Maxillofacial surgeon</td>
								<td>
									<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
									</a>
									
									<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
										Delete
									</a>
									
									<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
										Profile
									</a>
								</td>
							</tr>
							
							<tr>
								<td>
									<input type="checkbox" class="cbr">
								</td>
								<td>April L. Baker <span class="label label-success">New Applicant</span></td>
								<td>6.8</td>
								<td>Set and exhibit designer</td>
								<td>
									<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
									</a>
									
									<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
										Delete
									</a>
									
									<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
										Profile
									</a>
								</td>
							</tr>
							
							<tr>
								<td>
									<input type="checkbox" class="cbr">
								</td>
								<td>Lillian J. Earl</td>
								<td>7.6</td>
								<td>Social and human service assistant</td>
								<td>
									<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
									</a>
									
									<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
										Delete
									</a>
									
									<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
										Profile
									</a>
								</td>
							</tr>
							
							<tr>
								<td>
									<input type="checkbox" class="cbr">
								</td>
								<td>Ellen C. Jones</td>
								<td>7.2</td>
								<td>Education and development manager</td>
								<td>
									<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
									</a>
									
									<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
										Delete
									</a>
									
									<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
										Profile
									</a>
								</td>
							</tr>
							
							<tr>
								<td>
									<input type="checkbox" class="cbr">
								</td>
								<td>Randy S. Smith</td>
								<td>8.7</td>
								<td>Social and human service</td>
								<td>
									<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
									</a>
									
									<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
										Delete
									</a>
									
									<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
										Profile
									</a>
								</td>
							</tr>
							
							<tr>
								<td>
									<input type="checkbox" class="cbr">
								</td>
								<td>Jennifer J. Jefferson</td>
								<td>10</td>
								<td>Maxillofacial surgeon</td>
								<td>
									<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
									</a>
									
									<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
										Delete
									</a>
									
									<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
										Profile
									</a>
								</td>
							</tr>
							
							<tr>
								<td>
									<input type="checkbox" class="cbr">
								</td>
								<td>Carl D. Kaya</td>
								<td>9.5</td>
								<td>Express Merchant Service</td>
								<td>
									<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
									</a>
									
									<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
										Delete
									</a>
									
									<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
										Profile
									</a>
								</td>
							</tr>
							
							<tr>
								<td>
									<input type="checkbox" class="cbr">
								</td>
								<td>Lillian J. Earl</td>
								<td>7.6</td>
								<td>Social and human service assistant</td>
								<td>
									<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
									</a>
									
									<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
										Delete
									</a>
									
									<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
										Profile
									</a>
								</td>
							</tr>
							
							<tr>
								<td>
									<input type="checkbox" class="cbr">
								</td>
								<td>April L. Baker <span class="label label-success">New Applicant</span></td>
								<td>6.8</td>
								<td>Set and exhibit designer</td>
								<td>
									<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
									</a>
									
									<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
										Delete
									</a>
									
									<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
										Profile
									</a>
								</td>
							</tr>
						
							<tr>
								<td>
									<input type="checkbox" class="cbr">
								</td>
								<td>Randy S. Smith</td>
								<td>8.7</td>
								<td>Social and human service</td>
								<td>
									<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
									</a>
									
									<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
										Delete
									</a>
									
									<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
										Profile
									</a>
								</td>
							</tr>
							
							<tr>
								<td>
									<input type="checkbox" class="cbr">
								</td>
								<td>Ellen C. Jones</td>
								<td>7.2</td>
								<td>Education and development manager</td>
								<td>
									<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
									</a>
									
									<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
										Delete
									</a>
									
									<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
										Profile
									</a>
								</td>
							</tr>
							
							<tr>
								<td>
									<input type="checkbox" class="cbr">
								</td>
								<td>Carl D. Kaya</td>
								<td>9.5</td>
								<td>Express Merchant Service</td>
								<td>
									<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
									</a>
									
									<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
										Delete
									</a>
									
									<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
										Profile
									</a>
								</td>
							</tr>
							
							<tr>
								<td>
									<input type="checkbox" class="cbr">
								</td>
								<td>Jennifer J. Jefferson</td>
								<td>10</td>
								<td>Maxillofacial surgeon</td>
								<td>
									<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
									</a>
									
									<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
										Delete
									</a>
									
									<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
										Profile
									</a>
								</td>
							</tr>
							
							<tr>
								<td>
									<input type="checkbox" class="cbr">
								</td>
								<td>April L. Baker <span class="label label-success">New Applicant</span></td>
								<td>6.8</td>
								<td>Set and exhibit designer</td>
								<td>
									<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
									</a>
									
									<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
										Delete
									</a>
									
									<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
										Profile
									</a>
								</td>
							</tr>
							
							<tr>
								<td>
									<input type="checkbox" class="cbr">
								</td>
								<td>Lillian J. Earl</td>
								<td>7.6</td>
								<td>Social and human service assistant</td>
								<td>
									<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
									</a>
									
									<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
										Delete
									</a>
									
									<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
										Profile
									</a>
								</td>
							</tr>
							
							<tr>
								<td>
									<input type="checkbox" class="cbr">
								</td>
								<td>Ellen C. Jones</td>
								<td>7.2</td>
								<td>Education and development manager</td>
								<td>
									<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
									</a>
									
									<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
										Delete
									</a>
									
									<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
										Profile
									</a>
								</td>
							</tr>
							
							<tr>
								<td>
									<input type="checkbox" class="cbr">
								</td>
								<td>Randy S. Smith</td>
								<td>8.7</td>
								<td>Social and human service</td>
								<td>
									<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
									</a>
									
									<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
										Delete
									</a>
									
									<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
										Profile
									</a>
								</td>
							</tr>
							
							<tr>
								<td>
									<input type="checkbox" class="cbr">
								</td>
								<td>Jennifer J. Jefferson</td>
								<td>10</td>
								<td>Maxillofacial surgeon</td>
								<td>
									<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
									</a>
									
									<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
										Delete
									</a>
									
									<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
										Profile
									</a>
								</td>
							</tr>
							
							<tr>
								<td>
									<input type="checkbox" class="cbr">
								</td>
								<td>Carl D. Kaya</td>
								<td>9.5</td>
								<td>Express Merchant Service</td>
								<td>
									<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
									</a>
									
									<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
										Delete
									</a>
									
									<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
										Profile
									</a>
								</td>
							</tr>
							
							<tr>
								<td>
									<input type="checkbox" class="cbr">
								</td>
								<td>Lillian J. Earl</td>
								<td>7.6</td>
								<td>Social and human service assistant</td>
								<td>
									<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
									</a>
									
									<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
										Delete
									</a>
									
									<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
										Profile
									</a>
								</td>
							</tr>
							
							<tr>
								<td>
									<input type="checkbox" class="cbr">
								</td>
								<td>April L. Baker <span class="label label-success">New Applicant</span></td>
								<td>6.8</td>
								<td>Set and exhibit designer</td>
								<td>
									<a href="#" class="btn btn-secondary btn-sm btn-icon icon-left">
										Edit
									</a>
									
									<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
										Delete
									</a>
									
									<a href="#" class="btn btn-info btn-sm btn-icon icon-left">
										Profile
									</a>
								</td>
							</tr>
							
						</tbody>
					</table>
					
				</div>
			</div>
			
			
			<!-- Custom column filtering -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Custom column filtering</h3>
					
					<div class="panel-options">
						<a href="#" data-toggle="panel">
							<span class="collapse-icon">&ndash;</span>
							<span class="expand-icon">+</span>
						</a>
						<a href="#" data-toggle="remove">
							&times;
						</a>
					</div>
				</div>
				<div class="panel-body">
					
					<script type="text/javascript">
					jQuery(document).ready(function($)
					{
						$("#example-3").dataTable().yadcf([
							{column_number : 0},
							{column_number : 1, filter_type: 'text'},
							{column_number : 2, filter_type: 'text'},
							{column_number : 3, filter_type: 'range_number'},
							{column_number : 4},
						]);
					});
					</script>
					
					<table class="table table-striped table-bordered" id="example-3">
						<thead>
							<tr class="replace-inputs">
								<th>Rendering engine</th>
								<th>Browser</th>
								<th>Platform(s)</th>
								<th>Engine version</th>
								<th>CSS grade</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Trident</td>
								<td>Internet Explorer 4.0</td>
								<td>Win 95+</td>
								<td class="center">4</td>
								<td class="center">X</td>
							</tr>
							<tr>
								<td>Trident</td>
								<td>Internet Explorer 5.0</td>
								<td>Win 95+</td>
								<td class="center">5</td>
								<td class="center">C</td>
							</tr>
							<tr>
								<td>Trident</td>
								<td>Internet Explorer 5.5</td>
								<td>Win 95+</td>
								<td class="center">5.5</td>
								<td class="center">A</td>
							</tr>
							<tr>
								<td>Trident</td>
								<td>Internet Explorer 6</td>
								<td>Win 98+</td>
								<td class="center">6</td>
								<td class="center">A</td>
							</tr>
							<tr>
								<td>Trident</td>
								<td>Internet Explorer 7</td>
								<td>Win XP SP2+</td>
								<td class="center">7</td>
								<td class="center">A</td>
							</tr>
							<tr>
								<td>Trident</td>
								<td>AOL browser (AOL desktop)</td>
								<td>Win XP</td>
								<td class="center">6</td>
								<td class="center">A</td>
							</tr>
							<tr>
								<td>Gecko</td>
								<td>Firefox 1.0</td>
								<td>Win 98+ / OSX.2+</td>
								<td class="center">1.7</td>
								<td class="center">A</td>
							</tr>
							<tr>
								<td>Gecko</td>
								<td>Firefox 1.5</td>
								<td>Win 98+ / OSX.2+</td>
								<td class="center">1.8</td>
								<td class="center">A</td>
							</tr>
							<tr>
								<td>Gecko</td>
								<td>Firefox 2.0</td>
								<td>Win 98+ / OSX.2+</td>
								<td class="center">1.8</td>
								<td class="center">A</td>
							</tr>
							<tr>
								<td>Gecko</td>
								<td>Firefox 3.0</td>
								<td>Win 2k+ / OSX.3+</td>
								<td class="center">1.9</td>
								<td class="center">A</td>
							</tr>
							<tr>
								<td>Gecko</td>
								<td>Camino 1.0</td>
								<td>OSX.2+</td>
								<td class="center">1.8</td>
								<td class="center">A</td>
							</tr>
							<tr>
								<td>Gecko</td>
								<td>Camino 1.5</td>
								<td>OSX.3+</td>
								<td class="center">1.8</td>
								<td class="center">A</td>
							</tr>
							<tr>
								<td>Gecko</td>
								<td>Netscape 7.2</td>
								<td>Win 95+ / Mac OS 8.6-9.2</td>
								<td class="center">1.7</td>
								<td class="center">A</td>
							</tr>
							<tr>
								<td>Gecko</td>
								<td>Netscape Browser 8</td>
								<td>Win 98SE+</td>
								<td class="center">1.7</td>
								<td class="center">A</td>
							</tr>
							<tr>
								<td>Gecko</td>
								<td>Netscape Navigator 9</td>
								<td>Win 98+ / OSX.2+</td>
								<td class="center">1.8</td>
								<td class="center">A</td>
							</tr>
							<tr>
								<td>Gecko</td>
								<td>Mozilla 1.0</td>
								<td>Win 95+ / OSX.1+</td>
								<td class="center">1</td>
								<td class="center">A</td>
							</tr>
							<tr>
								<td>Gecko</td>
								<td>Mozilla 1.1</td>
								<td>Win 95+ / OSX.1+</td>
								<td class="center">1.1</td>
								<td class="center">A</td>
							</tr>
							<tr>
								<td>Gecko</td>
								<td>Mozilla 1.2</td>
								<td>Win 95+ / OSX.1+</td>
								<td class="center">1.2</td>
								<td class="center">A</td>
							</tr>
							<tr>
								<td>Gecko</td>
								<td>Mozilla 1.3</td>
								<td>Win 95+ / OSX.1+</td>
								<td class="center">1.3</td>
								<td class="center">A</td>
							</tr>
							<tr>
								<td>Gecko</td>
								<td>Mozilla 1.4</td>
								<td>Win 95+ / OSX.1+</td>
								<td class="center">1.4</td>
								<td class="center">A</td>
							</tr>
							<tr>
								<td>Gecko</td>
								<td>Mozilla 1.5</td>
								<td>Win 95+ / OSX.1+</td>
								<td class="center">1.5</td>
								<td class="center">A</td>
							</tr>
							<tr>
								<td>Gecko</td>
								<td>Mozilla 1.6</td>
								<td>Win 95+ / OSX.1+</td>
								<td class="center">1.6</td>
								<td class="center">A</td>
							</tr>
							<tr>
								<td>Gecko</td>
								<td>Mozilla 1.7</td>
								<td>Win 98+ / OSX.1+</td>
								<td class="center">1.7</td>
								<td class="center">A</td>
							</tr>
							<tr>
								<td>Gecko</td>
								<td>Mozilla 1.8</td>
								<td>Win 98+ / OSX.1+</td>
								<td class="center">1.8</td>
								<td class="center">A</td>
							</tr>
							<tr>
								<td>Gecko</td>
								<td>Seamonkey 1.1</td>
								<td>Win 98+ / OSX.2+</td>
								<td class="center">1.8</td>
								<td class="center">A</td>
							</tr>
							<tr>
								<td>Gecko</td>
								<td>Epiphany 2.20</td>
								<td>Gnome</td>
								<td class="center">1.8</td>
								<td class="center">A</td>
							</tr>
							<tr>
								<td>Webkit</td>
								<td>Safari 1.2</td>
								<td>OSX.3</td>
								<td class="center">125.5</td>
								<td class="center">A</td>
							</tr>
							<tr>
								<td>Webkit</td>
								<td>Safari 1.3</td>
								<td>OSX.3</td>
								<td class="center">312.8</td>
								<td class="center">A</td>
							</tr>
							<tr>
								<td>Webkit</td>
								<td>Safari 2.0</td>
								<td>OSX.4+</td>
								<td class="center">419.3</td>
								<td class="center">A</td>
							</tr>
							<tr>
								<td>Webkit</td>
								<td>Safari 3.0</td>
								<td>OSX.4+</td>
								<td class="center">522.1</td>
								<td class="center">A</td>
							</tr>
							<tr>
								<td>Webkit</td>
								<td>OmniWeb 5.5</td>
								<td>OSX.4+</td>
								<td class="center">420</td>
								<td class="center">A</td>
							</tr>
							<tr>
								<td>Webkit</td>
								<td>iPod Touch / iPhone</td>
								<td>iPod</td>
								<td class="center">420.1</td>
								<td class="center">A</td>
							</tr>
							<tr>
								<td>Webkit</td>
								<td>S60</td>
								<td>S60</td>
								<td class="center">413</td>
								<td class="center">A</td>
							</tr>
							<tr>
								<td>Presto</td>
								<td>Opera 7.0</td>
								<td>Win 95+ / OSX.1+</td>
								<td class="center">-</td>
								<td class="center">A</td>
							</tr>
							<tr>
								<td>Presto</td>
								<td>Opera 7.5</td>
								<td>Win 95+ / OSX.2+</td>
								<td class="center">-</td>
								<td class="center">A</td>
							</tr>
							<tr>
								<td>Presto</td>
								<td>Opera 8.0</td>
								<td>Win 95+ / OSX.2+</td>
								<td class="center">-</td>
								<td class="center">A</td>
							</tr>
							<tr>
								<td>Presto</td>
								<td>Opera 8.5</td>
								<td>Win 95+ / OSX.2+</td>
								<td class="center">-</td>
								<td class="center">A</td>
							</tr>
							<tr>
								<td>Presto</td>
								<td>Opera 9.0</td>
								<td>Win 95+ / OSX.3+</td>
								<td class="center">-</td>
								<td class="center">A</td>
							</tr>
							<tr>
								<td>Presto</td>
								<td>Opera 9.2</td>
								<td>Win 88+ / OSX.3+</td>
								<td class="center">-</td>
								<td class="center">A</td>
							</tr>
							<tr>
								<td>Presto</td>
								<td>Opera 9.5</td>
								<td>Win 88+ / OSX.3+</td>
								<td class="center">-</td>
								<td class="center">A</td>
							</tr>
							<tr>
								<td>Presto</td>
								<td>Opera for Wii</td>
								<td>Wii</td>
								<td class="center">-</td>
								<td class="center">A</td>
							</tr>
							<tr>
								<td>Presto</td>
								<td>Nokia N800</td>
								<td>N800</td>
								<td class="center">-</td>
								<td class="center">A</td>
							</tr>
							<tr>
								<td>Presto</td>
								<td>Nintendo DS browser</td>
								<td>Nintendo DS</td>
								<td class="center">8.5</td>
								<td class="center">C/A<sup>1</sup>
								</td>
							</tr>
							<tr>
								<td>KHTML</td>
								<td>Konqureror 3.1</td>
								<td>KDE 3.1</td>
								<td class="center">3.1</td>
								<td class="center">C</td>
							</tr>
							<tr>
								<td>KHTML</td>
								<td>Konqureror 3.3</td>
								<td>KDE 3.3</td>
								<td class="center">3.3</td>
								<td class="center">A</td>
							</tr>
							<tr>
								<td>KHTML</td>
								<td>Konqureror 3.5</td>
								<td>KDE 3.5</td>
								<td class="center">3.5</td>
								<td class="center">A</td>
							</tr>
							<tr>
								<td>Tasman</td>
								<td>Internet Explorer 4.5</td>
								<td>Mac OS 8-9</td>
								<td class="center">-</td>
								<td class="center">X</td>
							</tr>
							<tr>
								<td>Tasman</td>
								<td>Internet Explorer 5.1</td>
								<td>Mac OS 7.6-9</td>
								<td class="center">1</td>
								<td class="center">C</td>
							</tr>
							<tr>
								<td>Tasman</td>
								<td>Internet Explorer 5.2</td>
								<td>Mac OS 8-X</td>
								<td class="center">1</td>
								<td class="center">C</td>
							</tr>
							<tr>
								<td>Misc</td>
								<td>NetFront 3.1</td>
								<td>Embedded devices</td>
								<td class="center">-</td>
								<td class="center">C</td>
							</tr>
							<tr>
								<td>Misc</td>
								<td>NetFront 3.4</td>
								<td>Embedded devices</td>
								<td class="center">-</td>
								<td class="center">A</td>
							</tr>
							<tr>
								<td>Misc</td>
								<td>Dillo 0.8</td>
								<td>Embedded devices</td>
								<td class="center">-</td>
								<td class="center">X</td>
							</tr>
							<tr>
								<td>Misc</td>
								<td>Links</td>
								<td>Text only</td>
								<td class="center">-</td>
								<td class="center">X</td>
							</tr>
							<tr>
								<td>Misc</td>
								<td>Lynx</td>
								<td>Text only</td>
								<td class="center">-</td>
								<td class="center">X</td>
							</tr>
							<tr>
								<td>Misc</td>
								<td>IE Mobile</td>
								<td>Windows Mobile 6</td>
								<td class="center">-</td>
								<td class="center">C</td>
							</tr>
							<tr>
								<td>Misc</td>
								<td>PSP browser</td>
								<td>PSP</td>
								<td class="center">-</td>
								<td class="center">C</td>
							</tr>
							<tr>
								<td>Other browsers</td>
								<td>All others</td>
								<td>-</td>
								<td class="center">-</td>
								<td class="center">U</td>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<th>Rendering engine</th>
								<th>Browser</th>
								<th>Platform(s)</th>
								<th>Engine version</th>
								<th>CSS grade</th>
							</tr>
						</tfoot>
					</table>
					
				</div>
			</div>
			
			
			<!-- Table exporting -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Table exporting</h3>
					
					<div class="panel-options">
						<a href="#" data-toggle="panel">
							<span class="collapse-icon">&ndash;</span>
							<span class="expand-icon">+</span>
						</a>
						<a href="#" data-toggle="remove">
							&times;
						</a>
					</div>
				</div>
				<div class="panel-body">
					
					<script type="text/javascript">
					jQuery(document).ready(function($)
					{
						$("#example-4").dataTable({
							dom: "<'row'<'col-sm-5'l><'col-sm-7'Tf>r>"+
								 "t"+
								 "<'row'<'col-xs-6'i><'col-xs-6'p>>",
							tableTools: {
								sSwfPath: "assets/js/datatables/tabletools/copy_csv_xls_pdf.swf"
							}
						});
					});
					</script>
					
					<table class="table table-bordered table-striped" id="example-4">
						<thead>
							<tr>
								<th>Name</th>
								<th>Position</th>
								<th>Office</th>
								<th>Age</th>
								<th>Start date</th>
								<th>Salary</th>
							</tr>
						</thead>
					 
						<tfoot>
							<tr>
								<th>Name</th>
								<th>Position</th>
								<th>Office</th>
								<th>Age</th>
								<th>Start date</th>
								<th>Salary</th>
							</tr>
						</tfoot>
					 
						<tbody>
							<tr>
								<td>Tiger Nixon</td>
								<td>System Architect</td>
								<td>Edinburgh</td>
								<td>61</td>
								<td>2011/04/25</td>
								<td>$320,800</td>
							</tr>
							<tr>
								<td>Garrett Winters</td>
								<td>Accountant</td>
								<td>Tokyo</td>
								<td>63</td>
								<td>2011/07/25</td>
								<td>$170,750</td>
							</tr>
							<tr>
								<td>Ashton Cox</td>
								<td>Junior Technical Author</td>
								<td>San Francisco</td>
								<td>66</td>
								<td>2009/01/12</td>
								<td>$86,000</td>
							</tr>
							<tr>
								<td>Cedric Kelly</td>
								<td>Senior Javascript Developer</td>
								<td>Edinburgh</td>
								<td>22</td>
								<td>2012/03/29</td>
								<td>$433,060</td>
							</tr>
							<tr>
								<td>Airi Satou</td>
								<td>Accountant</td>
								<td>Tokyo</td>
								<td>33</td>
								<td>2008/11/28</td>
								<td>$162,700</td>
							</tr>
							<tr>
								<td>Brielle Williamson</td>
								<td>Integration Specialist</td>
								<td>New York</td>
								<td>61</td>
								<td>2012/12/02</td>
								<td>$372,000</td>
							</tr>
							<tr>
								<td>Herrod Chandler</td>
								<td>Sales Assistant</td>
								<td>San Francisco</td>
								<td>59</td>
								<td>2012/08/06</td>
								<td>$137,500</td>
							</tr>
							<tr>
								<td>Rhona Davidson</td>
								<td>Integration Specialist</td>
								<td>Tokyo</td>
								<td>55</td>
								<td>2010/10/14</td>
								<td>$327,900</td>
							</tr>
							<tr>
								<td>Colleen Hurst</td>
								<td>Javascript Developer</td>
								<td>San Francisco</td>
								<td>39</td>
								<td>2009/09/15</td>
								<td>$205,500</td>
							</tr>
							<tr>
								<td>Sonya Frost</td>
								<td>Software Engineer</td>
								<td>Edinburgh</td>
								<td>23</td>
								<td>2008/12/13</td>
								<td>$103,600</td>
							</tr>
							<tr>
								<td>Jena Gaines</td>
								<td>Office Manager</td>
								<td>London</td>
								<td>30</td>
								<td>2008/12/19</td>
								<td>$90,560</td>
							</tr>
							<tr>
								<td>Quinn Flynn</td>
								<td>Support Lead</td>
								<td>Edinburgh</td>
								<td>22</td>
								<td>2013/03/03</td>
								<td>$342,000</td>
							</tr>
							<tr>
								<td>Charde Marshall</td>
								<td>Regional Director</td>
								<td>San Francisco</td>
								<td>36</td>
								<td>2008/10/16</td>
								<td>$470,600</td>
							</tr>
							<tr>
								<td>Haley Kennedy</td>
								<td>Senior Marketing Designer</td>
								<td>London</td>
								<td>43</td>
								<td>2012/12/18</td>
								<td>$313,500</td>
							</tr>
							<tr>
								<td>Tatyana Fitzpatrick</td>
								<td>Regional Director</td>
								<td>London</td>
								<td>19</td>
								<td>2010/03/17</td>
								<td>$385,750</td>
							</tr>
							<tr>
								<td>Michael Silva</td>
								<td>Marketing Designer</td>
								<td>London</td>
								<td>66</td>
								<td>2012/11/27</td>
								<td>$198,500</td>
							</tr>
							<tr>
								<td>Paul Byrd</td>
								<td>Chief Financial Officer (CFO)</td>
								<td>New York</td>
								<td>64</td>
								<td>2010/06/09</td>
								<td>$725,000</td>
							</tr>
							<tr>
								<td>Gloria Little</td>
								<td>Systems Administrator</td>
								<td>New York</td>
								<td>59</td>
								<td>2009/04/10</td>
								<td>$237,500</td>
							</tr>
							<tr>
								<td>Bradley Greer</td>
								<td>Software Engineer</td>
								<td>London</td>
								<td>41</td>
								<td>2012/10/13</td>
								<td>$132,000</td>
							</tr>
							<tr>
								<td>Dai Rios</td>
								<td>Personnel Lead</td>
								<td>Edinburgh</td>
								<td>35</td>
								<td>2012/09/26</td>
								<td>$217,500</td>
							</tr>
							<tr>
								<td>Jenette Caldwell</td>
								<td>Development Lead</td>
								<td>New York</td>
								<td>30</td>
								<td>2011/09/03</td>
								<td>$345,000</td>
							</tr>
							<tr>
								<td>Yuri Berry</td>
								<td>Chief Marketing Officer (CMO)</td>
								<td>New York</td>
								<td>40</td>
								<td>2009/06/25</td>
								<td>$675,000</td>
							</tr>
							<tr>
								<td>Caesar Vance</td>
								<td>Pre-Sales Support</td>
								<td>New York</td>
								<td>21</td>
								<td>2011/12/12</td>
								<td>$106,450</td>
							</tr>
							<tr>
								<td>Doris Wilder</td>
								<td>Sales Assistant</td>
								<td>Sidney</td>
								<td>23</td>
								<td>2010/09/20</td>
								<td>$85,600</td>
							</tr>
							<tr>
								<td>Angelica Ramos</td>
								<td>Chief Executive Officer (CEO)</td>
								<td>London</td>
								<td>47</td>
								<td>2009/10/09</td>
								<td>$1,200,000</td>
							</tr>
							<tr>
								<td>Gavin Joyce</td>
								<td>Developer</td>
								<td>Edinburgh</td>
								<td>42</td>
								<td>2010/12/22</td>
								<td>$92,575</td>
							</tr>
							<tr>
								<td>Jennifer Chang</td>
								<td>Regional Director</td>
								<td>Singapore</td>
								<td>28</td>
								<td>2010/11/14</td>
								<td>$357,650</td>
							</tr>
							<tr>
								<td>Brenden Wagner</td>
								<td>Software Engineer</td>
								<td>San Francisco</td>
								<td>28</td>
								<td>2011/06/07</td>
								<td>$206,850</td>
							</tr>
							<tr>
								<td>Fiona Green</td>
								<td>Chief Operating Officer (COO)</td>
								<td>San Francisco</td>
								<td>48</td>
								<td>2010/03/11</td>
								<td>$850,000</td>
							</tr>
							<tr>
								<td>Shou Itou</td>
								<td>Regional Marketing</td>
								<td>Tokyo</td>
								<td>20</td>
								<td>2011/08/14</td>
								<td>$163,000</td>
							</tr>
							<tr>
								<td>Michelle House</td>
								<td>Integration Specialist</td>
								<td>Sidney</td>
								<td>37</td>
								<td>2011/06/02</td>
								<td>$95,400</td>
							</tr>
							<tr>
								<td>Suki Burks</td>
								<td>Developer</td>
								<td>London</td>
								<td>53</td>
								<td>2009/10/22</td>
								<td>$114,500</td>
							</tr>
							<tr>
								<td>Prescott Bartlett</td>
								<td>Technical Author</td>
								<td>London</td>
								<td>27</td>
								<td>2011/05/07</td>
								<td>$145,000</td>
							</tr>
							<tr>
								<td>Gavin Cortez</td>
								<td>Team Leader</td>
								<td>San Francisco</td>
								<td>22</td>
								<td>2008/10/26</td>
								<td>$235,500</td>
							</tr>
							<tr>
								<td>Martena Mccray</td>
								<td>Post-Sales support</td>
								<td>Edinburgh</td>
								<td>46</td>
								<td>2011/03/09</td>
								<td>$324,050</td>
							</tr>
							<tr>
								<td>Unity Butler</td>
								<td>Marketing Designer</td>
								<td>San Francisco</td>
								<td>47</td>
								<td>2009/12/09</td>
								<td>$85,675</td>
							</tr>
							<tr>
								<td>Howard Hatfield</td>
								<td>Office Manager</td>
								<td>San Francisco</td>
								<td>51</td>
								<td>2008/12/16</td>
								<td>$164,500</td>
							</tr>
							<tr>
								<td>Hope Fuentes</td>
								<td>Secretary</td>
								<td>San Francisco</td>
								<td>41</td>
								<td>2010/02/12</td>
								<td>$109,850</td>
							</tr>
							<tr>
								<td>Vivian Harrell</td>
								<td>Financial Controller</td>
								<td>San Francisco</td>
								<td>62</td>
								<td>2009/02/14</td>
								<td>$452,500</td>
							</tr>
							<tr>
								<td>Timothy Mooney</td>
								<td>Office Manager</td>
								<td>London</td>
								<td>37</td>
								<td>2008/12/11</td>
								<td>$136,200</td>
							</tr>
							<tr>
								<td>Jackson Bradshaw</td>
								<td>Director</td>
								<td>New York</td>
								<td>65</td>
								<td>2008/09/26</td>
								<td>$645,750</td>
							</tr>
							<tr>
								<td>Olivia Liang</td>
								<td>Support Engineer</td>
								<td>Singapore</td>
								<td>64</td>
								<td>2011/02/03</td>
								<td>$234,500</td>
							</tr>
							<tr>
								<td>Bruno Nash</td>
								<td>Software Engineer</td>
								<td>London</td>
								<td>38</td>
								<td>2011/05/03</td>
								<td>$163,500</td>
							</tr>
							<tr>
								<td>Sakura Yamamoto</td>
								<td>Support Engineer</td>
								<td>Tokyo</td>
								<td>37</td>
								<td>2009/08/19</td>
								<td>$139,575</td>
							</tr>
							<tr>
								<td>Thor Walton</td>
								<td>Developer</td>
								<td>New York</td>
								<td>61</td>
								<td>2013/08/11</td>
								<td>$98,540</td>
							</tr>
							<tr>
								<td>Finn Camacho</td>
								<td>Support Engineer</td>
								<td>San Francisco</td>
								<td>47</td>
								<td>2009/07/07</td>
								<td>$87,500</td>
							</tr>
							<tr>
								<td>Serge Baldwin</td>
								<td>Data Coordinator</td>
								<td>Singapore</td>
								<td>64</td>
								<td>2012/04/09</td>
								<td>$138,575</td>
							</tr>
							<tr>
								<td>Zenaida Frank</td>
								<td>Software Engineer</td>
								<td>New York</td>
								<td>63</td>
								<td>2010/01/04</td>
								<td>$125,250</td>
							</tr>
							<tr>
								<td>Zorita Serrano</td>
								<td>Software Engineer</td>
								<td>San Francisco</td>
								<td>56</td>
								<td>2012/06/01</td>
								<td>$115,000</td>
							</tr>
							<tr>
								<td>Jennifer Acosta</td>
								<td>Junior Javascript Developer</td>
								<td>Edinburgh</td>
								<td>43</td>
								<td>2013/02/01</td>
								<td>$75,650</td>
							</tr>
							<tr>
								<td>Cara Stevens</td>
								<td>Sales Assistant</td>
								<td>New York</td>
								<td>46</td>
								<td>2011/12/06</td>
								<td>$145,600</td>
							</tr>
							<tr>
								<td>Hermione Butler</td>
								<td>Regional Director</td>
								<td>London</td>
								<td>47</td>
								<td>2011/03/21</td>
								<td>$356,250</td>
							</tr>
							<tr>
								<td>Lael Greer</td>
								<td>Systems Administrator</td>
								<td>London</td>
								<td>21</td>
								<td>2009/02/27</td>
								<td>$103,500</td>
							</tr>
							<tr>
								<td>Jonas Alexander</td>
								<td>Developer</td>
								<td>San Francisco</td>
								<td>30</td>
								<td>2010/07/14</td>
								<td>$86,500</td>
							</tr>
							<tr>
								<td>Shad Decker</td>
								<td>Regional Director</td>
								<td>Edinburgh</td>
								<td>51</td>
								<td>2008/11/13</td>
								<td>$183,000</td>
							</tr>
							<tr>
								<td>Michael Bruce</td>
								<td>Javascript Developer</td>
								<td>Singapore</td>
								<td>29</td>
								<td>2011/06/27</td>
								<td>$183,000</td>
							</tr>
							<tr>
								<td>Donna Snider</td>
								<td>Customer Support</td>
								<td>New York</td>
								<td>27</td>
								<td>2011/01/25</td>
								<td>$112,000</td>
							</tr>
						</tbody>
					</table>
					
				</div>
			</div>
			<!-- Main Footer -->
			<!-- Choose between footer styles: "footer-type-1" or "footer-type-2" -->
			<!-- Add class "sticky" to  always stick the footer to the end of page (if page contents is small) -->
			<!-- Or class "fixed" to  always fix the footer to the end of page -->
			<footer class="main-footer sticky footer-type-1">
				
				<div class="footer-inner">
				
					<!-- Add your copyright text here -->
					<div class="footer-text">
						&copy; 2014 
						<strong>Xenon</strong> 
						theme by <a href="http://laborator.co" target="_blank">Laborator</a> - <a href="http://themeforest.net/item/xenon-bootstrap-admin-theme/9059661?ref=Laborator" target="_blank">Purchase for only <strong>23$</strong></a>
					</div>
					
					
					<!-- Go to Top Link, just add rel="go-top" to any link to add this functionality -->
					<div class="go-up">
					
						<a href="#" rel="go-top">
							<i class="fa-angle-up"></i>
						</a>
						
					</div>
					
				</div>
				
			</footer>
		</div>
	
			
		<div id="chat" class="fixed"><!-- start: Chat Section -->
			
			<div class="chat-inner">
			
				
				<h2 class="chat-header">
					<a  href="#" class="chat-close" data-toggle="chat">
						<i class="fa-plus-circle rotate-45deg"></i>
					</a>
					
					Chat
					<span class="badge badge-success is-hidden">0</span>
				</h2>
				
				<script type="text/javascript">
				// Here is just a sample how to open chat conversation box
				jQuery(document).ready(function($)
				{
					var $chat_conversation = $(".chat-conversation");
					
					$(".chat-group a").on('click', function(ev)
					{
						ev.preventDefault();
						
						$chat_conversation.toggleClass('is-open');
						
						$(".chat-conversation textarea").trigger('autosize.resize').focus();
					});
					
					$(".conversation-close").on('click', function(ev)
					{
						ev.preventDefault();
						$chat_conversation.removeClass('is-open');
					});
				});
				</script>
				
				
				<div class="chat-group">
					<strong>Favorites</strong>
					
					<a href="#"><span class="user-status is-online"></span> <em>Catherine J. Watkins</em></a>
					<a href="#"><span class="user-status is-online"></span> <em>Nicholas R. Walker</em></a>
					<a href="#"><span class="user-status is-busy"></span> <em>Susan J. Best</em></a>
					<a href="#"><span class="user-status is-idle"></span> <em>Fernando G. Olson</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Brandon S. Young</em></a>
				</div>
				
				
				<div class="chat-group">
					<strong>Work</strong>
					
					<a href="#"><span class="user-status is-busy"></span> <em>Rodrigo E. Lozano</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Robert J. Garcia</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Daniel A. Pena</em></a>
				</div>
				
				
				<div class="chat-group">
					<strong>Other</strong>
					
					<a href="#"><span class="user-status is-online"></span> <em>Dennis E. Johnson</em></a>
					<a href="#"><span class="user-status is-online"></span> <em>Stuart A. Shire</em></a>
					<a href="#"><span class="user-status is-online"></span> <em>Janet I. Matas</em></a>
					<a href="#"><span class="user-status is-online"></span> <em>Mindy A. Smith</em></a>
					<a href="#"><span class="user-status is-busy"></span> <em>Herman S. Foltz</em></a>
					<a href="#"><span class="user-status is-busy"></span> <em>Gregory E. Robie</em></a>
					<a href="#"><span class="user-status is-busy"></span> <em>Nellie T. Foreman</em></a>
					<a href="#"><span class="user-status is-busy"></span> <em>William R. Miller</em></a>
					<a href="#"><span class="user-status is-idle"></span> <em>Vivian J. Hall</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Melinda A. Anderson</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Gary M. Mooneyham</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Robert C. Medina</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Dylan C. Bernal</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Marc P. Sanborn</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Kenneth M. Rochester</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Rachael D. Carpenter</em></a>
				</div>
			
			</div>
			
			<!-- conversation template -->
			<div class="chat-conversation">
				
				<div class="conversation-header">
					<a href="#" class="conversation-close">
						&times;
					</a>
					
					<span class="user-status is-online"></span>
					<span class="display-name">Arlind Nushi</span> 
					<small>Online</small>
				</div>
				
				<ul class="conversation-body">	
					<li>
						<span class="user">Arlind Nushi</span>
						<span class="time">09:00</span>
						<p>Are you here?</p>
					</li>
					<li class="odd">
						<span class="user">Brandon S. Young</span>
						<span class="time">09:25</span>
						<p>This message is pre-queued.</p>
					</li>
					<li>
						<span class="user">Brandon S. Young</span>
						<span class="time">09:26</span>
						<p>Whohoo!</p>
					</li>
					<li class="odd">
						<span class="user">Arlind Nushi</span>
						<span class="time">09:27</span>
						<p>Do you like it?</p>
					</li>
				</ul>
				
				<div class="chat-textarea">
					<textarea class="form-control autogrow" placeholder="Type your message"></textarea>
				</div>
				
			</div>
			
		<!-- end: Chat Section -->
		</div>
	
	</div>
	
	<div class="footer-sticked-chat"><!-- Start: Footer Sticked Chat -->
	
			<script type="text/javascript">
		function toggleSampleChatWindow()
		{
			var $chat_win = jQuery("#sample-chat-window");
	
			$chat_win.toggleClass('open');
	
			if($chat_win.hasClass('open'))
			{
				var $messages = $chat_win.find('.ps-scrollbar');
	
				if($.isFunction($.fn.perfectScrollbar))
				{
					$messages.perfectScrollbar('destroy');
	
					setTimeout(function(){
						$messages.perfectScrollbar();
						$chat_win.find('.form-control').focus();
					}, 300);
				}
			}
	
			jQuery("#sample-chat-window form").on('submit', function(ev)
			{
				ev.preventDefault();
			});
		}
	
		jQuery(document).ready(function($)
		{
			$(".footer-sticked-chat .chat-user, .other-conversations-list a").on('click', function(ev)
			{
				ev.preventDefault();
				toggleSampleChatWindow();
			});
	
			$(".mobile-chat-toggle").on('click', function(ev)
			{
				ev.preventDefault();
	
				$(".footer-sticked-chat").toggleClass('mobile-is-visible');
			});
		});
		</script>
		
		<ul class="chat-conversations list-unstyled">
	
			<!-- Extra Chat Conversations collected not to exceed window width -->
			<li class="browse-more">
				<a href="#" class="chat-user">
					<i class="linecons-comment"></i>
					<span>3</span>
				</a>
	
				<!-- These conversations are hidden in screen -->
				<ul class="other-conversations-list">
					<li>
						<!-- Minimal User Info Link -->
						<a href="#" >
							Catherine J. Watkins
							<span>&times;</span>
						</a>
					</li>
					<li>
						<!-- Minimal User Info Link -->
						<a href="#" >
							Nicholas R. Walker
							<span>&times;</span>
						</a>
					</li>
					<li>
						<!-- Minimal User Info Link -->
						<a href="#" >
							Susan J. Best
							<span>&times;</span>
						</a>
					</li>
				</ul>
			</li>
	
			<li id="sample-chat-window">
				<!-- User Info Link -->
				<a href="#"  class="chat-user">
					<span class="user-status is-online"></span>
					Art Ramadani
				</a>
	
				<span class="badge badge-purple">4</span>
	
				<!-- Conversation Window -->
				<div class="conversation-window">
					<!-- User Info Link in header (used to close the chat bar) -->
					<a href="#"  class="chat-user">
						<span class="close">&times;</span>
	
						<span class="user-status is-online"></span>
						Art Ramadani
					</a>
	
					<ul class="conversation-messages ps-scrollbar ps-scroll-down">
	
						<!-- Will indicate time -->
						<li class="time">Thursday 04, December '14</li>
	
						<li>
							<div class="user-info">
								<a href="#">
									<img src="assets/images/user-1.png" width="30" height="30" alt="user-image" />
								</a>
							</div>
							<div class="message-entry">
								<p>Hello John, how are you?</p>
							</div>
						</li>
	
						<li class="me"><!-- adding class="me" will indicate that "you" are sending a message -->
							<div class="message-entry">
								<p>Hi Art, I am fine :) How about you?</p>
							</div>
							<div class="user-info">
								<a href="#">
									<img src="assets/images/user-4.png" width="30" height="30" alt="user-image" />
								</a>
							</div>
						</li>
	
						<li>
							<div class="user-info">
								<a href="#">
									<img src="assets/images/user-1.png" width="30" height="30" alt="user-image" />
								</a>
							</div>
							<div class="message-entry">
								<p>Warmth his law design say are person. Pronounce suspected in belonging conveying ye repulsive.</p>
							</div>
						</li>
	
						<li class="me"><!-- adding class="me" will indicate that "you" are sending a message -->
							<div class="message-entry">
								<p>Comfort reached gay perhaps chamber his six detract besides add. Moonlight newspaper.</p>
								<p>Timed voice share led his widen noisy young.</p>
								<p>His six detract besides add moonlight newspaper.</p>
							</div>
							<div class="user-info">
								<a href="#">
									<img src="assets/images/user-4.png" width="30" height="30" alt="user-image" />
								</a>
							</div>
						</li>
	
						<li>
							<div class="user-info">
								<a href="#">
									<img src="assets/images/user-1.png" width="30" height="30" alt="user-image" />
								</a>
							</div>
							<div class="message-entry">
								<p>Hello John, how are you?</p>
							</div>
						</li>
	
						<li class="me"><!-- adding class="me" will indicate that "you" are sending a message -->
							<div class="message-entry">
								<p>Hi Art, I am fine :) How about you?</p>
							</div>
							<div class="user-info">
								<a href="#">
									<img src="assets/images/user-4.png" width="30" height="30" alt="user-image" />
								</a>
							</div>
						</li>
	
						<li>
							<div class="user-info">
								<a href="#">
									<img src="assets/images/user-1.png" width="30" height="30" alt="user-image" />
								</a>
							</div>
							<div class="message-entry">
								<p>Hello John, how are you?</p>
							</div>
						</li>
	
						<!-- Will indicate time -->
						<li class="time">Today 17:12</li>
	
						<li class="me"><!-- adding class="me" will indicate that "you" are sending a message -->
							<div class="message-entry">
								<p>Hi Art, I am fine :) How about you?</p>
	
														</div>
							<div class="user-info">
								<a href="#">
									<img src="assets/images/user-4.png" width="30" height="30" alt="user-image" />
								</a>
							</div>
						</li>
	
					</ul>
	
					<form method="post" class="chat-form">
						<input type="text" class="form-control"  placeholder="Enter your message..." />
					</form>
				</div>
			</li>
	
			<li>
				<!-- User Info Link -->
				<a href="#"  class="chat-user">
					<span class="user-status is-idle"></span>
					Ylli Pylla
				</a>
			</li>
	
			<li>
				<!-- User Info Link -->
				<a href="#"  class="chat-user">
					<span class="user-status is-busy"></span>
					Arlind Nushi
				</a>
			</li>
	
		</ul>
	
		<a href="#" class="mobile-chat-toggle">
			<i class="linecons-comment"></i>
			<span class="num">6</span>
			<span class="badge badge-purple">4</span>
		</a>
	
	<!-- End: Footer Sticked Chat -->
	</div>
	
	




	<!-- Imported styles on this page -->
	<link rel="stylesheet" href="assets/js/datatables/dataTables.bootstrap.css">

	<!-- Bottom Scripts -->
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/TweenMax.min.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/xenon-api.js"></script>
	<script src="assets/js/xenon-toggles.js"></script>
	<script src="assets/js/datatables/js/jquery.dataTables.min.js"></script>


	<!-- Imported scripts on this page -->
	<script src="assets/js/datatables/dataTables.bootstrap.js"></script>
	<script src="assets/js/datatables/yadcf/jquery.dataTables.yadcf.js"></script>
	<script src="assets/js/datatables/tabletools/dataTables.tableTools.min.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="assets/js/xenon-custom.js"></script>

</body>
</html>