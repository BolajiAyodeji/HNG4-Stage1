       <html lang="en-US">
           <meta name="author" content="Bolaji Ayodeji">
           <meta name="description" content="HTML5 CSS3">
           <meta name="viewport" content="width=device-width, initial-scale=1">
           <style>
               body{text-align: left;
               font-size: 250%;
               background:url("bg.jpg");
               background-size: 100%;
               background-repeat: no-repeat;
               position:relative;
               color:#E5E5E6;
               }
                   #text1{
                       font-family: arial;
                       font-size:80%;
                       color:white
               }
               #h4{
                   color:green
               }
           </style>
           <h4 id=h4> <bold> &nbsp; &nbsp; &nbsp; &nbsp; HNG INTERNSHIP 4.0 </bold> </h4>
           <body>
           <br /> <br /> <br />
           <div style="text-align:center";>
           <h4 id="text1">Time:</h4>
           <?php echo date("h:i:s:A") ;?>
           <h4 id="text1">Date:</h4>
           <?php echo  date("l:F:dS:Y") ;?>
            </div>
           </body>
       </html>