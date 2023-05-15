<html>
    <head>
        <link rel="stylesheet" href="main.css">
        <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script> 
        <title>Assignment 3</title>       
    </head>
    
    <body>
        <!--Header section-->
        <Div class="header">
            <div><img id="img_logo" src="images/paddle-white.png"></div>
            <!--div><img id="img_menu" src="images/hamburger.png"></div--->
            <div><img id="img_menu" src="images/hamburger.png"></div>
            <div class="header_text"><h1>Halifax Canoe and Kayak</h1></Div>
            <Nav class="menu_naV">
                <ul class="menu_list">
                    <li>Home</li>
                    <li>Book a trip</li>
                    <li>Admin login</li>
                </ul>
            </Nav>
        </Div>

        <!--Main Content-->
        <div class="main_content">
            <div id="main_image" >
                <!--img  src="images/canoe.jpg"-->
                <div class="main_image_text">Come Experence Canada</div>
            </div>

            <div class="main_text">
                <Div class="event_header"><h2>Admin - Add Advance</h2></Div>
                <hr>
                <Div class="event_desc"><h3>Input details about the trip</h3></Div>
                <br>
                <!-- add lable Heading input box and seperate lable,  input box into 2 columns -->
                <form action="admin-confirm.php" method="post">
                    <table>
                        <tr>
                            <td><label for="heading">Heading:</label></td>
                            <td><input type="text" id="heading" name="heading" required placeholder='heading'></td>
                        </tr>
                        <tr>
                            <td><label for="tripdate">Trip Date:</label></td>
                            <td><input type="date" id="tripdate" name="tripdate" required placeholder="yyyy-mm-dd" value="", min="1997-01-01"></td>
                        </tr>
                        <tr>
                            <td><label for="duration">Duration:</label></td>
                            <td><input type="text" id="duration" name="duration" required  onkeypress="return isNumberKey(event)" placeholder='duration'> </td>
                        </tr>
                        <tr>
                            <td><label for="summary">Summary:</label></td>
                            <td><textarea id="summary" name="summary" required placeholder='Summary' rows="2" cols="80"></textarea></td>
                        </tr>
                    </table>
                    <!-- Add a submit button and cancel clear form button   -->
                    <br>
                    <input type="submit" value="Submit"> <input type="reset" value="Cancel">
                    <br>
                    <br>
                </form>
            </div>
        </div>

        <script src="script.js"></script>
    </body>
</html>