<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
</head>
<body>
<div class="form-wrap">
                <form action="Feedback_Process.php" method="POST">
                    <h2 class="form-title"> User Feedback</h2>
                    <div class="form-fields">
                        <div class="form-group">
                            <input type="text"  name="fname"class="fname" placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <input type="text"  name="lname"class="lname" placeholder="Last Name">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="email" placeholder="Mail">
                        </div>
                        <div class="form-group">
                            <input type="number" name="phone" class="phone" placeholder="Phone">
                        </div>
                        <div class="form-group">
                            <textarea  type="text"name="message" id="" placeholder="Write your message"></textarea>
                        </div>
                    </div>
                    <input type="submit" value="Send Message" class="submit-button" name="submit">
                </form>
            </div>
        </div>
    
</body>
</html>
