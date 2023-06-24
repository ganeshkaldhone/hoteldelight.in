<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Reservation Form</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="main.css">
    </head>
    <style>
      body{
        background-image: url(img/one.jpg);
        background-repeat: no-repeat;
        background-size: cover;
      }
    </style>
    <body>
      <form action="insert.php" method="post" align="center"> 
        <section class = "banner">
            <h2  style="color: aliceblue;">BOOK YOUR TABLE NOW</h2>
            <div class = "card-container">
            
                    
                </div>

                <div class = "card-content">
                    <h3  style="color: azure;">Reservation</h3>
                    <form >
                        <div class = "form-row">
                            <select name = "day" required>
                                <option value = "day-select" >Select Day </option>
                                <option value = "sunday">Sunday</option>
                                <option value = "monday">Monday</option>
                                <option value = "tuesday">Tuesday</option>
                                <option value = "wednesday">Wednesday</option>
                                <option value = "thursday">Thursday</option>
                                <option value = "friday">Friday</option>
                                <option value = "saturday">Saturday</option>
                            </select> <br> <br>
                            <input type="time" name='time'>
                            <br><br>
                            <input type="date" name="date">
                            
                        </div>
                        <br><br>

                        <div class = "form-row">
                            <input type = "text" placeholder="Full Name" name ="name" required> <br><br>
                            <input type = "text" placeholder="Phone Number"  maxlength="10" name="phone_no" required><br><br>
                        </div>

                        <div class = "form-row">
                            <input type = "number" placeholder="How Many Persons?" min = "1" name="no_of_people"required><br><br>
                            <input type = "submit" value = "BOOK TABLE" name="save" required>
                            <br><br><br>
                            <div >
                            <a style="color: white ; stroke: any; " >Tip - Table booking reserved for 15 minutes extra from the reserved time to accomodate any potential delays or additional needs, after that reserved table is cancelled automatically</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </form> 
    </body>
</html>
