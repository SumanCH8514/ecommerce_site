<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SumanOnline Ecommerce</title>
  <!-- bt css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <!-- font -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <?php
  require "header.php"
  ?>

  <div class="bg-light">
    <h3 class="text-center">SumanOnline Store</h3>
    <p class="text-center">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis, minus? </p>
  </div>

  <!-- include_once "style.css"; -->
  <div class="row p-2">
    <div class="col-md-10">
      <!-- Products -->
      <div class="row">
        <div class="col-md-4 mb-2">
          <div class="card">
            <img src="./img/item/mobile/1.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <div class="text-center">
                <a href="#" class="btn btn-primary">Add to Cart</a>
                <a href="#" class="btn btn-secondary">View More</a>
              </div>

            </div>
          </div>
        </div>
        <div class="col-md-4 mb-2">
          <div class="card">
            <img src="./img/item/mobile/2.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

              <div class="text-center">
                <a href="#" class="btn btn-primary">Add to Cart</a>
                <a href="#" class="btn btn-secondary">View More</a>
              </div>

            </div>
          </div>
        </div>
        <div class="col-md-4 mb-2">
          <div class="card">
            <img src="./img/item/mobile/3.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <div class="text-center">
                <a href="#" class="btn btn-primary">Add to Cart</a>
                <a href="#" class="btn btn-secondary">View More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="col-md-2 bg-secondary p-0">
      <!-- side menu -->
      <ul class="navbar-nav text-center">
        <li class="nav-item bg-info">
          <h3>Brands</h3>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link text-light">Brand1</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link text-light">Brand2</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link text-light">Brand3</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link text-light">Brand4</a>
        </li>

        <li class="nav-item bg-info">
          <h3>Categories</h3>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link text-light">Categories1</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link text-light">Categories2</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link text-light">Categories3</a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link text-light">Categories4</a>
        </li>
      </ul>
    </div>
  </div>


  <?php
  require "footer.php"
  ?>
  <!-- bt js -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>