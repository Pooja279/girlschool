<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from admin.pixelstrap.com/enzo/template/dashboard-02.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 May 2023 21:01:23 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Enzo admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Enzo admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="assets/images/favicon/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/favicon/favicon.png" type="image/x-icon">
    <title>Enzo - Premium Admin Template</title>
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/chartist.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/date-picker.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/prism.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/vector-map.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="assets/css/style1.css">
    <link id="color" rel="stylesheet" href="assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
  </head>
  <body onload="startTime()">
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="loader"></div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-header">
        <div class="header-wrapper row m-0">
          <form class="form-inline search-full col" action="#" method="get">
            <div class="form-group w-100">
              <div class="Typeahead Typeahead--twitterUsers">
                <div class="u-posRelative">
                  <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search In Enzo .." name="q" title="" autofocus>
                  <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div><i class="close-search" data-feather="x"></i>
                </div>
                <div class="Typeahead-menu"></div>
              </div>
            </div>
          </form>
          <div class="header-logo-wrapper col-auto p-0">
            <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="assets/images/logo/login.png" alt=""></a></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i></div>
          </div>
          <div class="left-header col horizontal-wrapper ps-0">
            <div class="input-group">
              <div class="input-group-prepend"><span class="input-group-text mobile-search"><i class="fa fa-search"></i></span></div>
              <input class="form-control" type="text" placeholder="Search Here........">
            </div>
          </div>
          <div class="nav-right col-8 pull-right right-header p-0">
            <ul class="nav-menus">             
              <li class="onhover-dropdown">
                
              </li>
                 <li class="profile-nav onhover-dropdown p-0 me-0">
                <div class="d-flex profile-media"><img class="b-r-50" src="assets/images/dashboard/profile.jpg" alt="">
                  <div class="flex-grow-1"><span>Emay Walter</span>
                    <p class="mb-0 font-roboto">Admin <i class="middle fa fa-angle-down"></i></p>
                  </div>
                </div>
                <ul class="profile-dropdown onhover-show-div">
                  <li><a href="user-profile.html"><i data-feather="user"></i><span>Log out </span></a></li>
                
                </ul>
              </li>
            </ul>
          </div>
          <script class="result-template" type="text/x-handlebars-template">
            <div class="ProfileCard u-cf">                        
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName">{{name}}</div>
            </div>
            </div>
          </script>
          <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
        </div>
      </div>
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <div class="sidebar-wrapper">
          <div>
            <div class="logo-wrapper"><a href="index.html"><img class="img-fluid for-light" src="assets/img/upboard.png" alt="" style="max-width: 27%;"></a>
              <div class="back-btn"><i class="fa fa-angle-left"></i></div>
              <div class="toggle-sidebar"><i class="fa fa-cog status_toggle middle sidebar-toggle"> </i></div>
            </div>
            <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid" src="assets/img/upboard.png" alt="" style="max-width: 27%;"></a>GGICBALLIA</div>
            <nav class="sidebar-main">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                  <li class="back-btn"><a href="index.html"><img class="img-fluid" src="assets/images/logo/logo-icon.png" alt=""></a>
                    <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                  </li>
                  <li class="sidebar-main-title">          
                    <h6 class="lan-1">General </h6>
                  </li>
                  <li class="menu-box"> 
                    <ul>             
                      <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="dashboard.php"><i data-feather="home"></i>Dashboard</a>
                      </li> 
                      <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="list_student.php"><i data-feather="airplay"></i>Student Data</a>
                      </li>
                      <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="teacher.php"><i data-feather="layout"></i>Teacher List</a>
                      </li>
                    </ul>
</li>
                </ul>
              </div>
              <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </nav>
          </div>
        </div>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <!-- Container-fluid starts-->
          <div class="container-fluid default-dash2">
            <div class="row">      
              <div class="col-xl-6 chart_data_left">
                <div class="card">
                  <div class="card-body p-0">
                    <div class="row m-0 chart-main">
                      <div class="col-sm-6 p-0">
                        <div class="d-flex align-items-center">
                          <div class="earnings-small-chart">
                            <div class="small-bar">
                              <div class="small-chart flot-chart-container"></div>
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <div class="right-chart-content">
                              <h4>$85,956.23</h4>
                              <p>Total Earnings <span class="badge badge-primary">New</span></p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 p-0">
                        <div class="d-flex align-items-center">
                          <div class="earnings-small-chart">
                            <div class="small-bar">
                              <div class="small-chart1 flot-chart-container"></div>
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <div class="right-chart-content">
                              <h4>$30,250.50</h4>
                              <p>Total Investment<span class="badge badge-secondary">New</span></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 chart_data_right">
                <div class="card">
                  <div class="card-body p-0">
                    <div class="row m-0 chart-main">
                      <div class="col-sm-6 p-0">
                        <div class="d-flex p-0">
                          <div class="flex-grow-1">
                            <div class="d-flex align-items-center">
                              <div class="knob-block text-center">
                                <input class="knob1" data-width="5" data-height="76" data-thickness=".2" data-angleoffset="0" data-linecap="round" data-fgcolor="#3e5fce" data-bgcolor="#eef4fa" value="65">
                              </div>
                              <div class="flex-grow-1">
                                <div class="right-chart-content">
                                  <h4>4,05,984K</h4>
                                  <p> Total Visitors<span class="badge badge-primary">New</span></p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 p-0">
                        <div class="d-flex p-0">
                          <div class="flex-grow-1">
                            <div class="d-flex align-items-center">
                              <div class="knob-block text-center">
                                <input class="knob1" data-width="5" data-height="76" data-thickness=".2" data-angleoffset="0" data-linecap="round" data-fgcolor="#ffce00" data-bgcolor="#fff5cc" value="80">
                              </div>
                              <div class="flex-grow-1">
                                <div class="right-chart-content">
                                  <h4>2,54,562K</h4>
                                  <p>Total Users<span class="badge badge-secondary">New</span></p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-md-6 box-col-4">
                <div class="card goal-view">
                  <div class="card-header card-no-border dflex justify-content-between">
                    <h5>Our Goal Overview</h5>
                    <div class="center-content">
                      <p>This Year Goal</p>
                    </div>
                    <div class="card-header-right">
                      <ul class="list-unstyled card-option">
                        <li><i class="icon-more-alt"></i></li>
                        <li><i class="view-html fa fa-code"></i></li>
                        <li><i class="icofont icofont-maximize full-card"></i></li>
                        <li><i class="icofont icofont-minus minimize-card"></i></li>
                        <li><i class="icofont icofont-refresh reload-card"></i></li>
                        <li><i class="icofont icofont-error close-card">                </i></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="profit-goal">
                      <h4>$78,486.65<span class="badge badge-primary ms-3">New</span></h4>
                      <p>Total Profit</p>
                    </div>
                    <div id="goal-rview"></div>
                    <div class="code-box-copy">
                      <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#ourgoal" title="" data-bs-original-title="Copy" aria-label="Copy"><i class="icofont icofont-copy-alt"></i></button>
                      <pre><code class="language-html" id="ourgoal">&lt;div class="card goal-view"&gt;
 &lt;div class="card-header card-no-border dflex justify-content-between"&gt;
   &lt;h5&gt;Our Goal Overview&lt;/h5&gt;
     &lt;div class="center-content"&gt;
       &lt;p&gt;This Year Goal&lt;/p&gt;
     &lt;/div&gt;
     &lt;div class="card-header-right"&gt;
       &lt;ul class="list-unstyled card-option"&gt;
         &lt;li&gt;&lt;i class="icon-more-alt"&gt;&lt;/i&gt;&lt;/li&gt;
         &lt;li&gt;&lt;i class="view-html fa fa-code"&gt;&lt;/i&gt;&lt;/li&gt;
         &lt;li&gt;&lt;i class="icofont icofont-maximize full-card"&gt;&lt;/i&gt;&lt;/li&gt;
         &lt;li&gt;&lt;i class="icofont icofont-minus minimize-card"&gt;&lt;/i&gt;&lt;/li&gt;
         &lt;li&gt;&lt;i class="icofont icofont-refresh reload-card"&gt;&lt;/i&gt;&lt;/li&gt;
         &lt;li&gt;&lt;i class="icofont icofont-error close-card"&gt; &lt;/i&gt;&lt;/li&gt;
       &lt;/ul&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;div class="card-body p-0"&gt;
   &lt;div class="profit-goal"&gt;
     &lt;h4&gt;$78,486.65&lt;span class="badge badge-primary ms-3"&gt;New&lt;/span&gt;&lt;/h4&gt;
     &lt;p&gt;Total Profit&lt;/p&gt;
   &lt;/div&gt;
   &lt;div id="goal-rview"&gt;&lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                    </div>
                  </div>
                  <ul class="goal-list">
                    <li>
                      <h4>65%</h4>
                      <p>Completed Goal</p>
                    </li>
                    <li> 
                      <h4>96%</h4>
                      <p>Expected Goal                </p>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-xl-4 col-md-6 box-col-4">
                <div class="card browser-statistics">
                  <div class="card-header pb-0 card-no-border dflex justify-content-between">
                    <h5>Browser Statistics</h5>
                    <div class="center-content">
                      <p>This Year Statistics</p>
                    </div>
                    <div class="card-header-right">
                      <ul class="list-unstyled card-option">
                        <li><i class="icon-more-alt"></i></li>
                        <li><i class="view-html fa fa-code"></i></li>
                        <li><i class="icofont icofont-maximize full-card"></i></li>
                        <li><i class="icofont icofont-minus minimize-card"></i></li>
                        <li><i class="icofont icofont-refresh reload-card"></i></li>
                        <li><i class="icofont icofont-error close-card">                </i></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-body text-center">
                    <div id="explorerstatistics"></div>
                    <div id="chromestatistics"></div>
                    <div id="operastatistics"></div>
                    <div id="firefoxstatistics"></div><a class="btn btn-primary" href="chart-widget.html">View More</a>
                    <div class="code-box-copy">
                      <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#browserstatist" title="" data-bs-original-title="Copy" aria-label="Copy"><i class="icofont icofont-copy-alt"></i></button>
                      <pre><code class="language-html" id="browserstatist">&lt;div class="card browser-statistics"&gt;
 &lt;div class="card-header pb-0 card-no-border dflex justify-content-between"&gt;
   &lt;h5&gt;Browser Statistics&lt;/h5&gt;
    &lt;div class="center-content"&gt;
      &lt;p&gt;This Year Statistics&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class="card-header-right"&gt;
      &lt;ul class="list-unstyled card-option"&gt;
        &lt;li&gt;&lt;i class="icon-more-alt"&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class="view-html fa fa-code"&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class="icofont icofont-maximize full-card"&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class="icofont icofont-minus minimize-card"&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class="icofont icofont-refresh reload-card"&gt;&lt;/i&gt;&lt;/li&gt;
        &lt;li&gt;&lt;i class="icofont icofont-error close-card"&gt; &lt;/i&gt;&lt;/li&gt;
      &lt;/ul&gt;
    &lt;/div&gt;
  &lt;/div&gt;
 &lt;div class="card-body text-center"&gt;
   &lt;div id="explorerstatistics"&gt;&lt;/div&gt;
   &lt;div id="chromestatistics"&gt;&lt;/div&gt;
   &lt;div id="operastatistics"&gt;&lt;/div&gt;
   &lt;div id="firefoxstatistics"&gt;&lt;/div&gt;&lt;a class="btn btn-primary" href="javascript:void(0)"&gt;View More&lt;/a&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-md-6 box-col-4">
                <div class="card pro-delivery">
                  <div class="card-header pb-0 card-no-border dflex justify-content-between">
                    <h5>Product delivery</h5>
                    <div class="center-content">
                      <p>See all product delivery</p>
                    </div>
                    <div class="card-header-right">
                      <ul class="list-unstyled card-option">
                        <li><i class="icon-more-alt"></i></li>
                        <li><i class="view-html fa fa-code"></i></li>
                        <li><i class="icofont icofont-maximize full-card"></i></li>
                        <li><i class="icofont icofont-minus minimize-card"></i></li>
                        <li><i class="icofont icofont-refresh reload-card"></i></li>
                        <li><i class="icofont icofont-error close-card">                </i></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-body pt-0">
                    <div class="jvector-map-height" id="world-map2"></div>
                    <div class="code-box-copy">
                      <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#prodelivery" title="" data-bs-original-title="Copy" aria-label="Copy"><i class="icofont icofont-copy-alt"></i></button>
                      <pre><code class="language-html" id="prodelivery">&lt;div class="card pro-delivery"&gt;
 &lt;div class="card-header pb-0 card-no-border dflex justify-content-between"&gt;
   &lt;h5&gt;Product delivery&lt;/h5&gt;
     &lt;div class="center-content"&gt;
       &lt;p&gt;See all product delivery&lt;/p&gt;
     &lt;/div&gt;
     &lt;div class="card-header-right"&gt;
       &lt;ul class="list-unstyled card-option"&gt;
         &lt;li&gt;&lt;i class="icon-more-alt"&gt;&lt;/i&gt;&lt;/li&gt;
         &lt;li&gt;&lt;i class="view-html fa fa-code"&gt;&lt;/i&gt;&lt;/li&gt;
         &lt;li&gt;&lt;i class="icofont icofont-maximize full-card"&gt;&lt;/i&gt;&lt;/li&gt;
         &lt;li&gt;&lt;i class="icofont icofont-minus minimize-card"&gt;&lt;/i&gt;&lt;/li&gt;
         &lt;li&gt;&lt;i class="icofont icofont-refresh reload-card"&gt;&lt;/i&gt;&lt;/li&gt;
         &lt;li&gt;&lt;i class="icofont icofont-error close-card"&gt; &lt;/i&gt;&lt;/li&gt;
       &lt;/ul&gt;
     &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="card-body pt-0"&gt;
   &lt;div class="jvector-map-height" id="world-map2"&gt;&lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-6 col-xl-5 box-col-5 col-md-6 xl-35">
                <div class="card total-profit-chart">
                  <div class="card-header card-no-border dflex justify-content-between">
                    <h5>Our Total Profit</h5>
                    <div class="center-content">
                      <ul class="profit-list">
                        <li><i class="fa fa-square"></i><span>Last Year</span></li>
                        <li><i class="fa fa-square"></i><span>Current Year</span></li>
                      </ul>
                    </div>
                    <div class="card-header-right">
                      <ul class="list-unstyled card-option">
                        <li><i class="icon-more-alt"></i></li>
                        <li><i class="view-html fa fa-code"></i></li>
                        <li><i class="icofont icofont-maximize full-card"></i></li>
                        <li><i class="icofont icofont-minus minimize-card"></i></li>
                        <li><i class="icofont icofont-refresh reload-card"></i></li>
                        <li><i class="icofont icofont-error close-card">                </i></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-body p-0">                  
                    <div class="profit-goal">
                      <h4>$78,486.65 <span class="badge badge-primary ms-3">New</span></h4>
                      <p>Total Profit                   </p>
                    </div>
                    <div id="total-profit"></div>
                    <div class="code-box-copy">
                      <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#total-profit-chart" title="" data-bs-original-title="Copy" aria-label="Copy"><i class="icofont icofont-copy-alt"></i></button>
                      <pre><code class="language-html" id="total-profit-chart">&lt;div class="card total-profit-chart"&gt;
 &lt;div class="card-header card-no-border dflex justify-content-between"&gt;
   &lt;h5&gt;Our Total Profit&lt;/h5&gt;
   &lt;div class="center-content"&gt;
     &lt;ul class="profit-list"&gt;
       &lt;li&gt;&lt;i class="fa fa-square"&gt;&lt;/i&gt;&lt;span&gt;Last Year&lt;/span&gt;&lt;/li&gt;
       &lt;li&gt;&lt;i class="fa fa-square"&gt;&lt;/i&gt;&lt;span&gt;Current Year&lt;/span&gt;&lt;/li&gt;
     &lt;/ul&gt;
   &lt;/div&gt;
   &lt;div class="card-header-right"&gt;
     &lt;ul class="list-unstyled card-option"&gt;
       &lt;li&gt;&lt;i class="icon-more-alt"&gt;&lt;/i&gt;&lt;/li&gt;
       &lt;li&gt;&lt;i class="view-html fa fa-code"&gt;&lt;/i&gt;&lt;/li&gt;
       &lt;li&gt;&lt;i class="icofont icofont-maximize full-card"&gt;&lt;/i&gt;&lt;/li&gt;
       &lt;li&gt;&lt;i class="icofont icofont-minus minimize-card"&gt;&lt;/i&gt;&lt;/li&gt;
       &lt;li&gt;&lt;i class="icofont icofont-refresh reload-card"&gt;&lt;/i&gt;&lt;/li&gt;
       &lt;li&gt;&lt;i class="icofont icofont-error close-card"&gt; &lt;/i&gt;&lt;/li&gt;
     &lt;/ul&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="card-body p-0"&gt;
   &lt;div class="profit-goal"&gt;
     &lt;h4&gt;$78,486.65 &lt;span class="badge badge-primary ms-3"&gt;New&lt;/span&gt;&lt;/h4&gt;
     &lt;p&gt;Total Profit &lt;/p&gt;
   &lt;/div&gt;
   &lt;div id="total-profit"&gt;&lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xxl-6 col-xl-7 box-col-7 xl-65">
                <div class="card selling-product">
                  <div class="card-header card-no-border dflex justify-content-between">
                    <h5>Top Selling Product</h5>
                    <div class="center-content">
                      <p>Last Year Earning </p>
                    </div>
                    <div class="card-header-right">
                      <ul class="list-unstyled card-option">
                        <li><i class="icon-more-alt"></i></li>
                        <li><i class="view-html fa fa-code"></i></li>
                        <li><i class="icofont icofont-maximize full-card"></i></li>
                        <li><i class="icofont icofont-minus minimize-card"></i></li>
                        <li><i class="icofont icofont-refresh reload-card"></i></li>
                        <li><i class="icofont icofont-error close-card">                </i></li>
                      </ul>
                    </div>
                  </div>
                  <div class="card-body p-t-0">
                    <div class="row">
                      <div class="col-md-6 col-sm-6 ratio_100">
                        <div class="product-box"><span class="badge badge-primary left-badge">New</span><span class="badge badge-secondary right-badge">-36%</span>
                          <div class="img-wrraper"><img class="img-fluid bg-img-cover" src="assets/images/dashboard-2/product/1.png" alt=""></div>
                          <div class="product-detail">
                            <p>Fully Comfortable</p><a href="product-page.html">
                              <h6>Latest Sports Shoes</h6></a><a class="btn btn-primary" href="product-page.html"><span class="fa fa-shopping-bag"> </span>Buy Now                     </a>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 ratio_100">
                        <div class="row product-block">
                          <div class="col-6">
                            <div class="product-box"><span class="badge badge-transparent right-badge font-primary">-20%</span>
                              <div class="img-wrraper"><img class="img-fluid bg-img-cover" src="assets/images/dashboard-2/product/2.png" alt=""></div>
                              <div class="product-detail">                          <a href="product-page.html">  
                                  <h6>File Jumper Sports Shoes</h6></a></div>
                            </div>
                          </div>
                          <div class="col-6">
                            <div class="product-box"><span class="badge badge-transparent right-badge font-primary">-28%</span>
                              <div class="img-wrraper"><img class="img-fluid bg-img-cover" src="assets/images/dashboard-2/product/3.png" alt=""></div>
                              <div class="product-detail">  <a href="product-page.html">                       
                                  <h6>Adidas Sports Shoes</h6></a></div>
                            </div>
                          </div>
                          <div class="col-6">
                            <div class="product-box"><span class="badge badge-transparent right-badge font-primary">-42%</span>
                              <div class="img-wrraper"><img class="img-fluid bg-img-cover" src="assets/images/dashboard-2/product/4.png" alt=""></div>
                              <div class="product-detail"> <a href="product-page.html">                         
                                  <h6>Puma Green Sports</h6></a></div>
                            </div>
                          </div>
                          <div class="col-6">
                            <div class="product-box"><span class="badge badge-transparent right-badge font-primary">-41%</span>
                              <div class="img-wrraper"><img class="img-fluid bg-img-cover" src="assets/images/dashboard-2/product/5.png" alt=""></div>
                              <div class="product-detail"> <a href="product-page.html">                         
                                  <h6>Grey Nike Air</h6></a></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="code-box-copy">
                      <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#selling-product" title="" data-bs-original-title="Copy" aria-label="Copy"><i class="icofont icofont-copy-alt"></i></button>
                      <pre><code class="language-html" id="selling-product">&lt;div class="card selling-product"&gt;
 &lt;div class="card-header card-no-border dflex justify-content-between"&gt;
   &lt;h5&gt;Top Selling Product&lt;/h5&gt;
   &lt;div class="center-content"&gt;
     &lt;p&gt;Last Year Earning &lt;/p&gt;
   &lt;/div&gt;
   &lt;div class="card-header-right"&gt;
     &lt;ul class="list-unstyled card-option"&gt;
       &lt;li&gt;&lt;i class="icon-more-alt"&gt;&lt;/i&gt;&lt;/li&gt;
       &lt;li&gt;&lt;i class="view-html fa fa-code"&gt;&lt;/i&gt;&lt;/li&gt;
       &lt;li&gt;&lt;i class="icofont icofont-maximize full-card"&gt;&lt;/i&gt;&lt;/li&gt;
       &lt;li&gt;&lt;i class="icofont icofont-minus minimize-card"&gt;&lt;/i&gt;&lt;/li&gt;
       &lt;li&gt;&lt;i class="icofont icofont-refresh reload-card"&gt;&lt;/i&gt;&lt;/li&gt;
       &lt;li&gt;&lt;i class="icofont icofont-error close-card"&gt; &lt;/i&gt;&lt;/li&gt;
     &lt;/ul&gt;
   &lt;/div&gt;
 &lt;/div&gt;
 &lt;div class="card-body p-t-0"&gt;
   &lt;div class="row"&gt;
     &lt;div class="col-md-6 col-sm-6 ratio_100"&gt;
       &lt;div class="product-box"&gt;&lt;span class="badge badge-primary left-badge"&gt;New&lt;/span&gt;&lt;span class="badge badge-secondary right-badge"&gt;-36%&lt;/span&gt;
         &lt;div class="img-wrraper"&gt;&lt;img class="img-fluid bg-img-cover" src="assets/images/dashboard-2/product/1.png" alt="" /&gt;&lt;/div&gt;
         &lt;div class="product-detail"&gt;
           &lt;p&gt;Fully Confirtable&lt;/p&gt;
           &lt;h6&gt;Latest Sports Shoes&lt;/h6&gt;&lt;a class="btn btn-primary" href="javascript:void(0)"&gt;&lt;span class="fa fa-shopping-bag"&gt; &lt;/span&gt;Buy Now &lt;/a&gt;
         &lt;/div&gt;
       &lt;/div&gt;
     &lt;/div&gt;
     &lt;div class="col-md-6 ratio_100"&gt;
       &lt;div class="row product-block"&gt;
         &lt;div class="col-6"&gt;
           &lt;div class="product-box"&gt;&lt;span class="badge badge-transparent right-badge font-primary"&gt;-20%&lt;/span&gt;
             &lt;div class="img-wrraper"&gt;&lt;img class="img-fluid bg-img-cover" src="assets/images/dashboard-2/product/2.png" alt="" /&gt;&lt;/div&gt;
             &lt;div class="product-detail"&gt;
               &lt;h6&gt;Red Sports Shoes&lt;/h6&gt;
             &lt;/div&gt;
           &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="col-6"&gt;
           &lt;div class="product-box"&gt;&lt;span class="badge badge-transparent right-badge font-primary"&gt;-28%&lt;/span&gt;
             &lt;div class="img-wrraper"&gt;&lt;img class="img-fluid bg-img-cover" src="assets/images/dashboard-2/product/3.png" alt="" /&gt;&lt;/div&gt;
             &lt;div class="product-detail"&gt;
               &lt;h6&gt;Red Sports Shoes&lt;/h6&gt;
             &lt;/div&gt;
           &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="col-6"&gt;
           &lt;div class="product-box"&gt;&lt;span class="badge badge-transparent right-badge font-primary"&gt;-42%&lt;/span&gt;
             &lt;div class="img-wrraper"&gt;&lt;img class="img-fluid bg-img-cover" src="assets/images/dashboard-2/product/4.png" alt="" /&gt;&lt;/div&gt;
             &lt;div class="product-detail"&gt;
               &lt;h6&gt;Red Sports Shoes&lt;/h6&gt;
             &lt;/div&gt;
           &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class="col-6"&gt;
           &lt;div class="product-box"&gt;&lt;span class="badge badge-transparent right-badge font-primary"&gt;-41%&lt;/span&gt;
             &lt;div class="img-wrraper"&gt;&lt;img class="img-fluid bg-img-cover" src="assets/images/dashboard-2/product/5.png" alt="" /&gt;&lt;/div&gt;
             &lt;div class="product-detail"&gt;
               &lt;h6&gt;Red Sports Shoes&lt;/h6&gt;
             &lt;/div&gt;
           &lt;/div&gt;
         &lt;/div&gt;
       &lt;/div&gt;
     &lt;/div&gt;
   &lt;/div&gt;
 &lt;/div&gt;
&lt;/div&gt;</code></pre>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-8 col-md-7">
                <div class="card best-seller">
                  <div class="card-body"> 
                    <div class="table-responsive">
                      <table class="table table-bordernone">
                        <thead>
                          <tr>
                            <th class="font-primary f-16">Best Seller</th>
                            <th>Date                                          </th>
                            <th>Product</th>
                            <th>Country</th>
                            <th>Total</th>
                            <th>Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td> <a href="user-profile.html"> <span>Ossim keter</span></a>
                              <p>2023</p>
                            </td>
                            <td>16 Aug</td>
                            <td>Clothes</td>
                            <td> <i class="flag-icon flag-icon-gb"></i></td>
                            <td>$1,58,652</td>
                            <td>Success</td>
                          </tr>
                          <tr>
                            <td> <a href="user-profile.html"><span>Venter loren</span></a>
                              <p>2021</p>
                            </td>
                            <td>21 Sep</td>
                            <td>Branded Shoes</td>
                            <td> <i class="flag-icon flag-icon-us"></i></td>
                            <td>$95,025</td>
                            <td>Success</td>
                          </tr>
                          <tr>
                            <td> <a href="user-profile.html"><span>Fran Loan</span></a>
                              <p>2023</p>
                            </td>
                            <td>06 Mar</td>
                            <td>Electronics</td>
                            <td> <i class="flag-icon flag-icon-za"></i></td>
                            <td>$90,155</td>
                            <td>Success</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-md-5 col-lg-5">
                <div class="card announcement-sec"><img class="img-fluid bg-img-cover" src="assets/images/dashboard-2/announcement.jpg" alt="">
                  <div class="card-body">
                    <div> 
                      <h4>Announcement</h4><span>Packaging Department</span>
                      <div class="real-date-time">
                        <div class="real-date">14, Jan 2023</div>
                        <div class="real-time"> <i class="icon-alarm-clock me-2"></i><span id="txt"></span></div>
                      </div>
                      <div class="announcement-buttons"><a class="btn" href="javascript:void(0)">Open</a>
                        <div class="iocn-bell ms-3"><i class="fa fa-bell"></i><span class="badge rounded-pill badge-light">8</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="shap-block">      
                    <div class="shap1">+</div>
                    <div class="shap2 opicity-10">+</div>
                    <div class="shap3 opicity-50">+</div>
                    <div class="shap4"></div>
                    <div class="shap5 opicity-10"> </div>
                    <div class="shap6"></div>
                    <div class="shap7"> </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 p-0 footer-left">
                <p class="mb-0">Copyright © 2023 Enzo. All rights reserved.</p>
              </div>
              <div class="col-md-6 p-0 footer-right">
                <ul class="color-varient">
                  <li></li>
                  <li></li>
                  <li></li>
                  <li></li>
                </ul>
                <p class="mb-0 ms-3">Hand-crafted & made with <i class="fa fa-heart font-danger"></i></p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- latest jquery-->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap js-->
    <script src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <!-- feather icon js-->
    <script src="assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- scrollbar js-->
    <script src="assets/js/scrollbar/simplebar.js"></script>
    <script src="assets/js/scrollbar/custom.js"></script>
    <!-- Sidebar jquery-->
    <script src="assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <script src="assets/js/sidebar-menu.js"></script>
    <script src="assets/js/chart/chartist/chartist.js"></script>
    <script src="assets/js/chart/chartist/chartist-plugin-tooltip.js"></script>
    <script src="assets/js/chart/knob/knob.min.js"></script>
    <script src="assets/js/chart/knob/knob-chart.js"></script>
    <script src="assets/js/chart/apex-chart/apex-chart.js"></script>
    <script src="assets/js/chart/apex-chart/stock-prices.js"></script>
    <script src="assets/js/prism/prism.min.js"></script>
    <script src="assets/js/clipboard/clipboard.min.js"></script>
    <script src="assets/js/custom-card/custom-card.js"></script>
    <script src="assets/js/notify/bootstrap-notify.min.js"></script>
    <script src="assets/js/vector-map/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="assets/js/vector-map/map/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/js/vector-map/map/jquery-jvectormap-us-aea-en.js"></script>
    <script src="assets/js/vector-map/map/jquery-jvectormap-uk-mill-en.js"></script>
    <script src="assets/js/vector-map/map/jquery-jvectormap-au-mill.js"></script>
    <script src="assets/js/vector-map/map/jquery-jvectormap-chicago-mill-en.js"></script>
    <script src="assets/js/vector-map/map/jquery-jvectormap-in-mill.js"></script>
    <script src="assets/js/vector-map/map/jquery-jvectormap-asia-mill.js"></script>
    <script src="assets/js/datepicker/date-picker/datepicker.js"></script>
    <script src="assets/js/datepicker/date-picker/datepicker.en.js"></script>
    <script src="assets/js/datepicker/date-picker/datepicker.custom.js"></script>
    <script src="assets/js/typeahead/handlebars.js"></script>
    <script src="assets/js/typeahead/typeahead.bundle.js"></script>
    <script src="assets/js/typeahead/typeahead.custom.js"></script>
    <script src="assets/js/typeahead-search/handlebars.js"></script>
    <script src="assets/js/typeahead-search/typeahead-custom.js"></script>
    <script src="assets/js/vector-map/map-vector.js"></script>
    <script src="assets/js/dashboard/dashboard_2.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="assets/js/script.js"></script>
    <script src="assets/js/theme-customizer/customizer.js"></script>
    <!-- login js-->
    <!-- Plugin used-->
  </body>

<!-- Mirrored from admin.pixelstrap.com/enzo/template/dashboard-02.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 May 2023 21:03:21 GMT -->
</html>