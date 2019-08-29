<?php
/*
 Template Name: Homepage
 */
// Silence is golden.
get_header();
//echo 'hello';
$details = get_post_meta( get_the_ID(), 'general_details', true );
$social = get_post_meta( get_the_ID(), 'follow_me', true );
$experience = get_post_meta(get_the_ID(),'work_experiences,',true);
$education = get_post_meta(get_the_ID(),'education',true);
$skills = get_post_meta(get_the_ID(),'skills,',true);
$interests = get_post_meta(get_the_ID(),'interests,',true);
//$awards = get_post_meta(get_the_ID(),'awards,',true);
echo '<pre>';
print_r($details);
print_r($social);
print_r($experience);
print_r($education);
//print_r($skills);
//print_r($interests);
//print_r($awards);
echo '</pre>';
?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            <span class="d-block d-lg-none">Clarence Taylor</span>

            <span class="d-none d-lg-block">
        <img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="<?php echo get_template_directory_uri()?>/img/sbastola.jpg" alt="">
      </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#experience">Experience</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#education">Education</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#skills">Skills</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#interests">Interests</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#awards">Awards</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid p-0">

        <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="about">
            <div class="w-100">
                <h1 class="mb-0"><?php echo $details['gd_first_name']; ?>
                    <span class="text-primary"><?php echo $details['gd_last_name']; ?></span>
                </h1>
                <div class="subheading mb-5"><?php echo $details['gd_address']; ?> ·<?php echo $details['gd_phone_number']; ?> ·
                    <a href="mailto:<?php echo $details['gd_email']; ?>"><?php echo $details['gd_email']; ?></a>
                </div>
                <p class="lead mb-5">I am experienced in leveraging agile frameworks to provide a robust synopsis for high level overviews. Iterative approaches to corporate strategy foster collaborative thinking to further the overall value proposition.</p>
                <div class="social-icons">
	                <?php $follows = $social['social_link_name']; ?>

	                <?php foreach($follows as $follow): ?>
                    <a href="<?php echo $follow['social_url']; ?>">
<!--	                    <i class=""></i>-->
                        <i class="<?php echo $follow['social_logo']; ?>"></i>

                    </a>
    <?php
endforeach;
    ?>
                </div>
            </div>
        </section>

        <hr class="m-0">

        <section class="resume-section p-3 p-lg-5 d-flex justify-content-center" id="experience">
            <div class="w-100">
                <h2 class="mb-5">Experience</h2>
                <?php
                $jobs = $experience['work_experience_repeater'];
                foreach ($jobs as $job):
                ?>
                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="resume-content">
                        <h3 class="mb-0"><?php echo $job['job_title']; ?></h3>
                        <div class="subheading mb-3"><?php echo $job['job_organization']; ?></div>
                        <p><?php echo $job['job_description']; ?></p>
                    </div>
                    <div class="resume-date text-md-right">
                        <span class="text-primary"><?php echo $job['job_date_from']; ?> - <?php echo $job['job_date_to']; ?></span>
                    </div>
                </div>
                    <?php
                endforeach;
                    ?>
            </div>

        </section>

        <hr class="m-0">

        <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="education">
            <div class="w-100">
                <h2 class="mb-5">Education</h2>

                <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="resume-content">
                        <h3 class="mb-0">University of Colorado Boulder</h3>
                        <div class="subheading mb-3">Bachelor of Science</div>
                        <div>Computer Science - Web Development Track</div>
                        <p>GPA: 3.23</p>
                    </div>
                    <div class="resume-date text-md-right">
                        <span class="text-primary">August 2006 - May 2010</span>
                    </div>
                </div>

                <div class="resume-item d-flex flex-column flex-md-row justify-content-between">
                    <div class="resume-content">
                        <h3 class="mb-0">James Buchanan High School</h3>
                        <div class="subheading mb-3">Technology Magnet Program</div>
                        <p>GPA: 3.56</p>
                    </div>
                    <div class="resume-date text-md-right">
                        <span class="text-primary">August 2002 - May 2006</span>
                    </div>
                </div>

            </div>
        </section>

        <hr class="m-0">

        <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="skills">
            <div class="w-100">
                <h2 class="mb-5">Skills</h2>

                <div class="subheading mb-3">Programming Languages &amp; Tools</div>
                <ul class="list-inline dev-icons">
<!--                    Loop for Programming languages-->
                    <li class="list-inline-item">
                        <i class="fab fa-html5"></i>
                    </li>
<!--                    Loop for Programming languages-->

                </ul>

                <div class="subheading mb-3">Workflow</div>
                <ul class="fa-ul mb-0">
                    <li>
                        <i class="fa-li fa fa-check"></i>
                        Mobile-First, Responsive Design</li>
                    <li>
                        <i class="fa-li fa fa-check"></i>
                        Cross Browser Testing &amp; Debugging</li>
                    <li>
                        <i class="fa-li fa fa-check"></i>
                        Cross Functional Teams</li>
                    <li>
                        <i class="fa-li fa fa-check"></i>
                        Agile Development &amp; Scrum</li>
                </ul>
            </div>
        </section>

        <hr class="m-0">

        <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="interests">
            <div class="w-100">
                <h2 class="mb-5">Interests</h2>
                <p>Apart from being a web developer, I enjoy most of my time being outdoors. In the winter, I am an avid skier and novice ice climber. During the warmer months here in Colorado, I enjoy mountain biking, free climbing, and kayaking.</p>
                <p class="mb-0">When forced indoors, I follow a number of sci-fi and fantasy genre movies and television shows, I am an aspiring chef, and I spend a large amount of my free time exploring the latest technology advancements in the front-end web development world.</p>
            </div>
        </section>

        <hr class="m-0">

        <section class="resume-section p-3 p-lg-5 d-flex align-items-center" id="awards">
            <div class="w-100">
                <h2 class="mb-5">Register With Us</h2>
                <?php echo do_shortcode('[dm_login_form]'); ?>
            </div>
        </section>

    </div>
<?php

get_footer();