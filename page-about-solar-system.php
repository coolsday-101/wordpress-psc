<?php
function my_custom_head_content_ass()
{
?>
    <title>Polaron Makes It Easy To Go Solar In Canada | About Our Systems</title>
    <script src="<?php echo get_template_directory_uri() . '/js/lozad.min.js' ?>"></script>
    <meta name="description" content="No.1 residential solar installer. For 10+ years, Polaron has endured as the largest solar company in Canada—with over 12,000 installs across the nation.">
    <meta name="keywords" content="solar installer, solar energy, solar panels">
    <meta name="author" content="Polaron Solar">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/page-about-solar-system.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/webpage/aboutsolarsystem/aboutsolarsystem980.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/webpage/aboutsolarsystem/aboutsolarsystem767.css'; ?>">
    <style>
        .leftarrowtxt {
            display: flex;
            align-items: center;
        }
    </style>
<?php
}
add_action('wp_head', 'my_custom_head_content_ass');
get_header('tailwind'); // 加载头部
?>

<!-- class="head-pt" -->
<div>
    <div class="backgroundimg">
        <div class="backgroundimgh1p">
            <div class="backgroundimgh1">
                <h1>
                    Every Brand and Product is Hand Selected to Provide the Highest Efficiency and Quality
                </h1>
            </div>
        </div>
    </div>
    <!-- ---------------------------------------------------------------------------------- -->
    <div class="h2p">
        <div class="h2">
            <h2>Solar Panels</h2>
        </div>
    </div>
    <!-- ----------------------------------------------- -->
    <div class="blue" style="">
        <div class="blueson" style="">
            <div class="panels" style="flex: 1.5;width: 0;">
                <div class="panelsh2">
                    <h2>
                        <span style="font-family: 'Overpass',Helvetica,Arial,Lucida,sans-serif;
                        font-weight: 800;
                        font-size: 48px;
                        color: #ffffff!important;
                        text-align: left;">
                            Mono Panels VS Poly Panels
                        </span>
                    </h2>
                </div>
                <div>
                    <h3>
                        <span style="font-family: 'Overpass',Helvetica,Arial,Lucida,sans-serif;
                        font-size: 26px;
                        color: #ffffff!important;
                        line-height: 1.7em;
                        text-align: left;">
                            Mono’s Performance under low light
                            conditions and cold weather is superior to
                            polycrystalline panels, paired with the
                            durability under winter conditions these
                            panels are made for the great white north+
                        </span>
                    </h3>
                </div>
            </div>
            <div class="momo" style="margin-right: 4%;flex: 1;width: 0;">
                <h3>Mono</h3>
                <span class="spanimg">
                    <img class="lozad" data-src="<?php echo get_template_directory_uri() . '/images/about-solar-system/mono-Panel.jpg'; ?>" alt="" style="width: 423px; height: 238px;">
                </span>
                <div class="leftarrowtxt">
                    <span><img class="lozad" data-src="<?php echo get_template_directory_uri() . '/images/arrows/rightArrow.svg'; ?>" alt=""></span>
                    <h4>Expensive</h4>
                </div>
                <div class="leftarrowtxt">
                    <span>
                        <img class="lozad" data-src="<?php echo get_template_directory_uri() . '/images/arrows/rightArrow.svg'; ?>" alt=""></span>
                    <h4>More efficient</h4>
                </div>
                <div class="leftarrowtxt">
                    <span><img class="lozad" data-src="<?php echo get_template_directory_uri() . '/images/arrows/rightArrow.svg'; ?>" alt=""></span>
                    <h4>Black hue</h4>
                </div>
                <div class="divbut">
                    <a href="https://www.longi.com/us/" target="view_window" style="font-size: 18px;">
                        Learn more
                    </a>
                </div>
            </div>
            <div class="momo" style="flex: 1;width: 0;">
                <h3>Poly</h3>
                <span class="spanimg">
                    <img class="lozad" data-src="<?php echo get_template_directory_uri() . '/images/about-solar-system/Poly-Panel.jpg'; ?>" alt="" style="width: 423px; height: 238px;">
                </span>
                <div class="leftarrowtxt">
                    <span><img class="lozad" data-src="<?php echo get_template_directory_uri() . '/images/arrows/rightArrow.svg'; ?>" alt=""></span>
                    <h4>Less expensive</h4>
                </div>
                <div class="leftarrowtxt">
                    <span><img class="lozad" data-src="<?php echo get_template_directory_uri() . '/images/arrows/rightArrow.svg'; ?>" alt=""></span>
                    <h4>Less efficient</h4>
                </div>
                <div class="leftarrowtxt">
                    <span><img class="lozad" data-src="<?php echo get_template_directory_uri() . '/images/arrows/rightArrow.svg'; ?>" alt=""></span>
                    <h4>Blue hue</h4>
                </div>
                <div class="divbut">
                    <a href="https://www.energysage.com/solar/101/monocrystalline-vs-polycrystalline-solar-panels/%20%20" target="_blank" style="font-size: 18px;">
                        Learn more
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- 换下来的第二套样式 -->
    <div class="blueTwo" style="display:none; background-color: #1D6AE5;font-family: 'Overpass',Helvetica,Arial,Lucida,sans-serif; padding-bottom: 3vw;">
        <div>
            <div style="width: 80%; margin:0 auto;font-family: 'Overpass',Helvetica,Arial,Lucida,sans-serif;
                    font-weight: 800;
                    font-size: 32px;
                    color: #ffffff!important;padding-top:5vw;
                    text-align: left;">
                Mono Panels VS Poly Panels
            </div>
            <div style="width: 80%; margin:0 auto;font-family: 'Overpass',Helvetica,Arial,Lucida,sans-serif;
                    font-size: 22px;
                    color: #ffffff!important;
                    line-height: 1.7em;
                    text-align: left;padding-top:3vw;">
                Mono’s Performance under low light
                conditions and cold weather is superior to
                polycrystaline panels, paired with the
                durability under winter conditions these
                panels are made for the great white north+
            </div>
        </div>
        <div class="width580" style="display: flex; width: 80%;margin:5vw auto;justify-content: center;">
            <div class="width580son">
                <h3 style="color: white; font-size:32px;font-weight: 800;">Mono</h3>
                <span class="span" style="display: inline-block; width:60%; height: auto">
                    <img class="lozad" data-src="<?php echo get_template_directory_uri() . '/images/about-solar-system/mono-Panel.jpg'; ?>" alt="" style="width: auto; height: auto; max-width: 100%; max-height: 100%;">
                </span>
                <div style="display: flex;align-items:center;margin-left:5%; margin-top:3%;">
                    <span><img class="lozad" data-src="<?php echo get_template_directory_uri() . '/images/arrows/rightArrow.svg'; ?>" alt=""></span>
                    <h4 style="color: white;">Expensive</h4>
                </div>
                <div style="display: flex;align-items:center;margin-left:5%; margin-top:3%;">
                    <span><img class="lozad" data-src="<?php echo get_template_directory_uri() . '/images/arrows/rightArrow.svg'; ?>" alt=""></span>
                    <h4 style="color: white;">More efficient</h4>
                </div>
                <div style="display: flex;align-items:center;margin-left:5%; margin-top:3%;">
                    <span><img class="lozad" data-src="<?php echo get_template_directory_uri() . '/images/arrows/rightArrow.svg'; ?>" alt=""></span>
                    <h4 style="color: white;">Black hue</h4>
                </div>
                <div class="triangleBut" style="">
                    <a href="https://www.longi.com/us/" target="view_window" style="font-size: 18px;">
                        Learn more
                    </a>
                </div>
            </div>
            <div class="width580sonTwo">
                <h3 style="color: white; font-size:32px;font-weight: 800;">Poly</h3>
                <span style="display: inline-block; width:100%; height: auto">
                    <img class="lozad" data-src="<?php echo get_template_directory_uri() . '/images/about-solar-system/Poly-Panel.jpg'; ?>" alt="" style="width: auto; height: auto; max-width: 100%; max-height: 100%;">
                </span>
                <div style="display: flex;align-items:center;margin-left:5%; margin-top:3%;">
                    <span><img class="lozad" data-src="<?php echo get_template_directory_uri() . '/images/arrows/rightArrow.svg'; ?>" alt=""></span>
                    <h4 style="color: white;">Less expensive</h4>
                </div>
                <div style="display: flex;align-items:center;margin-left:5%; margin-top:3%;">
                    <span><img class="lozad" data-src="<?php echo get_template_directory_uri() . '/images/arrows/rightArrow.svg'; ?>" alt=""></span>
                    <h4 style="color: white;">Less efficient</h4>
                </div>
                <div style="display: flex;align-items:center;margin-left:5%; margin-top:3%;">
                    <span><img class="lozad" data-src="<?php echo get_template_directory_uri() . '/images/arrows/rightArrow.svg'; ?>" alt=""></span>
                    <h4 style="color: white;">Blue hue</h4>
                </div>
                <div class="triangleBut" style="">
                    <a href="https://www.energysage.com/solar/101/monocrystalline-vs-polycrystalline-solar-panels/%20%20" target="_blank" style="font-size: 18px;">
                        Learn more
                    </a>
                </div>
            </div>
        </div>

    </div>
    <!-- ------------------------------------------------------------------------------------------ -->
    <div class="h2p">
        <div class="h2">
            <h2>Inverters</h2>
        </div>
    </div>
    <!-- ---------------------------------------------------------------------------------------- -->
    <div class="inverters">
        <div class="invertersdiv">
            <h2>
                <span style="font-family: 'Overpass',Helvetica,Arial,Lucida,sans-serif;
                    font-weight: 800;
                    font-size: 48px;
                    color: #25282d!important;
                    text-align: center;">
                    When it comes to our inverters, we only use the best
                </span>
            </h2>
        </div>
        <div>
            <h3>
                <span style="font-family: 'Overpass',Helvetica,Arial,Lucida,sans-serif;
                font-size: 26px;
                color: #25282d!important;
                text-align: center;">
                    All of our installs use micro-inverters—and for good reason
                </span>
            </h3>
        </div>
        <!-- 第一套样式 -->
        <div class="installs">
            <div style="display: flex;flex-direction: column;align-items: center;">
                <span style="">
                    <img class="lozad" data-src="<?php echo get_template_directory_uri() . '/images/about-solar-system/tier-1.png'; ?>" alt="" style="width:70px;height:auto;">
                </span>
                <h4>
                    Tier 1 Micro-Inverters
                </h4>
            </div>
            <div style="display: flex;flex-direction: column;align-items: center;">
                <span>
                    <img class="lozad" data-src="<?php echo get_template_directory_uri() . '/images/about-solar-system/ca-weather.png'; ?>" alt="" style="width: 100px;height: auto;">
                </span>
                <h4>
                    Built For Canadian Weather
                </h4>
            </div>
            <div style="display: flex;flex-direction: column;align-items: center;">
                <span>
                    <img class="lozad" data-src="<?php echo get_template_directory_uri() . '/images/about-solar-system/high-efficiency.png'; ?>" alt="" style="width: 95px; height: auto;">
                </span>
                <h4>
                    High Efficiency Ratings
                </h4>
            </div>
        </div>
        <!-- 第二套样式 -->
        <div class="installsTwo" style="text-align: center;font-family: 'Overpass',Helvetica,Arial,Lucida,sans-serif; display:none;">
            <div style="margin-top: 30px;">
                <span style="display: block; width:150px; height: 150px; margin: 0 auto;">
                    <img class="lozad" data-src="<?php echo get_template_directory_uri() . '/images/about-solar-system/tier-1.png'; ?>" alt="">
                </span>
                <h4 style="font-size: 18px;
                font-weight: 900;  text-align: center; width:50%;margin: 0 auto; line-height: 1.6em;font-family: 'Overpass',Helvetica,Arial,Lucida,sans-serif;
                margin-top: 25px;">
                    Tier 1 Micro-Inverters
                </h4>
            </div>
            <div style="margin-top: 50px;">
                <span style="display: block; width:150px; height: 150px; margin: 0 auto;">
                    <img class="lozad" data-src=" <?php echo get_template_directory_uri() . '/images/about-solar-system/ca-weather.png'; ?>" alt="">
                </span>
                <h4 style="font-size: 18px;
                font-weight: 900;  text-align: center; width:50%;margin: 0 auto; 
                line-height: 1.6em;font-family: 'Overpass',Helvetica,Arial,Lucida,sans-serif;margin-top: 25px;">
                    Built For Canadian Weather
                </h4>
            </div>
            <div style="margin-top: 50px;">
                <span style="display: block; width:150px; height: 150px; margin: 0 auto;">
                    <img class="lozad" data-src=" <?php echo get_template_directory_uri() . '/images/about-solar-system/high-efficiency.png'; ?>" alt="">
                </span>
                <h4 style="font-size: 18px;
                font-weight: 900;  text-align: center; width:50%;margin: 0 auto;line-height: 1.6em;
                font-family: 'Overpass',Helvetica,Arial,Lucida,sans-serif;margin-top: 25px;">
                    High Efficiency Ratings
                </h4>
            </div>
        </div>
    </div>
    <!-- -------------------------------------------------------------------------------------- -->
    <!-- 第一套样式 -->
    <div class="our" style="">
        <div class="ourson">
            <div style="flex: 1;margin-right: 3%;">
                <h2 class="mb4787" style="font-family: 'Overpass',Helvetica,Arial,Lucida,sans-serif;
                font-weight: 800;
                font-size: 48px;
                color: #000000!important;">
                    Our Inverters
                </h2>
                <p style="color: #25282d;line-height: 1.8em;text-align: left;font-size: 18px;font-family: 'Overpass',Helvetica,Arial,Lucida,sans-serif;">
                    We offer our clients advanced, powerful
                    solar micro-inverter technology for residential
                    and commercial systems. Our solutions combine
                    highly efficient power inversion with user-friendly
                    monitoring to bring you reliable, sustainable energy.
                    Our proprietary system architecture increases solar
                    harvest and ensures maximum output for PV array.
                </p>
            </div>
            <div class="transfrom" style="text-align: center;flex: 1;margin-right: 3%;">
                <span class="mb4787">
                    <img class="lozad" data-src="<?php echo get_template_directory_uri() . '/images/about-solar-system/DS3.png'; ?>" alt="">
                </span>
                <h3 class="mb4787" style="font-family: 'Overpass',Helvetica,Arial,Lucida,sans-serif;
                    font-weight: 800;
                    font-size: 36px;
                    color: #000000!important;
                    text-align: center;
                    line-height: 1em;">
                    DS3
                </h3>
                <div class="butBlue mb4787">
                    <a href="https://polaronsolar.com/wordpress/wp-content/uploads/2020/02/DS3.pdf" target="newpage" style="font-size: 20px;font-family: 'Overpass',Helvetica,Arial,Lucida,sans-serif;">
                        Learn more</a>
                </div>
            </div>
            <div class="transfrom" style="text-align: center;flex: 1;">
                <span class="mb4787">
                                       <img class="lozad" data-src="<?php echo get_template_directory_uri() . '/images/about-solar-system/QT2.png'; ?>" alt="">
                </span>
                <h3 class="mb4787" style="font-family: 'Overpass',Helvetica,Arial,Lucida,sans-serif;
                    font-weight: 800;
                    font-size: 36px;
                    color: #000000!important;
                    text-align: center;
                    line-height: 1em;">
                    QT2
                </h3>
                <div class="butBlue mb4787">
                    <a href="https://polaronsolar.com/wordpress/wp-content/uploads/2020/02/QT2.pdf" target="newpage" style="font-size: 20px;font-family: 'Overpass',Helvetica,Arial,Lucida,sans-serif;">
                        Learn more</a>
                </div>
            </div>
        </div>
    </div>
    <!-- 第二套样式 -->
    <div style="display: none;" class="ourTwo">
        <div style="text-align: left;">
            <h2 class="font36px" style="font-family: 'Overpass',Helvetica,Arial,Lucida,sans-serif;
            font-weight: 800;
            font-size: 48px;
            color: #000000!important; width: 80%;margin:30px auto;">
                Our Inverters
            </h2>
            <p style="line-height: 1.8em;text-align: left;font-size: 18px;font-family: 'Overpass',Helvetica,Arial,Lucida,sans-serif;
            width:80%; margin:30px auto;
            ">
                We offer our clients advanced, powerful
                solar micro-inverter technology for residential
                and commercial systems. Our solutions combine
                highly efficient power inversion with user-friendly
                monitoring to bring you reliable, sustainable energy.
                Our proprietary system architecture increases solar
                harvest and ensures maximum output for PV array.
            </p>
        </div>
        <div class="width80" style="width: 60%;text-align: center; margin: 60px auto;">
            <span style="display: block; width:100%; height:auto;">
                <img class="lozad" data-src="<?php echo get_template_directory_uri() . '/images/about-solar-system/YC600_compressed.png'; ?>" alt="">
            </span>
            <h3>YC600</h3>
            <div class="butBlue" style="margin: 0 auto!important;">
                <a href="https://s3-us-east-2.amazonaws.com/polaron/wp-content/uploads/2020/02/27010807/YC600.pdf" target="newpage">
                    Learn more</a>
            </div>
        </div>
        <div class="width80" style="width: 60%; text-align: center; margin: 60px auto;">
            <span style="display: block; width:100%; height:auto;">
                <img class="lozad" data-src="<?php echo get_template_directory_uri() . '/images/about-solar-system/QS1_compressed.png'; ?>" alt="">
            </span>
            <h3>QS1</h3>
            <div class="butBlue" style="margin: 0 auto!important;">
                <a href="https://s3-us-east-2.amazonaws.com/polaron/wp-content/uploads/2020/02/27010817/QS1-Micro-inverter-spec-sheet.pdf" target="newpage">Learn
                    more</a>
            </div>
        </div>
    </div>
    <!-- ------------------------------------------------------------- -->
    <div class="advantages">
        <div class="h2">
            <h2>
                <span style="font-family: 'Overpass',Helvetica,Arial,Lucida,sans-serif;font-family: 'Overpass',Helvetica,Arial,Lucida,sans-serif;
                font-weight: 800;
                font-size: 48px;
                color: #ffffff!important;
                text-align: center;">
                    Advantages of micro-inverters
                </span>
            </h2>
        </div>
    </div>
    <!-- ------------------------------------============= -->
    <div class="pg54 padg4">
        <div class="inverterimg">
            <span>
                <img class="lozad" data-src="<?php echo get_template_directory_uri() . '/images/about-solar-system/micro-and-string-inverter.png'; ?>" alt="">
            </span>
        </div>
        <div class="efficiency ">
            <h2 style="margin-top: 54px;">
                <span class="font36px" style="font-family: 'Overpass',Helvetica,Arial,Lucida,sans-serif;
                font-weight: 800;
                font-size: 48px;
                color: #25282d!important;
                text-align: center;
                padding-top: 54px;">
                    Higher Efficiency
                </span>
            </h2>
            <h3>
                <span style="font-family: 'Overpass',Helvetica,Arial,Lucida,sans-serif;
                font-size: 22px;
                color: #25282d!important;
                line-height: 1.7em;
                text-align: center;">
                    Unlike String links all panels in series, Micro inverters
                    links all panels in parallel, which ensures that all your panels are
                    working independent at the highest efficiency.
                </span>
            </h3>
        </div>
    </div>
    <!-- ---------------------------------------------------------------------- -->
    <!-- 第一套样式 -->
    <div class="safer" style="display: flex;justify-content: space-between;align-items: center;max-width: 1280px;">
        <div class="saferimg" style="width:50%;">
            <img class="lozad" data-src="<?php echo get_template_directory_uri() . '/images/about-solar-system/Safer-for-your-home-1.png'; ?>" alt="" style="max-width: 500px;">
        </div>
        <div class="safertxt">
            <h2>
                <span style="font-family: 'Overpass',Helvetica,Arial,Lucida,sans-serif;
                font-weight: 800;
                font-size: 48px;
                color: #25282d!important;
                text-align: center;
            ">Safer For Your Home</span>
            </h2>
            <h3>
                <span style="font-family: 'Overpass',Helvetica,Arial,Lucida,sans-serif;
                font-size: 26px;
                color: #25282d!important;
                line-height: 1.7em;
                text-align: center;">
                    Microinverters convert raw power to safe energy at the microlevel,
                    ensuring that there is no high voltage running on the roof at anytime.
                    This significantly reduces the risk of fires.
                </span>
            </h3>
        </div>
    </div>
    <!-- ------------------------------------------------- -->
    <div class="monitoring">
        <div class="monitoringimg">
            <img class="lozad" data-src="<?php echo get_template_directory_uri() . '/images/about-solar-system/AP-system-Monitoring-image-1024x802.png'; ?>" alt="">
        </div>
        <div>
            <h2>
                <span style="font-family: 'Overpass',Helvetica,Arial,Lucida,sans-serif;
                font-weight: 800;
                font-size: 48px;
                color: #25282d!important;
                text-align: center;" class="fontSize">
                    More Dynamic System Monitoring
                </span>
            </h2>
            <h3>
                <span style="font-family: 'Overpass',Helvetica,Arial,Lucida,sans-serif;
                font-size: 26px;
                color: #25282d!important;
                line-height: 1.7em;
                text-align: center;" class="fontSizeTxt">
                    Monitoring App and webclient allows customers to see individual panel
                    production. Easy to use and informative this interface provides all
                    the information you need.
                </span>
            </h3>
        </div>
    </div>
    <!-- 底部 -->
    <div>
        <?php include(get_template_directory() . '/faqstylebase.php') ?>
        <?php #include(TEMPLATEPATH . '/foot-map.php') 
        ?>
        <?php include(get_template_directory()  . '/foot-map-tw.php') ?>
        <?php get_footer(); ?>
    </div>
</div>
</div>
<!-- 懒加载的渲染的js -->
<script>
    // const observer = lozad();
    // observer.observe();
    // const observer = lozad('.lozad',{
    //      rootMargin: '10px 0px',
    //      threshold: 0.1
    // });
    // observer.observe();
</script>
<script>
    // onload = function() {
    //     let devicePixel = new device();
    //     devicePixel.init();
    // }
</script>
</body>