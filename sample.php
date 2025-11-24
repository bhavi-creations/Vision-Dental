<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Emergency Call Designs</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css" rel="stylesheet">
  <style>
    body { background: #f0f2f5; padding: 20px; }
    .design-label { font-size: 12px; color: #6c757d; margin-bottom: 8px; }
    .pulse { animation: pulse 2s infinite; }
    @keyframes pulse {
      0%, 100% { transform: scale(1); }
      50% { transform: scale(1.05); }
    }
    .shake:hover { animation: shake 0.5s; }
    @keyframes shake {
      0%, 100% { transform: translateX(0); }
      25% { transform: translateX(-5px); }
      75% { transform: translateX(5px); }
    }
  </style>
</head>
<body>



  <div class="container">
    <h5 class="text-center mb-4 text-secondary">10 Emergency Call UI Designs</h5>
    
    <div class="row g-4">
      
      <!-- Design 1: Simple Card -->
      <div class="col-md-6">
        <p class="design-label">Design 1: Minimal Card</p>
        <div class="card border-0 shadow-sm">
          <div class="card-body d-flex align-items-center gap-3">
            <div class="rounded-circle bg-info bg-opacity-10 p-3">
              <i class="bi bi-telephone text-info fs-4"></i>
            </div>
            <div>
              <small class="text-muted">Emergency? Call us</small>
              <h5 class="mb-0 fw-bold">+91 8985753065</h5>
            </div>
          </div>
        </div>
      </div>

      <!-- Design 2: Gradient Banner -->
      <div class="col-md-6">
        <p class="design-label">Design 2: Gradient Banner</p>
        <div class="card border-0 text-white" style="background: linear-gradient(135deg, #dc3545, #fd7e14);">
          <div class="card-body d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center gap-3">
              <div class="bg-white bg-opacity-25 rounded-3 p-2">
                <i class="bi bi-exclamation-triangle fs-4"></i>
              </div>
              <div>
                <small class="opacity-75">24/7 Emergency Line</small>
                <h5 class="mb-0 fw-bold">+91 8985753065</h5>
              </div>
            </div>
            <a href="tel:+918985753065" class="btn btn-light btn-sm fw-semibold">Call Now</a>
          </div>
        </div>
      </div>

      <!-- Design 3: Dark Mode -->
      <div class="col-md-6">
        <p class="design-label">Design 3: Dark Mode</p>
        <div class="card bg-dark border-secondary">
          <div class="card-body d-flex align-items-center gap-3">
            <div class="bg-success bg-opacity-25 rounded-3 p-3 pulse">
              <i class="bi bi-telephone-forward text-success fs-4"></i>
            </div>
            <div>
              <small class="text-success text-uppercase fw-semibold" style="letter-spacing:1px;">Emergency Hotline</small>
              <h5 class="mb-0 text-white font-monospace">+91 8985753065</h5>
            </div>
          </div>
        </div>
      </div>

      <!-- Design 4: Outlined Style -->
      <div class="col-md-6">
        <p class="design-label">Design 4: Outlined Style</p>
        <div class="card border-primary border-2 bg-primary bg-opacity-10">
          <div class="card-body d-flex align-items-center gap-4">
            <div class="rounded-circle border border-2 border-primary p-3">
              <i class="bi bi-telephone text-primary fs-3"></i>
            </div>
            <div>
              <span class="text-primary fw-semibold">Need Help?</span>
              <h4 class="mb-0 fw-bold text-primary">+91 8985753065</h4>
              <small class="text-primary opacity-75">Available 24/7</small>
            </div>
          </div>
        </div>
      </div>

      <!-- Design 5: Pill Style -->
      <div class="col-md-6">
        <p class="design-label">Design 5: Floating Pill</p>
        <div class="card border-0 shadow rounded-pill border-start border-5 border-purple" style="border-color: #6f42c1 !important;">
          <div class="card-body d-flex align-items-center gap-3 py-2 px-4">
            <div class="rounded-circle p-2 shadow-sm" style="background: #6f42c1;">
              <i class="bi bi-telephone-fill text-white"></i>
            </div>
            <div>
              <small class="text-muted">Emergency Contact</small>
              <h6 class="mb-0 fw-bold">+91 8985753065</h6>
            </div>
          </div>
        </div>
      </div>

      <!-- Design 6: Medical Theme -->
      <div class="col-md-6">
        <p class="design-label">Design 6: Medical Theme</p>
        <div class="card border-0 text-white position-relative overflow-hidden" style="background: linear-gradient(135deg, #20c997, #0dcaf0);">
          <div class="position-absolute top-0 end-0 opacity-10" style="font-size: 80px; margin-top:-20px; margin-right:-10px;">
            <i class="bi bi-heart-pulse"></i>
          </div>
          <div class="card-body d-flex align-items-center gap-3 position-relative">
            <i class="bi bi-heart-pulse fs-1"></i>
            <div>
              <small class="opacity-75">Medical Emergency</small>
              <h5 class="mb-0 fw-bold">+91 8985753065</h5>
            </div>
          </div>
        </div>
      </div>

      <!-- Design 7: Split Design -->
      <div class="col-md-6">
        <p class="design-label">Design 7: Split Design</p>
        <div class="card border-0 shadow-sm overflow-hidden">
          <div class="row g-0">
            <div class="col-auto bg-danger d-flex align-items-center justify-content-center px-4">
              <i class="bi bi-bell-fill text-white fs-3"></i>
            </div>
            <div class="col">
              <div class="card-body">
                <span class="text-danger fw-semibold">🚨 Emergency?</span>
                <h5 class="mb-0 fw-bold">+91 8985753065</h5>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Design 8: Glass Effect -->
      <div class="col-md-6">
        
      </div>

      <!-- Design 9: Compact Badge -->
      <div class="col-md-6">
        <p class="design-label">Design 9: Compact Badge</p>
        <div class="d-inline-flex align-items-center gap-2 bg-warning bg-opacity-25 rounded-pill px-4 py-2 shake">
          <div class="rounded-circle bg-warning p-2">
            <i class="bi bi-lightning-fill text-white"></i>
          </div>
          <span class="text-dark">Call: <strong>+91 8985753065</strong></span>
        </div>
      </div>

      <!-- Design 10: Full CTA Card -->
      <div class="col-md-6">
        <p class="design-label">Design 10: CTA Card</p>
        <div class="card bg-dark border-0 text-white overflow-hidden">
          <div class="card-body text-center py-4">
            <div class="rounded-circle bg-success mx-auto mb-3 d-flex align-items-center justify-content-center pulse" style="width:60px;height:60px;">
              <i class="bi bi-telephone-fill fs-4"></i>
            </div>
            <small class="text-secondary">Emergency Services</small>
            <h4 class="fw-bold mb-3">+91 8985753065</h4>
            <a href="tel:+918985753065" class="btn btn-success btn-sm px-4">
              <i class="bi bi-telephone me-2"></i>Call Now
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
<?php include 'footer.php'; ?>