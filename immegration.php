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
    <link href="https://fonts.googleapis.com/css2?family=Noto+Nastaliq+Urdu:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet" />
    <!-- Iconify icons  -->
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
</head>

<body>
    <!-- Header  -->
    <?php require_once "components/header.php"; ?>
    <!-- Header end  -->

    <!-- Google Advertisement  -->

    <!-- Google Advertisement end -->


    <section>
        <div class="container-fluid px-md-5 px-4 pt-5">

            <div class="row">
                <!-- Category Section  -->

                <!-- Category Section ends  -->

                <div class="col-md-8 news_feed">
                    <?php include 'components/loader.php'; ?>
                </div>
            </div>
            <!-- Category Responive Mode Section  -->

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