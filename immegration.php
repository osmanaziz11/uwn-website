<!-- Header  -->
<?php require_once "components/header.php"; ?>
<!-- Header end  -->

<!-- Google Advertisement  -->

<!-- Google Advertisement end -->


<section>
    <div class="container-fluid px-md-5 px-4 pt-5">

        <div class="row">
            <!-- Category Section  -->
            <?php include "components/categories.php"; ?>
            <!-- Category Section ends  -->

            <div class="col-md-8 news_feed">
                <?php include 'components/loader.php'; ?>
            </div>
        </div>
        <!-- Category Responive Mode Section  -->
        <?php include "components/resp-categories.php"; ?>
        <!-- Category Responive Mode Section  ends -->

    </div>
</section>

<!-- Footer  -->
<?php require_once "components/footer.php"; ?>
<!-- Footer end -->

<script>
const baseURL = "http://localhost:81/uwn/";
</script>
<script>
let element = document.getElementsByClassName('news_feed')[0];
(async function() {
    const req = await fetch(`${baseURL}server/api/immegration.php`);
    const resp = await req.json();
    if (resp.status == 1) {
        element.innerHTML = ""
        resp.record.map((item, index) => {
            element.innerHTML += `<div class="thumbnail mb-5">
                        <img src="${baseURL}admin/assects/uploads/${item.filename}" alt="">
                    </div>`
        })
    }
})();
</script>
</body>



</html>