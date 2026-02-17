

<?php
    include 'C:/wamp64/www/configuration/global.php';
    $site->LoginState(false, true);
?>

<!DOCTYPE html>
<!--[if IE 8]><html class="ie8" ng-app="robloxApp"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en">
<!--<![endif]-->
<head data-machine-id="facf4f3b-56b1-869a-f07b-6da5601c90cf">
    <!-- MachineID: facf4f3b-56b1-869a-f07b-6da5601c90cf -->
    <title>Home - Roblox</title>

<meta http-equiv="X-UA-Compatible" content="IE=edge,requiresActiveX=true" />
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Roblox Corporation" />
<meta name="description" content="Roblox is a global platform that brings people together through play." />
<meta name="keywords" content="free games, online games, building games, virtual worlds, free mmo, gaming cloud, physics engine" />

    <meta name="apple-itunes-app" content="app-id=431946152" />




<script type="application/ld+json">
    {
    "@context" : "http://schema.org",
    "@type" : "Organization",
    "name" : "Roblox",
    "url" : "http://www.<?php echo $url; ?>/",
    "image" : "http://images.rbxcdn.com/fc3f3e3158fc20ebb5ccc972064ebfe6.png",
    "logo" : "http://images.rbxcdn.com/fc3f3e3158fc20ebb5ccc972064ebfe6.png",
    "email" : "info@<?php echo $url; ?>",
    "sameAs" : [
    "http://www.facebook.com/roblox/",
    "http://twitter.com/roblox",
    "http://www.linkedin.com/company/147977",
    "http://www.instagram.com/roblox/",
    "http://www.youtube.com/user/roblox",
    "http://www.twitch.tv/roblox"
    ]
    }
</script>

<meta ng-csp="no-unsafe-eval">

    <meta name="user-data"
          data-userid="<?php echo $user['id']; ?>"
          data-name="<?php echo protecc($user['username']); ?>"
          data-displayName="<?php echo protecc($user['displayname']); ?>"
          data-isunder13="false" 
          data-created="05/01/2018 17:09:10" 
          data-ispremiumuser="false"
          data-hasverifiedbadge="false"/>

<meta name="locale-data"
      data-language-code="en_us"
      data-language-name="English"
      data-url-locale=""
      data-override-language-header="false" />
<meta name="device-meta"
      data-device-type="computer"
      data-is-in-app="false"
      data-is-desktop="true"
      data-is-phone="false"
      data-is-tablet="false"
      data-is-console="false"
      data-is-android-app="false"
      data-is-ios-app="false"
      data-is-uwp-app="false"
      data-is-xbox-app="false"
      data-is-amazon-app="false"
      data-is-win32-app="false"
      data-is-studio="false"
      data-is-game-client-browser="false"
      data-is-ios-device="false"
      data-is-android-device="false"
      data-is-universal-app="false"
      data-app-type="unknown"
      data-is-chrome-os="false"
/>
<meta name="environment-meta"
      data-is-testing-site="false" />

<meta id="roblox-display-names" data-enabled="true"></meta>

<meta name="hardware-backed-authentication-data"
      data-is-secure-authentication-intent-enabled="true"
      data-is-bound-auth-token-enabled="true"
      data-bound-auth-token-whitelist="{&quot;Whitelist&quot;:[{&quot;apiSite&quot;:&quot;auth.<?php echo $url; ?>&quot;,&quot;sampleRate&quot;:&quot;100&quot;},{&quot;apiSite&quot;:&quot;accountsettings.<?php echo $url; ?>&quot;,&quot;sampleRate&quot;:&quot;100&quot;},{&quot;apiSite&quot;:&quot;inventory.<?php echo $url; ?>&quot;,&quot;sampleRate&quot;:&quot;100&quot;},{&quot;apiSite&quot;:&quot;accountinformation.<?php echo $url; ?>&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;billing.<?php echo $url; ?>&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;premiumfeatures.<?php echo $url; ?>&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;trades.<?php echo $url; ?>&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;groups.<?php echo $url; ?>&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;adconfiguration.<?php echo $url; ?>&quot;,&quot;sampleRate&quot;:&quot;100&quot;},  {&quot;apiSite&quot;:&quot;ads.<?php echo $url; ?>&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;assetdelivery.<?php echo $url; ?>&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;avatar.<?php echo $url; ?>&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;badges.<?php echo $url; ?>&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;catalog.<?php echo $url; ?>&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;chat.<?php echo $url; ?>&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;chatmoderation.<?php echo $url; ?>&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;clientsettings.<?php echo $url; ?>&quot;,&quot;sampleRate&quot;:&quot;100&quot;},  {&quot;apiSite&quot;:&quot;contacts.<?php echo $url; ?>&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;contentstore.<?php echo $url; ?>&quot;,&quot;sampleRate&quot;:&quot;100&quot;},  {&quot;apiSite&quot;:&quot;develop.<?php echo $url; ?>&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;economy.<?php echo $url; ?>&quot;,&quot;sampleRate&quot;:&quot;100&quot;},  {&quot;apiSite&quot;:&quot;engagementpayouts.<?php echo $url; ?>&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;followings.<?php echo $url; ?>&quot;,&quot;sampleRate&quot;:&quot;100&quot;},  {&quot;apiSite&quot;:&quot;friends.<?php echo $url; ?>&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;gameinternationalization.<?php echo $url; ?>&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;gamejoin.<?php echo $url; ?>&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;gamepersistence.<?php echo $url; ?>&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;games.<?php echo $url; ?>&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;groupsmoderation.<?php echo $url; ?>&quot;,&quot;sampleRate&quot;:&quot;100&quot;},{&quot;apiSite&quot;:&quot;itemconfiguration.<?php echo $url; ?>&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;locale.<?php echo $url; ?>&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;localizationtables.<?php echo $url; ?>&quot;,&quot;sampleRate&quot;:&quot;100&quot;},  {&quot;apiSite&quot;:&quot;metrics.<?php echo $url; ?>&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;moderation.<?php echo $url; ?>&quot;,&quot;sampleRate&quot;:&quot;100&quot;},  {&quot;apiSite&quot;:&quot;notifications.<?php echo $url; ?>&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;points.<?php echo $url; ?>&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;presence.<?php echo $url; ?>&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;publish.<?php echo $url; ?>&quot;,&quot;sampleRate&quot;:&quot;100&quot;},  {&quot;apiSite&quot;:&quot;privatemessages.<?php echo $url; ?>&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;thumbnailsresizer.<?php echo $url; ?>&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;thumbnails.<?php echo $url; ?>&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;translationroles.<?php echo $url; ?>&quot;,&quot;sampleRate&quot;:&quot;100&quot;},  {&quot;apiSite&quot;:&quot;translations.<?php echo $url; ?>&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;twostepverification.<?php echo $url; ?>&quot;,&quot;sampleRate&quot;:&quot;100&quot;},  {&quot;apiSite&quot;:&quot;usermoderation.<?php echo $url; ?>&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;users.<?php echo $url; ?>&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;voice.<?php echo $url; ?>&quot;,&quot;sampleRate&quot;:&quot;100&quot;}, {&quot;apiSite&quot;:&quot;realtimenotifications.<?php echo $url; ?>&quot;,&quot;sampleRate&quot;:&quot;100&quot;}]}"
      data-bound-auth-token-exemptlist="{&quot;Exemptlist&quot;:[]}"
      data-hba-indexed-db-name="hbaDB"
      data-hba-indexed-db-obj-store-name="hbaObjectStore"
      data-hba-indexed-db-key-name="hba_keys"
      data-hba-indexed-db-version="1"
      data-bat-event-sample-rate="0" />
<meta name="account-switching-data"
      data-is-account-switching-enabled="true" />

<meta name="passkey-data"
      data-is-passkey-login-enabled="true" />
<meta name="passkey-data-android"
      data-is-passkey-login-enabled-android="true" />
<meta name="page-meta" data-internal-page-name="Home" />
<meta name="page-retry-header-enabled" data-retry-attempt-header-enabled="True" />

<meta name="performance" data-ui-performance-relative-value="1"
                         data-ui-performance-endpoint="http://metrics.<?php echo $url; ?>/v1/performance/send-measurement"
                         data-ui-performance-metrics-batch-wait-time="00:00:30"
                         data-ui-performance-metrics-batch-size="100"/>

<script type="text/javascript">
    var Roblox = Roblox || {};

    Roblox.BundleVerifierConstants = {
        isMetricsApiEnabled: true,
        eventStreamUrl: "//ecsv2.<?php echo $url; ?>/pe?t=diagnostic",
        deviceType: "Computer",
        cdnLoggingEnabled: JSON.parse("true")
    };
</script>        <script type="text/javascript">
            var Roblox = Roblox || {};

Roblox.BundleDetector = (function () {
    var isMetricsApiEnabled = Roblox.BundleVerifierConstants && Roblox.BundleVerifierConstants.isMetricsApiEnabled;

    var loadStates = {
        loadSuccess: "loadSuccess",
        loadFailure: "loadFailure",
        executionFailure: "executionFailure"
    };

    var bundleContentTypes = {
        javascript: "javascript",
        css: "css"
    };

    var ephemeralCounterNames = {
        cdnPrefix: "CDNBundleError_",
        unknown: "CDNBundleError_unknown",
        cssError: "CssBundleError",
        jsError: "JavascriptBundleError",
        jsFileError: "JsFileExecutionError",
        resourceError: "ResourcePerformance_Error",
        resourceLoaded: "ResourcePerformance_Loaded"
    };

    return {
        jsBundlesLoaded: {},
        bundlesReported: {},

        counterNames: ephemeralCounterNames,
        loadStates: loadStates,
        bundleContentTypes: bundleContentTypes,

        timing: undefined,

        setTiming: function (windowTiming) {
            this.timing = windowTiming;
        },

        getLoadTime: function () {
            if (this.timing && this.timing.domComplete) {
                return this.getCurrentTime() - this.timing.domComplete;
            }
        },

        getCurrentTime: function () {
            return new Date().getTime();
        },

        getCdnProviderName: function (bundleUrl, callBack) {
            if (Roblox.BundleVerifierConstants.cdnLoggingEnabled) {
                var xhr = new XMLHttpRequest();
                xhr.open('GET', bundleUrl, true);

                xhr.onreadystatechange = function () {
                    if (xhr.readyState === xhr.HEADERS_RECEIVED) {
                        try {
                            var headerValue = xhr.getResponseHeader("rbx-cdn-provider");
                            if (headerValue) {
                                callBack(headerValue);
                            } else {
                                callBack();
                            }
                        } catch (e) {
                            callBack();
                        }
                    }
                };

                xhr.onerror = function () {
                    callBack();
                };

                xhr.send();
            } else {
                callBack();
            }
        },

        getCdnProviderAndReportMetrics: function (bundleUrl, bundleName, loadState, bundleContentType) {
            this.getCdnProviderName(bundleUrl, function (cdnProviderName) {
                Roblox.BundleDetector.reportMetrics(bundleUrl, bundleName, loadState, bundleContentType, cdnProviderName);
            });
        },

        reportMetrics: function (bundleUrl, bundleName, loadState, bundleContentType, cdnProviderName) {
            if (!isMetricsApiEnabled
                || !bundleUrl
                || !loadState
                || !loadStates.hasOwnProperty(loadState)
                || !bundleContentType
                || !bundleContentTypes.hasOwnProperty(bundleContentType)) {
                return;
            }

            var xhr = new XMLHttpRequest();
            var metricsApiUrl = (Roblox.EnvironmentUrls && Roblox.EnvironmentUrls.metricsApi) || "http://metrics.<?php echo $url; ?>";

            xhr.open("POST", metricsApiUrl + "/v1/bundle-metrics/report", true);
            xhr.setRequestHeader("Content-Type", "application/json");
            xhr.withCredentials = true;
            xhr.send(JSON.stringify({
                bundleUrl: bundleUrl,
                bundleName: bundleName || "",
                bundleContentType: bundleContentType,
                loadState: loadState,
                cdnProviderName: cdnProviderName,
                loadTimeInMilliseconds: this.getLoadTime() || 0
            }));
        },

        logToEphemeralStatistics: function (sequenceName, value) {
            var deviceType = Roblox.BundleVerifierConstants.deviceType;
            sequenceName += "_" + deviceType;

            var xhr = new XMLHttpRequest();
            xhr.open('POST', '/game/report-stats?name=' + sequenceName + "&value=" + value, true);
            xhr.withCredentials = true;
            xhr.send();
        },

        logToEphemeralCounter: function (ephemeralCounterName) {
            var deviceType = Roblox.BundleVerifierConstants.deviceType;
            ephemeralCounterName += "_" + deviceType;
            //log to ephemeral counters - taken from ET.js
            var xhr = new XMLHttpRequest();
            xhr.open('POST', '/game/report-event?name=' + ephemeralCounterName, true);
            xhr.withCredentials = true;
            xhr.send();
        },

      logToEventStream: function (failedBundle, ctx, cdnProvider, status) {
            var urlUnencoded = window.location.href;
            if (Roblox.Endpoints && Roblox.Endpoints.supportLocalizedUrls) {
                // Remove urlLocale from event stream to prevent breaking change
                urlUnencoded = Roblox.Endpoints.removeUrlLocale(urlUnencoded);
            }

            var esUrl = Roblox.BundleVerifierConstants.eventStreamUrl,
              currentPageUrl = encodeURIComponent(urlUnencoded);

            var deviceType = Roblox.BundleVerifierConstants.deviceType;
            ctx += "_" + deviceType;
            //try and grab performance data.
            //Note that this is the performance of the xmlhttprequest rather than the original resource load.
            var duration = 0;
            if (window.performance) {
                var perfTiming = window.performance.getEntriesByName(failedBundle);
                if (perfTiming.length > 0) {
                    var data = perfTiming[0];
                    duration = data.duration || 0;
                }
            }
            //log to event stream (diagnostic)
            var params = "&evt=webBundleError&url=" + currentPageUrl +
                "&ctx=" + ctx + "&fileSourceUrl=" + encodeURIComponent(failedBundle) +
                "&cdnName=" + (cdnProvider || "unknown") +
                "&statusCode=" + (status || "unknown") +
                "&loadDuration=" + Math.floor(duration);
            var img = new Image();
            img.src = esUrl + params;
        },

        getCdnInfo: function (failedBundle, ctx, fileType) {
            if (Roblox.BundleVerifierConstants.cdnLoggingEnabled) {
                var xhr = new XMLHttpRequest();
                var counter = this.counterNames;
                xhr.open('GET', failedBundle, true);
                var cdnProvider;

                //succesful request
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === xhr.HEADERS_RECEIVED) {
                        cdnProvider = xhr.getResponseHeader("rbx-cdn-provider");
                        if (cdnProvider && cdnProvider.length > 0) {
                            Roblox.BundleDetector.logToEphemeralCounter(counter.cdnPrefix + cdnProvider + "_" + fileType);
                        }
                        else {
                            Roblox.BundleDetector.logToEphemeralCounter(counter.unknown + "_" + fileType);
                        }
                    }
                    else if (xhr.readyState === xhr.DONE) {
                        // append status to cdn provider so we know its not related to network error. 
                        Roblox.BundleDetector.logToEventStream(failedBundle, ctx, cdnProvider, xhr.status);
                    }
                };

                //attach to possible things that can go wrong with the request.
                //additionally a network error will trigger this callback
                xhr.onerror = function () {
                    Roblox.BundleDetector.logToEphemeralCounter(counter.unknown + "_" + fileType);
                    Roblox.BundleDetector.logToEventStream(failedBundle, ctx, counter.unknown);
                };

                xhr.send();
            }
            else {
                this.logToEventStream(failedBundle, ctx);
            }
        },

        reportResourceError: function (resourceName) {
            var ephemeralCounterName = this.counterNames.resourceError + "_" + resourceName;
            this.logToEphemeralCounter(ephemeralCounterName);
        },

        reportResourceLoaded: function (resourceName) {
            var loadTimeInMs = this.getLoadTime();
            if (loadTimeInMs) {
                var sequenceName = this.counterNames.resourceLoaded + "_" + resourceName;
                this.logToEphemeralStatistics(sequenceName, loadTimeInMs);
            }
        },

        reportBundleError: function (bundleTag) {
            var ephemeralCounterName, failedBundle, ctx, contentType;
            if (bundleTag.rel && bundleTag.rel === "stylesheet") {
                ephemeralCounterName = this.counterNames.cssError;
                failedBundle = bundleTag.href;
                ctx = "css";
                contentType = bundleContentTypes.css;
            } else {
                ephemeralCounterName = this.counterNames.jsError;
                failedBundle = bundleTag.src;
                ctx = "js";
                contentType = bundleContentTypes.javascript;
            }

            //mark that we logged this bundle
            this.bundlesReported[failedBundle] = true;

            //e.g. javascriptBundleError_Computer
            this.logToEphemeralCounter(ephemeralCounterName);
            //this will also log to event stream
            this.getCdnInfo(failedBundle, ctx, ctx);

            var bundleName;
            if (bundleTag.dataset) {
                bundleName = bundleTag.dataset.bundlename;
            }
            else {
                bundleName = bundleTag.getAttribute('data-bundlename');
            }

            this.getCdnProviderAndReportMetrics(failedBundle, bundleName, loadStates.loadFailure, contentType);
        },

        bundleDetected: function (bundleName) {
            this.jsBundlesLoaded[bundleName] = true;
        },

        verifyBundles: function (document) {
            var ephemeralCounterName = this.counterNames.jsFileError,
                eventContext = ephemeralCounterName;
            //grab all roblox script tags in the page. 
            var scripts = (document && document.scripts) || window.document.scripts;
            var errorsList = [];
            var bundleName;
            var monitor;
            for (var i = 0; i < scripts.length; i++) {
                var item = scripts[i];

                if (item.dataset) {
                    bundleName = item.dataset.bundlename;
                    monitor = item.dataset.monitor;
                }
                else {
                    bundleName = item.getAttribute('data-bundlename');
                    monitor = item.getAttribute('data-monitor');
                }

                if (item.src && monitor && bundleName) {
                    if (!Roblox.BundleDetector.jsBundlesLoaded.hasOwnProperty(bundleName)) {
                        errorsList.push(item);
                    }
                }
            }
            if (errorsList.length > 0) {
                for (var j = 0; j < errorsList.length; j++) {
                    var script = errorsList[j];
                    if (!this.bundlesReported[script.src]) {
                        //log the counter only if the file is actually corrupted, not just due to failure to load
                        //e.g. JsFileExecutionError_Computer
                        this.logToEphemeralCounter(ephemeralCounterName);
                        this.getCdnInfo(script.src, eventContext, 'js');

                        if (script.dataset) {
                            bundleName = script.dataset.bundlename;
                        }
                        else {
                            bundleName = script.getAttribute('data-bundlename');
                        }

                        this.getCdnProviderAndReportMetrics(script.src, bundleName, loadStates.executionFailure, bundleContentTypes.javascript);
                    }
                }
            }
        }
    };
})();

window.addEventListener("load", function (evt) {
    Roblox.BundleDetector.verifyBundles();
});

Roblox.BundleDetector.setTiming(window.performance.timing);
            //# sourceURL=somename.js
        </script>
    
<link href="http://images.rbxcdn.com/7bba321f4d8328683d6e59487ce514eb" rel="icon" />



<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="StyleGuide" data-bundle-source="Main" href="http://css.rbxcdn.com/dd14ec5b2606644e8ef2c8171327febbc4a926ded0fc2a40245071c074407d30.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="Builder" data-bundle-source="Main" href="http://css.rbxcdn.com/e94c0adccec299cc49e46af1dd3a7630a05b4b973ff04df4ec1bba76c1321386.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="Thumbnails" data-bundle-source="Main" href="http://css.rbxcdn.com/d8d1cfe6a81efdc0eaa7a64ddeec42230944f4e6330e5eafafcda10cf9e5286a.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="CaptchaCore" data-bundle-source="Main" href="http://css.rbxcdn.com/b8f8f15a57a66e73469ae72eea7d8905346afa78b9f2397627cd099f7dcc779a.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="Challenge" data-bundle-source="Main" href="http://css.rbxcdn.com/c92e5fc4564200cb9d84ba69bd53e4a4f86109709b8db691c1567dd257c1115b.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="VerificationUpsell" data-bundle-source="Main" href="http://css.rbxcdn.com/af980e9df515246ae1fbda3352734a7051ee75516c7b8c7fd45afc8e970e7c52.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="RobloxBadges" data-bundle-source="Main" href="http://css.rbxcdn.com/da45920fef8b22d35ee6cce0702d290241252fbfd99695e2abc0934d20de0974.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="AccountSwitcher" data-bundle-source="Main" href="http://css.rbxcdn.com/8f55fef5030e6e8f107be51f3320159f08682b053aee5e9f4bcdf7b9327cc957.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="PriceTag" data-bundle-source="Main" href="http://css.rbxcdn.com/9bfc48ea40a698035ea8cbe3d3e94bd06d3aac48969bedceb6d8ba5ff17ff84d.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="Navigation" data-bundle-source="Main" href="http://css.rbxcdn.com/cf3fc474c475f6a3d5db2c37a99b4728410b76b9df42da13501a58a941669630.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="CookieBannerV3" data-bundle-source="Main" href="http://css.rbxcdn.com/2c2a709240897ce382b7ff55be4347cd0994ab1e2d6ed3b56649e54b0e97e13a.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="Footer" data-bundle-source="Main" href="http://css.rbxcdn.com/6edb2191aa318f963253361b43d2657a04b3d16e9c28fe7b22d4a4d5686f1cb4.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="ConfigureWebApps" data-bundle-source="Main" href="http://css.rbxcdn.com/08def520152a575438e73a81aa9a310c2415c327df7b624a24aa6e794d24dba3.css" />

    <link rel="canonical" href="http://www.<?php echo $url; ?>/home" />
    

    <link rel="alternate" href="http://www.<?php echo $url; ?>/home" hreflang="x-default" />

    
<link onerror='Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)' rel='stylesheet'  href='http://static.rbxcdn.com/css/leanbase___3678d89e5ec3f4d8c65d863691f31de2_m.css/fetch' />


    
<link onerror='Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)' rel='stylesheet'  href='http://static.rbxcdn.com/css/page___606b06ea541eb4968e4a6a5d1b0dc141_m.css/fetch' />


<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="AccountSecurityPrompt" data-bundle-source="Main" href="http://css.rbxcdn.com/4f7de087dc1678a5ce252017a506e577ef654cb081a9d6b55d12ce6292742dc7.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="AccessManagementUpsellV2" data-bundle-source="Main" href="http://css.rbxcdn.com/b6f5b847e8636a688bd780f392bd5152c5a62a701e43a2533d01f02fef560175.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="PeopleList" data-bundle-source="Main" href="http://css.rbxcdn.com/da65f9b8a8628c70c8c8316f494ef317757db29ac2697e32db6e9af2aace0844.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="AvatarShopHomepageRecommendations" data-bundle-source="Main" href="http://css.rbxcdn.com/3c59e1d5397458d7e71078c1a921f0bcac7f509cdad1fd677a5c518d1fca31d1.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="PlacesList" data-bundle-source="Main" href="http://css.rbxcdn.com/bc4f2677567261b6c653148018b8be681f952c554d3f41e01ce2f14658ff253d.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="FacebookSunsetModal" data-bundle-source="Main" href="http://css.rbxcdn.com/d042af17d4ccd36b8f91a8ba854943526df6e0d0eec445d67f3dbe6ed82c21f9.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="HomePageUpsellCard" data-bundle-source="Main" href="http://css.rbxcdn.com/3295db919c070c632b166b584e6fa1d82292995b2aa2c2353f46c28c2badc597.css" />

    <link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="RobuxIcon" data-bundle-source="Main" href="http://css.rbxcdn.com/b07e5af55eefa41c1f1e3fbb3caf113766f6f6bf35b088a0c087c2a760ce2ac0.css" />


    <link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="ItemPurchaseUpsell" data-bundle-source="Main" href="http://css.rbxcdn.com/3c4bd9b17b9020d9ebc87d4542a68a949a9de6150a55a92f0e65514520ee777e.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="ItemPurchase" data-bundle-source="Main" href="http://css.rbxcdn.com/8efa79e576b0df3d4c51fb1eb4e13af137d5eb8f44aef51321f7d4abbf9c3a86.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="IdVerification" data-bundle-source="Main" href="http://css.rbxcdn.com/3bca47a98d58fdf98a7063c4f3b390671e5326ed559813887f3945876c997da6.css" />


    

<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="NotificationStream" data-bundle-source="Main" href="http://css.rbxcdn.com/ed5124f714c2f7b092775a5c5659693a831091a7bdd587b92cbfc55a6c7320e6.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="SendrNotificationStream" data-bundle-source="Main" href="http://css.rbxcdn.com/b1ed0e71a1bb4e1da35c4d12da3c7983fe2f46d70eb5fb3b5becb740b7ab3916.css" />
<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="Chat" data-bundle-source="Main" href="http://css.rbxcdn.com/d0cbd91ae01f5a314c5642fa17db5c6a08ab61a83a0b283acf3c2b9632c458e0.css" />



<link rel="stylesheet" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-bundlename="UserAgreementsChecker" data-bundle-source="Main" href="http://css.rbxcdn.com/d5a3728b78be729b693aadf79a1f45f0fa49c15fe863a0d7dd631b75f9e82207.css" />



    <script type="text/javascript">
    var Roblox = Roblox || {};
    Roblox.RealTimeSettings = Roblox.RealTimeSettings ||
        {
            NotificationsEndpoint: "http://realtime-signalr.<?php echo $url; ?>/userhub",
            NotificationsClientType: "CoreSignalR",
            MaxConnectionTime: "21600000",
            IsEventPublishingEnabled: false,
            IsDisconnectOnSlowConnectionDisabled: true,
            IsSignalRClientTransportRestrictionEnabled: true,
            IsLocalStorageInRealTimeEnabled: true,
            IsDebuggerEnabled: "False",
            IsRealtimeWebAnalyticsEnabled: true,
            IsRealtimeWebAnalyticsConnectionEventsEnabled: false
        }
    </script>



<script type="text/javascript">
    var Roblox = Roblox || {};
    Roblox.EnvironmentUrls = Roblox.EnvironmentUrls || {};
    Roblox.EnvironmentUrls = {"abtestingApiSite":"http://abtesting.<?php echo $url; ?>","accountInformationApi":"http://accountinformation.<?php echo $url; ?>","accountSettingsApi":"http://accountsettings.<?php echo $url; ?>","adConfigurationApi":"http://adconfiguration.<?php echo $url; ?>","adsApi":"http://ads.<?php echo $url; ?>","advertiseApi":"http://advertise.<?php echo $url; ?>","apiGatewayCdnUrl":"http://apis.<?php echo $url; ?>","apiGatewayUrl":"http://apis.<?php echo $url; ?>","apiProxyUrl":"http://api.<?php echo $url; ?>","assetDeliveryApi":"http://assetdelivery.<?php echo $url; ?>","authApi":"http://auth.<?php echo $url; ?>","avatarApi":"http://avatar.<?php echo $url; ?>","badgesApi":"http://badges.<?php echo $url; ?>","billingApi":"http://billing.<?php echo $url; ?>","captchaApi":"http://captcha.<?php echo $url; ?>","catalogApi":"http://catalog.<?php echo $url; ?>","chargebackWizardApi":"http://apis.<?php echo $url; ?>/chargeback-wizard","chatApi":"http://chat.<?php echo $url; ?>","chatModerationApi":"http://chatmoderation.<?php echo $url; ?>","contactsApi":"http://contacts.<?php echo $url; ?>","contactsServiceApi":"http://apis.<?php echo $url; ?>/contacts-api","contentStoreApi":"http://contentstore.<?php echo $url; ?>","developApi":"http://develop.<?php echo $url; ?>","domain":"<?php echo $url; ?>","economyApi":"http://economy.<?php echo $url; ?>","economycreatorstatsApi":"http://economycreatorstats.<?php echo $url; ?>","eduWebsiteUrl":"http://www.rblx.org","eduAuthenticationApi":"http://auth.rblx.org","engagementPayoutsApi":"http://engagementpayouts.<?php echo $url; ?>","followingsApi":"http://followings.<?php echo $url; ?>","friendsApi":"http://friends.<?php echo $url; ?>","gameInternationalizationApi":"http://gameinternationalization.<?php echo $url; ?>","gamesApi":"http://games.<?php echo $url; ?>","gameJoinApi":"http://gamejoin.<?php echo $url; ?>","gameUpdateNotificationsApi":"http://apis.<?php echo $url; ?>/game-update-notifications","groupsApi":"http://groups.<?php echo $url; ?>","groupsModerationApi":"http://groupsmoderation.<?php echo $url; ?>","helpSite":"http://en.help.<?php echo $url; ?>","inventoryApi":"http://inventory.<?php echo $url; ?>","itemConfigurationApi":"http://itemconfiguration.<?php echo $url; ?>","localeApi":"http://locale.<?php echo $url; ?>","localizationTablesApi":"http://localizationtables.<?php echo $url; ?>","metricsApi":"http://metrics.<?php echo $url; ?>","midasApi":"http://midas.<?php echo $url; ?>","notificationApi":"http://notifications.<?php echo $url; ?>","passProductPurchasingApi":"http://apis.<?php echo $url; ?>/pass-product-purchasing","bundlesProductPurchasingApi":"http://apis.<?php echo $url; ?>/bundles-product-purchasing","premiumFeaturesApi":"http://premiumfeatures.<?php echo $url; ?>","presenceApi":"http://presence.<?php echo $url; ?>","privateMessagesApi":"http://privatemessages.<?php echo $url; ?>","publishApi":"http://publish.<?php echo $url; ?>","restrictedHoursServiceApi":"http://apis.<?php echo $url; ?>/restricted-hours-service","screenTimeApi":"http://apis.rcs.<?php echo $url; ?>/screen-time-api","shareApi":"http://share.<?php echo $url; ?>","shareLinksApi":"http://apis.<?php echo $url; ?>/sharelinks","thumbnailsApi":"http://thumbnails.<?php echo $url; ?>","tradesApi":"http://trades.<?php echo $url; ?>","translationRolesApi":"http://translationroles.<?php echo $url; ?>","twoStepVerificationApi":"http://twostepverification.<?php echo $url; ?>","universalAppConfigurationApi":"http://apis.<?php echo $url; ?>/universal-app-configuration","userAgreementsServiceApi":"http://apis.<?php echo $url; ?>/user-agreements","userModerationApi":"http://usermoderation.<?php echo $url; ?>","usersApi":"http://users.<?php echo $url; ?>","userSettingsApi":"http://apis.<?php echo $url; ?>/user-settings-api","voiceApi":"http://voice.<?php echo $url; ?>","websiteUrl":"http://www.<?php echo $url; ?>"};

    // please keep the list in alphabetical order
    var additionalUrls = {
        amazonStoreLink: "http://www.amazon.com/Roblox-Corporation/dp/B00NUF4YOA",
        amazonWebStoreLink: "https%3a%2f%2fwww.amazon.com%2froblox%3f%26_encoding%3dUTF8%26tag%3dr05d13-20%26linkCode%3dur2%26linkId%3d5562fc29c05b45562a86358c198356eb%26camp%3d1789%26creative%3d9325",
        appProtocolUrl: "robloxmobile://",
        appStoreLink: "http://itunes.apple.com/us/app/roblox-mobile/id431946152",
        googlePlayStoreLink: "http://play.google.com/store/apps/details?id=com.roblox.client&amp;hl=en",
        guildedBaseUrl: "http://discord.com",
        iosAppStoreLink: "http://itunes.apple.com/us/app/roblox-mobile/id431946152",
        windowsStoreLink: "http://www.microsoft.com/en-us/store/games/roblox/9nblgggzm6wm",
        xboxStoreLink: "http://www.microsoft.com/en-us/p/roblox/bq1tn1t79v9k"
    }

    for (var urlName in additionalUrls) {
        Roblox.EnvironmentUrls[urlName] = additionalUrls[urlName];
    }
    

    Roblox.EnvironmentUrls["websiteUrl"] = "http://www.<?php echo $url; ?>";
        </script>


<script type="text/javascript">
    var Roblox = Roblox || {};
    Roblox.GaEventSettings = {
        gaDFPPreRollEnabled: "false" === "true",
        gaLaunchAttemptAndLaunchSuccessEnabled: "false" === "true",
        gaPerformanceEventEnabled: "false" === "true"
    };
</script>


    <script onerror='Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)' data-monitor='true' data-bundlename='headerinit' type='text/javascript' src='http://js.rbxcdn.com/08a545ae1503441b55f5236794feccec.js'></script>

    <script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Polyfill" data-bundle-source="Main" src="http://js.rbxcdn.com/358ad3aa1eb24fc3f1183d478af41316f5d04bae004f77647d885c6b861e67ac.js"></script>


    <script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="XsrfProtection" data-bundle-source="Main" src="http://js.rbxcdn.com/260757df563ab52c2270fe06faebfcf67bc9996c718dd4ed04b61e7f4676306d.js"></script>


    <script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="HeaderScripts" data-bundle-source="Main" src="http://js.rbxcdn.com/341005be30d4e45dde31bae2877e83edbda9f20ad16bd405e240f24050e32623.js"></script>



<meta name="sentry-meta"
      data-env-name="production"
      data-dsn="http://6750adeb1b1348e4a10b13e726d5c10b@sentry.io/1539367"
      data-sample-rate="0" /><script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Sentry" data-bundle-source="Main" src="http://js.rbxcdn.com/edc66704bd1974195d8c60f4a163441bec82f1bcb11c492e7df07c43f45a4d49.js"></script>

<meta name="roblox-tracer-meta-data"
      data-access-token=""
      data-service-name="Web"
      data-tracer-enabled="false"
      data-api-sites-request-allow-list="friends.<?php echo $url; ?>,chat.<?php echo $url; ?>,thumbnails.<?php echo $url; ?>,games.<?php echo $url; ?>,gameinternationalization.<?php echo $url; ?>,localizationtables.<?php echo $url; ?>"
      data-sample-rate="0"
      data-is-instrument-page-performance-enabled="false"/><script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="RobloxTracer" data-bundle-source="Main" src="http://js.rbxcdn.com/2ad6b2753f8558f55fc35440842b58f6a8f74b40879dd503fa8394beac7d3370.js"></script>

<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="RealTime" data-bundle-source="Main" src="http://js.rbxcdn.com/d328a533d939ced65945df6219737c5a36d61e10e1f7c87ce34005fe5e800a14.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="CrossTabCommunication" data-bundle-source="Main" src="http://js.rbxcdn.com/948f3bfc9bbd152f537592b51c1a7765cdc0dfc538d74b7e5fc696c476c8792b.js"></script>
    
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
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
</script>

    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<script>
    //Set if it browser's do not track flag is enabled
    var Roblox = Roblox || {};
    (function() {
        var dnt = navigator.doNotTrack || window.doNotTrack || navigator.msDoNotTrack;
        if (typeof window.external !== "undefined" &&
            typeof window.external.msTrackingProtectionEnabled !== "undefined") {
            dnt = dnt || window.external.msTrackingProtectionEnabled();
        }
        Roblox.browserDoNotTrack = dnt == "1" || dnt == "yes" || dnt === true;
    })();
</script>

    <script type="text/javascript">

        var _gaq = _gaq || [];

                window.GoogleAnalyticsDisableRoblox2 = true;
        _gaq.push(['b._setAccount', 'UA-486632-1']);
            _gaq.push(['b._setSampleRate', '10']);
        _gaq.push(['b._setCampSourceKey', 'rbx_source']);
        _gaq.push(['b._setCampMediumKey', 'rbx_medium']);
        _gaq.push(['b._setCampContentKey', 'rbx_campaign']);

            _gaq.push(['b._setDomainName', '<?php echo $url; ?>']);

            _gaq.push(['b._setCustomVar', 1, 'Visitor', 'Member', 2]);
                _gaq.push(['b._setPageGroup', 1, 'Home']);
            _gaq.push(['b._trackPageview']);

        _gaq.push(['c._setAccount', 'UA-26810151-2']);
            _gaq.push(['c._setSampleRate', '1']);
            _gaq.push(['c._setDomainName', '<?php echo $url; ?>']);
            _gaq.push(['c._setPageGroup', 1, 'Home']);

            (function() {
                if (!Roblox.browserDoNotTrack) {
                    var ga = document.createElement('script');
                    ga.type = 'text/javascript';
                    ga.async = true;
                    ga.src = ('https:' == document.location.protocol ? 'http://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                    var s = document.getElementsByTagName('script')[0];
                    s.parentNode.insertBefore(ga, s);
                }
        })();
             </script>
        <script async src='http://www.googletagmanager.com/gtag/js?id=AW-824697473'></script>
        <script type="text/javascript">
            var accountCode = "AW-824697473";
            var signupConversionEventKey = "wmuJCO3CZBCF7YX8Aw";
            var webPurchaseConversionEventKey = "XDQ_CJme6s0BEIXthfwD";
            window.dataLayer = window.dataLayer || [];

            function gtag() { dataLayer.push(arguments); }
            gtag.conversionEvents = {
                signupConversionEvent: accountCode + '/' + signupConversionEventKey,
                webPurchaseConversionEvent: accountCode + '/' + webPurchaseConversionEventKey
            }
            gtag ('set', 'allow_ad_personalization_signals', false) ;
            gtag('js', new Date());
            gtag('config', accountCode);
        </script>

            <script type="text/javascript">
            if (Roblox && Roblox.EventStream) {
                Roblox.EventStream.Init("//ecsv2.<?php echo $url; ?>/www/e.png",
                    "//ecsv2.<?php echo $url; ?>/www/e.png",
                    "//ecsv2.<?php echo $url; ?>/pe?t=studio",
                    "//ecsv2.<?php echo $url; ?>/pe?t=diagnostic");
            }
        </script>



<script type="text/javascript">
    if (Roblox && Roblox.PageHeartbeatEvent) {
        Roblox.PageHeartbeatEvent.Init([2,8,20,60]);
    }
</script>        <script>
            var __nspid = "alpts0";
            var __nsptags = [];
            (function (w, d) {
                var x = function () {
                    var j = d.createElement("script"); j.type = "text/javascript"; j.async = true;
                    j.src = "http" + ("https:" === d.location.protocol ? "s://cs" : "://c") + ".ns1p.net/p.js?a=" + __nspid;
                    d.body.appendChild(j);
                }
                if (w.addEventListener) { w.addEventListener("load", x, false); }
                else if (w.attachEvent) { w.attachEvent("onload", x); }
                else { w.onload = x; }
            }(window, document));
        </script>

    <script>
    Roblox = Roblox || {};
    Roblox.AbuseReportPVMeta = {
        desktopEnabled: true,
        phoneEnabled: false,
        inAppEnabled: false
    };
</script>


<meta name="thumbnail-meta-data" 
      data-is-webapp-cache-enabled="False"
      data-webapp-cache-expirations-timespan="00:01:00"
      data-request-min-cooldown="1000"
      data-request-max-cooldown="30000"
      data-request-max-retry-attempts="4"
      data-request-batch-size="100"
      data-thumbnail-metrics-sample-size="20"
      data-concurrent-thumbnail-request-count="4"/>
                          

</head>
<body id="rbx-body" dir="ltr" class="rbx-body   dark-theme builder-font" data-performance-relative-value="0.005" data-internal-page-name="Home" data-send-event-percentage="0">
    
    <meta name="csrf-token" data-token="XWjG9TaEuQz9" />

    
    <script src="http://<?php echo $url; ?>/js/hsts.js?v=3" type="text/javascript" id="hsts" async></script>

    <script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Linkify" data-bundle-source="Main" src="http://js.rbxcdn.com/c379cf5d3d1d768411d61450b75635695058f905a96e00173122282620a96da3.js"></script>


<div id="image-retry-data"
     data-image-retry-max-times="30"
     data-image-retry-timer="500"
     data-ga-logging-percent="10">
</div><div id="http-retry-data"
     data-http-retry-max-timeout="0"
     data-http-retry-base-timeout="0"
     data-http-retry-max-times="1">
</div>    


<div id="wrap" class="wrap no-gutter-ads logged-in"
     data-gutter-ads-enabled="false">


<div id="navigation-container" class="dark-theme builder-font ixp-marketplace-rename-control"
    data-safety-support-item-rollout="100"
    data-number-of-autocomplete-suggestions="7"
    data-is-redirect-library-to-creator-marketplace-enabled="True"
    data-platform-event-left-nav-entry-start-time="01/01/2000 12:00:00"
    data-platform-event-left-nav-entry-end-time="05/28/2024 19:00:00"
    data-platform-event-left-nav-url="http://www.<?php echo $url; ?>/games/17427651911/The-Classic">
    <div id="header" class="navbar-fixed-top rbx-header" role="navigation">
  <div class="container-fluid">
    <div class="rbx-navbar-header">
      <div id="header-menu-icon" class="rbx-nav-collapse">
        <button type="button" class="btn-navigation-nav-menu-md menu-button">
          <span class="icon-nav-menu"></span>
        </button>
      </div>
      <div class="navbar-header">
        <a class="navbar-brand" href="/home">
          <span class="icon-logo"></span><span class="icon-logo-r"></span>
        </a>
      </div>
    </div>
    <ul class="nav rbx-navbar hidden-xs hidden-sm col-md-5 col-lg-4">
      <li>
        <a class="font-header-2 nav-menu-title text-header" href="/discover">Discover</a>
      </li>
      <li>
        <a class="font-header-2 nav-menu-title text-header" href="/catalog">Marketplace</a>
      </li>
      <li>
        <a id="header-develop-md-link" class="font-header-2 nav-menu-title text-header" href="/develop">Create</a>
      </li>
      <li>
        <a class="font-header-2 nav-menu-title text-header robux-menu-btn" href="/upgrades/robux?ctx=nav">
          <div class="menu-text-container">
            <span class="robux-10-percent-more-label">10% More</span>
            <span class="font-header-2 robux-btn">Robux</span>
          </div>
        </a>
      </li>
    </ul>

    <ul class="nav rbx-navbar hidden-md hidden-lg col-xs-12">
      <li>
        <a class="font-header-2 nav-menu-title text-header" href="/discover">Discover</a>
      </li>
      <li>
        <a class="font-header-2 nav-menu-title text-header" href="/catalog">Marketplace</a>
      </li>
      <li>
        <a id="header-develop-sm-link" class="font-header-2 nav-menu-title text-header" href="/develop">Create</a>
      </li>
      <li>
        <a class="font-header-2 nav-menu-title text-header robux-menu-btn" href="/upgrades/robux?ctx=nav">
          <div class="menu-text-container">
            <span class="robux-10-percent-more-label">10% More</span>
            <span class="font-header-2 robux-btn">Robux</span>
          </div>
        </a>
      </li>
    </ul>
    <div id="right-navigation-header"></div>
  </div>
</div>
<div id="left-navigation-container"></div>
<div id="verificationUpsell-container">
  <div verificationUpsell-container></div>
</div>
<div id="phoneVerificationUpsell-container">
  <div phoneVerificationUpsell-container></div>
</div>
<div id="contactMethodPrompt-container">
  <div contactMethodPrompt-container></div>
</div>
<div id="navigation-account-switcher-container">
  <div navigation-account-switcher-container></div>
</div>


</div>

<script type="text/javascript">
    var Roblox = Roblox || {};
    (function () {
        if (Roblox && Roblox.Performance) {
            Roblox.Performance.setPerformanceMark("navigation_end");
        }
    })();
</script>
    <main class="container-main 
                
                
                
                
                
                "
         id="container-main" tabindex="-1">
        <script type="text/javascript">
            if (top.location != self.location) {
                top.location = self.location.href;
            }
        </script>

        <div class="alert-container">
            <noscript><div><div class="alert-info" role="alert">Please enable Javascript to use all the features on this site.</div></div></noscript>

            

                <div id="account-security-prompt-container"></div>


        </div>

       
            <div class="content">
                    <div id="Skyscraper-Abp-Left" class="abp abp-container left-abp">



<iframe name="Roblox_MyHome_Left_160x600" 
        allowtransparency="true"
        frameborder="0"
        height="612"
        scrolling="no"
        data-src=""
        src="http://www.<?php echo $url; ?>/user-sponsorship/2"
        width="160"
        data-js-adtype="iframead"
        data-ad-slot="Roblox_MyHome_Left_160x600"></iframe>                    </div>
                

        <script src="http://roblox-api.arkoselabs.com/fc/api/" async></script>

<script type="text/javascript">
    var Roblox = Roblox || {};
    $(function () {
        var funCaptcha = Roblox.FunCaptcha;
        if (funCaptcha) {
            var captchaTypes = null;
            funCaptcha.addCaptchaTypes(captchaTypes, true);
            funCaptcha.setMaxRetriesOnTokenValidationFailure(0);
            funCaptcha.setPerAppTypeLoggingEnabled(false);
            funCaptcha.setRetryIntervalRange(500, 1500);
        }
    });

    // Necessary because of how FunCaptcha js executes callback
    // i.e. window["{function name}"]
    function reportFunCaptchaLoaded()
    {
        if (Roblox.BundleDetector)
        {
            Roblox.BundleDetector.reportResourceLoaded("funcaptcha");
        }
    }
</script>

<div id="HomeContainer" class="row home-container">
    <div class="section">
        <div class="col-xs-12 container-header">
            <h1>Home</h1>
        </div>
    </div>


        <div id='home-page-upsell-card-container'></div>

    <div id="people-list-container" people-list-container></div>


    <div id="place-list" class="place-list-container"></div>
</div>

                    <div id="Skyscraper-Abp-Right" class="abp abp-container right-abp">



<iframe name="Roblox_MyHome_Right_160x600" 
        allowtransparency="true"
        frameborder="0"
        height="612"
        scrolling="no"
        data-src=""
        src="http://www.<?php echo $url; ?>/user-sponsorship/2"
        width="160"
        data-js-adtype="iframead"
        data-ad-slot="Roblox_MyHome_Right_160x600"></iframe>                    </div>
            </div>
        
    </main><!--Bootstrap Footer React Component -->

<footer class="container-footer" id="footer-container"
        data-is-giftcards-footer-enabled="True">
</footer></div>
    <div id="chat-container"
         class="chat chat-container"
         chat-base>
    </div>
    <div id="user-agreements-checker-container"></div>
    <div id="access-management-upsell-container"></div>

<div id="cookie-banner-wrapper" class="cookie-banner-wrapper"></div>

<script type="text/javascript">
    if (typeof Roblox === "undefined") {
        Roblox = {};
    }
    if (typeof Roblox.PlaceLauncher === "undefined") {
        Roblox.PlaceLauncher = {};
    }
    var isRobloxIconEnabledForRetheme = "True";
    var robloxIcon = isRobloxIconEnabledForRetheme === 'True' ? "<span class='icon-logo-r-95'></span>" : "<img src='http://images.rbxcdn.com/8e7879f99cfa7cc3b1fce74f8191be03.svg' width='90' height='90' alt='R'/>";
    Roblox.PlaceLauncher.Resources = {
        RefactorEnabled: "True",
        IsProtocolHandlerBaseUrlParamEnabled: "False",
        ProtocolHandlerAreYouInstalled: {
            play: {
                content: robloxIcon + "<p>You&#x27;re moments away from getting into the experience!</p>",
                buttonText: "Download and Install Roblox",
                footerContent: "<a href='http://assetgame.<?php echo $url; ?>/game/help'class= 'text-name small' target='_blank' >Click here for help</a> "
            },
            studio: {
                content: "<img src='http://images.rbxcdn.com/f25e4cadae29ae9a57a962126b2d2e2a.png' width='95' height='95' alt='R' /><p>Get started creating your own experiences!</p>",
                buttonText: "Download Studio"
            }
        },
        ProtocolHandlerStartingDialog: {
            play: {
                content: robloxIcon + "<p>Roblox is now loading. Get ready!</p>"
            },
            studio: {
                content: "<img src='http://images.rbxcdn.com/f25e4cadae29ae9a57a962126b2d2e2a.png' width='95' height='95' alt='R' /><p>Checking for Roblox Studio...</p>"
            },
            loader: "<span class='spinner spinner-default'></span>"
        }
    };
</script>
<div id="PlaceLauncherStatusPanel" style="display:none;width:300px"
     data-new-plugin-events-enabled="True"
     data-event-stream-for-plugin-enabled="True"
     data-event-stream-for-protocol-enabled="True"
     data-is-join-attempt-id-enabled="True"
     data-is-game-launch-interface-enabled="True"
     data-is-protocol-handler-launch-enabled="True"
     data-is-duar-auto-opt-in-enabled="true"
     data-is-duar-opt-out-disabled="true"
     data-is-user-logged-in="True"
     data-os-name="Windows"
     data-protocol-name-for-client="roblox-player"
     data-protocol-name-for-studio="roblox-studio"
     data-protocol-roblox-locale="en_us"
     data-protocol-game-locale="en_us"
     data-protocol-url-includes-launchtime="true"
     data-protocol-detection-enabled="true"
     data-protocol-separate-script-parameters-enabled="true"
     data-protocol-avatar-parameter-enabled="true"
     data-protocol-channel-name="LIVE"
     data-protocol-studio-channel-name="LIVE"
     data-protocol-player-channel-name="LIVE">
    <div class="modalPopup blueAndWhite PlaceLauncherModal" style="min-height: 160px">
        <div id="Spinner" class="Spinner" style="padding:20px 0;">
            <img data-delaysrc="http://images.rbxcdn.com/e998fb4c03e8c2e30792f2f3436e9416.gif" height="32" width="32" alt="Progress" />
        </div>
        <div id="status" style="min-height:40px;text-align:center;margin:5px 20px">
            <div id="Starting" class="PlaceLauncherStatus MadStatusStarting" style="display:block">
                Starting Roblox...
            </div>
            <div id="Waiting" class="PlaceLauncherStatus MadStatusField">Connecting to People...</div>
            <div id="StatusBackBuffer" class="PlaceLauncherStatus PlaceLauncherStatusBackBuffer MadStatusBackBuffer"></div>
        </div>
        <div style="text-align:center;margin-top:1em">
            <input type="button" class="Button CancelPlaceLauncherButton translate" value="Cancel" />
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
         return RobloxLaunch.CheckRobloxInstall('http://www.<?php echo $url; ?>/Download');
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
                    <img data-delaysrc="http://images.rbxcdn.com/bcf5d84d4469c075e6296bfbc4deabb1" />
                </div>
            </li>
            <li class="step2-of-4">
                <h2>2</h2>
                <p class="larger-font-size">Click <strong>Run</strong> when prompted by your computer to begin the installation process.</p>
                <img data-delaysrc="http://images.rbxcdn.com/51328932dedb5d8d61107272cc1a27db.png" />
            </li>
            <li class="step3-of-4">
                <h2>3</h2>
                <p class="larger-font-size">Click <strong>Ok</strong> once you've successfully installed Roblox.</p>
                <img data-delaysrc="http://images.rbxcdn.com/bbdb38de8bb89ecc07730b41666a26a4" />
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

<script onerror='Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)' data-monitor='true' data-bundlename='clientinstaller' type='text/javascript' src='http://js.rbxcdn.com/00e1d37a965af4242dc6b296d6c883f0.js'></script>

<script type="text/javascript">
    Roblox.Client._skip = null;
    Roblox.Client._CLSID = '76D50904-6780-4c8b-8986-1A7EE0B1716D';
    Roblox.Client._installHost = 'setup.<?php echo $url; ?>';
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
                    <img class="loading-default" src='http://images.rbxcdn.com/4bed93c91f909002b1f17f05c0ce13d1.gif' alt="Processing..." />
                </div>
            </div>
            <div class="modal-footer text-footer">

            </div>
        </div>
    </div>
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



    <script onerror='Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)' data-monitor='true' data-bundlename='intl-polyfill' type='text/javascript' src='http://js.rbxcdn.com/4bae454bf5dab3028073fea1e91b6f19.js'></script>


    <script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="InternationalCore" data-bundle-source="Main" src="http://js.rbxcdn.com/558cbed0ebd127bd21f1045302a44c69a092fc29acd3ed983ecd5bcb46ed2e84.js"></script>

    <script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="TranslationResources" data-bundle-source="Main" src="http://js.rbxcdn.com/83d836a661ff433d5b7ce719c489e43af590ff75ab39ccc6d393546fe91b766a.js"></script>


    <script onerror='Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)' data-monitor='true' data-bundlename='leanbase' type='text/javascript' src='http://js.rbxcdn.com/61f348094c109b3ed060da77c07f9c9c.js'></script>


    <script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="CoreUtilities" data-bundle-source="Main" src="http://js.rbxcdn.com/6dc6f858b83870493bca99563b8e683b8b8af7a55a416e094c4dfb1969a085a3.js"></script>

    <script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="CoreRobloxUtilities" data-bundle-source="Main" src="http://js.rbxcdn.com/fe3f040796446fc5b34107b78555feae42b349c03f6be9655480d9f0eece4e63.js"></script>



    <script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="React" data-bundle-source="Main" src="http://js.rbxcdn.com/b79589d3dfb2446936aac95605deaa507ce5bc3e09073bac7dd04872880694c2.js"></script>

    <script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="ReactUtilities" data-bundle-source="Main" src="http://js.rbxcdn.com/2359bfdeb82ced7d627671a3f54e79df65c89aabeffafe46e360a627c8108d63.js"></script>

    <script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="ReactStyleGuide" data-bundle-source="Main" src="http://js.rbxcdn.com/d87c77b77ced393ab7c8644d91da9bf3804f7baf679f83681da5384e5a0dccd9.js"></script>

    <script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="ConfigureWebApps" data-bundle-source="Main" src="http://js.rbxcdn.com/5259cfe8a3e36118bd61120693dbba3ba87f2c3641f84bb07e29f1d69fe87523.js"></script>


    <script onerror='Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)' data-monitor='true' data-bundlename='angular' type='text/javascript' src='http://js.rbxcdn.com/3756ad214dde52cb58a1300177547475.js'></script>

    <script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="AngularJsUtilities" data-bundle-source="Main" src="http://js.rbxcdn.com/a104b6df90de3c5718e878fddc9238fdf9bf357438be8dd929f427b6cca5e984.js"></script>

    <script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="InternationalAngularJs" data-bundle-source="Main" src="http://js.rbxcdn.com/c147f266d2415a0a5241902efea4c6e3e6907898faa9452177b7ce92ea003cfc.js"></script>

    <script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Thumbnails" data-bundle-source="Main" src="http://js.rbxcdn.com/b943a7a0229dce195e7df6bff6523323ad8b2f049d3e6e9ca7f44190c8cf5bb4.js"></script>



<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="PresenceStatus" data-bundle-source="Main" src="http://js.rbxcdn.com/077dd64734d3aa9a884874f85f2f514a239688c33a0fdf3f90365e0e7436ec3b.js"></script>


<div id="presence-registration-bootstrap-data"
     data-is-enabled="False"
     data-interval="15000"></div>

<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="PresenceRegistration" data-bundle-source="Main" src="http://js.rbxcdn.com/d064c41bb0818a1981ea76fac0d1e25142b6117a2197ba92f670612c01ea71f2.js"></script>

    <div ng-modules="baseTemplateApp">
        <script type="text/javascript" src="http://js.rbxcdn.com/f3527069ef87b95fe1c26d21d14075c6.js"></script>
    </div>

    <div ng-modules="pageTemplateApp">
        <!-- Template bundle: page -->
<script type="text/javascript">
"use strict"; angular.module("pageTemplateApp", []).run(['$templateCache', function($templateCache) { 

 }]);
</script>

    </div>

<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="CaptchaCore" data-bundle-source="Main" src="http://js.rbxcdn.com/1e979a52d80126c2447674c17604baf65f73183fd44df1e6cd862feb441bdcc5.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Challenge" data-bundle-source="Main" src="http://js.rbxcdn.com/4644f860739d83b63002f44d463ceebd171692c7d7a41748df467ab49be1c891.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.RostileChallenge" data-bundle-source="Unknown" src="http://js.rbxcdn.com/fdd31584fd5006be8930f9cc2e3cedb1a1f45ebf88def229d050d48e20afde80.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.RostileChallenge" data-bundle-source="Unknown" src="http://js.rbxcdn.com/a3afe915131ac5a7ff949105b24de4d0459e6b48846472e09d7c5490b591e68e.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.PrivateAccessTokenChallenge" data-bundle-source="Unknown" src="http://js.rbxcdn.com/45dd9a6e8e3dbdfc18153719b293eff8cbfd32e05b8186a5ed3f15a95f1ecb64.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.PrivateAccessTokenChallenge" data-bundle-source="Unknown" src="http://js.rbxcdn.com/94a14bf31ad0a75d3878f6772e6d5a251e7da9b64894e2176a07f65f4d79d8a3.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Reauthentication" data-bundle-source="Unknown" src="http://js.rbxcdn.com/730fcbf0eba6dd82de9b0029e157627f023e6f448059c5b4c6a4f356222b3ac0.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Reauthentication" data-bundle-source="Unknown" src="http://js.rbxcdn.com/541a2c06b0dcbe1e2b287c07c1cac903dfffaa0103d4dbed4c96ee990700b5d7.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ForceAuthenticator" data-bundle-source="Unknown" src="http://js.rbxcdn.com/dc2cf2e13daeb298bb874d126d8b067c2863c6a8978b4d5046e600e4b598578a.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ForceAuthenticator" data-bundle-source="Unknown" src="http://js.rbxcdn.com/5fbd8389fb24177a5be64285e12645c445dee91f0a686d5bed5865f0e009d387.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ForceTwoStepVerification" data-bundle-source="Unknown" src="http://js.rbxcdn.com/d33ce74e1b98bc070ed4542a3ac39318489a693cd98ce6725624311fd83617e1.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ForceTwoStepVerification" data-bundle-source="Unknown" src="http://js.rbxcdn.com/5a5300a5800d03e45af07f710bbcfae2d6a2f4edea9305cb47a488bb57b74455.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ProofOfWorkChallenge" data-bundle-source="Unknown" src="http://js.rbxcdn.com/2d0a39178b783d4e09a426a042a826da646b1fc91f581c3aaaf26462da283d18.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ProofOfWorkChallenge" data-bundle-source="Unknown" src="http://js.rbxcdn.com/b41227fe1ecc1f4409f2e33f02d4d968f6d6389349d2221f481ff3b34e01a257.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.SecurityQuestions" data-bundle-source="Unknown" src="http://js.rbxcdn.com/7730fff4e1477239840256961802be137c8d5ce6723b0889ac525bfe58a74003.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.SecurityQuestions" data-bundle-source="Unknown" src="http://js.rbxcdn.com/2da1b676b979a60ce3b9471d919f53c6523c606f10e6ba75fa3c168945b8455a.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Authentication.Captcha" data-bundle-source="Unknown" src="http://js.rbxcdn.com/955567fcee625c9235aea26b45e9b137de9ab1340f359f7b2890c0589415137c.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Authentication.Captcha" data-bundle-source="Unknown" src="http://js.rbxcdn.com/44ff0f2cc820b734456e36bcd3528a30460f0576ff6ff17478b2d84824b64abd.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Authentication.TwoStepVerification" data-bundle-source="Unknown" src="http://js.rbxcdn.com/be0a253ed75b2d5c586cb16a454ea63ac3b48808299e7c7ca72f93c77aa78d9b.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Authentication.TwoStepVerification" data-bundle-source="Unknown" src="http://js.rbxcdn.com/ad33ead29e90b9c8822f2eaab8569e1e7120be60fea1b902b7191b91c1cf610a.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="VerificationUpsell" data-bundle-source="Main" src="http://js.rbxcdn.com/36776e03b33e735d6b3237e8d56c81728a3af642275c4aa7b49f3b1ed0624945.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.VerificationUpsell" data-bundle-source="Unknown" src="http://js.rbxcdn.com/2bfce5f7493682f4b4e950dcf3b00cfd7d3fae5852bc6d730a14672f8e787454.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.VerificationUpsell" data-bundle-source="Unknown" src="http://js.rbxcdn.com/d47bf837b80592f2d3f9cc2940a5ee3f0bc5edf210fedf2141976ce3036bf151.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Experimentation" data-bundle-source="Main" src="http://js.rbxcdn.com/c4b0a446b38285f3db5472340f4ef27d737c87b78348e36dc7acbcfec89d70bf.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="RobloxBadges" data-bundle-source="Main" src="http://js.rbxcdn.com/4b4ed339879e21ebd989965a4ade1a7d6f3181871df8d816198c1cdc73b629d5.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ProfileBadges" data-bundle-source="Unknown" src="http://js.rbxcdn.com/8889de1e23be3333741bd33377c89e88aeab7998ebf4ced2ea65a96d770af729.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ProfileBadges" data-bundle-source="Unknown" src="http://js.rbxcdn.com/ebc57f8a4aabceab9f38dda880bf11c04f2c92f441e535f0bcaa21b294736e65.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="AccountSwitcher" data-bundle-source="Main" src="http://js.rbxcdn.com/55e9182f30571388944215c359582495c9cf39ff1218f2a173415d5d37dd6f18.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.Controls" data-bundle-source="Unknown" src="http://js.rbxcdn.com/9162b64b75cc52f51964029cd55d55b1d1bad248e3d35b33586df4269fe81e1e.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.Controls" data-bundle-source="Unknown" src="http://js.rbxcdn.com/ce33e1b7ee9a9fe04186a1b433fe261035b0f4098ec10a0d943060efa65e98a2.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Authentication.AccountSwitch" data-bundle-source="Unknown" src="http://js.rbxcdn.com/60ddd2e451fd1bb0df64b78e010f486ecdc9a94ef809f56e9e327acb537d9cab.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Authentication.AccountSwitch" data-bundle-source="Unknown" src="http://js.rbxcdn.com/10ef4a4b892f4fde2e22b11930eafc358dc1ff59e17b44095514daf733a2f101.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="PriceTag" data-bundle-source="Main" src="http://js.rbxcdn.com/cd456bb506f1b0b06a2eb645ca018d367185ca84725ec00d524e35ce431f4a8c.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Navigation" data-bundle-source="Main" src="http://js.rbxcdn.com/b3817d10909ade9f5c67179673d95341bebf1846190229b801caf899b09dd8ac.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.Features" data-bundle-source="Unknown" src="http://js.rbxcdn.com/656b15e231e6d14a29bfc0944aac1cd94d7ea43f482c694edf9502014b45dbc2.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.Features" data-bundle-source="Unknown" src="http://js.rbxcdn.com/fba9cbce2a76637820751a09b9a6ddef99eefd84cdba178c0049ab102c55b7ec.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Common.Presence" data-bundle-source="Unknown" src="http://js.rbxcdn.com/d9b4f8626ba6e9c4a9b6f84527e222dbb214a0e61e1e43adcc8d71082413d667.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Common.Presence" data-bundle-source="Unknown" src="http://js.rbxcdn.com/7f4c2753c55dc89d4c9bf2dbfbf34e224194f6255457c0bd8c8c1ed0e6350f3a.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ShopDialog" data-bundle-source="Unknown" src="http://js.rbxcdn.com/13b3b0cf97cfb5da4538eb0c59f252188b4f724f9328c264a58d24a714e41fe5.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ShopDialog" data-bundle-source="Unknown" src="http://js.rbxcdn.com/8f2404ea3cd842c0d1ffd9bebf673b8572a2935243f7e054eef8fcc7a898f48d.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Common.AlertsAndOptions" data-bundle-source="Unknown" src="http://js.rbxcdn.com/81fb25c5bd2872ace1af6fe0366b5fbbccf2658667621faefa2a1897af476c7b.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Common.AlertsAndOptions" data-bundle-source="Unknown" src="http://js.rbxcdn.com/9fe94e6c340be891d16a5026223fc244ac5b117feeda22fcbb3e8b4c01e9f88c.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Purchasing.RedeemGameCard" data-bundle-source="Unknown" src="http://js.rbxcdn.com/d6026744c49b4dedc277a86938e884082f1ebc46284d731e96aaa54c4193c734.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Purchasing.RedeemGameCard" data-bundle-source="Unknown" src="http://js.rbxcdn.com/10741c34abbc74f0b5aef2f99412fd13cf3e4dc4a411790f5eeb7574a45aff12.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.Messages" data-bundle-source="Unknown" src="http://js.rbxcdn.com/69a2d98dbcc154a2eda4f778df63a0bca7d3df5d4d7d03eec49644bfa0fde19f.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.Messages" data-bundle-source="Unknown" src="http://js.rbxcdn.com/8e5c1c86f81d1a1ec5db7cc50c8b7feed0ef2eda4d62453cdd904710140a0aa8.js"></script>

    

        <script>
            $(function () {
                Roblox.DeveloperConsoleWarning.showWarning();
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
        
    });

</script>
    
    
<script type="text/javascript">
    var Roblox = Roblox || {};
    Roblox.UpsellAdModal = Roblox.UpsellAdModal || {};

    Roblox.UpsellAdModal.Resources = {
        title: "Remove Ads Like This",
        body: "Builders Club members do not see external ads like these.",
        accept: "Upgrade Now",
        decline: "No, thanks"
    };
</script>

    <script onerror='Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)' data-monitor='true' data-bundlename='page' type='text/javascript' src='http://js.rbxcdn.com/2a0cc2d71d84c05e716585f86f951ef1.js'></script>


    <script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="StyleGuide" data-bundle-source="Main" src="http://js.rbxcdn.com/b1d20ab5fbb63a47a9a07fe8c014f0ed40c06b7f8df43c1d8fecc0a3bd38a265.js"></script>

<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Builder" data-bundle-source="Main" src="http://js.rbxcdn.com/5a130ca7a8a39e0d88f0b43543e6e80e4b8c20405a7af835356add2a156a610f.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="CookieBannerV3" data-bundle-source="Main" src="http://js.rbxcdn.com/7693d98990f875a88c91c0385e1b0542bb51913fb34b23f414b6890d90353c40.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Tracking" data-bundle-source="Unknown" src="http://js.rbxcdn.com/5418f00c73c08d3b23c21e9486aaf8de16ee77af85d668428bf542a636103a63.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Tracking" data-bundle-source="Unknown" src="http://js.rbxcdn.com/7043536ec0248f489b68b5e62dd3336f6962fb50d18a65b766453a206a772d4f.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Footer" data-bundle-source="Main" src="http://js.rbxcdn.com/22232c2a3309953feca3dd94eb7e06bdc98b12e07cbf8ab6c1ad8b11a7069753.js"></script>

<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="AccountSecurityPrompt" data-bundle-source="Main" src="http://js.rbxcdn.com/69a16741b7acbd3e7d1ec54368c7ea3a1b66d1debc91cff4d9d8943473a941c4.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.AccountSecurityPrompt" data-bundle-source="Unknown" src="http://js.rbxcdn.com/6d23447c195fb41d49518454938bd471aa37cd85c0decdd3686c574817777dc7.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.AccountSecurityPrompt" data-bundle-source="Unknown" src="http://js.rbxcdn.com/a804699fbcd3c2df22d3e5c38fe0d5a743c698c8d89bda7425fc5fe552956a2c.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="AccessManagementUpsellV2" data-bundle-source="Main" src="http://js.rbxcdn.com/b691dc5cf03001cd719bc4640bbb7e7d54e76e6a02e78cd4eb4f16229f56fc53.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Amp.Upsell" data-bundle-source="Unknown" src="http://js.rbxcdn.com/7dfebd67df86704c5a4d0f77b495d2f9e6f03e4a7f12d0a030ad6bf27e5f7c48.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Amp.Upsell" data-bundle-source="Unknown" src="http://js.rbxcdn.com/87307cb471eea5b064b8452a331c379b9a1e362af6b681c2c2ad75c24b9167ae.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.AgeVerificationUpsell" data-bundle-source="Unknown" src="http://js.rbxcdn.com/aff2cdd67a84ad537fb2b3e904411bfa9eb52ab295378592e4a0e7d9df8153ad.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.AgeVerificationUpsell" data-bundle-source="Unknown" src="http://js.rbxcdn.com/43c65eb03c2fddfb7aa81e4e92eb4fad0d302d328205a1c6e64d8dca3457a421.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Parents" data-bundle-source="Unknown" src="http://js.rbxcdn.com/6ed08166a2024dadd0aa52e94e87dca3243ed7a9de70b578b9192279101e2f6d.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Parents" data-bundle-source="Unknown" src="http://js.rbxcdn.com/a02171640dbaab1cda082383a63a06841652c688ed6177362ad3d754e62ed21f.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.IdVerification" data-bundle-source="Unknown" src="http://js.rbxcdn.com/8b8f62c93ba1f851f40cb89cde8ed4b44cc0f892f0fde805b4243f9fb8b8f6f1.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.IdVerification" data-bundle-source="Unknown" src="http://js.rbxcdn.com/4df6ec52559e1c250d3f2e8286e1ffca9f33998dcddcfaf096a4bcd364bbf808.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="UserProfiles" data-bundle-source="Main" src="http://js.rbxcdn.com/997794fb9d13e2a40d99bb49919edb22e675f932df407bac95089b9dd50de3b4.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="PeopleList" data-bundle-source="Main" src="http://js.rbxcdn.com/3e857f7d85d18d4fb800cf636e059b6c2e2bd2e5875ac0ee70d2e8e96af979a0.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.PeopleList" data-bundle-source="Unknown" src="http://js.rbxcdn.com/b21260309cc62ae035a0f4485ec2816cb88172dc7556448f9d693c3394de5262.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.PeopleList" data-bundle-source="Unknown" src="http://js.rbxcdn.com/7c1581fd84d98f2ae8838140704fc4e83a44318b154ffb23229886a5af63262a.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="AvatarShopHomepageRecommendations" data-bundle-source="Main" src="http://js.rbxcdn.com/6692c40d5c88e6f0839419dc7455a0ecfe9ffc15eff4f9c530690fd8ef77e012.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Catalog" data-bundle-source="Unknown" src="http://js.rbxcdn.com/ce7a1b42e1dfd93b8e1b6bb48a32d034de349672bad29a1f89b7cdb6fb316895.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Catalog" data-bundle-source="Unknown" src="http://js.rbxcdn.com/73793ed0f4404db32d5239cbb97a9009a1541582611669876cca97e6f9db8a90.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Recommendations" data-bundle-source="Unknown" src="http://js.rbxcdn.com/a35b5342ceeb69aca44f03fd05d6cf49d8c2ca296170db4e62411a64292b3219.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Recommendations" data-bundle-source="Unknown" src="http://js.rbxcdn.com/babce206b492515143d22e96c7508c6c11b2f1298a66f5d98b0b2c567c005962.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="PlacesList" data-bundle-source="Main" src="http://js.rbxcdn.com/35a4cdd7b2664f26200a78ef9c808400b65f071fef138b5ec88afd01acb17833.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.GamePage" data-bundle-source="Unknown" src="http://js.rbxcdn.com/d0fabfbe9574cd37bd81cfa299b0ad30daccf42fea2ffffbaaf1fcef3dec9cf1.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.GamePage" data-bundle-source="Unknown" src="http://js.rbxcdn.com/68ad95251afd139a95167fb16f4c09cd239ce22de9e6c99f2a21d33efd786a71.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.PlacesList" data-bundle-source="Unknown" src="http://js.rbxcdn.com/9b59293c3707f979e187e7841fdc2c93cd6b4678afcea006cd5fc6019b7b7cfa.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.PlacesList" data-bundle-source="Unknown" src="http://js.rbxcdn.com/d9d9b3bbc83507654476bdf0a29130cf11d21bd259e09c1037b3cb6fb5f19ae2.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Common.GameSorts" data-bundle-source="Unknown" src="http://js.rbxcdn.com/f8f99d8d9dec811702b3e6be55743b4db5e799487c1fcf00086441d0fca288c7.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Common.GameSorts" data-bundle-source="Unknown" src="http://js.rbxcdn.com/b72aaf50687666374f42bc3d68447b410e4a6eaee482d880adc9de3fbf1a3815.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.GameDetails" data-bundle-source="Unknown" src="http://js.rbxcdn.com/09d8dac7ee48de7028b8e0653ad055548f1db5ed190b1f2000679d0e882fd679.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.GameDetails" data-bundle-source="Unknown" src="http://js.rbxcdn.com/233203024998c12459746ab85039c0467b469588d8d0c3229b4dd8feaf8bf567.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="FacebookSunsetModal" data-bundle-source="Main" src="http://js.rbxcdn.com/7e48d777e11948c6194552ac06766e57ec4d1a54ed8a67632075abf8ed0bcf6c.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Authentication.Social" data-bundle-source="Unknown" src="http://js.rbxcdn.com/4f0dcfa660b6472fbafe2482ce980fefb19b5733d17997b53f1f65357c2a0a40.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Authentication.Social" data-bundle-source="Unknown" src="http://js.rbxcdn.com/e3680bb6128bbaa9f2975b625aef318941089b5dc0dfa822c5772693ad2a3a72.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Authentication.SignUp" data-bundle-source="Unknown" src="http://js.rbxcdn.com/2f66680c87516ed634566e5f0987c83b8851edd6807a085ad89f29bc9390aab6.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Authentication.SignUp" data-bundle-source="Unknown" src="http://js.rbxcdn.com/24c5ec1d302919c210f1eb32fe9cd33fdc5dd797627cfae681e797790edabdb3.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="HomePageUpsellCard" data-bundle-source="Main" src="http://js.rbxcdn.com/932d08c474104f67901fc1abdb700c7e6531565ed227ffad37117153ca0ffeea.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ContactUpsell" data-bundle-source="Unknown" src="http://js.rbxcdn.com/3c3cdb3832e6bd3d81601854a0c978b2ad404c8ebbab1b0b285c4a8f01ee0718.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ContactUpsell" data-bundle-source="Unknown" src="http://js.rbxcdn.com/bd2607b5e988f89b23073838a558a627610a3d5435f1f81119b2b6534fcb0b80.js"></script>

<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="NotificationStream" data-bundle-source="Main" src="http://js.rbxcdn.com/da6956813933ddfb0fca5abc8d376176121c62a80d7dd24e97c3d5251cac433b.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Notifications.NotificationStream" data-bundle-source="Unknown" src="http://js.rbxcdn.com/b25b0ecd85ce9892b4790b1378350dbf2523f672bd0a1f1719d2740959abe99c.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Notifications.NotificationStream" data-bundle-source="Unknown" src="http://js.rbxcdn.com/2f61f602829fdd8537f4270c1d3de450dc0c31222bd68bcb5aae657033334598.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="SendrNotificationStream" data-bundle-source="Main" src="http://js.rbxcdn.com/8838e4d3073ca453ecd7f7a8c8ed5093709cfb99aa9078aa7d543377ac47b986.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ReportAbuse" data-bundle-source="Unknown" src="http://js.rbxcdn.com/cb79c58586cb9a2dbb4bfb8629cb76d048f7002b7bfccbebfafeaa3532223de7.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ReportAbuse" data-bundle-source="Unknown" src="http://js.rbxcdn.com/f7c14460d7d18919d62808629b8f742f326ddafb786be0feb66d3c2e964e3921.js"></script>


<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Contacts" data-bundle-source="Main" src="http://js.rbxcdn.com/6291b18e0d22b742564031e30914caa8a4326d2db7916b04ab8524c6b306f25a.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="Chat" data-bundle-source="Main" src="http://js.rbxcdn.com/e482ce424d4f31e4bc1232639041da3655abc136251e00e623a8fc607b3f14fe.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Chat" data-bundle-source="Unknown" src="http://js.rbxcdn.com/346430346eeecefc96593e35a9da5a5c4f9904df29ee90de745062563132ec21.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Chat" data-bundle-source="Unknown" src="http://js.rbxcdn.com/5f379dbc7171a93c81b0182f53bc1f4152fca2202a5771532e753e0138b726b1.js"></script>

    <script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="ItemPurchaseUpsell" data-bundle-source="Main" src="http://js.rbxcdn.com/d248f191744fa5ae657a96460a4d3089217f9c775183fd4938059c9bcce33681.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Purchasing.PurchaseDialog" data-bundle-source="Unknown" src="http://js.rbxcdn.com/4531aa9a46f1823e16f9abb3bc6325c948c9dafe9d9efee4664c1f8ea0d8dcf8.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Purchasing.PurchaseDialog" data-bundle-source="Unknown" src="http://js.rbxcdn.com/64e75ab497587ecb8116534d8b56e8724123f879f6a148cf60cd696aec657d1d.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Premium" data-bundle-source="Unknown" src="http://js.rbxcdn.com/0959eeb00c7fd366ff1795028e2673f752039aced2d456557d23f9f7542fc972.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Premium" data-bundle-source="Unknown" src="http://js.rbxcdn.com/fcc4bf541e7e729867d1e42300089feaef94555b6cf89e33bb48e30c45371e45.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="ItemDetailsHydrationService" data-bundle-source="Main" src="http://js.rbxcdn.com/04c01d3058ad1ea671634ce83d976716adf867bb5438ddb7442bf896d03f97a1.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="ItemPurchase" data-bundle-source="Main" src="http://js.rbxcdn.com/ac4a7a3f4687ebdb6481cda74c34783c8219aba5452332ac495d16331979c53c.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Item" data-bundle-source="Unknown" src="http://js.rbxcdn.com/bfd2f50c2527f8a6ebbbbf122681bacca468837269df925ecd2b7ee178b918b0.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.Item" data-bundle-source="Unknown" src="http://js.rbxcdn.com/ba8d8575fdb6e0bab85e9715a0084d297ade28957a6e64d73ec56af6c0a648e9.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ItemModel" data-bundle-source="Unknown" src="http://js.rbxcdn.com/9ccf93e65568293a9d6d037257f446e7f26c3a5cc764663620e3cb3162f7e92e.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.ItemModel" data-bundle-source="Unknown" src="http://js.rbxcdn.com/54c13aaea011e94d285d4171277dbaa0a2ec1bf763b408d71f2adc7f72bad919.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="IdVerification" data-bundle-source="Main" src="http://js.rbxcdn.com/bd18305af9e4ce41099df37e554eeb1bf2cc139ffba636e356666ccd9d07481c.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Verification.Identity" data-bundle-source="Unknown" src="http://js.rbxcdn.com/f97eb41a12dc145846afb2e40be96dc9dd4424a5e6e8ca5609e0b1076011675b.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Verification.Identity" data-bundle-source="Unknown" src="http://js.rbxcdn.com/35f0d01b47b92a779a0eb4c083a91f682d01b13e759d03f4dfe2f87bc608c2c6.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="GameLaunch" data-bundle-source="Main" src="http://js.rbxcdn.com/233c88de4cbd81d3122a9e025f944fe6768504556aac154f3cd73252fa051dad.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Common.VisitGame" data-bundle-source="Unknown" src="http://js.rbxcdn.com/d0cf8a226060b1ed63a49d6b529fad512c3ccdbc7fda9ef61e5b582000f9685c.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Common.VisitGame" data-bundle-source="Unknown" src="http://js.rbxcdn.com/5e740130ceecbb0e1340b712955c239f6395e918d1558fe7982933b895d728e5.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.GameLaunchGuestMode" data-bundle-source="Unknown" src="http://js.rbxcdn.com/2d85da4f9d2a484be909587bb1490c109d0e2657b9da180d1f0d2bffce8c8508.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_Feature.GameLaunchGuestMode" data-bundle-source="Unknown" src="http://js.rbxcdn.com/1eba4a5ba48b46f09a1576cdd3e3440341efdcebc7150e44b4e743da95e3e830.js"></script>




<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="LatencyMeasurement" data-bundle-source="Main" src="http://js.rbxcdn.com/90bb51db086699ec26a6c9df04087678948883f8c3ddd1037c7223a20ff4fe90.js"></script>


<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="UserAgreementsChecker" data-bundle-source="Main" src="http://js.rbxcdn.com/ae324a661ed9c8b814fc02e863769a6fa8e4ecb81e4551399f46db5d4f0e44c6.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.UserAgreements" data-bundle-source="Unknown" src="http://js.rbxcdn.com/56728bee27a8608f7bbd04016bc65d1b97165cdd2db169a8fd975dc92ffbb09b.js"></script>
<script type="text/javascript" onerror="Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)" data-monitor="true" data-bundlename="DynamicLocalizationResourceScript_CommonUI.UserAgreements" data-bundle-source="Unknown" src="http://js.rbxcdn.com/64daef195122aa9c881d456010e7b98d698b1c6b1aaba58c81abc27da0db8fed.js"></script>




    <script onerror='Roblox.BundleDetector && Roblox.BundleDetector.reportBundleError(this)' data-monitor='true' data-bundlename='pageEnd' type='text/javascript' src='http://js.rbxcdn.com/cce4d536ffbb92f78a2bd49ee1246f18.js'></script>


</body>
</html>
