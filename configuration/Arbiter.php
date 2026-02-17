<?php
include "OwnAPILibrary.php";

    function ArbiterAssert($inst = null, $condition = true, $errormsg = "Assert failed", $ret = -1) {
        if(!$condition) {
            if($inst != null) {
                $inst->SetError($errormsg);
            }
			execInBackground("start /B C:\Soulfull\Arbiter\start.bat");
			sleep(2);
            //throw new Exception($errormsg);
        }
    }
	
	function execInBackground($cmd) {  
        global $disableexec;
        global $disablepopen;
        if (substr(php_uname(), 0, 7) == "Windows" && !$disablepopen){
            $funny = popen($cmd, "w"); 
            return $funny;
        } else {
            if(!$disableexec)
            {
                exec($cmd . " > /dev/null &");
            } 
        } 
    } 

    class Arbiter {
        public $Ip;
        public $Port;
        private $Error = "(null)";
        function __construct($port = 8954, $ip = "127.0.0.1") {
            $this->Ip = $ip;
            $this->Port = $port;
        }
        function SetError($what) {
            $this->Error = $what;
        }
        function GetError() {
            return $this->Error;
        }
        function GetServerPort($type) {
            //http only
            $response = @file_get_contents("http://".$this->Ip.":".$this->Port."/"."?type=".$type);
            $jason = @json_decode($response);
            ArbiterAssert($this, $response != null, "Arbiter isnt active");
            ArbiterAssert($this, $jason != null, "Failed to decode arbiter response");
            //ArbiterAssert($this, (int)$jason->port < 0, "Invalid port (is arbiter busy?)");
            return $jason;
        }
        function StartRCC($port = 0, $type) {
            $response = @file_get_contents("http://".$this->Ip.":".$this->Port."/new?rccport=".$port."&type=".$type);
            ArbiterAssert($this, $response != null, "Arbiter isnt active");
            ArbiterAssert($this, strcmp(strtolower($response), "true") == 0, "Failed to start RCC");
            return true;
        }
        function GetOwnAPI($port) {
            $isuck = new OwnAPI($port);
            return $isuck;
        }
        function GetServers($type) {
            $response = @file_get_contents("http://".$this->Ip.":".$this->Port."/servers"."&type=".$type);
            $jason = @json_decode($response);
            ArbiterAssert($this, $response != null, "Arbiter isnt active");
            ArbiterAssert($this, $jason != null, "Failed to decode arbiter response");
            return $jason->amount;
        }
        function GetPortFromJobId($job, $type) {
            $response = @file_get_contents("http://".$this->Ip.":".$this->Port."/get-port-from-jid?jid=".$job."&type=".$type);
            $jason = @json_decode($response);
            ArbiterAssert($this, $response != null, "Arbiter isnt active");
            ArbiterAssert($this, $jason != null, "Failed to decode arbiter response");
            return (int)$jason->port;
        }
    };
?>