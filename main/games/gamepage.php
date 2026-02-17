<?php
    include 'C:/wamp64/www/configuration/global.php';
    $site->LoginState(false, false);
    $site->invitekey();
    
    if(isset($_GET['id']))
    {
        $placeid = (int)$_GET['id'];
        if($site->getPlace($placeid))
        {
            $place = $site->getPlace($placeid);
            $game = $site->getGame($place['gameId']);
        } else if($site->getGame($placeid)) {
            $game = $site->getGame($placeid);
            $place = $site->getPlace($game['startPlace']);
        } else {
            exit();
        }
        $creator = $site->getUser($place['creatorId']);
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
    <!-- MachineID: WEB194 -->
    <title><?php echo protecc($place['gamename']); ?> - ROBLOX</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,requiresActiveX=true"/>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="ROBLOX Corporation"/>
<meta name="description" content="<?php echo protecc($place['description']); ?>"/>
<meta name="keywords" content="free games, online games, building games, virtual worlds, free mmo, gaming cloud, physics engine"/>
<meta name="apple-itunes-app" content="app-id=431946152"/>
<meta name="google-site-verification" content="KjufnQUaDv5nXJogvDMey4G-Kb7ceUVxTdzcMaP9pCY"/>
    <meta property="og:site_name" content="ROBLOX"/>
    <meta property="og:title" content="<?php echo protecc($place['gamename']); ?>"/>
    <meta property="og:type" content="game"/>
    <meta property="og:url" content="<?php echo $protocol; ?>://www.<?php echo $url; ?>/games/<?php echo $place['id']; ?>/Classic-Crossroads"/>
    <meta property="og:description" content="<?php echo protecc($place['description']); ?>"/>
    <meta property="og:image" content="http://t3.rbxcdn.com/40acb670b0cec702ae7d613f2010acbe"/>
    <meta property="fb:app_id" content="190191627665278">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@ROBLOX">
    <meta name="twitter:title" content="<?php echo protecc($place['gamename']); ?>">
    <meta name="twitter:description" content="<?php echo protecc($place['description']); ?>">
    <meta name="twitter:creator">
    <meta name="twitter:image1" content="http://t3.rbxcdn.com/40acb670b0cec702ae7d613f2010acbe"/>
    <meta name="twitter:app:country" content="US">
    <meta name="twitter:app:name:iphone" content="ROBLOX Mobile">
    <meta name="twitter:app:id:iphone" content="431946152">
    <meta name="twitter:app:url:iphone" content="robloxmobile://placeID=<?php echo $place['id']; ?>">
    <meta name="twitter:app:name:ipad" content="ROBLOX Mobile">
    <meta name="twitter:app:id:ipad" content="431946152">
    <meta name="twitter:app:url:ipad" content="robloxmobile://placeID=<?php echo $place['id']; ?>">
    <meta name="twitter:app:name:googleplay" content="ROBLOX">
    <meta name="twitter:app:id:googleplay" content="com.roblox.client">
    <meta name="twitter:app:url:googleplay" content="robloxmobile://placeID=<?php echo $place['id']; ?>"/>


        <link href="http://images.rbxcdn.com/7aee41db80c1071f60377c3575a0ed87.ico" rel="icon"/>
                <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet" type="text/css">

    <link rel="canonical" href="<?php echo $protocol; ?>://www.<?php echo $url; ?>/games/<?php echo $place['id']; ?>/Classic-Crossroads"/>
    
    
<link rel="stylesheet" href="/CSS/LeanBaseStyle.css"/>


            
<link rel="stylesheet" href="/CSS/rbxcdn/Games.css"/>

    
    
   <?php $site->robloxHtml("JS_2"); ?>

</head>
<body id="rbx-body" class="" data-performance-relative-value="0.005" data-internal-page-name="GameDetail" data-send-event-percentage="0.01">

    <div id="roblox-linkify" data-enabled="true" data-regex="(https?\:\/\/)?(?:www\.)?([a-z0-9\-]{2,}\.)*(((m|de|www|web|api|blog|wiki|help|corp|polls|bloxcon|developer|devforum|forum)\.roblox\.com|robloxlabs\.com)|(www\.shoproblox\.com))((\/[A-Za-z0-9-+&amp;@#\/%?=~_|!:,.;]*)|(\b|\s))" data-regex-flags="gm" data-as-http-regex="((blog|wiki|[^.]help|corp|polls|bloxcon|developer|devforum)\.roblox\.com|robloxlabs\.com)"></div>

<div id="image-retry-data" data-image-retry-max-times="10" data-image-retry-timer="1500">
</div>
<div id="http-retry-data" data-http-retry-max-timeout="0" data-http-retry-base-timeout="0">
</div>

    


<div id="fb-root"></div>

<div id="wrap" class="wrap no-gutter-ads logged-out" data-gutter-ads-enabled="false">



<?php $site->robloxHtml("Navigation"); ?>

<script type="text/javascript">
    var Roblox = Roblox || {};
    (function() {
        if (Roblox && Roblox.Performance) {
            Roblox.Performance.setPerformanceMark("navigation_end");
        }
    })();
</script>

    <div class="container-main  
                 
                
                
                ">
                <?php $site->robloxHtml("Alerts"); ?>
            <script type="text/javascript">
                if (top.location != self.location) {
                    top.location = self.location.href;
                }
            </script>
        <noscript><div><div class="alert-info" role="alert">Please enable Javascript to use all the features on this site.</div></div></noscript>
        <div class="content ">

                                        <div id="Leaderboard-Abp" class="abp leaderboard-abp">
                    

<iframe name="Roblox_GameDetail_Top_728x90" allowtransparency="true" frameborder="0" height="110" scrolling="no" src="/userads/1" width="728" data-js-adtype="iframead"></iframe>

                </div>
            
<div id="game-detail-page" class="row page-content">

    



    <div class="col-xs-12 section-content game-main-content">
        <div class="game-thumb-container">
            <script>
    var Roblox = Roblox || {};
    Roblox.Carousel = function () {
        var carouselId = "#carousel-game-details";
        var checkedForVideo = false;
        var isMobile = <?php echo var_export($site->IsMobile(), 1); ?>;

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

            tag.src = "http://www.youtube.com/iframe_api";
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



<div id="carousel-game-details" class="carousel slide" data-ride="carousel" data-is-video-autoplayed-on-ready="true" data-is-mobile="<?php echo var_export($site->IsMobile(), 1); ?>">
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">


            <div class="item active">
<span><img class="carousel-thumb" src="THISISTHUMBNAIL"/></span>            </div>
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


        <?php if(($loggedin == "true") && $user['id'] == $creator['id']) {?>
<div id="game-context-menu">
    <a class="rbx-menu-item" data-toggle="popover" data-bind="game-context-menu" data-original-title="" title="" data-viewport=".game-calls-to-action">
        <span class="icon-more"></span>
    </a>
    <div class="rbx-popover-content" data-toggle="game-context-menu">
        <ul class="dropdown-menu" role="menu">
                <li>
                    <div class="VisitButton VisitButtonEditGLI" placeid="<?php echo $place['id']; ?>" data-universeid="<?php echo $place['gameId']; ?>" data-allowupload="true">
                        <a>Edit</a>
                    </div>
                </li>
        </ul>
    </div>
</div>
<?php } ?>

<script>
    $(function() {
        if (typeof Roblox === "undefined") {
            Roblox = {};
        }
        if (typeof Roblox.Showcases === "undefined") {
            Roblox.Showcases = {};
        }

        Roblox.Showcases.InShowcase = $("#game-context-menu").find(".rbx-context-menu-toggle-profile").data("in-showcase") === "True";

        $("#game-context-menu ").on("click", ".rbx-context-menu-toggle-profile", function (evt) {
            evt.preventDefault();
            var el = $(this);
            var placeId = el.data("place-id");
            $("#game-context-menu").find(".rbx-menu-item").popover('hide');
            $.post("/game/toggle-profile", {
                placeId:placeId,
                addToProfile:!Roblox.Showcases.InShowcase
            }, function(json) {
                if (json.isValid) {
                    Roblox.Showcases.InShowcase = json.data.inShowcase;
                    $("#game-context-menu").find(".rbx-context-menu-toggle-profile div").text(Roblox.Showcases.InShowcase ? "Remove from Profile" : "Add to Profile");
                }
            });
        });
        $("#game-context-menu ").on("click", ".rbx-context-menu-shutdown-all", function (evt) {
            evt.preventDefault();
            var placeId = $(this).data("place-id");
            $("#game-context-menu").find(".rbx-menu-item").popover('hide'); 

            Roblox.GenericConfirmation.open({
                titleText: "Shut Down Servers",
                bodyContent: "Are you sure you want to shut down all servers for this place?",
                onAccept: function () {
                    $.ajax({
                        type: "POST",
                        url: "/Games/shutdown-all-instances",
                        data: { placeId: placeId },
                        error: function () {
                            Roblox.GenericConfirmation.open({
                                titleText: Roblox.BuildPage.Resources.errorOccurred,
                                bodyContent: "Could not shut down servers.",
                                acceptText: Roblox.BuildPage.Resources.ok,
                                acceptColor: Roblox.GenericConfirmation.blue,
                                declineColor: Roblox.GenericConfirmation.none,
                                allowHtmlContentInBody: true,
                                dismissable: true
                            });
                        }
                    });
                },
                acceptColor: Roblox.GenericConfirmation.blue,
                acceptText: "Yes",
                declineText: "No",
                allowHtmlContentInBody: true
            });
        });

        $("#game-context-menu").on("click", ".VisitButtonEditGLI", function (evt) {
            $("#game-context-menu").find(".rbx-menu-item").popover('hide'); 
            var el = $(this);
            var placeId = el.attr("placeid");
            var universeId = el.data("universeid");
            var allowUpload = el.data("allowupload") ? true : false;
            Roblox.GameLauncher.editGameInStudio(placeId, universeId, allowUpload);
        });
    });
</script>

            <div class="game-title-container">
                <h2 class="game-name" title="<?php echo protecc($place['gamename']); ?>"><?php echo protecc($place['gamename']); ?></h2>
                <div class="game-creator"><span class="text-label">By</span> <a class="text-name" href="http://www.<?php echo $url; ?>/users/<?php echo $creator['id']; ?>/profile"><?php echo protecc($creator['username']); ?></a></div>
            </div>
            <div class="game-play-buttons" data-autoplay="false">



                        <div id="MultiplayerVisitButton" class="VisitButton VisitButtonPlayGLI" placeid="<?php echo $place['id']; ?>" data-action="play" data-is-membership-level-ok="true">
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
                imageUrl: 'http://images.rbxcdn.com/43ac54175f3f3cd403536fedd9170c10.png'
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
                

        <li class="favorite-button-container">
            <div class="tooltip-container" data-toggle="tooltip" title="" data-original-title="Add to Favorites">
                <a id="toggle-favorite" data-toggle-url="/favorite/toggle" data-assetid="<?php echo $place['id']; ?>" data-isguest="False" data-signin-url="http://www.limrev.one/newlogin">
                    <span title="53,617" class="text-favorite favoriteCount 53,617" id="result">53K+</span>
                    <div id="favorite-icon" class="icon-favorite "></div>
                </a>
            </div>
        </li>
 
                
        <li id="voting-section" class="voting-panel body new-design" data-asset-id="<?php echo $place['id']; ?>" data-total-up-votes="3760" data-total-down-votes="535" data-vote-modal="" data-user-authenticated="<?php echo $loggedin3; ?>">
            <div class="loading"></div>
                <div class="vote-summary">
                    <div class="voting-details">
                        <div class="users-vote ">

                            <div class="upvote">
                                <span class="icon-like "></span>
                            </div>

                            <div class="vote-details">
                                <div class="vote-container">
                                    <div class="vote-background"></div>
                                    <div class="vote-percentage"></div>
                                    <div class="vote-mask">
                                        <div class="segment seg-1"></div>
                                        <div class="segment seg-2"></div>
                                        <div class="segment seg-3"></div>
                                        <div class="segment seg-4"></div>
                                    </div>
                                </div>

                                <div class="vote-numbers">
                                    <div class="count-left">
                                        <span id="vote-up-text" title="3760" class="vote-text">3,760</span>
                                    </div>
                                    <div class="count-right">
                                        <span id="vote-down-text" title="535" class="vote-text">535</span>                                    
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="downvote">
                                <span class="icon-dislike "></span>
                            </div>

                        </div>
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
            guestUserMessage: "<div>You must login to vote.</div> <div>Please <a href='/newlogin?returnUrl=%2Fgames%2F<?php echo $place['id']; ?>%2FClassic-Crossroads'>login or register</a> to continue.</div>",
            returnUrl: '/newlogin?returnUrl=%2Fgames%2F<?php echo $place['id']; ?>%2FClassic-Crossroads',

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
                        <p class="game-description linkify"><?php echo protecc($place['description']); ?></p>

                        <ul class="game-stats-container">
                            <li class="game-stat">
                                <p class="text-label">Visits</p>
                                <p class="text-lead" title="3,617,089">3M+</p>
                            </li>
                            <li class="game-stat">
                                <p class="text-label">Created</p>
                                <p class="text-lead"><?php
                                $time = date('n/j/Y',strtotime($place['createdTime']));
                                echo $time;
                                ?> </p>
                            </li>
                            <li class="game-stat">
                                <p class="text-label">Updated</p>
                                <p class="text-lead"><?php
                                $time = date('n/j/Y',strtotime($place['updatedTime']));
                                echo $time;
                                ?></p>
                            </li>
                            <li class="game-stat">
                                <p class="text-label">Max Players</p>
                                <p class="text-lead">8</p>
                            </li>
                            <li class="game-stat">
                                <p class="text-label">Genre</p>
                                    <p class="text-lead">
                                        <a class="text-name" href="http://www.<?php echo $url; ?>/games?GenreFilter=10">Fighting</a>
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

                            <span class="game-report-abuse"><a class="text-report" href="http://www.<?php echo $url; ?>/abusereport/asset?id=<?php echo $place['id']; ?>">Report Abuse</a></span>
                        </div>
                    </div>
                </div>


    <div id="rbx-vip-servers" class="container-list">
        <div class="container-header">
            <h3>VIP Servers</h3>
            <span class="tooltip-container" data-toggle="tooltip" data-original-title="VIP servers let you play this game privately with friends, your clan, or people you invite!">
                <span class="icon-moreinfo"></span>
            </span>
        </div>
        <div class="rbx-vip-server-item-container">
            <p class="section-content-off">This game does not support <a class="text-link" href="http://wiki.<?php echo $url; ?>/index.php?title=VIP_server">VIP Servers</a>.</p>
        </div>
    </div>

<script>
    var Roblox = Roblox || {};

    Roblox.PrivateServers = Roblox.PrivateServers || {};
    //<sl:translate>
    Roblox.PrivateServers.RenewRecurringTitle = "Renew Private Server";
    Roblox.PrivateServers.RenewRecurringBody = "Are you sure you want to enable future payments for your private VIP version of "
    + "<?php echo protecc($place['gamename']); ?> by ROBLOX?<br><br>This VIP Server will start renewing every month at "
    + "<span class=\"icon-robux-16x16\"></span><span class=\"text-robux\">0</span> until you cancel.";
    Roblox.PrivateServers.RenewRecurringAcceptText = "Renew";
    Roblox.PrivateServers.RenewRecurringDeclineText = "Cancel";
    Roblox.PrivateServers.UserProfileAbsoluteUrlPattern = "http://www.<?= $url ?>/users/0/profile";
    //<sl:translate>
</script>




                
                    <div id="my-recommended-games" class="container-list games-detail">
                        <div class="container-header">
                            <h3>Recommended Games</h3>
                        </div>
                        
                        

<ul class="hlist game-cards game-cards-sm">


<li class="list-item game-card">
    <div class="game-card-container">
        <a href="http://www.<?= $url ?>/games/refer?RecommendationAlgorithm=2&amp;RecommendationSourceId=<?php echo $place['id']; ?>&amp;PlaceId=14403&amp;Position=1&amp;PageType=GameDetail" class="game-card-link">
            <div class="game-card-thumb-container">
                <img class="game-card-thumb" src="http://t3.rbxcdn.com/ebdeeb51b5d9252f0bbd41221068614e" alt="Classic: Chaos Canyon" thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;http://t3.rbxcdn.com/ebdeeb51b5d9252f0bbd41221068614e&quot;,&quot;RetryUrl&quot;:null}" image-retry/>
            </div>
            <div class="text-overflow game-card-name" title="Classic: Chaos Canyon" ng-non-bindable>
                Classic: Chaos Canyon
            </div>
            <div class="game-card-name-secondary">
                0 Playing
            </div>
            <div class="game-card-vote">
                <div class="vote-bar" data-voting-processed="false">
                    <div class="vote-thumbs-up">
                        <span class="icon-thumbs-up"></span>
                    </div>
                    <div class="vote-container" data-upvotes="439" data-downvotes="257">
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
                    <div class="vote-down-count">257</div>
                    <div class="vote-up-count">439</div>

                </div>
            </div>
        </a>
        <span class="game-card-footer">
        <span class="text-label xsmall">By </span>
        <a class="text-link xsmall text-overflow" href="http://www.<?= $url ?>/users/1/profile">ROBLOX</a>
    </span>
    </div>
</li>


<li class="list-item game-card">
    <div class="game-card-container">
        <a href="http://www.<?= $url ?>/games/refer?RecommendationAlgorithm=2&amp;RecommendationSourceId=<?php echo $place['id']; ?>&amp;PlaceId=25415&amp;Position=2&amp;PageType=GameDetail" class="game-card-link">
            <div class="game-card-thumb-container">
                <img class="game-card-thumb" src="http://t2.rbxcdn.com/43e45dfe0a0ddfd45df091fc0c18f6f8" alt="Classic: Rocket Arena" thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;http://t2.rbxcdn.com/43e45dfe0a0ddfd45df091fc0c18f6f8&quot;,&quot;RetryUrl&quot;:null}" image-retry/>
            </div>
            <div class="text-overflow game-card-name" title="Classic: Rocket Arena" ng-non-bindable>
                Classic: Rocket Arena
            </div>
            <div class="game-card-name-secondary">
                0 Playing
            </div>
            <div class="game-card-vote">
                <div class="vote-bar" data-voting-processed="false">
                    <div class="vote-thumbs-up">
                        <span class="icon-thumbs-up"></span>
                    </div>
                    <div class="vote-container" data-upvotes="611" data-downvotes="350">
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
                    <div class="vote-down-count">350</div>
                    <div class="vote-up-count">611</div>

                </div>
            </div>
        </a>
        <span class="game-card-footer">
        <span class="text-label xsmall">By </span>
        <a class="text-link xsmall text-overflow" href="http://www.<?= $url ?>/users/1/profile">ROBLOX</a>
    </span>
    </div>
</li>


<li class="list-item game-card">
    <div class="game-card-container">
        <a href="http://www.<?= $url ?>/games/refer?RecommendationAlgorithm=2&amp;RecommendationSourceId=<?php echo $place['id']; ?>&amp;PlaceId=1501&amp;Position=3&amp;PageType=GameDetail" class="game-card-link">
            <div class="game-card-thumb-container">
                <img class="game-card-thumb" src="http://t2.rbxcdn.com/57280bfdc69df20e59fd4102bbea42c4" alt="ROBLOX World Headquarters" thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;http://t2.rbxcdn.com/57280bfdc69df20e59fd4102bbea42c4&quot;,&quot;RetryUrl&quot;:null}" image-retry/>
            </div>
            <div class="text-overflow game-card-name" title="ROBLOX World Headquarters" ng-non-bindable>
                ROBLOX World Headquarters
            </div>
            <div class="game-card-name-secondary">
                4 Playing
            </div>
            <div class="game-card-vote">
                <div class="vote-bar" data-voting-processed="false">
                    <div class="vote-thumbs-up">
                        <span class="icon-thumbs-up"></span>
                    </div>
                    <div class="vote-container" data-upvotes="1089" data-downvotes="201">
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
                    <div class="vote-down-count">201</div>
                    <div class="vote-up-count">1,089</div>

                </div>
            </div>
        </a>
        <span class="game-card-footer">
        <span class="text-label xsmall">By </span>
        <a class="text-link xsmall text-overflow" href="http://www.<?= $url ?>/users/156/profile">builderman</a>
    </span>
    </div>
</li>


<li class="list-item game-card">
    <div class="game-card-container">
        <a href="http://www.<?= $url ?>/games/refer?RecommendationAlgorithm=2&amp;RecommendationSourceId=<?php echo $place['id']; ?>&amp;PlaceId=3217517&amp;Position=4&amp;PageType=GameDetail" class="game-card-link">
            <div class="game-card-thumb-container">
                <img class="game-card-thumb" src="http://t7.rbxcdn.com/656b0c070a6daa432d6b3e6a66f4762e" alt="Sword fight ninja town" thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;http://t7.rbxcdn.com/656b0c070a6daa432d6b3e6a66f4762e&quot;,&quot;RetryUrl&quot;:null}" image-retry/>
            </div>
            <div class="text-overflow game-card-name" title="Sword fight ninja town" ng-non-bindable>
                Sword fight ninja town
            </div>
            <div class="game-card-name-secondary">
                5 Playing
            </div>
            <div class="game-card-vote">
                <div class="vote-bar" data-voting-processed="false">
                    <div class="vote-thumbs-up">
                        <span class="icon-thumbs-up"></span>
                    </div>
                    <div class="vote-container" data-upvotes="526" data-downvotes="232">
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
                    <div class="vote-down-count">232</div>
                    <div class="vote-up-count">526</div>

                </div>
            </div>
        </a>
        <span class="game-card-footer">
        <span class="text-label xsmall">By </span>
        <a class="text-link xsmall text-overflow" href="http://www.<?= $url ?>/users/736308/profile">34vlekje34</a>
    </span>
    </div>
</li>


<li class="list-item game-card">
    <div class="game-card-container">
        <a href="http://www.<?= $url ?>/games/refer?RecommendationAlgorithm=2&amp;RecommendationSourceId=<?php echo $place['id']; ?>&amp;PlaceId=3435799&amp;Position=5&amp;PageType=GameDetail" class="game-card-link">
            <div class="game-card-thumb-container">
                <img class="game-card-thumb" src="http://t1.rbxcdn.com/62544e3e2d2f496dc814f4f0f3fc4326" alt="The Iron Cafe! -8 YEARS OLD-" thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;http://t1.rbxcdn.com/62544e3e2d2f496dc814f4f0f3fc4326&quot;,&quot;RetryUrl&quot;:null}" image-retry/>
            </div>
            <div class="text-overflow game-card-name" title="The Iron Cafe! -8 YEARS OLD-" ng-non-bindable>
                The Iron Cafe! -8 YEARS OLD-
            </div>
            <div class="game-card-name-secondary">
                2 Playing
            </div>
            <div class="game-card-vote">
                <div class="vote-bar" data-voting-processed="false">
                    <div class="vote-thumbs-up">
                        <span class="icon-thumbs-up"></span>
                    </div>
                    <div class="vote-container" data-upvotes="1863" data-downvotes="1236">
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
                    <div class="vote-down-count">1,236</div>
                    <div class="vote-up-count">1,863</div>

                </div>
            </div>
        </a>
        <span class="game-card-footer">
        <span class="text-label xsmall">By </span>
        <a class="text-link xsmall text-overflow" href="http://www.<?= $url ?>/users/229003/profile">IronInforcer</a>
    </span>
    </div>
</li>


<li class="list-item game-card">
    <div class="game-card-container">
        <a href="http://www.<?= $url ?>/games/refer?RecommendationAlgorithm=2&amp;RecommendationSourceId=<?php echo $place['id']; ?>&amp;PlaceId=81694&amp;Position=6&amp;PageType=GameDetail" class="game-card-link">
            <div class="game-card-thumb-container">
                <img class="game-card-thumb" src="http://t0.rbxcdn.com/c643380044ac772f89da01597977dbde" alt="ROBLOX Bowling Alley UNCOPYLOCKED" thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;http://t0.rbxcdn.com/c643380044ac772f89da01597977dbde&quot;,&quot;RetryUrl&quot;:null}" image-retry/>
            </div>
            <div class="text-overflow game-card-name" title="ROBLOX Bowling Alley UNCOPYLOCKED" ng-non-bindable>
                ROBLOX Bowling Alley UNCOPYLOCKED
            </div>
            <div class="game-card-name-secondary">
                1 Playing
            </div>
            <div class="game-card-vote">
                <div class="vote-bar" data-voting-processed="false">
                    <div class="vote-thumbs-up">
                        <span class="icon-thumbs-up"></span>
                    </div>
                    <div class="vote-container" data-upvotes="729" data-downvotes="388">
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
                    <div class="vote-down-count">388</div>
                    <div class="vote-up-count">729</div>

                </div>
            </div>
        </a>
        <span class="game-card-footer">
        <span class="text-label xsmall">By </span>
        <a class="text-link xsmall text-overflow" href="http://www.<?= $url ?>/users/33558/profile">blXhd</a>
    </span>
    </div>
</li>


<li class="list-item game-card">
    <div class="game-card-container">
        <a href="http://www.<?= $url ?>/games/refer?RecommendationAlgorithm=2&amp;RecommendationSourceId=<?php echo $place['id']; ?>&amp;PlaceId=58599&amp;Position=7&amp;PageType=GameDetail" class="game-card-link">
            <div class="game-card-thumb-container">
                <img class="game-card-thumb" src="http://t7.rbxcdn.com/38923899c4020d87503e7c68e44cfdbb" alt="Thrillville park (theme park)" thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;http://t7.rbxcdn.com/38923899c4020d87503e7c68e44cfdbb&quot;,&quot;RetryUrl&quot;:null}" image-retry/>
            </div>
            <div class="text-overflow game-card-name" title="Thrillville park (theme park)" ng-non-bindable>
                Thrillville park (theme park)
            </div>
            <div class="game-card-name-secondary">
                0 Playing
            </div>
            <div class="game-card-vote">
                <div class="vote-bar" data-voting-processed="false">
                    <div class="vote-thumbs-up">
                        <span class="icon-thumbs-up"></span>
                    </div>
                    <div class="vote-container" data-upvotes="1042" data-downvotes="279">
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
                    <div class="vote-down-count">279</div>
                    <div class="vote-up-count">1,042</div>

                </div>
            </div>
        </a>
        <span class="game-card-footer">
        <span class="text-label xsmall">By </span>
        <a class="text-link xsmall text-overflow" href="http://www.<?= $url ?>/users/24809/profile">JJ5x5</a>
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


                


<input name="__RequestVerificationToken" type="hidden" value="nTYBq7UoYDQhzrBcZAxlbvaix7VkpgJBrMVjdCB_MW7sKlvk5BA13Cb86LUmdjhBDCGrgH-11o8XXe1KYlMxsUoza3Y1"/>

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

        $("#store").on("click", ".icon-alert", function(e) {
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
    <div class="rbx-leaderboard-data" data-distributor-target-id="<?php echo $place['gameId']; ?>" data-max="20" data-rank-max="4" data-target-type="0" data-time-filter="1" data-player-id="1" data-clan-id="-1"></div>
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
                <span class="rbx-board-filtername">Past Week</span>
                <a class="rbx-menu-item" data-toggle="popover" data-bind="popover-leaderboard-player" data-original-title="" title="" data-viewport=".rbx-leaderboard-player" data-placement="left"><span class="icon-sorting" id="rbx-leaderboard-popover-player"></span></a>
            </div>
        </div>

    </div>leader
    <div class="rbx-leaderboard-my"></div>
    <div class="section-content rbx-leaderboard-items">
        <div class="rbx-leaderboard-more-container rbx-leaderboard-btn-player" data-associated-leaderboard="rbx-leaderboard-player">
            <button type="button" class="btn-control-sm rbx-leaderboard-see-more hidden">
                See More
            </button>
        </div>
        <img class="spinner" src="http://images.rbxcdn.com/4bed93c91f909002b1f17f05c0ce13d1.gif" alt="loading..."/>
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
    <div class="rbx-leaderboard-data" data-distributor-target-id="<?php echo $place['gameId']; ?>" data-max="20" data-rank-max="4" data-target-type="1" data-time-filter="1" data-player-id="-1" data-clan-id="-1"></div>
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
        <img class="spinner" src="http://images.rbxcdn.com/4bed93c91f909002b1f17f05c0ce13d1.gif" alt="loading..."/>
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
                


<div id="rbx-running-games" class="stack" data-placeid="<?php echo $place['id']; ?>" data-showshutdown data-avatar-headshot-enabled="true">
    <div class="container-header">
        <h3>Running Servers</h3>
        <span class="btn-fixed-width btn-control-xs btn-more rbx-running-games-refresh">Refresh</span>
    </div>
    <ul id="rbx-game-server-item-container" class="section rbx-game-server-item-container stack-list">
            
    </ul>
    <div class="rbx-running-games-footer">
            <button type="button" class="btn-control-sm btn-full-width rbx-running-games-load-more hidden">Load More</button>

    </div>
    <div class="rbx-game-server-template">
        <li class="stack-row rbx-game-server-item">
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



<div id="ItemPurchaseAjaxData" data-has-currency-service-error="False" data-currency-service-error-message="" data-authenticateduser-isnull="True" data-user-balance-robux="0" data-user-balance-tickets="0" data-user-bc="0" data-continueshopping-url="http://www.<?= $url ?>/games/<?php echo $place['id']; ?>/Classic-Crossroads" data-imageurl="http://t6.rbxcdn.com/f847f3e934b923c2bef2574111b11531" data-alerturl="http://images.rbxcdn.com/b7353602bbf9b927d572d5887f97d452.svg" data-insufficentfundsurl="http://images.rbxcdn.com/b80339ddf867ccfe6ab23a2c263d8000.png">
    
</div>


<div id="BCOnlyModal" class="modal-dialog" style="display: none;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" onclick="$.modal.close();">
                <span aria-hidden="true">
                    <span class="icon-close"></span>
                </span>
                <span class="sr-only">Close</span>
            </button>
            <h5>Builders Club Only</h5>
        </div>
        <div class="modal-body">
            <div id="BCMessageDiv">
                This is a premium item only available to our Builders Club members.
            </div>
            <div class="modal-image-container">
                <span class="icon-default-bc upgrade-icon-bc"></span>
            </div>
        </div>
        <div class="modal-footer">
            <a href="http://www.<?php echo $url; ?>/premium/membership?ctx=bc-only-item" class="btn-primary-md">Upgrade Now</a>
            <button type="button" class="btn-control-md" onclick="$.modal.close();">Cancel</button>
        </div>
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
                    

<iframe name="Roblox_GameDetail_Right_160x600" allowtransparency="true" frameborder="0" height="612" scrolling="no" src="/userads/2" width="160" data-js-adtype="iframead"></iframe>

                </div>
            
        </div>
            </div> 

<?php $site->robloxHtml("Footer"); ?>

</div> 



    <script type="text/javascript">function urchinTracker() {}</script>


<div id="PlaceLauncherStatusPanel" style="display:none;width:300px" data-new-plugin-events-enabled="True" data-event-stream-for-plugin-enabled="True" data-event-stream-for-protocol-enabled="True" data-is-game-launch-interface-enabled="True" data-is-protocol-handler-launch-enabled="True" data-is-user-logged-in="<?php echo $loggedin3; ?>" data-os-name="Windows" data-protocol-name-for-client="s16rev-player-b16" data-protocol-name-for-studio="s16rev-studio-b16" data-protocol-url-includes-launchtime="true" data-protocol-detection-enabled="true">
    <div class="modalPopup blueAndWhite PlaceLauncherModal" style="min-height: 160px">
        <div id="Spinner" class="Spinner" style="padding:20px 0;">
            <img data-delaysrc="http://images.rbxcdn.com/e998fb4c03e8c2e30792f2f3436e9416.gif" height="32" width="32" alt="Progress"/>
        </div>
        <div id="status" style="min-height:40px;text-align:center;margin:5px 20px">
            <div id="Starting" class="PlaceLauncherStatus MadStatusStarting" style="display:block">
                Starting Roblox...
            </div>
            <div id="Waiting" class="PlaceLauncherStatus MadStatusField">Connecting to Players...</div>
            <div id="StatusBackBuffer" class="PlaceLauncherStatus PlaceLauncherStatusBackBuffer MadStatusBackBuffer"></div>
        </div>
        <div style="text-align:center;margin-top:1em">
            <input type="button" class="Button CancelPlaceLauncherButton translate" value="Cancel"/>
        </div>
    </div>
</div>
<div id="ProtocolHandlerStartingDialog" style="display:none;">
    <div class="modalPopup ph-modal-popup">
        <div class="ph-modal-header">

        </div>
        <div class="ph-logo-row">
            <img data-delaysrc="http://images.rbxcdn.com/e060b59b57fdcc7874c820d13fdcee71.svg" width="90" height="90" alt="R"/>
        </div>
        <div class="ph-areyouinstalleddialog-content">
            <p class="larger-font-size">
                ROBLOX is now loading. Get ready to play!
            </p>
            <div class="ph-startingdialog-spinner-row">
                <img data-delaysrc="http://images.rbxcdn.com/4bed93c91f909002b1f17f05c0ce13d1.gif" width="82" height="24"/>
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
            <img data-delaysrc="http://images.rbxcdn.com/e060b59b57fdcc7874c820d13fdcee71.svg" width="90" height="90" alt="R"/>
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
                <a href="http://en.help.<?= $url ?>/hc/en-us/articles/204473560" class="text-name" target="_blank">Click here for help</a>
            </div>
        </div>
    </div>
</div>
<div id="ProtocolHandlerClickAlwaysAllowed" class="ph-clickalwaysallowed" style="display:none;">
    <p class="larger-font-size">
        <span class="icon-moreinfo"></span>
        Check <b>Remember my choice</b> and click
            <img data-delaysrc="http://images.rbxcdn.com/7c8d7a39b4335931221857cca2b5430b.png" alt="Launch Application"/>
        in the dialog box above to join games faster in the future!
    </p>
</div>


    <div id="videoPrerollPanel" style="display:none">
        <div id="videoPrerollTitleDiv">
            Gameplay sponsored by:
        </div>
        <div id="content">
            <video id="contentElement" style="width:0; height:0;"/>
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
            <a href="http://www.<?= $url ?>/premium/membership?ctx=preroll" target="_blank" class="btn-medium btn-primary" id="videoPrerollJoinBCButton">Join Builders Club</a>
        </div>
    </div>   
    <script type="text/javascript">
        $(function () {
            var videoPreRollDFP = Roblox.VideoPreRollDFP;
            if (videoPreRollDFP) {
                var customTargeting = Roblox.VideoPreRollDFP.customTargeting;
                videoPreRollDFP.showVideoPreRoll = <?php echo var_export($loggedin, 1); ?>;
                videoPreRollDFP.loadingBarMaxTime = 33000;
                videoPreRollDFP.videoLoadingTimeout = 11000;
                videoPreRollDFP.videoPlayingTimeout = 41000;
                videoPreRollDFP.videoLogNote = "Guest";
                videoPreRollDFP.logsEnabled = true;
                videoPreRollDFP.excludedPlaceIds = "32373412";
                videoPreRollDFP.adUnit = "/1015347/VideoPrerollUnder13";
                videoPreRollDFP.adTime = 15;
                videoPreRollDFP.isSwfPreloaderEnabled = false;
                videoPreRollDFP.isPrerollShownEveryXMinutesEnabled = true;
                videoPreRollDFP.isAgeTargetingEnabled = true;
                videoPreRollDFP.isAgeOrSegmentTargetingEnabled = true;
                videoPreRollDFP.isCompanionAdRenderedByGoogleTag = true;
                customTargeting.userAge = "Unknown";
                customTargeting.userAgeOrSegment = "Unknown";
                customTargeting.userGender = "Unknown";
                customTargeting.gameGenres = "Fighting,";
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
                <a href="http://www.<?= $url ?>/?returnUrl=https%3A%2F%2Fwww.<?= $url ?>%2Fgames%2F<?php echo $place['id']; ?>%2FClassic-Crossroads"><div class="RevisedCharacterSelectSignup"></div></a>
                <a class="HaveAccount" href="http://www.<?= $url ?>/newlogin?returnUrl=https%3A%2F%2Fwww.<?= $url ?>%2Fgames%2F<?php echo $place['id']; ?>%2FClassic-Crossroads">I have an account</a>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function checkRobloxInstall() {
             return RobloxLaunch.CheckRobloxInstall('http://www.<?= $url ?>/install/download.aspx');
    }
</script>

    <div id="InstallationInstructions" class="" style="display:none;">
        <div class="ph-installinstructions">
            <div class="ph-modal-header">
                    <span class="icon-close simplemodal-close"></span>
                    <h3 class="title">Thanks for playing ROBLOX</h3>
            </div>
            <div class="modal-content-container"> 
                <div class="ph-installinstructions-body ">


        <div class="ph-install-step ph-installinstructions-step1-of4">
            <h1>1</h1>
            <p class="larger-font-size">Click <strong>RobloxPlayer.exe</strong> to run the ROBLOX installer, which just downloaded via your web browser.</p>
                <img width="230" height="180" data-delaysrc="/images/rbxcdn/8b0052e4ff81d8e14f19faff2a22fcf7.png"/>
        </div>
        <div class="ph-install-step ph-installinstructions-step2-of4">
            <h1>2</h1>
            <p class="larger-font-size">Click <strong>Run</strong> when prompted by your computer to begin the installation process.</p>
            <img width="230" height="180" data-delaysrc="/images/rbxcdn/4a3f96d30df0f7879abde4ed837446c6.png"/>
        </div>
        <div class="ph-install-step ph-installinstructions-step3-of4">
            <h1>3</h1>
            <p class="larger-font-size">Click <strong>Ok</strong> once you've successfully installed ROBLOX.</p>
                <img width="230" height="180" data-delaysrc="/images/rbxcdn/6e23e4971ee146e719fb1abcb1d67d59.png"/>
        </div>
        <div class="ph-install-step ph-installinstructions-step4-of4">
            <h1>4</h1>
            <p class="larger-font-size">After installation, click <strong>Play</strong> below to join the action!</p>
            <div class="VisitButton VisitButtonContinueGLI">
                <a class="btn btn-primary-lg disabled">Play</a>
            </div>
        </div>

                </div>
            </div>
            <div class="xsmall">
                The ROBLOX installer should download shortly. If it doesn’t, start the <a href="#" class="text-link" onclick="Roblox.ProtocolHandlerClientInterface.startDownload(); return false;">download now.</a>
            </div>
        </div>
    </div>
    <div class="InstallInstructionsImage" data-modalwidth="970" style="display:none;"></div>


    <?php $site->robloxHtml("JS_1"); ?>

    
    <script type="text/javascript" src="//js.rbxcdn.com/5960e60b45931a6ce0a58dfca3163871.js"></script>
</body>
</html>