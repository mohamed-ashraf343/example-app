<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <!-- theme meta -->
    <meta name="theme-name" content="quixlab" />

    <title>MY_ADMIN Mohamed_Ashraf</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <!-- Pignose Calender -->
    <link href="./plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;500&family=Noto+Sans+Arabic:wght@200;400;500;800;900&display=swap" rel="stylesheet">
    <!-- Chartist -->
    <link href="https://unpkg.com/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="./plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->


    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="index.html">
                    <b class="logo-abbr"><img src="images/logo.png" alt=""> </b>
                    <span class="logo-compact"><img src="./images/logo-compact.png" alt=""></span>
                    <span class="brand-title">
                        <h3 class="manger">مدير التطبيق</h3>
                        <img class="img-manger" src="images/343563814_169401662482896_4236831994512941095_n.jpg" alt="">

                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content clearfix">

                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-left">
                    <div class="input-group icons">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i class="mdi mdi-magnify"></i></span>
                        </div>
                        <input type="search" class="form-control" placeholder="بحث في الموقع" aria-label="Search Dashboard">
                        <div class="drop-down animated flipInX d-md-none">
                            <form action="#">
                                <input type="text" class="form-control" placeholder="Search">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons dropdown">
                            <a href="javascript:void(0)" data-toggle="dropdown">
                                <i class="mdi mdi-email-outline"></i>
                                <span class="badge badge-pill gradient-1">3</span>
                            </a>
                            <div class="drop-down animated fadeIn dropdown-menu">
                                <div class="dropdown-content-heading d-flex justify-content-between">
                                    <span class="">3 رسائل جديدة</span>
                                    <a href="javascript:void()" class="d-inline-block">
                                        <span class="badge badge-pill gradient-1">3</span>
                                    </a>
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li class="notification-unread">
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="images/avatar/1.jpg" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">محمد أشرف</div>
                                                    <div class="notification-timestamp">من 8 ساعات</div>
                                                    <div class="notification-text">مرحبًا تيدي، أردت فقط أن أدعك... ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="notification-unread">
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="images/avatar/2.jpg" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">محمد أشرف</div>
                                                    <div class="notification-timestamp">من 8 ساعات</div>
                                                    <div class="notification-text">مرحبًا تيدي، أردت فقط أن أدعك... ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="images/avatar/3.jpg" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">محمد أشرف</div>
                                                    <div class="notification-timestamp">من 8 ساعات</div>
                                                    <div class="notification-text">مرحبًا تيدي، أردت فقط أن أدعك... ...</div>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <img class="float-left mr-3 avatar-img" src="images/avatar/4.jpg" alt="">
                                                <div class="notification-content">
                                                    <div class="notification-heading">محمد أشرف</div>
                                                    <div class="notification-timestamp">من 8 ساعات</div>
                                                    <div class="notification-text">مرحبًا تيدي، أردت فقط أن أدعك... ...</div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </li>
                        <li class="icons dropdown">
                            <a href="javascript:void(0)" data-toggle="dropdown">
                                <i class="mdi mdi-bell-outline"></i>
                                <span class="badge badge-pill gradient-2">3</span>
                            </a>
                            <div class="drop-down animated fadeIn dropdown-menu dropdown-notfication">
                                <div class="dropdown-content-heading d-flex justify-content-between">
                                    <span class="">أحدث الاشعارات</span>
                                    <a href="javascript:void()" class="d-inline-block">
                                        <span class="badge badge-pill gradient-2">5</span>
                                    </a>
                                </div>
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">الاحداث القريبة منك</h6>
                                                    <span class="notification-text">خلال ال5 أيام القادمة</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">الاحداث القريبة منك</h6>
                                                    <span class="notification-text">خلال ال5 أيام القادمة</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">الاحداث القريبة منك</h6>
                                                    <span class="notification-text">خلال ال5 أيام القادمة</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="icon-present"></i></span>
                                                <div class="notification-content">
                                                    <h6 class="notification-heading">الاحداث القريبة منك</h6>
                                                    <span class="notification-text">خلال ال5 أيام القادمة</span>
                                                </div>حسا
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </li>
                        <li class="icons dropdown d-none d-md-flex">
                            <a href="javascript:void(0)" class="log-user" data-toggle="dropdown">
                                <span>English</span> <i class="fa fa-angle-down f-s-14" aria-hidden="true"></i>
                            </a>
                            <div class="drop-down dropdown-language animated fadeIn  dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li><a href="javascript:void()">English</a></li>
                                        <li><a href="javascript:void()">Dutch</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="images/343563814_169401662482896_4236831994512941095_n.jpg" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="app-profile.html"><i class="icon-user"></i> <span>حساب تعريفي</span></a>
                                        </li>
                                        <li>
                                            <a href="javascript:void()">
                                                <i class="icon-envelope-open"></i> <span>صندوق الوارد</span>
                                                <div class="badge gradient-3 badge-pill gradient-1">3</div>
                                            </a>
                                        </li>

                                        <hr class="my-2">
                                        <li>
                                            <a href="page-lock.html"><i class="icon-lock"></i> <span> إقفل الشاشة</span></a>
                                        </li>
                                        <li><a href="page-login.html"><i class="icon-key"></i> <span>تسجيل الخروج</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">لوحة القيادة </span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./index.html">الصفحة الرئيسية</a></li>
                        </ul>
                    </li>

                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-envelope menu-icon"></i> <span class="nav-text">البريد الالكتروني</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./email-inbox.html">صندوق الوارد</a></li>
                            <li><a href="./email-read.html">يقرأ</a></li>
                            <li><a href="./email-compose.html">محرر</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-screen-tablet menu-icon"></i><span class="nav-text">التطبيقات</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./app-profile.html">حساب تعرلايفي</a></li>
                            <li><a href="./app-calender.html">التقويم</a></li>
                        </ul>
                    </li>



                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-note menu-icon"></i><span class="nav-text">الصفحات</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./form-basic.html"> الصفحات الاساسية</a></li>
                            <li><a href="./form-validation.html"> التحقق من صحة الصفحة</a></li>
                            <li><a href="./form-step.html">نموذج الخظوة </a></li>
                            <li><a href="./form-editor.html">المحرر</a></li>
                            <li><a href="./form-picker.html">صفحة التفاصيل والتقويم</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-menu menu-icon"></i><span class="nav-text">الجداول</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./table-basic.html" aria-expanded="false"> جداول عادية</a></li>
                            <li><a href="./table-datatable.html" aria-expanded="false">جداول بيانات</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-notebook menu-icon"></i><span class="nav-text">صفحات الموقع</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./page-login.html">تسجيل الدخول</a></li>
                            <li><a href="./page-register.html">تسجيل المستخدمين</a></li>
                            <li><a href="./page-lock.html"> اغلاق الموقع</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">صفحات الخطأ</a>
                                <ul aria-expanded="false">
                                    <li><a href="./page-error-404.html">Error 404</a></li>
                                    <li><a href="./page-error-403.html">Error 403</a></li>
                                    <li><a href="./page-error-400.html">Error 400</a></li>
                                    <li><a href="./page-error-500.html">Error 500</a></li>
                                    <li><a href="./page-error-503.html">Error 503</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-1">
                            <div class="card-body">
                                <h3 class="card-title text-white">المنتجات المباع</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">4565</h2>
                                    <p class="text-white mb-0">يناير - مارس 2023 </p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-shopping-cart"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-2">
                            <div class="card-body">
                                <h3 class="card-title text-white"> صافي الربح </h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">$ 8541</h2>
                                    <p class="text-white mb-0">يناير - مارس 2023 </p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-3">
                            <div class="card-body">
                                <h3 class="card-title text-white"> زبائن الجدد </h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">4565</h2>
                                    <p class="text-white mb-0">يناير - مارس 2023 </p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-4">
                            <div class="card-body">
                                <h3 class="card-title text-white"> رضا العملاء </h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">99%</h2>
                                    <p class="text-white mb-0">يناير - مارس 2023 </p>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-heart"></i></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">جدول ذو حدود </h4>
                                <div class="table-responsive">
                                    <table class="table table-bordered verticle-middle">
                                        <thead>
                                            <tr>
                                                <th scope="col">مهمة</th>
                                                <th scope="col">تقدم</th>
                                                <th scope="col">موعد التسليم </th>
                                                <th scope="col">ملصق</th>
                                                <th scope="col">تحكم</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td> مكيف هواء
                                                </td>
                                                <td>
                                                    <div class="progress" style="height: 10px">
                                                        <div class="progress-bar gradient-1" style="width: 70%;" role="progressbar"><span class="sr-only">70% Complete</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td> 20 أبريل 2024 </td>
                                                <td><span class="label gradient-1 btn-rounded">70%</span>
                                                </td>
                                                <td><span><a href="#" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted m-r-5"></i> </a><a href="#" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-close color-danger"></i></a></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> مكيف هواء
                                                </td>
                                                <td>
                                                    <div class="progress" style="height: 10px">
                                                        <div class="progress-bar gradient-1" style="width: 70%;" role="progressbar"><span class="sr-only">70% Complete</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td> 20 أبريل 2024 </td>
                                                <td><span class="label gradient-1 btn-rounded">70%</span>
                                                </td>
                                                <td><span><a href="#" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted m-r-5"></i> </a><a href="#" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-close color-danger"></i></a></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> مكيف هواء
                                                </td>
                                                <td>
                                                    <div class="progress" style="height: 10px">
                                                        <div class="progress-bar gradient-1" style="width: 70%;" role="progressbar"><span class="sr-only">70% Complete</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td> 20 أبريل 2024 </td>
                                                <td><span class="label gradient-1 btn-rounded">70%</span>
                                                </td>
                                                <td><span><a href="#" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted m-r-5"></i> </a><a href="#" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-close color-danger"></i></a></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> مكيف هواء
                                                </td>
                                                <td>
                                                    <div class="progress" style="height: 10px">
                                                        <div class="progress-bar gradient-1" style="width: 70%;" role="progressbar"><span class="sr-only">70% Complete</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td> 20 أبريل 2024 </td>
                                                <td><span class="label gradient-1 btn-rounded">70%</span>
                                                </td>
                                                <td><span><a href="#" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted m-r-5"></i> </a><a href="#" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-close color-danger"></i></a></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> مكيف هواء
                                                </td>
                                                <td>
                                                    <div class="progress" style="height: 10px">
                                                        <div class="progress-bar gradient-1" style="width: 70%;" role="progressbar"><span class="sr-only">70% Complete</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td> 20 أبريل 2024 </td>
                                                <td><span class="label gradient-1 btn-rounded">70%</span>
                                                </td>
                                                <td><span><a href="#" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted m-r-5"></i> </a><a href="#" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-close color-danger"></i></a></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td> مكيف هواء
                                                </td>
                                                <td>
                                                    <div class="progress" style="height: 10px">
                                                        <div class="progress-bar gradient-1" style="width: 70%;" role="progressbar"><span class="sr-only">70% Complete</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td> 20 أبريل 2024 </td>
                                                <td><span class="label gradient-1 btn-rounded">70%</span>
                                                </td>
                                                <td><span><a href="#" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-pencil color-muted m-r-5"></i> </a><a href="#" data-toggle="tooltip" data-placement="top" title="Close"><i class="fa fa-close color-danger"></i></a></span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title"> جدول البيانات
                                    </h4>
                                    <div class="table-responsive">
                                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                            <div class="row">
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="dataTables_length" id="DataTables_Table_0_length"><label>يعرض <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> إدخالات</label></div>
                                                </div>
                                                <div class="col-sm-12 col-md-6">
                                                    <div id="DataTables_Table_0_filter" class="dataTables_filter"><label>بحث :<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="DataTables_Table_0"></label></div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <table class="table table-striped table-bordered zero-configuration dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                                        <thead>
                                                            <tr role="row">
                                                                <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 161.922px;">الإسم</th>
                                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 247.047px;">الوظيفة</th>
                                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 119.047px;">العنوان</th>
                                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 63.7344px;">السن</th>
                                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 113.516px;"> تاريخ البحث</th>
                                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 102.828px;">المرتب</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr role="row" class="odd">
                                                                <td class="sorting_1"> محمد أشرف</td>
                                                                <td>مهندس برمجيات </td>
                                                                <td>البحيرة</td>
                                                                <td>26</td>
                                                                <td>2024/11/28</td>
                                                                <td>7000ُEGP</td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td class="sorting_1"> محمد أشرف</td>
                                                                <td>مهندس برمجيات </td>
                                                                <td>البحيرة</td>
                                                                <td>26</td>
                                                                <td>2024/11/28</td>
                                                                <td>7000ُEGP</td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td class="sorting_1"> محمد أشرف</td>
                                                                <td>مهندس برمجيات </td>
                                                                <td>البحيرة</td>
                                                                <td>26</td>
                                                                <td>2024/11/28</td>
                                                                <td>7000ُEGP</td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td class="sorting_1"> محمد أشرف</td>
                                                                <td>مهندس برمجيات </td>
                                                                <td>البحيرة</td>
                                                                <td>26</td>
                                                                <td>2024/11/28</td>
                                                                <td>7000ُEGP</td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td class="sorting_1"> محمد أشرف</td>
                                                                <td>مهندس برمجيات </td>
                                                                <td>البحيرة</td>
                                                                <td>26</td>
                                                                <td>2024/11/28</td>
                                                                <td>7000ُEGP</td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td class="sorting_1"> محمد أشرف</td>
                                                                <td>مهندس برمجيات </td>
                                                                <td>البحيرة</td>
                                                                <td>26</td>
                                                                <td>2024/11/28</td>
                                                                <td>7000ُEGP</td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td class="sorting_1"> محمد أشرف</td>
                                                                <td>مهندس برمجيات </td>
                                                                <td>البحيرة</td>
                                                                <td>26</td>
                                                                <td>2024/11/28</td>
                                                                <td>7000ُEGP</td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td class="sorting_1"> محمد أشرف</td>
                                                                <td>مهندس برمجيات </td>
                                                                <td>البحيرة</td>
                                                                <td>26</td>
                                                                <td>2024/11/28</td>
                                                                <td>7000ُEGP</td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td class="sorting_1"> محمد أشرف</td>
                                                                <td>مهندس برمجيات </td>
                                                                <td>البحيرة</td>
                                                                <td>26</td>
                                                                <td>2024/11/28</td>
                                                                <td>7000ُEGP</td>
                                                            </tr>
                                                            <tr role="row" class="odd">
                                                                <td class="sorting_1"> محمد أشرف</td>
                                                                <td>مهندس برمجيات </td>
                                                                <td>البحيرة</td>
                                                                <td>26</td>
                                                                <td>2024/11/28</td>
                                                                <td>7000ُEGP</td>
                                                            </tr>
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th rowspan="1" colspan="1">الاسم</th>
                                                                <th rowspan="1" colspan="1">الوظيفة</th>
                                                                <th rowspan="1" colspan="1">العنوان</th>
                                                                <th rowspan="1" colspan="1">السن</th>
                                                                <th rowspan="1" colspan="1"> تاريخ البحث</th>
                                                                <th rowspan="1" colspan="1">المرتب</th>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12 col-md-5">
                                                    <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite"> عرض 1 إلى 10 من أصل 57 مدخلاً </div>
                                                </div>
                                                <div class="col-sm-12 col-md-7">
                                                    <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                                        <ul class="pagination">
                                                            <li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                                            <li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                                            <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                                            <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                                            <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                                                            <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                                                            <li class="paginate_button page-item "><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                                                            <li class="paginate_button page-item next" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
                                                        </ul>
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

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="active-member">
                                    <div class="table-responsive">
                                        <table class="table table-xs mb-0">
                                            <thead>
                                                <tr>
                                                    <th>عملاء</th>
                                                    <th>منتج</th>
                                                    <th>دولة</th>
                                                    <th>حالة</th>
                                                    <th>طريقة الدفع او السداد </th>
                                                    <th>نشاط</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><img src="./images/avatar/1.jpg" class=" rounded-circle mr-3" alt="">محمد </td>
                                                    <td>ايفون اكس </td>
                                                    <td>
                                                        <span>مصر</span>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <div class="progress" style="height: 6px">
                                                                <div class="progress-bar bg-success" style="width: 50%"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><i class="fa fa-circle-o text-success  mr-2"></i> مدفوع</td>
                                                    <td>
                                                        <span>آخر تسجيل دخول </span>
                                                        <span class="m-0 pl-3">كان منذ 10 ثواني</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img src="./images/avatar/1.jpg" class=" rounded-circle mr-3" alt="">محمد </td>
                                                    <td>ايفون اكس </td>
                                                    <td>
                                                        <span>مصر</span>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <div class="progress" style="height: 6px">
                                                                <div class="progress-bar bg-success" style="width: 50%"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><i class="fa fa-circle-o text-success  mr-2"></i> مدفوع</td>
                                                    <td>
                                                        <span>آخر تسجيل دخول </span>
                                                        <span class="m-0 pl-3">كان منذ 10 ثواني</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img src="./images/avatar/1.jpg" class=" rounded-circle mr-3" alt="">محمد </td>
                                                    <td>ايفون اكس </td>
                                                    <td>
                                                        <span>مصر</span>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <div class="progress" style="height: 6px">
                                                                <div class="progress-bar bg-success" style="width: 50%"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><i class="fa fa-circle-o text-success  mr-2"></i> مدفوع</td>
                                                    <td>
                                                        <span>آخر تسجيل دخول </span>
                                                        <span class="m-0 pl-3">كان منذ 10 ثواني</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img src="./images/avatar/1.jpg" class=" rounded-circle mr-3" alt="">محمد </td>
                                                    <td>ايفون اكس </td>
                                                    <td>
                                                        <span>مصر</span>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <div class="progress" style="height: 6px">
                                                                <div class="progress-bar bg-success" style="width: 50%"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><i class="fa fa-circle-o text-success  mr-2"></i> مدفوع</td>
                                                    <td>
                                                        <span>آخر تسجيل دخول </span>
                                                        <span class="m-0 pl-3">كان منذ 10 ثواني</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img src="./images/avatar/1.jpg" class=" rounded-circle mr-3" alt="">محمد </td>
                                                    <td>ايفون اكس </td>
                                                    <td>
                                                        <span>مصر</span>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <div class="progress" style="height: 6px">
                                                                <div class="progress-bar bg-success" style="width: 50%"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><i class="fa fa-circle-o text-success  mr-2"></i> مدفوع</td>
                                                    <td>
                                                        <span>آخر تسجيل دخول </span>
                                                        <span class="m-0 pl-3">كان منذ 10 ثواني</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img src="./images/avatar/1.jpg" class=" rounded-circle mr-3" alt="">محمد </td>
                                                    <td>ايفون اكس </td>
                                                    <td>
                                                        <span>مصر</span>
                                                    </td>
                                                    <td>
                                                        <div>
                                                            <div class="progress" style="height: 6px">
                                                                <div class="progress-bar bg-success" style="width: 50%"></div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td><i class="fa fa-circle-o text-success  mr-2"></i> مدفوع</td>
                                                    <td>
                                                        <span>آخر تسجيل دخول </span>
                                                        <span class="m-0 pl-3">كان منذ 10 ثواني</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Vertical Form</h4>
                                <div class="basic-form">
                                    <form>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>الاسم</label>
                                                <input type="username" class="form-control" placeholder="برجاء ادخال الاسم ">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>البريد الالكتروني</label>
                                                <input type="email" class="form-control" placeholder="Email">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label>كلمة المرور</label>
                                                <input type="password" class="form-control" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>العنوان</label>
                                            <input type="text" class="form-control" placeholder="1234 Main St">
                                        </div>
                                        <div class="form-group">
                                            <label>العنوان 2</label>
                                            <input type="text" class="form-control" placeholder="Apartment, studio, or floor">
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>المدينة</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>State</label>
                                                <select id="inputState" class="form-control">
                                                <option selected="selected">إختار...</option>
                                                <option>Option 1</option>
                                                <option>Option 2</option>
                                                <option>Option 3</option>
                                            </select>
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label>Zip</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                                <label class="form-check-label">تفقدني</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-dark"> تسجيل</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="row">

                    <div class="col-lg-12 col-md-6">
                        <div class="card card-widget">
                            <div class="card-body">
                                <h5 class="text-muted"> نظرة عامة على الطلب </h5>
                                <h2 class="mt-4">5680</h2>
                                <span>إجمالي الإيرادات     </span>
                                <div class="mt-4">
                                    <h4>30</h4>
                                    <h6> طلب الشراء عبر الإنترنت <span class="pull-right">30%</span></h6>
                                    <div class="progress mb-3" style="height: 7px">
                                        <div class="progress-bar bg-primary" style="width: 30%;" role="progressbar"><span class="sr-only">30% Order</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <h4>50</h4>
                                    <h6 class="m-t-10 text-muted"> طلب غير متصل <span class="pull-right">50%</span></h6>
                                    <div class="progress mb-3" style="height: 7px">
                                        <div class="progress-bar bg-success" style="width: 50%;" role="progressbar"><span class="sr-only">50% Order</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <h4>20</h4>
                                    <h6 class="m-t-10 text-muted"> النقد على التنمية<span class="pull-right">20%</span></h6>
                                    <div class="progress mb-3" style="height: 7px">
                                        <div class="progress-bar bg-warning" style="width: 20%;" role="progressbar"><span class="sr-only">20% Order</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="./images/users/8.jpg" class="rounded-circle" alt="">
                                    <h5 class="mt-3 mb-1"> محمد</h5>
                                    <p class="m-0">مسوق عبر الإنترنت </p>
                                    <!-- <a href="javascript:void()" class="btn btn-sm btn-warning">Send Message</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="./images/users/5.jpg" class="rounded-circle" alt="">
                                    <h5 class="mt-3 mb-1"> محمد</h5>
                                    <p class="m-0">مسوق عبر الإنترنت </p>
                                    <!-- <a href="javascript:void()" class="btn btn-sm btn-warning">Send Message</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="./images/users/7.jpg" class="rounded-circle" alt="">
                                    <h5 class="mt-3 mb-1"> محمد</h5>
                                    <p class="m-0"> رجل المبيعات </p>
                                    <!-- <a href="javascript:void()" class="btn btn-sm btn-warning">Send Message</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <img src="./images/users/1.jpg" class="rounded-circle" alt="">
                                    <h5 class="mt-3 mb-1"> محمد</h5>
                                    <p class="m-0"> رجل المبيعات </p>
                                    <!-- <a href="javascript:void()" class="btn btn-sm btn-warning">Send Message</a> -->
                                </div>
                            </div>
                        </div>
                    </div>

                </div>









                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="social-graph-wrapper widget-facebook">
                                <span class="s-icon"><i class="fa fa-facebook"></i></span>
                            </div>
                            <div class="row">
                                <div class="col-6 border-right">
                                    <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                        <h4 class="m-1">89k</h4>
                                        <p class="m-0">أصدقاء</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                        <h4 class="m-1">119k</h4>
                                        <p class="m-0">متابعون </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="social-graph-wrapper widget-linkedin">
                                <span class="s-icon"><i class="fa fa-linkedin"></i></span>
                            </div>
                            <div class="row">
                                <div class="col-6 border-right">
                                    <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                        <h4 class="m-1">89k</h4>
                                        <p class="m-0">أصدقاء</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                        <h4 class="m-1">119k</h4>
                                        <p class="m-0">متابعون </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="social-graph-wrapper widget-googleplus">
                                <span class="s-icon"><i class="fa fa-google-plus"></i></span>
                            </div>
                            <div class="row">
                                <div class="col-6 border-right">
                                    <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                        <h4 class="m-1">89k</h4>
                                        <p class="m-0">أصدقاء</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                        <h4 class="m-1">119k</h4>
                                        <p class="m-0">متابعون </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="social-graph-wrapper widget-twitter">
                                <span class="s-icon"><i class="fa fa-twitter"></i></span>
                            </div>
                            <div class="row">
                                <div class="col-6 border-right">
                                    <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                        <h4 class="m-1">89k</h4>
                                        <p class="m-0">أصدقاء</p>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                                        <h4 class="m-1">119k</h4>
                                        <p class="m-0">متابعون </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>حقوق الطبع والنشر &copy; تصميم & وتطوير <a href="https://themeforest.net/user/quixlab">ُENG/ Mohamed Ashraf</a> 2024</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="plugins/common/common.min.js"></script>
    <script src="https://unpkg.com/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>

    <!-- Chartjs -->
    <script src="./plugins/chart.js/Chart.bundle.min.js"></script>
    <!-- Circle progress -->
    <script src="./plugins/circle-progress/circle-progress.min.js"></script>
    <!-- Datamap -->
    <script src="./plugins/d3v3/index.js"></script>
    <script src="./plugins/topojson/topojson.min.js"></script>
    <script src="./plugins/datamaps/datamaps.world.min.js"></script>
    <!-- Morrisjs -->
    <script src="./plugins/raphael/raphael.min.js"></script>
    <script src="./plugins/morris/morris.min.js"></script>
    <!-- Pignose Calender -->
    <script src="./plugins/moment/moment.min.js"></script>
    <script src="./plugins/pg-calendar/js/pignose.calendar.min.js"></script>
    <!-- ChartistJS -->
    <script src="./plugins/chartist/js/chartist.min.js"></script>
    <script src="./plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>



    <script src="./js/dashboard/dashboard-1.js"></script>

</body>

</html>
