@include('Admission.AdmissionForm.AdmissionNavbar')

<style>
.section-a, .section-b, .section-c {
        border: 1px solid #ddd;
        padding: 20px;
        border-radius: 5px;
        text-align: left !important;
    }

    label {
        font-weight: 500;
        text-align: left !important;
    }

    input[type="radio"] {
        margin-right: 5px;
        margin-left: 10px;
        text-align: left !important;
    }
    .abc h2{
        font-size: 50px !important;
        font-weight: bold !important;
    }
    .abc{
        text-align: center !important;
        padding-top: 20px !important;
    }

</style>
    {{--  <!--Container Main start-->  --}}
<div class="height-100">
    <div class="container">
        <form action="{{ route('hc_save') }}" method="POST">
            @csrf
        <div class="row abc">
            <h2>ADMISSION FORM</h2>
            <h4>(HEALTH CERTIFICATE)</h4>
            <p class="text-center">(Section A, B, & C will be filled by the candidate)</p>

            {{--  <!-- Section A -->  --}}
            <div class="section-a">
                <h4>SECTION A</h4>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" name="nameHealth" id="name" value="{{ $hc->nameHealth ?? '' }}" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label>Days:</label>
                        <input type="number" class="form-control" name="daysHealth" placeholder="Days" value="{{ $hc->daysHealth ?? '' }}" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Months:</label>
                        <input type="number" class="form-control" name="monthsHealth" placeholder="Months" value="{{ $hc->monthsHealth ?? '' }}" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label>Years:</label>
                        <input type="number" class="form-control" name="yearsHealth" placeholder="Years" value="{{ $hc->yearsHealth ?? '' }}" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>Height:</label>
                        <input type="number" class="form-control" name="heightHealth" value="{{ $hc->heightHealth ?? '' }}" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Weight:</label>
                        <input type="number" class="form-control" name="weightHealth" value="{{ $hc->weightHealth ?? '' }}" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label>Present Address:</label>
                        <input type="text" class="form-control" name="presentAddressHealth" value="{{ $hc->presentAddressHealth ?? '' }}" required>
                    </div>
                </div>
            </div>

            {{--  <!-- Section B -->  --}}
            <div class="section-b mt-4">
                <h4>SECTION B</h4>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label>1. Do you smoke?</label>
                        <div>
                            <input type="radio" name="smokeHealth" value="Yes" {{ isset($hc) && $hc->smokeHealth == 'Yes' ? 'checked' : '' }}> Yes
                            <input type="radio" name="smokeHealth" value="No" {{ isset($hc) && $hc->smokeHealth == 'No' ? 'checked' : '' }}> No
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label>2. Do you take any medicine regularly?</label>
                        <div>
                            <input type="radio" name="medicineHealth" value="Yes" {{ isset($hc) && $hc->medicineHealth == 'Yes' ? 'checked' : '' }}> Yes
                            <input type="radio" name="medicineHealth" value="No" {{ isset($hc) && $hc->medicineHealth == 'No' ? 'checked' : '' }}> No
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        <label>If yes, Specify:</label>
                        <input type="text" class="form-control" name="medicineHealth" value="{{ $hc->medicineHealth ?? '' }}" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label>3. Any history of allergy?</label>
                        <div>
                            <input type="radio" name="allergyHealth" value="Yes" {{ isset($hc) && $hc->allergyHealth == 'Yes' ? 'checked' : '' }}> Yes
                            <input type="radio" name="allergyHealth" value="No" {{ isset($hc) && $hc->allergyHealth == 'No' ? 'checked' : '' }}> No
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label>4. Do you suffer from any of the following diseases?</label>
                        <div class="ms-3">
                            <div class="mb-2">
                                <label>i. Epilepsy</label>
                                <div>
                                    <input type="radio" name="epilepsyHealth" value="Yes" {{ isset($hc) && $hc->epilepsyHealth == 'Yes' ? 'checked' : '' }}> Yes
                                    <input type="radio" name="epilepsyHealth" value="No" {{ isset($hc) && $hc->epilepsyHealth == 'No' ? 'checked' : '' }}> No
                                </div>
                            </div>
                            <div class="mb-2">
                                <label>ii. High Blood Pressure</label>
                                <div>
                                    <input type="radio" name="bpHealth" value="Yes" {{ isset($hc) && $hc->bpHealth == 'Yes' ? 'checked' : '' }}> Yes
                                    <input type="radio" name="bpHealth" value="No" {{ isset($hc) && $hc->bpHealth == 'No' ? 'checked' : '' }}> No
                                </div>
                            </div>
                            <div class="mb-2">
                                <label>iii. Psychiatric illness</label>
                                <div>
                                    <input type="radio" name="psychiatricHealth" value="Yes" {{ isset($hc) && $hc->psychiatricHealth == 'Yes' ? 'checked' : '' }}> Yes
                                    <input type="radio" name="psychiatricHealth" value="No" {{ isset($hc) && $hc->psychiatricHealth == 'No' ? 'checked' : '' }}> No
                                </div>
                            </div>
                            <div class="mb-2">
                                <label>iv. Rheumatic Heart Disease</label>
                                <div>
                                    <input type="radio" name="heartHealth" value="Yes" {{ isset($hc) && $hc->heartHealth == 'Yes' ? 'checked' : '' }}> Yes
                                    <input type="radio" name="heartHealth" value="No" {{ isset($hc) && $hc->heartHealth == 'No' ? 'checked' : '' }}> No
                                </div>
                            </div>
                            <div class="mb-2">
                                <label>v. Hepatitis B/C</label>
                                <div>
                                    <input type="radio" name="hepatitisHealth" value="Yes" {{ isset($hc) && $hc->hepatitisHealth == 'Yes' ? 'checked' : '' }}> Yes
                                    <input type="radio" name="hepatitisHealth" value="No" {{ isset($hc) && $hc->hepatitisHealth == 'No' ? 'checked' : '' }}> No
                                </div>
                            </div>
                            <div class="mb-2">
                                <label>vi. Physical Disability</label>
                                <div>
                                    <input type="radio" name="disabilityHealth" value="Yes" {{ isset($hc) && $hc->disabilityHealth == 'Yes' ? 'checked' : '' }}> Yes
                                    <input type="radio" name="disabilityHealth" value="No" {{ isset($hc) && $hc->disabilityHealth == 'No' ? 'checked' : '' }}> No
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{--  <!-- Section C -->  --}}
            <div class="section-c mt-4">
                <h4>SECTION C</h4>
                <div class="row">
                    <div class="col-md-6">
                        <h5>Details of previous Vaccination</h5>
                        <div class="mb-2">
                            <label>1. Measles</label>
                            <div>
                                <input type="radio" name="measlesHealth" value="Yes" {{ isset($hc) && $hc->measlesHealth == 'Yes' ? 'checked' : '' }}> Yes
                                <input type="radio" name="measlesHealth" value="No" {{ isset($hc) && $hc->measlesHealth == 'No' ? 'checked' : '' }}> No
                            </div>
                        </div>
                        <div class="mb-2">
                            <label>2. Mumps</label>
                            <div>
                                <input type="radio" name="mumpsHealth" value="Yes" {{ isset($hc) && $hc->mumpsHealth == 'Yes' ? 'checked' : '' }}> Yes
                                <input type="radio" name="mumpsHealth" value="No" {{ isset($hc) && $hc->mumpsHealth == 'No' ? 'checked' : '' }}> No
                            </div>
                        </div>
                        <div class="mb-2">
                            <label>3. Rubella</label>
                            <div>
                                <input type="radio" name="rubellaHealth" value="Yes" {{ isset($hc) && $hc->rubellaHealth == 'Yes' ? 'checked' : '' }}> Yes
                                <input type="radio" name="rubellaHealth" value="No" {{ isset($hc) && $hc->rubellaHealth == 'No' ? 'checked' : '' }}> No
                            </div>
                        </div>
                        <div class="mb-2">
                            <label>4. Tetanus</label>
                            <div>
                                <input type="radio" name="tetanusHealth" value="Yes" {{ isset($hc) && $hc->tetanusHealth == 'Yes' ? 'checked' : '' }}> Yes
                                <input type="radio" name="tetanusHealth" value="No" {{ isset($hc) && $hc->tetanusHealth == 'No' ? 'checked' : '' }}> No
                            </div>
                        </div>
                        <div class="mb-2">
                            <label>5. Pertussis</label>
                            <div>
                                <input type="radio" name="pertussisHealth" value="Yes" {{ isset($hc) && $hc->pertussisHealth == 'Yes' ? 'checked' : '' }}> Yes
                                <input type="radio" name="pertussisHealth" value="No" {{ isset($hc) && $hc->pertussisHealth == 'No' ? 'checked' : '' }}> No
                            </div>
                        </div>
                        <div class="mb-2">
                            <label>6. Whooping Cough</label>
                            <div>
                                <input type="radio" name="coughHealth" value="Yes" {{ isset($hc) && $hc->coughHealth == 'Yes' ? 'checked' : '' }}> Yes
                                <input type="radio" name="coughHealth" value="No" {{ isset($hc) && $hc->coughHealth == 'No' ? 'checked' : '' }}> No
                            </div>
                        </div>
                        <div class="mb-2">
                            <label>7. Hepatitis B</label>
                            <div>
                                <input type="radio" name="hepbHealth" value="Yes" {{ isset($hc) && $hc->hepbHealth == 'Yes' ? 'checked' : '' }}> Yes
                                <input type="radio" name="hepbHealth" value="No" {{ isset($hc) && $hc->hepbHealth == 'No' ? 'checked' : '' }}> No
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <h5>Detail of Booster Vaccination</h5>
                        <textarea class="form-control" rows="10" name="boosterHealth">{{ $hc->boosterHealth ?? '' }}</textarea>
                    </div>
                </div>
            </div>

            <div class="mt-4 text-center">
                <p>Certification: I hereby certify that the above information given by me is correct.</p>
            </div>
            <div class="col-md-12 pt-4 center">
                <div class="mb-3">
                    <button type="submit" class="btn btn-dark btn-md">Save</button>
                    <a href="{{ url('Admission_Form/Documents') }}" class="btn btn-primary btn-lg">Next</a>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
    {{--  <!--Container Main end-->  --}}


