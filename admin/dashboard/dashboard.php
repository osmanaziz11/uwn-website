<!-- Information Boxes -->
<div id="information-container" class="container-fluid">
    <div class="row h-100">
        <div class="col-lg-3 col-md-6  p-6">
            <div id="viewers-box" class="box-styling shadow p-3 bg-white rounded">
                <span class="iconify mb-3 mt-2" data-icon="fluent:people-team-16-filled" style="color: black;"></span>
                <h4>Visitors</h4>
                <h5>343</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 p-6">
            <div id="sale-box" class="box-styling shadow p-3 bg-white rounded">
                <span class="iconify  mb-3 mt-2" data-icon="icomoon-free:stats-bars" style="color: black;"></span>
                <h4>Orders</h4>
                <h5>2500</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 p-6">
            <div id="order-box" class="box-styling shadow p-3 bg-white rounded">
                <span class="iconify  mb-3 mt-2" data-icon="zmdi:balance" style="color: black;"></span>
                <h4>Balance</h4>
                <h5>2500</h5>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 p-6">
            <div id="order-box" class="box-styling shadow p-3 bg-white rounded">
                <span class="iconify  mb-3 mt-2" data-icon="fa-solid:user-friends" style="color: black;"></span>
                <h4>Users</h4>
                <h5>2500</h5>
            </div>
        </div>
    </div>
</div>

<div id="dash-content" class="container-fluid mt-5">
    <!-- Second Row Layout  -->
    <div class="row">
        <div class="col-md-8">
            <!-- Graph Content -->
            <div id="graph-container" class="container-fluid shadow">
                <canvas id="myChart" style=" width:100%;max-width:600px"></canvas>

            </div>
        </div>
        <div class="col-md-4">
            <!-- Weather Content -->
            <div id="weather-container" class="container-fluid shadow">
                <div class="loader-circle"></div>
                <h3 id="tempCel"></h3>
                <div id="weather-icon">
                    <!-- <img src="" alt="weather-icon" srcset=""> -->
                </div>
                <h3 id="tempCity"></h3>
                <p id="tempDesc" style="font-size: 89%;"></p>
            </div>
        </div>
    </div>
    <!-- Third Row Layout  -->
    <div class="row mt-5">
        <div class="col-12">
            <!-- Recent Order Content -->
            <div id="order-container" class="container-fluid shadow mb-5">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <tr>
                                <th>
                                    Customer Name
                                </th>
                                <th>
                                    Product ID
                                </th>
                                <th>
                                    Product Name
                                </th>
                                <th>
                                    Time
                                </th>
                                <th>
                                    Date
                                </th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    xxxxx
                                </td>
                                <td>
                                    xxx-xxx-xxx
                                </td>
                                <td>
                                    xxxxxx
                                </td>
                                <td>
                                    xx:xx:xx
                                </td>
                                <td>
                                    xx/xx/xx
                                </td>
                                <td class="text-primary">
                                    <button class="order-btn">View Detail</button>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    xxxxx
                                </td>
                                <td>
                                    xxx-xxx-xxx
                                </td>
                                <td>
                                    xxxxxx
                                </td>
                                <td>
                                    xx:xx:xx
                                </td>
                                <td>
                                    xx/xx/xx
                                </td>
                                <td class="text-primary">
                                    <button class="order-btn">View Detail</button>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    xxxxx
                                </td>
                                <td>
                                    xxx-xxx-xxx
                                </td>
                                <td>
                                    xxxxxx
                                </td>
                                <td>
                                    xx:xx:xx
                                </td>
                                <td>
                                    xx/xx/xx
                                </td>
                                <td class="text-primary">
                                    <button class="order-btn">View Detail</button>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    xxxxx
                                </td>
                                <td>
                                    xxx-xxx-xxx
                                </td>
                                <td>
                                    xxxxxx
                                </td>
                                <td>
                                    xx:xx:xx
                                </td>
                                <td>
                                    xx/xx/xx
                                </td>
                                <td class="text-primary">
                                    <button class="order-btn">View Detail</button>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    xxxxx
                                </td>
                                <td>
                                    xxx-xxx-xxx
                                </td>
                                <td>
                                    xxxxxx
                                </td>
                                <td>
                                    xx:xx:xx
                                </td>
                                <td>
                                    xx/xx/xx
                                </td>
                                <td class="text-primary">
                                    <button class="order-btn">View Detail</button>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>