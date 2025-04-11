 <?php
    function my_custom_head_content()
    {
    ?>
     <title>Polaron Makes It Easy to Go Solar – Canada’s largest Solar Installer</title>
     <meta name="description" content="For 11 years, Polaron has endured as the largest solar company in Canada— Becoming #1 solar installer with over 12,000 households across the nation." />
     <meta name="keywords" content="solar, solar panel, solar panel provider, solar power">
     <meta name="author" content="Polaron Solar">
     <meta name="google-site-verification" content="cEJ0k0nNPMObjyEO2PiW8FRLLsh2biJd5V6r4ZXrExE" />
     <link rel="stylesheet" href="https://unpkg.com/npm/@glidejs/glide/dist/css/glide.core.min.css">
     <link rel="stylesheet" href="https://unpkg.com/npm/@glidejs/glide/dist/css/glide.theme.min.css">
     <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
     <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/page/index/css/index1920.css'; ?>">
     <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/page/index/css/index1200.css'; ?>">
     <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/page/index/css/index980.css'; ?>">
     <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/page/index/css/index767.css'; ?>">
     <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/page/index/css/index430.css'; ?>">
     <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/page/index/css/index320.css'; ?>">
     <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/page/index/css/gsap-index.css'; ?>">
 <?php
    }
    add_action('wp_head', 'my_custom_head_content');
    get_header('tailwind'); // 加载头部
    ?>


 <!-- <body> -->
 <div class="index-modeule-one">
     <div class="mask-layer"></div>
     <div class="modeule-one-all-box">
         <div class="modeule-one-left-box">
             <div class="modeule-one-first-title">Go solar and reduce your energy bills. For good.</div>
             <div class="modeule-one-text">Significantly reduce your electric bills by going solar with 0% financing.</div>
             <div class="modeule-one-text-two">Fill out our 15 SECOND survey to see if you're qualified for incredible, monthly solar savings.</div>
             <div class="modeule-one-btn">
                 <a target="_blank" href="https://polaronsolar.com/survey">
                     Qualify Now!
                 </a>
             </div>
         </div>
         <div class="modeule-one-right-box"></div>
     </div>
 </div>
 <!-- 第二第三模块换位置 -->
 <div class="index-modeule-three">
     <div class="modeule-three-title">Leading Solar in Canada</div>
     <div class="modeule-three-province">
         <div class="modeule-three-province-left">
             <div class="province-description-box">
                 <div class="modeule-three-province-title">
                 </div>
                 <div class="modeule-three-province-description">
                     We offer all-inclusive packages that include design, financial planning,
                     installation, and professional maintenance.
                 </div>
                 <div class="modeule-three-province-btn" style="display: none;">
                     <a href="https://polaronsolar.com/live-data/" target="_blank">
                         <span>Check out how our live projects are performing</span>
                     </a>
                     <!-- <span></span> -->
                 </div>
             </div>
             <div class="province-description-box" style="display: none;">
                 <div class="modeule-three-province-title">
                     Alberta
                 </div>
                 <div class="modeule-three-province-description">
                     <span>1100</span> Projects</br>
                     <span>11 MW</span> Solar Energy Production</br>
                     <span>61 K</span> Equivalent Trees Planted</br>
                     <span>5.9 K</span> Tons Greenhouse Gases Reduced Each Year</br>
                 </div>
                 <div class="modeule-three-province-btn">
                 </div>
             </div>
             <div class="province-description-box" style="display: none;">
                 <div class="modeule-three-province-title">
                     British Columbia
                 </div>
                 <div class="modeule-three-province-description">
                     <span>120</span> Projects</br>
                     <span>0.96 MW</span> Solar Energy Production</br>
                     <span>44 K</span> Equivalent Trees Planted</br>
                     <span>0.53 K</span> Tons Greenhouse Gases Reduced Each Year</br>
                 </div>
                 <div class="modeule-three-province-btn">
                 </div>
             </div>
             <div class="province-description-box" style="display: none;">
                 <div class="modeule-three-province-title">
                     Nova Scotia
                 </div>
                 <div class="modeule-three-province-description">
                     <span>3,200</span> Projects</br>
                     <span>30.2 MW</span> Solar Energy Production</br>
                     <span>172 k</span> Equivalent Trees Planted</br>
                     <span>16.7 k</span> Tons Greenhouse Gases Reduced Each Year</br>
                 </div>
                 <div class="modeule-three-province-btn">
                 </div>
             </div>
             <div class="province-description-box" style="display: none;">
                 <div class="modeule-three-province-title">
                     Prince Edward Island
                 </div>
                 <div class="modeule-three-province-description">
                     <span>2,500</span> Projects</br>
                     <span>30.2 MW</span> Solar Energy Production</br>
                     <span>166 k</span> Equivalent Trees Planted</br>
                     <span>16 k</span> Tons Greenhouse Gases Reduced Each Year</br>
                 </div>
                 <div class="modeule-three-province-btn">
                 </div>
             </div>
             <div class="province-description-box" style="display: none;">
                 <div class="modeule-three-province-title">
                     Ontario
                 </div>
                 <div class="modeule-three-province-description">
                     <span>3,000</span> Projects</br>
                     <span>31.1 MW</span> Solar Energy Production</br>
                     <span>177 k</span> Equivalent Trees Planted</br>
                     <span>17 k</span> Tons Greenhouse Gases Reduced Each Year</br>
                 </div>
                 <div class="modeule-three-province-btn">
                 </div>
             </div>
         </div>
         <div class="modeule-three-province-right">
             <div class="modeule-three-right-province-box">
                 <div class="alb-box p-box modeule-three-right-border">
                     <div>
                         <span class="deco" id="decoAlb"><i></i></span>
                     </div>
                     <div>Alberta</div>
                     <a href="https://polaronsolar.com/alberta/" target="_blank" rel="noopener noreferrer">
                         <div class="province-btn" style="display:none;">Polaron in Alberta</div>
                     </a>
                 </div>
                 <div class="bc-box p-box modeule-three-right-border">
                     <div>
                         <span class="deco" id="decoBc"><i></i></span>
                     </div>
                     <div>
                         British Columbia
                     </div>
                     <a href="https://polaronsolar.com/british-columbia/" target="_blank" rel="noopener noreferrer">
                         <div class="province-btn" style="display:none;">Polaron in British Columbia</div>
                     </a>
                 </div>
                 <div class="ns-box p-box modeule-three-right-border">
                     <div>
                         <span class="deco" id="decoNs"><i></i></span>
                     </div>
                     <div>
                         Nova Scotia
                     </div>
                     <a href="https://polaronsolar.com/nova-scotia/" target="_blank" rel="noopener noreferrer">
                         <div class="province-btn" style="display:none;">Polaron in Nova Scotia</div>
                     </a>
                 </div>
                 <div class="pei-box p-box modeule-three-right-border">
                     <div>
                         <span class="deco" id="decoPei"><i></i></span>
                     </div>
                     <div>
                         Prince Edward Island
                     </div>
                     <a href="https://polaronsolar.com/prince-edward-island/" target="_blank" rel="noopener noreferrer">
                         <div class="province-btn" style="display:none;">Polaron in Prince Edward Island</div>
                     </a>
                 </div>
                 <div class="on-box p-box">
                     <div>
                         <span class="deco" id="decoOn"><i></i></span>
                     </div>
                     <div>
                         Ontario
                     </div>
                     <a href="https://polaronsolar.com/ontario/" target="_blank" rel="noopener noreferrer">
                         <div class="province-btn" style="display:none;">Polaron in Ontario</div>
                     </a>
                 </div>
             </div>
         </div>
     </div>
     <div class="modeule-three-province-btn" style="text-align: center;">
         <a href="https://polaronsolar.com/live-data/" target="_blank">
             <span>Take a live look at how your neighbour’s solar projects are performing </span>
         </a>
         <!-- <span></span> -->
     </div>
 </div>
 <div class="index-modeule-two">
     <div class="modeule-two-all-box">
         <div class="modeule-two-title">
             Join the Largest Solar Family in Canada
         </div>
         <div class="modeule-two-all-number-box" id="modeule-two">
             <div class="">
                 <div class="modeule-two-number">
                     <span id="value1">0</span> +
                 </div>
                 <div class="modeule-two-text">Solar Projects Nationwide</div>
             </div>
             <div class="">
                 <div class="modeule-two-number">
                     <span id="value2">0</span> MW
                 </div>
                 <div class="modeule-two-text">Installed Nationwide</div>
             </div>
             <div class="">
                 <div class="modeule-two-number">
                     <span id="value3">0</span> Years
                 </div>
                 <div class="modeule-two-text">of Dedicated Service</div>
             </div>
         </div>
     </div>
 </div>
 <div class="index-modeule-four">
     <div class="modeule-four-all-box">
         <div class="modeule-four-title">
             Top Awarded Solar Company
         </div>
         <div class="award-all-box">
             <div>
                 <div class="award-img-box">
                     <img src="<?php echo get_template_directory_uri() . '/page/index/img/Best-of-the-Best-2022_reversed.png' ?>" alt="">
                 </div>
                 <div class="award-text-box">
                     <p class="award-text-year">2022</p>
                     <p class="award-text">
                         HomeStars</br>Best of the Best Winner
                     </p>
                 </div>
             </div>
             <div>
                 <div class="award-img-box">
                     <img src="<?php echo get_template_directory_uri() . '/page/index/img/TC_2022_2_Yrs_Tag.png' ?>" alt="">
                 </div>
                 <div class="award-text-box">
                     <p class="award-text-year">2022</p>
                     <p class="award-text">Consumer Choice Award</br>2 Year Winner</p>
                 </div>
             </div>
             <div>
                 <div class="award-img-box">
                     <img src="<?php echo get_template_directory_uri() . '/page/index/img/energy-business-review.png' ?>" alt="">
                 </div>
                 <div class="award-text-box">
                     <p class="award-text-year">2023</p>
                     <p class="award-text">Top Solar Energy Services</br>Provider in Canada</p>
                 </div>
             </div>
             <div>
                 <div class="award-img-box">
                     <img src="<?php echo get_template_directory_uri() . '/page/index/img/TorontoCentral_Year3.png' ?>" alt="">
                 </div>
                 <div class="award-text-box">
                     <p class="award-text-year">2023</p>
                     <p class="award-text">
                         Consumer Choice Award</br>3 Year Winner
                     </p>
                 </div>
             </div>
             <div>
                 <div class="award-img-box">
                     <img src="<?php echo get_template_directory_uri() . '/page/index/img/HS-BOA-2023-best_of_year.png' ?>" alt="">
                 </div>
                 <div class="award-text-box">
                     <p class="award-text-year">2023</p>
                     <p class="award-text">HomeStars</br>Best of Award Winner</p>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <div class="index-modeule-five">
     <div class="module-five-all-box">
         <div class="module-five-box">
             <div class="pin-spacer">
                 <div class="parallax-all-box">
                     <div class="parallax-text-all-box">
                         <div class="lessen-text-box">
                             <span>We Aim</span>&nbsp;
                             <span>to Create a</span><br>
                             <span class="generation-box">MICRO-GENERATION</span><br>
                             <span>FUTURE</span>
                         </div>
                         <div class="shadow" style="display: none;">
                             <div class="shadow-inner">
                                 <span>We Aim</span> &nbsp;
                                 <span>to Create a</span><br>
                                 <span class="generation-box">MICRO-GENERATION</span><br>
                                 <span>FUTURE</span>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <div class="index-modeule-six">
     <div class="modeule-six-all">
         <div class="modeule-six-title">Discover Your Home’s Solar Energy Potential</div>
         <div class="modeule-six-all-box">
             <div class="modeule-six-img-box">
                 <img src="<?php echo get_template_directory_uri() . '/page/index/img/home.png' ?>" alt="">
             </div>
             <div class="modeule-six-right">
                 <div class="six-right-first-title">Wondering just how much energy you could generate with solar?</div>
                 <div class="six-right-second-title">Use our calculator to get an estimate of how much energy you can produce each year.</div>
                 <div class="six-right-tabs">
                     <ul id="myTab" class="nav nav-tabs navs navigationOne" style="">
                         <li class="active">
                             <!-- a里面的id和下面div里面的id对应起来就可以完成点击跳转 -->
                             <a href="#alberta" data-toggle="tab" style="">Alberta</a>
                         </li>
                         <li>
                             <a href="#bc" data-toggle="tab" style="">BC</a>
                         </li>
                         <li>
                             <a href="#novaScotia" data-toggle="tab" style="">NS</a>
                         </li>
                         <li>
                             <a href="#ontario" data-toggle="tab" style="">Ontario</a>
                         </li>
                         <li>
                             <a href="#pel" data-toggle="tab" style="">PEI</a>
                         </li>
                     </ul>
                     <div id="myTabContent" class="tab-content tab-content-mg" style="">
                         <div class="tab-pane active " id="alberta">
                             <div class="size-roof">Size of Suitable Facing Roof ( Sqft )</div>
                             <div id="six-samll-slider" class="layui-slider six-samll-slider"></div>
                             <div class="slider-text">Based on PV System:
                                 <span id="ab-num-one" class="ab-num-one">5.5 kW</span>
                             </div>
                             <div class="slider-text">Est. Energy Production:
                                 <span id="ab-num-two" class="ab-num-two">6956.9 KWh/year*</span>
                             </div>
                         </div>
                         <div class="tab-pane" id="bc">
                             <div class="size-roof">Size of Suitable Facing Roof ( Sqft )</div>
                             <div id="six-samll-slider-bc" class="layui-slider"></div>
                             <div class="slider-text">Based on PV System:
                                 <span id="ab-num-one-bc" class="ab-num-one">5.5 kW</span>
                             </div>
                             <div class="slider-text">Est. Energy Production:
                                 <span id="ab-num-two-bc" class="ab-num-two">5473.9 KWh/year*</span>
                             </div>
                         </div>
                         <div class="tab-pane" id="novaScotia">
                             <div class="size-roof">Size of Suitable Facing Roof ( Sqft )</div>
                             <div id="six-samll-slider-ns" class="layui-slider"></div>
                             <div class="slider-text">Based on PV System:
                                 <span id="num-one-ns" class="ab-num-one">5.5 kW</span>
                             </div>
                             <div class="slider-text">Est. Energy Production:
                                 <span id="num-two-ns" class="ab-num-two">5942.8 KWh/year*</span>
                             </div>
                         </div>
                         <div class="tab-pane" id="ontario">
                             <div class="size-roof">Size of Suitable Facing Roof ( Sqft )</div>
                             <div id="six-samll-slider-on" class="layui-slider"></div>
                             <div class="slider-text">Based on PV System:
                                 <span id="num-one-on" class="ab-num-one">5.5 kW</span>
                             </div>
                             <div class="slider-text">Est. Energy Production:
                                 <span id="num-two-on" class="ab-num-two">6357.2 KWh/year*</span>
                             </div>
                         </div>
                         <div class="tab-pane" id="pel">
                             <div class="size-roof">Size of Suitable Facing Roof ( Sqft )</div>
                             <div id="six-samll-slider-pei" class="layui-slider"></div>
                             <div class="slider-text">Based on PV System:
                                 <span id="num-one-pei" class="ab-num-one">5.5 kW</span>
                             </div>
                             <div class="slider-text">Est. Energy Production:
                                 <span id="num-two-pei" class="ab-num-two">6019.1 KWh/year*</span>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <div class="index-modeule-seven">
     <div class="modeule-seven-title-box">
         <div class="seven-img-box-title">
             <img src="<?php echo get_template_directory_uri() . '/page/index/img/sunline.svg' ?>" alt="">
         </div>
         <div class="seven-text-box-title">
             Exclusive 0-0.99% interest financing program. The longest term from 12 to 20 years more solar-friendly.
             </br>Flexible to pay off at any time
         </div>
     </div>
     <div class="seven-bottom-all-box">
         <div class="seven-bottom-left">
             <div class="seven-left-title">
                 When it comes to Solar financing in Canada,
                 there’s </br>Sunline® by Polaron — and then there’s the rest.
             </div>
             <div class="seven-left-text">Calculate Your Sunline® Potential</div>
             <div class="seven-left-tabs-box">
                 <ul id="tabsCount" class="nav nav-tabs navs navigationOne" style="">
                     <li class="active">
                         <!-- a里面的id和下面div里面的id对应起来就可以完成点击跳转 -->
                         <a href="#abCount" data-toggle="tab" style="">Alberta</a>
                     </li>
                     <li>
                         <a href="#bcCount" data-toggle="tab" style="">BC</a>
                     </li>
                     <li>
                         <a href="#nsCount" data-toggle="tab" style="">NS</a>
                     </li>
                     <li>
                         <a href="#onCount" data-toggle="tab" style="">Ontario</a>
                     </li>
                     <li>
                         <a href="#pelCount" data-toggle="tab" style="">PEI</a>
                     </li>
                 </ul>
                 <div id="tabsCountContent" class="tab-content tab-content-mg" style="">
                     <div class="tab-pane active " id="abCount">
                         <form class="layui-form" action="#">
                             <div class="layui-form-item">
                                 <div class="input-num-box">
                                     <div>
                                         Average Monthly Bill ( Cad )
                                     </div>
                                     <div class="input-container">
                                         <span class="dollar-sign"></span>
                                         <input type="number" id="averageMonthlyBillAb" value="100" lay-verify="numberRequired|greaterThanZero">
                                     </div>
                                 </div>
                             </div>
                             <div class="layui-form-item">
                                 <div class="input-num-box">
                                     <div>
                                         System Size (KWdc)
                                     </div>
                                     <div class="input-container">
                                         <input type="number" id="systemSizeAb" value="7.67" lay-verify="numberRequired|greaterThanZero|lessThanOrEqualTen">
                                     </div>
                                 </div>
                             </div>
                             <div class="des">
                                 *All numbers shown are the estimation
                             </div>
                             <button type="button" class="calculateBtn">Calculate</button>
                         </form>
                     </div>
                     <div class="tab-pane" id="bcCount">
                         <form class="layui-form" action="#">
                             <div class="layui-form-item">
                                 <div class="input-num-box">
                                     <div>
                                         Average Monthly Bill ( Cad )
                                     </div>
                                     <div class="input-container">
                                         <span class="dollar-sign"></span>
                                         <input type="number" id="averageMonthlyBillBc" value="123" lay-verify="numberRequired|greaterThanZero">
                                     </div>
                                 </div>
                             </div>
                             <div class="layui-form-item">
                                 <div class="input-num-box">
                                     <div>
                                         System Size (KWdc)
                                     </div>
                                     <div class="input-container">
                                         <input type="number" id="systemSizeBc" value="34.27" lay-verify="numberRequired|greaterThanZero|lessThanOrEqualTen">
                                     </div>
                                 </div>
                             </div>
                             <div class="des">
                                 *All numbers shown are the estimation
                             </div>
                             <button type="button" class="calculateBtnBc calculateBtn">Calculate</button>
                         </form>
                     </div>
                     <div class="tab-pane" id="nsCount">
                         <form class="layui-form" action="#">
                             <div class="layui-form-item">
                                 <div class="input-num-box">
                                     <div>
                                         Average Monthly Bill ( Cad )
                                     </div>
                                     <div class="input-container">
                                         <span class="dollar-sign"></span>
                                         <input type="number" id="averageMonthlyBillNs" value="100" lay-verify="numberRequired|greaterThanZero">
                                     </div>
                                 </div>
                             </div>
                             <div class="layui-form-item">
                                 <div class="input-num-box">
                                     <div>
                                         System Size (KWdc)
                                     </div>
                                     <div class="input-container">
                                         <input type="number" id="systemSizeNs" value="5.95" lay-verify="numberRequired|greaterThanZero|lessThanOrEqualTen">
                                     </div>
                                 </div>
                             </div>
                             <div class="des">
                                 *All numbers shown are the estimation
                             </div>
                             <button type="button" class="calculateBtnNS calculateBtn">Calculate</button>
                         </form>
                     </div>
                     <div class="tab-pane" id="onCount">
                         <form class="layui-form" action="#">
                             <div class="layui-form-item">
                                 <div class="input-num-box">
                                     <div>
                                         Average Monthly Bill ( Cad )
                                     </div>
                                     <div class="input-container">
                                         <span class="dollar-sign"></span>
                                         <input type="number" id="averageMonthlyBillOn" value="123" lay-verify="numberRequired|greaterThanZero">
                                     </div>
                                 </div>
                             </div>
                             <div class="layui-form-item">
                                 <div class="input-num-box">
                                     <div>
                                         System Size (KWdc)
                                     </div>
                                     <div class="input-container">
                                         <input type="number" id="systemSizeOn" value="11.7" lay-verify="numberRequired|greaterThanZero|lessThanOrEqualTen">
                                     </div>
                                 </div>
                             </div>
                             <div class="des">
                                 *All numbers shown are the estimation
                             </div>
                             <button type="button" class="calculateBtnOn calculateBtn">Calculate</button>
                         </form>
                     </div>
                     <div class="tab-pane" id="pelCount">
                         <form class="layui-form" action="#">
                             <div class="layui-form-item">
                                 <div class="input-num-box">
                                     <div>
                                         Average Monthly Bill ( Cad )
                                     </div>
                                     <div class="input-container">
                                         <span class="dollar-sign"></span>
                                         <input type="number" id="averageMonthlyBillPei" value="155" lay-verify="numberRequired|greaterThanZero">
                                     </div>
                                 </div>
                             </div>
                             <div class="layui-form-item">
                                 <div class="input-num-box">
                                     <div>
                                         System Size (KWdc)
                                     </div>
                                     <div class="input-container">
                                         <input type="number" id="systemSizePei" value="8.75" lay-verify="numberRequired|greaterThanZero|lessThanOrEqualTen">
                                     </div>
                                 </div>
                             </div>
                             <div class="des">
                                 *All numbers shown are the estimation
                             </div>
                             <button type="button" class="calculateBtnPei calculateBtn">Calculate</button>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
         <div class="seven-bottom-right">
             <div class="seven-data-box">
                 <div class="seven-data-text">Electricity Offset Percentage</div>
                 <div class="seven-data-value" id="data01">-1,029%</div>
             </div>
             <div class="seven-data-box">
                 <div class="seven-data-text">Average Savings on Power Bill</div>
                 <div class="seven-data-value" id="data02"></div>
             </div>
             <div class="seven-data-box" style="display:none;">
                 <div class="seven-data-text">System Cost (+ tax)</div>
                 <div class="seven-data-value" id="data03"></div>
             </div>
             <div class="seven-data-box" style="display:none;">
                 <div class="seven-data-text">Monthly Lease Payment</div>
                 <div class="seven-data-value" id="data04"></div>
             </div>
             <div class="seven-data-box">
                 <div class="seven-data-text">First Year Savings (Costs)</div>
                 <div class="seven-data-value" id="data05"></div>
             </div>
             <div class="seven-data-box">
                 <div class="seven-data-text">First Ten Years Savings (Costs)</div>
                 <div class="seven-data-value" id="data06"></div>
             </div>
         </div>
     </div>
 </div>
 <div class="index-modeule-new-eight">
     <div class="new-eight-title">
         <div class="new-eight-first-title">
             Polaron’s Full Turnkey Solar Solution
         </div>
         <div class="new-eight-second-title">
             You won’t have to worry when you sign on with Polaron. We take care of everything from start to finish.
         </div>
         <a target="_blank" href="https://polaronsolar.com/survey">
             <div class="new-eight-btn new-eight-btn767-none">
                 <span>
                     Qualify Now
                 </span>
             </div>
         </a>
     </div>
     <div class="new-eight-all-box">
         <div class="new-eight-left-box">
             <div class="new-eight-left">
                 <div class="accordion">
                     <div class="new-eight-title-box">
                         <div class="circle-new-eight circle-new-eight-show"></div>
                         <div class="title-new-eight title-new-eight-show">1. Free Consultation</div>
                     </div>
                     <div class="content">
                         Talk to one of our solar specialists to see what system you and your family require.
                         Our team will provide you with a free proposal that shows you how much you can generate
                         on your roof as well as an in-depth savings analysis.
                     </div>
                 </div>
                 <div class="accordion">
                     <div class="new-eight-title-box">
                         <div class="circle-new-eight"></div>
                         <div class="title-new-eight">2. Site Audit</div>
                     </div>
                     <div class="content">
                         We’ll schedule a technician to visit your house and inspect
                         the condition and structure of your roof, as well as your electrical components.
                     </div>
                 </div>
                 <div class="accordion">
                     <div class="new-eight-title-box">
                         <div class="circle-new-eight"></div>
                         <div class="title-new-eight">3. Site Assessment Report (SAR)</div>
                     </div>
                     <div class="content">
                         Our engineers will generate a comprehensive site assessment report that
                         details any technical hurdles so you have all the information you need before the installation.
                     </div>
                 </div>
                 <div class="accordion">
                     <div class="new-eight-title-box">
                         <div class="circle-new-eight"></div>
                         <div class="title-new-eight">4. Rebate and Permit Applications</div>
                     </div>
                     <div class="content">All rebate and permit applications are taken care of from our professional engineering team.</div>
                 </div>
                 <div class="accordion">
                     <div class="new-eight-title-box">
                         <div class="circle-new-eight"></div>
                         <div class="title-new-eight">5. Installation</div>
                     </div>
                     <div class="content">
                         Installations are broken down into 2 parts—one for the
                         placement of the panels and the other to connect everything to the home and the grid.
                     </div>
                 </div>
                 <div class="accordion">
                     <div class="new-eight-title-box">
                         <div class="circle-new-eight"></div>
                         <div class="title-new-eight">6. Monitoring and Maintenance</div>
                     </div>
                     <div class="content">
                         Your installation isn’t the end of our relationship—it’s only the beginning.
                         With over ten years in the industry and financial stability, you can rest assured that
                         Polaron will be there to handle any issues that arise.
                     </div>
                 </div>
             </div>
         </div>
         <div class="new-eight-right-box">
             <div class="new-eight-right">
                 <img src=" <?php echo get_template_directory_uri() . '/page/index/img/01-533.png' ?>" alt="" class="image-new-eight">
                 <img src="<?php echo get_template_directory_uri() . '/page/index/img/02-533.png' ?>" alt="" class="image-new-eight">
                 <img src="<?php echo get_template_directory_uri() . '/page/index/img/03-533.png' ?>" alt="" class="image-new-eight">
                 <img src="<?php echo get_template_directory_uri() . '/page/index/img/04-533.png' ?>" alt="" class="image-new-eight">
                 <img src="<?php echo get_template_directory_uri() . '/page/index/img/05-533.png' ?>" alt="" class="image-new-eight">
                 <img src="<?php echo get_template_directory_uri() . '/page/index/img/06-533.png' ?>" alt="" class="image-new-eight">
             </div>
         </div>
     </div>
     <div class="new-eight-title new-eight-btn980-none">
         <a target="_blank" href="https://polaronsolar.com/survey">
             <div class="new-eight-btn">
                 <span>
                     Qualify Now
                 </span>
             </div>
         </a>
     </div>
 </div>
 <div class="index-modeule-eight">
     <div class="modeule-eight-all-box">
         <div class="eight-first-title">
             Polaron’s Full Turnkey Solar Solution
         </div>
         <div class="eight-second-title">
             You won’t have to worry when you sign on with Polaron. We take care of everything from start to finish.
         </div>
         <div class="eight-container">
             <div class="box-box">
                 <img src="<?php echo get_template_directory_uri() . '/page/index/img/01.svg' ?>" alt="">
                 <div class="box-box-title">1. Free Consultation</div>
                 <div class="box-box-text">
                     Talk to one of our solar specialists to see what
                     system you and your family require. Our team will provide you with a free proposal
                     that shows you how much you can
                     generate on your roof as well as an in-depth savings analysis.
                 </div>
             </div>
             <div class="box-box">
                 <img src="<?php echo get_template_directory_uri() . '/page/index/img/02.svg' ?>" alt="">
                 <div class="box-box-title">2. Site Audit</div>
                 <div class="box-box-text">
                     We’ll schedule a technician to visit your
                     house and inspect the condition and
                     structure of your roof, as well as your electrical components.
                 </div>
             </div>
             <div class="box-box">
                 <img src="<?php echo get_template_directory_uri() . '/page/index/img/03.svg' ?>" alt="">
                 <div class="box-box-title">3. Site Assessment Report (SAR)</div>
                 <div class="box-box-text">
                     Our engineers will generate a comprehensive site assessment report that details
                     any technical hurdles so you have all the information
                     you need before the installation.
                 </div>
             </div>
             <div class="box-box">
                 <img src="<?php echo get_template_directory_uri() . '/page/index/img/04.svg' ?>" alt="">
                 <div class="box-box-title">4. Rebate and Permit Applications</div>
                 <div class="box-box-text">
                     All rebate and permit applications are taken care of
                     from our professional engineering team.
                 </div>
             </div>
             <div class="box-box">
                 <img src="<?php echo get_template_directory_uri() . '/page/index/img/05.svg' ?>" alt="">
                 <div class="box-box-title">5. Installation</div>
                 <div class="box-box-text">
                     Installations are broken down into 2 parts—one for the placement
                     of the panels and the other to connect everything
                     to the home and the grid.
                 </div>
             </div>
             <div class="box-box">
                 <img src="<?php echo get_template_directory_uri() . '/page/index/img/06.svg' ?>" alt="">
                 <div class="box-box-title">6. Monitoring and Maintenance</div>
                 <div class="box-box-text">
                     Your installation isn’t the end of our relationship—it’s only
                     the beginning. With over ten years in the industry and financial
                     stability, you can rest assured that Polaron will be there to
                     handle any issues that arise.
                 </div>
             </div>
         </div>
         <div class="eight-btn">
             <a target="_blank" href="https://polaronsolar.com/survey">
                 Qualify Now
             </a>
         </div>
     </div>
 </div>
 <div class="index-modeule-nine">
     <div class="modeule-nine-all-box">
         <div class="nine-first-title">
             Local Pro Network
         </div>
         <div class="nine-bottom-box">
             <div>
                 <img src="<?php echo get_template_directory_uri() . '/page/index/img/Homedepotlogo.png' ?>" alt="">
             </div>
             <div class="nine-left-box">
                 <div>
                     As of October 1st, 2020, Polaron is officially a member of the Home Depot
                     Local Pro community as an exclusive Maritimes solar provider.
                 </div>
                 <a href="https://polaronsolar.com/polaron-joins-home-depot-local-pro-community-as-exclusive-solar-provider/" target="_blank">
                     <div class="nine-left-btn">Learn More</div>
                 </a>
             </div>
         </div>
     </div>
 </div>
 <div class="index-modeule-ten">
     <div class="modeule-ten-all-box">
         <div class="ten-title-box">
             Polaron Customer Portal</br>
             <span class="new-eight-second-title">Stay In The Loop with Your Solar PV Experience</span>
         </div>
         <div class="ten-content-box">
             <div class="ten-box">
                 <div><img src="<?php echo get_template_directory_uri() . '/page/index/img/Secure-Profile.png' ?>" alt=""></div>
                 <div class="ten-second-title">Secure Profile</div>
                 <div class="ten-text">Check your solar project and financing status </div>
             </div>
             <div class="ten-box">
                 <div>
                     <img src="<?php echo get_template_directory_uri() . '/page/index/img/Earn-Credits.png' ?>" alt="">
                 </div>
                 <div class="ten-second-title">Earn Credits</div>
                 <div class="ten-text">
                     Get credits on your production (online shopping mall is coming soon)
                 </div>
             </div>
             <div class="ten-box">
                 <div><img src="<?php echo get_template_directory_uri() . '/page/index/img/Review-Saving.png' ?>" alt=""></div>
                 <div class="ten-second-title">Review Savings</div>
                 <div class="ten-text">Monitor your production and savings</div>
             </div>
         </div>
         <a href="https://polaronsolar.com/customer-portal/login?redirect=%2Fhome" target="_blank">
             <div class="ten-btn">
                 <span>Login to Your Customer Portal</span>
             </div>
         </a>
     </div>
 </div>
 <div class="index-modeule-eleven">
     <div class="eleven-all-box">
         <div class="eleven-left-box">
             <div class="eleven-title">
                 The Most <span class="eleven-title-span"> Reliable Solar Company </span> with 900+ Rave Reviews
             </div>
             <div class="eleven-btn">
                 <span>
                     Click here to leave us a review on
                     <a href="https://tinyurl.com/2sx6bbw6" target="_blank">Google</a>,
                     <a href="https://homestars.com/companies/2949017-polaron" target="_blank">homeStars</a> or <a href="https://tinyurl.com/mr3u38ub" target="_blank">BBB</a>
                 </span>
             </div>
         </div>
         <div class="eleven-right-box">
             <div class="eleven-img-box">
                 <img src="<?php echo get_template_directory_uri() . '/page/index/img/allimg.png' ?>" alt="">
             </div>
         </div>
     </div>
 </div>
 <div class="index-modeule-twelve">
     <div class="twelve-all-box">
         <div class="twelve-title">Local Association</div>
         <div class="twelve-all-img-box">
             <div>
                 <a href="https://renewablesassociation.ca/" target="_blank">
                     <img src="<?php echo get_template_directory_uri() . '/page/index/img/canadianAssociation-01.png' ?>" alt="">
                 </a>
             </div>
             <div>
                 <a href="https://www.princeedwardisland.ca/en/information/environment-energy-and-climate-action/network-of-excellence-energy-efficiency" target="_blank">
                     <img src="<?php echo get_template_directory_uri() . '/page/index/img/networkPEI.png' ?>" alt="">
                 </a>
             </div>
             <div>
                 <a href="https://www.efficiencyns.ca/" target="_blank">
                     <img src="<?php echo get_template_directory_uri() . '/page/index/img/efficiencyNovaScotia.png' ?>" alt="">
                 </a>
             </div>
             <div>
                 <a href="https://bcsea.org/" target="_blank">
                     <img src="<?php echo get_template_directory_uri() . '/page/index/img/sustainableEnergy.png' ?>" alt="">
                 </a>
             </div>
             <div>
                 <a href="https://www.ontario-sea.org/" target="_blank">
                     <img src="<?php echo get_template_directory_uri() . '/page/index/img/osea.png' ?>" alt="">
                 </a>
             </div>
         </div>
     </div>
 </div>
 <div class="index-modeule-thirteen">
     <div class="glide">
         <div class="glide-first-title">Explore Polaron</div>
         <div class="glide__track" data-glide-el="track">
             <ul class="glide__slides">
                 <?php
                    // 获取最新的3篇文章
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 6,
                        'category_name' => 'news', // 添加分类名称为'news'，以检索该分类下的文章
                        'orderby' => 'date', // 按照发布日期排序
                        'order' => 'DESC', // 以降序排列（最新的文章首先显示）
                    );
                    $query = new WP_Query($args);

                    // 遍历文章
                    while ($query->have_posts()) : $query->the_post();
                    ?>
                     <li class="glide__slide">
                         <div class="glide__news_allbox" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>');">
                             <div class="glide_img_box" style="display: none;">
                                 <?php
                                    // 获取特色图片
                                    // if (has_post_thumbnail()) {
                                    //     the_post_thumbnail('large', array('class' => 'glide__news_img'));
                                    // }
                                    ?>
                             </div>
                             <div class="glide_news_box">
                                 <div class="glide__news_title">
                                     <?php the_title(); ?>
                                 </div>
                                 <div class="glide__news_content">
                                     <?php echo wp_trim_words(get_the_content(), 20, '...'); ?>
                                 </div>
                                 <div class="glide__news_btn">
                                     <a href="<?php the_permalink(); ?>" target="_blank">Learn more</a>
                                 </div>
                             </div>
                         </div>
                     </li>
                 <?php endwhile; ?>
                 <?php wp_reset_postdata(); ?>
             </ul>
         </div>
         <div class="glide__arrows" data-glide-el="controls">
             <button class="glide__arrow glide__arrow--left" data-glide-dir="&gt;">
                 &lt;
             </button>
             <button class="glide__arrow glide__arrow--right" data-glide-dir="&#62;">
                 &gt;
             </button>
         </div>
         <div class="glide__bullets" data-glide-el="controls[nav]">
             <button class="glide__bullet" data-glide-dir="=0"></button>
             <button class="glide__bullet" data-glide-dir="=1"></button>
             <button class="glide__bullet" data-glide-dir="=2"></button>
         </div>
     </div>
 </div>
 <div class="index-modeule-fourteen">
     <div class="fourteen-first-title">Explore Polaron</div>
     <div class="fourteen-all-box">
         <div class="article-grid">
             <?php
                // 获取最新的6篇文章
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 6,
                    'category_name' => 'news', // 添加分类名称为'news'，以检索该分类下的文章
                    'orderby' => 'date', // 按照发布日期排序
                    'order' => 'DESC', // 以降序排列（最新的文章首先显示）
                );
                $query = new WP_Query($args);

                // 开始文章循环
                $count = 0;
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                        // 每3篇文章结束一个行
                        if ($count % 3 == 0) {
                            echo '<div class="row">';
                        }
                ?>
                     <div class="col" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>');">
                         <div class="fourteen-content">
                             <div class="title-of-article"><?php the_title(); ?></div>
                             <div class="excerpt"><?php echo wp_trim_words(get_the_content(), 20, '...'); ?></div>
                             <div class="learn-more-btn"><a href="<?php the_permalink(); ?>" target="_blank">Learn more</a></div>
                         </div>
                     </div>
             <?php
                        $count++;
                        // 每3篇文章结束一个行
                        if ($count % 3 == 0) {
                            echo '</div>'; // 结束行
                        }
                    endwhile;
                    // 如果文章数不是3的倍数，补充结束行
                    if ($count % 3 != 0) {
                        echo '</div>';
                    }
                endif;
                wp_reset_postdata(); // 重置文章查询
                ?>
         </div>
     </div>
     <a href="https://polaronsolar.com/news/" target="_blank">
         <div class="fourteen-btn">
             <span>View More</span>
         </div>
     </a>
 </div>
 <?php wp_footer(); ?>
 <!-- 底部4个地图的 -->
 <div class="seletor-box" style="margin-top: 5vw;">
     <div>
         <?php #include(TEMPLATEPATH . '/homestylebase.php') 
            ?>
     </div>
     <div>
         <?php #include(get_template_directory()  . '/foot-map.php') 
            ?>
         <?php include(get_template_directory()  . '/foot-map-tw.php') ?>
     </div>
     <?php
        get_footer();
        ?>
 </div>
 </div>
 </body>
 <script>
     // js数字动画效果
     let elementNumBox01 = document.getElementById("value1");
     let elementNumBox02 = document.getElementById("value2");
     let elementNumBox03 = document.getElementById("value3");

     function animateValue(start, end, duration, element) {
         let startTime = null;
         // const elementNumBox01 = document.getElementById("value");
         function step(timestamp) {
             if (!startTime) {
                 startTime = timestamp;
             }
             const progress = Math.min((timestamp - startTime) / duration, 1);
             const current = Math.floor(progress * (end - start) + start).toLocaleString();
             element.textContent = current;
             if (progress < 1) {
                 window.requestAnimationFrame(step);
             }
         }
         window.requestAnimationFrame(step);
     }

     function startAnimation() {
         animateValue(0, 12000, 1500, elementNumBox01);
         animateValue(0, 111, 1500, elementNumBox02);
         animateValue(0, 11, 1500, elementNumBox03);
     }
     // 获取目标 div
     var targetDiv = document.getElementById("modeule-two");
     // 添加滚动事件监听器
     var animationExecuted = false;
     // 添加滚动事件监听器
     window.addEventListener("scroll", function() {
         // 获取目标 div 的位置信息
         var targetDivRect = targetDiv.getBoundingClientRect();

         // 当目标 div 进入视口时执行代码
         if (!animationExecuted && targetDivRect.top <= window.innerHeight && targetDivRect.bottom >= 0) {
             // 调用数字动画的js方法
             setTimeout(function() {
                 startAnimation();
                 // 标记动画已执行
                 animationExecuted = true;
             }, 1000);
         }
     });
     // 页面快加载完成执行
     document.addEventListener("DOMContentLoaded", function() {
         // 在这里编写需要执行的JavaScript代码
         // 获取左边省份列表的父容器和，所有省份描述盒子
         const provinceContainer = document.querySelector('.modeule-three-province-right');
         const provinceBoxes = document.querySelectorAll('.province-description-box');
         //获取每个省份的按钮
         const provinceBtns = document.querySelectorAll('.province-btn');
         //获取左边每个省份的盒子
         const provinceAllBox = document.querySelectorAll('.p-box');
         //给每个圆点加动态效果
         const decoElementAb = document.getElementById('decoAlb');
         const decoElementBc = document.getElementById('decoBc');
         const decoElementNs = document.getElementById('decoNs');
         const decoElementPei = document.getElementById('decoPei');
         const decoElementOn = document.getElementById('decoOn');
         // 默认显示第一个省份描述盒子
         provinceBoxes[0].style.display = 'block';
         //为每个 .p-box 元素，并为其添加鼠标经过时的监听事件
         provinceAllBox[0].addEventListener('mouseover', function() {
             provinceContainer.style.backgroundImage = "url(<?php echo get_template_directory_uri() . '/page/index/img/alb.jpg' ?>)";
             provinceBtns[0].style.display = 'block';
             provinceBoxes[0].style.display = 'none';
             provinceBoxes[1].style.display = 'block';
             decoElementAb.classList.add('hovered');
         });
         provinceAllBox[0].addEventListener('mouseout', function() {
             provinceContainer.style.backgroundImage = "linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),url(<?php echo get_template_directory_uri() . '/page/index/img/canada.jpg' ?>)";
             provinceBtns[0].style.display = 'none';
             provinceBoxes[1].style.display = 'none';
             provinceBoxes[0].style.display = 'block';
             decoElementAb.classList.remove('hovered');
         });
         provinceAllBox[1].addEventListener('mouseover', function() {
             provinceContainer.style.backgroundImage = "url(<?php echo get_template_directory_uri() . '/page/index/img/bc.jpg' ?>)";
             provinceBtns[1].style.display = 'block';
             provinceBoxes[0].style.display = 'none';
             provinceBoxes[2].style.display = 'block';
             decoElementBc.classList.add('hovered');
         });
         provinceAllBox[1].addEventListener('mouseout', function() {
             provinceContainer.style.backgroundImage = "linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),url(<?php echo get_template_directory_uri() . '/page/index/img/canada.jpg' ?>)";
             provinceBtns[1].style.display = 'none';
             provinceBoxes[2].style.display = 'none';
             provinceBoxes[0].style.display = 'block';
             decoElementBc.classList.remove('hovered');
         });
         provinceAllBox[2].addEventListener('mouseover', function() {
             provinceContainer.style.backgroundImage = "url(<?php echo get_template_directory_uri() . '/page/index/img/ns.jpg' ?>)";
             provinceBoxes[0].style.display = 'none';
             provinceBtns[2].style.display = 'block';
             provinceBoxes[3].style.display = 'block';
             decoElementNs.classList.add('hovered');
         });
         provinceAllBox[2].addEventListener('mouseout', function() {
             provinceContainer.style.backgroundImage = "linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),url(<?php echo get_template_directory_uri() . '/page/index/img/canada.jpg' ?>)";
             provinceBtns[2].style.display = 'none';
             provinceBoxes[3].style.display = 'none';
             provinceBoxes[0].style.display = 'block';
             decoElementNs.classList.remove('hovered');
         });
         provinceAllBox[3].addEventListener('mouseover', function() {
             provinceContainer.style.backgroundImage = "url(<?php echo get_template_directory_uri() . '/page/index/img/pei.jpg' ?>)";
             provinceBoxes[0].style.display = 'none';
             provinceBtns[3].style.display = 'block';
             provinceBoxes[4].style.display = 'block';
             decoElementPei.classList.add('hovered');
         });
         provinceAllBox[3].addEventListener('mouseout', function() {
             provinceContainer.style.backgroundImage = "linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),url(<?php echo get_template_directory_uri() . '/page/index/img/canada.jpg' ?>)";
             provinceBtns[3].style.display = 'none';
             provinceBoxes[4].style.display = 'none';
             provinceBoxes[0].style.display = 'block';
             decoElementPei.classList.remove('hovered');
         });
         provinceAllBox[4].addEventListener('mouseover', function() {
             provinceContainer.style.backgroundImage = "url(<?php echo get_template_directory_uri() . '/page/index/img/on.jpg' ?>)";
             provinceBoxes[0].style.display = 'none';
             provinceBtns[4].style.display = 'block';
             provinceBoxes[5].style.display = 'block';
             decoElementOn.classList.add('hovered');
         });
         provinceAllBox[4].addEventListener('mouseout', function() {
             provinceContainer.style.backgroundImage = "linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),url(<?php echo get_template_directory_uri() . '/page/index/img/canada.jpg' ?>)";
             provinceBtns[4].style.display = 'none';
             provinceBoxes[5].style.display = 'none';
             provinceBoxes[0].style.display = 'block';
             decoElementOn.classList.remove('hovered');
         });
         // alber省份
         function calculateAndDisplayResults() {
             /*计算i6到i30和J6到J30累加的值的方法*/
             function calculateSum(startValue) {
                 // 初始化累加总和
                 var sum = 0;
                 // 将起始值累加到总和中
                 sum += startValue;
                 // 迭代计算和累加，后续只需乘以1.035
                 for (var i = 1; i < 25; i++) {
                     // 计算当前迭代的值
                     startValue *= 1.035;
                     // 将当前值累加到总和中
                     sum += startValue;
                     // 输出当前迭代的值（如果需要）
                     //console.log( "当前的值为：" + startValue);
                 }
                 // 返回累加总和
                 return sum.toFixed(2);
             }
             // 获取用户输入的值Value01 Average Monthly Bill ( Cad )
             // var userInputValue01 = parseFloat(prompt("请输入一个值 x："));
             var userInputValue01 = parseFloat(document.getElementById("averageMonthlyBillAb").value);
             // 获取用户输入的值Value02 System Size (KWdc)
             var userInputValue02 = parseFloat(document.getElementById("systemSizeAb").value);
             if (isNaN(userInputValue01) || userInputValue01 <= 0) {
                 alert("Please enter a number greater than 0 as Average Monthly Bill");
                 return;
             }

             if (isNaN(userInputValue02) || userInputValue02 <= 0 || userInputValue02 > 10) {
                 alert("Please enter a number greater than 0 and less than or equal to 10 as System Size");
                 return;
             }
             //计算Electricity Offset Percentage(c37)
             // 计算分母
             var denominator = (userInputValue01 * 12) - (8.66 * 12);
             // 计算分子
             var numerator = userInputValue02 * 1100;
             // 将分母再除以0.1299
             var denominatorResult = denominator / 0.1299;
             // 计算最终结果
             //计算Electricity Offset Percentage(c37)结束
             var c37 = Math.round((numerator / denominatorResult) * 100) + "%";
             //计算Average Savings on Power Bill(c38)
             //计算的j6
             var j6 = userInputValue01 * 12 * 1.05;
             //计算的i6
             var i6 = userInputValue02 * 1100 * 0.1725 * 1.05;
             // 计算c36的值
             var c36 = calculateSum(j6);
             // 计算c35的值
             var c35 = calculateSum(i6);
             //计算Average Savings on Power Bill(c38)
             var abAvgSavingPb = Math.round((c35 / c36) * 100) + '%';
             //计算System Cost (+ tax)(c27)
             // 初始化c19
             var c19 = 0;
             switch (true) {
                 case (userInputValue02 > 0.0001 && userInputValue02 <= 5):
                     c19 = 2.65;
                     break;
                 case (userInputValue02 > 5.0001 && userInputValue02 <= 6):
                     c19 = 2.62;
                     break;
                 case (userInputValue02 > 6.0001 && userInputValue02 <= 7):
                     c19 = 2.59;
                     break;
                 case (userInputValue02 > 7.0001 && userInputValue02 <= 8):
                     c19 = 2.56;
                     break;
                 case (userInputValue02 > 8.0001 && userInputValue02 <= 9):
                     c19 = 2.53;
                     break;
                 case (userInputValue02 > 9.0001 && userInputValue02 <= 10):
                     c19 = 2.5;
                     break;
                 default:
                     // 处理其他情况，如果有需要
                     break;
             }
             var systemCost = (c19 * userInputValue02 * 1000 * 1.05).toFixed(2);
             // 计算 Monthly Lease Payment (c33)
             // 1.计算c28
             var c28 = Math.max(Math.min(1 * 1000 * userInputValue02, 5000), 0);
             // 2.计算c29(c27-c28)
             var c29 = systemCost - c28;
             // 3.pmt()
             // 辅助函数，保留两位小数
             function roundToTwoDecimal(value) {
                 return Math.round(value * 100) / 100;
             }

             function calculatePMT(rate, nper, pv, fv, type) {
                 // rate: 年利率
                 // nper: 总期数
                 // pv: 现值（贷款或投资的初始金额）
                 // fv: 未来值（贷款或投资的未来金额，通常为零）
                 // type: 付款类型，0表示期末支付，1表示期初支付
                 if (rate === 0) {
                     return -(pv + fv) / nper;
                 }
                 var pmt = (rate * (pv * Math.pow(1 + rate, nper) + fv)) / (Math.pow(1 + rate, nper) - 1);

                 if (type === 1) {
                     pmt /= 1 + rate;
                 }
                 return -pmt;
             }
             //Monthly Lease Payment (c33)
             var pmtC33 = calculatePMT(0.0099 / 12, 16 * 12, -c29, 0);
             var pmtC33Piont = roundToTwoDecimal(pmtC33);
             //计算 First Year Savings (Costs)(c39)
             //1.计算m6
             var m6 = 0;
             if (1 > 16) {
                 m6 = 0
             } else {
                 m6 = pmtC33 * 12;
             }
             //2.计算n6
             var n6 = i6 - m6;
             //First Year Savings (Costs)(c39)
             var firstYearSavingsC39 = 0 + n6;
             var firstYearSavingsPiontC39 = roundToTwoDecimal(firstYearSavingsC39);
             //计算 First Ten Years Savings (Costs) (c40)
             // 1.计算i15
             function getNthValue(startValue, n) {
                 // 迭代 n 次，获取第 n 个值
                 for (var i = 1; i <= n; i++) {
                     // 计算当前迭代的值
                     startValue *= 1.035;
                 }
                 // 返回第 n 个值
                 return startValue
             }
             // 1. 计算i6到i15
             var iValues = [];
             for (var i = 0; i <= 9; i++) {
                 iValues[i] = getNthValue(i6, i);
             }
             // 2. 计算m15
             var m15 = (10 > 16) ? 0 : pmtC33 * 12;
             // 3. 计算n6到n15
             var nValues = [];
             for (var i = 0; i <= 9; i++) {
                 nValues[i] = iValues[i] - m15;
             }
             // 4. 计算First Ten Years Savings (Costs) (c40)
             var c40 = nValues.reduce(function(sum, value) {
                 return sum + value;
             }, 0).toFixed(2);
             // 将计算值写入div
             var dataDiv01 = document.getElementById("data01");
             dataDiv01.innerHTML = `${c37}`;
             var dataDiv01 = document.getElementById("data02");
             dataDiv01.innerHTML = `${abAvgSavingPb}`; //c38
             var dataDiv01 = document.getElementById("data03");
             dataDiv01.innerHTML = "$ " + `${systemCost}`; //c27
             var dataDiv01 = document.getElementById("data04");
             dataDiv01.innerHTML = "$ " + `${pmtC33Piont}`; //c33
             var dataDiv01 = document.getElementById("data05");
             dataDiv01.innerHTML = "$ " + `${firstYearSavingsPiontC39}`; //c39
             var dataDiv01 = document.getElementById("data06");
             dataDiv01.innerHTML = "$ " + `${c40}`;
         }
         // 初始化调用一次
         calculateAndDisplayResults();
         // 获取按钮元素
         var calculateBtn = document.querySelector(".calculateBtn");
         // 在按钮上添加点击事件监听器
         calculateBtn.addEventListener("click", calculateAndDisplayResults);


         //ns省份
         function calculateNsAllDataResults() {
             // 获取到用户输入/默认值Ns的
             // 获取用户输入的值Value01 Average Monthly Bill ( Cad )
             var nsInputValue01 = parseFloat(document.getElementById("averageMonthlyBillNs").value);
             // 获取用户输入的值Value02 System Size (KWdc)
             var nsInputValue02 = parseFloat(document.getElementById("systemSizeNs").value);
             //计算Electricity Offset Percentage（c37）
             var c30Ns = nsInputValue02 * 1100;
             var c22Ns = nsInputValue01 * 12;
             var c20Ns = 10.83 * 12;
             var c25Ns = (c22Ns - c20Ns) / 0.1635;
             var c37Ns = Math.round((c30Ns / c25Ns) * 100).toFixed(0) + '%';

             // 计算Ns Average Savings on Power Bill（c38）
             //首先计算j6
             var j6Ns = (nsInputValue01 * 12 * 1.15).toFixed(2);
             //计算c36,j6到j30求和
             function sumNsJ6J30OrI6I30(startValue) {
                 // 初始化总和
                 var sumJ6J30Ns = 0;
                 // 将初始值添加到总和中
                 sumJ6J30Ns += parseFloat(startValue.toFixed(2));
                 // 迭代，计算并添加到总和中，每次迭代乘以 1.021
                 for (var i = 1; i < 25; i++) {
                     // 计算当前迭代值
                     startValue *= 1.025;
                     // 将当前值添加到总和中，并保留两位小数
                     sumJ6J30Ns += startValue;
                     // 输出当前迭代值（如果需要）
                     // console.log("当前值为：" + startValue);
                 }
                 // 返回保留两位小数的总和
                 return sumJ6J30Ns.toFixed(2);
             }
             var c36Ns = sumNsJ6J30OrI6I30(parseFloat(j6Ns));
             //计算c35（i6到i30的求和）
             //1.先计算i6
             var i6Ns = (nsInputValue02 * 1100 * 0.1635 * 1.15).toFixed(2);
             var c35Ns = sumNsJ6J30OrI6I30(parseFloat(i6Ns));
             var c38Ns = Math.round((c35Ns / c36Ns) * 100).toFixed(0) + '%';

             // 计算First Year Savings(Costs) （c39）
             // 前提计算
             // 1.计算19
             var c19Ns;
             if (nsInputValue02 >= 0 && nsInputValue02 <= 5) {
                 c19Ns = 2.850;
             } else if (nsInputValue02 <= 6) {
                 c19Ns = 2.800;
             } else if (peiInputValue02 <= 7) {
                 c19Ns = 2.750;
             } else if (nsInputValue02 <= 8) {
                 c19Ns = 2.700;
             } else if (nsInputValue02 <= 9) {
                 c19Ns = 2.650;
             } else if (nsInputValue02 <= 10) {
                 c19Ns = 2.600;
             }
             // 2.计算c26
             var c26Ns = parseFloat((c19Ns * nsInputValue02 * 1000).toFixed(2));
             // 3.计算c27(精度丢失)
             var c27Ns = c26Ns * (1 + 0.15);
             // 4.计算c28
             var c28Ns = Math.max(Math.min(0.3 * nsInputValue02 * 1000, 3000), 0);
             // 5.计算c29
             var c29Ns = c27Ns - c28Ns;
             // 6.计算c33
             // 辅助函数，保留两位小数
             function roundToTwoDecimal(value) {
                 return Math.round(value * 100) / 100;
             }

             function calculateNsPMT(rate, nper, pv, fv, type) {
                 // rate: 年利率
                 // nper: 总期数
                 // pv: 现值（贷款或投资的初始金额）
                 // fv: 未来值（贷款或投资的未来金额，通常为零）
                 // type: 付款类型，0表示期末支付，1表示期初支付
                 if (rate === 0) {
                     return -(pv + fv) / nper;
                 }
                 var pmt = (rate * (pv * Math.pow(1 + rate, nper) + fv)) / (Math.pow(1 + rate, nper) - 1);

                 if (type === 1) {
                     pmt /= 1 + rate;
                 }
                 return -pmt;
             }
             var c33Ns = calculateNsPMT(0 / 12, 13 * 12, -c29Ns, 0);
             // 7.计算c34
             var c34Ns = c33Ns * 12;
             // 8.计算m6
             var m6Ns;
             if (1 > 13) {
                 m6Ns = 0;
             } else {
                 m6Ns = c34Ns;
             }
             // 9.计算n6
             var n6Ns = i6Ns - m6Ns;
             // 10.计算最终结果c39 n5为空所以c39=n6
             var c39Ns = roundToTwoDecimal(n6Ns);

             // 计算 First Ten Years Saving (Cost)(c40)
             //1.计算M6以后,10年就和
             var tenYearsNsC34 = parseFloat((c34Ns * 10).toFixed(2));
             //2.计算I6以后10年求和
             function sumNsI6I15(startValue) {
                 // 初始化总和
                 var sumI6I15Ns = parseFloat(startValue.toFixed(2));
                 // 迭代，计算并添加到总和中，每次迭代乘以 1.025
                 for (var i = 1; i < 10; i++) {
                     // 计算当前迭代值并直接将其添加到总和中
                     startValue *= 1.025;
                     sumI6I15Ns += startValue;
                     // 输出当前迭代值（如果需要）
                     // console.log("当前值为：" + startValue);
                 }
                 // 返回保留两位小数的总和
                 return sumI6I15Ns.toFixed(2);
             }
             var tenYearsNsI6 = sumNsI6I15(parseFloat(i6Ns));
             var c40Ns = roundToTwoDecimal(tenYearsNsI6 - tenYearsNsC34);

             // 将计算值写入div
             // Electricity Offset Percentage（c37）
             var dataDiv01 = document.getElementById("data01");
             dataDiv01.innerHTML = `${c37Ns}`;
             // Pei Average Savings on Power Bill（c38）
             var dataDiv01 = document.getElementById("data02");
             dataDiv01.innerHTML = `${c38Ns}`;
             // var dataDiv01 = document.getElementById("data03");
             // dataDiv01.innerHTML = "$ " + `${c27Ns}`; //c27
             // var dataDiv01 = document.getElementById("data04");
             // dataDiv01.innerHTML = "$ " + `${c33Ns}`; //c33
             // First Year Savings(Costs)（ c39）
             var dataDiv01 = document.getElementById("data05");
             dataDiv01.innerHTML = "$ " + `${c39Ns}`;
             // First Ten Years Saving (Cost)(c40)
             var dataDiv01 = document.getElementById("data06");
             dataDiv01.innerHTML = "$ " + `${c40Ns}`;
         }
         //获取Ns的按钮元素
         var calculateBtnNs = document.querySelector(".calculateBtnNs");
         // 在Ns按钮上添加点击事件监听器
         calculateBtnNs.addEventListener("click", calculateNsAllDataResults);


         //on省份
         function calculateOnAllDataResults() {
             // 获取用户输入的值Value01 Average Monthly Bill ( Cad )
             var onInputValue01 = parseFloat(document.getElementById("averageMonthlyBillOn").value);
             // 获取用户输入的值Value02 System Size (KWdc)
             var onInputValue02 = parseFloat(document.getElementById("systemSizeOn").value);
             //计算Electricity Offset Percentage（c44）
             //1.计算c34
             var c34On = onInputValue02 * 1100;
             //2.计算c28
             var c28On = ((onInputValue01 * 12) - (4.09 * 12)) / 0.1017;
             var c44On = Math.round((c34On / c28On) * 100).toFixed(0) + '%';

             // 计算On Average Savings on Power Bill(c45)
             // 1.计算j6
             var j6On = (onInputValue01 * 12 * 1.13).toFixed(2);
             // 2.计算c36,j6到j30求和的方法
             function sumOnJ6J30OrI6I30(startValue) {
                 // 初始化总和
                 var sumJ6J30On = 0;
                 // 将初始值添加到总和中
                 sumJ6J30On += parseFloat(startValue.toFixed(2));
                 // 迭代，计算并添加到总和中，每次迭代乘以 1.021
                 for (var i = 1; i < 25; i++) {
                     // 计算当前迭代值
                     startValue *= 1.0435;
                     // 将当前值添加到总和中，并保留两位小数
                     sumJ6J30On += startValue;
                     // 输出当前迭代值（如果需要）
                     // console.log("当前值为：" + startValue);
                 }
                 // 返回保留两位小数的总和
                 return sumJ6J30On.toFixed(2);
             }
             // 3.计算c43
             var c43On = sumOnJ6J30OrI6I30(parseFloat(j6On));
             // 4.计算i6
             var i6On = (onInputValue02 * 1100 * 0.1113 * 1.13).toFixed(2);
             // 5.计算c42
             var c42On = sumOnJ6J30OrI6I30(parseFloat(i6On));
             // 6.计算最终结果c45
             var c45On = Math.round((c42On / c43On) * 100).toFixed(0) + '%';


             // 计算First Year Savings(Costs)(c46)
             // 前提计算
             // 模拟vlooked up 函数计算c22 注意有没有系统大小的限制
             var c22On;
             if (onInputValue02 >= 0 && onInputValue02 <= 4) {
                 c22On = 2.680;
             } else if (onInputValue02 <= 5) {
                 c22On = 2.650;
             } else if (onInputValue02 <= 6) {
                 c22On = 2.620;
             } else if (onInputValue02 <= 7) {
                 c22On = 2.590;
             } else if (onInputValue02 <= 8) {
                 c22On = 2.560;
             } else if (onInputValue02 <= 9) {
                 c22On = 2.530;
             } else if (onInputValue02 <= 10) {
                 c22On = 2.500;
             } else if (onInputValue02 <= 12) {
                 c22On = 2.470;
             }
             //计算c29
             var c29On = c22On * onInputValue02 * 1000;
             //计算c30
             var c30On = c29On * 1.13;
             //计算c31
             var c31On = Math.max(Math.min(1 * onInputValue02 * 1000, 5000), 0);
             //计算c32
             var c32On = 1200 * 1.13;
             //计算c33
             var c33On = c30On - c31On + c32On;
             //计算c37
             // 辅助函数，保留两位小数
             function roundToTwoDecimal(value) {
                 return Math.round(value * 100) / 100;
             }

             function calculateOnPMT(rate, nper, pv, fv, type) {
                 // rate: 年利率
                 // nper: 总期数
                 // pv: 现值（贷款或投资的初始金额）
                 // fv: 未来值（贷款或投资的未来金额，通常为零）
                 // type: 付款类型，0表示期末支付，1表示期初支付
                 if (rate === 0) {
                     return -(pv + fv) / nper;
                 }
                 var pmt = (rate * (pv * Math.pow(1 + rate, nper) + fv)) / (Math.pow(1 + rate, nper) - 1);

                 if (type === 1) {
                     pmt /= 1 + rate;
                 }
                 return -pmt;
             }
             var c37On = calculateOnPMT(0.0099 / 12, (16 + 0) * 12, -c33On, 0)
             //计算c38
             var c38On = c37On * 12;
             //计算c41(没结果这种情况也不会出现)
             var c41On = 0;
             //计算M6
             var m6On = (1 - 16) > 0 ? 0 : 1 > 16 ? c41On : c38On;
             //计算n6
             var n6On = (i6On - m6On).toFixed(2);
             //计算c46(n5+n6 n5为null)
             var c46On = n6On;

             //计算First Ten Years Savings(Costs)(c47)
             // 计算10年M6开始
             var tenYearsM6On = c38On * 10;
             //2.计算I6以后10年求和
             function sumOnI6I15(startValue) {
                 // 初始化总和
                 var sumI6I15On = parseFloat(startValue.toFixed(2));
                 // 迭代，计算并添加到总和中，每次迭代乘以 1.021
                 for (var i = 1; i < 10; i++) {
                     // 计算当前迭代值并直接将其添加到总和中
                     startValue *= 1.0435;
                     sumI6I15On += startValue;
                     // 输出当前迭代值（如果需要）
                     // console.log("当前值为：" + startValue);
                 }
                 // 返回保留两位小数的总和
                 return sumI6I15On.toFixed(2);
             }
             var tenYearsOnI6 = sumOnI6I15(parseFloat(i6On));
             var c47On = roundToTwoDecimal(tenYearsOnI6 - tenYearsM6On);

             // 将计算值写入div
             // Electricity Offset Percentage（c44）
             var dataDiv01 = document.getElementById("data01");
             dataDiv01.innerHTML = `${c44On}`;
             // Pei Average Savings on Power Bill（c45）
             var dataDiv01 = document.getElementById("data02");
             dataDiv01.innerHTML = `${c45On}`;
             // var dataDiv01 = document.getElementById("data03");
             // dataDiv01.innerHTML = "$ " + `${c30On}`; //c27
             // var dataDiv01 = document.getElementById("data04");
             // dataDiv01.innerHTML = "$ " + `${c37On}`; //c33
             // First Year Savings(Costs)（ c46）
             var dataDiv01 = document.getElementById("data05");
             dataDiv01.innerHTML = "$ " + `${c46On}`;
             // First Ten Years Saving (Cost)(c47)
             var dataDiv01 = document.getElementById("data06");
             dataDiv01.innerHTML = "$ " + `${c47On}`;
         }
         //获取On的按钮元素
         var calculateBtnOn = document.querySelector(".calculateBtnOn");
         // 在On按钮上添加点击事件监听器
         calculateBtnOn.addEventListener("click", calculateOnAllDataResults);

         //bc省份和on计算一样，参数不一样
         function calculateBcAllDataResults() {
             // 获取用户输入的值Value01 Average Monthly Bill ( Cad )
             var bcInputValue01 = parseFloat(document.getElementById("averageMonthlyBillBc").value);
             // 获取用户输入的值Value02 System Size (KWdc)
             var bcInputValue02 = parseFloat(document.getElementById("systemSizeBc").value);
             //计算Electricity Offset Percentage（c44）
             //1.计算c34
             var c34Bc = bcInputValue02 * 1100;
             //2.计算c28
             var c28Bc = ((bcInputValue01 * 12) - (6.351 * 12)) / 0.1226;
             var c44Bc = Math.round((c34Bc / c28Bc) * 100).toFixed(0) + '%';

             // 计算On Average Savings on Power Bill(c45)
             // 1.计算j6
             var j6Bc = (bcInputValue01 * 12 * 1.05).toFixed(2);
             // 2.计算c36,j6到j30求和的方法
             function sumBcJ6J30OrI6I30(startValue) {
                 // 初始化总和
                 var sumJ6J30Bc = 0;
                 // 将初始值添加到总和中
                 sumJ6J30Bc += parseFloat(startValue.toFixed(2));
                 // 迭代，计算并添加到总和中，每次迭代乘以 1.021
                 for (var i = 1; i < 25; i++) {
                     // 计算当前迭代值
                     startValue *= 1.03;
                     // 将当前值添加到总和中，并保留两位小数
                     sumJ6J30Bc += startValue;
                     // 输出当前迭代值（如果需要）
                     // console.log("当前值为：" + startValue);
                 }
                 // 返回保留两位小数的总和
                 return sumJ6J30Bc.toFixed(2);
             }
             // 3.计算c43
             var c43Bc = sumBcJ6J30OrI6I30(parseFloat(j6Bc));
             // 4.计算i6
             var i6Bc = (bcInputValue02 * 1100 * 0.1226 * 1.05).toFixed(2);
             // 5.计算c42
             var c42Bc = sumBcJ6J30OrI6I30(parseFloat(i6Bc));
             // 6.计算最终结果c45
             var c45Bc = Math.round((c42Bc / c43Bc) * 100).toFixed(0) + '%';


             // 计算First Year Savings(Costs)(c46)
             // 前提计算
             // 模拟vlooked up 函数计算c22 注意有没有系统大小的限制
             var c22Bc;
             if (bcInputValue02 >= 0 && bcInputValue02 <= 4) {
                 c22On = 2.680;
             } else if (bcInputValue02 <= 5) {
                 c22Bc = 2.650;
             } else if (bcInputValue02 <= 6) {
                 c22Bc = 2.620;
             } else if (bcInputValue02 <= 7) {
                 c22Bc = 2.590;
             } else if (bcInputValue02 <= 8) {
                 c22Bc = 2.560;
             } else if (bcInputValue02 <= 9) {
                 c22Bc = 2.530;
             } else if (bcInputValue02 <= 10) {
                 c22Bc = 2.500;
             } else if (bcInputValue02 <= 30) {
                 c22Bc = 2.470;
             } else if (bcInputValue02 <= 35) {
                 c22Bc = 2.720;
             } else if (bcInputValue02 <= 40) {
                 c22Bc = 2.695;
             } else if (bcInputValue02 <= 45) {
                 c22Bc = 2.670;
             } else if (bcInputValue02 <= 50) {
                 c22Bc = 2.645;
             } else if (bcInputValue02 <= 60) {
                 c22Bc = 2.595;
             } else if (bcInputValue02 <= 65) {
                 c22Bc = 2.570;
             } else if (bcInputValue02 <= 70) {
                 c22Bc = 2.545;
             } else if (bcInputValue02 <= 75) {
                 c22Bc = 2.520;
             } else if (bcInputValue02 <= 80) {
                 c22Bc = 2.495;
             } else if (bcInputValue02 <= 85) {
                 c22Bc = 2.470;
             } else if (bcInputValue02 <= 90) {
                 c22Bc = 2.445;
             }
             //计算c29
             var c29Bc = c22Bc * bcInputValue02 * 1000;
             //计算c30
             var c30Bc = c29Bc * 1.05;
             //计算c31
             var c31Bc = Math.max(Math.min(1 * bcInputValue02 * 1000, 5000), 0);
             //计算c32
             var c32Bc = 1200 * 1.05;
             //计算c33
             var c33Bc = c30Bc - c31Bc + c32Bc;
             //计算c37
             // 辅助函数，保留两位小数
             function roundToTwoDecimal(value) {
                 return Math.round(value * 100) / 100;
             }

             function calculateBcPMT(rate, nper, pv, fv, type) {
                 // rate: 年利率
                 // nper: 总期数
                 // pv: 现值（贷款或投资的初始金额）
                 // fv: 未来值（贷款或投资的未来金额，通常为零）
                 // type: 付款类型，0表示期末支付，1表示期初支付
                 if (rate === 0) {
                     return -(pv + fv) / nper;
                 }
                 var pmt = (rate * (pv * Math.pow(1 + rate, nper) + fv)) / (Math.pow(1 + rate, nper) - 1);

                 if (type === 1) {
                     pmt /= 1 + rate;
                 }
                 return -pmt;
             }
             var c37Bc = calculateBcPMT(0.0099 / 12, (16 + 0) * 12, -c33Bc, 0)
             //计算c38
             var c38Bc = c37Bc * 12;
             //计算c41(没结果这种情况也不会出现)
             var c41Bc = 0;
             //计算M6
             var m6Bc = (1 - 16) > 0 ? 0 : 1 > 16 ? c41Bc : c38Bc;
             //计算n6
             var n6Bc = (i6Bc - m6Bc).toFixed(2);
             //计算c46(n5+n6 n5为null)
             var c46Bc = n6Bc;

             //计算First Ten Years Savings(Costs)(c47)
             // 计算10年M6开始
             var tenYearsM6Bc = c38Bc * 10;
             //2.计算I6以后10年求和
             function sumBcI6I15(startValue) {
                 // 初始化总和
                 var sumI6I15Bc = parseFloat(startValue.toFixed(2));
                 // 迭代，计算并添加到总和中，每次迭代乘以 1.021
                 for (var i = 1; i < 10; i++) {
                     // 计算当前迭代值并直接将其添加到总和中
                     startValue *= 1.03;
                     sumI6I15Bc += startValue;
                     // 输出当前迭代值（如果需要）
                     // console.log("当前值为：" + startValue);
                 }
                 // 返回保留两位小数的总和
                 return sumI6I15Bc.toFixed(2);
             }
             var tenYearsBcI6 = sumBcI6I15(parseFloat(i6Bc));
             var c47Bc = roundToTwoDecimal(tenYearsBcI6 - tenYearsM6Bc);

             // 将计算值写入div
             // Electricity Offset Percentage（c44）
             var dataDiv01 = document.getElementById("data01");
             dataDiv01.innerHTML = `${c44Bc}`;
             // Pei Average Savings on Power Bill（c45）
             var dataDiv01 = document.getElementById("data02");
             dataDiv01.innerHTML = `${c45Bc}`;
             // var dataDiv01 = document.getElementById("data03");
             // dataDiv01.innerHTML = "$ " + `${c30Bc}`; //c27
             // var dataDiv01 = document.getElementById("data04");
             // dataDiv01.innerHTML = "$ " + `${c37Bc}`; //c33
             // First Year Savings(Costs)（ c46）
             var dataDiv01 = document.getElementById("data05");
             dataDiv01.innerHTML = "$ " + `${c46Bc}`;
             // First Ten Years Saving (Cost)(c47)
             var dataDiv01 = document.getElementById("data06");
             dataDiv01.innerHTML = "$ " + `${c47Bc}`;
         }
         //获取On的按钮元素
         var calculateBtnBc = document.querySelector(".calculateBtnBc");
         // 在On按钮上添加点击事件监听器
         calculateBtnBc.addEventListener("click", calculateBcAllDataResults);


         //pei省份
         function calculatePeiAllDataResults() {
             // 获取到用户输入/默认值Pei的
             // 获取用户输入的值Value01 Average Monthly Bill ( Cad )
             var peiInputValue01 = parseFloat(document.getElementById("averageMonthlyBillPei").value);
             // 获取用户输入的值Value02 System Size (KWdc)
             var peiInputValue02 = parseFloat(document.getElementById("systemSizePei").value);
             //计算Electricity Offset Percentage（c37）
             var c22Pei = (peiInputValue01 * 12).toFixed(2);
             var c20Pei = (24.57 * 12).toFixed(2);
             var c25Pei = Math.round((c22Pei - c20Pei) / 0.1626);
             var c30Pei = (peiInputValue02 * 1100).toFixed(2);
             var c37Pei = Math.round((c30Pei / c25Pei) * 100).toFixed(0) + '%';

             // 计算Pei Average Savings on Power Bill（c38）
             //首先计算j6
             var j6Pei = (peiInputValue01 * 12 * 1.15).toFixed(2);
             //计算c36,j6到j30求和
             function sumPeiJ6J30OrI6I30(startValue) {
                 // 初始化总和
                 var sumJ6J30Pei = 0;
                 // 将初始值添加到总和中
                 sumJ6J30Pei += parseFloat(startValue.toFixed(2));
                 // 迭代，计算并添加到总和中，每次迭代乘以 1.021
                 for (var i = 1; i < 25; i++) {
                     // 计算当前迭代值
                     startValue *= 1.021;
                     // 将当前值添加到总和中，并保留两位小数
                     sumJ6J30Pei += startValue;
                     // 输出当前迭代值（如果需要）
                     // console.log("当前值为：" + startValue);
                 }
                 // 返回保留两位小数的总和
                 return sumJ6J30Pei.toFixed(2);
             }
             var c36Pei = sumPeiJ6J30OrI6I30(parseFloat(j6Pei));
             //计算c35（i6到i30的求和）
             //1.先计算i6
             var i6Pei = (peiInputValue02 * 1100 * 0.1626 * 1.15).toFixed(2);
             var c35Pei = sumPeiJ6J30OrI6I30(parseFloat(i6Pei));
             var c38Pei = Math.round((c35Pei / c36Pei) * 100).toFixed(0) + '%';

             // 计算First Year Savings(Costs) （c39）
             // 前提计算
             // 1.计算19
             var c19Pei;
             if (peiInputValue02 >= 0 && peiInputValue02 <= 5) {
                 c19Pei = 2.950;
             } else if (peiInputValue02 <= 6) {
                 c19Pei = 2.900;
             } else if (peiInputValue02 <= 7) {
                 c19Pei = 2.850;
             } else if (peiInputValue02 <= 8) {
                 c19Pei = 2.800;
             } else if (peiInputValue02 <= 9) {
                 c19Pei = 2.750;
             } else if (peiInputValue02 <= 10) {
                 c19Pei = 2.700;
             }
             // 2.计算c26
             var c26Pei = parseFloat((c19Pei * peiInputValue02 * 1000).toFixed(2));
             // 3.计算c27(精度丢失)
             // var c27Pei = parseFloat((c26Pei * (1 + 0.15)).toFixed(2));
             var c27Pei = c26Pei * (1 + 0.15);
             // 4.计算c28
             var c28Pei = Math.max(Math.min(1 * peiInputValue02 * 1000, 10000), 0);
             // 5.计算c29
             var c29Pei = c27Pei - c28Pei;
             // 6.计算c33
             // 辅助函数，保留两位小数
             function roundToTwoDecimal(value) {
                 return Math.round(value * 100) / 100;
             }

             function calculatePeiPMT(rate, nper, pv, fv, type) {
                 // rate: 年利率
                 // nper: 总期数
                 // pv: 现值（贷款或投资的初始金额）
                 // fv: 未来值（贷款或投资的未来金额，通常为零）
                 // type: 付款类型，0表示期末支付，1表示期初支付
                 if (rate === 0) {
                     return -(pv + fv) / nper;
                 }
                 var pmt = (rate * (pv * Math.pow(1 + rate, nper) + fv)) / (Math.pow(1 + rate, nper) - 1);

                 if (type === 1) {
                     pmt /= 1 + rate;
                 }
                 return -pmt;
             }
             var c33Pei = calculatePeiPMT(0 / 12, 12 * 12, -c29Pei, 0);
             // 7.计算c34
             var c34Pei = c33Pei * 12;
             // 8.计算m6
             var m6Pei;
             if (1 > 12) {
                 m6Pei = 0;
             } else {
                 m6Pei = c34Pei;
             }
             // 9.计算n6
             var n6Pei = i6Pei - m6Pei;
             // 10.计算最终结果c39 n5为空所以c39=n6
             var c39Pei = roundToTwoDecimal(n6Pei);

             // 计算 First Ten Years Saving (Cost)(c40)
             //1.计算M6以后,10年就和
             var tenYearsPeiC34 = c34Pei * 10;
             //2.计算I6以后10年求和
             function sumPeiI6I15(startValue) {
                 // 初始化总和
                 var sumI6I15Pei = parseFloat(startValue.toFixed(2));
                 // 迭代，计算并添加到总和中，每次迭代乘以 1.021
                 for (var i = 1; i < 10; i++) {
                     // 计算当前迭代值并直接将其添加到总和中
                     startValue *= 1.021;
                     sumI6I15Pei += startValue;
                     // 输出当前迭代值（如果需要）
                     // console.log("当前值为：" + startValue);
                 }
                 // 返回保留两位小数的总和
                 return sumI6I15Pei.toFixed(2);
             }
             var tenYearsPeiI6 = sumPeiI6I15(parseFloat(i6Pei));
             var c40Pei = roundToTwoDecimal(tenYearsPeiI6 - tenYearsPeiC34);

             // 将计算值写入div
             // Electricity Offset Percentage（c37）
             var dataDiv01 = document.getElementById("data01");
             dataDiv01.innerHTML = `${c37Pei}`;
             // Pei Average Savings on Power Bill（c38）
             var dataDiv01 = document.getElementById("data02");
             dataDiv01.innerHTML = `${c38Pei}`;
             // var dataDiv01 = document.getElementById("data03");
             // dataDiv01.innerHTML = "$ " + `${c27Pei}`; //c27
             // var dataDiv01 = document.getElementById("data04");
             // dataDiv01.innerHTML = "$ " + `${c33Pei}`; //c33
             // First Year Savings(Costs)（ c39）
             var dataDiv01 = document.getElementById("data05");
             dataDiv01.innerHTML = "$ " + `${c39Pei}`;
             // First Ten Years Saving (Cost)(c40)
             var dataDiv01 = document.getElementById("data06");
             dataDiv01.innerHTML = "$ " + `${c40Pei}`;

         }
         //获取pei的按钮元素
         var calculateBtnPei = document.querySelector(".calculateBtnPei");
         // 在pei按钮上添加点击事件监听器
         calculateBtnPei.addEventListener("click", calculatePeiAllDataResults);

         // 获取所有带有 data-toggle="tab" 属性的链接
         var tabLinks = document.querySelectorAll('[data-toggle="tab"]');
         // 为每个链接添加点击事件监听器
         tabLinks.forEach(function(link) {
             link.addEventListener('click', function(event) {
                 // 阻止默认链接跳转行为
                 event.preventDefault();
                 // 获取链接的 href 属性值（即目标 tab 的 id）
                 var targetTabId = this.getAttribute('href').substring(1);
                 if (targetTabId === "pelCount") {
                     calculatePeiAllDataResults();
                 } else if (targetTabId === "bcCount") {
                     calculateBcAllDataResults();
                 } else if (targetTabId === "nsCount") {
                     calculateNsAllDataResults();
                 } else if (targetTabId === "onCount") {
                     calculateOnAllDataResults();
                 } else if (targetTabId === "abCount") {
                     calculateAndDisplayResults();
                 }
             });
         });


     });

     // 创建一个加载脚本的函数
     function loadResource(url, type, callback) {
         if (type === 'js') {
             // 加载JavaScript文件
             var script = document.createElement("script");
             script.type = "text/javascript";
             script.src = url;
             script.onload = callback;
             document.head.appendChild(script);
         } else if (type === 'css') {
             // 加载CSS文件
             var link = document.createElement("link");
             link.rel = "stylesheet";
             link.type = "text/css";
             link.href = url;
             link.onload = callback;
             document.head.appendChild(link);
         } else {
             console.error("Unsupported resource type");
         }
     }
     // 依次加载 GSAP 和 ScrollTrigger
     loadResource("https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js", "js", function() {
         // 在加载 GSAP 后再加载 ScrollTrigger
         loadResource("https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js", "js", function() {
             loadResource("https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/EasePack.min.js", "js", function() {
                 console.log("ScrollTrigger loaded successfully!");
                 gsap.registerPlugin(ScrollTrigger, EasePack);
                 gsap.registerPlugin(ScrollTrigger, EasePack);
                 const tl = gsap.timeline({
                     scrollTrigger: {
                         scrub: true,
                         trigger: ".parallax-all-box",
                         start: "top-=50",
                         end: "3000px",
                         // pin: true,
                         // markers: true,

                     },
                 });

                 var targets = document.querySelectorAll(".parallax-text-all-box .lessen-text-box span");
                 targets.forEach((target, index) => {
                     tl.from(target, 1, {
                         scale: 1.5,
                         //fontSize: '300px',
                         opacity: 0
                     }, index / 2)
                 })

                 tl.add("showGradient")
                     .to(".parallax-text-all-box .lessen-text-box", {
                         display: 'none',
                         opacity: 0
                     }, "showGradient")
                     .set(".parallax-text-all-box .shadow", {
                         display: 'block'
                     }, "showGradient")
                     .to(".parallax-text-all-box .shadow-inner", {
                         backgroundPositionY: '80%',
                         duration: 2
                     }, "showGradient")
                     .add("showTextBox")
                     .to(".parallax-text-all-box .shadow-inner", {
                         backgroundPositionY: '100%',
                         duration: 1
                     }, "showTextBox")
                     .to(".parallax-text-all-box", {
                         display: 'none',
                         opacity: 1
                     }, "showTextBox");

                 ScrollTrigger.create({
                     trigger: ".parallax-all-box",
                     start: "top-=50",
                     end: "2500px",
                     pin: true,
                     scrub: true,
                 })
                 window.addEventListener("load", setMargin);
                 window.addEventListener("resize", setMargin);

                 function setMargin() {
                     let elZoomHeight = document.querySelector('.lessen-text-box').offsetHeight;
                     let elGradientHeight = document.querySelector('.shadow-inner').offsetHeight;
                     let maxHeight = Math.max(elZoomHeight, elGradientHeight);
                     if (maxHeight > 0) {
                         document.querySelector('.shadow-inner').style = "margin-top:calc(-" + maxHeight + "px / 2)";
                     }
                 }
                 setMargin();
                 document.querySelector('.shadow').style = "display: none;";
             });
         });
     });
     //滑块js
     loadResource("https://unpkg.com/layui@2.9.0/dist/css/layui.css", "css", function() {
         loadResource("https://unpkg.com/layui@2.9.0/dist/layui.js", "js", function() {
             layui.use(['slider'], function() {
                 var slider = layui.slider;
                 // 渲染ab
                 slider.render({
                     elem: '#six-samll-slider',
                     value: 350, //初始值
                     min: 350,
                     max: 800,
                     step: 50, // 步长
                     showstep: true, // 开启间隔点
                     theme: '#214083',
                     tips: false, //关闭默认提示层
                     change: function(value) {
                         const sliderBtn = document.querySelector('.layui-slider-wrap-btn');
                         sliderBtn.innerHTML = value;
                         const abNumOneElement = document.getElementById("ab-num-one");
                         const abNumTwoElement = document.getElementById("ab-num-two");
                         abNumOneElement.innerHTML = ((value * 0.093) / 2 * 335 / 1000).toFixed(1) + " kW";
                         abNumTwoElement.innerHTML = ((value * 0.093) / 2 * 335 / 1000 * 1276).toFixed(1) + " kWh/Year*";
                     },
                 });
                 //初始化值350
                 const sliderBtn = document.querySelector('.layui-slider-wrap-btn');
                 if (sliderBtn) {
                     sliderBtn.innerHTML = '350';
                 }
                 //渲染bc省份得
                 slider.render({
                     elem: '#six-samll-slider-bc',
                     value: 350, //初始值
                     min: 350,
                     max: 800,
                     step: 50, // 步长
                     showstep: true, // 开启间隔点
                     theme: '#214083',
                     tips: false, //关闭默认提示层
                     change: function(value) {
                         const sliderBtns = document.querySelectorAll('.layui-slider-wrap-btn');
                         sliderBtns[1].innerHTML = value;
                         const abNumOneElementBc = document.getElementById("ab-num-one-bc");
                         const abNumTwoElementBc = document.getElementById("ab-num-two-bc");
                         abNumOneElementBc.innerHTML = ((value * 0.093) / 2 * 335 / 1000).toFixed(1) + " kW";
                         abNumTwoElementBc.innerHTML = ((value * 0.093) / 2 * 335 / 1000 * 1004).toFixed(1) + " kWh/Year*";
                     },
                 });
                 //初始化bc值350
                 const sliderBtns = document.querySelectorAll('.layui-slider-wrap-btn');
                 if (sliderBtns[1]) {
                     sliderBtns[1].innerHTML = '350';
                 }
                 //渲染ns省份得
                 slider.render({
                     elem: '#six-samll-slider-ns',
                     value: 350, //初始值
                     min: 350,
                     max: 800,
                     step: 50, // 步长
                     showstep: true, // 开启间隔点
                     theme: '#214083',
                     tips: false, //关闭默认提示层
                     change: function(value) {
                         const sliderBtnsNs = document.querySelectorAll('.layui-slider-wrap-btn');
                         sliderBtnsNs[2].innerHTML = value;
                         const numOneElementNS = document.getElementById("num-one-ns");
                         const numTwoElementNS = document.getElementById("num-two-ns");
                         numOneElementNS.innerHTML = ((value * 0.093) / 2 * 335 / 1000).toFixed(1) + " kW";
                         numTwoElementNS.innerHTML = ((value * 0.093) / 2 * 335 / 1000 * 1090).toFixed(1) + " kWh/Year*";
                     },
                 });
                 //初始化bc值350
                 const sliderBtnsNs = document.querySelectorAll('.layui-slider-wrap-btn');
                 if (sliderBtnsNs[2]) {
                     sliderBtnsNs[2].innerHTML = '350';
                 }
                 //渲染On省份得
                 slider.render({
                     elem: '#six-samll-slider-on',
                     value: 350, //初始值
                     min: 350,
                     max: 800,
                     step: 50, // 步长
                     showstep: true, // 开启间隔点
                     theme: '#214083',
                     tips: false, //关闭默认提示层
                     change: function(value) {
                         const sliderBtnsOn = document.querySelectorAll('.layui-slider-wrap-btn');
                         sliderBtnsOn[3].innerHTML = value;
                         const numOneElementOn = document.getElementById("num-one-on");
                         const numTwoElementOn = document.getElementById("num-two-on");
                         numOneElementOn.innerHTML = ((value * 0.093) / 2 * 335 / 1000).toFixed(1) + " kW";
                         numTwoElementOn.innerHTML = ((value * 0.093) / 2 * 335 / 1000 * 1166).toFixed(1) + " kWh/Year*";
                     },
                 });
                 //初始化On值350
                 const sliderBtnsOn = document.querySelectorAll('.layui-slider-wrap-btn');
                 if (sliderBtnsOn[3]) {
                     sliderBtnsOn[3].innerHTML = '350';
                 }
                 //渲染pei省份得
                 slider.render({
                     elem: '#six-samll-slider-pei',
                     value: 350, //初始值
                     min: 350,
                     max: 800,
                     step: 50, // 步长
                     showstep: true, // 开启间隔点
                     theme: '#214083',
                     tips: false, //关闭默认提示层
                     change: function(value) {
                         const sliderBtnsPei = document.querySelectorAll('.layui-slider-wrap-btn');
                         sliderBtnsPei[4].innerHTML = value;
                         const numOneElementPei = document.getElementById("num-one-pei");
                         const numTwoElementPei = document.getElementById("num-two-pei");
                         numOneElementPei.innerHTML = ((value * 0.093) / 2 * 335 / 1000).toFixed(1) + " kW";
                         numTwoElementPei.innerHTML = ((value * 0.093) / 2 * 335 / 1000 * 1104).toFixed(1) + " kWh/Year*";
                     },
                 });
                 //初始化On值350
                 const sliderBtnsPei = document.querySelectorAll('.layui-slider-wrap-btn');
                 if (sliderBtnsPei[4]) {
                     sliderBtnsPei[4].innerHTML = '350';
                 }
             });
         })
     })
     //news 轮播图的js
     loadResource("https://unpkg.com/npm/@glidejs/glide", "js", function() {
         // news轮播js代码
         var glide = new Glide('.glide', {
             type: 'carousel',
             perView: 3,
             focusAt: 'center',
             autoplay: 5000, // 五秒自动播放
             breakpoints: {
                 980: {
                     perView: 2
                 },
                 480: {
                     perView: 1
                 }
             }
         });
         glide.mount();
     })
 </script>
 <script>
     document.addEventListener('DOMContentLoaded', function() {
         const titles = document.querySelectorAll('.accordion .new-eight-title-box');
         const contents = document.querySelectorAll('.accordion .content');
         const images = document.querySelectorAll('.image-new-eight');

         // 默认展开第一个内容
         const firstContent = contents[0];
         firstContent.style.maxHeight = 'calc(150px + 20px)'; // 考虑 padding 值
         firstContent.classList.add('show');
         images[0].style.display = 'block';
         titles.forEach((title, index) => {
             // mouseover click
             title.addEventListener('mouseover', function() {
                 const content = contents[index];
                 const image = images[index];

                 if (content.classList.contains('show')) {
                     content.style.maxHeight = '0';
                     content.classList.remove('show');
                     title.children[1].classList.remove('title-new-eight-show'); // 移除标题的特殊类名
                     title.firstElementChild.classList.remove('circle-new-eight-show'); // 移除标题前面的圆的特殊类名
                 } else {
                     // 展开之前先将所有内容折叠起来
                     contents.forEach((content, i) => {
                         if (content.classList.contains('show')) {
                             content.style.maxHeight = '0';
                             content.classList.remove('show');
                             titles[i].children[1].classList.remove('title-new-eight-show'); // 移除所有标题的特殊类名
                             titles[i].firstElementChild.classList.remove('circle-new-eight-show'); // 移除所有标题前面的圆的特殊类名
                         }
                     });

                     // 展开当前内容
                     content.style.maxHeight = 'calc(150px + 20px)'; /* 设置展开高度为 100px + 20px（上下 padding 之和） */
                     content.classList.add('show');
                     title.children[1].classList.add('title-new-eight-show'); // 添加标题的特殊类名
                     title.firstElementChild.classList.add('circle-new-eight-show'); // 添加标题前面的圆的特殊类名

                     // 切换图片
                     images.forEach((img, i) => {
                         img.style.display = i === index ? 'block' : 'none';
                     });
                 }
             });
         });

     });
 </script>