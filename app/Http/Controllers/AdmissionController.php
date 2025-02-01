<?php

namespace App\Http\Controllers;

use App\Models\course;
use App\Models\document;
use App\Models\eae;
use App\Models\gi;
use App\Models\hc;
use App\Models\pl;
use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    public function course(Request $request)
    {
        $courses = course::all();
        $user = $request->users;
        $pl = pl::where('user_id', $user->id)->first();
        return view('Admission.AdmissionForm.Personal',[
            'courses' => $courses,
            'pl' => $pl,
        ]);
    }
    public function pl_save(Request $request)
    {
        $user = $request->users;
        pl::updateOrCreate(
            ['user_id' => $user->id], // search criteria
            [
                'program' => $request->program,
                'email' => $request->email,
                'Mobile' => $request->Mobile,
                'Nameofapplicant' => $request->Nameofapplicant,
                'FatherName' => $request->FatherName,
                'Nationality' => $request->Nationality,
                'dob' => $request->dob,
                'cnic' => $request->cnic,
                'HomeAddress' => $request->HomeAddress,
                'photoUpload' => $request->photoUpload,
                'JobStatus' => $request->JobStatus,
                'Religion' => $request->Religion,
                'Gender' => $request->Gender,
                'Marital' => $request->Marital,
            ]
        );

        return redirect()->back()->with('success', 'Personal Information Saved Successfully, continue steps');
    }

    public function eae(Request $request)
    {
        $user = $request->users;
        $eae = eae::where('user_id', $user->id)->first();
        if ($eae) {
            // Convert JSON strings back to arrays]
            $eae->major_subject = json_decode($eae->major_subject);
            $eae->academy = json_decode($eae->academy);
            $eae->country = json_decode($eae->country);
            $eae->duration = json_decode($eae->duration);
            $eae->result = json_decode($eae->result);
            
            $eae->work_institution = json_decode($eae->work_institution);
            $eae->position = json_decode($eae->position);
            $eae->work_duration = json_decode($eae->work_duration);
            $eae->date_from = json_decode($eae->date_from);
            $eae->date_to = json_decode($eae->date_to);
        }
        
        return view('Admission.AdmissionForm.EducationalAndExperience',[
            'eae' => $eae,
        ]);
    }

    public function eae_save(Request $request)
    {
        $user = $request->users;
        $educationData = [];
        $experienceData = [];

        // Education fields
        foreach ($request->input('major_subject', []) as $index => $subject) {
            $educationData[] = [
                'user_id' => $user->id,
                'major_subject' => $subject,
                'academy' => $request->academy[$index],
                'country' => $request->country[$index],
                'duration' => $request->durations[$index],
                'result' => $request->result[$index],
            ];
        }

        // Work experience fields
        foreach ($request->input('work_institution', []) as $index => $institution) {
            $experienceData[] = [
                'user_id' => $user->id,
                'institution' => $institution,
                'position' => $request->position[$index],
                'duration' => $request->work_duration[$index],
                'date_from' => $request->date_from[$index],
                'date_to' => $request->date_to[$index],
            ];
        }

        // Save to the database
        eae::updateOrcreate([
            'user_id' => $user->id,
            'education_academic_degrees' => $educationData,
            'practical_work_experiences' => $experienceData,
        ]);

        return redirect()->back()->with('success', 'Educational And Experience Saved Successfully, continue steps');
    }

    public function gi(Request $request)
    {
        $user = $request->users;
        $gi = gi::where('user_id', $user->id)->first();
        return view('Admission.AdmissionForm.GuardianInformation',[
            'gi' => $gi,
        ]);
    }
    public function gi_save(Request $request)
    {
        $user = $request->users;
        gi::updateOrCreate(
            ['user_id' => $user->id], // search criteria
            [
                'nameGuardian' => $request->nameGuardian,
                'occupationGuardian' => $request->occupationGuardian,
                'DesignationGuardian' => $request->DesignationGuardian,
                'photoUploadGuardian' => $request->photoUploadGuardian,
                'placeofworkGuardian' => $request->placeofworkGuardian,
                'NameOfOrganizationGuardian' => $request->NameOfOrganizationGuardian,
                'OfficeAddressGuardian' => $request->OfficeAddressGuardian,
                'PresentResidentialAddressGuardian' => $request->PresentResidentialAddressGuardian,
                'EmailAddressGuardian' => $request->EmailAddressGuardian,
                'OfficeNumberGuardian' => $request->OfficeNumberGuardian,
                'MobileNumberGuardian' => $request->MobileNumberGuardian,
                'OtherNumberGuardian' => $request->OtherNumberGuardian,
                'AnnualIncomeGuardian' => $request->AnnualIncomeGuardian,
                'NationalityGuardian' => $request->NationalityGuardian,
                'cnicGuardian' => $request->cnicGuardian,
                'ReligionGuardian' => $request->ReligionGuardian,
            ]
        );

        return redirect()->back()->with('success', 'Guardian Information Saved Successfully, continue steps');
    }

    public function hc(Request $request)
    {
        $user = $request->users;
        $hc = hc::where('user_id', $user->id)->first();
        return view('Admission.AdmissionForm.HealthCertificate',[
            'hc' => $hc,
        ]);
    }

    public function hc_save(Request $request)
    {
        $user = $request->users;
        hc::updateOrCreate(
            ['user_id' => $user->id], // search criteria
            [
                'nameHealth' => $request->nameHealth,
                'daysHealth' => $request->daysHealth,
                'monthsHealth' => $request->monthsHealth,
                'yearsHealth' => $request->yearsHealth,
                'heightHealth' => $request->heightHealth,
                'weightHealth' => $request->weightHealth,
                'presentAddressHealth' => $request->presentAddressHealth,
                'smokeHealth' => $request->smokeHealth,
                'medicineHealth' => $request->medicineHealth,
                'allergyHealth' => $request->allergyHealth,
                'epilepsyHealth' => $request->epilepsyHealth,
                'bpHealth' => $request->bpHealth,
                'psychiatricHealth' => $request->psychiatricHealth,
                'heartHealth' => $request->heartHealth,
                'hepatitisHealth' => $request->hepatitisHealth,
                'disabilityHealth' => $request->disabilityHealth,
                'measlesHealth' => $request->measlesHealth,
                'mumpsHealth' => $request->mumpsHealth,
                'rubellaHealth' => $request->rubellaHealth,
                'tetanusHealth' => $request->tetanusHealth,
                'pertussisHealth' => $request->pertussisHealth,
                'coughHealth' => $request->coughHealth,
                'hepbHealth' => $request->hepbHealth,
                'boosterHealth' => $request->boosterHealth,
            ]
        );
        return redirect()->back()->with('success', 'Health Certificate Saved Successfully, continue steps');
    }

    public function documents(Request $request)
    {
        $user = $request->users;
        $document = document::where('user_id', $user->id)->first();
        return view('Admission.AdmissionForm.Documents',[
            'document' => $document,
        ]);
    }

    public function documents_save(Request $request)
    {
        $user = $request->users;
        $data = [];
        
        // Handle each document field
        $fields = ['matric', 'inter', 'diploma', 'specialization', 'pnc', 'experience', 
                  'other', 'domicile', 'prc', 'cnic', 'fcnic', 'passport'];

        foreach ($fields as $field) {
            if ($request->has($field)) {
                if ($request->input($field) === 'no') {
                    $data[$field] = 'no';
                } else {
                    // For 'yes' case, store the file path if file was uploaded
                    $fileField = $field . 'File';
                    $data[$field] = $request->hasFile($fileField) ? $request->file($fileField)->getClientOriginalName() : 'yes';
                }
            }
        }

        document::updateOrCreate(
            ['user_id' => $user->id],
            $data
        );

        return redirect()->back()->with('success', 'Documents Saved Successfully, continue steps');
    }

    public function chalan()
    {
        return view('Admission.AdmissionForm.Chalan');
    }

}