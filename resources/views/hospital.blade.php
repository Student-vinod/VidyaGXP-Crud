<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Diagnostic Imaging Tests</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .section-header {
      background-color: #e9ecef;
      padding: 20px;
      text-align: center;
    }

    .info-container {
      padding: 20px 0;
    }

    .diagnostic-title {
      font-weight: bold;
      font-size: 1.5rem;
    }

    .full-infographic {
      width: 100%;
      max-height: 600px;
      object-fit: cover;
      margin-bottom: 20px;
    }

    .card img {
      max-height: 150px;
      object-fit: cover;
    }

    .icon-container img {
      width: 100px;
      margin: auto;
      display: block;
    }
  </style>
</head>
<body>
  <div class="container">
    <!-- Header Section -->
    <div class="section-header">
      <h1>Different Imaging Tests, Explained</h1>
      <p>UVA Radiology and Medical Imaging</p>
    </div>

    <!-- Full Infographic Section -->
    <div class="text-center">
      <img src="images/imaging-tests.jpg" alt="Imaging Tests Infographic" class="full-infographic img-fluid">
    </div>

    <!-- Main Section: Display Each Diagnostic Test -->
    <div class="row info-container">
      <!-- Card 1: X-Ray -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <div class="icon-container mt-3">
            <img src="images/xray-icon.png" alt="X-Ray">
          </div>
          <div class="card-body">
            <h5 class="diagnostic-title text-warning">X-Ray</h5>
            <p><strong>What to Expect:</strong> Quick, painless, focuses on bones.</p>
            <p><strong>Duration:</strong> 10-15 minutes</p>
            <p><strong>Used to Diagnose:</strong> Bone fractures, lung infections, arthritis.</p>
          </div>
        </div>
      </div>

      <!-- Card 2: CT Scan -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <div class="icon-container mt-3">
            <img src="images/ctscan-icon.png" alt="CT Scan">
          </div>
          <div class="card-body">
            <h5 class="diagnostic-title text-primary">CT Scan</h5>
            <p><strong>What to Expect:</strong> Cross-sectional imaging.</p>
            <p><strong>Duration:</strong> 10-15 minutes</p>
            <p><strong>Used to Diagnose:</strong> Trauma, cancer, vascular diseases.</p>
          </div>
        </div>
      </div>

      <!-- Card 3: MRI -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <div class="icon-container mt-3">
            <img src="images/mri-icon.png" alt="MRI">
          </div>
          <div class="card-body">
            <h5 class="diagnostic-title text-danger">MRI</h5>
            <p><strong>What to Expect:</strong> Magnetic fields for detailed imaging.</p>
            <p><strong>Duration:</strong> 45 min - 1 hour</p>
            <p><strong>Used to Diagnose:</strong> Tumors, spinal cord issues, strokes.</p>
          </div>
        </div>
      </div>

      <!-- Card 4: Ultrasound -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <div class="icon-container mt-3">
            <img src="images/ultrasound-icon.png" alt="Ultrasound">
          </div>
          <div class="card-body">
            <h5 class="diagnostic-title text-success">Ultrasound</h5>
            <p><strong>What to Expect:</strong> Uses sound waves for soft tissue imaging.</p>
            <p><strong>Duration:</strong> 30 min - 1 hour</p>
            <p><strong>Used to Diagnose:</strong> Pregnancy, organ issues.</p>
          </div>
        </div>
      </div>

      <!-- Card 5: PET Scan -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <div class="icon-container mt-3">
            <img src="images/petscan-icon.png" alt="PET Scan">
          </div>
          <div class="card-body">
            <h5 class="diagnostic-title text-dark">PET Scan</h5>
            <p><strong>What to Expect:</strong> Uses tracers for functional organ studies.</p>
            <p><strong>Duration:</strong> 1.5 - 2 hours</p>
            <p><strong>Used to Diagnose:</strong> Cancer, heart disease, Alzheimer’s.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
