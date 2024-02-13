<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="src/assets/annauniversity.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Anna University - CIOT-PHP</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="./src/component/Navbar/navbar.css">
    <link rel="stylesheet" href="./src/component/homeImage.css">
    <link rel="stylesheet" href="./src/component/preface.css">
    <link rel="stylesheet" href="./src/component/director.css">
    <link rel="stylesheet" href="./src/component/missionVision.css">
    <link rel="stylesheet" href="./src/component/Footer/footer.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </head>
  <body>
    <div id="root">
      <?php include 'src/component/Navbar/navbar.php'; ?>
      <?php include 'src/component/homeImage.php'; ?>
      <?php include 'src/component/preface.php'; ?>
      <?php include 'src/component/director.php'; ?>
      <?php include 'src/component/missionVision.php'; ?>
      <?php include 'src/component/Footer/footer.php'; ?>
  </body>
</html>