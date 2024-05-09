<?php
    include 'C:/xampp/htdocs/configuration/global.php';
    $site->LoginState(false, false);
?>

<!--[if IE 8]><html class="ie8" ng-app="robloxApp"><![endif]-->
<!--[if gt IE 8]><!-->
<html>
<!--<![endif]-->
<head>
    <!-- MachineID: WEB129 -->
    <title>Games - ROBLOX</title>
    <?php $site->robloxHtml("HTMLStarterPack"); ?>

    <link rel="canonical" href="https://www.<?php echo $url; ?>/games/?SortFilter=default&amp;TimeFilter=0&amp;GenreFilter=1" />
    

<link rel='stylesheet' href='//static.rbxcdn.com/css/page___3f4aa280c13ef5be46e8720037bd9e10_m.css/fetch' />

<?php $site->robloxHtml("JS_2"); ?>

</head>
<body id="rbx-body"
      class=""
      data-performance-relative-value="0.5"
      data-internal-page-name="Games"
      data-send-event-percentage="0.01">
    <div id="roblox-linkify" data-enabled="true" data-regex="(https?\:\/\/)?(?:www\.)?([a-z0-9\-]{2,}\.)*(((m|de|www|web|api|blog|wiki|help|corp|polls|bloxcon|developer|devforum|forum)\.roblox\.com|robloxlabs\.com)|(www\.shoproblox\.com))((\/[A-Za-z0-9-+&amp;@#\/%?=~_|!:,.;]*)|(\b|\s))" data-regex-flags="gm"></div>

<div id="image-retry-data"
     data-image-retry-max-times="10"
     data-image-retry-timer="1500">
</div>
<div id="http-retry-data"
     data-http-retry-max-timeout="8000"
     data-http-retry-base-timeout="1000">
</div>

    


<div id="fb-root"></div>

<div id="wrap" class="wrap no-gutter-ads logged-in"
     data-gutter-ads-enabled="false">

     <?php $site->robloxHtml("Navigation"); ?>

<script type="text/javascript">
    (function() {
        if (Roblox && Roblox.Performance) {
            Roblox.Performance.setPerformanceMark("navigation_end");
        }
    })();
</script>

    <div class="container-main  
                 
                
                ">
            <script type="text/javascript">
                if (top.location != self.location) {
                    top.location = self.location.href;
                }
            </script>
        <noscript><div class="SystemAlert"><div class="alert-info" role="alert">Please enable Javascript to use all the features on this site.</div></div></noscript>
        <div class="content ">

                                    


<div id="ResponsiveWrapper" class="games-responsive-wrapper hover-on-touch"
     data-gamessearchonpage="true"
     data-adsingamesearchresultsenabled="true">
    
    <div id="GamesPageRightColumn" class="games-page-right">
        <div id="GamesPageRightColumnSidebar" class="sidebar-no-ad games-page-right-sidebar">
                    <div id="GamePageAdDiv1" class="ads-container">


<iframe name="Roblox_Games_Middle_300x250" 
        allowtransparency="true"
        frameborder="0"
        height="270"
        scrolling="no"
        src="//www.<?php echo $url; ?>/userads/3"
        width="300"
        data-js-adtype="iframead"></iframe>

                    </div>
                        <div id="GamePageAdDiv2" class="ads-container">


<iframe name="Roblox_Games_Middle_300x250_1" 
        allowtransparency="true"
        frameborder="0"
        height="270"
        scrolling="no"
        src="//www.<?php echo $url; ?>/userads/3"
        width="300"
        data-js-adtype="iframead"></iframe>

                        </div>

        </div>
    </div>

    <div id="GamesPageLeftColumn" class="games-page-left ">

        <!-- New Filters and sort -->
        
           

<div class="col-xs-12 games-page-filters loading" id="FiltersAndSort"
     data-defaulttoppaidtoweekly="true"
     data-defaultweeklyratings="true">

        <div class="input-group-btn games-page-filter" id="SortFilter">
            <button type="button" class="input-dropdown-btn" data-toggle="dropdown">
                <span class="rbx-selection-label" data-bind="label" data-value="default" data-default="default">Filter by</span>
                <span class="icon-down-16x16"></span>
            </button>
            <ul data-toggle="dropdown-menu" class="dropdown-menu" role="menu">
                <li data-hidetimefilter data-value="default"><a href="#">Default</a></li>
                        <li data-hidetimefilter
                            
                            data-value="1">
                            <a href="#">Popular</a>
                        </li>
                        <li data-hidetimefilter
                            
                            data-value="8">
                            <a href="#">Top Earning</a>
                        </li>
                        <li 
                            
                            data-value="11">
                            <a href="#">Top Rated</a>
                        </li>
                        <li data-hidetimefilter
                            data-hidegenrefilter
                            data-value="3">
                            <a href="#">Featured</a>
                        </li>
                        <li data-hidetimefilter
                            
                            data-value="16">
                            <a href="#">Recommended</a>
                        </li>
                        <li 
                            
                            data-value="2">
                            <a href="#">Top Favorite</a>
                        </li>
                        <li data-hidetimefilter
                            data-hidegenrefilter
                            data-value="6">
                            <a href="#">My Recent</a>
                        </li>
                        <li data-hidetimefilter
                            data-hidegenrefilter
                            data-value="5">
                            <a href="#">My Favorite</a>
                        </li>
                        <li data-hidetimefilter
                            
                            data-value="10">
                            <a href="#">Purchased</a>
                        </li>
                        <li data-hidetimefilter
                            data-hidegenrefilter
                            data-value="17">
                            <a href="#">Friend Activity</a>
                        </li>
                        <li 
                            
                            data-value="9">
                            <a href="#">Top Paid</a>
                        </li>
                        <li 
                            
                            data-value="14">
                            <a href="#">Builders Club</a>
                        </li>
                        <li data-hidetimefilter
                            
                            data-value="19">
                            <a href="#">Popular in VR</a>
                        </li>

            </ul>
        </div>

        <div class="input-group-btn games-page-filter" id="TimeFilter">
            <button type="button" class="input-dropdown-btn" data-toggle="dropdown">
                <span class="rbx-selection-label" data-bind="label" data-value="0" data-default="0">Time</span>
                <span class="icon-down-16x16"></span>
            </button>
            <ul data-toggle="dropdown-menu" class="dropdown-menu" role="menu">
                <li class="dropdown-option hidden" data-value="0"><a href="#">Now</a></li>
                <li class="dropdown-option" data-value="1"><a href="#">Past Day</a></li>
                <li class="dropdown-option" data-value="2"><a href="#">Past Week</a></li>
                <li class="dropdown-option" data-value="4"><a href="#">All Time</a></li>
            </ul>
        </div>
            <div class="input-group-btn games-page-filter" id="GenreFilter">
            <button type="button" class="input-dropdown-btn" data-toggle="dropdown">
                <span class="rbx-selection-label" data-bind="label" data-value="1" data-default="1">Genre</span>
                <span class="icon-down-16x16"></span>
            </button>
            <ul data-toggle="dropdown-menu" class="dropdown-menu" role="menu">
                    <li class="dropdown-option" data-value="1"><a href="#">All</a></li>
                    <li class="dropdown-option" data-value="13"><a href="#">Adventure</a></li>
                    <li class="dropdown-option" data-value="19"><a href="#">Building</a></li>
                    <li class="dropdown-option" data-value="15"><a href="#">Comedy</a></li>
                    <li class="dropdown-option" data-value="10"><a href="#">Fighting</a></li>
                    <li class="dropdown-option" data-value="20"><a href="#">FPS</a></li>
                    <li class="dropdown-option" data-value="11"><a href="#">Horror</a></li>
                    <li class="dropdown-option" data-value="8"><a href="#">Medieval</a></li>
                    <li class="dropdown-option" data-value="17"><a href="#">Military</a></li>
                    <li class="dropdown-option" data-value="12"><a href="#">Naval</a></li>
                    <li class="dropdown-option" data-value="21"><a href="#">RPG</a></li>
                    <li class="dropdown-option" data-value="9"><a href="#">Sci-Fi</a></li>
                    <li class="dropdown-option" data-value="14"><a href="#">Sports</a></li>
                    <li class="dropdown-option" data-value="7"><a href="#">Town and City</a></li>
                    <li class="dropdown-option" data-value="16"><a href="#">Western</a></li>
            </ul>
        </div>
</div>

        <div id="GamesPageSearch" class="hidden" data-keyword="">
            <a name="CancelSearch" class="cancel-search">Cancel</a>
            <input data-default="" id="searchbox" class="translate" type="text" name="search" />
            <div class="SearchIconButton" title="Search"></div>
        </div>

        <div id="GamesListsContainer" class="games-page-lists-container">



<div class="games-list-container hidden container-0" id="GamesListContainer1"
     data-sortfilter="1"
     data-gamefilter="1"
     data-minbclevel="0"
     data-numberofrows="1"
     data-personalized-universe-id="0">
    <div class="games-list-header games-filter-changer">
            <h3>Popular</h3>

    </div>
        <div class="show-in-multiview-mode-only">
            <div class="see-all-button games-filter-changer btn-fixed-width btn-secondary-xs btn-more">
                See All
            </div>
        </div>
    <div class="games-list">
        <div class="show-in-multiview-mode-only">
            <div class="horizontally-scrollable">
                <ul class="hlist games game-cards"></ul>
            </div>
            <div class="scroller prev disabled">
                <div class="arrow">
                    <span class="icon-games-carousel-left"></span>
                </div>
            </div>
            <div class="scroller next">
                <div class="arrow">
                    <span class="icon-games-carousel-right"></span>
                </div>
            </div>
        </div>
        <ul class="hlist games game-cards game-cards-grid">
            <div class="abp-spacer "></div>
        </ul>
    </div>
</div>



<div class="games-list-container hidden container-1" id="GamesListContainer8"
     data-sortfilter="8"
     data-gamefilter="1"
     data-minbclevel="0"
     data-numberofrows="1"
     data-personalized-universe-id="0">
    <div class="games-list-header games-filter-changer">
            <h3>Top Earning</h3>

    </div>
        <div class="show-in-multiview-mode-only">
            <div class="see-all-button games-filter-changer btn-fixed-width btn-secondary-xs btn-more">
                See All
            </div>
        </div>
    <div class="games-list">
        <div class="show-in-multiview-mode-only">
            <div class="horizontally-scrollable">
                <ul class="hlist games game-cards"></ul>
            </div>
            <div class="scroller prev disabled">
                <div class="arrow">
                    <span class="icon-games-carousel-left"></span>
                </div>
            </div>
            <div class="scroller next">
                <div class="arrow">
                    <span class="icon-games-carousel-right"></span>
                </div>
            </div>
        </div>
        <ul class="hlist games game-cards game-cards-grid">
            <div class="abp-spacer "></div>
        </ul>
    </div>
</div>



<div class="games-list-container hidden container-2" id="GamesListContainer11"
     data-sortfilter="11"
     data-gamefilter="1"
     data-minbclevel="0"
     data-numberofrows="1"
     data-personalized-universe-id="0">
    <div class="games-list-header games-filter-changer">
            <h3>Top Rated</h3>

    </div>
        <div class="show-in-multiview-mode-only">
            <div class="see-all-button games-filter-changer btn-fixed-width btn-secondary-xs btn-more">
                See All
            </div>
        </div>
    <div class="games-list">
        <div class="show-in-multiview-mode-only">
            <div class="horizontally-scrollable">
                <ul class="hlist games game-cards"></ul>
            </div>
            <div class="scroller prev disabled">
                <div class="arrow">
                    <span class="icon-games-carousel-left"></span>
                </div>
            </div>
            <div class="scroller next">
                <div class="arrow">
                    <span class="icon-games-carousel-right"></span>
                </div>
            </div>
        </div>
        <ul class="hlist games game-cards game-cards-grid">
            <div class="abp-spacer "></div>
        </ul>
    </div>
</div>



<div class="games-list-container hidden container-3" id="GamesListContainer3"
     data-sortfilter="3"
     data-gamefilter="1"
     data-minbclevel="0"
     data-numberofrows="1"
     data-personalized-universe-id="0">
    <div class="games-list-header games-filter-changer">
            <h3>Featured</h3>

    </div>
        <div class="show-in-multiview-mode-only">
            <div class="see-all-button games-filter-changer btn-fixed-width btn-secondary-xs btn-more">
                See All
            </div>
        </div>
    <div class="games-list">
        <div class="show-in-multiview-mode-only">
            <div class="horizontally-scrollable">
                <ul class="hlist games game-cards"></ul>
            </div>
            <div class="scroller prev disabled">
                <div class="arrow">
                    <span class="icon-games-carousel-left"></span>
                </div>
            </div>
            <div class="scroller next">
                <div class="arrow">
                    <span class="icon-games-carousel-right"></span>
                </div>
            </div>
        </div>
        <ul class="hlist games game-cards game-cards-grid">
            <div class="abp-spacer "></div>
        </ul>
    </div>
</div>



<div class="games-list-container hidden container-4" id="GamesListContainer16"
     data-sortfilter="16"
     data-gamefilter="1"
     data-minbclevel="0"
     data-numberofrows="1"
     data-personalized-universe-id="0">
    <div class="games-list-header games-filter-changer">
            <h3>Recommended</h3>

    </div>
        <div class="show-in-multiview-mode-only">
            <div class="see-all-button games-filter-changer btn-fixed-width btn-secondary-xs btn-more">
                See All
            </div>
        </div>
    <div class="games-list">
        <div class="show-in-multiview-mode-only">
            <div class="horizontally-scrollable">
                <ul class="hlist games game-cards"></ul>
            </div>
            <div class="scroller prev disabled">
                <div class="arrow">
                    <span class="icon-games-carousel-left"></span>
                </div>
            </div>
            <div class="scroller next">
                <div class="arrow">
                    <span class="icon-games-carousel-right"></span>
                </div>
            </div>
        </div>
        <ul class="hlist games game-cards game-cards-grid">
            <div class="abp-spacer "></div>
        </ul>
    </div>
</div>



<div class="games-list-container hidden container-6" id="GamesListContainer2"
     data-sortfilter="2"
     data-gamefilter="1"
     data-minbclevel="0"
     data-numberofrows="1"
     data-personalized-universe-id="0">
    <div class="games-list-header games-filter-changer">
            <h3>Top Favorite</h3>

    </div>
        <div class="show-in-multiview-mode-only">
            <div class="see-all-button games-filter-changer btn-fixed-width btn-secondary-xs btn-more">
                See All
            </div>
        </div>
    <div class="games-list">
        <div class="show-in-multiview-mode-only">
            <div class="horizontally-scrollable">
                <ul class="hlist games game-cards"></ul>
            </div>
            <div class="scroller prev disabled">
                <div class="arrow">
                    <span class="icon-games-carousel-left"></span>
                </div>
            </div>
            <div class="scroller next">
                <div class="arrow">
                    <span class="icon-games-carousel-right"></span>
                </div>
            </div>
        </div>
        <ul class="hlist games game-cards game-cards-grid">
            <div class="abp-spacer "></div>
        </ul>
    </div>
</div>



<div class="games-list-container hidden container-7" id="GamesListContainer6"
     data-sortfilter="6"
     data-gamefilter="0"
     data-minbclevel="0"
     data-numberofrows="1"
     data-personalized-universe-id="0">
    <div class="games-list-header games-filter-changer">
            <h3>My Recent</h3>

    </div>
        <div class="show-in-multiview-mode-only">
            <div class="see-all-button games-filter-changer btn-fixed-width btn-secondary-xs btn-more">
                See All
            </div>
        </div>
    <div class="games-list">
        <div class="show-in-multiview-mode-only">
            <div class="horizontally-scrollable">
                <ul class="hlist games game-cards"></ul>
            </div>
            <div class="scroller prev disabled">
                <div class="arrow">
                    <span class="icon-games-carousel-left"></span>
                </div>
            </div>
            <div class="scroller next">
                <div class="arrow">
                    <span class="icon-games-carousel-right"></span>
                </div>
            </div>
        </div>
        <ul class="hlist games game-cards game-cards-grid">
            <div class="abp-spacer "></div>
        </ul>
    </div>
</div>



<div class="games-list-container hidden container-8" id="GamesListContainer5"
     data-sortfilter="5"
     data-gamefilter="0"
     data-minbclevel="0"
     data-numberofrows="1"
     data-personalized-universe-id="0">
    <div class="games-list-header games-filter-changer">
            <h3>My Favorite</h3>

    </div>
        <div class="show-in-multiview-mode-only">
            <div class="see-all-button games-filter-changer btn-fixed-width btn-secondary-xs btn-more">
                See All
            </div>
        </div>
    <div class="games-list">
        <div class="show-in-multiview-mode-only">
            <div class="horizontally-scrollable">
                <ul class="hlist games game-cards"></ul>
            </div>
            <div class="scroller prev disabled">
                <div class="arrow">
                    <span class="icon-games-carousel-left"></span>
                </div>
            </div>
            <div class="scroller next">
                <div class="arrow">
                    <span class="icon-games-carousel-right"></span>
                </div>
            </div>
        </div>
        <ul class="hlist games game-cards game-cards-grid">
            <div class="abp-spacer "></div>
        </ul>
    </div>
</div>



<div class="games-list-container hidden container-9" id="GamesListContainer10"
     data-sortfilter="10"
     data-gamefilter="1"
     data-minbclevel="0"
     data-numberofrows="1"
     data-personalized-universe-id="0">
    <div class="games-list-header games-filter-changer">
            <h3>Purchased</h3>

    </div>
        <div class="show-in-multiview-mode-only">
            <div class="see-all-button games-filter-changer btn-fixed-width btn-secondary-xs btn-more">
                See All
            </div>
        </div>
    <div class="games-list">
        <div class="show-in-multiview-mode-only">
            <div class="horizontally-scrollable">
                <ul class="hlist games game-cards"></ul>
            </div>
            <div class="scroller prev disabled">
                <div class="arrow">
                    <span class="icon-games-carousel-left"></span>
                </div>
            </div>
            <div class="scroller next">
                <div class="arrow">
                    <span class="icon-games-carousel-right"></span>
                </div>
            </div>
        </div>
        <ul class="hlist games game-cards game-cards-grid">
            <div class="abp-spacer "></div>
        </ul>
    </div>
</div>



<div class="games-list-container hidden container-10" id="GamesListContainer17"
     data-sortfilter="17"
     data-gamefilter="1"
     data-minbclevel="0"
     data-numberofrows="1"
     data-personalized-universe-id="0">
    <div class="games-list-header games-filter-changer">
            <h3>Friend Activity</h3>

    </div>
        <div class="show-in-multiview-mode-only">
            <div class="see-all-button games-filter-changer btn-fixed-width btn-secondary-xs btn-more">
                See All
            </div>
        </div>
    <div class="games-list">
        <div class="show-in-multiview-mode-only">
            <div class="horizontally-scrollable">
                <ul class="hlist games game-cards"></ul>
            </div>
            <div class="scroller prev disabled">
                <div class="arrow">
                    <span class="icon-games-carousel-left"></span>
                </div>
            </div>
            <div class="scroller next">
                <div class="arrow">
                    <span class="icon-games-carousel-right"></span>
                </div>
            </div>
        </div>
        <ul class="hlist games game-cards game-cards-grid">
            <div class="abp-spacer "></div>
        </ul>
    </div>
</div>



<div class="games-list-container hidden container-11" id="GamesListContainer9"
     data-sortfilter="9"
     data-gamefilter="1"
     data-minbclevel="0"
     data-numberofrows="1"
     data-personalized-universe-id="0">
    <div class="games-list-header games-filter-changer">
            <h3>Top Paid</h3>

    </div>
        <div class="show-in-multiview-mode-only">
            <div class="see-all-button games-filter-changer btn-fixed-width btn-secondary-xs btn-more">
                See All
            </div>
        </div>
    <div class="games-list">
        <div class="show-in-multiview-mode-only">
            <div class="horizontally-scrollable">
                <ul class="hlist games game-cards"></ul>
            </div>
            <div class="scroller prev disabled">
                <div class="arrow">
                    <span class="icon-games-carousel-left"></span>
                </div>
            </div>
            <div class="scroller next">
                <div class="arrow">
                    <span class="icon-games-carousel-right"></span>
                </div>
            </div>
        </div>
        <ul class="hlist games game-cards game-cards-grid">
            <div class="abp-spacer "></div>
        </ul>
    </div>
</div>



<div class="games-list-container hidden container-12" id="GamesListContainer14"
     data-sortfilter="14"
     data-gamefilter="1"
     data-minbclevel="0"
     data-numberofrows="1"
     data-personalized-universe-id="0">
    <div class="games-list-header games-filter-changer">
            <h3>Builders Club</h3>

    </div>
        <div class="show-in-multiview-mode-only">
            <div class="see-all-button games-filter-changer btn-fixed-width btn-secondary-xs btn-more">
                See All
            </div>
        </div>
    <div class="games-list">
        <div class="show-in-multiview-mode-only">
            <div class="horizontally-scrollable">
                <ul class="hlist games game-cards"></ul>
            </div>
            <div class="scroller prev disabled">
                <div class="arrow">
                    <span class="icon-games-carousel-left"></span>
                </div>
            </div>
            <div class="scroller next">
                <div class="arrow">
                    <span class="icon-games-carousel-right"></span>
                </div>
            </div>
        </div>
        <ul class="hlist games game-cards game-cards-grid">
            <div class="abp-spacer "></div>
        </ul>
    </div>
</div>



<div class="games-list-container hidden container-13" id="GamesListContainer19"
     data-sortfilter="19"
     data-gamefilter="1"
     data-minbclevel="0"
     data-numberofrows="1"
     data-personalized-universe-id="0">
    <div class="games-list-header games-filter-changer">
            <h3>Popular in VR</h3>

    </div>
        <div class="show-in-multiview-mode-only">
            <div class="see-all-button games-filter-changer btn-fixed-width btn-secondary-xs btn-more">
                See All
            </div>
        </div>
    <div class="games-list">
        <div class="show-in-multiview-mode-only">
            <div class="horizontally-scrollable">
                <ul class="hlist games game-cards"></ul>
            </div>
            <div class="scroller prev disabled">
                <div class="arrow">
                    <span class="icon-games-carousel-left"></span>
                </div>
            </div>
            <div class="scroller next">
                <div class="arrow">
                    <span class="icon-games-carousel-right"></span>
                </div>
            </div>
        </div>
        <ul class="hlist games game-cards game-cards-grid">
            <div class="abp-spacer "></div>
        </ul>
    </div>
</div>


            <!-- on page search results container-->
            <div class="games-list-container hidden search-results-container" id="SearchResultsContainer">
                <div class="games-list-header">
                    <h3>Results for <span class="search-query-text"></span></h3>
                </div>
                <div class="games-list">
                    <ul class="list-item game-cards"></ul>
                    <div class="abp-spacer "></div>
                </div>

            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(function() {

        Roblox.SearchBox = {};
        Roblox.SearchBox.Resources = {
            //<sl:translate>
            search: "Search",
            zeroResults: "No Search Results Found"
            //</sl:translate>
        };
        Roblox.GamesPageContainerBehavior.Resources = {
            //<sl:translate>
            pageTitle: "Games - ROBLOX"
            //</sl:translate>
        };

        var defaultGamesListsCsv = "1,8,11,3,16,18";
        Roblox.GamesPageContainerBehavior.FilterValueToGamesListsIdSuffixMapping = {"default": defaultGamesListsCsv.split(',')};

        Roblox.GamesPageContainerBehavior.IsUserLoggedIn = <?php echo $loggedin2; ?>;
        Roblox.GamesPageContainerBehavior.adRefreshRateMilliSeconds = 3000;
        Roblox.GamesPageContainerBehavior.MinimumNumberOfGamesForPersonalizedByLikedToAppear = 1;
        Roblox.GamesPageContainerBehavior.DeviceTypeId = 1;
        Roblox.GamesPageContainerBehavior.isCreateNewAd = true;
        Roblox.GamesPageContainerBehavior.setIntervalId = null;
        Roblox.GamesListBehavior.RefreshAdsInGamesPageEnabled = true;
        Roblox.GamesListBehavior.isUserEligibleForMultirowFirstSort = false;

    })

</script>

            
        </div>
            </div> 

            <?php $site->robloxHtml("Footer"); ?>


</div> 



<div id="usernotifications-data-model"
     class="hidden"
     data-notificationsdomain="https://realtime.<?php echo $url; ?>/"
     data-notificationstestinterval="5000"
     data-notificationsmaxconnectiontime="43200000">
</div>    <script type="text/javascript">
        var Roblox = Roblox || {};
        Roblox.ChatTemplates = {
            ChatBarTemplate: "chat-bar",
            AbuseReportTemplate: "chat-abuse-report",
            DialogTemplate: "chat-dialog",
            FriendsSelectionTemplate: "chat-friends-selection",
            GroupDialogTemplate: "chat-group-dialog",
            NewGroupTemplate: "chat-new-group",
            DialogMinimizeTemplate: "chat-dialog-minimize",
            ChatPlaceholderTemplate: "chat-placeholder"
        };
        Roblox.Chat = {
            SoundFile: "//static.rbxcdn.com/Chat/sound/chatsound.mp3"
        };
        Roblox.Party = {};
        Roblox.Party.SetGoogleAnalyticsCallback = function () {
            RobloxLaunch._GoogleAnalyticsCallback = function() { var isInsideRobloxIDE = 'website'; if (Roblox && Roblox.Client && Roblox.Client.isIDE && Roblox.Client.isIDE()) { isInsideRobloxIDE = 'Studio'; };GoogleAnalyticsEvents.FireEvent(['Plugin Location', 'Launch Attempt', isInsideRobloxIDE]);GoogleAnalyticsEvents.FireEvent(['Plugin', 'Launch Attempt', 'Play']);EventTracker.fireEvent('GameLaunchAttempt_Win32', 'GameLaunchAttempt_Win32_Plugin'); if (typeof Roblox.GamePlayEvents != 'undefined') { Roblox.GamePlayEvents.SendClientStartAttempt(null, play_placeId); }  }; 
        };

    </script>


<?php echo $site->robloxHtml("Chat"); ?>

    <script type="text/javascript">function urchinTracker() {}</script>


<?php echo $site->robloxHtml("PlaceLauncherPanel"); ?>

<div id="ProtocolHandlerStartingDialog" style="display:none;">
    <div class="modalPopup ph-modal-popup">
        <div class="ph-modal-header">

        </div>
        <div class="ph-logo-row">
            <img src="//images.rbxcdn.com/5d600a0b1cab7177c05f0d1777599158.svg.gzip" width="90" height="90" alt="R" />
        </div>
        <div class="ph-areyouinstalleddialog-content">
            <p class="larger-font-size">
                ROBLOX is now loading. Get ready to play!
            </p>
            <div class="ph-startingdialog-spinner-row">
                <img src="//images.rbxcdn.com/4bed93c91f909002b1f17f05c0ce13d1.gif" width="82" height="24" />
            </div>
        </div>
    </div>
</div>
<div id="ProtocolHandlerAreYouInstalled" style="display:none;">
    <div class="modalPopup ph-modal-popup">
        <div class="ph-modal-header">
            <span class="icon-close simplemodal-close"></span>
        </div>
        <div class="ph-logo-row">
            <img src="//images.rbxcdn.com/5d600a0b1cab7177c05f0d1777599158.svg.gzip" width="90" height="90" alt="R" />
        </div>
        <div class="ph-areyouinstalleddialog-content">
            <p class="larger-font-size">
                You're moments away from getting into the game!
            </p>
            <div>
                <button type="button" class="btn btn-primary-md" id="ProtocolHandlerInstallButton">
                    Download and Install ROBLOX
                </button>
            </div>
            <div class="small">
                <a href="https://en.help.roblox.com/hc/en-us/articles/204473560" class="text-name" target="_blank">Click here for help</a>
            </div>

        </div>
    </div>
</div>
<div id="ProtocolHandlerClickAlwaysAllowed" class="ph-clickalwaysallowed" style="display:none;">
    <p class="larger-font-size">
        <span class="icon-moreinfo"></span>
        Check <b>Remember my choice</b> and click
            <img src="//images.rbxcdn.com/7c8d7a39b4335931221857cca2b5430b.png" alt="Launch Application" />
        in the dialog box above to join games faster in the future!
    </p>
</div>


    <div id="videoPrerollPanel" style="display:none">
        <div id="videoPrerollTitleDiv">
            Gameplay sponsored by:
        </div>
        <div id="content">
            <video id="contentElement" style="width:0; height:0;" />
        </div>
        <div id="videoPrerollMainDiv"></div>
        <div id="videoPrerollCompanionAd">
            
        </div>
        <div id="videoPrerollLoadingDiv">
            Loading <span id="videoPrerollLoadingPercent">0%</span> - <span id="videoPrerollMadStatus" class="MadStatusField">Starting game...</span><span id="videoPrerollMadStatusBackBuffer" class="MadStatusBackBuffer"></span>
            <div id="videoPrerollLoadingBar">
                <div id="videoPrerollLoadingBarCompleted">
                </div>
            </div>
        </div>
        <div id="videoPrerollJoinBC">
            <span>Get more with Builders Club!</span>
            <a href="https://www.roblox.com/premium/membership?ctx=preroll" target="_blank" class="btn-medium btn-primary" id="videoPrerollJoinBCButton">Join Builders Club</a>
        </div>
    </div>   
    <script type="text/javascript">
        $(function () {
            var videoPreRollDFP = Roblox.VideoPreRollDFP;
            if (videoPreRollDFP) {
                var customTargeting = Roblox.VideoPreRollDFP.customTargeting;
                videoPreRollDFP.showVideoPreRoll = false;
                videoPreRollDFP.loadingBarMaxTime = 33000;
                videoPreRollDFP.videoLoadingTimeout = 11000;
                videoPreRollDFP.videoPlayingTimeout = 41000;
                videoPreRollDFP.videoLogNote = "BuildersClub";
                videoPreRollDFP.logsEnabled = true;
                videoPreRollDFP.excludedPlaceIds = "32373412";
                videoPreRollDFP.adUnit = "/1015347/VideoPreroll";
                videoPreRollDFP.adTime = 15;
                videoPreRollDFP.isSwfPreloaderEnabled = true;
                videoPreRollDFP.isPrerollShownEveryXMinutesEnabled = true;
                videoPreRollDFP.isAgeTargetingEnabled = true;
                videoPreRollDFP.isAgeOrSegmentTargetingEnabled = true;
                customTargeting.userAge = "17";
                customTargeting.userAgeOrSegment = "17";
                customTargeting.userGender = "Male";
                customTargeting.gameGenres = "";
                customTargeting.environment = "Production";
                customTargeting.adTime = "15";
                customTargeting.PLVU = false;
                $(videoPreRollDFP.checkEligibility);
            }
        });
    </script>                                                     


<div id="GuestModePrompt_BoyGirl" class="Revised GuestModePromptModal" style="display:none;">
    <div class="simplemodal-close">
        <a class="ImageButton closeBtnCircle_20h" style="cursor: pointer; margin-left:455px;top:7px; position:absolute;"></a>
    </div>
    <div class="Title">
        Choose Your Avatar
    </div>
    <div style="min-height: 275px; background-color: white;">
        <div style="clear:both; height:25px;"></div>

        <div style="text-align: center;">
            <div class="VisitButtonsGuestCharacter VisitButtonBoyGuest" style="float:left; margin-left:45px;"></div>
            <div class="VisitButtonsGuestCharacter VisitButtonGirlGuest" style="float:right; margin-right:45px;"></div>
        </div>
        <div style="clear:both; height:25px;"></div>
        <div class="RevisedFooter">
            <div style="width:200px;margin:10px auto 0 auto;">
                <a href="https://www.roblox.com/?returnUrl=https%3A%2F%2Fwww.roblox.com%2Fgames%2F%3FSortFilter%3Ddefault%26TimeFilter%3D0%26GenreFilter%3D1"><div class="RevisedCharacterSelectSignup"></div></a>
                <a class="HaveAccount" href="https://www.roblox.com/newlogin?returnUrl=https%3A%2F%2Fwww.roblox.com%2Fgames%2F%3FSortFilter%3Ddefault%26TimeFilter%3D0%26GenreFilter%3D1">I have an account</a>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function checkRobloxInstall() {
             return RobloxLaunch.CheckRobloxInstall('/install/download.aspx');
    }

</script>
    <div id="InstallationInstructions" class="" style="display:none;">
        <div class="ph-installinstructions">
            <div class="ph-modal-header">
                    <span class="icon-close simplemodal-close"></span>
                    <h3>Thanks for playing ROBLOX</h3>
            </div>
            <div class="ph-installinstructions-body">


        <div class="ph-install-step ph-installinstructions-step1-of4">
            <h1>1</h1>
            <p class="larger-font-size">Click RobloxPlayerLauncher.exe to run the ROBLOX installer, which just downloaded via your web browser.</p>
            <img width="230" height="180" src="//images.rbxcdn.com/8b0052e4ff81d8e14f19faff2a22fcf7.png" />
        </div>
        <div class="ph-install-step ph-installinstructions-step2-of4">
            <h1>2</h1>
            <p class="larger-font-size">Click <strong>Run</strong> when prompted by your computer to begin the installation process.</p>
            <img width="230" height="180" src="//images.rbxcdn.com/4a3f96d30df0f7879abde4ed837446c6.png" />
        </div>
        <div class="ph-install-step ph-installinstructions-step3-of4">
            <h1>3</h1>
            <p class="larger-font-size">Click <strong>Ok</strong> once you've successfully installed ROBLOX.</p>
            <img width="230" height="180" src="//images.rbxcdn.com/6e23e4971ee146e719fb1abcb1d67d59.png" />
        </div>
        <div class="ph-install-step ph-installinstructions-step4-of4">
            <h1>4</h1>
            <p class="larger-font-size">After installation, click <strong>Play</strong> below to join the action!</p>
            <div class="VisitButton VisitButtonContinueGLI">
                <a class="btn btn-primary-lg disabled">Play</a>
            </div>
        </div>

            </div>
            <div class="small">
                The ROBLOX installer should download shortly. If it doesn’t, start the <a href="#" onclick="Roblox.ProtocolHandlerClientInterface.startDownload(); return false;">download now.</a>
            </div>
        </div>
    </div>
    <div class="InstallInstructionsImage" data-modalwidth="970" style="display:none;"></div>


<div id="pluginObjDiv" style="height:1px;width:1px;visibility:hidden;position: absolute;top: 0;"></div>
<iframe id="downloadInstallerIFrame" style="visibility:hidden;height:0;width:1px;position:absolute"></iframe>

<?php $site->robloxHtml("JS_1"); ?>

    <div id="push-notification-registrar-settings" data-notificationshost="https://notifications.roblox.com" data-reregistrationinterval="28800000"></div>
    <div id="push-notification-registration-ui-settings" data-promptintervals="[86400000]" data-notificationsdomain="https://notifications.roblox.com" data-userid="81956425"></div>
    <script type="text/template" id="push-notifications-initial-global-prompt-template">
        <div class="push-notifications-global-prompt">
            <div class="alert-info push-notifications-global-prompt-site-wide-body">
                <div class="push-notifications-prompt-content">
                    <h5>
                        <span class="push-notifications-prompt-text">
                            Can we send you notifications on this computer?
                        </span>
                    </h5>
                </div>
                <div class="push-notifications-prompt-actions">
                    <button type="button" class="btn-fixed-width btn-control-xs push-notifications-prompt-accept">Notify Me</button>
                    <span class="icon-close-white push-notifications-dismiss-prompt"></span>
                </div>
            </div>
        </div>
    </script>
    <script type="text/template" id="push-notifications-permissions-prompt-template">
        <div class="modal fade" id="push-notifications-permissions-prompt-modal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog rbx-modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">
                                <span class="icon-close"></span>
                            </span>
                            <span class="sr-only">Close</span>
                        </button>
                        <h4>Enable Desktop Push Notifications</h4>
                    </div>
                    <div class="modal-body">
                        <div>
                            Now just click <strong>Allow</strong> in your browser, and we'll start sending you push notifications!
                        </div>
                        <div class="push-notifications-permissions-prompt-instructional-image">
                                <img width="380" height="250" src="//static.rbxcdn.com/images/Notifications/chrome-permissions-prompt-windows-20160509.png" />
                        </div>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>
    </script>
    <script type="text/template" id="push-notifications-permissions-disabled-instruction-template">
        <div class="modal fade" id="push-notifications-permissions-disabled-instruction-modal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog rbx-modal-dialog">
                <div class="modal-content ph-installinstructions">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">
                                <span class="icon-close"></span>
                            </span>
                            <span class="sr-only">Close</span>
                        </button>
                        <h4>Turn Push Notifications Back On</h4>
                    </div>
                    <div class="ph-installinstructions-body">
                        <div class="ph-install-step ph-installinstructions-step1-of3">
                            <h1>1</h1>
                            <p class="larger-font-size push-notifications-modal-step-instruction">Click the green lock next to the URL bar to open up your site permissions.</p>
                            <img width="270" height="139" src="//static.rbxcdn.com/images/Notifications/chrome-permissions-unblock-step1-20160401.png">
                        </div>
                        <div class="ph-install-step ph-installinstructions-step2-of3">
                            <h1>2</h1>
                            <p class="larger-font-size push-notifications-modal-step-instruction">Click the drop-down arrow next to Notifications in the <strong>Permissions</strong> tab.</p>
                            <img width="270" height="229" src="//static.rbxcdn.com/images/Notifications/chrome-permissions-unblock-step2-20160401.png">
                        </div>
                        <div class="ph-install-step ph-installinstructions-step3-of3">
                            <h1>3</h1>
                            <p class="larger-font-size push-notifications-modal-step-instruction">Select <strong>Always allow on this site</strong> to turn notifications back on.</p>
                            <img width="270" height="229" src="//static.rbxcdn.com/images/Notifications/chrome-permissions-unblock-step3-20160401.png">
                        </div>
                    </div>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>
    </script>
    <script type="text/template" id="push-notifications-successfully-enabled-template">
        <div class="push-notifications-global-prompt">
            <div class="alert-system-feedback">
                <div class="alert alert-success">
                    Push notifications have been enabled!
                </div>
            </div>
        </div>
    </script>
    <script type="text/template" id="push-notifications-successfully-disabled-template">
        <div class="push-notifications-global-prompt">
            <div class="alert-system-feedback">
                <div class="alert alert-success">
                    Push notifications have been disabled.
                </div>
            </div>
        </div>
    </script>

    <script>
        var _comscore = _comscore || [];
        _comscore.push({ c1: "2", c2: "6035605", c3: "", c4: "", c15: "Over13" });

        (function() {
            var s = document.createElement("script"), el = document.getElementsByTagName("script")[0];
            s.async = true;
            s.src = (document.location.protocol == "https:" ? "https://sb" : "//b") + ".scorecardresearch.com/beacon.js";
            el.parentNode.insertBefore(s, el);
        })();
    </script>
    <noscript>
        <img src="//b.scorecardresearch.com/p?c1=2&c2=&c3=&c4=&c5=&c6=&c15=&cv=2.0&cj=1"/>