# Basic AdServer

A very simple AdServer. 
Written in PHP. 

## Setup
System requirement: 
* Web server with PHP support
NOTE: CORS should also be enabled. 

I used Apache and added the following to /etc/apache/apache.conf, in the <I>Directory</i> directive:
`SetEnvIf Origin "^http(s)?://.+$" AccessControlAllowOrigin=$0
Header always set Access-Control-Allow-Origin %{AccessControlAllowOrigin}e env=AccessControlAllowOrigin`

## Operation
1. Call https://server.com/adserver/adserver.php
2. Upon receiving the request, the php script will randomly select a creative. Adjust possible creatives in creatives[] in *adserver.php*.
3. The browser is redirected to a creative's VAST response (XML format) via a HTTP 

### Example
[https://ameet.info/AdServer/adserver.php](https://ameet.info/AdServer/adserver.php)

## TODO:
- [x] Instead of XML files per creative, make the response dynamic so adserver.php handles all the work.
-- Alternative Adserver2.php returns VAST response inline; no redirects needed. 
- [x] Remove CORS headers from PHP file
-- Leaving CORS headers as is. If you want, comment them out

