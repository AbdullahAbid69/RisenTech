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
            <form action="{{ route('gi_save') }}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="row abc">
                <h2>ADMISSION FORM</h2>
                <h4>(GUARDIAN INFORMATION)</h4>
                <div class="col-md-9 inputs">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name*</label>
                        <input type="text" class="form-control" name="nameGuardian" id="name" placeholder="Enter name" value="{{ $gi->nameGuardian ?? '' }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="occupation" class="form-label">Occupation*</label>
                        <input type="text" class="form-control" name="occupationGuardian" id="occupation" placeholder="Enter occupation" value="{{ $gi->occupationGuardian ?? '' }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="Designation" class="form-label">Designation*</label>
                        <input type="text" class="form-control" name="DesignationGuardian" id="Designation" placeholder="Enter Designation" value="{{ $gi->DesignationGuardian ?? '' }}" required>
                    </div>
                </div>
                <div class="col-md-3 inputs">
                    <div class="mb-3">
                        <label for="photoUpload" class="form-label">Upload Guardian/Father Photo*</label>
                        <div id="photo-container">
                          <span id="placeholder-text">Photo of Guardian / Father <br> Click Here & Select</span>
                          <input class="form-control" type="file" name="photoUploadGuardian" id="photoUpload" accept="image/*" value="{{ $gi->photoUploadGuardian ?? '' }}" required>
                        </div>
                        <small class="text-danger" id="photo-error" style="display: none;">Image must be passport size and less than 600 KB.</small>
                    </div>
                </div>
                <div class="col-md-6 inputs">
                    <div class="mb-3">
                        <label for="placeofwork" class="form-label">Place Of Work*</label>
                        <input type="text" class="form-control" name="placeofworkGuardian" id="placeofwork" placeholder="Enter Place Of Work" value="{{ $gi->placeofworkGuardian ?? '' }}" required>
                    </div>
                </div>
                <div class="col-md-6 inputs">
                    <div class="mb-3">
                        <label for="NameOfOrganization" class="form-label">Name Of Organization*</label>
                        <input type="text" class="form-control" name="NameOfOrganizationGuardian" id="NameOfOrganization" placeholder="Enter Name Of Organization" value="{{ $gi->NameOfOrganizationGuardian ?? '' }}" required>
                    </div>
                </div>
                <div class="col-md-6 inputs">
                    <div class="mb-3">
                        <label for="OfficeAddress" class="form-label">Office Address*</label>
                        <input type="text" class="form-control" name="OfficeAddressGuardian" id="OfficeAddress" placeholder="Enter Office Address" value="{{ $gi->OfficeAddressGuardian ?? '' }}" required>
                    </div>
                </div>
                <div class="col-md-6 inputs">
                    <div class="mb-3">
                        <label for="PresentResidentialAddress" class="form-label">Present Residential Address*</label>
                        <input type="text" class="form-control" name="PresentResidentialAddressGuardian" id="PresentResidentialAddress" placeholder="Enter Present Residential Address" value="{{ $gi->PresentResidentialAddressGuardian ?? '' }}" required>
                    </div>
                </div>
                <div class="col-md-6 inputs">
                    <div class="mb-3">
                        <label for="Email" class="form-label">Email Address*</label>
                        <input type="email" class="form-control" name="EmailAddressGuardian" id="Email" placeholder="Enter Email Address" value="{{ $gi->EmailAddressGuardian ?? '' }}" required>
                    </div>
                </div>
                <div class="col-md-6 inputs">
                    <div class="mb-3">
                        <label for="OfficeNumber" class="form-label">Office Number*</label>
                        <input type="number" class="form-control" maxlength="11" name="OfficeNumberGuardian" id="OfficeNumber" placeholder="Enter Office Number" value="{{ $gi->OfficeNumberGuardian ?? '' }}" required>
                    </div>
                </div>
                <div class="col-md-6 inputs">
                    <div class="mb-3">
                        <label for="MobileNumber" class="form-label">Mobile Number*</label>
                        <input type="number" class="form-control" maxlength="11" name="MobileNumberGuardian" id="MobileNumber" placeholder="Enter Mobile Number" value="{{ $gi->MobileNumberGuardian ?? '' }}" required>
                    </div>
                </div>
                <div class="col-md-6 inputs">
                    <div class="mb-3">
                        <label for="OtherNumber" class="form-label">Other Number*</label>
                        <input type="number" class="form-control" maxlength="11" name="OtherNumberGuardian" id="OtherNumber" placeholder="Enter Other Number" value="{{ $gi->OtherNumberGuardian ?? '' }}" required>
                    </div>
                </div>
                <div class="col-md-6 inputs">
                    <div class="mb-3">
                        <label for="AnnualIncome" class="form-label">Annual Income*</label>
                        <input type="number" class="form-control" name="AnnualIncomeGuardian" id="AnnualIncome" placeholder="Enter Annual Income" value="{{ $gi->AnnualIncomeGuardian ?? '' }}" required>
                    </div>
                </div>
                <div class="col-md-6 inputs">
                    <div class="mb-3">
                        <label for="Nationality" class="form-label">Nationality*</label>
                        <input type="text" class="form-control" name="NationalityGuardian" id="Nationality" placeholder="Nationality" value="{{ $gi->NationalityGuardian ?? '' }}" required>
                    </div>
                </div>
                <div class="col-md-6 inputs">
                    <div class="mb-3">
                        <label for="cnic" class="form-label">CNIC*</label>
                        <input type="text" class="form-control" name="cnicGuardian" id="cnic" maxlength="15" placeholder="XXXXX-XXXXXXX-X" pattern="^\d{5}-\d{7}-\d{1}$" value="{{ $gi->cnicGuardian ?? '' }}" required>
                    </div>
                </div>
                <div class="col-md-3 inputs">
                    <div class="mb-3">
                        <label for="Religion" class="form-label">Religion*</label> <br>
                        <input type="radio" id="religion_yes" name="ReligionGuardian" value="Muslim" {{ isset($gi) && $gi->ReligionGuardian == 'Muslim' ? 'checked' : '' }}> Muslim
                        <input type="radio" id="religion_no" name="ReligionGuardian" value="NonMuslim" {{ isset($gi) && $gi->ReligionGuardian == 'NonMuslim' ? 'checked' : '' }}> Non - Muslim
                    </div>
                </div>
                <div class="col-md-12 pt-4 center">
                    <div class="mb-3">
                        <button type="submit" class="btn btn-dark btn-md">Save</button>
                        <a href="{{ url('Admission_Form/Health_Certificates') }}" class="btn btn-primary btn-lg">Next</a>
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
