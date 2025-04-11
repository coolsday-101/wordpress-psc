<?php #get_header('custom-about'); 
?>
<?php
function my_custom_head_content_pdf()
{
?>
    <title>Polaron Solar News Desk — Stay Connected With Polaon</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/page/download/css/page-download-warranty-package.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/page/download/css/page-download-warranty-package980.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/page/download/css/page-download-warranty-package767.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/page/download/css/page-download-warranty-package320.css'; ?>">
<?php
}
add_action('wp_head', 'my_custom_head_content_pdf');
// custom-about
get_header('tailwind'); // 加载头部
?>
<script src="<?php #echo get_template_directory_uri() . '/js/devicePixelRatio.js'; 
                ?>"></script>
<script>
    // onload = function() {
    //     let devicePixel = new device();
    //     devicePixel.init();
    // }
</script>
<style>
    img {
        display: inline-block;
    }
</style>

<div class="pageBody">
    <!-- <div class="head">
        <div class="headimgpdf">
            <a href="<?php #echo esc_url(home_url('/')); 
                        ?>">
                <img src="<?php #echo get_template_directory_uri() . '/images/indexImg/polaron_logo-01-300x115.png' 
                            ?>" alt="">
            </a>
        </div>
    </div> -->
    <div class="bgimg module-one">
        <div class="p-box">
            <div class="title">
                Download Product Warranty
            </div>
            <div class="downloadP">
                <div class="downloadPSon">
                    <div class="titleblueP">
                        <div class="titleblue">Solar Panel</div>
                        <div style="margin-top: 20px">
                            <p><a title="view details" target="_blank" href="<?php echo get_template_directory_uri() . '/pdf/Longi.pdf'; ?>">LONGi Solar
                                    <img class="dowimg" src="<?php echo get_template_directory_uri() . '/pdf/img/downloadpdf.png'; ?>" alt="">
                                </a></p>
                            <p><a title="view details" target="_blank" href="<?php echo get_template_directory_uri() . '/pdf/Limited Warranty PV_BiKu-MB_Module - 385MB.pdf'; ?>">Canadian Solar BIKU-MB Bifacial
                                    <img class="dowimg" src="<?php echo get_template_directory_uri() . '/pdf/img/downloadpdf.png'; ?>" alt="">
                                </a></p>
                            <p><a title="view details" target="_blank" href="<?php echo get_template_directory_uri() . '/pdf/Limited Warranty PV_Ku-MS_Module - 385MS.pdf'; ?>"> Canadian Solar KU-MS
                                    <img class="dowimg" src="<?php echo get_template_directory_uri() . '/pdf/img/downloadpdf.png'; ?>" alt="">
                                </a></p>
                            <p><a title="view details" target="_blank" href="<?php echo get_template_directory_uri() . '/pdf/Limited Warranty PV_BiHiKu_Module - 445MB.pdf'; ?>"> Canadian Solar BIHIKU Bifacial
                                    <img class="dowimg" src="<?php echo get_template_directory_uri() . '/pdf/img/downloadpdf.png'; ?>" alt="">
                                </a></p>
                            <p><a title="view details" target="_blank" href="<?php echo get_template_directory_uri() . '/pdf/PV_KuHiKu_Module_Warranty_en-v1.7.pdf'; ?>"> Canadian Solar HIKU
                                    <img class="dowimg" src="<?php echo get_template_directory_uri() . '/pdf/img/downloadpdf.png'; ?>" alt="">
                                </a></p>
                            <p><a title="view details" target="_blank" href="<?php echo get_template_directory_uri() . '/pdf/CS-Datasheet.pdf'; ?>">Canadian Solar HiKu6 (All Black)
                                    <img class="dowimg" src="<?php echo get_template_directory_uri() . '/pdf/img/downloadpdf.png'; ?>" alt="">
                                </a></p>
                            <p><a title="view details" target="_blank" href="<?php echo get_template_directory_uri() . '/pdf/PV_HiDM5_Module_Warranty_en.pdf'; ?>">Canadian Solar HiDM5
                                    <img class="dowimg" src="<?php echo get_template_directory_uri() . '/pdf/img/downloadpdf.png'; ?>" alt="">
                                </a></p>
                            <p><a title="view details" target="_blank" href="<?php echo get_template_directory_uri() . '/pdf/LR7-54HGBB%20Warranty.pdf'; ?>">LONGi Solar Modules
                                    <img class="dowimg" src="<?php echo get_template_directory_uri() . '/pdf/img/downloadpdf.png'; ?>" alt="">
                                </a></p>
                            <p><a title="view details" target="_blank" href="<?php echo get_template_directory_uri() . '/pdf/Datasheet%20LR7-54HGBB%20440-460M%20V2（30-30&15frame）-BetaV01.pdf'; ?>">Longi Solar Hi-MO7
                                    <img class="dowimg" src="<?php echo get_template_directory_uri() . '/pdf/img/downloadpdf.png'; ?>" alt="">
                                </a></p>
                        </div>
                    </div>
                    <div class="titleblueP">
                        <div class="titleblue">Inverter (only)</div>
                        <div style="margin-top: 20px">
                            <P><a title="view details" target="_blank" href="<?php echo get_template_directory_uri() . '/pdf/Apsystem.pdf'; ?>">APsystem
                                    <img class="dowimg" src="<?php echo get_template_directory_uri() . '/pdf/img/downloadpdf.png'; ?>" alt="">
                                </a></P>
                            <P><a title="view details" target="_blank" href="<?php echo get_template_directory_uri() . '/pdf/Hoymiles.pdf'; ?>">Hoymiles
                                    <img class="dowimg" src="<?php echo get_template_directory_uri() . '/pdf/img/downloadpdf.png'; ?>" alt="">
                                </a></P>
                            <P><a title="view details" target="_blank" href="<?php echo get_template_directory_uri() . '/pdf/warranty_of_megarevo_REVO_products.pdf'; ?>">Megarevo
                                <img class="dowimg" src="<?php echo get_template_directory_uri() . '/pdf/img/downloadpdf.png'; ?>" alt="">
                            </a></P>
                        </div>
                        <div class="titleblue" style="margin-top: 20px">Battery Storage</div>
                        <div style="margin-top: 20px">
                            <P><a title="view details" target="_blank" href="<?php echo get_template_directory_uri() . '/pdf/anker_solix_x1_home_energy_storage_system_warranty_policy_canada.pdf'; ?>">Anker SOLIX X1
                                    <img class="dowimg" src="<?php echo get_template_directory_uri() . '/pdf/img/downloadpdf.png'; ?>" alt="">
                                </a></P>
                            <P><a title="view details" target="_blank" href="<?php echo get_template_directory_uri() . '/pdf/13.5kwh_warranty_yimin_20241120.pdf'; ?>">APstorage Battery
                                    <img class="dowimg" src="<?php echo get_template_directory_uri() . '/pdf/img/downloadpdf.png'; ?>" alt="">
                                </a></P>
                            <P><a title="view details" target="_blank" href="<?php echo get_template_directory_uri() . '/pdf/Warranty_Pion_Power_13.5kWh_Battery_March_2025.pdf'; ?>">Pion Power Battery
                                <img class="dowimg" src="<?php echo get_template_directory_uri() . '/pdf/img/downloadpdf.png'; ?>" alt="">
                            </a></P>
                        </div>
                    </div>
                    <div class="titleblueP">
                        <div class="titleblue">Solar Rack</div>
                        <div style="margin-top: 20px">
                            <p><a title="view details" target="_blank" href="<?php echo get_template_directory_uri() . '/pdf/SunRanger Model ST‐300‐16L.pdf'; ?>">AZGARD SOLAR Ground Mount Racking
                                    <img class="dowimg" src="<?php echo get_template_directory_uri() . '/pdf/img/downloadpdf.png'; ?>" alt="">
                                </a></p>
                            <p><a title="view details" target="_blank" href="<?php echo get_template_directory_uri() . '/pdf/Pion Power Limited Warranty Metal Roof Racking.pdf'; ?>">Pion Power Metal Roof Racking
                                    <img class="dowimg" src="<?php echo get_template_directory_uri() . '/pdf/img/downloadpdf.png'; ?>" alt="">
                                </a></p>
                            <p><a title="view details" target="_blank" href="<?php echo get_template_directory_uri() . '/pdf/Pion Power Limited Warranty Shingle Roof Racking.pdf'; ?>">Pion Power Shingle Roof Racking
                                    <img class="dowimg" src="<?php echo get_template_directory_uri() . '/pdf/img/downloadpdf.png'; ?>" alt="">
                                </a></p>
                            <p><a title="view details" target="_blank" href="<?php echo get_template_directory_uri() . '/pdf/Pion Power Limited Warranty Ground Mount Racking.pdf'; ?>">Pion Power Ground Mount Racking
                                    <img class="dowimg" src="<?php echo get_template_directory_uri() . '/pdf/img/downloadpdf.png'; ?>" alt="">
                                </a></p>
                        </div>
                    </div>
                    <div class="titleblueP">
                        <div class="titleblue">Workmanship</div>
                        <div style="margin-top: 20px">
                            <p><a title="view details" target="_blank" href="<?php echo get_template_directory_uri() . '/pdf/Polaron Workmanship Warranty.pdf'; ?>">Polaron 2 Years Workmanship
                                    <img class="dowimg" src="<?php echo get_template_directory_uri() . '/pdf/img/downloadpdf.png'; ?>" alt="">
                                </a></p>
                            <p><a title="view details" target="_blank" href="<?php echo get_template_directory_uri() . '/pdf/Extended Labour Warranty.pdf'; ?>">Polaron Extended Labour Warranty 2021 & 2022
                                    <img class="dowimg" src="<?php echo get_template_directory_uri() . '/pdf/img/downloadpdf.png'; ?>" alt="">
                                </a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="image-container">
        <div class="row-down">
            <div>
                <a href="https://www.canadiansolar.com/" target="_blank">
                    <img src="<?php echo get_template_directory_uri() . '/page/download/img/canadiansolar.png' ?>" alt="">
                </a>
            </div>
            <div>
                <a href="https://www.longi.com/us/" target="_blank">
                    <img src="<?php echo get_template_directory_uri() . '/page/download/img/longji.png' ?>" alt="">
                </a>
            </div>
            <div>
                <a href="https://pionpower.ca/" target="_blank">
                    <img src="<?php echo get_template_directory_uri() . '/page/download/img/PionpowerClearLogo.png' ?>" alt="">
                </a>
            </div>
        </div>
        <div class="row-down-two">
            <div>
                <a href="https://apsystems.com/" target="_blank">
                    <img src="<?php echo get_template_directory_uri() . '/page/download/img/ap.png' ?>" alt="">
                </a>
            </div>
            <div>
                <a href="https://www.hoymiles.com/" target="_blank">
                    <img src="<?php echo get_template_directory_uri() . '/page/download/img/hoymile.png' ?>" alt="">
                </a>
            </div>
        </div>
        <a href="<?php echo esc_url(home_url('/about-solar-system')); ?>" target="_blank">
            <div class="but-ex">
                <span>
                    Explore Polaron’s Top Tier Solar Equipment
                </span>
            </div>
        </a>
    </div>
    <?php wp_footer(); ?>
    <!-- 底部4个地图的 -->
    <div style="margin-top: 50px;">
        <div>
            <?php #include(TEMPLATEPATH . '/homestylebase.php') 
            ?>
        </div>
        <div>
            <?php #include(TEMPLATEPATH . '/foot-map.php') 
            ?>
            <?php include(get_template_directory()  . '/foot-map-tw.php') ?>
        </div>
        <?php get_footer(); ?>
    </div>
</div>
</div>
</body>
<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri() . '/pdf/qm.js' ?>"></script>
<script type="text/javascript">
    let medias = document.getElementsByClassName("media");
    medias[0].onclick = function() {
        let newpdf = window.open();
        newpdf.document.write("<?php echo get_template_directory_uri() . '/pdf/Canadian Solar 335_340.pdf'; ?>");
    }
</script>