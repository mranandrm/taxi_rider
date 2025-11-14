<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TaxiGo - Book Your Ride Instantly</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #f8f9fa;
    }
    .hero {
      background: linear-gradient(135deg, #ffcc00, #ff9900);
      color: #000;
      padding: 100px 0;
      text-align: center;
    }
    .hero h1 {
      font-size: 3rem;
      font-weight: 700;
    }
    .hero p {
      font-size: 1.25rem;
    }
    .btn-book {
      background: #000;
      color: #ffcc00;
      border-radius: 30px;
      padding: 12px 30px;
      font-weight: 600;
      transition: all 0.3s ease;
    }
    .btn-book:hover {
      background: #222;
      color: #fff;
    }
    .feature-icon {
      font-size: 3rem;
      color: #ff9900;
    }
    footer {
      background: #000;
      color: #ffcc00;
      text-align: center;
      padding: 20px;
    }
  </style>
</head>
<body>

  <!-- Hero Section -->
  <section class="hero">
    <div class="container">
      <h1>Welcome to <strong>TaxiGo</strong></h1>
      <p>Your smart and fast way to book rides anywhere, anytime.</p>
      <a href="/login" class="btn btn-book mt-3">Book a Ride</a>
    </div>
  </section>

  <!-- Features -->
  <section class="py-5">
    <div class="container text-center">
      <h2 class="mb-5 fw-bold">Why Choose TaxiGo?</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="feature-icon mb-3">🚗</div>
          <h5>Fast & Reliable</h5>
          <p>Get matched with nearby drivers in seconds for quick pickup.</p>
        </div>
        <div class="col-md-4">
          <div class="feature-icon mb-3">💰</div>
          <h5>Affordable Prices</h5>
          <p>Transparent fares with no hidden charges — pay only what you ride.</p>
        </div>
        <div class="col-md-4">
          <div class="feature-icon mb-3">📱</div>
          <h5>Easy to Use</h5>
          <p>Book, track, and rate your rides seamlessly with our mobile app.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <p>&copy; {{ date('Y') }} TaxiGo. All rights reserved.</p>
  </footer>

</body>
</html>
