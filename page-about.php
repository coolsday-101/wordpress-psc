   <?php
    function my_custom_head_content_about()
    {
    ?>
       <title>Polaron Solar News Desk — Stay Connected With Polaon</title>
       <script src="<?php echo get_template_directory_uri() . '/js/lozad.min.js' ?>"></script>
       <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/webpage/about/page-about.css'; ?>">
       <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/webpage/about/about980.css'; ?>">
       <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/webpage/about/about767.css'; ?>">
       <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/webpage/about/about320.css'; ?>">
   <?php
    }
    add_action('wp_head', 'my_custom_head_content_about');
    get_header('tailwind'); // 加载头部
    ?>
   <div class="head-pt" style="padding-top: 0px;">
       <div class="backgroudimg module-one">
           <div class="backgroudimgson">
               <div class="backgroudimgson-content" style="">
                   <h1 class="pop-up-text" style="">
                       A micro-generation future with innovation and vertical integration
                   </h1>
                   <h2> A micro-generation future</h2>
                   <div class="distributing pop-up-text">
                       <span>
                           <img src="<?php echo get_template_directory_uri() . '/images/about/Distributing.png' ?>" alt="">
                           <span>Distributing</span>
                       </span>
                       <span>
                           <img src="<?php echo get_template_directory_uri() . '/images/about/Engineering.png' ?>" alt="">
                           <span>Engineering</span>
                       </span>
                       <span>
                           <img src="<?php echo get_template_directory_uri() . '/images/about/manufacting.png' ?>" alt="">
                           <span>Manufacturing</span>
                       </span>
                   </div>
               </div>
               <div class="animated-box pop-up-text">
                   <div>
                       <span id="value1">0</span>
                       <p>Solar Projects Nationwide</p>
                   </div>
                   <div>
                       <span id="value2">0</span> MW<p>Solar Power Generation</p>
                   </div>
                   <div>
                       <span id="value3">0</span> Years<p>of Dedicated Service</p>
                   </div>
               </div>
           </div>
       </div>
       <!-- ------------------------------------------------------------------- -->
       <div class="solar padding-box-two" style="position: relative;">
           <div class="seletor-box-one">
               <div class="solardivh3">
                   <h3 class="">The Largest Residential Solar Company in Canada</h3>
               </div>
               <div class="solartxtvideo">
                   <div class="having" style="">
                       <p>
                           <span class="solartxt">
                               Having launched in 2013, and since weathering numerous provincial policy and regulatory changes that have threatened the industry, Polaron has endured as the largest residential solar company in Canada—with over 8,000 installs nationwide.
                           </span>
                       </p>
                       <p style="">
                           <span class="solartxt">
                               Operating locally in Alberta, Ontario, Nova Scotia, British Columbia and PEI, we offer all-inclusive packages that include design, financial planning, installation, and professional maintenance.
                           </span>
                       </p>
                       <p>
                           <span class="solartxt">
                               Our dedicated team works tirelessly to ensure that each step of the process gets completed with care and precision. You get the best quality solar panel system as well as maximum savings, thanks to our innovative low-interest Sunline program.
                           </span>
                       </p>
                   </div>
                   <div style="" class="video">
                       <video id="video" controls poster="<?php #echo get_template_directory_uri() . '/images/about/DJI_0307_compressed.jpg'; 
                                                            ?>" style="">
                           <source type="video/mp4" src="<?php echo get_template_directory_uri() . '/images/about/viedo/FINAL.mp4'; ?>">
                           </source>
                       </video>
                       <div class="videoimg">
                           <!-- <img style="width: 100%;height:100%;" src="<?php echo get_template_directory_uri() . '/images/about/14-Sprucewood-Ct-Dartmouth-Nova-Scotia.jpg'; ?>" alt=""> -->
                           <div id="playVideo" class="videoimgsm">
                               <img src="<?php echo get_template_directory_uri() . '/images/about/video.svg'; ?>" alt="">
                           </div>
                       </div>
                       <div class="translucence"></div>
                       <a href="<?php echo esc_url(home_url('/survey')); ?>" target="_blank">
                           <div class="button-family" style="">
                               <button class="my-button-green">
                                   <span>
                                       Join the Largest Solar Family in Canada
                                   </span>
                               </button>
                           </div>
                       </a>
                   </div>
               </div>
           </div>
       </div>
       <script>
           var video = document.getElementById("video");
           var playVideo = document.getElementById("playVideo");
           var videoimg = document.getElementsByClassName("videoimg");
           var translucence = document.getElementsByClassName("translucence");
           playVideo.onclick = function() {
               video.play();
               videoimg[0].style.display = "none";
               translucence[0].style.display = "none";
               console.log("开始播放视频");
           }
       </script>
       <!-- ---------------------------------------------------- -->
       <div class="module-three">
           <div class="module-three-img-box">
               <img src="<?php echo get_template_directory_uri() . '/page/tenYears/img/timeline.svg'; ?>" alt="">
               <!-- <div class="module-three-fist">
                   <div class="divbox">MicroFit Program</div>
                   <span class="spanbox">Polaron began applying for the ‘Microfit’ and ‘Free Solar’ programs.</span>
               </div>
               <div class="module-three-fist02">
                   <div class="divbox">The Beginning of Our Legacy</div>
                   <span class="spanbox">Polaron was founded in 2013. We then started our business and services in Ontario.</span>
               </div>
               <div class="module-three-fist03">
                   <div class="divbox">2,000+ Installations</div>
                   <span class="spanbox">Completed 2,000 installations in Ontario, becoming the largest solar family in the province.</span>
               </div>
               <div class="module-three-fist04">
                   <div class="divbox">First Award Obtained</div>
                   <span class="spanbox">Polaron was recognized with the Most Innovative Model Award from OESA.</span>
               </div>
               <div class="module-three-fist05">
                   <div class="divbox">0% Interest Sunline</div>
                   <span class="spanbox">Polaron expanded our solar business in Alberta by introducing our innovative 0% Sunline program.</span>
               </div>
               <div class="module-three-fist06">
                   <div class="divbox">Home Depot Pro Installer</div>
                   <span class="spanbox">Polaron became a Home Depot certified pro installer in 2020. </span>
               </div>
               <div class="module-three-fist07">
                   <div class="divbox">Expanding 3 Provinces</div>
                   <span class="spanbox">Polaron’s business grew to include Saskatchewan, Nova Scotia, and Prince Edward Island.</span>
               </div>
               <div class="module-three-fist08">
                   <div class="divbox">4,500+ Installations</div>
                   <span class="spanbox">More than 4,500 installations were completed in Canada.</span>
               </div>
               <div class="module-three-fist09 ">
                   <div class="divbox">6,000+ Installations</div>
                   <span class="spanbox">Achieved 6,000 installations nationwide.</span>
               </div>
               <div class="module-three-fist10 ">
                   <div class="divbox">8,000+ Installations</div>
                   <span class="spanbox">Polaron completed 8,000+ installations in Canada.</span>
               </div>
               <div class="module-three-fist11 ">
                   <div class="divbox">12,000+ Installations</div>
                   <span class="spanbox">Polaron completed 12,000+ solar projects, 111MW of solar energy generated across Canada.</span>
               </div> -->
           </div>
           <div class="module-three-img-box767">
               <div class="years-top">
                   <div class="year-box">
                       <div class="year13 year">2013</div>
                       <div class="divbox">The Beginning of Our Legacy</div>
                       <span class="spanbox">Polaron was founded in 2013. We then started our business and services in Ontario.</span>
                   </div>
                   <div class="year-box">
                       <div class="year14 year">2014</div>
                       <div class="divbox">Expanding 3 Provinces</div>
                       <span class="spanbox">Polaron’s business grew to include Saskatchewan, Nova Scotia, and Prince Edward Island.</span>
                   </div>
                   <div class="year-box ">
                       <div class="year16 year">2016</div>
                       <div class="divbox">MicroFit Program</div>
                       <span class="spanbox">Polaron began applying for the ‘Microfit’ and ‘Free Solar’ programs.</span>
                   </div>
                   <div class="year-box ">
                       <div class="year17 year">2017</div>
                       <div class="divbox">Home Depot Pro Installer</div>
                       <span class="spanbox">Polaron became a Home Depot certified pro installer in 2020. </span>
                   </div>
                   <div class="year-box ">
                       <div class="year18 year">2018</div>
                       <div class="divbox">2,000+ Installations</div>
                       <span class="spanbox">Completed 2,000 installations in Ontario, becoming the largest solar family in the province.</span>
                   </div>
                   <div class="year-box ">
                       <div class="year19 year">2019</div>
                       <div class="divbox">4,500+ Installations</div>
                       <span class="spanbox">More than 4,500 installations were completed in Canada.</span>
                   </div>
                   <div class="year-box">
                       <div class="year20 year">2020</div>
                       <div class="divbox">First Award Obtained</div>
                       <span class="spanbox">Polaron was recognized with the Most Innovative Model Award from OESA.</span>
                   </div>
                   <div class="year-box">
                       <div class="year21 year">2021</div>
                       <div class="divbox">6,000+ Installations</div>
                       <span class="spanbox">Achieved 6,000 installations nationwide.</span>
                   </div>
                   <div class="year-box">
                       <div class="year22 year">2022</div>
                       <div class="divbox">0% Interest Sunline</div>
                       <span class="spanbox">Polaron expanded oursolar business in Alberta by introducing the innovative 0% Sunline program.</span>
                   </div>
                   <div class="year-box">
                       <div class="year23 year">2023</div>
                       <div class="divbox">8,000+ Installations</div>
                       <span class="spanbox">Polaron completed 8,000+ installations in Canada.</span>
                   </div>
                   <div class="year-box">
                       <div class="year24 year">2024</div>
                       <div class="divbox">12,000+ Installations</div>
                       <span class="spanbox">Polaron completed 12,000+ solar projects, 111MW of solar energy generated across Canada.</span>
                   </div>
               </div>
               <div class="years-bottom">
                   <div class="year-box">
                       <div class="year19 year">2019</div>
                       <div class="divbox">4,500+ Installations</div>
                       <span class="spanbox">More than 4,500 installations were completed in Canada.</span>
                   </div>
                   <div class="year-box">
                       <div class="year20 year">2020</div>
                       <div class="divbox">First Award Obtained</div>
                       <span class="spanbox">Polaron was recognized with the Most Innovative Model Award from OESA.</span>
                   </div>
                   <div class="year-box">
                       <div class="year21 year">2021</div>
                       <div class="divbox">6,000+ Installations</div>
                       <span class="spanbox">Achieved 6,000 installations nationwide.</span>
                   </div>
                   <div class="year-box">
                       <div class="year22 year">2022</div>
                       <div class="divbox">0% Interest Sunline</div>
                       <span class="spanbox">Polaron expanded our solar business in Alberta by introducing our innovative 0% Sunline program.</span>
                   </div>
                   <div class="year-box">
                       <div class="year23 year">2023</div>
                       <div class="divbox">8,000+ Installations</div>
                       <span class="spanbox">Polaron completed 8,000+ installations in Canada.</span>
                   </div>
                   <div class="year-box">
                       <div class="year24 year">2024</div>
                       <div class="divbox">12,000+ Installations</div>
                       <span class="spanbox">Polaron completed 12,000+ solar projects, 111MW of solar energy generated across Canada.</span>
                   </div>
               </div>
           </div>
       </div>
       <!-- --------------------------------------------------------------------------------------------- -->
       <div class="achievementp seletor-box padding-box-two">
           <div class="recenth2">
               <h2 class="">Polaron’s Growing Success and Achievements</h2>
           </div>
           <div class="video2txt" style="display: none;">
               <div class="video2">
                   <div class="vdp">
                       <video id="video2" controls poster="<?php #echo get_template_directory_uri() . '/images/about/video-cover.jpg'; 
                                                            ?>" style="width: 100%; height:auto!important; object-fit: fill; background-position: center;">
                           <source type="video/mp4" src="<?php echo get_template_directory_uri() . '/images/about/viedo/IMG_6050.mp4'; ?>">
                           </source>
                       </video>
                       <div class="video2img">
                           <div id="play2Video" class="video2imgsm">
                               <img src="<?php echo get_template_directory_uri() . '/images/about/video.svg'; ?>" alt="">
                           </div>
                       </div>
                       <div class="ts"></div>
                   </div>
               </div>
               <div class="achievement">
                   <div class="divRight">
                       <h4>
                           <span><img class="lozad" data-src="<?php echo get_template_directory_uri() . '/images/RightOrWrong/right.svg'; ?>" alt=""></span>
                           <span class="spanp paragraph">Customer Choice Awards For Toronto Central 2021 and 2022</span>
                       </h4>
                       <h4>
                           <span><img class="lozad" data-src="<?php echo get_template_directory_uri() . '/images/RightOrWrong/right.svg'; ?>" alt=""></span>
                           <span class="spanp paragraph">Homestars Best of Award for 2022</span>
                       </h4>
                       <h4>
                           <span><img class="lozad" data-src="<?php echo get_template_directory_uri() . '/images/RightOrWrong/right.svg'; ?>" alt=""></span>
                           <span class="spanp paragraph">Hoymiles Premium Distributor 2022</span>
                       </h4>
                       <h4>
                           <span><img class="lozad" data-src="<?php echo get_template_directory_uri() . '/images/RightOrWrong/right.svg'; ?>" alt=""></span>
                           <span class="spanp paragraph">2022 6,000 Plus customers in Canada</span>
                       </h4>
                       <h4>
                           <span><img class="lozad" data-src="<?php echo get_template_directory_uri() . '/images/RightOrWrong/right.svg'; ?>" alt=""></span>
                           <span class="spanp paragraph">2021 4,500 Plus customers in Canada</span>
                       </h4>
                       <h4>
                           <span><img class="lozad" data-src="<?php echo get_template_directory_uri() . '/images/RightOrWrong/right.svg'; ?>" alt=""></span>
                           <span class="spanp paragraph">Home Depot Certified Pro Installer 2020</span>
                       </h4>
                       <h4>
                           <span><img class="lozad" data-src="<?php echo get_template_directory_uri() . '/images/RightOrWrong/right.svg'; ?>" alt=""></span>
                           <span class="spanp paragraph">2019 3,500 Plus customers in Canada</span>
                       </h4>
                       <h4>
                           <span><img class="lozad" data-src="<?php echo get_template_directory_uri() . '/images/RightOrWrong/right.svg'; ?>" alt=""></span>
                           <span class="spanp paragraph">Network of Excellence PEI Listed Installer 2019</span>
                       </h4>
                       <h4>
                           <span><img class="lozad" data-src="<?php echo get_template_directory_uri() . '/images/RightOrWrong/right.svg'; ?>" alt=""></span>
                           <span class="spanp paragraph">Solar Home Approved Installer 2018</span>
                       </h4>
                       <h4>
                           <span><img class="lozad" data-src="<?php echo get_template_directory_uri() . '/images/RightOrWrong/right.svg'; ?>" alt=""></span>
                           <span class="spanp paragraph">2018 Global No1. Distributor</span>
                       </h4>
                       <h4>
                           <span><img class="lozad" data-src="<?php echo get_template_directory_uri() . '/images/RightOrWrong/right.svg'; ?>" alt=""></span>
                           <span class="spanp paragraph">Most Innovative Model 2017 OESA</span>
                       </h4>
                   </div>
               </div>
           </div>
           <div class="container">
                <div class="row">
                   <div class="col">
                       <div class="year">2024</div>
                       <div class="content">2021-2024 Customer Choice Awards For Toronto Central</div>
                   </div>
                   <div class="col">
                       <div class="year">2024</div>
                       <div class="content">2022-2024 HomeStars Best of Award</div>
                   </div>
                   <div class="col">
                       <div class="year">2024</div>
                       <div class="content">Commercial Solar Installation Company & 2023 Top Solar Energy Services</div>
                   </div>
               </div>
               <!-- <div class="row">
                   <div class="col">
                       <div class="year">2023</div>
                       <div class="content">2023, 2022 and 2021 Customer Choice Awards For Toronto Central</div>
                   </div>
                   <div class="col">
                       <div class="year">2023</div>
                       <div class="content">2023 and 2022 HomeStars Best of Award</div>
                   </div>
                   <div class="col">
                       <div class="year">2023</div>
                       <div class="content">2023 - Top Solar Energy Services provider in 2023</div>
                   </div>
                   <div class="col">
                       <div class="year">2023</div>
                       <div class="content">2023 8,000 Plus customers in Canada</div>
                   </div>
               </div> -->
               <div class="row">
                   <div class="col">
                       <div class="year">2022</div>
                       <div class="content">Hoymiles Premium Distributor</div>
                   </div>
                   <div class="col">
                       <div class="year">2020</div>
                       <div class="content">Home Depot Certified Pro Installer</div>
                   </div>
                   <div class="col">
                       <div class="year">2019</div>
                       <div class="content">Network of Excellence PEI Listed Installer</div>
                   </div>
                   <!-- <div class="col">
                       <div class="year">2022</div>
                       <div class="content">6,000 Plus customers in Canada</div>
                   </div>
                   <div class="col">
                       <div class="year">2021</div>
                       <div class="content">4,500 Plus customers in Canada</div>
                   </div> -->
               </div>
               <!-- <div class="row">
                   <div class="col">
                       <div class="year">2019</div>
                       <div class="content">3,500 Plus customers in Canada</div>
                   </div>
               </div> -->
               <div class="row">
                   <div class="col">
                       <div class="year">2018</div>
                       <div class="content">Solar Home Approved Installer</div>
                   </div>
                   <div class="col">
                       <div class="year">2018</div>
                       <div class="content">APsystems Global No.1 Distributor</div>
                   </div>
                   <div class="col">
                       <div class="year">2017</div>
                       <div class="content">Most Innovative Model OESA</div>
                   </div>
               </div>
           </div>
       </div>
       <script>
           var video2 = document.getElementById("video2");
           var play2Video = document.getElementById("play2Video");
           var video2img = document.getElementsByClassName("video2img");
           var ts = document.getElementsByClassName("ts");
           play2Video.onclick = function() {
               console.log("第二个视频被点击了");
               video2.play();
               play2Video.style.display = "none";
               video2img[0].style.display = "none";
               ts[0].style.display = "none";
           }
       </script>
       <!-- ---------------------------------------------------------------- -->
       <div class="dollar seletor-box padding-box-two" style="">
           <div class="dollarson">
               <div class="back" style="">
                   <h3 class="">
                       We Are Backed By A Multi-billion Dollar Solar Fund
                   </h3>
                   <div>
                       <p class="p2">
                           <span>
                               What good is a warranty if the company isn't around to honor it? Our financial partner is HSBC—the
                               world's largest solar developer and the sixth-largest public company globally.
                               With this financial backing, Polaron can ensure long-term stability and growth
                               Nationwide for years to come.
                           </span>
                       </p>
                       <p>
                           <span class="p3">
                               For Canadians looking to go solar, our company stability means that you can rely on Polaron
                               to be there for you—regardless if it's ten months or years removed from your install date.
                           </span>
                       </p>
                   </div>
               </div>
               <div class="picture">
                   <h3 class="commonHeader2" style="display:none;">
                       We Are Backed By A Multi-billion Dollar Solar Fund
                   </h3>
                   <div>
                       <p>
                           <span class="p2 paragraph" style="display: none;">
                               <img class="lozad" data-src="<?php echo get_template_directory_uri() . '/images/about/xys_logo.png'; ?>" alt="" style="width: auto; height: auto; max-width: 70%; max-height: 70%;margin-bottom: 20px;">
                           </span>
                       </p>
                       <p>
                           <span class="p3 paragraph">
                               <img class="lozad" data-src="<?php echo get_template_directory_uri() . '/images/about/hsbc.png'; ?>" alt="" style="width: auto; height: auto; max-width: 70%; max-height: 70%; margin-top: 55px;">
                           </span>
                       </p>
                   </div>
               </div>
           </div>
       </div>
       <div class="container-mission seletor-box padding-box-two">
           <div class="img-wrapper">
               <img src="<?php echo get_template_directory_uri() . '/images/about/mico-image-1.avif'; ?>" alt="">
           </div>
           <h2>Polaron Mission</h2>
           <p>We aim to create a micro-generation future through the development of innovative programs and products,
               and a vertically integrated business model.</p>
       </div>
       <!-- ------------------------------从新修改的模块-------------------------------------------------- -->
       <div class="newModule1 seletor-box">
           <div class="newModule1div">
               <p>
                   Polaron is All About Innovation
               </p>
           </div>
       </div>
       <div class="newModule2 seletor-box">
           <div class="newModule2div">
               <p>
                   We are the 1st Adoptor of Drone Technology and 3D Measurement Simulations in Canada
               </p>
           </div>
       </div>
       <div class="happy">
           <div class="newModule3div">
               <img class="lozad" data-src="<?php echo get_template_directory_uri() . '/images/about/imgsmthree.avif'; ?>" alt="" style="width: auto; height: auto; max-width: 100%; max-height: 100%;">
           </div>
           <!-- 第二套样式 -->
           <div class="newModule3div980" style="display: none;">
               <img class="lozad" data-src="<?php echo get_template_directory_uri() . '/images/about/threeimgsm.png'; ?>" alt="" style="width: auto; height: auto; max-width: 100%; max-height: 100%;">
           </div>
       </div>
       <div class="newModule4 seletor-box">
           <div class="newModule4div">
               <p>
                   We are the Creator of the Assessment Report
                   <span style="">
                       <img class="lozad" data-src="<?php echo get_template_directory_uri() . '/images/about/IR.png'; ?>" alt="" style="width: 32px; height: 32px;">
                   </span>
                   Process
               </p>
           </div>
       </div>
       <div class="imgP seletor-box">
           <div class="imgs">
               <div class="div1">1.Structural Condition</div>
               <div class="div2">2.Roof Condition</div>
               <div class="div3">3.Existing Electrical condition</div>
               <div class="div4">4.Panel Layout</div>
               <div class="div5">5.Wiring Route</div>
               <div class="div6">6.BOS </br>Design</div>
               <div class="div7">7.Additional Costs</div>
           </div>
       </div>
       <div class="imgP767" style="display: none;">
           <div class="comimg" style="margin-top: 0px;">
               <img src="<?php echo get_template_directory_uri() . '/images/about/IR.png'; ?>" alt="" style="width: 60px; height: 60px; max-width: 100%; max-height: 100%;" alt="">
           </div>
           <div class="imgP767-box">
               <div>
                   <div>
                       <div class="comimg">
                           <img src="<?php echo get_template_directory_uri() . '/images/about/1.png'; ?>" alt="" style="width: 50px; height: 50px; max-width: 100%; max-height: 100%;" alt="">
                       </div>
                       <div class="comdiv">
                           1. Structural
                           Condition
                       </div>
                   </div>
                   <div>
                       <div class="comimg">
                           <img src="<?php echo get_template_directory_uri() . '/images/about/2.png'; ?>" alt="" style="width: 50px; height: 50px; max-width: 100%; max-height: 100%;" alt="">
                       </div>
                       <div class="comdiv">
                           2. Roof
                           Condition
                       </div>
                   </div>
                   <div>
                       <div class="comimg">
                           <img src="<?php echo get_template_directory_uri() . '/images/about/3.png'; ?>" alt="" style="width: 50px; height: 50px; max-width: 100%; max-height: 100%;" alt="">
                       </div>
                       <div class="comdiv">
                           3. Existing
                           Electrical
                           Condition
                       </div>
                   </div>
                   <div>
                       <div class="comimg">
                           <img src="<?php echo get_template_directory_uri() . '/images/about/4.png'; ?>" alt="" style="width: 50px; height: 50px; max-width: 100%; max-height: 100%;" alt="">
                       </div>
                       <div class="comdiv">
                           4. Panel
                           Layout
                       </div>
                   </div>
               </div>
               <div>
                   <div>
                       <div class="comimg">
                           <img src="<?php echo get_template_directory_uri() . '/images/about/5.png'; ?>" alt="" style="width: 50px; height: 50px; max-width: 100%; max-height: 100%;" alt="">
                       </div>
                       <div class="comdiv">
                           5. Wiring
                           Route
                       </div>
                   </div>
                   <div>
                       <div class="comimg">
                           <img src="<?php echo get_template_directory_uri() . '/images/about/6.png'; ?>" alt="" style="width: 50px; height: 50px; max-width: 100%; max-height: 100%;" alt="">
                       </div>
                       <div class="comdiv">
                           6. BOS
                           Design
                       </div>
                   </div>
                   <div>
                       <div class="comimg">
                           <img src="<?php echo get_template_directory_uri() . '/images/about/7.png'; ?>" alt="" style="width: 50px; height: 50px; max-width: 100%; max-height: 100%;" alt="">
                       </div>
                       <div class="comdiv">
                           7. Additional
                           Costs
                       </div>
                   </div>
               </div>
           </div>




       </div>
       <div class="newModule6 seletor-box">
           <div class="newModule6son1">
               <p>
                   Assessment Report
                   <span style="display: inline-block;">
                       <img class="lozad" data-src="<?php echo get_template_directory_uri() . '/images/about/IR.png'; ?>" alt="" style="width: 32px; height: 32px;">
                   </span>
                   is a Customized Site Assessment
                   Report to Address All Your Solar Design Matters.
               </p>
           </div>
           <div class="newModule6son2">
               <div>
                   Full Transparency
               </div>
               <div>
                   Professional</br>
                   Engineered Review
               </div>
               <div>
                   Eliminate Technical</br>
                   Hurdles
               </div>
           </div>
       </div>
       <!-- ---------------------------------------------------------------------------------------------- -->
       <div class="polaronp seletor-box">
           <div class="recenth2">
               <h3 class="h3Polaron">
                   <span>
                       Polaron Solar Network
                   </span>
               </h3>
           </div>
           <div class="network">
               <div style="justify-content: center;" class="block">
                   <span style="text-align: center;">
                       <img class="lozad" data-src="<?php echo get_template_directory_uri() . '/images/about/SolarEnergySocietyAlberta.png'; ?>" alt="" style="width: auto; height: auto;">
                   </span>
                   <span style="text-align: center;">
                       <img class="lozad" data-src="<?php echo get_template_directory_uri() . '/images/about/EnergyEfficiencyAlberta.png'; ?>" alt="" style="width: auto; height: auto;">
                   </span>
                   <span style="text-align: center;">
                       <img class="lozad" data-src="<?php echo get_template_directory_uri() . '/images/about/solar_installers_canada.png'; ?>" alt="" style="width: 99.2px; height: 99.2px;">
                   </span>
                   <span style="text-align: center;">
                       <img class="lozad" data-src="<?php echo get_template_directory_uri() . '/images/about/osea_3.jpg'; ?>" alt="" style="width: auto; height: auto;">
                   </span>
               </div>
               <div class="blocktwo" style="text-align: center;">
                   <span>
                       <img class="lozad" data-src="<?php echo get_template_directory_uri() . '/images/about/Efficiency-ns.png'; ?>" alt="" style="width: auto; height: auto; max-width: 100%; max-height: 100%;">
                   </span>
                   <span class="span6" style="text-align: center;">
                       <img class="lozad" data-src="<?php echo get_template_directory_uri() . '/images/about/network-of-excellence-logo.png'; ?>" alt="" style="width: auto; height: auto; max-width: 100%; max-height: 100%;">
                   </span>
                   <span style="text-align: center;">
                       <img class="lozad" data-src="<?php echo get_template_directory_uri() . '/images/about/WhatsApp-Image-2020-10-01-at-17.39.53-1.jpeg'; ?>" alt="" style="width: auto; height: auto; max-width: 100%; max-height: 100%;">
                   </span>
                   <span style="text-align: center;">
                       <img class="lozad" data-src="<?php echo get_template_directory_uri() . '/images/about/Home_Services.png'; ?>" alt="" style="width: 126px; height: 67px;">
                   </span>
               </div>
           </div>
           <div style="text-align: center; width: 70%; margin:auto;" class="losenone">
               <div style="display: flex; justify-content: space-between; align-items: center;margin-bottom: 20px;">
                   <span style="display:inline-block;width: 40%;">
                       <img class="lozad" data-src="<?php echo get_template_directory_uri() . '/images/about/SolarEnergySocietyAlberta.png'; ?>" alt="" style="width: 180px; height: auto; max-width: 100%; max-height: 100%;">
                   </span>
                   <span style="display:inline-block;width: 40%;">
                       <img class="lozad" data-src="<?php echo get_template_directory_uri() . '/images/about/EnergyEfficiencyAlberta.png'; ?>" alt="" style="width: 180px; height: auto; max-width: 100%; max-height: 100%;">
                   </span>
               </div>
               <div style="display: flex;justify-content: space-between; align-items: center;margin-bottom: 20px;">
                   <span style="display:inline-block;width: 40%;">
                       <img class="lozad dandu" data-src="<?php echo get_template_directory_uri() . '/images/about/solar_installers_canada.png'; ?>" alt="" style="width: 90px; height: auto; max-width: 100%; max-height: 100%;">
                   </span>
                   <span style="display:inline-block;width: 40%;">
                       <img class="lozad" data-src="<?php echo get_template_directory_uri() . '/images/about/osea_3.jpg'; ?>" alt="" style="width:180px; height: auto; max-width: 100%; max-height: 100%;">
                   </span>
               </div>
               <div style="display: flex;justify-content: space-between; align-items: center;margin-bottom: 20px;">
                   <span style="display:inline-block;width: 40%;">
                       <img class="lozad" data-src="<?php echo get_template_directory_uri() . '/images/about/Efficiency-ns.png'; ?>" alt="" style="width: 180px; height: auto; max-width: 100%; max-height: 100%;">
                   </span>
                   <span style="display:inline-block;width: 40%;">
                       <img class="lozad" data-src="<?php echo get_template_directory_uri() . '/images/about/network-of-excellence-logo.png'; ?>" alt="" style="width: 180px; height: auto; max-width: 100%; max-height: 100%;">
                   </span>
               </div>
               <div style="display: flex;justify-content: space-between; align-items: center;margin-bottom: 20px;">
                   <span style="display:inline-block;width: 40%;">
                       <img class="lozad" data-src="<?php echo get_template_directory_uri() . '/images/about/WhatsApp-Image-2020-10-01-at-17.39.53-1.jpeg'; ?>" alt="" style="width: 180px; height: auto; max-width: 100%; max-height: 100%;">
                   </span>
                   <span style="display:inline-block;width: 40%;">
                       <img class="lozad" data-src="<?php echo get_template_directory_uri() . '/images/about/Home_Services.png'; ?>" alt="" style="width: 180px; height: auto; max-width: 100%; max-height: 100%;">
                   </span>
               </div>
           </div>
       </div>
       <?php wp_footer(); ?>
       <!-- 底部4个地图的 -->
       <div class="seletor-box" style="margin-top: 5vw;">
           <div>
               <?php #include(TEMPLATEPATH . '/homestylebase.php') 
                ?>
           </div>
           <div>
               <?php #include(TEMPLATEPATH . '/foot-map.php') 
                ?>
               <?php include(get_template_directory()  . '/foot-map-tw.php') ?>
           </div>
           <?php
            get_footer();
            ?>
       </div>
   </div>

   </div>
   <script>
       //根据不同浏览器加载js的函数
       function loadScript(url, callback) {
           var script = document.createElement("script")
           script.type = "text/javascript";
           console.log(script.readyState)
           if (script.readyState) { //仅适用于IE <9,中用于表示脚本的加载进度。
               script.onreadystatechange = function() {
                   if (script.readyState === "loaded" || script.readyState === "complete") {
                       script.onreadystatechange = null;
                       callback();
                   }
               };
           } else { //其他浏览器，
               script.onload = function() {
                   callback();
               };
           }

           script.src = url;
           document.getElementsByTagName("head")[0].appendChild(script);
       }
       //https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js
       loadScript("https://unpkg.com/npm/gsap@3.12.2/dist/gsap.min.js", function() {
           // 滚动触发的插件
           loadScript("https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js", function() {
               loadScript("https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/EasePack.min.js", function() {
                   // 首先注册插件
                   gsap.registerPlugin(ScrollTrigger, EasePack);
                   // 添加时间线
                   let tl = gsap.timeline({
                       //我们可以把它添加到一个完整的时间轴!
                       scrollTrigger: {
                           trigger: ".solar",
                           //    pin: true, //激活时固定触发器元件
                           start: () => "top " + (window.innerHeight / 2) + "px", // 当触发器的顶部碰到视窗的顶部时
                           end: "bottom bottom", //滚动超过起始点500px后结束
                           once: true, // 使动画只执行一次
                           //    markers: true,
                           scrub: 1, // 设置平滑滚动表示滚动和动画播放的速度一致。
                           // 滚动捕捉允许将滚动位置“捕捉”到特定的点，例如时间轴上的标签位置。
                           snap: {
                               snapTo: "labels", //表示滚动位置会捕捉到时间轴上最近的标签位置。
                               duration: {
                                   min: 0.2,
                                   max: 3
                               }, //设置滚动捕捉动画的持续时间范围。
                               delay: 0.2, //最后一次滚动事件开始捕捉前等待0.2秒。 
                               ease: "power1.inOut" //设置滚动捕捉动画的缓动函数。这里使用的是 "power1.inOut" 缓动函数，可以调整动画的加速和减速效果。
                           }
                       }
                   });
                   tl.from(".solardivh3", {
                       opacity: 0,
                       y: 50, // 从下方渐显
                       duration: 1,
                       ease: "power4.out", // 缓动效果
                   });
                   const solartxtElements = document.querySelectorAll(".solartxt");
                   solartxtElements.forEach((element, index) => {
                       tl.from(element, {
                           opacity: 0,
                           y: 50,
                           duration: 2,
                           ease: "power4.out",
                       }, index * 1.5); // 这里的 0.5 表示每个元素的时间间隔
                   });



               });
           });

       });
   </script>
   </body>