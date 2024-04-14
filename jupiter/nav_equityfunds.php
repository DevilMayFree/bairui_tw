<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link rel='profile' href="https://gmpg.org/xfn/11">
<link rel="shortcut icon" href="img/jupiter-favicon-pos.ico" />
<link rel='canonical' href='https://www.cgsice.com/jupiter/nav_equityfunds.php' />
<link rel='shortlink' href='' />
	<title>基金淨值｜股票型</title>
  <meta name='title' content='基金淨值｜股票型' />
	<meta name='description' content='' />
	<meta name='keywords' content='' />
	<meta name='sitecode' content='zh-TW'> <!--動態產生-->

	<!--Line-->
	<meta itemprop='name' content='基金淨值｜股票型'>
	<meta itemprop='url' content='https://www.cgsice.com/jupiter/nav_equityfunds.php'>
	<meta itemprop='image' content=''>
	<meta itemprop='description' content='先機環球投資是全球頂尖的資產管理公司。本公司以投資為導向，致力於提供與市場同業有所不同的投資策略。在台灣，先機環球投資與總代理百瑞發投資攜手合作，持續引進更新、更優質產品，並致力追求長期績效表現，與您一同分享成就'>
	<meta itemprop='keywords' content='先機系列基金，基金淨值，關於Jupiter先機，關於富盛 '>

	<!--FB-->
	<meta property='og:title' content='基金淨值｜股票型'>
	<meta property='og:type' content='website'>	
	<meta property='og:url' content='https://www.cgsice.com/jupiter/nav_equityfunds.php'>
	<meta property='og:image' content=''>
	<meta property='og:description' content='先機環球投資是全球頂尖的資產管理公司。本公司以投資為導向，致力於提供與市場同業有所不同的投資策略。在台灣，先機環球投資與總代理百瑞發投資攜手合作，持續引進更新、更優質產品，並致力追求長期績效表現，與您一同分享成就'>
	
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-158766394-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-158766394-1');
</script>


<meta name="google-site-verification" content="x4_K7F-iLrz29j4xikcYOXUWyO6-G5d8eC22gTGm_HI" />



<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-BSS543RZ4B"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-BSS543RZ4B');
</script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-10972826232"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-10972826232');
</script>



<script>
    window.addEventListener('load',function()
    {
        document.querySelectorAll('a[href*="https://page.line.me/jupiter.tw"]').forEach(function(e)
        {
            e.addEventListener('click',function()
            {
                gtag('event', 'conversion', {'send_to': 'AW-10972826232/MRneCPaLq4sYEPiUoPAo'});
            });
    });
});

</script>


<!-- Google Tag Manager -->
<!-- End Google Tag Manager -->    
<link rel="stylesheet" href="lib/owl-carousel/owl.carousel.css">
<link rel="stylesheet" href="lib/jquery-ui.css">
<link rel="stylesheet" href="lib/swiper/swiper-bundle.min.css">
<link rel="stylesheet" href="lib/multiple-select/multiple-select.min.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/public.css">

<script src="lib/jquery-3.1.0.min.js"></script>
<script src="lib/jquery-ui.min.js"></script>
<script src="lib/scrollreveal.min.js"></script>
<script src="lib/truncate.js-master/truncate.js"></script>
<script src="lib/swiper/swiper-bundle.min.js"></script>
<script src="lib/multiple-select/multiple-select.js"></script>

<script src="js/main.js" defer></script>    <link rel="stylesheet" href="css/nav.css?ver=1639710966">
    <script src="lib/d3.v3.min.js"></script>
    <script type="text/javascript">
    $(function(){
        $(".page_tabs .tab").click(function(){
            var banner_title=$(this).find("h5").html();
            var pic=$(this).data("pic");
            $("#banner_title").html(banner_title);
            $("#banner").css("background-image","url("+pic+")");
            $(".page_tabs .tab").removeClass("active");
            $(this).addClass("active");
            var type=$(this).data("type");
            $.post("get_fund_list.php",{type:type},function(data){
            	var d=JSON.parse(data);
            	$("#fund_sn option").remove();
            	$("#fund_sn").append($("<option></option>").attr("value","").text("請選擇"));
            	$.each(d,function(k,title){
            		$("#fund_sn").append($("<option></option>").attr("value",k).text(title));
            	})
            	$("#share_type option").remove();
            	$("#share_type").append($("<option></option>").attr("value","").text("請先選擇基金名稱"));
            	$("#currency option").remove();
            	$("#currency").append($("<option></option>").attr("value","").text("請先選擇股份類別"));
            })
        })
    })
    </script>
</head>
<body>
    <div id="header_outer">
    <header>
        <div class="inner">
            <a href="index.php" class="logoset">
                <img src="img/ju_logo.svg" class="logo1" alt="">
                <img src="img/ca_logo.svg" class="logo2" alt="">
                <!-- <img src="img/header/logo.svg" alt=""> -->
            </a>
            <nav class="">
                <div class="nav-item" data-sub=".subnav1">
                    <p class="txt-medium txt-theme">關於我們</p>
                    <img src="img/public/arrow_4.svg" alt="">
                </div>
                <div class="sub-step2">
                    <a href="about_jupiter.php" class="nav-item">
                        <p class="txt-medium txt-theme">關於Jupiter</p>
                    </a>
                    <a href="about_cg.php" class="nav-item">
                        <p class="txt-medium txt-theme">關於富盛</p>
                    </a>
                </div>
                <div class="nav-item" data-sub=".subnav2">
                    <p class="txt-medium txt-theme">基金資訊</p>
                    <img src="img/public/arrow_4.svg" alt="">
                </div>
                <div class="sub-step2">
                                        <a href="productpage_equityfunds.php" class="nav-item">
                        <p class="txt-medium txt-theme">股票型基金</p>
                    </a>
                                            <a href="productpage_bondfunds.php" class="nav-item">
                        <p class="txt-medium txt-theme">債券型基金</p>
                    </a>
                                        <!--  <a href="funds.php" class="nav-item">
                        <p class="txt-medium txt-theme">股票型基金</p>
                    </a> -->
                </div>
                <div class="nav-item" data-sub=".subnav3">
                    <p class="txt-medium txt-theme">資料下載與淨值</p>
                    <img src="img/public/arrow_4.svg" alt="">
                </div>
                <div class="sub-step2">
                    <a href="document_bondfunds.php" class="nav-item">
                        <p class="txt-medium txt-theme">資料下載</p>
                    </a>
                    <a href="nav_bondfunds.php" class="nav-item">
                        <p class="txt-medium txt-theme">基金淨值</p>
                    </a>
                </div>
                <div class="nav-item" data-sub=".subnav4">
                    <p class="txt-medium txt-theme">投資觀點</p>
                    <img src="img/public/arrow_4.svg" alt="">
                </div>
                <div class="sub-step2">
                    <a href="insights_list.php" class="nav-item">
                        <p class="txt-medium txt-theme">最新投資觀點</p>
                    </a>
                    <a href="insights_list.php" class="nav-item">
                        <p class="txt-medium txt-theme">以資產類別分類</p>
                    </a>
                </div>
                <div class="nav-item" data-sub=".subnav5">
                    <p class="txt-medium txt-theme">市場快訊</p>
                    <img src="img/public/arrow_4.svg" alt="">
                </div>
                <div class="sub-step2">
                    <a href="market_dailyreport.php" class="nav-item">
                        <p class="txt-medium txt-theme">投資日報</p>
                    </a>
                    <a href="market_weeklyreport.php" class="nav-item">
                        <p class="txt-medium txt-theme">投資季展望</p>
                    </a>
                    <a href="market_outlook.php" class="nav-item">
                        <p class="txt-medium txt-theme">全球市場周報</p>
                    </a>
                    <a href="market_news.php" class="nav-item">
                        <p class="txt-medium txt-theme">基金快訊</p>
                    </a>
                </div>
                <div class="nav-item" data-sub=".subnav6">
                    <p class="txt-medium txt-theme">公告</p>
                    <img src="img/public/arrow_4.svg" alt="">
                </div>
                <div class="sub-step2">
                    <a href="announcement.php" class="nav-item">
                        <p class="txt-medium txt-theme">休假日公告</p>
                    </a>
                    <a href="index.php#statement" class="nav-item">
                        <p class="txt-medium txt-theme">銷售通路報酬揭露</p>
                    </a>
                </div>
                <a href="search.php" class="nav-item search">
                    <img src="img/header/search.svg" alt="">
                </a>
            </nav>
            <div class="hamberger">
                <img src="img/line.png" alt="">
            </div>

            <div class="subnav-box">
                <div class="subnav subnav1">
                    <div class="main_page">
                        <a class="link p txt-theme" data-sub=".page_contain1">
                            <span>關於Jupiter先機</span>
                            <img src="img/public/arrow_4.svg" alt="">
                        </a>
                        <a class="link p txt-theme" data-sub=".page_contain2">
                            <span>關於富盛</span>
                            <img src="img/public/arrow_4.svg" alt="">
                        </a>
                    </div>
                    <div class="page_contain page_contain1">
                        <div class="contain-info">
                            <h5 class="h5-27 txt-theme">
                                關於Jupiter先機
                            </h5>
                            <p>
                                35年以來，Jupiter先機一直堅守投資理念，以靈活積極的基金管理方針，協助客戶實現長遠投資目標，致力為客戶尋求投資回報。
                            </p>
                            <br>
                            <a href="about_jupiter.php" class="txt-orange">
                                了解更多 <img src="img/public/arrow_2.svg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="page_contain page_contain2">
                        <div class="contain-info">
                            <h5 class="h5-27 txt-theme">
                                關於富盛
                            </h5>
                            <p>
                                百瑞發投資於2007年成立，以全球投資視野深耕台灣，持續引進境外優質投資產品，締造優異績效，致力協助客戶於第一時間掌握投資先機。
                            </p>
                            <br>
                            <a href="about_cg.php" class="txt-orange">
                                了解更多 <img src="img/public/arrow_2.svg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="subnav subnav2">
                    <div class="main_page">
                                                <a class="link p txt-theme" data-sub=".page_contain1">
                            <span>股票型基金</span>
                            <img src="img/public/arrow_4.svg" alt="">
                        </a>
                                                    <a class="link p txt-theme" data-sub=".page_contain2">
                            <span>債券型基金</span>
                            <img src="img/public/arrow_4.svg" alt="">
                        </a>
                                                    <!-- <a class="link p txt-theme" data-sub=".page_contain2">
                            <span>股票型基金</span>
                            <img src="img/public/arrow_4.svg" alt="">
                        </a> -->
                    </div>
                                            <div class="page_contain page_contain1">
                            <div class="contain-info">
                                <h5 class="h5-27 txt-theme">
                                    股票型基金
                                </h5>
                                <p>
                                    投資於全球各地的股票公司，涵蓋各種產業及區域。                                </p>
                                <br>
                                <a href="productpage_equityfunds.php" class="txt-orange">
                                    了解更多 <img src="img/public/arrow_2.svg" alt="">
                                </a>
                            </div>
                        </div>
                                                <div class="page_contain page_contain2">
                            <div class="contain-info">
                                <h5 class="h5-27 txt-theme">
                                    債券型基金
                                </h5>
                                <p>
                                    投資於全球政府及公司債券以獲取收益及潛在資本增值。                                </p>
                                <br>
                                <a href="productpage_bondfunds.php" class="txt-orange">
                                    了解更多 <img src="img/public/arrow_2.svg" alt="">
                                </a>
                            </div>
                        </div>
                                            <!-- <div class="page_contain page_contain2">
                        <div class="contain-info">
                            <h5 class="h5-27 txt-theme">
                                股票型基金
                            </h5>
                            <p>
                                投資於全球各地的股票公司，涵蓋各種產業及區域。
                            </p>
                            <br>
                            <a href="funds.php" class="txt-orange">
                                了解更多 <img src="img/public/arrow_2.svg" alt="">
                            </a>
                        </div>
                    </div> -->
                </div>
                <div class="subnav subnav3">
                    <div class="main_page">
                        <a class="link p txt-theme" data-sub=".page_contain1">
                            <span>資料下載</span>
                            <img src="img/public/arrow_4.svg" alt="">
                        </a>
                        <a class="link p txt-theme" data-sub=".page_contain2">
                        <!-- <a href="nav.php" class="link p txt-theme"> -->
                            <span>基金淨值</span>
                            <img src="img/public/arrow_4.svg" alt="">
                        </a>
                    </div>
                    <div class="page_contain page_contain1">
                        <div class="contain-col">
                                                        <div class="col">
                                <h5 class="h5-27 txt-theme">
                                    股票型基金資料
                                </h5>
                                <br>
                                <a href="document_equityfunds.php" class="txt-orange">
                                    了解更多 <img src="img/public/arrow_2.svg" alt="">
                                </a>
                            </div>
                                                            <div class="col">
                                <h5 class="h5-27 txt-theme">
                                    債券型基金資料
                                </h5>
                                <br>
                                <a href="document_bondfunds.php" class="txt-orange">
                                    了解更多 <img src="img/public/arrow_2.svg" alt="">
                                </a>
                            </div>
                                                            <!-- <div class="col">
                                <h5 class="h5-27 txt-theme">
                                    股票型基金資料
                                </h5>
                                <br>
                                <a href="document_bondfunds.php" class="txt-orange">
                                    了解更多 <img src="img/public/arrow_2.svg" alt="">
                                </a>
                            </div> -->
                        </div>
                    </div>
                    <div class="page_contain page_contain2">
                        <div class="contain-col">
                                                        <div class="col">
                                <h5 class="h5-27 txt-theme">
                                    股票型基金淨值
                                </h5>
                                <br>
                                <a href="nav_equityfunds.php?type=22" class="txt-orange">
                                    了解更多 <img src="img/public/arrow_2.svg" alt="">
                                </a>
                            </div>
                                                            <div class="col">
                                <h5 class="h5-27 txt-theme">
                                    債券型基金淨值
                                </h5>
                                <br>
                                <a href="nav_bondfunds.php?type=21" class="txt-orange">
                                    了解更多 <img src="img/public/arrow_2.svg" alt="">
                                </a>
                            </div>
                                                            <!-- <div class="col">
                                <h5 class="h5-27 txt-theme">
                                    股票型基金資料
                                </h5>
                                <br>
                                <a href="document_bondfunds.php" class="txt-orange">
                                    了解更多 <img src="img/public/arrow_2.svg" alt="">
                                </a>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="subnav subnav4">
                    <div class="main_page">
                        <a class="link p txt-theme" data-sub=".page_contain1">
                            <span>最新投資觀點</span>
                            <img src="img/public/arrow_4.svg" alt="">
                        </a>
                        <a class="link p txt-theme" data-sub=".page_contain2">
                            <span>以資產類別分類</span>
                            <img src="img/public/arrow_4.svg" alt="">
                        </a>
                    </div>
                    <div class="page_contain page_contain1">
                        <div class="txt-right">
                            <a href="insights_list.php" class="p txt-orange">
                                瀏覽所有投資觀點 <img src="img/public/arrow_2.svg" alt="">
                            </a>
                        </div>
                        <div class="contain-info">
                            <h5 class="h5-27 txt-theme">
                                最新投資觀點
                            </h5>
                        </div>
                        <div class="contain-itembox">
                                                            <div class="item">
                                    <figure class="pic" style="background-image: url(https://www.cgsice.com/jupiter/upload/insight/20240412104535_insight.jpg);"></figure>
                                    <div class="text">
                                        <h6 class="txt-theme">
                                            央行可能需要採取更加鴿派的展望                                        </h6>
                                        <a href="insights_info.php?sn=129" class="p txt-orange">
                                            了解更多 <img src="img/public/arrow_2.svg" alt="">
                                        </a>
                                    </div>
                                </div>
                                                                <div class="item">
                                    <figure class="pic" style="background-image: url(https://www.cgsice.com/jupiter/upload/insight/20240312105958_insight.jpg);"></figure>
                                    <div class="text">
                                        <h6 class="txt-theme">
                                            亞太區（日本除外）的長期趨勢                                        </h6>
                                        <a href="insights_info.php?sn=128" class="p txt-orange">
                                            了解更多 <img src="img/public/arrow_2.svg" alt="">
                                        </a>
                                    </div>
                                </div>
                                                                <div class="item">
                                    <figure class="pic" style="background-image: url(https://www.cgsice.com/jupiter/upload/insight/20240201135239_insight.jpg);"></figure>
                                    <div class="text">
                                        <h6 class="txt-theme">
                                            已發展市場經濟或陷入衰退                                        </h6>
                                        <a href="insights_info.php?sn=127" class="p txt-orange">
                                            了解更多 <img src="img/public/arrow_2.svg" alt="">
                                        </a>
                                    </div>
                                </div>
                                                        </div>
                    </div>
                    <div class="page_contain page_contain2">
                        <div class="contain-col">
                                                        <div class="col">
                                <h5 class="h5-27 txt-theme">
                                    債券型                                </h5>
                                <br>
                                <a href="insights_list.php?data_type[]=債券型" class="txt-orange">
                                    了解更多 <img src="img/public/arrow_2.svg" alt="">
                                </a>
                            </div>
                                                            <div class="col">
                                <h5 class="h5-27 txt-theme">
                                    股票型                                </h5>
                                <br>
                                <a href="insights_list.php?data_type[]=股票型" class="txt-orange">
                                    了解更多 <img src="img/public/arrow_2.svg" alt="">
                                </a>
                            </div>
                                                            <!-- <div class="col">
                                <h5 class="h5-27 txt-theme">
                                    股票型
                                </h5>
                                <br>
                                <a href="insights_list.php" class="txt-orange">
                                    了解更多 <img src="img/public/arrow_2.svg" alt="">
                                </a>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="subnav subnav5">
                    <div class="main_page">
                                                <a class="link p txt-theme" data-sub=".page_contain1">
                            <span>投資日報</span>
                            <img src="img/public/arrow_4.svg" alt="">
                        </a>
                                                    <a class="link p txt-theme" data-sub=".page_contain2">
                            <span>全球市場周報</span>
                            <img src="img/public/arrow_4.svg" alt="">
                        </a>
                                                    <a class="link p txt-theme" data-sub=".page_contain3">
                            <span>投資季展望</span>
                            <img src="img/public/arrow_4.svg" alt="">
                        </a>
                                                </div>
                                            <div class="page_contain page_contain1">
                            <div class="txt-right">
                                <a href="market_dailyreport.php?data_type=6" class="p txt-orange">
                                    瀏覽所有投資日報 <img src="img/public/arrow_2.svg" alt="">
                                </a>
                            </div>
                            <div class="contain-info">
                                <h5 class="h5-27 txt-theme">
                                    投資日報                                </h5>
                            </div>
                            <div class="contain-col">
                                                                	<div class="col">
                                		<p class="txt-gray">
                                			2024-04-10                                		</p>
                                		<h6 class="txt-theme">
                                			富盛全球市場日報                                		</h6>
                                		<br>
                                		<a href="dw.php?title=Daily-Report_20240410&f=upload/news/20240410093340_news.pdf" target="_blank" class="txt-orange">
                                			了解更多 <img src="img/public/arrow_2.svg" alt="">
                                		</a>
                                	</div>
                                	                                	<div class="col">
                                		<p class="txt-gray">
                                			2024-04-09                                		</p>
                                		<h6 class="txt-theme">
                                			富盛全球市場日報                                		</h6>
                                		<br>
                                		<a href="dw.php?title=Daily-Report_20240410&f=upload/news/20240410093255_news.pdf" target="_blank" class="txt-orange">
                                			了解更多 <img src="img/public/arrow_2.svg" alt="">
                                		</a>
                                	</div>
                                	                                	<div class="col">
                                		<p class="txt-gray">
                                			2024-04-08                                		</p>
                                		<h6 class="txt-theme">
                                			富盛全球市場日報                                		</h6>
                                		<br>
                                		<a href="dw.php?title=Daily-Report_20240410&f=upload/news/20240410093149_news.pdf" target="_blank" class="txt-orange">
                                			了解更多 <img src="img/public/arrow_2.svg" alt="">
                                		</a>
                                	</div>
                                	                            </div>
                        </div>
                                                <div class="page_contain page_contain2">
                            <div class="txt-right">
                                <a href="market_weeklyreport.php?data_type=7" class="p txt-orange">
                                    瀏覽所有全球市場周報 <img src="img/public/arrow_2.svg" alt="">
                                </a>
                            </div>
                            <div class="contain-info">
                                <h5 class="h5-27 txt-theme">
                                    全球市場周報                                </h5>
                            </div>
                            <div class="contain-col">
                                                                	<div class="col">
                                		<p class="txt-gray">
                                			2023-08-25                                		</p>
                                		<h6 class="txt-theme">
                                			富盛全球市場周報                                		</h6>
                                		<br>
                                		<a href="dw.php?title=Weekly Report_20230825&f=upload/news/20230825164141_news.pdf" target="_blank" class="txt-orange">
                                			了解更多 <img src="img/public/arrow_2.svg" alt="">
                                		</a>
                                	</div>
                                	                                	<div class="col">
                                		<p class="txt-gray">
                                			2023-08-18                                		</p>
                                		<h6 class="txt-theme">
                                			富盛全球市場周報                                		</h6>
                                		<br>
                                		<a href="dw.php?title=Weekly Report_20230818&f=upload/news/20230818124819_news.pdf" target="_blank" class="txt-orange">
                                			了解更多 <img src="img/public/arrow_2.svg" alt="">
                                		</a>
                                	</div>
                                	                                	<div class="col">
                                		<p class="txt-gray">
                                			2023-08-11                                		</p>
                                		<h6 class="txt-theme">
                                			富盛全球市場周報                                		</h6>
                                		<br>
                                		<a href="dw.php?title=Weekly Report_20230811&f=upload/news/20230811172850_news.pdf" target="_blank" class="txt-orange">
                                			了解更多 <img src="img/public/arrow_2.svg" alt="">
                                		</a>
                                	</div>
                                	                            </div>
                        </div>
                                                <div class="page_contain page_contain3">
                            <div class="txt-right">
                                <a href="market_outlook.php?data_type=8" class="p txt-orange">
                                    瀏覽所有投資季展望 <img src="img/public/arrow_2.svg" alt="">
                                </a>
                            </div>
                            <div class="contain-info">
                                <h5 class="h5-27 txt-theme">
                                    投資季展望                                </h5>
                            </div>
                            <div class="contain-col">
                                                                	<div class="col">
                                		<p class="txt-gray">
                                			2023-04-07                                		</p>
                                		<h6 class="txt-theme">
                                			【2023Q2季展望】高利環境配高息 靈活應對擁收益                                		</h6>
                                		<br>
                                		<a href="dw.php?title=Outlook_20230407&f=upload/news/20230407090618_news.pdf" target="_blank" class="txt-orange">
                                			了解更多 <img src="img/public/arrow_2.svg" alt="">
                                		</a>
                                	</div>
                                	                                	<div class="col">
                                		<p class="txt-gray">
                                			2023-03-20                                		</p>
                                		<h6 class="txt-theme">
                                			【2023Q1季展望】先蹲後跳待轉機  多元高息先佈局                                		</h6>
                                		<br>
                                		<a href="dw.php?title=Outlook_20230320&f=upload/news/20230320121119_news.pdf" target="_blank" class="txt-orange">
                                			了解更多 <img src="img/public/arrow_2.svg" alt="">
                                		</a>
                                	</div>
                                	                                	<div class="col">
                                		<p class="txt-gray">
                                			2023-03-20                                		</p>
                                		<h6 class="txt-theme">
                                			【2022Q4季展望】升息循環找買點 多元資產好避險                                		</h6>
                                		<br>
                                		<a href="dw.php?title=Outlook_20230320&f=upload/news/20230320121839_news.pdf" target="_blank" class="txt-orange">
                                			了解更多 <img src="img/public/arrow_2.svg" alt="">
                                		</a>
                                	</div>
                                	                            </div>
                        </div>
                                        </div>
                <div class="subnav subnav6">
                    <div class="main_page">
                        <a class="link p txt-theme" data-sub=".page_contain1">
                            <span>休假日公告</span>
                            <img src="img/public/arrow_4.svg" alt="">
                        </a>
                        <a href="index.php#statement" class="link p txt-theme">
                            <span>銷售通路報酬揭露</span>
                            <img src="img/public/arrow_4.svg" alt="">
                        </a>
                    </div>
                    <div class="page_contain page_contain1">
                        <div class="txt-right">
                            <a href="announcement.php" class="p txt-orange">
                                瀏覽所有休假日公告 <img src="img/public/arrow_2.svg" alt="">
                            </a>
                        </div>
                        <div class="contain-info">
                            <h5 class="h5-27 txt-theme">
                                休假日公告
                            </h5>
                        </div>
                        <div class="contain-col">
                                                            <div class="col">
                                    <p class="txt-gray">
                                        2024-03-21                                    </p>
                                    <h6 class="txt-theme">
                                        【公告】113年4月份休假日                                    </h6>
                                    <br>
                                    <a href="announcement_info.php?sn=62" class="txt-orange">
                                        了解更多 <img src="img/public/arrow_2.svg" alt="">
                                    </a>
                                </div>
                                                                <div class="col">
                                    <p class="txt-gray">
                                        2024-02-20                                    </p>
                                    <h6 class="txt-theme">
                                        【公告】113年3月份休假日                                    </h6>
                                    <br>
                                    <a href="announcement_info.php?sn=61" class="txt-orange">
                                        了解更多 <img src="img/public/arrow_2.svg" alt="">
                                    </a>
                                </div>
                                                                <div class="col">
                                    <p class="txt-gray">
                                        2024-01-23                                    </p>
                                    <h6 class="txt-theme">
                                        【公告】113年2月份休假日                                    </h6>
                                    <br>
                                    <a href="announcement_info.php?sn=60" class="txt-orange">
                                        了解更多 <img src="img/public/arrow_2.svg" alt="">
                                    </a>
                                </div>
                                                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="subsearch-box">
                        <form action="search.php" class="subsearch" id="form_search" name="form_search" method="post">
                <div class="w1200">
                    <h4 class="txt-theme">基金搜尋</h4>
                    <div class="box">
                        <div class="col">
                            <select name="risk_level[]" id="s_risk_level" multiple="multiple" class="multiple-select" placeholder="請選擇風險等級">
                                                                    <option value="RR4">RR4</option>
                                                                        <option value="RR5">RR5</option>
                                                                        <option value="RR3">RR3</option>
                                                                        <option value="RR2">RR2</option>
                                                                </select>
                        </div>
                        <div class="col">
                            <select name="share_type[]" id="s_share_type" multiple="multiple" class="multiple-select" placeholder="請選擇股份類別">
                                                                    <option value="L類累積股">L類累積股</option>
                                                                        <option value="B類累積股">B類累積股</option>
                                                                        <option value="C類累積股">C類累積股</option>
                                                                        <option value="C2類累積股">C2類累積股</option>
                                                                        <option value="L類收益股">L類收益股</option>
                                                                        <option value="L類避險收益股">L類避險收益股</option>
                                                                        <option value="L類避險累積股">L類避險累積股</option>
                                                                        <option value="B類收益股">B類收益股</option>
                                                                        <option value="C類收益股">C類收益股</option>
                                                                        <option value="C2類收益股">C2類收益股</option>
                                                                        <option value="C2類避險收益股">C2類避險收益股</option>
                                                                        <option value="B類避險收益股">B類避險收益股</option>
                                                                </select>
                        </div>
                        <div class="col">
                            <select name="invest_area[]" id="s_invest_area" multiple="multiple" class="multiple-select" placeholder="請選擇投資區域">
                                                                    <option value="美國">美國</option>
                                                                        <option value="新興市場">新興市場</option>
                                                                        <option value="全球">全球</option>
                                                                        <option value="中國大陸及香港">中國大陸及香港</option>
                                                                        <option value="亞洲太平洋(不含日本)">亞洲太平洋(不含日本)</option>
                                                                </select>
                        </div>
                        <div class="btncol">
                            <button class="clear" type="button" id="search_clear_btn">
                                <p>
                                    清除篩選
                                </p>
                                <img src="img/public/close.svg" alt="">
                            </button>
                        </div>
                        <div class="col">
                            <select name="invest_target[]" id="s_invest_target" multiple="multiple" class="multiple-select" placeholder="請選擇投資標的">
                                                                    <option value="股票">股票</option>
                                                                        <option value="債券">債券</option>
                                                                </select>
                        </div>
                        <div class="col">
                            <select name="interest_type[]" id="s_interest_type" multiple="multiple" class="multiple-select" placeholder="請選擇配息方式">
                                                                    <option value="年配息">年配息</option>
                                                                        <option value="不配息">不配息</option>
                                                                        <option value="月配息">月配息</option>
                                                                </select>
                        </div>
                        <div class="col">
                            <select name="currency[]" id="s_currency" multiple="multiple" class="multiple-select" placeholder="請選擇計價幣別">
                                                                    <option value="美元">美元</option>
                                                                        <option value="歐元">歐元</option>
                                                                        <option value="美元穩定配息">美元穩定配息</option>
                                                                        <option value="南非幣穩定配息">南非幣穩定配息</option>
                                                                        <option value="澳幣">澳幣</option>
                                                                        <option value="澳幣穩定配息">澳幣穩定配息</option>
                                                                </select>
                        </div>
                        <div class="btncol">
                            <button class="btn p" type="button" id="search_btn">
                            搜尋
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </header>
</div>    <div id="banner" style="background-image: url(img/funds/01_banner2.jpg);">
    <div class="w1200" style="padding-top: 20px">
        <p class="txt-white">
            <a href="index.php">
                首頁
            </a> > 淨值        </p>
    </div>
    <div class="inner w1200 txt-white">
        <div class="text">
            <h2 class="h1 txt-bold" id="banner_title">股票型基金</h2>
            <h5></h5>
        </div>
    </div>
</div>    <div class="page_tabs">
                    <a href="nav_equityfunds.php" data-type="22" class="tab active" data-pic="https://www.cgsice.com/jupiter/img/funds/01_banner2.jpg">
                <h5 class="txt-bold txt-theme">股票型基金</h5>
            </a>
                      <a href="nav_bondfunds.php" data-type="21" class="tab " data-pic="https://www.cgsice.com/jupiter/img/funds/01_banner.jpg">
                <h5 class="txt-bold txt-theme">債券型基金</h5>
            </a>
              </div>

    <div class="page_filter main_padding">
        <div class="w1200">
            <form class="inner" id="form1" name="form1">
                <div class="col col33">
                    <p class="txt-bold txt-orange">
                        先機基金名稱
                    </p>
                                        <select name="fund_sn" id="fund_sn">
                        <option value="">請選擇</option>
                                                	<option value="1" >先機北美股票基金</option>
                        	                        	<option value="4" >先機環球股票基金</option>
                        	                        	<option value="8" >先機全球新興市場基金</option>
                        	                        	<option value="9" >先機中國基金</option>
                        	                        	<option value="10" >先機亞太股票入息基金</option>
                        	                    </select>
                </div>
                <div class="col col33">
                    <p class="txt-bold txt-orange">
                        股份類別
                    </p>
                    <select name="share_type" id="share_type">
                        <option value="">請先選擇基金名稱</option>
                    </select>
                </div>
                <div class="col col33">
                    <p class="txt-bold txt-orange">
                        計價幣別
                    </p>
                    <select name="currency" id="currency">
                        <option value="">請選擇股份類別</option>
                    </select>
                </div>
                <div class="col col100 btnset txt-right">
                    <p style="opacity: 0;">.</p>
                    <div>
                        <button class="clear" type="button" id="clear_data">
                            <p>
                                清除篩選
                            </p>
                            <img src="img/public/close.svg" alt="">
                        </button>
                        <button type="button" id="send_btn" class="btn txt-white txt-bold h6">
                            搜尋
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <section id="fund_nav" class="main_padding">
        <div class="chartOuter w1200">
            <div class="top txt-left">
                <h5 id="fund_name" class="txt-bold txt-theme">
                </h5>
                <br>
                <h5 id="fund_note" class="txt-medium txt-dark_gray">
                </h5>
                <p>
                    <span id="fund_classification" class="txt-dark_gray"></span>
                </p>
            </div>
            <h4 class="txt-theme">淨值走勢</h4>
            <br><br>
            <div class="chart_box">
                <div class="interval">
                    <div class="default_interval">
                        <div id="btnW" class="switch_interval active">週</div>
                        <div id="btnM" class="switch_interval">月</div>
                        <div id="btnTM" class="switch_interval">近三月</div>
                        <div id="btnSM" class="switch_interval">近六月</div>
                    </div>
                    <div class="choose_interval">
                        <input type="text" id="date-start" placeholder="起"> - 
                        <input type="text" id="date-end" placeholder="迄">
                    </div>
                </div>                  
                <div id="chart_content">
                    <div class="chart"></div>
                </div>
            </div>
        </div>
    </section>

    <section id="thirty_day_outer" class="main_padding" style="display: block;">
        <div class="thirty_day w1400">
            <h4 class="txt-theme">近三十日淨值</h4>
            <div class="data_table">
            	
                <div class="head txt-theme">
                    <p class="col50 txt-bold">報價日期</p>
                    <p class="col50 txt-bold">淨值</p>
                </div>
            	
                <div class="head txt-theme">
                    <p class="col50 txt-bold">報價日期</p>
                    <p class="col50 txt-bold">淨值</p>
                </div>
            	
                <div class="head txt-theme">
                    <p class="col50 txt-bold">報價日期</p>
                    <p class="col50 txt-bold">淨值</p>
                </div>
            	
            	
                <ul>
                    <li>
                        <div class="col50 h6">-</div>
                        <div class="col50 h6">-</div>
                    </li>
                    <li>
                        <div class="col50 h6">-</div>
                        <div class="col50 h6">-</div>
                    </li>
                    <li>
                        <div class="col50 h6">-</div>
                        <div class="col50 h6">-</div>
                    </li>
                    <li>
                        <div class="col50 h6">-</div>
                        <div class="col50 h6">-</div>
                    </li>
                    <li>
                        <div class="col50 h6">-</div>
                        <div class="col50 h6">-</div>
                    </li>
                    <li>
                        <div class="col50 h6">-</div>
                        <div class="col50 h6">-</div>
                    </li>
                    <li>
                        <div class="col50 h6">-</div>
                        <div class="col50 h6">-</div>
                    </li>
                    <li>
                        <div class="col50 h6">-</div>
                        <div class="col50 h6">-</div>
                    </li>
                    <li>
                        <div class="col50 h6">-</div>
                        <div class="col50 h6">-</div>
                    </li>
                    <li>
                        <div class="col50 h6">-</div>
                        <div class="col50 h6">-</div>
                    </li>
                </ul>
            	
                <ul>
                    <li>
                        <div class="col50 h6">-</div>
                        <div class="col50 h6">-</div>
                    </li>
                    <li>
                        <div class="col50 h6">-</div>
                        <div class="col50 h6">-</div>
                    </li>
                    <li>
                        <div class="col50 h6">-</div>
                        <div class="col50 h6">-</div>
                    </li>
                    <li>
                        <div class="col50 h6">-</div>
                        <div class="col50 h6">-</div>
                    </li>
                    <li>
                        <div class="col50 h6">-</div>
                        <div class="col50 h6">-</div>
                    </li>
                    <li>
                        <div class="col50 h6">-</div>
                        <div class="col50 h6">-</div>
                    </li>
                    <li>
                        <div class="col50 h6">-</div>
                        <div class="col50 h6">-</div>
                    </li>
                    <li>
                        <div class="col50 h6">-</div>
                        <div class="col50 h6">-</div>
                    </li>
                    <li>
                        <div class="col50 h6">-</div>
                        <div class="col50 h6">-</div>
                    </li>
                    <li>
                        <div class="col50 h6">-</div>
                        <div class="col50 h6">-</div>
                    </li>
                </ul>
            	
                <ul>
                    <li>
                        <div class="col50 h6">-</div>
                        <div class="col50 h6">-</div>
                    </li>
                    <li>
                        <div class="col50 h6">-</div>
                        <div class="col50 h6">-</div>
                    </li>
                    <li>
                        <div class="col50 h6">-</div>
                        <div class="col50 h6">-</div>
                    </li>
                    <li>
                        <div class="col50 h6">-</div>
                        <div class="col50 h6">-</div>
                    </li>
                    <li>
                        <div class="col50 h6">-</div>
                        <div class="col50 h6">-</div>
                    </li>
                    <li>
                        <div class="col50 h6">-</div>
                        <div class="col50 h6">-</div>
                    </li>
                    <li>
                        <div class="col50 h6">-</div>
                        <div class="col50 h6">-</div>
                    </li>
                    <li>
                        <div class="col50 h6">-</div>
                        <div class="col50 h6">-</div>
                    </li>
                    <li>
                        <div class="col50 h6">-</div>
                        <div class="col50 h6">-</div>
                    </li>
                    <li>
                        <div class="col50 h6">-</div>
                        <div class="col50 h6">-</div>
                    </li>
                </ul>
            	
            </div>    
        </div>
    </section>

    <!-- ////////// FOOTER ////////// -->

<footer>
    <div class="content w1400">
        <div class="content_top">
            <a href="index.php" class="title">
                <img class="logo1" style="margin-right: 40px;" src="img/ju_logo.svg" alt="Mertan先機投資">
                <img class="logo2" src="img/ca_logo.svg" alt="百瑞發投資股份有限公司">
            </a>
        </div>
        <div class="content_mid">
            <div class="com">
                <div class="item">
                    <h6>台北總公司</h6>
                    <div>
                        <a href="tel:2728-3222">(02)2728-3222</a>
                        <p>台北市信義區松德路171號9樓</p>
                    </div>
                </div>
                <div class="item">
                    <h6>台中分公司</h6>
                    <div>
                        <a href="tel:2251-3477">(04)2251-3477</a>
                        <p>台中市西屯區市政北一路77號14樓之11</p>
                    </div>
                </div>
                <div class="item">
                    <h6>台南分公司</h6>
                    <div>
                        <a href="tel:236-5208">(06)236-5208</a>
                        <p>台南市東區林森路一段395號9樓之6</p>
                    </div>
                </div>
            </div>
            <div class="footer_nav">
                <div class="item_box">
                    <div class="item">
                        <h5><b>關於我們</b></h5>
                        <div>
                            <a href="about-jupiter.php">關於Jupiter先機</a>
                            <a href="about_cg.php">關於富盛</a>
                            <a href="insights_list.php">投資觀點</a>
                        </div>
                    </div>
                    <div class="item">
                        <h5><b>基金資訊</b></h5>
                        <div>
                            <a href="productpage_equityfunds.php">股票型基金</a>
                            <a href="productpage_bondfunds.php">債券型基金</a>
                        </div>
                    </div>
                    <div class="item">
                        <h5><b>資料下載與淨值</b></h5>
                        <div>
                            <a href="document_equityfunds.php">資料下載</a>
                            <a href="nav_equityfunds.php">基金淨值</a>
                        </div>
                    </div>
                    <div class="item">
                        <h5><b>市場快訊</b></h5>
                        <div>
                            <a href="market_dailyreport.php">投資日報</a>
                            <a href="market_weeklyreport.php">全球市場周報</a>
                            <a href="market_outlook.php">投資季展望</a>
                            <a href="market_news.php">基金快訊</a>
                        </div>
                    </div>
                    <div class="item">
                        <h5><b>公告</b></h5>
                        <div>
                            <a href="announcement.php">休假日公告</a>
                            <a href="index.php#statement">銷售通路報酬揭露</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content_bottom">
            <div class="item">
                <p>百瑞發投資股份有限公司 (102)金管投顧新字019號</p>
                <p>客服信箱：<a href="/cdn-cgi/l/email-protection#f4879186829d9791b49793879d9791da979b99" class="txt-orange"><span class="__cf_email__" data-cfemail="e7948295918e8482a78480948e8482c984888a">[email&#160;protected]</span></a></p>
                <p>客服專線：02-2728-3222</p>
            </div>
            <div class="description">
                <a href="accessibility.php" style="margin-right:10px;">網站資訊使用說明</a>
                |
                <a href="privacy.php" style="margin-left:10px;">隱私權政策</a>
                <p>Copyright @ 2021 Capital Gateway Investments All Rights Reserved.</p>
            </div>
        </div>
    </div>
    <div class="copyright">
        <p>【百瑞發投資 獨立經營管理】© 版權所有 不得轉載</p>
        <img id="light-box_btn" class="openbox" src="img/footer/p.svg"/>
    </div>
    <div id="copyright_light_box" class="lightbox">
        <div id="overlay"></div>
        <div class="box">
            <div class="box_close"></div>
            <div class="boxin">
            <p class="txt-bold">【百瑞發投資 獨立經營管理】© 版權所有 不得轉載</p>
            <p>百瑞發投資所作任何投資意見與市場分析結果，係依據資料製作當時情況進行判斷，惟可能因市場變化而更動，投資標的之價格與收益亦將隨時變動。</p><p>百瑞發投資所提供之資訊，僅供接收人參考使用。本公司當盡力提供正確之資訊，所載資料均來自或本諸我們相信可靠之來源，但對其完整性、即時性和正確性不做任何擔保，如有錯漏或疏忽， 本公司或關係企業與其任何董事或受僱人，並不負任何法律責任。任何人因信賴此等資料而做出或改變投資決策，須自行承擔結果。本基金經金管會核准或同意生效，惟不表示本基金絕無風險。網頁所載資料或任何部份均不可以進行抄錄、翻印或另作派發。</p><p>基金經金管會核准或同意生效，惟不表示基金絕無風險。基金經理公司以往之經理績效不保證基金之最低投資收益﹔基金經理公司除善盡善良管理人之注意義務外，不負責基金之盈虧，亦不保證最低之收益，投資人申購前，應詳閱基金公開說明書。基金應負擔之費用(境外基金含分銷費用)已揭露於基金之公開說明書或投資人須知中，投資人可至公開資訊觀測站或境外基金資訊觀測站中查詢(公開說明書備索)。手續費雖可遞延收取，惟每年仍需支付1.5％的分銷費，可能造成實際負擔費用增加。基金投資無受存款保險、保險安定基金或其他相關保障機制之保障，投資人須自負盈虧。基金投資可能產生的最大損失為全部本金。新興市場證券之波動性與風險程度可能較高，且其政治與經濟情勢穩定度通常低於已開發國家，可能影響基金所投資地區之有價證券價格波動，而使資產價值受不同程度影響。投資前請詳閱基金公開說明書有關投資風險之說明。現階段法令限制投資於中國大陸證券市場僅限掛牌上市之有價證券，且境外基金總金額不得超過基金淨資產價值20%；基金投資地區包含中國大陸及香港，可能因產業循環或非經濟因素導致價格劇烈波動，以及市場機制不如已開發市場健全，產生流動性不足風險，而使資產價值受不同程度之影響，投資前請詳閱基金公開說明書有關投資風險之說明。於由於高收益債券之信用評等未達投資等級或未經信用評等，且對利率變動的敏感度甚高，故基金可能會因利率上升、市場流動性下降，或債券發行機構違約不支付本金、利息或破產而蒙受虧損。以高收益債券為訴求之基金不適合無法承擔相關風險之投資人。投資人投資以高收益債券為訴求之基金不宜占其投資組合過高之比重。匯率變動可能影響基金之淨資產價值、申購價格或收益。基金因短期市場、利率或流動性等因素，波動度可能提高，投資人應選擇適合自身風險承受度之基金。基金配息率不代表基金報酬率，且過去配息率不代表未來配息率；基金淨值可能因市場因素而上下波動。本基金進行配息前未先扣除行政管理相關費用。基金的配息可能由基金的收益或本金中支付，任何涉及由本金支付的部分，可能導致原始投資金額減損。配息率並非等於基金報酬率，於獲得配息時，宜一併注意基金淨值之變動。本公司於公司網站揭露各配息型基金近12個月內由本金支付配息之相關資料供查詢，投資人於申購時應謹慎考量。本文提及之經濟走勢預測不必然代表基金之績效，基金投資風險請詳閱基金公開說明書。</p><p>本網站內容之所有權利為百瑞發投資所有，任何人未經同意，不得為任何重製、轉載、散布、改作等侵害智慧財產權或其他權利之行為，並不得將網站全部或部分內容轉載於任何形式媒體。</p><p>&nbsp;</p><p>&nbsp;</p>            </div>
        </div>
    </div>
</footer>

<!-- ////////// END FOOTER ////////// --><script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script></body>
<script src="js/nav.js"></script>
<script>
$(function(){
  $("#send_btn").click(function(){
  	var sn=$("#fund_sn").val();
    if(!sn)
    {
    	alert('請選擇基金名稱');
    	return ;
    }
  	var share_type=$("#share_type").val();
  	if(!share_type)
    {
    	alert('請選擇股份類別');
    	return ;
    }
  	var currency=$("#currency").val();
  	if(!currency)
    {
    	alert('請選擇計價幣別');
    	return ;
    }
  	$.ajax({
  		url:"json/get_chart_data.php",
  		data:{sn:sn,share_type:share_type,currency:currency},
  		type:"post",
  		dataType:"json",
  		success:function(get_data){
  			makeRequest(get_data);
  			return;
  		}
  	});
  })
  $("#form1").on("change","#fund_sn",function(){
  	fund_sn=$(this).val();
  	$.post("get_share_type.php",{fund_sn:fund_sn},function(data){
  		var d=JSON.parse(data);
  		$("#share_type option").remove();
  		$("#share_type").append($("<option></option>").attr("value","").text("請選擇"));
  		d.forEach(function(share_type,k){
  			$("#share_type").append($("<option></option>").attr("value",share_type).text(share_type));
  		})
  		$("#currency option").remove();
  		$("#currency").append($("<option></option>").attr("value","").text("請選擇"));
  	})
  })
  $("#form1").on("change","#share_type",function(){
  	fund_sn=$("#fund_sn").val();
  	share_type=$(this).val();
  	$.post("get_currency.php",{fund_sn:fund_sn,share_type:share_type},function(data){
  		var d=JSON.parse(data);
  		$("#currency option").remove();
  		d.forEach(function(currency,k){
  			$("#currency").append($("<option></option>").attr("value",currency).text(currency));
  		})
  	})
  })
  $("#clear_data").click(function(){
  	$("#fund_sn").val("");
  	$("#share_type option").remove();
  	$("#share_type").append($("<option></option>").attr("value","").text("請選擇"));
  	$("#currency option").remove();
  	$("#currency").append($("<option></option>").attr("value","").text("請選擇"));
  })
})
$(document).ready(function(){
	//$("#send_btn").trigger("click");//不要一載入就查詢
})
</script>
</html>