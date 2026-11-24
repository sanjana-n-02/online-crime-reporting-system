<?php include('ademo2.html')
?>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <style>
        #header{

            height: 1000px;
            width:100%;
        }
       .row3{
            height:110px;
            width:100%;
        }
        .row3 h1{
            font-size:42px;
            color:black;
            font-style: normal;
            text-align: center;
            top:35px;
            position: relative;
        }
        .row4{
            height:250px;
            width:100%;
            
        }
        .row4 p{
            font-size:25px;
            color:black;
            left:25px;
            
            position: relative;
        }
        .row5{
            height:300px;
            width:100%;
        }
        .col3{
            height:300px;
            width:35%;
            float:left;
        }
        .col3 img{
            height:300px;
            left:25px;
            position: relative;
            

        }
        .col4{
            height:300px;
            width:63%;
            float:right;
        }
        .col4 p{
            font-size:25px;
            color: black;
            left: 5px;
            
            position: relative;   
        }
        .row6{
            height:300px;
            width:100%;
            
        }
        .row6 p{
            font-size:25px;
            color: black;
            left:25px;
            position: relative;
           }
           
        
        
    

        /* Swiper container */
        .swiper {
            width: 93%;
            height: 300;
            margin: auto;
            padding: 20px 0;
        }
        
        
        /* Slide box styling */
        .swiper-slide {
            text-align: center;
            background: #f4f4f4;
            padding: 20px;
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

        /* Navigation buttons */
        .swiper-button-next,
        .swiper-button-prev {
            color: #333;
        }

        /* Pagination dots */
        .swiper-pagination {
            position: relative;
            bottom: 20px;
        }
        .swiper:hover{
            color: black;

        }
        
        
    </style>
</head>
<body>
    <div id="home"> 
        <div class="row3">
            <h1>
                Welcome to the Online Crime Reporting System          
            </h1>   
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
                of crime, fostering a safer and more trustworthy society. 
            </p>
            
        </div>
        <div class="row5">
            <div class="col3">
                <img src="images/crime5.jpg" alt="1930 Report Cybercrime">
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
            you'll be greeted by an automated system or a representative who will guide you through the reporting process. Be ready to provide essential 
            information such as the type of crime, location, time, and any details that can help law enforcement investigate the incident. For urgent cases,
            you can press the option for immediate assistance. Make sure to speak clearly and provide as much information as possible to help authorities
            take swift action.Remember, the crime reporting hotline is available 24/7, and your information will be handled confidentially to ensure your 
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
    <div class="swiper-navigation">
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
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

<style>
    /* Ensure the Swiper container has a proper size */
    .swiper-container {
        width: 80%;
        margin: auto;
        text-align: center;
        position: relative;
    }

    /* Adjust navigation buttons */
    .swiper-navigation {
        display: flex;
        justify-content: space-between;
        width: 100%;
        position: relative;
        top: -40px; /* Adjust as needed */
    }

    .swiper-button-prev, .swiper-button-next {
        position: relative;
    }
</style>
</body>
<?php include('sanjana.html')
?>