<?php include('ademo2.html'); ?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Reset Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Contact Us Section */
        #contactus {
            width: 100%;
            height: auto;
            padding: 20px;
            text-align: center;
        }
          /* Image Section */
        .row7 {
            width: 100%;
            height: auto;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .row7 img {
            width: 100%;  /* Full width */
            height: auto; /* Maintain aspect ratio */
            display: block;
            object-fit: cover;
        }
        


        /* Heading */
        .row8 {
            width: 100%;
            text-align: center;
            margin-top: 20px;
        }

        .row8 h1 {
            font-size: 28px;
            color: #333;
            padding: 10px;
        }

        /* Text Section */
        .row9 {
            width: 90%;
            max-width: 1200px;
            margin: auto;
            font-size: 22px;
            line-height: 1.6;
            top:10px;
            position: relative;
            text-align: justify;
            padding: 20px;
            background: #f9f9f9;
            border-radius: 5px;
            box-shadow: 4px 4px 10px 4px rgba(0, 0, 0, 0.1);
        }
        /* YouTube Video Section */
        .youtube-container {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
            top:10px;
            position: relative;
        }

        .youtube-container iframe {
            max-width: 560px;
            width: 100%;
            height: 315px;
            border-radius: 10px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .row8 h1 {
                font-size: 24px;
                padding: 5px;
            }

            .row9 {
                font-size: 18px;
                width: 90%;
                padding: 15px;
            }

            .youtube-container iframe {
                height: 250px;
                max-width: 90%;
            }
        }

        @media (max-width: 480px) {
            .row8 h1 {
                font-size: 20px;
            }

            .row9 {
                font-size: 16px;
                width: 95%;
                padding: 10px;
            }

            .youtube-container iframe {
                height: 200px;
                max-width: 95%;
            }
        }
    </style>
</head>

<body>

    <div id="contactus">
        <div class="row7">
            <img src="images/crime6.jpg" alt="Crime Reporting">
        </div>

        <div class="row8">
            <h1>"Report crime anonymously, call 1930 today!"</h1>
        </div>

        <div class="row9">
            Crime doesn’t stop itself—it takes people like you to take action.
            When you see something wrong, don’t turn away. Your voice is a powerful tool for justice.
            Reporting a crime can save lives, protect the innocent, and stop harm in its tracks.
            Every call matters, no matter how small or insignificant it may seem.
            Your tip could be the missing piece to solving a case or preventing a tragedy.
            <br><br>
            We understand that speaking up can be daunting, but your courage makes all the difference.
            Your identity is safe; you can report anonymously if you wish.
            Justice begins with you. Call 1930 now.
        </div>

        <div class="youtube-container">
            <iframe width="100%" height="315" 
                src="https://www.youtube.com/embed/JaNkqqQJd6Q?si=E567lHbZ2cnuJXjb" 
                title="YouTube video player" 
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen>
            </iframe>
        </div>
    </div>

    <?php include('sanjana.html'); ?>

</body>
