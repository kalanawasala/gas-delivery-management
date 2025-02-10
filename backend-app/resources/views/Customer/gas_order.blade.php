<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gas Request Form - GasByGas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-yellow: #FFC107;
            --secondary-yellow: #FFD54F;
            --dark-yellow: #FFA000;
            --light-yellow: #FFF3E0;
        }

        body {
            background: var(--light-yellow);
            font-family: 'Poppins', sans-serif;
        }

        .form-card {
            background: white;
            border-radius: 15px;
            border: none;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            animation: slideIn 0.5s ease-out;
        }

        .form-control, .form-select {
            border-radius: 10px;
            border: 2px solid #eee;
            padding: 12px;
            transition: all 0.3s;
        }

        .form-control:focus, .form-select:focus {
            border-color: var(--primary-yellow);
            box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.25);
        }

        .btn-primary {
            background: var(--primary-yellow);
            border: none;
            padding: 12px 30px;
            border-radius: 10px;
            color: #2C3E50;
            font-weight: bold;
            transition: all 0.3s;
        }

        .btn-primary:hover {
            background: var(--dark-yellow);
            transform: translateY(-2px);
        }

        .progress {
            height: 10px;
            border-radius: 5px;
            background: #eee;
        }

        .progress-bar {
            background: var(--primary-yellow);
        }

        .form-section {
            display: none;
        }

        .form-section.active {
            display: block;
            animation: fadeIn 0.5s ease-out;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="form-card p-4">
                    <h3 class="mb-4 text-center">Gas Cylinder Request</h3>
                    
                    <!-- Progress Bar -->
                    <div class="progress mb-4">
                        <div class="progress-bar" role="progressbar" style="width: 33%"></div>
                    </div>

                    <form id="gasRequestForm">
                        <!-- Step 1: Basic Details -->
                        <div class="form-section active" id="step1">
                            <h5 class="mb-4">Delivery Information</h5>
                            
                            <div class="mb-3">
                                <label class="form-label">Select Gas Type</label>
                                <select class="form-select">
                                    <option>12.5 KG Domestic Cylinder</option>
                                    <option>37.5 KG Commercial Cylinder</option>
                                    <option>5 KG Portable Cylinder</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Quantity</label>
                                <input type="number" class="form-control" min="1" max="5">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Preferred Outlet</label>
                                <select class="form-select">
                                    <option>Select Nearest Outlet</option>
                                    <option>Colombo Central</option>
                                    <option>Kaduwela Branch</option>
                                    <option>Nugegoda Outlet</option>
                                </select>
                            </div>

                            <div class="d-flex justify-content-end">
                                <button type="button" class="btn btn-primary" onclick="nextStep(2)">Next Step</button>
                            </div>
                        </div>

                        <!-- Step 2: Delivery Details -->
                        <div class="form-section" id="step2">
                            <h5 class="mb-4">Delivery Address</h5>
                            
                            <div class="mb-3">
                                <label class="form-label">Address Line 1</label>
                                <input type="text" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Address Line 2</label>
                                <input type="text" class="form-control">
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">City</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Postal Code</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="d-flex justify-content-between">
                                <button type="button" class="btn btn-outline-secondary" onclick="prevStep(1)">Previous</button>
                                <button type="button" class="btn btn-primary" onclick="nextStep(3)">Next Step</button>
                            </div>
                        </div>

                        <!-- Step 3: Confirmation -->
                        <div class="form-section" id="step3">
                            <h5 class="mb-4">Confirm Request</h5>
                            
                            <div class="alert alert-info">
                                <i class="fas fa-info-circle me-2"></i>
                                Please verify your token will be generated after confirmation
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Special Instructions (Optional)</label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>

                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" id="terms">
                                <label class="form-check-label" for="terms">
                                    I agree to the terms and conditions
                                </label>
                            </div>

                            <div class="d-flex justify-content-between">
                                <button type="button" class="btn btn-outline-secondary" onclick="prevStep(2)">Previous</button>
                                <button type="submit" class="btn btn-primary">Submit Request</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function nextStep(step) {
            document.querySelectorAll('.form-section').forEach(section => {
                section.classList.remove('active');
            });
            document.getElementById('step' + step).classList.add('active');
            document.querySelector('.progress-bar').style.width = (step * 33.33) + '%';
        }

        function prevStep(step) {
            document.querySelectorAll('.form-section').forEach(section => {
                section.classList.remove('active');
            });
            document.getElementById('step' + step).classList.add('active');
            document.querySelector('.progress-bar').style.width = (step * 33.33) + '%';
        }

        document.getElementById('gasRequestForm').addEventListener('submit', function(e) {
            e.preventDefault();
            // Add form submission logic here
            alert('Form submitted successfully!');
        });
    </script>
</body>
</html>