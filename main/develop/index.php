<?php
  include 'C:/wamp64/www/configuration/global.php';
  $site->LoginState(false, true);
  
  $page = "Games";
  
  if(isset($_GET['page']))
  {
    $page = $_GET['page'];
  }
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" xmlns:fb="http://www.facebook.com/2008/fbml" lang="en">
  <head data-machine-id="8aae9275-2b06-005f-0f62-4150a91533c8">
    <!-- MachineID: 8aae9275-2b06-005f-0f62-4150a91533c8 -->
    <title>Develop - ROBLOX</title>
    
    <?php $site->robloxHtml("HTMLStarterPack_MainCSS"); ?>
    
    <link rel="canonical" href="https://www.<?= $url ?>/develop?Page=ads" />
    
    
    <link href="https://images.rbxcdn.com/7bba321f4d8328683d6e59487ce514eb" rel="icon" />
    
    <link onerror='Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)' rel='stylesheet'  href='https://static.rbxcdn.com/css/page___909409c0c119adb6ee3ea206af60364e_m.css/fetch' />
    
    <?php $site->robloxHtml("JS_2"); ?>
    
    
    
    
    <script onerror='Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)' data-monitor='true' data-bundlename='header' type='text/javascript' src='https://js.rbxcdn.com/25eb3fbd65d214fc63d79d6a4cb8b951.js'></script>
    <script onerror='Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)' data-monitor='true' data-bundlename='page' type='text/javascript' src='https://js.rbxcdn.com/8baef469e3bed8cbae45b25c7f5540f6.js'></script>
    
    
  </head>
  <body id="rbx-body" dir="ltr" data-performance-relative-value="0.005" data-internal-page-name="Create" data-send-event-percentage="0">
    
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
    
    
    
    
    
    
    
    <div id="modal-confirmation" class="modal-confirmation" data-modal-type="confirmation">
      <div id="modal-dialog"  class="modal-dialog">
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
              <div class="modal-checkbox checkbox">
                <input id="modal-checkbox-input" type="checkbox"/>
                <label for="modal-checkbox-input"></label>
              </div>
            </div>
            <div class="modal-btns">
              <a href id="confirm-btn"><span></span></a>
              <a href id="decline-btn"><span></span></a>
            </div>
            <div class="loading modal-processing">
              <img class="loading-default" src='https://images.rbxcdn.com/4bed93c91f909002b1f17f05c0ce13d1.gif' alt="Processing..." />
            </div>
          </div>
          <div class="modal-footer text-footer">
            
          </div>
        </div>
      </div>
    </div>
    
    <div class="wrap no-gutter-ads logged-in">
      
      <?php echo $site->robloxHtml("Navigation"); ?>
      
      <script type="text/javascript">
        var Roblox = Roblox || {};
        (function () {
          if (Roblox && Roblox.Performance) {
            Roblox.Performance.setPerformanceMark("navigation_end");
          }
        })();
      </script>
      <div id="navContent" class="nav-content
      
      
      logged-in">
        <?php $site->robloxHtml("Alerts"); ?>
        <div class="nav-content-inner">
          <div id="MasterContainer">
            <script type="text/javascript">
              if (top.location != self.location) {
                top.location = self.location.href;
              }
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
                
              });
              
            </script>
            <main id="container-main" tabindex="-1">
              <div class="alert-container">
                
                <noscript><div class="alert-info">Please enable Javascript to use all the features on this site.</div></noscript>
                
                
                
                
              </div>
              
              <div id="AdvertisingLeaderboard">
                
                
                
                <iframe name="Roblox_Default_Top_728x90" 
                allowtransparency="true"
                frameborder="0"
                height="110"
                scrolling="no"
                data-src=""
                src="https://www.<?= $url ?>/userads/1"
                width="728"
                data-js-adtype="iframead"
                data-ad-slot="Roblox_Default_Top_728x90"></iframe>                        </div>
              <div id="BodyWrapper" class="">
                <div id="RepositionBody">
                  <div id="Body" class="body-width">
                    
                    <input name="__RequestVerificationToken" type="hidden" value="CfDJ8JK03m6z3ddPiZNTWp3-xQwrSLwo3pSlic5BC-HL_kqNxtWoK89MoQXK3ZnfNe702FUDLxkCBf6UVI-OBb9rytqgcCKdsvb4qGa-oBamtltV6FWZ1Yq0WcdEDwC3V-lBF17V-70JsGPd2aTToqntaXOdx76hRkAskdMGScc75qXtjcvbEcEz4MOpXMO8Qpr9Yg" />
                    <div id="DevelopTabs" class="tab-container">
                      <div id="MyCreationsTabLink"
                      class="tab-active"
                      data-url="/develop">
                        My Creations
                      </div>
                      <div id="GroupCreationsTabLink"
                      class=""
                      data-url="/develop/groups"
                      data-default-get-url=""
                      >
                        Group Creations
                      </div>
                      <div id="LibraryTabLink">
                        <a href="https://<?= $url ?>/develop/library">Creator Marketplace</a>
                      </div>
                        <div id="DevExTabLink" class="">
                          <a href="#">Developer Exchange</a>
                        </div>
                      </div>
                        <div>
                          <div id="MyCreationsTab" class="tab-active">
                            
                            
                            
                            <div class="BuildPageContent" data-groupid="">
                              
                              
                              <input id="assetTypeId" name="assetTypeId" type="hidden" value="0" />
                              
                              
                              <table id="build-page"
                              data-asset-type-id="0"
                              data-edit-opens-studio="True">
                                <tr>
                                  <td class="menu-area divider-right">
                                    
                                    <?php
                                         $classextra = "";
                                         if($page == "Games"){ $classextra = "tab-item-selected"; }
                                     ?>
                                    <a href="https://www.<?= $url ?>/develop?page=Games" class="tab-item <?= $classextra ?>">Games</a>
                                     <?php
                                         $classextra = "";
                                         if($page == "Places"){ $classextra = "tab-item-selected"; }
                                     ?>
                                    <a href="https://www.<?= $url ?>/develop?page=Places" class="tab-item <?= $classextra ?>">Places</a>
                                     <?php
                                         $classextra = "";
                                         if($page == "Models"){ $classextra = "tab-item-selected"; }
                                     ?>
                                    <a href="https://www.<?= $url ?>/develop?page=Models" class="tab-item <?= $classextra ?>">Models</a>
                                     <?php
                                         $classextra = "";
                                         if($page == "Decals"){ $classextra = "tab-item-selected"; }
                                     ?>
                                    <a href="https://www.<?= $url ?>/develop?page=Decals" class="tab-item <?= $classextra ?>">Decals</a>
                                     <?php
                                         $classextra = "";
                                         if($page == "Badges"){ $classextra = "tab-item-selected"; }
                                     ?>
                                    <a href="https://www.<?= $url ?>/develop?page=Badges" class="tab-item <?= $classextra ?>">Badges</a>
                                     <?php
                                         $classextra = "";
                                         if($page == "Passes"){ $classextra = "tab-item-selected"; }
                                     ?>
                                    <a href="https://www.<?= $url ?>/develop?page=Passes" class="tab-item <?= $classextra ?>">Passes</a>
                                     <?php
                                         $classextra = "";
                                         if($page == "Audios"){ $classextra = "tab-item-selected"; }
                                     ?>
                                    <a href="https://www.<?= $url ?>/develop?page=Audios" class="tab-item <?= $classextra ?>">Audio</a>
                                     <?php
                                         $classextra = "";
                                         if($page == "Animations"){ $classextra = "tab-item-selected"; }
                                     ?>
                                    <a href="https://www.<?= $url ?>/develop?page=Animations" class="tab-item <?= $classextra ?>">Animations</a>
                                     <?php
                                         $classextra = "";
                                         if($page == "Meshes"){ $classextra = "tab-item-selected"; }
                                     ?>
                                    <a href="https://www.<?= $url ?>/develop?page=Meshes" class="tab-item <?= $classextra ?>">Meshes</a>
                                     <?php
                                         $classextra = "";
                                         if($page == "ads"){ $classextra = "tab-item-selected"; }
                                     ?>
                                    <a href="https://www.<?= $url ?>/develop?page=ads" class="tab-item <?= $classextra ?>">User Ads</a>
                                    <a href="https://www.<?= $url ?>/sponsorships/list" class="tab-item ">Sponsored Ads</a>
                                     <?php
                                         $classextra = "";
                                         if($page == "Shirts"){ $classextra = "tab-item-selected"; }
                                     ?>
                                    <a href="https://www.<?= $url ?>/develop?page=Shirts" class="tab-item <?= $classextra ?>">Shirts</a>
                                     <?php
                                         $classextra = "";
                                         if($page == "TShirts"){ $classextra = "tab-item-selected"; }
                                     ?>
                                    <a href="https://www.<?= $url ?>/develop?page=TShirts" class="tab-item <?= $classextra ?>">T-Shirts</a>
                                     <?php
                                         $classextra = "";
                                         if($page == "Pants"){ $classextra = "tab-item-selected"; }
                                     ?>
                                    <a href="https://www.<?= $url ?>/develop?page=Pants" class="tab-item <?= $classextra ?>">Pants</a>
                                     <?php
                                         $classextra = "";
                                         if($page == "Plugins"){ $classextra = "tab-item-selected"; }
                                     ?>
                                    <a href="https://www.<?= $url ?>/develop?page=Plugins" class="tab-item <?= $classextra ?>">Plugins</a>
                                  </td>
                                  
                                  <td class="content-area ">
                                    
                                    
                                    <table class="section-header">
                                      <tr>
                                        <td class="content-title">
                                          <div>
                                            <?php
  $title = "";
  if($page == "ads")
    {
      $title = "User Ads";
      }
  
  ?>
                                            
                                            <h2 class="header-text"><?php echo $title; ?></h2>
                                          </div>
                                        </td>
                                      </tr>
                                    </table>
                                    <div class="items-container ">
                                      
                                      <?php if($page == "ads") { ?>
                                      <div id="dataHolder" data-minrobuxbid="5" data-start-date="0" data-end-date="0" data-now-in-seconds="1717362029.772179" data-before-next-in-seconds="0" />
                                      
                                      
                                      <div>
                                        You haven't created any ads. Check out the <a href="https://developer.<?= $url ?>/articles/Advertising" target="_blank">How Advertising Works</a> article in the help section now!
                                      </div>
                                      <?php } ?>
                                      
                                      
                                    </div>
                                    <div class="build-loading-container" style="display: none">
                                      <div class="buildpage-loading-container">
                                        <img alt="^_^" class="" src="https://images.rbxcdn.com/ec4e85b0c4396cf753a06fade0a8d8af.gif" />
                                      </div>
                                    </div>
                                  </td>
                                </tr>
                              </table>
                                <script type="text/javascript">
                                  var table = document.getElementById('build-page');
                                  if (table) {
                                    var target = document.getElementById("ads-manager-button");
                                    if (target) {
                                      target.setAttribute('href', Roblox.EnvironmentUrls.adsApi);
                                    }
                                  } 
                                </script>
                                
                                <div id="build-dropdown-menu">
                                  <a href="#" data-ad-activate-link="Run">Run Ad</a>
                                  <a href="#" data-ad-remove-link="Remove">Remove Ad</a>
                                </div>
                                
                                <div class="GenericModal modalPopup unifiedModal smallModal" style="display: none;">
                                  <div class="Title"></div>
                                  <div class="GenericModalBody">
                                    <div>
                                      <div class="ImageContainer">
                                        <img class="GenericModalImage" alt="generic image" />
                                      </div>
                                      <div class="Message"></div>
                                    </div>
                                    <div class="GenericModalButtonContainer">
                                      <a class="ImageButton btn-neutral btn-large roblox-ok">OK</a>
                                    </div>
                                  </div>
                                </div>
                                <script type="text/javascript">
                                  Roblox = Roblox || {};
                                  Roblox.BuildPage = Roblox.BuildPage || {};
                                  Roblox.BuildPage.AlertURL = "https://images.rbxcdn.com/43ac54175f3f3cd403536fedd9170c10.png";
                                </script>
                              </div>
                                <div class="Ads_WideSkyscraper">
                                  
                                  
                                  
                                  <iframe name="Roblox_Build_Right_160x600" 
                                  allowtransparency="true"
                                  frameborder="0"
                                  height="612"
                                  scrolling="no"
                                  data-src=""
                                  src="https://www.<?= $url ?>/userads/2"
                                  width="160"
                                  data-js-adtype="iframead"
                                  data-ad-slot="Roblox_Build_Right_160x600"></iframe></div>
                                
                                <script type="text/javascript">
                                  if (typeof Roblox === "undefined") {
                                    Roblox = {};
                                  }
                                  if (typeof Roblox.BuildPage === "undefined") {
                                    Roblox.BuildPage = {};
                                  }
                                  Roblox.BuildPage.Resources = {
                                    active: "Public"
                                    , inactive: "Private"
                                    , activatePlace: "Make Place Public"
                                    , editGame: "Edit Experience"
                                    , ok: "OK"
                                    , robloxStudio: "Roblox Studio"
                                    , openIn: "To edit this experience, open to this page in "
                                    , placeInactive: "Make Place Private"
                                    , toBuileHere: "To build here, please activate this place by clicking the "
                                    , inactiveButton: "Inactive button. "
                                    , createModel: "Create Model"
                                    , toCreate: "To create models, please use "
                                    , makeActive: "Make Public"
                                    , makeInactive: "Make Private"
                                    , purchaseComplete: "Purchase Complete!"
                                    , youHaveBid: "You have successfully bid "
                                    , confirmBid: "Confirm the Bid"
                                    , placeBid: "Place Bid"
                                    , cancel: "Cancel"
                                    , errorOccurred: "Error Occurred"
                                    , adDeleted: "Ad Deleted"
                                    , theAdWasDeleted: "The Ad has been deleted."
                                    , confirmDelete: "Confirm Deletion"
                                    , areYouSureDelete: "Are you sure you want to delete this Ad? <br />Doing so will stop your Ad from showing but you will still be charged your budget."
                                    , bidRejected: "Your bid was Rejected"
                                    , bidRange: "Bid value must be a number between "
                                    , bidRange2: "Bid value must be a number greater than "
                                    , and: " and "
                                    , yourRejected: "Your bid was Rejected"
                                    , estimatorExplanation: "This estimator uses data from ads run yesterday to guess how many impressions your ad will recieve."
                                    , estimatedImpressions: "Estimated Impressions "
                                    , makeAdBid: "Make Ad Bid"
                                    , wouldYouLikeToBid: "Would you like to bid "
                                    , verify: "Verify"
                                    , emailVerifiedTitle: "Verify Your Email"
                                    , emailVerifiedMessage: "You must verify your email before you can work on your place. You can verify your email on the <a href='https://www.<?= $url ?>/my/account?confirmemail=1'>Account</a> page."
                                    , continueText: "Continue"
                                    , profileRemoveTitle: "Remove from profile?"
                                    , profileRemoveMessage: "This experience is private and listed on your profile, do you wish to remove it?"
                                    , profileAddTitle: "Add to profile?"
                                    , profileAddMessage: "This experience is public, but not listed on your profile, do you wish to add it?"
                                    , deactivateTitle: "Make Experience Private"
                                    , deactivateBody: "This will shut down any active servers <br /><br />Do you still want to make this experience private?"
                                    , deactivateButton: "Make Private"
                                    , questionmarkImgUrl: "https://static.rbxcdn.com/images/Buttons/questionmark-12x12.png"
                                    , activationRequestFailed: "Request to make experience public failed. Please retry in a few minutes!"
                                    , deactivationRequestFailed: "Request to make experience private failed. Please retry in a few minutes!"
                                    , tooManyActiveMessage: "You have reached the maximum number of public places for your membership level. Make one of your existing places private before making this place public."
                                    , activeSlotsMessage: "{0} of {1} public slots used"
                                  };
                                </script>
                              </div>
                                
                                <div id="GroupCreationsTab" class="" >
                                  
                                  
                                  
                                  <div class="BuildPageContent" data-groupid="34367193">
                                    
                                    
                                    <input id="assetTypeId" name="assetTypeId" type="hidden" value="0" />
                                    <input id="groupId" name="groupId" type="hidden" value="34367193" />
                                    
                                    <table id="build-page"
                                    data-asset-type-id="0"
                                    data-edit-opens-studio="True">
                                      <tr>
                                        <td class="menu-area divider-right">
                                          
                                          <div class="groups-dropdown-container" data-get-url="https://www.<?= $url ?>/develop/groups">
                                            <label class="sort-label">Select Group:</label>
                                            <select id="SelectedGroupId" name="SelectedGroupId">
                                            </select>
                                          </div>
                                          
                                          <a href="https://www.<?= $url ?>/develop?page=Games" class="tab-item ">Games</a>
                                          <a href="https://www.<?= $url ?>/develop?page=Places" class="tab-item ">Places</a>
                                          <a href="https://www.<?= $url ?>/develop?page=Models" class="tab-item ">Models</a>
                                          <a href="https://www.<?= $url ?>/develop?page=Decals" class="tab-item ">Decals</a>
                                          <a href="https://www.<?= $url ?>/develop?page=Badges" class="tab-item ">Badges</a>
                                          <a href="https://www.<?= $url ?>/develop?page=Passes" class="tab-item ">Passes</a>
                                          <a href="https://www.<?= $url ?>/develop?page=Audios" class="tab-item ">Audio</a>
                                          <a href="https://www.<?= $url ?>/develop?page=Animations" class="tab-item ">Animations</a>
                                          <a href="https://www.<?= $url ?>/develop?page=Meshes" class="tab-item ">Meshes</a>
                                          <a href="https://www.<?= $url ?>/develop?page=ads" class="tab-item tab-item-selected">User Ads</a>
                                          <a href="https://www.<?= $url ?>/sponsorships/list" class="tab-item ">Sponsored Ads</a>
                                          <a href="https://www.<?= $url ?>/develop?page=Shirts" class="tab-item ">Shirts</a>
                                          <a href="https://www.<?= $url ?>/develop?page=TShirts" class="tab-item ">T-Shirts</a>
                                          <a href="https://www.<?= $url ?>/develop?page=Pants" class="tab-item ">Pants</a>
                                          <a href="https://www.<?= $url ?>/develop?page=Plugins" class="tab-item ">Plugins</a>
                                        </td>
                                        
                                        <td class="content-area ">
                                          
                                          
                                          <table class="section-header">
                                            <tr>
                                              <td class="content-title">
                                                <div>
                                                  
                                                  
                                                  <h2 class="header-text">User Ads</h2>
                                                </div>
                                              </td>
                                            </tr>
                                          </table>
                                          <div class="items-container ">
                                            
                                            
                                            <div id="dataHolder" data-minrobuxbid="5" data-start-date="0" data-end-date="0" data-now-in-seconds="1717362030.077758" data-before-next-in-seconds="0" />
                                            
                                            
                                            <div>
                                              You haven't created any ads. Check out the <a href="https://developer.<?= $url ?>/articles/Advertising" target="_blank">How Advertising Works</a> article in the help section now!
                                            </div>
                                            
                                            
                                          </div>
                                          <div class="build-loading-container" style="display: none">
                                            <div class="buildpage-loading-container">
                                              <img alt="^_^" class="" src="https://images.rbxcdn.com/ec4e85b0c4396cf753a06fade0a8d8af.gif" />
                                            </div>
                                          </div>
                                        </td>
                                      </tr>
                                    </table>
                                      <script type="text/javascript">
                                        var table = document.getElementById('build-page');
                                        if (table) {
                                          var target = document.getElementById("ads-manager-button");
                                          if (target) {
                                            target.setAttribute('href', Roblox.EnvironmentUrls.adsApi);
                                          }
                                        } 
                                      </script>
                                      
                                      <div id="build-dropdown-menu">
                                        <a href="#" data-ad-activate-link="Run">Run Ad</a>
                                        <a href="#" data-ad-remove-link="Remove">Remove Ad</a>
                                      </div>
                                      
                                      <div class="GenericModal modalPopup unifiedModal smallModal" style="display: none;">
                                        <div class="Title"></div>
                                        <div class="GenericModalBody">
                                          <div>
                                            <div class="ImageContainer">
                                              <img class="GenericModalImage" alt="generic image" />
                                            </div>
                                            <div class="Message"></div>
                                          </div>
                                          <div class="GenericModalButtonContainer">
                                            <a class="ImageButton btn-neutral btn-large roblox-ok">OK</a>
                                          </div>
                                        </div>
                                      </div>
                                      <script type="text/javascript">
                                        Roblox = Roblox || {};
                                        Roblox.BuildPage = Roblox.BuildPage || {};
                                        Roblox.BuildPage.AlertURL = "https://images.rbxcdn.com/43ac54175f3f3cd403536fedd9170c10.png";
                                      </script>
                                    </div>
                                      <div class="Ads_WideSkyscraper">
                                      </div>
                                      
                                      <script type="text/javascript">
                                        if (typeof Roblox === "undefined") {
                                          Roblox = {};
                                        }
                                        if (typeof Roblox.BuildPage === "undefined") {
                                          Roblox.BuildPage = {};
                                        }
                                        Roblox.BuildPage.Resources = {
                                          active: "Public"
                                          , inactive: "Private"
                                          , activatePlace: "Make Place Public"
                                          , editGame: "Edit Experience"
                                          , ok: "OK"
                                          , robloxStudio: "Roblox Studio"
                                          , openIn: "To edit this experience, open to this page in "
                                          , placeInactive: "Make Place Private"
                                          , toBuileHere: "To build here, please activate this place by clicking the "
                                          , inactiveButton: "Inactive button. "
                                          , createModel: "Create Model"
                                          , toCreate: "To create models, please use "
                                          , makeActive: "Make Public"
                                          , makeInactive: "Make Private"
                                          , purchaseComplete: "Purchase Complete!"
                                          , youHaveBid: "You have successfully bid "
                                          , confirmBid: "Confirm the Bid"
                                          , placeBid: "Place Bid"
                                          , cancel: "Cancel"
                                          , errorOccurred: "Error Occurred"
                                          , adDeleted: "Ad Deleted"
                                          , theAdWasDeleted: "The Ad has been deleted."
                                          , confirmDelete: "Confirm Deletion"
                                          , areYouSureDelete: "Are you sure you want to delete this Ad? <br />Doing so will stop your Ad from showing but you will still be charged your budget."
                                          , bidRejected: "Your bid was Rejected"
                                          , bidRange: "Bid value must be a number between "
                                          , bidRange2: "Bid value must be a number greater than "
                                          , and: " and "
                                          , yourRejected: "Your bid was Rejected"
                                          , estimatorExplanation: "This estimator uses data from ads run yesterday to guess how many impressions your ad will recieve."
                                          , estimatedImpressions: "Estimated Impressions "
                                          , makeAdBid: "Make Ad Bid"
                                          , wouldYouLikeToBid: "Would you like to bid "
                                          , verify: "Verify"
                                          , emailVerifiedTitle: "Verify Your Email"
                                          , emailVerifiedMessage: "You must verify your email before you can work on your place. You can verify your email on the <a href='https://www.<?= $url ?>/my/account?confirmemail=1'>Account</a> page."
                                          , continueText: "Continue"
                                          , profileRemoveTitle: "Remove from profile?"
                                          , profileRemoveMessage: "This experience is private and listed on your profile, do you wish to remove it?"
                                          , profileAddTitle: "Add to profile?"
                                          , profileAddMessage: "This experience is public, but not listed on your profile, do you wish to add it?"
                                          , deactivateTitle: "Make Experience Private"
                                          , deactivateBody: "This will shut down any active servers <br /><br />Do you still want to make this experience private?"
                                          , deactivateButton: "Make Private"
                                          , questionmarkImgUrl: "https://static.rbxcdn.com/images/Buttons/questionmark-12x12.png"
                                          , activationRequestFailed: "Request to make experience public failed. Please retry in a few minutes!"
                                          , deactivationRequestFailed: "Request to make experience private failed. Please retry in a few minutes!"
                                          , tooManyActiveMessage: "You have reached the maximum number of public places for your membership level. Make one of your existing places private before making this place public."
                                          , activeSlotsMessage: "{0} of {1} public slots used"
                                        };
                                      </script>
                                    </div>
                                      
                                      <div id="LibraryTab" class="">
                                        <div class="loading" id="LibraryLoadingIndicatorContainer">
                                          <img id="LibraryLoadingIndicator" src="https://images.rbxcdn.com/ec4e85b0c4396cf753a06fade0a8d8af.gif" alt="Progress" />
                                        </div>
                                      </div>
                                    </div>
                                      
                                      <div id="AdPreviewModal" class="simplemodal-data" style="display: none;">
                                        <div id="ConfirmationDialog" style="overflow: hidden">
                                          <div id="AdPreviewContainer" style="overflow: hidden">
                                          </div>
                                        </div>
                                      </div>
                                      
                                      <div id="clothing-upload-fun-captcha-container">
                                        <div id="clothing-upload-fun-captcha-backdrop"></div>
                                        <div id="clothing-upload-fun-captcha-modal"></div>
                                      </div>
                                      
                                      <script type="text/javascript">
                                        Roblox.CatalogValues = Roblox.CatalogValues || {};
                                        Roblox.CatalogValues.CatalogContentsUrl = "";
                                        Roblox.CatalogValues.CatalogContext = 2;
                                        Roblox.CatalogValues.CatalogContextDevelopOnly = 2;
                                        Roblox.CatalogValues.ContainerID = "LibraryTab";
                                        
                                        $(function(){
                                          if(Roblox && Roblox.AdsHelper && Roblox.AdsHelper.AdRefresher) {
                                            Roblox.AdsHelper.AdRefresher.globalCreateNewAdEnabled = true;
                                            Roblox.AdsHelper.AdRefresher.adRefreshRateInMilliseconds = 3000;
                                          }
                                        });
                                      </script>
                                      
                                      <div style="clear: both"></div>
                                    </div>
                                    </div>
                                    </div>
                                      <!--Bootstrap Footer React Component -->
                                      
                                      <footer class="container-footer" id="footer-container"
                                      data-is-giftcards-footer-enabled="True">
                                      </footer>                </main>
                                    </div>        </div>    </div></div>    <div id="chat-container"
                                      class="chat chat-container dark-theme builder-font"
                                      chat-base>
                                      </div>
                                      
                                      
                                      <script type="text/javascript">
                                        if (typeof Roblox === "undefined") {
                                          Roblox = {};
                                        }
                                        if (typeof Roblox.PlaceLauncher === "undefined") {
                                          Roblox.PlaceLauncher = {};
                                        }
                                        var isRobloxIconEnabledForRetheme = "True";
                                        var robloxIcon = isRobloxIconEnabledForRetheme === 'True' ? "<span class='icon-logo-r-95'></span>" : "<img src='https://images.rbxcdn.com/8e7879f99cfa7cc3b1fce74f8191be03.svg' width='90' height='90' alt='R'/>";
                                        Roblox.PlaceLauncher.Resources = {
                                          RefactorEnabled: "True",
                                          IsProtocolHandlerBaseUrlParamEnabled: "False",
                                          ProtocolHandlerAreYouInstalled: {
                                            play: {
                                              content: robloxIcon + "<p>You&#x27;re moments away from getting into the experience!</p>",
                                              buttonText: "Download and Install Roblox",
                                              footerContent: "<a href='https://assetgame.<?= $url ?>/game/help'class= 'text-name small' target='_blank' >Click here for help</a> "
                                            },
                                            studio: {
                                              content: "<img src='https://images.rbxcdn.com/f25e4cadae29ae9a57a962126b2d2e2a.png' width='95' height='95' alt='R' /><p>Get started creating your own experiences!</p>",
                                              buttonText: "Download Studio"
                                            }
                                          },
                                          ProtocolHandlerStartingDialog: {
                                            play: {
                                              content: robloxIcon + "<p>Roblox is now loading. Get ready!</p>"
                                            },
                                            studio: {
                                              content: "<img src='https://images.rbxcdn.com/f25e4cadae29ae9a57a962126b2d2e2a.png' width='95' height='95' alt='R' /><p>Checking for Roblox Studio...</p>"
                                            },
                                            loader: "<span class='spinner spinner-default'></span>"
                                          }
                                        };
                                      </script>
                                      <div id="PlaceLauncherStatusPanel" style="display:none;width:300px" data-new-plugin-events-enabled="True" data-event-stream-for-plugin-enabled="True" data-event-stream-for-protocol-enabled="True" data-is-game-launch-interface-enabled="True" data-is-protocol-handler-launch-enabled="True" data-is-user-logged-in="<?php echo $loggedin3; ?>" data-os-name="Windows" data-protocol-name-for-client="s16rev-player-b16" data-protocol-name-for-studio="s16rev-studio-b16" data-protocol-url-includes-launchtime="true" data-protocol-detection-enabled="true">
    <div class="modalPopup blueAndWhite PlaceLauncherModal" style="min-height: 160px">
        <div id="Spinner" class="Spinner" style="padding:20px 0;">
            <img data-delaysrc="https://images.rbxcdn.com/e998fb4c03e8c2e30792f2f3436e9416.gif" height="32" width="32" alt="Progress"/>
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
    
                                      <div id="ProtocolHandlerClickAlwaysAllowed"
                                      class="ph-clickalwaysallowed"
                                      
                                      style="display:none;">
                                        <p class="larger-font-size">
                                          <span class="icon-moreinfo"></span>
                                          
                                          Check <strong>Always open links for URL: Roblox Protocol</strong> and click <strong>Open URL: Roblox Protocol</strong> in the dialog box above to join experiences faster in the future!
                                        </p>
                                      </div>
                                        
                                        <script type="text/javascript">
                                          function checkRobloxInstall() {
                                            return RobloxLaunch.CheckRobloxInstall('https://www.<?= $url ?>/Download');
                                          }
                                        </script>
                                        
                                        <div id="InstallationInstructions" class="" style="display:none;">
                                          <div class="ph-installinstructions">
                                            <div class="ph-modal-header">
                                              <span class="icon-close simplemodal-close"></span>
                                              <h3 class="title">Thanks for visiting Roblox</h3>
                                            </div>
                                            <div class="modal-content-container"> 
                                              <div class="ph-installinstructions-body ">
                                                
                                                <ul class="modal-col-4">
                                                  <li class="step1-of-4">
                                                    <h2>1</h2>
                                                    <p class="larger-font-size">Click <strong>RobloxPlayer.exe</strong> to run the Roblox installer, which just downloaded via your web browser.</p>
                                                    <div style="margin-top:60px">
                                                      <img data-delaysrc="https://images.rbxcdn.com/bcf5d84d4469c075e6296bfbc4deabb1" />
                                                    </div>
                                                  </li>
                                                  <li class="step2-of-4">
                                                    <h2>2</h2>
                                                    <p class="larger-font-size">Click <strong>Run</strong> when prompted by your computer to begin the installation process.</p>
                                                    <img data-delaysrc="https://images.rbxcdn.com/51328932dedb5d8d61107272cc1a27db.png" />
                                                  </li>
                                                  <li class="step3-of-4">
                                                    <h2>3</h2>
                                                    <p class="larger-font-size">Click <strong>Ok</strong> once you've successfully installed Roblox.</p>
                                                    <img data-delaysrc="https://images.rbxcdn.com/bbdb38de8bb89ecc07730b41666a26a4" />
                                                  </li>
                                                  <li class="step4-of-4">
                                                    <h2>4</h2>
                                                    <p class="larger-font-size">After installation, click <strong>Join</strong> below to join the action!</p>
                                                    <div class="VisitButton VisitButtonContinueGLI">
                                                      <a class="btn btn-primary-lg disabled btn-full-width">Join</a>
                                                    </div>
                                                  </li>
                                                </ul>
                                              </div>
                                            </div>
                                            <div class="xsmall">
                                              The Roblox installer should download shortly. If it doesn’t, start the <a id="GameLaunchManualInstallLink" href="#" class="text-link">download now.</a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="InstallInstructionsImage" data-modalwidth="970" style="display:none;"></div>
                                        
                                        <div id="pluginObjDiv" style="height:1px;width:1px;visibility:hidden;position: absolute;top: 0;"></div>
                                        <iframe id="downloadInstallerIFrame" name="downloadInstallerIFrame" style="visibility:hidden;height:0;width:1px;position:absolute"></iframe>
                                        
                                        <script onerror='Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)' data-monitor='true' data-bundlename='clientinstaller' type='text/javascript' src='https://js.rbxcdn.com/00e1d37a965af4242dc6b296d6c883f0.js'></script>
                                        
                                        <script type="text/javascript">
                                          Roblox.Client._skip = null;
                                          Roblox.Client._CLSID = '76D50904-6780-4c8b-8986-1A7EE0B1716D';
                                          Roblox.Client._installHost = 'setup.<?= $url ?>';
                                          Roblox.Client.ImplementsProxy = true;
                                          Roblox.Client._silentModeEnabled = true;
                                          Roblox.Client._bringAppToFrontEnabled = false;
                                          Roblox.Client._currentPluginVersion = '';
                                          Roblox.Client._eventStreamLoggingEnabled = true;
                                          
                                          
                                          Roblox.Client._installSuccess = function() {
                                            if(GoogleAnalyticsEvents){
                                              GoogleAnalyticsEvents.ViewVirtual('InstallSuccess');
                                              GoogleAnalyticsEvents.FireEvent(['Plugin','Install Success']);
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
                                              RobloxLaunch._GoogleAnalyticsCallback = function() { var isInsideRobloxIDE = 'website'; if (Roblox && Roblox.Client && Roblox.Client.isIDE && Roblox.Client.isIDE()) { isInsideRobloxIDE = 'Studio'; };GoogleAnalyticsEvents.FireEvent(['Plugin Location', 'Launch Attempt', isInsideRobloxIDE]);GoogleAnalyticsEvents.FireEvent(['Plugin', 'Launch Attempt', 'Play']);EventTracker.fireEvent('GameLaunchAttempt_Win32', 'GameLaunchAttempt_Win32_Plugin'); if (typeof Roblox.GamePlayEvents != 'undefined') { Roblox.GamePlayEvents.SendClientStartAttempt(null, play_placeId); }  }; 
                                              Roblox.Client.ResumeTimer(eval(continuation));
                                            }
                                        </script>
                                        
                                        <div class="ConfirmationModal modalPopup unifiedModal smallModal" data-modal-handle="confirmation" style="display:none;">
                                          <a class="genericmodal-close ImageButton closeBtnCircle_20h"></a>
                                          <div class="Title"></div>
                                          <div class="GenericModalBody">
                                            <div class="TopBody">
                                              <div class="ImageContainer roblox-item-image" data-image-size="small" data-no-overlays data-no-click>
                                                <img class="GenericModalImage" alt="generic image" />
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
                                            
                                            Roblox.Resources.GenericConfirmation = {
                                              yes: "Yes",
                                              No: "No",
                                              Confirm: "Confirm",
                                              Cancel: "Cancel"
                                            };
                                          </script>
                                        </div>
                                        
                                        <?php $site->robloxHtml("JS_1"); ?>
                                      </body>
                                      </html>
