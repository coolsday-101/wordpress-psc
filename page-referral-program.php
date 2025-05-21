<?php
function my_custom_head_content_rp()
{
?>
    <title>Polaron Solar News Desk — Stay Connected With Polaon</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/page/referral/css/referral_t.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/page/referral/css/referral980_t.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/page/referral/css/referral767_t.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/page/referral/css/referral320_t.css'; ?>">
    <script src="https://unpkg.com/npm/jquery@3.7.1/dist/jquery.min.js"></script>
<?php
}
add_action('wp_head', 'my_custom_head_content_rp');
get_header('tailwind'); // 加载头部
?>
<!-- style="margin-top: 100px;" -->
<div class="module-one">
    <div></div>
</div>
<div class="module-two">
    <div class="referral-box">
        <div class="left-box">
            <div class="left-img-box">
                <img src="<?php echo get_template_directory_uri() . '/page/referral/img/referral.avif'; ?>" alt="">
            </div>
        </div>
        <div class="right-box">
            <div class="right-title">Polaron Solar Referral Program</div>
            <div class="right-title-two">It's a win-win for you and the environment!</div>
            <div class="right-content">
                Earn <span> $200 </span> for each friend you refer! Spread the word about the benefits of solar
                energy and help your friends save on their energy bills!
            </div>
            <div class="right-content-two">
                *A payment of $200 will be issued once the installations of both you and your referees’
                solar systems have been verified and confirmed. <br><b>You need to have already signed up with us and
                    provided your full home address to be able to participate in this program.</b>
            </div>
        </div>
    </div>
</div>
<div class="module-three">
    <div class="top-title">
        Unlock the Potential of Unlimited Solar Referral Bonuses- $200 for Each Solar Installation
    </div>
    <div class="from-box">
        <form id="custom-form" method="POST">
            <div>
                <label for="email">Your Email Address: </label><br>
                <input type="email" id="email" name="email" placeholder="" autocomplete="off" required oninvalid="setCustomValidity('Please enter a value!')">
            </div>
            <button type="submit" class="exec-button">
                <span>
                    Get Your Application Form Now
                </span>
            </button>
        </form>
    </div>
</div>

<script>
    var ajaxUrl = 'https://polaronsolar.com/api/polaron/campaign/referral/public/requestGuestReferralEmail'
    $('#custom-form').on('submit', function(e) {
        e.preventDefault()
        $('#custom-form button').prop('disabled', true)
        $('#email').prop('disabled', true)
        $.ajax({
            type: 'POST',
            url: ajaxUrl,
            data: JSON.stringify({
                email: $('#email').val()
            }),
            contentType: 'application/json'
        }).done(function(data) {
            window.location.href = '<?php echo get_permalink(get_page_by_path('referral-program-thank-you')); ?>'
        }).fail(function() {
            alert('Sorry, something went wrong on our side. Sorry for the inconvenience.')
            $('#custom-form button').removeAttr('disabled')
            $('#email').removeAttr('disabled')
        }).always(function() {
            $('#email').val('')
        })
    })
</script>
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
</body>