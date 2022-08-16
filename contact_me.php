<?php include("top_bit.html");?>
            <div class="main">
                <div class="main-head box">
                    <h1>Contact Me</h1>
                </div><!--end main-head-->
                <div class="main-left box">
                    <form class="contact-form" action="contactform.php" method="post">
                        <b>Name:</b><br>
                        <input type="text" name="name" placeholder="Full name"><br>
                        <b>Email:</b><br>
                        <input type="text" name="email" placeholder="Your e-mail"><br>
                        <b>Subject:</b><br>
                        <input type="text" name="subject" placeholder="Message subject"><br>
                        <b>Message:</b><br>
                        <textarea name="message" placeholder="Message"></textarea><br>
                        <button type="submit" name="submit">Send</button><br>
                    </form>
                </div><!--end main-left-->
                <div class="main-right box">
                </div><!--end main-right-->
            </div><!--end main-->
<?php include("bottom_bit.html");?>