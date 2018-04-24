       <html lang="en-US">
           <meta name="author" content="Bolaji Ayodeji">
           <meta name="description" content="HTML5 CSS3">
           <meta name="viewport" content="width=device-width, initial-scale=1">
           <style>
               body{
               font-size: 200%;
               background: url(bgimage.jpg);
               background-position: center; 
               background-size: cover;
               background-repeat: no-repeat;
               color:#E5E5E6;
               height:100%;
               }
                   #text1{
                       font-family: arial;
                       font-size:80%;
                       color:#333333
               }
               #h4{
                   color:#F2C94C;
                   font-size:145%;
               }
           </style>
           <body> 
               <br />
           <h4 id=h4> &nbsp; &nbsp; &nbsp; &nbsp; <bold> HNG INTERNSHIP 4.0 </bold> </h4>
           <div style="color:#333333 ; text-align:center; font-size:100%";>
           <br /> <br /> <br />
           <h4 id="text1">Time:</h4>
           <?php echo date("h:i:s:A") ;?>
           <h4 id="text1">Date:</h4>
           <?php echo date("l:F:dS:Y") ;?>
            </div>
           </body>
       </html>