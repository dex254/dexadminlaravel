<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from yashadmin.dexignzone.com/tailwind/demo/table-datatable-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 Mar 2024 11:12:57 GMT -->
<head>
	
	<!--Title-->
	<title>Dex information  namalysis page</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="DexignZone">
	<meta name="robots" content="index, follow">

	<meta name="keywords"
		content="YashAdmin, sales Admin Dashboard, Tailwind CSS Template, Web Application, sales Management, Responsive Design, User Experience, Customizable, Modern UI, Dashboard Template, Admin Panel, Tailwind CSS, HTML5, CSS3, JavaScript, Analytics, Products, Admin Template, UI Kit, CRM, Analytics, Responsive Dashboard, responsive admin dashboard, sales dashboard, ui kit, web app, Admin Dashboard, Template, Admin, CMS pages, Authentication, FrontEnd Integration, Web Application UI, Tailwind CSS Framework, User Interface Kit, Financial Dashboard, Customizable Template, Product Management, HTML5/CSS3, CRM Dashboard, Analytics Dashboard, Admin Dashboard UI, Mobile-Friendly Design, UI Components, Dashboard Widgets, Dashboard Framework, Data Visualization, User Experience (UX), Dashboard Widgets, Real-time Analytics, Cross-Browser Compatibility, Interactive Charts, Product Processing, Performance Optimization, Multi-Purpose Template, Efficient Admin Tools, Task Management, Modern Web Technologies, Product Tracking, Responsive Tables, Dashboard Widgets, Invoice Management, Access Control, Modular Design, Product History, Trend Analysis, User-Friendly Interface">

	<meta name="description"
		content="The Yash Admin Sales Management System is a robust and intuitive platform designed to streamline sales operations and enhance business productivity. This comprehensive admin dashboard offers a feature-rich environment tailored specifically for managing sales processes effectively.With its modern and responsive design, Yash Admin provides a seamless user experience across various devices and screen sizes. The user interface is highly customizable, allowing administrators to tailor the dashboard to their specific needs and branding requirements.">

	<meta property="og:title" content="YashAdmin -Sales Management System Tailwind CSS Admin Dashboard Template | DexignZone">
	<meta property="og:description"
		content="The Yash Admin Sales Management System is a robust and intuitive platform designed to streamline sales operations and enhance business productivity. This comprehensive admin dashboard offers a feature-rich environment tailored specifically for managing sales processes effectively.With its modern and responsive design, Yash Admin provides a seamless user experience across various devices and screen sizes. The user interface is highly customizable, allowing administrators to tailor the dashboard to their specific needs and branding requirements.">
	<meta property="og:image" content="../social-image.png">

	<meta name="format-detection" content="telephone=no">

	<meta name="twitter:title" content="YashAdmin -Sales Management System Tailwind CSS Admin Dashboard Template | DexignZone">
	<meta name="twitter:description"
		content="The Yash Admin Sales Management System is a robust and intuitive platform designed to streamline sales operations and enhance business productivity. This comprehensive admin dashboard offers a feature-rich environment tailored specifically for managing sales processes effectively.With its modern and responsive design, Yash Admin provides a seamless user experience across various devices and screen sizes. The user interface is highly customizable, allowing administrators to tailor the dashboard to their specific needs and branding requirements.">
	<meta name="twitter:image" content="../social-image.png">
	<meta name="twitter:card" content="summary_large_image">

	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/gif" href="appassets/images/pre.gif">

	<link rel="stylesheet" href="appassets/icons/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="appassets/icons/line-awesome/css/line-awesome.min.css">
	

    <!-- NICE SELECT -->
    <link href="appassets/vendor/niceselect/css/nice-select.css" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
	<link href="appassets/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">

	<!-- Style css -->
   <link href="appassets/css/style.css" rel="stylesheet">
	
</head>
<body class="selection:text-white selection:bg-primary">
<div id="main-wrapper" class="relative">
<div class="nav-header">
            <a href="mailto:denniskiplagat39@gmail.com" class="brand-logo"><i> Sent mail for assistance
				
				
            </a>
            <div class="nav-control">
                <div class="hamburger">
                    <span class="line">
						<svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M10.7468 5.58925C11.0722 5.26381 11.0722 4.73617 10.7468 4.41073C10.4213 4.0853 9.89369 4.0853 9.56826 4.41073L4.56826 9.41073C4.25277 9.72622 4.24174 10.2342 4.54322 10.5631L9.12655 15.5631C9.43754 15.9024 9.96468 15.9253 10.3039 15.6143C10.6432 15.3033 10.6661 14.7762 10.3551 14.4369L6.31096 10.0251L10.7468 5.58925Z" fill="#452B90"/>
							<path opacity="0.3" d="M16.5801 5.58924C16.9056 5.26381 16.9056 4.73617 16.5801 4.41073C16.2547 4.0853 15.727 4.0853 15.4016 4.41073L10.4016 9.41073C10.0861 9.72622 10.0751 10.2342 10.3766 10.5631L14.9599 15.5631C15.2709 15.9024 15.798 15.9253 16.1373 15.6143C16.4766 15.3033 16.4995 14.7762 16.1885 14.4369L12.1443 10.0251L16.5801 5.58924Z" fill="#452B90"/>
						</svg>
					</span>
                </div>
            </div>
        </div>
		<div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="navbar-collapse justify-between">
                        <div class="header-left">
							<div class="dashboard_bar max-md:hidden dark:text-white">
                                Basic Datatable
                            </div>
                        </div>
                        <div class="header-right flex items-center h-full">
							<div class="input-group search-area flex flex-wrap items-stretch relative max-xl:hidden">
								<input type="text" class="form-control py-1.5 px-3 h-[2.813rem] text-sm placeholder-ph-color text-ph-color outline-none w-[1%] flex-auto rounded-s-md rounded-e-none" placeholder="Search here...">
								<span class="input-group-text min-w-[3.125rem] justify-center flex items-center text-sm pr-4 pl-[5px] leading-[1.5] text-center rounded-e-md"><a href="javascript:void(0)">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0_1_450)">
										<path opacity="0.3" d="M14.2929 16.7071C13.9024 16.3166 13.9024 15.6834 14.2929 15.2929C14.6834 14.9024 15.3166 14.9024 15.7071 15.2929L19.7071 19.2929C20.0976 19.6834 20.0976 20.3166 19.7071 20.7071C19.3166 21.0976 18.6834 21.0976 18.2929 20.7071L14.2929 16.7071Z" fill="#452B90"/>
										<path d="M11 16C13.7614 16 16 13.7614 16 11C16 8.23859 13.7614 6.00002 11 6.00002C8.23858 6.00002 6 8.23859 6 11C6 13.7614 8.23858 16 11 16ZM11 18C7.13401 18 4 14.866 4 11C4 7.13402 7.13401 4.00002 11 4.00002C14.866 4.00002 18 7.13402 18 11C18 14.866 14.866 18 11 18Z" fill="#452B90"/>
										</g>
										<defs>
										<clipPath id="clip0_1_450">
										<rect width="24" height="24" fill="white"/>
										</clipPath>
										</defs>
									</svg>
								</a></span>
							</div>
							<ul class="flex flex-row">
								<li class="nav-item dropdown notification_dropdown flex items-center relative">
									<a class="nav-link relative sm:w-[45px] w-[40px] sm:h-[45px] h-[40px] mx-[5px] max-sm:mr-0 text-center p-2 text-[#464a53] rounded-md sm:text-lg block duration-500 bell dz-theme-mode" href="javascript:void(0);">
										<svg id="icon-light" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24"/>
												<path d="M12,15 C10.3431458,15 9,13.6568542 9,12 C9,10.3431458 10.3431458,9 12,9 C13.6568542,9 15,10.3431458 15,12 C15,13.6568542 13.6568542,15 12,15 Z" fill="#000000" fill-rule="nonzero"/>
												<path d="M19.5,10.5 L21,10.5 C21.8284271,10.5 22.5,11.1715729 22.5,12 C22.5,12.8284271 21.8284271,13.5 21,13.5 L19.5,13.5 C18.6715729,13.5 18,12.8284271 18,12 C18,11.1715729 18.6715729,10.5 19.5,10.5 Z M16.0606602,5.87132034 L17.1213203,4.81066017 C17.7071068,4.22487373 18.6568542,4.22487373 19.2426407,4.81066017 C19.8284271,5.39644661 19.8284271,6.34619408 19.2426407,6.93198052 L18.1819805,7.99264069 C17.5961941,8.57842712 16.6464466,8.57842712 16.0606602,7.99264069 C15.4748737,7.40685425 15.4748737,6.45710678 16.0606602,5.87132034 Z M16.0606602,18.1819805 C15.4748737,17.5961941 15.4748737,16.6464466 16.0606602,16.0606602 C16.6464466,15.4748737 17.5961941,15.4748737 18.1819805,16.0606602 L19.2426407,17.1213203 C19.8284271,17.7071068 19.8284271,18.6568542 19.2426407,19.2426407 C18.6568542,19.8284271 17.7071068,19.8284271 17.1213203,19.2426407 L16.0606602,18.1819805 Z M3,10.5 L4.5,10.5 C5.32842712,10.5 6,11.1715729 6,12 C6,12.8284271 5.32842712,13.5 4.5,13.5 L3,13.5 C2.17157288,13.5 1.5,12.8284271 1.5,12 C1.5,11.1715729 2.17157288,10.5 3,10.5 Z M12,1.5 C12.8284271,1.5 13.5,2.17157288 13.5,3 L13.5,4.5 C13.5,5.32842712 12.8284271,6 12,6 C11.1715729,6 10.5,5.32842712 10.5,4.5 L10.5,3 C10.5,2.17157288 11.1715729,1.5 12,1.5 Z M12,18 C12.8284271,18 13.5,18.6715729 13.5,19.5 L13.5,21 C13.5,21.8284271 12.8284271,22.5 12,22.5 C11.1715729,22.5 10.5,21.8284271 10.5,21 L10.5,19.5 C10.5,18.6715729 11.1715729,18 12,18 Z M4.81066017,4.81066017 C5.39644661,4.22487373 6.34619408,4.22487373 6.93198052,4.81066017 L7.99264069,5.87132034 C8.57842712,6.45710678 8.57842712,7.40685425 7.99264069,7.99264069 C7.40685425,8.57842712 6.45710678,8.57842712 5.87132034,7.99264069 L4.81066017,6.93198052 C4.22487373,6.34619408 4.22487373,5.39644661 4.81066017,4.81066017 Z M4.81066017,19.2426407 C4.22487373,18.6568542 4.22487373,17.7071068 4.81066017,17.1213203 L5.87132034,16.0606602 C6.45710678,15.4748737 7.40685425,15.4748737 7.99264069,16.0606602 C8.57842712,16.6464466 8.57842712,17.5961941 7.99264069,18.1819805 L6.93198052,19.2426407 C6.34619408,19.8284271 5.39644661,19.8284271 4.81066017,19.2426407 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
											</g>
										</svg>
										<svg id="icon-dark" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
										<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
											<rect x="0" y="0" width="24" height="24"/>
											<path d="M12.0700837,4.0003006 C11.3895108,5.17692613 11,6.54297551 11,8 C11,12.3948932 14.5439081,15.9620623 18.9299163,15.9996994 C17.5467214,18.3910707 14.9612535,20 12,20 C7.581722,20 4,16.418278 4,12 C4,7.581722 7.581722,4 12,4 C12.0233848,4 12.0467462,4.00010034 12.0700837,4.0003006 Z" fill="#000000"/>
										</g>
										</svg>	
									</a>
								</li>								
								<li class="nav-item dropdown notification_dropdown flex items-center relative">
									<a data-dz-dropdown="DzNotificationDropdown" class="dz-dropdown nav-link relative sm:w-[45px] w-[40px] sm:h-[45px] h-[40px] mx-[5px] max-sm:mr-0 text-center p-2 text-[#464a53] rounded-md sm:text-lg block duration-500" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
										<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" clip-rule="evenodd" d="M17.5 12H19C19.8284 12 20.5 12.6716 20.5 13.5C20.5 14.3284 19.8284 15 19 15H6C5.17157 15 4.5 14.3284 4.5 13.5C4.5 12.6716 5.17157 12 6 12H7.5L8.05827 6.97553C8.30975 4.71226 10.2228 3 12.5 3C14.7772 3 16.6903 4.71226 16.9417 6.97553L17.5 12Z" fill="#222B40"/>
											<path opacity="0.3" d="M14.5 18C14.5 16.8954 13.6046 16 12.5 16C11.3954 16 10.5 16.8954 10.5 18C10.5 19.1046 11.3954 20 12.5 20C13.6046 20 14.5 19.1046 14.5 18Z" fill="#222B40"/>
										</svg>
									</a>
									<div id="DzNotificationDropdown" class="dz-dropdown-menu absolute z-[9] shadow-[0_0_3.125rem_0_rgba(82,63,105,0.15)] w-[18.5rem] pt-4 mt-0.5 top-full max-md-top-[45px] md:right-0 rounded-md bg-white dark:bg-[#182237] hidden">
										<div id="DZ_W_Notification1" class="widget-media dz-scroll overflow-y-scroll overflow-x-hidden relative p-4" style="height:380px;">
											<ul class="timeline">
												<li>
													<div class="timeline-panel flex items-center relative rounded-md py-[0.8rem] px-3 mx-[-5px] duration-500 hover:bg-[#0d99ff0d]">
														<div class="media flex items-center justify-center w-[2.188rem] h-[2.188rem] bg-[#eee] rounded-full text-[13px] text-center overflow-hidden font-semibold self-start mr-2">
															<img alt="image" width="50" src="appassets/images/avatar/1.jpg">
														</div>
														<div class="media-body">
															<h6 class="mb-1 text-[13px] leading-4">Dr sultads Send you Photo</h6>
															<small class="block text-bs-dropdown-color">29 July 2020 - 02:26 PM</small>
														</div>
													</div>
												</li>
												<li>
													<div class="timeline-panel flex items-center relative rounded-md py-[0.8rem] px-3 mx-[-5px] duration-500 hover:bg-[#0d99ff0d]">
														<div class="media flex items-center justify-center w-[2.188rem] h-[2.188rem] bg-[#eee] rounded-full text-[13px] text-center overflow-hidden font-semibold self-start mr-2 media-info">
															KG
														</div>
														<div class="media-body">
															<h6 class="mb-1 text-[13px] leading-4">Resport created successfully</h6>
															<small class="block text-bs-dropdown-color">29 July 2020 - 02:26 PM</small>
														</div>
													</div>
												</li>
												<li>
													<div class="timeline-panel flex items-center relative rounded-md py-[0.8rem] px-3 mx-[-5px] duration-500 hover:bg-[#0d99ff0d]">
														<div class="media flex items-center justify-center w-[2.188rem] h-[2.188rem] bg-[#eee] rounded-full text-[13px] text-center overflow-hidden font-semibold self-start mr-2 media-success">
															<i class="fa fa-home"></i>
														</div>
														<div class="media-body">
															<h6 class="mb-1 text-[13px] leading-4">Reminder : Treatment Time!</h6>
															<small class="block text-bs-dropdown-color">29 July 2020 - 02:26 PM</small>
														</div>
													</div>
												</li>
												 <li>
													<div class="timeline-panel flex items-center relative rounded-md py-[0.8rem] px-3 mx-[-5px] duration-500 hover:bg-[#0d99ff0d]">
														<div class="media flex items-center justify-center w-[2.188rem] h-[2.188rem] bg-[#eee] rounded-full text-[13px] text-center overflow-hidden font-semibold self-start mr-2">
															<img alt="image" width="50" src="appassets/images/avatar/1.jpg">
														</div>
														<div class="media-body">
															<h6 class="mb-1 text-[13px] leading-4">Dr sultads Send you Photo</h6>
															<small class="block text-bs-dropdown-color">29 July 2020 - 02:26 PM</small>
														</div>
													</div>
												</li>
												<li>
													<div class="timeline-panel flex items-center relative rounded-md py-[0.8rem] px-3 mx-[-5px] duration-500 hover:bg-[#0d99ff0d]">
														<div class="media flex items-center justify-center w-[2.188rem] h-[2.188rem] bg-[#eee] rounded-full text-[13px] text-center overflow-hidden font-semibold self-start mr-2 media-danger">
															KG
														</div>
														<div class="media-body">
															<h6 class="mb-1 text-[13px] leading-4">Resport created successfully</h6>
															<small class="block text-bs-dropdown-color">29 July 2020 - 02:26 PM</small>
														</div>
													</div>
												</li>
												<li>
													<div class="timeline-panel flex items-center relative rounded-md py-[0.8rem] px-3 mx-[-5px] duration-500 hover:bg-[#0d99ff0d]">
														<div class="media flex items-center justify-center w-[2.188rem] h-[2.188rem] bg-[#eee] rounded-full text-[13px] text-center overflow-hidden font-semibold self-start mr-2 media-primary">
															<i class="fa fa-home"></i>
														</div>
														<div class="media-body">
															<h6 class="mb-1 text-[13px] leading-4">Reminder : Treatment Time!</h6>
															<small class="block text-bs-dropdown-color">29 July 2020 - 02:26 PM</small>
														</div>
													</div>
												</li>
												<li>
													<div class="timeline-panel flex items-center relative rounded-md py-[0.8rem] px-3 mx-[-5px] duration-500 hover:bg-[#0d99ff0d]">
														<div class="media flex items-center justify-center w-[2.188rem] h-[2.188rem] bg-[#eee] rounded-full text-[13px] text-center overflow-hidden font-semibold self-start mr-2">
															<img alt="image" width="50" src="appassets/images/avatar/1.jpg">
														</div>
														<div class="media-body">
															<h6 class="mb-1 text-[13px] leading-4">Dr sultads Send you Photo</h6>
															<small class="block text-bs-dropdown-color">29 July 2020 - 02:26 PM</small>
														</div>
													</div>
												</li>
												<li>
													<div class="timeline-panel flex items-center relative rounded-md py-[0.8rem] px-3 mx-[-5px] duration-500 hover:bg-[#0d99ff0d]">
														<div class="media flex items-center justify-center w-[2.188rem] h-[2.188rem] bg-[#eee] rounded-full text-[13px] text-center overflow-hidden font-semibold self-start mr-2 media-info">
															KG
														</div>
														<div class="media-body">
															<h6 class="mb-1 text-[13px] leading-4">Resport created successfully</h6>
															<small class="block text-bs-dropdown-color">29 July 2020 - 02:26 PM</small>
														</div>
													</div>
												</li>
												<li>
													<div class="timeline-panel flex items-center relative rounded-md py-[0.8rem] px-3 mx-[-5px] duration-500 hover:bg-[#0d99ff0d]">
														<div class="media flex items-center justify-center w-[2.188rem] h-[2.188rem] bg-[#eee] rounded-full text-[13px] text-center overflow-hidden font-semibold self-start mr-2 media-success">
															<i class="fa fa-home"></i>
														</div>
														<div class="media-body">
															<h6 class="mb-1 text-[13px] leading-4">Reminder : Treatment Time!</h6>
															<small class="block text-bs-dropdown-color">29 July 2020 - 02:26 PM</small>
														</div>
													</div>
												</li>
												 <li>
													<div class="timeline-panel flex items-center relative rounded-md py-[0.8rem] px-3 mx-[-5px] duration-500 hover:bg-[#0d99ff0d]">
														<div class="media flex items-center justify-center w-[2.188rem] h-[2.188rem] bg-[#eee] rounded-full text-[13px] text-center overflow-hidden font-semibold self-start mr-2">
															<img alt="image" width="50" src="appassets/images/avatar/1.jpg">
														</div>
														<div class="media-body">
															<h6 class="mb-1 text-[13px] leading-4">Dr sultads Send you Photo</h6>
															<small class="block text-bs-dropdown-color">29 July 2020 - 02:26 PM</small>
														</div>
													</div>
												</li>
												<li>
													<div class="timeline-panel flex items-center relative rounded-md py-[0.8rem] px-3 mx-[-5px] duration-500 hover:bg-[#0d99ff0d]">
														<div class="media flex items-center justify-center w-[2.188rem] h-[2.188rem] bg-[#eee] rounded-full text-[13px] text-center overflow-hidden font-semibold self-start mr-2 media-danger">
															KG
														</div>
														<div class="media-body">
															<h6 class="mb-1 text-[13px] leading-4">Resport created successfully</h6>
															<small class="block text-bs-dropdown-color">29 July 2020 - 02:26 PM</small>
														</div>
													</div>
												</li>
												<li>
													<div class="timeline-panel flex items-center relative rounded-md py-[0.8rem] px-3 mx-[-5px] duration-500 hover:bg-[#0d99ff0d]">
														<div class="media flex items-center justify-center w-[2.188rem] h-[2.188rem] bg-[#eee] rounded-full text-[13px] text-center overflow-hidden font-semibold self-start mr-2 media-primary">
															<i class="fa fa-home"></i>
														</div>
														<div class="media-body">
															<h6 class="mb-1 text-[13px] leading-4">Reminder : Treatment Time!</h6>
															<small class="block text-bs-dropdown-color">29 July 2020 - 02:26 PM</small>
														</div>
													</div>
												</li>
											</ul>
										</div>
										<a class="dropdown-item pt-[0.9375rem] px-[1.875rem] pb-[14px] text-center block border-t text-[13px] text-primary border-[#f1f1f1] dark:border-[#ffffff1a]" href="javascript:void(0);">See all notifications <i class="ti-arrow-end"></i></a> 
									</div>
								</li>
								<li class="nav-item dropdown notification_dropdown flex items-center relative">
									<a class="nav-link relative sm:w-[45px] w-[40px] sm:h-[45px] h-[40px] mx-[5px] max-sm:mr-0 text-center p-2 text-[#464a53] rounded-md sm:text-lg block duration-500 bell-link" href="javascript:void(0);">
										<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<g clip-path="url(#clip0_1_463)">
											<path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M6.5 2H18.5C19.0523 2 19.5 2.44772 19.5 3V13C19.5 13.5523 19.0523 14 18.5 14H6.5C5.94772 14 5.5 13.5523 5.5 13V3C5.5 2.44772 5.94772 2 6.5 2ZM14.3 4C13.6562 4 12.9033 4.72985 12.5 5.2C12.0967 4.72985 11.3438 4 10.7 4C9.5604 4 8.9 4.88887 8.9 6.02016C8.9 7.27339 10.1 8.6 12.5 10C14.9 8.6 16.1 7.3 16.1 6.1C16.1 4.96871 15.4396 4 14.3 4Z" fill="#222B40"/>
											<path fill-rule="evenodd" clip-rule="evenodd" d="M4.29275 6.57254L12.5 12.5L20.7073 6.57254C20.9311 6.41086 21.2437 6.46127 21.4053 6.68514C21.4669 6.77034 21.5 6.87278 21.5 6.97788V17C21.5 18.1046 20.6046 19 19.5 19H5.5C4.39543 19 3.5 18.1046 3.5 17V6.97788C3.5 6.70174 3.72386 6.47788 4 6.47788C4.10511 6.47788 4.20754 6.511 4.29275 6.57254Z" fill="#222B40"/>
											</g>
											<defs>
											<clipPath id="clip0_1_463">
											<rect width="24" height="24" fill="white" transform="translate(0.5)"/>
											</clipPath>
											</defs>
										</svg>
	
									</a>
								</li>	
								<li class="nav-item dropdown notification_dropdown flex items-center relative">
									<a data-dz-dropdown="DzSettingDropdown" class="dz-dropdown nav-link relative sm:w-[45px] w-[40px] sm:h-[45px] h-[40px] mx-[5px] max-sm:mr-0 text-center p-2 text-[#464a53] rounded-md sm:text-lg block duration-500" href="javascript:void(0);" >
										<svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" clip-rule="evenodd" d="M3.5 16.87V9.257H21.5V16.931C21.5 20.07 19.5241 22 16.3628 22H8.62733C5.49561 22 3.5 20.03 3.5 16.87ZM8.45938 14.41C8.00494 14.431 7.62953 14.07 7.60977 13.611C7.60977 13.151 7.96542 12.771 8.41987 12.75C8.86443 12.75 9.22997 13.101 9.23985 13.55C9.2596 14.011 8.90395 14.391 8.45938 14.41ZM12.5198 14.41C12.0653 14.431 11.6899 14.07 11.6701 13.611C11.6701 13.151 12.0258 12.771 12.4802 12.75C12.9248 12.75 13.2903 13.101 13.3002 13.55C13.32 14.011 12.9643 14.391 12.5198 14.41ZM16.5505 18.09C16.096 18.08 15.7305 17.7 15.7305 17.24C15.7206 16.78 16.0862 16.401 16.5406 16.391H16.5505C17.0148 16.391 17.3902 16.771 17.3902 17.24C17.3902 17.71 17.0148 18.09 16.5505 18.09ZM11.6701 17.24C11.6899 17.7 12.0653 18.061 12.5198 18.04C12.9643 18.021 13.32 17.641 13.3002 17.181C13.2903 16.731 12.9248 16.38 12.4802 16.38C12.0258 16.401 11.6701 16.78 11.6701 17.24ZM7.59989 17.24C7.61965 17.7 7.99506 18.061 8.44951 18.04C8.89407 18.021 9.24973 17.641 9.22997 17.181C9.22009 16.731 8.85456 16.38 8.40999 16.38C7.95554 16.401 7.59989 16.78 7.59989 17.24ZM15.7404 13.601C15.7404 13.141 16.096 12.771 16.5505 12.761C16.9951 12.761 17.3507 13.12 17.3705 13.561C17.3804 14.021 17.0247 14.401 16.5801 14.41C16.1257 14.42 15.7503 14.07 15.7404 13.611V13.601Z" fill="#222B40"/>
											<path opacity="0.4" d="M3.50336 9.2569C3.5162 8.6699 3.5656 7.5049 3.65846 7.1299C4.13267 5.0209 5.74298 3.6809 8.04485 3.4899H16.9559C19.238 3.6909 20.8681 5.0399 21.3423 7.1299C21.4342 7.4949 21.4836 8.6689 21.4964 9.2569H3.50336Z" fill="#222B40"/>
											<path d="M8.80489 6.59C9.23958 6.59 9.56559 6.261 9.56559 5.82V2.771C9.56559 2.33 9.23958 2 8.80489 2C8.3702 2 8.04419 2.33 8.04419 2.771V5.82C8.04419 6.261 8.3702 6.59 8.80489 6.59Z" fill="#222B40"/>
											<path d="M16.195 6.59C16.6198 6.59 16.9557 6.261 16.9557 5.82V2.771C16.9557 2.33 16.6198 2 16.195 2C15.7603 2 15.4343 2.33 15.4343 2.771V5.82C15.4343 6.261 15.7603 6.59 16.195 6.59Z" fill="#222B40"/>
										</svg>
	
									</a>
									<div id="DzSettingDropdown" class="dz-dropdown-menu absolute z-[9] shadow-[0_0_3.125rem_0_rgba(82,63,105,0.15)] w-[18.5rem] pt-4 mt-0.5 top-full max-md-top-[45px] md:right-0 rounded-md bg-white dark:bg-[#182237] hidden">
										<div id="DZ_W_TimeLine02" class="widget-timeline dz-scroll style-1 overflow-y-scroll overflow-x-hidden h-[23.125rem] p-4 relative">
											<ul class="timeline relative">
												<li class="relative mb-[0.9375rem]">
													<div class="timeline-badge rounded-[50%] h-[1.275rem] absolute top-[0.625rem] w-[1.275rem] bg-white border-2 border-primary-light p-1 primary"></div>
													<a class="timeline-panel text-muted" href="javascript:void(0);">
														<span class="text-xs block mb-[0.3125rem] opacity-80 tracking-[0.0625rem]">10 minutes ago</span>
														<h6 class="text-[13px]">Youtube, a video-sharing website, goes live <strong class="text-primary">$500</strong>.</h6>
													</a>
												</li>
												<li class="relative mb-[0.9375rem]">
													<div class="timeline-badge rounded-[50%] h-[1.275rem] absolute top-[0.625rem] w-[1.275rem] bg-white border-2 border-primary-light p-1 info">
													</div>
													<a class="timeline-panel text-muted" href="javascript:void(0);">
														<span class="text-xs block mb-[0.3125rem] opacity-80 tracking-[0.0625rem]">20 minutes ago</span>
														<h6 class="text-[13px]">New order placed <strong class="text-info">#XF-2356.</strong></h6>
														<p class="text-xs leading-[1.125rem]">Quisque a consequat ante Sit amet magna at volutapt...</p>
													</a>
												</li>
												<li class="relative mb-[0.9375rem]">
													<div class="timeline-badge rounded-[50%] h-[1.275rem] absolute top-[0.625rem] w-[1.275rem] bg-white border-2 border-primary-light p-1 danger">
													</div>
													<a class="timeline-panel text-muted" href="javascript:void(0);">
														<span class="text-xs block mb-[0.3125rem] opacity-80 tracking-[0.0625rem]">30 minutes ago</span>
														<h6 class="text-[13px]">john just buy your product <strong class="text-warning">Sell $250</strong></h6>
													</a>
												</li>
												<li class="relative mb-[0.9375rem]">
													<div class="timeline-badge rounded-[50%] h-[1.275rem] absolute top-[0.625rem] w-[1.275rem] bg-white border-2 border-primary-light p-1 success">
													</div>
													<a class="timeline-panel text-muted" href="javascript:void(0);">
														<span class="text-xs block mb-[0.3125rem] opacity-80 tracking-[0.0625rem]">15 minutes ago</span>
														<h6 class="text-[13px]">StumbleUpon is acquired by eBay. </h6>
													</a>
												</li>
												<li class="relative mb-[0.9375rem]">
													<div class="timeline-badge rounded-[50%] h-[1.275rem] absolute top-[0.625rem] w-[1.275rem] bg-white border-2 border-primary-light p-1 warning">
													</div>
													<a class="timeline-panel text-muted" href="javascript:void(0);">
														<span class="text-xs block mb-[0.3125rem] opacity-80 tracking-[0.0625rem]">20 minutes ago</span>
														<h6 class="text-[13px]">Mashable, a news website and blog, goes live.</h6>
													</a>
												</li>
												<li class="relative mb-[0.9375rem]">
													<div class="timeline-badge rounded-[50%] h-[1.275rem] absolute top-[0.625rem] w-[1.275rem] bg-white border-2 border-primary-light p-1 dark">
													</div>
													<a class="timeline-panel text-muted" href="javascript:void(0);">
														<span class="text-xs block mb-[0.3125rem] opacity-80 tracking-[0.0625rem]">20 minutes ago</span>
														<h6 class="text-[13px]">Mashable, a news website and blog, goes live.</h6>
													</a>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li class="nav-item pl-4 flex items-center relative">
									<div class="dropdown header-profile2">
										<a data-dz-dropdown="DzinfoDropdown" class="dz-dropdown nav-link relative p-2 max-sm:p-0 text-[#464a53] text-lg leading-[1] block duration-500 bg-transparent" href="javascript:void(0);" role="button" data-bs-toggle="dropdown">
											<div class="header-info2 flex items-center text-right">
												<div class="header-media">
													<img src="appassets/images/user.jpg" alt="" class="w-[45px] h-[45px] max-sm:w-[40px] max-sm:h-[40px] rounded-md">
												</div>
											</div>
										</a>
										<div id="DzinfoDropdown" class="dz-dropdown-menu dropdown-menu dropdown-menu-end bg-white dark:bg-[#182237] absolute rounded-md w-[275px] right-0 top-full z-[9] shadow-[0_0_3.125rem_0_rgba(82,63,105,0.15)] py-2 hidden">
											<div class="card border-0 mb-0">
												<div class="card-header relative flex items-center justify-between bg-transparent py-2 sm:px-[1.25rem] px-4 border-b border-[#E6E6E6] dark:border-[#ffffff1a]">
													<div class="flex items-center">
														<img src="appassets/images/user.jpg" class="avatar avatar-md mr-2.5 h-[2.813rem] w-[2.813rem] inline-block object-cover rounded-md" alt="">
														<div>
															<h6 class="text-sm"></h6>
																
														</div>	
													</div>
												</div>
												
												<div class="card-footer px-0 py-2">
													<a href="javascript:void(0);" class="dropdown-item py-[0.6rem] px-[1.25rem] text-base block w-full ai-icon">
														<svg class="inline-block" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path fill-rule="evenodd" clip-rule="evenodd" d="M20.8066 7.62355L20.1842 6.54346C19.6576 5.62954 18.4907 5.31426 17.5755 5.83866V5.83866C17.1399 6.09528 16.6201 6.16809 16.1307 6.04103C15.6413 5.91396 15.2226 5.59746 14.9668 5.16131C14.8023 4.88409 14.7139 4.56833 14.7105 4.24598V4.24598C14.7254 3.72916 14.5304 3.22834 14.17 2.85761C13.8096 2.48688 13.3145 2.2778 12.7975 2.27802H11.5435C11.0369 2.27801 10.5513 2.47985 10.194 2.83888C9.83666 3.19791 9.63714 3.68453 9.63958 4.19106V4.19106C9.62457 5.23686 8.77245 6.07675 7.72654 6.07664C7.40418 6.07329 7.08843 5.98488 6.8112 5.82035V5.82035C5.89603 5.29595 4.72908 5.61123 4.20251 6.52516L3.53432 7.62355C3.00838 8.53633 3.31937 9.70255 4.22997 10.2322V10.2322C4.82187 10.574 5.1865 11.2055 5.1865 11.889C5.1865 12.5725 4.82187 13.204 4.22997 13.5457V13.5457C3.32053 14.0719 3.0092 15.2353 3.53432 16.1453V16.1453L4.16589 17.2345C4.41262 17.6797 4.82657 18.0082 5.31616 18.1474C5.80575 18.2865 6.33061 18.2248 6.77459 17.976V17.976C7.21105 17.7213 7.73116 17.6515 8.21931 17.7821C8.70746 17.9128 9.12321 18.233 9.37413 18.6716C9.53867 18.9488 9.62708 19.2646 9.63043 19.5869V19.5869C9.63043 20.6435 10.4869 21.5 11.5435 21.5H12.7975C13.8505 21.5 14.7055 20.6491 14.7105 19.5961V19.5961C14.7081 19.088 14.9088 18.6 15.2681 18.2407C15.6274 17.8814 16.1154 17.6806 16.6236 17.6831C16.9451 17.6917 17.2596 17.7797 17.5389 17.9393V17.9393C18.4517 18.4653 19.6179 18.1543 20.1476 17.2437V17.2437L20.8066 16.1453C21.0617 15.7074 21.1317 15.1859 21.0012 14.6963C20.8706 14.2067 20.5502 13.7893 20.111 13.5366V13.5366C19.6717 13.2839 19.3514 12.8665 19.2208 12.3769C19.0902 11.8872 19.1602 11.3658 19.4153 10.9279C19.5812 10.6383 19.8213 10.3981 20.111 10.2322V10.2322C21.0161 9.70283 21.3264 8.54343 20.8066 7.63271V7.63271V7.62355Z" stroke="var(--primary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
															<circle cx="12.175" cy="11.889" r="2.63616" stroke="var(--primary)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
															</svg>
	
														<span class="ml-2 text-[13px] text-body-color group-hover:text-primary">Settings </span>
													</a>
													<a href="page-login.html" class="dropdown-item py-[0.6rem] px-[1.25rem] text-base block w-full ai-icon">
														<svg class="profle-logout inline-block" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#ff7979" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
														<span class="ml-2 text-danger text-[13px]">Logout </span>
													</a>
												</div>
											</div>
											
										</div>
									</div>
								</li>
							</ul>
                        </div>
                    </div>
				</nav>
			</div>
		</div>
        
<div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
              



					<li class="menu-title">Dex COMPANY</li>
					<li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
						<div class="menu-icon">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M9.13478 20.7733V17.7156C9.13478 16.9351 9.77217 16.3023 10.5584 16.3023H13.4326C13.8102 16.3023 14.1723 16.4512 14.4393 16.7163C14.7063 16.9813 14.8563 17.3408 14.8563 17.7156V20.7733C14.8539 21.0978 14.9821 21.4099 15.2124 21.6402C15.4427 21.8705 15.756 22 16.0829 22H18.0438C18.9596 22.0024 19.8388 21.6428 20.4872 21.0008C21.1356 20.3588 21.5 19.487 21.5 18.5778V9.86686C21.5 9.13246 21.1721 8.43584 20.6046 7.96467L13.934 2.67587C12.7737 1.74856 11.1111 1.7785 9.98539 2.74698L3.46701 7.96467C2.87274 8.42195 2.51755 9.12064 2.5 9.86686V18.5689C2.5 20.4639 4.04738 22 5.95617 22H7.87229C8.55123 22 9.103 21.4562 9.10792 20.7822L9.13478 20.7733Z" fill="#90959F"/>
							</svg>
						</div>	
						<span class="nav-text"></span>
						</a>
						<ul aria-expanded="false">
							
							<li><a href="">Dashboard Home</a></li>
							<li><a href="">Dashboard user</a></li>
							
						</ul>
					</li>
					
					
					<li class="menu-title">Dex FEATURES</li>
					<li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
						<div class="menu-icon">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<g opacity="0.5">
								<path d="M9.34933 14.8577C5.38553 14.8577 2 15.47 2 17.9174C2 20.3666 5.364 21 9.34933 21C13.3131 21 16.6987 20.3877 16.6987 17.9404C16.6987 15.4911 13.3347 14.8577 9.34933 14.8577Z" fill="white"/>
								<path opacity="0.4" d="M9.34935 12.5248C12.049 12.5248 14.2124 10.4062 14.2124 7.76241C14.2124 5.11865 12.049 3 9.34935 3C6.65072 3 4.48633 5.11865 4.48633 7.76241C4.48633 10.4062 6.65072 12.5248 9.34935 12.5248Z" fill="white"/>
								<path opacity="0.4" d="M16.1734 7.84876C16.1734 9.19508 15.7605 10.4513 15.0364 11.4948C14.9611 11.6022 15.0276 11.7468 15.1587 11.7698C15.3407 11.7996 15.5276 11.8178 15.7184 11.8216C17.6167 11.8705 19.3202 10.6736 19.7908 8.87119C20.4885 6.19677 18.4415 3.79544 15.8339 3.79544C15.5511 3.79544 15.2801 3.82419 15.0159 3.87689C14.9797 3.88456 14.9405 3.9018 14.921 3.93247C14.8955 3.97176 14.9141 4.02254 14.9395 4.05608C15.7233 5.13217 16.1734 6.44208 16.1734 7.84876Z" fill="white"/>
								<path d="M21.7791 15.1693C21.4318 14.444 20.5932 13.9466 19.3173 13.7023C18.7155 13.5586 17.0854 13.3545 15.5697 13.3832C15.5472 13.3861 15.5345 13.4014 15.5325 13.411C15.5296 13.4263 15.5365 13.4493 15.5658 13.4656C16.2664 13.8048 18.9738 15.2805 18.6333 18.3928C18.6187 18.5289 18.7292 18.6439 18.8672 18.6247C19.5335 18.5318 21.2478 18.1705 21.7791 17.0475C22.0737 16.4534 22.0737 15.7634 21.7791 15.1693Z" fill="white"/>
								</g>
							</svg>

						</div>
						<span class="nav-text">Profiles</span>
						</a>
						<ul aria-expanded="false">
							<li><a class="has-arrow" href="javascript:void(0);" aria-expanded="false">Users Manager</a>
								<ul aria-expanded="false">
									<li><a href="user.html">User list</a></li>
									<li><a href="add-user.html"> change credentials User</a></li>
									<li><a href="app-profile-1.html">Add  admins</a></li>
									<li><a href="app-profile-2.html">Admins list </a></li>
									
								</ul>
							</li>
							
							<li><a href="https://calendar.google.com/calendar/embed?src=YOUR_CALENDAR_ID_HERE" target="_blank">Calendar cheque</a></li>
							<li><a class="has-arrow" href="javascript:void(0);" aria-expanded="false">Requests</a>
								<ul aria-expanded="false">
									<li><a href="ecom-product-grid.html">User Request list</a></li>
									<li><a href="ecom-product-list.html">Future projects Add</a></li>
									<li><a href="ecom-product-detail.html">Future projects veiw</a></li>
									<li><a href="ecom-product-order.html">Order</a></li>
									
								</ul>
							</li>
						</ul>
					</li>
					<li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
						<div class="menu-icon">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<rect x="0" y="0" width="24" height="24"></rect>
									<path d="M18.6225,9.75 L18.75,9.75 C19.9926407,9.75 21,10.7573593 21,12 C21,13.2426407 19.9926407,14.25 18.75,14.25 L18.6854912,14.249994 C18.4911876,14.250769 18.3158978,14.366855 18.2393549,14.5454486 C18.1556809,14.7351461 18.1942911,14.948087 18.3278301,15.0846699 L18.372535,15.129375 C18.7950334,15.5514036 19.03243,16.1240792 19.03243,16.72125 C19.03243,17.3184208 18.7950334,17.8910964 18.373125,18.312535 C17.9510964,18.7350334 17.3784208,18.97243 16.78125,18.97243 C16.1840792,18.97243 15.6114036,18.7350334 15.1896699,18.3128301 L15.1505513,18.2736469 C15.008087,18.1342911 14.7951461,18.0956809 14.6054486,18.1793549 C14.426855,18.2558978 14.310769,18.4311876 14.31,18.6225 L14.31,18.75 C14.31,19.9926407 13.3026407,21 12.06,21 C10.8173593,21 9.81,19.9926407 9.81,18.75 C9.80552409,18.4999185 9.67898539,18.3229986 9.44717599,18.2361469 C9.26485393,18.1556809 9.05191298,18.1942911 8.91533009,18.3278301 L8.870625,18.372535 C8.44859642,18.7950334 7.87592081,19.03243 7.27875,19.03243 C6.68157919,19.03243 6.10890358,18.7950334 5.68746499,18.373125 C5.26496665,17.9510964 5.02757002,17.3784208 5.02757002,16.78125 C5.02757002,16.1840792 5.26496665,15.6114036 5.68716991,15.1896699 L5.72635306,15.1505513 C5.86570889,15.008087 5.90431906,14.7951461 5.82064513,14.6054486 C5.74410223,14.426855 5.56881236,14.310769 5.3775,14.31 L5.25,14.31 C4.00735931,14.31 3,13.3026407 3,12.06 C3,10.8173593 4.00735931,9.81 5.25,9.81 C5.50008154,9.80552409 5.67700139,9.67898539 5.76385306,9.44717599 C5.84431906,9.26485393 5.80570889,9.05191298 5.67216991,8.91533009 L5.62746499,8.870625 C5.20496665,8.44859642 4.96757002,7.87592081 4.96757002,7.27875 C4.96757002,6.68157919 5.20496665,6.10890358 5.626875,5.68746499 C6.04890358,5.26496665 6.62157919,5.02757002 7.21875,5.02757002 C7.81592081,5.02757002 8.38859642,5.26496665 8.81033009,5.68716991 L8.84944872,5.72635306 C8.99191298,5.86570889 9.20485393,5.90431906 9.38717599,5.82385306 L9.49484664,5.80114977 C9.65041313,5.71688974 9.7492905,5.55401473 9.75,5.3775 L9.75,5.25 C9.75,4.00735931 10.7573593,3 12,3 C13.2426407,3 14.25,4.00735931 14.25,5.25 L14.249994,5.31450877 C14.250769,5.50881236 14.366855,5.68410223 14.552824,5.76385306 C14.7351461,5.84431906 14.948087,5.80570889 15.0846699,5.67216991 L15.129375,5.62746499 C15.5514036,5.20496665 16.1240792,4.96757002 16.72125,4.96757002 C17.3184208,4.96757002 17.8910964,5.20496665 18.312535,5.626875 C18.7350334,6.04890358 18.97243,6.62157919 18.97243,7.21875 C18.97243,7.81592081 18.7350334,8.38859642 18.3128301,8.81033009 L18.2736469,8.84944872 C18.1342911,8.99191298 18.0956809,9.20485393 18.1761469,9.38717599 L18.1988502,9.49484664 C18.2831103,9.65041313 18.4459853,9.7492905 18.6225,9.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
									<path d="M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" fill="#000000"></path>
								</g>
							</svg>
						</div>	
						<span class="nav-text">Settings</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="content.html">Content</a></li>
							<li><a href="content-add.html">Add Content</a></li>
							
						</ul>
					</li>
					<li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
						<div class="menu-icon">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<g opacity="0.5">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M15.2428 4.73756C15.2428 6.95855 17.0459 8.75902 19.2702 8.75902C19.5151 8.75782 19.7594 8.73431 20 8.68878V16.6615C20 20.0156 18.0215 22 14.6624 22H7.34636C3.97851 22 2 20.0156 2 16.6615V9.3561C2 6.00195 3.97851 4 7.34636 4H15.3131C15.2659 4.243 15.2423 4.49001 15.2428 4.73756ZM13.15 14.8966L16.0078 11.2088V11.1912C16.2525 10.8625 16.1901 10.3989 15.8671 10.1463C15.7108 10.0257 15.5122 9.97345 15.3167 10.0016C15.1211 10.0297 14.9453 10.1358 14.8295 10.2956L12.4201 13.3951L9.6766 11.2351C9.51997 11.1131 9.32071 11.0592 9.12381 11.0856C8.92691 11.1121 8.74898 11.2166 8.63019 11.3756L5.67562 15.1863C5.57177 15.3158 5.51586 15.4771 5.51734 15.6429C5.5002 15.9781 5.71187 16.2826 6.03238 16.3838C6.35288 16.485 6.70138 16.3573 6.88031 16.0732L9.35125 12.8771L12.0948 15.0283C12.2508 15.1541 12.4514 15.2111 12.6504 15.1863C12.8494 15.1615 13.0297 15.0569 13.15 14.8966Z" fill="white"/>
									<circle opacity="0.4" cx="19.5" cy="4.5" r="2.5" fill="white"/>
									</g>
								</svg>
						</div>	
							<span class="nav-text">Plans</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="chart-flot.html">Financial</a></li>
							<li><a href="chart-morris.html">Goals</a></li>
							<li><a href="chart-chartjs.html">projects</a></li>
							
						</ul>
					</li>
					<li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
						<div class="menu-icon">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<g opacity="0.5">
								<path opacity="0.4" d="M11.776 21.8374C9.49292 20.4273 7.37062 18.7645 5.44789 16.8796C4.0905 15.5338 3.05386 13.8905 2.41716 12.0753C1.27953 8.53523 2.60381 4.48948 6.30111 3.2884C8.25262 2.67553 10.375 3.05175 12.007 4.29983C13.6396 3.05315 15.7614 2.67705 17.713 3.2884C21.4103 4.48948 22.7435 8.53523 21.6058 12.0753C20.9743 13.8888 19.9438 15.5319 18.5929 16.8796C16.6684 18.7625 14.5463 20.4251 12.2648 21.8374L12.0159 22L11.776 21.8374Z" fill="white"/>
								<path d="M12.0109 22L11.776 21.8374C9.49013 20.4274 7.36487 18.7647 5.43902 16.8796C4.0752 15.5356 3.03238 13.8922 2.39052 12.0753C1.26177 8.53523 2.58605 4.48948 6.28335 3.2884C8.23486 2.67553 10.3853 3.05204 12.0109 4.31057V22Z" fill="white"/>
								<path d="M18.2304 9.99922C18.0296 9.98629 17.8425 9.8859 17.7131 9.72157C17.5836 9.55723 17.5232 9.3434 17.5459 9.13016C17.5677 8.4278 17.168 7.78851 16.5517 7.53977C16.1609 7.43309 15.9243 7.00987 16.022 6.59249C16.1148 6.18182 16.4993 5.92647 16.8858 6.0189C16.9346 6.027 16.9816 6.04468 17.0244 6.07105C18.2601 6.54658 19.0601 7.82641 18.9965 9.22576C18.9944 9.43785 18.9117 9.63998 18.7673 9.78581C18.6229 9.93164 18.4291 10.0087 18.2304 9.99922Z" fill="white"/>
								</g>
							</svg>
						</div>
							<span class="nav-text">Ui 	Projects</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="ui-accordion.html">Add database projects</a></li>
							<li><a href="ui-alert.html">list of projects</a></li>
							<li><a href="ui-badge.html">web add projects</a></li>
							<li><a href="ui-button.html">list of web projects</a></li>
							<li><a href="ui-modal.html">code add</a></li>
							<li><a href="ui-offcanvas.html">code list</a></li>
							<li class="extra-menu-li">		
								
								<a class="btn show-more-btn border-0" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
									<span class="show-more">Show More + </span>
									<span class="show-less">Show Less - </span>
								</a>
							</li>  
							
							

						</ul>
					</li>
					<li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
						<div class="menu-icon">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<g opacity="0.5">
									<path opacity="0.4" d="M10.0833 15.9579H3.50777C2.67555 15.9579 2 16.6217 2 17.4393C2 18.2558 2.67555 18.9206 3.50777 18.9206H10.0833C10.9155 18.9206 11.5911 18.2558 11.5911 17.4393C11.5911 16.6217 10.9155 15.9579 10.0833 15.9579Z" fill="white"/>
									<path opacity="0.4" d="M22 6.37855C22 5.56202 21.3244 4.89832 20.4933 4.89832H13.9178C13.0856 4.89832 12.41 5.56202 12.41 6.37855C12.41 7.19617 13.0856 7.85988 13.9178 7.85988H20.4933C21.3244 7.85988 22 7.19617 22 6.37855Z" fill="white"/>
									<path d="M8.87774 6.37856C8.87774 8.24523 7.33886 9.75821 5.43887 9.75821C3.53999 9.75821 2 8.24523 2 6.37856C2 4.51298 3.53999 3 5.43887 3C7.33886 3 8.87774 4.51298 8.87774 6.37856Z" fill="white"/>
									<path d="M22 17.3992C22 19.2648 20.4611 20.7778 18.5611 20.7778C16.6622 20.7778 15.1223 19.2648 15.1223 17.3992C15.1223 15.5325 16.6622 14.0196 18.5611 14.0196C20.4611 14.0196 22 15.5325 22 17.3992Z" fill="white"/>
									</g>
							</svg>
						</div>	
							<span class="nav-text">Communication</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="uc-select2.html">Web info</a></li>
							<li><a href="uc-nestable.html">User chart</a></li>
							<li><a href="uc-noui-slider.html">Noui Slider</a></li>
							<li><a href="uc-sweetalert.html">Sweet Alert</a></li>
							<li><a href="uc-toastr.html">Toastr</a></li>
							<li><a href="map-jqvmap.html">Jqv Map</a></li>
							<li><a href="uc-lightgallery.html">Light Gallery</a></li>
						</ul>
					</li>
					

					
					<li><a class="has-arrow " href="javascript:void(0);" aria-expanded="false">
						<div class="menu-icon">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<g opacity="0.5">
								<path opacity="0.4" d="M2.00018 11.0785C2.05018 13.4165 2.19018 17.4155 2.21018 17.8565C2.28118 18.7995 2.64218 19.7525 3.20418 20.4245C3.98618 21.3675 4.94918 21.7885 6.29218 21.7885C8.14818 21.7985 10.1942 21.7985 12.1812 21.7985C14.1762 21.7985 16.1122 21.7985 17.7472 21.7885C19.0712 21.7885 20.0642 21.3565 20.8362 20.4245C21.3982 19.7525 21.7592 18.7895 21.8102 17.8565C21.8302 17.4855 21.9302 13.1445 21.9902 11.0785H2.00018Z" fill="white"/>
								<path d="M11.2454 15.3842V16.6782C11.2454 17.0922 11.5814 17.4282 11.9954 17.4282C12.4094 17.4282 12.7454 17.0922 12.7454 16.6782V15.3842C12.7454 14.9702 12.4094 14.6342 11.9954 14.6342C11.5814 14.6342 11.2454 14.9702 11.2454 15.3842Z" fill="white"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M10.2113 14.5564C10.1113 14.9194 9.7623 15.1514 9.38431 15.1014C6.8333 14.7454 4.39531 13.8404 2.33731 12.4814C2.12631 12.3434 2.00031 12.1074 2.00031 11.8554V8.3894C2.00031 6.2894 3.71231 4.5814 5.81731 4.5814H7.78431C7.97231 3.1294 9.20231 2.0004 10.7043 2.0004H13.2863C14.7873 2.0004 16.0183 3.1294 16.2063 4.5814H18.1833C20.2823 4.5814 21.9903 6.2894 21.9903 8.3894V11.8554C21.9903 12.1074 21.8633 12.3424 21.6543 12.4814C19.5923 13.8464 17.1443 14.7554 14.5763 15.1104C14.5413 15.1154 14.5073 15.1174 14.4733 15.1174C14.1343 15.1174 13.8313 14.8884 13.7463 14.5524C13.5443 13.7564 12.8213 13.1994 11.9903 13.1994C11.1483 13.1994 10.4333 13.7444 10.2113 14.5564ZM13.2863 3.5004H10.7043C10.0313 3.5004 9.46931 3.9604 9.30131 4.5814H14.6883C14.5203 3.9604 13.9583 3.5004 13.2863 3.5004Z" fill="white"/>
								</g>
							</svg>
						</div>
						<span class="nav-text">Finances</span>
						</a>
						<ul aria-expanded="false">
							<li><a href="page-login.html">Project totals list</a></li>
							<li><a href="page-register.html">Projects prices</a></li>
							<li><a class="has-arrow" href="javascript:void(0);" aria-expanded="false">Error</a>
								<ul aria-expanded="false">
									<li><a href="page-error-400.html">Error 400</a></li>
									<li><a href="page-error-403.html">Error 403</a></li>
									<li><a href="page-error-404.html">Error 404</a></li>
									<li><a href="page-error-500.html">Error 500</a></li>
									<li><a href="page-error-503.html">Error 503</a></li>
								</ul>
							</li>
							<li><a href="page-lock-screen.html">Lock Screen</a></li>
							<li><a href="empty-page.html">Empty Page</a></li>
						</ul>
					</li>
				</ul>
				<div class="copyright mb-8 mt-[1.2rem] px-4">
					<p class="mb-[6px] text-[0.775rem]">Yash Admin Sales Management System © <span class="current-year">2024</span> All Rights Reserved</p>
					<p class="mb-[6px] text-[0.775rem]">Made with <span class="heart inline-block w-[60px] h-[60px] cursor-pointer"></span> by DexignZone</p>
				</div>
			</div>
        </div>	
		<div class="content-body">
			<div class="container-fluid">
				

    <!-- Preloader start  -->
    <div id="preloader" class="bg-white dark:bg-[#182237] p-0 m-0 h-full fixed z-[99999] w-full flex items-center justify-center">
		<div>
			<img src="appassets/images/pre.gif" alt=""> 
		</div>
    </div>
    <h1>Information</h1>
    
</body>
</div>
											</div>	
										</div>
										<!--/tab-content-->
									</div>
								</div>
								<!-- Column ends -->
                            </div>
                        </div>
                    </div>
					
				</div>
			</div>	
        </div>
		
        <!-- Content body end -->
        <!-- Footer start -->
        <div class="footer dark:bg-[#182237] mt-4 border-t border-b-color dark:border-[#ffffff1a]">
            <div class="p-[0.9375rem]">
               <p class="text-center text-[#918f8f] dark:text-[#ffffffb3] text-[0.775rem] leading-[1.8]">Copyright © Developed by <a href="mailto:denniskiplagat39@gmail.com" target="_blank" class="text-primary">Dex254</a> 2024</p>
            </div>
        </div>
        <!-- Footer end -->


	</div>
    <!-- Main wrapper end -->

	<!-- Required vendors -->
	<script src="appassets/vendor/global/global.min.js"></script>

	<script src="appassets/vendor/niceselect/js/jquery.nice-select.min.js"></script> <!-- nice-select -->
	<script src="appassets/vendor/datatables/js/jquery.dataTables.min.js"></script>
	<script src="appassets/vendor/datatables/js/dataTables.buttons.min.js"></script>
	<script src="appassets/vendor/datatables/js/buttons.html5.min.js"></script>
	<script src="appassets/vendor/datatables/js/jszip.min.js"></script>
	<script src="appassets/js/plugins-init/datatables.init.js"></script>
	
	<script src="appassets/js/custom.min.js"></script>
	<script src="appassets/js/deznav-init.js"></script>
	<script src="appassets/js/demo.js"></script>
	<script src="appassets/js/styleSwitcher.js"></script>

    <!-- code-highlight -->
	<script src="appassets/js/highlight.min.js"></script>
	<script>hljs.highlightAll();
		hljs.configure({ ignoreUnescapedHTML: true })
		
	</script>

	<script>
		document.addEventListener('DOMContentLoaded', (event) => {
			document.querySelectorAll('pre code').forEach((el) => {
				hljs.highlightElement(el);
			});
			});
	</script>
	
</html>
