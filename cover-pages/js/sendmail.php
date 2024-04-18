if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(
        !empty($_POST['name'])
        && !empty($_POST['email'])
        && !empty($_POST['message'])
    ){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $message = $_POST["message"];


        $to = "mylemonade16@gmail.com";
        $subject = "New Contact Form Submission";
        $body = "Name: {$name}\nEmail: {$email}\nPhone: {$phone}\nMessage: {$message}";
        $headers = "From: {$email}";


        if (mail($to, $subject, $body, $headers)) {
            echo "Message sent successfully!";
        } else {
            echo "Failed to send message.";
        }
    }
}


<!-- Check if form is submitted and show success banner-->
<!-- This is a php process -->
<!-- can later incorporate javascript and have this portion separate -->

$successMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(
        !empty($_POST['name'])
        && !empty($_POST['email'])
        && !empty($_POST['message'])
        ){
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $message = $_POST["message"];
                                            
                                            
        $to = "mylemonade16@gmail.com";
        $subject = "New Contact Form Submission";
        $body = "Name: {$name}\nEmail: {$email}\nPhone: {$phone}\nMessage: {$message}";
        $headers = "From: {$email}";
                                            
                                            
        if (mail($to, $subject, $body, $headers)) {
            // Set success message
            $successMessage = "Message sent successfully!";
        } else {
            // Set error message
            $errorMessage = "Failed to send message.";
        }
        } else {
        // Set error message if required fields are empty
        $errorMessage = "Please fill out all required fields.";
        }
}


 <!-- Submit success/error message-->
 <div class="container">
                                        <?php if (!empty($successMessage)) : ?>
                                            <div class="alert alert-successs mt-3" role="alert">
                                                <?php echo $successMessage; ?>
                                            </div>
                                        <?php endif; ?>

                                        <?php if (!empty($errorMessage)) : ?>
                                            <div class="alert alert-danger mt-3" role="alert">
                                                <?php echo $successMessage; ?>
                                            </div>
                                        <?php endif; ?>