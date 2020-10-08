
<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <title>Jobs Portal</title>



    <!-- FAVICON AND APPLE TOUCH -->
    <link rel="shortcut icon" href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/asset/images/favicon.png">
    <link rel="apple-touch-icon-precomposed" sizes="180x180" href="apple-touch-180x180.png">

    <!-- FONTS -->
    <link href='https://fonts.googleapis.com/css?family=Noto+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <!-- <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:400,500,300">-->
    <link rel="stylesheet" href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/assets/fonts/icomoon.css">
    <link href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/font-n/stylesheet.css" rel="stylesheet" type="text/css" charset="utf-8" />

    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/assets/bootstrap/css/bootstrap.min.css">

    <!-- MT ICONS -->
    <link rel="stylesheet" href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/assets/fonts/mt-icons/mt-icons.css">

    <!-- FANCYBOX -->
    <link rel="stylesheet" href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/assets/plugins/fancybox/jquery.fancybox.css">

    <!-- REVOLUTION SLIDER -->
    <link rel="stylesheet" href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/assets/plugins/revolutionslider/css/settings.css">

    <!-- OWL Carousel -->
    <link rel="stylesheet" href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/assets/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/assets/plugins/owl-carousel/owl.transitions.css">

    <!-- MAGNIFY -->
    <link rel="stylesheet" href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/assets/plugins/magnify/magnify.css">

    <!-- YOUTUBE PLAYER -->
    <link rel="stylesheet" href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/assets/plugins/ytplayer/css/YTPlayer.css">

    <!-- TEXT ROTATOR -->
    <link rel="stylesheet" href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/assets/plugins/text-rotator/simpletextrotator.css">

    <!-- ANIMATIONS -->
    <link rel="stylesheet" href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/assets/plugins/animations/animate.min.css">

    <!-- CUSTOM & PAGES STYLE -->
    <link rel="stylesheet" href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/assets/css/custom.css">
    <link rel="stylesheet" href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/assets/css/pages-style.css">
    <style>

        ul.acc li {
            margin-top: 10px;
            margin-left: 4%;
            display: inline-block;
            width: 80px;
            height: 80px;
            overflow: hidden;
            /* line-height: 71px; */
            background:#fff;
            border-radius: 100%;
            border: 5px solid #017BC6;
            margin-right: 19%;
            margin-bottom: .5em;
            padding: 20px;
        }
        ul.acc li:hover {
            color:#fff;
            position: relative;
            background: rgba(234, 234, 234, 0.27);
            box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.19); }

        ul.acc li a {
            -webkit-transition-duration: 0.7s;
            -moz-transition-duration: 0.7s;
            -o-transition-duration: 0.7s;
            transition-duration: 0.7s;
            display: block;
            width: 100%;
            height: 200%;
            position: relative;
            color: #027BC4;

        }
        /*  ul.acc li a:after {
            text-align: center;
            position: absolute;
            width: inherit;
            height: 50%;
            left: 0;
            bottom: 0;
            line-height: 60px;
            color: #fff; }*/

    </style>

</head>
<script type="text/javascript">
    function chkempty()
    {
        if(tinyMCE.get("job_desc").getContent())
        {

            var idddd = "job_desc";
            alert(job_desc);
            chkkabuse();


        }
    }

    function chkkabuse(txtid)
    {

        var idd = txtid;
        //alert(idd);
        var textval =document.getElementById(idd).value;
        //alert(textval);
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function()
        {

            if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
                //alert(xmlhttp.responseText);

                //alert(xmlhttp.responseText);
                if(xmlhttp.responseText==0)
                {

                    document.getElementById("name1").innerHTML="<font color='red' style='font-size:12px;'>Don't use abuse words,  </font> ";

                    //document.getElementById('name').focus();
                    document.getElementById('txtid').value="";
                }
                else
                {
                    document.getElementById("name1").innerHTML="<font color='#009966' style='font-size:12px;'>good</font>";
                }
            }
        }
        xmlhttp.open("GET","chkabuse.php?q="+textval,true);
        xmlhttp.send();


    }
</script>
<script type="text/javascript">
    function send_mail(rec_name,rec_mail){
        document.getElementById('recname').value=rec_name;
        document.getElementById('recmail').value=rec_mail;
    }
</script>
<body>

<div class="modal fade" id="recruiter-listing-send-message" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #017BC6; text-align:center;">
                <button type="button" style="color:#FFF;" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 style="color:#FFF; font-weight:bold;" class="modal-title" id="exampleModalLabel">Send Message To : <input class="btn" type="text" style="font-weight:bold; font-size:16px;" id="recname" readonly></h4>
            </div>
            <form action="" method="post">
                <div class="modal-body">

                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Email ID:</label>
                        <input type="text" class="form-control" id="recipient-name" name="recipient-name" value="">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label">Message:</label>
                        <textarea class="form-control" id="message-text" name="message-text"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="sub-text" class="control-label">Subject:</label>
                        <textarea class="form-control" id="sub-text" name="sub-text"></textarea>
                    </div>

                    <input type="hidden" id="recmail" name="recmail"/>
                </div>
                <div class="modal-footer">

                    <input type="submit" class="btn-blue btn bc" name="send_mail" value="Send message"/>
                </div>
            </form>
        </div>
    </div>
</div>


<div id="page-wrapper">

    <!-- HEADER -->

    <div id="header-top" >
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <!-- LOGO -->
                    <a id="logo" href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/">
                        <img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/images/logo-1565092795.png" alt="enterprenuer.com">
                    </a>
                </div><!-- col -->
                <div class="col-sm-4">
                </div><!-- col -->

                <div class="col-sm-5 logme">
                    <div class="widget widget-pages">
                        <ul>
                            <li>
                                <a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/jobsseeker-login.html">
                                    <img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//images/login-icon.png" />
                                    Login
                                </a>
                            </li>
                            <li>
                                <!--<a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/employer-login.html">-->
                                <a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/jobseeker-registration.html">
                                    <img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//images/register-icon.png" />
                                    <!--<i class="fa fa-lock"></i>-->
                                    Register
                                </a>
                            </li>

                        </ul>
                    </div><!-- widget-pages -->


                </div><!-- col -->


                <!-- <div class="text-right botlink5"><a href="#">Job Seeker? Click here</a>  |  Report a Problem</div>-->
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- header-top -->
    <div id="header" >
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- MENU -->
                    <nav>
                        <a id="mobile-menu-button" href="#"><i class="mt-icons-menu"></i></a>
                        <ul class="menu clearfix" id="menu"><!--class="fa fa-user"-->

                            <li><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/"><img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//images/home.png" /> Home</a></li>
                            <li ><a href="jobsseeker-login.html"><img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//images/job-seeker-icon.png" /> Jobseekers</a></li>
                            <li  ><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/searchall.html"><img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//images/jobs-icon.png" /> Jobs</a></li>
                            <li ><a href="jobsearch_all.html?sch=4"><img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//images/govt-jobs-icon.png" /> IIT/IIM jobs</a></li>
                            <li ><a href="jobsearch_all.html?sch=1"><img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//images/govt-jobs-icon.png" /> Govt.jobs</a></li>
                            <li ><a href="jobsearch_all.html?sch=2"><img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//images/oversea-jobs-icon.png" /> Oversea jobs</a></li>
                            <li ><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/recruiter-listing.html"><img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//images/recruiters-icon.png" /> Recruiters</a></li>
                            <!--<li><a href="faq.html">Help / FAQ</a></li>-->
                            <li  ><a href="contactus.html">Contact</a></li>
                            <!--<li ><a href="index.html"><img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//images/employers-icon.png" /> Employers</a></li>
                            <li ><a href="index.html"><img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//images/services-icon.png" /> Services</a></li>-->
                            <!--<li  class="dropdown" ><a href="index.html"><img src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//images/more-icon.png" /> More</a>
                                <ul >
                                    <li><a href="faq.html">Help / FAQ</a></li>
                                    <li><a href="#">Career Advice</a></li>
                                    <li><a href="contactus.html">Contact Us</a></li>
                                </ul>
                            </li>-->
                            <!--<li ><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
                            <li ><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/searchall.html"><i class="fa fa-briefcase"></i> Search Jobs </a></li>
                            <li ><a href="index.html"><i class="fa fa-briefcase"></i> Jobs</a></li>
                            <li ><a href="index.html"><i class="fa fa-university"></i> Govt.jobs</a></li>
                            <li ><a href="index.html"><i class="fa fa-globe"></i> Oversea jobs</a></li>
                            <li  ><a href="recruiter-listing.html"><i class="fa fa-users"></i> Recruiters</a></li>
                           <!-- <li ><a href="index.html"><i class="icon-user4"></i> Employers</a></li>
                            <li ><a href="index.html"><i class="fa fa-cogs"></i> Services</a></li>-->
                            <!--<li ><a href="index.html" ><i class="fa fa-plus-circle"></i> More</a></li>-->
                        </ul>
                    </nav>
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->
    </div><!-- header -->


    <!-- CONTENT -->
    <div id="content">
        <div class="container">



            <ol  class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Jobseeker Registration</li>
            </ol>



            <div class="row">
                <div class="col-sm-9" >
                    <div class="well34 well-sm">
                        <div class="row">
                            <div class="col-md-12 weltop padno">Become a Member of JOBS.Com and find the right job. Create your Profile now.</div>

                        </div>
                    </div>
                    <div class="top-emp-center p5">
                        <h4>Jobseeker Registration</h4>
                    </div>
                    <div class="col-sm-12">

                        <div class="click-here">
                            <span class="click-here"><span class="mandatory">*</span> Mandatory Fields </span>
                        </div>
                    </div>
                    <form id="register" name="register" class="form-horizontal m10" action="saveuser.php" method="post" enctype="multipart/form-data">


                        <div class="col-md-12">
                            <label class="namecover m10">Create Login Details</label>


                            <div class="form-group">
                                <label class="col-sm-4 pedit2 text-right"><span class="red-star">*</span>Username: </label>
                                <div class="col-sm-5">
                                    <input type="text" name="username" id="username"onBlur="this.value=trim(this.value); return username_val(this.value);" onKeyPress="return rmv_space(this.event);" class="form-control" >

                                </div>
                                <div>
                                    <span id="usernameInfo"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-4 pedit2 text-right"><span class="red-star">*</span>Enter your Email ID: </label>
                                <div class="col-sm-5">
                                    <input type="text" name="email" id="email" onBlur="this.value=trim(this.value); return email_val(this.value);" class="form-control" >
                                    <input type="hidden" name="email_sts" id="email_sts" value="0">
                                    <small class="pedit">Please register using your current email address.</small>
                                </div>
                                <div><span id="emailInfo"></span></div>
                            </div><!--form-group-->
                            <div class="form-group">
                                <label class="col-sm-4 pedit2 text-right"><span class="red-star">*</span>Create a Password for your account: </label>
                                <div class="col-sm-5">
                                    <input type="password" name="password" id="password" class="form-control" >
                                </div>
                                <div>
                                    <span id="passwordInfo"></span>
                                </div>
                            </div><!--form-group-->
                            <div class="form-group">
                                <label class="col-sm-4 pedit2 text-right"><span class="red-star">*</span>Confirm the Password: </label>
                                <div class="col-sm-5">
                                    <input type="password" name="confirmpassword" id="confirmpassword" class="form-control">
                                </div>
                                <div>
                                    <span id="cpasswordInfo"></span>
                                </div>
                            </div><!--form-group-->
                            <div class="form-group">
                                <label class="col-sm-4 text-right"><span class="red-star">*</span>Gender : </label>
                                <div class="col-sm-5">
                                    <label class="radio-inline pedit4">
                                        <input type="radio" value="Company" checked="checked" id="c1" onClick="view_ind();" name="comptype"  >Male
                                    </label>
                                    <label class="radio-inline pedit4">
                                        <input type="radio" name="comptype" value="Consultant" id="c2" onClick="hide_ind();"> Female
                                    </label>
                                </div>
                                <div id="typeLabel" class="floaterror"></div>
                            </div>

                            <label class="namecover m10">Your Contact Information</label>

                            <div class="form-group">
                                <label class="col-sm-4 pedit2 text-right"><span class="red-star">*</span>Please mention your Full Name: </label>
                                <div class="col-sm-5">
                                    <input type="text" name="yourname" id="yourname" class="form-control" >
                                </div>
                                <div>
                                    <span id="yournameInfo"></span>
                                </div>
                            </div><!--form-group-->


                            <div class="form-group">
                                <label class="col-sm-4 pedit2 text-right"><span class="red-star">*</span>Country: </label>
                                <div class="col-sm-5">
                                    <select class="form-control" name="country" id="select_country" onChange="loadXMLDoc(this.value)">
                                        <option value="">Select</option>
                                        <option value="211"> Bangladesh </option>
                                        <option value="210"> India </option>
                                        <option value="212"> Pakistan </option>
                                    </select>

                                </div>
                                <div>
                                    <span id="countryInfo"></span>
                                </div>
                            </div><!--form-group-->


                            <div class="form-group" id="statee">
                                <label class="col-sm-4 pedit2 text-right"><span class="red-star">*</span>State: </label>
                                <div class="col-sm-5">
                                    <select name="state" class="form-control" id="state" onBlur="Trim(this.id)" onChange="loadcity(this.value)">
                                        <option value="">Select State</option>
                                    </select>

                                </div>
                                <div>
                                    <span id="stateInfo"></span>
                                </div>
                            </div><!--form-group-->

                            <div class="form-group" id="cityy">
                                <label class="col-sm-4 pedit2 text-right"><span class="red-star">*</span>City: </label>
                                <div class="col-sm-5">
                                    <select name="city" class="form-control" id="city" onBlur="Trim(this.id)">
                                        <option value="">Select City</option>
                                    </select>

                                </div>
                                <div>
                                    <span id="cityInfo"></span>
                                </div>
                            </div><!--form-group-->


                            <!--<div class="form-group">
                              <label class="col-sm-4 pedit2"> </label>
                              <div class="col-sm-5">
                                <input type="text" name="city" id="city" class="form-control" >
                              </div>
                              <div>
                                <span id="cityInfo"></span>
                              </div>
                            </div><!--form-group-->

                            <div class="form-group">
                                <label class="col-sm-4 pedit2 text-right"> <span class="red-star">*</span> Enter your Mobile number:</label>
                                <input type="hidden" name="phonecode" id="phonecode" value="">
                                <div class="col-sm-5">
                                    <div class="row">
                                        <div class="col-sm-3">

                                            <input type="text" name="land_countrycode" id="land_countrycode" class="form-control" onKeyPress="return checkIt(event);" placeholder="+91">
                                        </div>
                                        <div class="col-sm-9">
                                            <input type="text" name="mobile_number" id="mobile_number"  maxlength="15"  class="form-control">

                                        </div>
                                        <div class="col-sm-12">
                                            <small class="pedit">If you do not have a mobile, enter <span class="regi"><a href="javascript:;" id="landlink" onClick="landlink()">Landline no</a></span>.</small>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <span id="mobileInfo" style="color:#FF0000"></span>
                                </div>
                            </div><!--form-group-->

                            <div class="form-group" id="land" style="display:none;">
                                <label class="col-sm-4 pedit2 text-right"><span class="red-star">*</span>Landline:</label>
                                <div class="col-sm-1">

                                    <input type="text" name="land_countrycode" id="land_countrycode" class="form-control" onKeyPress="return checkIt(event);" placeholder="+91">
                                </div>
                                <div class="col-sm-1">
                                    <input type="text" name="land_areacode" id="land_areacode"class="form-control"  onKeyPress="return checkIt(event);"placeholder="044">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" name="landline_number" id="landline_number" class="form-control" onKeyPress="return checkIt(event);" placeholder="123456">
                                </div>
                            </div><!--form-group-->

                            <label class="namecover m10">Your Current Employment Details</label>
                            <div class="form-group">
                                <label class="col-sm-4 pedit2 text-right">Please select the work experience?: </label>

                                <div class="col-sm-3 padno">
                                    <div class="col-sm-8">
                                        <select name="year" id="year" class="form-control" onChange="expedet(this.value)">
                                            <option value="">select</option>
                                            <option value='0'>0</option>
                                            <option value='1'>1</option>
                                            <option value='2'>2</option>
                                            <option value='3'>3</option>
                                            <option value='4'>4</option>
                                            <option value='5'>5</option>
                                            <option value='6'>6</option>
                                            <option value='7'>7</option>
                                            <option value='8'>8</option>
                                            <option value='9'>9</option>
                                            <option value='10'>10</option>
                                            <option value='11'>11</option>
                                            <option value='12'>12</option>
                                            <option value='13'>13</option>
                                            <option value='14'>14</option>
                                            <option value='15'>15</option>
                                            <option value='16'>16</option>
                                            <option value='17'>17</option>
                                            <option value='18'>18</option>
                                            <option value='19'>19</option>
                                            <option value='20'>20</option>
                                        </select>
                                    </div>
                                    <label>Years </label>
                                </div><!--col-sm-6-->
                                <div class="col-sm-3 padno">
                                    <div class="col-sm-8">
                                        <select name="month" id="month" class="form-control" onChange="expedet(this.value)">
                                            <option value="">select</option>
                                            <option value='0'>0</option>
                                            <option value='1'>1</option>
                                            <option value='2'>2</option>
                                            <option value='3'>3</option>
                                            <option value='4'>4</option>
                                            <option value='5'>5</option>
                                            <option value='6'>6</option>
                                            <option value='7'>7</option>
                                            <option value='8'>8</option>
                                            <option value='9'>9</option>
                                            <option value='10'>10</option>
                                            <option value='11'>11</option>
                                        </select>
                                    </div>
                                    <label>Months </label>
                                </div>
                                <div>
                                    <span id="expInfo"></span>
                                </div>
                            </div><!--form-group-->


                            <div class="form-group">
                                <label class="col-sm-4 pedit2 text-right">Designation :</label>
                                <div class="col-sm-5">
                                    <select name="function_area" id="function_area" class="form-control">
                                        <option value="">select</option>
                                        <option value="349"> 0 - 044 - </option>
                                        <option value="340"> Accessory Designer </option>
                                        <option value="99"> Accountant </option>
                                        <option value="73"> Accounts Assistant </option>
                                        <option value="241"> Accounts Manager </option>
                                        <option value="339"> AD </option>
                                        <option value="154"> Administration </option>
                                        <option value="316"> Air Hostess/Steward/Cabin Crew </option>
                                        <option value="183"> Anaesthetist </option>
                                        <option value="83"> Animator </option>
                                        <option value="176"> Apparel / Garment Designer </option>
                                        <option value="136"> Architects </option>
                                        <option value="272"> Art Director </option>
                                        <option value="258"> Asst. Sales Manager </option>
                                        <option value="159"> Autocad Draughtman/Designer </option>
                                        <option value="84"> AV Executive </option>
                                        <option value="100"> Bank Assurance </option>
                                        <option value="101"> Banking - General </option>
                                        <option value="211"> Banquet Manager </option>
                                        <option value="184"> Beautician </option>
                                        <option value="185"> Bio-Technology Research </option>
                                        <option value="317"> Branch Head </option>
                                        <option value="259"> Branch Manager </option>
                                        <option value="286"> Building Inspection </option>
                                        <option value="260"> Business Analyst </option>
                                        <option value="261"> Business Development Executives </option>
                                        <option value="273"> Cameraman </option>
                                        <option value="327"> Cargo </option>
                                        <option value="137"> Carpenter </option>
                                        <option value="74"> Chartered Accountant </option>
                                        <option value="186"> Chemical Research Scientist </option>
                                        <option value="187"> Chemist </option>
                                        <option value="341"> chennai </option>
                                        <option value="212"> Chief Chef </option>
                                        <option value="160"> Chief Engineer </option>
                                        <option value="161"> Civil Engineer </option>
                                        <option value="102"> Clerk/Office Boy </option>
                                        <option value="247"> Company Secretary </option>
                                        <option value="293"> Computer Operator/Data Entry </option>
                                        <option value="124"> Configuration Manager </option>
                                        <option value="350"> Construction </option>
                                        <option value="138"> Construction Manager </option>
                                        <option value="274"> Content Developer </option>
                                        <option value="139"> Controller </option>
                                        <option value="275"> Correspondent/Reporter </option>
                                        <option value="75"> Cost Accountant </option>
                                        <option value="155"> Councellor </option>
                                        <option value="328"> Courier/Delivery </option>
                                        <option value="140"> Crane Operator </option>
                                        <option value="262"> Customer Relationship Officer </option>
                                        <option value="112"> Customer Service Executive (Non Voice) </option>
                                        <option value="113"> Customer Service Executive (Voice) </option>
                                        <option value="162"> Customer Service/Tech. Support </option>
                                        <option value="223"> Data Entry/Computer Operator </option>
                                        <option value="114"> Data Processing Executive </option>
                                        <option value="125"> Database Administrator </option>
                                        <option value="298"> Database Programmer </option>
                                        <option value="297"> DBA </option>
                                        <option value="188"> Dentist </option>
                                        <option value="189"> Dietician </option>
                                        <option value="329"> Dockworker </option>
                                        <option value="190"> Doctor </option>
                                        <option value="318"> Documentation and Visa </option>
                                        <option value="319"> Domestic Travel </option>
                                        <option value="191"> ECG/CGA Technician </option>
                                        <option value="163"> Electrical Engineer </option>
                                        <option value="141"> Electrician </option>
                                        <option value="164"> Engineer </option>
                                        <option value="143"> Equipment Operator </option>
                                        <option value="103"> Equity Analyst </option>
                                        <option value="85"> Event Coordinator </option>
                                        <option value="86"> Event/Promotios Manager </option>
                                        <option value="76"> External Auditor </option>
                                        <option value="213"> F & B Manager </option>
                                        <option value="126"> Faculty </option>
                                        <option value="77"> Finance Assistant </option>
                                        <option value="165"> Foreman </option>
                                        <option value="330"> Forklift Operator </option>
                                        <option value="214"> Front Office Executive </option>
                                        <option value="345"> gdfgdf </option>
                                        <option value="263"> GM- Marketing </option>
                                        <option value="294"> Graphic Designer /Animator </option>
                                        <option value="320"> Ground Staff </option>
                                        <option value="127"> H/W Installation / Maintenance Engg </option>
                                        <option value="128"> Hardware Design Technical Leader </option>
                                        <option value="347"> having 7 years exp. as a professional medical representative with flaring formulation, abbott health </option>
                                        <option value="348"> having 7 years exp. as a professional medical representative with flaring formulation, abbott health </option>
                                        <option value="144"> Heavy Equipment Operator </option>
                                        <option value="215"> Hostess </option>
                                        <option value="193"> House Keeping </option>
                                        <option value="216"> House Keeping Executive </option>
                                        <option value="225"> HR Executive / Recruiter </option>
                                        <option value="226"> HR Manager </option>
                                        <option value="129"> Instructional Designer </option>
                                        <option value="104"> Insurance / Financial Advisor </option>
                                        <option value="105"> Insurance Telesales </option>
                                        <option value="166"> Interior Designer </option>
                                        <option value="78"> Internal Auditor </option>
                                        <option value="343"> it software- application programming / maintenance </option>
                                        <option value="346"> IT-ERP- Business Analyst </option>
                                        <option value="177"> Jewellery Designer </option>
                                        <option value="217"> Kitchen Manager </option>
                                        <option value="194"> Lab Technician </option>
                                        <option value="146"> Laborer </option>
                                        <option value="248"> Law Officer </option>
                                        <option value="249"> Lawyer </option>
                                        <option value="250"> Legal Adviser </option>
                                        <option value="251"> Legal Assistant </option>
                                        <option value="252"> Legal Consultant </option>
                                        <option value="253"> Legal Editor </option>
                                        <option value="254"> Legal Services - Manager </option>
                                        <option value="156"> Librarian </option>
                                        <option value="331"> Logistics Manager </option>
                                        <option value="235"> Machine Operator </option>
                                        <option value="236"> Machinist </option>
                                        <option value="237"> Maintenance Supervisor </option>
                                        <option value="321"> Management Trainee </option>
                                        <option value="322"> Manager </option>
                                        <option value="79"> Manager - Accounts </option>
                                        <option value="80"> Manager- Finance Planning </option>
                                        <option value="228"> Manager/Co-ordinator </option>
                                        <option value="264"> Marketing Executives </option>
                                        <option value="265"> Marketing Manager </option>
                                        <option value="167"> Mechanical Engineer </option>
                                        <option value="238"> Mechanical Technician </option>
                                        <option value="89"> Media Planning - Manager / Executive </option>
                                        <option value="195"> Medical Assistant </option>
                                        <option value="196"> Medical Representative </option>
                                        <option value="115"> Medical Transcriptionist </option>
                                        <option value="197"> Medical Writer </option>
                                        <option value="179"> Merchandiser </option>
                                        <option value="198"> Microbiologist </option>
                                        <option value="148"> Mining </option>
                                        <option value="107"> Mutual Funds </option>
                                        <option value="130"> Network Administrator </option>
                                        <option value="131"> Network Designer </option>
                                        <option value="295"> Network Engineer </option>
                                        <option value="278"> News Editor </option>
                                        <option value="279"> News Reador </option>
                                        <option value="199"> Nurse </option>
                                        <option value="200"> Nutritionist </option>
                                        <option value="323"> Office Assistant </option>
                                        <option value="229"> Office Secretary/AdminOfficer </option>
                                        <option value="287"> Officer </option>
                                        <option value="108"> Operations </option>
                                        <option value="332"> Operations Management </option>
                                        <option value="201"> Opthamologist </option>
                                        <option value="296"> Oracle Developer </option>
                                        <option value="132"> Other </option>
                                        <option value="149"> Painter </option>
                                        <option value="256"> Patent </option>
                                        <option value="203"> Pharmaceutical Research </option>
                                        <option value="204"> Pharmacist </option>
                                        <option value="300"> Photoshop </option>
                                        <option value="205"> Physician </option>
                                        <option value="206"> Physiotherapist </option>
                                        <option value="150"> Plumber </option>
                                        <option value="288"> Process Engineer </option>
                                        <option value="122"> Process Engineers </option>
                                        <option value="281"> Production Manager </option>
                                        <option value="289"> Production Quality Assurance </option>
                                        <option value="301"> Programmer </option>
                                        <option value="169"> Project Manager </option>
                                        <option value="282"> Proof Reader </option>
                                        <option value="257"> Proof Reader (Law) </option>
                                        <option value="207"> Public Health Administration </option>
                                        <option value="231"> Public Relation Officer </option>
                                        <option value="312"> QA </option>
                                        <option value="290"> Quality Assurance Engineer </option>
                                        <option value="291"> Quality Assurance Manager </option>
                                        <option value="292"> Quality Control Inspector </option>
                                        <option value="208"> Radiographer </option>
                                        <option value="232"> Receptionist/Front Office Executive </option>
                                        <option value="109"> Relationship Manager </option>
                                        <option value="239"> Repairman </option>
                                        <option value="325"> Reservation and Ticketing </option>
                                        <option value="219"> Reservation Manager </option>
                                        <option value="220"> Restaurant Manager </option>
                                        <option value="151"> Roofing </option>
                                        <option value="170"> Safety Officer </option>
                                        <option value="268"> Sales Executives </option>
                                        <option value="269"> Sales Manager </option>
                                        <option value="97"> Sales/Marketing Executive </option>
                                        <option value="209"> Scientist </option>
                                        <option value="243"> Security Guard </option>
                                        <option value="240"> Security Installation </option>
                                        <option value="221"> Security Manager </option>
                                        <option value="333"> Shipping And Receiving </option>
                                        <option value="245"> Site Manager </option>
                                        <option value="304"> Software Application Developer </option>
                                        <option value="305"> Software Engineer </option>
                                        <option value="222"> Steward/Waiter </option>
                                        <option value="180"> Stiching/Tailor </option>
                                        <option value="110"> Stock Broking </option>
                                        <option value="171"> Store Keeper </option>
                                        <option value="91"> Studio Operation Manager </option>
                                        <option value="283"> Sub Editor </option>
                                        <option value="95"> Supervisor </option>
                                        <option value="181"> Supervisor/Officer </option>
                                        <option value="172"> Surveyor </option>
                                        <option value="306"> System Administrator </option>
                                        <option value="133"> System Analyst </option>
                                        <option value="303"> System Programmer </option>
                                        <option value="81"> Taxation - Manager </option>
                                        <option value="157"> Teaching/Professor/Lecturer </option>
                                        <option value="117"> Team Leader </option>
                                        <option value="308"> Technical Architect </option>
                                        <option value="134"> Technical Leader </option>
                                        <option value="135"> Technical Support Engineer </option>
                                        <option value="118"> Technical Support Executive (Voice) </option>
                                        <option value="309"> Technical Writer </option>
                                        <option value="173"> Technician </option>
                                        <option value="271"> Tele Marketing Executives </option>
                                        <option value="119"> Telemarketing Executive </option>
                                        <option value="311"> Testing Engineer </option>
                                        <option value="182"> Textile Designer </option>
                                        <option value="326"> Tour Operator </option>
                                        <option value="335"> Train Operator </option>
                                        <option value="120"> Trainee/Management Trainee </option>
                                        <option value="313"> Trainer </option>
                                        <option value="246"> Training Officer </option>
                                        <option value="284"> Translator </option>
                                        <option value="336"> Transportation Supervisor </option>
                                        <option value="233"> Travel/Immigration Coordinator </option>
                                        <option value="337"> Truck Driver </option>
                                        <option value="234"> Typist </option>
                                        <option value="210"> Veterinary </option>
                                        <option value="285"> Video Editor </option>
                                        <option value="92"> Visualiser- Art Director </option>
                                        <option value="121"> Voice & Accent Trainer </option>
                                        <option value="338"> Warehouse Worker </option>
                                        <option value="314"> Web Designer </option>
                                        <option value="315"> Web Developer </option>
                                        <option value="153"> Welder </option>
                                        <option value="174"> Workman / Foreman / Technician </option>
                                    </select>
                                </div>
                                <div>
                                    <span id="desigInfo"></span>
                                </div>
                            </div><!--form-group-->

                            <div class="form-group">
                                <label class="col-sm-4 pedit2 text-right">What are your Key Skills?:</label>
                                <div class="col-sm-5">
                                    <input type="text" name="keyskills" id="keyskills" class="form-control " placeholder=" Please enter your areas of expertise/specialization." >
                                </div>
                                <div>
                                    <span id="keyInfo"></span>
                                </div>
                            </div><!--form-group-->

                            <label class="namecover m10">Your Education Background</label>

                            <div class="form-group">
                                <label class="col-sm-4 pedit2 text-right"><span class="red-star">*</span>Please Select Your Basic Eduction :</label>
                                <div class="col-sm-5">
                                    <select name="basic_grad" id="basic_grad" class="form-control">
                                        <option value="">Select</option>
                                        <option value="43"> B.E/ B. Tech </option>
                                        <option value="44"> mm </option>
                                        <option value="45"> B.Sc </option>
                                        <option value="47"> Diplomo </option>
                                        <option value="48"> HSC </option>
                                        <option value="49"> SSLC </option>
                                        <option value="51"> php </option>
                                        <option value="52"> MBBS </option>
                                        <option value="53"> BA </option>
                                        <option value="54"> B Com </option>
                                        <option value="55"> B Ed </option>
                                        <option value="56"> BBA </option>
                                        <option value="57"> BAMS </option>
                                        <option value="58"> BHMS </option>
                                        <option value="59"> Others </option>
                                        <option value="60"> ICMA </option>
                                        <option value="61"> M.Com </option>
                                    </select>
                                </div>
                                <div>
                                    <span id="basicInfo"></span>
                                </div>
                            </div><!--form-group-->

                            <div class="form-group">
                                <div class="col-sm-4 text-right">
                                    <!--<button type="button " class="btn5 btn-d "> &nbsp;  &nbsp;  &nbsp;  &nbsp;Add Doctorate/Phd Education</button>-->
                                    <a href="javascript:;" onClick="pg_edu()" id="mas" class="btn5 btn-d btn-newreg">&nbsp;  &nbsp;  &nbsp;  &nbsp;Add Masters Education</a>
                                </div>
                                <div class="col-sm-5">
                                </div>
                            </div><!--form-group-->

                            <!--  <div class="form-group">
                              <label class="col-sm-4 pedit2 text-right">Please Select Your Masters Eduction :</label>
                              <div class="col-sm-5">
                                <select class="form-control" name="post_grad" id="post_grad">
                                  <option value="">Select</option>
                                  <option>MA	</option>
                                  <option>M.sc</option>
                                </select>
                              </div>
                              <div>
                                <span id="postInfo"></span>
                              </div>
                             </div><!--form-group-->

                            <div id="pged" class="form-group" style="display:none;">

                                <label class="col-sm-4 pedit2 text-right">Please Select Your Masters Eduction :</label>

                                <input type="hidden" name="hidnot_pggrad1" id="hidnot_pggrad1" value="">
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <div class="col-sm-5">
                                    <select name="po_grad" id="po_grad" class="form-control" onChange="pgedsp(this.value)">
                                        <option value="0">Select</option>
                                        <option value="">Not Pursuing Post Graduation</option>
                                        <option value="41">
                                            M.A			</option>
                                        <option value="42">
                                            M.Arch			</option>
                                        <option value="43">
                                            MBA / PGDM / PGDBA			</option>
                                        <option value="45">
                                            MCA/PGDCA			</option>
                                        <option value="46">
                                            MCM			</option>
                                        <option value="47">
                                            M.Com			</option>
                                        <option value="48">
                                            M.D/Ms			</option>
                                        <option value="49">
                                            M.E/M Tech			</option>
                                        <option value="52">
                                            M.H.R.M			</option>
                                        <option value="56">
                                            M.P.Ed			</option>
                                        <option value="57">
                                            M.Pharm			</option>
                                        <option value="58">
                                            M.Phil			</option>
                                        <option value="59">
                                            M.S.W			</option>
                                        <option value="60">
                                            M.Sc			</option>
                                        <option value="61">
                                            M.T.M			</option>
                                        <option value="64">
                                            CA/ ICWA/ CS			</option>
                                        <option value="65">
                                            not mentioned			</option>
                                        <option value="66">
                                            Others			</option>
                                        <option value="67">
                                            M.C.S.			</option>
                                    </select>
                                </div>
                                <script language="JavaScript">
                                    new pgfun ({
// form name
                                        'formname': 'register',
// input name
                                        'controlname': 'po_grad'
                                    });
                                </script>

                            </div>

                            <div class="form-group">
                                <div class="col-sm-4 text-right">
                                    <!--<button type="button " class="btn5 btn-d "> &nbsp;  &nbsp;  &nbsp;  &nbsp;Add Doctorate/Phd Education</button>-->
                                    <a href="javascript:;" onClick="phd_edu()" id="phd" class="btn5 btn-d" style="display:none;">&nbsp;  &nbsp;  &nbsp;  &nbsp;Add Doctorate/Phd Education</a>
                                </div>
                                <div class="col-sm-5">
                                </div>
                            </div><!--form-group-->

                            <div id="phed" class="form-group" style="display:none;">

                                <label class="col-sm-4 pedit2 text-right">Please Select Your Doctorate/Phd:</label>

                                <input type="hidden" name="hidnot_postpggrad" id="hidnot_postpggrad" value="4">
                                <div class="col-sm-5">
                                    <select name="doctorate" class="form-control" onChange="doctspec(this.value)">
                                        <option value="0">Select</option>
                                        <option value="4">Not Pursuing Doctorate/Phd</option>
                                        <option value="1"> Ph.D/Doctorate </option>
                                        <option value="2"> MPHIL </option>
                                        <option value="3"> Other </option>
                                        <option value="5"> koss </option>
                                    </select>
                                </div>
                            </div>



                            <div class="form-group" id="coursename" style="display:none;">
                                <label class="col-sm-4 pedit2 text-right">Enter the certificate course name :</label>
                                <div class="col-sm-5">
                                    <input type="text"  name="course" id="course" class="form-control "  >
                                </div>
                            </div><!--form-group-->
                            <div class="form-group" id="coursename2" style="display:none;">
                                <label class="col-sm-4 pedit2 text-right">Enter the certificate course name :</label>
                                <div class="col-sm-5">
                                    <input type="text"  name="course2" id="course2"class="form-control "  >
                                </div>
                            </div><!--form-group-->
                            <div class="form-group" id="coursename3" style="display:none;">
                                <label class="col-sm-4 pedit2 text-right">Enter the certificate course name :</label>
                                <div class="col-sm-5">
                                    <input type="text"  name="course3" id="course3" class="form-control "  >
                                </div>
                            </div><!--form-group-->

                            <div class="form-group">
                                <div class="col-sm-4 text-right">
                                    <!--<button type="button " class="btn5 btn-d "> &nbsp;  &nbsp;  &nbsp;  &nbsp; You can add Certification Courses</button>-->
                                    <a href="javascript:;" onClick="cou_edu()" id="cour" class="btn5 btn-d btn-newreg">&nbsp;  &nbsp;  &nbsp;  &nbsp;You can add Certification Courses</a>
                                    <a href="javascript:;" onClick="cou2_edu()" id="cour2" class="btn5 btn-d" style="display:none;">&nbsp;  &nbsp;  &nbsp;  &nbsp;You can add Certification Courses</a>
                                    <a href="javascript:;" onClick="cou3_edu()" id="cour3" class="btn5 btn-d" style="display:none;">&nbsp;  &nbsp;  &nbsp;  &nbsp;You can add Certification Courses</a>
                                </div>
                                <div class="col-sm-5">
                                </div>
                            </div><!--form-group-->
                            <label class="namecover m10">Upload your detailed resume</label>
                            <div class="form-group">
                                <label class="col-sm-4 pedit2 text-right">Upload your Resume Document : </label>
                                <div class="col-sm-5">
                                    <input type="file" name="fupload" id="fupload" onBlur="this.value=trim(this.value);" onChange="return file_upload(this);">
                                    <small class="pedit3">Supported Formats: doc, docx, rtf, pdf. Max file size: 1 Mb</small>
                                    <small class="regi" id="hid"><a href="javascript:;" onClick="resum()">You may also write or copy-paste your resume here..</a><b>If you do not have your resume presently, you may still continue to create your account.</b>
                                    </small>
                                    <textarea name="textresume" id="textresume" class="form-control adm" rows="5" style="display:none;" placeholder="You can Copy-Paste your resume here (Max 10000 characters). However, recruiters cannot download it. They can only download your jobs profile or your Uploaded Resume. So ensure both of them are updated too."></textarea>
                                    <small class="pedit3" id="resum" style="display:none;">Please remember to upload your resume as soon as possible after creating your
                                        account. It will make your profile more effective. <b>If you do not have your resume presently, you may still continue to create your account.</b></small>
                                </div>
                                <div>
                                    <span id="resumeInfo"></span>
                                </div>
                            </div><!--form-group-->
                            <label class="namecover m10">Mailer and Privacy Settings</label>


                            <div class="form-group">

                                <div class="col-sm-6 line5">
                                    <div class="checkbox"> <label class="pedit2"> <input type="checkbox" checked> Job Alerts</label> </div>
                                    <div class="checkbox"> <label class="pedit2"> <input type="checkbox" checked> Jobs FastForward E-Mails </label> </div>
                                    <div class="checkbox"> <label class="pedit2"> <input type="checkbox" checked> Jobs FastForward Calls/SMS </label> </div>
                                </div>

                                <div class="col-sm-6 line5">
                                    <div class="checkbox"> <label class="pedit2"> <input type="checkbox" checked> Important Notifications from Jobs.com</label> </div>
                                    <div class="checkbox"> <label class="pedit2"> <input type="checkbox" checked> Communication from Clients(Voice/Calls/SMS)</label> </div>
                                    <div class="checkbox"> <label class="pedit2"> <input type="checkbox" checked> Other Promotions/ Special Offers </label> </div>
                                </div>
                            </div><!--form-group-->
                            <div class="form-group">
                                <div class="checkbox"> <label class="pedit2"> <input type="checkbox" name="terms" id="terms"> <small> I have read and understood and agree to the <span class="regi"><a href="terms.php" target="_blank">Terms and Conditions</a></span> governing the use of Jobs.com.</small></label> </div>
                                <div>
                                    <span id="termInfo"></span>
                                </div>
                            </div><!--form-group-->
                            <div class="form-group text-center">
                                <input type="hidden" name="frmsubval" id="frmsubval" value="">
                                <input name="sub" id="sub" class="btn-blue btn bc " onclick="return validateForm();" value="Join Jobs.com" type="button">
                            </div><!--form-group-->


                        </div><!--col-sm-12-->
                    </form>



                </div><!--col-sm-9-->

                <div class="col-sm-3" >

                    <div class="create-job">
                        <div class="create-job-head text-center padno">
                            <h3 class="line5">Why become a member of Jobs.com?</h3>
                        </div>
                        <div class="post-job-content">
                            Jobs helps passive and active jobseekers find better jobs.
                            <div class="folist">
                                <ul>
                                    <li class="lileft">Get connected with over 45000 recruiters.</li>
                                    <li class="lileft">Apply to jobs in just one click.</li>
                                    <li class="lileft">Apply to thousands of jobs posted daily.</li>
                                    <li class="lileft">Get relevant jobs on your mobile, and online.</li>
                                    <li class="lileft">Create multiple job alerts to target the kind of jobs you want.</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="create-job">
                        <div class="create-job-head text-center rep5r">
                            <h3 class="line5">Your Privacy & Confidentiality</h3>
                        </div>
                        <div class="post-job-content">
                            After you register, you can
                            <div class="folist">
                                <ul>
                                    <li class="lileft">Block your company or other specific companies from viewing your profile.</li>
                                    <li class="lileft">Apply to jobs from the site while keeping your resume hidden from all recruiters.</li>
                                    <li class="lileft">Apply to jobs from the site while keeping your resume hidden from all recruiters.</li>
                                </ul>
                            </div>
                        </div>
                    </div>


                </div><!--col-sm-3-->

            </div><!--row-->
        </div><!-- container -->

    </div><!-- CONTENT -->
    <!--ADVANCED SEARCH POPUP-->

    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header avd-serbg">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"> <img src="images/close-icon.png"></span></button>
                    <h4 class="modal-title mode-tit" id="myModalLabel">Advanced Search</h4>
                </div>
                <div class="modal-body avdbg1a">
                    <div id="divsearch"></div>
                    <form class="form-horizontal m10" name="advancesearchform" id="advancesearchform" action="searchpage.php" >
                        <div class="form-group m20">
                            <label class="col-sm-4 pedit2 text-right mtop4">Keyskills: </label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="ad-keyword" name="advkeyword" autocomplete="off" placeholder="Skills, Designation. Companies">
                            </div>
                        </div>
                        <div class="form-group m20">
                            <label class="col-sm-4 pedit2 text-right mtop4">Location: </label>
                            <div class="col-sm-5">
                                <input type="text" id="adv-location" autocomplete="off" name="location" class="form-control" placeholder="Enter the cities you want to work in">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 pedit2 text-right mtop4">Work Experience: </label>
                            <div class="col-sm-2 padno">
                                <div class="col-sm-9">
                                    <select name="advexperience" id="advexperience" class="form-control ">
                                        <option value="" selected="">Select</option>
                                        <!--  <option value="99">Fresher</option>-->
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="25">Above 25 Years</option>
                                        <!--<option value="0" label="0">0</option>
                                        <option value="1" label="1">1</option>
                                        <option value="2" label="2">2</option>
                                        <option value="3" label="3">3</option>
                                        <option value="4" label="4">4</option>-->
                                    </select>
                                </div>
                                <label>Years </label>
                            </div><!--col-sm-6-->
                            <div class="col-sm-3 padno">
                                <div class="col-sm-8">
                                    <select id="admonths" name="admonths" class="form-control">
                                        <option value="" selected="">Select</option>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="25">Above 25 Years</option>
                                    </select>
                                </div>
                                <label> Months </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 pedit2 text-right mtop4">Expected Salary: </label>
                            <div class="col-sm-2 padno">
                                <div class="col-sm-10">
                                    <select name="advsalary" class="form-control ">
                                        <option value="" selected="">Min</option>
                                        <option value="0">0 Lacks</option>
                                        <option value="1">1 Lacks</option>
                                        <option value="2">2 Lacks</option>
                                        <option value="3">3 Lacks</option>
                                        <option value="4">4 Lacks</option>
                                        <option value="5">5 Lacks</option>
                                        <option value="6">6 Lacks</option>
                                        <option value="7">7 Lacks</option>
                                        <option value="8">8 Lacks</option>
                                        <option value="9">9 Lacks</option>
                                        <option value="10">10 Lacks</option>
                                        <option value="11">11 Lacks</option>
                                        <option value="12">12 Lacks</option>
                                        <option value="13">13 Lacks</option>
                                        <option value="14">14 Lacks</option>
                                        <option value="15">15 Lacks</option>
                                        <option value="16">16 Lacks</option>
                                        <option value="17">17 Lacks</option>
                                        <option value="18">18 Lacks</option>
                                        <option value="19">19 Lacks</option>
                                        <option value="20">20 Lacks</option>
                                        <option value="21">21 Lacks</option>
                                        <option value="22">22 Lacks</option>
                                        <option value="23">23 Lacks</option>
                                        <option value="24">24 Lacks</option>
                                        <option value="25">25 Lacks</option>

                                        <option value="25">Above 25 Lacks</option>
                                        <!--<option value="99">100000</option>
                                        <option value="0" label="0">200000</option>-->

                                    </select>
                                </div>
                                <label><i class="fa fa-jpy"></i> </label>
                            </div><!--col-sm-6-->
                            <div class="col-sm-3 padno">
                                <div class="col-sm-10">
                                    <select name="adv_max" class="form-control">
                                        <option value="" selected="">Max</option>
                                        <option value="0">0 Lacks</option>
                                        <option value="1">1 Lacks</option>
                                        <option value="2">2 Lacks</option>
                                        <option value="3">3 Lacks</option>
                                        <option value="4">4 Lacks</option>
                                        <option value="5">5 Lacks</option>
                                        <option value="6">6 Lacks</option>
                                        <option value="7">7 Lacks</option>
                                        <option value="8">8 Lacks</option>
                                        <option value="9">9 Lacks</option>
                                        <option value="10">10 Lacks</option>
                                        <option value="11">11 Lacks</option>
                                        <option value="12">12 Lacks</option>
                                        <option value="13">13 Lacks</option>
                                        <option value="14">14 Lacks</option>
                                        <option value="15">15 Lacks</option>
                                        <option value="16">16 Lacks</option>
                                        <option value="17">17 Lacks</option>
                                        <option value="18">18 Lacks</option>
                                        <option value="19">19 Lacks</option>
                                        <option value="20">20 Lacks</option>
                                        <option value="21">21 Lacks</option>
                                        <option value="22">22 Lacks</option>
                                        <option value="23">23 Lacks</option>
                                        <option value="24">24 Lacks</option>
                                        <option value="25">25 Lacks</option>

                                        <option value="25">Above 25 Lacks</option>
                                    </select>
                                </div>
                                <label> <i class="fa fa-jpy"></i> </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 pedit2 text-right mtop4"  >Industry:</label>
                            <div class="col-sm-5">
                                <select name="advindustry" id="advindustry" class="form-control" placeholder="Select the industry where you want to work">
                                    <option value="">Select</option>

                                    <option value="56">Construction</option>
                                    <option value="53">IT - BPO</option>
                                    <option value="50">IT-ERP-Oracle</option>
                                    <option value="42">KPO/Technical Support</option>
                                    <option value="34">Law Enforcement/Security</option>
                                    <option value="35">Legal/Law</option>
                                    <option value="55">Management</option>
                                    <option value="36">Marketing/Sales</option>
                                    <option value="52">mech</option>
                                    <option value="51">Media </option>
                                    <option value="37">Media/Journalism</option>
                                    <option value="54">NGO/Social Services</option>
                                    <option value="45">Others</option>
                                    <option value="38">Production/Manufacturing/Maintenance</option>
                                    <option value="44">Strategy / Management Consulting Firms</option>
                                    <option value="46">test cate</option>
                                    <option value="40">Tours and Travel/Airline</option>
                                    <option value="41">Transportation/Logistics</option>
                                </select>
                                You can select at max 2 Industries
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 pedit2 text-right mtop4"  >Job Category:</label>
                            <div class="col-sm-5">
                                <select name="advfarea" id="advfarea" class="form-control" placeholder="Select the industry where you want to work">
                                    <option value="">Select</option>
                                    <option value="349">0 - 044 -</option>
                                    <option value="340">Accessory Designer</option>
                                    <option value="99">Accountant</option>
                                    <option value="73">Accounts Assistant</option>
                                    <option value="241">Accounts Manager</option>
                                    <option value="339">AD</option>
                                    <option value="154">Administration</option>
                                    <option value="316">Air Hostess/Steward/Cabin Crew</option>
                                    <option value="183">Anaesthetist</option>
                                    <option value="83">Animator</option>
                                    <option value="176">Apparel / Garment Designer</option>
                                    <option value="136">Architects</option>
                                    <option value="272">Art Director</option>
                                    <option value="258">Asst. Sales Manager</option>
                                    <option value="159">Autocad Draughtman/Designer</option>
                                    <option value="84">AV Executive</option>
                                    <option value="100">Bank Assurance</option>
                                    <option value="101">Banking - General</option>
                                    <option value="211">Banquet Manager</option>
                                    <option value="184">Beautician</option>
                                    <option value="185">Bio-Technology Research</option>
                                    <option value="317">Branch Head</option>
                                    <option value="259">Branch Manager</option>
                                    <option value="286">Building Inspection</option>
                                    <option value="260">Business Analyst</option>
                                    <option value="261">Business Development Executives</option>
                                    <option value="273">Cameraman</option>
                                    <option value="327">Cargo</option>
                                    <option value="137">Carpenter</option>
                                    <option value="74">Chartered Accountant</option>
                                    <option value="186">Chemical Research Scientist</option>
                                    <option value="187">Chemist</option>
                                    <option value="341">chennai</option>
                                    <option value="212">Chief Chef</option>
                                    <option value="160">Chief Engineer</option>
                                    <option value="161">Civil Engineer</option>
                                    <option value="102">Clerk/Office Boy</option>
                                    <option value="247">Company Secretary</option>
                                    <option value="293">Computer Operator/Data Entry</option>
                                    <option value="124">Configuration Manager</option>
                                    <option value="350">Construction</option>
                                    <option value="138">Construction Manager</option>
                                    <option value="274">Content Developer</option>
                                    <option value="139">Controller</option>
                                    <option value="275">Correspondent/Reporter</option>
                                    <option value="75">Cost Accountant</option>
                                    <option value="155">Councellor</option>
                                    <option value="328">Courier/Delivery</option>
                                    <option value="140">Crane Operator</option>
                                    <option value="262">Customer Relationship Officer</option>
                                    <option value="112">Customer Service Executive (Non Voice)</option>
                                    <option value="113">Customer Service Executive (Voice)</option>
                                    <option value="162">Customer Service/Tech. Support</option>
                                    <option value="223">Data Entry/Computer Operator</option>
                                    <option value="114">Data Processing Executive</option>
                                    <option value="125">Database Administrator</option>
                                    <option value="298">Database Programmer</option>
                                    <option value="297">DBA</option>
                                    <option value="188">Dentist</option>
                                    <option value="189">Dietician</option>
                                    <option value="329">Dockworker</option>
                                    <option value="190">Doctor</option>
                                    <option value="318">Documentation and Visa</option>
                                    <option value="319">Domestic Travel</option>
                                    <option value="191">ECG/CGA Technician</option>
                                    <option value="163">Electrical Engineer</option>
                                    <option value="141">Electrician</option>
                                    <option value="164">Engineer</option>
                                    <option value="143">Equipment Operator</option>
                                    <option value="103">Equity Analyst</option>
                                    <option value="85">Event Coordinator</option>
                                    <option value="86">Event/Promotios Manager</option>
                                    <option value="76">External Auditor</option>
                                    <option value="213">F & B Manager</option>
                                    <option value="126">Faculty</option>
                                    <option value="77">Finance Assistant</option>
                                    <option value="165">Foreman</option>
                                    <option value="330">Forklift Operator</option>
                                    <option value="214">Front Office Executive</option>
                                    <option value="345">gdfgdf</option>
                                    <option value="263">GM- Marketing</option>
                                    <option value="294">Graphic Designer /Animator</option>
                                    <option value="320">Ground Staff</option>
                                    <option value="127">H/W Installation / Maintenance Engg</option>
                                    <option value="128">Hardware Design Technical Leader</option>
                                    <option value="347">having 7 years exp. as a professional medical representative with flaring formulation, abbott health</option>
                                    <option value="348">having 7 years exp. as a professional medical representative with flaring formulation, abbott health</option>
                                    <option value="144">Heavy Equipment Operator</option>
                                    <option value="215">Hostess</option>
                                    <option value="193">House Keeping</option>
                                    <option value="216">House Keeping Executive</option>
                                    <option value="225">HR Executive / Recruiter</option>
                                    <option value="226">HR Manager</option>
                                    <option value="129">Instructional Designer</option>
                                    <option value="104">Insurance / Financial Advisor</option>
                                    <option value="105">Insurance Telesales</option>
                                    <option value="166">Interior Designer</option>
                                    <option value="78">Internal Auditor</option>
                                    <option value="343">it software- application programming / maintenance</option>
                                    <option value="346">IT-ERP- Business Analyst</option>
                                    <option value="177">Jewellery Designer</option>
                                    <option value="217">Kitchen Manager</option>
                                    <option value="194">Lab Technician</option>
                                    <option value="146">Laborer</option>
                                    <option value="248">Law Officer</option>
                                    <option value="249">Lawyer</option>
                                    <option value="250">Legal Adviser</option>
                                    <option value="251">Legal Assistant</option>
                                    <option value="252">Legal Consultant</option>
                                    <option value="253">Legal Editor</option>
                                    <option value="254">Legal Services - Manager</option>
                                    <option value="156">Librarian</option>
                                    <option value="331">Logistics Manager</option>
                                    <option value="235">Machine Operator</option>
                                    <option value="236">Machinist</option>
                                    <option value="237">Maintenance Supervisor</option>
                                    <option value="321">Management Trainee</option>
                                    <option value="322">Manager</option>
                                    <option value="79">Manager - Accounts</option>
                                    <option value="80">Manager- Finance Planning</option>
                                    <option value="228">Manager/Co-ordinator</option>
                                    <option value="264">Marketing Executives</option>
                                    <option value="265">Marketing Manager</option>
                                    <option value="167">Mechanical Engineer</option>
                                    <option value="238">Mechanical Technician</option>
                                    <option value="89">Media Planning - Manager / Executive</option>
                                    <option value="195">Medical Assistant</option>
                                    <option value="196">Medical Representative</option>
                                    <option value="115">Medical Transcriptionist</option>
                                    <option value="197">Medical Writer</option>
                                    <option value="179">Merchandiser</option>
                                    <option value="198">Microbiologist</option>
                                    <option value="148">Mining</option>
                                    <option value="107">Mutual Funds</option>
                                    <option value="130">Network Administrator</option>
                                    <option value="131">Network Designer</option>
                                    <option value="295">Network Engineer</option>
                                    <option value="278">News Editor</option>
                                    <option value="279">News Reador</option>
                                    <option value="199">Nurse</option>
                                    <option value="200">Nutritionist</option>
                                    <option value="323">Office Assistant</option>
                                    <option value="229">Office Secretary/AdminOfficer</option>
                                    <option value="287">Officer</option>
                                    <option value="108">Operations</option>
                                    <option value="332">Operations Management</option>
                                    <option value="201">Opthamologist</option>
                                    <option value="296">Oracle Developer</option>
                                    <option value="132">Other</option>
                                    <option value="149">Painter</option>
                                    <option value="256">Patent</option>
                                    <option value="203">Pharmaceutical Research</option>
                                    <option value="204">Pharmacist</option>
                                    <option value="300">Photoshop</option>
                                    <option value="205">Physician</option>
                                    <option value="206">Physiotherapist</option>
                                    <option value="150">Plumber</option>
                                    <option value="288">Process Engineer</option>
                                    <option value="122">Process Engineers</option>
                                    <option value="281">Production Manager</option>
                                    <option value="289">Production Quality Assurance</option>
                                    <option value="301">Programmer</option>
                                    <option value="169">Project Manager</option>
                                    <option value="282">Proof Reader</option>
                                    <option value="257">Proof Reader (Law)</option>
                                    <option value="207">Public Health Administration</option>
                                    <option value="231">Public Relation Officer</option>
                                    <option value="312">QA</option>
                                    <option value="290">Quality Assurance Engineer</option>
                                    <option value="291">Quality Assurance Manager</option>
                                    <option value="292">Quality Control Inspector</option>
                                    <option value="208">Radiographer</option>
                                    <option value="232">Receptionist/Front Office Executive</option>
                                    <option value="109">Relationship Manager</option>
                                    <option value="239">Repairman</option>
                                    <option value="325">Reservation and Ticketing</option>
                                    <option value="219">Reservation Manager</option>
                                    <option value="220">Restaurant Manager</option>
                                    <option value="151">Roofing</option>
                                    <option value="170">Safety Officer</option>
                                    <option value="268">Sales Executives</option>
                                    <option value="269">Sales Manager</option>
                                    <option value="97">Sales/Marketing Executive</option>
                                    <option value="209">Scientist</option>
                                    <option value="243">Security Guard</option>
                                    <option value="240">Security Installation</option>
                                    <option value="221">Security Manager</option>
                                    <option value="333">Shipping And Receiving</option>
                                    <option value="245">Site Manager</option>
                                    <option value="304">Software Application Developer</option>
                                    <option value="305">Software Engineer</option>
                                    <option value="222">Steward/Waiter</option>
                                    <option value="180">Stiching/Tailor</option>
                                    <option value="110">Stock Broking</option>
                                    <option value="171">Store Keeper</option>
                                    <option value="91">Studio Operation Manager</option>
                                    <option value="283">Sub Editor</option>
                                    <option value="95">Supervisor</option>
                                    <option value="181">Supervisor/Officer</option>
                                    <option value="172">Surveyor</option>
                                    <option value="306">System Administrator</option>
                                    <option value="133">System Analyst</option>
                                    <option value="303">System Programmer</option>
                                    <option value="81">Taxation - Manager</option>
                                    <option value="157">Teaching/Professor/Lecturer</option>
                                    <option value="117">Team Leader</option>
                                    <option value="308">Technical Architect</option>
                                    <option value="134">Technical Leader</option>
                                    <option value="135">Technical Support Engineer</option>
                                    <option value="118">Technical Support Executive (Voice)</option>
                                    <option value="309">Technical Writer</option>
                                    <option value="173">Technician</option>
                                    <option value="271">Tele Marketing Executives</option>
                                    <option value="119">Telemarketing Executive</option>
                                    <option value="311">Testing Engineer</option>
                                    <option value="182">Textile Designer</option>
                                    <option value="326">Tour Operator</option>
                                    <option value="335">Train Operator</option>
                                    <option value="120">Trainee/Management Trainee</option>
                                    <option value="313">Trainer</option>
                                    <option value="246">Training Officer</option>
                                    <option value="284">Translator</option>
                                    <option value="336">Transportation Supervisor</option>
                                    <option value="233">Travel/Immigration Coordinator</option>
                                    <option value="337">Truck Driver</option>
                                    <option value="234">Typist</option>
                                    <option value="210">Veterinary</option>
                                    <option value="285">Video Editor</option>
                                    <option value="92">Visualiser- Art Director</option>
                                    <option value="121">Voice & Accent Trainer</option>
                                    <option value="338">Warehouse Worker</option>
                                    <option value="314">Web Designer</option>
                                    <option value="315">Web Developer</option>
                                    <option value="153">Welder</option>
                                    <option value="174">Workman / Foreman / Technician</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 pedit2 text-right mtop4"  >Job Type:</label>
                            <div class="col-sm-5">
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-primary2 active">
                                        <input type="radio" name="options" id="option1" autocomplete="off" checked value="">  All Jobs
                                    </label>
                                    <label class="btn btn-primary2">
                                        <input type="radio" name="options" id="option2" autocomplete="off" value="Company"> Company Jobs
                                    </label>
                                    <label class="btn btn-primary2">
                                        <input type="radio" name="options" id="option3" autocomplete="off" value="Consultant"> Consultant Jobs
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 pedit2 text-right mtop4"  > Sort By:</label>
                            <div class="col-sm-5">
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-primary2 active">
                                        <input type="radio" name="options1" id="option1" autocomplete="off" checked> Relevance
                                    </label>
                                    <label class="btn btn-primary2">
                                        <input type="radio" name="options2" id="option2" value="date" autocomplete="off">  Date
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="hiddenval" value="valhid" />
                            <div class="col-sm-12 text-center"><input name="advancesearch" class="btn-blue btn bc3" onclick="advancedsearch()" value="Search" type="button"> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--ADVANCED SEARCH POPUP END-->

    <!--CREATE JOB ALERT POPUP-->

    <div class="modal fade bs-example-modal-lg2" id="createjob" tabindex="-1" role="dialog" aria-labelledby="search">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header avd-serbg">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"> <img src="images/close-icon.png"></span></button>
                    <h4 class="modal-title mode-tit" id="myModalLabel">Tell us what kind of jobs you want</h4>
                </div>
                <div class="modal-body avdbg1a">
                    <form class="form-horizontal m10" name="myform1">
                        <div class="form-group m20">
                            <label class="col-sm-4 pedit2 text-right mtop4"><span class="redstar">*</span> Keyword:</label>
                            <div class="col-sm-5">
                                <input type="text" name="keywordalert" id="keywordalert" class="form-control" placeholder="Skills, Designation. Companies">
                            </div>
                            <div><span id="keywordinfo"></span></div>
                        </div>
                        <div class="form-group m20">
                            <label class="col-sm-4 pedit2 text-right mtop4"><span class="redstar">*</span> Location: </label>
                            <div class="col-sm-5">
                                <input type="text" name="locationalert" id="locationalert" class="form-control" placeholder="Enter the cities you want to work in">
                            </div>
                            <div><span id="locationinfo"></span></div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 pedit2 text-right mtop4"><span class="redstar">*</span> Work Experience: </label>
                            <div class="col-sm-2 padno">
                                <div class="col-sm-9">
                                    <select class="form-control " name="workexp" id="workexp">
                                        <option value="">Select</option>
                                        <option value='0'>0</option><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option><option value='13'>13</option><option value='14'>14</option><option value='15'>15</option><option value='16'>16</option><option value='17'>17</option><option value='18'>18</option><option value='19'>19</option><option value='20'>20</option>                                    </select>
                                </div>

                                <label>Years </label>
                            </div><!--col-sm-6-->
                            <div class="col-sm-3 padno">
                                <div class="col-sm-8">
                                    <select class="form-control" name="workexpmon" id="workexpmon">
                                        <option value="">Select</option>

                                        <option value='0'>0</option><option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option>                                    </select>
                                </div>
                                <label> Months </label>
                            </div>
                            <div><span id="workinfo"></span></div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 pedit2 text-right mtop4">Expected Salary: </label>
                            <div class="col-sm-2 padno">
                                <div class="col-sm-9">
                                    <select class="form-control " name="salmin" id="salmin">
                                        <option value="">Min</option>
                                        <option value="0.5">0.5</option>
                                        <option value='1'>1</option><option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option><option value='13'>13</option><option value='14'>14</option><option value='15'>15</option><option value='16'>16</option><option value='17'>17</option><option value='18'>18</option><option value='19'>19</option><option value='20'>20</option><option value='21'>21</option><option value='22'>22</option><option value='23'>23</option><option value='24'>24</option><option value='25'>25</option><option value='26'>26</option><option value='27'>27</option><option value='28'>28</option><option value='29'>29</option><option value='30'>30</option><option value='31'>31</option><option value='32'>32</option><option value='33'>33</option><option value='34'>34</option><option value='35'>35</option><option value='36'>36</option><option value='37'>37</option><option value='38'>38</option><option value='39'>39</option><option value='40'>40</option><option value='41'>41</option><option value='42'>42</option><option value='43'>43</option><option value='44'>44</option><option value='45'>45</option><option value='46'>46</option><option value='47'>47</option><option value='48'>48</option><option value='49'>49</option><option value='50'>50</option>                                    </select>
                                </div>

                            </div><!--col-sm-6-->
                            <div class="col-sm-3 padno">
                                <div class="col-sm-8">
                                    <select class="form-control" name="salmax" id="salmax">
                                        <option value="">Max</option>
                                        <option value='2'>2</option><option value='3'>3</option><option value='4'>4</option><option value='5'>5</option><option value='6'>6</option><option value='7'>7</option><option value='8'>8</option><option value='9'>9</option><option value='10'>10</option><option value='11'>11</option><option value='12'>12</option><option value='13'>13</option><option value='14'>14</option><option value='15'>15</option><option value='16'>16</option><option value='17'>17</option><option value='18'>18</option><option value='19'>19</option><option value='20'>20</option><option value='21'>21</option><option value='22'>22</option><option value='23'>23</option><option value='24'>24</option><option value='25'>25</option><option value='26'>26</option><option value='27'>27</option><option value='28'>28</option><option value='29'>29</option><option value='30'>30</option><option value='31'>31</option><option value='32'>32</option><option value='33'>33</option><option value='34'>34</option><option value='35'>35</option><option value='36'>36</option><option value='37'>37</option><option value='38'>38</option><option value='39'>39</option><option value='40'>40</option><option value='41'>41</option><option value='42'>42</option><option value='43'>43</option><option value='44'>44</option><option value='45'>45</option><option value='46'>46</option><option value='47'>47</option><option value='48'>48</option><option value='49'>49</option><option value='50'>50</option>                                    </select>
                                </div>
                                <label>In Ethiopias </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 pedit2 text-right mtop4"  ><span class="redstar">*</span> Industry:</label>
                            <div class="col-sm-5">
                                <select name="indus" id="indus" class="form-control " placeholder="Select the industry where you want to work">
                                    <option value=''>-&nbsp;Select&nbsp;-</option>

                                    <option value='Construction'>Construction</option><option value='IT - BPO'>IT - BPO</option><option value='IT-ERP-Oracle'>IT-ERP-Oracle</option><option value='KPO/Technical Support'>KPO/Technical Support</option><option value='Law Enforcement/Security'>Law Enforcement/Security</option><option value='Legal/Law'>Legal/Law</option><option value='Management'>Management</option><option value='Marketing/Sales'>Marketing/Sales</option><option value='mech'>mech</option><option value='Media '>Media </option><option value='Media/Journalism'>Media/Journalism</option><option value='NGO/Social Services'>NGO/Social Services</option><option value='Others'>Others</option><option value='Production/Manufacturing/Maintenance'>Production/Manufacturing/Maintenance</option><option value='Strategy / Management Consulting Firms'>Strategy / Management Consulting Firms</option><option value='test cate'>test cate</option><option value='Tours and Travel/Airline'>Tours and Travel/Airline</option><option value='Transportation/Logistics'>Transportation/Logistics</option>								</select>

                            </div>
                            <div><span id="industryinfo"></span></div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-4 pedit2 text-right mtop4"  ><span class="redstar">*</span> Job Category:</label>
                            <div class="col-sm-5">
                                <select name="jobcat" id="jobcat" class="form-control " placeholder="Select the industry where you want to work" >

                                    <option value='' >--Select--</option>

                                    <option value='349'>0 - 044 - </option> <option value='340'>Accessory Designer </option> <option value='99'>Accountant </option> <option value='73'>Accounts Assistant </option> <option value='241'>Accounts Manager </option> <option value='339'>AD </option> <option value='154'>Administration </option> <option value='316'>Air Hostess/Steward/Cabin Crew </option> <option value='183'>Anaesthetist </option> <option value='83'>Animator </option> <option value='176'>Apparel / Garment Designer </option> <option value='136'>Architects </option> <option value='272'>Art Director </option> <option value='258'>Asst. Sales Manager </option> <option value='159'>Autocad Draughtman/Designer </option> <option value='84'>AV Executive </option> <option value='100'>Bank Assurance </option> <option value='101'>Banking - General </option> <option value='211'>Banquet Manager </option> <option value='184'>Beautician </option> <option value='185'>Bio-Technology Research </option> <option value='317'>Branch Head </option> <option value='259'>Branch Manager </option> <option value='286'>Building Inspection </option> <option value='260'>Business Analyst </option> <option value='261'>Business Development Executives </option> <option value='273'>Cameraman </option> <option value='327'>Cargo </option> <option value='137'>Carpenter </option> <option value='74'>Chartered Accountant </option> <option value='186'>Chemical Research Scientist </option> <option value='187'>Chemist </option> <option value='341'>chennai </option> <option value='212'>Chief Chef </option> <option value='160'>Chief Engineer </option> <option value='161'>Civil Engineer </option> <option value='102'>Clerk/Office Boy </option> <option value='247'>Company Secretary </option> <option value='293'>Computer Operator/Data Entry </option> <option value='124'>Configuration Manager </option> <option value='350'>Construction </option> <option value='138'>Construction Manager </option> <option value='274'>Content Developer </option> <option value='139'>Controller </option> <option value='275'>Correspondent/Reporter </option> <option value='75'>Cost Accountant </option> <option value='155'>Councellor </option> <option value='328'>Courier/Delivery </option> <option value='140'>Crane Operator </option> <option value='262'>Customer Relationship Officer </option> <option value='112'>Customer Service Executive (Non Voice) </option> <option value='113'>Customer Service Executive (Voice) </option> <option value='162'>Customer Service/Tech. Support </option> <option value='223'>Data Entry/Computer Operator </option> <option value='114'>Data Processing Executive </option> <option value='125'>Database Administrator </option> <option value='298'>Database Programmer </option> <option value='297'>DBA </option> <option value='188'>Dentist </option> <option value='189'>Dietician </option> <option value='329'>Dockworker </option> <option value='190'>Doctor </option> <option value='318'>Documentation and Visa </option> <option value='319'>Domestic Travel </option> <option value='191'>ECG/CGA Technician </option> <option value='163'>Electrical Engineer </option> <option value='141'>Electrician </option> <option value='164'>Engineer </option> <option value='143'>Equipment Operator </option> <option value='103'>Equity Analyst </option> <option value='85'>Event Coordinator </option> <option value='86'>Event/Promotios Manager </option> <option value='76'>External Auditor </option> <option value='213'>F & B Manager </option> <option value='126'>Faculty </option> <option value='77'>Finance Assistant </option> <option value='165'>Foreman </option> <option value='330'>Forklift Operator </option> <option value='214'>Front Office Executive </option> <option value='345'>gdfgdf </option> <option value='263'>GM- Marketing </option> <option value='294'>Graphic Designer /Animator </option> <option value='320'>Ground Staff </option> <option value='127'>H/W Installation / Maintenance Engg </option> <option value='128'>Hardware Design Technical Leader </option> <option value='347'>having 7 years exp. as a professional medical representative with flaring formulation, abbott health </option> <option value='348'>having 7 years exp. as a professional medical representative with flaring formulation, abbott health </option> <option value='144'>Heavy Equipment Operator </option> <option value='215'>Hostess </option> <option value='193'>House Keeping </option> <option value='216'>House Keeping Executive </option> <option value='225'>HR Executive / Recruiter </option> <option value='226'>HR Manager </option> <option value='129'>Instructional Designer </option> <option value='104'>Insurance / Financial Advisor </option> <option value='105'>Insurance Telesales </option> <option value='166'>Interior Designer </option> <option value='78'>Internal Auditor </option> <option value='343'>it software- application programming / maintenance </option> <option value='346'>IT-ERP- Business Analyst </option> <option value='177'>Jewellery Designer </option> <option value='217'>Kitchen Manager </option> <option value='194'>Lab Technician </option> <option value='146'>Laborer </option> <option value='248'>Law Officer </option> <option value='249'>Lawyer </option> <option value='250'>Legal Adviser </option> <option value='251'>Legal Assistant </option> <option value='252'>Legal Consultant </option> <option value='253'>Legal Editor </option> <option value='254'>Legal Services - Manager </option> <option value='156'>Librarian </option> <option value='331'>Logistics Manager </option> <option value='235'>Machine Operator </option> <option value='236'>Machinist </option> <option value='237'>Maintenance Supervisor </option> <option value='321'>Management Trainee </option> <option value='322'>Manager </option> <option value='79'>Manager - Accounts </option> <option value='80'>Manager- Finance Planning </option> <option value='228'>Manager/Co-ordinator </option> <option value='264'>Marketing Executives </option> <option value='265'>Marketing Manager </option> <option value='167'>Mechanical Engineer </option> <option value='238'>Mechanical Technician </option> <option value='89'>Media Planning - Manager / Executive </option> <option value='195'>Medical Assistant </option> <option value='196'>Medical Representative </option> <option value='115'>Medical Transcriptionist </option> <option value='197'>Medical Writer </option> <option value='179'>Merchandiser </option> <option value='198'>Microbiologist </option> <option value='148'>Mining </option> <option value='107'>Mutual Funds </option> <option value='130'>Network Administrator </option> <option value='131'>Network Designer </option> <option value='295'>Network Engineer </option> <option value='278'>News Editor </option> <option value='279'>News Reador </option> <option value='199'>Nurse </option> <option value='200'>Nutritionist </option> <option value='323'>Office Assistant </option> <option value='229'>Office Secretary/AdminOfficer </option> <option value='287'>Officer </option> <option value='108'>Operations </option> <option value='332'>Operations Management </option> <option value='201'>Opthamologist </option> <option value='296'>Oracle Developer </option> <option value='132'>Other </option> <option value='149'>Painter </option> <option value='256'>Patent </option> <option value='203'>Pharmaceutical Research </option> <option value='204'>Pharmacist </option> <option value='300'>Photoshop </option> <option value='205'>Physician </option> <option value='206'>Physiotherapist </option> <option value='150'>Plumber </option> <option value='288'>Process Engineer </option> <option value='122'>Process Engineers </option> <option value='281'>Production Manager </option> <option value='289'>Production Quality Assurance </option> <option value='301'>Programmer </option> <option value='169'>Project Manager </option> <option value='282'>Proof Reader </option> <option value='257'>Proof Reader (Law) </option> <option value='207'>Public Health Administration </option> <option value='231'>Public Relation Officer </option> <option value='312'>QA </option> <option value='290'>Quality Assurance Engineer </option> <option value='291'>Quality Assurance Manager </option> <option value='292'>Quality Control Inspector </option> <option value='208'>Radiographer </option> <option value='232'>Receptionist/Front Office Executive </option> <option value='109'>Relationship Manager </option> <option value='239'>Repairman </option> <option value='325'>Reservation and Ticketing </option> <option value='219'>Reservation Manager </option> <option value='220'>Restaurant Manager </option> <option value='151'>Roofing </option> <option value='170'>Safety Officer </option> <option value='268'>Sales Executives </option> <option value='269'>Sales Manager </option> <option value='97'>Sales/Marketing Executive </option> <option value='209'>Scientist </option> <option value='243'>Security Guard </option> <option value='240'>Security Installation </option> <option value='221'>Security Manager </option> <option value='333'>Shipping And Receiving </option> <option value='245'>Site Manager </option> <option value='304'>Software Application Developer </option> <option value='305'>Software Engineer </option> <option value='222'>Steward/Waiter </option> <option value='180'>Stiching/Tailor </option> <option value='110'>Stock Broking </option> <option value='171'>Store Keeper </option> <option value='91'>Studio Operation Manager </option> <option value='283'>Sub Editor </option> <option value='95'>Supervisor </option> <option value='181'>Supervisor/Officer </option> <option value='172'>Surveyor </option> <option value='306'>System Administrator </option> <option value='133'>System Analyst </option> <option value='303'>System Programmer </option> <option value='81'>Taxation - Manager </option> <option value='157'>Teaching/Professor/Lecturer </option> <option value='117'>Team Leader </option> <option value='308'>Technical Architect </option> <option value='134'>Technical Leader </option> <option value='135'>Technical Support Engineer </option> <option value='118'>Technical Support Executive (Voice) </option> <option value='309'>Technical Writer </option> <option value='173'>Technician </option> <option value='271'>Tele Marketing Executives </option> <option value='119'>Telemarketing Executive </option> <option value='311'>Testing Engineer </option> <option value='182'>Textile Designer </option> <option value='326'>Tour Operator </option> <option value='335'>Train Operator </option> <option value='120'>Trainee/Management Trainee </option> <option value='313'>Trainer </option> <option value='246'>Training Officer </option> <option value='284'>Translator </option> <option value='336'>Transportation Supervisor </option> <option value='233'>Travel/Immigration Coordinator </option> <option value='337'>Truck Driver </option> <option value='234'>Typist </option> <option value='210'>Veterinary </option> <option value='285'>Video Editor </option> <option value='92'>Visualiser- Art Director </option> <option value='121'>Voice & Accent Trainer </option> <option value='338'>Warehouse Worker </option> <option value='314'>Web Designer </option> <option value='315'>Web Developer </option> <option value='153'>Welder </option> <option value='174'>Workman / Foreman / Technician </option> 									</select>


                            </div>
                            <div><span id="categoryinfo"></span></div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 pedit2 text-right mtop4"  ><span class="redstar">*</span> Role:</label>
                            <div class="col-sm-5">
                                <select name="jobrole" id="jobrole" class="form-control " placeholder="Select the role where you want to work" >

                                    <option value='' >--Select--</option>

                                    <option value='349'>0 - 044 - </option> <option value='340'>Accessory Designer </option> <option value='99'>Accountant </option> <option value='73'>Accounts Assistant </option> <option value='241'>Accounts Manager </option> <option value='339'>AD </option> <option value='154'>Administration </option> <option value='316'>Air Hostess/Steward/Cabin Crew </option> <option value='183'>Anaesthetist </option> <option value='83'>Animator </option> <option value='176'>Apparel / Garment Designer </option> <option value='136'>Architects </option> <option value='272'>Art Director </option> <option value='258'>Asst. Sales Manager </option> <option value='159'>Autocad Draughtman/Designer </option> <option value='84'>AV Executive </option> <option value='100'>Bank Assurance </option> <option value='101'>Banking - General </option> <option value='211'>Banquet Manager </option> <option value='184'>Beautician </option> <option value='185'>Bio-Technology Research </option> <option value='317'>Branch Head </option> <option value='259'>Branch Manager </option> <option value='286'>Building Inspection </option> <option value='260'>Business Analyst </option> <option value='261'>Business Development Executives </option> <option value='273'>Cameraman </option> <option value='327'>Cargo </option> <option value='137'>Carpenter </option> <option value='74'>Chartered Accountant </option> <option value='186'>Chemical Research Scientist </option> <option value='187'>Chemist </option> <option value='341'>chennai </option> <option value='212'>Chief Chef </option> <option value='160'>Chief Engineer </option> <option value='161'>Civil Engineer </option> <option value='102'>Clerk/Office Boy </option> <option value='247'>Company Secretary </option> <option value='293'>Computer Operator/Data Entry </option> <option value='124'>Configuration Manager </option> <option value='350'>Construction </option> <option value='138'>Construction Manager </option> <option value='274'>Content Developer </option> <option value='139'>Controller </option> <option value='275'>Correspondent/Reporter </option> <option value='75'>Cost Accountant </option> <option value='155'>Councellor </option> <option value='328'>Courier/Delivery </option> <option value='140'>Crane Operator </option> <option value='262'>Customer Relationship Officer </option> <option value='112'>Customer Service Executive (Non Voice) </option> <option value='113'>Customer Service Executive (Voice) </option> <option value='162'>Customer Service/Tech. Support </option> <option value='223'>Data Entry/Computer Operator </option> <option value='114'>Data Processing Executive </option> <option value='125'>Database Administrator </option> <option value='298'>Database Programmer </option> <option value='297'>DBA </option> <option value='188'>Dentist </option> <option value='189'>Dietician </option> <option value='329'>Dockworker </option> <option value='190'>Doctor </option> <option value='318'>Documentation and Visa </option> <option value='319'>Domestic Travel </option> <option value='191'>ECG/CGA Technician </option> <option value='163'>Electrical Engineer </option> <option value='141'>Electrician </option> <option value='164'>Engineer </option> <option value='143'>Equipment Operator </option> <option value='103'>Equity Analyst </option> <option value='85'>Event Coordinator </option> <option value='86'>Event/Promotios Manager </option> <option value='76'>External Auditor </option> <option value='213'>F & B Manager </option> <option value='126'>Faculty </option> <option value='77'>Finance Assistant </option> <option value='165'>Foreman </option> <option value='330'>Forklift Operator </option> <option value='214'>Front Office Executive </option> <option value='345'>gdfgdf </option> <option value='263'>GM- Marketing </option> <option value='294'>Graphic Designer /Animator </option> <option value='320'>Ground Staff </option> <option value='127'>H/W Installation / Maintenance Engg </option> <option value='128'>Hardware Design Technical Leader </option> <option value='347'>having 7 years exp. as a professional medical representative with flaring formulation, abbott health </option> <option value='348'>having 7 years exp. as a professional medical representative with flaring formulation, abbott health </option> <option value='144'>Heavy Equipment Operator </option> <option value='215'>Hostess </option> <option value='193'>House Keeping </option> <option value='216'>House Keeping Executive </option> <option value='225'>HR Executive / Recruiter </option> <option value='226'>HR Manager </option> <option value='129'>Instructional Designer </option> <option value='104'>Insurance / Financial Advisor </option> <option value='105'>Insurance Telesales </option> <option value='166'>Interior Designer </option> <option value='78'>Internal Auditor </option> <option value='343'>it software- application programming / maintenance </option> <option value='346'>IT-ERP- Business Analyst </option> <option value='177'>Jewellery Designer </option> <option value='217'>Kitchen Manager </option> <option value='194'>Lab Technician </option> <option value='146'>Laborer </option> <option value='248'>Law Officer </option> <option value='249'>Lawyer </option> <option value='250'>Legal Adviser </option> <option value='251'>Legal Assistant </option> <option value='252'>Legal Consultant </option> <option value='253'>Legal Editor </option> <option value='254'>Legal Services - Manager </option> <option value='156'>Librarian </option> <option value='331'>Logistics Manager </option> <option value='235'>Machine Operator </option> <option value='236'>Machinist </option> <option value='237'>Maintenance Supervisor </option> <option value='321'>Management Trainee </option> <option value='322'>Manager </option> <option value='79'>Manager - Accounts </option> <option value='80'>Manager- Finance Planning </option> <option value='228'>Manager/Co-ordinator </option> <option value='264'>Marketing Executives </option> <option value='265'>Marketing Manager </option> <option value='167'>Mechanical Engineer </option> <option value='238'>Mechanical Technician </option> <option value='89'>Media Planning - Manager / Executive </option> <option value='195'>Medical Assistant </option> <option value='196'>Medical Representative </option> <option value='115'>Medical Transcriptionist </option> <option value='197'>Medical Writer </option> <option value='179'>Merchandiser </option> <option value='198'>Microbiologist </option> <option value='148'>Mining </option> <option value='107'>Mutual Funds </option> <option value='130'>Network Administrator </option> <option value='131'>Network Designer </option> <option value='295'>Network Engineer </option> <option value='278'>News Editor </option> <option value='279'>News Reador </option> <option value='199'>Nurse </option> <option value='200'>Nutritionist </option> <option value='323'>Office Assistant </option> <option value='229'>Office Secretary/AdminOfficer </option> <option value='287'>Officer </option> <option value='108'>Operations </option> <option value='332'>Operations Management </option> <option value='201'>Opthamologist </option> <option value='296'>Oracle Developer </option> <option value='132'>Other </option> <option value='149'>Painter </option> <option value='256'>Patent </option> <option value='203'>Pharmaceutical Research </option> <option value='204'>Pharmacist </option> <option value='300'>Photoshop </option> <option value='205'>Physician </option> <option value='206'>Physiotherapist </option> <option value='150'>Plumber </option> <option value='288'>Process Engineer </option> <option value='122'>Process Engineers </option> <option value='281'>Production Manager </option> <option value='289'>Production Quality Assurance </option> <option value='301'>Programmer </option> <option value='169'>Project Manager </option> <option value='282'>Proof Reader </option> <option value='257'>Proof Reader (Law) </option> <option value='207'>Public Health Administration </option> <option value='231'>Public Relation Officer </option> <option value='312'>QA </option> <option value='290'>Quality Assurance Engineer </option> <option value='291'>Quality Assurance Manager </option> <option value='292'>Quality Control Inspector </option> <option value='208'>Radiographer </option> <option value='232'>Receptionist/Front Office Executive </option> <option value='109'>Relationship Manager </option> <option value='239'>Repairman </option> <option value='325'>Reservation and Ticketing </option> <option value='219'>Reservation Manager </option> <option value='220'>Restaurant Manager </option> <option value='151'>Roofing </option> <option value='170'>Safety Officer </option> <option value='268'>Sales Executives </option> <option value='269'>Sales Manager </option> <option value='97'>Sales/Marketing Executive </option> <option value='209'>Scientist </option> <option value='243'>Security Guard </option> <option value='240'>Security Installation </option> <option value='221'>Security Manager </option> <option value='333'>Shipping And Receiving </option> <option value='245'>Site Manager </option> <option value='304'>Software Application Developer </option> <option value='305'>Software Engineer </option> <option value='222'>Steward/Waiter </option> <option value='180'>Stiching/Tailor </option> <option value='110'>Stock Broking </option> <option value='171'>Store Keeper </option> <option value='91'>Studio Operation Manager </option> <option value='283'>Sub Editor </option> <option value='95'>Supervisor </option> <option value='181'>Supervisor/Officer </option> <option value='172'>Surveyor </option> <option value='306'>System Administrator </option> <option value='133'>System Analyst </option> <option value='303'>System Programmer </option> <option value='81'>Taxation - Manager </option> <option value='157'>Teaching/Professor/Lecturer </option> <option value='117'>Team Leader </option> <option value='308'>Technical Architect </option> <option value='134'>Technical Leader </option> <option value='135'>Technical Support Engineer </option> <option value='118'>Technical Support Executive (Voice) </option> <option value='309'>Technical Writer </option> <option value='173'>Technician </option> <option value='271'>Tele Marketing Executives </option> <option value='119'>Telemarketing Executive </option> <option value='311'>Testing Engineer </option> <option value='182'>Textile Designer </option> <option value='326'>Tour Operator </option> <option value='335'>Train Operator </option> <option value='120'>Trainee/Management Trainee </option> <option value='313'>Trainer </option> <option value='246'>Training Officer </option> <option value='284'>Translator </option> <option value='336'>Transportation Supervisor </option> <option value='233'>Travel/Immigration Coordinator </option> <option value='337'>Truck Driver </option> <option value='234'>Typist </option> <option value='210'>Veterinary </option> <option value='285'>Video Editor </option> <option value='92'>Visualiser- Art Director </option> <option value='121'>Voice & Accent Trainer </option> <option value='338'>Warehouse Worker </option> <option value='314'>Web Designer </option> <option value='315'>Web Developer </option> <option value='153'>Welder </option> <option value='174'>Workman / Foreman / Technician </option> 									</select>


                            </div>
                            <div><span id="roleinfo"></span></div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 pedit2 text-right mtop4"  ><span class="redstar">*</span> Name Your Job Alert:</label>
                            <div class="col-sm-5">
                                <input type="text" name="namealert" id="namealert" class="form-control" placeholder="Enter a name that will help you reconize this job alert">

                            </div>
                            <div><span id="nameinfo"></span></div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 pedit2 text-right mtop4"  ><span class="redstar">*</span> Email Id:</label>
                            <div class="col-sm-5">
                                <input type="email" name="emailalert" id="emailalert" class="form-control" placeholder="Enter a mail id">

                            </div>
                            <div><span id="emailinfo"></span></div>

                        </div>

                        <div class="form-group ">
                            <label class="col-sm-4 pedit2 text-right"></label>
                            <div class="col-sm-7">
                                <label class="checkbox-inline">
                                    <input type="checkbox" name="closejob" id="inlineCheckbox1" value="1"> <span class="redstar">*</span> Also send me job closely related to my search terms.
                                </label>
                            </div>

                        </div>

                        <div class="form-group ">
                            <label class="col-sm-4 pedit2 text-right"></label>
                            <div class="col-sm-7">
                                <div ><span id="termsinfo"></span></div>
                            </div>

                        </div>



                        <div class="form-group">
                            <div class="col-sm-12 text-center"><input class="btn-blue btn bc3" name="submitalert" onclick="return jobalertValidate();" value="Create Job Alert "> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--CREATE JOB ALERT END-->


    <!-- FOOTER -->
    <footer>

        <div id="footer">

            <div class="container">
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-2">

                        <div class="widget widget-contact">
                            <h4 class="widget-title">Information</h4>
                            <ul>
                                <li><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/aboutus.html" > About Us </a> </li>
                                <li><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/terms.html" > Terms & Conditions </a></li>
                                <li><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/privacy-policy.html" > Privacy Policy </a></li>
                                <li><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/contactus.html" > Contact Us </a></li>
                                <li><a href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/faq.html" > Help / FAQ </a></li>

                            </ul>

                        </div><!-- widget-contact -->

                    </div><!-- col -->
                    <div class="col-sm-2">

                        <div class="widget widget-contact">
                            <h4 class="widget-title">Jobseekers </h4>
                            <ul>
                                <li><a href="jobsseeker-login.html" > Login/Register </a> </li>
                                <!--<li><a href="#" > Follow Top Recruiters </a></li>
                                <li><a href="#" > Resume Free Quality Score </a></li>
                                <li><a href="#" > Career Advice </a></li>
                                <li><a href="#" > Security Advice </a></li>
                                <li><a href="#" > Resume Samples </a> </li>
                                <li><a href="#" > Report a Problem </a></li>-->
                            </ul>

                            <h4 class="widget-title"> Recruiters </h4>
                            <ul>
                                <li><a href="recruiter-listing.html" > Browse All Recruiters </a> </li>

                                <!--<li><a href="recruiter-listing.html" > Go to OwoRecruiters </a></li>-->
                                <!--<li><a href="#" > Report a Problem </a></li>-->
                            </ul>
                        </div><!-- widget-contact -->

                    </div><!-- col -->
                    <div class="col-sm-2">

                        <div class="widget widget-contact">

                            <h4 class="widget-title">Browse Jobs</h4>

                            <ul>
                                <li><a href="jobsearch_all.html" > Browse All Jobs </a> </li>
                                <!--<li><a href="#" > Premium MBA Jobs </a></li>
                                <li><a href="#" > Premium Engineering Jobs </a></li>-->
                                <li><a href="jobsearch_all.html?sch=1" > Govt. Jobs </a></li>
                                <li><a href="jobsearch_all.html?sch=2" > International Jobs </a></li>
                                <li><a href="job_by_company.html" > Jobs by Company </a> </li>
                                <li><a href="job_by_category.html" > Jobs by Category </a></li>
                                <li><a href="job_by_area.html" > Jobs by Location </a></li>
                            </ul>

                        </div><!-- widget-contact -->

                    </div><!-- col -->
                    <div class="col-sm-2">

                        <div class="widget widget-contact">
                            <h4 class="widget-title">GOVT. JOBS</h4>
                            <ul>
                                <li><a href="job_by_location.html?loc=1" > Location </a></li>
                            </ul>

                            <h4 class="widget-title"> Oversea jobs</h4>
                            <ul>
                                <li><a href="job_by_location.html?loc=2" > All Countries </a> </li>
                            </ul>

                            <h4 class="widget-title"> Employers</h4>
                            <ul>
                                <li><a href="emp_postjob.html" > Post Jobs </a> </li>
                                <!--<li><a href="#" > Search Resumes</a> </li>-->
                            </ul>



                        </div><!-- widget-contact -->


                    </div><!-- col -->
                    <div class="col-sm-2">

                        <!--	<div class="widget widget-contact">
                                <h4 class="widget-title">SERVICES</h4>

                                <ul>
                                    <li><a href="#" > In-house Consultants </a> </li>
                                    <li><a href="#" > Resume Writing </a></li>
                                    <li><a href="#" > Featured Resume </a></li>
                                    <li><a href="#" > Priority Applicant </a></li>
                                    <li><a href="#" > Recruiters Connent </a></li>
                                </ul>

                            </div>--><!-- widget-contact -->

                        <div class="widget widget-social">
                            <h4 class="widget-title">FOLLOW US</h4>

                            <div class="social-media">

                                <a class="facebook" href="http://www.facebook.com" target="_blank"><i class="mt-icons-facebook"></i></a>
                                <a class="twitter" href="http://www.twitter.com" target="_blank"><i class="mt-icons-twitter"></i></a>
                                <a class="google" href="http://www.googleplus.com" target="_blank"><i class="mt-icons-google-plus"></i></a>
                                <a class="linkedin" href="http://www.linkedin.com" target="_blank"><i class="mt-icons-linkedin"></i></a>
                            </div><!-- social-media -->
                        </div><!-- widget-social -->
                    </div><!-- col -->
                    <div class="col-sm-1"> </div>
                </div><!-- row -->
            </div><!-- container -->

        </div><!-- footer -->

        <div id="footer-bottom">

            <div class="container">
                <div class="row">

                    <div class="col-sm-12">

                        <div class="widget widget-text">

                            <div  class="copy-right"><p></p>
                                <!--<p>All rights reserved &copy; 2015 Lead Consulting Group. |  Website Designed by <a target="_blank" href="http://www.phpscriptsmall.com/">Php Scripts Mall Pvt Ltd</a></p>-->
                            </div>

                        </div><!-- widget-text -->

                    </div><!-- col -->
                </div><!-- row -->
            </div><!-- container -->

        </div><!-- footer-bottom -->

    </footer>
    <!-- FOOTER -->

</div><!-- PAGE-WRAPPER -->


<!-- GO TOP -->
<a id="go-top"><i class="mt-icons-arrow-up2"></i></a>

<script >
    $('#myCarousel').carousel({
        interval: 40000
    });

    $('.carousel .item').each(function(){
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));

        if (next.next().length>0) {

            next.next().children(':first-child').clone().appendTo($(this)).addClass('rightest');

        }
        else {
            $(this).siblings(':first').children(':first-child').clone().appendTo($(this));

        }
    });
</script>

<!--jQUERY-->
<script src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/assets/plugins/jquery/jquery-2.1.3.min.js"></script>

<!-- BOOTSTRAP JS -->
<script src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/assets/bootstrap/js/bootstrap.min.js"></script>

<!-- VIEWPORT -->
<script src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/assets/plugins/viewport/jquery.viewport.js"></script>

<!-- MENU -->
<script src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/assets/plugins/menu/hoverIntent.js"></script>
<script src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/assets/plugins/menu/superfish.js"></script>

<!-- FANCYBOX -->
<script src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/assets/plugins/fancybox/jquery.fancybox.pack.js"></script>

<!-- REVOLUTION SLIDER -->
<script src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/assets/plugins/revolutionslider/js/jquery.themepunch.tools.min.js"></script>
<script src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/assets/plugins/revolutionslider/js/jquery.themepunch.revolution.min.js"></script>

<!-- OWL Carousel -->
<script src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/assets/plugins/owl-carousel/owl.carousel.min.js"></script>

<!-- PARALLAX -->
<script src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/assets/plugins/parallax/jquery.stellar.min.js"></script>

<!-- ISOTOPE -->
<script src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/assets/plugins/isotope/imagesloaded.pkgd.min.js"></script>
<script src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/assets/plugins/isotope/isotope.pkgd.min.js"></script>

<!-- PLACEHOLDER -->
<script src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/assets/plugins/placeholders/jquery.placeholder.min.js"></script>

<!-- CONTACT FORM VALIDATE & SUBMIT -->
<script src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/assets/plugins/validate/jquery.validate.min.js"></script>
<script src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/assets/plugins/submit/jquery.form.min.js"></script>

<!-- GOOGLE MAPS -->
<script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
<script src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/assets/plugins/googlemaps/gmap3.min.js"></script>

<!-- CHARTS -->
<script src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/assets/plugins/charts/jquery.easypiechart.min.js"></script>

<!-- COUNTER -->
<script src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/assets/plugins/counter/jQuerySimpleCounter.js"></script>

<!-- STATISTICS -->
<script src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/assets/plugins/statistics/chart.min.js"></script>

<!-- YOUTUBE PLAYER -->
<script src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/assets/plugins/ytplayer/jquery.mb.YTPlayer.js"></script>

<!-- HOVERDIR -->
<script src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/assets/plugins/hoverdir/hoverdir.js"></script>

<!-- MAGNIFY -->
<script src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/assets/plugins/magnify/jquery.magnify.js"></script>

<!-- INSTAFEED -->
<script src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/assets/plugins/instafeed/instafeed.min.js"></script>

<!-- TWITTERFETCHER -->
<script src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/assets/plugins/twitterfetcher/twitterfetcher.js"></script>

<!-- TEXT ROTATOR -->
<script src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/assets/plugins/text-rotator/jquery.simple-text-rotator.min.js"></script>

<!-- ANIMATIONS -->
<script src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/assets/plugins/animations/wow.min.js"></script>

<!-- CUSTOM JS -->
<script src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/assets/js/custom.js"></script>

</body>

</html>

<!--Auto Complete ---------------------------------------------------------------->

<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/assets/js/auto/jquery.autocomplete.js"></script>
<script type="text/javascript" src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/assets/js/auto/jquery.autocomplete.min.js"></script>
<script type="text/javascript" src="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/assets/js/auto/jquery.autocomplete.pack.js"></script>



<!--<script type="text/javascript" src="js/jquery-1.4.2.js"></script>
<script type="text/javascript" src="js/jquery.autocomplete.js"></script>-->
<link rel="stylesheet" type="text/css" href="http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/assets/js/auto/jquery.autocomplete.css" />

<script src="https://apis.google.com/js/platform.js" async defer></script>
<script type="text/javascript">
    function onSignIn(googleUser) {
        var profile = googleUser.getBasicProfile();
        console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
        console.log('Name: ' + profile.getName());
        console.log('Image URL: ' + profile.getImageUrl());
        console.log('Email: ' + profile.getEmail());
        var id = profile.getId();
        var name = profile.getName();
        var email = profile.getEmail();
        var auth2 = gapi.auth2.getAuthInstance();
        auth2.signOut().then(function () {
            //alert("dfs");
            console.log('User signed out.');
            // window.location='logout.php';
        });
        // alert(id);
        // alert(name);
        // alert(email);

        $.ajax({
            type: "POST",
            url: "ajax_google.php",
            data: "id="+ id + "&name=" + name + "&email=" + email ,
            success: function(msg){
                // alert(msg);
                window.location='emp_welcome.php';
            }
        });
        //alert(profile.getId());
        // alert(profile.getName());
        // alert(profile.getImageUrl());
        // alert(profile.getEmail());

    }

</script>
<script>
    function signOut() {

        // alert("dfsd");
        var auth2 = gapi.auth2.getAuthInstance();
        auth2.signOut().then(function () {
            //alert("dfs");
            console.log('User signed out.');
            window.location='logout_emp.php';
        });


    }
</script>
<script type="text/javascript">
    function advancedsearch()
    {
//alert('ghghghfg');
        var adkey = $("#ad-keyword").val();
        var location = $("#location").val();
        var advindustry = $("#advindustry").val();
        var advfarea = $("#advfarea").val();
        if(adkey != "" || location != "" || advindustry != ""  || advfarea != "")
        {
            $('#advancesearchform').submit();
            return true;
        }
        else
        {
            $('#divsearch').html("<div class='alert'>Please enter Keywords or Location or select Job Category or Industry to search</div>");
            return false;
        }
        /*
        $.ajax({
            type: "POST",
            url: "http://74.124.215.220/~demolin/demo/entrepreneur_job_portal//ajax_save_jobs.php",
            async:false,
            data: "id="+id+"&seeker_id="+seeker_id,
            success: function(msg){
                alert(msg);
            //window.location='http://74.124.215.220/~demolin/demo/entrepreneur_job_portal/search.html';
        }
        });*/
    }
</script>
<!--Auto Complete End ------------------------------------------------------------------->
<script type="text/javascript">

    //<![CDATA[



    // check-out date >= check-in date

    function customRange(dates) {

        if (this.id == 'startdate') {

            $('#enddate').datepick('option', 'minDate', dates[0] || null);

        }

        else {

            $('#startdate').datepick('option', 'maxDate', dates[0] || null);

        }

        var edt = $('#ed_timestamp').val();

        var sdt = $('#sd_timestamp').val();

        if ((edt > 0) && (sdt > 0)) {

            $('span.nights').text((edt - sdt) / (3600*24) + ' night(s)');

        } else {

            $('span.nights').text('');

        }

    }



    $(document).ready(function(){




        $("#keyword").autocomplete("keyskillsearch.php", {

            width: 175,
            formatResult: function(data, value) {
                //alert(data);
                return value.split(",")[0];
            }
        });

        $("#ad-keyword").autocomplete("keyskillsearch.php", {
            //alert(data);
            width: 175,
            formatResult: function(data, value) {

                return value.split(",")[0];
            }
        });

        $("#location").autocomplete("ajax_joblocation.php", {

            width: 165,
            formatResult: function(data, value) {
                return value.split(",")[0];
            }
        });

        $("#adv-location").autocomplete("ajax_joblocation.php", {

            width: 165,
            formatResult: function(data, value) {
                return value.split(",")[0];
            }
        });
        // Datepick input fields

        /*	$('#startdate').datepick({

                onSelect: customRange,

                showTrigger: '#trigger',

                altField: '#sd_timestamp',

                //altFormat: $.datepick.TIMESTAMP

            });

            $('#enddate').datepick({

                onSelect: customRange,

                showTrigger: '#trigger',

                altField: '#ed_timestamp',

            //	altFormat: $.datepick.TIMESTAMP

            });
    */


        // Carousel slider

        /*$('.carousel ul').cycle({

            prev: '.previous',

            next: '.next',

            timeout: 6000,

            pause: 1

        });*/



        /* tabs */

        //var tabs = $("#tabs").tabs(function () {



        //$("#innerimages").css("display","none");

        //$("#innerimages_loader").css("display","none");

        //});



        // Template setup

        //	Site.setup();



        // Google map setup

        // centerX: 27.9944

        // centerY: -9.84375

        // zoom: 2

        // clustering: true

        // NOTE: hotel list is loaded on the bottom of this file

        //Site.gmapInit(27.9944, -9.84375, 2, true);



    });



    //]]>

</script>
<script type="text/javascript">
    function chkempty()
    {
        if(tinyMCE.get("job_desc").getContent())
        {

            var idddd = "job_desc";
            alert(job_desc);
            chkkabuse();


        }
    }


    function chkkabuse(txtid)
    {
        // alert(txtid);
        // exit;
        var idd = txtid;
        //alert(idd);
        var textval =document.getElementById(idd).value;
        //alert(textval);
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function()
        {
            if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
                //alert(xmlhttp.responseText);

                //alert(xmlhttp.responseText);
                if(xmlhttp.responseText==0)
                {
                    document.getElementById(txtid).focus();
                    document.getElementById(txtid).value="";
                    //document.getElementById("name1").innerHTML="<font color='red' style='font-size:12px;'>Don't use abuse words,  </font> ";
                    alert ("Don't use abuse words");


                }
                else
                {
                    //document.getElementById("name1").innerHTML="<font color='#009966' style='font-size:12px;'>good</font>";
                }
            }
        }
        xmlhttp.open("GET","chkabuse.php?q="+textval,true);
        xmlhttp.send();


    }
</script>
<script type="text/javascript">
    function jobalertValidate()
    {
        var keywordalert=$('#keywordalert').val();
        var locationalert=$('#locationalert').val();
        var workexp=$('#workexp').val();
        var indus=$('#indus').val();
        var jobcat=$('#jobcat').val();
        var jobrole=$('#jobrole').val();
        var namealert=$('#namealert').val();
        var emailalert=$('#emailalert').val();

        var clr=0;
        $('.error').hide();
        if(keywordalert=="")
        {
            $('#keywordinfo').html('<span class="error">Please enter keyword</span>');
            $('#keywordalert').focus();
            document.myform1.keywordalert.style.borderColor="red";
            clr=1;
        }
        if(locationalert=="")
        {
            $('#locationinfo').html('<span class="error">Please enter location</span>');
            $('#locationalert').focus();
            document.myform1.locationalert.style.borderColor="red";
            clr=1;
        }
        if(workexp=="")
        {
            $('#workinfo').html('<span class="error">Please enter Experience</span>');
            $('#workexp').focus();
            document.myform1.workexp.style.borderColor="red";
            clr=1;
        }
        if(indus=="")
        {
            $('#industryinfo').html('<span class="error">Please enter industry</span>');
            $('#indus').focus();
            document.myform1.indus.style.borderColor="red";
            clr=1;
        }
        if(jobcat=="")
        {
            $('#categoryinfo').html('<span class="error">Please enter job category</span>');
            $('#jobcat').focus();
            document.myform1.jobcat.style.borderColor="red";
            clr=1;
        }
        if(jobrole=="")
        {
            $('#roleinfo').html('<span class="error">Please enter job role</span>');
            $('#jobrole').focus();
            document.myform1.jobrole.style.borderColor="red";
            clr=1;
        }
        if(namealert=="")
        {
            $('#nameinfo').html('<span class="error">Please enter Name</span>');
            $('#namealert').focus();
            document.myform1.namealert.style.borderColor="red";
            clr=1;
        }
        if(emailalert=="")
        {
            $('#emailinfo').html('<span class="error">Please enter Email</span>');
            $('#emailalert').focus();
            document.myform1.emailalert.style.borderColor="red";
            clr=1;
        }
        // var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

        if(document.getElementById("inlineCheckbox1").checked == false){
            $('#termsinfo').html('<span class="error">Please agree to the terms and conditions to continue.</span>');
            clr=1;
        }

        if(clr==0)
        {
            document.myform1.keywordalert.value=1;
            document.myform1.submit();
            return true;
        }

    }

</script>

<style>
    .error,.redstar{ color:#F00;   font-size: 12px;}
</style>



<script type="text/javascript">
    /*$( document ).ready(function() {
        alert('gffgf');
    });
    $(function() {


        $('#sub').click(function(){
        //alert('fgfd');
      //$("html, body").animate({ scrollTop: 350 }, "slow");
        validateForm();
        //alert("clicked");
    });
    */
    function validateForm(){
//var textbox = document.getElementById("mobile_number");
//alert(textbox.value.length);


        var nameReg = /^[A-Za-z]+$/;
        var numberReg =  /^[0-9]+$/;
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        var letterNumber =  /^(?=.*[a-zA-Z])(?=.*\d)(?=.*[!@#$%^&*()_+])[A-Za-z\d][A-Za-z\d!@#$%^&*()_+]{6,19}$/;
        var username = $('#username').val();
        var email = $('#email').val();
        var pass= $('#password').val();
        var cpass= $('#confirmpassword').val();
        var yourname = $('#yourname').val();

        var select_country = $('#select_country').val();
        var state = $('#state').val();
        var city = $('#city').val();
        var mobile_number = $('#mobile_number').val();
        // var year = $('#year').val();
        // var month = $('#month').val();
        //var designation = $('#function_area').val();
        //var keyskills = $('#keyskills').val();
        var basic_grad = $('#basic_grad').val();
        var post_grad = $('#post_grad').val();
        var terms= $('#terms');

        var inputMessage = new Array("Username","Email Address","Password","Confirm password", "Your Full Name","Current Location","City","Mobile Number","Work Experience","Designation","Key Skills","Basic Education","Agree To Terms And Conditions");

        $('.error').hide();
        var clr=0;

        if(username == ""){

            $('#usernameInfo').html('<span class="error">Usename is Required</span>');
            $('#username').focus();
            clr=1;
        }
        //else if(username.length<6 )
        //{
        //$('#usernameInfo').html('<span class="error">Usename must be 6 letters</span>');
        //$('#username').focus();
        //clr=1;
        //}

        //else if(!letterNumber.test(username))
        //{
        //$('#usernameInfo').html('<span class="error">Usename must have atleast alphanumeric and special character</span>');
        //$('#username').focus();
        //clr=1;
        //}


        if(email == ""){
            $('#emailInfo').html('<span class="error">Please specify your email ID.</span>');
            //$('#email').focus();
            clr=1;
        }
        else if(!emailReg.test(email)){
            $('#emailInfo').html('<span class="error"> Please enter a valid email Id</span>');
            //$('#email').focus();clr=1;
        }
        if(pass == ""){
            $('#passwordInfo').html('<span class="error">Please specify a password.</span>');
            $('#password').focus();clr=1;
        }
        if(cpass == ""){
            $('#cpasswordInfo').html('<span class="error">Please specify confirm password.</span>')
            $('#confirmpassword').focus();clr=1;
        }
        if(pass != cpass){
            $('#cpasswordInfo').html('<span class="error">Your passwords entries do not match.</span>');
            $('#confirmpassword').focus();clr=1;
        }
        if(yourname == ""){

            $('#yournameInfo').html('<span class="error">Please specify you name.</span>');
            $('#yourname').focus();
            clr=1;
        }


        /*else if(!nameReg.test(names)){
            $('#nameLabel').html('<span class="error"> Letters only</span>');
			clr=1;
        }
		else if(names.length<=3){

            $('#nameLabel').html('<span class="error">' + inputMessage[0] + ' Should Be atleast 4 characters Long</span>');
			clr=1;
        } */
        if(select_country == ""){

            $('#countryInfo').html('<span class="error"> Please select your country.</span>');
            $('#select_country').focus();
            clr=1;
        }
        if(state == ""){

            $('#stateInfo').html('<span class="error"> Please select your state.</span>');
            $('#state').focus();
            clr=1;
        }
        if(city == ""){

            $('#cityInfo').html('<span class="error">Please select your current city.</span>');
            $('#city').focus(); clr=1;
        }
        /* else if(!nameReg.test(lnames)){
             $('#lnameLabel').html('<span class="error"> Letters only</span>');
             clr=1;
         }*/


        if(mobile_number == ""){
            //alert("success");
            // alert(mobile_number.length);
            $('#mobileInfo').html('<span class="error">Please specify your mobile number.</span>');
            $('#mobile_number').focus();clr=1;
        }

        /* if(year == ""){
            $('#expInfo').html('<span class="error">Please select your total experience.</span>');$('#year').focus(); clr=1;
        }

        if(designation == ""){
            $('#desigInfo').html('<span class="error">Please specify your Designation</span>');
            $('#function_area').focus();clr=1;
        }
        if(keyskills == ""){
            $('#keyInfo').html('<span class="error">Please specify your key skills.</span>');$('#keyskills').focus();clr=1;
        }  */

        if(basic_grad == ""){
            $('#basicInfo').html('<span class="error">Please select your basic course.</span>');
            $('#basic_grad').focus();clr=1;
        }

        if(document.getElementById("terms").checked == false){
            $('#termInfo').html('<span class="error">Please agree to the terms and conditions to continue.</span>');
            $('#terms').focus();clr=1;
        }
        if(clr==0)
        {
            //alert('ffff');

            document.register.frmsubval.value=1;
            //alert(document.register.frmsubval.value);

            document.register.submit();
            return true;
            // $('#register').submit();
        }

        /* if(clr==0)
         {
           //  alert(clr);
             $('#ckhcartview').fadeIn('slow');
           //  $('#checkout-heading-mod').show();
            // $(".checkout-content").slideUp('slow');
             //document.subfrm.frmsubval.value=1;
         //document.subfrm.submit();
         }
         */
    }
    //});
</script>

<style type="text/css">
    .error {
        color: #F00;
        font-size: 11px;

    }
</style>
<script type="text/javascript">
    var code=0;
    function phd_edu()
    {
        document.getElementById('phed').style.display='block';
        document.getElementById('phd').style.display='none';
    }

    function pg_edu()
    {
        document.getElementById('po_grad').value='';
        document.getElementById('mas').style.display='none';
        document.getElementById('pged').style.display='block';
        document.getElementById('phd').style.display='block';

    }

    function cou_edu()
    {
        document.getElementById('coursename').style.display='block';
        document.getElementById('cour').style.display='none';
        document.getElementById('cour2').style.display='block';

    }
    function cou2_edu()
    {
        document.getElementById('coursename2').style.display='block';
        document.getElementById('cour2').style.display='none';
        document.getElementById('cour3').style.display='block';

    }
    function cou3_edu()
    {
        document.getElementById('coursename3').style.display='block';
        document.getElementById('cour3').style.display='none';

    }
    function resum()
    {
        document.getElementById('textresume').style.display='block';
        document.getElementById('resum').style.display='block';
        document.getElementById('hid').style.display='none';

    }
    function landlink()
    {
        document.getElementById('land').style.display='block';
        document.getElementById('landlink').style.display='none';

    }

    function city_change(v){
        var re = /Other/;
        if(re.test(v)){
            document.getElementById('new_city').style.display="block";
            document.getElementById('hc2').value=1;
        }
        else {
            document.getElementById('new_city').style.display="none";
            //document.getElementById('other_city').value="";
            document.getElementById('hc2').value=0;
        }
    }

    function change_country(c){
        if(c!='1'){
            document.getElementById('new_city').style.display="block";
            document.getElementById('city').value="";
            document.getElementById('city').options[document.getElementById('city').selectedIndex].text="Select";
            document.getElementById('city').disabled=true;
            //document.getElementById('other_city').value="";
            document.getElementById('hc1').value=1;
        }
        else{
            document.getElementById('new_city').style.display="none";
            document.getElementById('city').disabled=false;
            document.getElementById('hc1').value=0;
        }
    }


    function forgotview() {

        if (document.getElementById('light').style.display=='none') {
            document.getElementById('light').style.display='block';
            document.getElementById('fade').style.display='block';
        }
        else{
            document.getElementById('light').style.display='none';
            document.getElementById('fade').style.display='none';
            //return;
        }
    }
</script>


<script>
    function captchaval(str)
    {
//alert(str);
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function()
        {
            if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
                //alert(xmlhttp.responseText);
                if(xmlhttp.responseText==0)
                {

                    document.getElementById("capterr").innerHTML="<b><font color='#009966'>valid verification code</font></b>";
                    code=1;
                }
                else
                {
                    document.getElementById("capterr").innerHTML="<b><font color='#F00'>invalid verification code</font></b>";
                }
            }
        }
        xmlhttp.open("GET","captchaval.php?q="+str,true);
        xmlhttp.send();
    }
</script>


<script>

    function email_val(val)
    {

        var email=val;
        var re=/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        if(email=="")
        {
            document.getElementById("emailInfo").innerHTML='<font color="#F00" style="font-size:11px;">Enter the Email address</font>';
            //document.getElementById('email').focus();
            return false;
        }
        else if(re.test(document.getElementById('email').value)==false)
        {

            document.getElementById("emailInfo").innerHTML='<font color="#F00" style="font-size:11px;">invalid</font>';
            document.getElementById('email').value="";
            //document.getElementById('email').focus();

            return false;
        }
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function()
        {
            if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
                //alert(xmlhttp.responseText);
                if(xmlhttp.responseText==0)
                {
                    document.getElementById("emailInfo").innerHTML="<font color='#F00' style='font-size:11px;'>Email ID Already Exists !!!";
                    document.getElementById('email').value="";
                    document.getElementById('email').focus();

                }
                else
                {
                    document.getElementById("emailInfo").innerHTML="<font color='#009966' style='font-size:12px;'>Email Id is available</font>";
                }
            }
        }
        xmlhttp.open("GET","email.php?q="+val,true);
        xmlhttp.send();

    }

</script>

<script>

    function username_val(val)
    {
//alert(val);
        var letterNumber =  /^(?=.*[a-zA-Z])(?=.*\d)(?=.*[!@#$%^&*()_+])[A-Za-z\d][A-Za-z\d!@#$%^&*()_+]{6,19}$/;
        var username=val;
        if(username=="")
        {

            document.getElementById("usernameInfo").innerHTML='<font color="#F00" style="font-size:11px;">Enter the Username</font>';
            document.getElementById('username').focus();
            //document.getElementById('username').value="";


            return false;
        }
        else if(username!="")
        {
            //if(username.length<6)
            //{
            //document.getElementById("usernameInfo").innerHTML='<font color="#F00" style="font-size:11px;">Username must be 6 letters</font>';
            //document.getElementById('username').focus();
            //document.getElementById('username').value="";

            //return false;
        }
        else //if(!letterNumber.test(username))
            //{
            //document.getElementById("usernameInfo").innerHTML='<font color="#F00" style="font-size:11px;">Usename must have atleast alphanumeric and special character</font>';
            //document.getElementById('username').focus();
            //return false;
            //}

            }

    if (window.XMLHttpRequest)
    {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    }
    else
    {// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function()
    {
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            //alert(xmlhttp.responseText);
            if(xmlhttp.responseText==0)
            {
                document.getElementById("usernameInfo").innerHTML="<font color='red' style='font-size:12px;'>Username Already Exists !!!</font>";
                document.getElementById('username').value="";
                document.getElementById('username').focus();

            }
            else
            {
                document.getElementById("usernameInfo").innerHTML="<font color='#009966' style='font-size:12px;'>Username is available</font>";
            }
        }
    }
    xmlhttp.open("GET","username.php?q="+val,true);
    xmlhttp.send();
    }

</script>


<link rel="stylesheet" type="text/css" href="tcal.css" />
<script type="text/javascript" src="tcal.js"></script>

<script>
    //-------------------------Ajax loading for states-------------//
    function loadXMLDoc(val)
    {
//alert(val);
        var xmlhttp;
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function()
        {
            if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
                var resp=trim(xmlhttp.responseText);
                if(resp!="")
                {
                    document.getElementById("state").innerHTML=resp;

                }
                else{
                    var sta=document.getElementById("statee");
                    sta.hide();

                }

            }
        }
        xmlhttp.open("GET","state_ajax.php?country="+val,true);
        xmlhttp.send();
    }

    //--------------------------Ajax Loading for Cities--------------//
    function loadcity(cityval)
    {
//alert(cityval);
        var xmlhttp;
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function()
        {
            if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
                document.getElementById("city").innerHTML=xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","city_ajax.php?city="+cityval,true);
        xmlhttp.send();
    }

    function loadcityspace()
    {
        document.getElementById('city1').style.display="block";
    }
    function countrycheck(valu)
    {
        //var valu=document.getElementById("inlineCheckbox1").value;
        //alert(valu);
        if(valu == 1)
        {
            //alert('ffff');
            //loadcountry();
            document.getElementById('divcity').style.display="none";
            document.getElementById('divcountry').style.display="block";
            document.getElementById('inlineCheckbox2').checked = "checked";
        }
        else if(valu == 2)
        {
            document.getElementById('divcity').style.display="block";
            document.getElementById('divcountry').style.display="none";
            document.getElementById('inlineCheckbox1').checked = "";
            //document.getElementById('conn').style.display="none";
            //document.getElementById('con').style.display="block";
        }
    }

    //--------------------------Ajax Loading for Countries--------------//
    function loadcountry()
    {
//alert(countryval);
        var countryval=1;
        var xmlhttp;
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp=new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange=function()
        {
            if (xmlhttp.readyState==4 && xmlhttp.status==200)
            {
                document.getElementById("select_country").innerHTML=xmlhttp.responseText;
                //document.getElementById('stateInfo').innerHTML='';
            }
        }
        xmlhttp.open("GET","country_ajax.php?country="+countryval,true);
        xmlhttp.send();
    }


</script>

<script type="text/javascript" language="javascript">

    /*function trim(s)
    {
        var l=0; var r=s.length -1;
        while(l < s.length && s[l] == ' ')
        {     l++; }
        while(r > l && s[r] == ' ')
        {     r-=1;     }
        return s.substring(l, r+1);
    }*/


    function LTrim(str){
        var whitespace = new String(" \t\n\r");
        var s = new String(str);
        if(whitespace.indexOf(s.charAt(0)) != -1){
            // We have a string with leading blank(s)...
            var j=0, i = s.length;
            // Iterate from the far left of string until we
            // don't have any more whitespace...
            while(j < i && whitespace.indexOf(s.charAt(j)) != -1)
                j++;
            // Get the substring from the first non-whitespace
            // character to the end of the string...
            s = s.substring(j, i);
        }
        return s;
    }

    function RTrim(str){
        // We don't want to trip JUST spaces, but also tabs,
        // line feeds, etc.  Add anything else you want to
        // "trim" here in Whitespace
        var whitespace = new String(" \t\n\r");
        var s = new String(str);
        if (whitespace.indexOf(s.charAt(s.length-1)) != -1) {
            // We have a string with trailing blank(s)...
            var i = s.length - 1;       // Get length of string
            // Iterate from the far right of string until we
            // don't have any more whitespace...
            while (i >= 0 && whitespace.indexOf(s.charAt(i)) != -1)
                i--;
            // Get the substring from the front of the string to
            // where the last non-whitespace character is...
            s = s.substring(0, i+1);
        }
        return s;
    }

    function trim(str){
        return RTrim(LTrim(str));
    }


    function check_dob(val)
    {
        var currentDate = new Date();
        var cday = currentDate.getDate();
        var cmonth = currentDate.getMonth()+1;
        if(cmonth<10)
        {
            cmonth="0"+cmonth;
        }
        var cyear = currentDate.getFullYear();
        var newtoday=cmonth+"/"+cday+"/"+cyear;
        var cyearless=cyear-18;
        var sptdate=val.split("/");

        if(newtoday==val || sptdate[2]>cyearless)
        {
            document.register.dob.value='';
            document.register.dob.focus();
            alert("Please enter the valid date");
        }

    }

    //Form validation starts here

    function checkIt(evt)
    {
        evt = (evt) ? evt : window.event
        var charCode = (evt.which) ? evt.which : evt.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            status = "This field accepts numbers only."
            return false
        }
        status = "";
        return true
    }



    function file_upload(upload_field)
    {
        var re_text = /\.pdf|\.doc|\.docx/i;

        var filename = upload_field.value;

        if (filename.search(re_text) == -1)
        {
            alert("File does not have (doc, docx and pdf) extension");

            //      upload_field.register.reset();

//  		upload_field.value = '' ;

            document.getElementById('fupload').value = "";

            return false;
        }

        return true;

    }


    function photo_upload(upload)
    {
        var re_text = /\.jpg|\.png|\.gif|\.jpeg/i;

        var filename = upload.value;

        if(filename.search(re_text) == -1)
        {
            alert("Image does not have Image(jpg, gif, png) extension");

            //      upload.register.reset();

            // 	  upload.value;

            document.getElementById('nusr_photo').value = "" ;

            return false;
        }

        return true;
    }

    function ugspec(v){
        document.getElementById('basic_grad_spec').value="";
        if(v!=1 && v!=0){
            document.getElementById('basic_grad_spec').style.display="block";
            document.getElementById('basic_txt1').style.display="block";
            document.getElementById('basic_txt').style.display="block";
            document.getElementById('basic_grad_spec').style.color='#000000';
            document.getElementById('basic_txt').focus();
        }
        else{
            document.getElementById('basic_grad_spec').style.display="none";
            document.getElementById('basic_txt1').style.display="none";
            document.getElementById('basic_txt').style.display="none";
        }
    }

    function ugedsp(v){
        document.getElementById('basic_grad_spec1').value="";
        if(v!=1 && v!=0){
            document.getElementById('basic_grad_spec1').style.display="block";
            document.getElementById('basic_text1').style.display="block";
            document.getElementById('basic_text').style.display="block";
            document.getElementById('basic_grad_spec1').style.color='#000000';
            document.getElementById('basic_text').focus();
        }
        else{
            document.getElementById('basic_grad_spec1').style.display="none";
            document.getElementById('basic_text1').style.display="none";
            document.getElementById('basic_text').style.display="none";
        }
    }

    function pgspec(v){
        document.getElementById('post_grad_spec').value="";

        if(v!=0 && v!=document.getElementById('hidnot_pggrad').value){
            document.getElementById('post_grad_spec').style.display="block";
            document.getElementById('pg_txt1').style.display="block";
            document.getElementById('post_txt').style.display="block";
            document.getElementById('post_grad_spec').style.color='#000000';
            document.getElementById('post_grad_spec').focus();
        }
        else{
            document.getElementById('post_txt').style.display="none";
            document.getElementById('pg_txt1').style.display="none";
            document.getElementById('post_grad_spec').style.display="none";
        }
    }

    function pgedsp(v){
        document.getElementById('post_grad_spec1').value="";

        if(v!=0 && v!=document.getElementById('hidnot_pggrad1').value){
            document.getElementById('post_grad_spec1').style.display="block";
            document.getElementById('pg_text1').style.display="block";
            document.getElementById('post_text').style.display="block";
            document.getElementById('post_grad_spec1').style.color='#000000';
            document.getElementById('post_grad_spec1').focus();
        }
        else{
            document.getElementById('post_text').style.display="none";
            document.getElementById('pg_text1').style.display="none";
            document.getElementById('post_grad_spec1').style.display="none";
        }
    }

    function expedet(v){
        document.getElementById('annulsal').value="";
        if(v!=1 && v!=0){
            document.getElementById('exp_det').style.display="block";
            document.getElementById('exp_det').focus();
        }
        else{
            document.getElementById('annulsal').style.display="none";
            document.getElementById('exp_det').style.display="none";

        }
    }

    function doctspec(v){
        document.getElementById('doct_spec').value="";
        if(v!=0 && v!=document.getElementById('hidnot_postpggrad').value){
            document.getElementById('doct_txt').style.display="block";
            document.getElementById('doct_spec').style.display="block";
            document.getElementById('postpg_txt1').style.display="block";
            document.getElementById('doct_spec').style.color='#000000';
            document.getElementById('doct_spec').focus();
        }
        else {
            document.getElementById('doct_txt').style.display="none";
            document.getElementById('postpg_txt1').style.display="none";
            document.getElementById('doct_spec').style.display="none";
        }
    }

    function alpha(e) {
        var k;
        document.all ? k = e.keyCode : k = e.which;
        return ((k > 64 && k < 91) || (k > 96 && k < 123) || k == 8 || k==32);
    }



    function rmv_space(val)
    {
//alert(window.event.keyCode);
        if(window.event.keyCode!=32 && window.event.keyCode!=64)
            return true;
        else
            return false;
    }

    $(document).ready(function () {
        //called when key is pressed in textbox
        $("#mobile_number").keypress(function (e) {
            //if the letter is not digit then display error and don't type anything
            if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                //display error message
                //$("#mobileInfo").html("Digits Only");//.show().fadeOut("slow");
                return false;
            }
        });
    });
    /*function minmax(value, min, max)
    {

        if(parseInt(value) < min || isNaN(value))
            return 0;
        else if(parseInt(value) > max)
            return 0;
        else return value;
    }*/
</script>
