<?php
$DirectorMessage = [
    "The delighted team members of Centre for Internet of Things (CIoT) take pleasure in welcoming all. Madras Institute of Technology (MIT), one of the autonomous constituent institutions of the Anna University located in Chromepet, Chennai, India was established in 1949 by the Great Visionary Chinnaswami Rajam. It was the first self-financing institute opened in India with a mission to produce skilled engineering to meet the need of the society. It offered Engineering under various specializations namely Aeronautical Engineering, Automobile Engineering,  Electronics Engineering and Instrumentation Engineering.",
    "Centre for Internet of Things (C-IoT) was established in April 2022 as a full-fledged autonomous centre functioning in MIT campus of Anna University, intends to promote the Internet of Things (IoT) based Ecosystem that can open up numerous avenues in terms of Knowledge Enhancement, Employability, Entrepreneurship, Institute-Industry Collaboration, Indigenous Product Development and Global Recognition.",
    "The centre perseveres to become a Centre of Excellence in IoT to enable interdisciplinary research in cutting edge technologies of IoT. It shall contribute to the educational, economic and social development by carrying out R&D Projects in the cutting edge areas related to IoT and come up with patentable ideas and renowned publications. CIoT engages in consultancy works to cater the needs of industries. CIoT has set up a world class R& D facility for ELEMENTAL ANALYSIS with the generous funding support received from Government of Tamil Nadu under Tamil Nadu Innovative Initiative (TANII) scheme to a tune of 3 Crores. The existing facility can support consultancy works related to ELEMENTAL ANALYSIS of Medicinal Plants, Toxic Element identification etc.,",
    "The centre aims to provide a strong foundation in IoT, AI, Block Chain, Machine Learning, IoT Security, Embedded System etc., to the UG and PG students, researchers, faculties and industrial professionals through Internships/Training Programs/Certified Courses. CIoT engages itself in the establishment of Fundamental and Advanced Laboratories in IoT to various institutions based on request.",
    "The centre promotes and guides aspiring entrepreneurs in the area of IoT for their establishment by acting as a catalyst between Anna University Entrepreneur Cell and innovators. Transfer of Technology of innovative ideas and its application to society through Pilot Projects / Operational Projects is also envisioned. It intends to provide academic support to UG/PG/Ph.D/M.S/PDF programs of the University in the area of IoT.",
    "We as a committed team, extend a very warm welcome to people from various sectors who wish to collaborate with us in any of the above verticals. Thanks for visiting the website of Centre for Internet of Things."
];
?>
<div class="home-container">
    <div class="home-director-container">
        <div class="padded-content">
            <div class="verticalTitleBar"></div>
            <h2 style="font-size:calc(1.325rem + .9vw)">Message from the Director</h2>
        </div>
        <div class="deanContent">
            <div class="msg-wrap">
                <div class="msg-content" id="msg-content">
                    <?php
                    $press = false;
                    for ($i = 0; $i < count($DirectorMessage); $i++) {
                        if (!$press && $i >= 2) {
                            break;
                        }
                        echo "<div><p>{$DirectorMessage[$i]}</p></div>";
                    }
                    ?>
                </div>
            </div>
            <div class="img-wrapper">
                <div class="image"></div>
            </div>
        </div>
        <div class="directorname" style="margin-left:50px; padding-bottom:20px;">
            - Dr. P.T.V. Bhuvaneswari
        </div>
        <button id="toggle-content" class="btn btn-outline-primary" style="margin-left: 3rem!important;margin-right: 3rem!important;">Read More</button>
    </div>
</div>
<script>
    window.onload = function() {
        var toggleButton = document.getElementById("toggle-content");
        var msgContent = document.getElementById("msg-content");
        var DirectorMessage = <?php echo json_encode($DirectorMessage); ?>;
        var initialContent = msgContent.innerHTML;

        toggleButton.addEventListener("click", function() {
            if (this.innerHTML == "Read More") {
                this.innerHTML = "Read Less";
                for (var i = 2; i < DirectorMessage.length; i++) {
                    var newDiv = document.createElement("div");
                    var newP = document.createElement("p");
                    newP.textContent = DirectorMessage[i];
                    newDiv.appendChild(newP);
                    msgContent.appendChild(newDiv);
                }
            } else {
                this.innerHTML = "Read More";
                msgContent.innerHTML = initialContent;
            }
        });
    };
</script>