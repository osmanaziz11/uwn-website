<!-- Slider Options  -->
<div class="row">
    <div class="container home setting-pannel">

        <div class="box3 shadow box mx-5 active" data-box-id="upload-cont" onclick="relevant_Container(this)"><span
                class="iconify" data-icon="entypo:folder-video"></span>
            <h6>Media</h6>
        </div>
        <div class="box2 shadow box" data-box-id="content-cont" onclick="relevant_Container(this)"><span class="iconify"
                data-icon="clarity:picture-solid"></span>
            <h6>Content</h6>
        </div>
    </div>
</div>

<!-- Preview Container  -->
<div class="row mt-4">
    <div class="preview-container container">

        <!-- Upload Media Container  -->
        <div class="container-fluid upload-cont d-block mb-5">
            <div class="row">
                <div
                    class="col-md-6 col-12 d-flex justify-content-md-end justify-content-center align-items-center  position-relative mb-3">
                    <div class="upload-box rounded d-flex justify-content-center align-items-center">
                        <label for="input-video">
                            <span class="iconify" data-icon="gridicons:cloud-upload" style="color: black;"></span>
                        </label>
                        <input type="file" name="" id="input-video" data-container="#imgContainer" class=" d-none"
                            onchange="readURL(this)">
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-md-start justify-content-center">
                    <div id="" class="media-cont shadow d-flex justify-content-center align-items-center">
                        <span id="imgContainer" class="w-100 h-100">

                        </span>
                        <div class="loader-circle d-none"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Box  -->
        <div class="container-fluid content-cont">
            <div class="row immegration_content">
                <div class="col-12 d-flex justify-content-center align-items-center" style="height: 200px;">
                    <div class=" loader-circle "></div>
                </div>

            </div>
        </div>

    </div>
</div>