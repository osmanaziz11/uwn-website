<?php include_once "../server/constants.php"  ?>
<?php
session_start();
if (!isset($_SESSION['verify_username'])) {
     header('Location:'.constant('hostname').'Login.php');
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Apparel</title>
    <!-- Boostrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Nastaliq+Urdu&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
    <!-- Boxicon -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- ------- Custom Css --------  -->
    <!-- Jquery Aos Plugin  -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Index Css -->
    <link rel="stylesheet" href="../assects/css/index.css">
</head>

<body>
    <!-- sidebar -->
    <div id="sidebar-container">
        <div class="transparent-bg"></div>
        <div id="logoDetail">
            <h5><a href="">Urdu World News</a></h5>
            <div class="style-bar mt-4"></div>
        </div>
        <div class="btn-center">
            <div class="sidebar-btn">
                <div class="one"></div>
                <div class="middle"></div>
                <div class="third"></div>
            </div>
        </div>
        <div id="nav-container">
            <ul>
                <li class="search-box d-none">
                    <span class="iconify svg-nav-icons" data-icon="eva:search-outline" style="color: white;"
                        data-flip="horizontal"></span>
                    Search
                </li>

                <li data-pge="dashboard.php" onclick='navigator(this)' class="rounded shadow li-active"><span
                        class="iconify " data-icon="bx:bxs-dashboard" style="color: white;"
                        data-flip="horizontal"></span>
                    <h6>Dashboard</h6>
                </li>
                <li data-pge="user-profile.php" onclick='navigator(this)' class="rounded "><span class="iconify "
                        data-icon="bx:bxs-user" style="color: white;" data-flip="horizontal"></span>
                    <h6>User Profile</h6>
                </li>

                <li data-pge="pages.php" onclick='navigator(this)' class="rounded "><span class="iconify "
                        data-icon="clarity:copy-solid" style="color: white;" data-flip="horizontal"></span>
                    <h6>Pages</h6>
                </li>

                <li data-pge="immegration.php" onclick='navigator(this)' class="rounded "><span class="iconify "
                        data-icon="clarity:copy-solid" style="color: white;" data-flip="horizontal"></span>
                    <h6>Immegration</h6>
                </li>
                <li data-pge="categories.php" onclick='navigator(this)' class="rounded "><span class="iconify "
                        data-icon="clarity:copy-solid" style="color: white;" data-flip="horizontal"></span>
                    <h6>Categories</h6>
                </li>

                <li class="rounded" data-pge="logout.php" onclick='navigator(this)'><span class="iconify "
                        data-icon="ri:logout-circle-fill" style="color: white;"></span>
                    <h6>Logout</h6>
                </li>

            </ul>
        </div>
    </div>
    <!-- Section  -->
    <section id="section-container">
        <!-- Admin Panel Setting Content  -->
        <div class="setting-container container rounded shadow border-0">
            <div class="row mt-2">
                <div class="col-12 d-flex flex-column justify-content-center align-items-center">
                    <h6>----- Sidebar -----</h6>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12 sidebar-color  d-flex justify-content-center align-items-center">
                    <div class="color-box" data-color="#0c8fdb"></div>
                    <div class="color-box" data-color="#1B1E24"></div>
                    <div class="color-box" data-color="#DB0C0C"></div>
                    <div class="color-box" data-color="#FFFF00"></div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-4 img-box pe-0" data-id="2">

                </div>
                <div class="col-4 p-0 img-box" data-id="3">

                </div>
                <div class="col-4 ps-0 img-box" data-id="4">

                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12 d-flex flex-column justify-content-center align-items-center">
                    <h6>----- Header -----</h6>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12  d-flex justify-content-center align-items-center">
                    <div class="color-box"></div>
                    <div class="color-box"></div>
                    <div class="color-box"></div>
                    <div class="color-box"></div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12 d-flex flex-column justify-content-center align-items-center">
                    <h6>----- Section -----</h6>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-12  d-flex justify-content-center align-items-center">
                    <div class="color-box"></div>
                    <div class="color-box"></div>
                    <div class="color-box"></div>
                    <div class="color-box"></div>
                </div>
            </div>
        </div>
        <!-- Rotateable Setting Icon -->
        <div class="icon-container">
            <span class="iconify setting-icon" data-icon="uiw:setting"></span>
        </div>
        <!-- Section Header  -->
        <div id="header-container" class="container-fluid shadow">
            <div class="row">
                <div class="col-6">
                    <!-- <div class="notify-box">
                        <div id="notification" class="red-dot">23</div>
                        <span class="iconify" data-icon="clarity:notification-line" style="color: #545454;"></span>
                        <div id="email" class="red-dot">23</div>
                        <span class="iconify" data-icon="clarity:email-line" style="color: #545454;"></span>
                        <div id="chat" class="red-dot">23</div>
                        <span class="iconify" data-icon="ci:chat" style="color: #545454;"></span>
                        <span class="iconify" data-icon="ci:line-m" style="color: #545454;" data-flip="vertical"></span>
                    </div> -->
                    <div class="search-wrapper d-none">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search" />
                            <button class="search-icon" onclick="searchToggle(this, event);"><span></span></button>
                        </div>
                        <span class="close" onclick="searchToggle(this, event);"></span>
                    </div>
                </div>
                <div class="col-6">
                    <div id="profile-cont" class="d-md-block d-none">
                        <!-- Online Dot: small Green dot on Profile Picture -->
                        <div class="online-dot"></div>
                        <div id="img-box">
                            <img src="../assects/img/Default.png" alt="">
                        </div>
                        <h4 id="userName-H">Usman</h4>
                        <p>Admin</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Container  -->
        <div id="content-container" class="container-fluid d-flex flex-column align-items-center pt-5 p-lg-4 p-3">
            <?php include 'dashboard.php';  ?>
        </div>
    </section>


    <!-- Jquery Script  -->
    <script src="../assects/Js/jquery.js"></script>
    <!-- Iconify Script  -->
    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>

    <script src="assects/Js/variable.js"></script>

    <!-- Script Written by Collaborator (Hadees) -->
    <script>
    async function FetchNews(attribute, threshold) {
        window.r = attribute; // clicked page name
        const page = attribute.replace(".php", "");
        const a = await fetch(`http://127.0.0.1:5000/api/${page}/news`, {
            method: "GET",
        })
        let DataInJSON = await a.json()
        let gotsingleNews = document.getElementById("singleNews")
        document.getElementById("page-title").innerHTML = `${page} News`
        window.value = DataInJSON.posts;
        if (DataInJSON.status == 1) {
            gotsingleNews.innerHTML = "";
            window.value.map((post, index) => {
                exists(index, threshold);
                gotsingleNews.innerHTML += `<div id="${index}" class="col-md-3 col-sm-6 mb-3">
                        <div class="shadow rounded">
                            <div class=" imgBox rounded shadow position-relative" style="height: 200px;">
                                <img src="${post.thumbnail}" alt="" class="w-100 h-100">
                                <div
                                    class="approveBox w-100 position-absolute bg-dark top-0 left-0 d-flex justify-content-center align-items-center">
                                  
                                </div>
                            </div>
                            <p dir="rtl" class="m-0 my-2 px-1 title">${post.title}
                            </p>
                            <div class="container-fluid p-0">
                                <div class="row">
                                    <div class="col-6">
                                        <p class="m-0 p-0 p-2 date">${post.publishedAt}</p>
                                    </div>
                                    <div class="col-6">
                                        <a href="${post.articleLink}">
                                            <p class="m-0 p-0 text-end p-2">Main article</p>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>`
            })
        } else {}
    }
    // inserting approved article into DB 
    async function insertIntoDB(ind, threshold) {
        // api sending article into database
        let url = window.value[ind].articleLink;
        let slug = url.slice(threshold);
        window.value[ind]['slug'] = slug;
        const resp = await fetch(`${baseURL}server/api/insert/${window.r}.php`, {
            method: "POST",
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(window.value[ind])
        })
        let injson = await resp.json();
        const statuss = injson.status;
        return statuss;
    }

    // when approve button is clicked
    async function Execute(a, threshold) {
        // sending data into DATABASE
        const s = await insertIntoDB(a, threshold);
        console.log(s);
        // check if data is successfully inserted into DB or not
        if (s == 1) {
            document.getElementById(a).classList.add('d-none')
        }
    }

    async function deleteFromDB(a, threshold) {
        let artLink = window.value[a].articleLink;
        let artikey = artLink.slice(threshold); // getting the last 8 digits of articl-link
        const resp = await fetch(`${baseURL}server/api/delete/${window.r}.php`, {
            method: "POST",
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                "slug": artikey
            }),
        })

        let injson = await resp.json();
        const statuss = injson.status;
        // check status if status is 1, delete the news from the the dashboard
        if (statuss == 1) {
            document.getElementById(a).classList.add("d-none");
        }
    }

    // check if article is already in DB
    async function exists(a, threshold) {
        let artLink = window.value[a].articleLink;
        let artikey = artLink.slice(threshold); // getting the last 8 digits of articllink

        // api checking fro existense in database
        const resp = await fetch(`${baseURL}server/api/exist/${window.r}.php`, {
            method: "POST",
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                "slug": artikey
            }),
        })

        let injson = await resp.json();
        const statuss = injson.status;
        const container = document.getElementById(a);
        const gotApprove = container.querySelectorAll(".approveBox")[0];

        if (statuss == 1) {
            gotApprove.innerHTML =
                `<button onclick="deleteFromDB(${a},${threshold})" class="btn btn-danger"> Delete </button>`
        } else if (statuss == 0) {
            gotApprove.innerHTML =
                `<button onclick="Execute(${a},${threshold})" class="btn btn-primary"> Approve </button>`
        }
    }
    </script>

    <!-- Script Written by Osman  -->
    <script>
    const uploadIMG = async (input) => {
        const formData = new FormData();
        formData.append('img', input);
        const req = await fetch(`${baseURL}server/upload-img.php`, {
            method: "POST",
            body: formData,
            header: {
                contentType: false,
                processData: false
            }
        })
        return 1;
    }

    const FetchImmegrationContent = async () => {
        const req = await fetch(`${baseURL}/server/api/immegration.php`);
        const resp = await req.json();
        if (resp.status == 1) {
            document.getElementsByClassName('immegration_content')[0].innerHTML = "";
            window.IMM = resp.record;
            resp.record.map((item, index) => {
                document.getElementsByClassName('immegration_content')[0].innerHTML += ` <div id="${item.id}IMM" class=" col-md-3 col-sm-6 mb-3">
                    <div class="shadow rounded">
                        <div class=" imgBox rounded shadow position-relative" style="height: 200px;">
                            <img src="../assects/uploads/${item.filename}" alt="img" class="w-100 h-100">
                            <div
                                class="approveBox w-100 h-100 position-absolute bg-dark top-0 left-0 d-flex justify-content-center align-items-center">
                                <button onclick="deleteIMM_content(${item.id})" class="btn btn-danger"> Delete </button>
                            </div>
                        </div>
                    </div>
                </div>`
            })
        }
    }
    const deleteIMM_content = async (id) => {
        const req = await fetch(`${baseURL}/server/api/delete/immegration.php`, {
            method: "POST",
            body: JSON.stringify({
                id
            }),
        })
        const resp = await req.json();
        if (resp.status == 1) {
            document.getElementById(`${id}IMM`).classList.add('d-none');
        }


    }
    </script>

    <!--******** WARNING: This is written previosly ********** -->
    <!-- custom Funtion script  -->
    <script>
    // Page Retreivel
    let pgeRetrieval = (url, container) => {
        fetch(url)
            .then((response) => {
                return response.text();
            })
            .then((data) => {
                container.innerHTML = data;
            });
    };

    //   Navigator 
    const navigator = (event) => {
        let contentDiv = document.getElementById("content-container");
        $(event).addClass('li-active shadow').siblings().removeClass('li-active shadow');
        if ($(event).attr('data-pge') != 'logout.php') {
            pgeRetrieval($(event).attr('data-pge'), contentDiv);
        } else {
            window.open('logout.php', '_self');
        }

    }

    // Get Container by ID 
    const getContainer_byID = container => {
        return document.getElementById(container);
    }

    // Get Container by Classname 
    const getContainer_byClassName = container => {
        return document.getElementsByClassName(container)[0];
    }

    // Hide/Show Sidebar Menu Funtion
    function mobileMenu() {
        $("#logoDetail").toggleClass("opac-0");
        $("#sidebar-container").toggleClass("sidebar-active");
        $("#nav-container").toggleClass("nav-active");

        $(".btn-center").toggleClass("p-0 justify-content-center");
        $("#section-container").toggleClass("section-active");
    }

    function autoMobileMenu() {
        let screenWidth = screen.width;
        if (screenWidth <= 990) {
            $("#logoDetail").addClass("opac-0");
            $("#sidebar-container").addClass("sidebar-active");
            $("#nav-container").addClass("nav-active");
            // $("#nav-container ul li").addClass("li-active");
            $(".btn-center").addClass("p-0 justify-content-center");
            $("#section-container").addClass("section-active");
        }
        if (screenWidth > 990) {
            $("#logoDetail").removeClass("opac-0");
            $("#sidebar-container").removeClass("sidebar-active");
            $("#nav-container").removeClass("nav-active");
            // $("#nav-container .iconify").removeClass("nav-icon-active");
            $(".btn-center").removeClass("p-0 justify-content-center");
            $("#section-container").removeClass("section-active");
        }
        if (screenWidth < 360) {
            $("#sidebar-container").addClass("sidebarX-active");
            $("#section-container").addClass("sectionX-active");
        }
        if (screenWidth > 360) {
            $("#sidebar-container").removeClass("sidebarX-active");
            $("#section-container").removeClass("sectionX-active");
        }
    }

    let previewInnerPg = (url, element) => {
        fetch(url)
            .then((response) => {
                return response.text();
            })
            .then((data) => {
                element.innerHTML = data;
            });
    }
    </script>

    <!-- Pages Funtion Script  -->
    <script>
    // Profile Image Upload 
    let profileImg_update = event => {
        event.preventDefault();
        console.log(`first`)
        const formData = new FormData(document.getElementById('profileImgForm'));
        setTimeout(() => {
            $('.card-avatar .loader-circle').addClass('d-none');
            fetch('../server/profile-update.php', {
                method: 'POST',
                body: formData,
                header: {
                    contentType: false,
                    processData: false
                }
            }).then(resp => resp.text()).then(res => {
                $('.card-body .upload-btn').prop('disabled', true);
                $('.card-body .upload-btn').html('Uploaded');
            }).catch(error => {
                console.log(error);
            })
        }, 2000)
        $('.card-avatar .loader-circle').removeClass('d-none');

    }
    const removeIMG = () => {
        $('.card-avatar label img').attr('src', '../assects/img/Default.png');
    }
    const readAdminIMG = (input) => {
        console.log(`first`)
        var ext = input.files[0]['name'].substring(input.files[0]['name'].lastIndexOf('.') + 1).toLowerCase();
        if (input.files && input.files[0] && (ext == "png" || ext == "jpeg" || ext == "jpg")) {
            var reader = new FileReader();
            reader.onload = function(e) {
                console.log($(input).attr('data-container'))
                $('.card-avatar label').html('<img src="' + e.target.result + '" onload="" />');
            }
            $(`.card-avatar  .loader-circle`).removeClass('d-none');
            setTimeout(() => {
                $(`.card-avatar  .loader-circle`).addClass('d-none');
                reader.readAsDataURL(input.files[0]);
            }, 2000);
        } else {
            $('.card-avatar').addClass('invalidError');
            setTimeout(() => {
                $('.card-avatar').removeClass('invalidError');
            }, 2000);
        }
    }
    //  Image Preview 
    const readURL = async (input) => {
        var ext = input.files[0]['name'].substring(input.files[0]['name'].lastIndexOf('.') + 1).toLowerCase();
        if (input.files && input.files[0] && (ext == "png" || ext == "jpeg" || ext == "jpg")) {
            console.log(input.files[0]);
            $(`${$(input).attr('data-container')} + .loader-circle`).removeClass('d-none');
            var reader = new FileReader();
            reader.onload = function(e) {
                $(`#imgContainer`).html('<img src="' + e.target.result +
                    '" onload="" />');
            }
            const isUploaded = await uploadIMG(input.files[0]);

            setTimeout(() => {
                if (isUploaded) {
                    $(`${$(input).attr('data-container')} + .loader-circle`).addClass('d-none');
                    reader.readAsDataURL(input.files[0]);
                }
            }, 3000);
        } else {
            $($(input).attr('data-container')).addClass('invalidError');
            setTimeout(() => {
                $($(input).attr('data-container')).removeClass('invalidError');
            }, 2000);
        }
    }
    // Page Setting Navigator 
    const pgeSetting_Navigator = event => {
        let frontPge = document.getElementById('front-pg');
        let innerPge = document.getElementsByClassName('inner-pg')[0];
        let container = document.getElementById('inner-pg-content');
        let whichPge = $(event).attr('data-pg');
        url = `Inner Pages/basePge.php`
        let threshold = ""
        if (whichPge == 'business') {
            threshold = -19;
        } else if (whichPge == 'home') {
            threshold = -6;
        } else {
            threshold = -8;
        }
        FetchNews(whichPge, threshold);
        pgeRetrieval(url, container);
        frontPge.classList.add('front-pg-active');
        innerPge.classList.add('inner-pg-active');
    };

    // Return To 
    const returnTo = () => {
        let frontPge = document.getElementById('front-pg');
        let innerPge = document.getElementsByClassName('inner-pg')[0];
        frontPge.classList.remove('front-pg-active');
        innerPge.classList.remove('inner-pg-active');
    }

    // Relevant Container 
    const relevant_Container = (event) => {
        if ($(event).attr('data-box-id') === 'content-cont') FetchImmegrationContent();
        $(getContainer_byClassName($(event).attr('data-box-id'))).addClass('d-block').siblings().removeClass(
            'd-block')
    }
    </script>


    <!-- Events Js  -->
    <script>
    $(document).ready(function() {
        $('.sidebar-btn').click(function() {
            $(".one").toggleClass('on1');
            $(".middle").toggleClass('on2');
            $(".third").toggleClass('on3');
            mobileMenu();
        })
        $(window).resize(function() {
            autoMobileMenu();
        });

        // Pannel Setting Event 
        $('.icon-container').click(() => {
            $('.setting-container').toggleClass('setting-container-active');
            $('.setting-container .img-box').click(function() {
                //    $(this).addClass('img-box-active').siblings().removeClass('img-box-active');

                if ($(this).data('id') == '2') {
                    $('#sidebar-container').css('background-image',
                        'url(../assects/Images/sidebar-img/sidebar-2-L.jpg)');
                } else if ($(this).data('id') == 3) {
                    $('#sidebar-container').css('background-image',
                        'url(../assects/Images/sidebar-img/sidebar-3-L.jpg)');
                }
                if ($(this).data('id') == '4') {

                    $('#sidebar-container').css('background-image',
                        'url(../assects/Images/sidebar-img/sidebar-4-L.jpg)')
                }
            });
            $('.sidebar-color .color-box').click(function() {

                var color = $(this).data('color');
                $('.li-active').css('background', color);
            })
        })

        $(document).on('click', '.box', function() {
            $(this).addClass('active').siblings().removeClass('active');
        })
    });
    </script>
    <!-- Weather Api Script  -->
    <script>
    let tempBox = document.getElementById('tempCel');
    let cityBox = document.getElementById('tempCity');
    let descBox = document.getElementById('tempDesc');
    let iconCont = document.getElementById('weather-icon');
    let wIcon = iconCont.firstElementChild;
    let loader = document.getElementsByClassName('loader-circle')[0];

    function capitalizeFirstLetter(string) {
        return string.charAt(0).toUpperCase() + string.slice(1);
    }

    // fetch user location 
    fetch("https://ipinfo.io/json?token=ffdb5ee6f68f63").then(response => response.json()).then(response => {

        //   fetch weather of user location 
        fetch(
                `https://api.openweathermap.org/data/2.5/weather?q=${response.city}&appid=17fc6ce84824013715f7763269d0286d&units=metric`
            )
            .then(weaRes => weaRes.json()).then(res => {
                $('#weather-container .loader-circle').addClass('d-none');
                console.log('Iam in');
                tempBox.innerText = `${Math.floor(res.main.temp)}\xB0C`;
                descBox.innerHTML = capitalizeFirstLetter(res.weather[0].description);
                cityBox.innerText = response.city;
                var wIcon = new Image();
                wIcon.src = `http://openweathermap.org/img/wn/${res.weather[0].icon}@4x.png`;
                iconCont.appendChild(wIcon);
            }).catch(err => {

            });
    }).catch(error => {
        console.log('Server Error');
    });
    </script>
    <!-- Aos on scroll Scrip  -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init({
        offset: 130,
        duration: 1000
    });
    </script>
    <script>
    let video = document.qu
    </script>
</body>

</html>