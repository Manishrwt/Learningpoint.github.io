<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>E-Learning Point</title>

    <link rel="stylesheet" href="CSS/style.css"/>
    <link rel="stylesheet" href="CSS/responsive.css"/>

    <style>
        body {font-family: Arial, Helvetica, sans-serif;}
        
        /* Full-width input fields */
        input[type=text], input[type=password] {
          width: 50%;
          padding: 12px 20px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          box-sizing: border-box;
        }
        
        /* Set a style for all buttons */
        button {
          background-color: #16b94f;
          padding: 8px 20px;
        margin: 7px 3px;
        border: 2px solid white;
        border-radius: 8px;
        color: white;
        cursor: pointer;
        }

        
        button:hover {
          opacity: 0.8;
        }
        
        /* Extra styles for the cancel button */
        .cancelbtn {
          width: auto;
          padding: 10px 18px;
          background-color: #f44336;
        }
        
        /* Center the image and position the close button */
        .imgcontainer {
          text-align: center;
          margin: 24px 0 12px 0;
          position: relative;
        }
        
        img.avatar {
          width: 40%;
          border-radius: 50%;
        }
        
        .container {
          padding: 16px;
        }
        
       
        
        /* The Modal (background) */
        .modal {
          display: none; /* Hidden by default */
          position: fixed; /* Stay in place */
          z-index: 1; /* Sit on top */
          left: 0;
          top: 0;
          width: 100%; /* Full width */
          height: 100%; /* Full height */
          overflow: auto; /* Enable scroll if needed */
          background-color: rgb(0,0,0); /* Fallback color */
          background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
          padding-top: 60px;
        }
        
        /* Modal Content/Box */
        .modal-content {
          background-color: #fefefe;
          margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
          border: 1px solid #888;
          width: 60%; /* Could be more or less, depending on screen size */
        }
        
        /* The Close Button (x) */
        .close {
          position: absolute;
          right: 25px;
          top: 0;
          color: #000;
          font-size: 35px;
          font-weight: bold;
        }
        
        .close:hover,
        .close:focus {
          color: red;
          cursor: pointer;
        }
        
        /* Add Zoom Animation */
        .animate {
          -webkit-animation: animatezoom 0.6s;
          animation: animatezoom 0.6s
        }
        
        @-webkit-keyframes animatezoom {
          from {-webkit-transform: scale(0)} 
          to {-webkit-transform: scale(1)}
        }
          
        @keyframes animatezoom {
          from {transform: scale(0)} 
          to {transform: scale(1)}
        }
        
        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
          span.psw {
             display: block;
             float: none;
          }
          .cancelbtn {
             width: 100%;
          }
        }
        </style>

    

</head>
<body>

     <nav class="navbar background h-nav-resp">
      <ul class="nav-list v-class-resp">
        <div class="logo"><img src="img/1.jpg" alt="logo"></div>
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#contact">Contact Us</a></li>


       

       <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
       
       <div id="id01" class="modal">
         
         <form class="modal-content animate" action="connect.php" method="post">
           <div class="imgcontainer">
             <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
             <img src="img\images (1).jpg" alt="Avatar" class="avatar">
           </div>
       
           <div class="container">
             <label for="uname"><b>Username</b></label>
             <input type="text" placeholder="Enter Username" name="uname" required><br>
       
             <label for="psw"><b>Password</b></label>
             <input type="password" placeholder="Enter Password" name="psw" required><br>
               
             <center><button type="submit">Login</button>
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button></center> 
             
             <label>
               <input type="checkbox" checked="checked" name="remember"> Remember me
             </label>
           </div>
           <div class="container" style="background-color:#f1f1f1">
           </div>
         </form>
       </div>
       
       <script>
       // Get the modal
       var modal = document.getElementById('id01');
       
       // When the user clicks anywhere outside of the modal, close it
       window.onclick = function(event) {
           if (event.target == modal) {
               modal.style.display = "none";
           }
       }
       </script>


      </ul>
       <div class="rightNav v-class-resp">
        <input type="text" name="search" id="search">
        <button class="btn btn-sm">Search</button>
        </div>
     <div class="burger">
     <div class="line"></div>
     <div class="line"></div>
     <div class="line"></div>

     </div>


     </nav>
       <section class="background firstSection">
        <div class="box-main">
             <div class="firstHalf"> 
                 <p class="text-big">The E-Learning Point & Online Education. </p>
                 <p class="text-small">A learning system based on formalised teaching 
                     but with the help of electronic resources is known as E-learning. 
                     While teaching can be based in or out of the classrooms,
                      the use of computers and the Internet forms the major component of E-learning.</p>
                      <div class="button">
                          <button class="btn">Subscribe</button>
                          <button class="btn">Watch Video</button>
                      </div>
                
             </div>
             <div class="secondHalf">
                 <img src="img/1.jpg" alt="Laptop image">

             </div>

        </div>



       </section> 
       <section class="section">
           <div class="paras">
            <p class="sectionTag text-big"><b>WHAT IS E-LEARNING ?</b></p>
            <p class="sectionSubTag text-size=50%" text-align="left"><BR>
                E-learning is a type of learning conducted digitally via electronic media, typically involving the internet.
                
                It can be accessed via most electronic devices including a computer, laptop, tablet or smartphone, making it a versatile and easy way for students to learn wherever they are. E-learning resources come in a variety of forms – from software programmes and digital courses to interactive online platform and apps.
                
                Below are some common types of e-learning methods and the differences between them.<BR>
                
                <BR><b>DIGITAL MATERIALS</b><BR>
                E-learning can be carried out via the consumption of videos, PDF documents, slideshows and word documents. Thanks to the availability of these resources, it’s incredibly easy for anybody to teach themselves a new skill at their own pace.
                
                
                <BR><BR><b> ONLINE COURSES</b><BR>
                Online courses are often provided by Learning Management Systems (LMSs) and allow learning material to be delivered at a steady rate, organised into sections and chunks to make it easier for the learner.
                
                They often come with interactive materials to allow the learner to test and apply their own knowledge.
                
                Popular online course providers include Skillshare and Udemy.
                
                <BR><BR> <b>VIRTUAL TUTORING</b><BR>
                Thanks to the internet, private tutors are no longer as expensive as they once were. Thanks to websites like MyTutor and TutorHub, it’s now easy to find online tutors for any subject at an affordable rate.<BR> Lessons are completed via video communication platforms like Skype and Zoom.
                
                <BR><BR><b> APPS & SOFTWARE</b><BR>
                Apps and software are nothing new, and many people are discovering the amazing possibilities for self-taught learning through apps they can download right to their phone.<BR>
                
                Learn a new language with Duolingo, or try your hand at a musical instrument with Yousician and Uberchord.<BR>
                
                Learning software can also be used both online and off to engage in shared learning courses (as mentioned above) or engage in your own personal learning journey.
            </p>
            </div>
         <div class="thumbnail">
            <img src="https://source.unsplash.com/500x500/?coding,apple" width="275px" style="border: 3px solid black;"  alt="Laptop image" class="imgFluid"> 
        </div>

       </section>

       <table style="width:100%">   
        <tr>
          <td style="width:275px" align="right" >
             
              <div class="thumbnail">
                     <img src="https://source.unsplash.com/500x500/?html,apple" width="275px" style="border: 3px solid black;" alt="Laptop image" class="imgFluid"> 
    
           </td>
           <td style="width: 70% " align="left" >
              <section class="section-left"id="services">
               <div class="paras">
           
                <p class="sectionTag text-big"><b>WHAT IS E-LEARNING IN EDUCATION?</b></p><br>
      
                <p class="sectionSubTag text-size=20%">e-Learning: The students and the teacher interact online in this type of learning. In this form of learning the students take a course from the teacher without physically visiting an actual classroom with him. Both of them communicate and learn the courses online even if they are on the same premise. Though students can use offline materials like paper to send their response they are connected with their teacher through an internet connection only. They can send the picture of their response online to their teacher.
                    With so many schools across the UK currently closed, teachers and students are taking advantage of e-learning methods to continue their studies from home.

                    <br> Even before this recent crisis, many schools were already strong champions of edtech in the classroom, and creating a seamless and flexible learning experience through the use of digital platforms.
                    
                    <br>There are many ways in which teachers have been implementing e-learning to continue the teaching of their curriculum. One major way is the use of virtual ‘classrooms’ or lessons, using video communication platforms like Zoom. The teacher is able to plan and teach lessons as normal, with all students attending the lessons from their own home. The great thing about Zoom is that it can be accessed on a phone as well as a computer, adding greater flexibility to students.
                    
                    <br>Teachers have also been able to create and distribute learning materials via platforms like Google Classroom and Edmodo.<br> And when it comes to finding lessons plans and learning materials, there is a whole wealth of shareable resources online.
                    <BR>
                     </p>
              </section>
           </td>
         </tr>  
       </table>
    <section class="section" id="about">
        <div class="paras">
    <p class="sectionTag text-big"><b>What is the value of E-Learning?</b></p><br>
         <p class="sectionSubTag text-size=20%">Online Learning: The main element of online learning is to get learning experience by using an internet connection. The students have to use certain techniques to get this learning experience. In other words, online learning can be described as the combination of blended learning and e-Learning as it generally uses online tools like ezTalks Cloud Meeting etc. for learning the course.
            Online learning has numerous advantages over traditional learning methods. Some of these include the possibility for students to make use of self-paced learning and to choose their own learning environments. Additionally, e-learning is both cost-effective and cost-efficient, as it removes the geographical obstacles often associated with traditional classrooms and education.

            Taking these benefits and many more into consideration, it becomes evident why the current trends in e-learning show remarkable growth for the industry. Worldwide e-learning revenue is expected to grow to $325 Billion by 2025, which is remarkable considering the fact that the number was three times smaller – $107 Billion, in 2015.
            
            
            With that being said, it must be noted that e-learning is not perfect. Conducting any of the various types of e-learning through the Internet means sacrifices in one way or another. Increased risk of cheating during assessments, social isolation, and lack of communicational skill development in online students are just some of the challenges of e-learning which need to be addressed. Read our separate post on the disadvantages of e-learning in order to get a better overview of the drawbacks associated with e-learning.
        </p>
         </div>
      <div class="thumbnail">
         <img src="https://source.unsplash.com/500x500/?javascript,apple" width="275px" style="border: 3px solid black;" alt="Laptop image" class="imgFluid"> 
           
        </div>
    </section>
    




    <section class="contact" id="contact">
      <form action="abc.php" method="post" enctype="multipart/form-data">
    
     <h2 class="text-center">Contact Us</h2>
     <div class="form"> 
     
     <input class="form-input"type="text" name="name"  placeholder="Enter your name">
     <input class="form-input" type="text" name="phone"  placeholder="Enter your phone">
     <input class="form-input"type="text" name="email"  placeholder="Enter your email">
     <textarea class="form-input" name="txt"  cols="30" rows="10" placeholder="Your message"></textarea>

     <button class="btn btn-success m-3" type="submit">Submit</button>
    
</div>
</form>
    </section>

    <footer class="background">
     <p class="text-footer">
      copyright &copy; 2022 www.E Learning Point.com-All rights reserved.
    </p>
    </footer>
    <script src="js/resp.js"></script>


</body>
</html>