<?php
/*session_start();
if(auto_logout("session_time"))
{
        session_unset();
        session_destroy();
        header("Location: index.php");         
        exit;
} 
function auto_logout($field)
{
    $t = time();
    $t0 = $_SESSION[$field];
    $diff = $t - $t0;
	//echo $t ."|".$t0;
    if ($diff > 1500 || !isset($t0))
    {          
        return true;
    }
    else
    {
        $_SESSION[$field] = time();
    }
}*/
//echo "<div> user name  ".$_SESSION['team'];
//echo "<div>session id  ".$_SESSION['sid'];
?>
<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head><base href="">
		<meta charset="utf-8" />
		<title>PMC UC</title>
		<meta name="description" content="No aside layout examples" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Page Vendors Styles(used by this page)-->
		<link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css?v=7.0.3" rel="stylesheet" type="text/css" />
		<!--begin::Page Vendors Styles(used by this page)-->
		<link href="assets/plugins/custom/datatables/datatables.bundle.css?v=7.0.3" rel="stylesheet" type="text/css" />
		<!--end::Page Vendors Styles-->
		<!--begin::Global Theme Styles(used by all pages)-->
		<link href="assets/plugins/global/plugins.bundle.css?v=7.0.3" rel="stylesheet" type="text/css" />
		<link href="assets/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.3" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css?v=7.0.3" rel="stylesheet" type="text/css" />
		<link href="assets/css/jstree.css" rel="stylesheet" type="text/css" />

		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<link href="assets/css/themes/layout/header/base/light.css?v=7.0.3" rel="stylesheet" type="text/css" />
		<link href="assets/css/themes/layout/header/menu/light.css?v=7.0.3" rel="stylesheet" type="text/css" />
		<link href="assets/css/themes/layout/brand/light.css?v=7.0.3" rel="stylesheet" type="text/css" />
		<link href="assets/css/themes/layout/aside/dark.css?v=7.0.3" rel="stylesheet" type="text/css" />
		<link href="assets/css/custom.css" rel="stylesheet" type="text/css" />
		<script src='https://unpkg.com/@turf/turf/turf.min.js'></script>
<script src = "https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>		<!--end::Layout Themes
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />-->
		<!--Leaflet-->
 <link rel="stylesheet" href="https://openlayers.org/en/v4.6.5/css/ol.css" type="text/css">
    <!-- The line below is only needed for old environments like Internet Explorer and Android 4.x -->
    <script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=requestAnimationFrame,Element.prototype.classList,URL"></script>
    <script src="https://openlayers.org/en/v4.6.5/build/ol.js"></script>	
	<style>
	.ol-viewport 
	{
		overflow:auto !important;
	}
	#bdy_Popup_legend {
  position: absolute;
  z-index: 999;
  background-color: #FFFFFF;
  width: 210px;
  left:0;
  bottom: 24px;
  min-height: 25px;
  max-height: 500px;
  overflow-x: hidden;
  overflow-y: auto;
}

#btn_Popup_legend {
  position: absolute;
  z-index: 9999;
  background-color: #273B4F;
  width: 210px;
  left:0;
  top : 50rem;
  bottom: 0;
  min-height: 24px;
  text-align: center;
  color: white;
  font-weight: bold;
  border:1px;
  border-color: black;
}
.text_cut
{
  text-transform: capitalize;
	font-weight: bold;
	font-size: 13px;
	text-overflow: ellipsis;
	overflow: hidden;
	height: 2.2em;
	white-space: nowrap;
	color: white;
	background-color: #757373;
	padding: 6px 12px;
	border-bottom: 1px solid transparent;
	border-top-left-radius: 3px;
	border-top-right-radius: 3px;
	margin-left: 10px;
}
.legend_img
{
margin-left:17px;
}
	</style>
	<style>
	
	.ol-popup table {
color: #323232;
	border: none;
	border-collapse: collapse;
	width: 100%;
}
.ol-popup table tr:nth-child(odd) {
background-color: rgba(76,76,76,0.1);
}
.ol-popup table tr th {
width: 35%;
	text-align: left;
	border-right: 3px solid rgba(0,0,0,0.05);
	padding: .5em .7em;
	word-break: break-word;
	vertical-align: top;
	font-size: 12px;
	font-weight: 400;
	text-transform: capitalize;
}
.ol-popup table tr td {
width: 50%;
padding: .5em .7em;
	word-break: break-word;
	vertical-align: top;
	font-size: 12px;
	font-weight: 400;
}
.ol-popup table tr:nth-child(even) {
background-color: rgba(76,76,76,0.02);
}
.ol-popup-header {
position: relative;
	font-size: 12px;
	align-items: flex-start;
	justify-content: space-between;
	display: flex;
	flex: 0 0 auto;
}
.ol-popup-h1 {
	font-weight: 600;
	padding: 12px 2px;
	margin: 0 auto 0 0;
	display: block;
	flex: 1;
	opacity: 0;
	word-break: break-word;
	opacity: 1;
	animation: esri-fade-in 375ms ease-out;
	font-size: 16px !important;
 text-transform: capitalize;
 color:red;
}
@media (max-width: 480px) {

#leftlogo {
   width: 39% !important;
}
}

	</style>
	</head>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-treeview/1.2.0/bootstrap-treeview.min.css" />
 
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed page-loading">
						<img alt="Logo" src="assets/images/north.jpg" style="display: none;" id='northlogo' />

		<!--begin::Main-->
		<!--begin::Header Mobile-->
		<div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
			<!--begin::Logo-->
			<a href="#">
				<img alt="Logo" src="assets/images/pmclogo.png" style="width:47%;" id='leftlogo' />
			</a>
			<!--end::Logo-->
			<!--begin::Toolbar-->
			<div class="d-flex align-items-center" style="display:none !important;">
				<!--begin::Header Menu Mobile Toggle-->
				<button class="btn p-0 burger-icon ml-4" id="kt_header_mobile_toggle">
					<span></span>
				</button>
				<!--end::Header Menu Mobile Toggle-->
				<!--begin::Topbar Mobile Toggle-->
				<button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
					<span class="svg-icon svg-icon-xl">
						<!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<polygon points="0 0 24 0 24 24 0 24" />
								<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
								<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
							</g>
						</svg>
						<!--end::Svg Icon-->
					</span>
				</button>
				<!--end::Topbar Mobile Toggle-->
			</div>
			<!--end::Toolbar-->
		</div>
		<!--end::Header Mobile-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="d-flex flex-row flex-column-fluid page">
				<!--begin::Wrapper-->
				<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header" class="header header-fixed">
						<!--begin::Container-->
						<div class="container-fluid1 d-flex align-items-stretch justify-content-between">
							<!--begin::Header Menu Wrapper-->
							<div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
								<!--begin::Header Logo-->
								<div class="header-logo">
									<a href="#">
										<img alt="Logo" src="assets/images/pmclogo.png" style="width:50%;margin-left: 15%;" />
									</a>
								</div>
								<!--end::Header Logo-->
								<!--begin::Header Menu-->
								<div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default" style="margin-left:34em;">
									<!--begin::Header Nav-->
									<ul class="menu-nav">
									   <li class="menu-item menu-item-submenu menu-item-rel menu-item-active">
										<h3 style="text-align:center;margin-top:15px;width:135px;">PMC UC
									     <p style="font-size:14px;"><b></b></p>
									   </h3>
									   </li>
									</ul>
									<!--end::Header Nav-->
								</div>
								<!--end::Header Menu-->
							</div>
							<!--end::Header Menu Wrapper-->
							<!--begin::Topbar-->
							<div class="topbar">
							  <!--<div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
							     <img src="assets/media/logos/right-logo.png" alt="Logo" id='logoimg'/>
							  </div>-->
							</div>
							<!--end::Topbar-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Subheader-->
						<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
							<div class="container-fluid1 d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
								<!--begin::Info-->
								<div class="d-flex align-items-center flex-wrap mr-1">
									<!--begin::Page Heading-->
									<div class="d-flex align-items-baseline mr-5">
										<!--begin::Page Title-->
										<h5 class="text-dark font-weight-bold my-2 mr-5" style="margin-left: 15%;">Dashboard</h5>
										<!--end::Page Title-->
										<!--begin::Breadcrumb
										<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
											<li class="breadcrumb-item">
												<a href="" class="text-muted">General</a>
											</li>
										</ul>
										<label class="label label-light-success label-inline font-weight-bold">Welcome,<?php echo $_SESSION['username']?></label>-->
										<!--end::Breadcrumb-->
									</div>
									<!--end::Page Heading-->
								</div>
								<!--end::Info-->
								<!--begin::Toolbar-->
								<div class="d-flex align-items-center">
									<!--<span>
									   <a class="btn btn-sm btn-icon btn-bg-light btn-text-primary btn-hover-primary" href="#" onclick="tabletoggle(this)" style="margin-left:5px;">
											<i class="fa fa-table"></i>
										</a>
									</span>-->
								</div>
								<!--end::Toolbar-->
							</div>
						</div>
						<!--end::Subheader-->
						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container-fluid" style="width:100%;overflow:hidden;">
							<!--begin::Dashboard-->
							<div class="row">
							    <div class="col-md-3">
							    <div class="col bg-light-primary px-6 py-8 rounded-xl mr-7 mb-7">
															<span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<polygon points="0 0 24 0 24 24 0 24"></polygon>
																		<path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
																		<path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
															<a href="#" class="text-primary font-weight-bold mt-2">Total Users : <label id="lbl_tot_users">0</label></a>
														</div>
														</div>
														<div class="col-md-3">
														<div class="col bg-light-warning px-6 py-8 rounded-xl mr-7 mb-7">
															<span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24"></rect>
																		<rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5"></rect>
																		<rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5"></rect>
																		<rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5"></rect>
																		<rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5"></rect>
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
															<a href="#" class="text-warning font-weight-bold">Total Complaints : <label id="lbl_tot_complaints">0</label></a>
														</div>
														</div>
														<div class="col-md-3" style="display:none;">
														<div class="col bg-light-danger px-6 py-8 rounded-xl mr-7 mb-7">
															<span class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<polygon points="0 0 24 0 24 24 0 24"></polygon>
																		<path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero"></path>
																		<path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3"></path>
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
															<a href="#" class="text-danger font-weight-bold mt-2">Total SiteVisit : <label id="lbl_tot_sitevisit">0</label></a>
														</div>
														</div>
														<div class="col-md-3">
															<div class="col bg-light-success px-6 py-8 rounded-xl mr-7 mb-7">
															<span class="svg-icon svg-icon-3x svg-icon-success d-block my-2">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
																		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24"></rect>
																		<path d="M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z" fill="#000000" opacity="0.3"></path>
																		<path d="M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z" fill="#000000"></path>
																	</g>
																</svg>
																<!--end::Svg Icon-->
															</span>
															<a href="#" class="text-success font-weight-bold mt-2">Total Notice Issued : <label id="lbl_tot_notice">0</label></a>
														</div>
														</div>
													</div>
													<div class="row">
													    <div class="col-md-12">
													        <div class="card card-custom" style="display: none;">
                            									<div class="card-header bg-primary">
                            										<div class="card-title">
                            											<span class="card-icon">
                            												<i class="flaticon-notepad text-primary"></i>
                            											</span>
                            											<h3 class="card-label">User Data</h3>
                            										</div>
                            										<div class="card-toolbar">
                            										</div>
                            									</div>
                            									<div class="card-body">
													                <div class="col-md-12" id="treeview_json"></div>
                                                            	</div>
        								                    </div>
													     </div>
													 </div>
													 <div class="row">
													     <div class="col-md-6">
													         <div class="card card-custom">
                            									<div class="card-header bg-primary">
                            										<div class="card-title">
                            											<span class="card-icon">
                            												<i class="flaticon-notepad text-primary"></i>
                            											</span>
                            											<h3 class="card-label">Status Wise Data</h3>
                            										</div>
                            										<div class="card-toolbar">
                            										</div>
                            									</div>
                            									<div id="dv_status" class="card-body">
													                <div class="col-md-12">
													                    <div id="chart_status" class="d-flex justify-content-center"></div>
													                </div>
                                                            	</div>
        								                    </div>
													      </div>
													      <div class="col-md-6">
													          <div class="card card-custom">
                            									<div class="card-header bg-primary">
                            										<div class="card-title">
                            											<span class="card-icon">
                            												<i class="flaticon-notepad text-primary"></i>
                            											</span>
                            											<h3 class="card-label">Complaint Mode Wise Data</h3>
                            										</div>
                            										<div class="card-toolbar">
                            										</div>
                            									</div>
                            									<div id="dv_mode" class="card-body">
													                <div class="col-md-12">
													                    <div id="chart_mode" class="d-flex justify-content-center"></div>
													                </div>
                                                            	</div>
        								                    </div>
													      </div>
													      <div class="col-md-6">
													           <div class="card card-custom">
                            									<div class="card-header bg-primary">
                            										<div class="card-title">
                            											<span class="card-icon">
                            												<i class="flaticon-notepad text-primary"></i>
                            											</span>
                            											<h3 class="card-label">Notice Type Wise Data</h3>
                            										</div>
                            										<div class="card-toolbar">
                            										</div>
                            									</div>
                            									<div id="dv_notice" class="card-body">
													                <div class="col-md-12">
													                    <div id="chart_notice" class="d-flex justify-content-center"></div>
													                </div>
                                                            	</div>
        								                    </div>
													      </div>
													 </div>
							<!--begin::Row-->
							<div class="row">
									<div class="col-lg-6 col-xxl-6">
										<!--begin::Card-->
        								<div class="card card-custom">
        									<div class="card-header bg-primary">
        										<div class="card-title">
        											<span class="card-icon">
        												<i class="flaticon-notepad text-primary"></i>
        											</span>
        											<h3 class="card-label">BI Data</h3>
        										</div>
        										<div class="card-toolbar">
        										</div>
        									</div>
        									<div class="card-body">
        									<form id="form_register" class="js-validation-signup" novalidate="novalidate">
        																<div class="block-content block-content-full tab-content" style="min-height: 267px;">
        																	<div class="tab-pane active" id="wizard-simple2-step2" role="tabpanel">
        																		<div class="block">
        																			<div class="block-content block-content-full">
        																				<!--begin: Datatable-->
        																				<div id="dv_tbl" class="form-group">
        																				<table class="table table-bordered table-hover table-checkable" id="kt_datatable_bi_data" style="margin-top: 13px !important;">
        																					<thead>
        																						<tr>
        																							<th>BI NAME</th>
        																							<th>TOTAL_COMPLAINT</th>
        																						</tr>
        																					</thead>
        																				</table>
        																				</div>
        																				<!--end: Datatable-->
        																			</div>
        																		</div>
        																	</div>
        																</div>
        															</form>
        										
        									</div>
        								</div>
        								<!--end::Card-->
									</div>
									<div class="col-lg-6 col-xxl-6">
										<!--begin::Card-->
        								<div class="card card-custom">
        									<div class="card-header bg-primary">
        										<div class="card-title">
        											<span class="card-icon">
        												<i class="flaticon-notepad text-primary"></i>
        											</span>
        											<h3 class="card-label">DE COMPLAINT APPROVAL</h3>
        										</div>
        										<div class="card-toolbar">
        										</div>
        									</div>
        									<div class="card-body">
        									<form id="form_register" class="js-validation-signup" novalidate="novalidate">
        																<div class="block-content block-content-full tab-content" style="min-height: 267px;">
        																	<div class="tab-pane active" id="wizard-simple2-step2" role="tabpanel">
        																		<div class="block">
        																			<div class="block-content block-content-full">
        																				<!--begin: Datatable-->
        																				<div id="dv_tbl" class="form-group">
        																				<table class="table table-bordered table-hover table-checkable" id="kt_datatable_de_approval_data" style="margin-top: 13px !important;">
        																					<thead>
        																						<tr>
        																							<th>DE NAME</th>
        																							<th>TOTAL_COMPLAINT</th>
        																							<th>APPROVED_COMPLAINT</th>
        																							<th>PENDING_COMPLAINT</th>
        																						</tr>
        																					</thead>
        																				</table>
        																				</div>
        																				<!--end: Datatable-->
        																			</div>
        																		</div>
        																	</div>
        																</div>
        															</form>
        										
        									</div>
        								</div>
        								<!--end::Card-->
									</div>
									<div class="col-lg-6 col-xxl-6 mt-10">
										<!--begin::Card-->
        								<div class="card card-custom">
        									<div class="card-header bg-primary">
        										<div class="card-title">
        											<span class="card-icon">
        												<i class="flaticon-notepad text-primary"></i>
        											</span>
        											<h3 class="card-label">BI SITEVISIT</h3>
        										</div>
        										<div class="card-toolbar">
        										</div>
        									</div>
        									<div class="card-body">
        									<form id="form_register" class="js-validation-signup" novalidate="novalidate">
        																<div class="block-content block-content-full tab-content" style="min-height: 267px;">
        																	<div class="tab-pane active" id="wizard-simple2-step2" role="tabpanel">
        																		<div class="block">
        																			<div class="block-content block-content-full">
        																				<!--begin: Datatable-->
        																				<div id="dv_tbl" class="form-group">
        																				<table class="table table-bordered table-hover table-checkable" id="kt_datatable_bi_sitevisit" style="margin-top: 13px !important;">
        																					<thead>
        																						<tr>
        																							<th>BI NAME</th>
        																							<th>TOTAL_COMPLAINT</th>
        																							<th>ONSITE_COMPLAINT</th>
        																							<th>OFFSITE_COMPLAINT</th>
        																						</tr>
        																					</thead>
        																				</table>
        																				</div>
        																				<!--end: Datatable-->
        																			</div>
        																		</div>
        																	</div>
        																</div>
        															</form>
        										
        									</div>
        								</div>
        								<!--end::Card-->
									</div>
									<div class="col-lg-6 col-xxl-6 mt-10">
										<!--begin::Card-->
        								<div class="card card-custom">
        									<div class="card-header bg-primary">
        										<div class="card-title">
        											<span class="card-icon">
        												<i class="flaticon-notepad text-primary"></i>
        											</span>
        											<h3 class="card-label">DE NOTICE DISPATCH</h3>
        										</div>
        										<div class="card-toolbar">
        										</div>
        									</div>
        									<div class="card-body">
        									<form id="form_register" class="js-validation-signup" novalidate="novalidate">
        																<div class="block-content block-content-full tab-content" style="min-height: 267px;">
        																	<div class="tab-pane active" id="wizard-simple2-step2" role="tabpanel">
        																		<div class="block">
        																			<div class="block-content block-content-full">
        																				<!--begin: Datatable-->
        																				<div id="dv_tbl" class="form-group">
        																				<table class="table table-bordered table-hover table-checkable" id="kt_datatable_de_notice_dispatch" style="margin-top: 13px !important;">
        																					<thead>
        																						<tr>
        																							<th>DE NAME</th>
        																							<th>TOTAL_COMPLAINT</th>
        																							<th>APPROVED_NOTICE</th>
        																							<th>REJECTED_NOTICE</th>
        																							<th>PENDING_NOTICE</th>
        																						</tr>
        																					</thead>
        																				</table>
        																				</div>
        																				<!--end: Datatable-->
        																			</div>
        																		</div>
        																	</div>
        																</div>
        															</form>
        										
        									</div>
        								</div>
        								<!--end::Card-->
									</div>
								</div>
								<!--end::Row-->
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>
					<!--end::Content-->
					<!--begin::Footer-->
					<div class="footer bg-white d-flex flex-lg-column" id="kt_footer">
						<!--begin::Container-->
						<div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
							<!--begin::Copyright-->
							<div class="text-dark order-2 order-md-1">
								<span class="text-muted font-weight-bold mr-2">2020©</span>
								<a href="#" target="_blank" class="text-dark-75 text-hover-primary">PMC</a>
							</div>
							<!--end::Copyright-->
							<!--begin::Nav-->
							<div class="nav nav-dark">
								<!--<a href="#" class="nav-link pl-0 pr-5">About</a>
								<a href="#" class="nav-link pl-0 pr-5">Team</a>
								<a href="#" class="nav-link pl-0 pr-0">Contact</a>-->
							</div>
							<!--end::Nav-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Footer-->
					
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Main-->
		<!--begin::Chat Panel-->
		<div class="modal modal-sticky modal-sticky-bottom-right" id="kt_chat_modal" role="dialog" data-backdrop="false">
			<div class="modal-dialog modal-sm" role="document">
				<div class="modal-content">
					<!--begin::Card-->
					<div class="card card-custom">
						<!--begin::Header-->
						<div class="card-header align-items-center px-4 py-3">
					
							<div class="text-left flex-grow-1">
								<div class="text-dark-75 font-weight-bold font-size-h5">Layer Legend</div>
								
							</div>
							<div class="text-right flex-grow-1">
								<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-dismiss="modal">
									<i class="ki ki-close icon-1x"></i>
								</button>
							</div>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="card-body">
							<!--begin::Scroll-->
							<div class="scroll scroll-pull" data-height="400" data-mobile-height="350">
								<!--begin::Messages-->
								<div class="messages" id ='legendDiv1'>

								</div>
								<!--end::Messages-->
							</div>
							<!--end::Scroll-->
						</div>
						<!--end::Body-->
						<!--begin::Footer-->
						<div class="card-footer align-items-center">
							<!--begin::Compose-->
						
							<!--begin::Compose-->
						</div>
						<!--end::Footer-->
					</div>
					<!--end::Card-->
				</div>
			</div>
		</div>
		<!--end::Chat Panel-->
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop">
			<span class="svg-icon">
				<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg-->
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<polygon points="0 0 24 0 24 24 0 24" />
						<rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
						<path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
					</g>
				</svg>
				<!--end::Svg Icon-->
			</span>
		</div>
		<!--end::Scrolltop-->

<div class="modal fade" id="tableModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="queryModalLabel">Update Data</h5>
				<input type="hidden" id="hid_id" />
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body" style="overflow-x : auto;">
				<div class="form-group">
					<label for="wizard-simple2-firstname1">Date of Completion Structure</label>
					<div class="col-12">
						<input type='text' id="txt_date_of_completion_structure" class="form-control"/>
					</div>								
				</div>
				<div class="form-group">
					<label for="wizard-simple2-firstname1">No of Spans</label>
					<div class="col-12">
						<input type='text' id="txt_no_of_spans" class="form-control"/>
					</div>								
				</div>
				<div class="form-group">
					<label for="wizard-simple2-firstname1">Total Piers</label>
					<div class="col-12">
						<input type='text' id="txt_total_piers" class="form-control"/>
					</div>								
				</div>
				<div class="form-group">
					<label for="wizard-simple2-firstname1">Piers Completed Till Date</label>
					<div class="col-12">
						<input type='text' id="txt_piers_completed_till_date" class="form-control"/>
					</div>								
				</div>
				<div class="form-group">
					<label for="wizard-simple2-firstname1">No of Girders</label>
					<div class="col-12">
						<input type='text' id="txt_no_of_girders" class="form-control"/>
					</div>								
				</div>
				<div class="form-group">
					<label for="wizard-simple2-firstname1">Girders Launched Till Date</label>
					<div class="col-12">
						<input type='text' id="txt_girders_launched_till_date" class="form-control"/>
					</div>								
				</div>
				<div class="form-group">
					<label for="wizard-simple2-firstname1">Total Deck Slab</label>
					<div class="col-12">
						<input type='text' id="txt_total_deck_slab" class="form-control"/>
					</div>								
				</div>
				<div class="form-group">
					<label for="wizard-simple2-firstname1">Deck Slab Completed Till Date</label>
					<div class="col-12">
						<input type='text' id="txt_deck_slab_completed_till_date" class="form-control"/>
					</div>								
				</div>
			</div>
            <div class="modal-footer">
			<button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
				<button type="button" id="btn_submit" class="btn btn-light-primary font-weight-bold">Submit</button>
                
            </div>
        </div>
    </div>
</div></div>

		<script>var HOST_URL = "https://keenthemes.com/metronic/tools/preview";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
		<!--end::Global Config-->
		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js?v=7.0.3"></script>
		<script src="assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.3"></script>
		<script src="assets/js/scripts.bundle.js?v=7.0.3"></script>
		<script src='assets/js/pages/jstree.js'></script>
		<!--end::Global Theme Bundle-->
		<!--begin::Page Scripts(used by this page )
		<script src="assets/js/pages/widgets.js?v=7.0.3"></script>-->
		<!--end::Page Scripts-->
		<!--begin::Page Vendors(used by this page)-->
		<script src="assets/plugins/custom/datatables/datatables.bundle.js?v=7.0.3"></script>
		<!--end::Page Vendors-->
		<!--end::Page Scripts-->
		<script src="assets/js/CompulsoryValidation.js"></script>
		 <!--<script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.9.1.min.js"></script>-->
  <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-treeview/1.2.0/bootstrap-treeview.min.js"></script>
 <!--start::status chart--> 
 		<script type="text/javascript">
$(document).ready(function(){
  
  //For status wise
  // Shared Colors Definition
const primary = '#6993FF';
const success = '#1BC5BD';
const info = '#8950FC';
const warning = '#FFA800';
const danger = '#F64E60';
var KTApexChartsDemo = function () {
    var _demo12 = function () {
        var lbl_arry = [];
        var val_arry = [];
        $.ajax({
        type: "GET",  
        url: "http://115.124.127.208/PMC/PMC_UC_NEW/_IPHONE/PMC_UC/NEW_UC_WEBSERVICES/notice_status2.php",//"http://115.124.127.208/PMC/PMC_UC_NEW/_IPHONE/PMC_UC/NEW_UC_WEBSERVICES/notice_status2.php",
        dataType: "json",  
         beforeSend: function() {
										// setting a timeout
			$('#dv_status').addClass('spinner');
		},
        success: function(responseText)  
        {
          	var data = typeof responseText != 'object' ? JSON.parse(responseText) : responseText;
			var ddata = data["DATA"][0];
			    lbl_arry.push("onsite_complaint : "+ddata["onsite_complaint"]+"");lbl_arry.push("offsite_complaint : "+ddata["offsite_complaint"]+"");
			    lbl_arry.push("saved_complaint : "+ddata["saved_complaint"]+"");lbl_arry.push("approved_notice : "+ddata["approved_notice"]+"");
			    lbl_arry.push("rejected_notice : "+ddata["rejected_notice"]+"");lbl_arry.push("pending_notice : "+ddata["pending_notice"]+"");
			    val_arry.push(+(ddata["onsite_complaint"])); val_arry.push(+(ddata["offsite_complaint"])); val_arry.push(+(ddata["saved_complaint"]));
			    val_arry.push(+(ddata["approved_notice"])); val_arry.push(+(ddata["rejected_notice"])); val_arry.push(+(ddata["pending_notice"]));
			   	const apexChart = "#chart_status";
		var options = {
			series: val_arry,//[44, 55, 13, 43, 22],
			chart: {
				width: 380,
				type: 'pie',
			},
			labels: lbl_arry,//['Team A', 'Team B', 'Team C', 'Team D', 'Team E'],
			responsive: [{
				breakpoint: 480,
				options: {
					chart: {
						width: 200
					},
					legend: {
						position: 'bottom'
					}
				}
			}],
			colors: [primary, success, warning, danger, info]
		};

		var chart = new ApexCharts(document.querySelector(apexChart), options);
		chart.render();
        },
		error: function (err) {
										//alert(err.statusText);
										//notify_toast("danger","fa-times-circle",err.statusText);
		},
		complete: function() {
										$('#dv_status').removeClass('card-body spinner'); //remove
										$('#dv_status').addClass('card-body');
		}   
  });
	
	}
	 var _demo13 = function () {
        var lbl_arry = [];
        var val_arry = [];
        $.ajax({
        type: "GET",  
        url: "http://115.124.127.208/PMC/PMC_UC_NEW/_IPHONE/PMC_UC/NEW_UC_WEBSERVICES/notice_mode_web.php",
        dataType: "json",  
         beforeSend: function() {
										// setting a timeout
			$('#dv_mode').addClass('spinner');
		},
        success: function(responseText)  
        {
          	var data = typeof responseText != 'object' ? JSON.parse(responseText) : responseText;
			var ddata = data["DATA"][1];var ddata1 = data["DATA"][2];var ddata2 = data["DATA"][3];var ddata3 = data["DATA"][0];
			    lbl_arry.push(ddata["COMPLAINT_MODE"]+" : "+ddata["TOT_COUNT"]+"");
			    lbl_arry.push(ddata1["COMPLAINT_MODE"]+" : "+ddata1["TOT_COUNT"]+"");
			    lbl_arry.push(ddata2["COMPLAINT_MODE"]+" : "+ddata2["TOT_COUNT"]+"");
			    lbl_arry.push(ddata3["COMPLAINT_MODE"]+" : "+ddata3["TOT_COUNT"]+"");
			    val_arry.push(+(ddata["TOT_COUNT"])); val_arry.push(+(ddata1["TOT_COUNT"])); val_arry.push(+(ddata2["TOT_COUNT"])); val_arry.push(+(ddata3["TOT_COUNT"]));
			   	const apexChart = "#chart_mode";
		var options = {
			series: val_arry,//[44, 55, 13, 43, 22],
			chart: {
				width: 380,
				type: 'pie',
			},
			labels: lbl_arry,//['Team A', 'Team B', 'Team C', 'Team D', 'Team E'],
			responsive: [{
				breakpoint: 480,
				options: {
					chart: {
						width: 200
					},
					legend: {
						position: 'bottom'
					}
				}
			}],
			colors: [primary, success, warning, danger, info]
		};

		var chart = new ApexCharts(document.querySelector(apexChart), options);
		chart.render();
        },
		error: function (err) {
										//alert(err.statusText);
										//notify_toast("danger","fa-times-circle",err.statusText);
		},
		complete: function() {
										$('#dv_mode').removeClass('card-body spinner'); //remove
										$('#dv_mode').addClass('card-body');
		}   
  });
	
	}
	 var _demo14 = function () {
        var lbl_arry = [];
        var val_arry = [];
        $.ajax({
        type: "GET",  
        url: "http://115.124.127.208/PMC/PMC_UC_NEW/_IPHONE/PMC_UC/NEW_UC_WEBSERVICES/MIS_web.php",
        dataType: "json",  
         beforeSend: function() {
										// setting a timeout
			$('#dv_notice').addClass('spinner');
		},
        success: function(responseText)  
        {
          	var data = typeof responseText != 'object' ? JSON.parse(responseText) : responseText;
			    for(var i =0;i < data["DATA"].length; i++)
			    {
			        var notice_type = data["DATA"][i]["TYPE_OF_NOTICE"];
			        var notice_val = data["DATA"][i]["TOT_COUNT"];
			        lbl_arry.push(notice_type+" : "+notice_val+"");
			         val_arry.push(+(notice_val));
			    }
			   	const apexChart = "#chart_notice";
		var options = {
			series: val_arry,//[44, 55, 13, 43, 22],
			chart: {
				width: 590,
				type: 'pie',
			},
			labels: lbl_arry,//['Team A', 'Team B', 'Team C', 'Team D', 'Team E'],
			responsive: [{
				breakpoint: 480,
				options: {
					chart: {
						width: 500,
						height: 500
					},
					legend: {
						position: 'bottom'
					}
				}
			}],
			colors: [primary, success, warning, danger, info]
		};

		var chart = new ApexCharts(document.querySelector(apexChart), options);
		chart.render();
        },
		error: function (err) {
										//alert(err.statusText);
										//notify_toast("danger","fa-times-circle",err.statusText);
		},
		complete: function() {
										$('#dv_notice').removeClass('card-body spinner'); //remove
										$('#dv_notice').addClass('card-body');
		}   
  });
	
	}
	return {
		// public functions
		init: function () {
			_demo12();
			_demo13();
			_demo14();
		}
	};
}();
 jQuery(document).ready(function () {
	KTApexChartsDemo.init();
});  
});
</script>
  <!--end::status chart-->
  
		<script type="text/javascript">
$(document).ready(function(){
  
  //For treeview
   /*var treeData;
   
   $.ajax({
        type: "GET",  
        url: "DAL/mis_user_data.php",
        dataType: "json",       
        success: function(response)  
        {
          initTree(response)
        }   
  });
   
  function initTree(treeData) {
    $('#treeview_json').treeview({data: treeData});
  }*/
   
});
</script>
<script>
get_dash_data();
function get_dash_data()
{
	var test = new FormData();
								//for photo
								var vary = []; var mvary = []; var cnt = 0;
								//txt_desc
								vary.push("pkg_id");
								mvary.push("");
								test.append(vary[0], mvary[0]);
								var servicenm ="get_stat_data.php";
								$(document).ready(function () {
								$.ajax({
									url: "DAL/"+servicenm,
									type: "POST",
									contentType: false,
									processData: false,
									data: test,
								   beforeSend: function() {
										// setting a timeout
										//$('#mn_block').addClass('block block-mode-loading');
									},
									success: function (responseText) {
										var data = typeof responseText != 'object' ? JSON.parse(responseText) : responseText;
										if(data["DATA"] == "SUCCESS")
										{
										    ////lbl_tot_users,lbl_tot_complaints,lbl_tot_sitevisit,lbl_tot_notice
										    document.getElementById("lbl_tot_users").innerHTML = data["TOTAL_USERS"];
										     document.getElementById("lbl_tot_complaints").innerHTML = data["TOTAL_COMPLAINT"];
										      document.getElementById("lbl_tot_sitevisit").innerHTML = data["TOTAL_SITEVISITS"];
										       document.getElementById("lbl_tot_notice").innerHTML = data["TOTAL_NOTICE_DISPATCH"];
										}
									},
									error: function (err) {
										//alert(err.statusText);
										//notify_toast("danger","fa-times-circle",err.statusText);
									},
									complete: function() {
										//$('#mn_block').removeClass('block block-mode-loading'); //remove
										//$('#mn_block').addClass('block');
									}
								});
                       });
}	
get_bi_data();
function get_bi_data()
{
	var test = new FormData();
								//for photo
								var vary = []; var mvary = []; var cnt = 0;
								//txt_desc
								vary.push("pkg_id");
								mvary.push("");
								test.append(vary[0], mvary[0]);
								var servicenm ="get_bi_data.php";
								$(document).ready(function () {
								$.ajax({
									url: "DAL/"+servicenm,
									type: "POST",
									contentType: false,
									processData: false,
									data: test,
								   beforeSend: function() {
										// setting a timeout
										//$('#mn_block').addClass('block block-mode-loading');
									},
									success: function (result) {
										responseResult(result);
									},
									error: function (err) {
										//alert(err.statusText);
										//notify_toast("danger","fa-times-circle",err.statusText);
									},
									complete: function() {
										//$('#mn_block').removeClass('block block-mode-loading'); //remove
										//$('#mn_block').addClass('block');
									}
								});
                       });
}	
function responseResult(responseText)
{
	var data = typeof responseText != 'object' ? JSON.parse(responseText) : responseText;
	if ($("#kt_datatable_bi_data")[0].rows.length > 1){
         // Do something if class exists
		$("#kt_datatable_bi_data").DataTable().destroy();
     }
	var dataJSONArray = data;
	var table = $('#kt_datatable_bi_data');

		// begin first table
		table.DataTable({
			responsive: true,
			data: dataJSONArray,
			columnDefs: [
				
			],
		});
}
//kt_datatable_de_approval_data
get_de_approval_data();
function get_de_approval_data()
{
	var test = new FormData();
								//for photo
								var vary = []; var mvary = []; var cnt = 0;
								//txt_desc
								vary.push("pkg_id");
								mvary.push("");
								test.append(vary[0], mvary[0]);
								var servicenm ="get_de_approval_data.php";
								$(document).ready(function () {
								$.ajax({
									url: "DAL/"+servicenm,
									type: "POST",
									contentType: false,
									processData: false,
									data: test,
								   beforeSend: function() {
										// setting a timeout
										//$('#mn_block').addClass('block block-mode-loading');
									},
									success: function (result) {
										responseResult_de_approval_data(result);
									},
									error: function (err) {
										//alert(err.statusText);
										//notify_toast("danger","fa-times-circle",err.statusText);
									},
									complete: function() {
										//$('#mn_block').removeClass('block block-mode-loading'); //remove
										//$('#mn_block').addClass('block');
									}
								});
                       });
}	
function responseResult_de_approval_data(responseText)
{
	var data = typeof responseText != 'object' ? JSON.parse(responseText) : responseText;
	if ($("#kt_datatable_de_approval_data")[0].rows.length > 1){
         // Do something if class exists
		$("#kt_datatable_de_approval_data").DataTable().destroy();
     }
	var dataJSONArray = data;
	var table = $('#kt_datatable_de_approval_data');

		// begin first table
		table.DataTable({
			responsive: true,
			data: dataJSONArray,
			columnDefs: [
				
			],
		});
}
//kt_datatable_bi_sitevisit
get_bi_sitevisit_data();
function get_bi_sitevisit_data()
{
	var test = new FormData();
								//for photo
								var vary = []; var mvary = []; var cnt = 0;
								//txt_desc
								vary.push("pkg_id");
								mvary.push("");
								test.append(vary[0], mvary[0]);
								var servicenm ="get_bi_sitevisit_data.php";
								$(document).ready(function () {
								$.ajax({
									url: "DAL/"+servicenm,
									type: "POST",
									contentType: false,
									processData: false,
									data: test,
								   beforeSend: function() {
										// setting a timeout
										//$('#mn_block').addClass('block block-mode-loading');
									},
									success: function (result) {
										responseResult_bi_sitevisit_data(result);
									},
									error: function (err) {
										//alert(err.statusText);
										//notify_toast("danger","fa-times-circle",err.statusText);
									},
									complete: function() {
										//$('#mn_block').removeClass('block block-mode-loading'); //remove
										//$('#mn_block').addClass('block');
									}
								});
                       });
}	
function responseResult_bi_sitevisit_data(responseText)
{
	var data = typeof responseText != 'object' ? JSON.parse(responseText) : responseText;
	if ($("#kt_datatable_bi_sitevisit")[0].rows.length > 1){
         // Do something if class exists
		$("#kt_datatable_bi_sitevisit").DataTable().destroy();
     }
	var dataJSONArray = data;
	var table = $('#kt_datatable_bi_sitevisit');

		// begin first table
		table.DataTable({
			responsive: true,
			data: dataJSONArray,
			columnDefs: [
				
			],
		});
}
//kt_datatable_de_notice_dispatch
get_de_notice_dispatch_data();
function get_de_notice_dispatch_data()
{
	var test = new FormData();
								//for photo
								var vary = []; var mvary = []; var cnt = 0;
								//txt_desc
								vary.push("pkg_id");
								mvary.push("");
								test.append(vary[0], mvary[0]);
								var servicenm ="get_de_notice_dispatch_data.php";
								$(document).ready(function () {
								$.ajax({
									url: "DAL/"+servicenm,
									type: "POST",
									contentType: false,
									processData: false,
									data: test,
								   beforeSend: function() {
										// setting a timeout
										//$('#mn_block').addClass('block block-mode-loading');
									},
									success: function (result) {
										responseResult_de_notice_dispatch_data(result);
									},
									error: function (err) {
										//alert(err.statusText);
										//notify_toast("danger","fa-times-circle",err.statusText);
									},
									complete: function() {
										//$('#mn_block').removeClass('block block-mode-loading'); //remove
										//$('#mn_block').addClass('block');
									}
								});
                       });
}	
function responseResult_de_notice_dispatch_data(responseText)
{
	var data = typeof responseText != 'object' ? JSON.parse(responseText) : responseText;
	if ($("#kt_datatable_de_notice_dispatch")[0].rows.length > 1){
         // Do something if class exists
		$("#kt_datatable_de_notice_dispatch").DataTable().destroy();
     }
	var dataJSONArray = data;
	var table = $('#kt_datatable_de_notice_dispatch');

		// begin first table
		table.DataTable({
			responsive: true,
			data: dataJSONArray,
			columnDefs: [
				
			],
		});
}
</script>
<!--begin::Page Scripts(used by this page)
		<script src="assets/js/pages/crud/datatables/data-sources/javascript.js?v=7.0.3"></script>-->
	</body>
	<!--end::Body-->
</html>