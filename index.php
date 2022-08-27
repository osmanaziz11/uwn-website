<?php
require_once './server/db-config.php';
try{
  $ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://ip-api.com/json/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$data = curl_exec($ch);
$data = json_decode($data);
if ($data->status == 'success') {
  $sql=$conn->prepare('INSERT INTO `visitorstats` (`country`, `city`, `state`) VALUES (:country,:city,:state);');
  $sql->execute(['country' => $data->country,'city' => $data->city,'state' => $data->regionName]);
}
}catch(PDOException $exc){
  echo $exc->getMessage();
}
?>



<!-- Header  -->
<?php require_once "components/header.php"; ?>
<!-- Header end  -->

<!-- Google Advertisement  -->

<!-- Google Advertisement end -->

<!-- hero section  -->
<div class="container-fluid hero_section my-5">
    <div class="row">
        <div class="col-md-4 d-md-block d-none">
            <div class="contaienr-fluid">
                <div class="row sliderChild">
                </div>
            </div>
        </div>
        <!-- slider  -->
        <div class="col-md-8 ps-md-0 ps-2 d-flex justify-content-md-start justify-content-center">
            <div class="slider_container position-relative">
            </div>
        </div>
        <!-- slider end  -->
    </div>
    <div class="row d-md-none d-flex">
        <div class="col-sm-6 ps-sm-3 pe-sm-0 position-relative">
            <div class="slider_child w-100 position-relative">
                <div class="transition w-100 h-100 position-absolute"></div>
                <img src="assects/img/2.jpg" alt="">
                <h6 class="position-absolute">گریزی سے اردو میں ترجمہ کریں۔ چاہے وہ الفاظ ہوں</h6>
                <p>02 August 2022</p>
            </div>

        </div>
        <div class="col-sm-6 ps-sm-0 pe-sm-4">
            <div class="slider_child w-100 position-relative">
                <div class="transition w-100 h-100 position-absolute"></div>
                <img src="assects/img/2.jpg" alt="">
                <h6 class="position-absolute">گریزی سے اردو میں ترجمہ کریں۔ چاہے وہ الفاظ ہوں</h6>
                <p>02 August 2022</p>
            </div>
        </div>
    </div>

</div>
<!-- hero section end -->

<section>
    <div class="container-fluid px-md-5 px-4 pt-5">
        <div class="row mb-5">
            <div class="col">
                <h3 class="text-end" style="font-family: 'Noto Nastaliq Urdu';font-size: 2rem;">خبریں</h3>
            </div>
        </div>
        <div class=" row">
            <!-- Category Section  -->
            <?php include "components/categories.php"; ?>
            <!-- Category Section ends  -->
            <div class="col-md-8 news_feed">

            </div>
        </div>

        <!-- Category Responive Mode Section  -->
        <?php include "components/resp-categories.php"; ?>
        <!-- Category Responive Mode Section  ends -->


        <div class="row mt-5 mb-3">
            <div class="col">
                <h1 class="text-end" style="font-family: 'Noto Nastaliq Urdu';font-size: 2rem;">
                    &#x645;&#x62a;&#x639;&#x644;&#x642;&#x6c1;&#x20;&#x62e;&#x628;&#x631;&#x6cc;&#x6ba;</h1>
            </div>
        </div>
        <div dir="rtl" class="row mt-5 related_news">

        </div>
    </div>
</section>

<!-- Footer  -->
<?php require_once "components/footer.php"; ?>
<!-- Footer end -->
<script>
const baseURL = "http://localhost:81/uwn"
</script>
<script src="assects/Js/jquery.js"></script>
<script>
let sliderContainer = document.getElementsByClassName('slider_container')[0];
let relatedNews = document.getElementsByClassName('related_news')[0];
let newsFeed = document.getElementsByClassName('news_feed')[0];
let sliderChild = document.getElementsByClassName('sliderChild')[0];

(async function() {
    const req = await fetch(`${baseURL}/server/api/home.php`);
    const resp = await req.json();
    if (resp.status == 1) {
        sliderContainer.innerHTML = "";
        sliderChild.innerHTML = "";
        relatedNews.innerHTML = "";
        newsFeed.innerHTML = "";
        let length = resp.record.length;
        for (var i = 0; i < length; i++) {
            if (i < 4) {
                sliderContainer.innerHTML += `<div id="${i}" class="__slider w-100 h-100 position-absolute top-0 ">
                       <a href="article.php?article=${resp.record[i].slug}&category=home">
                        <div class="w-100 h-100 position-absolute top-0 img_gradient"></div>
                        <img src="${resp.record[i].thumbnail}" class="w-100 h-100" alt="">
                        <div dir="rtl" class="desc_container position-absolute bottom-0 end-0 px-3">
                            <h1 class="">${resp.record[i].title}</h1>
                            <p class="text-white">${resp.record[i].publishedAt}</p>
                        </div>
                        </a>
                    </div>`
            } else if (i > 3 && i < 6) {
                sliderChild.innerHTML += `<div class="col-12 d-flex pe-0 justify-content-md-end">
                        
                            <div class="slider_child position-relative">
                                <div class="transition w-100 h-100 position-absolute"></div>
                                <img src="${resp.record[i].thumbnail}" alt="">
                                   <a href="article.php?article=${resp.record[i].slug}&category=home">
                                <h6 class="position-absolute">${resp.record[i].title}</h6>
                                 </a>
                                <p>${resp.record[i].publishedAt}</p>
                            </div>
                           
                        </div>`
            } else if (i > 6 && i < 14) {
                newsFeed.innerHTML += `<div class="content">
                    <a href="article.php?article=${resp.record[i].slug}&category=home">
                        <h3>${resp.record[i].title}</h3>
                         </a>
                        <p class="sdesc">${resp.record[i].shortDesc}</p>
                        <p class="date">${resp.record[i].publishedAt}</p>
                    </div>
                    <div class="thumbnail mb-5">
                        <img src="${resp.record[i].thumbnail}" alt="">
                    </div>`
            } else if (i > 13 && i < 18) {
                relatedNews.innerHTML += `<div class="col-md-3 col-sm-6 mb-3">
                    <div class="imgBox rounded shadow">
                        <img src="${resp.record[i].thumbnail}" alt="">
                    </div>
                   <a href="article.php?article=${resp.record[i].slug}&category=home">
                    <p class="mt-3 title text-end">
                        ${resp.record[i].title}
                    </p>
                    </a>
                </div>`
            }
        }
    }

    let children = $(".slider_container").children().length;
    count = -1;
    $(document.getElementById(count = count + 1)).addClass('active_slide').siblings().removeClass(
        'active_slide')
    setInterval(() => {
        if (children > 1) {
            count = (count == children - 1) ? 0 : count = count + 1;
            $(document.getElementById(count)).addClass('active_slide').siblings().removeClass(
                'active_slide')
        }
    }, 5000);
}());
</script>
</body>



</html>