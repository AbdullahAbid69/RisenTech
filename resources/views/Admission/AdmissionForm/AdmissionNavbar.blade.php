<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Horizon Tech - Admission Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="{{ url('AdmissionForm/AdmissionForm.css') }}">

</head>
<style>
    .nav_link.disabled {
    pointer-events: none;
    opacity: 0.5;
    cursor: not-allowed;
}
</style>
<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div class="nav_list admission-nav-list"> <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span
                        class="nav_logo-name">ADMISSION FORM</span> </a>
                <div class="nav_list"> <a href="{{ url('Admission_Form/personal') }}" class="nav_link {{ Request::is('Admission_Form/personal') ? 'active' : '' }}">
                        <i class='bx bx-grid-alt nav_icon'></i>
                        <span class="nav_name">Personal Information</span>
                    </a>
                    <a href="{{ url('Admission_Form/Education_And_Experience') }}" class="nav_link {{ Request::is('Admission_Form/Education_And_Experience') ? 'active' : '' }}">
                        <i class='bx bx-user nav_icon'></i>
                        <span class="nav_name">Education</span>
                    </a> <a href="{{ url('Admission_Form/Guardians_Information') }}" class="nav_link {{ Request::is('Admission_Form/Guardians_Information') ? 'active' : '' }}">
                        <i class='bx bx-message-square-detail nav_icon'></i>
                        <span class="nav_name">Guardians Info</span> </a>
                    <a href="{{ url('Admission_Form/Health_Certificates') }}" class="nav_link {{ Request::is('Admission_Form/Health_Certificates') ? 'active' : '' }}">
                        <i class='bx bx-bookmark nav_icon'></i>
                        <span class="nav_name">Health Certificates</span>
                    </a>
                    <a href="{{ url('Admission_Form/Documents') }}" class="nav_link {{ Request::is('Admission_Form/Documents') ? 'active' : '' }}">
                        <i class='bx bx-folder nav_icon'></i>
                        <span class="nav_name">Documents</span>
                    </a>
                    <a href="{{ url('Admission_Form/Chalan') }}" class="nav_link {{ Request::is('Admission_Form/Chalan') ? 'active' : '' }}">
                        <i class='bx bx-folder nav_icon'></i>
                        <span class="nav_name">Chalan</span>
                    </a>
                    {{--  <a href="#" class="nav_link">
                        <i class='bx bx-bar-chart-alt-2 nav_icon'></i>
                        <span class="nav_name">Admit Card</span>
                    </a>
                    <a href="#" class="nav_link">
                        <i class='bx bx-bar-chart-alt-2 nav_icon'></i>
                        <span class="nav_name">Result</span>
                    </a>  --}}
                </div>
            </div>
            <a href="{{ url('logout') }}" class="nav_link {{ Request::is('logout') ? 'active' : '' }}"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span>
            </a>
        </nav>
    </div>


    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{ url('AdmissionForm/AdmissionForm.js') }}"></script>

</body>

</html>
