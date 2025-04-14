<style>
    .footer-map-bg {
        background-color: black;
        margin-top: 65px;
    }

    .footer-map-bg a {
        color: #ffffff;
    }

    .foot-map-all-box {
        margin-left: 64px;
        margin-right: 64px;
        padding-top: 64px;
        padding-bottom: 64px;
    }

    .foot-company-icon img {
        width: 122px;
        height: 32px;
    }

    .foot-map-top-box {
        display: flex;
        justify-content: space-between;
        margin-top: 16px;
        gap: 48px;
    }

    .foot-map-left {
        width: 60%;
    }

    .foot-map-right {
        width: 40%;
    }

    .foot-introduce-text {
        font-size: 14px;
        font-weight: 400;
        font-family: "Overpass";
        line-height: 20px;
        color: #ffffff;
    }

    .foot-title-link {
        display: flex;
        gap: 64px;
        width: ;
    }

    .foot-title-link h5 {
        border-bottom: 1px solid #ffffff;
    }

    .foot-item-01 {
        width: 50%;
    }

    .foot-item-02 {
        width: 15%;
    }

    .foot-item-03 {
        width: 15%;
    }

    .foot-title-content-01 {
        margin-top: 24px;
        display: flex;
        justify-content: space-between;
    }

    .foot-title-content-02 {
        margin-top: 24px;
    }

    .foot-title-content-03 {
        margin-top: 24px;
    }

    .foot-map-bottom-box {
        display: flex;
        justify-content: space-between;
        /* border-bottom: 1px solid #ffffff; */
        padding-bottom: 14px;
        gap: 16px;
    }

    .foot-copyright {
        margin: auto;
        margin-top: 36px;
        color: #ffffff;
        font-size: 14px;
        font-family: 'Overpass';
        text-align: center;
    }

    .map-none {
        display: none;
    }

    @media (min-width: 1100px) and (max-width: 1300px) {
        .map-none {
            display: none;
        }

        .foot-title-link {
            display: flex;
            gap: 15px;
            justify-content: space-between;
            width: ;
        }

        .foot-item-01 {
            width: 70%;
        }

        .foot-item-02 {
            width: 15%;
        }

        .foot-item-03 {
            width: 15%;
        }
    }

    /* 768px到999px之间的样式 */
    @media (min-width: 768px) and (max-width: 1099px) {
        .foot-map-bottom-box {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .foot-map-bottom-box>div {
            width: 300px;
        }

        .map-none {
            display: block;
        }

        .foot-map-left {
            width: 100%;
        }

        .foot-map-right {
            width: 40%;
            display: none;
        }
    }

    /* 小于768px的样式 */
    @media (max-width: 767px) {
        .foot-map-all-box {
            margin-left: 10px;
            margin-right: 10px;
            padding-top: 64px;
            padding-bottom: 64px;
        }

        .foot-title-link {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: space-between;
        }

        .foot-title-link .foot-item-01 {
            width: 100%;
        }

        .foot-title-content-01 {
            display: flex;
            flex-wrap: wrap;
        }

        .foot-title-content-01>div {
            width: 140px;
        }

        .foot-title-link .foot-item-02 {
            width: 135px;
        }

        .foot-title-link .foot-item-03 {
            width: 135px;
        }

        .foot-map-bottom-box {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .foot-map-bottom-box>div {
            width: 47%;
        }

        .map-none {
            display: block;
        }

        .foot-map-left {
            width: 100%;
        }

        .foot-map-right {
            width: 40%;
            display: none;
        }
    }
</style>
<div class="footer-map-bg">
    <div class="foot-map-all-box">
        <div class="foot-company-icon">
            <img src="<?php echo get_template_directory_uri() . '/images/indexImg/header.png' ?>">
        </div>
        <div class="foot-map-top-box">
            <div class="foot-map-left">
                <div class="foot-introduce-text">
                    Polaron holds the distinction as Canada’s most trusted Solar Company.
                    Having helped over 12,500 households go solar, we’ve grown to become
                    Canada’s largest residential solar installation company. Starting
                    from Ontario in 2013, we quickly spread across Canada in late 2017
                    and now operate locally in 5 provinces (ON, AB, NS, BC and PEI), all while cementing
                    ourselves as industry leaders in the Atlantic. Our focus is on delivering a turnkey
                    solution that includes design development, financial planning, installation,
                    and professional maintenance. We have a dedicated team that works endlessly
                    to ensure that every step of the process is accomplished with care and precision.
                    Polaron takes pride in providing our clients with the highest quality solar panel systems and
                    the most savings possible through our industry-leading low interest solar
                    programs.
                </div>
                <div class="" style="margin-top: 5px;display:flex; flex-wrap:wrap;">
                    <div style="margin: 24px 27px 27px 0vw;">
                        <a href="https://www.facebook.com/PolaronSolar/" target="_blank">
                            <img width="36" height="36" src="<?php echo get_template_directory_uri() . '/css/icon/face-book.svg' ?>" alt="">
                        </a>
                    </div>
                    <div style="margin: 24px 27px 27px 0vw;">
                        <a href="https://www.instagram.com/accounts/login/?next=/polaronsolar/" target="_blank">
                            <img width="36" height="36" src="<?php echo get_template_directory_uri() . '/css/icon/instagram.svg' ?>" alt="">
                        </a>
                    </div>
                    <div style="margin: 24px 27px 27px 0vw;">
                        <a href="https://twitter.com/polaronsolar" target="_blank">
                            <img width="36" height="36" src="<?php echo get_template_directory_uri() . '/css/icon/twitter-new-new.svg' ?>" alt="">
                        </a>
                    </div>
                    <div style="margin: 24px 27px 27px 0vw;">
                        <a href="https://www.youtube.com/channel/UCjMZ3-4H0mQQdeWlp96zMug" target="_blank">
                            <img width="36" height="36" src="<?php echo get_template_directory_uri() . '/css/icon/YouTube-Logo.wine.svg' ?>" alt="">
                        </a>
                    </div>
                    <div style="margin: 24px 27px 27px 0vw;">
                        <a href="https://www.linkedin.com/company/polaron-solartech-corporation/" target="_blank">
                            <img width="36" height="36" src="<?php echo get_template_directory_uri() . '/css/icon/linkedin-new.svg' ?>" alt="">
                        </a>
                    </div>
                    <div style="margin: 24px 27px 27px 0vw;">
                        <a href="https://www.tiktok.com/@polaronsolar" target="_blank">
                            <img width="36" height="36" src="<?php echo get_template_directory_uri() . '/css/icon/tiktok-new-new.svg' ?>" alt="">
                        </a>
                    </div>
                </div>
                <div class="foot-title-link">
                    <div class="foot-item-01">
                        <h5 style="font-weight: 700;font-family: 'Overpass';font-size: 16px;color: #ffffff;line-height: 1em;padding-bottom: 10px;margin: 0;">
                            Company
                        </h5>
                        <div class="foot-title-content-01">
                            <div>
                                <a href="<?php echo esc_url(home_url('/about')); ?>">
                                    <div style="color: ffffff!important;font-weight: 500;line-height: 1.2em;padding-bottom: 14px;font-family: 'Overpass';">
                                        About Polaron
                                    </div>
                                </a>
                                <a href="<?php echo esc_url(home_url('/about-solar-system')); ?>">
                                    <div style="color: ffffff!important;font-weight: 500;line-height: 1.2em;padding-bottom: 14px;font-family: 'Overpass';">
                                        About Solar System
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a href="<?php echo esc_url(home_url('/jobs')); ?>">
                                    <div style="color: ffffff!important;font-weight: 500;line-height: 1.2em;padding-bottom: 14px;font-family: 'Overpass';">
                                        Jobs
                                    </div>
                                </a>
                                <a href="<?php echo esc_url(home_url('/polaron-academy')); ?>">
                                    <div style="color: ffffff!important;font-weight: 500;line-height: 1.2em;padding-bottom: 14px;font-family: 'Overpass';
                        padding: 0;margin-bottom: 15.628%;">
                                        Academy
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a href="<?php echo esc_url(home_url('/download-warranty-package')); ?>">
                                    <div style="color: ffffff!important;font-weight: 500;line-height: 1.2em;padding-bottom: 14px;font-family: 'Overpass';">
                                        About Warranty
                                    </div>
                                </a>
                                <a href="<?php echo esc_url(home_url('/privacy-and-terms-of-use')); ?>">
                                    <div style="color: ffffff!important;font-weight: 500;line-height: 1.2em;padding-bottom: 14px;font-family: 'Overpass';">
                                        Privacy & Terms of Use
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="foot-item-02">
                        <h5 style="font-weight: 700;font-family: 'Overpass';font-size: 16px;color: #ffffff;line-height: 1em;
                    padding-bottom: 10px;margin: 0;">
                            Services
                        </h5>
                        <div class="foot-title-content-02">
                            <div>
                                <a href="<?php echo esc_url(home_url('/residential')); ?>">
                                    <div style="color: ffffff!important;font-weight: 500;line-height: 1.2em; padding-bottom: 14px;font-family: 'Overpass';">
                                        Residential
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a href="<?php echo esc_url(home_url('/commercial')); ?>">
                                    <div style="color: ffffff!important;font-weight: 500;line-height: 1.2em;padding-bottom: 14px;
                        font-family: 'Overpass';padding: 0;margin-bottom: 15.628%;">
                                        Commercial
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="foot-item-03">
                        <h5 style="font-weight: 700;font-family: 'Overpass';font-size: 16px;color: #ffffff;line-height: 1em;font-family: 'Overpass';
                     padding-bottom: 10px;margin: 0;">
                            Contact
                        </h5>
                        <div class="foot-title-content-03">
                            <div>
                                <a href="<?php echo esc_url(home_url('/contact')); ?>">
                                    <div style="color: ffffff!important;font-weight: 500;line-height: 1.2em;padding-bottom: 14px;font-family: 'Overpass';">
                                        Get in touch
                                    </div>
                                </a>
                            </div>
                            <div>
                                <a href="<?php echo esc_url(home_url('/faq')); ?>">
                                    <div style="color: ffffff!important;font-weight: 500;line-height: 1.2em;font-family: 'Overpass';margin-bottom: 15.628%;">
                                        FAQ
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="foot-map-right">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11517.141829743421!2d-79.336108!3d43.808438!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4d3759ce20eff%3A0xb9d7c7cd6cbf3669!2s3761%20Victoria%20Park%20Ave%20%239%2C%20Scarborough%2C%20ON%20M1W%203S2!5e0!3m2!1sen!2sca!4v1605147504930!5m2!1sen!2sca" width="100%" height="75%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                <h5 style="font-weight: 700;font-family: 'Overpass';
                        font-size: 18px;color: #ffffff;line-height: 1.7em;
                        margin: 0;padding: 10px 0px;">
                    Head Office
                </h5>
                <div style="padding-bottom: 10px;font-family: 'Overpass';line-height: 1em;color:#ffffff;">
                    3761 Victoria Park Ave. Unit 9 Scarborough, Ontario M1W 3S2
                </div>
                <div style="font-family: 'Overpass';padding-bottom: 10px;line-height: 1em;">

                </div>
            </div>
        </div>
        <div class="foot-map-bottom-box">
            <div class="map-none">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11517.141829743421!2d-79.336108!3d43.808438!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4d3759ce20eff%3A0xb9d7c7cd6cbf3669!2s3761%20Victoria%20Park%20Ave%20%239%2C%20Scarborough%2C%20ON%20M1W%203S2!5e0!3m2!1sen!2sca!4v1605147504930!5m2!1sen!2sca" width="100%" height="" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <h5 style="font-weight: 700;font-family: 'Overpass';
                        font-size: 18px;color: #ffffff;line-height: 1.7em;
                        margin: 0;padding: 10px 0px;">
                    Head Office
                </h5>
                <div style="padding-bottom: 10px;font-family: 'Overpass';line-height: 1em;color:#ffffff;">
                    3761 Victoria Park Ave. Unit 9 Scarborough, Ontario M1W 3S2
                </div>
                <div style="font-family: 'Overpass';padding-bottom: 10px;line-height: 1em;">

                </div>
            </div>
            <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2502.5971201793946!2d-114.02568509999999!3d51.15278010000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x537166b007e24d55%3A0xb836181503fbc08f!2s11127%2015%20St%20NE%20%23104%2C%20Calgary%2C%20AB%20T3N%201C5%2C%20Canada!5e0!3m2!1sen!2s!4v1717419440210!5m2!1sen!2s" width="100%" height="" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
                <h5 style="font-weight: 700;font-family: 'Overpass';
                        font-size: 18px;color: #ffffff;line-height: 1.7em;
                        margin: 0;padding: 10px 0px;">
                    Calgary, Alberta Office
                </h5>
                <div style="padding-bottom: 10px;font-family: 'Overpass';line-height: 1em; color:#ffffff;">
                    11127 15 St NE #104, Calgary, AB T3K 0Z5
                </div>
                <div style="font-family: 'Overpass';padding-bottom: 10px;line-height: 1em;">
                </div>
            </div>
            <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2371.8205383848567!2d-113.41620748415484!3d53.52526188001695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53a018755fb30c6b%3A0x10ee1acae0efeb21!2s4716%2091%20Ave%20NW%2C%20Edmonton%2C%20AB%20T6B%202L1%2C%20Canada!5e0!3m2!1sen!2shk!4v1604907016426!5m2!1sen!2shk" width="100%" height="" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                <h5 style="font-weight: 700;font-family: 'Overpass';
                        font-size: 18px;color: #ffffff;line-height: 1.7em;
                        margin: 0;padding: 10px 0px;">
                    Alberta Office
                </h5>
                <div style="padding-bottom: 10px;font-family: 'Overpass';line-height: 1em;color:#ffffff;">
                    4716 91 Ave NW
                </div>
                <div style="padding-bottom: 10px;line-height: 1em;font-family: 'Overpass';color:#ffffff;">Edmonton, Alberta T6B 2L1</div>
            </div>
            <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2607.464058488733!2d-123.07537452345099!3d49.19175567718867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548675a46c6f32ab%3A0x83c9632e043be33c!2s13680%20Bridgeport%20Rd%20%233%2C%20Richmond%2C%20BC%20V6V%201V3!5e0!3m2!1sen!2sca!4v1727717840912!5m2!1sen!2sca" width="100%" height="" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                <h5 style="font-weight: 700;font-family: 'Overpass';
                        font-size: 18px;color: #ffffff;line-height: 1.7em;
                        margin: 0;padding: 10px 0px;">
                    British Columbia Office
                </h5>
                <div style="padding-bottom: 10px;font-family: 'Overpass';line-height: 1em;color:#ffffff;">
                    Unit 3, 13680 Bridgeport Road,
                </div>
                <div style="font-family: 'Overpass';padding-bottom: 10px;line-height: 1em;color:#ffffff;">
                    Richmond, BC V6V 1V3
                </div>
            </div>
            <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2835.3151899793475!2d-63.59875958450497!3d44.71317847909932!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4b5a271f0533dc3f%3A0x82ae5ce6ed6e4815!2s115A-75%20Akerley%20Blvd%2C%20Dartmouth%2C%20NS%20B3B%201R7%2C%20Canada!5e0!3m2!1sen!2sus!4v1605062546534!5m2!1sen!2sus" width="100%" height="" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                <h5 style="font-weight: 700;font-family: 'Overpass';
                        font-size: 18px;color: #ffffff;line-height: 1.7em;
                        margin: 0;padding: 10px 0px;">
                    Nova Scotia Office
                </h5>
                <div style="padding-bottom: 10px;font-family: 'Overpass';line-height: 1em;color:#ffffff;">
                    75 Akerley Blvd, Unit 115A
                </div>
                <div style="font-family: 'Overpass';padding-bottom: 10px;line-height: 1em;color:#ffffff;">
                    Dartmouth, Nova Scotia B3B 1R7
                </div>
            </div>
            <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2757.494754876337!2d-63.150194323927884!3d46.28014427862958!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4b5fb2a0f973e541%3A0xc6719e07fa0adc70!2s423%20Mt%20Edward%20Rd%2C%20Charlottetown%2C%20PE%20C1E%202A1%2C%20Canada!5e0!3m2!1sen!2shk!4v1697692743482!5m2!1sen!2shk" width="100%" height="" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                <h5 style="font-weight: 700;font-family: 'Overpass';
                        font-size: 18px;color: #ffffff;line-height: 1.7em;
                        margin: 0;padding: 10px 0px;">
                    Prince Edward Island Office
                </h5>
                <div style="padding-bottom: 10px;font-family: 'Overpass';line-height: 1em;color:#ffffff;">
                    423 Mt Edward Rd,
                </div>
                <div style="font-family: 'Overpass';padding-bottom: 10px;line-height: 1em;color:#ffffff;">
                    Charlottetown, PE C1E 2A1
                </div>
            </div>
        </div>
        <div class="foot-copyright">
            Copyright © Polaron 2021 - 2025
        </div>
    </div>
</div>