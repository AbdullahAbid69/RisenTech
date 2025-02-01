@include('Admission.AdmissionForm.AdmissionNavbar')

<style>
    .abc{
        text-align: center !important;
        padding-top: 20px !important;
    }
    .inputs{
        text-align: left !important;
        padding-top: 20px !important;
    }

    .inputs label{
        font-weight: bold !important;
    }

    .abc h2{
        font-size: 50px !important;
        font-weight: bold !important;
    }

    .file-input {
        display: none;
        margin-left: 20px;
        margin-top: 5px;
    }
    .form-group {
        margin: 10px 0;
    }

</style>
    {{--  <!--Container Main start-->  --}}
    <div class="height-100">
        <div class="container">
            <form action="{{ route('documents_save') }}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="row abc">
                <h2>ADMISSION FORM</h2>
                <h4>(DOCUMENTS)</h4>
                <div class="col-md-6 inputs">
                    <div class="form-group">
                        <label>1. Matric Certificate/Marks Sheet:</label>
                        <input type="radio" name="matric" value="yes" onclick="showFileInput('matricFile')" {{ isset($document) && $document->matric == 'yes' ? 'checked' : '' }}> Yes
                        <input type="radio" name="matric" value="no" onclick="hideFileInput('matricFile')" {{ isset($document) && $document->matric == 'no' ? 'checked' : '' }}> No
                        <input type="file" id="matricFile" class="file-input" name="matricFile">
                    </div>
                </div>
                <div class="col-md-6 inputs">
                    <div class="form-group">
                        <label>2. Intermediate Certificate/Marks Sheet:</label>
                        <input type="radio" name="inter" value="yes" onclick="showFileInput('interFile')" {{ isset($document) && $document->inter == 'yes' ? 'checked' : '' }}> Yes
                        <input type="radio" name="inter" value="no" onclick="hideFileInput('interFile')" {{ isset($document) && $document->inter == 'no' ? 'checked' : '' }}> No
                        <input type="file" id="interFile" class="file-input" name="interFile">
                    </div>
                </div>
                <div class="col-md-6 inputs">
                    <div class="form-group">
                        <label>3. Diploma and Final Year consolidated Marks Sheet:</label>
                        <input type="radio" name="diploma" value="yes" onclick="showFileInput('diplomaFile')" {{ isset($document) && $document->diploma == 'yes' ? 'checked' : '' }}> Yes
                        <input type="radio" name="diploma" value="no" onclick="hideFileInput('diplomaFile')" {{ isset($document) && $document->diploma == 'no' ? 'checked' : '' }}> No
                        <input type="file" id="diplomaFile" class="file-input" name="diplomaFile">
                    </div>
                </div>
                <div class="col-md-6 inputs">
                    <div class="form-group">
                        <label>4. Specialization Diploma if required:</label>
                        <input type="radio" name="specialization" value="yes" onclick="showFileInput('specializationFile')" {{ isset($document) && $document->specialization == 'yes' ? 'checked' : '' }}> Yes
                        <input type="radio" name="specialization" value="no" onclick="hideFileInput('specializationFile')" {{ isset($document) && $document->specialization == 'no' ? 'checked' : '' }}> No
                        <input type="file" id="specializationFile" class="file-input" name="specializationFile">
                    </div>
                </div>
                <div class="col-md-6 inputs">
                    <div class="form-group">
                        <label>5. Valid PNC / PMDC Card:</label>
                        <input type="radio" name="pnc" value="yes" onclick="showFileInput('pncFile')" {{ isset($document) && $document->pnc == 'yes' ? 'checked' : '' }}> Yes
                        <input type="radio" name="pnc" value="no" onclick="hideFileInput('pncFile')" {{ isset($document) && $document->pnc == 'no' ? 'checked' : '' }}> No
                        <input type="file" id="pncFile" class="file-input" name="pncFile">
                    </div>
                </div>
                <div class="col-md-6 inputs">
                    <div class="form-group">
                        <label>6. Experience Certificate:</label>
                        <input type="radio" name="experience" value="yes" onclick="showFileInput('experienceFile')" {{ isset($document) && $document->experience == 'yes' ? 'checked' : '' }}> Yes
                        <input type="radio" name="experience" value="no" onclick="hideFileInput('experienceFile')" {{ isset($document) && $document->experience == 'no' ? 'checked' : '' }}> No
                        <input type="file" id="experienceFile" class="file-input" name="experienceFile">
                    </div>
                </div>
                <div class="col-md-6 inputs">
                    <div class="form-group">
                        <label>7. Other Education Certificate(If Any):</label>
                        <input type="radio" name="other" value="yes" onclick="showFileInput('otherFile')" {{ isset($document) && $document->other == 'yes' ? 'checked' : '' }}> Yes
                        <input type="radio" name="other" value="no" onclick="hideFileInput('otherFile')" {{ isset($document) && $document->other == 'no' ? 'checked' : '' }}> No
                        <input type="file" id="otherFile" class="file-input" name="otherFile">
                    </div>
                </div>
                <div class="col-md-6 inputs">
                    <div class="form-group">
                        <label>8. Candidate Domicile:</label>
                        <input type="radio" name="domicile" value="yes" onclick="showFileInput('domicileFile')" {{ isset($document) && $document->domicile == 'yes' ? 'checked' : '' }}> Yes
                        <input type="radio" name="domicile" value="no" onclick="hideFileInput('domicileFile')" {{ isset($document) && $document->domicile == 'no' ? 'checked' : '' }}> No
                        <input type="file" id="domicileFile" class="file-input" name="domicileFile">
                    </div>
                </div>
                <div class="col-md-6 inputs">
                    <div class="form-group">
                        <label>9. Candidate PRC:</label>
                        <input type="radio" name="prc" value="yes" onclick="showFileInput('prcFile')" {{ isset($document) && $document->prc == 'yes' ? 'checked' : '' }}> Yes
                        <input type="radio" name="prc" value="no" onclick="hideFileInput('prcFile')" {{ isset($document) && $document->prc == 'no' ? 'checked' : '' }}> No
                        <input type="file" id="prcFile" class="file-input" name="prcFile">
                    </div>
                </div>
                <div class="col-md-6 inputs">
                    <div class="form-group">
                        <label>10. Candidate CNIC:</label>
                        <input type="radio" name="cnic" value="yes" onclick="showFileInput('cnicFile')" {{ isset($document) && $document->cnic == 'yes' ? 'checked' : '' }}> Yes
                        <input type="radio" name="cnic" value="no" onclick="hideFileInput('cnicFile')" {{ isset($document) && $document->cnic == 'no' ? 'checked' : '' }}> No
                        <input type="file" id="cnicFile" class="file-input" name="cnicFile">
                    </div>
                </div>
                <div class="col-md-6 inputs">
                    <div class="form-group">
                        <label>11. Father's CNIC:</label>
                        <input type="radio" name="fcnic" value="yes" onclick="showFileInput('fcnicFile')" {{ isset($document) && $document->fcnic == 'yes' ? 'checked' : '' }}> Yes
                        <input type="radio" name="fcnic" value="no" onclick="hideFileInput('fcnicFile')" {{ isset($document) && $document->fcnic == 'no' ? 'checked' : '' }}> No
                        <input type="file" id="fcnicFile" class="file-input" name="fcnicFile">
                    </div>
                </div>
                <div class="col-md-6 inputs">
                    <div class="form-group">
                        <label>12. Passport size picture:</label>
                        <input type="radio" name="passport" value="yes" onclick="showFileInput('passportFile')" {{ isset($document) && $document->passport == 'yes' ? 'checked' : '' }}> Yes
                        <input type="radio" name="passport" value="no" onclick="hideFileInput('passportFile')" {{ isset($document) && $document->passport == 'no' ? 'checked' : '' }}> No
                        <input type="file" id="passportFile" class="file-input" name="passportFile">
            </div>
                </div>
                <div class="col-md-12 pt-4 center">
                    <div class="mb-3">
                        <button type="submit" class="btn btn-dark btn-md">Save</button>
                        <button type="button" class="btn btn-primary btn-lg" onclick="onFormSubmit()">Submit</button>
                    </div>
                </div>
                {{--  div row close  --}}
            </div>
            </form>
        </div>
    </div>
    {{--  <!--Container Main end-->  --}}

<script>
        function showFileInput(id) {
            document.getElementById(id).style.display = 'block';
        }


        function hideFileInput(id) {
            document.getElementById(id).style.display = 'none';
        }

            // Function to disable navigation links
    function disableNavigation() {
        // Get all navigation links except Chalan
        const navLinks = document.querySelectorAll('.admission-nav-list .nav_link:not([href*="Chalan"])');
        
        // Check if form is submitted (you can store this in localStorage or get it from backend)
        const isFormSubmitted = localStorage.getItem('formSubmitted');
        
        if (isFormSubmitted === 'true') {
            navLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault(); // Prevent navigation
                });
                link.style.pointerEvents = 'none'; // Disable clicking
                link.style.opacity = '0.5'; // Visual indication that link is disabled
            });
        }
    }

    // Call the function when page loads
    document.addEventListener('DOMContentLoaded', disableNavigation);

    // When form is submitted (add this to your form submit handler)
        function onFormSubmit() {
            // Set form submitted flag
            localStorage.setItem('formSubmitted', 'true');
            
            // Disable current page navigation
            disableNavigation();
            
            // Redirect to Chalan page
            window.location.href = '{{ url('Admission_Form/Chalan') }}';
        }
</script>
