<?php
// Alternative Adserver: XML response are inline; no redirects as before. 

// Set CORS headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
header("Access-Control-Allow-Credentials: true");
header("Content-Type: application/xml");

// Define three VAST XML responses
$vastResponses = [
    '<VAST xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" version="3.0" xsi:noNamespaceSchemaLocation="vast3_draft.xsd">
<Ad id="preroll">
<InLine>
<AdSystem version="2.0">AdServer</AdSystem>
<AdTitle>30.sec</AdTitle>
<Error>/AdServerpixel.gif?err=[ERRORCODE]</Error>
<Impression>/AdServerpixel.gif</Impression>
<Creatives>
<Creative sequence="1">
<Linear skipoffset="00:00:03">
<Duration>00:00:30</Duration>
<TrackingEvents>
<Tracking event="start">AdServerpixel.gif</Tracking>
<Tracking event="firstQuartile">AdServerpixel.gif</Tracking>
<Tracking event="midpoint">AdServerpixel.gif</Tracking>
<Tracking event="thirdQuartile">AdServerpixel.gif</Tracking>
<Tracking event="complete">AdServerpixel.gif</Tracking>
<Tracking event="pause">AdServerpixel.gif</Tracking>
<Tracking event="mute">AdServerpixel.gif</Tracking>
<Tracking event="fullscreen">AdServerpixel.gif</Tracking>
</TrackingEvents>
<VideoClicks>
<ClickThrough>https://www.google.com</ClickThrough>
<ClickTracking>AdServerpixel.gif</ClickTracking>
</VideoClicks>
<MediaFiles>
<MediaFile id="1" delivery="progressive" type="video/mp4" bitrate="400" width="640" height="360">30.sec.mp4</MediaFile>
</MediaFiles>
</Linear>
</Creative>
<Creative>
<CompanionAds>
<Companion id="1" width="300" height="250">
<StaticResource creativeType="image/jpg">rectangle.jpg</StaticResource>
<CompanionClickThrough>https://www.google.com</CompanionClickThrough>
</Companion>
<Companion id="2" width="728" height="90">
<StaticResource creativeType="image/jpg">leaderboard.jpg</StaticResource>
<CompanionClickThrough>https://www.google.com</CompanionClickThrough>
</Companion>
</CompanionAds>
</Creative>
</Creatives>
</InLine>
</Ad>
</VAST>',

    '<?xml version="1.0" encoding="UTF-8"?>
    <VAST version="3.0">
<Ad id="preroll">
<InLine>
<AdSystem version="2.0">AdServer</AdSystem>
<AdTitle>Static Tag</AdTitle>
<Error>AdServerpixel.gif?err=[ERRORCODE]</Error>
<Impression>AdServerpixel.gif</Impression>
<Creatives>
<Creative sequence="1">
<Linear skipoffset="00:00:03">
<Duration>00:00:30</Duration>
<TrackingEvents>
<Tracking event="start">AdServerpixel.gif</Tracking>
<Tracking event="firstQuartile">AdServerpixel.gif</Tracking>
<Tracking event="midpoint">AdServerpixel.gif</Tracking>
<Tracking event="thirdQuartile">AdServerpixel.gif</Tracking>
<Tracking event="complete">AdServerpixel.gif</Tracking>
<Tracking event="pause">AdServerpixel.gif</Tracking>
<Tracking event="mute">AdServerpixel.gif</Tracking>
<Tracking event="fullscreen">AdServerpixel.gif</Tracking>
</TrackingEvents>
<VideoClicks>
<ClickThrough>https://www.google.com</ClickThrough>
<ClickTracking>AdServerpixel.gif</ClickTracking>
</VideoClicks>
<MediaFiles>
<MediaFile id="1" delivery="progressive" type="video/mp4" bitrate="400" width="640" height="360">30.sec2.mp4</MediaFile>
</MediaFiles>
</Linear>
</Creative>
<Creative>
<CompanionAds>
<Companion id="1" width="300" height="250">
<StaticResource creativeType="image/jpg">rectangle.jpg</StaticResource>
<CompanionClickThrough>https://www.google.com</CompanionClickThrough>
</Companion>
<Companion id="2" width="728" height="90">
<StaticResource creativeType="image/jpg">leaderboard.jpg</StaticResource>
<CompanionClickThrough>https://www.google.com</CompanionClickThrough>
</Companion>
</CompanionAds>
</Creative>
</Creatives>
</InLine>
</Ad>
</VAST>,

    '<?xml version="1.0" encoding="UTF-8"?>
    <VAST xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" version="3.0" xsi:noNamespaceSchemaLocation="vast3_draft.xsd">
<Ad id="preroll">
<InLine>
<AdSystem version="2.0">AdServer</AdSystem>
<AdTitle>Static Tag</AdTitle>
<Error>AdServerpixel.gif?err=[ERRORCODE]</Error>
<Impression>AdServerpixel.gif</Impression>
<Creatives>
<Creative sequence="1">
<Linear skipoffset="00:00:03">
<Duration>00:00:30</Duration>
<TrackingEvents>
<Tracking event="start">AdServerpixel.gif</Tracking>
<Tracking event="firstQuartile">AdServerpixel.gif</Tracking>
<Tracking event="midpoint">AdServerpixel.gif</Tracking>
<Tracking event="thirdQuartile">AdServerpixel.gif</Tracking>
<Tracking event="complete">AdServerpixel.gif</Tracking>
<Tracking event="pause">AdServerpixel.gif</Tracking>
<Tracking event="mute">AdServerpixel.gif</Tracking>
<Tracking event="fullscreen">AdServerpixel.gif</Tracking>
</TrackingEvents>
<VideoClicks>
<ClickThrough>https://www.google.com</ClickThrough>
<ClickTracking>AdServerpixel.gif</ClickTracking>
</VideoClicks>
<MediaFiles>
<MediaFile id="1" delivery="progressive" type="video/mp4" bitrate="400" width="640" height="360">30.sec3.mp4</MediaFile>
</MediaFiles>
</Linear>
</Creative>
<Creative>
<CompanionAds>
<Companion id="1" width="300" height="250">
<StaticResource creativeType="image/jpg">rectangle.jpg</StaticResource>
<CompanionClickThrough>https://www.google.com</CompanionClickThrough>
</Companion>
<Companion id="2" width="728" height="90">
<StaticResource creativeType="image/jpg">leaderboard.jpg</StaticResource>
<CompanionClickThrough>https://www.google.com</CompanionClickThrough>
</Companion>
</CompanionAds>
</Creative>
</Creatives>
</InLine>
</Ad>
</VAST>'
];

// Select a random VAST response
$response = $vastResponses[array_rand($vastResponses)];

// Output the selected VAST response
echo $response;
?>
