<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- links -->

    <script src="https://kit.fontawesome.com/16f6ba35a2.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets\css\main.css">

</head>
<body>

    <!--#region Header -->
    <header>
        <nav class="py-3 px-4 d-flex justify-content-between align-items-center px-5">
            <div class="logo" role="button">
                <img src="./assets\img\logo.png" alt="Loadding">
            </div>
            <ul class="list-unstyled m-0 d-flex gap-5 float-end">
                <li><a class="nav-link nav-link-tranform" href="#">About me</a></li>
                <li><a class="nav-link nav-link-tranform" href="#">Education</a></li>
                <li><a class="nav-link nav-link-tranform" href="#">Skiles</a></li>
                <li><a class="nav-link nav-link-tranform" href="#">Projects</a></li>
                <li><a class="nav-link nav-link-tranform" href="#">Contact me</a></li>
            </ul>
        </nav>
        <div class="navigation">
            <div class="row align-items-center">
                <p>Hi I'm</p>
                <h1 class="text-center">Mohammed <span class="last-name">Khaled</span></h1> 
                <ul class="social list-unstyled d-flex gap-5 mt-4 justify-content-center">
                    <a href="https://www.linkedin.com/in/mohammed-khalied-3b7179222?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" class="fa-brands fa-linkedin-in social-icon social-tranform"></a>
                    <a href="https://www.facebook.com/profile.php?id=100004029163142&mibextid=eHce3h" class="fa-brands fa-facebook social-icon social-tranform"></a>
                    <a href="https://instagram.com/m._khal3d?utm_source=qr&igshid=MzNlNGNkZWQ4Mg==" class="fa-brands fa-instagram social-icon social-tranform"></i>
                    <a href="https://github.com/Mohammed-k77" class="fa-brands fa-github social-icon social-tranform"></a>
                </ul>
            </div>
        </div>
    </header>
    <main>
        <section class="about-me mt-5">
            <h1 class="text-center my-5">About me</h1>
            <div class="row py-4 px-4 mx-0 justify-content-center">
                <div class="col-11 rounded-4 p-5 shadow-lg">
                    <p class="text-center dispaly-2">Hello, I am Mohammed Khalid Mohammed Bin Hazem from Yemen,
                         Hadramout, Al-Mukalla. I am an ambitious young man working
                          in the field of web development, utilizing various technologies.
                           I am eager to share more about myself with you.
                        I possess experience in problem-solving, design, and database
                         management. I have successfully designed several projects in this field,
                          demonstrating my skills and passion for modern technologies. 
                          I am hopeful and enthusiastic about the opportunities that lie ahead.
                        Looking forward to discussing further details with you.</p>
                </div>
            </div>
        </section>
    </main>
    <footer>
        
    </footer>
<script src="./assets\lib\jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script>

    $(document).ready(function () {
        var icons = $('.social-icon');
            icons.each(function(index, icon) {
                setTimeout(function(){
                    $(icon).addClass('social-animate');
                    $(icon).removeClass('social-tranform');
                    $(icon).css('opacity','1');
                }, 500 * index); 
               
        });

        var navLinks = $('.nav-link');
        navLinks.each(function(index, link) {
                setTimeout(function(){
                    $(link).addClass('nav-link-animate');
                    $(link).removeClass('nav-link-tranform');
                    $(link).css('opacity','1');
                }, 500 * index); 
               
        });

        var hi = $('.navigation').find('p');
        var name = $('.navigation').find('h1');
        var logo = $('nav').find('.logo');
        $(hi).animate({ left: '0%' }, 500);
        $(hi).animate({ opacity: '1' },1);
        $(name).animate({ left: '0%' }, 500);
        $(name).animate({ opacity: '1' },1);
        $(logo).animate({ left: '0%' }, 500);
        $(logo).animate({ opacity: '1' },500);
    });
</script>
</body>
</html>