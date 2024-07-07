<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>eCommerce</title>
  <link rel="stylesheet" href="styles.css">

  <style>
    .customer-reviews .review-card {
      border: none;
      border-radius: 20px;
      transition: transform 0.3s ease;
    }

    .customer-reviews .review-card:hover {
      transform: translateY(-10px);
    }

    .customer-reviews .icon-container {
      display: flex;
      justify-content: center;
      align-items: center;
      width: 50px;
      height: 50px;
      border-radius: 50%;
      background: linear-gradient(135deg, #6e8efb, #a777e3);
      color: white;
    }
  </style>
  <style>
    /* Custom styles for header and category section */
    .header-categories {
      background-color: #f8f9fa;
      /* Light background */
      padding: 20px 0;
    }

    .category-item {
      text-align: center;
      padding: 20px;
    }

    .category-item img {
      max-width: 100%;
      border-radius: 10px;
      margin-bottom: 10px;
    }

    .category-item h5 {
      font-size: 18px;
    }

    .product-section {
      padding: 40px 0;
    }

    .product-category {
      margin-bottom: 30px;
    }

    .product-category h3 {
      margin-bottom: 20px;
    }

    .product-list {
      list-style-type: none;
      padding-left: 0;
    }

    .product-list li {
      margin-bottom: 20px;
      border: 1px solid #ddd;
      padding: 15px;
      border-radius: 10px;
    }

    .product-list img {
      max-width: 100%;
      border-radius: 10px;
      margin-bottom: 10px;
    }

    .product-name {
      font-weight: bold;
    }

    .product-price {
      color: #007bff;
      /* Blue color for price */
    }

    .product-description {
      color: #666;
    }

    .carousel-item img {
      max-height: 400px;
      object-fit: cover;
      width: 100%;
    }

    .featured-products {
      background-color: #f8f9fa;
      padding: 40px 0;
    }

    .customer-reviews {
      padding: 40px 0;
    }

    .review-item {
      border: 1px solid #ddd;
      padding: 20px;
      border-radius: 10px;
      margin-bottom: 20px;
    }

    .review-item h5 {
      font-weight: bold;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="./index.php">eCommerce</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Feedback</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>