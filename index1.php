<?php
include("conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="png.png" type="image/x-icon"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/051a3a9955.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="lightslider.css">
    <script type="text/javascript" src="js/Jquery.js"></script>
    <!-- <script type="text/javascript" src="script.js"></script> -->
    <script type="text/javascript" src="js/lightslider.js"></script>
    <script src="js/script.js"></script>

    <title>Realme 8</title>
</head>
    <style>
    body{
    margin: 0;
    padding: 0;
    background-color: #161616;
}
html{
    scroll-behavior: smooth;
}
::-webkit-scrollbar{
    width: 7.5px;
}
::-webkit-scrollbar-track{
 background: #fff;
    border: 0px solid #fff;
 box-shadow: inset 0 0 2.5 2px rgba(0,0,0,0,0.5);
}
::-webkit-scrollbar-thumb{
background:#17d1ac;
/* padding: 15px; */
border-radius: 0%;
/* margin-top: 20px; */

}
ul{
    list-style: none;
}

a{
    text-decoration: none;
}
#main{
    width: 100%;
    height: 100vh;
    box-sizing: border-box;
    
    position: relative;
    
    background-color: #edf1fd;
}

nav{
    display: flex;
    justify-content: space-between;
    align-items: center;
    text-transform: uppercase;
    font-weight: 600;
    letter-spacing: 2px;
    font-family: calibri;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    box-sizing:border-box;
    padding: 10px 50px;
    background-color: #f4f7ff;
    box-shadow: 2px 2px 12px rgba(0,0,0,0.5);
    z-index: 1;
}
.menu{
    display: flex;
    
}
.menu li a{
    padding: 10px 15px;
    color: #6c707c;
    font-size: 12px;
}
.lang{
    color: #292929;
}
.logo{
    font-size: 25px;
    font-weight: bold;
    color: #292929;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.imgs{
    height: 50px;
    width: 50px;
}
.menu li a:hover,
.menu li a.active
{
    background-color: #292929;
    color: #fff !important;
    font-weight: 700;
    transition: all ease 0.4s;
    
}
.name{
    font-family: calibri;
    /* width: 500px; */
    position: absolute;
    left: 20%;
    top: 50%;
    transform: translate(-20%,-50%);
    display: flex;
    justify-content: space-evenly;
}
.name1{
    width: 500px;
    top: 50%;
}
.name p:nth-child(1)
{
    color: #17d1ac;
    font-size: 50px;
    text-transform: uppercase;
    /* font-weight: 700; */
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;

}
.name h1{
    font-family: 'Poppins', sans-serif;
        font-size: 40px;
    margin: 0px;
    letter-spacing: 3px;
    color: #292929;
    font-weight: 800;
    margin-top: -20px;
}
span{
    color: #17d1ac;
}
.details{
    font-family: 'Poppins', sans-serif;
    font-weight: 600;
    font-size: 16px;
}
.btn{
    width: 200px;
    height: 45px;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color:#292929 ;
    color: #fff;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    outline: none;
    letter-spacing: 2px;
    word-spacing: 2px;
    padding: 2px;
    /* box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.5); */
}
.btn:hover{
    background-color: #131313;
    transition: all ease 0.5s;
}
.social{
    position: absolute;
    left: 50px;
    bottom: 50px;
    display: flex;

}
.social a{
    margin: 6px 12px;
}
.social i{
    color: rgba(18, 17, 17, 0.4);
    font-size: 18px;
}
.social a:hover i{
    color: #17d1ac;
    transition: all ease 0.5s;
}
#about{
    width: 80%;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding:50px 5% 0px 5% ;
}
.about-text{
    font-family: calibri;
    width: 50%;
    
}
.about-text h1{
    font-size: 5rem;
    color: #17d1ac;
}
.about-text h2{
    font-size: 3rem;
    color: #ffffff;
    font-weight: 800;
    font-family: 'Poppins', sans-serif;
    text-transform: uppercase;
}
.about-text h1,h2{
    margin: 0px;
    padding: 0px;
}
.about-text p{
    font-size: 1.2rem;
    color: rgba(251, 251, 251, 0.9);
}
.about-text button{
    width: 180px;
    height: 40px;
    border-radius: 20px;
    border: none;
    outline: none;
    background-color: #17d1ac;
    /* color: #ffffff; */
    font-weight: 800;
    text-transform: uppercase;
    font-family: calibri;
}
button:hover{
    background-color: #fff;
    cursor: pointer;
    transition: all ease 0.5s;
}
#features{
    width: 100%;
    height: 100vh;
    font-family: calibri;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding-top: 40px;
    background-color: #edf1fd;
}
.s-heading h1{
    color: #151515;
    font-size: 3rem;
    margin: 0px;
    padding: 0px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    text-transform: uppercase;
}
.s-heading p{
    color: rgba(0, 0, 0, 0.3);
    font-size: 1rem;
    margin: 0px;
    padding: 0px;
}
.s-heading{
    text-align: center;
    margin: 20px 0px;
}
.s-box{
    background-color: #2b2b2b;
    width: 350px;
    height: 500px;
    margin: 20px;
    border-radius: 10px;
    overflow: hidden;
    position: relative;
    box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.1);

}
.s-b-container{
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    justify-items: center;
}

.s-b-img{
    width: 100%;
    height: 60%;
    object-fit: cover;
}
.camera, .battery, .sd{
    width: 350px;
    height: 250px;
}
.s-b-text{
    width: 100%;
    height: 30%;
    /* background-color: #1e1e1e; */
    display: flex;
    justify-content: center;
    align-items: center;
  
}
.s-b-text a{
    color: #fff;
    text-decoration: none;
    padding: 20px 20px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-size: 1.1rem;
    display: block;
    display: -webkit-box;
    max-width: 80%;
    -webkit-line-clamp: 4;
    overflow: hidden;
    text-overflow: ellipsis;
}
.s-type{
    font-style: calibri;
    color: #fff;
    background: #151515;
    padding: 10px 15px;
    position: absolute;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
    font-size: 18px;
    border-radius: 0px 0px 10px 10px;
    box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.2);
}
.s-box:hover{
    transform: translateY(-15px);
    transition: all ease 0.3s;
}
.s-b-text:hover{
    color: rgba(251, 251, 251, 0.5);
}
#preorder{
    width: 80%;
    height: 100vh;
    display: flex; 
    align-items: center;
    flex-direction: column;
    justify-content: center;
    padding:50px 5% 0px 5% ;
}
.pre-title{
    display: block;
    color: #fff;
    font-size: 4rem;
    /* text-align: center; */
    font-family: calibri;
    font-weight: 700;
    /* display: flex; */
    /* align-items: left; */
    /* justify-content: space-around; */
    text-transform: uppercase;
    word-spacing: 3px;
    letter-spacing: 3px;
    margin-top: 50px;
}
.preorder{
    display: flex;
    align-items: center;
    justify-content: space-evenly;
    margin-top: 30px;
}
.entries{
    border: 1px solid white;
    padding: 20px 20px;
    box-shadow: rgba(0, 0, 0, 0.5);
}
.foram{
    padding: 20px 20px;
    letter-spacing: 15px;

}
.foram input{
    background-color: #151515;
    border: none;
    color: #fff;
    border-bottom: 3px solid #fff;
    width: 500px;
    outline: none;
}
.foram i{
    font-size: 1.5rem;
    color: #ffffff;
    padding: 10px 5px;
}
.butn{
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    background: transparent;
    border: 1px solid darkturquoise;
    color: #fff;
    text-transform: uppercase;
    font-family: calibri;
    font-size: 1.1rem;
    font-weight: 700;
    width: 50%;
    cursor: pointer;
    height: 45px;
    
}
.butn0{
    padding: 20px 20px;
    
}
.butn:hover{
    background-color: #000;
    transition: all ease 0.5s;
}
#models{
    width: 100%;
    height: 100vh;
    display: flex;
    /* flex-direction: row; */
    align-items: center;
    justify-content: space-evenly;
    background-color: #ffffff;
}
.boxmain{
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    justify-items: center;
    grid-gap: 100px;
}
a{
    text-decoration: none;
}
.boxx{
    width: 350px;
    box-shadow: 2px 2px 20px rgba(0, 0, 0, 0.2);
    border-radius: 5px;
    /* overflow: hidden; */
    position: relative;
    /* left: 50%; */
    /* display: flex;
    align-items: center;
    justify-content: space-between; */
    /* top: 50%; */
    /* transform: translate(-50%,-50%); */
}
.type0{
    color: #fff;
}
#bokx{
    background-color: #151515;
}
.slide-img{
    height: 450px;
    position: relative;
}
.slide-img img{
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.detail-box{
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 20px;
    box-sizing: border-box;
    font-family: calibri;
    color: #fff;
    background-color: #1a1a1a;
}
.type{
    display: flex;
    flex-direction: column;

}
.type a{
    color: #fff;
    margin: 5px 0px;
    font-weight: 700;
    letter-spacing: 0.5px;
    padding-right: 8px;
    font-size: 1.3rem;
}
.type span{
    color: #17d1ac;
    font-weight: 700;
    letter-spacing: 0.5px;

}
.price{
    color: #17d1ac;
    font-weight: 600;
    font-size: 1.3rem;
    font-family: Arial, Helvetica, sans-serif;
    letter-spacing: 0.5px;
}
.overlay{
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    width: 100%;
    height: 100%;
    background-color: rgba(5, 218, 164, 0.555);
    display: flex;
    justify-content: center;
    align-items: center;
}
.buy-btn{
    width: 160px;
    height: 40px;
    justify-content: center;
    display: flex;
    align-items: center;
    background: #fff;
    color: #252525;
    font-weight: 600;
    font-family: calibri;
    letter-spacing: 1px;
    border-radius: 20px;
    box-shadow: 2px 2px 30px rgba(0, 0, 0, 0.2);
}
.buy-btn:hover{
    color: #fff;
    background-color: #151515;
    transition: all ease 0.3s;
}
.overlay{
    visibility: hidden;
}
.slide-img:hover .overlay{
    visibility: visible;
    transition: all ease 0.3s;
    cursor: pointer;
    animation: fade 0.5s forwards;
}
@keyframes fade{
    0%{
        opacity: 0;
    }
    100%{
        opacity: 1;
    }
}
#writeus{
    width: 100%;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #151515;
}
#writeus form{
    display: flex;
    width: 70%;
    height: 60vh;
    background-color: #1a1a1a;
    box-shadow: 2px 12px 20px rgba(0, 0, 0, 0.2);
    border: ipx solid rgba(255, 255, 255, 0.01);
}
.contact-left{
    width: 40%;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    /* justify-content: center; */
}
.contact-right{
    width: 60%;
    height: 100%;
    box-sizing: border-box;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    border-left: 1px solid rgba(255, 255, 255, 0.07);
}
.c-l-heading{
    font-family: calibri;
    color: #fff;
    font-size: 3rem;
    letter-spacing: 2px;
    font-weight: 400;
}
.f-email, .f-name{
    display: flex;
    flex-direction: column;
    font-family: calibri;
}
.f-email font,
.f-name font{
    color: #bfbfbf;
    font-size: 22px;

}
.f-email input,
.f-name input{
    height: 30px;
    width: 250px;
    border: none;
    outline: none;
    background-color: transparent;
    border-bottom: 1px solid #929292;
    color: #fff;
    margin: 10px 0px;
}
.f-email input::placeholder,
.f-name input::placeholder{
    opacity: 0.5;
    letter-spacing: 1px;
}
.f-email input:focus,
.f-name input:focus{
    border-bottom: 1px solid #17d1ac;
    transition: all ease 0.5s;
}
.message font{
    font-size: 18px;
    color: #4e4e4e;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
.message{
    margin: 20px;
    display: flex;
    flex-direction: column;
}
.contact-right textarea{
    width: 100%   !important;
    height: 320px !important;
    border: none;
    outline: none;
    background-color: transparent;
    box-sizing: border-box;
    color: #ebebeb;
    font-size: 16px;

}
.contact-right textarea::placeholder{
    color: #ebebeb;
    font-size: 18px;
    letter-spacing: 2px;
    font-family: calibri;

}
.contact-right button{
    width:100%;
    height:50px;
    background-color: #1ed98b;
    font-weight: bold;
    outline: none;
    border: none;
    margin: 0px;
    color: #1b1b1b;
    font-size: 14px;
    text-transform: uppercase;
    letter-spacing: 2px;
}
.boxx:hover{
transform: translateY(-30px);
transition: all ease 0.5s;
}
#footer{
    width: 100%;
    height: 30vh;
    background-color: #1a1a1a;
}
.footer-title{
    display: flex;
    align-items: center;
    justify-content: center;
    /* text-align: center; */
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    color: #fff;
    font-size: 1.8rem;
    text-transform: uppercase;
    padding: 10x 10px 3px 0px;
}
.footer-text{
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    /* text-align: center; */
    font-family: 'Poppins', sans-serif;
    font-size: 1.5rem;
    font-weight: 700;
    text-transform: uppercase;
    padding: 0px 5px;
    letter-spacing: 2px;
}
.footer-links{
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    /* margin-left: 30px;
    margin-right: 30px; */
    font-size: 1.5rem;
    color: grey;
    
}
.footer-links i{
    padding-right: 40px;
    padding-left: 40px;
}
.footer-links i:hover{
    color: #17d1ac;
    transition: all ease 0.5s;
}
.footer-copyright{
    bottom: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    padding-top: 30px;
    color: #17d1ac;
    font-family: calibri;
    text-transform: uppercase;
    font-weight: 600;
    word-spacing: 2px;
    letter-spacing: 2px;
}
@media(max-width:1173px){
    .s-b-container{
        grid-template-columns: 1fr 1fr;
    }
}
.toggle{
    display: none;
}
@media(max-width:1000px){
    .toggle{
        display: block;
    }
    .toggle:before{
            content: '\f0c9';
            font-family: fontAwesome;
            line-height: 0px;
            margin-left: -45px;
    }
    .toggle.active:before{
        content: '\f00d';

    }
    nav{
        padding: 10px 30px;
    }
    nav ul{
        position: absolute;
        width: 100%;
        height: auto;
        box-sizing: border-box;
        background-color: #0f0f0f;
        top:50px;
        left: 0;
        transition: 0.5s;
        overflow: hidden;
        border: 3px solid #1f1f1f;
        display: none !important;
        margin: 0;
        padding: 0;
    }
    nav ul li a{
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        width: 100%;
        height: 50px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0px !important;
        padding: 0px !important;
    }
    .active-menu{
        display: block !important;
        transition: all ease 0.5s;
    }
}
@media(max-width:998px){
    .pre-image{
        display: none;
    }
}
@media(max-width:1281px){
    .boxmain{
        grid-gap: 20px;
    }
}
@media(max-width:1114px){
    .boxmain{
        grid-template-columns: 1fr 1fr;
    }
}
@media(max-width:998px){
    #writeus form{
        width: 90%;
    }
}
@media(max-width:1231px){
    #about{
        flex-direction: column-reverse;
        justify-content: center;
    }
    .about-text{
        width: 80%;
    }
}</style>
<body>
<section id="main">
    <nav>
        <a href="#" class="logo"><img src="png.png" class="imgs">REALME 8</a>
    <div class="toggle"></div>
    <ul class="menu">
        <li><a href="#" class="active">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#features">Features</a></li>
        <li><a href="#preorder">Pre-Order</a></li>
        <li><a href="#models">Models</a></li>
        <li><a href="#writeus">Write Us</a></li>
    </ul>

    <a href="#" class="lang">En</a>
</nav>
<div class="name">
    <div><img src="img.png" class="image"></div>
    <div class="name1"><p>Realme 8</p>
    <h1>Dare <span>To</span> Leap!</h1>
    <p class="details">Bringing You The Latest <span>Realme 8 Pro</span> For The First Time. Checkout Latest Features With Humoungous Battery Life</p>
    <a href="https://www.amazon.in/Realme-Narzo-White-Knight-Storage/dp/B08JZ8G8BW/ref=sr_1_1?dchild=1&keywords=realme+8+pro&qid=1602565203&s=electronics&sr=1-1" target="_blank" class="btn"> <i class="fa fa-amazon"></i> View at Amazon</a>
</div>


</div>
<div class="social">
    <a href="#"><i class="fa fa-twitter"></i></a>
    <a href="#"><i class="fa fa-facebook-f"></i></a>
    <a href="#"><i class="fa fa-instagram"></i></a>
    <a href="#"><i class="fa fa-youtube"></i></a>
</div>

</section>
<section id="about">
    <div class="about-text">
        <h1>REALME 8 PRO</h1>
        <h2>Dare <span>To</span> Leap</h2>
        <p>The upcoming Realme phone series will have up to 4,500mAh battery and have around 8mm thick build.

            The new Realme series is said to be either Realme 8 or a new generation series. Some reports also hint at a new Realme X family or an extension of the current popular Realme X3 series. The company first introduced Realme 65W SuperDart charging technology with Realme X50 Pro 5G.</p>
            <button>Know More</button>
    </div>
    <div class="about-model">
        <img src="xx.png">
    </div>
    </section>
</section>
<section id="features">
<div class="s-heading">
    <h1>Features</h1>
    <p>With Latest Updates Here is Realme 8  Pro. Check it Out!</p>
</div>
<div class="s-b-container">
    <div class="s-box">
        <div class="s-b-img">
            <div class="s-type">64+8+5+5 MP Cameras</div>
            <img src="camera.jpg" class="camera">
        </div>
        <div class="s-b-text">
            <a href="#">The Realme 8 Pro is the best Realme phone in the market that offers great features for gaming, viewing, or even daily smartphone tasks. The 6.4-inch Super AMOLED display and the 64MP quad-camera setup, combined with the Snapdragon 720G octa-core processor make it one of the best choices in the market.</a>
        </div>
    </div>
    <div class="s-box">
        <div class="s-b-img">
            <div class="s-type">Battery Lyf</div>
            <img src="battery.jpg" class="battery">
        </div>
        <div class="s-b-text">
            <a href="#">Its 4300mAh battery that lasts for an entire day on medium usage. Coming to the battery, Realme phones have never disappointed me and the 8 is no different. It has a 4300mAh battery that lasts for an entire day on medium usage.
            </a>
        </div>
    </div>
    <div class="s-box">
        <div class="s-b-img">
            <div class="s-type">Storage</div>
            <img src="card.jpg" class="sd">
        </div>
        <div class="s-b-text">
            <a href="#">Best Realme Phones with expandable storage- Realme always impresses with its design, performance, and storage.  Realme phones are good in camera, excellent in performance, and has powerful battery capacity. It becomes quite confusing when you have to chose best Realme phone with expandable storage. </a>
        </div>
    </div>
</div>
</section>

<section id="preorder">
    <div class="pre-title">Book <span> Realme 8 Pro  </span>Now...</div>
    <div class="preorder">
<div class="pre-image">
    <img src="preorder.png">
</div>
<div class="entries">
   <form>
       <div class="foram">
<i class="fa fa-user"></i><input type="text" placeholder=" Name" required name="Name">
</div>
       <div class="foram">
<i class="fa fa-phone"></i><input type="number" placeholder="Telephone Number" required name="phone">
</div>
       <div class="foram">
<i class="fa fa-envelope-o"></i><input type="email" placeholder="Email Address" required name="email">
</div>
<div class="butn0">
    <input type="submit" value="book now" class="butn" name="submit">
</div>
   </form>
</div>
</div>
</section>
<section id="models">
 <div class="boxmain">
            <div class="boxx">
                <div class="slide-img">
            <img src="phone1.jpg" alt="error">
            <div class="overlay">
                <a href="https://www.amazon.in/Redmi-Note-Pro-Champagne-Storage/dp/B08696XB45/ref=asc_df_B08696XB45/?tag=googleshopdes-21&linkCode=df0&hvadid=397008109417&hvpos=&hvnetw=g&hvrand=3287567782582223046&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=9040183&hvtargid=pla-957707983178&psc=1&ext_vrnc=hi" class="buy-btn">Check More</a>
            </div>
                </div>
                <div class="detail-box">
            <div class="type">
               <a href="https://www.amazon.in/Redmi-Note-Pro-Champagne-Storage/dp/B08696XB45/ref=asc_df_B08696XB45/?tag=googleshopdes-21&linkCode=df0&hvadid=397008109417&hvpos=&hvnetw=g&hvrand=3287567782582223046&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=9040183&hvtargid=pla-957707983178&psc=1&ext_vrnc=hi" class="type0">CHICK GOLDEN</a>
               <span>REALME 8 PRO</span>
            </div>
            <a href="https://www.amazon.in/Redmi-Note-Pro-Champagne-Storage/dp/B08696XB45/ref=asc_df_B08696XB45/?tag=googleshopdes-21&linkCode=df0&hvadid=397008109417&hvpos=&hvnetw=g&hvrand=3287567782582223046&hvpone=&hvptwo=&hvqmt=&hvdev=c&hvdvcmdl=&hvlocint=&hvlocphy=9040183&hvtargid=pla-957707983178&psc=1&ext_vrnc=hi" class="price">$490</a>
                </div>
            </div>

            <div class="boxx" id="bokx">
                <div class="slide-img">
            <img src="phone5.png" alt="error">
            <div class="overlay">
                <a href="https://www.flipkart.com/vivo-x50-pro-alpha-grey-256-gb/p/itmdf8a4496a52e7?gclid=CjwKCAjww5r8BRB6EiwArcckC-HCeTsYEbXQGk5jvvCmuE0E3R-BWfleq1jR5MCUTYqFMFHZtx_RwRoCNrcQAvD_BwE&pid=MOBFTGKRGHTZZPPQ&lid=LSTMOBFTGKRGHTZZPPQIJZBVY&marketplace=FLIPKART&cmpid=content_mobile_234989660_g_8965229628_gmc_pla&tgi=sem,1,G,11214002,g,search,,146618361543,,,,c,,,,,,,&ef_id=CjwKCAjww5r8BRB6EiwArcckC-HCeTsYEbXQGk5jvvCmuE0E3R-BWfleq1jR5MCUTYqFMFHZtx_RwRoCNrcQAvD_BwE:G:s&s_kwcid=AL!739!3!146618361543!!!g!307944879278!"
                 class="buy-btn">Check More</a>
            </div>
                </div>
                <div class="detail-box">
            <div class="type">
               <a href="https://www.flipkart.com/vivo-x50-pro-alpha-grey-256-gb/p/itmdf8a4496a52e7?gclid=CjwKCAjww5r8BRB6EiwArcckC-HCeTsYEbXQGk5jvvCmuE0E3R-BWfleq1jR5MCUTYqFMFHZtx_RwRoCNrcQAvD_BwE&pid=MOBFTGKRGHTZZPPQ&lid=LSTMOBFTGKRGHTZZPPQIJZBVY&marketplace=FLIPKART&cmpid=content_mobile_234989660_g_8965229628_gmc_pla&tgi=sem,1,G,11214002,g,search,,146618361543,,,,c,,,,,,,&ef_id=CjwKCAjww5r8BRB6EiwArcckC-HCeTsYEbXQGk5jvvCmuE0E3R-BWfleq1jR5MCUTYqFMFHZtx_RwRoCNrcQAvD_BwE:G:s&s_kwcid=AL!739!3!146618361543!!!g!307944879278!" class="type0">DIMMISH BLUE</a>
               <span>REALME 8 PRO</span>
            </div>
            <a href="https://www.flipkart.com/vivo-x50-pro-alpha-grey-256-gb/p/itmdf8a4496a52e7?gclid=CjwKCAjww5r8BRB6EiwArcckC-HCeTsYEbXQGk5jvvCmuE0E3R-BWfleq1jR5MCUTYqFMFHZtx_RwRoCNrcQAvD_BwE&pid=MOBFTGKRGHTZZPPQ&lid=LSTMOBFTGKRGHTZZPPQIJZBVY&marketplace=FLIPKART&cmpid=content_mobile_234989660_g_8965229628_gmc_pla&tgi=sem,1,G,11214002,g,search,,146618361543,,,,c,,,,,,,&ef_id=CjwKCAjww5r8BRB6EiwArcckC-HCeTsYEbXQGk5jvvCmuE0E3R-BWfleq1jR5MCUTYqFMFHZtx_RwRoCNrcQAvD_BwE:G:s&s_kwcid=AL!739!3!146618361543!!!g!307944879278!" class="price">$430</a>
                </div>
            </div>

            <div class="boxx">
                <div class="slide-img">
            <img src="phone3.png" alt="error">
            <div class="overlay">
                <a href="https://www.amazon.in/Dazzling-Storage-Additional-Exchange-Offers/dp/B07SDPJ4XJ/ref=sr_1_4?dchild=1&keywords=mobile&qid=1602666373&sr=8-4" class="buy-btn">Check More</a>
            </div>
                </div>
                <div class="detail-box">
            <div class="type" >
               <a href="https://www.amazon.in/Dazzling-Storage-Additional-Exchange-Offers/dp/B07SDPJ4XJ/ref=sr_1_4?dchild=1&keywords=mobile&qid=1602666373&sr=8-4" class="type0">MATT BLACK</a>
               <span>REALME 8 PRO</span>
            </div>
            <a href="https://www.amazon.in/Dazzling-Storage-Additional-Exchange-Offers/dp/B07SDPJ4XJ/ref=sr_1_4?dchild=1&keywords=mobile&qid=1602666373&sr=8-4" class="price">$470</a>
                </div>
            </div>


        </div>
</section>
<section id="writeus">
<form>
    <div class="contact-left">
        <h1 class="c-l-heading"><font style="border-bottom: 3px solid #1ed98b">Writ</font>e Us</h1>
        <div class="f-name">
        <font>Name</font>
        <input type="text" placeholder="Full Name" required>
    </div>
    <div class="f-email">
        <font>Email</font>
        <input type="email" placeholder="Email Address" required>
    </div>
</div>

</div>
    <div class="contact-right">
        <div class="message">
            <font>Message</font>
            <textarea name="message" rows="5" cols="20" placeholder="Write Here..."></textarea>

        </div>
        <button>Submit</button>
    </div>
</form>
</section>
<section id="footer">
    <div class="footer-title" >
      <img src="png.png" class="imgs">
        Realme
    </div>
    <div class="footer-text">
    <p>Dare <span>To</span> Leap!</p>
</div>
<div class="footer-links">
    <i class="fa fa-facebook-f"></i>
    <i class="fa fa-youtube"></i>
    <i class="fa fa-instagram"></i>
    <i class="fa fa-twitter"></i>
</div>
<div class="footer-copyright">
    All Rights Reserved| REALME|&#169; 2020
</div>

</section>

<script type="text/javascript" src="js/Jquery.js"></script>

<script type="text/javascript">
$(document).ready(function(){
    $('.toggle').click(function(){
        $('.toggle').toggleClass('active')
        $('nav ul').toggleClass('active-menu')
    })
})
$(document).ready(function() {
    $('#autoWidth').lightSlider({
        autoWidth:true,
        loop:true,
        onSliderLoad: function() {
            $('#autoWidth').removeClass('cS-hidden');
        }
    });
  });

</script>
</body>
</html>
<?php
$enterna = $_GET['Name'];
$enterph = $_GET['phone'];
$enterem = $_GET['email'];

$query= "insert into firsttable values('$enterna' , '$enterph' , '$enterem')";
$data= mysqli_query($con,$query);

if($data)
{
    echo "done";
}
else{
    echo "failed";
}
?>