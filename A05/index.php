<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "corememories";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM islandcontents WHERE color = '#C4D199'";
$result = $conn->query($sql);

$contents = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $contents[] = '<img src="' . $row['image'] . '" style="width:100%">';
    }
}

$sql = "SELECT * FROM islandcontents WHERE color = '#82C293'";
$result = $conn->query($sql);

$contents2 = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $contents2[] = '<img src="' . $row['image'] . '" style="width:100%">';
    }
}

$sql = "SELECT * FROM islandcontents WHERE color = '#655C9E'";
$result = $conn->query($sql);

$contents3 = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $contents3[] = '<img src="' . $row['image'] . '" style="width:100%">';
    }
}

$sql = "SELECT * FROM islandcontents WHERE color = '#FF85A5'";
$result = $conn->query($sql);

$contents4 = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $contents4[] = '<img src="' . $row['image'] . '" style="width:100%">';
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Core Memories</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        html {
            scroll-behavior: smooth;
        }
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: "Montserrat", sans-serif
        }

        .w3-row-padding img {
            margin-bottom: 12px
        }

        .w3-sidebar {
            width: 120px;
            background: #222;
        }

        #main {
            margin-left: 120px
        }

        @media only screen and (max-width: 600px) {
            #main {
                margin-left: 0
            }
        }

        .joy-color {
            color: #F7E100;
        }

        .sadness-color {
            color: #4B83A1;
        }

        .anger-color {
            color: #FF3B30;
        }

        .disgust-color {
            color: #67C87C;
        }

        .fear-color {
            color: #9B7CB9;
        }

        .w3-sidebar .w3-bar-item {
            color: #F7E100;
            transition: color 0.3s ease;
        }

        .w3-sidebar .w3-bar-item:hover {
            color: #4B83A1 !important;
   
        }

        #myNavbar .w3-bar-item {
            color: #F7E100;
            transition: color 0.3s ease;
        }

        #myNavbar .w3-bar-item:hover {
            color: #4B83A1 !important;
        }

        .w3-bar-item:hover {
            color: #4B83A1 !important;
        }
    </style>
</head>

<body class="w3-black">

    <nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
        <a href="#friendship" class="w3-bar-item w3-button w3-padding-large">
            <i class="fa fa-users w3-xxlarge"></i>
            <p>FRIENDSHIP</p>
        </a>
        <a href="#passion" class="w3-bar-item w3-button w3-padding-large">
            <i class="fa fa-heart w3-xxlarge"></i>
            <p>PASSION</p>
        </a>
        <a href="#adventure" class="w3-bar-item w3-button w3-padding-large">
            <i class="fa fa-globe w3-xxlarge"></i>
            <p>ADVENTURE</p>
        </a>
        <a href="#family" class="w3-bar-item w3-button w3-padding-large">
            <i class="fa fa-users w3-xxlarge"></i>
            <p>FAMILY</p>
        </a>
    </nav>

    <div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
        <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
            <a href="#friendship" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
            <a href="#passion" class="w3-bar-item w3-button" style="width:25% !important">ABOUT</a>
            <a href="#adventure" class="w3-bar-item w3-button" style="width:25% !important">PHOTOS</a>
            <a href="#family" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
        </div>
    </div>

    <div class="w3-padding-large" id="main">

        <header class="w3-container w3-padding-32 w3-center w3-black" id="friendship">
            <h1 class="w3-jumbo joy-color"><span class="w3-hide-small">FRIENDSHIP ISLAND</span></h1>
        </header>
        <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
            <h2 class="w3-text-light-grey joy-color">Friendship Island</h2>
            <hr style="width:200px" class="w3-opacity">
            <p>Represents the strong connections and bonds you’ve built with the people who bring joy, trust, and
                support into your life. This island has its roots in the idea of mutual respect, laughter, and shared
                experiences that make friendships deep and lasting.</p>
        </div>
        <div class="w3-padding-64 w3-content" id="photos">
            <h2 class="w3-text-light-grey joy-color">Photos</h2>
            <hr style="width:200px" class="w3-opacity">
            <div class="w3-row-padding" style="margin:0 -16px">
                <div class="w3-half">
                    <?php
                    $half = ceil(count($contents) / 2);
                    for ($i = 0; $i < $half; $i++) {
                        echo $contents[$i];
                    }
                    ?>
                </div>
                <div class="w3-half">
                    <?php
                    for ($i = $half; $i < count($contents); $i++) {
                        echo $contents[$i];
                    }
                    ?>
                </div>
            </div>
        </div>

        <header class="w3-container w3-padding-32 w3-center w3-black" id="passion">
            <h1 class="w3-jumbo sadness-color"><span class="w3-hide-small">PASSION ISLAND</span></h1>
        </header>
        <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
            <h2 class="w3-text-light-grey sadness-color">Passion Island</h2>
            <hr style="width:200px" class="w3-opacity">
            <p>Is where my creativity and self-expression come to life. This island represents the burning drive I have
                to pursue my dreams, explore new talents, and constantly evolve as an individual. Whether through art,
                writing, or any form of creation, Passion Island is my space to let my heart lead.</p>
        </div>
        <div class="w3-padding-64 w3-content" id="photos">
            <h2 class="w3-text-light-grey sadness-color">Photos</h2>
            <hr style="width:200px" class="w3-opacity">
            <div class="w3-row-padding" style="margin:0 -16px">
                <div class="w3-half">
                    <?php
                    $half = ceil(count($contents2) / 2);
                    for ($i = 0; $i < $half; $i++) {
                        echo $contents2[$i];
                    }
                    ?>
                </div>
                <div class="w3-half">
                    <?php
                    for ($i = $half; $i < count($contents2); $i++) {
                        echo $contents2[$i];
                    }
                    ?>
                </div>
            </div>
        </div>

        <header class="w3-container w3-padding-32 w3-center w3-black" id="adventure">
            <h1 class="w3-jumbo anger-color"><span class="w3-hide-small">ADVENTURE ISLAND</span></h1>
        </header>
        <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
            <h2 class="w3-text-light-grey anger-color">Adventure Island</h2>
            <hr style="width:200px" class="w3-opacity">
            <p>Adventure Island is all about my love for trying new things and exploring the world. It's about embracing
                the unknown and stepping out of my comfort zone. Whether through travel, taking risks, or learning new
                skills, this island pushes me to expand my horizons and experience life in all its vivid diversity.</p>
        </div>
        <div class="w3-padding-64 w3-content" id="photos">
            <h2 class="w3-text-light-grey anger-color">Photos</h2>
            <hr style="width:200px" class="w3-opacity">
            <div class="w3-row-padding" style="margin:0 -16px">
                <div class="w3-half">
                    <?php
                    $half = ceil(count($contents3) / 2);
                    for ($i = 0; $i < $half; $i++) {
                        echo $contents3[$i];
                    }
                    ?>
                </div>
                <div class="w3-half">
                    <?php
                    for ($i = $half; $i < count($contents3); $i++) {
                        echo $contents3[$i];
                    }
                    ?>
                </div>
            </div>
        </div>

        <header class="w3-container w3-padding-32 w3-center w3-black" id="family">
            <h1 class="w3-jumbo disgust-color"><span class="w3-hide-small">FAMILY ISLAND</span></h1>
        </header>
        <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
            <h2 class="w3-text-light-grey disgust-color">Family Island</h2>
            <hr style="width:200px" class="w3-opacity">
            <p>Family Island is where the love and support of my family shine. This island is a testament to the
                unconditional care and togetherness that makes family life so precious. It's a place where I can always
                return to, no matter where I go in the world, knowing that my loved ones will always be there for me.
            </p>
        </div>
        <div class="w3-padding-64 w3-content" id="photos">
            <h2 class="w3-text-light-grey disgust-color">My Photos</h2>
            <hr style="width:200px" class="w3-opacity">
            <div class="w3-row-padding" style="margin:0 -16px">
                <div class="w3-half">
                    <?php
                    $half = ceil(count($contents4) / 2);
                    for ($i = 0; $i < $half; $i++) {
                        echo $contents4[$i];
                    }
                    ?>
                </div>
                <div class="w3-half">
                    <?php
                    for ($i = $half; $i < count($contents4); $i++) {
                        echo $contents4[$i];
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

</body>

</html>