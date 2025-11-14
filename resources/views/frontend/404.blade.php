<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>404 - Page Not Found | TaxiGo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #ffcc00, #ff9900);
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: #000;
      font-family: 'Poppins', sans-serif;
    }
    .error-container {
      background: #fff;
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.2);
      max-width: 500px;
    }
    .error-icon {
      font-size: 5rem;
    }
    .btn-home {
      background: #000;
      color: #ffcc00;
      border-radius: 30px;
      padding: 12px 25px;
      font-weight: 600;
      text-decoration: none;
      transition: all 0.3s ease;
    }
    .btn-home:hover {
      background: #222;
      color: #fff;
    }
  </style>
</head>
<body>
  <div class="error-container">
    <div class="error-icon">🚕</div>
    <h1 class="mt-3 fw-bold">Oops! 404</h1>
    <p>Looks like your ride took a wrong turn. The page you're looking for doesn't exist.</p>
    <a href="{{ url('/') }}" class="btn-home mt-3">Back to Home</a>
  </div>
</body>
</html>
