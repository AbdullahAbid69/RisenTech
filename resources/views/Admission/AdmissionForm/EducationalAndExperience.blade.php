@include('Admission.AdmissionForm.AdmissionNavbar')

<style>
    .abc{
        text-align: center !important;
        padding-top: 20px !important;
    }

    .abc h2{
        font-size: 50px !important;
        font-weight: bold !important;
    }

</style>
    {{--  <!--Container Main start-->  --}}
    <div class="height-100">
        <div class="container">
            <form action="{{ route('eae_save') }}" method="post">
                @csrf
            <div class="row abc">
                <h2>ADMISSION FORM</h2>

<div class="card">
    <div class="card-header">
        <h4>1. EDUCATION AND ACADEMIC DEGREES</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Academic Degree</th>
                        <th>Major Subject</th>
                        <th>School/University/Board</th>
                        <th>Country</th>
                        <th>Duration</th>
                        <th>Result (%/GPA)</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td>Matric </td>
                            <td><input type="text" name="major_subject[]" class="form-control" value="{{ $eae->major_subject[0] ?? '' }}"></td>
                            <td><input type="text" name="academy[]" class="form-control" value="{{ $eae->academy[0] ?? '' }}"></td>
                            <td><input type="text" name="country[]" class="form-control" value="{{ $eae->country[0] ?? '' }}"></td>
                            <td><input type="text" name="durations[]" class="form-control" value="{{ $eae->duration[0] ?? '' }}"></td>
                            <td><input type="text" name="result[]" class="form-control" value="{{ $eae->result[0] ?? '' }}"></td>
                        </tr>
                        <tr>
                            <td>Intermediate </td>
                            <td><input type="text" name="major_subject[]" class="form-control" value="{{ $eae->major_subject[1]  ?? '' }}"></td>
                            <td><input type="text" name="academy[]" class="form-control" value="{{ $eae->academy[1] ?? '' }}"></td>
                            <td><input type="text" name="country[]" class="form-control" value="{{ $eae->country[1] ?? '' }}"></td>
                            <td><input type="text" name="durations[]" class="form-control" value="{{ $eae->duration[1] ?? '' }}"></td>
                            <td><input type="text" name="result[]" class="form-control" value="{{ $eae->result[1] ?? '' }}"></td>
                        </tr>
                        <tr>
                            <td>Diploma in Nursing </td>
                            <td><input type="text" name="major_subject[]" class="form-control" value="{{ $eae->major_subject[2] ?? '' }}"></td>
                            <td><input type="text" name="academy[]" class="form-control" value="{{ $eae->academy[2] ?? '' }}"></td>
                            <td><input type="text" name="country[]" class="form-control" value="{{ $eae->country[2] ?? '' }}"></td>
                            <td><input type="text" name="durations[]" class="form-control" value="{{ $eae->duration[2] ?? '' }}"></td>
                            <td><input type="text" name="result[]" class="form-control" value="{{ $eae->result[2] ?? '' }}"></td>
                        </tr>
                        <tr>
                            <td>Post Basic Diploma </td>
                            <td><input type="text" name="major_subject[]" class="form-control" value="{{ $eae->major_subject[3] ?? '' }}"></td>
                            <td><input type="text" name="academy[]" class="form-control" value="{{ $eae->academy[3] ?? '' }}"></td>
                            <td><input type="text" name="country[]" class="form-control" value="{{ $eae->country[3] ?? '' }}"></td>
                            <td><input type="text" name="durations[]" class="form-control" value="{{ $eae->duration[3] ?? '' }}"></td>
                            <td><input type="text" name="result[]" class="form-control" value="{{ $eae->result[3] ?? '' }}"></td>
                        </tr>
                        <tr>
                            <td>Other Degree </td>
                            <td><input type="text" name="major_subject[]" class="form-control" value="{{ $eae->major_subject[4] ?? '' }}"></td>
                            <td><input type="text" name="academy[]" class="form-control" value="{{ $eae->academy[4] ?? '' }}"></td>
                            <td><input type="text" name="country[]" class="form-control" value="{{ $eae->country[4] ?? '' }}"></td>
                            <td><input type="text" name="durations[]" class="form-control" value="{{ $eae->duration[4] ?? '' }}"></td>
                            <td><input type="text" name="result[]" class="form-control" value="{{ $eae->result[4] ?? '' }}"></td>
                        </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="card mt-4">
    <div class="card-header">
        <h4>2. PRACTICAL / PROFESSIONAL WORK EXPERIENCES</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Institution</th>
                        <th>Position Held</th>
                        <th>Duration</th>
                        <th>From</th>
                        <th>To</th>
                    </tr>
                </thead>
                <tbody id="experience-tbody">
                    <tr>
                        <td><input type="text" name="work_institution[]" class="form-control" value="{{ $eae->work_institution[0] ?? '' }}"></td>
                        <td><input type="text" name="position[]" class="form-control" value="{{ $eae->position[0] ?? '' }}"></td>
                        <td><input type="text" name="work_duration[]" class="form-control" value="{{ $eae->work_duration[0] ?? '' }}"></td>
                        <td><input type="date" name="date_from[]" class="form-control" value="{{ $eae->date_from[0] ?? '' }}"></td>
                        <td><input type="date" name="date_to[]" class="form-control" value="{{ $eae->date_to[0] ?? '' }}"></td>
                    </tr>
                </tbody>
            </table>
            <button type="button" class="btn btn-primary" onclick="addExperienceRow()">Add More Experience</button>
        </div>
    </div>
</div>


                <div class="col-md-12 pt-4 center">
                    <div class="mb-3">
                        <button type="submit" class="btn btn-dark btn-md">Save</button>
                        <a href="{{ url('Admission_Form/Guardians_Information') }}" class="btn btn-primary btn-lg">Next</a>
                    </div>
                </div>

                {{--  div row close  --}}
            </div>
            </form>
        </div>
    </div>
    {{--  <!--Container Main end-->  --}}



    <script>
        function addExperienceRow() {
            const tbody = document.getElementById('experience-tbody');
            const newRow = `
                <tr>
                    <td><input type="text" name="work_institution[]" class="form-control" value="{{ $eae->work_institution[1] ?? '' }}"></td>
                    <td><input type="text" name="position[]" class="form-control" value="{{ $eae->position[1] ?? '' }}"></td>
                    <td><input type="text" name="work_duration[]" class="form-control" value="{{ $eae->work_duration[1] ?? '' }}"></td>
                    <td><input type="date" name="date_from[]" class="form-control" value="{{ $eae->date_from[1] ?? '' }}"></td>
                    <td><input type="date" name="date_to[]" class="form-control" value="{{ $eae->date_to[1] ?? '' }}"></td>
                </tr>
            `;
            tbody.insertAdjacentHTML('beforeend', newRow);
        }
    </script>
