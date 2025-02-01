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


    #photo-container {
      width: 150px;
      height: 200px; /* Approx. passport size */
      border: 1px solid #ccc;
      margin-top: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 12px;
      color: #6c757d;
      position: relative;
      cursor: pointer;
    }
    #photo-container img {
      max-width: 100%;
      max-height: 100%;
    }
    #photoUpload {
      position: absolute;
      width: 100%;
      height: 100%;
      opacity: 0;
      cursor: pointer;
    }

    .abc h2{
        font-size: 50px !important;
        font-weight: bold !important;
    }

</style>
    {{--  <!--Container Main start-->  --}}
    <div class="height-100">
        <div class="container">
            <form action="{{ route('pl_save') }}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="row abc">
                <h2>ADMISSION FORM</h2>
                <h4>(PERSONAL INFORMATION)</h4>
                <div class="col-md-9 inputs">
                    <div class="mb-3">
                        <label for="program" class="form-label">Select program applied for admission*</label>
                        <select class="form-control" name="program" id="program" value="{{ $pl->program ?? '' }}" required>
                            <option value="selected">select program</option>
                            @foreach ($courses as $course)
                            <option value="{{ $course->course_name }}">{{ $course->course_name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email*</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" value="{{ $pl->email ?? '' }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="Mobile" class="form-label">Mobile No*</label>
                        <input type="number" class="form-control" name="Mobile" maxlength="11" id="Mobile" placeholder="Enter Mobile No: +92 XXXXXXXX" value="{{ $pl->Mobile ?? '' }}" required>
                    </div>
                </div>
                <div class="col-md-3 inputs">
                    <div class="mb-3">
                        <label for="photoUpload" class="form-label">Upload Photo*</label>
                        <div id="photo-container">
                          <span id="placeholder-text">Passport Size Photo <br> Click Here & Select <br> your photograph</span>
                          <input class="form-control" type="file" name="photoUpload" id="photoUpload" accept="image/*" value="{{ $pl->photoUpload ?? '' }}" required>
                        </div>
                        <small class="text-danger" id="photo-error" style="display: none;">Image must be passport size and less than 600 KB.</small>
                    </div>
                </div>
                <div class="col-md-6 inputs">
                    <div class="mb-3">
                        <label for="Nameofapplicant" class="form-label">Name of applicant*</label>
                    <input type="text" class="form-control" name="Nameofapplicant" id="Nameofapplicant" placeholder="Enter Applicant Name" value="{{ $pl->Nameofapplicant ?? '' }}" required>
                    </div>
                </div>
                <div class="col-md-6 inputs">
                    <div class="mb-3">
                        <label for="FatherName" class="form-label">Father's Name*</label>
                        <input type="text" class="form-control" name="FatherName" id="FatherName" placeholder="Enter Father Name" value="{{ $pl->FatherName ?? '' }}" required>
                    </div>
                </div>
                <div class="col-md-6 inputs">
                    <div class="mb-3">
                        <label for="Nationality" class="form-label">Nationality*</label>
                        <input type="text" class="form-control" name="Nationality" id="Nationality" placeholder="Nationality" value="{{ $pl->Nationality ?? '' }}" required>
                    </div>
                </div>
                <div class="col-md-6 inputs">
                    <div class="mb-3">
                        <label for="dob" class="form-label">Date of Birth*</label>
                        <input type="date" class="form-control" name="dob" id="dob" placeholder="dob" value="{{ $pl->dob ?? '' }}" required>
                    </div>
                </div>
                <div class="col-md-6 inputs">
                    <div class="mb-3">
                        <label for="cnic" class="form-label">CNIC*</label>
                        <input type="text" class="form-control" name="cnic" id="cnic" maxlength="15" placeholder="XXXXX-XXXXXXX-X" pattern="^\d{5}-\d{7}-\d{1}$" value="{{ $pl->cnic ?? '' }}" required>
                    </div>
                </div>
                <div class="col-md-6 inputs">
                    <div class="mb-3">
                        <label for="HomeAddress" class="form-label">Home Address*</label>
                        <input type="text" class="form-control" name="HomeAddress" id="HomeAddress" placeholder="Enter Home Address (current)" value="{{ $pl->HomeAddress ?? '' }}" required>
                    </div>
                </div>
                <div class="col-md-3 inputs">
                    <div class="mb-3">
                        <label for="Marital" class="form-label">Marital*</label> <br>
                        <input type="radio" id="marital_yes" name="Marital" value="yes" {{ isset($pl) && $pl->Marital == 'yes' ? 'checked' : '' }}> Yes
                        <input type="radio" id="marital_no" name="Marital" value="no" {{ isset($pl) && $pl->Marital == 'no' ? 'checked' : '' }}> No
                    </div>
                </div>
                <div class="col-md-3 inputs">
                    <div class="mb-3">
                        <label for="JobStatus" class="form-label">Job Status*</label> <br>
                        <input type="radio" id="job_status_yes" name="JobStatus" value="Govt" {{ isset($pl) && $pl->JobStatus == 'Govt' ? 'checked' : '' }}> Govt.
                        <input type="radio" id="job_status_no" name="JobStatus" value="Pvt" {{ isset($pl) && $pl->JobStatus == 'Pvt' ? 'checked' : '' }}> Pvt.
                    </div>
                </div>
                <div class="col-md-3 inputs">
                    <div class="mb-3">
                        <label for="Religion" class="form-label">Religion*</label> <br>
                        <input type="radio" id="religion_yes" name="Religion" value="Muslim" {{ isset($pl) && $pl->Religion == 'Muslim' ? 'checked' : '' }}> Muslim
                        <input type="radio" id="religion_no" name="Religion" value="NonMuslim" {{ isset($pl) && $pl->Religion == 'NonMuslim' ? 'checked' : '' }}> Non - Muslim
                    </div>
                </div>
                <div class="col-md-3 inputs">
                    <div class="mb-3">
                        <label for="Gender" class="form-label">Gender*</label> <br>
                        <input type="radio" id="gender_yes" name="Gender" value="Male" {{ isset($pl) && $pl->Gender == 'Male' ? 'checked' : '' }}> Male
                        <input type="radio" id="gender_no" name="Gender" value="Female" {{ isset($pl) && $pl->Gender == 'Female' ? 'checked' : '' }}> Female
                    </div>
                </div>
                <div class="col-md-12 pt-4 center">
                    <div class="mb-3">
                        <button type="submit" class="btn btn-dark btn-md">Save</button>
                        <a href="{{ url('Admission_Form/Education_And_Experience') }}" class="btn btn-primary btn-lg">Next</a>
                    </div>
                </div>
                {{--  div row close  --}}
            </div>
        </form>
        </div>
    </div>
    {{--  <!--Container Main end-->  --}}


    <script>
        document.getElementById("photoUpload").addEventListener("change", function (event) {
            const file = event.target.files[0];
            const previewContainer = document.getElementById("photo-container");
            const placeholderText = document.getElementById("placeholder-text");
            const error = document.getElementById("photo-error");

            // Reset preview and error message
            previewContainer.innerHTML = ""; // Clear container
            previewContainer.appendChild(this); // Re-add the input field
            placeholderText.style.display = "none";
            error.style.display = "none";

            if (file) {
              // Check file size (600 KB = 614400 bytes)
              if (file.size > 614400) {
                error.style.display = "block";
                placeholderText.style.display = "block";
                return;
              }

              // Preview the image
              const reader = new FileReader();
              reader.onload = function (e) {
                const img = document.createElement("img");
                img.src = e.target.result;
                previewContainer.appendChild(img);
              };
              reader.readAsDataURL(file);
            } else {
              placeholderText.style.display = "block";
            }
        });
      </script>
