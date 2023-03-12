<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	  <script type="text/javascript" src="js/jquery-3.3.1.slim.min.js"></script>
	 <script type="text/javascript" src="js/popper.min.js"></script>
	 <script type="text/javascript" src="js/bootstrap.min.js"></script>
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <style type="text/css">
        .mybtn{
            background-color: black; border-radius: 8px;color: white;width: 150px;
        }
	 	@import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";
body {
    font-family: 'Poppins', sans-serif;
    background: #fafafa;
}

p {
    font-family: 'Poppins', sans-serif;
    font-size: 1.1em;
    font-weight: 300;
    line-height: 1.7em;
    color: #999;
}

a,
a:hover,
a:focus {
    color: inherit;
    text-decoration: none;
    transition: all 0.3s;
}

.navbar {
    padding: 15px 10px;
    background: #fff;
    border: none;
    border-radius: 0;
    margin-bottom: 40px;
    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
}

.navbar-btn {
    box-shadow: none;
    outline: none !important;
    border: none;
}

.line {
    width: 100%;
    height: 1px;
    border-bottom: 1px dashed #ddd;
    margin: 40px 0;
}

/* ---------------------------------------------------
    SIDEBAR STYLE
----------------------------------------------------- */

.wrapper {
    display: flex;
    width: 100%;
    align-items: stretch;
}

#sidebar {
    min-width: 250px;
    max-width: 250px;
    background: #7386D5;
    color: #fff;
    transition: all 0.3s;
}

#sidebar.active {
    margin-left: -250px;
}

#sidebar .sidebar-header {
    padding: 20px;
    background: #6d7fcc;
}

#sidebar ul.components {
    padding: 20px 0;
    border-bottom: 1px solid #47748b;
}

#sidebar ul p {
    color: #fff;
    padding: 10px;
}

#sidebar ul li a {
    padding: 10px;
    font-size: 1.1em;
    display: block;
}

#sidebar ul li a:hover {
    color: #7386D5;
    background: #fff;
}

#sidebar ul li.active>a,
a[aria-expanded="true"] {
    color: #fff;
    background: #6d7fcc;
}

a[data-toggle="collapse"] {
    position: relative;
}

.dropdown-toggle::after {
    display: block;
    position: absolute;
    top: 50%;
    right: 20px;
    transform: translateY(-50%);
}

ul ul a {
    font-size: 0.9em !important;
    padding-left: 30px !important;
    background: #6d7fcc;
}

ul.CTAs {
    padding: 20px;
}

ul.CTAs a {
    text-align: center;
    font-size: 0.9em !important;
    display: block;
    border-radius: 5px;
    margin-bottom: 5px;
}

a.download {
    background: #fff;
    color: #7386D5;
}

a.article,
a.article:hover {
    background: #6d7fcc !important;
    color: #fff !important;
}

/* ---------------------------------------------------
    CONTENT STYLE
----------------------------------------------------- */

#content {
    width: 100%;
    padding: 20px;
    min-height: 100vh;
    transition: all 0.3s;
}

/* ---------------------------------------------------
    MEDIAQUERIES
----------------------------------------------------- */

@media (max-width: 768px) {
    #sidebar {
        margin-left: -250px;
    }
    #sidebar.active {
        margin-left: 0;
    }
    #sidebarCollapse span {
        display: none;
    }
}
	 </style>
	</head>
	<body>
	<div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <!--heading-->
            </div>

            <ul class="list-unstyled components">
                <p>Total Student's-</p>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Student</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Add Student</a>
                        </li>
                        <li>
                            <a href="#">Student List</a>
                        </li>
                        <li>
                            <a href="#">Student Fees</a>
                        </li>
                    </ul>
                </li>
                 <li class="active">
                    <a href="#Employee" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Employee</a>
                    <ul class="collapse list-unstyled" id="Employee">
                        <li>
                            <a href="#"> Add Employee</a>
                        </li>
                        <li>
                            <a href="#">Add Salary</a>
                        </li>
                        <li>
                            <a href="#">Employee Salary</a>
                        </li>
                        <li>
                            <a href="#">Employee List</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Other Cash</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Add Daily Expenses</a>
                        </li>
                        <li>
                            <a href="#">Add Daily Cash</a>
                        </li>
                        <li>
                            <a href="#">Monthly Total</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#Authentication" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Authentication</a>
                    <ul class="collapse list-unstyled" id="Authentication">
                        <li>
                            <a href="#">Profile</a>
                        </li>
                        <li>
                            <a href="#">Log Out</a>
                        </li>
                        
                    </ul>
                </li>
                
            </ul>

            
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        
                        <span><i class="fa fa-bars" aria-hidden="true"></i></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                   
                </div>
            </nav>


            <div class="conatiner">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4 p-3" style="background-color: lightblue; border-radius: 10px;max-width: 30.333333%;">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-4" >
                                        <i class="fa fa-graduation-cap" aria-hidden="true" style="font-size: 55px;"></i>
                                        
                                    </div>
                                    <div class="col-md-8">
                                        <h4>Student Fees</h4>
                                        <button class="mybtn">ADD<i class="fa fa-plus" aria-hidden="true"></i></button>
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-md-4 p-3 ml-2" style="background-color: lightblue; border-radius: 10px;max-width: 30.333333%;">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-4" >
                                        <i class="fa fa-graduation-cap" aria-hidden="true" style="font-size: 55px;"></i>
                                        
                                    </div>
                                    <div class="col-md-8">
                                        <h5 style="font-size: 18px;">Add Daily Expenses</h5>
                                        <button class="mybtn">ADD<i class="fa fa-plus" aria-hidden="true"></i></button>
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-md-4 p-3 ml-2" style="background-color: lightblue; border-radius: 10px;max-width: 30.333333%;">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-4" >
                                        <i class="fa fa-graduation-cap" aria-hidden="true" style="font-size: 55px;"></i>
                                        
                                    </div>
                                    <div class="col-md-8">
                                        <h5 style="font-size: 16px;">Add Employee Salary</h5>
                                        <button class="mybtn">ADD<i class="fa fa-plus" aria-hidden="true"></i></button>
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
                
            </div>
<div class="col-md-12 mt-2">
                    <div class="row">
                        <div class="col-md-4 p-3" style="background-color: lightblue; border-radius: 10px;max-width: 30.333333%;">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-4" >
                                        <i class="fa fa-graduation-cap" aria-hidden="true" style="font-size: 55px;"></i>
                                        
                                    </div>
                                    <div class="col-md-8">
                                        <h4>Add Student</h4>
                                        <button class="mybtn">ADD<i class="fa fa-plus" aria-hidden="true"></i></button>
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-md-4 p-3 ml-2" style="background-color: lightblue; border-radius: 10px;max-width: 30.333333%;">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-4" >
                                        <i class="fa fa-graduation-cap" aria-hidden="true" style="font-size: 55px;"></i>
                                        
                                    </div>
                                    <div class="col-md-8">
                                        <h4>Add Employee</h4>
                                        <button class="mybtn">ADD<i class="fa fa-plus" aria-hidden="true"></i></button>
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-md-4 p-3 ml-2" style="background-color: lightblue; border-radius: 10px;max-width: 30.333333%;">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-4" >
                                        <i class="fa fa-graduation-cap" aria-hidden="true" style="font-size: 55px;"></i>
                                        
                                    </div>
                                    <div class="col-md-8">
                                        <h4>Add Dialy Cash</h4>
                                        <button class="mybtn">ADD<i class="fa fa-plus" aria-hidden="true"></i></button>
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
                <div class="col-md-12 mt-2">
                    <div class="row">
                        <div class="col-md-4 p-3" style="background-color: lightblue; border-radius: 10px;max-width: 30.333333%;">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-4" >
                                        <i class="fa fa-graduation-cap" aria-hidden="true" style="font-size: 55px;"></i>
                                        
                                    </div>
                                    <div class="col-md-8">
                                        <h4>Student Data</h4>
                                        <button class="mybtn">ADD<i class="fa fa-plus" aria-hidden="true"></i></button>
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-md-4 p-3 ml-2" style="background-color: lightblue; border-radius: 10px;max-width: 30.333333%;">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-4" >
                                        <i class="fa fa-graduation-cap" aria-hidden="true" style="font-size: 55px;"></i>
                                        
                                    </div>
                                    <div class="col-md-8">
                                        <h4 style="font-size: 23px;">Employee Data</h4>
                                        <button class="mybtn">ADD<i class="fa fa-plus" aria-hidden="true"></i></button>
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-md-4 p-3 ml-2" style="background-color: lightblue; border-radius: 10px;max-width: 30.333333%;">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-4" >
                                        <i class="fa fa-graduation-cap" aria-hidden="true" style="font-size: 55px;"></i>
                                        
                                    </div>
                                    <div class="col-md-8">
                                        <h4 style="font-size: 21px;">Employee Salary</h4>
                                        <button class="mybtn">ADD<i class="fa fa-plus" aria-hidden="true"></i></button>
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
           <!--all nav-->
        </div>
    </div>	


<script type="text/javascript">
	$(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
</script>

	</body>
	</html>