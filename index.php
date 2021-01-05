<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="include/style.css">
    <link rel="icon" href="include/images/wolfSewsLogo.png">
    <title>The Wolf Sews</title>
</head>
<body>


        <!-- Navigation Bar -->
        <header id="header1" class="header">
            <?php include "include/header.html" ?>
        </header>

        <div class="header" id="header2">
            <?php include "include/header.html" ?>
        </div>

        <!-- Burger Menu --> 
        <div id="burger">
            <div>
                <div id="closeNav">
                    <a href="javascript:void(0)" id="closeButton">x</a>
                </div>
                <div>
                    <a href="#about">About</a>
                </div>
                <div>
                    <a href="#services">Services</a>
                </div>
                <div>
                    <a href="#testimonials">Testimonials</a>
                </div>
                <div>
                    <a href="#contact">Contact</a>
                </div>
            </div>

        </div>


        <a href="javascript:void(0)" id="openButton" onclick="openNav()">☰</a>

<div id="pageWrap">
        <!-- Hero --> 
        <section id="hero">
            <div id="sizeBtn">
            <img src="include/images/button2.svg" class="logo" id="mobLogo">
                <h1>The Wolf Sews</h1>
            </div>
            <div>
                <h2>The Wolf Sews offers dressmaking,  alterations and custom beading services that are based on over 20 years experience 
                in formal and bridalwear.</h2>
            </div>
            <div class="callEmail"><button><a href= "mailto:email@email.com" target="_blank"><i class="fas fa-envelope"></i>Get a Quote</a></button> <button><a href="tel:123-456-7890"><i class="fas fa-phone"></i> Call Now</a> </button></div>
            
        </section>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="rgb(186, 241, 228)" fill-opacity="1" d="M0,128L20,149.3C40,171,80,213,120,197.3C160,181,200,107,240,90.7C280,75,320,117,360,112C400,107,440,53,480,42.7C520,32,560,64,600,106.7C640,149,680,203,720,202.7C760,203,800,149,840,117.3C880,85,920,75,960,85.3C1000,96,1040,128,1080,122.7C1120,117,1160,75,1200,69.3C1240,64,1280,96,1320,122.7C1360,149,1400,171,1420,181.3L1440,192L1440,0L1420,0C1400,0,1360,0,1320,0C1280,0,1240,0,1200,0C1160,0,1120,0,1080,0C1040,0,1000,0,960,0C920,0,880,0,840,0C800,0,760,0,720,0C680,0,640,0,600,0C560,0,520,0,480,0C440,0,400,0,360,0C320,0,280,0,240,0C200,0,160,0,120,0C80,0,40,0,20,0L0,0Z"></path></svg>

        <!-- About --> 
        <section id="about">
            <div id="aboutImage">
            </div>
            <div>
                <h3>About Us</h3>
                <p> Vivamus lectus orci, dapibus vitae leo porttitor, aliquet lacinia ipsum. Mauris auctor tortor ac lectus tincidunt 
                    gravida. Fusce a ipsum eget odio rutrum dapibus. Fusce sed ipsum justo. In vulputate tellus a tellus varius, ut 
                    rutrum enim tempus. Vivamus nec sem ullamcorper, finibus ante eu, cursus orci. Suspendisse egestas enim eget 
                    nulla hendrerit ultrices. Aenean diam massa, hendrerit a pellentesque quis, interdum sit amet nulla. Aenean et 
                    nisi magna. Maecenas facilisis eget nisl sit amet bibendum. Nunc iaculis ac arcu sit amet malesuada. Pellentesque
                    venenatis vestibulum rutrum. Duis leo neque, vulputate lobortis nisl sit amet, lobortis rhoncus urna. Quisque semper 
                    mauris non fermentum tincidunt. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                </p>
            </div>
        </section>


        <!-- Services --> 
        <section id="services">
            <div class="bottom">
                <h3>Services</h3>
            </div>
            <div id="service1" class="bottom">
                <div id="service1Top" class="top">
                    <i class="fas fa-info-circle"></i>
                    <div class="top-inner">   
                        <h4>Alterations</h4>
                        <p>Pellentesque venenatis vestibulum rutrum. Duis leo neque, vulputate lobortis nisl sit amet, lobortis rhoncus urna. </p>
                        <small>£5+ depending on size of alteration.</small>
                    </div>
                </div>    
            </div>
            <div id="service2" class="bottom">
                <div id="service2Top" class="top">  
                    <i class="fas fa-info-circle"></i>  
                    <div class="top-inner">   
                        <h4>Alterations</h4>
                        <p>Pellentesque venenatis vestibulum rutrum. Duis leo neque, vulputate lobortis nisl sit amet, lobortis rhoncus urna. </p>
                        <small>£5+ depending on size of alteration.</small>
                    </div>
                </div>
            </div>
            <div id="service3" class="bottom">
                <div id="service3Top" class="top">    
                    <i class="fas fa-info-circle"></i>
                    <div class="top-inner">   
                        <h4>Alterations</h4>
                        <p>Pellentesque venenatis vestibulum rutrum. Duis leo neque, vulputate lobortis nisl sit amet, lobortis rhoncus urna. </p>
                        <small>£5+ depending on size of alteration.</small>
                    </div>
                </div>
            </div>
            <div id="service4" class="bottom">
                <div id="service4Top" class="top">    
                    <i class="fas fa-info-circle"></i> 
                    <div class="top-inner">   
                        <h4>Alterations</h4>
                        <p>Pellentesque venenatis vestibulum rutrum. Duis leo neque, vulputate lobortis nisl sit amet, lobortis rhoncus urna. </p>
                        <small>£5+ depending on size of alteration.</small>
                    </div>
                </div>
            </div>
            <div id="service5" class="bottom">
                <div id="service5Top" class="top">    
                    <i class="fas fa-info-circle"></i>
                    <div class="top-inner">   
                        <h4>Alterations</h4>
                        <p>Pellentesque venenatis vestibulum rutrum. Duis leo neque, vulputate lobortis nisl sit amet, lobortis rhoncus urna. </p>
                        <small>£5+ depending on size of alteration.</small>
                    </div>
                </div>
            </div>
            <div class="callEmail"><button><a href= "mailto:email@email.com" target="_blank"><i class="fas fa-envelope"></i>Get a Quote</a></button> <button><a href="tel:123-456-7890"><i class="fas fa-phone"></i> Call Now</a> </button></div>
        </section>


        <!-- Testimonials --> 
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fa3c5a" fill-opacity="1" d="M0,224L20,213.3C40,203,80,181,120,149.3C160,117,200,75,240,58.7C280,43,320,53,360,90.7C400,128,440,192,480,213.3C520,235,560,213,600,192C640,171,680,149,720,128C760,107,800,85,840,90.7C880,96,920,128,960,122.7C1000,117,1040,75,1080,90.7C1120,107,1160,181,1200,202.7C1240,224,1280,192,1320,186.7C1360,181,1400,203,1420,213.3L1440,224L1440,320L1420,320C1400,320,1360,320,1320,320C1280,320,1240,320,1200,320C1160,320,1120,320,1080,320C1040,320,1000,320,960,320C920,320,880,320,840,320C800,320,760,320,720,320C680,320,640,320,600,320C560,320,520,320,480,320C440,320,400,320,360,320C320,320,280,320,240,320C200,320,160,320,120,320C80,320,40,320,20,320L0,320Z"></path></svg>
        <section id="testimonials"> 
                <div id="testimonialsInner">
                    <div class="quote"><i class="fas fa-quote-left"></i></div> 
                    <div id="name">Tilly Charles</div>
                    <div id="review">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tincidunt mi lobortis condimentum tristique. Maecenas vitae laoreet nibh, vitae ultricies quam. Quisque at tellus non eros porta tincidunt nec eget odio.</div>
                    <div class="quote"><i class="fas fa-quote-right"></i></div>
                </div>   
                <div class="callEmail" id="prevNext"><button id="prev"><i class="fas fa-arrow-left"></i>Previous</button> <button id="next">Next<i class="fas fa-arrow-right"></i></button></div>
        </section>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fa3c5a" fill-opacity="1" d="M0,64L20,96C40,128,80,192,120,208C160,224,200,192,240,170.7C280,149,320,139,360,144C400,149,440,171,480,186.7C520,203,560,213,600,181.3C640,149,680,75,720,80C760,85,800,171,840,186.7C880,203,920,149,960,154.7C1000,160,1040,224,1080,234.7C1120,245,1160,203,1200,176C1240,149,1280,139,1320,144C1360,149,1400,171,1420,181.3L1440,192L1440,0L1420,0C1400,0,1360,0,1320,0C1280,0,1240,0,1200,0C1160,0,1120,0,1080,0C1040,0,1000,0,960,0C920,0,880,0,840,0C800,0,760,0,720,0C680,0,640,0,600,0C560,0,520,0,480,0C440,0,400,0,360,0C320,0,280,0,240,0C200,0,160,0,120,0C80,0,40,0,20,0L0,0Z"></path></svg>


        <!-- Contact --> 
        <section id="contact">
            <div id="contactTitle"><h3>Contact</h3></div>
            <div id="contactInner">
                <div>
                    <div><i class="fas fa-home"></i></div>
                    <p>Address Line 1</p>
                    <p>Address Line 2</p>
                    <p>City</p>
                    <p>County</p>
                    <p>PC1 1CP</p>
                </div>
                <div>
                    <p><a href= "tel:123-456-7890"><i class="fas fa-phone"></i></a> 01456734654564</p>
                    <p><a href= "mailto:email@email.com"><i class="fas fa-envelope"></i></a> email@email.com</p>
                </div>
            </div>



        </section>



        <!-- Footer -->
        <footer>
            <?php include "include/footer.html" ?>
        </footer>
</div>

<script src="include/app.js"></script>
<script type="text/javascript">
//Get window size 
document.getElementById('sizeBtn').onclick = function() {
    alert(window.innerWidth);
  }

</script>
    
</body>
</html>