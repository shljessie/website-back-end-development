 <?php
 $lang= array(
 "title_hello"=> "Jessie Lee - hello",
 "title_data" => "Jessie Lee - work",
 "title_resume" => "Jessie Lee - resume",
 "nav"=> "<ul>
        <li class='<?php echo $hello ?>'><a href='index.php'>hello</a></li>
        <li class='<?php echo $data ?>'><a href='data.php'>work</a></li>
        <li class='<?php echo $resume ?>'><a href='resume.php'>resume</a></li>
    </ul>",
 "intro"=> "  <div id='introduction'>
            <p id='intro1'>Hi I'm Jessie :)</p>
            <p id='intro4'>I'm currently <a href='https://www.cornell.edu/'> @Cornell University</a> studying <a href='https://infosci.cornell.edu/'>Data Science & Visual Studies</a></p>
            <p id='intro2'>
            I am an aspiring <strong><font color='royalblue'>Data Scientist</font></strong> interested in <strong><font color='royalblue'>Artificial Intelligence</font></strong> and <strong><font color='royalblue'>Data Visualization</font></strong>.
            </p>
            <p id='intro3'>
            Currently, I am part of the <a href='https://cornelldata.science/insights'>Insights Team</a> on <a href='https://cornelldata.science/'>Cornell Data Science</a>. I am also a web-developer for <a href='http://cornellcreatives.com/'>Cornell Creatives</a></p>",

  "data_p1"=> "
        <h1 id='datahead'>Projects</h1>
        <p id='below_datahead'> **Ongoing projects or projects concerning privacy issues are not viewable. Give me an email and I'll send you the details!  </p>
            <section class='card'>
                <img src='images/movies.jpg'>
                <div>
                    <h3>Data Science Projects</h3>
                    <p id='p1_de'>Through data cleansing and visualization, these projects run datasets through machine learning models to predict outcome. Projects include: Movie Revenue Prediction, Playstore Market Research, Quora Comment Webscraping, and Coronavirus prediction. Python, jupyternotebook, pandas, webscraping, and D3.js are used.</p>
                    <a href='https://github.com/shljessie' class='btn'>More</a>
                </div>
            </section>",

  "data_p2" => "<section class='card'  data-aos='fade-right' data-aos-duration='900'>
  <img src='images/apps.png'>
                <div>
                    <h3>Front & Back-End Development</h3>
                    <p id='p1_de'>I have mostly focused on making front & back-end features for websites. Projects include: This website, Club website redesign, Cornell Creatives Website, Coronavirus Data catalogue, and multiple language feature website. HTML&CSS, Javascript, Python, PHP, SQL were used in this process.</p>
                    <a href='https://github.com/shljessie' class='btn'>More</a></div>
                    </section>.",
  "data_p3" => "<section class='card'>
  <img src='images/trends.jpg'>
                <div>
                    <h3>Research & Studies</h3>
                    <p id='p1_de'>This section features the additional studies and interests. Studies include a policy memo on Google sustainability, Natural Language Processing in Art, and Inclusive Web Design.  </p>
                    <a href='https://medium.com/@jessielee.shl' class='btn'>More</a>
                </div>
                </section>",
"form"=> "<h3 id='Hello'>Feedback Form</h3>
                    <h4>Ask me any questions you about the website!</h4>

                    <!-- Name input field -->
                    <div class='group_label_input'>
                        <label for='name_field'>Name</label></br>
                        <p class='form_feedback'><?php echo $show_name_feedback ?></p>
                        <input id='name_field' type='text' placeholder='Full Name' name='name' value='<?php echo htmlspecialchars($name); ?>' />
                    </div>

                    <!-- Question input field -->
                    <div class='group_label_input'>
                        <label for='Question_field'>Ask me any Question!</label></br>
                        <input id='question_field' type='text' placeholder='Ask Jessie...' name='question' value='<?php echo htmlspecialchars($question); ?>' />
                    </div>

                    <!-- Email input field -->
                    <div class='group_label_input'>
                        <label for='email_field'>Email</label></br>
                        <p id='email_note'>*Only required if you entered a question*</p>
                        <p class=form_feedback'><?php echo $show_email_feedback ?></p>
                        <input id='email_field' type='text' placeholder='Email' name='email' value='<?php echo htmlspecialchars($email); ?>' />
                    </div>

                    <!-- Feedback input field -->
                    <div class='group_label_input'>
                        <label for='feedback_field'/>What did you think of my website? Anything to Improve?</label></br>
                        <p class='form_feedback'><?php echo $show_feedback_feedback ?></p>
                        <input id='feedback_field' type='text' placeholder='Feedback' name='feedback' value='<?php echo htmlspecialchars($feedback); ?>' />
                    </div>

                    <div class='group_label_input'>
                        <span>
                            <!-- empty element to align submit button --></span>
                        <input type='submit' value='Submit' />
                    </div>"


      );
?>
