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
  <link rel="stylesheet" href="./memberCard.css">
  <link rel="stylesheet" href="./members.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<?php
$defaultImage = "../../assets/img/dummy_user.png";

$ExecutiveMembers = [
  [
    "image" => "../../assets/img/members/chairman.jpg",
    "name" => "Dr.R.Velraj",
    "position" => "The Honourable Vice-Chancellor",
    "description" => "Vice Chairman",
  ],
  [
    "image" => "../../assets/img/members/dean.jpg",
    "name" => "Dr.J.Prakash",
    "position" => "Registrar & Dean",
    "description" => "Ex-Officio Member",
  ],
  [
    "image" => "",
    "name" => "Finance Officer",
    "position" => "Anna University",
    "description" => "Ex-officio Member",
  ],
  [
    "image" => "../../assets/img/members/DirectorPD.jpg",
    "name" => "Dr.K.Gunasekaran",
    "position" => "The Director, Planning and Development",
    "description" => "Ex-officio Member",
  ],
  [
    "image" => "",
    "name" => "Mr.I.Balakrishnan",
    "position" => "Scientist, Microwave Communication & Antenna Division",
    "description" => "Member",
  ],
  [
    "image" => "../../assets/img/members/Elamvazhuthi.jpg",
    "name" => "Dr.K.Elamvazhuthi",
    "position" => "CEO & Director (Operations) Tyromer India LLP Founder & Secretary,MIT Entrepreneur Association",
    "description" => "Member",
  ],
  [
    "image" => "",
    "name" => "Mr.S.Sakthivel",
    "position" => " General Manager,Joint Director of Industries and Commerce",
    "description" => "Member",
  ],
  [
    "image" => "../../assets/img/members/Arunachalam.jpg",
    "name" => "Dr.K.Arunachalam",
    "position" =>
    "Professor and Director Centre for Excellence in Automobile Technology, Anna University, Chennai -44",
    "description" => "Member",
  ],
  [
    "image" => "",
    "name" => "Dr.P.T.V.Bhuvaneswari",
    "position" =>
    "The Director, Centre for Internet of Things, MIT Campus, Anna University, Chennai - 44",
    "description" => "Member Secretary",
  ],
];

$AdministriveMembers = [
  [
    "image" => "../../assets/img/members/DirectorCIOT.jpg",
    "name" => "Dr.P.T.V.Bhuvaneswari",
    "position" => "Professor/ Department of Electronics Engineering,Founder Director",
    "description" => "Administrative Staff",
  ],
  [
    "image" => "../../assets/img/members/Meyappan.jpg",
    "name" => "Dr.S.Meyyappan",
    "position" => "Assistant Professor/Department of Instrumentation Engineering & Deputy Director Centre for Internet of Things",
    "description" => "Administrative Staff",
  ],
];

$AssociativeStaff = [
  [
    "image" => "../../assets/img/members/Satheish.jpg",
    "name" => "Dr. V. Sathiesh Kumar",
    "position" => "Assistant Professor, Department of Electronics Engineering",
    "description" => "Associated Faculty Members",
  ],
  [
    "image" => "../../assets/img/members/sangeetha.jpg",
    "name" => "Dr.D.Sangeetha",
    "position" =>
    "Assistant Professor [Sr. Grade], Department of Information Technology",
    "description" => "Associated Faculty Members",
  ],
  [
    "image" => "../../assets/img/members/mariammal.jpg",
    "name" => "Dr.K.Mariammal",
    "position" => "Associate Professor, Department of Electronics Engineering",
    "description" => "Associated Faculty Members",
  ],
];

$SupportiveStaff = [
  [
    "image" => "../../assets/img/members/usha.jpg",
    "name" => "Mrs.V.V.S.Usha",
    "position" => "Chief Superintendent",
    "description" => "Supportive Staff",
  ],
  [
    "image" => "../../assets/img/members/babitha.jpg",
    "name" => "Mrs.C.Babitha",
    "position" => "Professional Assistant-I",
    "description" => "Supportive Staff",
  ],
  [
    "image" => "../../assets/img/members/samson.jpg",
    "name" => "Mr. M. Samson Samuel",
    "position" => "Peon",
    "description" => "Supportive Staff",
  ],
];
$CampusCoordinator = [
  [
    "image" => "../../assets/img/members/kalaimagal.jpg",
    "name" => "Dr. S. Kalaimagal",
    "position" =>
    "Assistant Professor (Sr.Gr), Department of Mechanical Engineering, CEG Campus, Anna University",
    "description" => "IoT CLUB - Campus Coordinator",
  ],
  [
    "image" => "../../assets/img/members/sudharsanamurthy.jpg",
    "name" => "Mr.Sudharsanamurthy",
    "position" =>
    "Assistant Professor, Department of Planning, SAP Campus, Anna University",
    "description" => "IoT CLUB - Campus Coordinator",
  ],
  [
    "image" => "../../assets/img/members/karthika.jpg",
    "name" => "Dr. S. Karthika",
    "position" =>
    "Assistant Professor, Dept of Chemical Engineering, ACTech Campus, Anna University",
    "description" => "IoT CLUB - Campus Coordinator",
  ],
  [
    "image" => "../../assets/img/members/vasim.jpg",
    "name" => "Dr M Vasim Babu",
    "position" =>
    "Assistant Professor, Department of Electronics Engineering, MIT Campus, Anna University, Chennai - 44",
    "description" => "IoT CLUB - Campus Coordinator",
  ],
];

$ProjectStaff = [
  [
    "image" => "../../assets/img/members/DirectorCIOT.jpg",
    "name" => "Dr.P.T.V. Bhuvaneswari",
    "position" => "Professor/ Department of Electronics Engineering, Founder Director",
    "description" => "Project Staff",
  ],
  [
    "image" => "../../assets/img/members/Satheish.jpg",
    "name" => "Dr. V. Sathiesh Kumar",
    "position" => "Assistant Professor, Department of Electronics Engineering",
    "description" => "Project Staff",
  ],
  [
    "image" => "../../assets/img/members/thangarajan.jpg",
    "name" => "Mr. M. Thangaraja",
    "position" => "Project Associate - I",
    "description" => "Project Staff",
  ],
];


$DoctoralScholar = [
  [
    "image" => "../../assets/img/members/paramesh.jpg",
    "name" => "R. Parameswaran",
    "position" => "Full Time PhD Recipient of ACRF",
    "description" => "Doctoral Scholar",
  ],
  [
    "image" => "../../assets/img/members/vidhya.jpg",
    "name" => "Vidhya",
    "position" => "Full Time PhD Recipient of ACRF",
    "description" => "Doctoral Scholar",
  ],
  [
    "image" => "../../assets/img/members/shabana.jpg",
    "name" => "M.Shabana Parveen",
    "position" => "Part Time PhD",
    "description" => "Doctoral Scholar",
  ],
  [
    "image" => "../../assets/img/members/bino.jpg",
    "name" => "J. Bino",
    "position" => "Part Time PhD",
    "description" => "Doctoral Scholar",
  ],
  [
    "image" => "../../assets/img/members/dinesh.jpg",
    "name" => "Dinesh",
    "position" => "Part Time PhD",
    "description" => "Doctoral Scholar",
  ],
];

$MemberDetails = [
  "Executive_Members" => $ExecutiveMembers,
  "Administrive_Members" => $AdministriveMembers,
  "Associative_Staff" => $AssociativeStaff,
  "Supportive_Staff" => $SupportiveStaff,
  "Campus_Coordinator" => $CampusCoordinator,
  "Project_Staff" => $ProjectStaff,
  "Doctoral_Scholar" => $DoctoralScholar,
];
?>

<div class="home-container">
  <?php include '../../component/Navbar/navbar.php'; ?>
  <?php include '../../component/homeImage.php'; ?>
  <?php
  foreach ($MemberDetails as $key => $value) {
    echo '<div>';
    echo '<div class="memberTitle">';
    echo '<div class="verticalTitleBar"></div>';
    echo '<h3>' . str_replace("_", " ", $key) . '</h3>';
    echo '</div>';
    echo '<div class="memberCardContainer">';
    memberCard($value);
    echo '</div>';
    echo '</div>';
  }

  function memberCard($data)
  {
    global $defaultImage;
    foreach ($data as $index => $val) {
      $image = !empty($val['image']) ? $val['image'] : $defaultImage;
      echo '<div class="fullbox">';
      echo '<div class="img-box" style="background-image: url(' . $image . '); background-position: center; background-repeat: no-repeat; background-size: cover; border-radius: 5px;"></div>';
      echo '<div class="anouncedetails">';
      echo '<div class="anouncehead">' . $val['name'] . '</div>';
      echo '<div class="anouncesub">' . $val['position'] . '</div>';
      echo '<div class="anouncesub" style="font-weight: bolder;">' . $val['description'] . '</div>';
      echo '</div>';
      echo '</div>';
    }
  }
  ?>
</div>
<?php include '../../component/Footer/footer.php'; ?>