
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <title>Test Page</title>
        
    </head>
    
    <body>
        <style>
            #container
            {
                background: linear-gradient(to right, #adadad 20%,#454545 50%, #1c1c11 80%); 
                height: 100%; 
                width: 100%; 
                margin: 0; 
                padding: 0; 
                position: absolute; 
                top: 0; 
                left: 0; 
                border: 0;
                display: flex; 
                align-items: center; 
                justify-content: center; 
                flex-direction: column;
                font-size: large;
            }
            #container-div1,#container-div2
            {
                background-color: #f9f0d480; 
                text-align: center; 
                border-radius: 10px;
                padding: 20px; 
                margin: 10px;
                transition: opacity 0.5s ease-in-out;
            }
            #brandImg
            {
                width: 200px; 
                padding-bottom: 20px;
            }
            #div-star-container
            {
                display: flex;
                align-items: center; 
                justify-content: center;
                font-size: 50px;
            }
            #div2Table tr td
            {
                text-align: center;
                width: 350px;
            }
            #div2Table tr td input[type="text"] , #div2Table tr td textarea
            {
                width: 100%;
                background-color: rgba(225, 222, 220, 0.87);
            }
            #star1, #star2, #star3, #star4, #star5 
            {
                cursor: pointer;
                transition: color 0.3s;
            }
            .StarOriColor{color : 5c6565;}
            .StarHoverColor{color: fde047;}

            .divShow{display: block;}
            .divNone{display: none;}

            #btnSubmit 
            {
                width: 100%;
                height: 3em;
                border-radius: 30em;
                font-size: 15px;
                font-family: inherit;
                border: none;
                position: relative;
                overflow: hidden;
                z-index: 1;
                box-shadow: 6px 6px 12px #c5c5c5,-6px -6px 12px #ffffff;
                font-weight: bold;
            }
            #btnSubmit::before 
            {
                content: '';
                width: 0;
                height: 3em;
                border-radius: 30em;
                position: absolute;
                top: 0;
                left: 0;
                background-image: linear-gradient(to right, #0fd850 0%, #f9f047 100%);
                transition: .5s ease;
                display: block;
                z-index: -1;
            }
            #btnSubmit:hover::before 
            {
                width: 100%;
            }
        </style>
        <script>
            $(function()
            {
                $("#star1,#star2,#star3,#star4,#star5").addClass("StarOriColor");
                $("#container-div2").addClass("divNone");
                //.css({"color":"5c6565"});
            });
            $(document).ready(function()
            {
                $("[name='div-star']").hover(function() {
                    $("#star1,#star2,#star3,#star4,#star5").removeClass("StarHoverColor");
                    //.css({"color":"5c6565"});
                    $("#star1,#star2,#star3,#star4,#star5").addClass("StarOriColor");
                    //.css({"color":"5c6565"});
                });
                $("#star1").hover(function() {
                    $("#star1").addClass("StarHoverColor");
                    //.css({"color":"fde047"});
                });
                $("#star2").hover(function() {
                    $("#star1,#star2").addClass("StarHoverColor");
                    ////.css({"color":"fde047"});
                });

                $("#star3").hover(function() {
                    $("#star1,#star2,#star3").addClass("StarHoverColor");
                    ////.css({"color":"fde047"});
                });
                $("#star1,#star2,#star3").click(function() {
                    $("#star1,#star2,#star3").addClass("StarHoverColor");
                    $("#container-div1").addClass("divNone");
                    $("#container-div2").removeClass("divNone");
                    $("#container-div2").addClass("divShow");
                    //
                });
                $("#star4").hover(function() {
                    $("#star1,#star2,#star3,#star4").addClass("StarHoverColor");
                    ////.css({"color":"fde047"});
                });
                $("#star4").click(function() {
                    $("#star1,#star2,#star3,#star4").addClass("StarHoverColor");
                    window.location.replace("https://search.google.com/local/writereview?placeid=ChIJFRVOPG8U2jERzZhZ7qqxEow");
                });
                $("#star5").hover(function() {
                    $("#star1,#star2,#star3,#star4,#star5").addClass("StarHoverColor");
                    //https://embedsocial.com/blog/google-review-link/
                    ////.css({"color":"fde047"});
                });
                $("#star5").click(function() {
                    $("#star1,#star2,#star3,#star4,#star5").addClass("StarHoverColor");
                    window.location.replace("https://search.google.com/local/writereview?placeid=ChIJFRVOPG8U2jERzZhZ7qqxEow");
                });
            });
        </script>
        <div id="container">

        

            <div id="container-div1">
                <div id="divBrandImage"><img id="brandImg" src="brandImage/3.svg"></div>
                <div>Your Experience Is Our Priority!</div>
                <div>Your voice matters and your feedback means the world, it helps us grow.</div>
                <div id="div-star-container">
                    <div id="star1" name="div-star" title="Terrible">&#9733;</div> 
                    <div id="star2" name="div-star" title="Bad">&#9733;</div>
                    <div id="star3" name="div-star" title="Okay">&#9733;</div>
                    <div id="star4" name="div-star" title="Good">&#9733;</div>
                    <div id="star5" name="div-star" title="Excellent">&#9733;</div>
                </div>              
            </div>
            <div id="container-div2">
                <table id="div2Table">
                    <tr><td>This Isn't the Standard We Promise.</td></tr>
                    <tr><td>Sorry for the letdown - give us the chance to fix it.</td></tr>
                    <tr><td><input type="text" placeholder="Your Name (Optional)" ></td></tr>
                    <tr><td><input type="text" placeholder="Email / Phone Number (Optional)"></td></tr>
                    <tr><td><textarea rows="4" placeholder="Your feedback..."></textarea></td></tr>
                    <tr><td><button id="btnSubmit">Submit Feedback</button></td></tr>
                </table>
            </div>
            background: linear-gradient(to right, #000 20%,#ffdf0054 50%, #000 80%);
            <p>Solid Star: &#9733;</p>
            <p>Hollow Star: &#9734;</p>
            This is a test pageasd.


            https://embedsocial.com/blog/google-review-link/

        </div>
       
    </body>
</html>