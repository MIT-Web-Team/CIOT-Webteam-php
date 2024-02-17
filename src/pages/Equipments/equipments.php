<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/src/assets/annauniversity.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Anna University - CIOT</title>
    <link rel="stylesheet" href="/index.css">
    <link rel="stylesheet" href="/src/component/Navbar/navbar.css">
    <link rel="stylesheet" href="/src/component/homeImage.css">
    <link rel="stylesheet" href="/src/component/Footer/footer.css">
    <link rel="stylesheet" href="/src/pages/Equipments/equipments.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<?php
$highEndEquipment = [
    [
        "image" => "/src/assets/img/equipments/pic1.jpg",
        "title" => "Pulsed Laser System",
        "subtitle" => "Splitlight compact 100",
        "specs" => [
            "Company : M/s Innolas Laser, Germany",
            "Active Medium : Nd: YAG",
            "Wavelength : 1064nm",
            "Max Energy : 100mJ",
            "Pulse Width : 6ns",
            "Beam Diameter : 5mm",
        ],
        "Applications" => [
            "Plasma Generation",
            "Biomedical Applications",
            "Analytical testing instruments",
        ],
    ],
    [
        "image" => "/src/assets/img/equipments/pic2.jpg",
        "title" => "Q-switched DPSS lasers",
        "subtitle" => "Splitlight compact 100",
        "specs" => [
            "Company : M/s Optogama, Germany",
            "Active Medium : Nd: YAG",
            "Wavelength : 1064nm",
            "Max Energy : 1mJ",
            "Pulse Width : 6ns",
            "Beam Diameter : 3mm @ 1m",
        ],
        "Applications" => [
            "Material Processing",
            "Micromatching",
            "LIBS",
            "Marking",
            "LIDAR & Laser Ranging",
            "Bio Photonics",
        ],
    ],
    [
        "image" => "/src/assets/img/equipments/pic3.jpg",
        "title" => "Spectrometer",
        "subtitle" => "Kymera 193i",
        "specs" => [
            "Andor- oxford instruments",
            "Resolution : 1nm",
            " Grating: interchangeable ( 800 G/ mm and 1200 G/mm)",
            "Focal Length : 193mm",
        ],
        "Applications" => [
            "Optical Spectroscopy",
            "Nano material growth and characterisation",
            "Measurement of chemical and molecular composition",
            "Analysis of environment contamination",
            "Characterisation of optical devices",
        ],
    ],
    [
        "image" => "/src/assets/img/equipments/pic4.jpg",
        "title" => "Delay Generator",
        "subtitle" => " Delay Generator",
        "specs" => [
            "Delay Output Channels : 4 nos",
            "Resolution : 5ps",
            "Wavelength : 1064nm",
            "Max delay : 2000 s",
            " External Trigger : Rising edge or falling edge",
            "Interface : Ethernet, GPIB ad RS 232",
        ],
        "Applications" => [
            "Laser Timing Control",
            "Component testing",
            "Camera Synchronization",
            "Instrument Gating",
        ],
    ],
    [
        "image" => "/src/assets/img/equipments/pic5.jpg",
        "title" => "Photo Multiplier Tube",
        "subtitle" => "Multiplier Tube",
        "specs" => [
            "PMT type : Multialkali",
            "Spectral response : 185 -900 nm",
            "  Photocathode active area : 3.7 mm X 13.0 mm",
            "Rise and fall time : 1.4 ns",
            "Settling time : 10 s ",
        ],
        "Applications" => [
            "Light Amplification",
            "Photo detector",
            "Blood analysis",
            "Flow cytometers",
        ],
    ],
    [
        "image" => "/src/assets/img/equipments/pic6.jpg",
        "title" => "Server",
        "subtitle" => "Lenovo",
        "specs" => [
            "Model : SR650",
            "Processor : 16C, 2.1 GHz",
            "RAM :16 GB HDD RAM (4 Nos)",
            "HDD : 1.2 TB (3 Nos)",
        ],
        "Applications" => [],
    ],
    [
        "image" => "/src/assets/img/equipments/pic7.jpg",
        "title" => "Hot Air Oven",
        "subtitle" => " Double Wall Chamber",
        "specs" => [
            "Maximum temperature 210˚C.",
            "Continues operation 200˚C. ",
            "Accuracy ±1˚C",
            " Material : Cold rolled Mild Steel with mirror powder coating.",
            "Fan for uniform heating.",
            "Digital on / off controller Accuracy of ±1˚C",
        ],
        "Applications" => [
            "Moisture Removal",
            "Sterilisation",
            "Temperature stability testing",
            "Heat treatment and drying",
            "Research applications"
        ],
    ],
    [
        "image" => "/src/assets/img/equipments/pic8.jpg  ",
        "title" => "Pellet Making Setup",
        "subtitle" => "Lenovo",
        "specs" => [
            "Capacity : 5 Ton",
            "Loading type : Hydraulic",
            "Travel of Ram : 15 cm",
            "Pressure gauge : External",
            "Cast iron : 30mm die set",

        ],
        "Applications" => [
            "Making pellet",
            "Compressing lightweight Materials",
            "Load Test",
        ],
    ],
];

function equipmentCard($highEndEquipment)
{
    echo '<div class="grid-card" style="padding: 0 2rem">';
    foreach ($highEndEquipment as $index => $equipment) {
        $image = $equipment['image'] ?? 'path/to/dummy_image.png';
        $title = $equipment['title'];
        $subtitle = $equipment['subtitle'];
        $applications = $equipment['Applications'];
        $specs = $equipment['specs'];

        echo '<div class="card-1">';
        echo '<div class="card" style="width: 20rem; height: 30rem;">';
        echo '<img alt="Sample" style="height: 23%;" src="' . $image . '" />';
        echo '<div class="card-body" style="position: relative;">';
        echo '<h5 class="card-title">' . $title . '</h5>';
        echo '<h6 class="card-subtitle mb-2 text-muted text-center">' . $subtitle . '</h6>';
        echo '<ul class="list-group list-group-flush">';
        foreach ($specs as $specIndex => $spec) {
            echo '<li class="list-group-item" style="padding: 0.5rem 0.75rem">' . $spec . '</li>';
        }
        echo '</ul>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
    echo '</div>';
}
?>

<?php
$embeddedBoards = [
    [
        'header' => 'Machine Learning Kit - Arduino Tiny',
        'items' => [
            'Nano 33 BLE Sense Board',
            'image/ video capture sensor',
            'Tiny Machine Learning Shield',
            'USB A to Micro USB Cable',
        ],
    ],
    [
        'header' => 'AI board for Embedded Artificial Intelligence -- Beagle Bone',
        'items' => [
            'TI AM5729 Dual-Core ARMCortex-A15 processor running at 1.5GHz',
            'Memory: 1GB RAM and 16GB on-board eMMC Flash',
            'Connectivity: Gigabit Ethernet, 2.4/5GHz WiFi, and Bluetooth',
        ],
    ],
    [
        'header' => 'Micro Python pyboard with headers',
        'items' => [
            'STM32F405RG microcontroller',
            '168 MHz Cortex M4 CPU with hardware floating point',
            '192KiB RAM',
            '24 GPIO plus LED and switch GPIO available on bottom row',
        ],
    ],
    [
        'header' => 'DEVELOPER KIT -- JETSON XAVIER NX',
        'items' => [
            'GPU: 384-core NVIDIA Volta™ GPU with 48 Tensor Cores',
            'CPU: 6-core NVIDIA Carmel ARM®v8.2 64-bit CPU 6 MB L2+4 MB L3',
            'Memory: 8 GB 128-bit LPDDR4x 59.7GB/s',
        ],
    ],
    [
        'header' => 'Development board - Galileo board',
        'items' => [
            '86-bit Intel GALILEO GEN 2 development board',
            'Intel X1000 chip quark system',
            'Interface Type: Ethernet, I2C, SPI, UART, USB',
            'Operating Supply Voltage: 7 V to 15 V',
        ],
    ],
    [
        'header' => 'Processor board -- Raspberry Pi Zero',
        'items' => [
            '1GHz single-core CPU',
            '512MB RAM',
            'Mini HDMI port',
            'Micro USB OTG port',
            'Micro USB power',
        ],
    ],
    [
        'header' => 'Mega board -- Arduino',
        'items' => [
            'Microcontroller: ATmega2560',
            'Operating Voltage: 5V',
            'Input Voltage: 7-12V',
            'Input Voltage: 7-12V',
            'Clock Speed: 16 MHz ',
        ],
    ],
    [
        'header' => 'WIFI and Bluetooth -- ESP32 Development Board',
        'items' => [
            'With support LWIP Protocol and Free RTOS',
            'Supporting three modes:  Access point, Station mode, and Access point + Station mode',
            'Includes CP2102 USB-UART bridge',
        ],
    ],
    [
        'header' => 'Wave share 10.1 Inch Capacitive HDMI LCD',
        'items' => [
            'Display (B) with Case 1280x800',
            'IPS screen,1280 x 800 hardware resolution',
            'Toughened glass capacitive touch panel, 6H hardness',
            'HDMI interface for displaying, USB interface for touch control',
            'Supports 5-level backlight adjustment',
        ],
    ],
    [
        'header' => 'Processor board -- Raspberry pi 4b (8GB RAM)',
        'items' => [
            'Quad-Core 64-bit Broadcom 2711, Cortex A72 Processor',
            'WLAN 802.11 b/g/n/ac (2.4 + 5.0 GHz)',
            'LAN RJ45 10/100/1000 Mbit (Gigabit LAN over USB 3.0)',
            'Operating Power 5V (or) 3A via USB Type-C port',
        ],
    ],
    [
        'header' => 'AURIX TC399-KIT - Infineon’s',
        'items' => [
            'TC399 AURIX™ TC3xx Controller in LFBGA-516 Package',
            'Crystal 20MHz (default) or External Clock',
            'Asynchronous SRAM upto 2MB',
            'Synchronous SRAM upto 4MB',
        ],
    ],
];

function equipmentCards2($embeddedBoards)
{
    echo '<div class="grid-card" style="padding: 0 0.5rem">';
    foreach ($embeddedBoards as $index => $equipment) {
        echo '<div class="my-2" style="width: 18rem;">';
        echo '<div class="card-header">' .$equipment['header'] . '</div>';
        echo '<div class="card-body">';
        echo '<ul class="list-group list-group-flush">';
        foreach ($equipment['items'] as $item) {
            echo '<li class="list-group-item">' . $item . '</li>';
        }
        echo '</ul>';
        echo '</div>';
        echo '</div>';
    }
    echo '</div>';
}
?>

<div class="home-container">
    <?php include '../../component/Navbar/navbar.php'; ?>
    <?php include '../../component/homeImage.php'; ?>
    <div class="padded-content">
        <div class="verticalTitleBar"></div>
        <h2>High End Equipment</h2>
    </div>
    <?php equipmentCard($highEndEquipment); ?>
    <div class="padded-content">
        <div class="verticalTitleBar"></div>
        <h2>Embedded Boards</h2>
    </div>
    <?php equipmentCards2($embeddedBoards); ?>
</div>
<?php include '../../component/Footer/footer.php'; ?>