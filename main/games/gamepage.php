<?php
    include 'C:/xampp/htdocs/configuration/global.php';
    $site->LoginState(false, false);

    if(isset($_GET['id']))
    {
        $placeid = (int)$_GET['id'];
        if($site->getPlace($placeid))
        {
            $place = $site->getPlace($placeid);
        } else if($site->getGame($placeid)) {
            $game = $site->getGame($placeid);
            $place = $site->getPlace($game['startPlace']);
        }
    } else {
        exit();
    }
?>



<!DOCTYPE html>
<!--[if IE 8]><html class="ie8" ng-app="robloxApp"><![endif]-->
<!--[if gt IE 8]><!-->
<html>
<!--<![endif]-->
<head>

    <!-- MachineID: WEB191 -->
    <title><?php echo htmlspecialchars($place['gamename']); ?> - ROBLOX</title>
    <?php $site->robloxHtml("HTMLStarterPack"); ?>

    <link rel="canonical" href="https://www.<?php echo $url; ?>/games/<?php echo $place['id']; ?>/<?php echo htmlspecialchars($place['gamename']); ?>"/>
    

    
<link rel="stylesheet" href="https://web.archive.org/web/20160530175231cs_/http://static.rbxcdn.com/css/page___47b31b53b20be8ca61e216736b6e53ef_m.css/fetch"/>

    
    

    
    <script type="text/javascript" src="//web.archive.org/web/20160530175231js_/http://ajax.aspnetcdn.com/ajax/4.0/1/MicrosoftAjax.js"></script>
<script type="text/javascript">window.Sys || document.write("<script type='text/javascript' src='/js/Microsoft/MicrosoftAjax.js'><\/script>")</script>
<script type="text/javascript" src="//web.archive.org/web/20160530175231js_/http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.1.min.js"></script>
<script type="text/javascript">window.jQuery || document.write("<script type='text/javascript' src='/js/jquery/jquery-1.11.1.js'><\/script>")</script>
<script type="text/javascript" src="//web.archive.org/web/20160530175231js_/http://ajax.aspnetcdn.com/ajax/jquery.migrate/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript">window.jQuery || document.write("<script type='text/javascript' src='/js/jquery/jquery-migrate-1.2.1.js'><\/script>")</script>


    
    <script type="text/javascript" src="https://web.archive.org/web/20160530175231js_/http://js.rbxcdn.com/3546f3053a4d1804430cfda9ebfe98f5.js"></script>


    
    
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
        <link href="https://web.archive.org/web/20160530175231im_/http://images.rbxcdn.com/7aee41db80c1071f60377c3575a0ed87.ico" rel="icon"/>

<script type="text/javascript">
    var Roblox = Roblox || {};
    Roblox.AdsHelper = Roblox.AdsHelper || {};
    Roblox.AdsLibrary = Roblox.AdsLibrary || {};

    Roblox.AdsHelper.toggleAdsSlot = function (slotId, GPTRandomSlotIdentifier) {
        var gutterAdsEnabled = false;
        if (gutterAdsEnabled) {
            googletag.display(GPTRandomSlotIdentifier);
            return;
        }
        
        if (typeof slotId !== 'undefined' && slotId && slotId.length > 0) {
            var slotElm = $("#"+slotId);
            if (slotElm.is(":visible")) {
                googletag.display(GPTRandomSlotIdentifier);
            }else {
                var adParam = Roblox.AdsLibrary.adsParameters[slotId];
                if (adParam) {
                    adParam.template = slotElm.html();
                    slotElm.empty();
                }
            }
        }
    }
</script><script type="text/javascript">
    $(function () {
        Roblox.JSErrorTracker.initialize({ 'suppressConsoleError': true});
    });
</script>
<!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <script type="text/javascript">

        var _gaq = _gaq || [];

            window.GoogleAnalyticsDisableRoblox2 = true;
        _gaq.push(['b._setAccount', 'UA-486632-1']);
        _gaq.push(['b._setCampSourceKey', 'rbx_source']);
        _gaq.push(['b._setCampMediumKey', 'rbx_medium']);
        _gaq.push(['b._setCampContentKey', 'rbx_campaign']);

            _gaq.push(['b._setDomainName', '<?php echo $url; ?>']);

            _gaq.push(['b._setCustomVar', 1, 'Visitor', 'Anonymous', 2]);
                _gaq.push(['b._setPageGroup', 1, 'GameDetail']);
    _gaq.push(['b._trackPageview']);


        _gaq.push(['c._setAccount', 'UA-26810151-2']);
            _gaq.push(['c._setDomainName', '<?php echo $url; ?>']);
                    _gaq.push(['c._setPageGroup', 1, 'GameDetail']);

        (function () {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://web.archive.org/web/20160530175231/https://ssl' : 'https://web.archive.org/web/20160530175231/http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script>

    
<script type="text/javascript">
            if (Roblox && Roblox.EventStream) {
                Roblox.EventStream.Init("https://ecsv2.<?php echo $url; ?>/www/e.png",
                    "https://ecsv2.<?php echo $url; ?>/www/e.png",
                    "https://ecsv2.<?php echo $url; ?>/pe?t=studio",
                    "https://ecsv2.<?php echo $url; ?>/pe?t=diagnostic");
            }
        </script>



<script type="text/javascript">
    if (Roblox && Roblox.PageHeartbeatEvent) {
        Roblox.PageHeartbeatEvent.Init([2,8,20,60]);
    }
</script>        <script type="text/javascript">
if (typeof(Roblox) === "undefined") { Roblox = {}; }
Roblox.Endpoints = Roblox.Endpoints || {};
Roblox.Endpoints.Urls = Roblox.Endpoints.Urls || {};
Roblox.Endpoints.Urls['/api/item.ashx'] = 'https://www.<?php echo $url; ?>/api/item.ashx';
Roblox.Endpoints.Urls['/asset/'] = 'https://assetgame.<?php echo $url; ?>/asset/';
Roblox.Endpoints.Urls['/client-status/set'] = 'https://www.<?php echo $url; ?>/client-status/set';
Roblox.Endpoints.Urls['/client-status'] = 'https://www.<?php echo $url; ?>/client-status';
Roblox.Endpoints.Urls['/game/'] = 'https://assetgame.<?php echo $url; ?>/game/';
Roblox.Endpoints.Urls['/game-auth/getauthticket'] = 'https://www.<?php echo $url; ?>/game-auth/getauthticket';
Roblox.Endpoints.Urls['/game/edit.ashx'] = 'https://assetgame.<?php echo $url; ?>/game/edit.ashx';
Roblox.Endpoints.Urls['/game/getauthticket'] = 'https://assetgame.<?php echo $url; ?>/game/getauthticket';
Roblox.Endpoints.Urls['/game/placelauncher.ashx'] = 'https://assetgame.<?php echo $url; ?>/game/placelauncher.ashx';
Roblox.Endpoints.Urls['/game/preloader'] = 'https://assetgame.<?php echo $url; ?>/game/preloader';
Roblox.Endpoints.Urls['/game/report-stats'] = 'https://assetgame.<?php echo $url; ?>/game/report-stats';
Roblox.Endpoints.Urls['/game/report-event'] = 'https://assetgame.<?php echo $url; ?>/game/report-event';
Roblox.Endpoints.Urls['/game/updateprerollcount'] = 'https://assetgame.<?php echo $url; ?>/game/updateprerollcount';
Roblox.Endpoints.Urls['/login/default.aspx'] = 'https://www.<?php echo $url; ?>/login/default.aspx';
Roblox.Endpoints.Urls['/my/character.aspx'] = 'https://www.<?php echo $url; ?>/my/character.aspx';
Roblox.Endpoints.Urls['/my/money.aspx'] = 'https://www.<?php echo $url; ?>/my/money.aspx';
Roblox.Endpoints.Urls['/chat/chat'] = 'https://www.<?php echo $url; ?>/chat/chat';
Roblox.Endpoints.Urls['/presence/users'] = 'https://www.<?php echo $url; ?>/presence/users';
Roblox.Endpoints.Urls['/presence/user'] = 'https://www.<?php echo $url; ?>/presence/user';
Roblox.Endpoints.Urls['/friends/list'] = 'https://www.<?php echo $url; ?>/friends/list';
Roblox.Endpoints.Urls['/navigation/getCount'] = 'https://www.<?php echo $url; ?>/navigation/getCount';
Roblox.Endpoints.Urls['/catalog/browse.aspx'] = 'https://www.<?php echo $url; ?>/catalog/browse.aspx';
Roblox.Endpoints.Urls['/catalog/html'] = 'https://search.<?php echo $url; ?>/catalog/html';
Roblox.Endpoints.Urls['/catalog/json'] = 'https://search.<?php echo $url; ?>/catalog/json';
Roblox.Endpoints.Urls['/catalog/contents'] = 'https://search.<?php echo $url; ?>/catalog/contents';
Roblox.Endpoints.Urls['/catalog/lists.aspx'] = 'https://search.<?php echo $url; ?>/catalog/lists.aspx';
Roblox.Endpoints.Urls['/asset-hash-thumbnail/image'] = 'https://assetgame.<?php echo $url; ?>/asset-hash-thumbnail/image';
Roblox.Endpoints.Urls['/asset-hash-thumbnail/json'] = 'https://assetgame.<?php echo $url; ?>/asset-hash-thumbnail/json';
Roblox.Endpoints.Urls['/asset-thumbnail-3d/json'] = 'https://assetgame.<?php echo $url; ?>/asset-thumbnail-3d/json';
Roblox.Endpoints.Urls['/asset-thumbnail/image'] = 'https://assetgame.<?php echo $url; ?>/asset-thumbnail/image';
Roblox.Endpoints.Urls['/asset-thumbnail/json'] = 'https://assetgame.<?php echo $url; ?>/asset-thumbnail/json';
Roblox.Endpoints.Urls['/asset-thumbnail/url'] = 'https://assetgame.<?php echo $url; ?>/asset-thumbnail/url';
Roblox.Endpoints.Urls['/asset/request-thumbnail-fix'] = 'https://assetgame.<?php echo $url; ?>/asset/request-thumbnail-fix';
Roblox.Endpoints.Urls['/avatar-thumbnail-3d/json'] = 'https://www.<?php echo $url; ?>/avatar-thumbnail-3d/json';
Roblox.Endpoints.Urls['/avatar-thumbnail/image'] = 'https://www.<?php echo $url; ?>/avatar-thumbnail/image';
Roblox.Endpoints.Urls['/avatar-thumbnail/json'] = 'https://www.<?php echo $url; ?>/avatar-thumbnail/json';
Roblox.Endpoints.Urls['/avatar-thumbnails'] = 'https://www.<?php echo $url; ?>/avatar-thumbnails';
Roblox.Endpoints.Urls['/avatar/request-thumbnail-fix'] = 'https://www.<?php echo $url; ?>/avatar/request-thumbnail-fix';
Roblox.Endpoints.Urls['/bust-thumbnail/json'] = 'https://www.<?php echo $url; ?>/bust-thumbnail/json';
Roblox.Endpoints.Urls['/group-thumbnails'] = 'https://www.<?php echo $url; ?>/group-thumbnails';
Roblox.Endpoints.Urls['/groups/getprimarygroupinfo.ashx'] = 'https://www.<?php echo $url; ?>/groups/getprimarygroupinfo.ashx';
Roblox.Endpoints.Urls['/headshot-thumbnail/json'] = 'https://www.<?php echo $url; ?>/headshot-thumbnail/json';
Roblox.Endpoints.Urls['/item-thumbnails'] = 'https://www.<?php echo $url; ?>/item-thumbnails';
Roblox.Endpoints.Urls['/outfit-thumbnail/json'] = 'https://www.<?php echo $url; ?>/outfit-thumbnail/json';
Roblox.Endpoints.Urls['/place-thumbnails'] = 'https://www.<?php echo $url; ?>/place-thumbnails';
Roblox.Endpoints.Urls['/thumbnail/asset/'] = 'https://www.<?php echo $url; ?>/thumbnail/asset/';
Roblox.Endpoints.Urls['/thumbnail/avatar-headshot'] = 'https://www.<?php echo $url; ?>/thumbnail/avatar-headshot';
Roblox.Endpoints.Urls['/thumbnail/avatar-headshots'] = 'https://www.<?php echo $url; ?>/thumbnail/avatar-headshots';
Roblox.Endpoints.Urls['/thumbnail/user-avatar'] = 'https://www.<?php echo $url; ?>/thumbnail/user-avatar';
Roblox.Endpoints.Urls['/thumbnail/resolve-hash'] = 'https://www.<?php echo $url; ?>/thumbnail/resolve-hash';
Roblox.Endpoints.Urls['/thumbnail/place'] = 'https://www.<?php echo $url; ?>/thumbnail/place';
Roblox.Endpoints.Urls['/thumbnail/get-asset-media'] = 'https://www.<?php echo $url; ?>/thumbnail/get-asset-media';
Roblox.Endpoints.Urls['/thumbnail/remove-asset-media'] = 'https://www.<?php echo $url; ?>/thumbnail/remove-asset-media';
Roblox.Endpoints.Urls['/thumbnail/set-asset-media-sort-order'] = 'https://www.<?php echo $url; ?>/thumbnail/set-asset-media-sort-order';
Roblox.Endpoints.Urls['/thumbnail/place-thumbnails'] = 'https://www.<?php echo $url; ?>/thumbnail/place-thumbnails';
Roblox.Endpoints.Urls['/thumbnail/place-thumbnails-partial'] = 'https://www.<?php echo $url; ?>/thumbnail/place-thumbnails-partial';
Roblox.Endpoints.Urls['/thumbnail_holder/g'] = 'https://www.<?php echo $url; ?>/thumbnail_holder/g';
Roblox.Endpoints.Urls['/users/{id}/profile'] = 'https://www.<?php echo $url; ?>/users/{id}/profile';
Roblox.Endpoints.Urls['/service-workers/push-notifications'] = 'https://www.<?php echo $url; ?>/service-workers/push-notifications';
Roblox.Endpoints.Urls['/notification-stream/notification-stream-data'] = 'https://www.<?php echo $url; ?>/notification-stream/notification-stream-data';
Roblox.Endpoints.Urls['/api/friends/acceptfriendrequest'] = 'https://www.<?php echo $url; ?>/api/friends/acceptfriendrequest';
Roblox.Endpoints.Urls['/api/friends/declinefriendrequest'] = 'https://www.<?php echo $url; ?>/api/friends/declinefriendrequest';
Roblox.Endpoints.addCrossDomainOptionsToAllRequests = true;
</script>

    <script type="text/javascript">
if (typeof(Roblox) === "undefined") { Roblox = {}; }
Roblox.Endpoints = Roblox.Endpoints || {};
Roblox.Endpoints.Urls = Roblox.Endpoints.Urls || {};
</script>

</head>
<body id="rbx-body" class="" data-performance-relative-value="0.5" data-internal-page-name="GameDetail" data-send-event-percentage="0.01">

    <div id="roblox-linkify" data-enabled="true" data-regex="(https?\:\/\/)?(?:www\.)?([a-z0-9\-]{2,}\.)*(((m|de|www|web|api|blog|wiki|help|corp|polls|bloxcon|developer|devforum|forum)\.roblox\.com|robloxlabs\.com)|(www\.shoproblox\.com))((\/[A-Za-z0-9-+&amp;@#\/%?=~_|!:,.;]*)|(\b|\s))" data-regex-flags="gm"></div>

<div id="image-retry-data" data-image-retry-max-times="10" data-image-retry-timer="1500">
</div>
<div id="http-retry-data" data-http-retry-max-timeout="8000" data-http-retry-base-timeout="1000">
</div>
    
    


<div id="fb-root"></div>

<div id="wrap" class="wrap no-gutter-ads logged-out" data-gutter-ads-enabled="false">


<?php $site->robloxHtml("Navigation"); ?>


<!-- LEFT NAV MENU -->

<script type="text/javascript">
    (function() {
        if (Roblox && Roblox.Performance) {
            Roblox.Performance.setPerformanceMark("navigation_end");
        }
    })();
</script>

    <div class="container-main    ">
            <script type="text/javascript">
                if (top.location != self.location) {
                    top.location = self.location.href;
                }
            </script>
        <noscript><div class="SystemAlert"><div class="alert-info" role="alert">Please enable Javascript to use all the features on this site.</div></div></noscript>
        <div class="content  ">

                                        <div id="Leaderboard-Abp" class="abp leaderboard-abp">
                    

<iframe name="Roblox_GameDetail_Top_728x90" allowtransparency="true" frameborder="0" height="110" scrolling="no" src="//www.<?php echo $url; ?>/userads/1" width="728" data-js-adtype="iframead"></iframe>

                </div>
            
<div id="game-detail-page" class="row page-content  ">
    <div class="col-xs-12 section game-main-content">
        <div class="game-thumb-container">
            <script>
    var Roblox = Roblox || {};
    Roblox.Carousel = function () {
        var carouselId = "#carousel-game-details";
        var checkedForVideo = false;
        var isMobile = false;

        var initialize = function () {
            // acquire isMobile setting from DOM
            isMobile = $(carouselId).data('is-mobile');

            // set up carousel
            if(!isMobile) {
                $(carouselId).carousel({
                    interval: 6000,
                    pause: "hover"
                });
            } else {
                // do not cycle automatically on mobile because user might be playing video
                $(carouselId).carousel({
                    interval: false,
                    pause: "hover"
                });
            }


            // bindings
            $(carouselId)
                .on("slide.bs.carousel", function () {
                    // pause ALL the videos
                    Roblox.Carousel.pauseAllVideos();
                    // restart the carousel sliding
                    $(carouselId).carousel('cycle');
                })
                .hover(
                    function () {
                        $(this).addClass("hover");
                    },
                    function () {
                        $(this).removeClass("hover");
                    }
                );

            // hide controls when there's only one slide
            if ($(carouselId + " .item").length < 2) {
                $(carouselId).find(".carousel-control").css("display", "none");
            }

            $(document).on("playButton:gamePlayIntent", function () {
                // we pressed the play button - stop playing the video
                Roblox.Carousel.pauseAllVideos();
            });

            Roblox.Carousel.setUpYouTubeAPI();

            // retry thumbnails in carousel
            $(function () {
                $(carouselId + " .item span").loadRobloxThumbnails();
            });
        }

        var setUpYouTubeAPI = function () {
            var tag = document.createElement('script');

            tag.src = "https://www.youtube.com/iframe_api";
            var firstScriptTag = document.getElementsByTagName('script')[0];
            firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);


        }

        var toggleVideo = function (state) {
            var div = $('.flex-video');
            if(div.length > 0){
                var iframe = div.find('iframe')[0].contentWindow;
                var func = state == 'hide' ? 'pauseVideo' : 'playVideo';
                iframe.postMessage('{"event":"command","func":"' + func + '","args":""}', '*');
            }
        }

        var pauseVideoAtIndex = function (idx) {
            if (rbxplayer && rbxplayer.length > 0 && !isMobile) {
                try {
                    rbxplayer[idx].pauseVideo();
                } catch (e) {
                    // tried to pause before player was ready
                }

            } else {
                return false;
            }
        }

        var playVideoAtIndex = function (idx) {
            if(rbxplayer && rbxplayer.length > 0 && rbxplayer[idx] && !isMobile) {
                rbxplayer[idx].playVideo();
                return true;
            } else {
                return false;
            }
        }

        var pauseAllVideos = function () {
            // pause ALL the videos
            if (rbxplayer && rbxplayer.length > 0) {
                var rbxplayerlen = rbxplayer.length;
                for (var i = 0; i < rbxplayerlen; i++) {
                    Roblox.Carousel.pauseVideoAtIndex(i);
                }
            }
        }

        var checkForVideo = function () {
            if(checkedForVideo) {
                return false;
            }
            var carousel = $(carouselId);
            carousel.find('.item').each(function (idx, val) {
                if ($(val).find('.flex-video').length > 0) {
                    carousel.carousel(idx);
                    carousel.carousel("pause");
                    var successfulPlay = Roblox.Carousel.playVideoAtIndex(0);
                    checkedForVideo = successfulPlay;
                    return false; // stop
                } else {
                    return true; // keep going
                }
            });
        }
        var onPlayerReady = function () {
            // This first moment get the video and auto-play it
            var autoplay = $(carouselId).data('is-video-autoplayed-on-ready');
            if (autoplay && !isMobile) {
                Roblox.Carousel.checkForVideo();
            }
        }
        var onPlayerPlaying = function () {
            // We are playing the video. Stop the carousel.
            var carousel = $(carouselId);
            carousel.carousel("pause");
        }


        return {
            initialize: initialize,
            toggleVideo: toggleVideo,
            checkForVideo: checkForVideo,
            setUpYouTubeAPI: setUpYouTubeAPI,
            onPlayerReady: onPlayerReady,
            onPlayerPlaying: onPlayerPlaying,
            pauseVideoAtIndex: pauseVideoAtIndex,
            playVideoAtIndex: playVideoAtIndex,
            pauseAllVideos: pauseAllVideos
        }

    }();

    // For YouTube API. Must be global.

    var rbxplayer = [];
    function onYouTubeIframeAPIReady() {
        var carouselId = "#carousel-game-details";
        $(carouselId).find(".flex-video").each(function (idx, el) {
            youTubeId = $(el).find("iframe").attr("id");
            rbxplayer[rbxplayer.length] = new YT.Player(youTubeId, {});
        });

        // listen for postMessage from YouTube
        $(window).on("message", function (e) {
            var originalData = e.originalEvent.data;

            // data is not JSON
            if (originalData.charAt(0) != "{") {
                return ;
            }
            var data = $.parseJSON(originalData);

            if (data.event == "onReady") {
                Roblox.Carousel.onPlayerReady();
            }
            if(data.event == "infoDelivery" && data.info.playerState && data.info.playerState == 1) {
                Roblox.Carousel.onPlayerPlaying();
            }
        });
    }


    $(document).ready(function () {
        Roblox.Carousel.initialize();
    });
</script>



<div id="carousel-game-details" class="carousel slide" data-ride="carousel" data-is-video-autoplayed-on-ready="true" data-is-mobile="false">
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">


            <div class="item active">
<span><img class="carousel-thumb" src="https://web.archive.org/web/20160530175231im_/http://t0.rbxcdn.com/11998c248196566fbdaf6e93f4e73260"/></span>            </div>
    </div>
    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-game-details" role="button" data-slide="prev">
        <span class="icon-carousel-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-game-details" role="button" data-slide="next">
        <span class="icon-carousel-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


        </div>
        <div class="game-calls-to-action">

            <div class="game-title-container">
                <h2 class="game-name" title="Dragon Ball Battle Ground's 4 (Testing Phrase)">Dragon Ball Battle Ground&#39;s 4 (Testing Phrase)</h2>
                <div class="game-creator"><span class="text-label">By</span> <a class="text-name" href="https://web.archive.org/web/20160530175231/https://www.<?php echo $url; ?>/users/58847228/profile">Thehauntedhathaway</a></div>
            </div>
            <div class="game-play-buttons" data-autoplay="false">



                            <div id="MultiplayerVisitButton" class="VisitButton VisitButtonPlay" placeid="<?php echo $place['id']; ?>" data-action="play" data-is-membership-level-ok="true">
                                <a class="btn-primary-lg">Play</a>
                            </div>



<script type="text/javascript">
    Roblox = Roblox || {};

    Roblox.BCUpsellModal = function () {
        var resources = {
            //<sl:translate>
            title: "Builders Club Only",
            body: "This is a premium feature only available to our Builders Club members.",
            accept: "Upgrade Now"
            //</sl:translate>
        };

        var open = function () {
            var options = {
                titleText: Roblox.BCUpsellModal.Resources.title,
                bodyContent: Roblox.BCUpsellModal.Resources.body,
                footerText: "",
                acceptText: Roblox.BCUpsellModal.Resources.accept,
                declineText: Roblox.Resources.GenericConfirmation.No,
                acceptColor: Roblox.GenericConfirmation.green,
                onAccept: function () { window.location.href = '/premium/membership?ctx=bc-only-game'; },
                imageUrl: 'https://web.archive.org/web/20160530175231/http://images.rbxcdn.com/43ac54175f3f3cd403536fedd9170c10.png'
            };

            Roblox.GenericConfirmation.open(
                options
            );
        };

        return {
            open: open,
            Resources:resources
        };
    } ();
</script>
<script type="text/javascript">
    var play_placeId = <?php echo $place['id']; ?>;
    function fireEventAction(action) {
        RobloxEventManager.triggerEvent('rbx_evt_popup_action', { action: action });
    }
	
    $(function () { $('.VisitButtonPlay').click(function () {play_placeId=$(this).attr('placeid');Roblox.CharacterSelect.placeid = play_placeId;Roblox.CharacterSelect.show();});$('#game-context-menu').on('click touchstart','.VisitButtonBuild', function () {RobloxLaunch._GoogleAnalyticsCallback = function() { var isInsideRobloxIDE = 'website'; if (Roblox && Roblox.Client && Roblox.Client.isIDE && Roblox.Client.isIDE()) { isInsideRobloxIDE = 'Studio'; };GoogleAnalyticsEvents.FireEvent(['Plugin Location', 'Launch Attempt', isInsideRobloxIDE]);GoogleAnalyticsEvents.FireEvent(['Plugin', 'Launch Attempt', 'Build']);EventTracker.fireEvent('GameLaunchAttempt_Unknown', 'GameLaunchAttempt_Unknown_Plugin'); if (typeof Roblox.GamePlayEvents != 'undefined') { Roblox.GamePlayEvents.SendClientStartAttempt(null, play_placeId); }  }; play_placeId = (typeof $(this).attr('placeid') === 'undefined') ? play_placeId : $(this).attr('placeid'); Roblox.Client.WaitForRoblox(function() { window.location = '/Login/Default.aspx?ReturnUrl=http%3a%2f%2fwww.<?php echo $url; ?>%2fgames%2f<?php echo $place['id']; ?>%2fDragon-Ball-Battle-Grounds-4-Testing-Phrase' }); return false;});$('#game-context-menu').on('click touchstart','.VisitButtonEdit', function () {RobloxLaunch._GoogleAnalyticsCallback = function() { var isInsideRobloxIDE = 'website'; if (Roblox && Roblox.Client && Roblox.Client.isIDE && Roblox.Client.isIDE()) { isInsideRobloxIDE = 'Studio'; };GoogleAnalyticsEvents.FireEvent(['Plugin Location', 'Launch Attempt', isInsideRobloxIDE]);GoogleAnalyticsEvents.FireEvent(['Plugin', 'Launch Attempt', 'Edit']);EventTracker.fireEvent('GameLaunchAttempt_Unknown', 'GameLaunchAttempt_Unknown_Plugin'); if (typeof Roblox.GamePlayEvents != 'undefined') { Roblox.GamePlayEvents.SendClientStartAttempt(null, play_placeId); }  }; play_placeId = (typeof $(this).attr('placeid') === 'undefined') ? play_placeId : $(this).attr('placeid'); Roblox.Client.WaitForRoblox(function() { RobloxLaunch.StartGame('http://assetgame.<?php echo $url; ?>/Game/edit.ashx?PlaceID='+play_placeId+'&upload=', 'edit.ashx', 'https://www.<?php echo $url; ?>/Login/Negotiate.ashx', 'FETCH', true) }); return false;});$('.VisitButtonPersonalServer').click(function () {play_placeId=$(this).attr('placeid');Roblox.CharacterSelect.placeid = play_placeId;Roblox.CharacterSelect.show();});$(document).on('CharacterSelectLaunch', function (event, genderTypeID) { if (genderTypeID == 3) { var isInsideRobloxIDE = 'website'; if (Roblox && Roblox.Client && Roblox.Client.isIDE && Roblox.Client.isIDE()) { isInsideRobloxIDE = 'Studio'; };GoogleAnalyticsEvents.FireEvent(['Plugin Location', 'Launch Attempt', isInsideRobloxIDE]);GoogleAnalyticsEvents.FireEvent(['Plugin', 'Launch Attempt', 'Play']);EventTracker.fireEvent("GameLaunchAttempt_Unknown", "GameLaunchAttempt_Unknown_Plugin"); if (typeof Roblox.GamePlayEvents != 'undefined') { Roblox.GamePlayEvents.SendClientStartAttempt(null, play_placeId); } } else { var isInsideRobloxIDE = 'website'; if (Roblox && Roblox.Client && Roblox.Client.isIDE && Roblox.Client.isIDE()) { isInsideRobloxIDE = 'Studio'; };GoogleAnalyticsEvents.FireEvent(['Plugin Location', 'Launch Attempt', isInsideRobloxIDE]);GoogleAnalyticsEvents.FireEvent(['Plugin', 'Launch Attempt', 'Play']);EventTracker.fireEvent("GameLaunchAttempt_Unknown", "GameLaunchAttempt_Unknown_Plugin"); if (typeof Roblox.GamePlayEvents != 'undefined') { Roblox.GamePlayEvents.SendClientStartAttempt(null, play_placeId); } }play_placeId = (typeof $(this).attr('placeid') === 'undefined') ? play_placeId : $(this).attr('placeid'); Roblox.Client.WaitForRoblox(function() { RobloxLaunch.RequestGame('PlaceLauncherStatusPanel', play_placeId, genderTypeID); }); return false;});}());;

</script>
<script type="text/javascript">
    $(function() {
        Roblox.PlaceItemPurchase = new Roblox.ItemPurchase(function (obj) {
            $(".PurchaseButton[data-item-id="+ obj.AssetID +"]").each(function (index, htmlElem) {
                $("#rbx-place-purchase-required").hide();
                $("#MultiplayerVisitButton").show();
            });
        });

        if("False".toLowerCase() == "true") {
            $(function () {
                $("#rbx-place-purchase-required").on("click", function(e) {
                    Roblox.PlaceItemPurchase.openPurchaseVerificationView(this);
                    return false;
                });
            });
        }
    });
</script>
            </div>


            <ul class="share-rate-favorite">
                

        <li class="favorite-button-container tooltip-container" data-toggle="tooltip" title="" data-original-title="Add to favorites">
            <a>
                
                <span class="icon-favorite " data-toggle-url="/favorite/toggle" data-assetid="<?php echo $place['id']; ?>" data-isguest="True" data-signin-url="https://www.<?php echo $url; ?>/newlogin?returnUrl=%2Fgames%2F<?php echo $place['id']; ?>%2FDragon-Ball-Battle-Grounds-4-Testing-Phrase">
                    
                </span>
                <span title="0" class="text-favorite favoriteCount 0" id="result">0</span>
            </a>
        </li>
 
                
        <li class="voting-panel body" data-asset-id="<?php echo $place['id']; ?>" data-total-up-votes="1" data-total-down-votes="0" data-vote-modal="" data-user-authenticated="<?php echo $loggedin3; ?>">
            <div class="loading"></div>
                <div class="vote-summary">
                    <div class="voting-details">
                        <div class="users-vote ">
                            <div class="upvote">
                                <span class="icon-like "></span>
                                <span id="vote-up-text" title="1" class="vote-text">1</span>
                            </div>
                            <div class="downvote">
                                <span id="vote-down-text" title="0" class="vote-text">0</span>
                                <span class="icon-dislike "></span>
                                
                            </div>
                        </div>
                    </div>
                    <div class="visual-container">
                        <div class="background"></div>
                        <div class="percent"></div>
                    </div>
                </div>
        </li>




<script>
    $(function () {
        Roblox.Voting.Initialize();

        Roblox.Voting.Resources = {
            //<sl:translate>
            emailVerifiedTitle: "Verify Your Email",
            emailVerifiedMessage: "You must verify your email before you can vote. You can verify your email on the <a href='/my/account?confirmemail=1'>Account</a> page.",

            playGameTitle: "Play Game",
            playGameMessage: "You must play the game before you can vote on it.",

            useModelTitle: "Use Model",
            useModelMessage: "You must use this model before you can vote on it.",

            installPluginTitle: "Install Plugin",
            installPluginMessage: "You must install this plugin before you can vote on it.",

            buyGamePassTitle: "Buy Game Pass",
            buyGamePassMessage: "You must own this game pass before you can vote on it.",

            floodCheckThresholdMetTitle: "Slow Down",
            floodCheckThresholdMetMessage: "You're voting too quickly. Come back later and try again.",

            unknownProblemTitle: "Something Broke",
            unknownProblemMessage: "There was an unknown problem voting. Please try again.",

            guestUserTitle: "Login to Vote",
            guestUserMessage: "<div>You must login to vote.</div> <div>Please <a href='/newlogin?returnUrl=%2Fgames%2F<?php echo $place['id']; ?>%2FDragon-Ball-Battle-Grounds-4-Testing-Phrase'>login or register</a> to continue.</div>",
            returnUrl: '/newlogin?returnUrl=%2Fgames%2F<?php echo $place['id']; ?>%2FDragon-Ball-Battle-Grounds-4-Testing-Phrase',

            accountUnderOneDayTitle: "Voter Feedback",
            accountUnderOneDayMessage: "You will be able to vote on Games and Studio Models later, after you've had a chance to experience ROBLOX a bit more. Come back to this page in a couple days.",

            accept: "Verify",
            decline: "Cancel",
            login: "Login"
            //<sl:translate>
        };
    });
</script>

                
                <li class="social-media-share">

                </li><!-- .social-media-share -->
            </ul><!-- .share-rate-favorite-->
        </div>
    </div>

    <div class="col-xs-12 rbx-tabs-horizontal" data-place-id="<?php echo $place['id']; ?>">
        <ul id="horizontal-tabs" class="nav nav-tabs" role="tablist">
            <li id="tab-about" class="rbx-tab tab-about active">
                <a class="rbx-tab-heading" href="#about">
                    <span class="text-lead">About</span>
                </a>
            </li>
            <li id="tab-store" class="rbx-tab tab-store">
                <a class="rbx-tab-heading" href="#store">
                    <span class="text-lead">Store</span>
                </a>
            </li>
                <li id="tab-leaderboards" class="rbx-tab tab-leaderboards">
                    <a class="rbx-tab-heading" href="#leaderboards">
                        <span class="text-lead">Leaderboards</span>
                    </a>
                </li>

            <li id="tab-game-instances" class="rbx-tab tab-game-instances">
                <a class="rbx-tab-heading" href="#game-instances">
                    <span class="text-lead">Servers</span>
                </a>
            </li>
        </ul>
        <div class="tab-content rbx-tab-content">
            <div class="tab-pane active" id="about">
                <div class="section game-about-container">
                    <h3>Description</h3>
                    <div class="section-content">
                        <p class="game-description linkify">the desc feature aint done yet >:C</p>

                        <ul class="game-stats-container">
                            <li class="game-stat">
                                <p class="text-label">Visits</p>
                                <p class="text-lead" title="11">11</p>
                            </li>
                            <li class="game-stat">
                                <p class="text-label">Created</p>
                                <p class="text-lead">10/11/2014</p>
                            </li>
                            <li class="game-stat">
                                <p class="text-label">Updated</p>
                                <p class="text-lead">3/28/2015</p>
                            </li>
                            <li class="game-stat">
                                <p class="text-label">Max Players</p>
                                <p class="text-lead">6</p>
                            </li>
                            <li class="game-stat">
                                <p class="text-label">Genre</p>
                                    <p class="text-lead">
                                        <a class="text-name" href="https://web.archive.org/web/20160530175231/https://www.<?php echo $url; ?>/games?GenreFilter=1">All</a>
                                    </p>
                            </li>
                            <li class="game-stat">
                                <p class="text-label">Allowed Gear types</p>
                                <p class="text-lead stat-gears">
        <span class="icon-nogear" data-toggle="tooltip" data-original-title="No Gear Allowed"></span>


                                </p>
                            </li>
                        </ul>
                        <div class="game-stat-footer">
                                    <span class="text-pastname game-copylocked-footnote">This game is copylocked</span>

                            <span class="game-report-abuse"><a class="text-error" href="https://www.<?php $url; ?>/abusereport/asset?id=<?php echo $place['id']; ?>&amp;RedirectUrl=%2fgames%2f<?php echo $place['id']; ?>%2fDragon-Ball-Battle-Grounds-4-Testing-Phrase">Report Abuse</a></span>
                        </div>
                    </div>
                </div>


    <div id="rbx-vip-servers" class="container-list">
        <div class="container-header">
            <h3>VIP Servers</h3>
            <span class="tooltip-container" data-toggle="tooltip" data-original-title="VIP servers let you play this game privately with friends, clan members, or people you invite!">
                <span class="icon-moreinfo"></span>
            </span>
        </div>
        <div class="rbx-vip-server-item-container">
            <p class="section-content-off">This game does not support <a class="text-link" href="https://web.archive.org/web/20160530175231/http://wiki.<?php echo $url; ?>/index.php?title=VIP_server">VIP Servers</a>.</p>
        </div>
    </div>

<script>
    var Roblox = Roblox || {};

    Roblox.PrivateServers = Roblox.PrivateServers || {};
    //<sl:translate>
    Roblox.PrivateServers.RenewRecurringTitle = "Renew Private Server";
    Roblox.PrivateServers.RenewRecurringBody = "Are you sure you want to enable future payments for your private VIP version of "
    + "Dragon Ball Battle Ground&#39;s 4 (Testing Phrase) by Thehauntedhathaway?<br><br>This VIP Server will start renewing every month at "
    + "<span class=\"icon-robux-16x16\"></span><span class=\"text-robux\">0</span> until you cancel.";
    Roblox.PrivateServers.RenewRecurringAcceptText = "Renew";
    Roblox.PrivateServers.RenewRecurringDeclineText = "Cancel";
    Roblox.PrivateServers.UserProfileAbsoluteUrlPattern = "https://web.archive.org/web/20160530175231/https://www.<?php echo $url; ?>/users/0/profile";
    //<sl:translate>
</script>




                

<div class="section">
    <div id="AjaxCommentsContainer" class="comments-container" data-asset-id="<?php echo $place['id']; ?>" data-total-collection-size="" data-is-user-authenticated="<?php echo $loggedin3; ?>" data-signin-url="https://www.<?php echo $url; ?>/newlogin?returnUrl=%2Fgames%2F<?php echo $place['id']; ?>%2FDragon-Ball-Battle-Grounds-4-Testing-Phrase">
        <h3>Comments</h3>
        <div class="section-content AddAComment">
            <div class="comment-form">
                <form class="form-horizontal ng-pristine ng-valid" role="form">
                    <div class="form-group">
                        <textarea class="form-control input-field rbx-comment-input blur" placeholder="Write a comment!" rows="1"></textarea>
                        <div class="rbx-comment-msgs">
                            <span class="rbx-comment-error text-error"></span>
                            <span class="rbx-comment-count small"></span>
                        </div>
                    </div>
                    <button type="button" class="btn-secondary-md rbx-post-comment">Post Comment</button>
                </form>
            </div>
            <div class="comments vlist">

            </div>
            <div class="comments-item-template">
                <div class="comment-item list-item">
                    <div class="comment-user list-header">
                            <div class="Avatar avatar avatar-headshot-md" data-user-id="comment-author-id" data-image-size="small"></div>

                    </div>
                    <div class="comment-body list-body">
                        <a class="text-link">username</a>
                        <p class="comment-content list-content"> text </p>
                        <span class="xsmall text-date-hint">4 hours ago</span>
                    </div>
                    <div class="comment-controls">
                        <a class="rbx-comment-report-link" href="https://web.archive.org/web/20160530175231/https://www.<?php echo $url; ?>/abusereport/comment?id=%CommentID&amp;amp;redirectUrl=%PageURL" title="Report Abuse"><span class="icon-flag"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="AjaxCommentsMoreButtonContainer" class="ajax-comments-more-button-container">
        <button type="button" class="btn-control-sm rbx-comments-see-more hidden">See More</button>
    </div>
</div>
<script>
    $(document).ready(function () {
        <?php echo $url; ?>ments.Resources = {
            //<sl:translate>
            defaultMessage: 'Write a comment!',
            noCommentsFound: 'No comments found.',
            moreComments: 'More comments',
            sorrySomethingWentWrong: 'Sorry, something went wrong.',
            charactersRemaining: ' characters remaining',
            emailVerifiedABTitle: 'Verify Your Email',
            emailVerifiedABMessage: "You must verify your email before you can comment. You can verify your email on the <a class='text-link' href='https://web.archive.org/web/20160530175231/https://www.<?php echo $url; ?>/my/account?confirmemail=1'>Account</a> page.",
            linksNotAllowedTitle: 'Links Not Allowed',
            linksNotAllowedMessage: 'Comments should be about the item or place on which you are commenting. Links are not permitted.',
            accept: 'Verify',
            decline: 'Cancel',
            tooManyCharacters: 'Too many characters!',
            tooManyNewlines: 'Too many newlines!'
            //</sl:translate>
        };

        <?php echo $url; ?>ments.Limits =
        [
            {
                limit: '10',
                character: "\n",
                message: <?php echo $url; ?>ments.Resources.tooManyNewlines
            },
            {
                limit: '200',
                character: undefined,
                message: <?php echo $url; ?>ments.Resources.tooManyCharacters
            }
        ];

        <?php echo $url; ?>ments.FilterIsEnabled = true;
        <?php echo $url; ?>ments.FilterRegex = "(([a-zA-Z0-9-]+\\.[a-zA-Z]{2,4}[:\\#/\?]+)|([a-zA-Z0-9]\\.[a-zA-Z0-9-]+\\.[a-zA-Z]{2,4}))";
        <?php echo $url; ?>ments.FilterCleanExistingComments = false ;

    <?php echo $url; ?>ments.initialize();
    });
</script>

                
                    <div id="my-recommended-games" class="col-xs-12 container-list games-detail">
                        <div class="container-header">
                            <h3>Recommended Games</h3>
                        </div>
                        
                        

<ul class="hlist game-cards game-cards-sm">


<li class="list-item game-card">
    <div class="game-card-container">
    <a href="https://web.archive.org/web/20160530175231/http://www.<?php echo $url; ?>/games/refer?RecommendationAlgorithm=1&amp;RecommendationSourceId=<?php echo $place['id']; ?>&amp;PlaceId=60835187&amp;Position=1&amp;PageType=GameDetail" class="game-card-link">
        <div class="game-card-thumb-container">
            <img class="game-card-thumb" src="https://web.archive.org/web/20160530175231im_/http://t7.rbxcdn.com/d1e42e4c77cc44da23e049442580a006" alt="[read desc] Zombiecon Anniversary" thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;http://t7.rbxcdn.com/d1e42e4c77cc44da23e049442580a006&quot;,&quot;RetryUrl&quot;:null}" image-retry/>
        </div>
        <div class="text-overflow game-card-name" title="[read desc] Zombiecon Anniversary" ng-non-bindable>
            [read desc] Zombiecon Anniversary
        </div>
        <div class="game-card-name-secondary">
            28 Playing
        </div>
        <div class="game-card-vote">
            <div class="vote-bar">
                <div class="vote-thumbs-up">
                    <span class="icon-thumbs-up"></span>
                </div>
                <div class="vote-container" data-upvotes="15574" data-downvotes="1365" data-voting-processed="false">
                    <div class="vote-background "></div>
                    <div class="vote-percentage"></div>
                    <div class="vote-mask">
                        <div class="segment seg-1"></div>
                        <div class="segment seg-2"></div>
                        <div class="segment seg-3"></div>
                        <div class="segment seg-4"></div>
                    </div>
                </div>
                <div class="vote-thumbs-down">
                    <span class="icon-thumbs-down"></span>
                </div>
            </div>
            <div class="vote-counts">
                <div class="vote-down-count">1,365</div>
                <div class="vote-up-count">15,574</div>

            </div>
        </div>
    </a>
    <span class="game-card-footer">
        <span class="text-label xsmall">By </span>
        <a class="text-link xsmall text-overflow" href="https://web.archive.org/web/20160530175231/https://www.<?php echo $url; ?>/users/1231545/profile">Dinizterz</a>
    </span>
    </div>
</li>



<li class="list-item game-card">
    <div class="game-card-container">
    <a href="https://web.archive.org/web/20160530175231/http://www.<?php echo $url; ?>/games/refer?RecommendationAlgorithm=1&amp;RecommendationSourceId=<?php echo $place['id']; ?>&amp;PlaceId=278736847&amp;Position=2&amp;PageType=GameDetail" class="game-card-link">
        <div class="game-card-thumb-container">
            <img class="game-card-thumb" src="https://web.archive.org/web/20160530175231im_/http://t7.rbxcdn.com/99c044481779e0954c6a9dc3cda1b341" alt="WWE 2K16™" thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;http://t7.rbxcdn.com/99c044481779e0954c6a9dc3cda1b341&quot;,&quot;RetryUrl&quot;:null}" image-retry/>
        </div>
        <div class="text-overflow game-card-name" title="WWE 2K16™" ng-non-bindable>
            WWE 2K16™
        </div>
        <div class="game-card-name-secondary">
            83 Playing
        </div>
        <div class="game-card-vote">
            <div class="vote-bar">
                <div class="vote-thumbs-up">
                    <span class="icon-thumbs-up"></span>
                </div>
                <div class="vote-container" data-upvotes="828" data-downvotes="159" data-voting-processed="false">
                    <div class="vote-background "></div>
                    <div class="vote-percentage"></div>
                    <div class="vote-mask">
                        <div class="segment seg-1"></div>
                        <div class="segment seg-2"></div>
                        <div class="segment seg-3"></div>
                        <div class="segment seg-4"></div>
                    </div>
                </div>
                <div class="vote-thumbs-down">
                    <span class="icon-thumbs-down"></span>
                </div>
            </div>
            <div class="vote-counts">
                <div class="vote-down-count">159</div>
                <div class="vote-up-count">828</div>

            </div>
        </div>
    </a>
    <span class="game-card-footer">
        <span class="text-label xsmall">By </span>
        <a class="text-link xsmall text-overflow" href="https://web.archive.org/web/20160530175231/https://www.<?php echo $url; ?>/users/80384598/profile">iiSpiritwolf23</a>
    </span>
    </div>
</li>



<li class="list-item game-card">
    <div class="game-card-container">
    <a href="https://web.archive.org/web/20160530175231/http://www.<?php echo $url; ?>/games/refer?RecommendationAlgorithm=1&amp;RecommendationSourceId=<?php echo $place['id']; ?>&amp;PlaceId=93595510&amp;Position=3&amp;PageType=GameDetail" class="game-card-link">
        <div class="game-card-thumb-container">
            <img class="game-card-thumb" src="https://web.archive.org/web/20160530175231im_/http://t4.rbxcdn.com/10d84abee4186e60684d8145d06961b9" alt="[Ascended SSJ4 Pass][Old][Dragon Ball Online]" thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;http://t4.rbxcdn.com/10d84abee4186e60684d8145d06961b9&quot;,&quot;RetryUrl&quot;:null}" image-retry/>
        </div>
        <div class="text-overflow game-card-name" title="[Ascended SSJ4 Pass][Old][Dragon Ball Online]" ng-non-bindable>
            [Ascended SSJ4 Pass][Old][Dragon Ball On
        </div>
        <div class="game-card-name-secondary">
            351 Playing
        </div>
        <div class="game-card-vote">
            <div class="vote-bar">
                <div class="vote-thumbs-up">
                    <span class="icon-thumbs-up"></span>
                </div>
                <div class="vote-container" data-upvotes="19202" data-downvotes="2308" data-voting-processed="false">
                    <div class="vote-background "></div>
                    <div class="vote-percentage"></div>
                    <div class="vote-mask">
                        <div class="segment seg-1"></div>
                        <div class="segment seg-2"></div>
                        <div class="segment seg-3"></div>
                        <div class="segment seg-4"></div>
                    </div>
                </div>
                <div class="vote-thumbs-down">
                    <span class="icon-thumbs-down"></span>
                </div>
            </div>
            <div class="vote-counts">
                <div class="vote-down-count">2,308</div>
                <div class="vote-up-count">19,202</div>

            </div>
        </div>
    </a>
    <span class="game-card-footer">
        <span class="text-label xsmall">By </span>
        <a class="text-link xsmall text-overflow" href="https://web.archive.org/web/20160530175231/https://www.<?php echo $url; ?>/users/23826555/profile">SonnyDhaBoss</a>
    </span>
    </div>
</li>



<li class="list-item game-card">
    <div class="game-card-container">
    <a href="https://web.archive.org/web/20160530175231/http://www.<?php echo $url; ?>/games/refer?RecommendationAlgorithm=1&amp;RecommendationSourceId=<?php echo $place['id']; ?>&amp;PlaceId=189707&amp;Position=4&amp;PageType=GameDetail" class="game-card-link">
        <div class="game-card-thumb-container">
            <img class="game-card-thumb" src="https://web.archive.org/web/20160530175231im_/http://t4.rbxcdn.com/32ba85808d2da52d1ac8be5ed5703533" alt="Natural Disaster Survival" thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;http://t4.rbxcdn.com/32ba85808d2da52d1ac8be5ed5703533&quot;,&quot;RetryUrl&quot;:null}" image-retry/>
        </div>
        <div class="text-overflow game-card-name" title="Natural Disaster Survival" ng-non-bindable>
            Natural Disaster Survival
        </div>
        <div class="game-card-name-secondary">
            3,898 Playing
        </div>
        <div class="game-card-vote">
            <div class="vote-bar">
                <div class="vote-thumbs-up">
                    <span class="icon-thumbs-up"></span>
                </div>
                <div class="vote-container" data-upvotes="220543" data-downvotes="16981" data-voting-processed="false">
                    <div class="vote-background "></div>
                    <div class="vote-percentage"></div>
                    <div class="vote-mask">
                        <div class="segment seg-1"></div>
                        <div class="segment seg-2"></div>
                        <div class="segment seg-3"></div>
                        <div class="segment seg-4"></div>
                    </div>
                </div>
                <div class="vote-thumbs-down">
                    <span class="icon-thumbs-down"></span>
                </div>
            </div>
            <div class="vote-counts">
                <div class="vote-down-count">16,981</div>
                <div class="vote-up-count">220,543</div>

            </div>
        </div>
    </a>
    <span class="game-card-footer">
        <span class="text-label xsmall">By </span>
        <a class="text-link xsmall text-overflow" href="https://web.archive.org/web/20160530175231/https://www.<?php echo $url; ?>/users/80254/profile">Stickmasterluke</a>
    </span>
    </div>
</li>



<li class="list-item game-card">
    <div class="game-card-container">
    <a href="https://web.archive.org/web/20160530175231/http://www.<?php echo $url; ?>/games/refer?RecommendationAlgorithm=1&amp;RecommendationSourceId=<?php echo $place['id']; ?>&amp;PlaceId=27478917&amp;Position=5&amp;PageType=GameDetail" class="game-card-link">
        <div class="game-card-thumb-container">
            <img class="game-card-thumb" src="https://web.archive.org/web/20160530175231im_/http://t4.rbxcdn.com/bd991f4c9585e950f8394593b58b409b" alt="Roblox Plants vs. Zombies" thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;http://t4.rbxcdn.com/bd991f4c9585e950f8394593b58b409b&quot;,&quot;RetryUrl&quot;:null}" image-retry/>
        </div>
        <div class="text-overflow game-card-name" title="Roblox Plants vs. Zombies" ng-non-bindable>
            Roblox Plants vs. Zombies
        </div>
        <div class="game-card-name-secondary">
            75 Playing
        </div>
        <div class="game-card-vote">
            <div class="vote-bar">
                <div class="vote-thumbs-up">
                    <span class="icon-thumbs-up"></span>
                </div>
                <div class="vote-container" data-upvotes="14463" data-downvotes="1988" data-voting-processed="false">
                    <div class="vote-background "></div>
                    <div class="vote-percentage"></div>
                    <div class="vote-mask">
                        <div class="segment seg-1"></div>
                        <div class="segment seg-2"></div>
                        <div class="segment seg-3"></div>
                        <div class="segment seg-4"></div>
                    </div>
                </div>
                <div class="vote-thumbs-down">
                    <span class="icon-thumbs-down"></span>
                </div>
            </div>
            <div class="vote-counts">
                <div class="vote-down-count">1,988</div>
                <div class="vote-up-count">14,463</div>

            </div>
        </div>
    </a>
    <span class="game-card-footer">
        <span class="text-label xsmall">By </span>
        <a class="text-link xsmall text-overflow" href="https://web.archive.org/web/20160530175231/https://www.<?php echo $url; ?>/users/8094904/profile">InsanelyLuke</a>
    </span>
    </div>
</li>



<li class="list-item game-card">
    <div class="game-card-container">
    <a href="https://web.archive.org/web/20160530175231/http://www.<?php echo $url; ?>/games/refer?RecommendationAlgorithm=1&amp;RecommendationSourceId=<?php echo $place['id']; ?>&amp;PlaceId=268122365&amp;Position=6&amp;PageType=GameDetail" class="game-card-link">
        <div class="game-card-thumb-container">
            <img class="game-card-thumb" src="https://web.archive.org/web/20160530175231im_/http://t1.rbxcdn.com/41326529cfcd0c05bcc9e7d458e4d711" alt="Life of an Otaku" thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;http://t1.rbxcdn.com/41326529cfcd0c05bcc9e7d458e4d711&quot;,&quot;RetryUrl&quot;:null}" image-retry/>
        </div>
        <div class="text-overflow game-card-name" title="Life of an Otaku" ng-non-bindable>
            Life of an Otaku
        </div>
        <div class="game-card-name-secondary">
            12 Playing
        </div>
        <div class="game-card-vote">
            <div class="vote-bar">
                <div class="vote-thumbs-up">
                    <span class="icon-thumbs-up"></span>
                </div>
                <div class="vote-container" data-upvotes="7134" data-downvotes="679" data-voting-processed="false">
                    <div class="vote-background "></div>
                    <div class="vote-percentage"></div>
                    <div class="vote-mask">
                        <div class="segment seg-1"></div>
                        <div class="segment seg-2"></div>
                        <div class="segment seg-3"></div>
                        <div class="segment seg-4"></div>
                    </div>
                </div>
                <div class="vote-thumbs-down">
                    <span class="icon-thumbs-down"></span>
                </div>
            </div>
            <div class="vote-counts">
                <div class="vote-down-count">679</div>
                <div class="vote-up-count">7,134</div>

            </div>
        </div>
    </a>
    <span class="game-card-footer">
        <span class="text-label xsmall">By </span>
        <a class="text-link xsmall text-overflow" href="https://web.archive.org/web/20160530175231/https://www.<?php echo $url; ?>/users/25455823/profile">YasuYoshida</a>
    </span>
    </div>
</li>



<li class="list-item game-card">
    <div class="game-card-container">
    <a href="https://web.archive.org/web/20160530175231/http://www.<?php echo $url; ?>/games/refer?RecommendationAlgorithm=1&amp;RecommendationSourceId=<?php echo $place['id']; ?>&amp;PlaceId=17470283&amp;Position=7&amp;PageType=GameDetail" class="game-card-link">
        <div class="game-card-thumb-container">
            <img class="game-card-thumb" src="https://web.archive.org/web/20160530175231im_/http://t0.rbxcdn.com/957bf1be705e4e868da8adcd5fa5dc7f" alt="ROBLOX Point - Theme Park " thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;http://t0.rbxcdn.com/957bf1be705e4e868da8adcd5fa5dc7f&quot;,&quot;RetryUrl&quot;:null}" image-retry/>
        </div>
        <div class="text-overflow game-card-name" title="ROBLOX Point - Theme Park " ng-non-bindable>
            ROBLOX Point - Theme Park 
        </div>
        <div class="game-card-name-secondary">
            123 Playing
        </div>
        <div class="game-card-vote">
            <div class="vote-bar">
                <div class="vote-thumbs-up">
                    <span class="icon-thumbs-up"></span>
                </div>
                <div class="vote-container" data-upvotes="16856" data-downvotes="3516" data-voting-processed="false">
                    <div class="vote-background "></div>
                    <div class="vote-percentage"></div>
                    <div class="vote-mask">
                        <div class="segment seg-1"></div>
                        <div class="segment seg-2"></div>
                        <div class="segment seg-3"></div>
                        <div class="segment seg-4"></div>
                    </div>
                </div>
                <div class="vote-thumbs-down">
                    <span class="icon-thumbs-down"></span>
                </div>
            </div>
            <div class="vote-counts">
                <div class="vote-down-count">3,516</div>
                <div class="vote-up-count">16,856</div>

            </div>
        </div>
    </a>
    <span class="game-card-footer">
        <span class="text-label xsmall">By </span>
        <a class="text-link xsmall text-overflow" href="https://web.archive.org/web/20160530175231/https://www.<?php echo $url; ?>/users/486309/profile">StarMarine614</a>
    </span>
    </div>
</li>

</ul>
                    </div>
            </div>
            <div class="tab-pane store" id="store">
                        <p class="section-content-off">
                            This game does not sell any virtual items or power-ups.
                        </p>


                


<script>
    $(function () {
        Roblox.GamePassJSData = { };
        Roblox.GamePassJSData.PlaceID = <?php echo $place['id']; ?>;

        var purchaseConfirmationCallback = function (obj) {
            var originalContainer = $('.PurchaseButton[data-item-id=' + obj.AssetID + ']').parent('.store-card-caption');
            originalContainer.find('.rbx-purchased').hide();
            originalContainer.find('.rbx-item-buy').show();

        };
        Roblox.GamePassItemPurchase = new Roblox.ItemPurchase(purchaseConfirmationCallback);

        $("#store #rbx-game-passes").on("click", ".PurchaseButton", function (e) {
            Roblox.PlaceProductPromotionItemPurchase.openPurchaseVerificationView($(this), 'game-pass');
        });

        $("#store #rbx-game-passes .btn-more").on("click", function (e) {
            $("#rbx-game-passes #rbx-passes-container").toggleClass("collapsed");
        });
    });
</script>


                


<input name="__RequestVerificationToken" type="hidden" value="WwhhnkH1DjeVznhE3yIEAIFFR4uRgyHrKdriVlu8aV9eLKUbZCWolIZ5uZ3HtZoVDi1paGtg2iUWDtPExTK2VAuyvqc1"/>

<script>
    // From DisplayProductPromotions
    $(function() {
        Roblox.PlaceProductPromotion.Resources = {
            //<sl:translate>
            anErrorOccurred: 'An error occurred, please try again.'
            , youhaveAdded: "You have added "
            , toYourGame: " to your game, "
            , youhaveRemoved: "You have removed "
            , fromYourGame: " from your game."
            , ok: "OK"
            , success: "Success!"
            , error: "Error"
            , sorryWeCouldnt: "Sorry, we couldn't remove the item from your game. Please try again."
            , notForSale: "This item is not for sale."
            , rent: "Rent"
            //<sl:translate>
        };

        var purchaseConfirmationCallback = function (obj) {
            var originalContainer = $('.PurchaseButton[data-item-id=' + obj.AssetID + ']').parent('.store-card-caption');
            originalContainer.find('.rbx-purchased').hide();
            originalContainer.find('.rbx-item-buy').show();
            
        };
        Roblox.PlaceProductPromotionItemPurchase = new Roblox.ItemPurchase(purchaseConfirmationCallback);
        Roblox.PlaceProductPromotion.PlaceID = <?php echo $place['id']; ?>;

        $("#store").on("click", ".icon-delete", function(e) {
            var promoId = $(this).data('delete-promotion-id');
            Roblox.PlaceProductPromotion.DeleteGear(promoId);
        });

        $("#store #rbx-game-gear").on("click", ".PurchaseButton", function (e) {
            Roblox.PlaceProductPromotionItemPurchase.openPurchaseVerificationView($(this), 'game-gear');
        });

        $("#store #rbx-game-gear .btn-more").on("click", function (e) {
            $("#rbx-game-gear .rbx-gear-container").toggleClass("collapsed");
        });

    });

</script>

<div id="DeleteProductPromotionModal" class="PurchaseModal">
    <div id="simplemodal-close" class="simplemodal-close">
        <a></a>
    </div>
    <div class="titleBar" style="text-align: center">
    </div>
    <div class="PurchaseModalBody">
        <div class="PurchaseModalMessage">
            <div class="PurchaseModalMessageImage">
                <div class="thumbs-up-green">
                </div>
            </div>
            <div class="PurchaseModalMessageText">
            </div>
        </div>
        <div class="PurchaseModalButtonContainer">
            <div class="ImageButton btn-blue-ok-sharp simplemodal-close"></div>
        </div>
        <div class="PurchaseModalFooter"></div>
    </div>
</div>




            </div>

            <div class="tab-pane" id="leaderboards">
                
                    <div class="col-md-6">
                        

<div id="rbx-leaderboard-container-player" class="section rbx-leaderboard-container rbx-leaderboard-player" data-associated-leaderboard-more="rbx-leaderboard-btn-player">
    <div class="rbx-leaderboard-data" data-distributor-target-id="86355049" data-max="20" data-rank-max="4" data-target-type="0" data-time-filter="1" data-player-id="-1" data-clan-id="-1"></div>
    <div class="rbx-leaderboard-item-template hidden">
        <div class="rbx-leaderboard-item">
            <div class="rank"></div>
            <div class="avatar avatar-headshot-sm"></div>
            <div class="name-and-group"></div>
            <div class="font-fold points"></div>
        </div>
    </div>
    <div class="rbx-popover-content" data-toggle="popover-leaderboard-player">
        <ul class="dropdown-menu" role="menu">
            <li>
                <a data-time-filter="0">Today</a>
            </li>
            <li>
                <a data-time-filter="1">Past Week</a>
            </li>
            <li>
                <a data-time-filter="2">Past Month</a>
            </li>
            <li>
                <a data-time-filter="3">All Time</a>
            </li>
        </ul>
    </div>
    <div class="rbx-leaderboard-header">
        <h3>Players</h3>
        <div class="rbx-leaderboard-controls">
            <div class="rbx-leaderboard-filter">
                <span class="rbx-leaderboard-filtername">Past Week</span>
                <a class="rbx-menu-item" data-toggle="popover" data-bind="popover-leaderboard-player" data-original-title="" title="" data-viewport=".rbx-leaderboard-player" data-placement="left"><span class="icon-sorting" id="rbx-leaderboard-popover-player"></span></a>
            </div>
        </div>

    </div>
    <div class="rbx-leaderboard-my"></div>
    <div class="section-content rbx-leaderboard-items">
        <div class="rbx-leaderboard-more-container rbx-leaderboard-btn-player" data-associated-leaderboard="rbx-leaderboard-player">
            <button type="button" class="btn-control-sm rbx-leaderboard-see-more hidden">
                See More
            </button>
        </div>
        <img class="spinner" src="https://web.archive.org/web/20160530175231im_/http://images.rbxcdn.com/4bed93c91f909002b1f17f05c0ce13d1.gif" alt="loading..."/>
    </div>

</div>

    <script>
        var Roblox = Roblox || {};
        Roblox.Leaderboard = Roblox.Leaderboard || {};
        Roblox.Leaderboard.Resources = {};
        //<sl:translate>
        Roblox.Leaderboard.Resources.ErrorLoading = "Error loading rows.";
        Roblox.Leaderboard.Resources.Loading = "Loading...";
        Roblox.Leaderboard.Resources.GoGetPoints = "You are not yet ranked for this time period. Go earn some Points!";
        //</sl:translate>
    </script>

                    </div>
                    <div class="col-md-6">
                        

<div id="rbx-leaderboard-container-clan" class="section rbx-leaderboard-container rbx-leaderboard-clan" data-associated-leaderboard-more="rbx-leaderboard-btn-clan">
    <div class="rbx-leaderboard-data" data-distributor-target-id="86355049" data-max="20" data-rank-max="4" data-target-type="1" data-time-filter="1" data-player-id="-1" data-clan-id="-1"></div>
    <div class="rbx-leaderboard-item-template hidden">
        <div class="rbx-leaderboard-item">
            <div class="rank"></div>
            <div class="avatar "></div>
            <div class="name-and-group"></div>
            <div class="font-fold points"></div>
        </div>
    </div>
    <div class="rbx-popover-content" data-toggle="popover-leaderboard-clan">
        <ul class="dropdown-menu" role="menu">
            <li>
                <a data-time-filter="0">Today</a>
            </li>
            <li>
                <a data-time-filter="1">Past Week</a>
            </li>
            <li>
                <a data-time-filter="2">Past Month</a>
            </li>
            <li>
                <a data-time-filter="3">All Time</a>
            </li>
        </ul>
    </div>
    <div class="rbx-leaderboard-header">
        <h3>Clans</h3>
        <div class="rbx-leaderboard-controls">
            <div class="rbx-leaderboard-filter">
                <span class="rbx-leaderboard-filtername">Past Week</span>
                <a class="rbx-menu-item" data-toggle="popover" data-bind="popover-leaderboard-clan" data-original-title="" title="" data-viewport=".rbx-leaderboard-clan" data-placement="left"><span class="icon-sorting" id="rbx-leaderboard-popover-clan"></span></a>
            </div>
        </div>

    </div>
    <div class="rbx-leaderboard-my"></div>
    <div class="section-content rbx-leaderboard-items">
        <div class="rbx-leaderboard-more-container rbx-leaderboard-btn-clan" data-associated-leaderboard="rbx-leaderboard-clan">
            <button type="button" class="btn-control-sm rbx-leaderboard-see-more hidden">
                See More
            </button>
        </div>
        <img class="spinner" src="https://web.archive.org/web/20160530175231im_/http://images.rbxcdn.com/4bed93c91f909002b1f17f05c0ce13d1.gif" alt="loading..."/>
    </div>

</div>

    <script>
        var Roblox = Roblox || {};
        Roblox.Leaderboard = Roblox.Leaderboard || {};
        Roblox.Leaderboard.Resources = {};
        //<sl:translate>
        Roblox.Leaderboard.Resources.ErrorLoading = "Error loading rows.";
        Roblox.Leaderboard.Resources.Loading = "Loading...";
        Roblox.Leaderboard.Resources.GoGetPoints = "You are not yet ranked for this time period. Go earn some Points!";
        //</sl:translate>
    </script>

                    </div>

                <script>

                    // lazy load
                    $(".rbx-tab a[href='#leaderboards']").on('shown.bs.tab', function(e) {
                        // e.target newly activated tab
                        // e.relatedTarget previous active tab
                        Roblox.Leaderboard.init();
                    });
                </script>
            </div>

            <div class="tab-pane game-instances" id="game-instances">
                


    
    <div id="rbx-running-games" class="container-list" data-placeid="<?php echo $place['id']; ?>" data-showshutdown data-avatar-headshot-enabled="true">
        <div class="container-header">
            <h3>Running Games</h3>
            <span class="btn-fixed-width btn-control-xs btn-more rbx-running-games-refresh">Refresh</span>
        </div>
        <ul id="rbx-game-server-item-container" class="section rbx-game-server-item-container">
            
        </ul>
        <div class="rbx-running-games-footer">
                <button type="button" class="btn-control-xs btn-full-width rbx-running-games-load-more hidden">Load More</button>

        </div>
        <div class="rbx-game-server-template">
            <li class="section-content rbx-game-server-item">
                <div class="section-header">
                    <div class="link-menu rbx-game-server-menu"></div>
                </div>
                <div class="section-left rbx-game-server-details">
                    <div class="rbx-game-status rbx-game-server-status">x of y players max</div>
                    <div class="rbx-game-server-alert">
                        <span class="icon-remove"></span>Slow Game
                    </div>
                    <a class="btn-full-width btn-control-xs rbx-game-server-join" href="#" data-placeid>Join</a>

                </div>
                <div class="section-right rbx-game-server-players">
                </div>
            </li>
        </div>
    </div>



            </div>
        </div>
    </div>
</div>



<div class="GenericModal modalPopup unifiedModal smallModal" style="display:none;">
    <div class="Title"></div>
    <div class="GenericModalBody">
        <div>
            <div class="ImageContainer">
                <img class="GenericModalImage" alt="generic image"/>
            </div>
            <div class="Message"></div>
        </div>
        <div class="clear"></div>
        <div id="GenericModalButtonContainer" class="GenericModalButtonContainer">
            <a class="ImageButton btn-neutral btn-large roblox-ok">OK</a>
        </div>
    </div>
</div>



<div id="ItemPurchaseAjaxData" data-has-currency-service-error="False" data-currency-service-error-message="" data-authenticateduser-isnull="True" data-user-balance-robux="0" data-user-balance-tickets="0" data-user-bc="0" data-continueshopping-url="http://www.<?php echo $url; ?>/games/<?php echo $place['id']; ?>/Dragon-Ball-Battle-Grounds-4-Testing-Phrase" data-imageurl="http://t0.rbxcdn.com/e9fab548fcb342fead83e223cdb0b1ee" data-alerturl="http://images.rbxcdn.com/b7353602bbf9b927d572d5887f97d452.svg" data-insufficentfundsurl="http://images.rbxcdn.com/b80339ddf867ccfe6ab23a2c263d8000.png" data-builderscluburl="http://images.rbxcdn.com/ae345c0d59b00329758518edc104d573.png">
    
</div>


<div id="ProcessingView" style="display:none">
    <div class="ProcessingModalBody">
        <p style="margin:0px"><img src="https://web.archive.org/web/20160530175231im_/http://images.rbxcdn.com/116db03ed7027c242f773e70a4ed2e68.png" alt="Processing..."/></p>
        <p style="margin:7px 0px">Processing Transaction</p>
    </div>
</div>




<div id="BCOnlyModal" class="modalPopup unifiedModal smallModal" style="display:none;">
    <div style="margin:4px 0px;">
        <span>Builders Club Only</span>
    </div>
    <div class="simplemodal-close">
        <a class="ImageButton closeBtnCircle_20h" style="margin-left:400px;"></a>
    </div>
    <div class="unifiedModalContent" style="padding-top:5px; margin-bottom: 3px; margin-left: 3px; margin-right: 3px">
        <div class="ImageContainer">
            <img class="GenericModalImage BCModalImage" alt="Builder's Club" src="https://web.archive.org/web/20160530175231im_/http://images.rbxcdn.com/ae345c0d59b00329758518edc104d573.png"/>
            <div id="BCMessageDiv" class="BCMessage Message">
                Builders Club membership is required to play in this place.
            </div>
        </div>
        <div style="clear:both;"></div>
        <div style="clear:both;"></div>
        <div class="GenericModalButtonContainer" style="padding-bottom: 13px">
            <div style="text-align:center">
                <a id="BClink" href="https://web.archive.org/web/20160530175231/https://www.<?php echo $url; ?>/premium/membership?ctx=bc-only-item" class="btn-primary btn-large">Upgrade Now</a>
            </div>
            <div style="clear:both;"></div>
        </div>
        <div style="clear:both;"></div>
    </div>
</div>

<script type="text/javascript">
    function showBCOnlyModal(modalId) {
        var modalProperties = { overlayClose: true, escClose: true, opacity: 80, overlayCss: { backgroundColor: "#000" } };
        if (typeof modalId === "undefined")
            $("#BCOnlyModal").modal(modalProperties);
        else
            $("#" + modalId).modal(modalProperties);
    }
    $(document).ready(function () {
        $('#VOID').click(function () {
            showBCOnlyModal("BCOnlyModal");
            return false;
        });
    });
</script>


                <div id="Skyscraper-Adp-Right" class="abp abp-container right-abp">
                    

<iframe name="Roblox_GameDetail_Right_160x600" allowtransparency="true" frameborder="0" height="612" scrolling="no" src="//www.<?php echo $url; ?>/userads/2" width="160" data-js-adtype="iframead"></iframe>

                </div>
            
        </div>
            </div> 

            <?php $site->robloxHtml("Footer"); ?>


</div> 



    <script type="text/javascript">function urchinTracker() {}</script>


    <?php $site->robloxHtml("PlaceLauncherPanel"); ?>
<div id="ProtocolHandlerStartingDialog" style="display:none;">
    <div class="modalPopup ph-modal-popup">
        <div class="ph-modal-header">

        </div>
        <div class="ph-logo-row">
            <img src="https://web.archive.org/web/20160530175231im_/http://images.rbxcdn.com/e060b59b57fdcc7874c820d13fdcee71.svg" width="90" height="90" alt="R"/>
        </div>
        <div class="ph-areyouinstalleddialog-content">
            <p class="larger-font-size">
                ROBLOX is now loading. Get ready to play!
            </p>
            <div class="ph-startingdialog-spinner-row">
                <img src="https://web.archive.org/web/20160530175231im_/http://images.rbxcdn.com/4bed93c91f909002b1f17f05c0ce13d1.gif" width="82" height="24"/>
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
            <img src="https://web.archive.org/web/20160530175231im_/http://images.rbxcdn.com/e060b59b57fdcc7874c820d13fdcee71.svg" width="90" height="90" alt="R"/>
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
                <a href="https://web.archive.org/web/20160530175231/https://en.help.<?php echo $url; ?>/hc/en-us/articles/204473560" class="text-name" target="_blank">Click here for help</a>
            </div>

        </div>
    </div>
</div>
<div id="ProtocolHandlerClickAlwaysAllowed" class="ph-clickalwaysallowed" style="display:none;">
    <p class="larger-font-size">
        <span class="icon-moreinfo"></span>
        Check <b>Remember my choice</b> and click <img src="https://web.archive.org/web/20160530175231im_/http://images.rbxcdn.com/7c8d7a39b4335931221857cca2b5430b.png" alt="Launch Application"/>  in the dialog box above to join games faster in the future!
    </p>
</div>


    <div id="videoPrerollPanel" style="display:none">
        <div id="videoPrerollTitleDiv">
            Gameplay sponsored by:
        </div>
        <div id="videoPrerollMainDiv"></div>
        <div id="videoPrerollCompanionAd"></div>
        <div id="videoPrerollLoadingDiv">
            Loading <span id="videoPrerollLoadingPercent">0%</span> - <span id="videoPrerollMadStatus" class="MadStatusField">Starting game...</span><span id="videoPrerollMadStatusBackBuffer" class="MadStatusBackBuffer"></span>
            <div id="videoPrerollLoadingBar">
                <div id="videoPrerollLoadingBarCompleted">
                </div>
            </div>
        </div>
        <div id="videoPrerollJoinBC">
            <span>Get more with Builders Club!</span>
            <a href="https://web.archive.org/web/20160530175231/https://www.<?php echo $url; ?>/premium/membership?ctx=preroll" target="_blank" class="btn-medium btn-primary" id="videoPrerollJoinBCButton">Join Builders Club</a>
        </div>
    </div>
    <script type="text/javascript">
        $(function () {
            if (Roblox.VideoPreRoll) {
                Roblox.VideoPreRoll.showVideoPreRoll = <?php echo $loggedin2; ?>;
                Roblox.VideoPreRoll.isPrerollShownEveryXMinutesEnabled = true;
                Roblox.VideoPreRoll.loadingBarMaxTime = 33000;
                Roblox.VideoPreRoll.videoOptions.key = "robloxcorporation"; 
                    Roblox.VideoPreRoll.videoOptions.categories = "AgeUnknown,GenderUnknown,All";
                                     Roblox.VideoPreRoll.videoOptions.id = "games";
                Roblox.VideoPreRoll.videoLoadingTimeout = 11000;
                Roblox.VideoPreRoll.videoPlayingTimeout = 41000;
                Roblox.VideoPreRoll.videoLogNote = "Windows";
                Roblox.VideoPreRoll.logsEnabled = true;
                Roblox.VideoPreRoll.excludedPlaceIds = "32373412";
                Roblox.VideoPreRoll.adTime = 15;
                    
                Roblox.VideoPreRoll.specificAdOnPlacePageEnabled = true;
                Roblox.VideoPreRoll.specificAdOnPlacePageId = 192800;
                Roblox.VideoPreRoll.specificAdOnPlacePageCategory = "stooges";
                
                                    
                Roblox.VideoPreRoll.specificAdOnPlacePage2Enabled = true;
                Roblox.VideoPreRoll.specificAdOnPlacePage2Id = 1717;
                Roblox.VideoPreRoll.specificAdOnPlacePage2Category = "lego";
                
                $(Roblox.VideoPreRoll.checkEligibility);
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
                <a href="https://web.archive.org/web/20160530175231/https://www.<?php echo $url; ?>/?returnUrl=http%3A%2F%2Fwww.<?php echo $url; ?>%2Fgames%2F<?php echo $place['id']; ?>%2FDragon-Ball-Battle-Grounds-4-Testing-Phrase"><div class="RevisedCharacterSelectSignup"></div></a>
                <a class="HaveAccount" href="https://web.archive.org/web/20160530175231/https://www.<?php echo $url; ?>/newlogin?returnUrl=http%3A%2F%2Fwww.<?php echo $url; ?>%2Fgames%2F<?php echo $place['id']; ?>%2FDragon-Ball-Battle-Grounds-4-Testing-Phrase">I have an account</a>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function checkRobloxInstall() {
                 window.location = '/install/unsupported.aspx'; return false;
    }

</script>

    <style>
        #win_firefox_install_img .activation {
        }

        #win_firefox_install_img .installation {
            width: 869px;
            height: 331px;
        }

        #mac_firefox_install_img .activation {
        }

        #mac_firefox_install_img .installation {
            width: 250px;
        }

        #win_chrome_install_img .activation {
        }

        #win_chrome_install_img .installation {
        }

        #mac_chrome_install_img .activation {
            width: 250px;
        }

        #mac_chrome_install_img .installation {
        }
    </style>
    <div id="InstallationInstructions" class="modalPopup blueAndWhite" style="display:none;overflow:hidden">
        <a id="CancelButton2" onclick="return Roblox.Client._onCancel();" class="ImageButton closeBtnCircle_35h ABCloseCircle"></a>
        <div style="padding-bottom:10px;text-align:center">
            <br/><br/>
        </div>
    </div>



<div id="pluginObjDiv" style="height:1px;width:1px;visibility:hidden;position: absolute;top: 0;"></div>
<iframe id="downloadInstallerIFrame" style="visibility:hidden;height:0;width:1px;position:absolute"></iframe>

<script type="text/javascript" src="https://web.archive.org/web/20160530175231js_/http://js.rbxcdn.com/1ba208cf31fb5a6a592b902955c8770b.js"></script>

<script type="text/javascript">
    Roblox.Client._skip = '/install/unsupported.aspx';
    Roblox.Client._CLSID = '';
    Roblox.Client._installHost = '';
    Roblox.Client.ImplementsProxy = false;
    Roblox.Client._silentModeEnabled = false;
    Roblox.Client._bringAppToFrontEnabled = false;
    Roblox.Client._currentPluginVersion = '';
    Roblox.Client._eventStreamLoggingEnabled = false;

        
        Roblox.Client._installSuccess = function() {
            if(GoogleAnalyticsEvents){
                GoogleAnalyticsEvents.ViewVirtual('InstallSuccess');
                GoogleAnalyticsEvents.FireEvent(['Plugin','Install Success']);
                if (Roblox.Client._eventStreamLoggingEnabled && typeof Roblox.GamePlayEvents != "undefined") {
                    Roblox.GamePlayEvents.SendInstallSuccess(Roblox.Client._launchMode, play_placeId);
                }
            }
        }
        
    </script>


<div class="ConfirmationModal modalPopup unifiedModal smallModal" data-modal-handle="confirmation" style="display:none;">
    <a class="genericmodal-close ImageButton closeBtnCircle_20h"></a>
    <div class="Title"></div>
    <div class="GenericModalBody">
        <div class="TopBody">
            <div class="ImageContainer roblox-item-image" data-image-size="small" data-no-overlays data-no-click>
                <img class="GenericModalImage" alt="generic image"/>
            </div>
            <div class="Message"></div>
        </div>
        <div class="ConfirmationModalButtonContainer GenericModalButtonContainer">
            <a href id="roblox-confirm-btn"><span></span></a>
            <a href id="roblox-decline-btn"><span></span></a>
        </div>
        <div class="ConfirmationModalFooter">
        
        </div>  
    </div>  
    <script type="text/javascript">
        Roblox = Roblox || {};
        Roblox.Resources = Roblox.Resources || {};
        
        //<sl:translate>
        Roblox.Resources.GenericConfirmation = {
            yes: "Yes",
            No: "No",
            Confirm: "Confirm",
            Cancel: "Cancel"
        };
        //</sl:translate>
    </script>
</div>

<div class="modal-confirmation" data-modal-type="confirmation">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true"><span class="icon-close"></span></span><span class="sr-only">Close</span>
                </button>
                <h5 class="modal-title"></h5>
            </div>

            <div class="modal-body">
                <div class="modal-top-body">
                    <div class="modal-message"></div>
                    <div class="modal-image-container roblox-item-image" data-image-size="medium" data-no-overlays data-no-click>
                        <img class="modal-thumb" alt="generic image"/>
                    </div>
                </div>
                <div class="modal-btns">
                    <a href id="roblox-confirm-btn"><span></span></a>
                    <a href id="roblox-decline-btn"><span></span></a>
                </div>
                <div class="loading modal-processing">
                    <img class="loading-default" src="https://web.archive.org/web/20160530175231im_/http://images.rbxcdn.com/4bed93c91f909002b1f17f05c0ce13d1.gif" alt="Processing..."/>
                </div>
            </div>
            <div class="modal-footer text-footer">

            </div>
        </div>
    </div>
    <script type="text/javascript">
        Roblox = Roblox || {};
        Roblox.Resources = Roblox.Resources || {};

        //<sl:translate>
        Roblox.Resources.Dialog = {
            yes: "Yes",
            No: "No",
            Confirm: "Confirm",
            Cancel: "Cancel"
        };
        //</sl:translate>
    </script>
</div>




<script type="text/javascript">
    var Roblox = Roblox || {};
    Roblox.jsConsoleEnabled = false;
</script>



    <script type="text/javascript">
        $(function () {
            Roblox.CookieUpgrader.domain = '<?php echo $url; ?>';
            Roblox.CookieUpgrader.upgrade("GuestData", { expires: Roblox.CookieUpgrader.thirtyYearsFromNow });
            Roblox.CookieUpgrader.upgrade("RBXSource", { expires: function (cookie) { return Roblox.CookieUpgrader.getExpirationFromCookieValue("rbx_acquisition_time", cookie); } });
            Roblox.CookieUpgrader.upgrade("RBXViralAcquisition", { expires: function (cookie) { return Roblox.CookieUpgrader.getExpirationFromCookieValue("time", cookie); } });
                
                Roblox.CookieUpgrader.upgrade("RBXMarketing", { expires: Roblox.CookieUpgrader.thirtyYearsFromNow });
                
                            
                Roblox.CookieUpgrader.upgrade("RBXSessionTracker", { expires: Roblox.CookieUpgrader.fourHoursFromNow });
                
                            
                Roblox.CookieUpgrader.upgrade("RBXEventTrackerV2", {expires: Roblox.CookieUpgrader.thirtyYearsFromNow});
                
        });
    </script>


    
    <script type="text/javascript" src="https://web.archive.org/web/20160530175231js_/http://js.rbxcdn.com/e0be42c03aea5fbcad75120cd5d5e1ab.js"></script>


    
                <script type="text/javascript" src="https://web.archive.org/web/20160530175231js_/http://js.rbxcdn.com/822491cace41a2d39fd76db6cfd17800.js"></script>


    
    <script type="text/javascript">Roblox.config.externalResources = [];Roblox.config.paths['Pages.Catalog'] = 'https://web.archive.org/web/20160530175231/http://js.rbxcdn.com/c14a216bd7773e7b637b4e6c3c2e619d.js';Roblox.config.paths['Pages.CatalogShared'] = 'https://web.archive.org/web/20160530175231/http://js.rbxcdn.com/398bbec874ae432b21a25c94ce57fc57.js';Roblox.config.paths['Widgets.AvatarImage'] = 'https://web.archive.org/web/20160530175231/http://js.rbxcdn.com/6bac93e9bb6716f32f09db749cec330b.js';Roblox.config.paths['Widgets.DropdownMenu'] = 'https://web.archive.org/web/20160530175231/http://js.rbxcdn.com/7b436bae917789c0b84f40fdebd25d97.js';Roblox.config.paths['Widgets.GroupImage'] = 'https://web.archive.org/web/20160530175231/http://js.rbxcdn.com/33d82b98045d49ec5a1f635d14cc7010.js';Roblox.config.paths['Widgets.HierarchicalDropdown'] = 'https://web.archive.org/web/20160530175231/http://js.rbxcdn.com/3368571372da9b2e1713bb54ca42a65a.js';Roblox.config.paths['Widgets.ItemImage'] = 'https://web.archive.org/web/20160530175231/http://js.rbxcdn.com/8db82e6d725b907e91441b849cc35e47.js';Roblox.config.paths['Widgets.PlaceImage'] = 'https://web.archive.org/web/20160530175231/http://js.rbxcdn.com/f2697119678d0851cfaa6c2270a727ed.js';Roblox.config.paths['Widgets.SurveyModal'] = 'https://web.archive.org/web/20160530175231/http://js.rbxcdn.com/d6e979598c460090eafb6d38231159f6.js';</script>

    
    <script>
        Roblox.XsrfToken.setToken('z3omy57qIOlZ');
    </script>

        <script>
            $(function () {
                Roblox.DeveloperConsoleWarning.showWarning();
            });
        </script>
    <script type="text/javascript">
    $(function () {
        Roblox.JSErrorTracker.initialize({ 'suppressConsoleError': true});
    });
</script>
    

<script type="text/javascript">
    $(function(){
        function trackReturns() {
            function dayDiff(d1, d2) {
                return Math.floor((d1-d2)/86400000);
            }
            if (!localStorage) {
                return false;
            }

            var cookieName = 'RBXReturn';
            var cookieOptions = {expires:9001};
            var cookieStr = localStorage.getItem(cookieName) || "";
            var cookie = {};

            try {
                cookie = JSON.parse(cookieStr);
            } catch (ex) {
                // busted cookie string from old previous version of the code
            }

            try {
                if (typeof cookie.ts === "undefined" || isNaN(new Date(cookie.ts))) {
                    localStorage.setItem(cookieName, JSON.stringify({ ts: new Date().toDateString() }));
                    return false;
                }
            } catch (ex) {
                return false;
            }

            var daysSinceFirstVisit = dayDiff(new Date(), new Date(cookie.ts));
            if (daysSinceFirstVisit == 1 && typeof cookie.odr === "undefined") {
                RobloxEventManager.triggerEvent('rbx_evt_odr', {});
                cookie.odr = 1;
            }
            if (daysSinceFirstVisit >= 1 && daysSinceFirstVisit <= 7 && typeof cookie.sdr === "undefined") {
                RobloxEventManager.triggerEvent('rbx_evt_sdr', {});
                cookie.sdr = 1;
            }
            try {
                localStorage.setItem(cookieName, JSON.stringify(cookie));
            } catch (ex) {
                return false;
            }
        }

        GoogleListener.init();


    
        RobloxEventManager.initialize(true);
        RobloxEventManager.triggerEvent('rbx_evt_pageview');
        trackReturns();
        

    
        RobloxEventManager._idleInterval = 450000;
        RobloxEventManager.registerCookieStoreEvent('rbx_evt_initial_install_start');
        RobloxEventManager.registerCookieStoreEvent('rbx_evt_ftp');
        RobloxEventManager.registerCookieStoreEvent('rbx_evt_initial_install_success');
        RobloxEventManager.registerCookieStoreEvent('rbx_evt_fmp');
        RobloxEventManager.startMonitor();
        

    });

</script>


    
    
    

<script type="text/javascript">
    var Roblox = Roblox || {};
    Roblox.UpsellAdModal = Roblox.UpsellAdModal || {};

    Roblox.UpsellAdModal.Resources = {
        //<sl:translate>
        title: "Remove Ads Like This",
        body: "Builders Club members do not see external ads like these.",
        accept: "Upgrade Now",
        decline: "No, thanks"
        //</sl:translate>
    };
</script>

    
    <script type="text/javascript" src="https://web.archive.org/web/20160530175231js_/http://js.rbxcdn.com/040da35e9a28416e910b07d743d1b9b3.js"></script>
    <script>
        var _comscore = _comscore || [];
        _comscore.push({ c1: "2", c2: "6035605", c3: "", c4: "", c15: "" });

        (function() {
            var s = document.createElement("script"), el = document.getElementsByTagName("script")[0];
            s.async = true;
            s.src = (document.location.protocol == "https:" ? "https://sb" : "http://b") + ".scorecardresearch.com/beacon.js";
            el.parentNode.insertBefore(s, el);
        })();
    </script>
    <noscript>
        <img src="http://b.scorecardresearch.com/p?c1=2&amp;c2=&amp;c3=&amp;c4=&amp;c5=&amp;c6=&amp;c15=&amp;cv=2.0&amp;cj=1"/>
    </noscript>
</body>
</html>