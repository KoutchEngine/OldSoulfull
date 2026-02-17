<?php
  include 'C:/wamp64/www/configuration/global.php';
  $site->LoginState(false, true);
  $site->invitekey();
  
  $friends = $site->getFriends($user['id']);
?>

<html>
  <head>
    <title>Home - ROBLOX</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,requiresActiveX=true"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="ROBLOX Corporation"/>
    <meta name="description" content="ROBLOX is powered by a growing community of over 300,000 creators who produce an infinite variety of highly immersive experiences. These experiences range from 3D multiplayer games and competitions, to interactive adventures where friends can take on new personas imagining what it would be like to be a dinosaur, a miner in a quarry or an astronaut on a space exploration."/>
    <meta name="keywords" content="free games, online games, building games, virtual worlds, free mmo, gaming cloud, physics engine"/>
    <meta name="apple-itunes-app" content="app-id=431946152"/>
    <meta name="google-site-verification" content="KjufnQUaDv5nXJogvDMey4G-Kb7ceUVxTdzcMaP9pCY"/>
    <meta property="og:site_name" content="ROBLOX"/>
    <meta property="og:title" content="ROBLOX"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="http://www.<?= $url ?>"/>
    <meta property="og:description" content="ROBLOX is powered by a growing community of over 300,000 creators who produce an infinite variety of highly immersive experiences. These experiences range from 3D multiplayer games and competitions, to interactive adventures where friends can take on new personas imagining what it would be like to be a dinosaur, a miner in a quarry or an astronaut on a space exploration."/>
    <meta property="og:image" content="images/rbxcdn/fb70fd2b56107a0d43f2f98658885702.jpg"/>
    <meta property="fb:app_id" content="190191627665278">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@ROBLOX">
    <meta name="twitter:title" content="ROBLOX">
    <meta name="twitter:description" content="ROBLOX is powered by a growing community of over 300,000 creators who produce an infinite variety of highly immersive experiences. These experiences range from 3D multiplayer games and competitions, to interactive adventures where friends can take on new personas imagining what it would be like to be a dinosaur, a miner in a quarry or an astronaut on a space exploration.">
    <meta name="twitter:creator">
    <meta name="twitter:image1" content="images/rbxcdn/fb70fd2b56107a0d43f2f98658885702.jpg"/>
    <meta name="twitter:app:country" content="US">
    <meta name="twitter:app:name:iphone" content="ROBLOX Mobile">
    <meta name="twitter:app:id:iphone" content="431946152">
    <meta name="twitter:app:url:iphone">
    <meta name="twitter:app:name:ipad" content="ROBLOX Mobile">
    <meta name="twitter:app:id:ipad" content="431946152">
    <meta name="twitter:app:url:ipad">
    <meta name="twitter:app:name:googleplay" content="ROBLOX">
    <meta name="twitter:app:id:googleplay" content="com.roblox.client">
    <meta name="twitter:app:url:googleplay"/>
    
            
    <?php $site->robloxHtml("HTMLStarterPack"); ?>
    <link rel='stylesheet' href='/CSS/Home.css' />

    <script type="text/javascript" src="/js/jquery/jquery-1.11.1.js"></script>
    <script type="text/javascript">window.jQuery || document.write("<script type='text/javascript' src='/js/jquery/jquery-1.11.1.js'><\/script>")</script>
    <script type="text/javascript" src="/js/jquery/jquery-migrate-1.2.1.js"></script>
    <script type="text/javascript">window.jQuery || document.write("<script type='text/javascript' src='/js/jquery/jquery-migrate-1.2.1.js'><\/script>")</script>
    <script>
    var Roblox = Roblox || {};
    Roblox.RealTimeSettings = Roblox.RealTimeSettings || {
      NotificationsEndpoint: "https://realtime.<?= $url ?>/",
      NotificationsTestInterval: "5000",
      MaxConnectionTime: "43200000",
      IsStateTrackingEnabled: true,
      IsEventPublishingEnabled: false,
      IsDisconnectOnSlowConnectionDisabled: true,
      IsSignalRClientTransportRestrictionEnabled: true,
      IsLocalStorageInRealTimeEnabled: true,
      UserId: "<?= $user['id'] ?>"
    }
  </script>
  <script>
    var Roblox = Roblox || {};
    Roblox.WebApps = Roblox.WebApps || {};
    Roblox.WebApps.Domains = {
      chat: "https://chatsite.<?= $url ?>",
      avatar: "https://avatarsite.<?= $url ?>"
    }
  </script>
  <script>
    var Roblox = Roblox || {};
    Roblox.EnvironmentUrls = Roblox.EnvironmentUrls || {};
    Roblox.EnvironmentUrls = {
      domain: "<?= $url ?>",
      avatarApi: "https://avatar.<?= $url ?>",
      avatarAppSite: "https://avatarsite.<?= $url ?>",
      chatApi: "https://chat.<?= $url ?>",
      chatAppSite: "https://chatsite.<?= $url ?>",
      groupsApi: "https://groups.<?= $url ?>",
      gamesApi: "https://games.<?= $url ?>",
      presenceApi: "https://presence.<?= $url ?>",
      notificationAppSite: "https://notificationsite.<?= $url ?>"
    }
  </script>

    <script src="//js.limrev.one/274cdda5d1120633af7486a6f25b2019.js.gzip"></script>

    <?php $site->robloxHtml("JS_2"); ?>
  </head>
  <body>
    <div id="wrap" class="wrap no-gutter-ads logged-in" data-gutter-ads-enabled="false">

      <?php $site->robloxHtml("Navigation");  ?>

      <div class="container-main">

        <?php $site->robloxHtml("Alerts"); ?>
        
        <script>if(top.location!=self.location){top.location=self.location.href;}</script><div class="alert-container"><noscript><div><div class=alert-info role=alert>Please enable Javascript to use all the features on this site.</div></div></noscript></div><div class="content">
        <div id="Skyscraper-Adp-Left" class="abp abp-container left-abp">
          
          
          <iframe name="Roblox_GameDetail_Left_160x600" allowtransparency="true" frameborder="0" height="612" scrolling="no" src="https://www.<?php echo $url; ?>/userads/2" width="160" data-js-adtype="iframead"></iframe>
          
        </div>
        <div id="HomeContainer" class="row home-container">
          <div class="col-xs-12 home-header">
            <a href="https://www.<?= $url ?>/users/<?= $user['id'] ?>/profile" class="avatar avatar-headshot-lg">
              <img alt="avatar" src="/Renders/Users/<?= $user['id'] ?>-headshot-300-300.png" id="home-avatar-thumb" class="avatar-card-image">
            </a>
            <script>
              $("img#home-avatar-thumb").on('load', function()
                                            {
                                              if(Roblox&&Roblox.Performance){
                                                Roblox.Performance.setPerformanceMark("head_avatar");
                                              }
                                            });
            </script>
            <div class="home-header-content non-bc">
              <h1><a href="https://www.<?= $url ?>/users/<?= $user['id'] ?>/profile"> Hello, <?php echo protecc($user['username']); ?>! </a></h1>
            </div>
          </div>
          <div class="col-xs-12 section home-friends">
            <div class="container-header">
              <h3>Friends (<?= count($friends) ?>)</h3>
              <a href="https://www.<?= $url ?>/users/friends" class="btn-secondary-xs btn-more btn-fixed-width">See All</a>
            </div>
            
            <div class="section-content">
              <ul class="hlist friend-list">

                <?php foreach($friends as $friend) { ?>
                  <li id="friend_<?= $friend['id'] ?>" class="list-item friend">
                    <div class="avatar-container">
                      <a href="https://www.<?= $url ?>/users/<?= $friend['id'] ?>/profile" class="avatar avatar-card-fullbody friend-link" title="User">
                        <span class="avatar-card-link friend-avatar" data-3d-url="/avatar-thumbnail-3d/json?userId=<?= $friend['id'] ?>" data-orig-retry-url="/avatar-thumbnail/json?userId=<?= $friend['id'] ?>&amp;width=100&amp;height=100&amp;format=png">
                          <img alt="<?= protecc($friend['username']) ?>" class="avatar-card-image" src="/Renders/Users/<?= $friend['id'] ?>-headshot-300-300.png">
                        </span>
                        <span class="text-overflow friend-name"><?= protecc($friend['username']) ?></span>
                      </a>
                      <!--><span class="avatar-status friend-status icon-online" title="Online"></span><!-->
                    </div>
                  </li>
                <?php } ?>

              </ul>
            </div>
          </div>
          <div id="recently-visited-places" class="col-xs-12 container-list home-games"><div id="recently-visited-places-header" class="container-header"><h3>Recently Played</h3><a href="https://www.<?= $url ?>/games?sortFilter=6" class="btn-secondary-xs btn-more btn-fixed-width">See All</a></div><div id="recently-visited-places-list" class="game-card-list"><div id="recently-visited-places-content-spinner" class="loading-animated game-card-list-spinner"><div><div></div><div></div><div></div></div></div><div id="recently-visited-places-content" class="hidden"></div></div></div><div id="my-favorites-games" class="col-xs-12 container-list home-games"><div id="my-favorites-games-header" class="container-header"><h3>My Favorites</h3><a href="https://www.<?= $url ?>/users/145914210/favorites#!/places" class="btn-secondary-xs btn-more btn-fixed-width">See All</a></div><div id="my-favorites-games-list" class="game-card-list"><div id="my-favorites-games-content-spinner" class="loading-animated game-card-list-spinner"><div><div></div><div></div><div></div></div></div><div id="my-favorites-games-content" class="hidden"></div></div></div><div id="game-item-card-template" class="hidden"><li class="list-item game-card"><div class="game-card-container"><a id="game-card-link" href="gameCardLink" class="game-card-link"><div id="game-card-thumb-container" class="game-card-thumb-container"><img class="game-card-thumb" alt="title" thumbnail="" image-retry=""></div><div id="game-card-title" class="text-overflow game-card-name" title="title"></div><div id="game-card-name-secondary" class="game-card-name-secondary"></div><div class="game-card-vote"><div class="vote-bar" data-voting-processed="true"><div class="vote-thumbs-up"><span class="icon-like-gray-16x16"></span></div><div id="vote-container" class="vote-container" data-upvotes="0" data-downvotes="0"><div class="vote-background"></div><div class="vote-percentage" style="width: 0%;"></div><div class="vote-mask"><div class="segment seg-1"></div><div class="segment seg-2"></div><div class="segment seg-3"></div><div class="segment seg-4"></div></div></div><div class="vote-thumbs-down"><span class="icon-dislike-gray-16x16"></span></div></div><div class="vote-counts"><div class="vote-down-count"></div><div class="vote-up-count"></div></div></div></a><div class="game-card-footer"><div class="creator"><span class="text-label xsmall text-overflow" id="game-card-creator-by"></span></div></div></div></li></div><div id="friend-activity" class="col-xs-12 container-list home-games"><div class="container-header"><h3>Friend Activity</h3><a href="https://www.<?= $url ?>/games?sortFilter=17" class="btn-secondary-xs btn-more btn-fixed-width">See All</a></div><ul class="hlist game-cards"><li class="list-item game-card"><div class="game-card-container"><a href="https://www.<?= $url ?>/games/refer?SortFilter=17&amp;PlaceId=348083609&amp;Position=1&amp;PageType=Home" class="game-card-link"><div class="game-card-thumb-container"><img class="game-card-thumb" src="https://t5.rbxcdn.com/550f620dbcafa6c224a11ba5c5a9a266" alt="The Elevator - Remade" thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;https://t5.rbxcdn.com/550f620dbcafa6c224a11ba5c5a9a266&quot;,&quot;RetryUrl&quot;:null,&quot;UserId&quot;:0,&quot;EndpointType&quot;:&quot;Avatar&quot;}" image-retry=""></div><div class="text-overflow game-card-name" title="The Elevator - Remade" ng-non-bindable="">The Elevator - Remade</div><div class="game-card-name-secondary">235 Playing</div><div class="game-card-experimental"><span class="icon-experimental-gray2"></span> <span class="experimental-label-long">Experimental Mode</span> <span class="experimental-label-short">Experimental</span></div><div class="game-card-vote"><div class="vote-bar" data-voting-processed="true"><div class="vote-thumbs-up"><span class="icon-like-gray-16x16"></span></div><div class="vote-container" data-upvotes="30742" data-downvotes="4156"><div id="vote-background" class="vote-background has-votes"></div><div class="vote-percentage" style="width: 88%;"></div><div class="vote-mask"><div class="segment seg-1"></div><div class="segment seg-2"></div><div class="segment seg-3"></div><div class="segment seg-4"></div></div></div><div class="vote-thumbs-down"><span class="icon-dislike-gray-16x16"></span></div></div><div class="vote-counts"><div id="vote-down-count" class="vote-down-count">4,156</div><div id="vote-up-count" class="vote-up-count">30,742</div></div></div></a><div class="game-card-footer"><div class="creator"><span class="text-label xsmall text-overflow"> By <a class="text-link" href="https://www.<?= $url ?>/users/15499235/profile" ng-non-bindable="">iwishforpie1</a> </span></div><div class="game-card-experimental"><span class="icon-experimental-gray2"></span> <span class="experimental-label-long">Experimental Mode</span></div></div></div></li><li class="list-item game-card"><div class="game-card-container"><a href="https://www.<?= $url ?>/games/refer?SortFilter=17&amp;PlaceId=447452406&amp;Position=2&amp;PageType=Home" class="game-card-link"><div class="game-card-thumb-container"><img class="game-card-thumb" src="https://t1.rbxcdn.com/c73ddb24223c7f19825a66765d59d435" alt="[GLIDERS] Robloxian Highschool" thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;https://t1.rbxcdn.com/c73ddb24223c7f19825a66765d59d435&quot;,&quot;RetryUrl&quot;:null,&quot;UserId&quot;:0,&quot;EndpointType&quot;:&quot;Avatar&quot;}" image-retry=""></div><div class="text-overflow game-card-name" title="[GLIDERS] Robloxian Highschool" ng-non-bindable="">[GLIDERS] Robloxian Highschool</div><div class="game-card-name-secondary">18,288 Playing</div><div class="game-card-experimental"><span class="icon-experimental-gray2"></span> <span class="experimental-label-long">Experimental Mode</span> <span class="experimental-label-short">Experimental</span></div><div class="game-card-vote"><div class="vote-bar" data-voting-processed="true"><div class="vote-thumbs-up"><span class="icon-like-gray-16x16"></span></div><div class="vote-container" data-upvotes="312261" data-downvotes="27592"><div id="vote-background" class="vote-background has-votes"></div><div class="vote-percentage" style="width: 91%;"></div><div class="vote-mask"><div class="segment seg-1"></div><div class="segment seg-2"></div><div class="segment seg-3"></div><div class="segment seg-4"></div></div></div><div class="vote-thumbs-down"><span class="icon-dislike-gray-16x16"></span></div></div><div class="vote-counts"><div id="vote-down-count" class="vote-down-count">27,592</div><div id="vote-up-count" class="vote-up-count">312,261</div></div></div></a><div class="game-card-footer"><div class="creator"><span class="text-label xsmall text-overflow"> By <a class="text-link" href="https://www.<?= $url ?>/groups/group.aspx?gid=2876351" ng-non-bindable="">Robloxian High School Group</a> </span></div><div class="game-card-experimental"><span class="icon-experimental-gray2"></span> <span class="experimental-label-long">Experimental Mode</span></div></div></div></li><li class="list-item game-card"><div class="game-card-container"><a href="https://www.<?= $url ?>/games/refer?SortFilter=17&amp;PlaceId=37688049&amp;Position=3&amp;PageType=Home" class="game-card-link"><div class="game-card-thumb-container"><img class="game-card-thumb" src="https://t5.rbxcdn.com/2aa83e462b37d7ca6a89d1a5cee8153b" alt="D-Day *UPDATED CITY*" thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;https://t5.rbxcdn.com/2aa83e462b37d7ca6a89d1a5cee8153b&quot;,&quot;RetryUrl&quot;:null,&quot;UserId&quot;:0,&quot;EndpointType&quot;:&quot;Avatar&quot;}" image-retry=""></div><div class="text-overflow game-card-name" title="D-Day *UPDATED CITY*" ng-non-bindable="">D-Day *UPDATED CITY*</div><div class="game-card-name-secondary">144 Playing</div><div class="game-card-experimental"><span class="icon-experimental-gray2"></span> <span class="experimental-label-long">Experimental Mode</span> <span class="experimental-label-short">Experimental</span></div><div class="game-card-vote"><div class="vote-bar" data-voting-processed="true"><div class="vote-thumbs-up"><span class="icon-like-gray-16x16"></span></div><div class="vote-container" data-upvotes="22534" data-downvotes="5776"><div id="vote-background" class="vote-background has-votes"></div><div class="vote-percentage" style="width: 79%;"></div><div class="vote-mask"><div class="segment seg-1"></div><div class="segment seg-2"></div><div class="segment seg-3"></div><div class="segment seg-4"></div></div></div><div class="vote-thumbs-down"><span class="icon-dislike-gray-16x16"></span></div></div><div class="vote-counts"><div id="vote-down-count" class="vote-down-count">5,776</div><div id="vote-up-count" class="vote-up-count">22,534</div></div></div></a><div class="game-card-footer"><div class="creator"><span class="text-label xsmall text-overflow"> By <a class="text-link" href="https://www.<?= $url ?>/users/11090940/profile" ng-non-bindable="">TonyGroce</a> </span></div><div class="game-card-experimental"><span class="icon-experimental-gray2"></span> <span class="experimental-label-long">Experimental Mode</span></div></div></div></li><li class="list-item game-card"><div class="game-card-container"><a href="https://www.<?= $url ?>/games/refer?SortFilter=17&amp;PlaceId=192800&amp;Position=4&amp;PageType=Home" class="game-card-link"><div class="game-card-thumb-container"><img class="game-card-thumb" src="https://t4.rbxcdn.com/1c72230616593227dcd4d60ef03070d2" alt="Work at a Pizza Place" thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;https://t4.rbxcdn.com/1c72230616593227dcd4d60ef03070d2&quot;,&quot;RetryUrl&quot;:null,&quot;UserId&quot;:0,&quot;EndpointType&quot;:&quot;Avatar&quot;}" image-retry=""></div><div class="text-overflow game-card-name" title="Work at a Pizza Place" ng-non-bindable="">Work at a Pizza Place</div><div class="game-card-name-secondary">16,696 Playing</div><div class="game-card-experimental"><span class="icon-experimental-gray2"></span> <span class="experimental-label-long">Experimental Mode</span> <span class="experimental-label-short">Experimental</span></div><div class="game-card-vote"><div class="vote-bar" data-voting-processed="true"><div class="vote-thumbs-up"><span class="icon-like-gray-16x16"></span></div><div class="vote-container" data-upvotes="690564" data-downvotes="39813"><div id="vote-background" class="vote-background has-votes"></div><div class="vote-percentage" style="width: 94%;"></div><div class="vote-mask"><div class="segment seg-1"></div><div class="segment seg-2"></div><div class="segment seg-3"></div><div class="segment seg-4"></div></div></div><div class="vote-thumbs-down"><span class="icon-dislike-gray-16x16"></span></div></div><div class="vote-counts"><div id="vote-down-count" class="vote-down-count">39,813</div><div id="vote-up-count" class="vote-up-count">690,564</div></div></div></a><div class="game-card-footer"><div class="creator"><span class="text-label xsmall text-overflow"> By <a class="text-link" href="https://www.<?= $url ?>/users/82471/profile" ng-non-bindable="">Dued1</a> </span></div><div class="game-card-experimental"><span class="icon-experimental-gray2"></span> <span class="experimental-label-long">Experimental Mode</span></div></div></div></li><li class="list-item game-card"><div class="game-card-container"><a href="https://www.<?= $url ?>/games/refer?SortFilter=17&amp;PlaceId=1115628072&amp;Position=5&amp;PageType=Home" class="game-card-link"><div class="game-card-thumb-container"><img class="game-card-thumb" src="https://t6.rbxcdn.com/7205723bd0c88f228b58fac6dcb40e1d" alt="[Easy Trade v2!]🚀Galaxy Clicker🚀" thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;https://t6.rbxcdn.com/7205723bd0c88f228b58fac6dcb40e1d&quot;,&quot;RetryUrl&quot;:null,&quot;UserId&quot;:0,&quot;EndpointType&quot;:&quot;Avatar&quot;}" image-retry=""></div><div class="text-overflow game-card-name" title="[Easy Trade v2!]🚀Galaxy Clicker🚀" ng-non-bindable="">[Easy Trade v2!]🚀Galaxy Clicker🚀</div><div class="game-card-name-secondary">39 Playing</div><div class="game-card-experimental"><span class="icon-experimental-gray2"></span> <span class="experimental-label-long">Experimental Mode</span> <span class="experimental-label-short">Experimental</span></div><div class="game-card-vote"><div class="vote-bar" data-voting-processed="true"><div class="vote-thumbs-up"><span class="icon-like-gray-16x16"></span></div><div class="vote-container" data-upvotes="4775" data-downvotes="689"><div id="vote-background" class="vote-background has-votes"></div><div class="vote-percentage" style="width: 87%;"></div><div class="vote-mask"><div class="segment seg-1"></div><div class="segment seg-2"></div><div class="segment seg-3"></div><div class="segment seg-4"></div></div></div><div class="vote-thumbs-down"><span class="icon-dislike-gray-16x16"></span></div></div><div class="vote-counts"><div id="vote-down-count" class="vote-down-count">689</div><div id="vote-up-count" class="vote-up-count">4,775</div></div></div></a><div class="game-card-footer"><div class="creator"><span class="text-label xsmall text-overflow"> By <a class="text-link" href="https://www.<?= $url ?>/groups/group.aspx?gid=3544804" ng-non-bindable="">Souless Studio's</a> </span></div><div class="game-card-experimental"><span class="icon-experimental-gray2"></span> <span class="experimental-label-long">Experimental Mode</span></div></div></div></li><li class="list-item game-card"><div class="game-card-container"><a href="https://www.<?= $url ?>/games/refer?SortFilter=17&amp;PlaceId=13865608&amp;Position=6&amp;PageType=Home" class="game-card-link"><div class="game-card-thumb-container"><img class="game-card-thumb" src="https://t7.rbxcdn.com/5347dc2e74b06af603978983627b11d1" alt="Black Magic" thumbnail="{&quot;Final&quot;:true,&quot;Url&quot;:&quot;https://t7.rbxcdn.com/5347dc2e74b06af603978983627b11d1&quot;,&quot;RetryUrl&quot;:null,&quot;UserId&quot;:0,&quot;EndpointType&quot;:&quot;Avatar&quot;}" image-retry=""></div><div class="text-overflow game-card-name" title="Black Magic" ng-non-bindable="">Black Magic</div><div class="game-card-name-secondary">199 Playing</div><div class="game-card-experimental"><span class="icon-experimental-gray2"></span> <span class="experimental-label-long">Experimental Mode</span> <span class="experimental-label-short">Experimental</span></div><div class="game-card-vote"><div class="vote-bar" data-voting-processed="true"><div class="vote-thumbs-up"><span class="icon-like-gray-16x16"></span></div><div class="vote-container" data-upvotes="29485" data-downvotes="5802"><div id="vote-background" class="vote-background has-votes"></div><div class="vote-percentage" style="width: 83%;"></div><div class="vote-mask"><div class="segment seg-1"></div><div class="segment seg-2"></div><div class="segment seg-3"></div><div class="segment seg-4"></div></div></div><div class="vote-thumbs-down"><span class="icon-dislike-gray-16x16"></span></div></div><div class="vote-counts"><div id="vote-down-count" class="vote-down-count">5,802</div><div id="vote-up-count" class="vote-up-count">29,485</div></div></div></a><div class="game-card-footer"><div class="creator"><span class="text-label xsmall text-overflow"> By <a class="text-link" href="https://www.<?= $url ?>/users/2096419/profile" ng-non-bindable="">Qaeo</a> </span></div><div class="game-card-experimental"><span class="icon-experimental-gray2"></span> <span class="experimental-label-long">Experimental Mode</span></div></div></div></li></ul></div><div class="col-xs-12 col-sm-6 home-right-col"><div class="section"><div class="section-header"><h3>Blog News</h3><a href="https://blog.<?= $url ?>" class="btn-control-xs btn-more btn-fixed-width">See More</a></div><div class="section-content"><ul class="blog-news">
          <li class="news"><span class="text-overflow news-link"><a href="https://blog.<?= $url ?>/2018/03/striking-gold-interview-berezaa/" ref="news-article" class="text-name text-lead">This is a blog</a></span></li>
          </ul></div></div></div><div class="col-xs-12 col-sm-6 home-left-col"><div class="section" id="feed-container" data-update-status-url="/home/updatestatus"><div class="section-header"><h3>My Feed</h3></div><div class="section-content"><div class="form-horizontal flex-box" id="statusForm" role="form"><div class="form-group"><input class="form-control input-field" id="txtStatusMessage" maxlength="254" placeholder="What are you up to?"><p class="form-control-label">Status update failed.</p></div><a type="button" class="btn-primary-md" id="shareButton">Share</a> <img id="loadingImage" class="share-login" alt="Sharing..." src="https://images.rbxcdn.com/ec4e85b0c4396cf753a06fade0a8d8af.gif" height="17" width="48"></div><ul class="vlist feeds">
          <li class="list-item">
            <a href="https://www.<?= $url ?>/My/Groups.aspx?gid=2618316" class="list-header">
              <img class="header-thumb" src="https://t7.rbxcdn.com/d8e55e5d17d2d5579621a0306b4637df">
            </a>
            <div class="list-body">
              <p class="list-content">
                <a href="https://www.<?= $url ?>/my/groups.aspx?gid=2618316">Group</a>
              </p>
              <p class="feedtext linkify">"Text"</p>
              (posted by <a href="https://www.<?= $url ?>/users/111334263/profile" class="text-name">User</a>) <span class="xsmall text-date-hint">Mar 5, 2018 | 7:20 AM</span>
              <a href="https://www.<?= $url ?>/abusereport/Feed?id=241715953&amp;redirectUrl=https%3A%2F%2Fwww.<?= $url ?>%2Fhome" class="abuse-report-modal">
                <span class="icon-report"></span>
              </a>
            </div>
          </li>
          <li class="list-item">
            <a href="https://www.<?= $url ?>/users/381748021/profile" class="avatar avatar-headshot-md list-header">
              <img src="https://t4.rbxcdn.com/9d7a7699be79cd8458579ee7b9589ee5" class="avatar-card-image">
            </a>
            <div class="list-body">
              <p class="list-content">
                <a href="https://www.<?= $url ?>/users/381748021/profile" class="text-name">User</a>
              </p>
              <p class="feedtext linkify">"Text"</p>
              <span class="xsmall text-date-hint">Mar 2, 2018 | 7:18 AM</span>
              <a href="https://www.<?= $url ?>/abusereport/Feed?id=240684116&amp;redirectUrl=https%3A%2F%2Fwww.<?= $url ?>%2Fhome" class="abuse-report-modal">
                <span class="icon-report"></span>
              </a>
            </div>
          </li>
          </ul>
          </div>
          </div>
          </div>
        </div>
        <div id="Skyscraper-Adp-Right" class="abp abp-container right-abp">
          
          
          <iframe name="Roblox_GameDetail_Right_160x600" allowtransparency="true" frameborder="0" height="612" scrolling="no" src="//www.<?php echo $url; ?>/userads/2" width="160" data-js-adtype="iframead"></iframe>
          
        </div>
        </div>
        <div ng-modules="robloxApp, notificationStream" ng-controller=notificationStreamController class="roblox-popover-content manual bottom" data-hidden-class-name=invisible id=notification-stream data-isnotificationcontentopen={{layout.isNotificationContentOpen}} ng-class="{'inApp': library.inApp,
                'isPhone': library.isPhone, 
                'invisible': !library.inApp &amp;&amp; !layout.isNotificationContentOpen}">
    <div notification-content></div>
  </div>
  <div id=chat-container class="chat chat-container" chat-base></div>
  <script>
    function urchinTracker() {}
  </script>
  <div id=PlaceLauncherStatusPanel style=display:none;width:300px data-new-plugin-events-enabled=True data-event-stream-for-plugin-enabled=True data-event-stream-for-protocol-enabled=True data-is-game-launch-interface-enabled=True data-is-protocol-handler-launch-enabled=True data-is-user-logged-in=True data-os-name=OSX data-protocol-name-for-client=roblox-player data-protocol-name-for-studio=roblox-studio data-protocol-url-includes-launchtime=true data-protocol-detection-enabled=true data-protocol-version=1>
    <div class="modalPopup blueAndWhite PlaceLauncherModal" style=min-height:160px>
      <div id=Spinner class=Spinner style="padding:20px 0"><img data-delaysrc=https://images.rbxcdn.com/e998fb4c03e8c2e30792f2f3436e9416.gif height=32 width=32 alt=Progress></div>
      <div id=status style="min-height:40px;text-align:center;margin:5px 20px">
        <div id=Starting class="PlaceLauncherStatus MadStatusStarting" style=display:block>Starting Roblox...</div>
        <div id=Waiting class="PlaceLauncherStatus MadStatusField">Connecting to Players...</div>
        <div id=StatusBackBuffer class="PlaceLauncherStatus PlaceLauncherStatusBackBuffer MadStatusBackBuffer"></div>
      </div>
      <div style=text-align:center;margin-top:1em><input type=button class="Button CancelPlaceLauncherButton translate" value=Cancel></div>
    </div>
  </div>
  <div id=ProtocolHandlerStartingDialog style=display:none class=protocol-handler-container>
    <div class="modalPopup ph-modal-popup">
      <div class=ph-modal-header></div>
      <div class=play-modal>
        <div class=ph-logo-row><img src=https://images.rbxcdn.com/6304dfebadecbb3b338a79a6a528936c.svg.gzip width=90 height=90 alt=R></div>
        <div class=ph-areyouinstalleddialog-content>
          <p class=larger-font-size>Roblox is now loading. Get ready to play!
          <div class=ph-startingdialog-spinner-row><img src=https://images.rbxcdn.com/4bed93c91f909002b1f17f05c0ce13d1.gif width=82 height=24></div>
        </div>
      </div>
      <div class="studio-modal hidden">
        <div class=ph-logo-row><img src=https://images.rbxcdn.com/3da410727fa2670dcb4f31316643138a.svg.gzip width=90 height=90 alt=R class=studio-logo-image></div>
        <div class=ph-areyouinstalleddialog-content>
          <p class="larger-font-size studio-text">Checking for Roblox Studio...
          <div class=ph-startingdialog-spinner-row><img src=https://images.rbxcdn.com/4bed93c91f909002b1f17f05c0ce13d1.gif width=82 height=24></div>
        </div>
      </div>
    </div>
  </div>
  <div id=ProtocolHandlerAreYouInstalled style=display:none class=protocol-handler-container>
    <div class=play-modal>
      <div class="modalPopup ph-modal-popup">
        <div class=ph-modal-header><span class="icon-close simplemodal-close"></span></div>
        <div class=ph-logo-row><img src=https://images.rbxcdn.com/6304dfebadecbb3b338a79a6a528936c.svg.gzip width=90 height=90 alt=R></div>
        <div class=ph-areyouinstalleddialog-content>
          <p class=larger-font-size>You're moments away from getting into the game!
          <div><button type=button class="btn btn-primary-md" id=ProtocolHandlerInstallButton> Download and Install Roblox </button></div>
          <div class=small><a href=https://en.help.roblox.com/hc/en-us/articles/204473560 class=text-name target=_blank>Click here for help</a></div>
        </div>
      </div>
    </div>
    <div class="studio-modal hidden">
      <div class="modalPopup ph-modal-popup">
        <div class=ph-modal-header><span class="icon-close simplemodal-close"></span></div>
        <div class=ph-logo-row><img src=https://images.rbxcdn.com/3da410727fa2670dcb4f31316643138a.svg.gzip width=95 height=95 alt=R></div>
        <div class=ph-areyouinstalleddialog-content>
          <p class="larger-font-size text-header">Get started creating your own games!
          <div><button type=button class="btn btn-primary-md btn-install" id=ProtocolHandlerStudioInstallButton> Download Studio </button></div>
        </div>
      </div>
    </div>
  </div>
  <div id=ProtocolHandlerClickAlwaysAllowed class=ph-clickalwaysallowed style=display:none>
    <p class=larger-font-size><span class=icon-moreinfo></span> Check <b>Always open links for Roblox</b> and click <b>Open Roblox</b> in the dialog box above to join games faster in the future!
  </div>
  <div id=videoPrerollPanel style=display:none>
    <div id=videoPrerollTitleDiv>Gameplay sponsored by:</div>
    <div id=content><video id=contentElement style=width:0;height:0></div>
    <div id=videoPrerollMainDiv></div>
    <div id=videoPrerollCompanionAd></div>
    <div id=videoPrerollLoadingDiv>Loading <span id=videoPrerollLoadingPercent>0%</span> - <span id=videoPrerollMadStatus class=MadStatusField>Starting game...</span><span id=videoPrerollMadStatusBackBuffer class=MadStatusBackBuffer></span>
      <div id=videoPrerollLoadingBar>
        <div id=videoPrerollLoadingBarCompleted></div>
      </div>
    </div>
    <div id=videoPrerollJoinBC><span>Get more with Builders Club!</span> <a href="https://www.roblox.com/premium/membership?ctx=preroll" target=_blank class="btn-medium btn-primary" id=videoPrerollJoinBCButton>Join Builders Club</a></div>
  </div>
  <script>
    $(function() {
      var videoPreRollDFP = Roblox.VideoPreRollDFP;
      if (videoPreRollDFP) {
        var customTargeting = Roblox.VideoPreRollDFP.customTargeting;
        videoPreRollDFP.showVideoPreRoll = false;
        videoPreRollDFP.loadingBarMaxTime = 33000;
        videoPreRollDFP.videoLoadingTimeout = 11000;
        videoPreRollDFP.videoPlayingTimeout = 41000;
        videoPreRollDFP.videoLogNote = "NotWindows";
        videoPreRollDFP.logsEnabled = true;
        videoPreRollDFP.adUnit = "/1015347/VideoPreroll";
        videoPreRollDFP.adTime = 15;
        videoPreRollDFP.includedPlaceIds = "205224386,183364845";
        videoPreRollDFP.isSwfPreloaderEnabled = false;
        videoPreRollDFP.isPrerollShownEveryXMinutesEnabled = true;
        videoPreRollDFP.isAgeTargetingEnabled = true;
        videoPreRollDFP.isAgeOrSegmentTargetingEnabled = true;
        videoPreRollDFP.isCompanionAdRenderedByGoogleTag = true;
        customTargeting.userAge = "63";
        customTargeting.userAgeOrSegment = "63";
        customTargeting.userGender = "Male";
        customTargeting.gameGenres = "";
        customTargeting.environment = "Production";
        customTargeting.adTime = "15";
        customTargeting.PLVU = false;
        $(videoPreRollDFP.checkEligibility);
      }
    });
  </script>
  <div id=GuestModePrompt_BoyGirl class="Revised GuestModePromptModal" style=display:none>
    <div class=simplemodal-close><a class="ImageButton closeBtnCircle_20h" style=cursor:pointer;margin-left:455px;top:7px;position:absolute></a></div>
    <div class=Title>Choose Your Avatar</div>
    <div style=min-height:275px;background-color:white>
      <div style=clear:both;height:25px></div>
      <div style=text-align:center>
        <div class="VisitButtonsGuestCharacter VisitButtonBoyGuest" style=float:left;margin-left:45px></div>
        <div class="VisitButtonsGuestCharacter VisitButtonGirlGuest" style=float:right;margin-right:45px></div>
      </div>
      <div style=clear:both;height:25px></div>
      <div class=RevisedFooter>
        <div style="width:200px;margin:10px auto 0 auto"><a href="https://www.roblox.com/?returnUrl=https%3A%2F%2Fwww.roblox.com%2Fhome%3Fnl%3Dtrue">
            <div class=RevisedCharacterSelectSignup></div>
          </a> <a class=HaveAccount href="https://www.roblox.com/newlogin?returnUrl=https%3A%2F%2Fwww.roblox.com%2Fhome%3Fnl%3Dtrue">I have an account</a></div>
      </div>
    </div>
  </div>
  <script>
    function checkRobloxInstall() {
      return RobloxLaunch.CheckRobloxInstall('https://www.roblox.com/install/download.aspx');
    }
  </script>
  <div id=InstallationInstructions style=display:none>
    <div class=ph-installinstructions>
      <div class=ph-modal-header><span class="icon-close simplemodal-close"></span>
        <h3 class=title>Thanks for playing Roblox</h3>
      </div>
      <div class=modal-content-container>
        <div class=ph-installinstructions-body>
          <ul class=modal-col-5>
            <li class=step1-of-5>
              <h2>1</h2>
              <p class=larger-font-size>Click <strong>Roblox.dmg</strong> to run the Roblox installer, which just downloaded via your web browser.</p><img data-delaysrc=https://images.rbxcdn.com/a70f6029e3dd81c18f837b958feb7f4c.png>
            <li class=step2-of-5>
              <h2>2</h2>
              <p class=larger-font-size>Double-click the Roblox app icon to begin the installation process.</p><img data-delaysrc=https://images.rbxcdn.com/57f502e3d6e41987f1fa2d988366feba.png>
            <li class=step3-of-5>
              <h2>3</h2>
              <p class=larger-font-size>Click <strong>Open</strong> when prompted by your computer.</p><img data-delaysrc=https://images.rbxcdn.com/13760ce84c2c382927405c0774886eba.png>
            <li class=step4-of-5>
              <h2>4</h2>
              <p class=larger-font-size>Click <strong>Ok</strong> once you've successfully installed Roblox.</p><img data-delaysrc=https://images.rbxcdn.com/e7439961916d36f97ea5e7af3b5077ad.png>
            <li class=step5-of-5>
              <h2>5</h2>
              <p class=larger-font-size>After installation, click <strong>Play</strong> below to join the action!
              <div class="VisitButton VisitButtonContinueGLI"><a class="btn btn-primary-lg disabled btn-full-width">Play</a></div>
          </ul>
        </div>
      </div>
      <div class=xsmall>The Roblox installer should download shortly. If it doesn’t, start the <a href=# class=text-link onclick="Roblox.ProtocolHandlerClientInterface.manualDownload();return false">download now.</a></div>
    </div>
  </div>
  <div class=InstallInstructionsImage data-modalwidth=970 style=display:none></div>
  <div id=pluginObjDiv style=height:1px;width:1px;visibility:hidden;position:absolute;top:0></div><iframe id=downloadInstallerIFrame name=downloadInstallerIFrame style=visibility:hidden;height:0;width:1px;position:absolute></iframe>
  <script src="//js.limrev.one/e2cb6070c58f829226a04307a3f3e28a.js.gzip"></script>
  <script>
    Roblox.Client._skip = null;
    Roblox.Client._CLSID = '76D50904-6780-4c8b-8986-1A7EE0B1716D';
    Roblox.Client._installHost = 'setup.limrev.one';
    Roblox.Client.ImplementsProxy = true;
    Roblox.Client._silentModeEnabled = true;
    Roblox.Client._bringAppToFrontEnabled = false;
    Roblox.Client._currentPluginVersion = '';
    Roblox.Client._eventStreamLoggingEnabled = true;
    Roblox.Client._installSuccess = function() {
      if (GoogleAnalyticsEvents) {
        GoogleAnalyticsEvents.ViewVirtual('InstallSuccess');
        GoogleAnalyticsEvents.FireEvent(['Plugin', 'Install Success']);
        if (Roblox.Client._eventStreamLoggingEnabled && typeof Roblox.GamePlayEvents != "undefined") {
          Roblox.GamePlayEvents.SendInstallSuccess(Roblox.Client._launchMode, play_placeId);
        }
      }
    }
    if ((window.chrome || window.safari) && window.location.hash == '#chromeInstall') {
      window.location.hash = '';
      var continuation = '(' + $.cookie('chromeInstall') + ')';
      play_placeId = $.cookie('chromeInstallPlaceId');
      Roblox.GamePlayEvents.lastContext = $.cookie('chromeInstallLaunchMode');
      $.cookie('chromeInstallPlaceId', null);
      $.cookie('chromeInstallLaunchMode', null);
      $.cookie('chromeInstall', null);
      RobloxLaunch._GoogleAnalyticsCallback = function() {
        var isInsideRobloxIDE = 'website';
        if (Roblox && Roblox.Client && Roblox.Client.isIDE && Roblox.Client.isIDE()) {
          isInsideRobloxIDE = 'Studio';
        };
        GoogleAnalyticsEvents.FireEvent(['Plugin Location', 'Launch Attempt', isInsideRobloxIDE]);
        GoogleAnalyticsEvents.FireEvent(['Plugin', 'Launch Attempt', 'Play']);
        EventTracker.fireEvent('GameLaunchAttempt_OSX', 'GameLaunchAttempt_OSX_Plugin');
        if (typeof Roblox.GamePlayEvents != 'undefined') {
          Roblox.GamePlayEvents.SendClientStartAttempt(null, play_placeId);
        }
      };
      Roblox.Client.ResumeTimer(eval(continuation));
    }
  </script>
  <div class="ConfirmationModal modalPopup unifiedModal smallModal" data-modal-handle=confirmation style=display:none><a class="genericmodal-close ImageButton closeBtnCircle_20h"></a>
    <div class=Title></div>
    <div class=GenericModalBody>
      <div class=TopBody>
        <div class="ImageContainer roblox-item-image" data-image-size=small data-no-overlays data-no-click><img class=GenericModalImage alt="generic image"></div>
        <div class=Message></div>
      </div>
      <div class="ConfirmationModalButtonContainer GenericModalButtonContainer"><a href="" id=roblox-confirm-btn><span></span></a> <a href="" id=roblox-decline-btn><span></span></a></div>
      <div class=ConfirmationModalFooter></div>
    </div>
    <script>
      Roblox = Roblox || {};
      Roblox.Resources = Roblox.Resources || {};
      Roblox.Resources.GenericConfirmation = {
        yes: "Yes",
        No: "No",
        Confirm: "Confirm",
        Cancel: "Cancel"
      };
    </script>
  </div>
  <div id=modal-confirmation class=modal-confirmation data-modal-type=confirmation>
    <div id=modal-dialog class=modal-dialog>
      <div class=modal-content>
        <div class=modal-header><button type=button class=close data-dismiss=modal> <span aria-hidden=true><span class=icon-close></span></span><span class=sr-only>Close</span> </button>
          <h5 class=modal-title></h5>
        </div>
        <div class=modal-body>
          <div class=modal-top-body>
            <div class=modal-message></div>
            <div class="modal-image-container roblox-item-image" data-image-size=medium data-no-overlays data-no-click><img class=modal-thumb alt="generic image"></div>
            <div class="modal-checkbox checkbox"><input id=modal-checkbox-input type=checkbox> <label for=modal-checkbox-input></label></div>
          </div>
          <div class=modal-btns><a href="" id=confirm-btn><span></span></a> <a href="" id=decline-btn><span></span></a></div>
          <div class="loading modal-processing"><img class=loading-default src=https://images.rbxcdn.com/4bed93c91f909002b1f17f05c0ce13d1.gif alt=Processing...></div>
        </div>
        <div class="modal-footer text-footer"></div>
      </div>
    </div>
    <script>
      Roblox = Roblox || {};
      Roblox.Resources = Roblox.Resources || {};
      Roblox.Resources.Dialog = {
        yes: "Yes",
        No: "No",
        OK: "OK",
        Confirm: "Confirm",
        Cancel: "Cancel",
        Agree: "Agree"
      };
    </script>
  </div>
  <script>
    Roblox = Roblox || {};
    Roblox.ContactUpsellMeta = {
      accountSettingsApiDomain: "https://accountsettings.limrev.one",
      apiProxyDomain: "https://api.limrev.one",
      codeLength: 6
    };
  </script>
  <div ng-modules="robloxApp, contactUpsell, emailModal , phoneModal" ng-controller=contactUpsellController></div>
  <script>
    var Roblox = Roblox || {};
    Roblox.jsConsoleEnabled = false;
  </script>
  <script>
    $(function() {
      Roblox.CookieUpgrader.domain = 'limrev.one';
      Roblox.CookieUpgrader.upgrade("GuestData", {
        expires: Roblox.CookieUpgrader.thirtyYearsFromNow
      });
      Roblox.CookieUpgrader.upgrade("RBXSource", {
        expires: function(cookie) {
          return Roblox.CookieUpgrader.getExpirationFromCookieValue("rbx_acquisition_time", cookie);
        }
      });
      Roblox.CookieUpgrader.upgrade("RBXViralAcquisition", {
        expires: function(cookie) {
          return Roblox.CookieUpgrader.getExpirationFromCookieValue("time", cookie);
        }
      });
      Roblox.CookieUpgrader.upgrade("RBXMarketing", {
        expires: Roblox.CookieUpgrader.thirtyYearsFromNow
      });
      Roblox.CookieUpgrader.upgrade("RBXSessionTracker", {
        expires: Roblox.CookieUpgrader.fourHoursFromNow
      });
      Roblox.CookieUpgrader.upgrade("RBXEventTrackerV2", {
        expires: Roblox.CookieUpgrader.thirtyYearsFromNow
      });
    });
  </script>
  <script src="//js.limrev.one/3a25d0eb48bed7aea3692d1ddbca637b.js.gzip"></script>
  <script src="//js.limrev.one/7825498393db2b92524062e06460f88a.js.gzip"></script>
  <div ng-modules=baseTemplateApp>
    <script src="//js.limrev.one/cbd9a121217c4887264ffe32686ecd52.js.gzip"></script>
  </div>
  <div ng-modules=pageTemplateApp>
    <script src="//js.limrev.one/289160c4f8099399d0ed5cb5023ca37d.js.gzip"></script>
  </div>
  <script src=//js.limrev.one/a1c1db9de0e1d721ba154d95aed2f861.js.gzip></script>
  <script>
    Roblox.config.externalResources = [];
    Roblox.config.paths['Pages.Catalog'] = 'https://js.rbxcdn.com/8d6821a4eed971155a4829a1e43336f4.js.gzip';
    Roblox.config.paths['Pages.CatalogShared'] = 'https://js.rbxcdn.com/5c0ac85bd60f40a577bfff7e323e3690.js.gzip';
    Roblox.config.paths['Widgets.AvatarImage'] = 'https://js.rbxcdn.com/823c7d686e6b3d8321275740fe498f9d.js.gzip';
    Roblox.config.paths['Widgets.DropdownMenu'] = 'https://js.rbxcdn.com/5cf0eb71249768c86649bbf0c98591b0.js.gzip';
    Roblox.config.paths['Widgets.GroupImage'] = 'https://js.rbxcdn.com/556af22c86bce192fb12defcd4d2121c.js.gzip';
    Roblox.config.paths['Widgets.HierarchicalDropdown'] = 'https://js.rbxcdn.com/7689b2fd3f7467640cda2d19e5968409.js.gzip';
    Roblox.config.paths['Widgets.ItemImage'] = 'https://js.rbxcdn.com/c2aa2fcc2b1e8ec82e1bacfdb9dfffea.js.gzip';
    Roblox.config.paths['Widgets.PlaceImage'] = 'https://js.rbxcdn.com/52ff803e77bb661839e8b2c93bb5ba27.js.gzip';
    Roblox.config.paths['Widgets.SurveyModal'] = 'https://js.rbxcdn.com/56ad7af86ee4f8bc82af94269ed50148.js.gzip';
  </script>
  <script>
    Roblox.XsrfToken.setToken('AltJRVSnjl0T');
  </script>
  <script>
    $(function() {
      Roblox.DeveloperConsoleWarning.showWarning();
    });
  </script>
  <script>
    $(function() {
      Roblox.JSErrorTracker.initialize({
        'suppressConsoleError': true
      });
    });
  </script>
  <script>
    $(function() {
      function trackReturns() {
        function dayDiff(d1, d2) {
          return Math.floor((d1 - d2) / 86400000);
        }
        if (!localStorage) {
          return false;
        }
        var cookieName = 'RBXReturn';
        var cookieOptions = {
          expires: 9001
        };
        var cookieStr = localStorage.getItem(cookieName) || "";
        var cookie = {};
        try {
          cookie = JSON.parse(cookieStr);
        } catch (ex) {}
        try {
          if (typeof cookie.ts === "undefined" || isNaN(new Date(cookie.ts))) {
            localStorage.setItem(cookieName, JSON.stringify({
              ts: new Date().toDateString()
            }));
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
  <script>
    var Roblox = Roblox || {};
    Roblox.UpsellAdModal = Roblox.UpsellAdModal || {};
    Roblox.UpsellAdModal.Resources = {
      title: "Remove Ads Like This",
      body: "Builders Club members do not see external ads like these.",
      accept: "Upgrade Now",
      decline: "No, thanks"
    };
  </script>
  <script src=//js.limrev.one/80ec894ff5392edec25e6bc79cbad240.js.gzip></script>
  
  <script src=//js.limrev.one/5926309ff55b06c732ffe910f2100b1e.js.gzip></script>
  <script src=//js.limrev.one/9ffc48c1bb642f795fdccc44f9ba50a4.js.gzip></script>
  <div id=push-notification-registrar-settings data-notificationshost=https://notifications.roblox.com data-reregistrationinterval=0 data-registrationpath=register-chrome data-shoulddeliveryendpointbesentduringregistration=False data-platformtype=ChromeOnDesktop></div>
  <div id=push-notification-registration-ui-settings data-noncontextualpromptallowed=true data-promptonfriendrequestsentenabled=true data-promptonprivatemessagesentenabled=false data-promptintervals=[604800000,1209600000,2419200000] data-notificationsdomain=https://notifications.roblox.com data-userid=145914210></div>
  <script type=text/template id=push-notifications-initial-global-prompt-template>
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
  <script type=text/template id=push-notifications-permissions-prompt-template>
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
                    <h5>Enable Desktop Push Notifications</h5>
                </div>
                <div class="modal-body">
                        <div>
                            Now just click <strong>Allow</strong> in your browser, and we'll start sending you push notifications!
                        </div>
                        <div class="push-notifications-permissions-prompt-instructional-image">
                                <img width="380" height="250" src="https://static.rbxcdn.com/images/Notifications/push-permission-prompt-chrome-mac-20160701.png" />
                        </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
</script>
  <script type=text/template id=push-notifications-permissions-disabled-instruction-template>
    <div class="modal fade" id="push-notifications-permissions-disabled-instruction-modal" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog rbx-modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">
                            <span class="icon-close"></span>
                        </span>
                        <span class="sr-only">Close</span>
                    </button>
                    <h5>Turn Push Notifications Back On</h5>
                </div>
                <div class="instructions-body">
                    <div class="reenable-step reenable-step1-of3">
                        <h1>1</h1>
                            <p class="larger-font-size push-notifications-modal-step-instruction">Click the green lock next to the URL bar to open up your site permissions.</p>
                            <img width="270" height="139" src="https://static.rbxcdn.com/images/Notifications/push-permission-unblock-step1-chrome-20160701.png">
                    </div>
                    <div class="reenable-step reenable-step2-of3">
                        <h1>2</h1>
                            <p class="larger-font-size push-notifications-modal-step-instruction">Click the drop-down arrow next to Notifications in the <strong>Permissions</strong> tab.</p>
                            <img width="270" height="229" src="https://static.rbxcdn.com/images/Notifications/push-permission-unblock-step2-chrome-20160701.png">
                    </div>
                    <div class="reenable-step reenable-step3-of3">
                        <h1>3</h1>
                            <p class="larger-font-size push-notifications-modal-step-instruction">Select <strong>Always allow on this site</strong> to turn notifications back on.</p>
                            <img width="270" height="229" src="https://static.rbxcdn.com/images/Notifications/push-permission-unblock-step3-chrome-20160701.png">
                    </div>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
</script>
  <script type=text/template id=push-notifications-successfully-enabled-template>
    <div class="push-notifications-global-prompt">
        <div class="alert-system-feedback">
            <div class="alert alert-success">
                Push notifications have been enabled!
            </div>
        </div>
    </div>
</script>
  <script type=text/template id=push-notifications-successfully-disabled-template>
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
            s.src = (document.location.protocol == "https:" ? "//sb" : "//b") + ".scorecardresearch.com/beacon.js";
            el.parentNode.insertBefore(s, el);
        })();
    </script>
    <noscript>
        <img src="//b.scorecardresearch.com/p?c1=2&c2=&c3=&c4=&c5=&c6=&c15=&cv=2.0&cj=1"/>

      </body>
      </html>