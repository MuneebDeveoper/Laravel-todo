@extends('pages/layoutmaster')
@section('title', 'Add new project')
@section('addproject')
<body>
    <main class="browse-section">				
        <div class="container">
            <div class="row">
              
                <div class="col-lg-9 col-md-8 mainpage">
                   
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
@endsection
