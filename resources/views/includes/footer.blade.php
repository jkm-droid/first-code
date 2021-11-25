<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 col-md-6 footer-contact">
                    <a href="/" class="logo"><img src="{{ asset('/site_images/logo.png') }}" alt="" class="img-fluid"></a>
                    <p>
                        <strong>Phone:</strong> +254-722-666-747<br>
                        Nairobi, Kenya <br>
                        <strong>Phone:</strong> +1(360)-669-4407<br>
                        New York, USA<br>
                        <strong>Phone:</strong> +86-1367-1830-746<br>
                        Shanghai,China<br>

                        <strong>Emails:</strong><br> info@firstcodecorporation.com<br>
                        info@industrialisingafrica.com
                    </p>
                </div>


                <div class="col-lg-4 col-md-6 footer-links">
                    <h2>Useful Links</h2>
                    <ul>
                        <li><i class="bx bx-chevron-right bx-xs"></i> <a href="https://funds.firstcodesystems.com/welcome/" target="_blank">FirstCode Finance Systems</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="https://industrialisingafrica.com/" target="_blank">Industrialising Africa Publication</a></li>
                    </ul>

                </div>
                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h2 style="color: red;">Contact Us</h2>
                    <p class="put-black">Enter your email address and message to reach unto us.</p>
                    <p id="message-box"></p>
                    <form id="subscribe-form">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email Address">
                        <textarea type="text" class="form-control" name="message" id="message" placeholder="Message"></textarea>
                        <input class="btn btn-lg text-uppercase form-control" style="background-color: goldenrod; color: red; margin-top: 10px;" type="submit" value="contact us" id="contact-btn">
                    </form>
                </div>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                <script type="text/javascript">
                    const inputEmail = document.getElementById('email');
                    const inputMessage = document.getElementById('message');
                    const btn = document.getElementById('contact-btn');

                    inputEmail.addEventListener('input', function (){
                        inputMessage.addEventListener('input', function () {
                            btn.disabled = (this.value === '');
                        });
                    });

                    $('#contact-btn').click(function(e){
                        e.preventDefault();

                        var email = $('#email').val();
                        var message = $('#message').val();
                        if(email !== "" || message !== "") {

                            $.ajax({
                                url: '/contact',
                                type: 'POST',
                                data: {
                                    "_token": "{{ csrf_token() }}",
                                    'email': email,
                                    'message':message,
                                },
                                success: function (response) {
                                    console.log(response);
                                    let content = "";
                                    document.getElementById("subscribe-form").reset();

                                    if(response.status === 200){
                                        content = '<small class="text-center put-green">' + "Message sent successfully.We will reach you through your email." + '</small>';
                                    }else if(response.status === 202){
                                        content = '<small class="text-center put-red">' + response.message['email'] + '</small>';
                                    }else{
                                        content = '<small class="text-center put-red">' + "Oops! An error occurred." + '</small>';
                                    }

                                    $("#message-box").html(content);

                                },

                                failure: function (response) {
                                    console.log("something went wrong");
                                }
                            });
                        }else{
                            let content = '<small class="text-center put-red">' + "Error!Email cannot be empty" + '</small>';
                            $("#message-box").html(content);
                        }
                    });

                </script>
            </div>
        </div>
    </div>

    <div class="container d-md-flex py-4">

        <div class="me-md-auto text-center text-md-start">
            <div class="copyright">
                &copy; Copyright <strong style="color: white;"><span>FirstCode Corporation Inc.</span></strong>. All Rights Reserved
            </div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
            <a href="https://twitter.com/FirstCode_C" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="https://web.facebook.com/firstcodecorporation" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="https://www.instagram.com/firstcodecorporation/" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="https://www.linkedin.com/in/firstcode-corporation-953802216/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            <a href="https://www.youtube.com/c/IndustrialisingAfrica"><i class="bx bxl-youtube"></i></a>
        </div>
    </div>
</footer>
