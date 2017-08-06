<!DOCTYPE html>
<html>
    <head>
        <title>My Blog</title>
        <link rel="stylesheet" href="css/my_blog.css">
    </head>
    
    <body>
        <!-- header start -->
        <div id="header" class="section">
            <img alt="" class="img-circle" src="imagens/Perfil.png">
            <p>Marcelo Teixeira</p>
        </div>
        <!-- header end -->
        
        <!-- About Me section start -->
        <div class="section">
            <h1><span>About Me</span></h1>
            <p id="personal">
                Hey! I'm <strong>Marcelo</strong>, and this is only a practice teste for my own works. Coding has really changed my world. It's not just about apps or new beautiful layouts to see on screen. Learning to code gave me <i>problem-solving skills</i> and a way to communicate with others supporting my own goals in life at all. I can also develop websites and use my coding skills to get a better job. And I learned it all at <strong>SoloLearn</strong> where they build your self-esteem and keep you motivated. Join me in this rewarding journey, i'm always available to help u and learn along the way!
            </p>
            <p class="quote">"Declare variables, not war"</p>
        </div>
        <!-- About Me section end -->
        
        <!-- My Schedule section start -->
        <div class="section">
            <h1><span>My Coding Schedule</span></h1>
            <table id="table">
                <tr>
                    <th>Day</th>
                    <th>Mon</th>
                    <th>Tue</th>
                    <th>Wed</th>
                    <th>Thu</th>
                    <th>Fri</th>
                </tr>
                <tr>
                    <td>8-8:30</td>
                    <td class="selected">Learn</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>9-10</td>
                    <td></td>
                    <td class="selected">Practice</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>1-1:30</td>
                    <td></td>
                    <td></td>
                    <td class="selected">Play</td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>3:45-5</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="selected">Code</td>
                    <td></td>
                </tr>
                <tr>
                    <td>6-6:15</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="selected">Discuss</td>
                </tr>
            </table>
        </div>
        <!-- My Schedule section end -->
        
        
        <!-- My Skills section start -->
        <div class="section">
            <h1><span>My Skills</span></h1>
            <ul>
                <li>HTML <br />
                    <progress min="0" max="100" value="80"></progress>
                </li>
                <li>JavaScript <br />
                    <progress min="0" max="100" value="50"></progress>
                </li>
                <li>Python <br />
                    <progress min="0" max="100" value="30"></progress>
                </li>
            </ul>
        </div>
        <!-- My Skills section end -->
        
        
         <!-- Media section start -->
        <div class="section">
            <h1><span>My Media</span></h1>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/wlNo353xKsc" frameborder="0" allowfullscreen></iframe>
            <!-- <iframe height="300" width="600" src="https://youtu.be/wlNo353xKsc" allowfullscreen frameborder="0"></iframe> -->
        </div>
        <!-- Media section end -->
        
        <!-- Form section start -->
       <div class="section">
            <h1><span>Contact Me</span></h1>
            
          <!--   <svg class="face" height="100" width="100">
                <circle cx="50" cy="50" r="50" fill="#FDD835"/>
                <circle cx="30" cy="30" r="10" fill="#FFFFFF"/>
                <circle cx="70" cy="30" r="10" fill="#FFFFFF"/>
                <circle cx="30" cy="30" r="5" fill="#000000"/>
                <circle cx="70" cy="30" r="5" fill="#000000"/>
                <path d="M 30 70 q 20 20 40 0" stroke="#FFFFFF" stroke-width="5" fill="none" />
            </svg> -->
                 
            <form id="contact">
                <input name="name" placeholder="Name" type="text" required /><br/>
                <input name="email" placeholder="Email" type="email" required /><br/>
                <textarea name="message" placeholder="Message" required ></textarea>
                <input type="submit" value="SEND" class="submit" />
            </form>
        </div>
        <!-- Form section end -->
        
        <!-- Contacts section start -->
        <div class="section" id="contacts">
            <h1><span>Follow Me</span></h1>
            <div>
                <a href="https://www.sololearn.com/" target="_blank">
                    <img alt="SoloLearn" src="https://www.sololearn.com/Uploads/icons/sololearn.png" />
                </a>
                <a href="https://www.facebook.com/Marcelixoo" target="_blank">
                    <img alt="Facebook" src="https://www.sololearn.com/Uploads/icons/facebook.png"/>
                </a>
                <a href="#">
                    <img alt="Twitter" src="https://www.sololearn.com/Uploads/icons/twitter.png" />
                </a>
            </div>
        </div>
        <!-- Contacts section end -->
        
        <div class="copyright">
            &copy; 2017 Marcelo T. dos Santos. All rights reserved.
        </div>
        
    </body>
</html>