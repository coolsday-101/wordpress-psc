<head>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/leafletcss/leaflet.css'; ?>">
    <!-- <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" /> -->
    <script src="<?php echo get_template_directory_uri() . '/js/leaflet/leaflet.js'; ?>"></script>
    <script src="https://unpkg.com/rbush@3.0.1/rbush.js"></script>
    <!-- 插件搜索框 -->
    <!-- <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="<?php echo get_template_directory_uri() . '/js/leaflet/leaflet-markers-canvas.js'; ?>"></script>
    <!-- 搜索框插件 -->
    <!-- Load Esri Leaflet from CDN -->
    <script src="https://cdn.jsdelivr.net/npm/esri-leaflet/dist/esri-leaflet.js"></script>
    <!-- Esri Leaflet Geocoder -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/esri-leaflet-geocoder/dist/esri-leaflet-geocoder.css" />
    <script src="https://cdn.jsdelivr.net/npm/esri-leaflet/dist/esri-leaflet.js-geocoder"></script>
    <style>
        @font-face {
            font-family: "Overpass-Regular";
            src: url("<?php echo get_template_directory_uri() . '/page/static/Overpass-Regular.ttf' ?>") format("truetype");
        }

        body {
            padding: 0;
            margin: 0;
        }

        .backgroundimg {
            margin-top: 110px;
            background-image: url(<?php echo get_template_directory_uri() . '/images/news/photo-1566838634698-48b165cb0a9d.jpeg' ?>) !important;
            background-repeat: no-repeat;
            background-size: 100% 100%;
            background-size: cover;
            -moz-background-size: 100% 100%;
        }

        #map {
            width: 100%;
            height: 100%;
            margin: auto;
            /* margin-top: 5vw; */
        }

        .leaflet-left {
            left: 40px;
        }

        .leaflet-top {
            top: 20px;
        }

        .leaflet-touch .leaflet-control-layers,
        .leaflet-touch .leaflet-bar {
            border: 0px;
            background-clip: padding-box;
        }

        .leaflet-touch .leaflet-control-geocoder-icon {
            width: 30px;
            height: 30px;
            /* margin-top: 5px; */
        }

        .leaflet-control-geocoder-icon {
            background-image: url(<?php echo get_template_directory_uri() . '/images/search.png' ?>);
            background-size: 25px;
        }

        /* 去掉中文提示 */
        .leaflet-control-geocoder-address-context {
            display: none;
        }

        /* 按钮样式 */
        .but-box {
            position: absolute;
            z-index: 1000;
            top: 145px;
            left: 50px;
        }

        .filter-icon {
            display: block;
            height: 25px;
            width: 25px;
            flex-shrink: 0;
            background-size: 25px;
            background-position: 50%;
        }

        #netMeteringBtn,
        #microFITBtn {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: white;
            border: none;
            border-radius: 4px;
            font-family: "Overpass-Regular";
        }

        #microFITBtn {
            margin-top: 10px;
        }

        #netMeteringBtn span,
        #microFITBtn span {
            font-size: 13px;
            margin-left: 12px;
            line-height: 24px;
            cursor: pointer;

        }

        .icon-left {
            background-image: url(<?php echo get_template_directory_uri() . '/images/netmetering.png' ?>);
            background-size: 25px;
        }

        .icon-right {
            background-image: url(<?php echo get_template_directory_uri() . '/images/Microfit.png' ?>);
            background-size: 25px;
        }

        .butGet {
            padding-left: 10px;
            padding-right: 10px;
            color: white;
            height: 27px;
            /* background-color: var(--site-color-blue); */
            background-color: rgb(27, 26, 31);
            /* border-radius: 10px; */
            /* padding: 10px 30px; */
            font-family: "Overpass-Regular";
            line-height: 27px;
            display: inline-block;
            transition: all 0.5s;
            cursor: pointer;
            margin: 5px;
            position: absolute;
            right: 20px;
            top: 30px;
            z-index: 1000;
        }

        .butGet span {
            font-family: "Overpass-Regular";
            line-height: 27px;
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
            font-size: 14px;
        }

        .butGet span:after {
            content: "→";
            position: absolute;
            opacity: 0;
            top: 1;
            right: -20px;
            transition: 0.5s;
        }

        .butGet:hover span {
            padding-right: 15px;
        }

        .butGet:hover span:after {
            opacity: 1;
            right: 0;
        }

        /* Add custom CSS for the geocoder control */
        .leaflet-control-geocoder-form input {
            font-family: "Overpass-Regular";
        }

        .leaflet-control-geocoder-form input::placeholder {
            /* Replace 'YourDesiredFont' with the font you want to use */
            font-family: "Overpass-Regular";
            /* Replace '16px' with the desired font size */
            font-size: 16px;
            /* Replace 'gray' with the desired text color */
            color: gray;
        }

        /* 搜素框样式  */
        .geocoder-control-input {
            position: absolute;
            left: 0;
            top: 0;
            background-position: left center;
            text-indent: 50px;
            background-image: url("<?php echo get_template_directory_uri() . '/images/search.png' ?>");

        }

        .geocoder-control-input::after {
            content: "";
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            display: inline-block;
            width: 20px;
            height: 20px;

            /* Replace with your own search icon URL */
            background-size: contain;
        }

        /* 添加样式以展开地理搜索控件 */
        .leaflet-control-geocoder .leaflet-control-geocoder-expanded {
            display: block !important;
        }

        /* 添加样式以防止 class 被其他元素影响 */
        .leaflet-control-geocoder-expanded {
            display: block !important;
        }
    </style>
    <!-- Hotjar Tracking Code for Polaron Live Data -->
    <script>
        (function(h, o, t, j, a, r) {
            h.hj = h.hj || function() {
                (h.hj.q = h.hj.q || []).push(arguments)
            };
            h._hjSettings = {
                hjid: 3891465,
                hjsv: 6
            };
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script');
            r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>
</head>

<body>
    <!-- 添加两个按钮 -->
    <div class="but-box">
        <button id="netMeteringBtn" onclick="hideMFIT()">
            <i class="filter-icon icon-left"></i>
            <span>Net Metering Program</span>
        </button>
        <button id="microFITBtn" onclick="showMFIT()">
            <i class="filter-icon icon-right"></i>
            <span>MicroFIT Program</span>
        </button>
    </div>
    <div class="butGetp">
        <a href="https://polaronsolar.com" target="_blank">
            <div data-toggle="modal" class="butGet"><span>Back to the Main Page</span></div>
        </a>
    </div>
    <div id="map">
    </div>

    <div class="get_json_Data_by_url">
        <?php
        // $url = "http://localhost:7006/map/api/mapData/CompletedList";
        $url = "https://polaronsolar.com/api/map/api/mapData/CompletedList";
        // $url = get_template_directory_uri() . "/json/geojson.json";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); //不验证证书
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); //不验证证书
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);
        $file_contents = curl_exec($ch);
        ?>
    </div>
</body>
<script>
    var map = L.map('map', {
        center: [50.17693091774858, -91.8366998466303],
        zoom: 5,
        zoomSnap: 0.1,
        maxZoom: 14,
        minZoom: 4,
        preferCanvas: true
    });
    L.tileLayer('https://www.google.com/maps/vt?lyrs=m@189&hl=zh-en&gl=cn&x={x}&y={y}&z={z}').addTo(map);
    // 在地图上定制图标的插件
    var markersCanvas = new L.MarkersCanvas();
    markersCanvas.addTo(map);
    // 创建图标的原始大小
    var originalIconSize = [5, 5];
    var yellowIcon = L.icon({
        iconUrl: "<?php echo get_template_directory_uri() . '/images/netmetering.png' ?>",
        iconSize: originalIconSize, // 图标大小
        iconAnchor: [0, 0] // 图标的点，它将对应于标记的位置  
    });
    var greenIcon = L.icon({
        iconUrl: "<?php echo get_template_directory_uri() . '/images/Microfit.png' ?>",
        iconSize: originalIconSize, // 图标大小
        iconAnchor: [0, 0] // 图标的点，它将对应于标记的位置
    });
    // 创建空的 markers 数组用于存储标记
    var markers = [];
    // 获取 geoPoints 数据并添加标记到 markersCanvas
    var geoPoints = <?php echo $file_contents;
                    curl_close($ch); ?>;
    var features = geoPoints.features;
    var markersNM = [];
    var markersMFIT = [];
    for (var i = 0; i < features.length; ++i) {
        // 创建标记并添加到 markers 数组
        var marker = createMarker(features[i]);
        if (marker.options.projectType == "microFIT") {
            markersMFIT.push(marker)
        } else {
            markersNM.push(marker)
        }
    }
    // 将 markers 数组中的标记添加到 markersCanvas
    // markersCanvas.addMarkers(markers);
    markersCanvas.addMarkers(markersNM);
    markersCanvas.addMarkers(markersMFIT);

    // 创建标记的函数
    function createMarker(feature) {
        var dealId = feature.properties.dealId;
        var sysId = feature.properties.sysId;
        var addr = feature.properties.address;
        var sysName = feature.properties.sysName;
        var projectType = feature.properties.projectType;
        var icon;
        if (projectType === "microFIT") {
            icon = greenIcon;
        } else {
            icon = yellowIcon;
        }
        // 创建标记
        var marker = L.marker([feature.geometry.coordinates[1], feature.geometry.coordinates[0]], {
            icon: icon,
            projectType: projectType
        }).bindPopup(`<div>${addr},${sysName}</div><div>${getProjectTypeShow(projectType)}</div><a href="${getUrls(sysName, dealId, sysId, projectType)}" target="_blank"><p>Click for details of power generation</p></a>`);
        return marker;
    }
    // 获取 projectTypeShow
    function getProjectTypeShow(projectType) {
        return projectType === "microFIT" ? "microFIT Project" : "Net Metering Project";
    }
    // 获取 urls
    // function getUrls(sysName, dealId, sysId, projectType) {
    //     if (sysName === "Hoymiles") {
    //         return `https://polaronsolar.com/customer-portal/LiveDataMapHm?dealId=${dealId}&sysId=${sysId}`;
    //     } else {
    //         var urls = `https://polaronsolar.com/customer-portal/LiveDataMap?dealId=${dealId}&sysId=${sysId}`;
    //         if (projectType === "microFIT") {
    //             urls += "&projectType=microFIT";
    //         }
    //         return urls;
    //     }
    // }

    function getUrls(sysName, dealId, sysId, projectType) {
        //如果 sysId 为空，赋值为 "12345"
        sysId = sysId || "12345";

        if (sysName === "Hoymiles") {
            return `https://polaronsolar.com/customer-dashboard/live-data/hoymiles/${dealId}/${sysId}`;
        }

        var urls = `https://polaronsolar.com/customer-dashboard/live-data/aps/${dealId}/${sysId}/NM`;
        if (projectType === "microFIT") {
            urls = urls.replace("/NM", "/microFIT");
        }
        return urls;
    }





    // 点击 Net Metering Program 按钮时的事件处理程序
    function hideMFIT() {
        markersCanvas.removeMarkers(markersNM);
        markersCanvas.removeMarkers(markersMFIT);
        markersCanvas.addMarkers(markersNM);
    }

    function showMFIT() {
        markersCanvas.removeMarkers(markersNM);
        markersCanvas.removeMarkers(markersMFIT);
        markersCanvas.addMarkers(markersMFIT);
    }

    // 监听地图缩放级别变化事件
    map.on('zoomstart', function() {})
    map.on('zoomend', function() {
        var zoomLevel = Math.floor(map.getZoom());
        switch (zoomLevel) {
            case 6:
                yellowIcon.options.iconSize = [12, 12];
                greenIcon.options.iconSize = [12, 12];
                break;
            case 7:
                yellowIcon.options.iconSize = [14, 14];
                greenIcon.options.iconSize = [14, 14];
                break;
            case 8:
                yellowIcon.options.iconSize = [16, 16];
                greenIcon.options.iconSize = [16, 16];
                break;
            case 9:
                yellowIcon.options.iconSize = [18, 18];
                greenIcon.options.iconSize = [18, 18];
                break;
            case 10:
                yellowIcon.options.iconSize = [20, 20];
                greenIcon.options.iconSize = [20, 20];
                break;
            case 11:
                yellowIcon.options.iconSize = [22, 22];
                greenIcon.options.iconSize = [22, 22];
                break;
            case 12:
                yellowIcon.options.iconSize = [24, 24];
                greenIcon.options.iconSize = [24, 24];
                break;
            case 13:
                yellowIcon.options.iconSize = [26, 26];
                greenIcon.options.iconSize = [26, 26];
                break;
            case 14:
                yellowIcon.options.iconSize = [28, 28];
                greenIcon.options.iconSize = [28, 28];
                break;
            case 15:
                yellowIcon.options.iconSize = [30, 30];
                greenIcon.options.iconSize = [30, 30];
                break;
            case 16:
                yellowIcon.options.iconSize = [32, 32];
                greenIcon.options.iconSize = [32, 32];
                break;
            case 17:
                yellowIcon.options.iconSize = [34, 34];
                greenIcon.options.iconSize = [34, 34];
                break;
            case 18:
                yellowIcon.options.iconSize = [36, 36];
                greenIcon.options.iconSize = [36, 36];
                break;
            default:
                // For zoom levels 5 and below
                yellowIcon.options.iconSize = [5, 5];
                greenIcon.options.iconSize = [5, 5];
                break;
        }
        // Redraw markers with new icon sizes
        markersCanvas.redraw();
    });




    // 添加收索功能
    // 自定义的地理编码服务
    var geocodeServiceUrl = 'https://geocode.arcgis.com/arcgis/rest/services/World/GeocodeServer&countryCode=CA';
    // 设置搜索范围为加拿大的范围
    var searchExtent = L.latLngBounds(L.latLng(41.67, -141.00), L.latLng(83.11, -52.62));
    var geocodingService = L.esri.Geocoding.geocodeService({
        url: geocodeServiceUrl,
        searchExtent: searchExtent
    });
    var searchControl = L.esri.Geocoding.geosearch({
        position: 'topleft', //显示位置
        expanded: true, // 设置为 true 使搜索输入框默认展开
        collapsed: false, // 设置为 false 始终是显示状态
        placeholder: "Find your neighbourhood", //输入框提示
        collapseAfterResult: false, //找到结果后是否折叠
        useMapBounds: true, //搜索的可见范围false表示全地图
        // searchExtent: L.latLngBounds(L.latLng(41.67, -141.00), L.latLng(83.11, -52.62)), //加拿大范围的经纬度范围
        providers: [
            L.esri.Geocoding.arcgisOnlineProvider({
                apikey: 'AAPKb1f773577945410c932c98c2ffb32b0fzAI2jqieA5IPXA2Bwhr2CMfCvEVpOtPr4FZZJ0EdAdqb8irjyOA18STwor00W5Dg',
                geocodingService: geocodingService, // 使用自定义的地理编码服务
                // searchExtent: L.latLngBounds(L.latLng(41.67, -141.00), L.latLng(83.11, -52.62)),
                // nearby: {
                //     lat: -33.8688,
                //     lng: 151.2093 //设置搜索结果的中心点
                // },
                // geocodingQueryParams: {
                //     searchExtent: "-141.00187, 41.67623, -52.63605, 83.11156" // 加拿大范围的经纬度范围
                // }
            })
        ]
    }).addTo(map);
    // 自定义图标
    var customIcon = L.icon({
        iconUrl: '<?php echo get_template_directory_uri() . '/images/location.png' ?>',
        iconSize: [32, 32],
        iconAnchor: [16, 32]
    });
    // 清除地图上的所有标记
    function clearMarkers() {
        for (var i = 0; i < markers.length; i++) {
            map.removeLayer(markers[i]);
        }
        markers = []; // 清空标记数组
    }
    searchControl.on('results', function(data) {
        clearMarkers();
        if (data.results.length > 0) {
            var result = data.results[0];
            var latlng = result.latlng;
            console.log('Search result:', result.text, latlng);
            // 对搜索结果做点什么，添加一个标记，使用自定义图标添加标记
            var marker = L.marker(latlng, {
                icon: customIcon
            }).addTo(map).bindPopup(result.text).openPopup();
            markers.push(marker); // 将标记添加到数组中
        }
    });
    document.addEventListener('DOMContentLoaded', function() {
        // 在此处放置您的代码以确保 DOM 加载完成
        // 获取地理搜索控件的输入框元素
        var geocoderInput = document.querySelector('.geocoder-control-input');

        // 监听输入框的焦点事件
        geocoderInput.addEventListener('blur', function() {
            // 添加 .geocoder-control-expanded 类
            var geocoderControl = document.querySelector('.geocoder-control');
            geocoderControl.classList.add('geocoder-control-expanded');
            geocoderInput.setAttribute('placeholder', 'Find your neighbourhood');
        });
    });
</script>