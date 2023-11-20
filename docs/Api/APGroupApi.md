# PofP\SmartzoneClient\APGroupApi

All URIs are relative to https://10.0.0.10:8443/wsg/api/public/v11_1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addRkszonesApgroupsByZoneId()**](APGroupApi.md#addRkszonesApgroupsByZoneId) | **POST** /rkszones/{zoneId}/apgroups | Use this API command to create new AP group within a zone. |
| [**addRkszonesApgroupsMembersByApMac()**](APGroupApi.md#addRkszonesApgroupsMembersByApMac) | **POST** /rkszones/{zoneId}/apgroups/{id}/members/{apMac} | Use this API command to add a member AP to an AP group. |
| [**addRkszonesApgroupsMembersById()**](APGroupApi.md#addRkszonesApgroupsMembersById) | **POST** /rkszones/{zoneId}/apgroups/{id}/members | Add multiple members to an AP group. |
| [**deleteRkszonesApgroupsAltitudeById()**](APGroupApi.md#deleteRkszonesApgroupsAltitudeById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/altitude | Use this API command to clear the altitude of AP group. |
| [**deleteRkszonesApgroupsApMgmtVlanById()**](APGroupApi.md#deleteRkszonesApgroupsApMgmtVlanById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/apMgmtVlan | Disable AP Management Vlan Override of an AP group. |
| [**deleteRkszonesApgroupsApmodelByModel()**](APGroupApi.md#deleteRkszonesApgroupsApmodelByModel) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/apmodel/{model} | Use this API command to disable AP model specific configuration override zone that belong to an AP group. |
| [**deleteRkszonesApgroupsAwsVenueById()**](APGroupApi.md#deleteRkszonesApgroupsAwsVenueById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/awsVenue | Use this API command to disable AWS venue override. The AP will apply its group&#39;s or zone&#39;s configuration. |
| [**deleteRkszonesApgroupsById()**](APGroupApi.md#deleteRkszonesApgroupsById) | **DELETE** /rkszones/{zoneId}/apgroups/{id} | Use this API command to delete an AP group. |
| [**deleteRkszonesApgroupsChannelEvaluationIntervalById()**](APGroupApi.md#deleteRkszonesApgroupsChannelEvaluationIntervalById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/channelEvaluationInterval | Disable Channel Evaluation Interval Override of an AP group. |
| [**deleteRkszonesApgroupsClientAdmissionControl24ById()**](APGroupApi.md#deleteRkszonesApgroupsClientAdmissionControl24ById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/clientAdmissionControl24 | Use this API command to disable client admission control 2.4GHz radio configuration override zone for APs that belong to an AP group. |
| [**deleteRkszonesApgroupsClientAdmissionControl50ById()**](APGroupApi.md#deleteRkszonesApgroupsClientAdmissionControl50ById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/clientAdmissionControl50 | Use this API command to disable client admission control 5GHz radio configuration override zone for APs that belong to an AP group. |
| [**deleteRkszonesApgroupsDirectedMulticastFromNetworkEnabledById()**](APGroupApi.md#deleteRkszonesApgroupsDirectedMulticastFromNetworkEnabledById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/directedMulticastFromNetworkEnabled | Use this API command to disable Directed Multicast from Network to wired/wireless client configuration override zone for APs that belong to an AP group. |
| [**deleteRkszonesApgroupsDirectedMulticastFromWiredClientEnabledById()**](APGroupApi.md#deleteRkszonesApgroupsDirectedMulticastFromWiredClientEnabledById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/directedMulticastFromWiredClientEnabled | Use this API command to disable Directed Multicast from wired client to Network configuration override zone for APs that belong to an AP group. |
| [**deleteRkszonesApgroupsDirectedMulticastFromWirelessClientEnabledById()**](APGroupApi.md#deleteRkszonesApgroupsDirectedMulticastFromWirelessClientEnabledById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/directedMulticastFromWirelessClientEnabled | Use this API command to disable Directed Multicast from wireless client to Network configuration override zone for APs that belong to an AP group. |
| [**deleteRkszonesApgroupsLocationAdditionalInfoById()**](APGroupApi.md#deleteRkszonesApgroupsLocationAdditionalInfoById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/locationAdditionalInfo | Use this API command to disable location additionalInfo override zone for APs that belong to an AP group. |
| [**deleteRkszonesApgroupsLocationBasedServiceById()**](APGroupApi.md#deleteRkszonesApgroupsLocationBasedServiceById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/locationBasedService | Use this API command to disable location based service override zone for APs that belong to an AP group. |
| [**deleteRkszonesApgroupsLocationById()**](APGroupApi.md#deleteRkszonesApgroupsLocationById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/location | Use this API command to disable location override for APs that belong to an AP group. |
| [**deleteRkszonesApgroupsLteBandLockChannelsById()**](APGroupApi.md#deleteRkszonesApgroupsLteBandLockChannelsById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/lteBandLockChannels | Use this API command to disable LTE band lock channel override zone for APs that belong to an AP group. |
| [**deleteRkszonesApgroupsMembersByApMac()**](APGroupApi.md#deleteRkszonesApgroupsMembersByApMac) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/members/{apMac} | Use this API command to remove a member AP from an AP group. |
| [**deleteRkszonesApgroupsProtectionMode24ById()**](APGroupApi.md#deleteRkszonesApgroupsProtectionMode24ById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/protectionMode24 | Use this API command to disable 2.4GHz radio protection mode configuration override zone for APs that belong to an AP group. |
| [**deleteRkszonesApgroupsRadioConfigRadio24gAutoChannelSelectionById()**](APGroupApi.md#deleteRkszonesApgroupsRadioConfigRadio24gAutoChannelSelectionById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/radioConfig/radio24g/autoChannelSelection | Disable Radio 2.4G Auto ChannelSelectMode and ChannelFly MTBC Override of an AP group. |
| [**deleteRkszonesApgroupsRadioConfigRadio24gById()**](APGroupApi.md#deleteRkszonesApgroupsRadioConfigRadio24gById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/radioConfig/radio24g | Use this API command to disable 2.4GHz radio configuration override zone for APs that belong to an AP group. |
| [**deleteRkszonesApgroupsRadioConfigRadio24gChannelById()**](APGroupApi.md#deleteRkszonesApgroupsRadioConfigRadio24gChannelById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/radioConfig/radio24g/channel | Use this API command to disable 2.4GHz radio channel override zone for APs that belong to an AP group. |
| [**deleteRkszonesApgroupsRadioConfigRadio24gChannelRangeById()**](APGroupApi.md#deleteRkszonesApgroupsRadioConfigRadio24gChannelRangeById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/radioConfig/radio24g/channelRange | Use this API command to disable 2.4GHz radio channelRange override zone for APs that belong to an AP group. |
| [**deleteRkszonesApgroupsRadioConfigRadio24gChannelWidthById()**](APGroupApi.md#deleteRkszonesApgroupsRadioConfigRadio24gChannelWidthById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/radioConfig/radio24g/channelWidth | Use this API command to disable 2.4GHz radio channelWidth override zone for APs that belong to an AP group. |
| [**deleteRkszonesApgroupsRadioConfigRadio24gProtectionModeById()**](APGroupApi.md#deleteRkszonesApgroupsRadioConfigRadio24gProtectionModeById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/radioConfig/radio24g/protectionMode | Use this API command to disable 2.4GHz radio protection mode configuration override zone for APs that belong to an AP group. |
| [**deleteRkszonesApgroupsRadioConfigRadio24gTxPowerById()**](APGroupApi.md#deleteRkszonesApgroupsRadioConfigRadio24gTxPowerById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/radioConfig/radio24g/txPower | Use this API command to disable 2.4GHz radio txPower override zone for APs that belong to an AP group. |
| [**deleteRkszonesApgroupsRadioConfigRadio24gWlanGroupIdById()**](APGroupApi.md#deleteRkszonesApgroupsRadioConfigRadio24gWlanGroupIdById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/radioConfig/radio24g/wlanGroupId | Use this API command to disable WLAN group on 2.4GHz radio override zone for APs that belong to an AP group. |
| [**deleteRkszonesApgroupsRadioConfigRadio5gAutoChannelSelectionById()**](APGroupApi.md#deleteRkszonesApgroupsRadioConfigRadio5gAutoChannelSelectionById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/radioConfig/radio5g/autoChannelSelection | Disable Radio 5G Auto ChannelSelectMode and ChannelFly MTBC Override of an AP group. |
| [**deleteRkszonesApgroupsRadioConfigRadio5gById()**](APGroupApi.md#deleteRkszonesApgroupsRadioConfigRadio5gById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/radioConfig/radio5g | Use this API command to disable 5GHz radio configuration override zone for APs that belong to an AP group. |
| [**deleteRkszonesApgroupsRadioConfigRadio5gChannelById()**](APGroupApi.md#deleteRkszonesApgroupsRadioConfigRadio5gChannelById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/radioConfig/radio5g/channel | Use this API command to disable 5GHz radio outdoorChannel override zone for APs that belong to an AP group. |
| [**deleteRkszonesApgroupsRadioConfigRadio5gChannelIndoorById()**](APGroupApi.md#deleteRkszonesApgroupsRadioConfigRadio5gChannelIndoorById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/radioConfig/radio5g/channelIndoor | Use this API command to disable 5GHz radio indoorChannel override zone for APs that belong to an AP group. |
| [**deleteRkszonesApgroupsRadioConfigRadio5gChannelRangeById()**](APGroupApi.md#deleteRkszonesApgroupsRadioConfigRadio5gChannelRangeById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/radioConfig/radio5g/channelRange | Use this API command to disable 5GHz radio outdoorChannelRange override zone for APs that belong to an AP group. |
| [**deleteRkszonesApgroupsRadioConfigRadio5gChannelRangeIndoorById()**](APGroupApi.md#deleteRkszonesApgroupsRadioConfigRadio5gChannelRangeIndoorById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/radioConfig/radio5g/channelRangeIndoor | Use this API command to disable 5GHz radio indoorChannelRange override zone for APs that belong to an AP group. |
| [**deleteRkszonesApgroupsRadioConfigRadio5gChannelWidthById()**](APGroupApi.md#deleteRkszonesApgroupsRadioConfigRadio5gChannelWidthById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/radioConfig/radio5g/channelWidth | Use this API command to disable 5GHz radio channelWidth override zone for APs that belong to an AP group. |
| [**deleteRkszonesApgroupsRadioConfigRadio5gLowerAutoChannelSelectionById()**](APGroupApi.md#deleteRkszonesApgroupsRadioConfigRadio5gLowerAutoChannelSelectionById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/radioConfig/radio5gLower/autoChannelSelection | Disable Radio Lower 5G Auto ChannelSelectMode and ChannelFly MTBC Override of an AP group. |
| [**deleteRkszonesApgroupsRadioConfigRadio5gLowerById()**](APGroupApi.md#deleteRkszonesApgroupsRadioConfigRadio5gLowerById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/radioConfig/radio5gLower | Use this API command to disable lower 5GHz radio configuration override zone for APs that belong to an AP group. |
| [**deleteRkszonesApgroupsRadioConfigRadio5gLowerChannelById()**](APGroupApi.md#deleteRkszonesApgroupsRadioConfigRadio5gLowerChannelById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/radioConfig/radio5gLower/channel | Use this API command to disable lower 5GHz radio outdoorChannel override zone for APs that belong to an AP group. |
| [**deleteRkszonesApgroupsRadioConfigRadio5gLowerChannelIndoorById()**](APGroupApi.md#deleteRkszonesApgroupsRadioConfigRadio5gLowerChannelIndoorById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/radioConfig/radio5gLower/channelIndoor | Use this API command to disable lower 5GHz radio indoorChannel override zone for APs that belong to an AP group. |
| [**deleteRkszonesApgroupsRadioConfigRadio5gLowerChannelRangeById()**](APGroupApi.md#deleteRkszonesApgroupsRadioConfigRadio5gLowerChannelRangeById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/radioConfig/radio5gLower/channelRange | Use this API command to disable lower 5GHz radio outdoorChannelRange override zone for APs that belong to an AP group. |
| [**deleteRkszonesApgroupsRadioConfigRadio5gLowerChannelRangeIndoorById()**](APGroupApi.md#deleteRkszonesApgroupsRadioConfigRadio5gLowerChannelRangeIndoorById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/radioConfig/radio5gLower/channelRangeIndoor | Use this API command to disable lower 5GHz radio indoorChannelRange override zone for APs that belong to an AP group. |
| [**deleteRkszonesApgroupsRadioConfigRadio5gLowerChannelWidthById()**](APGroupApi.md#deleteRkszonesApgroupsRadioConfigRadio5gLowerChannelWidthById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/radioConfig/radio5gLower/channelWidth | Use this API command to disable lower 5GHz radio channelWidth override zone for APs that belong to an AP group. |
| [**deleteRkszonesApgroupsRadioConfigRadio5gLowerTxPowerById()**](APGroupApi.md#deleteRkszonesApgroupsRadioConfigRadio5gLowerTxPowerById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/radioConfig/radio5gLower/txPower | Use this API command to disable lower 5GHz radio txPower override zone for APs that belong to an AP group. |
| [**deleteRkszonesApgroupsRadioConfigRadio5gLowerWlanGroupIdById()**](APGroupApi.md#deleteRkszonesApgroupsRadioConfigRadio5gLowerWlanGroupIdById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/radioConfig/radio5gLower/wlanGroupId | Use this API command to disable WLAN group on lower 5GHz radio override zone for APs that belong to an AP group. |
| [**deleteRkszonesApgroupsRadioConfigRadio5gTxPowerById()**](APGroupApi.md#deleteRkszonesApgroupsRadioConfigRadio5gTxPowerById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/radioConfig/radio5g/txPower | Use this API command to disable 5GHz radio txPower override zone for APs that belong to an AP group. |
| [**deleteRkszonesApgroupsRadioConfigRadio5gUpperAutoChannelSelectionById()**](APGroupApi.md#deleteRkszonesApgroupsRadioConfigRadio5gUpperAutoChannelSelectionById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/radioConfig/radio5gUpper/autoChannelSelection | Disable Radio Upper 5G Auto ChannelSelectMode and ChannelFly MTBC Override of an AP group. |
| [**deleteRkszonesApgroupsRadioConfigRadio5gUpperById()**](APGroupApi.md#deleteRkszonesApgroupsRadioConfigRadio5gUpperById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/radioConfig/radio5gUpper | Use this API command to disable upper 5GHz radio configuration override zone for APs that belong to an AP group. |
| [**deleteRkszonesApgroupsRadioConfigRadio5gUpperChannelById()**](APGroupApi.md#deleteRkszonesApgroupsRadioConfigRadio5gUpperChannelById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/radioConfig/radio5gUpper/channel | Use this API command to disable upper 5GHz radio outdoorChannel override zone for APs that belong to an AP group. |
| [**deleteRkszonesApgroupsRadioConfigRadio5gUpperChannelIndoorById()**](APGroupApi.md#deleteRkszonesApgroupsRadioConfigRadio5gUpperChannelIndoorById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/radioConfig/radio5gUpper/channelIndoor | Use this API command to disable upper 5GHz radio indoorChannel override zone for APs that belong to an AP group. |
| [**deleteRkszonesApgroupsRadioConfigRadio5gUpperChannelRangeById()**](APGroupApi.md#deleteRkszonesApgroupsRadioConfigRadio5gUpperChannelRangeById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/radioConfig/radio5gUpper/channelRange | Use this API command to disable upper 5GHz radio outdoorChannelRange override zone for APs that belong to an AP group. |
| [**deleteRkszonesApgroupsRadioConfigRadio5gUpperChannelRangeIndoorById()**](APGroupApi.md#deleteRkszonesApgroupsRadioConfigRadio5gUpperChannelRangeIndoorById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/radioConfig/radio5gUpper/channelRangeIndoor | Use this API command to disable upper 5GHz radio indoorChannelRange override zone for APs that belong to an AP group. |
| [**deleteRkszonesApgroupsRadioConfigRadio5gUpperChannelWidthById()**](APGroupApi.md#deleteRkszonesApgroupsRadioConfigRadio5gUpperChannelWidthById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/radioConfig/radio5gUpper/channelWidth | Use this API command to disable upper 5GHz radio channelWidth override zone for APs that belong to an AP group. |
| [**deleteRkszonesApgroupsRadioConfigRadio5gUpperTxPowerById()**](APGroupApi.md#deleteRkszonesApgroupsRadioConfigRadio5gUpperTxPowerById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/radioConfig/radio5gUpper/txPower | Use this API command to disable upper 5GHz radio txPower override zone for APs that belong to an AP group. |
| [**deleteRkszonesApgroupsRadioConfigRadio5gUpperWlanGroupIdById()**](APGroupApi.md#deleteRkszonesApgroupsRadioConfigRadio5gUpperWlanGroupIdById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/radioConfig/radio5gUpper/wlanGroupId | Use this API command to disable WLAN group on upper 5GHz radio override zone for APs that belong to an AP group. |
| [**deleteRkszonesApgroupsRadioConfigRadio5gWlanGroupIdById()**](APGroupApi.md#deleteRkszonesApgroupsRadioConfigRadio5gWlanGroupIdById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/radioConfig/radio5g/wlanGroupId | Use this API command to disable WLAN group on 5GHz radio override zone for APs that belong to an AP group. |
| [**deleteRkszonesApgroupsRadioConfigRadio6gAutoChannelSelectionById()**](APGroupApi.md#deleteRkszonesApgroupsRadioConfigRadio6gAutoChannelSelectionById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/radioConfig/radio6g/autoChannelSelection | Disable Radio 6G Auto ChannelSelectMode and ChannelFly MTBC Override of an AP group. |
| [**deleteRkszonesApgroupsRadioConfigRadio6gBssMinRateById()**](APGroupApi.md#deleteRkszonesApgroupsRadioConfigRadio6gBssMinRateById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/radioConfig/radio6g/bssMinRate | Use this API command to disable 6G BSS minimum rate override for APs that belong to an AP group. This will also disable the override of 6G multicast downlink rate limit. |
| [**deleteRkszonesApgroupsRadioConfigRadio6gById()**](APGroupApi.md#deleteRkszonesApgroupsRadioConfigRadio6gById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/radioConfig/radio6g | Use this API command to disable 6GHz radio configuration override zone for APs that belong to an AP group. |
| [**deleteRkszonesApgroupsRadioConfigRadio6gChannelById()**](APGroupApi.md#deleteRkszonesApgroupsRadioConfigRadio6gChannelById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/radioConfig/radio6g/channel | Use this API command to disable 6GHz radio channel override zone for APs that belong to an AP group. |
| [**deleteRkszonesApgroupsRadioConfigRadio6gChannelRangeById()**](APGroupApi.md#deleteRkszonesApgroupsRadioConfigRadio6gChannelRangeById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/radioConfig/radio6g/channelRange | Use this API command to disable 6GHz radio channelRange override zone for APs that belong to an AP group. |
| [**deleteRkszonesApgroupsRadioConfigRadio6gChannelWidthById()**](APGroupApi.md#deleteRkszonesApgroupsRadioConfigRadio6gChannelWidthById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/radioConfig/radio6g/channelWidth | Use this API command to disable 6GHz radio channelWidth override zone for APs that belong to an AP group. |
| [**deleteRkszonesApgroupsRadioConfigRadio6gMgmtTxRateById()**](APGroupApi.md#deleteRkszonesApgroupsRadioConfigRadio6gMgmtTxRateById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/radioConfig/radio6g/mgmtTxRate | Use this API command to disable 6G management TX rate override for APs that belong to an AP group. |
| [**deleteRkszonesApgroupsRadioConfigRadio6gMulticastDownlinkRateLimitById()**](APGroupApi.md#deleteRkszonesApgroupsRadioConfigRadio6gMulticastDownlinkRateLimitById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/radioConfig/radio6g/multicastDownlinkRateLimit | Use this API command to disable 6G multicast downlink rate limit override for APs that belong to an AP group. This will also disable the override of 6G BSS minimum rate. |
| [**deleteRkszonesApgroupsRadioConfigRadio6gMulticastUplinkRateLimitById()**](APGroupApi.md#deleteRkszonesApgroupsRadioConfigRadio6gMulticastUplinkRateLimitById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/radioConfig/radio6g/multicastUplinkRateLimit | Use this API command to disable 6G multicast uplink rate limit override for APs that belong to an AP group. |
| [**deleteRkszonesApgroupsRadioConfigRadio6gTxPowerById()**](APGroupApi.md#deleteRkszonesApgroupsRadioConfigRadio6gTxPowerById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/radioConfig/radio6g/txPower | Use this API command to disable 6GHz radio txPower override zone for APs that belong to an AP group. |
| [**deleteRkszonesApgroupsRadioConfigRadio6gWlanGroupIdById()**](APGroupApi.md#deleteRkszonesApgroupsRadioConfigRadio6gWlanGroupIdById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/radioConfig/radio6g/wlanGroupId | Use this API command to disable WLAN group on 6GHz radio override zone for APs that belong to an AP group. |
| [**deleteRkszonesApgroupsRecoverySsidById()**](APGroupApi.md#deleteRkszonesApgroupsRecoverySsidById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/recoverySsid | Use this API command to disable Recovery SSID configuration override zone for APs that belong to an AP group. |
| [**deleteRkszonesApgroupsRksGreForwardBroadcastById()**](APGroupApi.md#deleteRkszonesApgroupsRksGreForwardBroadcastById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/rksGreForwardBroadcast | Use this API command to disable Ruckus GRE Broadcast packet forwarding override zone for APs that belong to an AP group. |
| [**deleteRkszonesApgroupsRogueApAggressivenessModeById()**](APGroupApi.md#deleteRkszonesApgroupsRogueApAggressivenessModeById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/rogueApAggressivenessMode | Use this API command to disable rogue AP aggressiveness mode override zone for APs that belong to an AP group. |
| [**deleteRkszonesApgroupsRogueApJammingThresholdById()**](APGroupApi.md#deleteRkszonesApgroupsRogueApJammingThresholdById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/rogueApJammingThreshold | Use this API command to disable rogue AP jamming threshold override zone for APs that belong to an AP group. |
| [**deleteRkszonesApgroupsRogueApReportThresholdById()**](APGroupApi.md#deleteRkszonesApgroupsRogueApReportThresholdById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/rogueApReportThreshold | Use this API command to disable rogue AP report threshold override zone for APs that belong to an AP group. |
| [**deleteRkszonesApgroupsVenueProfileById()**](APGroupApi.md#deleteRkszonesApgroupsVenueProfileById) | **DELETE** /rkszones/{zoneId}/apgroups/{id}/venueProfile | Use this API command to clear Hotspot 2.0 venue profile for APs that belong to an AP group. |
| [**findRkszonesApgroupsApmodelByModel()**](APGroupApi.md#findRkszonesApgroupsApmodelByModel) | **GET** /rkszones/{zoneId}/apgroups/{id}/apmodel/{model} | Use this API command to retrieve AP model specific configuration override zone that belong to an AP group, NULL means the override setting is not checked inside an AP group. |
| [**findRkszonesApgroupsById()**](APGroupApi.md#findRkszonesApgroupsById) | **GET** /rkszones/{zoneId}/apgroups/{id} | Use this API command to retrieve information about an AP group. |
| [**findRkszonesApgroupsByZoneId()**](APGroupApi.md#findRkszonesApgroupsByZoneId) | **GET** /rkszones/{zoneId}/apgroups | Use this API command to retrieve the list of AP groups that belong to a zone. |
| [**findRkszonesApgroupsDefaultByZoneId()**](APGroupApi.md#findRkszonesApgroupsDefaultByZoneId) | **GET** /rkszones/{zoneId}/apgroups/default | Use this API command to retrieve information about default AP group of zone. |
| [**partialUpdateRkszonesApgroupsById()**](APGroupApi.md#partialUpdateRkszonesApgroupsById) | **PATCH** /rkszones/{zoneId}/apgroups/{id} | Use this API command to modify the configuration of an AP group. |
| [**updateRkszonesApgroupsApmodelByModel()**](APGroupApi.md#updateRkszonesApgroupsApmodelByModel) | **PUT** /rkszones/{zoneId}/apgroups/{id}/apmodel/{model} | Use this API command to modify AP model specific configuration override zone that belong to an AP group. |
| [**updateRkszonesApgroupsById()**](APGroupApi.md#updateRkszonesApgroupsById) | **PUT** /rkszones/{zoneId}/apgroups/{id} | Use this API command to modify the entire information of an AP group. |


## `addRkszonesApgroupsByZoneId()`

```php
addRkszonesApgroupsByZoneId($zone_id, $service_ticket, $body): object
```

Use this API command to create new AP group within a zone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$body = new \PofP\SmartzoneClient\Model\ApgroupCreateAPGroup(); // \PofP\SmartzoneClient\Model\ApgroupCreateAPGroup

try {
    $result = $apiInstance->addRkszonesApgroupsByZoneId($zone_id, $service_ticket, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->addRkszonesApgroupsByZoneId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |
| **body** | [**\PofP\SmartzoneClient\Model\ApgroupCreateAPGroup**](../Model/ApgroupCreateAPGroup.md)|  | |

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

## `addRkszonesApgroupsMembersByApMac()`

```php
addRkszonesApgroupsMembersByApMac($zone_id, $id, $ap_mac, $service_ticket): object
```

Use this API command to add a member AP to an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->addRkszonesApgroupsMembersByApMac($zone_id, $id, $ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->addRkszonesApgroupsMembersByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `addRkszonesApgroupsMembersById()`

```php
addRkszonesApgroupsMembersById($zone_id, $id, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Add multiple members to an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->addRkszonesApgroupsMembersById($zone_id, $id, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->addRkszonesApgroupsMembersById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsAltitudeById()`

```php
deleteRkszonesApgroupsAltitudeById($zone_id, $id, $service_ticket): object
```

Use this API command to clear the altitude of AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsAltitudeById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsAltitudeById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsApMgmtVlanById()`

```php
deleteRkszonesApgroupsApMgmtVlanById($zone_id, $id, $service_ticket): object
```

Disable AP Management Vlan Override of an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsApMgmtVlanById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsApMgmtVlanById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsApmodelByModel()`

```php
deleteRkszonesApgroupsApmodelByModel($zone_id, $id, $model, $service_ticket): object
```

Use this API command to disable AP model specific configuration override zone that belong to an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$model = 'model_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsApmodelByModel($zone_id, $id, $model, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsApmodelByModel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
| **model** | **string**|  | |
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

## `deleteRkszonesApgroupsAwsVenueById()`

```php
deleteRkszonesApgroupsAwsVenueById($zone_id, $id, $service_ticket): object
```

Use this API command to disable AWS venue override. The AP will apply its group's or zone's configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsAwsVenueById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsAwsVenueById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsById()`

```php
deleteRkszonesApgroupsById($zone_id, $id, $service_ticket): object
```

Use this API command to delete an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsChannelEvaluationIntervalById()`

```php
deleteRkszonesApgroupsChannelEvaluationIntervalById($zone_id, $id, $service_ticket): object
```

Disable Channel Evaluation Interval Override of an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsChannelEvaluationIntervalById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsChannelEvaluationIntervalById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsClientAdmissionControl24ById()`

```php
deleteRkszonesApgroupsClientAdmissionControl24ById($zone_id, $id, $service_ticket): object
```

Use this API command to disable client admission control 2.4GHz radio configuration override zone for APs that belong to an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsClientAdmissionControl24ById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsClientAdmissionControl24ById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsClientAdmissionControl50ById()`

```php
deleteRkszonesApgroupsClientAdmissionControl50ById($zone_id, $id, $service_ticket): object
```

Use this API command to disable client admission control 5GHz radio configuration override zone for APs that belong to an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsClientAdmissionControl50ById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsClientAdmissionControl50ById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsDirectedMulticastFromNetworkEnabledById()`

```php
deleteRkszonesApgroupsDirectedMulticastFromNetworkEnabledById($zone_id, $id, $service_ticket): object
```

Use this API command to disable Directed Multicast from Network to wired/wireless client configuration override zone for APs that belong to an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsDirectedMulticastFromNetworkEnabledById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsDirectedMulticastFromNetworkEnabledById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsDirectedMulticastFromWiredClientEnabledById()`

```php
deleteRkszonesApgroupsDirectedMulticastFromWiredClientEnabledById($zone_id, $id, $service_ticket): object
```

Use this API command to disable Directed Multicast from wired client to Network configuration override zone for APs that belong to an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsDirectedMulticastFromWiredClientEnabledById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsDirectedMulticastFromWiredClientEnabledById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsDirectedMulticastFromWirelessClientEnabledById()`

```php
deleteRkszonesApgroupsDirectedMulticastFromWirelessClientEnabledById($zone_id, $id, $service_ticket): object
```

Use this API command to disable Directed Multicast from wireless client to Network configuration override zone for APs that belong to an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsDirectedMulticastFromWirelessClientEnabledById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsDirectedMulticastFromWirelessClientEnabledById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsLocationAdditionalInfoById()`

```php
deleteRkszonesApgroupsLocationAdditionalInfoById($zone_id, $id, $service_ticket): object
```

Use this API command to disable location additionalInfo override zone for APs that belong to an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsLocationAdditionalInfoById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsLocationAdditionalInfoById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsLocationBasedServiceById()`

```php
deleteRkszonesApgroupsLocationBasedServiceById($zone_id, $id, $service_ticket): object
```

Use this API command to disable location based service override zone for APs that belong to an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsLocationBasedServiceById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsLocationBasedServiceById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsLocationById()`

```php
deleteRkszonesApgroupsLocationById($zone_id, $id, $service_ticket): object
```

Use this API command to disable location override for APs that belong to an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsLocationById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsLocationById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsLteBandLockChannelsById()`

```php
deleteRkszonesApgroupsLteBandLockChannelsById($zone_id, $id, $service_ticket): object
```

Use this API command to disable LTE band lock channel override zone for APs that belong to an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsLteBandLockChannelsById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsLteBandLockChannelsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsMembersByApMac()`

```php
deleteRkszonesApgroupsMembersByApMac($zone_id, $id, $ap_mac, $service_ticket): object
```

Use this API command to remove a member AP from an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$ap_mac = 'ap_mac_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsMembersByApMac($zone_id, $id, $ap_mac, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsMembersByApMac: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsProtectionMode24ById()`

```php
deleteRkszonesApgroupsProtectionMode24ById($zone_id, $id, $service_ticket): object
```

Use this API command to disable 2.4GHz radio protection mode configuration override zone for APs that belong to an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsProtectionMode24ById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsProtectionMode24ById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsRadioConfigRadio24gAutoChannelSelectionById()`

```php
deleteRkszonesApgroupsRadioConfigRadio24gAutoChannelSelectionById($zone_id, $id, $service_ticket): object
```

Disable Radio 2.4G Auto ChannelSelectMode and ChannelFly MTBC Override of an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsRadioConfigRadio24gAutoChannelSelectionById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsRadioConfigRadio24gAutoChannelSelectionById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsRadioConfigRadio24gById()`

```php
deleteRkszonesApgroupsRadioConfigRadio24gById($zone_id, $id, $service_ticket): object
```

Use this API command to disable 2.4GHz radio configuration override zone for APs that belong to an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsRadioConfigRadio24gById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsRadioConfigRadio24gById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsRadioConfigRadio24gChannelById()`

```php
deleteRkszonesApgroupsRadioConfigRadio24gChannelById($zone_id, $id, $service_ticket): object
```

Use this API command to disable 2.4GHz radio channel override zone for APs that belong to an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsRadioConfigRadio24gChannelById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsRadioConfigRadio24gChannelById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsRadioConfigRadio24gChannelRangeById()`

```php
deleteRkszonesApgroupsRadioConfigRadio24gChannelRangeById($zone_id, $id, $service_ticket): object
```

Use this API command to disable 2.4GHz radio channelRange override zone for APs that belong to an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsRadioConfigRadio24gChannelRangeById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsRadioConfigRadio24gChannelRangeById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsRadioConfigRadio24gChannelWidthById()`

```php
deleteRkszonesApgroupsRadioConfigRadio24gChannelWidthById($zone_id, $id, $service_ticket): object
```

Use this API command to disable 2.4GHz radio channelWidth override zone for APs that belong to an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsRadioConfigRadio24gChannelWidthById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsRadioConfigRadio24gChannelWidthById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsRadioConfigRadio24gProtectionModeById()`

```php
deleteRkszonesApgroupsRadioConfigRadio24gProtectionModeById($zone_id, $id, $service_ticket): object
```

Use this API command to disable 2.4GHz radio protection mode configuration override zone for APs that belong to an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsRadioConfigRadio24gProtectionModeById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsRadioConfigRadio24gProtectionModeById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsRadioConfigRadio24gTxPowerById()`

```php
deleteRkszonesApgroupsRadioConfigRadio24gTxPowerById($zone_id, $id, $service_ticket): object
```

Use this API command to disable 2.4GHz radio txPower override zone for APs that belong to an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsRadioConfigRadio24gTxPowerById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsRadioConfigRadio24gTxPowerById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsRadioConfigRadio24gWlanGroupIdById()`

```php
deleteRkszonesApgroupsRadioConfigRadio24gWlanGroupIdById($zone_id, $id, $service_ticket): object
```

Use this API command to disable WLAN group on 2.4GHz radio override zone for APs that belong to an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsRadioConfigRadio24gWlanGroupIdById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsRadioConfigRadio24gWlanGroupIdById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsRadioConfigRadio5gAutoChannelSelectionById()`

```php
deleteRkszonesApgroupsRadioConfigRadio5gAutoChannelSelectionById($zone_id, $id, $service_ticket): object
```

Disable Radio 5G Auto ChannelSelectMode and ChannelFly MTBC Override of an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsRadioConfigRadio5gAutoChannelSelectionById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsRadioConfigRadio5gAutoChannelSelectionById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsRadioConfigRadio5gById()`

```php
deleteRkszonesApgroupsRadioConfigRadio5gById($zone_id, $id, $service_ticket): object
```

Use this API command to disable 5GHz radio configuration override zone for APs that belong to an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsRadioConfigRadio5gById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsRadioConfigRadio5gById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsRadioConfigRadio5gChannelById()`

```php
deleteRkszonesApgroupsRadioConfigRadio5gChannelById($zone_id, $id, $service_ticket): object
```

Use this API command to disable 5GHz radio outdoorChannel override zone for APs that belong to an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsRadioConfigRadio5gChannelById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsRadioConfigRadio5gChannelById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsRadioConfigRadio5gChannelIndoorById()`

```php
deleteRkszonesApgroupsRadioConfigRadio5gChannelIndoorById($zone_id, $id, $service_ticket): object
```

Use this API command to disable 5GHz radio indoorChannel override zone for APs that belong to an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsRadioConfigRadio5gChannelIndoorById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsRadioConfigRadio5gChannelIndoorById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsRadioConfigRadio5gChannelRangeById()`

```php
deleteRkszonesApgroupsRadioConfigRadio5gChannelRangeById($zone_id, $id, $service_ticket): object
```

Use this API command to disable 5GHz radio outdoorChannelRange override zone for APs that belong to an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsRadioConfigRadio5gChannelRangeById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsRadioConfigRadio5gChannelRangeById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsRadioConfigRadio5gChannelRangeIndoorById()`

```php
deleteRkszonesApgroupsRadioConfigRadio5gChannelRangeIndoorById($zone_id, $id, $service_ticket): object
```

Use this API command to disable 5GHz radio indoorChannelRange override zone for APs that belong to an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsRadioConfigRadio5gChannelRangeIndoorById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsRadioConfigRadio5gChannelRangeIndoorById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsRadioConfigRadio5gChannelWidthById()`

```php
deleteRkszonesApgroupsRadioConfigRadio5gChannelWidthById($zone_id, $id, $service_ticket): object
```

Use this API command to disable 5GHz radio channelWidth override zone for APs that belong to an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsRadioConfigRadio5gChannelWidthById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsRadioConfigRadio5gChannelWidthById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsRadioConfigRadio5gLowerAutoChannelSelectionById()`

```php
deleteRkszonesApgroupsRadioConfigRadio5gLowerAutoChannelSelectionById($zone_id, $id, $service_ticket): object
```

Disable Radio Lower 5G Auto ChannelSelectMode and ChannelFly MTBC Override of an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsRadioConfigRadio5gLowerAutoChannelSelectionById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsRadioConfigRadio5gLowerAutoChannelSelectionById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsRadioConfigRadio5gLowerById()`

```php
deleteRkszonesApgroupsRadioConfigRadio5gLowerById($zone_id, $id, $service_ticket): object
```

Use this API command to disable lower 5GHz radio configuration override zone for APs that belong to an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsRadioConfigRadio5gLowerById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsRadioConfigRadio5gLowerById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsRadioConfigRadio5gLowerChannelById()`

```php
deleteRkszonesApgroupsRadioConfigRadio5gLowerChannelById($zone_id, $id, $service_ticket): object
```

Use this API command to disable lower 5GHz radio outdoorChannel override zone for APs that belong to an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsRadioConfigRadio5gLowerChannelById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsRadioConfigRadio5gLowerChannelById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsRadioConfigRadio5gLowerChannelIndoorById()`

```php
deleteRkszonesApgroupsRadioConfigRadio5gLowerChannelIndoorById($zone_id, $id, $service_ticket): object
```

Use this API command to disable lower 5GHz radio indoorChannel override zone for APs that belong to an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsRadioConfigRadio5gLowerChannelIndoorById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsRadioConfigRadio5gLowerChannelIndoorById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsRadioConfigRadio5gLowerChannelRangeById()`

```php
deleteRkszonesApgroupsRadioConfigRadio5gLowerChannelRangeById($zone_id, $id, $service_ticket): object
```

Use this API command to disable lower 5GHz radio outdoorChannelRange override zone for APs that belong to an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsRadioConfigRadio5gLowerChannelRangeById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsRadioConfigRadio5gLowerChannelRangeById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsRadioConfigRadio5gLowerChannelRangeIndoorById()`

```php
deleteRkszonesApgroupsRadioConfigRadio5gLowerChannelRangeIndoorById($zone_id, $id, $service_ticket): object
```

Use this API command to disable lower 5GHz radio indoorChannelRange override zone for APs that belong to an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsRadioConfigRadio5gLowerChannelRangeIndoorById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsRadioConfigRadio5gLowerChannelRangeIndoorById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsRadioConfigRadio5gLowerChannelWidthById()`

```php
deleteRkszonesApgroupsRadioConfigRadio5gLowerChannelWidthById($zone_id, $id, $service_ticket): object
```

Use this API command to disable lower 5GHz radio channelWidth override zone for APs that belong to an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsRadioConfigRadio5gLowerChannelWidthById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsRadioConfigRadio5gLowerChannelWidthById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsRadioConfigRadio5gLowerTxPowerById()`

```php
deleteRkszonesApgroupsRadioConfigRadio5gLowerTxPowerById($zone_id, $id, $service_ticket): object
```

Use this API command to disable lower 5GHz radio txPower override zone for APs that belong to an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsRadioConfigRadio5gLowerTxPowerById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsRadioConfigRadio5gLowerTxPowerById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsRadioConfigRadio5gLowerWlanGroupIdById()`

```php
deleteRkszonesApgroupsRadioConfigRadio5gLowerWlanGroupIdById($zone_id, $id, $service_ticket): object
```

Use this API command to disable WLAN group on lower 5GHz radio override zone for APs that belong to an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsRadioConfigRadio5gLowerWlanGroupIdById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsRadioConfigRadio5gLowerWlanGroupIdById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsRadioConfigRadio5gTxPowerById()`

```php
deleteRkszonesApgroupsRadioConfigRadio5gTxPowerById($zone_id, $id, $service_ticket): object
```

Use this API command to disable 5GHz radio txPower override zone for APs that belong to an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsRadioConfigRadio5gTxPowerById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsRadioConfigRadio5gTxPowerById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsRadioConfigRadio5gUpperAutoChannelSelectionById()`

```php
deleteRkszonesApgroupsRadioConfigRadio5gUpperAutoChannelSelectionById($zone_id, $id, $service_ticket): object
```

Disable Radio Upper 5G Auto ChannelSelectMode and ChannelFly MTBC Override of an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsRadioConfigRadio5gUpperAutoChannelSelectionById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsRadioConfigRadio5gUpperAutoChannelSelectionById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsRadioConfigRadio5gUpperById()`

```php
deleteRkszonesApgroupsRadioConfigRadio5gUpperById($zone_id, $id, $service_ticket): object
```

Use this API command to disable upper 5GHz radio configuration override zone for APs that belong to an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsRadioConfigRadio5gUpperById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsRadioConfigRadio5gUpperById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsRadioConfigRadio5gUpperChannelById()`

```php
deleteRkszonesApgroupsRadioConfigRadio5gUpperChannelById($zone_id, $id, $service_ticket): object
```

Use this API command to disable upper 5GHz radio outdoorChannel override zone for APs that belong to an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsRadioConfigRadio5gUpperChannelById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsRadioConfigRadio5gUpperChannelById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsRadioConfigRadio5gUpperChannelIndoorById()`

```php
deleteRkszonesApgroupsRadioConfigRadio5gUpperChannelIndoorById($zone_id, $id, $service_ticket): object
```

Use this API command to disable upper 5GHz radio indoorChannel override zone for APs that belong to an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsRadioConfigRadio5gUpperChannelIndoorById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsRadioConfigRadio5gUpperChannelIndoorById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsRadioConfigRadio5gUpperChannelRangeById()`

```php
deleteRkszonesApgroupsRadioConfigRadio5gUpperChannelRangeById($zone_id, $id, $service_ticket): object
```

Use this API command to disable upper 5GHz radio outdoorChannelRange override zone for APs that belong to an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsRadioConfigRadio5gUpperChannelRangeById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsRadioConfigRadio5gUpperChannelRangeById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsRadioConfigRadio5gUpperChannelRangeIndoorById()`

```php
deleteRkszonesApgroupsRadioConfigRadio5gUpperChannelRangeIndoorById($zone_id, $id, $service_ticket): object
```

Use this API command to disable upper 5GHz radio indoorChannelRange override zone for APs that belong to an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsRadioConfigRadio5gUpperChannelRangeIndoorById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsRadioConfigRadio5gUpperChannelRangeIndoorById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsRadioConfigRadio5gUpperChannelWidthById()`

```php
deleteRkszonesApgroupsRadioConfigRadio5gUpperChannelWidthById($zone_id, $id, $service_ticket): object
```

Use this API command to disable upper 5GHz radio channelWidth override zone for APs that belong to an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsRadioConfigRadio5gUpperChannelWidthById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsRadioConfigRadio5gUpperChannelWidthById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsRadioConfigRadio5gUpperTxPowerById()`

```php
deleteRkszonesApgroupsRadioConfigRadio5gUpperTxPowerById($zone_id, $id, $service_ticket): object
```

Use this API command to disable upper 5GHz radio txPower override zone for APs that belong to an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsRadioConfigRadio5gUpperTxPowerById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsRadioConfigRadio5gUpperTxPowerById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsRadioConfigRadio5gUpperWlanGroupIdById()`

```php
deleteRkszonesApgroupsRadioConfigRadio5gUpperWlanGroupIdById($zone_id, $id, $service_ticket): object
```

Use this API command to disable WLAN group on upper 5GHz radio override zone for APs that belong to an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsRadioConfigRadio5gUpperWlanGroupIdById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsRadioConfigRadio5gUpperWlanGroupIdById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsRadioConfigRadio5gWlanGroupIdById()`

```php
deleteRkszonesApgroupsRadioConfigRadio5gWlanGroupIdById($zone_id, $id, $service_ticket): object
```

Use this API command to disable WLAN group on 5GHz radio override zone for APs that belong to an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsRadioConfigRadio5gWlanGroupIdById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsRadioConfigRadio5gWlanGroupIdById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsRadioConfigRadio6gAutoChannelSelectionById()`

```php
deleteRkszonesApgroupsRadioConfigRadio6gAutoChannelSelectionById($zone_id, $id, $service_ticket): object
```

Disable Radio 6G Auto ChannelSelectMode and ChannelFly MTBC Override of an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsRadioConfigRadio6gAutoChannelSelectionById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsRadioConfigRadio6gAutoChannelSelectionById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsRadioConfigRadio6gBssMinRateById()`

```php
deleteRkszonesApgroupsRadioConfigRadio6gBssMinRateById($zone_id, $id, $service_ticket): object
```

Use this API command to disable 6G BSS minimum rate override for APs that belong to an AP group. This will also disable the override of 6G multicast downlink rate limit.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsRadioConfigRadio6gBssMinRateById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsRadioConfigRadio6gBssMinRateById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsRadioConfigRadio6gById()`

```php
deleteRkszonesApgroupsRadioConfigRadio6gById($zone_id, $id, $service_ticket): object
```

Use this API command to disable 6GHz radio configuration override zone for APs that belong to an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsRadioConfigRadio6gById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsRadioConfigRadio6gById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsRadioConfigRadio6gChannelById()`

```php
deleteRkszonesApgroupsRadioConfigRadio6gChannelById($zone_id, $id, $service_ticket): object
```

Use this API command to disable 6GHz radio channel override zone for APs that belong to an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsRadioConfigRadio6gChannelById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsRadioConfigRadio6gChannelById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsRadioConfigRadio6gChannelRangeById()`

```php
deleteRkszonesApgroupsRadioConfigRadio6gChannelRangeById($zone_id, $id, $service_ticket): object
```

Use this API command to disable 6GHz radio channelRange override zone for APs that belong to an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsRadioConfigRadio6gChannelRangeById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsRadioConfigRadio6gChannelRangeById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsRadioConfigRadio6gChannelWidthById()`

```php
deleteRkszonesApgroupsRadioConfigRadio6gChannelWidthById($zone_id, $id, $service_ticket): object
```

Use this API command to disable 6GHz radio channelWidth override zone for APs that belong to an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsRadioConfigRadio6gChannelWidthById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsRadioConfigRadio6gChannelWidthById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsRadioConfigRadio6gMgmtTxRateById()`

```php
deleteRkszonesApgroupsRadioConfigRadio6gMgmtTxRateById($zone_id, $id, $service_ticket): object
```

Use this API command to disable 6G management TX rate override for APs that belong to an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsRadioConfigRadio6gMgmtTxRateById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsRadioConfigRadio6gMgmtTxRateById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsRadioConfigRadio6gMulticastDownlinkRateLimitById()`

```php
deleteRkszonesApgroupsRadioConfigRadio6gMulticastDownlinkRateLimitById($zone_id, $id, $service_ticket): object
```

Use this API command to disable 6G multicast downlink rate limit override for APs that belong to an AP group. This will also disable the override of 6G BSS minimum rate.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsRadioConfigRadio6gMulticastDownlinkRateLimitById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsRadioConfigRadio6gMulticastDownlinkRateLimitById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsRadioConfigRadio6gMulticastUplinkRateLimitById()`

```php
deleteRkszonesApgroupsRadioConfigRadio6gMulticastUplinkRateLimitById($zone_id, $id, $service_ticket): object
```

Use this API command to disable 6G multicast uplink rate limit override for APs that belong to an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsRadioConfigRadio6gMulticastUplinkRateLimitById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsRadioConfigRadio6gMulticastUplinkRateLimitById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsRadioConfigRadio6gTxPowerById()`

```php
deleteRkszonesApgroupsRadioConfigRadio6gTxPowerById($zone_id, $id, $service_ticket): object
```

Use this API command to disable 6GHz radio txPower override zone for APs that belong to an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsRadioConfigRadio6gTxPowerById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsRadioConfigRadio6gTxPowerById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsRadioConfigRadio6gWlanGroupIdById()`

```php
deleteRkszonesApgroupsRadioConfigRadio6gWlanGroupIdById($zone_id, $id, $service_ticket): object
```

Use this API command to disable WLAN group on 6GHz radio override zone for APs that belong to an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsRadioConfigRadio6gWlanGroupIdById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsRadioConfigRadio6gWlanGroupIdById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsRecoverySsidById()`

```php
deleteRkszonesApgroupsRecoverySsidById($zone_id, $id, $service_ticket): object
```

Use this API command to disable Recovery SSID configuration override zone for APs that belong to an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsRecoverySsidById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsRecoverySsidById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsRksGreForwardBroadcastById()`

```php
deleteRkszonesApgroupsRksGreForwardBroadcastById($zone_id, $id, $service_ticket): object
```

Use this API command to disable Ruckus GRE Broadcast packet forwarding override zone for APs that belong to an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsRksGreForwardBroadcastById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsRksGreForwardBroadcastById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsRogueApAggressivenessModeById()`

```php
deleteRkszonesApgroupsRogueApAggressivenessModeById($zone_id, $id, $service_ticket): object
```

Use this API command to disable rogue AP aggressiveness mode override zone for APs that belong to an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsRogueApAggressivenessModeById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsRogueApAggressivenessModeById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsRogueApJammingThresholdById()`

```php
deleteRkszonesApgroupsRogueApJammingThresholdById($zone_id, $id, $service_ticket): object
```

Use this API command to disable rogue AP jamming threshold override zone for APs that belong to an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsRogueApJammingThresholdById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsRogueApJammingThresholdById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsRogueApReportThresholdById()`

```php
deleteRkszonesApgroupsRogueApReportThresholdById($zone_id, $id, $service_ticket): object
```

Use this API command to disable rogue AP report threshold override zone for APs that belong to an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsRogueApReportThresholdById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsRogueApReportThresholdById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `deleteRkszonesApgroupsVenueProfileById()`

```php
deleteRkszonesApgroupsVenueProfileById($zone_id, $id, $service_ticket): object
```

Use this API command to clear Hotspot 2.0 venue profile for APs that belong to an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->deleteRkszonesApgroupsVenueProfileById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->deleteRkszonesApgroupsVenueProfileById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `findRkszonesApgroupsApmodelByModel()`

```php
findRkszonesApgroupsApmodelByModel($zone_id, $id, $model, $service_ticket): object
```

Use this API command to retrieve AP model specific configuration override zone that belong to an AP group, NULL means the override setting is not checked inside an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$model = 'model_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findRkszonesApgroupsApmodelByModel($zone_id, $id, $model, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->findRkszonesApgroupsApmodelByModel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
| **model** | **string**|  | |
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

## `findRkszonesApgroupsById()`

```php
findRkszonesApgroupsById($zone_id, $id, $service_ticket): object
```

Use this API command to retrieve information about an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findRkszonesApgroupsById($zone_id, $id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->findRkszonesApgroupsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `findRkszonesApgroupsByZoneId()`

```php
findRkszonesApgroupsByZoneId($zone_id, $service_ticket, $index, $list_size): object
```

Use this API command to retrieve the list of AP groups that belong to a zone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$index = 'index_example'; // string | The index of the first entry to be retrieved. Default: 0
$list_size = 'list_size_example'; // string | The maximum number of entries to be retrieved. Default: 100, Maximum: 1000

try {
    $result = $apiInstance->findRkszonesApgroupsByZoneId($zone_id, $service_ticket, $index, $list_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->findRkszonesApgroupsByZoneId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **service_ticket** | **string**| Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API). | |
| **index** | **string**| The index of the first entry to be retrieved. Default: 0 | [optional] |
| **list_size** | **string**| The maximum number of entries to be retrieved. Default: 100, Maximum: 1000 | [optional] |

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

## `findRkszonesApgroupsDefaultByZoneId()`

```php
findRkszonesApgroupsDefaultByZoneId($zone_id, $service_ticket): object
```

Use this API command to retrieve information about default AP group of zone.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).

try {
    $result = $apiInstance->findRkszonesApgroupsDefaultByZoneId($zone_id, $service_ticket);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->findRkszonesApgroupsDefaultByZoneId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
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

## `partialUpdateRkszonesApgroupsById()`

```php
partialUpdateRkszonesApgroupsById($zone_id, $id, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to modify the configuration of an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->partialUpdateRkszonesApgroupsById($zone_id, $id, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->partialUpdateRkszonesApgroupsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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

## `updateRkszonesApgroupsApmodelByModel()`

```php
updateRkszonesApgroupsApmodelByModel($zone_id, $id, $model, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to modify AP model specific configuration override zone that belong to an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$model = 'model_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->updateRkszonesApgroupsApmodelByModel($zone_id, $id, $model, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->updateRkszonesApgroupsApmodelByModel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
| **model** | **string**|  | |
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

## `updateRkszonesApgroupsById()`

```php
updateRkszonesApgroupsById($zone_id, $id, $service_ticket, $UNKNOWN_PARAM_NAME): object
```

Use this API command to modify the entire information of an AP group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new PofP\SmartzoneClient\Api\APGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$zone_id = 'zone_id_example'; // string
$id = 'id_example'; // string
$service_ticket = 'service_ticket_example'; // string | Service Ticket is required in the Request URI Parameters of all API requests (except for the logon API).
$UNKNOWN_PARAM_NAME = new \PofP\SmartzoneClient\Model\null(); // 

try {
    $result = $apiInstance->updateRkszonesApgroupsById($zone_id, $id, $service_ticket, $UNKNOWN_PARAM_NAME);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling APGroupApi->updateRkszonesApgroupsById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **zone_id** | **string**|  | |
| **id** | **string**|  | |
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
