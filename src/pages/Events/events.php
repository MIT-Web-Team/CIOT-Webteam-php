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
    <link rel="stylesheet" href="../Facilities/facilities.css">
    <link rel="stylesheet" href="../Members/members.css">
    <link rel="stylesheet" href="../Members/memberCard.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<?php
$Events = [
    [
        "image" => "../../assets/img/events/automeet.jpg",
        "description" => "One day National level workshop on “IoT in Automobiles” in AUTOMEET 2022, MIT Campus, Anna University",
        "date" => " 21.05.2022",
    ],
    [
        "image" => "../../assets/img/events/iotfundamentals.jpg",
        "name" => "",
        "description" => "Two days workshop on “Fundamentals of IoT” in collaboration with Department of Electronics Engineering MIT Campus, Anna University.",
        "date" => "17.11.2022 to 18.11.2022",
    ],
    [
        "image" => "../../assets/img/events/iotconcept.png",
        "name" => "",
        "description" => "Six days Faculty Empowerment Programme on “IoT Concepts and Applications” sponsored by Centre for Facultyand Professional Development, Anna University, Chennai.",
        "date" => "30.01.2023 to 04.02.2023",
    ],
    [
        "image" => "../../assets/img/events/iot5g.png",
        "name" => "",
        "description" => "Two or Four weeks SummerInternship or Project work 2023 on “IoT and 5G” for the University Department and affiliated college students of Anna University.",
        "date" => "03.07.2023 to 28-07-2023 ",
    ],
];

$Collaborations = [
    [
        "image" => "../../assets/img/events/coli1.jpg",
        "description" => "Signed MoA with M/s. Enthu Technology Solutions India Pvt. Ltd, Coimbatore, Tamil Nadu, on 16.02.2023",
    ],
    [
        "image" => "../../assets/img/events/coli2.jpg",
        "description" => "Initiated MoU with Centre for Development of Advance Computing (CDAC), Bangalore.",
    ],
    [
        "image" => "../../assets/img/events/coli3.jpg",
        "description" => "Initiated Industrial Collaboration with M/s Data Patterns (India) Pvt. Ltd on 10.03.2023 in the Presence of Mr. Stanley Moses, Managing Director, Data Patterns, San Francisco, USA.",
    ],
    [
        "image" => "../../assets/img/events/pic5.jpeg",
        "description" => "Initiated Collaboration with Chennai Metropolitan Water Supply and Sewerage Board",
    ],
    [
        "image" => "",
        "description" => " IOT based remote monitoring and app development for battery management system for AMPTON ENERGY PRIVATE, LIMITED, Chennai, Tamil Nadu to a tune of Rs. 2,16,000/- is being carried out.",
    ],
];

function customCard($data)
{
    foreach ($data as $index => $val) {
        $image = !empty($val['image']) ? $val['image'] : '../../assets/img/Noimage.png';
        $date = isset($val['date']) ? $val['date'] : '';
        $description = isset($val['description']) ? $val['description'] : '';
        echo '<div class="card-1">';
        echo '<div class="card" style="width: 20rem; height: 26rem;">';
        echo '<img style="height: 50%;" src="' . $image . '" />';
        echo '<div class="card-body" style="margin-top: 5%;">';
        if (!empty($date)) {
            echo '<h5 class="card-title" style="font-size:1rem; font-weight: 500;">' . $date . '</h5>';
        }
        if (!empty($description)) {
            echo '<h6 class="card-subtitle mb-2 text-muted customCard-content" style="font-size:1rem; font-weight: 400; line-height:1.5">' . $description . '</h6>';
        }
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
}
?>

<div class="home-container">
    <?php include '../../component/Navbar/navbar.php'; ?>
    <?php include '../../component/homeImage.php'; ?>
    <div class="padded-content">
        <div class="verticalTitleBar"></div>
        <h2>Events</h2>
    </div>
    <div class="grid-card" style="justify-content: center; gap: 1rem">
        <?php customCard($Events); ?>
    </div>

    <div class="padded-content">
        <div class="verticalTitleBar"></div>

        <h2>Collaboration</h2>
    </div>
    <div class="grid-card" style="justify-content: center; gap: 1rem">
        <?php customCard($Collaborations); ?>
    </div>
</div>
<?php include '../../component/Footer/footer.php'; ?>
<script>
    var imgElement = document.querySelector('.header-container img');
    imgElement.setAttribute('src', '../../assets/img/logo.png');
</script>