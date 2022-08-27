<!-- Header  -->
<?php require_once "components/header.php"; ?>
<!-- Header end -->

<section>
    <div class="container-fluid px-md-5 px-4 mt-5">
        <div dir="rtl" id="newscontainer" class="row related_news">

            <!-- Category Section  -->
            <?php include "components/categories.php"; ?>
            <!-- Category Section ends  -->

            <div class="col-md-8 news_feed article_feed mb-5">
                <div class="content">
                    <h3 class="title"></h3>
                    <p class="date" style="font-size: 1rem;padding-right: 10px;"></p>
                </div>
                <div class="thumbnail mb-5">
                    <div style="height:300px;">
                        <?php include "components/loader.php"; ?>
                    </div>
                </div>
                <p dir="rtl" class="para">
                </p>
            </div>

            <!-- Category Responive Mode Section  -->
            <?php include "components/resp-categories.php"; ?>
            <!-- Category Responive Mode Section  ends -->

        </div>
    </div>
</section>

<!-- Footer  -->
<?php require_once "components/footer.php"; ?>
<!-- Footer end -->
<script>
let params = window.location.search;
let slug = params.substring(params.indexOf("=") + 1, params.indexOf("&"));
let category = `${params.slice(params.lastIndexOf("=")+1)}_news`;
let xxx = params.slice(params.lastIndexOf("=") + 1);

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
        const article = (xxx != "home") ? resp.record.articleLink.slice(25) : resp.record.articleLink.slice(
            20);
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