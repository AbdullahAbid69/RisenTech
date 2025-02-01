<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title> HorizonTech</title>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
    <link href='' rel='stylesheet'>
    <style>
        .register {
            background: -webkit-linear-gradient(left, #3931af, #00c6ff);
            {{--  margin-top: 1%;  --}}
            padding: 2.7%;
        }

        .register-left {
            text-align: center;
            color: #fff;
            {{--  margin-top: 4%;  --}}
        }

        .register-left input {
            border: none;
            border-radius: 1.5rem;
            padding: 2%;
            width: 60%;
            background: #f8f9fa;
            font-weight: bold;
            color: #383d41;
            margin-top: 30%;
            margin-bottom: 3%;
            cursor: pointer;
        }

        .register-right {
            background: #f8f9fa;
            border-top-left-radius: 10% 50%;
            border-bottom-left-radius: 10% 50%;
        }

        .register-left img {
            margin-top: 15%;
            margin-bottom: 5%;
            width: 35%;
            -webkit-animation: mover 2s infinite alternate;
            animation: mover 1s infinite alternate;
        }

        @-webkit-keyframes mover {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-20px);
            }
        }

        @keyframes mover {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-20px);
            }
        }

        .register-left p {
            font-weight: lighter;
            padding: 12%;
            margin-top: -9%;
        }

        .register .register-form {
            padding: 10%;
            margin-top: 10%;
        }

        .btnRegister {
            float: right;
            margin-top: 10%;
            border: none;
            border-radius: 1.5rem;
            padding: 2%;
            background: #0062cc;
            color: #fff;
            font-weight: 600;
            width: 50%;
            cursor: pointer;
        }

        .register .nav-tabs {
            margin-top: 3%;
            border: none;
            background: #0062cc;
            border-radius: 1.5rem;
            width: 28%;
            float: right;
        }

        .register .nav-tabs .nav-link {
            padding: 2%;
            height: 34px;
            font-weight: 600;
            color: #fff;
            border-top-right-radius: 1.5rem;
            border-bottom-right-radius: 1.5rem;
        }

        .register .nav-tabs .nav-link:hover {
            border: none;
        }

        .register .nav-tabs .nav-link.active {
            width: 100px;
            color: #0062cc;
            border: 2px solid #0062cc;
            border-top-left-radius: 1.5rem;
            border-bottom-left-radius: 1.5rem;
        }

        .register-heading {
            text-align: center;
            margin-top: 8%;
            margin-bottom: -15%;
            color: #495057;
        }
    </style>

</head>

<body oncontextmenu='return false' class='snippet-body'>
    <div class="container-fluid register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="{{ url('images/startlogo.png') }}" alt="" />
                <h3>Welcome</h3>
                <p>Apply as a Future Horizon Student and Begin Your Journey to Excellence!</p>
                <input type="submit" name="instructions" value="INSTRUCTIONS" data-toggle="modal" data-target="#exampleModal" /><br />
            </div>
            <div class="col-md-9 register-right">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                            aria-controls="home" aria-selected="true">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false">Login</a>
                    </li>
                </ul>
                {{--  registeration Form  --}}
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">HorizenTech Admission Portal</h3>
                        <form method="post" action="/registeruser">
                            @csrf
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Full Name *"
                                        value="" name="full_name" />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password *"
                                        value="" name="password" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *"
                                        value="" name="email" />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Confirm Password *"
                                        value="" name="re_password" />
                                </div>
                                <input type="submit" class="btnRegister" value="Register" />
                            </div>
                        </div>
                        </form>
                    </div>

                    {{--  Login Section  --}}
                    <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <h3 class="register-heading">HorizenTech Admission Portal</h3>
                        <form method="post" action="/loginuser">
                            @csrf
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email *"
                                        value="" name="email" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password *"
                                        value="" name="password" />
                                </div>
                                <input type="submit" class="btnRegister" value="Login" />
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    {{--  <!-- Modal -->  --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">INSTRUCTIONS</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            {{--  modal body  --}}
            <div id="accordion">
                <div class="card">
                  <div class="card-header">
                    <a class="btn" data-toggle="collapse" href="#collapseOne">
                    Register Yourself
                    </a>
                  </div>
                  <div id="collapseOne" class="collapse show" data-parent="#accordion">
                    <div class="card-body">
                    Click the "Register" button to create your student profile.
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <a class="collapsed btn" data-toggle="collapse" href="#collapseTwo">
                    Fill Out the Online Form
                  </a>
                  </div>
                  <div id="collapseTwo" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                    Complete all required fields in the admission form using BLOCK LETTERS.
                    Ensure accuracy when entering personal, academic, and contact details.
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <a class="collapsed btn" data-toggle="collapse" href="#collapseThree">
                    Gather Required Documents
                    </a>
                  </div>
                  <div id="collapseThree" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                    Prepare clear, scanned copies of the following:
                    Matric Certificate/Marks Sheet
                    Intermediate Certificate/Marks Sheet
                    Diploma and Final Year Consolidated Marks Sheet (if applicable)
                    Specialization Diploma (if applicable)
                    Valid PNC/PMDC Card
                    Experience Certificates (if any)
                    Other Educational Certificates (if any)
                    Candidate’s Domicile and PRC
                    Candidate and Father's/Guardian's CNIC
                    12 Passport-Sized Photos
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <a class="collapsed btn" data-toggle="collapse" href="#collapseThree">
                    Pay the Admission Fee
                    </a>
                  </div>
                  <div id="collapseThree" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                    Download and pay the online challan form through the designated method.
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <a class="collapsed btn" data-toggle="collapse" href="#collapseThree">
                    Submit Your Application
                    </a>
                  </div>
                  <div id="collapseThree" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                    Use any of the following methods to send your form and documents:
                    WhatsApp: Send scans to 0326-0011789.
                    Email: Send to admissions@hsnhs.edu.pk.
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <a class="collapsed btn" data-toggle="collapse" href="#collapseThree">
                    Track Your Application
                    </a>
                  </div>
                  <div id="collapseThree" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                    Log in to your account to check the status of your application.
                    </div>
                  </div>
                </div>
              </div>
              {{--  modal popup end  --}}
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <script type='text/javascript'></script>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
    <script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
</body>

</html>
