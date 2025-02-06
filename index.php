<?php include '../databasee/database.php ';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Monthly Expenses Tracker</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
  <link href="style.css" rel="stylesheet">
</head>
<body>

<div class="wrapper">
  <div class="text-black p-5 text-center">
    <h1>Monthly Expenses Tracker</h1>
  </div>
  
  <!-- Form for adding expenses -->
  <div class="container">
    <form class="form" action="handlers/add.php" method="POST">
      <div class="row p-1 text-center">
        <div class="col">
          <h2>Food</h2>
          <input type="number" name="food" class="form-control small-input" required>
        </div>
        <div class="col">
          <h2>Bills</h2>
          <input type="number" name="bills" class="form-control small-input" required>
        </div>
      </div>

      <div class="row p-3 text-center">
        <div class="col">
          <h2>Rent</h2>
          <input type="number" name="rent" class="form-control small-input" required>
        </div>
        <div class="col">
          <h2>Transportation</h2>
          <input type="number" name="transportation" class="form-control small-input" required>
        </div>
      </div>

      <!-- Submit button -->
      <div class="row p-3 text-center">
        <button type="submit" class="btn btn-outline-dark small-input">ADD</button>
      </div>
    </form>

    




    <!-- money generator -->
    <div class="money-container">
    <div class="money">&#128181;</div> <!-- 💵 -->
    <div class="money">&#128181;</div>
    <div class="money">&#128181;</div>
    <div class="money">&#128181;</div>
    <div class="money">&#128181;</div>
    <div class="money">&#128181;</div>
    <div class="money">&#128181;</div>
    <div class="money">&#128181;</div>
    <div class="money">&#128181;</div>
    <div class="money">&#128181;</div>
</div>
  </div>
</div>

</body>
</html>
