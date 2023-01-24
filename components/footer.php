<!--contacts section -->

<section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nobis explicabo ea facere ipsa dolor eaque, sapiente distinctio velit nulla eos non, fugiat accusantium? Velit assumenda quia eum officia voluptatibus incidunt esse, enim ad explicabo cum reprehenderit commodi. Et ex in, sed non, voluptatem mollitia iure itaque dignissimos aspernatur exercitationem maxime.</p>   
                    <div class="icons">
                        <div class="row">
                            <i style class="fa">&#xf2bd;</i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">Sujeeban Gunathasan</div>
                            </div>
                        </div>

                        <div class="row">
                            <i style class="fa">&#xf015;</i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">Jaffna,SriLanka</div>
                            </div>
                        </div>

                        <div class="row">
                            <i style class="fa">&#xf2b6;</i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">sujeethasan0@gmail.com</div> 
                            </div>
                        </div>
                        
                    </div>
                    <div class="helloaa">
                        <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-github-square" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
                    <form method="post" action="sent-mail.php">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" name="name" placeholder="Name" required>
                            </div>
                            <div class="field email">
                                <input type="email" name="email" placeholder="Email" required>
                            </div>
                        </div>    
                            <div class="field">
                                <input type="text" name="subject" placeholder="Subject" required>
                            </div>
                            <div class="field textarea">
                                <textarea cols="50" rows="20" name="message" placeholder="Describe project.." required></textarea>
                            </div>
                            <div class="button">
                                <button type="submit">Send message</button>
                            </div>
                        
                    </form>
                </div>
            </div>
        </div>
            
    </section>
                    
<!--footer section -->
    <footer>
        <span>Created By <a href="#">SujeebanSL</a> | </span class="far fa-&copy;;"> <span>2021 All rights reserved.</span>
        
    </footer>



    
    


    <script src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>

    <script>
        $('.carousel').owlCarousel({ 
        margin: 20, 
        loop: true,
        autoplay: true,
        smartSpeed: 1000,
        autoPlayTimeOut: 1000,
        autoPlayHoverPause: true,
        responsive: {
            0:{
                items: 1,
                nav: false
            },
            600:{
                items: 2,
                nav: false
            },
            1000:{
                items: 3,
                nav: false
            }
        }
    });

    
    
    </script>
</body>
</html>