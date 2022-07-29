<?php include("top_bit.html");?>
            <div class="main box">
                <div class="main-head box">
                    <h1>Response title</h1>
                </div><!--end main-head-->
                <div class="main-left box">
                    Thank you for submitting a response. This currently doesn't work tho lol.
                </div><!--end main-left-->
                <div class="main-right box">
                    naimn right
                </div><!--end main-right-->
            </div><!--end main-->
            <?php              

                echo ini_set()

                $name = $_POST['name'];
                $message = $_POST['message'];

                $email_from = 'kingisaacellwood@gmail.com';
                $email_subject = "New Form submission";
                $email_body = "You have received a new message from the user $name.\n Here is the message:\n $message";

                $to = "kingisaacellwood@gmail.com";
                $headers = "From: $email_from \r\n";
                $headers .= "Reply-To: $email_from \r\n";
                mail($to,$email_subject,$email_body,$headers);
            ?>
<?php include("bottom_bit.html");?>