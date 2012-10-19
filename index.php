
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script src="js/jqfloat.min.js"></script>
        <script src="js/jquery.corner-2.12.js" > </script>        
        
        <link rel="stylesheet" href="css/default.css" />

        <script>
                    
            $(document).ready(function() {
                $('#sun').jqFloat({
                    width: 50,
                    height: 50,
                    speed: 2000
                });

                $('#cloud11').jqFloat({
                    width: 50,
                    height: 50,
                    speed: 19000
                });
                
                $('#cloud2').jqFloat({
                    width: 100,
                    height: 50,
                    speed: 7000
                });
                
                $('#cloud3').jqFloat({
                    width: 70,
                    height: 50,
                    speed: 9000
                });
                
                $('#cloud4').jqFloat({
                    width: 50,
                    height: 50,
                    speed: 8000
                });
                
                $('#cloud5').jqFloat({
                    width: 50,
                    height: 50,
                    speed: 19000
                });
                
                $('#b').jqFloat({
                    width: 100,
                    height: 100,
                    speed: 2000
                });
                
                $('#ballon').jqFloat({
                    width: 100,
                    height: 100,
                    speed: 2000
                });
                
                
                $("#text").corner();
                
            });            
            
            function ff(){
                
                $('#text').animate({
                    height: 'toggle'
                }, 1000, function() {
                    // Animation complete.
                });
                
            }
    
        </script>

        <title></title>
    </head>

    <body oncontextmenu="return false;">    

        <div class="header"> <!-- header -->

            <a id="f" href="javascript:ff()">menu1</a>
            menu2 menu3

        </div> <!-- end header -->

        <div style="margin:auto; width:1000px;"> <!-- wrapper -->

            <div id="sun" style="margin-left:50px; position:absolute; z-index: 1"> <!-- sun -->
                <img src="images/sun.png" />            
            </div> <!-- end sun -->

            <div id="cloud11" style="margin-left:10px; margin-top: 60px; position:absolute; z-index: 2"> <!-- sun -->
                <img src="images/cloud.png" height="70" width="70" />            
            </div> <!-- end sun -->

            <div id="cloud2" style="margin-left:20px; margin-top: 10px; position:absolute"> <!-- sun -->
                <img src="images/cloud.png" />            
            </div> <!-- end sun -->

            <div id="cloud3" style="margin-left:401px; position:absolute"> <!-- sun -->
                <img src="images/cloud.png" />            
            </div> <!-- end sun -->

            <div id="cloud4" style="margin-left:300px; position:absolute"> <!-- sun -->
                <img src="images/cloud.png" />            
            </div> <!-- end sun -->

            <div id="cloud5" style="margin-left:600px; margin-top: 25px;position:absolute"> <!-- sun -->
                <img src="images/cloud.png" />            
            </div> <!-- end sun -->

            <div id="b" style="margin-left:100px;bottom:200px; position:absolute"> <!-- sun -->
                <img src="images/butterfly.png" />            
            </div> <!-- end sun -->            

            <div id="ballon" style="position:absolute; margin-top: 370px;"> <!-- sun -->
                <img src="images/ballon.png" />            
            </div> <!-- end sun -->

            <div id="text" style="position:absolute; margin-top: 200px;margin-left:300px; border:1px solid #000; width: 500px; height: 300px; background-color: #ccc;  display: none"> <!-- sun -->
                abc-kids
            </div> <!-- end sun -->

        </div> <!-- end wrapper -->

        <div id="grass" style="position:absolute; bottom: 0px; background-image: url('images/grass.png'); height: 90px; width: 100%;">

        </div>

    </body>
</html>
