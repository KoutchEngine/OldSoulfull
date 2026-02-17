<?php
	ob_start();
    header('Content-Type: application/json');
    include 'C:/wamp64/www/configuration/global.php';
    $site->LoginState(false, true);
    if(isset($_GET['id']))
    {
        $placeId = (int)$_GET['id'];
        if($site->getPlace($placeId))
        {
            $place = $site->getPlace($placeId);
            $game = $site->getGame($place['gameId']);
            $creator = $site->getUser($place['creatorId']);
            $uid = $game['id'];
        } else {
            exit('{}');
        }

        if(!$site->userOwnsItem($user['id'], $place['id']))
        {
            exit('{}');
        }
    } else {
        exit('{}');
    }
?>
{
  "DefaultFormatNameString": "{0}'s Place Number: {1}",
  "IUser": null,
  "GameDetailsResources": {
    "IsValueCreated": false,
    "Value": {
      "ActionCopyLinkMetadata": {
        "IsTranslated": true
      },
      "ActionCopyLink": "Copy Link",
      "ActionShareGameToChatMetadata": {
        "IsTranslated": true
      },
      "ActionShareGameToChat": "Share to chat",
      "ActionSwapToSourceMetadata": {
        "IsTranslated": true
      },
      "ActionSwapToSource": "Translate to Original Language",
      "ActionSwapToTranslationMetadata": {
        "IsTranslated": true
      },
      "ActionTranslateMetadata": {
        "IsTranslated": true
      },
      "ActionTranslate": "Translate",
      "ActionViewMetadata": {
        "IsTranslated": true
      },
      "ActionView": "View",
      "DescriptionAllowCopyingDisclaimerMetadata": {
        "IsTranslated": true
      },
      "DescriptionPlaceDescriptionDefaultMetadata": {
        "IsTranslated": true
      },
      "DescriptionPlaceDescriptionDefault": "This is your very first Roblox creation. Check it out, then make it your own with Roblox Studio!",
      "ErrorCopyLinkFailedMetadata": {
        "IsTranslated": true
      },
      "ErrorCopyLinkFailed": "Failed to copy link to clipboard. Please try again later.",
      "HeadingCommunityMetadata": {
        "IsTranslated": true
      },
      "HeadingCommunity": "Join the community",
      "HeadingDescriptionMetadata": {
        "IsTranslated": true
      },
      "HeadingDescription": "Description",
      "HeadingPlaceTitleDefaultMetadata": {
        "IsTranslated": true
      },
      "HeadingRecommendedGamesMetadata": {
        "IsTranslated": true
      },
      "HeadingRecommendedGames": "Recommended Experiences",
      "LabelAboutMetadata": {
        "IsTranslated": true
      },
      "LabelAbout": "About",
      "LabelAgeGuidelinesMetadata": {
        "IsTranslated": true
      },
      "LabelAgeGuidelines": "Age Guidelines",
      "LabelAllAgesMetadata": {
        "IsTranslated": true
      },
      "LabelAllAges": "All Ages",
      "LabelAllowCopyingCheckboxMetadata": {
        "IsTranslated": true
      },
      "LabelAllowCopyingCheckbox": "Allow Copying",
      "LabelAllowedGearMetadata": {
        "IsTranslated": true
      },
      "LabelAllowedGear": "Allowed Gear",
      "LabelByMetadata": {
        "IsTranslated": true
      },
      "LabelBy": "By",
      "LabelByCreatorMetadata": {
        "IsTranslated": true
      },
      "LabelCameraMetadata": {
        "IsTranslated": true
      },
      "LabelCamera": "Camera",
      "LabelChatFeaturesMetadata": {
        "IsTranslated": true
      },
      "LabelChatFeatures": "Chat Features",
      "LabelCommunicationMetadata": {
        "IsTranslated": true
      },
      "LabelCommunication": "Communication",
      "LabelContainsStrongLanguagePillWarningMetadata": {
        "IsTranslated": true
      },
      "LabelContainsStrongLanguagePillWarning": "Contains strong language",
      "LabelContainsStrongLanguageWarningWithGuidelineMetadata": {
        "IsTranslated": true
      },
      "LabelCopyingTitleMetadata": {
        "IsTranslated": true
      },
      "LabelCopyingTitle": "Copying",
      "LabelCreatedMetadata": {
        "IsTranslated": true
      },
      "LabelCreated": "Created",
      "LabelExperimentalModeMetadata": {
        "IsTranslated": true
      },
      "LabelExperimentalMode": "Experimental Mode",
      "LabelExperimentalWarningMetadata": {
        "IsTranslated": true
      },
      "LabelFavoritesMetadata": {
        "IsTranslated": true
      },
      "LabelFavorites": "Favorites",
      "LabelGameCopyLockedMetadata": {
        "IsTranslated": true
      },
      "LabelGameCopyLocked": "This experience is copylocked",
      "LabelGameDoesNotSellMetadata": {
        "IsTranslated": true
      },
      "LabelGameDoesNotSell": "No passes available.",
      "LabelGameRequiresBuildersClubMetadata": {
        "IsTranslated": true
      },
      "LabelGameRequiresBuildersClub": "This Experience requires Builders Club",
      "LabelGenreMetadata": {
        "IsTranslated": true
      },
      "LabelGenre": "Genre",
      "LabelGenreAdventureMetadata": {
        "IsTranslated": true
      },
      "LabelGenreAdventure": "Adventure",
      "LabelGenreAllMetadata": {
        "IsTranslated": true
      },
      "LabelGenreAll": "All",
      "LabelGenreBuildingMetadata": {
        "IsTranslated": true
      },
      "LabelGenreBuilding": "Building",
      "LabelGenreComedyMetadata": {
        "IsTranslated": true
      },
      "LabelGenreComedy": "Comedy",
      "LabelGenreFightingMetadata": {
        "IsTranslated": true
      },
      "LabelGenreFighting": "Fighting",
      "LabelGenreFPSMetadata": {
        "IsTranslated": true
      },
      "LabelGenreFPS": "FPS",
      "LabelGenreMedievalMetadata": {
        "IsTranslated": true
      },
      "LabelGenreMedieval": "Medieval",
      "LabelGenreMilitaryMetadata": {
        "IsTranslated": true
      },
      "LabelGenreMilitary": "Military",
      "LabelGenreNavalMetadata": {
        "IsTranslated": true
      },
      "LabelGenreNaval": "Naval",
      "LabelGenreRPGMetadata": {
        "IsTranslated": true
      },
      "LabelGenreRPG": "RPG",
      "LabelGenreSciFiMetadata": {
        "IsTranslated": true
      },
      "LabelGenreSciFi": "Sci-Fi",
      "LabelGenreWesternMetadata": {
        "IsTranslated": true
      },
      "LabelGenreWestern": "Western",
      "LabelLabelGenreHorrorMetadata": {
        "IsTranslated": true
      },
      "LabelLabelGenreHorror": "Horror",
      "LabelLabelGenreSportsMetadata": {
        "IsTranslated": true
      },
      "LabelLabelGenreSports": "Sports",
      "LabelLabelGenreTownAndCityMetadata": {
        "IsTranslated": true
      },
      "LabelLabelGenreTownAndCity": "Town and City",
      "LabelLeaderboardsMetadata": {
        "IsTranslated": true
      },
      "LabelLeaderboards": "Leaderboards",
      "LabelLearnMoreMetadata": {
        "IsTranslated": true
      },
      "LabelLearnMore": "Learn More",
      "LabelLinkCopiedMetadata": {
        "IsTranslated": true
      },
      "LabelLinkCopied": "Link Copied",
      "LabelMaxPlayersMetadata": {
        "IsTranslated": true
      },
      "LabelMaxPlayers": "Server Size",
      "LabelMicrophoneMetadata": {
        "IsTranslated": true
      },
      "LabelMicrophone": "Microphone",
      "LabelNoMetadata": {
        "IsTranslated": true
      },
      "LabelNo": "No",
      "LabelNoneMetadata": {
        "IsTranslated": true
      },
      "LabelNone": "None",
      "LabelNoRunningGamesMetadata": {
        "IsTranslated": true
      },
      "LabelNoRunningGames": "There are currently no running experiences.",
      "LabelPlaceCopyingAllowedMetadata": {
        "IsTranslated": true
      },
      "LabelPlaceCopyingAllowed": "This experience's source can be copied.",
      "LabelPlayingMetadata": {
        "IsTranslated": true
      },
      "LabelPlaying": "Active",
      "LabelPrivateSourceMetadata": {
        "IsTranslated": true
      },
      "LabelPrivateSource": "Private Source",
      "LabelPrivateSourceDescriptionMetadata": {
        "IsTranslated": true
      },
      "LabelPrivateSourceDescription": "This experience's source is private",
      "LabelPublicPrivateSourceCheckBoxMetadata": {
        "IsTranslated": true
      },
      "LabelPublicPrivateSourceCheckBox": "By leaving this checkbox checked, you are agreeing to allow every other user of Roblox the right to use (in various ways) the content you are now making available, as set out in the Terms. If you do not want to grant this right, please uncheck this box.",
      "LabelPublicSourceMetadata": {
        "IsTranslated": true
      },
      "LabelPublicSource": "Public Source",
      "LabelPublicSourceDescriptionMetadata": {
        "IsTranslated": true
      },
      "LabelPublicSourceDescription": "This experience's source is public",
      "LabelReportAbuseMetadata": {
        "IsTranslated": true
      },
      "LabelReportAbuse": "Report Abuse",
      "LabelServersMetadata": {
        "IsTranslated": true
      },
      "LabelServers": "Servers",
      "LabelStoreMetadata": {
        "IsTranslated": true
      },
      "LabelStore": "Store",
      "LabelSuitableForEveryoneMetadata": {
        "IsTranslated": true
      },
      "LabelSuitableForEveryone": "Suitable for everyone",
      "LabelUnavailableMetadata": {
        "IsTranslated": true
      },
      "LabelUnavailable": "N/A",
      "LabelUpdatedMetadata": {
        "IsTranslated": true
      },
      "LabelUpdated": "Updated",
      "LabelVisitsMetadata": {
        "IsTranslated": true
      },
      "LabelVisits": "Visits",
      "LabelVoiceEnabledMetadata": {
        "IsTranslated": true
      },
      "LabelVoiceEnabled": "Voice Enabled",
      "LabelYesMetadata": {
        "IsTranslated": true
      },
      "LabelYes": "Yes",
      "MessageExternalLinkWarningMetadata": {
        "IsTranslated": true
      },
      "MessageExternalLinkWarning": "By clicking \"continue\", you will be redirected to a website that is not owned or operated by Roblox. They may have different terms and privacy policies.",
      "MessageLeavingRobloxTitleMetadata": {
        "IsTranslated": true
      },
      "MessageLeavingRobloxTitle": "Leaving Roblox",
      "RatingPercentOnlyMetadata": {
        "IsTranslated": true
      },
      "ToastLinkCopiedMetadata": {
        "IsTranslated": true
      },
      "ToastLinkCopied": "Link copied to clipboard",
      "TooltipCopyLinkMetadata": {
        "IsTranslated": true
      },
      "TooltipCopyLink": "Copy Link to Clipboard",
      "State": 0
    }
  },
  "ID": <?php echo $place['id']; ?>,
  "DefaultUserName": "<?php echo protecc($user['username']); ?>",
  "Name": "<?php echo protecc($place['gamename']); ?>",
  "Description": "<?php echo protecc($place['description']); ?>",
  "DescriptionMaxCharacterCount": 1000,
  "Genre": "All",
  "Access": "Everyone",
  "IsPublic": true,
  "DeviceSectionHeader": null,
  "SellGameAccessSectionHeader": null,
  "ShouldShowStartPlaceNameOrDescriptionUpdateAlsoUpdatesGames": true,
  "NumberOfMaxPlayersList": [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100],
  "NumberOfPlayersList": [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49],
  "IsAllGenresAllowed": true,
  "AllowedGearTypes": [
    {
      "GearTypeDisplayName": "Melee",
      "IsSelected": false,
      "Category": 8
    },
    {
      "GearTypeDisplayName": "Power ups",
      "IsSelected": false,
      "Category": 11
    },
    {
      "GearTypeDisplayName": "Ranged",
      "IsSelected": false,
      "Category": 9
    },
    {
      "GearTypeDisplayName": "Navigation",
      "IsSelected": false,
      "Category": 12
    },
    {
      "GearTypeDisplayName": "Explosives",
      "IsSelected": false,
      "Category": 10
    },
    {
      "GearTypeDisplayName": "Musical",
      "IsSelected": false,
      "Category": 13
    },
    {
      "GearTypeDisplayName": "Social",
      "IsSelected": false,
      "Category": 14
    },
    {
      "GearTypeDisplayName": "Transport",
      "IsSelected": false,
      "Category": 22
    },
    {
      "GearTypeDisplayName": "Building",
      "IsSelected": false,
      "Category": 21
    }
  ],
  "ChatType": "Classic",
  "IsCopyingAllowed": false,
  "IsOldVersionAllowed": false,
  "ShouldForceRestart": false,
  "NumberOfPlayersMax": 50,
  "NumberOfPlayersPreferred": 35,
  "NumberOfCustomSocialSlots": 15,
  "SocialSlotType": 1,
  "SellGameAccess": false,
  "ShowAllowVIPServers": true,
  "AreVIPServersAllowed": false,
  "IsFreeVIPServer": false,
  "VIPServersPrice": 100,
  "VIPServerMinPrice": 10,
  "VIPServerDefaultPrice": 100,
  "VIPServersMarketplaceTaxRate": 0.3,
  "MarketplaceTaxRate": 0.3,
  "ActiveVIPServersCount": 0,
  "ActiveVIPServersSubscriptionsCount": 0,
  "VIPServerConfigurationLink": "http://develop.<?= $url ?>/v1/universes//configuration/vip-servers",
  "Price": 0,
  "VIPServersHelpLink": "http://developer.<?= $url ?>/en-us/articles/Creating-a-VIP-Server-on-Roblox",
  "OverridesDefaultAvatar": false,
  "UsePortraitMode": false,
  "BCSellRequirement": null,
  "BCSellReqirementMet": true,
  "SellingVisible": true,
  "Creator": {
    "Name": "<?php echo protecc($creator['username']); ?>",
    "CreatorTargetId": <?php echo $creator['id']; ?>,
    "CreatorType": 0
  },
  "PublishStep": 0,
  "MaxPublishStepReached": 0,
  "PlayableDevices": [
    {
      "DeviceType": 1,
      "Selected": true
    },
    {
      "DeviceType": 2,
      "Selected": true
    },
    {
      "DeviceType": 3,
      "Selected": true
    },
    {
      "DeviceType": 4,
      "Selected": false
    },
    {
      "DeviceType": 5,
      "Selected": false
    }
  ],
  "FinalPublishStep": 4,
  "VersionHistoryOnConfigurePageEnabled": true,
  "DefaultDevelopTabName": "Experience",
  "PortraitModeEnabled": false,
  "IsBC": false,
  "IsTBC": false,
  "IsOBC": false,
  "IsEngagementPayoutEnabled": true,
  "EngagementPayoutUrl": "http://www.<?= $url ?>/develop/premium-payout?ctx=gameDetail",
  "DeviceConfigurationEnabled": true,
  "ConsoleContentAgreementEnabled": true,
  "ShowDeveloperProducts": true,
  "CurrentUniverse": null,
  "AllowPlaceToBeCopiedInGame": false,
  "AllowPlaceToBeUpdatedInGame": false,
  "DeveloperProductUniverseId": 0,
  "TemplateID": null,
  "AccessTypesUsingPermissions": null,
  "AccessTypeSelectList": [
    {
      "Disabled": false,
      "Group": null,
      "Selected": false,
      "Text": "Everyone",
      "Value": null
    },
    {
      "Disabled": false,
      "Group": null,
      "Selected": false,
      "Text": "Friends",
      "Value": null
    }
  ],
  "MachineID": "954e-3c0c-cb90-5e1408e2a458",
  "BaseScripts": [
    "~/js/jquery/jquery-1.11.1.min.js",
    "~/js/jquery/jquery-migrate-1.2.1.min.js",
    "~/js/roblox.js",
    "~/js/jquery.tipsy.js",
    "~/js/GoogleAnalytics/GoogleAnalyticsEvents.js",
    "~/js/jquery.cookie.js",
    "~/js/common/forms.js",
    "~/js/jquery.simplemodal-1.3.5.js",
    "~/js/GenericConfirmation.js"
  ],
  "Title": "Roblox Studio",
  "Groups": null,
  "PrimaryGroupId": null,
  "MetaTagListViewModel": {
    "FacebookMetaTags": null,
    "TwitterMetaTags": null,
    "RobloxMetaTags": null,
    "StructuredDataTags": {
      "StructuredDataContext": "http://schema.org",
      "StructuredDataType": "Organization",
      "StructuredDataName": "Roblox",
      "RobloxUrl": "http://www.<?= $url ?>/",
      "RobloxEmail": "info@<?= $url ?>",
      "RobloxLogoUrl": "http://images.rbxcdn.com/fc3f3e3158fc20ebb5ccc972064ebfe6.png",
      "RobloxFacebookUrl": "http://www.facebook.com/roblox/",
      "RobloxTwitterUrl": "http://twitter.com/roblox",
      "RobloxLinkedInUrl": "http://www.linkedin.com/company/147977",
      "RobloxInstagramUrl": "http://www.instagram.com/roblox/",
      "RobloxYouTubeUrl": "http://www.youtube.com/user/roblox",
      "RobloxTwitchTvUrl": "http://www.twitch.tv/roblox",
      "Title": "Roblox",
      "Description": null,
      "Images": null,
      "ImageWidth": null,
      "ImageHeight": null
    },
    "Description": "Roblox is a global platform that brings people together through play.",
    "Keywords": "free games, online games, building games, virtual worlds, free mmo, gaming cloud, physics engine",
    "NoIndexNoFollow": false,
    "NoIndex": false,
    "NoFollow": false,
    "IncludeReferrerOriginTag": false,
    "GoogleSiteVerificationTag": null,
    "IncludeAppleAppIdTag": true
  },
  "JavascriptErrorTrackerViewModel": {
    "InitializeParameter": "{ 'suppressConsoleError': true}"
  }
}