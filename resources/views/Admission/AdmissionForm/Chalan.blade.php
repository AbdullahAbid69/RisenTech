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

    /* Ensure modal is always on top */
.modal {
    position: fixed !important;
    top: 50% !important;
    left: 50% !important;
    transform: translate(-50%, -50%) !important;
    z-index: 1050 !important;
}

/* Ensure modal backdrop covers everything */
.modal-backdrop {
    position: fixed !important;
    top: 0;
    left: 0;
    width: 100% !important;
    height: 100% !important;
    z-index: 1040 !important;
}


</style>
    {{--  <!--Container Main start-->  --}}
        <div class="container">
            <div class="row abc">
                <h2>CHALAN</h2>

                <div class="col-md-6">
                    <div class="card" style="background-color: #007bff; cursor: pointer; position: relative; overflow: hidden; height: 200px;">
                        <div class="card-body text-center text-white" data-bs-toggle="modal" data-bs-target="#chalanModal">
                            <i class='bx bx-printer' style="font-size: 80px; position: absolute; opacity: 0.2; top: 50%; left: 50%; transform: translate(-50%, -50%);"></i>
                            <h3 class="mt-4" style="position: relative; z-index: 1;">Print Chalan</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card" style="background-color: #77ba41; cursor: pointer; position: relative; overflow: hidden; height: 200px;">
                        <div class="card-body text-center text-white" data-bs-toggle="modal" data-bs-target="#viewModal">
                            <i class='bx bx-printer' style="font-size: 80px; position: absolute; opacity: 0.2; top: 50%; left: 50%; transform: translate(-50%, -50%);"></i>
                            <h3 class="mt-4" style="position: relative; z-index: 1;">View Form</h3>
                        </div>
                    </div>
                </div>
                {{--  div row close  --}}
            </div>

                    {{--  <!--Container Main end-->  --}}
    </div>
                            


                            {{--  <!-- Modal chalan -->  --}}
                            <div class="modal" id="chalanModal" tabindex="-1" aria-labelledby="chalanModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-dark" id="chalanModalLabel">Print Chalan</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body text-dark">
<div class="container">
    <div class="row mb-4">
        <div class="col-12 text-center">
            <h3>ORGANIZATION NAME</h3>
            <h4>Admission Fee Challan</h4>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-6">
            <p><strong>Challan No:</strong> CH-2023-001</p>
            <p><strong>Student Name:</strong> John Doe</p>
            <p><strong>Father's Name:</strong> Michael Doe</p>
            <p><strong>Program:</strong> BS Computer Science</p>
        </div>
        <div class="col-6 text-end">
            <p><strong>Date:</strong> <?php echo date('d-m-Y'); ?></p>
            <p><strong>Due Date:</strong> <?php echo date('d-m-Y', strtotime('+7 days')); ?></p>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Description</th>
                        <th class="text-end">Amount (PKR)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Admission Fee</td>
                        <td class="text-end">25,000</td>
                    </tr>
                    <tr>
                        <td>Registration Fee</td>
                        <td class="text-end">5,000</td>
                    </tr>
                    <tr>
                        <td>Security Deposit (Refundable)</td>
                        <td class="text-end">10,000</td>
                    </tr>
                    <tr>
                        <td>First Semester Fee</td>
                        <td class="text-end">45,000</td>
                    </tr>
                    <tr>
                        <td><strong>Total Amount</strong></td>
                        <td class="text-end"><strong>85,000</strong></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-12">
            <p><strong>Amount in words:</strong> Eighty Five Thousand Rupees Only</p>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-4 text-center">
            <hr style="width: 80%; margin: 0 auto;">
            <p>Bank Officer Signature</p>
        </div>
        <div class="col-4 text-center">
            <hr style="width: 80%; margin: 0 auto;">
            <p>Student Signature</p>
        </div>
        <div class="col-4 text-center">
            <hr style="width: 80%; margin: 0 auto;">
            <p>Accounts Officer</p>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-12">
            <p class="text-muted small">
                Note: This challan is valid for 7 days from the date of issue. 
                Please deposit at any branch of ABC Bank.
            </p>
        </div>
    </div>
</div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary" onclick="printModal()">Print</button>
                                            <script>
                                                function printModal() {
                                                    const modalBody = document.querySelector('#chalanModal .modal-body').innerHTML;
                                                    const printWindow = window.open('', '', 'height=600,width=800');
                                                    printWindow.document.write('<html><head><title>Print Chalan</title>');
                                                    printWindow.document.write('<style>body { font-family: Arial, sans-serif; padding: 20px; }</style>');
                                                    printWindow.document.write('</head><body>');
                                                    printWindow.document.write(modalBody);
                                                    printWindow.document.write('</body></html>');
                                                    printWindow.document.close();
                                                    printWindow.print();
                                                }
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>

                                                        {{--  <!-- Modal  2-->  --}}
                                                        <div class="modal" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-lg">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title text-dark" id="chalanModalLabel">Print Chalan</h5>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body text-dark">
                                                                        <p>Your form.</p>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                    
