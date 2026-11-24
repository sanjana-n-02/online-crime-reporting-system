<?php include('ademo2.html')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Crime Reporting System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: serif;
        }
        #header {
            width: 100%;
            padding: 20px;
            text-align: center;
        }
        .row3 h1 {
            font-size: 42px;
            color: black;
            top:35px;
            position: relative;
            text-align: center;
        }
        .row4 p {
            font-size: 25px;
            color: black;
            padding: 15px;
            top:53px;
            position: relative;
            text-align: justify;
        }
        .col4 p {

        font-size: 25px;
        justify-content: center;
        align-items: center;
        color: black;
        padding: 15px;
        top:40px;
        right:60px;
        position: relative;
        text-align: justify;
        width: 100%; /* Ensure it takes the full width of .col4 */
        box-sizing: border-box; /* Include padding in the width calculation */
        margin: 0; /* Remove unnecessary margins */
        line-height: 1.1; /* Improve readability */
        word-wrap: break-word; /* Ensure long words wrap properly */
}
.row6 p{
        font-size: 25px;
            color: black;
            padding: 15px;
            top:43px;
            position: relative;
            text-align: justify;
            

}
        .row5 {
            display: grid;
    grid-template-columns: 3.3fr 5fr; /* Image takes 1 part, text takes 2 parts */
    align-items: center;
    gap: 28px; /* Space between image and text */
    width: 100%;
        }
        .col3, .col4 {
            flex: 1;
            min-width: 300px;
        }
        .col3 img {
            width: 85%;
            height: auto;
            border-radius: 2px;
            top:50px;
            left:15px;
            position: relative;
        }
        /* Swiper container */
        .swiper {
    width: 80%;
    height: auto;
    top: 30px;
    position: relative;
    padding: 20px 0;
}

/* Slide box styling */
.swiper-slide {
    text-align: center;
    background: #f4f4f4;
    padding: 20px;
    top:18px;
    border-radius: 9px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.swiper-slide img {
    width: 300px;
    height: 200px;
    border-radius: 5px;
}

.swiper-slide h1 {
    font-size: 18px;
    margin-top: 10px;
    color: #333;
}

/* Navigation buttons - Fix position */
.swiper-button-next,
.swiper-button-prev {
    color: white;
    background: rgba(0, 0, 0, 0.5);
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 20px;
    position: absolute;
    top: 1300px;  /* Center vertically */
    transform: translateY(-50%); /* Align properly */
    z-index: 10;
}

.swiper-button-prev {
    left: 10px; /* Position left */
}

.swiper-button-next {
    right: 10px; /* Position right */
}

.swiper-button-prev:hover,
.swiper-button-next:hover {
    background: rgba(0, 0, 0, 0.8);
}

/* Pagination dots */
.swiper-pagination {
    height:150px;
    position: relative;
    bottom: 10px;
}

/* Fix for hover */
.swiper:hover {
    color: black;
}
@media screen and (max-width: 768px) {
    .row3 h1 {
        font-size: 28px;
        text-align: center;
    }
    .row4 p, .col4 p, .row6 p {
        font-size: 18px;
        padding: 10px;
        text-align: justify;
    }

    .swiper-container {
        width: 100%;
    }

    /* Adjust row5 layout for small screens */
    .row5 {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        gap: 20px; /* Space between image and text */
        width: 100%;
    }

    .col3 {
        width: 100%;
        display: flex;
        justify-content: center;
    }

    .col3 img {
        width: 90%; /* Ensures image is responsive */
        max-width: 350px; /* Limits max width */
        height: auto;
        margin: 0 auto; /* Centers the image */
        margin-left:20px;
        display: block;
        left:25px;
        position:relative;
    }

    
    .col4 {
        width: 100%; /* Utilizes full available space */
        text-align: justify;
        padding: 0; /* Removes left padding */
    }

    .col4 p {
        font-size: 18px;
        padding: 10px;
        width: 100%; /* Ensures paragraph utilizes full width */
        box-sizing: border-box; /* Includes padding inside width calculation */
        margin: 0; /* Removes extra margin */
        left:4px;
        position: relative;
        
    }
}



    </style>
</head>
<body>
    <div id="home"> 
        <div class="row3">
            <h1>Welcome to the Online Crime Reporting System</h1>
        </div>
        <div class="row4">
            <p>
                Your safety is our priority. Our platform offers a simple, secure, and convenient way to report crimes 
                or incidents to law enforcement authorities. Whether you're a victim, a witness, or a concerned
                citizen, we're here to ensure your voice is heard. This system provides a seamless way to report criminal 
                activities, suspicious behaviors, or safety concerns without the need to visit a police station physically. 
                Designed to be accessible 24/7, it ensures that anyone can file a report at any time, from anywhere, using 
                a secure and confidential interface.. Users can provide detailed descriptions of incidents, upload evidence
                such as photos or videos, and monitor the progress of their reports through real-time updates. Whether it’s
                theft, cybercrime, harassment, or public safety hazards, this platform makes reporting easy, transparent,
                and effective. By encouraging proactive participation from citizens, the Online Crime Reporting System not
                only helps address immediate issues but also aids in the long-term prevention
                of crime, fostering a safer and more trustworthy society.  </p>
        </div>
        <div class="row5">
            <div class="col3">
                <img src="images/crime5.jpg"alt="Report Cybercrime">
            </div>
            <div class="col4">
                <p>
                    Reporting cybercrime has never been easier with our dedicated online portal. Whether you've been a victim of online fraud, identity theft,
                    hacking, phishing, cyberbullying, or any other digital crime, our platform provides a secure and efficient way to file your complaint. 
                    Simply log in, describe the incident in detail, and upload any supporting evidence, such as screenshots or emails. Your report will be
                    forwarded to the appropriate cybercrime unit for prompt action. We prioritize your privacy and ensure that your information is handled with 
                    the highest level of confidentiality. By reporting cybercrimes, you contribute to creating a safer online environment, helping authorities 
                    track and prevent illegal activities in the digital space. 
                </p>
            </div>
        </div>
        <div class="row6">
            <p> 
                To report a crime by phone, simply dial the designated crime reporting hotline number provided by your local authorities or the national crime
            reporting service. The number is often available on the police department's website or can be found in public safety brochures. Once connected,
            you'll be greeted by an automated system or a representative who will guide you through the reporting process. Remember, the crime reporting hotline is available 24/7, and your information will be handled confidentially to ensure your 
            privacy and safety.Together, we can stop crime and protect lives.Take a stand for safety and justice.Speak up and report wrongdoing.Be the 
            reason someone feels safe today.Your action can prevent harm and bring justice.Stand against crime—report it now.
            </p>
        </div>
        <div class="swiper-container">
    <div class="swiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="images/crimewomen1.jpg" alt="Women & Child Awareness">
                <h1>WOMEN & CHILD AWARENESS</h1>
            </div>
            <div class="swiper-slide">
                <img src="images/crimefraud.jpg" alt="Financial Fraud">
                <h1>FINANCIAL FRAUD</h1>
            </div>
            <div class="swiper-slide">
                <img src="images/crimecyber.jpg" alt="Other Cyber Crime">
                <h1>OTHER CYBER CRIME</h1>
            </div>
            <div class="swiper-slide">
                <img src="images/crimehack.jpg" alt="Online Hacking">
                <h1>ONLINE HACKING</h1>
            </div>
        </div> <!-- Close .swiper-wrapper here -->

        <!-- Pagination (Inside Swiper) -->
        <div class="swiper-pagination"></div>
    </div> <!-- Close .swiper div here -->

    <!-- Navigation Buttons (Placed Outside) -->

</div> <!-- Close .swiper-container here -->

<!-- Swiper.js JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var swiper = new Swiper(".swiper", {
            slidesPerView: 1,
            spaceBetween: 20,
            loop: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            autoplay: {
                delay: 3000, // Auto-slide every 3 seconds
                disableOnInteraction: false,
            },
            breakpoints: {
                768: { slidesPerView: 2 }, // 2 slides for tablets
                1024: { slidesPerView: 3 } // 3 slides for desktops
            }
        });
    });
</script>
 
</body>
</html>
<?php include('sanjana.html')
?>
