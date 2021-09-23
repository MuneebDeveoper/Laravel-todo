<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, shrink-to-fit=9">
        <meta name="description" content="Gambolthemes">
	    <meta name="author" content="Gambolthemes">
        <title>Add Tester</title>

        <link rel="icon" type="image/png" href="images/logo.png">
        <link href="css/responsive.css" rel="stylesheet">
	    <link href="css/style.css" rel="stylesheet">
	    <link href="css/datepicker.min.css" rel="stylesheet">
	    <link href="css/jquery.range.css" rel="stylesheet">
	    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
	    <link href="vendor/OwlCarousel/assets/owl.carousel.css" rel="stylesheet">
	    <link href="vendor/OwlCarousel/assets/owl.theme.default.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="vendor/semantic/semantic.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/semantic/semantic.min.css">
</head>
<body>
    <main class="browse-section">				
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="account_dt_left">
                        <div class="job-center-dt">
                            <img src="images/Ellipse 57.png" alt="">
                            <div class="job-urs-dts">
                                
                                <h4>Sara A.</h4>
                                
                                
                            </div>													
                        </div>
                        <div class="my_websites">
                            <ul>
                                <li><a href="#" class="web_link"><i class="fas fa-globe"></i>+966 001 001 001</a></li>
                                <li><a href="#" class="web_link"><i class="fas fa-envelope"></i>username@jawadah.com</a></li>
                                <li><a href="#" class="web_link"><i class="fas fa-map-marker-alt"></i>Address</a></li>
                            </ul>
                        </div>
                        <div class="rlt_section">
                            <div class="rtl_left">
                                <h6>Project Submitted:</h6>
                            </div>
                            <div class="rtl_right">
                                <div class="star">
                                    							
                                    <span class="one-one">101</span> 									
                                </div>
                            </div>
                        </div>
                        <div class="group_skills_bar">
                            <div class="for-flex">
                                <h6>Package Purchased</h6>
                            <div class="package-purchased">Startup <span>Expiry:30/06/2021</span></div>
                            </div>
                            <a href="#" class="skiils_button">Upgrade</a>
                        </div>
                        
                        <div class="social_section3 mb80">
                            <div class="social_leftt3">
                                <h6>No. of Organization Members</h6>
                            </div>
                            <div class="social_right3">
                                5
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
                <div class="col-lg-9 col-md-8 mainpage">
                    <div class="account_heading">
                        <div class="account_hd_left">
                            <h2>Manage Your Account</h2>
                        </div>
                        <div class="account_hd_right">
                            <a href="#" class="main_lg_btn">Logout</a>
                        </div>
                    </div>
                    
                    <div class="account_tabs">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('client') ? 'active' : '' }} "  href="/">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('client/add_project') ? 'active' : '' }}" href="http://127.0.0.1:8000/add_project">Add New Project</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://127.0.0.1:8000/my-plan">My Plan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="http://127.0.0.1:8000/report">Report</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link float-right" href="#"><i class="fas fa-cog"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="view_chart col-lg-8">
                        <div class="view_chart_header">
                            <h4>Add Project</h4>								
                        </div>
                        <div class="post_job_body">
                            <form>	
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="label15">Project Name*</label>
                                            <input type="text" class="job-input" placeholder="Enter Name">
                                        </div>
                                        <div class="form-group">
                                            <label class="label15">Project Description*</label>
                                            <textarea class="textarea_input" placeholder="Enter Description"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="label15">Test Cycle Name</label>
                                            <input type="text" class="job-input" placeholder="Enter Cycle Name">
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="label15">Description</label>
                                            <input type="text" class="job-input" placeholder="Enter description">
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="label15">Number of Dvices</label>
                                            <input type="text" class="job-input" placeholder="Enter Number of Devices">
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="label15">Duration</label>
                                            <input type="text" class="job-input" placeholder="Enter Duration of Project">
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="label15">Preferences</label>
                                            <input type="text" class="job-input" placeholder="Enter Preferences">
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="label15">Tester Location</label>
                                            <input type="text" class="job-input" placeholder="Enter Tester Location">
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="label15">Number of Testers</label>
                                            <input type="text" class="job-input" placeholder="Enter Number of Testers">
                                        </div>
                                        
                                    </div>
                                    
                                    
                                    
                                    
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="label15">Start Date</label>
                                            <div class="smm_input">
                                                <input type="text" class="job-input">
                                                															
                                            </div>															
                                        </div>															
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="label15">End Date</label>
                                            <div class="smm_input">
                                                <input type="text" class="job-input">
                                                														
                                            </div>															
                                        </div>															
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="label15">Dedicated Team Required</label>
                                            <input type="text" class="job-input" placeholder="Enter Dedicated Team Required">
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="label15">Number of Organization Memebers</label>
                                            <input type="text" class="job-input" placeholder="Enter Organization Members">
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-12">
                                        
                                        <div class="form-group">
                                            <label class="label15">Explain features to the Testers</label>
                                            <textarea class="textarea_input" placeholder="Explaination"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="label15">Project Type</label>
                                            <input type="text" class="job-input" placeholder="Enter Project Type">
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="label15">Credentials, if any</label>
                                            <input type="text" class="job-input" placeholder="Enter Credentials">
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="label15">Test Environment</label>
                                            <input type="text" class="job-input" placeholder="Enter Test Environment">
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-icon">
                                            <a href="#"><i class="fas fa-square icon-color"></i></a><p>Do defects needed to be reported against specific 
                                                features and functions?</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-icon">
                                            <a href="#"><i class="fas fa-square icon-color"></i></a><p>Are there any uses cases or user stories available?</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-icon">
                                            <a href="#"><i class="fas fa-square icon-color"></i></a><p>Any requirement doc available?</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-icon">
                                            <a href="#"><i class="fas fa-square icon-color"></i></a><p>Test asset available?</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-icon">
                                            <a href="#"><i class="fas fa-square icon-color"></i></a><p>Test asset available?</p>
                                        </div>
                                    </div>
                                    <div class="testing-type">
                                        Testing Type
                                    </div>
                                    <div class="container margin-top-2">
                                        
                                        <div class="row justify-content-center bg-2">
                                
                                            <div class="col-lg-12 col-md-12 col-sm-12  ">
                                                <button class="btn-color py-2 justify-content-around align-items-center    testing-btn my-2">Functional Testing</button>
                                                <button class="btn-color  py-2 justify-content-around align-items-center    testing-btn  my-2 margin-left-20">Perfomance Testing</button>
                                                <button class="btn-color  py-2 justify-content-around align-items-center    testing-btn my-2">Comparibilty Testing</button>
                                                <button class="btn-color  py-2 justify-content-around align-items-center   testing-btn  my-2 margin-left-20">Security Testing</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <button class="post_jp_btn" type="submit">Add</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                    
                    
                    						
                </div>																																						
            </div>
        </div>					
    </main>
</body>
</html>