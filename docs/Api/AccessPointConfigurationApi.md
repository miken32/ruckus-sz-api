# PofP\SmartzoneClient\AccessPointConfigurationApi

All URIs are relative to https://10.0.0.10:8443/wsg/api/public/v11_1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addAps()**](AccessPointConfigurationApi.md#addAps) | **POST** /aps | Use this API command to create a new access point. |
| [**addApsMove()**](AccessPointConfigurationApi.md#addApsMove) | **POST** /aps/move | Use this API command to move multiple APs to another Zone/AP Group |
| [**addApsPictureByApMac()**](AccessPointConfigurationApi.md#addApsPictureByApMac) | **POST** /aps/{apMac}/picture | Use this API command to upload a new AP picture. |
| [**addApsSyncProvisionApsToCloudService()**](AccessPointConfigurationApi.md#addApsSyncProvisionApsToCloudService) | **POST** /aps/syncProvisionApsToCloudService | Use this API command to sync provision APs to Cloud Service |
| [**addSwapAps()**](AccessPointConfigurationApi.md#addSwapAps) | **POST** /swapAps | Use this API command to swap in specific AP |
| [**deleteApsAltitudeByApMac()**](AccessPointConfigurationApi.md#deleteApsAltitudeByApMac) | **DELETE** /aps/{apMac}/altitude | Use this API command to disable AP level override of altitude. The access point will take its group&#39;s configuration or zone&#39;s configuration. |
| [**deleteApsApMgmtVlanByApMac()**](AccessPointConfigurationApi.md#deleteApsApMgmtVlanByApMac) | **DELETE** /aps/{apMac}/apMgmtVlan | Disable AP Management Vlan Override of an AP. |
| [**deleteApsBonjourGatewayByApMac()**](AccessPointConfigurationApi.md#deleteApsBonjourGatewayByApMac) | **DELETE** /aps/{apMac}/bonjourGateway | Use this API command to disable AP level override of bonjour gateway. The access point will take its group&#39;s configuration or zone&#39;s configuration. |
| [**deleteApsByApMac()**](AccessPointConfigurationApi.md#deleteApsByApMac) | **DELETE** /aps/{apMac} | Use this API command to delete an access point. |
| [**deleteApsChannelEvaluationIntervalByApMac()**](AccessPointConfigurationApi.md#deleteApsChannelEvaluationIntervalByApMac) | **DELETE** /aps/{apMac}/channelEvaluationInterval | Disable AP lChannel Evaluation Interval. The access point will take its group&#39;s configuration or zone&#39;s configuration. |
| [**deleteApsClientAdmissionControl24ByApMac()**](AccessPointConfigurationApi.md#deleteApsClientAdmissionControl24ByApMac) | **DELETE** /aps/{apMac}/clientAdmissionControl24 | Use this API command to disable AP level override of client admission control 2.4GHz radio configuration. The access point will take its group&#39;s configuration or zone&#39;s configuration. |
| [**deleteApsClientAdmissionControl50ByApMac()**](AccessPointConfigurationApi.md#deleteApsClientAdmissionControl50ByApMac) | **DELETE** /aps/{apMac}/clientAdmissionControl50 | Use this API command to disable AP level override of client admission control 5GHz radio configuration. The access point will take its group&#39;s configuration or zone&#39;s configuration. |
| [**deleteApsDirectedMulticastFromNetworkEnabledByApMac()**](AccessPointConfigurationApi.md#deleteApsDirectedMulticastFromNetworkEnabledByApMac) | **DELETE** /aps/{apMac}/directedMulticastFromNetworkEnabled | Use this API command to disable Directed Multicast from network to wired/wireless client configuration override.The AP will apply its group&#39;s or zone&#39;s configuration. |
| [**deleteApsDirectedMulticastFromWiredClientEnabledByApMac()**](AccessPointConfigurationApi.md#deleteApsDirectedMulticastFromWiredClientEnabledByApMac) | **DELETE** /aps/{apMac}/directedMulticastFromWiredClientEnabled | Use this API command to disable Island SSID Broadcast enabled configuration override.The AP will apply its group&#39;s or zone&#39;s configuration. |
| [**deleteApsDirectedMulticastFromWirelessClientEnabledByApMac()**](AccessPointConfigurationApi.md#deleteApsDirectedMulticastFromWirelessClientEnabledByApMac) | **DELETE** /aps/{apMac}/directedMulticastFromWirelessClientEnabled | Use this API command to disable Island SSID Broadcast enabled configuration override.The AP will apply its group&#39;s or zone&#39;s configuration. |
| [**deleteApsGpsCoordinatesByApMac()**](AccessPointConfigurationApi.md#deleteApsGpsCoordinatesByApMac) | **DELETE** /aps/{apMac}/gpsCoordinates | Disable AP Management GPS Cooordinates of an AP. |
| [**deleteApsLocationAdditionalInfoByApMac()**](AccessPointConfigurationApi.md#deleteApsLocationAdditionalInfoByApMac) | **DELETE** /aps/{apMac}/locationAdditionalInfo | Use this API command to disable AP level override of location additionalInfo. The access point will take its group&#39;s configuration or zone&#39;s configuration. |
| [**deleteApsLocationByApMac()**](AccessPointConfigurationApi.md#deleteApsLocationByApMac) | **DELETE** /aps/{apMac}/location | Use this API command to disable AP level override of location. The access point will take its group&#39;s configuration or zone&#39;s configuration. |
| [**deleteApsLoginByApMac()**](AccessPointConfigurationApi.md#deleteApsLoginByApMac) | **DELETE** /aps/{apMac}/login | Use this API command to disable the AP-level logon override. The AP will apply its group&#39;s or zone&#39;s configuration. |
| [**deleteApsLteBandLockChannelsByApMac()**](AccessPointConfigurationApi.md#deleteApsLteBandLockChannelsByApMac) | **DELETE** /aps/{apMac}/lteBandLockChannels | Use this API command to disable LTE band lock channel override. The AP will apply its group&#39;s or zone&#39;s configuration. |
| [**deleteApsMeshOptionsByApMac()**](AccessPointConfigurationApi.md#deleteApsMeshOptionsByApMac) | **DELETE** /aps/{apMac}/meshOptions | Use this API command to disable mesh options. |
| [**deleteApsPictureByApMac()**](AccessPointConfigurationApi.md#deleteApsPictureByApMac) | **DELETE** /aps/{apMac}/picture | Use this API command to delete an AP picture. |
| [**deleteApsRadioConfigRadio24gAutoChannelSelectionByApMac()**](AccessPointConfigurationApi.md#deleteApsRadioConfigRadio24gAutoChannelSelectionByApMac) | **DELETE** /aps/{apMac}/radioConfig/radio24g/autoChannelSelection | Use this API command to disable the AP level override of auto channel selection on the 2.4GHz radio. The access point will take its group&#39;s or zone&#39;s configuration. |
| [**deleteApsRadioConfigRadio24gByApMac()**](AccessPointConfigurationApi.md#deleteApsRadioConfigRadio24gByApMac) | **DELETE** /aps/{apMac}/radioConfig/radio24g | Use this API command to disable the AP level override of 2.4GHz radio configuration. The access point will take its group&#39;s or zone&#39;s configuration. |
| [**deleteApsRadioConfigRadio24gChannelByApMac()**](AccessPointConfigurationApi.md#deleteApsRadioConfigRadio24gChannelByApMac) | **DELETE** /aps/{apMac}/radioConfig/radio24g/channel | Use this API command to disable the AP level override of the 2.4GHz radio channel. The access point will take its group&#39;s configuration or zone&#39;s configuration. |
| [**deleteApsRadioConfigRadio24gChannelRangeByApMac()**](AccessPointConfigurationApi.md#deleteApsRadioConfigRadio24gChannelRangeByApMac) | **DELETE** /aps/{apMac}/radioConfig/radio24g/channelRange | Use this API command to disable the AP level override of the 2.4GHz radio channelRange. The access point will take its group&#39;s configuration or zone&#39;s configuration. |
| [**deleteApsRadioConfigRadio24gChannelWidthByApMac()**](AccessPointConfigurationApi.md#deleteApsRadioConfigRadio24gChannelWidthByApMac) | **DELETE** /aps/{apMac}/radioConfig/radio24g/channelWidth | Use this API command to disable the AP level override of the 2.4GHz radio channelWidth. The access point will take its group&#39;s configuration or zone&#39;s configuration. |
| [**deleteApsRadioConfigRadio24gProtectionModeByApMac()**](AccessPointConfigurationApi.md#deleteApsRadioConfigRadio24gProtectionModeByApMac) | **DELETE** /aps/{apMac}/radioConfig/radio24g/protectionMode | Use this API command to disable 2.4GHz radio protection mode configuration override.The AP will apply its group&#39;s or zone&#39;s configuration. |
| [**deleteApsRadioConfigRadio24gTxPowerByApMac()**](AccessPointConfigurationApi.md#deleteApsRadioConfigRadio24gTxPowerByApMac) | **DELETE** /aps/{apMac}/radioConfig/radio24g/txPower | Use this API command to disable the AP level override of the 2.4GHz radio txPower. The access point will take its group&#39;s configuration or zone&#39;s configuration. |
| [**deleteApsRadioConfigRadio24gWlanGroupIdByApMac()**](AccessPointConfigurationApi.md#deleteApsRadioConfigRadio24gWlanGroupIdByApMac) | **DELETE** /aps/{apMac}/radioConfig/radio24g/wlanGroupId | Use this API command to disable the AP level override of WLAN group configuration on 2.4GHz radio. The access point will take its group&#39;s or zone&#39;s configuration. |
| [**deleteApsRadioConfigRadio5gAutoChannelSelectionByApMac()**](AccessPointConfigurationApi.md#deleteApsRadioConfigRadio5gAutoChannelSelectionByApMac) | **DELETE** /aps/{apMac}/radioConfig/radio5g/autoChannelSelection | Use this API command to disable the AP level override of auto channel selection on the 5GHz radio. The access point will take its group&#39;s or zone&#39;s configuration. |
| [**deleteApsRadioConfigRadio5gByApMac()**](AccessPointConfigurationApi.md#deleteApsRadioConfigRadio5gByApMac) | **DELETE** /aps/{apMac}/radioConfig/radio5g | Use this API command to disable the AP level override of 5GHz radio configuration. The access point will take its group&#39;s or zone&#39;s configuration. |
| [**deleteApsRadioConfigRadio5gChannelByApMac()**](AccessPointConfigurationApi.md#deleteApsRadioConfigRadio5gChannelByApMac) | **DELETE** /aps/{apMac}/radioConfig/radio5g/channel | Use this API command to disable the AP level override of 5GHz radio channel. The access point will take its group&#39;s or zone&#39;s configuration. |
| [**deleteApsRadioConfigRadio5gChannelRangeByApMac()**](AccessPointConfigurationApi.md#deleteApsRadioConfigRadio5gChannelRangeByApMac) | **DELETE** /aps/{apMac}/radioConfig/radio5g/channelRange | Use this API command to disable the AP level override of 5GHz radio channelRange. The access point will take its group&#39;s or zone&#39;s configuration. |
| [**deleteApsRadioConfigRadio5gChannelWidthByApMac()**](AccessPointConfigurationApi.md#deleteApsRadioConfigRadio5gChannelWidthByApMac) | **DELETE** /aps/{apMac}/radioConfig/radio5g/channelWidth | Use this API command to disable the AP level override of 5GHz radio channelWidth. The access point will take its group&#39;s or zone&#39;s configuration. |
| [**deleteApsRadioConfigRadio5gLowerAutoChannelSelectionByApMac()**](AccessPointConfigurationApi.md#deleteApsRadioConfigRadio5gLowerAutoChannelSelectionByApMac) | **DELETE** /aps/{apMac}/radioConfig/radio5gLower/autoChannelSelection | Use this API command to disable the AP level override of auto channel selection on the lower 5GHz radio. The access point will take its group&#39;s or zone&#39;s configuration. |
| [**deleteApsRadioConfigRadio5gLowerByApMac()**](AccessPointConfigurationApi.md#deleteApsRadioConfigRadio5gLowerByApMac) | **DELETE** /aps/{apMac}/radioConfig/radio5gLower | Use this API command to disable the AP level override of lower 5GHz radio configuration. The access point will take its group&#39;s or zone&#39;s configuration. |
| [**deleteApsRadioConfigRadio5gLowerChannelByApMac()**](AccessPointConfigurationApi.md#deleteApsRadioConfigRadio5gLowerChannelByApMac) | **DELETE** /aps/{apMac}/radioConfig/radio5gLower/channel | Use this API command to disable the AP level override of lower 5GHz radio channel. The access point will take its group&#39;s or zone&#39;s configuration. |
| [**deleteApsRadioConfigRadio5gLowerChannelRangeByApMac()**](AccessPointConfigurationApi.md#deleteApsRadioConfigRadio5gLowerChannelRangeByApMac) | **DELETE** /aps/{apMac}/radioConfig/radio5gLower/channelRange | Use this API command to disable the AP level override of lower 5GHz radio channelRange. The access point will take its group&#39;s or zone&#39;s configuration. |
| [**deleteApsRadioConfigRadio5gLowerChannelWidthByApMac()**](AccessPointConfigurationApi.md#deleteApsRadioConfigRadio5gLowerChannelWidthByApMac) | **DELETE** /aps/{apMac}/radioConfig/radio5gLower/channelWidth | Use this API command to disable the AP level override of lower 5GHz radio channelWidth. The access point will take its group&#39;s or zone&#39;s configuration. |
| [**deleteApsRadioConfigRadio5gLowerTxPowerByApMac()**](AccessPointConfigurationApi.md#deleteApsRadioConfigRadio5gLowerTxPowerByApMac) | **DELETE** /aps/{apMac}/radioConfig/radio5gLower/txPower | Use this API command to disable the AP level override of lower 5GHz radio txPower. The access point will take its group&#39;s or zone&#39;s configuration. |
| [**deleteApsRadioConfigRadio5gLowerWlanGroupIdByApMac()**](AccessPointConfigurationApi.md#deleteApsRadioConfigRadio5gLowerWlanGroupIdByApMac) | **DELETE** /aps/{apMac}/radioConfig/radio5gLower/wlanGroupId | Use this API command to disable the AP level override of WLAN group on the lower 5GHz radio. The access point will take its group&#39;s or zone&#39;s configuration. |
| [**deleteApsRadioConfigRadio5gTxPowerByApMac()**](AccessPointConfigurationApi.md#deleteApsRadioConfigRadio5gTxPowerByApMac) | **DELETE** /aps/{apMac}/radioConfig/radio5g/txPower | Use this API command to disable the AP level override of 5GHz radio txPower. The access point will take its group&#39;s or zone&#39;s configuration. |
| [**deleteApsRadioConfigRadio5gUpperAutoChannelSelectionByApMac()**](AccessPointConfigurationApi.md#deleteApsRadioConfigRadio5gUpperAutoChannelSelectionByApMac) | **DELETE** /aps/{apMac}/radioConfig/radio5gUpper/autoChannelSelection | Use this API command to disable the AP level override of auto channel selection on the upper 5GHz radio. The access point will take its group&#39;s or zone&#39;s configuration. |
| [**deleteApsRadioConfigRadio5gUpperByApMac()**](AccessPointConfigurationApi.md#deleteApsRadioConfigRadio5gUpperByApMac) | **DELETE** /aps/{apMac}/radioConfig/radio5gUpper | Use this API command to disable the AP level override of upper 5GHz radio configuration. The access point will take its group&#39;s or zone&#39;s configuration. |
| [**deleteApsRadioConfigRadio5gUpperChannelByApMac()**](AccessPointConfigurationApi.md#deleteApsRadioConfigRadio5gUpperChannelByApMac) | **DELETE** /aps/{apMac}/radioConfig/radio5gUpper/channel | Use this API command to disable the AP level override of upper 5GHz radio channel. The access point will take its group&#39;s or zone&#39;s configuration. |
| [**deleteApsRadioConfigRadio5gUpperChannelRangeByApMac()**](AccessPointConfigurationApi.md#deleteApsRadioConfigRadio5gUpperChannelRangeByApMac) | **DELETE** /aps/{apMac}/radioConfig/radio5gUpper/channelRange | Use this API command to disable the AP level override of upper 5GHz radio channelRange. The access point will take its group&#39;s or zone&#39;s configuration. |
| [**deleteApsRadioConfigRadio5gUpperChannelWidthByApMac()**](AccessPointConfigurationApi.md#deleteApsRadioConfigRadio5gUpperChannelWidthByApMac) | **DELETE** /aps/{apMac}/radioConfig/radio5gUpper/channelWidth | Use this API command to disable the AP level override of upper 5GHz radio channelWidth. The access point will take its group&#39;s or zone&#39;s configuration. |
| [**deleteApsRadioConfigRadio5gUpperTxPowerByApMac()**](AccessPointConfigurationApi.md#deleteApsRadioConfigRadio5gUpperTxPowerByApMac) | **DELETE** /aps/{apMac}/radioConfig/radio5gUpper/txPower | Use this API command to disable the AP level override of upper 5GHz radio txPower. The access point will take its group&#39;s or zone&#39;s configuration. |
| [**deleteApsRadioConfigRadio5gUpperWlanGroupIdByApMac()**](AccessPointConfigurationApi.md#deleteApsRadioConfigRadio5gUpperWlanGroupIdByApMac) | **DELETE** /aps/{apMac}/radioConfig/radio5gUpper/wlanGroupId | Use this API command to disable the AP level override of WLAN group on the upper 5GHz radio. The access point will take its group&#39;s or zone&#39;s configuration. |
| [**deleteApsRadioConfigRadio5gWlanGroupIdByApMac()**](AccessPointConfigurationApi.md#deleteApsRadioConfigRadio5gWlanGroupIdByApMac) | **DELETE** /aps/{apMac}/radioConfig/radio5g/wlanGroupId | Use this API command to disable the AP level override of WLAN group on the 5GHz radio. The access point will take its group&#39;s or zone&#39;s configuration. |
| [**deleteApsRadioConfigRadio6gAutoChannelSelectionByApMac()**](AccessPointConfigurationApi.md#deleteApsRadioConfigRadio6gAutoChannelSelectionByApMac) | **DELETE** /aps/{apMac}/radioConfig/radio6g/autoChannelSelection | Use this API command to disable the AP level override of auto channel selection on the 6GHz radio. The access point will take its group&#39;s or zone&#39;s configuration. |
| [**deleteApsRadioConfigRadio6gBssMinRateByApMac()**](AccessPointConfigurationApi.md#deleteApsRadioConfigRadio6gBssMinRateByApMac) | **DELETE** /aps/{apMac}/radioConfig/radio6g/bssMinRate | Use this API command to disable the AP level override of BSS minimum rate on the 6GHz radio. The access point will take its group&#39;s or zone&#39;s configuration. This will also disable the override of 6G multicast downlink rate limit. |
| [**deleteApsRadioConfigRadio6gByApMac()**](AccessPointConfigurationApi.md#deleteApsRadioConfigRadio6gByApMac) | **DELETE** /aps/{apMac}/radioConfig/radio6g | Use this API command to disable the AP level override of 6GHz radio configuration. The access point will take its group&#39;s or zone&#39;s configuration. |
| [**deleteApsRadioConfigRadio6gChannelByApMac()**](AccessPointConfigurationApi.md#deleteApsRadioConfigRadio6gChannelByApMac) | **DELETE** /aps/{apMac}/radioConfig/radio6g/channel | Use this API command to disable the AP level override of 6GHz radio channel. The access point will take its group&#39;s or zone&#39;s configuration. |
| [**deleteApsRadioConfigRadio6gChannelRangeByApMac()**](AccessPointConfigurationApi.md#deleteApsRadioConfigRadio6gChannelRangeByApMac) | **DELETE** /aps/{apMac}/radioConfig/radio6g/channelRange | Use this API command to disable the AP level override of 6GHz radio channelRange. The access point will take its group&#39;s or zone&#39;s configuration. |
| [**deleteApsRadioConfigRadio6gChannelWidthByApMac()**](AccessPointConfigurationApi.md#deleteApsRadioConfigRadio6gChannelWidthByApMac) | **DELETE** /aps/{apMac}/radioConfig/radio6g/channelWidth | Use this API command to disable the AP level override of 6GHz radio channelWidth. The access point will take its group&#39;s or zone&#39;s configuration. |
| [**deleteApsRadioConfigRadio6gMgmtTxRateByApMac()**](AccessPointConfigurationApi.md#deleteApsRadioConfigRadio6gMgmtTxRateByApMac) | **DELETE** /aps/{apMac}/radioConfig/radio6g/mgmtTxRate | Use this API command to disable the AP level override of management TX rate on the 6GHz radio. The access point will take its group&#39;s or zone&#39;s configuration. |
| [**deleteApsRadioConfigRadio6gMulticastDownlinkRateLimitByApMac()**](AccessPointConfigurationApi.md#deleteApsRadioConfigRadio6gMulticastDownlinkRateLimitByApMac) | **DELETE** /aps/{apMac}/radioConfig/radio6g/multicastDownlinkRateLimit | Use this API command to disable the AP level override of multicast downlink rate limit on the 6GHz radio. The access point will take its group&#39;s or zone&#39;s configuration. This will also disable the override of 6G BSS minimum rate. |
| [**deleteApsRadioConfigRadio6gMulticastUplinkRateLimitByApMac()**](AccessPointConfigurationApi.md#deleteApsRadioConfigRadio6gMulticastUplinkRateLimitByApMac) | **DELETE** /aps/{apMac}/radioConfig/radio6g/multicastUplinkRateLimit | Use this API command to disable the AP level override of multicast uplink rate limit on the 6GHz radio. The access point will take its group&#39;s or zone&#39;s configuration. |
| [**deleteApsRadioConfigRadio6gTxPowerByApMac()**](AccessPointConfigurationApi.md#deleteApsRadioConfigRadio6gTxPowerByApMac) | **DELETE** /aps/{apMac}/radioConfig/radio6g/txPower | Use this API command to disable the AP level override of 6GHz radio txPower. The access point will take its group&#39;s or zone&#39;s configuration. |
| [**deleteApsRadioConfigRadio6gWlanGroupIdByApMac()**](AccessPointConfigurationApi.md#deleteApsRadioConfigRadio6gWlanGroupIdByApMac) | **DELETE** /aps/{apMac}/radioConfig/radio6g/wlanGroupId | Use this API command to disable the AP level override of WLAN group on the 6GHz radio. The access point will take its group&#39;s or zone&#39;s configuration. |
| [**deleteApsRecoverySsidByApMac()**](AccessPointConfigurationApi.md#deleteApsRecoverySsidByApMac) | **DELETE** /aps/{apMac}/recoverySsid | Use this API command to disable Recovery SSID configuration override.The AP will apply its group&#39;s or zone&#39;s configuration. |
| [**deleteApsRksGreForwardBroadcastByApMac()**](AccessPointConfigurationApi.md#deleteApsRksGreForwardBroadcastByApMac) | **DELETE** /aps/{apMac}/rksGreForwardBroadcast | Use this API command to disable Ruckus GRE Broadcast packet forwarding override. The AP will apply its group&#39;s or zone&#39;s configuration. |
| [**deleteApsRogueApAggressivenessModeByApMac()**](AccessPointConfigurationApi.md#deleteApsRogueApAggressivenessModeByApMac) | **DELETE** /aps/{apMac}/rogueApAggressivenessMode | Use this API command to disable rogue AP aggressiveness mode override. The AP will apply its group&#39;s or zone&#39;s configuration. |
| [**deleteApsRogueApJammingThresholdByApMac()**](AccessPointConfigurationApi.md#deleteApsRogueApJammingThresholdByApMac) | **DELETE** /aps/{apMac}/rogueApJammingThreshold | Use this API command to disable rogue AP jamming threshold override. The AP will apply its group&#39;s or zone&#39;s configuration. |
| [**deleteApsRogueApReportThresholdByApMac()**](AccessPointConfigurationApi.md#deleteApsRogueApReportThresholdByApMac) | **DELETE** /aps/{apMac}/rogueApReportThreshold | Use this API command to disable rogue AP report threshold override. The AP will apply its group&#39;s or zone&#39;s configuration. |
| [**deleteApsSmartMonitorByApMac()**](AccessPointConfigurationApi.md#deleteApsSmartMonitorByApMac) | **DELETE** /aps/{apMac}/smartMonitor | Use this API command to disable AP level override of smart monitor. The access point will take its group&#39;s configuration or zone&#39;s configuration. |
| [**deleteApsSpecificByApMac()**](AccessPointConfigurationApi.md#deleteApsSpecificByApMac) | **DELETE** /aps/{apMac}/specific | Use this API command to disable specific configuration override from AP group or zone. |
| [**deleteApsSyslogByApMac()**](AccessPointConfigurationApi.md#deleteApsSyslogByApMac) | **DELETE** /aps/{apMac}/syslog | Use this API command to disable the AP level syslog override. The access point will take its group&#39;s or zone&#39;s configuration. |
| [**deleteApsVenueProfileByApMac()**](AccessPointConfigurationApi.md#deleteApsVenueProfileByApMac) | **DELETE** /aps/{apMac}/venueProfile | Use this API command to disable AP level override of venue profile. The access point will take its group&#39;s configuration or zone&#39;s configuration. |
| [**findAps()**](AccessPointConfigurationApi.md#findAps) | **GET** /aps | Use this API command to retrieve the list of APs that belong to a zone or a domain. |
| [**findApsByApMac()**](AccessPointConfigurationApi.md#findApsByApMac) | **GET** /aps/{apMac} | Use this API command to retrieve the configuration of an AP. |
| [**findApsPictureByApMac()**](AccessPointConfigurationApi.md#findApsPictureByApMac) | **GET** /aps/{apMac}/picture | Use this API command to retrieve the current AP picture. |
| [**findApsSupportLogByApMac()**](AccessPointConfigurationApi.md#findApsSupportLogByApMac) | **GET** /aps/{apMac}/supportLog | Use this API command to download AP support log. |
| [**findMeshZeroTouch()**](AccessPointConfigurationApi.md#findMeshZeroTouch) | **GET** /mesh/zeroTouch | Use this API command to retrieve a list of unapproved AP. |
| [**partialUpdateApsByApMac()**](AccessPointConfigurationApi.md#partialUpdateApsByApMac) | **PATCH** /aps/{apMac} | Use this API command to modify the configuration of an AP. |
| [**updateApsByApMac()**](AccessPointConfigurationApi.md#updateApsByApMac) | **PUT** /aps/{apMac} | Use this API command to modify the entire information of an AP. |
| [**updateApsRebootByApMac()**](AccessPointConfigurationApi.md#updateApsRebootByApMac) | **PUT** /aps/{apMac}/reboot | reboot an access point. |
| [**updateApsSpecificByApMac()**](AccessPointConfigurationApi.md#updateApsSpecificByApMac) | **PUT** /aps/{apMac}/specific | Use this API command to modify specific configuration. |
| [**updateMeshZeroTouch()**](AccessPointConfigurationApi.md#updateMeshZeroTouch) | **PUT** /mesh/zeroTouch | Use this API command to approve/reject unapproved AP. Recommend to deploy 20 island APs to join per batch at the same time. |


## `addAps()`

```php
addAps($service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to create a new access point.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->addAps($service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->addAps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |
| **UNKNOWN_PARAM_NAME** | [****](../Model/.md)|  | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addApsMove()`

```php
addApsMove($service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to move multiple APs to another Zone/AP Group

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->addApsMove($service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->addApsMove: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |
| **UNKNOWN_PARAM_NAME** | [****](../Model/.md)|  | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addApsPictureByApMac()`

```php
addApsPictureByApMac($ap_mac, $service_ticket, $upload_file)
```

Use this API command to upload a new AP picture.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$upload_file = "/path/to/file.txt"; // \SplFileObject | The file to upload

try {
    $apiInstance->addApsPictureByApMac($ap_mac, $service_ticket, $upload_file);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->addApsPictureByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |
| **upload_file** | **\SplFileObject****\SplFileObject**| The file to upload | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addApsSyncProvisionApsToCloudService()`

```php
addApsSyncProvisionApsToCloudService($service_ticket): object
```

Use this API command to sync provision APs to Cloud Service

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->addApsSyncProvisionApsToCloudService($service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->addApsSyncProvisionApsToCloudService: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addSwapAps()`

```php
addSwapAps($service_ticket, $UNKNOWN_PARAM_NAME)
```

Use this API command to swap in specific AP

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $apiInstance->addSwapAps($service_ticket, $UNKNOWN_PARAM_NAME);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->addSwapAps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |
| **UNKNOWN_PARAM_NAME** | [****](../Model/.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsAltitudeByApMac()`

```php
deleteApsAltitudeByApMac($ap_mac, $service_ticket): object
```

Use this API command to disable AP level override of altitude. The access point will take its group's configuration or zone's configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsAltitudeByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsAltitudeByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsApMgmtVlanByApMac()`

```php
deleteApsApMgmtVlanByApMac($ap_mac, $service_ticket): object
```

Disable AP Management Vlan Override of an AP.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsApMgmtVlanByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsApMgmtVlanByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsBonjourGatewayByApMac()`

```php
deleteApsBonjourGatewayByApMac($ap_mac, $service_ticket): object
```

Use this API command to disable AP level override of bonjour gateway. The access point will take its group's configuration or zone's configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsBonjourGatewayByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsBonjourGatewayByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsByApMac()`

```php
deleteApsByApMac($ap_mac, $service_ticket, $validate_mesh): object
```

Use this API command to delete an access point.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$validate_mesh = 'validate_mesh_example'; // string | Validate if AP is not MAP/eMAP. Default: true

try {
    $result = $apiInstance->deleteApsByApMac($ap_mac, $service_ticket, $validate_mesh);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |
| **validate_mesh** | **string**| Validate if AP is not MAP/eMAP. Default: true | [optional] |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsChannelEvaluationIntervalByApMac()`

```php
deleteApsChannelEvaluationIntervalByApMac($ap_mac, $service_ticket): object
```

Disable AP lChannel Evaluation Interval. The access point will take its group's configuration or zone's configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsChannelEvaluationIntervalByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsChannelEvaluationIntervalByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsClientAdmissionControl24ByApMac()`

```php
deleteApsClientAdmissionControl24ByApMac($ap_mac, $service_ticket): object
```

Use this API command to disable AP level override of client admission control 2.4GHz radio configuration. The access point will take its group's configuration or zone's configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsClientAdmissionControl24ByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsClientAdmissionControl24ByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsClientAdmissionControl50ByApMac()`

```php
deleteApsClientAdmissionControl50ByApMac($ap_mac, $service_ticket): object
```

Use this API command to disable AP level override of client admission control 5GHz radio configuration. The access point will take its group's configuration or zone's configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsClientAdmissionControl50ByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsClientAdmissionControl50ByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsDirectedMulticastFromNetworkEnabledByApMac()`

```php
deleteApsDirectedMulticastFromNetworkEnabledByApMac($ap_mac, $service_ticket): object
```

Use this API command to disable Directed Multicast from network to wired/wireless client configuration override.The AP will apply its group's or zone's configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsDirectedMulticastFromNetworkEnabledByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsDirectedMulticastFromNetworkEnabledByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsDirectedMulticastFromWiredClientEnabledByApMac()`

```php
deleteApsDirectedMulticastFromWiredClientEnabledByApMac($ap_mac, $service_ticket): object
```

Use this API command to disable Island SSID Broadcast enabled configuration override.The AP will apply its group's or zone's configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsDirectedMulticastFromWiredClientEnabledByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsDirectedMulticastFromWiredClientEnabledByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsDirectedMulticastFromWirelessClientEnabledByApMac()`

```php
deleteApsDirectedMulticastFromWirelessClientEnabledByApMac($ap_mac, $service_ticket): object
```

Use this API command to disable Island SSID Broadcast enabled configuration override.The AP will apply its group's or zone's configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsDirectedMulticastFromWirelessClientEnabledByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsDirectedMulticastFromWirelessClientEnabledByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsGpsCoordinatesByApMac()`

```php
deleteApsGpsCoordinatesByApMac($ap_mac, $service_ticket): object
```

Disable AP Management GPS Cooordinates of an AP.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsGpsCoordinatesByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsGpsCoordinatesByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsLocationAdditionalInfoByApMac()`

```php
deleteApsLocationAdditionalInfoByApMac($ap_mac, $service_ticket): object
```

Use this API command to disable AP level override of location additionalInfo. The access point will take its group's configuration or zone's configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsLocationAdditionalInfoByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsLocationAdditionalInfoByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsLocationByApMac()`

```php
deleteApsLocationByApMac($ap_mac, $service_ticket): object
```

Use this API command to disable AP level override of location. The access point will take its group's configuration or zone's configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsLocationByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsLocationByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsLoginByApMac()`

```php
deleteApsLoginByApMac($ap_mac, $service_ticket): object
```

Use this API command to disable the AP-level logon override. The AP will apply its group's or zone's configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsLoginByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsLoginByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsLteBandLockChannelsByApMac()`

```php
deleteApsLteBandLockChannelsByApMac($ap_mac, $service_ticket): object
```

Use this API command to disable LTE band lock channel override. The AP will apply its group's or zone's configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsLteBandLockChannelsByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsLteBandLockChannelsByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsMeshOptionsByApMac()`

```php
deleteApsMeshOptionsByApMac($ap_mac, $service_ticket): object
```

Use this API command to disable mesh options.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsMeshOptionsByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsMeshOptionsByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsPictureByApMac()`

```php
deleteApsPictureByApMac($ap_mac, $service_ticket)
```

Use this API command to delete an AP picture.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $apiInstance->deleteApsPictureByApMac($ap_mac, $service_ticket);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsPictureByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsRadioConfigRadio24gAutoChannelSelectionByApMac()`

```php
deleteApsRadioConfigRadio24gAutoChannelSelectionByApMac($ap_mac, $service_ticket): object
```

Use this API command to disable the AP level override of auto channel selection on the 2.4GHz radio. The access point will take its group's or zone's configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsRadioConfigRadio24gAutoChannelSelectionByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsRadioConfigRadio24gAutoChannelSelectionByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsRadioConfigRadio24gByApMac()`

```php
deleteApsRadioConfigRadio24gByApMac($ap_mac, $service_ticket): object
```

Use this API command to disable the AP level override of 2.4GHz radio configuration. The access point will take its group's or zone's configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsRadioConfigRadio24gByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsRadioConfigRadio24gByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsRadioConfigRadio24gChannelByApMac()`

```php
deleteApsRadioConfigRadio24gChannelByApMac($ap_mac, $service_ticket): object
```

Use this API command to disable the AP level override of the 2.4GHz radio channel. The access point will take its group's configuration or zone's configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsRadioConfigRadio24gChannelByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsRadioConfigRadio24gChannelByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsRadioConfigRadio24gChannelRangeByApMac()`

```php
deleteApsRadioConfigRadio24gChannelRangeByApMac($ap_mac, $service_ticket): object
```

Use this API command to disable the AP level override of the 2.4GHz radio channelRange. The access point will take its group's configuration or zone's configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsRadioConfigRadio24gChannelRangeByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsRadioConfigRadio24gChannelRangeByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsRadioConfigRadio24gChannelWidthByApMac()`

```php
deleteApsRadioConfigRadio24gChannelWidthByApMac($ap_mac, $service_ticket): object
```

Use this API command to disable the AP level override of the 2.4GHz radio channelWidth. The access point will take its group's configuration or zone's configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsRadioConfigRadio24gChannelWidthByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsRadioConfigRadio24gChannelWidthByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsRadioConfigRadio24gProtectionModeByApMac()`

```php
deleteApsRadioConfigRadio24gProtectionModeByApMac($ap_mac, $service_ticket): object
```

Use this API command to disable 2.4GHz radio protection mode configuration override.The AP will apply its group's or zone's configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsRadioConfigRadio24gProtectionModeByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsRadioConfigRadio24gProtectionModeByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsRadioConfigRadio24gTxPowerByApMac()`

```php
deleteApsRadioConfigRadio24gTxPowerByApMac($ap_mac, $service_ticket): object
```

Use this API command to disable the AP level override of the 2.4GHz radio txPower. The access point will take its group's configuration or zone's configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsRadioConfigRadio24gTxPowerByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsRadioConfigRadio24gTxPowerByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsRadioConfigRadio24gWlanGroupIdByApMac()`

```php
deleteApsRadioConfigRadio24gWlanGroupIdByApMac($ap_mac, $service_ticket): object
```

Use this API command to disable the AP level override of WLAN group configuration on 2.4GHz radio. The access point will take its group's or zone's configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsRadioConfigRadio24gWlanGroupIdByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsRadioConfigRadio24gWlanGroupIdByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsRadioConfigRadio5gAutoChannelSelectionByApMac()`

```php
deleteApsRadioConfigRadio5gAutoChannelSelectionByApMac($ap_mac, $service_ticket): object
```

Use this API command to disable the AP level override of auto channel selection on the 5GHz radio. The access point will take its group's or zone's configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsRadioConfigRadio5gAutoChannelSelectionByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsRadioConfigRadio5gAutoChannelSelectionByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsRadioConfigRadio5gByApMac()`

```php
deleteApsRadioConfigRadio5gByApMac($ap_mac, $service_ticket): object
```

Use this API command to disable the AP level override of 5GHz radio configuration. The access point will take its group's or zone's configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsRadioConfigRadio5gByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsRadioConfigRadio5gByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsRadioConfigRadio5gChannelByApMac()`

```php
deleteApsRadioConfigRadio5gChannelByApMac($ap_mac, $service_ticket): object
```

Use this API command to disable the AP level override of 5GHz radio channel. The access point will take its group's or zone's configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsRadioConfigRadio5gChannelByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsRadioConfigRadio5gChannelByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsRadioConfigRadio5gChannelRangeByApMac()`

```php
deleteApsRadioConfigRadio5gChannelRangeByApMac($ap_mac, $service_ticket): object
```

Use this API command to disable the AP level override of 5GHz radio channelRange. The access point will take its group's or zone's configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsRadioConfigRadio5gChannelRangeByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsRadioConfigRadio5gChannelRangeByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsRadioConfigRadio5gChannelWidthByApMac()`

```php
deleteApsRadioConfigRadio5gChannelWidthByApMac($ap_mac, $service_ticket): object
```

Use this API command to disable the AP level override of 5GHz radio channelWidth. The access point will take its group's or zone's configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsRadioConfigRadio5gChannelWidthByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsRadioConfigRadio5gChannelWidthByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsRadioConfigRadio5gLowerAutoChannelSelectionByApMac()`

```php
deleteApsRadioConfigRadio5gLowerAutoChannelSelectionByApMac($ap_mac, $service_ticket): object
```

Use this API command to disable the AP level override of auto channel selection on the lower 5GHz radio. The access point will take its group's or zone's configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsRadioConfigRadio5gLowerAutoChannelSelectionByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsRadioConfigRadio5gLowerAutoChannelSelectionByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsRadioConfigRadio5gLowerByApMac()`

```php
deleteApsRadioConfigRadio5gLowerByApMac($ap_mac, $service_ticket): object
```

Use this API command to disable the AP level override of lower 5GHz radio configuration. The access point will take its group's or zone's configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsRadioConfigRadio5gLowerByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsRadioConfigRadio5gLowerByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsRadioConfigRadio5gLowerChannelByApMac()`

```php
deleteApsRadioConfigRadio5gLowerChannelByApMac($ap_mac, $service_ticket): object
```

Use this API command to disable the AP level override of lower 5GHz radio channel. The access point will take its group's or zone's configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsRadioConfigRadio5gLowerChannelByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsRadioConfigRadio5gLowerChannelByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsRadioConfigRadio5gLowerChannelRangeByApMac()`

```php
deleteApsRadioConfigRadio5gLowerChannelRangeByApMac($ap_mac, $service_ticket): object
```

Use this API command to disable the AP level override of lower 5GHz radio channelRange. The access point will take its group's or zone's configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsRadioConfigRadio5gLowerChannelRangeByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsRadioConfigRadio5gLowerChannelRangeByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsRadioConfigRadio5gLowerChannelWidthByApMac()`

```php
deleteApsRadioConfigRadio5gLowerChannelWidthByApMac($ap_mac, $service_ticket): object
```

Use this API command to disable the AP level override of lower 5GHz radio channelWidth. The access point will take its group's or zone's configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsRadioConfigRadio5gLowerChannelWidthByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsRadioConfigRadio5gLowerChannelWidthByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsRadioConfigRadio5gLowerTxPowerByApMac()`

```php
deleteApsRadioConfigRadio5gLowerTxPowerByApMac($ap_mac, $service_ticket): object
```

Use this API command to disable the AP level override of lower 5GHz radio txPower. The access point will take its group's or zone's configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsRadioConfigRadio5gLowerTxPowerByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsRadioConfigRadio5gLowerTxPowerByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsRadioConfigRadio5gLowerWlanGroupIdByApMac()`

```php
deleteApsRadioConfigRadio5gLowerWlanGroupIdByApMac($ap_mac, $service_ticket): object
```

Use this API command to disable the AP level override of WLAN group on the lower 5GHz radio. The access point will take its group's or zone's configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsRadioConfigRadio5gLowerWlanGroupIdByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsRadioConfigRadio5gLowerWlanGroupIdByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsRadioConfigRadio5gTxPowerByApMac()`

```php
deleteApsRadioConfigRadio5gTxPowerByApMac($ap_mac, $service_ticket): object
```

Use this API command to disable the AP level override of 5GHz radio txPower. The access point will take its group's or zone's configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsRadioConfigRadio5gTxPowerByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsRadioConfigRadio5gTxPowerByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsRadioConfigRadio5gUpperAutoChannelSelectionByApMac()`

```php
deleteApsRadioConfigRadio5gUpperAutoChannelSelectionByApMac($ap_mac, $service_ticket): object
```

Use this API command to disable the AP level override of auto channel selection on the upper 5GHz radio. The access point will take its group's or zone's configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsRadioConfigRadio5gUpperAutoChannelSelectionByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsRadioConfigRadio5gUpperAutoChannelSelectionByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsRadioConfigRadio5gUpperByApMac()`

```php
deleteApsRadioConfigRadio5gUpperByApMac($ap_mac, $service_ticket): object
```

Use this API command to disable the AP level override of upper 5GHz radio configuration. The access point will take its group's or zone's configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsRadioConfigRadio5gUpperByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsRadioConfigRadio5gUpperByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsRadioConfigRadio5gUpperChannelByApMac()`

```php
deleteApsRadioConfigRadio5gUpperChannelByApMac($ap_mac, $service_ticket): object
```

Use this API command to disable the AP level override of upper 5GHz radio channel. The access point will take its group's or zone's configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsRadioConfigRadio5gUpperChannelByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsRadioConfigRadio5gUpperChannelByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsRadioConfigRadio5gUpperChannelRangeByApMac()`

```php
deleteApsRadioConfigRadio5gUpperChannelRangeByApMac($ap_mac, $service_ticket): object
```

Use this API command to disable the AP level override of upper 5GHz radio channelRange. The access point will take its group's or zone's configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsRadioConfigRadio5gUpperChannelRangeByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsRadioConfigRadio5gUpperChannelRangeByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsRadioConfigRadio5gUpperChannelWidthByApMac()`

```php
deleteApsRadioConfigRadio5gUpperChannelWidthByApMac($ap_mac, $service_ticket): object
```

Use this API command to disable the AP level override of upper 5GHz radio channelWidth. The access point will take its group's or zone's configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsRadioConfigRadio5gUpperChannelWidthByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsRadioConfigRadio5gUpperChannelWidthByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsRadioConfigRadio5gUpperTxPowerByApMac()`

```php
deleteApsRadioConfigRadio5gUpperTxPowerByApMac($ap_mac, $service_ticket): object
```

Use this API command to disable the AP level override of upper 5GHz radio txPower. The access point will take its group's or zone's configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsRadioConfigRadio5gUpperTxPowerByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsRadioConfigRadio5gUpperTxPowerByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsRadioConfigRadio5gUpperWlanGroupIdByApMac()`

```php
deleteApsRadioConfigRadio5gUpperWlanGroupIdByApMac($ap_mac, $service_ticket): object
```

Use this API command to disable the AP level override of WLAN group on the upper 5GHz radio. The access point will take its group's or zone's configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsRadioConfigRadio5gUpperWlanGroupIdByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsRadioConfigRadio5gUpperWlanGroupIdByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsRadioConfigRadio5gWlanGroupIdByApMac()`

```php
deleteApsRadioConfigRadio5gWlanGroupIdByApMac($ap_mac, $service_ticket): object
```

Use this API command to disable the AP level override of WLAN group on the 5GHz radio. The access point will take its group's or zone's configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsRadioConfigRadio5gWlanGroupIdByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsRadioConfigRadio5gWlanGroupIdByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsRadioConfigRadio6gAutoChannelSelectionByApMac()`

```php
deleteApsRadioConfigRadio6gAutoChannelSelectionByApMac($ap_mac, $service_ticket): object
```

Use this API command to disable the AP level override of auto channel selection on the 6GHz radio. The access point will take its group's or zone's configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsRadioConfigRadio6gAutoChannelSelectionByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsRadioConfigRadio6gAutoChannelSelectionByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsRadioConfigRadio6gBssMinRateByApMac()`

```php
deleteApsRadioConfigRadio6gBssMinRateByApMac($ap_mac, $service_ticket): object
```

Use this API command to disable the AP level override of BSS minimum rate on the 6GHz radio. The access point will take its group's or zone's configuration. This will also disable the override of 6G multicast downlink rate limit.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsRadioConfigRadio6gBssMinRateByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsRadioConfigRadio6gBssMinRateByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsRadioConfigRadio6gByApMac()`

```php
deleteApsRadioConfigRadio6gByApMac($ap_mac, $service_ticket): object
```

Use this API command to disable the AP level override of 6GHz radio configuration. The access point will take its group's or zone's configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsRadioConfigRadio6gByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsRadioConfigRadio6gByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsRadioConfigRadio6gChannelByApMac()`

```php
deleteApsRadioConfigRadio6gChannelByApMac($ap_mac, $service_ticket): object
```

Use this API command to disable the AP level override of 6GHz radio channel. The access point will take its group's or zone's configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsRadioConfigRadio6gChannelByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsRadioConfigRadio6gChannelByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsRadioConfigRadio6gChannelRangeByApMac()`

```php
deleteApsRadioConfigRadio6gChannelRangeByApMac($ap_mac, $service_ticket): object
```

Use this API command to disable the AP level override of 6GHz radio channelRange. The access point will take its group's or zone's configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsRadioConfigRadio6gChannelRangeByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsRadioConfigRadio6gChannelRangeByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsRadioConfigRadio6gChannelWidthByApMac()`

```php
deleteApsRadioConfigRadio6gChannelWidthByApMac($ap_mac, $service_ticket): object
```

Use this API command to disable the AP level override of 6GHz radio channelWidth. The access point will take its group's or zone's configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsRadioConfigRadio6gChannelWidthByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsRadioConfigRadio6gChannelWidthByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsRadioConfigRadio6gMgmtTxRateByApMac()`

```php
deleteApsRadioConfigRadio6gMgmtTxRateByApMac($ap_mac, $service_ticket): object
```

Use this API command to disable the AP level override of management TX rate on the 6GHz radio. The access point will take its group's or zone's configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsRadioConfigRadio6gMgmtTxRateByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsRadioConfigRadio6gMgmtTxRateByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsRadioConfigRadio6gMulticastDownlinkRateLimitByApMac()`

```php
deleteApsRadioConfigRadio6gMulticastDownlinkRateLimitByApMac($ap_mac, $service_ticket): object
```

Use this API command to disable the AP level override of multicast downlink rate limit on the 6GHz radio. The access point will take its group's or zone's configuration. This will also disable the override of 6G BSS minimum rate.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsRadioConfigRadio6gMulticastDownlinkRateLimitByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsRadioConfigRadio6gMulticastDownlinkRateLimitByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsRadioConfigRadio6gMulticastUplinkRateLimitByApMac()`

```php
deleteApsRadioConfigRadio6gMulticastUplinkRateLimitByApMac($ap_mac, $service_ticket): object
```

Use this API command to disable the AP level override of multicast uplink rate limit on the 6GHz radio. The access point will take its group's or zone's configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsRadioConfigRadio6gMulticastUplinkRateLimitByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsRadioConfigRadio6gMulticastUplinkRateLimitByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsRadioConfigRadio6gTxPowerByApMac()`

```php
deleteApsRadioConfigRadio6gTxPowerByApMac($ap_mac, $service_ticket): object
```

Use this API command to disable the AP level override of 6GHz radio txPower. The access point will take its group's or zone's configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsRadioConfigRadio6gTxPowerByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsRadioConfigRadio6gTxPowerByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsRadioConfigRadio6gWlanGroupIdByApMac()`

```php
deleteApsRadioConfigRadio6gWlanGroupIdByApMac($ap_mac, $service_ticket): object
```

Use this API command to disable the AP level override of WLAN group on the 6GHz radio. The access point will take its group's or zone's configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsRadioConfigRadio6gWlanGroupIdByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsRadioConfigRadio6gWlanGroupIdByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsRecoverySsidByApMac()`

```php
deleteApsRecoverySsidByApMac($ap_mac, $service_ticket): object
```

Use this API command to disable Recovery SSID configuration override.The AP will apply its group's or zone's configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsRecoverySsidByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsRecoverySsidByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsRksGreForwardBroadcastByApMac()`

```php
deleteApsRksGreForwardBroadcastByApMac($ap_mac, $service_ticket): object
```

Use this API command to disable Ruckus GRE Broadcast packet forwarding override. The AP will apply its group's or zone's configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsRksGreForwardBroadcastByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsRksGreForwardBroadcastByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsRogueApAggressivenessModeByApMac()`

```php
deleteApsRogueApAggressivenessModeByApMac($ap_mac, $service_ticket): object
```

Use this API command to disable rogue AP aggressiveness mode override. The AP will apply its group's or zone's configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsRogueApAggressivenessModeByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsRogueApAggressivenessModeByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsRogueApJammingThresholdByApMac()`

```php
deleteApsRogueApJammingThresholdByApMac($ap_mac, $service_ticket): object
```

Use this API command to disable rogue AP jamming threshold override. The AP will apply its group's or zone's configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsRogueApJammingThresholdByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsRogueApJammingThresholdByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsRogueApReportThresholdByApMac()`

```php
deleteApsRogueApReportThresholdByApMac($ap_mac, $service_ticket): object
```

Use this API command to disable rogue AP report threshold override. The AP will apply its group's or zone's configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsRogueApReportThresholdByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsRogueApReportThresholdByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsSmartMonitorByApMac()`

```php
deleteApsSmartMonitorByApMac($ap_mac, $service_ticket): object
```

Use this API command to disable AP level override of smart monitor. The access point will take its group's configuration or zone's configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsSmartMonitorByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsSmartMonitorByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsSpecificByApMac()`

```php
deleteApsSpecificByApMac($ap_mac, $service_ticket): object
```

Use this API command to disable specific configuration override from AP group or zone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsSpecificByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsSpecificByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsSyslogByApMac()`

```php
deleteApsSyslogByApMac($ap_mac, $service_ticket): object
```

Use this API command to disable the AP level syslog override. The access point will take its group's or zone's configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsSyslogByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsSyslogByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteApsVenueProfileByApMac()`

```php
deleteApsVenueProfileByApMac($ap_mac, $service_ticket): object
```

Use this API command to disable AP level override of venue profile. The access point will take its group's configuration or zone's configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteApsVenueProfileByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->deleteApsVenueProfileByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findAps()`

```php
findAps($service_ticket, $index, $list_size, $zone_id, $domain_id): object
```

Use this API command to retrieve the list of APs that belong to a zone or a domain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$index = 'index_example'; // string | The index of the first entry to be retrieved. Default: 0
$list_size = 'list_size_example'; // string | The maximum number of entries to be retrieved. Default: 100, Maximum: 1000
$zone_id = 'zone_id_example'; // string | filter AP list by zone
$domain_id = 'domain_id_example'; // string | filter AP list by domain. Default: current logon domain

try {
    $result = $apiInstance->findAps($service_ticket, $index, $list_size, $zone_id, $domain_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->findAps: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |
| **index** | **string**| The index of the first entry to be retrieved. Default: 0 | [optional] |
| **list_size** | **string**| The maximum number of entries to be retrieved. Default: 100, Maximum: 1000 | [optional] |
| **zone_id** | **string**| filter AP list by zone | [optional] |
| **domain_id** | **string**| filter AP list by domain. Default: current logon domain | [optional] |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findApsByApMac()`

```php
findApsByApMac($ap_mac, $service_ticket): object
```

Use this API command to retrieve the configuration of an AP.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findApsByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->findApsByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findApsPictureByApMac()`

```php
findApsPictureByApMac($ap_mac, $service_ticket): \SplFileObject
```

Use this API command to retrieve the current AP picture.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findApsPictureByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->findApsPictureByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findApsSupportLogByApMac()`

```php
findApsSupportLogByApMac($ap_mac, $service_ticket): \SplFileObject
```

Use this API command to download AP support log.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findApsSupportLogByApMac($ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->findApsSupportLogByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**\SplFileObject**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findMeshZeroTouch()`

```php
findMeshZeroTouch($service_ticket): object
```

Use this API command to retrieve a list of unapproved AP.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findMeshZeroTouch($service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->findMeshZeroTouch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `partialUpdateApsByApMac()`

```php
partialUpdateApsByApMac($ap_mac, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to modify the configuration of an AP.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->partialUpdateApsByApMac($ap_mac, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->partialUpdateApsByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |
| **UNKNOWN_PARAM_NAME** | [****](../Model/.md)|  | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateApsByApMac()`

```php
updateApsByApMac($ap_mac, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to modify the entire information of an AP.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->updateApsByApMac($ap_mac, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->updateApsByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |
| **UNKNOWN_PARAM_NAME** | [****](../Model/.md)|  | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateApsRebootByApMac()`

```php
updateApsRebootByApMac($ap_mac, $service_ticket)
```

reboot an access point.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $apiInstance->updateApsRebootByApMac($ap_mac, $service_ticket);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->updateApsRebootByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateApsSpecificByApMac()`

```php
updateApsSpecificByApMac($ap_mac, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to modify specific configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->updateApsSpecificByApMac($ap_mac, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->updateApsSpecificByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **ap_mac** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |
| **UNKNOWN_PARAM_NAME** | [****](../Model/.md)|  | |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `*/*`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMeshZeroTouch()`

```php
updateMeshZeroTouch($service_ticket, $UNKNOWN_PARAM_NAME)
```

Use this API command to approve/reject unapproved AP. Recommend to deploy 20 island APs to join per batch at the same time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\AccessPointConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $apiInstance->updateMeshZeroTouch($service_ticket, $UNKNOWN_PARAM_NAME);
} catch (Exception $e) {
    echo 'Exception when calling AccessPointConfigurationApi->updateMeshZeroTouch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |
| **UNKNOWN_PARAM_NAME** | [****](../Model/.md)|  | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
