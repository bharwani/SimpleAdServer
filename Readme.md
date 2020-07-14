# Basic AdServer

A very simple AdServer. 
Written in PHP. 

## Setup
System requirement: Web server with PHP
NOTE: CORS should also be enabled. 
I used Apache and added to the /etc/apache/apache.conf, in Directory directive:
        `SetEnvIf Origin "^http(s)?://.+$" AccessControlAllowOrigin=$0
        Header always set Access-Control-Allow-Origin %{AccessControlAllowOrigin}e env=AccessControlAllowOrigin`
Depending on the web server, the code block will change. See the documentation.  
And you probably need another CORS headers. 

## Operation
1. Call via https://server.com/adserver/adserver.php
2. Upon receiving the request, the php script will randomly select a creative. Adjust possible creatives in creatives[] in *adserver.php*.
3. The browser is redirected to a creative's VAST response (XML format) via a HTTP 

### Example
[https://ameet.info/AdServer/adserver.php](https://ameet.info/AdServer/adserver.php)

## TODO:
- [ ] Instead of XML files per creative, make the response dynamic so adserver.php handles all the work.
- [ ] Remove CORS headers from PHP file

