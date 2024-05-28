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
        padding:0 90px;
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
    #services .icon1{
        transition:all 0.2s linear;
    }
    #services .icon1:hover{
    transform: translatex(10px);
    color:white;
}
#services .icon1{
    transition:all 0.2s linear;
}
.footer-media{
    align-items:center;
    padding:0 15px;
    gap:20px;
    margin:20px 0;
}
.footer-media ul li i{
    font-size:25px;
    padding:0 10px;
    transition:all 0.2s linear;
    color:white;
}
.footer-media ul li i:hover{
    color:white;
}
.footer-media ul{
    padding:0;
}
.footer-media li {
    list-style:none;
}
#services .footer-media h4{
    font-size:16px;
}
.footer-logo{
    align-items:center;
    border-bottom:1px solid #9aa4af;
    padding-bottom:20px;
    display:flex;
}
.footer-logo img{
    width: 100%;
    max-width:110px;
    
}
.icon1 a{
    color:white;
    transitoin:all 0.2s linear;
    text-decoration:none;
}
.icon1 a:hover{
    color: #FFA920;
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
        padding-top:40px;
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
.footer-logo{
    display:block;
}
.footer-inner{
    gap:10px;
    
}
.footer-media{
    padding:0;  
}
footer#main-footer {
    /* margin-top: 40px; */
    background-color: black;
    padding: 0 10px !important;
}
    }
</style>
<footer id="main-footer" class="text-white">
        <section id="services" class="py-4  text-white">
           <div class="col-xl-12 footer-logo  justify-content-between">
            <div class="">
                <a href="{{route('index')}}"><img src="{{ asset('assets/img/logo7.png' ) }}"></a>
            </div>
            <div class="d-flex footer-media">
            <h4>Follow Us</h4>
                   <ul class="d-flex">
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-square-twitter"></i></a></li>
                   </ul>
            </div>
           
           </div>
                <div class="footer-inner">
                    <div class="col-md-6 col-lg-6 col-xl-3 ">
                    
                        <h4>Get In Touch</h4>
                        <p class="icon1"><a href="#"><i class="fa-regular fa-envelope"></i>Home2brental@gmail.com</a></p>
                        <p class="icon1"><a href=""><i class="fa-solid fa-phone"></i>(972) 53-368-3527</a></p>
                        <p class="icon1"><a href=""><i class="fa-solid fa-mobile-button"></i>(732) 503-3216</a></p>
                        
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <h4></i>Popular Locations</h4>
                        <p class="icon1"><a href="#"><i class="fa-solid fa-angle-right"></i>Jerusalem</a> </p> 
                        <p class="icon1"><a href="#"><i class="fa-solid fa-angle-right"></i>Tzefas </a></p> 
                        <p class="icon1"><a href="#"><i class="fa-solid fa-angle-right"></i>Teverya </a></p> 
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <h4></i>Support</h4>
                        <p class="icon1"><a href="#"><i class="fa-solid fa-angle-right"></i>Help Center</a> </p> 
                        <p class="icon1"><a href="#"><i class="fa-solid fa-angle-right"></i>Cancellation Options</a></p> 
                        <p class="icon1"><a href="#"><i class="fa-solid fa-angle-right"></i>Contact Us </a></p>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
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