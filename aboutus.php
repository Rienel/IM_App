<?php
    include 'connect.php';
    // require_once 'includes/header.php';
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="css/ab-ct-style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About Us</title>
	</head>

	<body class="container_aboutus">

    <div class="navbar">
        <nav>
            <ul>
                <li><a href="page.php">Home</a></li>
                <li><a href="createPlaylist.php">Create Playlist</a></li>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="aboutus.php">About Us</li>
                <li><a href="contactus.php">Contact Us</li>
            </ul>
        </nav>
    </div>
    
        <div class="container_ab">
            <!--Video-->
            <div>
                <div class="video">
                    <video id="vid_app" autoplay loop muted>
                        <source src="Refrained.mp4" type="video/mp4">
                    </video>
                </div>
            </div>

            <!--Information-->
            <div class="ab_us">
                <div class="pad_ab">
                    <h3 class="about">About Us</h3>

                    <div class="text">
                        Welcome to <a href="#"><strong>Refrained</strong></a> 
                        where the love for music meets innovative technology! <br>
                        Founded by two passionate developers, <strong>Rienel Basilisco</strong>, and <strong>Mark Baring</strong>, 
                        our journey <br>began with a shared vision: 
                        to create a platform that celebrates the universal love for music. <br>
                        <br>At Refrained, we believe in the power of <strong>connection through music</strong>. 
                        <br>Whether you're a casual listener or a dedicated audiophile, 
                        our platform <br>offers a seamless experience tailored to your musical preferences. <br>
                        <br>Driven by our devotion to music and fueled by our expertise in technology, 
                        <br>we've crafted Refrained to be more than just a music streaming service. 
                        <br>It's a <strong>community</strong>, a <strong>sanctuary</strong> for music enthusiasts to discover new artists, 
                        <br>rediscover old favorites, and connect with fellow music lovers. <br>
                        <br>With a diverse catalog spanning genres and eras, curated playlists, 
                        <br><strong>personalized recommendations</strong>, and exclusive features, 
                        <br>Refrained is your ultimate destination for all things music. 
                        <br>Join us on this melodic journey and let the rhythm guide you. 
                        <br><strong>Let's make every moment Refrained.</strong>
                    </div>
                </div>
            </div>

            <!--Social Media-->
            <div class="social_med">
                <h3 class="about">Social Media</h3>

                <div class="imgs">
                    <div class="rb_info">
                        <div class="rb_img">
                            <img class="rb" src="https://scontent.fceb2-1.fna.fbcdn.net/v/t1.15752-9/371114994_1338382540439639_5154399704555460908_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=8cd0a2&_nc_eui2=AeGkA4JF-3UaaMgZLqogaYorUFhikxRJr_VQWGKTFEmv9cr_Egq0mjvBKJdvV4JCAw0Y2A8GOISEUk9Vcv4ohXXP&_nc_ohc=b7t2IjEm1WEAX_fRQgN&_nc_ht=scontent.fceb2-1.fna&oh=03_AdQW4qGrqmrWWRFqI6cAG2IGa6mMYrQDDmQWPo1GIC6dGA&oe=660A5E5D">
                        </div>
                        <p><strong>Rienel Basilisco</strong><br>Facebook: <a href="https://www.facebook.com/profile.php?id=100072880541770">Rienel Basilisco</a><br></p>
                    </div>

                    <div class="br_info">
                        <div class="br_img">
                            <img class="br" src="https://scontent.fmnl25-3.fna.fbcdn.net/v/t1.15752-9/423472292_775691230612437_8383719853357707763_n.png?stp=cp0_dst-png&_nc_cat=109&ccb=1-7&_nc_sid=8cd0a2&_nc_eui2=AeF2IzIF7Hqe_39T4azcgGT9gPYm6XWILRuA9ibpdYgtG5ukf8GQqZ2XUInK3eXbHd71dfAGhSnyxB_Ge0Ua6tJw&_nc_ohc=vel6nlDp_ToAX8TOf8b&_nc_ht=scontent.fmnl25-3.fna&oh=03_AdQBW70Ps5elZfjjiQZJ_LtpEVLRnlTXkFKSqadHC9GdNw&oe=660A531B">
                        </div>
                        <p><strong>Mark Baring</strong><br>Facebook: <a href="https://www.facebook.com/markadrian.baring.54">Mark Baring</a><br></p>
                    </div>
                </div> 
            </div>
        </div>
	</body>
</html>