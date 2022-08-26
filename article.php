<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>&#1575;&#1585;&#1583;&#1608; &#1606;&#1740;&#1608;&#1586; - &#1662;&#1729;&#1604;&#1575;
        &#1589;&#1601;&#1581;&#1729;</title>
    <!-- Favicon  -->
    <link rel="shortcut icon" href="assects\img\Logo.jpg" type="image/jpg" />
    <!-- Global.css  -->
    <link rel="stylesheet" href="assects\css\global.css" />
    <!-- Bootstrap CDN  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet" />
    <!-- Iconify icons  -->
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
</head>

<body>
    <!-- Header  -->
    <?php require_once "components/header.php"; ?>
    <!-- Header end -->

    <section>
        <div class="container-fluid px-md-5 px-4 mt-5">
            <div dir="rtl" id="newscontainer" class="row related_news">
                <!-- Loader  -->
                <div class="col-4 d-md-block d-none latest_news">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col">
                                <h4 class="text-center mb-3">- &#x6a9;&#x6be;&#x6cc;&#x644; -</h4>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col category position-relative p-0"> <img src="assects/img/1.jpg" alt="">
                                <div
                                    class="transition position-absolute w-100 h-100 top-0 d-flex justify-content-center align-items-end">
                                    <p class="text-center text-white">ہاں تک کہ آپ کی ویب سائٹ کے صفحات بھی بہترین پیش
                                        کریں گے</p>
                                </div>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col category position-relative p-0"> <img src="assects/img/1.jpg" alt="">
                                <div
                                    class="transition position-absolute w-100 h-100 top-0 d-flex justify-content-center align-items-end">
                                    <p class="text-center text-white">ہاں تک کہ آپ کی ویب سائٹ کے صفحات بھی بہترین پیش
                                        کریں گے</p>
                                </div>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col category position-relative p-0"> <img src="assects/img/1.jpg" alt="">
                                <div
                                    class="transition position-absolute w-100 h-100 top-0 d-flex justify-content-center align-items-end">
                                    <p class="text-center text-white">ہاں تک کہ آپ کی ویب سائٹ کے صفحات بھی بہترین پیش
                                        کریں گے</p>
                                </div>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <h4 class="text-center mb-3">- &#x6a9;&#x6be;&#x6cc;&#x644; -</h4>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col category position-relative p-0"> <img src="assects/img/1.jpg" alt="">
                                <div
                                    class="transition position-absolute w-100 h-100 top-0 d-flex justify-content-center align-items-end">
                                    <p class="text-center text-white">ہاں تک کہ آپ کی ویب سائٹ کے صفحات بھی بہترین پیش
                                        کریں گے</p>
                                </div>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col category position-relative p-0"> <img src="assects/img/1.jpg" alt="">
                                <div
                                    class="transition position-absolute w-100 h-100 top-0 d-flex justify-content-center align-items-end">
                                    <p class="text-center text-white">ہاں تک کہ آپ کی ویب سائٹ کے صفحات بھی بہترین پیش
                                        کریں گے</p>
                                </div>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col category position-relative p-0"> <img src="assects/img/1.jpg" alt="">
                                <div
                                    class="transition position-absolute w-100 h-100 top-0 d-flex justify-content-center align-items-end">
                                    <p class="text-center text-white">ہاں تک کہ آپ کی ویب سائٹ کے صفحات بھی بہترین پیش
                                        کریں گے</p>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-8 news_feed article_feed">
                    <div class="content">
                        <h3 class="title"></h3>
                        <p class="date"></p>
                    </div>
                    <div class="thumbnail mb-5">
                        <div style="height:300px;">
                            <?php include "components/loader.php"; ?>
                        </div>
                    </div>
                    <p dir="rtl" class="para">
                    </p>
                </div>
                <!-- Loader Ends  -->
            </div>
        </div>
    </section>

    <!-- Footer  -->
    <?php require_once "components/footer.php"; ?>
    <!-- Footer end -->
    <script>
    let params = window.location.search;
    let slug = params.substring(9, 17);
    let category = `${params.slice(27)}_news`;
    let xxx = `${params.slice(27)}`;
    (async function() {
        const req = await fetch('http://localhost:81/uwn/server/api/article.php', {
            method: "POST",
            body: JSON.stringify({
                category,
                slug
            })
        })
        const resp = await req.json();
        if (resp.status == 1) {
            const article = resp.record.articleLink.slice(25);
            const reqArticle = await fetch(`http://127.0.0.1:5000/api/${xxx}/news/${article}`, {
                method: "POST",
                body: JSON.stringify({
                    slug
                })
            })
            const myArticle = await reqArticle.json();
            if (myArticle.status == 1) {
                document.getElementsByClassName('thumbnail')[0].innerHTML = ""
                document.getElementsByClassName('title')[0].innerHTML = myArticle.description.title;
                document.getElementsByClassName('date')[0].innerHTML = myArticle.description.publishedAt;
                document.getElementsByClassName('para')[0].innerHTML = myArticle.description.article;
                document.getElementsByClassName('thumbnail')[0].innerHTML =
                    `<img src="${myArticle.description.thumbnail[0]}" alt="">`

            }

        }
    }())
    </script>
</body>

</html>