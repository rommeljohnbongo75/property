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
        font-size: 14px;
        transition:all 0.2s linear;
    }
    #services .icon1:hover i{
        color:white;
    }
    
    #services .icon1 :hover{
    transform: translatex(10px);
    color:white;
}
#services .icon1{
    transition:all 0.2s linear;
}

    #services p i{
        color:#FFA920;
        font-size:14px;
        padding-right:5px;
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
    .footer-inner{
        display:flex;
        flex-wrap:wrap;
        justify-content:center;
    }
 
    @media only screen and (max-width: 768px) {
    .footer-inner{
        display:block;
        flex-wrap:wrap;
    }
}
    @media only screen and (max-width: 425px) {
    #services h4 {
   font-size: 19px;
}
.agent-widget-inner {
    margin: 35px 0;
}
.footer-inner{
    gap:10px;
    
}
    }
</style>
<footer id="main-footer" class="py-4 text-white">
        <section id="services" class="py-5  text-white">
        
                <div class="footer-inner">
                    <div class="col-md-6 col-lg-6 col-xl-2 ">
                        <h4>Estate Rental</h4>
                        <p class="icon1"><a href="#"><i class="fa-regular fa-envelope"></i>Home2brental@gmail.com</a></p>
                        <p class="icon1"><a href=""><i class="fa-solid fa-phone"></i>(972) 53-368-3527</a></p>
                        <p class="icon1"><a href=""><i class="fa-solid fa-mobile-button"></i>(732) 503-3216</a></p>
                        
                            
</div>
                    <div class="col-md-6 col-lg-6 col-xl-2">
                        <h4></i>Popular Locations</h4>
                        <p class="icon1"><a href="#"><i class="fa-solid fa-angle-right"></i>Jerusalem</a> </p> 
                        <p class="icon1"><a href="#"><i class="fa-solid fa-angle-right"></i>Tzefas </a></p> 
                        <p class="icon1"><a href="#"><i class="fa-solid fa-angle-right"></i>Teverya </a></p> 
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-2">
                        <h4></i>Support</h4>
                        <p class="icon1"><a href="#"><i class="fa-solid fa-angle-right"></i>Help Center</a> </p> 
                        <p class="icon1"><a href="#"><i class="fa-solid fa-angle-right"></i>Cancellation Options</a></p> 
                        <p class="icon1"><a href="#"><i class="fa-solid fa-angle-right"></i>Contact Us </a></p>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-2">
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