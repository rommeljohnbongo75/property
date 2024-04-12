<!-- Footer -->
<style>
    #services::before{
        background: none !important;
    }

    input[type="submit"] {
        width: 100%;
        padding: 10px;
        margin-top: 10px;
        background-color: #FFA920;
        color: #fff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }
    input[type="email"] {
        width: 100%;
        padding: 10px;
        margin-top: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
        box-sizing: border-box;
    }
    input[type="submit"] {
        background-color:#FFA920;
    }   
    footer#main-footer {
        /* margin-top: 40px; */
        background-color:black;
        padding:0 30px;
    }
    #services .icon1 i{
        color: #FFA920;
        padding-right:10px;
    }

    #services h4{
        color:white;
        padding-bottom:20px;
        font-size:22px;
        margin:0;
    }
    #services p{
        color:#8E8E93;
        font-size:18px;
        margin:0;
   padding:10px 0;
    }

    @media only screen and (max-width: 768px) {
    #services h4 {
   font-size: 19px;
}
    }
</style>
<footer id="main-footer" class="py-4 text-white">
        <section id="services" class="py-5  text-white">
        
                <div class="row  justify-content-center">
                    <div class="col-md-6 col-lg-3 col-xl-2 ">
                        <h4>Estate Rental</h4>
                        <p class="icon1"><i class="fa-regular fa-envelope"></i>Home2brental@gmail.com</p>
                        <p class="icon1"><i class="fa-solid fa-phone"></i>(972) 53-368-3527</p>
                        <p class="icon1"><i class="fa-solid fa-mobile-button"></i>(732) 503-3216</p>
                        
                            
                            
                    </div>
                    <div class="col-md-6 col-lg-3 col-xl-2">
                        <h4>Popular Locations</h4>
                        <p>Jerusalem </p> 
                        <p>Tzefas </p> 
                        <p>Teverya </p> 
                    </div>
                    <div class="col-md-6 col-lg-3 col-xl-2">
                        <h4>Support</h4>
                        <p>Help Center </p> 
                        <p>Cancellation Options</p> 
                        <p>Contact Us </p>
                    </div>
                    <div class="col-md-6 col-lg-3 col-xl-2">
                        <h4>Stay in Touch</h4>
                        <p>Subscribe to our newsletter to receive updates.</p>
                        <form action="#" method="post">
                            <input type="email" name="email" placeholder="Enter your email" required>
                            <input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
        
        </section>
</footer>