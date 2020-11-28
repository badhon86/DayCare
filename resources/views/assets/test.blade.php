<!DOCTYPE html>
<html lang="en">
<head>

<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>

                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="userasset/images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="http://127.0.0.1:8000/admin/login" class="signup-image-link">already have an account!</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sing in  Form -->


    </div>

    <!-- JS -->
    <script src="userasset/vendor/jquery/jquery.min.js"></script>
    <script src="userasset/js/main.js"></script>
</body>
</html> --
