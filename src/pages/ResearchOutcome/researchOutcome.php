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
    <link rel="stylesheet" href="./researchOutcome.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<?php
$NationalPublication = [
    "Parameswaran Ramesh, P. T. V. Bhuvaneswari, Bino J, Shabana Parveen, Vidhya N, “An IoT Enabled Smart Building Monitoring and Control System”, Gradiva Review Journal, Vol.9, Issue 2, Feb 2023.",
    "C. Meenakshi and S. Meyyappan.(2022). Data Interpretation through Pattern Matching in Big Data. Indian Journal of natural Sciences. 13(73), 46223-46229."
];

$InternationalJournal = [
    "P. Venkata Mahesh, S. Meyyappan & Rama Koteswara Rao Alla. (2022). ANew Multivariate Linear Regression MPPT Algorithm for Solar PV System with Boost Converter. ECTI Transactions on Electrical Engineering, Electronics, And Communications. 20(2), 269-281.",
    "P. Venkata Mahesh, S. Meyyappan and Rama Koteswara RaoAlla.(2022). Maximum Power Point Tracking with Regression Machine Learning Algorithms for Solar PV Systems, International Journal of Renewable Energy Research. 12(3), 1327-1338.",
    "P. Venkata Mahesh, S. Meyyappan and Rama Koteswara Rao Alla.(2022). Maximum Power Point Tracking using Decision-Tree Machine Learning Algorithm for Photovoltaic Systems. Clean Energy. 6(5), 762-775.",
    "P. Venkata Mahesh, S. Meyyappan and Rama Koteswara Rao Alla. (2023).Support Vector Regression Machine Learning based Maximum Power Point Tracking for Solar Photovoltaic systems. International Journal of Electrical and Computer Engineering. 14(1),100 - 108."
];

$InternationalConference = [
    "Kokilavani M, Siddharth R, Mohamed Riyaz, R Parameswaran, Ezhilarasi S and P.T.V.Bhuvaneswari, “Downlink Performance Analysis of 5G PD-NOMA system” presented in Global Conference on Computing, Power and Communication Technologies (GlobConPT), Financially sponsored by IEEE Industry Applications Society, USA, 2022, pp. 1-6, New Delhi, India.",
    "Swaminathan K, Veeman S, Dhilip Kumar T, Ezhilarasi S, P. T. V. Bhuvaneswari, Kavitha B R and R Parameswaran, “Deep Learning and IoT Based Assistance System for Autism Spectrum Disorder People” presented in 4th IEEE Middle East and North Africa Communications Conference (MENACOMM), 2022, pp. 83-88, Amman, Jordan.",
    "P. M. Shabana and P. T. V. Bhuvaneswari, “Comparative analysis of RPL performance under different wireless network topologies”, 2022 International Conference on Power, Energy, Control and Transmission Systems (ICPECTS), Chennai, India, 2022, pp. 1-7."
];

$Publication = [
    "National_Publication" => $NationalPublication,
    "International_Journal" => $InternationalJournal,
    "International_Conference" => $InternationalConference
];
?>

<div class="home-container">
    <?php include '../../component/Navbar/navbar.php'; ?>
    <?php include '../../component/homeImage.php'; ?>
    <?php
    foreach ($Publication as $key => $value) {
        echo '<div>';
        echo '<div class="padded-content">';
        echo '<div class="verticalTitleBar"></div>';
        echo '<h2 style="font-size: calc(1.325rem + .9vw);">' . str_replace("_", " ", $key) . '</h2>';
        echo '</div>';
        echo '<div class="List-publication">';
        echo '<ul class="list-group List-publication">';
        foreach ($value as $index => $val) {
            echo '<li class="list-group-item">';
            echo '<div class="List-content">';
            echo '<div>' . ($index + 1) . '.</div>';
            echo '<div>' . $val . '</div>';
            echo '</div>';
            echo '</li>';
        }
        echo '</ul>';
        echo '</div>';
        echo '</div>';
    }
    ?>
</div>
<?php include '../../component/Footer/footer.php'; ?>
<script>
    var imgElement = document.querySelector('.header-container img');
    imgElement.setAttribute('src', '../../assets/img/logo.png');
</script>