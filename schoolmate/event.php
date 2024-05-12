<?php
error_reporting(1);
include('navbar.php');
session_start();
if ($_SESSION['sname'] == "") {
    header('location:login.php');
}
?>
<style>
    *{
        box-sizing: border-box;
        margin: 0;
        padding: 0; 
    }
    .event-con .row{
        margin-bottom:  30px;
        margin-top: 25px;
        min-height: 350px;
        overflow: hidden;
    }
   /* image work start */
    .event-con .row .event-date{
        background-image: url(./image/bg-image/home.jpg);
        border-radius: 13px 0 0 13px;
    }
    .event-con .row:nth-of-type(odd) .event-date{
        border-radius: 0 13px 13px 0;
    }
    .event-con .row .event-date img{
       height: 100%;
        width: 100%;
    }
    /* event info start  */
    .event-con .row .event-info{
        background-color: #999999;
        padding: 15px;
        word-spacing: 11px;
        font-family: 'Times New Roman', Times, serif;
        text-align: justify;
    }
    .event-con .row .event-info h1{
        font-size: 45px;
        color: white;
        font-weight: 900;
        text-decoration: underline;
        text-shadow: red 2px 2px 3px;
        word-spacing: 15px;
    }
    .event-con .row .event-info p{
        font-size: 20px;
        font-weight: 500;
    }
</style>
<div class="container ">
    <div class="row  justify-content-center">
        <div class="event-con col-lg-11 col-sm-12">
            <!--1. event name and start date -->
            <div class="row">
                <div class="col-lg-9 col-sm-12 event-info">
                    <h1>Event Name</h1>
                    <b>Start : 13 Sep 2022, <span> 10:00 AM to 03:00 PM</span></b>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus temporibus iusto omnis, qui et laborum? Ipsam dolor odio, illum unde obcaecati asperiores veritatis ratione atque quod aspernatur fugiat facere eligendi sit minus fuga, molestiae quibusdam in animi! Quo corporis eum harum saepe ipsam amet aperiam delectus corrupti, quibusdam doloribus! Laudantium, molestiae nesciunt! Debitis unde blanditiis maiores reprehenderit animi. Nesciunt, asperiores magni magnam ex illo, quas iste, quod perferendis maxime deserunt recusandae incidunt eos? </p>
                </div>  
                <div class="col-lg-3 col-sm-12 event-date">
                    <img src="./image/bg-image/home.jpg" alt="nothing">
                </div>
            </div>
             <!--2. event name and start date -->
             <div class="row">
             <div class="col-lg-3 col-sm-12 event-date">
                    <img src="./image/bg-image/home.jpg" alt="nothing">
                </div>
                <div class="col-lg-9 col-sm-12 event-info">
                    <h1>Event Name</h1>
                    <b>Start : 13 Sep 2022, <span> 10:00 AM to 03:00 PM</span></b>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus temporibus iusto omnis, qui et laborum? Ipsam dolor odio, illum unde obcaecati asperiores veritatis ratione atque quod aspernatur fugiat facere eligendi sit minus fuga, molestiae quibusdam in animi! Quo corporis eum harum saepe ipsam amet aperiam delectus corrupti, quibusdam doloribus! Laudantium, molestiae nesciunt! Debitis unde blanditiis maiores reprehenderit animi. Nesciunt, asperiores magni magnam ex illo, quas iste, quod perferendis maxime deserunt recusandae incidunt eos? </p>
                </div>  
                
            </div>
            <!--3. event name and start date -->
            <div class="row">
                <div class="col-lg-9 col-sm-12 event-info">
                    <h1>Event Name</h1>
                    <b>Start : 13 Sep 2022, <span> 10:00 AM to 03:00 PM</span></b>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus temporibus iusto omnis, qui et laborum? Ipsam dolor odio, illum unde obcaecati asperiores veritatis ratione atque quod aspernatur fugiat facere eligendi sit minus fuga, molestiae quibusdam in animi! Quo corporis eum harum saepe ipsam amet aperiam delectus corrupti, quibusdam doloribus! Laudantium, molestiae nesciunt! Debitis unde blanditiis maiores reprehenderit animi. Nesciunt, asperiores magni magnam ex illo, quas iste, quod perferendis maxime deserunt recusandae incidunt eos? </p>
                </div>  
                <div class="col-lg-3 col-sm-12 event-date">
                    <img src="./image/bg-image/home.jpg" alt="nothing">
                </div>
            </div>
        </div>
    </div>
</div>










<?php
/*
<link rel="stylesheet" href="./custom_css/event.css">
<!-- <script src="./js_data/event.js" defer></script> -->


<script src="./js_data/event.js" defer>
    const header = document.getElementById('header')
    const title = document.getElementById('title')
    const excerpt = document.getElementById('excerpt')
    const profile_img = document.getElementById('profile-img')
    const author_name = document.getElementById('name')
    const date = document.getElementById('date')

    const animated_bgs = document.querySelectorAll('.animated-bg')
    const animated_bg_texts = document.querySelectorAll('.animated-bg-text')

    // setTimeout(getdata('<img src="./image/about/2018-07-28_1421.png" alt="couple goal" />', 'Lorem ipsum', ' Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus, culpa', ' <img src="image/15.jpg" alt="John doe" />', 'John doe', 'Oct 8 2022'), 2500);
    setTimeout(getdata('<img src="./image/about/2018-07-28_1421.png" alt="couple goal" />', 'Bittu basha', ' I am a web devloper', ' <img src="image/15.jpg" alt="John doe" />', 'Bittu basha', 'Oct 8 2000'), 2500);

    function getdata(hImage, titleIs, expert, profile, author, dateIs) {
        header.innerHTML = hImage;
        title.innerHTML = titleIs;
        excerpt.innerHTML = expert;
        profile_img.innerHTML = profile;
        author_name.innerHTML = author;
        date.innerHTML = dateIs;

        animated_bgs.forEach(bg => bg.classList.remove('animated-bg'))
        animated_bg_texts.forEach(bg => bg.classList.remove('animated-bg-text'))
    }
    
</script>
<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-header animated-bg" id="header">
                    &nbsp;
                </div>

                <div class="card-content">
                    <h3 class="card-title animated-bg animated-bg-text" id="title">&nbsp;
                    </h3>
                    <p class="card-excerpt" id="excerpt">
                        &nbsp;
                        <span class="animated-bg animated-bg-text">&nbsp;</span>
                        <span class="animated-bg animated-bg-text">&nbsp;</span>
                        <span class="animated-bg animated-bg-text">&nbsp;</span>
                    </p>
                    <div class="author">
                        <div class="profile-img animated-bg" id="profile-img">
                            &nbsp;
                        </div>
                        <div class="author-info">
                            <strong class="animated-bg animated-bg-text" id="name">&nbsp;</strong>
                            <small class="animated-bg animated-bg-text" id="date">&nbsp;</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

*/
?>
<?php
include('footer.php');
?>