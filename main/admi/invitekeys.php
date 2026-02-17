<?php
  include 'C:/wamp64/www/configuration/global.php';
  $site->LoginState(false, true);
  $site->invitekey();

  if($user['admin'] != 1)
  {
    http_response_code(403);
    return;
  }

  $query = "SELECT * FROM invitekeys";
  $keydb = $db->prepare($query);
  $keydb->execute();
  $keys = $keydb->fetchAll();
?>

<!DOCTYPE html>
<html xmlns:fb="http://www.facebook.com/2008/fbml">
<!-- MachineID: WEB144 -->
<head id="ctl00_Head1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,requiresActiveX=true" />
    <title>
        Admin - ROBLOX
    </title>

    <?php
        $site->robloxHtml("HTMLStarterPack");
        $site->robloxHtml("JS_2");
    ?>
</head>
<body class="">

    <script type="text/javascript">Roblox.XsrfToken.setToken('ENSPK+CxO1Vl');</script>
 
    <script type="text/javascript">
        if (top.location != self.location) {
            top.location = self.location.href;
        }
    </script>
  
<style type="text/css">
    
</style>
<div class="nav-container no-gutter-ads" enctype="multipart/form-data">
<div>
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
<input type="hidden" name="__LASTFOCUS" id="__LASTFOCUS" value="" />
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="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" />
</div>

<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['aspnetForm'];
if (!theForm) {
    theForm = document.aspnetForm;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>



<script src="/ScriptResource.axd?d=DhtN7gNG8UbGkWXBu2FDuQ9WfKLhKoI-VfpJsp7ruJ0n6dDSkYdDcA7YrOAe8gsP2C9wVgf6FNASgfjzY5U73GcfM6TIYP1L2Uqs8JYMoLP1ZWBpPj1aX2JgXUOf2xaH4k3Q6JB2XVEKtthZL68uUgS19prRDnhc1T5rMOAo8GejOVfXSdK8H4AMOv_3htwYRDFkREWayyzYl9OHC3V3pzTjCX_mHQnm1RUavOFhfd3VhINIqvhE2zteNCCsIjFszSTiBhpWYB_Be2QrCcl29jfMlJ-ZFC0Bmn5rBv3IYBydPiflkvOwH2_lDnVb916M724fDSbkYKICfai3y3hFHidL2RLZdFsLPQzKDtO7yVLYTThPnOdS9c03-0B09ryF9rc2OUX5E-7xNA4NeCYj5EFyJ7XAY3xh-rbDvs-YFwv_GWpq0" type="text/javascript"></script>
<script type="text/javascript">
//<![CDATA[
function WebForm_OnSubmit() {
if (typeof(ValidatorOnSubmit) == "function" && ValidatorOnSubmit() == false) return false;
return true;
}
//]]>
</script>

<div>

  <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="38D9001F" />
  <input type="hidden" name="__VIEWSTATEENCRYPTED" id="__VIEWSTATEENCRYPTED" value="" />
  <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="7NalTW4BTk4skUSx/dH0WRg5S/QEEy9/hIhFPSuw+MiyN0v9vIUHEMecFGjemFq+VikBi5zORaAw84TWAxCbtAkA8ctUj3ZWwK3YSxauoo9MOIazRzyWvj1GwfMVdSjSDKzKNHIDG8yUzEgdt2xIAtpDZ4zwofWImR4zAodmW2XVK5Tt5+G2ZcDqdpCVwDLpVJ9HIS6lj+BJX7Xdvtmstw8TywIFVGrRl+oTmj+sIiY+y9RAX++Nmnab0biL5HR/rG6+yKRPmbN8vUKqIWsMYDrMLAROqVyoaPXx3fP3/hlC7cseLQmWrLddzcobW7k01cjkiqc4TCad8HrZGk018LHjZ6q/vDZKl0JVuUxiL2GarmqdRDg8qDend4v+xjJ30I+0vUxnQYTQ2tmjO5my6qQdJpq7g8FP/8mX1KQSOekUch9sTtioKaWOatNh0s8MxA2eQp+T+t/M9cpcnK94dvvJ9CQDGbkp3BsKIA8fZlw2+sQ3oQ3E0cU+uluhhJhEYwqdXi/Pem8348kmRjpPfKEjQUlFF9Wz/aU5SieObUexvZ0mi05nRQIyJ+tElVDxzlFYgygidhtOpyZ/ir4JSeWaVPQxHycWQBItVR8uFY/pjZ0IS8er9cwSbeEh9pKF3hlBZ4yKG7s3vrJEoiSQwbHQ0CopnfCJZTBbjxVhjyto5VvCm0V6JgWQndDUyz+PV6oog6H8qMmddb3S8d/v73htrhZkyuHYt7tQfZaW9nwus5szn4ozydVoLAvgD3sH9z5bgIfOBjXKprWrkBmA9tV0YaD6CmfJjdqhi4Li0Vd9P9tA88JhGCz4DqHr27pEKgdSeJw/2Rry1rciYmYqwkj3WA80q4wXDESJR5eblmNi9HickRBy3LuxIBSXch7M6t4cgXfkiNJlnVmphPoLWuRTIDVKEIVZ6qJLct5YzICVYUNL" />
</div>
    <div id="fb-root">
    </div>
    <script type="text/javascript">
//<![CDATA[
Sys.WebForms.PageRequestManager._initialize('ctl00$ScriptManager', 'aspnetForm', ['tctl00$cphRoblox$rbxBadgesDisplay$BadgesUpdatePanel','','tctl00$cphRoblox$rbxUserGroupsPane$ctl00','','tctl00$cphRoblox$rbxFavoritesPane$FavoritesPane','','tctl00$cphRoblox$rbxUserAssetsPane$upUserAssetsPane',''], [], [], 90, 'ctl00');
//]]>
</script>

    
         
    
    
    

<div class="nav-icon" onselectstart="return false;" >
</div>

  
    <div id="wrap" class="wrap no-gutter-ads logged-in" data-gutter-ads-enabled="false">
        <!-- MENU -->
        <?php $site->robloxHtml(); ?>

    <div class="container-main">

      <?php if(isset($reason)){ echo '<h2>'.$reason.'</h2><br>'; }?>

      <h2>Invite Keys</h2>
      <?php
        foreach($keys as $key)
        {
        ?>
            <h3><?= $key['invitekey'] ?>, generated by user id <?= $key['id'] ?>.</h3>
            <form method="POST">
                <input type="submit"> 
            </form><br>
        <?php
        }
      ?>
           
        

<script type="text/javascript">
$(function(){
    function trackReturns() {
      function dayDiff(d1, d2) {
        return Math.floor((d1-d2)/86400000);
      }
        if (!localStorage) return;

      var cookieName = 'RBXReturn';
      var cookieOptions = {expires:9001};
        var cookie = localStorage.getItem(cookieName) || {};

      if (typeof cookie.ts === "undefined" || isNaN(new Date(cookie.ts))) {
          localStorage.setItem(cookieName, { ts: new Date().toDateString() });
        return;
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
  
      localStorage.setItem(cookieName, cookie);
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



</div>
    </div>
  

    
    <?php
        $site->robloxHtml("JS_1");
    ?>


    <div>

</body>                
</html>
