<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="../../assets/annauniversity.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Anna University - CIOT-PHP</title>
    <link rel="stylesheet" href="../../../index.css">
    <link rel="stylesheet" href="../../component/Navbar/navbar.css">
    <link rel="stylesheet" href="../../component/homeImage.css">
    <link rel="stylesheet" href="../../component/preface.css">
    <link rel="stylesheet" href="../../component/director.css">
    <link rel="stylesheet" href="../../component/missionVision.css">
    <link rel="stylesheet" href="../../component/Footer/footer.css">
    <link rel="stylesheet" href="./facilities.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<?php
$facilitiesDetails = [
    [
        "image" => "../../assets/img/facilities/Picture1.jpg",
        "title" => "Opto-electronics Laboratory",
    ],
    [
        "image" => "../../assets/img/facilities/Picture2.jpg",
        "title" => "Soil Processing Laboratory",
    ],
    [
        "image" => "../../assets/img/facilities/Picture3.jpg",
        "title" => "Security and Data Analytics Laboratory",
    ],
    [
        "image" => "../../assets/img/facilities/Picture4.jpg",
        "title" => "Embedded and IoT Lab",
    ]
];
?>
<div class="home-container">
    <?php include '../../component/Navbar/navbar.php'; ?>
    <?php include '../../component/homeImage.php'; ?>
    <div class="padded-content">
        <div class="verticalTitleBar"></div>
        <h2>Facilities</h2>
    </div>
    <div class="list">
        <ul>
            <li>Full-fledged office for administrative activities</li>
            <li>24/7 power back up facilities for labs</li>
            <li>Computing facility with high speed internet</li>
            <li>
                Well-equipped R & D Laboratories with state of the art facility
            </li>
        </ul>
    </div>

    <div class="photo-container">
        <?php
        foreach ($facilitiesDetails as $index => $facility) {
            echo "<div class='image'>";
            echo "<img src='{$facility["image"]}' alt=''>";
            echo "<div class='content-facilities'>";
            echo "<h4>{$facility["title"]}</h4>";
            echo "</div></div>";
        }
        ?>
    </div>
</div>
<?php include '../../component/Footer/footer.php'; ?>