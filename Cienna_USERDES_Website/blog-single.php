<!DOCTYPE html>
<html lang="en">

<head>
  <!-- meta -->
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Reflections</title>
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i|Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="lib/hover/hover.min.css" rel="stylesheet">

  <!-- Blog Stylesheet File -->
  <link href="css/blog.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Responsive css -->
  <link href="css/responsive.css" rel="stylesheet">

  <!-- Favicon -->
  <link rel="shortcut icon" href="images/favicon.png">

  <style>
    #more {display: none;}
    #more2 {display: none;}
    #more3 {display: none;}
    #more4 {display: none;}
    #more5 {display: none;}
    #more6 {display: none;}

/*=======================================================
  Menu
=======================================================*/
    #more {display: none;}
    #more2 {display: none;}
    #more3 {display: none;}
    #more4 {display: none;}

body.border-dark .menu-btn > .lines > span{
  background:#FF7F50;
  position: fixed;
} 
.menu-btn > .lines > .l2{
  margin:6px 0;
}
.menu{
  position:fixed;
  background:#BDB76B;
  top:0;
  right:0;
  height:100%;
  width:0;
  -webkit-transition:width .6s cubic-bezier(.785,.135,.15,.86);
  -moz-transition:width .6s cubic-bezier(.785,.135,.15,.86);
  transition:width .6s cubic-bezier(.785,.135,.15,.86);
  overflow:hidden;
}
.menu:hover,
.menu-btn:hover + .menu{
  width:300px;
  position: fixed;
}
.menu > .inner{
  height:100%;
  width:300px;
  position:absolute;
  right:0;
  top:0;
}
.menu-items{
  margin:0;
  padding:0;
  list-style:none;
  position:absolute;
  width:100%;
  top:50%;
  left:0;
  -webkit-transform:translateY(-50%);
  -moz-transform:translateY(-50%);
  -ms-transform:translateY(-50%);
  -o-transform:translateY(-50%);
  transform:translateY(-50%);
  text-align:center;
}
.menu-items > li > a{
  color:#FF7F50;
  color:rgba(255,255,255,.6);
  font-size:14px;
  font-weight:700;
  text-decoration:none;
  text-transform:uppercase;
  letter-spacing:2px;
  padding:10px 0;
  margin:2px 0;
  display:block;
  -webkit-transition:color .3s cubic-bezier(.785,.135,.15,.86);
  -moz-transition:color .3s cubic-bezier(.785,.135,.15,.86);
  transition:color .3s cubic-bezier(.785,.135,.15,.86);
}
.menu-items > li > a:hover{
  color:#FF7F50;
}
.main-content > .page-border{
  position:absolute;
  border:solid 1px #FF7F50;
  border-color:rgba(255,255,255,.4);
  z-index:999;
  -webkit-transition:border-color 2.5s cubic-bezier(.785,.135,.15,.86);
  -moz-transition:border-color 2.5s cubic-bezier(.785,.135,.15,.86);
  transition:border-color 2.5s cubic-bezier(.785,.135,.15,.86);
}
body.border-dark .main-content > .page-border{
  border-color:#FF7F50;
}
.main-content > .border-top,
.main-content > .border-bottom{
  height:7px;
  left:20px;
  right:20px;
}
.main-content > .border-top{
  top:14px;
}
.main-content > .border-bottom{
  bottom:14px;
}
.main-content > .border-left,
.main-content > .border-right{
  width:7px;
  top:20px;
  bottom:20px;
}
.main-content > .border-right{
  right:14px;
}
.main-content > .border-left{
  left:14px;
}


/*=======================================================
  About Section
=======================================================*/
.menu-btn{
  font-size:0;
  display:block;
  position:fixed;
  top:20px;
  right:20px;
  padding:25px;
  z-index:499;
}
.menu-btn > .lines{
  display:block;
  width:36px;
}
.menu-btn > .lines > span{
  display:block;
  width:100%;
  height:3px;
  background:#FF7F50;

}
  </style>

</head>

<body>
   
      
      <!--=====================================================
        Menu Button
      =====================================================-->
      <div class='menu-btn' >
        <span class='lines' >
          <span class='l1' ></span>
          <span class='l2' ></span>
          <span class='l3' ></span>
        </span>
      </div>
      
      
      <!--=====================================================
        Menu
      =====================================================-->
      <div class='menu' >
        <div class='inner' >
          <ul class='menu-items' >
            <li>
              <a href='#r1' class='smoothScroll'>
                R1: First Week of USERDES
              </a>
            </li>
            
            <li>
              <a href='#r2' class='smoothScroll'>
                R2:Need Finding and Paper Prototyping
              </a>
            </li>
            
            <li>
              <a href='#r3' class='smoothScroll'>
                R3: First Web Application using Github and Heroku
              </a>
            </li>
            
            <li>
              <a href='#r4' class='smoothScroll'>
                R4: Userinterface - Worst UI Practice
              </a>
            </li>
            
            
            <li>
              <a href='#r5' class='smoothScroll'>
                R5: SOCIT Fest
              </a>
            </li>
            <li>
              <a href='#r6' class='smoothScroll'>
                R6: First Half of USERDES
              </a>
            </li>
			
			<li>
              <a href="blog-single2.html" class="smoothScroll">
                Activities
              </a>
            </li>
			
			<li>
              <a href="blog-single3.html" class="smoothScroll">
                Quizzes and Laboratory Works
              </a>
            </li>
			
             <li>
              <a href="index.html" class="smoothScroll">
                Home
              </a>
            </li>
            
            
          </ul>
        </div>
      </div>
      
      <div class='animation-block' ></div>

      </div>
    </div>
  </nav>


        <!-- start section main content -->
        <div id="r1">
     <div class="main-content paddsection">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
          <div class="row">
            <div class="container-main single-main">
              <div class="col-md-12">
                <div class="block-main mb-30">
                  <img src="images/2i.jpg" width="728" class="img-responsive" alt="reviews2">
                  <div class="content-main single-post padDiv">
                    <div class="journal-txt">
                      <h3>First Week of USERDES</h3>
                    </div>
                    <div class="post-meta">
                      <ul class="list-unstyled mb-0">
                        <li class="date">date:<a href="#">July 16, 2019</a></li>
                      </ul>
                    </div>
                    <div>

                    <p class="mb-30">Throughout the first week of USERDES class, it is the first time that I was introduced to Trello. I
                        was amazed to know that there was a collaborative site like Trello. It was my first time to use this kind of
                        site. Working with Trello made me realized that collaboration and cooperation will make tasks easier
                        and faster.</p>
                        <span id="dots"></span> <span id="more"> 

                    <p class="mb-30">With the help of others, I was able to get some ideas that I can improve and make the work
                        better. But with one’s negligence, the work can be ruined. So, I realized that working with teams, one
                        should be careful in his/her action so that wrong doings can be avoided. The activities that we’ve done
                        through the week helped me improved and enhance my writing skills. The first activity helped me
                        expressed my self more. It also helped me know my classmates more. The lessons and activities
                        encouraged me to explore more ideas and improve my skills. I realized that I’m enjoying this subject
                        since our professor will let us do what we want without restricting us with some rules (example: “your
                        work should be this or that…”). I was amazed in myself because I cannot believe that I am able to find
                        more ideas or solutions better than before.</p>
                    
                    <p class="mb-30">I’m hoping that this class will help me to know myself better and help me know what I truly
                        desire. I am also looking forward that this class will say collaborative and enjoyable. I am having fun with
                        this subject so far.</p></span>
                        <button onclick="myFunction()" id="myBtn"> Read More </button>
                        <script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>
             </div>
                  </div>
                </div>
              </div>
            </div>

<div id="r2">
<div class="main-content paddsection">
    <div class="container">

          <div class="row">
            <div class="container-main single-main">
              <div class="col-md-12">
                <div class="block-main mb-30">
                  <img src="images/2.jpg" width="728" class="img-responsive" alt="reviews2">
                  <div class="content-main single-post padDiv">
                    <div class="journal-txt">
                      <h3>Need Finding and Paper Prototyping</h3>
                    </div>
                    <div class="post-meta">
                      <ul class="list-unstyled mb-0">
                        <li class="date">date:<a href="#">July 16, 2019</a></li>
                      </ul>
                    </div>
                    <p class="mb-30">During this second week, we were tasked create and design an application that will provide solutions on relevant problems. </p> 
                     <span id="dots2"></span> <span id="more2">  

                    <p class="mb-30">In doing need finding, my groupmates and I thought of many problems that we want to aid through an application. I realized that we should focus on the things that are closer to us. I mean focus on the problems that we know we can provide solution. So, we came up with a problem that we want to provide. A problem that we, as a student, experienced in our school life. I'm overwhelmed with my groupmates because they are interested and willing to cooperate with each other. They are also open-minded with the different ideas that we gathered. I am grateful that my groupmates and I agreed on the same idea that we had. We didn't encounter any miscommunication since we are all ears when someone is discussing his/her idea. </p>
                    
                    <p class="mb-30">With what happened this week, I didn't find anything hard since it's a collaborative work and I find it easy working with others than working alone. I hope that my groupmates stay interested in our project as the time goes by.</p></span>
                    <button onclick="myFunction2()" id="myBtn2"> Read More </button>
                    <script>
  function myFunction2() {
  var dots2 = document.getElementById("dots2");
  var moreText2 = document.getElementById("more2");
  var btnText2 = document.getElementById("myBtn2");

  if (dots2.style.display === "none") {
    dots2.style.display = "inline";
    btnText2.innerHTML = "Read more"; 
    moreText2.style.display = "none";
  } else {
    dots2.style.display = "none";
    btnText2.innerHTML = "Read less"; 
    moreText2.style.display = "inline";
  }
}
</script>
                        
                  </div>
                </div>
              </div>
</div>

<div id="r3">
<div class="main-content paddsection">
    <div class="container">

          <div class="row">
            <div class="container-main single-main">
              <div class="col-md-12">
                <div class="block-main mb-30">
                  <img src="images/3.jpg" width="728" class="img-responsive" alt="reviews2">
                  <div class="content-main single-post padDiv">
                    <div class="journal-txt">
                      <h3>First Web Application using Github and Heroku</h3>
                    </div>
                    <div class="post-meta">
                      <ul class="list-unstyled mb-0">
                        <li class="date">date:<a href="#">July 29, 2019</a></li>
                      </ul>
                    </div>
                    <p class="mb-30">Making my first web application isn’t hard at all since I already have knowledge and experiences on basic html during my senior high school days. I enjoy doing html because I find it easier than any other programming languages.  </p>
                    <span id="dots3"></span> <span id="more3"> 
                    <p class="mb-30">I found out that the software Sublime text is much easier to use when making a html application than doing it in the notepad.  I love how sophisticated it is and the interface is better than any other application. When it comes to creating a repository on Github, I think it was very useful and convenient for a user. You can view your repositories anytime and anywhere. Creating a repository was easy since it is not my first time in using it, but it was my first time to use Heroku. At first, I thought it was hard, but you will only need to connect it to your Github repository so that you can view your application. I love the features of Github in which you can view, edit or delete in your repository. </p>
                    
                    <p class="mb-30">I think Github and Heroku were an application that everyone should know because it is a great help specially when speaking in terms of storage. You do not need to bring your flash drive or device (in which where your application was stored) whenever you want to view or edit your application. These applications are great way to lessen the hassle of the users.</p> </span>
                        <button onclick="myFunction3()" id="myBtn3"> Read More </button>
                    <script>
  function myFunction3() {
  var dots3 = document.getElementById("dots3");
  var moreText3 = document.getElementById("more3");
  var btnText3 = document.getElementById("myBtn3");

  if (dots3.style.display === "none") {
    dots3.style.display = "inline";
    btnText3.innerHTML = "Read more"; 
    moreText3.style.display = "none";
  } else {
    dots3.style.display = "none";
    btnText3.innerHTML = "Read less"; 
    moreText3.style.display = "inline";
  }
}
</script>
                  </div>
                </div>
              </div>
            </div>

<div id="r4">
<div class="main-content paddsection">
    <div class="container">

          <div class="row">
            <div class="container-main single-main">
              <div class="col-md-12">
                <div class="block-main mb-30">
                  <img src="images/4.jpg" width="728" class="img-responsive" alt="reviews2">
                  <div class="content-main single-post padDiv">
                    <div class="journal-txt">
                      <h3>Userinterface - Worst UI Practice</h3>
                    </div>
                    <div class="post-meta">
                      <ul class="list-unstyled mb-0">
                        <li class="date">date:<a href="#">July 29, 2019</a></li>
                      </ul>
                    </div>
                    <p class="mb-30">Creating a user interface gave me a hard time since we still didn’t finalize what our application is. I find it hard because I still don’t have any idea on what it will looked like even though some of the features where given to us. </p>
                    <span id="dots4"></span> <span id="more4"> 
                    <p class="mb-30">It is hard for me to create a user interface without a proper knowledge on what application we will be having because I don’t know what the user needs. I still don’t have an idea on what other features that we will be needing since we were not still sure on the target audiences that we want to help. I think it is very important to know first the need of your target audience in able for you to create an effective user interface that users can use without them having a hard time. Though I enjoy making a user interface since I am freely to play with colors and what other buttons that I want. I think it also helped me to visualize what out application will look like and how it will work for the users. </p>
                    
                    <p class="mb-30">Making a user interface maybe hard at first but I think it will be easier when you know exactly what the needs of the users and how you want your application can help them. I hope that these days we can create an effective user interface for our target audiences.</p></span>
                    <button onclick="myFunction4()" id="myBtn4"> Read More </button>
                    <script>
  function myFunction4() {
  var dots4 = document.getElementById("dots4");
  var moreText4 = document.getElementById("more4");
  var btnText4 = document.getElementById("myBtn4");

  if (dots4.style.display === "none") {
    dots4.style.display = "inline";
    btnText4.innerHTML = "Read more"; 
    moreText4.style.display = "none";
  } else {
    dots4.style.display = "none";
    btnText4.innerHTML = "Read less"; 
    moreText4.style.display = "inline";
  }
}
</script>
                  </div>
                </div>
              </div>
            </div>

  <div id="r5">     
<div class="main-content paddsection">
    <div class="container">

          <div class="row">
            <div class="container-main single-main">
              <div class="col-md-12">
                <div class="block-main mb-30">
                  <img src="images/blog-post-1.jpg" width="728" class="img-responsive" alt="reviews2">
                  <div class="content-main single-post padDiv">
                    <div class="journal-txt">
                      <h3>SOCIT Fest</h3>
                    </div>
                    <div class="post-meta">
                      <ul class="list-unstyled mb-0">
                        <li class="date">date:<a href="#">Aug 23, 2019</a></li>
                      </ul>
                    </div>
                    <p class="mb-30">Time had been passing through, it feels that yesterday was just the first day of classes for the school year 2019 – 2020. SOCIT Fest just started and ended a week ago. It was an exciting week for us, SOCIT students, since the event is for us. </p>
                    <span id="dots5"></span> <span id="more5">
                    <p class="mb-30">As a student who doesn’t want to commit other than pure academics, I only allowed myself to become a participant in the events of SOCIT Fest. I joined the UI Design contest and luckily, I won the second place. I also went to the seminar/talks of the different speakers. It’s an honor to be part of the audience of the seminars/talks because the speakers shared their knowledge and experiences that I can use in future. Though I reflect multiple times on joining an organization as an officer, I decided whole heartedly that I will be a part of an organization as a member and not an officer. I don’t want to get my plate full. I want to focus on my studies and enjoy the way I want to. As of now I am a member of APC JPCS and APC MSC. I’m still battling in my head when will I consider joining as an officer. I enjoyed all the activities but what I like and enjoyed the most is the SOCIT Night. It is a great way to release the stresses that I had and my friends had (they got LOT of stress since they were the organizers). The organizers invited outside the school bands which makes the party more exciting. I really enjoyed the SOCIT Fest because I got to stepped outside my comfort zone and I think it’s a good thing.
          </p>           
          <p class="mb-30">For the SOCIT Fest 2020, I expect to have a lot more activities and talks/seminars for the students that they can enjoy and use for their future. I think it will be fun to have an interactive activity that will require and practice team work. I find team work very essential since the work place always require a good team work.</p></span>
                    <button onclick="myFunction5()" id="myBtn5"> Read More </button>
                    <script>
  function myFunction5() {
  var dots5 = document.getElementById("dots5");
  var moreText5 = document.getElementById("more5");
  var btnText5 = document.getElementById("myBtn5");

  if (dots5.style.display === "none") {
    dots5.style.display = "inline";
    btnText5.innerHTML = "Read more"; 
    moreText5.style.display = "none";
  } else {
    dots5.style.display = "none";
    btnText5.innerHTML = "Read less"; 
    moreText5.style.display = "inline";
  }
}
</script>
          </div>
                </div>
              </div>
            </div>

 <div id="r6">
<div class="main-content paddsection">
    <div class="container">

          <div class="row">
            <div class="container-main single-main">
              <div class="col-md-12">
                <div class="block-main mb-30">
                  <img src="images/4.jpg" width="728" class="img-responsive" alt="reviews2">
                  <div class="content-main single-post padDiv">
                    <div class="journal-txt">
                      <h3>First Half of USERDES</h3>
                    </div>
                    <div class="post-meta">
                      <ul class="list-unstyled mb-0">
                        <li class="date">date:<a href="#">Aug 23, 2019</a></li>
                      </ul>
                    </div>
                    <p class="mb-30">Days are fast approaching and the midterm of this term was already done. This term is close to the end and so far, I’ve learned so many things. USERDES was a fun class and I think I learned more about designing and about myself. 
                     </p>
                     <span id="dots6"></span> <span id="more6">
                    <p class="mb-30">USERDES taught me very well that I should think very critically and consider all the things that might affect when I decided.  I encountered challenges that helped me realize things. For example, when doing our need finding, it helped me to look in a different perspective and made my mind open on the different suggestions that will help improve our project. USERDES also helped me enhance my creativity in both words and works. It helped me open new ideas that will help me and my future. It makes me feel determined when working an assignment or reflection for USERDES. I feel that this class taught me to have faith in yourself and have the confidence to express your ideas. This class was a great ground for practicing team work and being a team leader and member, which I found very useful especially in the future when we are deployed in the work place.
          </p>                   
                    <p class="mb-30">In the finals period, I expect that this period will be memorable and have a lot of fun. I think that we should practice more of having a team work and being responsible as a member. Also, I expect that in this period we be having some games that will make us think critically and creatively.</p></span>
                    <button onclick="myFunction6()" id="myBtn6"> Read More </button>
                    <script>
  function myFunction6() {
  var dots6 = document.getElementById("dots6");
  var moreText6 = document.getElementById("more6");
  var btnText6 = document.getElementById("myBtn6");

  if (dots6.style.display === "none") {
    dots6.style.display = "inline";
    btnText6.innerHTML = "Read more"; 
    moreText6.style.display = "none";
  } else {
    dots6.style.display = "none";
    btnText6.innerHTML = "Read less"; 
    moreText6 .style.display = "inline";
  }
}
</script>
          </div>
                </div>
              </div>
            </div>

  <!-- start section footer -->
  <div id="footer" class="text-center">
    <div class="container">
     
      <p>&copy; Copyrights All rights reserved.</p>

      <div class="credits">
                Credits to the designer.</a>
      </div>

    </div>
  </div>
  <!-- End section footer -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/typed/typed.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>

</html>
