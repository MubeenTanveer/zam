<?php
$ROUTE = '../../';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Us</title>
</head>
<?php include("../../includes/header/header.php") ?>
<body>
    <div class="container-fluid p-4 mt-3">
        <h2 class="text-center text-primary">Get in Touch </h2>
        <h3 class="text-center ">Let's Build Something Amazing Together! <br> Feel free to ask any question?</h3>
    </div>

    <form action="contact.php" method="post">
        <section class="py-5">
            <div class="container">
                <div class="row form-section">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <div class="w-100 h-100">
                            <div class="position-relative h-100">
                                <img src="./img/team.jpg" class="w-100 h-100 rounded-lg bg-blend-multiply bg-indigo-700" />
                                <div class="position-absolute w-100 p-lg-4 p-3" style="bottom: 0;">
                                    <div class="bg-white rounded p-4">
                                        <a href="" class="d-flex text-decoration-none align-items-center mb-3">
                                            <i class="fa-brands fa-whatsapp footer-social-media-icon"></i>
                                            <h5 class="text-dark fs-6 ml-3 mb-0">+44-7867-203147</h5>
                                        </a>
                                        <a href="" class="d-flex text-decoration-none align-items-center mb-3">
                                            <i class="fa-solid fa-envelope footer-social-media-icon"></i>
                                            <h5 class="text-dark fs-6 ml-3 mb-0">info@zamdevelopers.com</h5>
                                        </a>
                                        <a href="" class="d-flex text-decoration-none align-items-center">
                                            <i class="fa-solid fa-phone footer-social-media-icon"></i>
                                            <h5 class="text-dark fs-6 ml-3 mb-0">Marsland Cl, Harborne, Birmingham, UK</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 bg-light p-4 rounded-lg d-flex align-items-center">
                        <div>
                            <h4 class="text-primary mb-4">Send Us A Message</h4>
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-8 mb-4">
                                    <input type="text" class="form-control" name="name" placeholder="Name">
                                </div>
                                <div class="col-12 col-md-8 mb-4">
                                    <input type="text" class="form-control" name="email" placeholder="Email">
                                </div>
                                <div class="col-12 col-md-8 mb-4">
                                    <input type="text" class="form-control" name="phone" placeholder="Phone">
                                </div>
                                <div class="col-12 col-md-8 mb-4">
                                    <h4 class="text-primary h5 mb-2">Preferred method of communication</h4>
                                    <div class="d-flex">
                                        <div class="custom-control custom-radio mr-4">
                                            <input id="radio-group-1" type="radio" name="preferred_contact" value="Email" class="custom-control-input">
                                            <label for="radio-group-1" class="custom-control-label fs-6">Email</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input id="radio-group-2" type="radio" name="preferred_contact" value="Phone" class="custom-control-input">
                                            <label for="radio-group-2" class="custom-control-label fs-6">Phone</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-8 mb-3">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" name="message" rows="3" placeholder="Message"></textarea>
                                </div>
                                <div class="col-12 col-md-8">
                                    <button class="btn btn-primary text-center w-100" type="submit" name="submit">Send</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
</body>

</html>


<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $preferred_contact = $_POST['preferred_contact'];
    $message = $_POST['message'];

    $to = 'info@zamdevelopers.com'; // Replace with your email address
    $subject = 'New Contact Form Submission';
    $body = "Name: $name\nEmail: $email\nPhone: $phone\nPreferred Contact: $preferred_contact\n\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo 'Your message has been sent successfully!';
    } else {
        echo 'There was a problem sending your message. Please try again.';
    }
}
?>

<?php include("../../includes/footer/footer.php"); ?>