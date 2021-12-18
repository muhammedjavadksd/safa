<?php
include "header.php";
?>
    <style>
    .main_button:hover {
            color: blue;
        }
</style>
    <section class="headbanner">
        <div class="home_centent ">
            <p>HOME CONTACT</p>
            <h2>CONTACT SA</h2>
        </div>
    </section>

    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-8  ">
                    <form action="" class="contactfrom">
                        <div class="formgroup">
                            <label for="">You're name</label>
                            <input type="text" name="name" placeholder="Enter you're name">
                        </div>

                        <div class="formgroup">
                            <label for="">You're email</label>
                            <input type="email" name="email" placeholder="Enter you're email address">
                        </div>

                        <div class="formgroup">
                            <label for="">You're subject</label>
                            <input type="text" name="subject" placeholder="Enter you're subject">
                        </div>

                        <div class="formgroup">
                            <label for="">You're message</label>
                            <textarea name="" id="" cols="30" rows="10"></textarea>
                        </div>
                        <button class="main_button mb-5">Submit</button>
                    </form>
                </div>
                <div class="col-md-4 ">
                    <div class="row">
                        <div class="col-md-12 contatcmethod">
                            <p class="text-center"> <i class="fas fa-map-marked"></i></p>
                            <div class="contact_head">
                                <h2>
                                    Address </h2>
                                <p>C.H Complex, 1st Floor, Industrial Estate Road , - Vidyanagar, Kasaragod- 671123
                                </p>
                            </div>


                        </div>

                        <div class="col-md-12 contatcmethod">
                            <p class="text-center"> <i class="fas fa-envelope"></i></p>
                            <div class="contact_head">
                                <h2>
                                    Email </h2>
                                <p>safootballacademykasaragod@gmail.com </p>
                            </div>


                        </div>

                        <div class="col-md-12 contatcmethod">
                            <p class="text-center">
                                <div class="col-md-12 contatcmethod">
                                    <p class="text-center"> <i class="fas fa-envelope"></i></p>
                                    <div class="contact_head">
                                        <h2>Contact </h2>
                                        <p>
                                            </i> +91 7306311028 (Whatsapp)</p>
                                        <p> +91 7306311028 (Phone )</p>
                                    </div>


                                </div>
                            </p>


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>




    <footer>
        <div class="row">
            <div class="col-md-4">
                <h2>ABOUT SA</h2>
                <img src="css/images/logo.png" alt="" width="100px"><br>
                <p>S.A FOOTBALL ACADEMY KASARAGOD FOUNDED IN 2017 IS ONE OF THE FASTEST GROWING ACADEMY IN KASARAGOD TO DEVELOP HIGH QUALITY TRAINING AND SOCCER PLAYERS BY PROVIDING A COMPREHENSIVE YOUTH SOCCER EXPERIENCE
                </p>
            </div>
            <div class="col-md-4">
                <h2>SA CONNECT</h2>
                <ul class="ulsocial">
                    <li><a href="https://www.facebook.com/safootballacademykasaragod"><i
                                class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://www.instagram.com/safootball.academy/"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li><a href=""><i class="fab fa-twitter"></i></a></li>
                    <li>
                        <a href="https://www.google.com/search?gs_ssp=eJzj4tVP1zc0TDPLjs-rTE4yYLRSNqgwTko0sTBOMrE0TEw0MzEztjKosEhKSbFMBoI0CzMzAy_h4kSFtPz8kqTEnByFxOTElNTcSgAURxaM&q=sa+football+academy&oq=sa+foo&aqs=chrome.1.69i57j46i175i199i512j0i512j46i175i199i512j0i512j69i60l3.3269j1j7&sourceid=chrome&ie=UTF-8"><i class="fab fa-google"></i></a>
                    </li>

                </ul>
                <ul class="ulconnect">
                    <li><i class="fas fa-envelope-square"> </i> info@safootball.com</li>
                    <li><i class="fas fa-map-marker-alt"> </i> C.H Complex, 1st Floor, Industrial Estate Road , - Vidyanagar, Kasaragod- 671123</li>
                </ul>
            </div>
            <div class="col-md-4">
                <h2>SA pages</h2>
                <ul class="ulconnect_page">
                    <li> <a href="index.php">Home</a></li>
                    <li> <a href="about.php">About us</a></li>
                    <li> <a href="academy.php">Academy</a></li>
                    <li> <a href="team.php">Team</a></li>
                    <li> <a href="highlights.php">Highlight</a></li>
                    <li> <a href="contact.php">Contact</a></li>

                </ul>
            </div>

        </div>
    </footer>
    <div class="copyrights" style="padding-top: 20px;">
        <p class="text-center">All contents © copyright SA Football Academy. All rights reserved. <a href="https://jabzz.online">Designed by Javad</a></p>
    </div> 
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p " crossorigin="anonymous "></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>