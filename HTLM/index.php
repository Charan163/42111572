<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Vivira Mall</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   
    <br><br>
    <nav>   
         <header id=main>
            <div id="image"><img src="./img_body.png"</div>
        <h1 id="head" >Contact Us</h1>
        </header>            
    </nav>

    <br><br><br>

    
            <form id="contactForm" action="submit.php" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
    
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
    
                <label for="subject">Subject:</label>
                <input type="text" id="subject" name="subject" required>
    
                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>
    
                <button type="submit">Submit</button>
            </form>

        <!-- vedio -->
        <video autoplay muted loop id="bg-video">
            <source src="vdo.mp4" type="video/mp4">
        </video>


    <footer>
        <div id="map">
            <div id="ad_bg">
            <h2>Find Us</h2>
            Address: Coromandel Plaza, 2nd Floor, Vivira Mall, 33, Old Mahabalipuram Rd, Navalur, Tamil Nadu 6031031.
        <br>
            Phone Number: 063749 514091.
        <br>
            Website: Vivira Mall2.

        </div>
            <div style="width: 100%"><iframe width="350" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=VIVIRA%20MALL%2033,%20OMR%20Rd,%20Navalur,%20Tamil%20Nadu%20600130%20+(VIVIRA%20MALL)&amp;t=p&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/">gps devices</a></iframe></div>
        </div>
</footer>
    <?php 
    include("submit.php");
    ?>

    </main>
    <script src="script.js"></script>
    
</body>
</html>
