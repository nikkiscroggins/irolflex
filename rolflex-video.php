<?php
/*
 * 	Plugin Name: Rolflex Videos
 * 	Plugin URI: nowmediagroup.tv
 * 	Version: 1
 * 	Author: Nikki
 * 	Description: Add shortcode for SVG video
*/


function svgs($atts = array(), $content = null, $tag){
	extract( shortcode_atts( array(
		'name' => 'myvalue',
	), $atts ) );



	switch( $name ){

		case 'man-front':
			$output = '<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 446 802.5" style="enable-background:new 0 0 446 802.5;" xml:space="preserve">
<style type="text/css">
	.st000{fill:#9C2884;stroke:#9C2884;stroke-miterlimit:10;}
	.st0011{fill:url(#quads_8_);}
	.st002{fill:url(#quads_9_);}
	.st003{fill:url(#quads_10_);}
	.st004{fill:url(#quads_11_);}
	.st005{fill:url(#quads_12_);}
	.st006{fill:url(#quads_13_);}
	.st007{fill:url(#quads_14_);}
	.st008{fill:url(#quads_15_);}
	.st009{fill:url(#tibs_6_);}
	.st00110{fill:url(#tibs_7_);}
	.st00111{fill:url(#tibs_8_);}
	.st00112{fill:url(#tibs_9_);}
	.st00113{fill:url(#tibs_10_);}
	.st00114{fill:url(#tibs_11_);}
	.st00115{fill:url(#f-inner_4_);}
	.st00116{fill:url(#f-inner_5_);}
	.st00117{fill:url(#f-inner_6_);}
	.st00118{fill:url(#f-inner_7_);}
	.st00119{fill:url(#knee_6_);}
	.st0020{fill:url(#knee_7_);}
	.st0021{fill:url(#knee_8_);}
	.st0022{fill:url(#knee_9_);}
	.st0023{fill:url(#knee_10_);}
	.st0024{fill:url(#knee_11_);}
	.st0025{fill:url(#f-arm_8_);}
	.st0026{fill:url(#f-arm_9_);}
	.st0027{fill:url(#f-arm_10_);}
	.st0028{fill:url(#f-arm_11_);}
	.st0029{fill:url(#f-arm_12_);}
	.st0030{fill:url(#f-arm_13_);}
	.st0031{fill:url(#f-arm_14_);}
	.st0032{fill:url(#f-arm_15_);}
	.st0033{fill:url(#SVGID_1_);}
	.st0034{fill:url(#SVGID_2_);}
	.st0035{fill:url(#SVGID_3_);}
	.st0036{fill:url(#SVGID_4_);}
	.st0037{fill:url(#SVGID_5_);}
	.st0038{fill:url(#SVGID_6_);}
	.st0039{fill:url(#SVGID_7_);}
	.st0040{fill:url(#SVGID_8_);}
	.st0041{fill:url(#abs_20_);}
	.st0042{fill:url(#abs_21_);}
	.st0043{fill:url(#abs_22_);}
	.st0044{fill:url(#abs_23_);}
	.st0045{fill:url(#abs_24_);}
	.st0046{fill:url(#abs_25_);}
	.st0047{fill:url(#abs_26_);}
	.st0048{fill:url(#abs_27_);}
	.st0049{fill:url(#abs_28_);}
	.st0050{fill:url(#abs_29_);}
	.st0051{fill:url(#abs_30_);}
	.st0052{fill:url(#abs_31_);}
	.st0053{fill:url(#abs_32_);}
	.st0054{fill:url(#abs_33_);}
	.st0055{fill:url(#abs_34_);}
	.st0056{fill:url(#abs_35_);}
	.st0057{fill:url(#abs_36_);}
	.st0058{fill:url(#abs_37_);}
	.st0059{fill:url(#abs_38_);}
	.st0060{fill:url(#abs_39_);}
	.st0061{fill:url(#f-foot_8_);}
	.st0062{fill:url(#f-foot_9_);}
	.st0063{fill:url(#f-foot_10_);}
	.st0064{fill:url(#f-foot_11_);}
	.st0065{fill:url(#f-foot_12_);}
	.st0066{fill:url(#f-foot_13_);}
	.st0067{fill:url(#f-foot_14_);}
	.st0068{fill:url(#f-foot_15_);}
	.st0069{fill:url(#chest00_9_);}
	.st0070{fill:url(#chest00_10_);}
	.st0071{fill:url(#chest00_11_);}
	.st0072{fill:url(#chest00_12_);}
	.st0073{fill:url(#chest00_13_);}
	.st0074{fill:url(#chest00_14_);}
	.st0075{fill:url(#chest00_15_);}
	.st0076{fill:url(#chest00_16_);}
	.st0077{fill:url(#chest00_17_);}
	.st0078{fill:url(#hands_12_);}
	.st0079{fill:url(#hands_13_);}
	.st0080{fill:url(#hands_14_);}
	.st0081{fill:url(#hands_15_);}
	.st0082{fill:url(#hands_16_);}
	.st0083{fill:url(#hands_17_);}
	.st0084{fill:url(#hands_18_);}
	.st0085{fill:url(#hands_19_);}
	.st0086{fill:url(#hands_20_);}
	.st0087{fill:url(#hands_21_);}
	.st0088{fill:url(#hands_22_);}
	.st0089{fill:url(#hands_23_);}
	.st0090{fill:url(#face_15_);}
	.st0091{fill:url(#face_16_);}
	.st0092{fill:url(#face_17_);}
	.st0093{fill:url(#face_18_);}
	.st0094{fill:url(#face_19_);}
	.st0095{fill:url(#face_20_);}
	.st0096{fill:url(#face_21_);}
	.st0097{fill:url(#face_22_);}
	.st0098{fill:url(#face_23_);}
	.st0099{fill:url(#face_24_);}
	.st001100{fill:url(#face_25_);}
	.st001101{fill:url(#face_26_);}
	.st001102{fill:url(#face_27_);}
	.st001103{fill:url(#face_28_);}
	.st001104{fill:url(#face_29_);}
</style>
<path class="st000" d="M399.1,373c-0.5-1.1,0.5-3,0.8-4.6c-0.1,0-0.1-0.1-0.2-0.1c0,0,0.1,0,0.1,0c-7.8-6.1-12.7-14.3-16.2-23.3
	c-3.5-8.8-6.5-17.8-9.7-26.7c-5.7-16.3-10.9-33.1-22.2-46.5c-6.3-7.4-8.3-14.7-8.2-24.1c0.2-13.3-0.3-27.3-7.5-38.6
	c-5.4-8.4-5.4-15.9-3.6-24.5c0.1-0.5,0.2-1,0.3-1.5c1.8-16.9-2.5-31.5-17.2-41.3c-6-4-12.8-6.9-19.4-10c-10.7-5-22-8.8-32-14.9
	c-14.7-8.9-18.1-20.2-7.6-36c3.1-4.7,4.4-10.7,6.2-16.1c0.3-0.9-0.4-3-1.2-3.4c-3.4-1.7-3-4.3-2.4-7.2c3.2-14.5-1.8-26.1-1.8-26.1
	c-0.9-2.4-2.3-4.8-3.7-6.9c-1.9-2.9-4.6-5.2-7.5-6.9c-12.2-7.4-25.3-7.5-38.3-2.6c-4.2,1.6-10.4,5-13.6,9.6c-3.8,5.3-5,11.4-5,11.4
	c-2.2,7.3-0.2,14.6,0.9,21.8c0.5,2.9,0.7,5-2.2,6.7c-0.9,0.5-1.8,2.7-1.4,3.6c2.1,5.7,3.9,11.7,6.9,16.9c8.4,14.4,7.1,23.5-6.8,34.2
	c-3.6,2.8-8,4.7-12.3,6.6c-9.6,4.3-19.3,8.2-28.8,12.4c-13,5.8-23.9,13.8-28,28.5c-2.7,10.1-1.8,20.1,0.6,30.1
	c0.9,3.7,0.8,6.3-1.8,9.5c-2.6,3.3-4.6,7.4-5.9,11.4c-4.5,13.7-5.2,28-5.2,42.3c0,2.4-0.5,5.5-2,7.2c-8.8,9.6-15.3,20.6-19.9,32.6
	c-6.2,15.9-11.7,32.1-17.8,48.1c-4.4,11.5-11,20.9-22.6,26.7c-9.5,4.7-18.3,10.8-27.4,16.3c-1.6,1-3,2.3-4.8,3.7
	c10,7.9,18.3,1.1,27.9-2.6c-1.2,2.7-1.7,4.2-2.4,5.5c-5.9,10.6-11.8,21.2-17.6,31.8c-0.7,1.3-1.2,3.7-0.5,4.3c0.9,0.9,3,0.7,4.5,0.8
	c0.7,0.1,1.5-0.2,2.2-0.2c2,9.2,2.3,9.4,8.4,5.4c5,6.3,6,6.1,10-1.2c0.6-1.1,1.3-2.2,2.1-3.4c2.5,4.5,4.6,4.8,7.7,1.2
	c1.9-2.2,3.9-4.8,4.7-7.5c4.7-14.8,9.5-29.7,13.4-44.8c1.6-6.2,4.2-11.3,8.3-16c10.2-11.4,20.6-22.6,30.1-34.6
	c12.6-15.8,21.7-33.4,23.6-54c0.1-1.5,1.4-2.9,2.1-4.3c3.3-6.5,7.2-12.7,9.8-19.4c2.4-6.1,3.3-12.8,4.8-19.3
	c6.4,18.6,12.4,37.2,16.4,56.3c2,9.8,1.2,20.6,0,30.7c-1,8.1-5.1,15.8-6.7,23.9c-6.9,35-9.5,70.4-8.3,106.1
	c0.9,28.2,5.5,55.8,12.1,83.2c4.2,17.3,7.9,34.2,2.3,52.3c-5.1,16.4-3.9,33.5,0.2,50.3c6.2,25,12.5,49.9,18.1,75.1
	c2.8,12.4,5,24.7,1.4,37.9c-1.9,6.9-3.5,13.2-7.3,19.3c-4.1,6.5-5.8,14.5-12,19.8c-0.9,0.8-1.5,3.2-1,3.9c0.7,1.1,2.7,1.8,4.1,1.8
	c8.8,0.2,17.6,0.1,26.4,0.1c16.5,0,16.4,0,15.5-16.6c-0.4-6.3-0.4-12.6-0.6-18.8c-0.2-4.6-0.3-9.2-0.7-13.7
	c-0.3-3.9-1.9-7.9-1.5-11.7c1.9-19.8,3.7-39.7,6.4-59.5c4-29.5,2.8-58.6-2.4-87.8c-1.8-9.8-3.4-19.7-3.7-29.6
	c-0.2-7.7,1.9-15.5,2.9-23.2c3.6-27.5,7.2-55,10.6-82.5c0.8-6.8,1.1-13.7,1.6-20.5c1.6,6.3,1.9,12.7,2.7,19
	c3.8,30.3,7.9,60.6,11.7,90.9c1,8,2.1,16.2,1.7,24.3c-0.4,8.2-2.4,16.4-4,24.6c-5.9,31.4-5.4,62.8-0.8,94.3c2.3,15.9,4,32,5.2,48.1
	c0.9,11.8-4,23.2-1.8,35.4c1.3,6.8-0.8,14.2-1,21.3c-0.1,3.7,1.6,6.2,6,6.2c12-0.1,24,0,35.9-0.1c1.3,0,3.5-0.6,3.8-1.4
	c0.4-1.3,0.2-3.6-0.8-4.4c-5.9-5.1-7.7-12.7-11.5-19c-4.1-6.6-6.2-13.2-7.7-20.8c-1.8-8.9-2.4-17.5-0.5-26.1
	c5.2-23.8,10.4-47.7,16.7-71.3c6.7-24.9,9.3-49.5,1.9-74.7c-1.5-5.1-2-10.9-1.2-16.2c1.6-10.6,4.2-21.1,6.6-31.7
	c6.7-29.6,11.1-59.5,11.2-89.8c0-15.1-0.9-30.2-2-45.3c-1.5-20.4-4.1-40.6-9.5-60.5c-2-7.3-4.6-14.7-5.2-22.1
	c-1.6-18.6,3.5-36.2,9.5-53.6c2.7-7.8,5.2-15.8,8.1-24.6c0.4,1.5,0.6,1.9,0.7,2.4c1.9,13.8,5.6,27,14.8,38c0.9,1.1,1.2,2.7,1.4,4.1
	c2.4,21.2,12.1,39.3,25.3,55.5c9.8,12.1,20.7,23.4,30.8,35.3c2.5,2.9,4.3,6.7,5.3,10.4c2.7,9.6,4.3,19.5,7.3,29
	c2.8,8.6,6.6,17,10.8,25c2.6,4.8,5.5,4.4,8.5,0c6.1,10.3,6.1,10.3,11.3,5.5c3.1,0,6.1,0.8,7.1-0.2c1.5-1.5,1.6-4.4,2-5.7
	c2.8-0.5,4.9-0.8,7-1.2c-0.5-2-0.6-4.2-1.5-5.9c-4.1-7.4-8.5-14.7-12.6-22.1c-2.3-4.1-4.3-8.3-7.1-13.8c5.9,2.4,10.2,4.5,14.7,5.8
	c4.8,1.4,9.5,1,13.9-4.2c-13.2-7.5-26-14.8-38.8-22.1c0,0,0.1,0,0.1,0.1l0,0"/>

<g id="Quadricepts_front">
	<linearGradient id="quads_8_" gradientUnits="userSpaceOnUse" x1="253.3118" y1="446.9176" x2="289.2153" y2="446.9176">
		<stop  offset="0" style="stop-color:#89BDCD"/>
		<stop  offset="1" style="stop-color:#588C9D"/>
	</linearGradient>
	<path id="quads_7_" class="st0011" d="M258.2,538c-1.2-1.1-1.5-4.5-1.8-5.8c-0.6-2.6-1-5.3-1.3-8c-0.6-5.3-0.5-10.6-0.8-16
		c-0.6-10.3-1-20.6-0.9-31c0.1-6.3,0.4-12.6,1-18.9c1.3-13,3.7-25.5,9.5-37.5c8.7-18,16.2-36.4,20-56.2c0.6-3.1,1-6.2,1.9-9.2
		c3.5,13.8,4.1,27.7,3.1,41.8c-1.9,25.8-8.6,50.3-18.7,74c-4.8,11.1-6.9,22.8-6.9,35c0,5.6,0,11.3-0.3,17c-0.2,2.9-0.1,5.9-0.5,8.8
		c-0.3,1.9-0.3,4.3-1.8,5.7c-0.5,0.4-1.1,0.7-1.8,0.6C258.5,538.3,258.3,538.2,258.2,538z"/>
	<linearGradient id="quads_9_" gradientUnits="userSpaceOnUse" x1="159.2249" y1="444.9239" x2="194.3066" y2="444.9239">
		<stop  offset="0" style="stop-color:#89BDCD"/>
		<stop  offset="1" style="stop-color:#588C9D"/>
	</linearGradient>
	<path id="quads_6_" class="st002" d="M188.1,537.8c-0.5-2.3-1.4-4.6-1.5-6.9c-0.4-9.3-0.6-18.6-0.8-27.9c-0.2-12.3-3.4-24-8.3-35.2
		c-11.6-26.2-18.3-53.4-18.2-82.1c0.1-10.7,1.6-21.4,2.5-32.1c-0.1-1,0.4-1.7,0.8-1.7c0.4,0,1,0.6,1.1,1.7c0.2,1.1,0.4,2.7,0.7,4.5
		c0.2,1.5,0.5,3,0.8,4.5c3.1,17.8,8.8,34.8,16.6,51c8.4,17.4,12.7,35.7,12.5,54.9c-0.2,20.9-1.2,41.8-2,62.7
		c-0.1,2.2-1.2,4.5-1.9,6.7C189.6,537.9,188.9,537.8,188.1,537.8z"/>
	<linearGradient id="quads_10_" gradientUnits="userSpaceOnUse" x1="155.684" y1="474.4464" x2="181.3077" y2="474.4464">
		<stop  offset="0" style="stop-color:#89BDCD"/>
		<stop  offset="1" style="stop-color:#588C9D"/>
	</linearGradient>
	<path id="quads_5_" class="st003" d="M177.2,536.5c-20.7-39.5-24.7-81.1-19.4-124.2c1.3,24.3,10.4,46.5,18.3,69
		c5.9,16.8,6.6,33.8,3.1,51c-0.2,1-0.5,1.9-0.8,2.9C178.3,535.5,178,535.7,177.2,536.5z"/>
	<linearGradient id="quads_11_" gradientUnits="userSpaceOnUse" x1="238.8596" y1="414.7054" x2="278.0845" y2="414.7054">
		<stop  offset="0" style="stop-color:#89BDCD"/>
		<stop  offset="1" style="stop-color:#588C9D"/>
	</linearGradient>
	<path id="quads_4_" class="st004" d="M238.9,477.8C238,431.3,250,389,278.1,351.6c-0.6,14.9-3.9,29.2-9,43.1
		c-7.5,20.3-15.5,40.3-23.1,60.5C243.3,462.6,241.3,470.2,238.9,477.8z"/>
	<linearGradient id="quads_12_" gradientUnits="userSpaceOnUse" x1="167.8986" y1="411.9916" x2="208.7751" y2="411.9916">
		<stop  offset="0" style="stop-color:#89BDCD"/>
		<stop  offset="1" style="stop-color:#588C9D"/>
	</linearGradient>
	<path id="quads_3_" class="st005" d="M170.7,350.2c0,0,0.1,0.1,0.1,0.1c4.3,7.4,9.3,14.5,13.3,22.1c2.1,3.8,4,7.6,5.8,11.6
		c1.8,3.9,3.5,7.8,5,11.8c1.5,4,2.9,8,4.2,12.1c1.3,4.1,2.4,8.2,3.4,12.3c1,4.2,1.9,8.4,2.6,12.6c0.8,4.3,1.4,8.5,1.9,12.8
		c0.5,4.3,0.9,8.7,1.2,13c0.2,2.7,0.3,5.5,0.4,8.3c0.1,2.7,0.4,5.7,0.1,8.4c-1.2-4-2.2-8.1-3.7-12c-3.6-9.4-16.9-38.4-25-65.1
		c-2.9-9.8-5.3-19.7-7.6-29.7c-0.7-2.9-1.3-5.8-2-8.8c-0.4-1.5-0.7-3-1.1-4.5c-0.4-1.4-0.5-3-1.1-4.4c-0.2-0.7-0.3-1.5,0.2-1.9
		C169.2,348.1,170.2,349.4,170.7,350.2z"/>
	<linearGradient id="quads_13_" gradientUnits="userSpaceOnUse" x1="266.8639" y1="477.5887" x2="292.6324" y2="477.5887">
		<stop  offset="0" style="stop-color:#89BDCD"/>
		<stop  offset="1" style="stop-color:#588C9D"/>
	</linearGradient>
	<path id="quads_2_" class="st006" d="M291.6,419.1c-0.5,1.8,0.4,4.8,0.5,6.7c0.1,2.3,0.3,4.7,0.3,7c0.2,4.7,0.2,9.3,0.2,14
		c-0.1,9.3-0.7,18.6-2,27.9c-2.5,18.8-7.7,37.2-15.9,54.4c-1.1,2.4-2.2,4.8-3.7,7c-4.5-13.3-5.8-28.2-2-41.8
		c3.6-12.9,8.8-25.4,12.7-38.3C285.6,443.5,288.5,430.8,291.6,419.1z"/>
	<linearGradient id="quads_14_" gradientUnits="userSpaceOnUse" x1="238.3469" y1="498.039" x2="250.8705" y2="498.039">
		<stop  offset="0" style="stop-color:#89BDCD"/>
		<stop  offset="1" style="stop-color:#588C9D"/>
	</linearGradient>
	<path id="quads_1_" class="st007" d="M250.5,458.9C250.6,459,250.6,459,250.5,458.9c0.4,0.6,0.4,1.3,0.3,1.9c-3,22,0,44.3-0.6,66.5
		c-0.1,2.2-0.2,4.4-0.5,6.6c-0.2,1.2-0.6,2.5-1.6,3.1c-1,0.6-2.3,0.4-3.3-0.3c-1-0.7-1.6-1.7-2.1-2.7c-1.4-2.9-2.1-6.2-2.6-9.4
		c-2.9-17.6-2.4-36.1,3.4-53c0.9-2.6,1.9-5.2,3.1-7.7C246.9,463.2,249.1,457.2,250.5,458.9z"/>
	<linearGradient id="quads_15_" gradientUnits="userSpaceOnUse" x1="198.0248" y1="497.8418" x2="210.6922" y2="497.8418">
		<stop  offset="0" style="stop-color:#89BDCD"/>
		<stop  offset="1" style="stop-color:#588C9D"/>
	</linearGradient>
	<path id="quads" class="st008" d="M200,458.5c1.1,1.2,2.1,4.4,2.2,4.9c1.2,3.3,2.2,6.7,3.2,10.1c1.9,6.7,3.2,13.6,4.1,20.5
		c1.3,9.8,1.6,19.8,0.1,29.5c-0.6,4-1.6,8.1-3.8,11.5c-0.9,1.4-2.5,2.9-4.1,2.5c-1.6-0.4-2.2-2.2-2.5-3.8
		c-2.2-10.7,0.1-21.8,0.8-32.8c0.8-12.7-0.4-25.4-1.7-38.1c-0.1-1.1-0.5-3.2,0.2-4.2C199,457.8,199.5,457.9,200,458.5z"/>
</g>
<g id="tibialis_Anterior">
	<linearGradient id="tibs_6_" gradientUnits="userSpaceOnUse" x1="196.4029" y1="651.6639" x2="213.4264" y2="651.6639">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>
	<path id="tibs_5_" class="st009" d="M205.8,592.9c1.9,6.8,4.3,13.5,5.5,20.3c3.8,21.5,1.9,43.1-1.3,64.5c-1.6,11-3.6,21.9-6.2,32.8
		c-6.2-39.2-12.8-78.3-0.1-117.3C204.4,593.1,205.1,593,205.8,592.9z"/>
	<linearGradient id="tibs_7_" gradientUnits="userSpaceOnUse" x1="234.6217" y1="651.5843" x2="251.2367" y2="651.5843">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>
	<path id="tibs_4_" class="st00110" d="M244.5,593.6c11.1,38.6,6.2,77.2,1.3,115.8c-0.5,0-1,0.1-1.5,0.1c-1.9-9.9-3.8-19.8-5.6-29.7
		c-3.1-17.7-5.1-35.5-3.7-53.5C235.9,614.8,238.3,603.8,244.5,593.6z"/>
	<linearGradient id="tibs_8_" gradientUnits="userSpaceOnUse" x1="247.7543" y1="650.3302" x2="278.1946" y2="650.3302">
		<stop  offset="0" style="stop-color:#89BDCD"/>
		<stop  offset="1" style="stop-color:#588C9D"/>
	</linearGradient>
	<path id="tibs_3_" class="st00111" d="M247.8,722.9c0.8-7.3,1.4-14.7,2.5-22c4.3-28.8,8.3-57.5,13.2-86.2c1.8-10.4,5.8-20.4,9-30.5
		c0.8-2.4,2.5-4.5,3.7-6.8c0.6,0.1,1.1,0.2,1.7,0.2c0,6.1,0.7,12.4-0.2,18.4c-1.3,8.8-2.9,17.8-6,26.2
		c-9.5,25.1-13.6,51.3-17.2,77.7c-1.1,7.8-2.8,15.5-4.2,23.3C249.4,723.1,248.6,723,247.8,722.9z"/>
	<linearGradient id="tibs_9_" gradientUnits="userSpaceOnUse" x1="169.9801" y1="648.7974" x2="200.054" y2="648.7974">
		<stop  offset="0" style="stop-color:#89BDCD"/>
		<stop  offset="1" style="stop-color:#588C9D"/>
	</linearGradient>
	<path id="tibs_2_" class="st00112" d="M172.7,576.3c1.7,3.3,4.1,6.5,4.9,10.1c4.1,16.4,8.8,32.8,11.5,49.4
		c4.4,27.1,7.4,54.3,10.9,81.5c0.2,1.2,0,2.5,0,3.8c-0.4,0.1-0.8,0.1-1.2,0.2c-1.7-9.4-3.8-18.7-5-28.2c-3.2-24.1-8-47.8-16.8-70.6
		c-5-13.1-8-26.8-6.7-41c0.1-1.6,0.5-3.2,0.7-4.8C171.6,576.6,172.1,576.5,172.7,576.3z"/>
	<linearGradient id="tibs_10_" gradientUnits="userSpaceOnUse" x1="167.652" y1="652.9246" x2="191.9467" y2="652.9246">
		<stop  offset="0" style="stop-color:#89BDCD"/>
		<stop  offset="1" style="stop-color:#588C9D"/>
	</linearGradient>
	<path id="tibs_1_" class="st00113" d="M191.9,704c-9.7-33.7-23.3-66.4-24.3-102.2C176.9,635.6,190.7,668.3,191.9,704z"/>
	<linearGradient id="tibs_11_" gradientUnits="userSpaceOnUse" x1="255.1867" y1="659.3546" x2="280.8194" y2="659.3546">
		<stop  offset="0" style="stop-color:#89BDCD"/>
		<stop  offset="1" style="stop-color:#588C9D"/>
	</linearGradient>
	<path id="tibs" class="st00114" d="M280.8,605.4c-2.4,37.5-16.8,72-25.6,107.9C256.4,675.6,269.7,640.7,280.8,605.4z"/>
</g>

<g id="Upper_arm_12_">
	<linearGradient id="f-arm_8_" gradientUnits="userSpaceOnUse" x1="299.1257" y1="226.7619" x2="337.2159" y2="226.7619">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>
	<path id="f-arm_7_" class="st0025" d="M299.1,204.6c0.6-12.2,5.4-14.9,16.4-9.2c9.5,4.9,14.4,13.4,16.5,23.2
		c2.2,10.5,3.4,21.3,4.8,32c0.4,3.4,1.4,7.5-2.5,9.4c-4.3,2.2-8.1-0.3-10.4-3.6c-7.3-10.5-14.6-20.9-20.9-32
		C300.1,219.5,299.1,205.5,299.1,204.6z"/>
	<linearGradient id="f-arm_9_" gradientUnits="userSpaceOnUse" x1="111.4323" y1="227.5" x2="148.7694" y2="227.5">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>
	<path id="f-arm_6_" class="st0026" d="M148.8,207.4c-0.1,9.4-2.8,18.2-7.6,26.1c-4.4,7.4-9.4,14.5-14.5,21.4
		c-1.7,2.3-4.1,4.4-6.7,5.8c-4.5,2.5-8.8,0.5-8.6-4.3c0.7-16.9,1.2-33.9,9.7-49.2c4.6-8.2,11.6-12.9,21.2-13.8
		c3.1-0.3,4.8,0.5,5.2,3.7C147.9,200.5,148.3,203.9,148.8,207.4z"/>
	<linearGradient id="f-arm_10_" gradientUnits="userSpaceOnUse" x1="128.4586" y1="166.4286" x2="167.7721" y2="166.4286">
		<stop  offset="0" style="stop-color:#89BDCD"/>
		<stop  offset="1" style="stop-color:#588C9D"/>
	</linearGradient>
	<path id="f-arm_5_" class="st0027" d="M128.5,189.6c5.5-22.3,19.1-37,39.3-46.4C168,157.7,150.4,187.7,128.5,189.6z"/>
	<linearGradient id="f-arm_11_" gradientUnits="userSpaceOnUse" x1="280.4949" y1="165.7869" x2="318.4866" y2="165.7869">
		<stop  offset="0" style="stop-color:#89BDCD"/>
		<stop  offset="1" style="stop-color:#588C9D"/>
	</linearGradient>
	<path id="f-arm_4_" class="st0028" d="M318.5,188.2c-16.7-1.6-35.4-23.8-38-44.7C297.1,147.1,318.5,171.4,318.5,188.2z"/>
	<linearGradient id="f-arm_12_" gradientUnits="userSpaceOnUse" x1="122.8126" y1="162.2002" x2="154.3468" y2="162.2002">
		<stop  offset="0" style="stop-color:#89BDCD"/>
		<stop  offset="1" style="stop-color:#588C9D"/>
	</linearGradient>
	<path id="f-arm_3_" class="st0029" d="M124.2,184.4c-5.8-25.4,6.4-47.3,30.1-44C140.2,152.6,128.2,165.8,124.2,184.4z"/>
	<linearGradient id="f-arm_13_" gradientUnits="userSpaceOnUse" x1="294.8888" y1="161.0323" x2="325.5268" y2="161.0323">
		<stop  offset="0" style="stop-color:#89BDCD"/>
		<stop  offset="1" style="stop-color:#588C9D"/>
	</linearGradient>
	<path id="f-arm_2_" class="st0030" d="M324.8,182.3c-4.8-18.2-16.3-30.7-29.9-41.9c10-2.8,21.3,2.5,26.3,11.9
		C325.2,160.2,326.5,170,324.8,182.3z"/>
	<linearGradient id="f-arm_14_" gradientUnits="userSpaceOnUse" x1="304.6117" y1="256.5943" x2="331.0615" y2="256.5943">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>
	<path id="f-arm_1_" class="st0031" d="M329.8,271c-10.7-1.2-24.1-16.6-25.2-28.7c8.8,9.2,17.6,18.3,26.4,27.5
		C330.6,270.2,330.2,270.6,329.8,271z"/>
	<linearGradient id="f-arm_15_" gradientUnits="userSpaceOnUse" x1="117.6769" y1="258.9325" x2="142.6659" y2="258.9325">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>
	<path id="f-arm" class="st0032" d="M142.7,247.1c-1.4,2.9-2.5,5.9-4.1,8.5c-4.1,6.5-9.2,12.2-16.4,15.4c-1.2,0.5-3,0-4.5,0
		c0.4-1.3,0.4-3.1,1.3-3.9c7.5-6.9,15.1-13.7,22.7-20.5C142,246.8,142.3,246.9,142.7,247.1z"/>
</g>


<g id="inner_thigh_unused_12_">

		<path id="quads_4_" class="st6" d="M238.9,477.8C238,431.3,250,389,278.1,351.6c-0.6,14.9-3.9,29.2-9,43.1
			c-7.5,20.3-15.5,40.3-23.1,60.5C243.3,462.6,241.3,470.2,238.9,477.8z"/>

            		<path id="quads_3_" class="st7" d="M170.7,350.2c0,0,0.1,0.1,0.1,0.1c4.3,7.4,9.3,14.5,13.3,22.1c2.1,3.8,4,7.6,5.8,11.6
			c1.8,3.9,3.5,7.8,5,11.8c1.5,4,2.9,8,4.2,12.1c1.3,4.1,2.4,8.2,3.4,12.3c1,4.2,1.9,8.4,2.6,12.6c0.8,4.3,1.4,8.5,1.9,12.8
			c0.5,4.3,0.9,8.7,1.2,13c0.2,2.7,0.3,5.5,0.4,8.3c0.1,2.7,0.4,5.7,0.1,8.4c-1.2-4-2.2-8.1-3.7-12c-3.6-9.4-16.9-38.4-25-65.1
			c-2.9-9.8-5.3-19.7-7.6-29.7c-0.7-2.9-1.3-5.8-2-8.8c-0.4-1.5-0.7-3-1.1-4.5c-0.4-1.4-0.5-3-1.1-4.4c-0.2-0.7-0.3-1.5,0.2-1.9
			C169.2,348.1,170.2,349.4,170.7,350.2z"/>
	<linearGradient id="f-inner_4_" gradientUnits="userSpaceOnUse" x1="235.399" y1="379.3441" x2="266.6926" y2="379.3441">
		<stop  offset="0" style="stop-color:#89BDCD"/>
		<stop  offset="1" style="stop-color:#588C9D"/>
	</linearGradient>

	<linearGradient id="f-inner_5_" gradientUnits="userSpaceOnUse" x1="179.3608" y1="377.6208" x2="213.2291" y2="377.6208">
		<stop  offset="0" style="stop-color:#89BDCD"/>
		<stop  offset="1" style="stop-color:#588C9D"/>
	</linearGradient>

	<linearGradient id="f-inner_6_" gradientUnits="userSpaceOnUse" x1="229.0379" y1="412.9737" x2="242.4491" y2="412.9737">
		<stop  offset="0" style="stop-color:#89BDCD"/>
		<stop  offset="1" style="stop-color:#588C9D"/>
	</linearGradient>
	<path id="f-inner_1_" class="st00117" d="M230,386.8c4.1,7.1,7.9,13.6,11.5,20.2c0.8,1.5,1.2,3.6,0.8,5.3c-1.5,7.8-3.3,15.6-5.1,23.3
		c-0.3,1.2-1.2,2.3-1.9,3.5C230.7,432.8,227.3,400,230,386.8z"/>
	<linearGradient id="f-inner_7_" gradientUnits="userSpaceOnUse" x1="206.6982" y1="413.8392" x2="218.3469" y2="413.8392">
		<stop  offset="0" style="stop-color:#89BDCD"/>
		<stop  offset="1" style="stop-color:#588C9D"/>
	</linearGradient>
	<path id="f-inner" class="st00118" d="M218.3,389.4c0,16.5,0.8,32.8-4,49c-0.9-0.6-1.4-0.8-1.5-1.2c-2.1-8.5-4.3-17-6.1-25.6
		c-0.4-1.8,0.7-4.3,1.7-6.1C211.6,400,215,394.7,218.3,389.4z"/>
</g>
<g id="knee_front">
	<linearGradient id="knee_6_" gradientUnits="userSpaceOnUse" x1="251.1589" y1="559.3043" x2="265.9319" y2="559.3043">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>
	<path id="knee_5_" class="st00119" d="M258.4,572.9c-1.4-3.4-2.9-6.8-4.1-10.3c-1.1-3.1-1.8-6.4-2.8-9.5c-1.2-3.9,0.7-6.1,4.3-6.9
		c7.9-1.8,11.5,1.6,9.6,9.5c-1.4,5.8-3.2,11.5-4.9,17.2C259.8,572.9,259.1,572.9,258.4,572.9z"/>
	<linearGradient id="knee_7_" gradientUnits="userSpaceOnUse" x1="181.5595" y1="559.8235" x2="196.0544" y2="559.8235">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>
	<path id="knee_4_" class="st0020" d="M188.1,572.9c-2.2-7.3-4.6-14.6-6.5-22c-0.3-1.1,1.7-3.9,2.8-4c3.5-0.3,7.3-0.4,10.4,1
		c1.3,0.6,1.6,5.1,1.1,7.6c-1.3,5.9-3.3,11.6-5,17.4C189.9,572.9,189,572.9,188.1,572.9z"/>
	<linearGradient id="knee_8_" gradientUnits="userSpaceOnUse" x1="243.8976" y1="572.6262" x2="254.9249" y2="572.6262">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>
	<path id="knee_3_" class="st0021" d="M254.4,599.5c-6.4-17.3-14.2-34.5-8.6-53.8C248.4,563.7,257.1,580.7,254.4,599.5z"/>
	<linearGradient id="knee_9_" gradientUnits="userSpaceOnUse" x1="192.9301" y1="575.0977" x2="204.4102" y2="575.0977">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>
	<path id="knee_2_" class="st0022" d="M203.1,548.5c3.6,10.2-0.7,36.4-8.8,53.2c-2.3-4.6-1.8-15.6,1.4-26.8
		C198.2,566,200.7,557.1,203.1,548.5z"/>
	<linearGradient id="knee_10_" gradientUnits="userSpaceOnUse" x1="169.3622" y1="557.3575" x2="184.5415" y2="557.3575">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>
	<path id="knee_1_" class="st0023" d="M170.7,536.2c5.1,13.8,12,27,13.8,42.3c-3.7-3.3-7.1-6.3-10.4-9.4c-0.6-0.5-1.1-1.3-1.2-2.1
		c-1.2-10.1-2.4-20.3-3.5-30.5C169.8,536.4,170.3,536.3,170.7,536.2z"/>
	<linearGradient id="knee_11_" gradientUnits="userSpaceOnUse" x1="263.5511" y1="560.7641" x2="278.4327" y2="560.7641">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>
	<path id="knee" class="st0024" d="M278.4,539.9c-1,9.7-1.9,18.4-2.9,27c-0.1,0.8-0.6,1.5-1.1,2.2c-3.7,4.4-7.4,8.7-10.7,12.6
		C262.3,575.7,270.6,550.3,278.4,539.9z"/>
</g>

<g id="Delts_12_">
	<path id="f-arm_6_" class="st0026" d="M148.8,207.4c-0.1,9.4-2.8,18.2-7.6,26.1c-4.4,7.4-9.4,14.5-14.5,21.4
		c-1.7,2.3-4.1,4.4-6.7,5.8c-4.5,2.5-8.8,0.5-8.6-4.3c0.7-16.9,1.2-33.9,9.7-49.2c4.6-8.2,11.6-12.9,21.2-13.8
		c3.1-0.3,4.8,0.5,5.2,3.7C147.9,200.5,148.3,203.9,148.8,207.4z"/>
	<path id="f-arm_5_" class="st0027" d="M128.5,189.6c5.5-22.3,19.1-37,39.3-46.4C168,157.7,150.4,187.7,128.5,189.6z"/>

    <path id="f-arm" class="st0032" d="M142.7,247.1c-1.4,2.9-2.5,5.9-4.1,8.5c-4.1,6.5-9.2,12.2-16.4,15.4c-1.2,0.5-3,0-4.5,0
		c0.4-1.3,0.4-3.1,1.3-3.9c7.5-6.9,15.1-13.7,22.7-20.5C142,246.8,142.3,246.9,142.7,247.1z"/>

    <path id="f-arm_3_" class="st0029" d="M124.2,184.4c-5.8-25.4,6.4-47.3,30.1-44C140.2,152.6,128.2,165.8,124.2,184.4z"/>

</g>

<g id="Hip_flexors_12_">
	<path id="abs_18_" class="st0042" d="M216.3,339c-0.1,7.3-0.1,14.7-0.2,22c0,2.4,0,4.8-0.5,7.1c-0.3,1.6-0.9,3.1-1.6,4.6
		c-0.1,0.1-0.2,0.3-0.3,0.4c-0.2,0.1-0.3,0-0.5-0.1c-3.6-1.6-6.8-4.4-9-7.7c-2.5-3.7-2.8-7.5-4.1-11.6c-1.6-5.1-3-10.3-4.3-15.5
		c-2.1-8.5-3.4-17.3-4.9-26c-1.7-9.8,2.2-13.1,11.7-9.7c2.5,0.9,4.9,2.1,7.2,3.4c2.9,1.6,5.4,4,6.4,7.3c1.2,4,0.4,8.9,0.3,13.1
		C216.3,330.5,216.3,334.7,216.3,339z"/>
    <path id="abs_19_" class="st0041" d="M232.1,314.8c0-2.1,1-5.2,2.5-6c5.1-2.9,10.5-5.8,16.1-7c5.7-1.3,8.1,1.7,7.1,7.5
		c-1.8,11.5-3.9,22.9-6,34.3c-0.9,4.7-2.1,9.4-3.4,14c-0.8,2.9-1.9,5.7-3.3,8.3c-1.9,3.5-4.4,7.9-8.8,6.3c-2.1-0.7-3.4-5.5-3.9-8.7
		C231.5,358.1,231.9,325.5,232.1,314.8z"/>

    <path id="f-inner_3_" class="st17" d="M243.8,403.3c-0.1-0.1-0.2-0.2-0.3-0.2c-3.3-3.3-6.3-7-7.6-11.4c-0.9-3.3-0.8-7,0.9-10.1
			c1.9-3.5,5.7-6,8.6-8.6c6.9-6.1,14-12.1,21.2-17.8c-8,13.4-16,27.1-20.1,42.2c-0.4,1.7-0.8,3.4-1.2,5c-0.1,0.5-0.4,1.2-0.9,1.2
			C244.2,403.6,244,403.5,243.8,403.3z"/>
	<path id="f-inner_2_" class="st18" d="M180.2,352.7c0.6,0.3,1.2,1.1,1.4,1.2c1.2,1.1,2.4,2.3,3.6,3.4c2.3,2.2,4.7,4.3,7,6.5
			c4.7,4.3,9.4,8.6,14,12.9c3.2,3,7.3,5.3,7,10.3c-0.1,2.2-1,4.3-2.1,6.2c-1.8,3.4-3.7,6.6-6,9.6c-1.2-4.3-2.9-8.5-4.6-12.6
			c-1.7-4.2-3.7-8.4-5.8-12.4c-4.2-8-9.1-15.7-14.3-23c-0.2-0.3-0.5-0.6-0.7-1c-0.2-0.2-0.3-0.5-0.3-0.8
			C179.4,352.4,179.8,352.4,180.2,352.7z"/>
</g>



<g id="forearm_front">
	<linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="64.7257" y1="312.5581" x2="111.2716" y2="312.5581">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>
	<path class="st0033" d="M111.3,268.9c-0.7,9.1-2.2,18.2-6.7,26.1c-6,10.7-13.3,20.6-19.8,31c-6.1,9.7-11.9,19.5-17.8,29.3
		c-0.4,0.6-0.8,1.2-1.2,1.9c-0.4-0.2-0.7-0.4-1.1-0.5c2.6-6,5.5-11.9,7.9-18c5.4-13.9,10.3-28,16.1-41.8c3.1-7.3,7.2-14.2,11.6-20.8
		c2.3-3.4,6.3-5.6,9.5-8.3C110.2,268.2,110.8,268.6,111.3,268.9z"/>
	<linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="336.6669" y1="304.1976" x2="376.9027" y2="304.1976">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>
	<path class="st0034" d="M376.3,342.5c-8.3-11.3-16.7-22.5-24.8-33.9c-7.1-10-12.1-21-14-33.2c-0.4-2.8-0.6-5.6-0.8-8.3
		c0.4-0.4,0.9-0.8,1.3-1.2c4,3.6,9.3,6.6,11.7,11.1c5.8,10.5,10.5,21.7,15.2,32.8c4.2,9.9,7.6,20.2,11.4,30.3
		c0.3,0.7,0.4,1.5,0.6,2.2C376.7,342.3,376.5,342.4,376.3,342.5z"/>
	<linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="69.781" y1="334.9673" x2="109.3125" y2="334.9673">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>
	<path class="st0035" d="M69.8,359.7c2.4-15.9,28.7-49.2,39.5-49.5c-0.7,2-0.9,4-2,5.5c-4.9,6.7-9.8,13.4-15.2,19.6
		C85.1,343.5,77.6,351.2,69.8,359.7z"/>
	<linearGradient id="SVGID_4_" gradientUnits="userSpaceOnUse" x1="337.6916" y1="332.1818" x2="378.2265" y2="332.1818">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>
	<path class="st0036" d="M376.7,356.5c-12.7-16-30.9-27.5-39-47.2c0.3-0.5,0.6-0.9,0.9-1.4c2,0.8,4.4,1.2,5.8,2.5
		c5.8,5.6,12.1,11,16.8,17.4c6.3,8.7,11.4,18.4,17,27.7C377.7,355.9,377.2,356.2,376.7,356.5z"/>
	<linearGradient id="SVGID_5_" gradientUnits="userSpaceOnUse" x1="319.2368" y1="289.4423" x2="343.628" y2="289.4423">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>
	<path class="st0037" d="M343.6,305.1c-9-1.7-16.7-2.7-21.7-9.5c-5-6.8-1.9-13.8,0.6-21.8C332.7,282.2,339.2,291.9,343.6,305.1z"/>
	<linearGradient id="SVGID_6_" gradientUnits="userSpaceOnUse" x1="104.1562" y1="290.1884" x2="128.6365" y2="290.1884">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>
	<path class="st0038" d="M104.2,305.6c4.3-12.3,11.2-22.4,21.8-30.8c3.1,6.8,3.6,13,0.6,19.2C123.8,299.7,112.5,305.5,104.2,305.6z"/>
	<linearGradient id="SVGID_7_" gradientUnits="userSpaceOnUse" x1="329.649" y1="332.7379" x2="369.6748" y2="332.7379">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>
	<path class="st0039" d="M369.7,356.2c-16.5-12.9-31.5-26.7-40-46.9C343.2,325.2,356.4,340.6,369.7,356.2z"/>
	<linearGradient id="SVGID_8_" gradientUnits="userSpaceOnUse" x1="73.7502" y1="337.8811" x2="115.8313" y2="337.8811">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>
	<path class="st0040" d="M115.8,315.6c-10.5,19.1-25.1,33-42.1,44.6C87.5,345.6,101.3,331,115.8,315.6z"/>
</g>

<g id="abdominals">
	<path id="abs_16_" class="st0044" d="M275.4,280.9c0,6.2-0.4,11.8,0.1,17.4c1.1,12.7,2.3,25.4,4,38.1c0.4,3.3-0.2,5.1-2.9,6.4
		c-1.3,0.6-2.8,1.2-4.2,1.5c-7.3,1.5-9.3,0.1-9.7-7.3c-0.8-14.5-0.6-28.9,2.9-43.1C267.3,286.3,269.7,283.2,275.4,280.9z"/>
    <path id="abs_17_" class="st0043" d="M173.8,280.8c4.6,0.8,6.8,4.4,7.8,8.1c1.8,6.8,3.6,13.8,4.1,20.9c0.7,9.9,0.3,19.9,0.4,29.8
		c0,3.5-1.6,5.3-5.1,5c-2.6-0.2-5.3-0.2-7.8-1c-3.8-1.2-5.3-3.4-4.1-7.9c4.4-16,4.5-32.4,4.1-48.9c0-1.5-0.1-3,0-4.5
		C173.2,281.9,173.5,281.5,173.8,280.8z"/>
        	<path id="abs_14_" class="st0046" d="M203.8,298.3c-5.4-0.1-11.9-0.3-15.7-4.5c-1.5-1.7-2.5-3.9-3-6.1c-0.4-1.8-0.6-3.6-0.2-5.4
		c1-5,6.6-6.6,11-7.7c5.1-1.3,10.5-1.5,15.8-0.8c6.5,0.8,4.7,9.3,4.7,14c0,3.2,0.8,7.4-2.5,9.4c-2.6,1.5-6,1.2-8.9,1.2
		C204.6,298.3,204.2,298.3,203.8,298.3z"/>

    <path id="abs_15_" class="st0045" d="M242.3,297.7c-11.1,0-11.1,0-10.9-11.3c0-1,0-2,0.1-3c0.2-10,0.7-10.8,10.8-10.1
		c5.4,0.3,10.7,2,15.9,3.5c4.4,1.2,5.7,4.4,4.7,8.9c-2.2,9.6-4.1,11.4-14,12C246.6,297.8,244.5,297.7,242.3,297.7z"/>

        	<path id="abs_8_" class="st0052" d="M163.8,250.2c4.4,3.6,9.4,6.6,12.7,10.9c2.2,2.8,1.8,7.5,2.7,11.5
		C169.7,272.6,163.1,261.8,163.8,250.2z"/>

    <linearGradient id="abs_39_" gradientUnits="userSpaceOnUse" x1="231.5777" y1="253.8232" x2="262.1096" y2="253.8232">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>

    <path id="abs_11_" class="st0049" d="M263.1,242.1c-8.3-6.6-17.9-8.3-28-8.3c-0.7,0-1.9-0.1-1.9-0.3c-0.6-4.4-1.4-8.8-1.5-13.3
		c0-1.1,2-3.2,3.2-3.4C251,214.5,265.1,228.2,263.1,242.1z"/>

    <path id="abs_7_" class="st0053" d="M283.6,252.6c0.6,10.8-4.7,19.4-12.9,21.3c-3.6-6.8-2.2-11.3,4.1-14.8
		C277.8,257.3,280.4,255,283.6,252.6z"/>

    <path id="abs_12_" class="st0048" d="M185.2,244.5c-2.9-10.6,5.1-22.9,16.5-26.3c0.9-0.3,1.9-0.4,2.9-0.6
		c10.9-2.2,14.9,2.2,11.5,12.8c-0.4,1.1-1.9,2.2-3.2,2.5c-2.9,0.7-5.9,0.9-8.8,1.5C196.9,235.8,190.1,238.1,185.2,244.5z"/>

    <path id="abs" class="st0060" d="M231.6,241.7c8.3-0.5,15.4,0.7,21.9,4.6c6.1,3.7,8.7,9.3,8.6,16.3c0,2.3-0.5,3.6-3.4,3.4
		c-7.7-0.7-15.5-1-23.3-1.7c-1.3-0.1-3.6-1.7-3.6-2.7C231.5,255.2,231.6,248.7,231.6,241.7z"/>

    <path id="abs_13_" class="st0047" d="M186.8,266.9c-3.1-11.9,4.1-21.9,17.6-24.1c10.9-1.8,12-0.9,12,10.1c0,10.3,0,10.1-10,11.1
		C199.8,264.6,193.3,265.9,186.8,266.9z"/>

</g>


<g id="abdominal_unused">
	<linearGradient id="abs_20_" gradientUnits="userSpaceOnUse" x1="231.8015" y1="336.9543" x2="258.0566" y2="336.9543">
		<stop  offset="0" style="stop-color:#89BDCD"/>
		<stop  offset="1" style="stop-color:#588C9D"/>
	</linearGradient>

	<linearGradient id="abs_21_" gradientUnits="userSpaceOnUse" x1="190.3628" y1="337.121" x2="216.6274" y2="337.121">
		<stop  offset="0" style="stop-color:#89BDCD"/>
		<stop  offset="1" style="stop-color:#588C9D"/>
	</linearGradient>

	<linearGradient id="abs_22_" gradientUnits="userSpaceOnUse" x1="168.6524" y1="312.7281" x2="186.0828" y2="312.7281">
		<stop  offset="0" style="stop-color:#89BDCD"/>
		<stop  offset="1" style="stop-color:#588C9D"/>
	</linearGradient>

	<linearGradient id="abs_23_" gradientUnits="userSpaceOnUse" x1="262.1833" y1="312.8584" x2="279.5547" y2="312.8584">
		<stop  offset="0" style="stop-color:#89BDCD"/>
		<stop  offset="1" style="stop-color:#588C9D"/>
	</linearGradient>

	<linearGradient id="abs_24_" gradientUnits="userSpaceOnUse" x1="231.3945" y1="285.4691" x2="263.175" y2="285.4691">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>

	<linearGradient id="abs_25_" gradientUnits="userSpaceOnUse" x1="184.6923" y1="285.9048" x2="216.5992" y2="285.9048">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>

	<linearGradient id="abs_26_" gradientUnits="userSpaceOnUse" x1="186.0442" y1="254.4905" x2="216.3408" y2="254.4905">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>

	<linearGradient id="abs_27_" gradientUnits="userSpaceOnUse" x1="184.5776" y1="230.7537" x2="217.2513" y2="230.7537">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>
	<linearGradient id="abs_28_" gradientUnits="userSpaceOnUse" x1="231.7692" y1="229.3371" x2="263.3053" y2="229.3371">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>

	<linearGradient id="abs_29_" gradientUnits="userSpaceOnUse" x1="286.4829" y1="223.899" x2="294.922" y2="223.899">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>
	<path id="abs_10_" class="st0050" d="M288.4,245.4c-3.6-15.2-2.4-29.7,6.3-42.9C294.5,217,297.2,232,288.4,245.4z"/>
	<linearGradient id="abs_30_" gradientUnits="userSpaceOnUse" x1="152.3939" y1="222.1161" x2="162.0076" y2="222.1161">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>
	<path id="abs_9_" class="st0051" d="M153.2,200.3c7.2,6.2,11.4,32,7.1,43.7C154.5,240.1,150.7,216.7,153.2,200.3z"/>
	<linearGradient id="abs_31_" gradientUnits="userSpaceOnUse" x1="163.7628" y1="261.4385" x2="179.1889" y2="261.4385">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>

	<linearGradient id="abs_32_" gradientUnits="userSpaceOnUse" x1="268.778" y1="263.2312" x2="283.688" y2="263.2312">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>

	<linearGradient id="abs_33_" gradientUnits="userSpaceOnUse" x1="166.1722" y1="214.7196" x2="182.4355" y2="214.7196">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>
	<path id="abs_6_" class="st0054" d="M166.2,207.5c5.3,2.8,10.5,5.3,15.4,8.1c0.8,0.5,1.1,2.9,0.7,4.1c-0.3,1-1.9,2.3-3,2.3
		C172.4,222.1,166.2,215.5,166.2,207.5z"/>
	<linearGradient id="abs_34_" gradientUnits="userSpaceOnUse" x1="264.3068" y1="215.6042" x2="281.6448" y2="215.6042">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>
	<path id="abs_5_" class="st0055" d="M281.6,208.8c-0.5,8.5-6.2,13.4-15,13.7c-0.7-1.9-1.5-3.9-2.4-6.3
		C269.9,213.7,275.5,211.4,281.6,208.8z"/>
	<linearGradient id="abs_35_" gradientUnits="userSpaceOnUse" x1="166.6171" y1="244.4844" x2="177.1448" y2="244.4844">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>
	<path id="abs_4_" class="st0056" d="M176.5,253.8c-7.1-3.2-10.7-10.2-9.7-18.5C175.9,238.9,178.5,243.8,176.5,253.8z"/>
	<linearGradient id="abs_36_" gradientUnits="userSpaceOnUse" x1="270.7265" y1="246.4284" x2="280.9906" y2="246.4284">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>
	<path id="abs_3_" class="st0057" d="M270.7,255.7c0.2-2.1,0.8-4.1,0.5-5.9c-1.3-7.5,2.1-11.4,9.2-12.6
		C282.6,243.6,278.5,251.8,270.7,255.7z"/>
	<linearGradient id="abs_37_" gradientUnits="userSpaceOnUse" x1="166.6559" y1="228.5706" x2="179.0965" y2="228.5706">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>
	<path id="abs_2_" class="st0058" d="M166.7,221.4c2.3,1.2,4.2,2.4,6.1,3.2c7.3,3.2,7.3,3.2,4.7,11.2
		C170.7,235.1,166.2,229.3,166.7,221.4z"/>
	<linearGradient id="abs_38_" gradientUnits="userSpaceOnUse" x1="268.3531" y1="229.8627" x2="281.006" y2="229.8627">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>
	<path id="abs_1_" class="st0059" d="M270.8,236.5c-0.8-3.2-1.5-6.1-2.4-9.5c4.2-1.3,8.4-2.6,12.6-3.9
		C281.4,230.2,277.9,234.9,270.8,236.5z"/>

</g>
<g id="Feet_Front">
	<linearGradient id="f-foot_8_" gradientUnits="userSpaceOnUse" x1="240.5573" y1="759.3589" x2="261.7989" y2="759.3589">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>
	<path id="f-foot_7_" class="st0061" d="M256.6,739.1c4,6.2,4.9,13.2,5.2,20.3c0,0.8-0.6,1.9-1.3,2.5c-6.3,6.1-12.8,12.1-18.8,17.8
		C237.6,766.3,245.2,744.2,256.6,739.1z"/>
	<linearGradient id="f-foot_9_" gradientUnits="userSpaceOnUse" x1="186.2802" y1="757.8016" x2="207.1535" y2="757.8016">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>
	<path id="f-foot_6_" class="st0062" d="M192.1,738.2c11.2,5.5,16.8,26.5,14.6,39.1c-6.2-4.9-12.8-9.9-19.2-15.2
		c-0.9-0.7-1.2-2.6-1.2-4C186.1,751,188.4,744.6,192.1,738.2z"/>
	<linearGradient id="f-foot_10_" gradientUnits="userSpaceOnUse" x1="252.8287" y1="781.1149" x2="278.4122" y2="781.1149">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>
	<path id="f-foot_5_" class="st0063" d="M278.4,793.1c-7.3,0-13.6,0-19.8,0c-0.6,0-1.5-0.2-1.8-0.6c-3.7-4.6-4.7-10.3-3.3-15.5
		c0.8-3,4.8-5.3,7.6-7.6c0.6-0.5,2.6-0.2,3.1,0.4C269.7,776.3,275.2,782.9,278.4,793.1z"/>
	<linearGradient id="f-foot_11_" gradientUnits="userSpaceOnUse" x1="171.9085" y1="781.0502" x2="196.9939" y2="781.0502">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>
	<path id="f-foot_4_" class="st0064" d="M171.9,792.8c3.7-9.3,9.4-16.4,15.6-22.9c2.1-2.1,9.1,2.1,9.4,6.4c0.3,4.7-0.7,9.4-1.5,14.1
		c-0.2,1-2.1,2.3-3.3,2.3C185.7,792.9,179.2,792.8,171.9,792.8z"/>
	<linearGradient id="f-foot_12_" gradientUnits="userSpaceOnUse" x1="241.3314" y1="738.2819" x2="253.6221" y2="738.2819">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>
	<path id="f-foot_3_" class="st0065" d="M242.7,750.7c-3-9-0.7-19.7,5-23.3c1.6-1,3.9-1.1,5.8-1.6c0,2.2,0.2,4.3,0,6.5
		c-0.1,0.9-0.9,1.8-1.4,2.6C249.1,740,246.1,745.1,242.7,750.7z"/>
	<linearGradient id="f-foot_13_" gradientUnits="userSpaceOnUse" x1="193.929" y1="736.7619" x2="206.4196" y2="736.7619">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>
	<path id="f-foot_2_" class="st0066" d="M205.4,748c-3.9-5.7-7.8-11.1-11.1-16.7c-0.8-1.4,0.1-3.9,0.2-5.9c1.8,0.3,3.9,0.2,5.4,1.1
		C205.7,730.1,207.9,738.8,205.4,748z"/>
	<linearGradient id="f-foot_14_" gradientUnits="userSpaceOnUse" x1="243.6263" y1="786.1716" x2="252.0439" y2="786.1716">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>
	<path id="f-foot_1_" class="st0067" d="M243.6,792c0.8-3.7,1.4-7.3,2.5-10.9c0.3-0.9,1.9-1.8,2.9-1.9c0.5-0.1,1.7,1.5,1.9,2.5
		c0.6,2.7,1.3,5.6,1.1,8.3c-0.5,5.4-4.7,2-7,3.2C244.5,792.8,244.1,792.4,243.6,792z"/>
	<linearGradient id="f-foot_15_" gradientUnits="userSpaceOnUse" x1="198.3985" y1="786.1595" x2="206.3665" y2="786.1595">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>
	<path id="f-foot" class="st0068" d="M198.4,792.8c0.7-4.1,1.2-7.8,2-11.4c0.2-0.9,1.6-2.4,2.1-2.3c1,0.2,2.5,1.3,2.7,2.2
		c0.7,2.8,1.5,5.9,1.1,8.7C205.5,794.8,201.6,792.7,198.4,792.8z"/>
</g>
<g id="front_unused">
	<linearGradient id="chest00_9_" gradientUnits="userSpaceOnUse" x1="228.5941" y1="179.7285" x2="294.2719" y2="179.7285">
		<stop  offset="0" style="stop-color:#89BDCD"/>
		<stop  offset="1" style="stop-color:#588C9D"/>
	</linearGradient>
	<path id="chest00_8_" class="st0069" d="M228.6,173.9c0.2-1.4,0.1-2.9,0.2-4.3c0.1-2.9,0.3-5.9,0.6-8.8c0.2-2.1,1.5-4.5,3-5.8
		c13.3-11.9,30.4-11.2,42.9,1.4c9.5,9.6,14.2,22,18.8,34.3c0.4,1-0.4,3.4-1.4,4c-12.7,7.2-25.2,15-39.9,17.7
		c-7.2,1.3-14.4,0.9-20.5-3.5c-1.5-1.1-2.9-3.4-3-5.1c-0.2-4.3-0.2-8.5-0.1-12.8C229.2,188.7,228.5,175.2,228.6,173.9z"/>
	<linearGradient id="chest00_10_" gradientUnits="userSpaceOnUse" x1="154.0901" y1="179.9266" x2="219.2312" y2="179.9266">
		<stop  offset="0" style="stop-color:#89BDCD"/>
		<stop  offset="1" style="stop-color:#588C9D"/>
	</linearGradient>
	<path id="chest00_7_" class="st0070" d="M219.2,183c0,6.5-0.1,13,0.1,19.4c0.1,3.5-1.4,5.5-4.3,7.1c-6.3,3.6-13,3.8-19.8,2.6
		c-14.5-2.7-26.9-10.2-39.6-17.1c-0.9-0.5-1.6-2.9-1.2-3.9c4.5-11.7,9.2-23.2,17.6-32.7c11.5-13.1,27.9-15,42-4.8
		c3.5,2.5,5.5,5.5,5.4,10C219.1,170,219.2,176.5,219.2,183z"/>
	<linearGradient id="chest00_11_" gradientUnits="userSpaceOnUse" x1="230.094" y1="130.374" x2="248.3829" y2="130.374">
		<stop  offset="0" style="stop-color:#89BDCD"/>
		<stop  offset="1" style="stop-color:#588C9D"/>
	</linearGradient>
	<path id="chest00_6_" class="st0071" d="M248,107.6c2.7,18.5-8.6,31.1-16.1,45.6C226.2,140.4,234.8,121.5,248,107.6z"/>
	<linearGradient id="chest00_12_" gradientUnits="userSpaceOnUse" x1="201.957" y1="130.0471" x2="218.7083" y2="130.0471">
		<stop  offset="0" style="stop-color:#89BDCD"/>
		<stop  offset="1" style="stop-color:#588C9D"/>
	</linearGradient>
	<path id="chest00_5_" class="st0072" d="M202.4,109.1c9.8,12.3,18.9,24.8,15.6,41.9C209.8,138.2,199.7,126.1,202.4,109.1z"/>
	<linearGradient id="chest00_13_" gradientUnits="userSpaceOnUse" x1="167.9748" y1="133.4184" x2="197.3961" y2="133.4184">
		<stop  offset="0" style="stop-color:#89BDCD"/>
		<stop  offset="1" style="stop-color:#588C9D"/>
	</linearGradient>
	<path id="chest00_4_" class="st0073" d="M168,139.4c9-9,21.5-15,29.4-14.4C196,137.5,183.4,146.4,168,139.4z"/>
	<linearGradient id="chest00_14_" gradientUnits="userSpaceOnUse" x1="251.9399" y1="132.4005" x2="280.3315" y2="132.4005">
		<stop  offset="0" style="stop-color:#89BDCD"/>
		<stop  offset="1" style="stop-color:#588C9D"/>
	</linearGradient>
	<path id="chest00_3_" class="st0074" d="M280.3,138.3c-13.8,7.3-27-1.7-28.4-14.4C263.3,125.1,271.9,131,280.3,138.3z"/>
	<linearGradient id="chest00_15_" gradientUnits="userSpaceOnUse" x1="215.3301" y1="124.2289" x2="232.0768" y2="124.2289">
		<stop  offset="0" style="stop-color:#89BDCD"/>
		<stop  offset="1" style="stop-color:#588C9D"/>
	</linearGradient>
	<path id="chest00_2_" class="st0075" d="M223.1,136.6c-2.5-8.1-5.1-16.1-7.7-24.6c5.2,0,12.8-0.1,16.7-0.1c0,0-4.6,17.7-6.5,24.7
		C224.7,136.6,223.9,136.6,223.1,136.6z"/>
	<linearGradient id="chest00_16_" gradientUnits="userSpaceOnUse" x1="241.9004" y1="140.0098" x2="257.5503" y2="140.0098">
		<stop  offset="0" style="stop-color:#89BDCD"/>
		<stop  offset="1" style="stop-color:#588C9D"/>
	</linearGradient>
	<path id="chest00_1_" class="st0076" d="M256.5,142.4c-4.3,0.6-8.7,1.3-14.6,2.1c2.7-3.8,4.5-8.5,7-9c2.5-0.4,5.7,3.6,8.6,5.6
		C257.2,141.5,256.9,142,256.5,142.4z"/>
	<linearGradient id="chest00_17_" gradientUnits="userSpaceOnUse" x1="191.9993" y1="140.0357" x2="207.2521" y2="140.0357">
		<stop  offset="0" style="stop-color:#89BDCD"/>
		<stop  offset="1" style="stop-color:#588C9D"/>
	</linearGradient>
	<path id="chest00" class="st0077" d="M192,141.8c3-2.1,5.7-5.1,9-5.8c1.3-0.3,3.7,4.7,6.3,8.1c-5.8-0.5-10.1-0.9-14.4-1.3
		C192.6,142.5,192.3,142.1,192,141.8z"/>
</g>
<g id="hands_front">
	<linearGradient id="hands_12_" gradientUnits="userSpaceOnUse" x1="380.6404" y1="389.1358" x2="408.1477" y2="389.1358">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>
	<path id="hands_11_" class="st0078" d="M389.5,411.3c-2.1-5-4.7-9.8-6.1-14.9c-1.5-5.4-2.1-11.1-2.5-16.7c-0.7-8-0.3-8.3,7.2-11.4
		c0.9-0.4,1.8-0.8,3.2-1.3c5.3,7.7,10.6,15.3,15.7,23c1.9,2.9,1.7,5-1.7,7.3c-3.8,2.6-6.7,6.4-9.9,9.7c-1.4,1.4-2.6,2.9-3.9,4.3
		C390.8,411.3,390.1,411.3,389.5,411.3z"/>
	<linearGradient id="hands_13_" gradientUnits="userSpaceOnUse" x1="39.5154" y1="389.6562" x2="66.8457" y2="389.6562">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>
	<path id="hands_10_" class="st0079" d="M57.6,411.2c-2.8-3-5.1-6-7.8-8.6c-2-1.9-4.1-4.1-6.6-5.1c-4.8-1.8-4.1-4.6-2-7.6
		c5-7,10.1-13.9,15.4-20.7c0.6-0.7,2.6-1.3,3.2-0.8c2.6,1.8,7,3.9,7.1,6c0.2,12.2-0.4,24.6-7.5,35.4C59.1,410,58.6,410.3,57.6,411.2
		z"/>
	<linearGradient id="hands_14_" gradientUnits="userSpaceOnUse" x1="398.9018" y1="378.9009" x2="427.2825" y2="378.9009">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>
	<path id="hands_9_" class="st0080" d="M399.7,368.3c9.2,6.5,18.4,13,27.6,19.5c-0.1,0.4-0.2,0.8-0.2,1.2c-1.7,0.2-3.4,0.8-5,0.4
		c-10-2.1-18.4-6.8-23-16.4c-0.5-1.1,0.5-3.1,0.8-4.6C399.9,368.4,399.7,368.3,399.7,368.3z"/>
	<linearGradient id="hands_15_" gradientUnits="userSpaceOnUse" x1="19.0922" y1="379.5635" x2="49.037" y2="379.5635">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>
	<path id="hands_8_" class="st0081" d="M49,369.6c-1,12.1-19,23.4-29.9,18.7C29.3,382,38.9,376,49,369.6z"/>
	<linearGradient id="hands_16_" gradientUnits="userSpaceOnUse" x1="404.6579" y1="418.6253" x2="420.5271" y2="418.6253">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>
	<path id="hands_7_" class="st0082" d="M416.3,418.8c1.3,5.1,2.7,10.3,4.2,16.2c-9-3.8-18.6-25.5-15.1-32.7
		c3.5,5.2,6.9,10.1,10.2,15.1C415.8,417.8,416,418.3,416.3,418.8z"/>
	<linearGradient id="hands_17_" gradientUnits="userSpaceOnUse" x1="28.3291" y1="420.0011" x2="43.6402" y2="420.0011">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>
	<path id="hands_6_" class="st0083" d="M32.3,420.1c3.4-5.2,6.7-10.4,10.1-15.6c0.3,0.1,0.7,0.2,1,0.3c0,1.7,0.5,3.6-0.1,5
		c-3.2,7.7-6.6,15.4-10.2,22.9c-0.6,1.3-2.8,1.8-4.2,2.7c-0.2-1.8-0.9-3.7-0.5-5.4c0.8-3.2,2.3-6.2,3.5-9.2
		C32.1,420.7,32.2,420.4,32.3,420.1z"/>
	<linearGradient id="hands_18_" gradientUnits="userSpaceOnUse" x1="409.7747" y1="413.3166" x2="426.3263" y2="413.3166">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>
	<path id="hands_5_" class="st0084" d="M416.3,418.8c-0.2-0.5-0.5-0.9-0.7-1.4c-1.9-5.8-3.9-11.7-5.8-17.5c0.7-0.3,1.4-0.7,2.1-1
		c2,3,4.2,5.9,6,9.1c2.9,5.2,5.7,10.5,8.3,15.8c0.5,1-0.4,2.6-0.6,4c-1.2-0.3-2.9-0.2-3.6-1C419.9,424.3,418.2,421.5,416.3,418.8z"
		/>
	<linearGradient id="hands_19_" gradientUnits="userSpaceOnUse" x1="21.8771" y1="414.7434" x2="37.6239" y2="414.7434">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>
	<path id="hands_4_" class="st0085" d="M32.3,420.1c-0.1,0.3-0.3,0.5-0.4,0.8c-1.4,1.8-2.5,4-4.2,5.4c-1.3,1.1-3.4,1.4-5.2,2
		c-0.2-1.8-1.1-4.1-0.4-5.4c4.2-7.4,8.9-14.5,13.4-21.8c0.7,0.3,1.4,0.6,2.1,0.9C35.9,408.1,34.1,414.1,32.3,420.1z"/>
	<linearGradient id="hands_20_" gradientUnits="userSpaceOnUse" x1="398.8492" y1="422.3441" x2="411.4011" y2="422.3441">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>
	<path id="hands_3_" class="st0086" d="M411.4,437.4c-7.5-5-14.5-22.2-12.1-30.1C404.6,417.2,410.6,425.5,411.4,437.4z"/>
	<linearGradient id="hands_21_" gradientUnits="userSpaceOnUse" x1="37.689" y1="424.8622" x2="49.289" y2="424.8622">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>
	<path id="hands_2_" class="st0087" d="M49.3,411c-0.6,10.2-3.9,19.3-10.8,27.7C35.5,433.4,41.2,419.2,49.3,411z"/>
	<linearGradient id="hands_22_" gradientUnits="userSpaceOnUse" x1="47.9563" y1="424.3489" x2="56.7523" y2="424.3489">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>
	<path id="hands_1_" class="st0088" d="M56.8,417c-1.5,4.5-2.9,9-4.6,13.4c-0.4,1.1-2.2,1.6-3.3,2.4c-0.3-1.3-1.2-2.9-0.8-3.9
		c1.9-4.4,4.3-8.7,6.4-13C55.3,416.3,56,416.6,56.8,417z"/>
	<linearGradient id="hands_23_" gradientUnits="userSpaceOnUse" x1="392.5776" y1="422.7495" x2="400.0746" y2="422.7495">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>
	<path id="hands" class="st0089" d="M393.1,413.7c3.5,6.2,7.3,11.1,7,18.1C395.1,430,391.2,420.5,393.1,413.7z"/>
</g>
<g id="face_unused">
	<linearGradient id="face_15_" gradientUnits="userSpaceOnUse" x1="190.0721" y1="41.4612" x2="200.5292" y2="41.4612">
		<stop  offset="0" style="stop-color:#89BDCD"/>
		<stop  offset="1" style="stop-color:#588C9D"/>
	</linearGradient>
	<path id="face_14_" class="st0090" d="M191.3,31.4c0.9-1.9,1.8-3.7,2.8-5.9c4.9,3.2,6.2,7.5,6.4,12.2c0.1,3.5-0.6,7-0.4,10.4
		c0.4,5.8-1.6,9.1-8.1,9.3c-2-8.2-2.7-16.5-1.2-25C191,32.1,191.2,31.8,191.3,31.4z"/>
	<linearGradient id="face_16_" gradientUnits="userSpaceOnUse" x1="201.5182" y1="32.2307" x2="247.095" y2="32.2307">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>
	<path id="face_13_" class="st0091" d="M203.2,43.5c-0.6-6.5-1.2-12.6-1.6-18.6c-0.5-6.6,2.7-10.2,9.6-11.5c5.4-1,9.1,1.4,11.2,7.5
		c0.6,1.8,1.1,3.7,1.9,6.4c0.8-2.8,1.3-4.8,2-6.8c2.1-5.9,5.9-8.1,11.4-7c6.8,1.4,9.9,4.9,9.4,11.2c-0.2,3.1-1.1,6.2-1.4,9.3
		c-0.2,2.9-0.1,5.9-0.1,9.3c-8.3-1.3-15.9-0.4-21.2,8C218.9,43.3,211.4,41.5,203.2,43.5z"/>
	<linearGradient id="face_17_" gradientUnits="userSpaceOnUse" x1="208.0769" y1="91.1438" x2="241.1191" y2="91.1438">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>
	<path id="face_12_" class="st0092" d="M219.8,106c-7.1-0.1-10.4-2.5-10.9-8.1c-0.5-6.4-2.6-9.4,3.5-14c3.4-2.5,7.1-4.7,10.6-7
		c0.4-0.3,0.9-0.6,1.4-0.5c0.4,0,0.8,0.3,1.2,0.5c3.7,2.4,7.6,4.7,11.4,7.1c1.8,1.1,3.1,2.8,3.9,4.6c0.6,1.3,0.3,3.2-0.7,9.4
		c-0.8,5.6-5.6,7.9-10.3,8.1c6-5.7,6.1-15.1,6.9-19.9c-2-1.4-3.8-1.6-7.5-3.7c-4.7-2.7-5.1-2.7-10.3,0.1c-2,1.1-4,2.3-6.2,3.5
		C213.6,92.8,212.1,100.3,219.8,106z"/>
	<linearGradient id="face_18_" gradientUnits="userSpaceOnUse" x1="214.3976" y1="97.1235" x2="234.9616" y2="97.1235">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>
	<path id="face_11_" class="st0093" d="M214.4,87.6c7.5,0.6,13.7,0.6,20.6,0c-1.5,4.7-2.4,10.1-4.8,14.7c-3.1,5.9-8.9,5.7-11.7-0.4
		C216.5,97.9,215.5,91.6,214.4,87.6z"/>
	<linearGradient id="face_19_" gradientUnits="userSpaceOnUse" x1="248.9779" y1="41.9739" x2="258.6213" y2="41.9739">
		<stop  offset="0" style="stop-color:#89BDCD"/>
		<stop  offset="1" style="stop-color:#588C9D"/>
	</linearGradient>
	<path id="face_10_" class="st0094" d="M256.4,28.1c3,9.7,3,19.4,0.2,29.2c-7.3-1-7.4-1-7.6-8.2c-0.1-5.2-0.1-10.5,0.2-15.7
		c0.1-1.7,1.3-3.3,2.2-4.9c1.5-2.6,3.2-2.2,5-0.2C256.5,28.3,256.4,28.1,256.4,28.1z"/>
	<linearGradient id="face_20_" gradientUnits="userSpaceOnUse" x1="236.2862" y1="70.3063" x2="254.2193" y2="70.3063">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>
	<path id="face_9_" class="st0095" d="M254.2,62.5c-0.2,2.1,0.7,6.3-1,8.6c-3.6,5-9.6,6.4-16.8,6.9C242.8,72.4,248.4,67.6,254.2,62.5z
		"/>
	<linearGradient id="face_21_" gradientUnits="userSpaceOnUse" x1="194.2047" y1="69.563" x2="212.3866" y2="69.563">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>
	<path id="face_8_" class="st0096" d="M211.5,78c-6.1,0.3-11.5-1.9-15.6-6.4c-2.5-2.8-1.7-6.7-0.3-10.6c6,5.5,11.4,10.6,16.8,15.7
		C212.1,77.2,211.8,77.6,211.5,78z"/>
	<linearGradient id="face_22_" gradientUnits="userSpaceOnUse" x1="229.8909" y1="66.9492" x2="248.0585" y2="66.9492">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>
	<path id="face_7_" class="st0097" d="M234.6,75.3c-1.8-1.9-3.1-3.3-4.7-5.1c6.1-3.9,11.7-7.4,18.2-11.5
		C246.4,67.1,239.6,70,234.6,75.3z"/>
	<linearGradient id="face_23_" gradientUnits="userSpaceOnUse" x1="200.1264" y1="67.6825" x2="218.849" y2="67.6825">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>
	<path id="face_6_" class="st0098" d="M213.8,75.8c-4.8-5.2-9.2-9.9-13.7-14.7c0.5-0.5,0.9-1,1.4-1.5c5.6,3.5,11.3,6.9,17.3,10.6
		C217.2,72.1,215.8,73.6,213.8,75.8z"/>
	<linearGradient id="face_24_" gradientUnits="userSpaceOnUse" x1="229.7578" y1="60.8574" x2="244.5449" y2="60.8574">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>
	<path id="face_5_" class="st0099" d="M229.8,66.3c0-4.8,0-8.2,0-11c4.9,0.7,9.8,1.5,14.8,2.2C240.3,60.1,235.6,62.9,229.8,66.3z"/>
	<linearGradient id="face_25_" gradientUnits="userSpaceOnUse" x1="204.9728" y1="60.8385" x2="219.6543" y2="60.8385">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>
	<path id="face_4_" class="st001100" d="M219.7,55.1c-0.3,3.5-0.6,7-1,11.4c-5.1-3.1-9.4-5.6-13.6-8.2
		C209.9,57.2,214.4,56.3,219.7,55.1z"/>
	<linearGradient id="face_26_" gradientUnits="userSpaceOnUse" x1="204.6862" y1="52.3083" x2="215.4205" y2="52.3083">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>
	<path id="face_3_" class="st001101" d="M204.7,51.8c4-2.6,7.5-3.4,10.7,0.4C211.4,56,209.5,56,204.7,51.8z"/>
	<linearGradient id="face_27_" gradientUnits="userSpaceOnUse" x1="233.6656" y1="52.2724" x2="244.144" y2="52.2724">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>
	<path id="face_2_" class="st001102" d="M244.1,51.8c-3.4,4.1-6.8,3.8-10.5,1.2C236.3,48.8,238.4,48.5,244.1,51.8z"/>
	<linearGradient id="face_28_" gradientUnits="userSpaceOnUse" x1="243.0558" y1="77.3698" x2="252.9874" y2="77.3698">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>
	<path id="face_1_" class="st001103" d="M253,80.1c-3.7,0-6.6,0-9.5,0c-0.1-0.2-0.3-0.5-0.4-0.7c3.1-1.5,6.3-3,9.9-4.8
		C253,77,253,78.6,253,80.1z"/>
	<linearGradient id="face_29_" gradientUnits="userSpaceOnUse" x1="194.5287" y1="77.5678" x2="205.3324" y2="77.5678">
		<stop  offset="0" style="stop-color:#F7F8F9"/>
		<stop  offset="1" style="stop-color:#878787"/>
	</linearGradient>
	<path id="face" class="st001104" d="M205,80.4c-3.2,0-6.4,0-10.1,0c-0.1-1.6-0.2-3.1-0.3-5.6c4.2,1.9,7.5,3.4,10.8,5
		C205.2,79.9,205.1,80.2,205,80.4z"/>
</g>
</svg>';
			break;

		case 'man-back':
			$output = '<?xml version="1.0" encoding="utf-8"?>
<!-- Generator: Adobe Illustrator 19.2.1, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 446 802.5" style="enable-background:new 0 0 446 802.5;" xml:space="preserve">
<style type="text/css">
	.st0{display:none;}
	.st1{display:inline;fill:#9C2884;stroke:#9C2884;stroke-miterlimit:10;}
	.st2{display:inline;}
	.st3{fill:url(#quads_8_);}
	.st4{fill:url(#quads_9_);}
	.st5{fill:url(#quads_10_);}
	.st6{fill:url(#quads_11_);}
	.st7{fill:url(#quads_12_);}
	.st8{fill:url(#quads_13_);}
	.st9{fill:url(#quads_14_);}
	.st10{fill:url(#quads_15_);}
	.st11{fill:url(#tibs_6_);}
	.st12{fill:url(#tibs_7_);}
	.st13{fill:url(#tibs_8_);}
	.st14{fill:url(#tibs_9_);}
	.st15{fill:url(#tibs_10_);}
	.st16{fill:url(#tibs_11_);}
	.st17{fill:url(#f-inner_4_);}
	.st18{fill:url(#f-inner_5_);}
	.st19{fill:url(#f-inner_6_);}
	.st20{fill:url(#f-inner_7_);}
	.st21{fill:url(#knee_6_);}
	.st22{fill:url(#knee_7_);}
	.st23{fill:url(#knee_8_);}
	.st24{fill:url(#knee_9_);}
	.st25{fill:url(#knee_10_);}
	.st26{fill:url(#knee_11_);}
	.st27{fill:url(#f-arm_8_);}
	.st28{fill:url(#f-arm_9_);}
	.st29{fill:url(#f-arm_10_);}
	.st30{fill:url(#f-arm_11_);}
	.st31{fill:url(#f-arm_12_);}
	.st32{fill:url(#f-arm_13_);}
	.st33{fill:url(#f-arm_14_);}
	.st34{fill:url(#f-arm_15_);}
	.st35{fill:url(#SVGID_1_);}
	.st36{fill:url(#SVGID_2_);}
	.st37{fill:url(#SVGID_3_);}
	.st38{fill:url(#SVGID_4_);}
	.st39{fill:url(#SVGID_5_);}
	.st40{fill:url(#SVGID_6_);}
	.st41{fill:url(#SVGID_7_);}
	.st42{fill:url(#SVGID_8_);}
	.st43{fill:url(#abs_20_);}
	.st44{fill:url(#abs_21_);}
	.st45{fill:url(#abs_22_);}
	.st46{fill:url(#abs_23_);}
	.st47{fill:url(#abs_24_);}
	.st48{fill:url(#abs_25_);}
	.st49{fill:url(#abs_26_);}
	.st50{fill:url(#abs_27_);}
	.st51{fill:url(#abs_28_);}
	.st52{fill:url(#abs_29_);}
	.st53{fill:url(#abs_30_);}
	.st54{fill:url(#abs_31_);}
	.st55{fill:url(#abs_32_);}
	.st56{fill:url(#abs_33_);}
	.st57{fill:url(#abs_34_);}
	.st58{fill:url(#abs_35_);}
	.st59{fill:url(#abs_36_);}
	.st60{fill:url(#abs_37_);}
	.st61{fill:url(#abs_38_);}
	.st62{fill:url(#abs_39_);}
	.st63{fill:url(#f-foot_8_);}
	.st64{fill:url(#f-foot_9_);}
	.st65{fill:url(#f-foot_10_);}
	.st66{fill:url(#f-foot_11_);}
	.st67{fill:url(#f-foot_12_);}
	.st68{fill:url(#f-foot_13_);}
	.st69{fill:url(#f-foot_14_);}
	.st70{fill:url(#f-foot_15_);}
	.st71{fill:url(#chest_9_);}
	.st72{fill:url(#chest_10_);}
	.st73{fill:url(#chest_11_);}
	.st74{fill:url(#chest_12_);}
	.st75{fill:url(#chest_13_);}
	.st76{fill:url(#chest_14_);}
	.st77{fill:url(#chest_15_);}
	.st78{fill:url(#chest_16_);}
	.st79{fill:url(#chest_17_);}
	.st80{fill:url(#hands_12_);}
	.st81{fill:url(#hands_13_);}
	.st82{fill:url(#hands_14_);}
	.st83{fill:url(#hands_15_);}
	.st84{fill:url(#hands_16_);}
	.st85{fill:url(#hands_17_);}
	.st86{fill:url(#hands_18_);}
	.st87{fill:url(#hands_19_);}
	.st88{fill:url(#hands_20_);}
	.st89{fill:url(#hands_21_);}
	.st90{fill:url(#hands_22_);}
	.st91{fill:url(#hands_23_);}
	.st92{fill:url(#face_15_);}
	.st93{fill:url(#face_16_);}
	.st94{fill:url(#face_17_);}
	.st95{fill:url(#face_18_);}
	.st96{fill:url(#face_19_);}
	.st97{fill:url(#face_20_);}
	.st98{fill:url(#face_21_);}
	.st99{fill:url(#face_22_);}
	.st100{fill:url(#face_23_);}
	.st101{fill:url(#face_24_);}
	.st102{fill:url(#face_25_);}
	.st103{fill:url(#face_26_);}
	.st104{fill:url(#face_27_);}
	.st105{fill:url(#face_28_);}
	.st106{fill:url(#face_29_);}
	.st107{fill:#9E2986;}
	.st108{fill:url(#glute_2_);}
	.st109{fill:url(#glute_3_);}
	.st110{fill:url(#back_8_);}
	.st111{fill:url(#back_9_);}
	.st112{fill:url(#back_10_);}
	.st113{fill:url(#back_11_);}
	.st114{fill:url(#back_12_);}
	.st115{fill:url(#back_13_);}
	.st116{fill:url(#back_14_);}
	.st117{fill:url(#back_15_);}
	.st118{fill:url(#back_head_2_);}
	.st119{fill:url(#back_head_3_);}
	.st120{fill:url(#foot_2_);}
	.st121{fill:url(#foot_3_);}
	.st122{fill:url(#calf_8_);}
	.st123{fill:url(#calf_9_);}
	.st124{fill:url(#calf_10_);}
	.st125{fill:url(#calf_11_);}
	.st126{fill:url(#calf_12_);}
	.st127{fill:url(#calf_13_);}
	.st128{fill:url(#calf_14_);}
	.st129{fill:url(#calf_15_);}
	.st130{fill:url(#hip_4_);}
	.st131{fill:url(#hip_5_);}
	.st132{fill:url(#hip_6_);}
	.st133{fill:url(#hip_7_);}
	.st134{fill:url(#ham_10_);}
	.st135{fill:url(#ham_11_);}
	.st136{fill:url(#ham_12_);}
	.st137{fill:url(#ham_13_);}
	.st138{fill:url(#ham_14_);}
	.st139{fill:url(#ham_15_);}
	.st140{fill:url(#ham_16_);}
	.st141{fill:url(#ham_17_);}
	.st142{fill:url(#ham_18_);}
	.st143{fill:url(#ham_19_);}
	.st144{fill:url(#tendon_8_);}
	.st145{fill:url(#tendon_9_);}
	.st146{fill:url(#tendon_10_);}
	.st147{fill:url(#tendon_11_);}
	.st148{fill:url(#tendon_12_);}
	.st149{fill:url(#tendon_13_);}
	.st150{fill:url(#tendon_14_);}
	.st151{fill:url(#tendon_15_);}
	.st152{fill:url(#tricep_bicep_8_);}
	.st153{fill:url(#tricep_bicep_9_);}
	.st154{fill:url(#tricep_bicep_10_);}
	.st155{fill:url(#tricep_bicep_11_);}
	.st156{fill:url(#tricep_bicep_12_);}
	.st157{fill:url(#tricep_bicep_13_);}
	.st158{fill:url(#tricep_bicep_14_);}
	.st159{fill:url(#tricep_bicep_15_);}
	.st160{fill:url(#neck_6_);}
	.st161{fill:url(#neck_7_);}
	.st162{fill:url(#neck_8_);}
	.st163{fill:url(#neck_9_);}
	.st164{fill:url(#neck_10_);}
	.st165{fill:url(#neck_11_);}
	.st166{fill:url(#hand_12_);}
	.st167{fill:url(#hand_13_);}
	.st168{fill:url(#hand_14_);}
	.st169{fill:url(#hand_15_);}
	.st170{fill:url(#hand_16_);}
	.st171{fill:url(#hand_17_);}
	.st172{fill:url(#hand_18_);}
	.st173{fill:url(#hand_19_);}
	.st174{fill:url(#hand_20_);}
	.st175{fill:url(#hand_21_);}
	.st176{fill:url(#hand_22_);}
	.st177{fill:url(#hand_23_);}
</style>

<g id="Glutes_Outward">
	<linearGradient id="glute_2_" gradientUnits="userSpaceOnUse" x1="157.6979" y1="443.0987" x2="220.7283" y2="443.0987" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#8BBECD"/>
				<stop  offset="1" style="stop-color:#598E9E"/>
			</linearGradient>


				<linearGradient id="glute_3_" gradientUnits="userSpaceOnUse" x1="225.8552" y1="443.7526" x2="288.5081" y2="443.7526" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#8BBECD"/>
				<stop  offset="1" style="stop-color:#598E9E"/>
			</linearGradient>
</g>

<g id="Layer_1" class="st0">
	<path class="st1" d="M399.1,373c-0.5-1.1,0.5-3,0.8-4.6c-0.1,0-0.1-0.1-0.2-0.1c0,0,0.1,0,0.1,0c-7.8-6.1-12.7-14.3-16.2-23.3
		c-3.5-8.8-6.5-17.8-9.7-26.7c-5.7-16.3-10.9-33.1-22.2-46.5c-6.3-7.4-8.3-14.7-8.2-24.1c0.2-13.3-0.3-27.3-7.5-38.6
		c-5.4-8.4-5.4-15.9-3.6-24.5c0.1-0.5,0.2-1,0.3-1.5c1.8-16.9-2.5-31.5-17.2-41.3c-6-4-12.8-6.9-19.4-10c-10.7-5-22-8.8-32-14.9
		c-14.7-8.9-18.1-20.2-7.6-36c3.1-4.7,4.4-10.7,6.2-16.1c0.3-0.9-0.4-3-1.2-3.4c-3.4-1.7-3-4.3-2.4-7.2c3.2-14.5-1.8-26.1-1.8-26.1
		c-0.9-2.4-2.3-4.8-3.7-6.9c-1.9-2.9-4.6-5.2-7.5-6.9c-12.2-7.4-25.3-7.5-38.3-2.6c-4.2,1.6-10.4,5-13.6,9.6c-3.8,5.3-5,11.4-5,11.4
		c-2.2,7.3-0.2,14.6,0.9,21.8c0.5,2.9,0.7,5-2.2,6.7c-0.9,0.5-1.8,2.7-1.4,3.6c2.1,5.7,3.9,11.7,6.9,16.9
		c8.4,14.4,7.1,23.5-6.8,34.2c-3.6,2.8-8,4.7-12.3,6.6c-9.6,4.3-19.3,8.2-28.8,12.4c-13,5.8-23.9,13.8-28,28.5
		c-2.7,10.1-1.8,20.1,0.6,30.1c0.9,3.7,0.8,6.3-1.8,9.5c-2.6,3.3-4.6,7.4-5.9,11.4c-4.5,13.7-5.2,28-5.2,42.3c0,2.4-0.5,5.5-2,7.2
		c-8.8,9.6-15.3,20.6-19.9,32.6c-6.2,15.9-11.7,32.1-17.8,48.1c-4.4,11.5-11,20.9-22.6,26.7c-9.5,4.7-18.3,10.8-27.4,16.3
		c-1.6,1-3,2.3-4.8,3.7c10,7.9,18.3,1.1,27.9-2.6c-1.2,2.7-1.7,4.2-2.4,5.5c-5.9,10.6-11.8,21.2-17.6,31.8c-0.7,1.3-1.2,3.7-0.5,4.3
		c0.9,0.9,3,0.7,4.5,0.8c0.7,0.1,1.5-0.2,2.2-0.2c2,9.2,2.3,9.4,8.4,5.4c5,6.3,6,6.1,10-1.2c0.6-1.1,1.3-2.2,2.1-3.4
		c2.5,4.5,4.6,4.8,7.7,1.2c1.9-2.2,3.9-4.8,4.7-7.5c4.7-14.8,9.5-29.7,13.4-44.8c1.6-6.2,4.2-11.3,8.3-16
		c10.2-11.4,20.6-22.6,30.1-34.6c12.6-15.8,21.7-33.4,23.6-54c0.1-1.5,1.4-2.9,2.1-4.3c3.3-6.5,7.2-12.7,9.8-19.4
		c2.4-6.1,3.3-12.8,4.8-19.3c6.4,18.6,12.4,37.2,16.4,56.3c2,9.8,1.2,20.6,0,30.7c-1,8.1-5.1,15.8-6.7,23.9
		c-6.9,35-9.5,70.4-8.3,106.1c0.9,28.2,5.5,55.8,12.1,83.2c4.2,17.3,7.9,34.2,2.3,52.3c-5.1,16.4-3.9,33.5,0.2,50.3
		c6.2,25,12.5,49.9,18.1,75.1c2.8,12.4,5,24.7,1.4,37.9c-1.9,6.9-3.5,13.2-7.3,19.3c-4.1,6.5-5.8,14.5-12,19.8
		c-0.9,0.8-1.5,3.2-1,3.9c0.7,1.1,2.7,1.8,4.1,1.8c8.8,0.2,17.6,0.1,26.4,0.1c16.5,0,16.4,0,15.5-16.6c-0.4-6.3-0.4-12.6-0.6-18.8
		c-0.2-4.6-0.3-9.2-0.7-13.7c-0.3-3.9-1.9-7.9-1.5-11.7c1.9-19.8,3.7-39.7,6.4-59.5c4-29.5,2.8-58.6-2.4-87.8
		c-1.8-9.8-3.4-19.7-3.7-29.6c-0.2-7.7,1.9-15.5,2.9-23.2c3.6-27.5,7.2-55,10.6-82.5c0.8-6.8,1.1-13.7,1.6-20.5
		c1.6,6.3,1.9,12.7,2.7,19c3.8,30.3,7.9,60.6,11.7,90.9c1,8,2.1,16.2,1.7,24.3c-0.4,8.2-2.4,16.4-4,24.6
		c-5.9,31.4-5.4,62.8-0.8,94.3c2.3,15.9,4,32,5.2,48.1c0.9,11.8-4,23.2-1.8,35.4c1.3,6.8-0.8,14.2-1,21.3c-0.1,3.7,1.6,6.2,6,6.2
		c12-0.1,24,0,35.9-0.1c1.3,0,3.5-0.6,3.8-1.4c0.4-1.3,0.2-3.6-0.8-4.4c-5.9-5.1-7.7-12.7-11.5-19c-4.1-6.6-6.2-13.2-7.7-20.8
		c-1.8-8.9-2.4-17.5-0.5-26.1c5.2-23.8,10.4-47.7,16.7-71.3c6.7-24.9,9.3-49.5,1.9-74.7c-1.5-5.1-2-10.9-1.2-16.2
		c1.6-10.6,4.2-21.1,6.6-31.7c6.7-29.6,11.1-59.5,11.2-89.8c0-15.1-0.9-30.2-2-45.3c-1.5-20.4-4.1-40.6-9.5-60.5
		c-2-7.3-4.6-14.7-5.2-22.1c-1.6-18.6,3.5-36.2,9.5-53.6c2.7-7.8,5.2-15.8,8.1-24.6c0.4,1.5,0.6,1.9,0.7,2.4
		c1.9,13.8,5.6,27,14.8,38c0.9,1.1,1.2,2.7,1.4,4.1c2.4,21.2,12.1,39.3,25.3,55.5c9.8,12.1,20.7,23.4,30.8,35.3
		c2.5,2.9,4.3,6.7,5.3,10.4c2.7,9.6,4.3,19.5,7.3,29c2.8,8.6,6.6,17,10.8,25c2.6,4.8,5.5,4.4,8.5,0c6.1,10.3,6.1,10.3,11.3,5.5
		c3.1,0,6.1,0.8,7.1-0.2c1.5-1.5,1.6-4.4,2-5.7c2.8-0.5,4.9-0.8,7-1.2c-0.5-2-0.6-4.2-1.5-5.9c-4.1-7.4-8.5-14.7-12.6-22.1
		c-2.3-4.1-4.3-8.3-7.1-13.8c5.9,2.4,10.2,4.5,14.7,5.8c4.8,1.4,9.5,1,13.9-4.2c-13.2-7.5-26-14.8-38.8-22.1c0,0,0.1,0,0.1,0.1l0,0"
		/>
	<g id="Quadricepts_front" class="st2">
		<linearGradient id="quads_8_" gradientUnits="userSpaceOnUse" x1="253.3118" y1="446.9176" x2="289.2153" y2="446.9176">
			<stop  offset="0" style="stop-color:#89BDCD"/>
			<stop  offset="1" style="stop-color:#588C9D"/>
		</linearGradient>
		<path id="quads_7_" class="st3" d="M258.2,538c-1.2-1.1-1.5-4.5-1.8-5.8c-0.6-2.6-1-5.3-1.3-8c-0.6-5.3-0.5-10.6-0.8-16
			c-0.6-10.3-1-20.6-0.9-31c0.1-6.3,0.4-12.6,1-18.9c1.3-13,3.7-25.5,9.5-37.5c8.7-18,16.2-36.4,20-56.2c0.6-3.1,1-6.2,1.9-9.2
			c3.5,13.8,4.1,27.7,3.1,41.8c-1.9,25.8-8.6,50.3-18.7,74c-4.8,11.1-6.9,22.8-6.9,35c0,5.6,0,11.3-0.3,17c-0.2,2.9-0.1,5.9-0.5,8.8
			c-0.3,1.9-0.3,4.3-1.8,5.7c-0.5,0.4-1.1,0.7-1.8,0.6C258.5,538.3,258.3,538.2,258.2,538z"/>
		<linearGradient id="quads_9_" gradientUnits="userSpaceOnUse" x1="159.2249" y1="444.9239" x2="194.3066" y2="444.9239">
			<stop  offset="0" style="stop-color:#89BDCD"/>
			<stop  offset="1" style="stop-color:#588C9D"/>
		</linearGradient>
		<path id="quads_6_" class="st4" d="M188.1,537.8c-0.5-2.3-1.4-4.6-1.5-6.9c-0.4-9.3-0.6-18.6-0.8-27.9c-0.2-12.3-3.4-24-8.3-35.2
			c-11.6-26.2-18.3-53.4-18.2-82.1c0.1-10.7,1.6-21.4,2.5-32.1c-0.1-1,0.4-1.7,0.8-1.7c0.4,0,1,0.6,1.1,1.7c0.2,1.1,0.4,2.7,0.7,4.5
			c0.2,1.5,0.5,3,0.8,4.5c3.1,17.8,8.8,34.8,16.6,51c8.4,17.4,12.7,35.7,12.5,54.9c-0.2,20.9-1.2,41.8-2,62.7
			c-0.1,2.2-1.2,4.5-1.9,6.7C189.6,537.9,188.9,537.8,188.1,537.8z"/>
		<linearGradient id="quads_10_" gradientUnits="userSpaceOnUse" x1="155.684" y1="474.4464" x2="181.3077" y2="474.4464">
			<stop  offset="0" style="stop-color:#89BDCD"/>
			<stop  offset="1" style="stop-color:#588C9D"/>
		</linearGradient>
		<path id="quads_5_" class="st5" d="M177.2,536.5c-20.7-39.5-24.7-81.1-19.4-124.2c1.3,24.3,10.4,46.5,18.3,69
			c5.9,16.8,6.6,33.8,3.1,51c-0.2,1-0.5,1.9-0.8,2.9C178.3,535.5,178,535.7,177.2,536.5z"/>
		<linearGradient id="quads_11_" gradientUnits="userSpaceOnUse" x1="238.8596" y1="414.7054" x2="278.0845" y2="414.7054">
			<stop  offset="0" style="stop-color:#89BDCD"/>
			<stop  offset="1" style="stop-color:#588C9D"/>
		</linearGradient>
		<linearGradient id="quads_12_" gradientUnits="userSpaceOnUse" x1="167.8986" y1="411.9916" x2="208.7751" y2="411.9916">
			<stop  offset="0" style="stop-color:#89BDCD"/>
			<stop  offset="1" style="stop-color:#588C9D"/>
		</linearGradient>

		<linearGradient id="quads_13_" gradientUnits="userSpaceOnUse" x1="266.8639" y1="477.5887" x2="292.6324" y2="477.5887">
			<stop  offset="0" style="stop-color:#89BDCD"/>
			<stop  offset="1" style="stop-color:#588C9D"/>
		</linearGradient>
		<path id="quads_2_" class="st8" d="M291.6,419.1c-0.5,1.8,0.4,4.8,0.5,6.7c0.1,2.3,0.3,4.7,0.3,7c0.2,4.7,0.2,9.3,0.2,14
			c-0.1,9.3-0.7,18.6-2,27.9c-2.5,18.8-7.7,37.2-15.9,54.4c-1.1,2.4-2.2,4.8-3.7,7c-4.5-13.3-5.8-28.2-2-41.8
			c3.6-12.9,8.8-25.4,12.7-38.3C285.6,443.5,288.5,430.8,291.6,419.1z"/>
		<linearGradient id="quads_14_" gradientUnits="userSpaceOnUse" x1="238.3469" y1="498.039" x2="250.8705" y2="498.039">
			<stop  offset="0" style="stop-color:#89BDCD"/>
			<stop  offset="1" style="stop-color:#588C9D"/>
		</linearGradient>
		<path id="quads_1_" class="st9" d="M250.5,458.9C250.6,459,250.6,459,250.5,458.9c0.4,0.6,0.4,1.3,0.3,1.9c-3,22,0,44.3-0.6,66.5
			c-0.1,2.2-0.2,4.4-0.5,6.6c-0.2,1.2-0.6,2.5-1.6,3.1c-1,0.6-2.3,0.4-3.3-0.3c-1-0.7-1.6-1.7-2.1-2.7c-1.4-2.9-2.1-6.2-2.6-9.4
			c-2.9-17.6-2.4-36.1,3.4-53c0.9-2.6,1.9-5.2,3.1-7.7C246.9,463.2,249.1,457.2,250.5,458.9z"/>
		<linearGradient id="quads_15_" gradientUnits="userSpaceOnUse" x1="198.0248" y1="497.8418" x2="210.6922" y2="497.8418">
			<stop  offset="0" style="stop-color:#89BDCD"/>
			<stop  offset="1" style="stop-color:#588C9D"/>
		</linearGradient>
		<path id="quads" class="st10" d="M200,458.5c1.1,1.2,2.1,4.4,2.2,4.9c1.2,3.3,2.2,6.7,3.2,10.1c1.9,6.7,3.2,13.6,4.1,20.5
			c1.3,9.8,1.6,19.8,0.1,29.5c-0.6,4-1.6,8.1-3.8,11.5c-0.9,1.4-2.5,2.9-4.1,2.5c-1.6-0.4-2.2-2.2-2.5-3.8
			c-2.2-10.7,0.1-21.8,0.8-32.8c0.8-12.7-0.4-25.4-1.7-38.1c-0.1-1.1-0.5-3.2,0.2-4.2C199,457.8,199.5,457.9,200,458.5z"/>
	</g>
	<g id="tibialis_Anterior" class="st2">
		<linearGradient id="tibs_6_" gradientUnits="userSpaceOnUse" x1="196.4029" y1="651.6639" x2="213.4264" y2="651.6639">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path id="tibs_5_" class="st11" d="M205.8,592.9c1.9,6.8,4.3,13.5,5.5,20.3c3.8,21.5,1.9,43.1-1.3,64.5c-1.6,11-3.6,21.9-6.2,32.8
			c-6.2-39.2-12.8-78.3-0.1-117.3C204.4,593.1,205.1,593,205.8,592.9z"/>
		<linearGradient id="tibs_7_" gradientUnits="userSpaceOnUse" x1="234.6217" y1="651.5843" x2="251.2367" y2="651.5843">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path id="tibs_4_" class="st12" d="M244.5,593.6c11.1,38.6,6.2,77.2,1.3,115.8c-0.5,0-1,0.1-1.5,0.1c-1.9-9.9-3.8-19.8-5.6-29.7
			c-3.1-17.7-5.1-35.5-3.7-53.5C235.9,614.8,238.3,603.8,244.5,593.6z"/>
		<linearGradient id="tibs_8_" gradientUnits="userSpaceOnUse" x1="247.7543" y1="650.3302" x2="278.1946" y2="650.3302">
			<stop  offset="0" style="stop-color:#89BDCD"/>
			<stop  offset="1" style="stop-color:#588C9D"/>
		</linearGradient>
		<path id="tibs_3_" class="st13" d="M247.8,722.9c0.8-7.3,1.4-14.7,2.5-22c4.3-28.8,8.3-57.5,13.2-86.2c1.8-10.4,5.8-20.4,9-30.5
			c0.8-2.4,2.5-4.5,3.7-6.8c0.6,0.1,1.1,0.2,1.7,0.2c0,6.1,0.7,12.4-0.2,18.4c-1.3,8.8-2.9,17.8-6,26.2
			c-9.5,25.1-13.6,51.3-17.2,77.7c-1.1,7.8-2.8,15.5-4.2,23.3C249.4,723.1,248.6,723,247.8,722.9z"/>
		<linearGradient id="tibs_9_" gradientUnits="userSpaceOnUse" x1="169.9801" y1="648.7974" x2="200.054" y2="648.7974">
			<stop  offset="0" style="stop-color:#89BDCD"/>
			<stop  offset="1" style="stop-color:#588C9D"/>
		</linearGradient>
		<path id="tibs_2_" class="st14" d="M172.7,576.3c1.7,3.3,4.1,6.5,4.9,10.1c4.1,16.4,8.8,32.8,11.5,49.4
			c4.4,27.1,7.4,54.3,10.9,81.5c0.2,1.2,0,2.5,0,3.8c-0.4,0.1-0.8,0.1-1.2,0.2c-1.7-9.4-3.8-18.7-5-28.2c-3.2-24.1-8-47.8-16.8-70.6
			c-5-13.1-8-26.8-6.7-41c0.1-1.6,0.5-3.2,0.7-4.8C171.6,576.6,172.1,576.5,172.7,576.3z"/>
		<linearGradient id="tibs_10_" gradientUnits="userSpaceOnUse" x1="167.652" y1="652.9246" x2="191.9467" y2="652.9246">
			<stop  offset="0" style="stop-color:#89BDCD"/>
			<stop  offset="1" style="stop-color:#588C9D"/>
		</linearGradient>
		<path id="tibs_1_" class="st15" d="M191.9,704c-9.7-33.7-23.3-66.4-24.3-102.2C176.9,635.6,190.7,668.3,191.9,704z"/>
		<linearGradient id="tibs_11_" gradientUnits="userSpaceOnUse" x1="255.1867" y1="659.3546" x2="280.8194" y2="659.3546">
			<stop  offset="0" style="stop-color:#89BDCD"/>
			<stop  offset="1" style="stop-color:#588C9D"/>
		</linearGradient>
		<path id="tibs" class="st16" d="M280.8,605.4c-2.4,37.5-16.8,72-25.6,107.9C256.4,675.6,269.7,640.7,280.8,605.4z"/>
	</g>
	<g id="inner_thigh_unused" class="st2">
		<linearGradient id="f-inner_4_" gradientUnits="userSpaceOnUse" x1="235.399" y1="379.3441" x2="266.6926" y2="379.3441">
			<stop  offset="0" style="stop-color:#89BDCD"/>
			<stop  offset="1" style="stop-color:#588C9D"/>
		</linearGradient>

		<linearGradient id="f-inner_5_" gradientUnits="userSpaceOnUse" x1="179.3608" y1="377.6208" x2="213.2291" y2="377.6208">
			<stop  offset="0" style="stop-color:#89BDCD"/>
			<stop  offset="1" style="stop-color:#588C9D"/>
		</linearGradient>
		<linearGradient id="f-inner_6_" gradientUnits="userSpaceOnUse" x1="229.0379" y1="412.9737" x2="242.4491" y2="412.9737">
			<stop  offset="0" style="stop-color:#89BDCD"/>
			<stop  offset="1" style="stop-color:#588C9D"/>
		</linearGradient>
		<path id="f-inner_1_" class="st19" d="M230,386.8c4.1,7.1,7.9,13.6,11.5,20.2c0.8,1.5,1.2,3.6,0.8,5.3c-1.5,7.8-3.3,15.6-5.1,23.3
			c-0.3,1.2-1.2,2.3-1.9,3.5C230.7,432.8,227.3,400,230,386.8z"/>
		<linearGradient id="f-inner_7_" gradientUnits="userSpaceOnUse" x1="206.6982" y1="413.8392" x2="218.3469" y2="413.8392">
			<stop  offset="0" style="stop-color:#89BDCD"/>
			<stop  offset="1" style="stop-color:#588C9D"/>
		</linearGradient>
		<path id="f-inner" class="st20" d="M218.3,389.4c0,16.5,0.8,32.8-4,49c-0.9-0.6-1.4-0.8-1.5-1.2c-2.1-8.5-4.3-17-6.1-25.6
			c-0.4-1.8,0.7-4.3,1.7-6.1C211.6,400,215,394.7,218.3,389.4z"/>
	</g>
	<g id="knee_front" class="st2">
		<linearGradient id="knee_6_" gradientUnits="userSpaceOnUse" x1="251.1589" y1="559.3043" x2="265.9319" y2="559.3043">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path id="knee_5_" class="st21" d="M258.4,572.9c-1.4-3.4-2.9-6.8-4.1-10.3c-1.1-3.1-1.8-6.4-2.8-9.5c-1.2-3.9,0.7-6.1,4.3-6.9
			c7.9-1.8,11.5,1.6,9.6,9.5c-1.4,5.8-3.2,11.5-4.9,17.2C259.8,572.9,259.1,572.9,258.4,572.9z"/>
		<linearGradient id="knee_7_" gradientUnits="userSpaceOnUse" x1="181.5595" y1="559.8235" x2="196.0544" y2="559.8235">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path id="knee_4_" class="st22" d="M188.1,572.9c-2.2-7.3-4.6-14.6-6.5-22c-0.3-1.1,1.7-3.9,2.8-4c3.5-0.3,7.3-0.4,10.4,1
			c1.3,0.6,1.6,5.1,1.1,7.6c-1.3,5.9-3.3,11.6-5,17.4C189.9,572.9,189,572.9,188.1,572.9z"/>
		<linearGradient id="knee_8_" gradientUnits="userSpaceOnUse" x1="243.8976" y1="572.6262" x2="254.9249" y2="572.6262">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path id="knee_3_" class="st23" d="M254.4,599.5c-6.4-17.3-14.2-34.5-8.6-53.8C248.4,563.7,257.1,580.7,254.4,599.5z"/>
		<linearGradient id="knee_9_" gradientUnits="userSpaceOnUse" x1="192.9301" y1="575.0977" x2="204.4102" y2="575.0977">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path id="knee_2_" class="st24" d="M203.1,548.5c3.6,10.2-0.7,36.4-8.8,53.2c-2.3-4.6-1.8-15.6,1.4-26.8
			C198.2,566,200.7,557.1,203.1,548.5z"/>
		<linearGradient id="knee_10_" gradientUnits="userSpaceOnUse" x1="169.3622" y1="557.3575" x2="184.5415" y2="557.3575">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path id="knee_1_" class="st25" d="M170.7,536.2c5.1,13.8,12,27,13.8,42.3c-3.7-3.3-7.1-6.3-10.4-9.4c-0.6-0.5-1.1-1.3-1.2-2.1
			c-1.2-10.1-2.4-20.3-3.5-30.5C169.8,536.4,170.3,536.3,170.7,536.2z"/>
		<linearGradient id="knee_11_" gradientUnits="userSpaceOnUse" x1="263.5511" y1="560.7641" x2="278.4327" y2="560.7641">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path id="knee" class="st26" d="M278.4,539.9c-1,9.7-1.9,18.4-2.9,27c-0.1,0.8-0.6,1.5-1.1,2.2c-3.7,4.4-7.4,8.7-10.7,12.6
			C262.3,575.7,270.6,550.3,278.4,539.9z"/>
	</g>

<g id="Upper_arm_biceps">
		<path id="f-arm_7_" class="st27" d="M299.1,204.6c0.6-12.2,5.4-14.9,16.4-9.2c9.5,4.9,14.4,13.4,16.5,23.2
			c2.2,10.5,3.4,21.3,4.8,32c0.4,3.4,1.4,7.5-2.5,9.4c-4.3,2.2-8.1-0.3-10.4-3.6c-7.3-10.5-14.6-20.9-20.9-32
			C300.1,219.5,299.1,205.5,299.1,204.6z"/>
<path id="f-arm_1_" class="st33" d="M329.8,271c-10.7-1.2-24.1-16.6-25.2-28.7c8.8,9.2,17.6,18.3,26.4,27.5
			C330.6,270.2,330.2,270.6,329.8,271z"/>
    </g>

<g id="upper_arm_front" class="st2">
		<linearGradient id="f-arm_8_" gradientUnits="userSpaceOnUse" x1="299.1257" y1="226.7619" x2="337.2159" y2="226.7619">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>

		<linearGradient id="f-arm_9_" gradientUnits="userSpaceOnUse" x1="111.4323" y1="227.5" x2="148.7694" y2="227.5">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path id="f-arm_6_" class="st28" d="M148.8,207.4c-0.1,9.4-2.8,18.2-7.6,26.1c-4.4,7.4-9.4,14.5-14.5,21.4
			c-1.7,2.3-4.1,4.4-6.7,5.8c-4.5,2.5-8.8,0.5-8.6-4.3c0.7-16.9,1.2-33.9,9.7-49.2c4.6-8.2,11.6-12.9,21.2-13.8
			c3.1-0.3,4.8,0.5,5.2,3.7C147.9,200.5,148.3,203.9,148.8,207.4z"/>
		<linearGradient id="f-arm_10_" gradientUnits="userSpaceOnUse" x1="128.4586" y1="166.4286" x2="167.7721" y2="166.4286">
			<stop  offset="0" style="stop-color:#89BDCD"/>
			<stop  offset="1" style="stop-color:#588C9D"/>
		</linearGradient>
		<path id="f-arm_5_" class="st29" d="M128.5,189.6c5.5-22.3,19.1-37,39.3-46.4C168,157.7,150.4,187.7,128.5,189.6z"/>
		<linearGradient id="f-arm_11_" gradientUnits="userSpaceOnUse" x1="280.4949" y1="165.7869" x2="318.4866" y2="165.7869">
			<stop  offset="0" style="stop-color:#89BDCD"/>
			<stop  offset="1" style="stop-color:#588C9D"/>
		</linearGradient>
		<path id="f-arm_4_" class="st30" d="M318.5,188.2c-16.7-1.6-35.4-23.8-38-44.7C297.1,147.1,318.5,171.4,318.5,188.2z"/>
		<linearGradient id="f-arm_12_" gradientUnits="userSpaceOnUse" x1="122.8126" y1="162.2002" x2="154.3468" y2="162.2002">
			<stop  offset="0" style="stop-color:#89BDCD"/>
			<stop  offset="1" style="stop-color:#588C9D"/>
		</linearGradient>
		<path id="f-arm_3_" class="st31" d="M124.2,184.4c-5.8-25.4,6.4-47.3,30.1-44C140.2,152.6,128.2,165.8,124.2,184.4z"/>
		<linearGradient id="f-arm_13_" gradientUnits="userSpaceOnUse" x1="294.8888" y1="161.0323" x2="325.5268" y2="161.0323">
			<stop  offset="0" style="stop-color:#89BDCD"/>
			<stop  offset="1" style="stop-color:#588C9D"/>
		</linearGradient>
		<path id="f-arm_2_" class="st32" d="M324.8,182.3c-4.8-18.2-16.3-30.7-29.9-41.9c10-2.8,21.3,2.5,26.3,11.9
			C325.2,160.2,326.5,170,324.8,182.3z"/>
		<linearGradient id="f-arm_14_" gradientUnits="userSpaceOnUse" x1="304.6117" y1="256.5943" x2="331.0615" y2="256.5943">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>

		<linearGradient id="f-arm_15_" gradientUnits="userSpaceOnUse" x1="117.6769" y1="258.9325" x2="142.6659" y2="258.9325">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path id="f-arm" class="st34" d="M142.7,247.1c-1.4,2.9-2.5,5.9-4.1,8.5c-4.1,6.5-9.2,12.2-16.4,15.4c-1.2,0.5-3,0-4.5,0
			c0.4-1.3,0.4-3.1,1.3-3.9c7.5-6.9,15.1-13.7,22.7-20.5C142,246.8,142.3,246.9,142.7,247.1z"/>
	</g>

	<g id="forearm_front" class="st2">
		<linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="64.7257" y1="312.5581" x2="111.2716" y2="312.5581">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path class="st35" d="M111.3,268.9c-0.7,9.1-2.2,18.2-6.7,26.1c-6,10.7-13.3,20.6-19.8,31c-6.1,9.7-11.9,19.5-17.8,29.3
			c-0.4,0.6-0.8,1.2-1.2,1.9c-0.4-0.2-0.7-0.4-1.1-0.5c2.6-6,5.5-11.9,7.9-18c5.4-13.9,10.3-28,16.1-41.8
			c3.1-7.3,7.2-14.2,11.6-20.8c2.3-3.4,6.3-5.6,9.5-8.3C110.2,268.2,110.8,268.6,111.3,268.9z"/>
		<linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="336.6669" y1="304.1976" x2="376.9027" y2="304.1976">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path class="st36" d="M376.3,342.5c-8.3-11.3-16.7-22.5-24.8-33.9c-7.1-10-12.1-21-14-33.2c-0.4-2.8-0.6-5.6-0.8-8.3
			c0.4-0.4,0.9-0.8,1.3-1.2c4,3.6,9.3,6.6,11.7,11.1c5.8,10.5,10.5,21.7,15.2,32.8c4.2,9.9,7.6,20.2,11.4,30.3
			c0.3,0.7,0.4,1.5,0.6,2.2C376.7,342.3,376.5,342.4,376.3,342.5z"/>
		<linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="69.781" y1="334.9673" x2="109.3125" y2="334.9673">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path class="st37" d="M69.8,359.7c2.4-15.9,28.7-49.2,39.5-49.5c-0.7,2-0.9,4-2,5.5c-4.9,6.7-9.8,13.4-15.2,19.6
			C85.1,343.5,77.6,351.2,69.8,359.7z"/>
		<linearGradient id="SVGID_4_" gradientUnits="userSpaceOnUse" x1="337.6916" y1="332.1818" x2="378.2265" y2="332.1818">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path class="st38" d="M376.7,356.5c-12.7-16-30.9-27.5-39-47.2c0.3-0.5,0.6-0.9,0.9-1.4c2,0.8,4.4,1.2,5.8,2.5
			c5.8,5.6,12.1,11,16.8,17.4c6.3,8.7,11.4,18.4,17,27.7C377.7,355.9,377.2,356.2,376.7,356.5z"/>
		<linearGradient id="SVGID_5_" gradientUnits="userSpaceOnUse" x1="319.2368" y1="289.4423" x2="343.628" y2="289.4423">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path class="st39" d="M343.6,305.1c-9-1.7-16.7-2.7-21.7-9.5c-5-6.8-1.9-13.8,0.6-21.8C332.7,282.2,339.2,291.9,343.6,305.1z"/>
		<linearGradient id="SVGID_6_" gradientUnits="userSpaceOnUse" x1="104.1562" y1="290.1884" x2="128.6365" y2="290.1884">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path class="st40" d="M104.2,305.6c4.3-12.3,11.2-22.4,21.8-30.8c3.1,6.8,3.6,13,0.6,19.2C123.8,299.7,112.5,305.5,104.2,305.6z"
			/>
		<linearGradient id="SVGID_7_" gradientUnits="userSpaceOnUse" x1="329.649" y1="332.7379" x2="369.6748" y2="332.7379">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path class="st41" d="M369.7,356.2c-16.5-12.9-31.5-26.7-40-46.9C343.2,325.2,356.4,340.6,369.7,356.2z"/>
		<linearGradient id="SVGID_8_" gradientUnits="userSpaceOnUse" x1="73.7502" y1="337.8811" x2="115.8313" y2="337.8811">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path class="st42" d="M115.8,315.6c-10.5,19.1-25.1,33-42.1,44.6C87.5,345.6,101.3,331,115.8,315.6z"/>
	</g>
	<g id="abdominal_unused" class="st2">
		<linearGradient id="abs_20_" gradientUnits="userSpaceOnUse" x1="231.8015" y1="336.9543" x2="258.0566" y2="336.9543">
			<stop  offset="0" style="stop-color:#89BDCD"/>
			<stop  offset="1" style="stop-color:#588C9D"/>
		</linearGradient>
		<path id="abs_19_" class="st43" d="M232.1,314.8c0-2.1,1-5.2,2.5-6c5.1-2.9,10.5-5.8,16.1-7c5.7-1.3,8.1,1.7,7.1,7.5
			c-1.8,11.5-3.9,22.9-6,34.3c-0.9,4.7-2.1,9.4-3.4,14c-0.8,2.9-1.9,5.7-3.3,8.3c-1.9,3.5-4.4,7.9-8.8,6.3c-2.1-0.7-3.4-5.5-3.9-8.7
			C231.5,358.1,231.9,325.5,232.1,314.8z"/>
		<linearGradient id="abs_21_" gradientUnits="userSpaceOnUse" x1="190.3628" y1="337.121" x2="216.6274" y2="337.121">
			<stop  offset="0" style="stop-color:#89BDCD"/>
			<stop  offset="1" style="stop-color:#588C9D"/>
		</linearGradient>
		<path id="abs_18_" class="st44" d="M216.3,339c-0.1,7.3-0.1,14.7-0.2,22c0,2.4,0,4.8-0.5,7.1c-0.3,1.6-0.9,3.1-1.6,4.6
			c-0.1,0.1-0.2,0.3-0.3,0.4c-0.2,0.1-0.3,0-0.5-0.1c-3.6-1.6-6.8-4.4-9-7.7c-2.5-3.7-2.8-7.5-4.1-11.6c-1.6-5.1-3-10.3-4.3-15.5
			c-2.1-8.5-3.4-17.3-4.9-26c-1.7-9.8,2.2-13.1,11.7-9.7c2.5,0.9,4.9,2.1,7.2,3.4c2.9,1.6,5.4,4,6.4,7.3c1.2,4,0.4,8.9,0.3,13.1
			C216.3,330.5,216.3,334.7,216.3,339z"/>
		<linearGradient id="abs_22_" gradientUnits="userSpaceOnUse" x1="168.6524" y1="312.7281" x2="186.0828" y2="312.7281">
			<stop  offset="0" style="stop-color:#89BDCD"/>
			<stop  offset="1" style="stop-color:#588C9D"/>
		</linearGradient>
		<path id="abs_17_" class="st45" d="M173.8,280.8c4.6,0.8,6.8,4.4,7.8,8.1c1.8,6.8,3.6,13.8,4.1,20.9c0.7,9.9,0.3,19.9,0.4,29.8
			c0,3.5-1.6,5.3-5.1,5c-2.6-0.2-5.3-0.2-7.8-1c-3.8-1.2-5.3-3.4-4.1-7.9c4.4-16,4.5-32.4,4.1-48.9c0-1.5-0.1-3,0-4.5
			C173.2,281.9,173.5,281.5,173.8,280.8z"/>
		<linearGradient id="abs_23_" gradientUnits="userSpaceOnUse" x1="262.1833" y1="312.8584" x2="279.5547" y2="312.8584">
			<stop  offset="0" style="stop-color:#89BDCD"/>
			<stop  offset="1" style="stop-color:#588C9D"/>
		</linearGradient>
		<path id="abs_16_" class="st46" d="M275.4,280.9c0,6.2-0.4,11.8,0.1,17.4c1.1,12.7,2.3,25.4,4,38.1c0.4,3.3-0.2,5.1-2.9,6.4
			c-1.3,0.6-2.8,1.2-4.2,1.5c-7.3,1.5-9.3,0.1-9.7-7.3c-0.8-14.5-0.6-28.9,2.9-43.1C267.3,286.3,269.7,283.2,275.4,280.9z"/>
		<linearGradient id="abs_24_" gradientUnits="userSpaceOnUse" x1="231.3945" y1="285.4691" x2="263.175" y2="285.4691">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path id="abs_15_" class="st47" d="M242.3,297.7c-11.1,0-11.1,0-10.9-11.3c0-1,0-2,0.1-3c0.2-10,0.7-10.8,10.8-10.1
			c5.4,0.3,10.7,2,15.9,3.5c4.4,1.2,5.7,4.4,4.7,8.9c-2.2,9.6-4.1,11.4-14,12C246.6,297.8,244.5,297.7,242.3,297.7z"/>
		<linearGradient id="abs_25_" gradientUnits="userSpaceOnUse" x1="184.6923" y1="285.9048" x2="216.5992" y2="285.9048">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path id="abs_14_" class="st48" d="M203.8,298.3c-5.4-0.1-11.9-0.3-15.7-4.5c-1.5-1.7-2.5-3.9-3-6.1c-0.4-1.8-0.6-3.6-0.2-5.4
			c1-5,6.6-6.6,11-7.7c5.1-1.3,10.5-1.5,15.8-0.8c6.5,0.8,4.7,9.3,4.7,14c0,3.2,0.8,7.4-2.5,9.4c-2.6,1.5-6,1.2-8.9,1.2
			C204.6,298.3,204.2,298.3,203.8,298.3z"/>
		<linearGradient id="abs_26_" gradientUnits="userSpaceOnUse" x1="186.0442" y1="254.4905" x2="216.3408" y2="254.4905">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path id="abs_13_" class="st49" d="M186.8,266.9c-3.1-11.9,4.1-21.9,17.6-24.1c10.9-1.8,12-0.9,12,10.1c0,10.3,0,10.1-10,11.1
			C199.8,264.6,193.3,265.9,186.8,266.9z"/>
		<linearGradient id="abs_27_" gradientUnits="userSpaceOnUse" x1="184.5776" y1="230.7537" x2="217.2513" y2="230.7537">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path id="abs_12_" class="st50" d="M185.2,244.5c-2.9-10.6,5.1-22.9,16.5-26.3c0.9-0.3,1.9-0.4,2.9-0.6
			c10.9-2.2,14.9,2.2,11.5,12.8c-0.4,1.1-1.9,2.2-3.2,2.5c-2.9,0.7-5.9,0.9-8.8,1.5C196.9,235.8,190.1,238.1,185.2,244.5z"/>
		<linearGradient id="abs_28_" gradientUnits="userSpaceOnUse" x1="231.7692" y1="229.3371" x2="263.3053" y2="229.3371">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path id="abs_11_" class="st51" d="M263.1,242.1c-8.3-6.6-17.9-8.3-28-8.3c-0.7,0-1.9-0.1-1.9-0.3c-0.6-4.4-1.4-8.8-1.5-13.3
			c0-1.1,2-3.2,3.2-3.4C251,214.5,265.1,228.2,263.1,242.1z"/>
		<linearGradient id="abs_29_" gradientUnits="userSpaceOnUse" x1="286.4829" y1="223.899" x2="294.922" y2="223.899">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path id="abs_10_" class="st52" d="M288.4,245.4c-3.6-15.2-2.4-29.7,6.3-42.9C294.5,217,297.2,232,288.4,245.4z"/>
		<linearGradient id="abs_30_" gradientUnits="userSpaceOnUse" x1="152.3939" y1="222.1161" x2="162.0076" y2="222.1161">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path id="abs_9_" class="st53" d="M153.2,200.3c7.2,6.2,11.4,32,7.1,43.7C154.5,240.1,150.7,216.7,153.2,200.3z"/>
		<linearGradient id="abs_31_" gradientUnits="userSpaceOnUse" x1="163.7628" y1="261.4385" x2="179.1889" y2="261.4385">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>

		<linearGradient id="abs_32_" gradientUnits="userSpaceOnUse" x1="268.778" y1="263.2312" x2="283.688" y2="263.2312">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path id="abs_7_" class="st55" d="M283.6,252.6c0.6,10.8-4.7,19.4-12.9,21.3c-3.6-6.8-2.2-11.3,4.1-14.8
			C277.8,257.3,280.4,255,283.6,252.6z"/>
		<linearGradient id="abs_33_" gradientUnits="userSpaceOnUse" x1="166.1722" y1="214.7196" x2="182.4355" y2="214.7196">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path id="abs_6_" class="st56" d="M166.2,207.5c5.3,2.8,10.5,5.3,15.4,8.1c0.8,0.5,1.1,2.9,0.7,4.1c-0.3,1-1.9,2.3-3,2.3
			C172.4,222.1,166.2,215.5,166.2,207.5z"/>
		<linearGradient id="abs_34_" gradientUnits="userSpaceOnUse" x1="264.3068" y1="215.6042" x2="281.6448" y2="215.6042">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path id="abs_5_" class="st57" d="M281.6,208.8c-0.5,8.5-6.2,13.4-15,13.7c-0.7-1.9-1.5-3.9-2.4-6.3
			C269.9,213.7,275.5,211.4,281.6,208.8z"/>
		<linearGradient id="abs_35_" gradientUnits="userSpaceOnUse" x1="166.6171" y1="244.4844" x2="177.1448" y2="244.4844">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path id="abs_4_" class="st58" d="M176.5,253.8c-7.1-3.2-10.7-10.2-9.7-18.5C175.9,238.9,178.5,243.8,176.5,253.8z"/>
		<linearGradient id="abs_36_" gradientUnits="userSpaceOnUse" x1="270.7265" y1="246.4284" x2="280.9906" y2="246.4284">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path id="abs_3_" class="st59" d="M270.7,255.7c0.2-2.1,0.8-4.1,0.5-5.9c-1.3-7.5,2.1-11.4,9.2-12.6
			C282.6,243.6,278.5,251.8,270.7,255.7z"/>
		<linearGradient id="abs_37_" gradientUnits="userSpaceOnUse" x1="166.6559" y1="228.5706" x2="179.0965" y2="228.5706">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path id="abs_2_" class="st60" d="M166.7,221.4c2.3,1.2,4.2,2.4,6.1,3.2c7.3,3.2,7.3,3.2,4.7,11.2
			C170.7,235.1,166.2,229.3,166.7,221.4z"/>
		<linearGradient id="abs_38_" gradientUnits="userSpaceOnUse" x1="268.3531" y1="229.8627" x2="281.006" y2="229.8627">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path id="abs_1_" class="st61" d="M270.8,236.5c-0.8-3.2-1.5-6.1-2.4-9.5c4.2-1.3,8.4-2.6,12.6-3.9
			C281.4,230.2,277.9,234.9,270.8,236.5z"/>

		<path id="abs" class="st62" d="M231.6,241.7c8.3-0.5,15.4,0.7,21.9,4.6c6.1,3.7,8.7,9.3,8.6,16.3c0,2.3-0.5,3.6-3.4,3.4
			c-7.7-0.7-15.5-1-23.3-1.7c-1.3-0.1-3.6-1.7-3.6-2.7C231.5,255.2,231.6,248.7,231.6,241.7z"/>
	</g>
	<g id="Feet_Front" class="st2">
		<linearGradient id="f-foot_8_" gradientUnits="userSpaceOnUse" x1="240.5573" y1="759.3589" x2="261.7989" y2="759.3589">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path id="f-foot_7_" class="st63" d="M256.6,739.1c4,6.2,4.9,13.2,5.2,20.3c0,0.8-0.6,1.9-1.3,2.5c-6.3,6.1-12.8,12.1-18.8,17.8
			C237.6,766.3,245.2,744.2,256.6,739.1z"/>
		<linearGradient id="f-foot_9_" gradientUnits="userSpaceOnUse" x1="186.2802" y1="757.8016" x2="207.1535" y2="757.8016">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path id="f-foot_6_" class="st64" d="M192.1,738.2c11.2,5.5,16.8,26.5,14.6,39.1c-6.2-4.9-12.8-9.9-19.2-15.2
			c-0.9-0.7-1.2-2.6-1.2-4C186.1,751,188.4,744.6,192.1,738.2z"/>
		<linearGradient id="f-foot_10_" gradientUnits="userSpaceOnUse" x1="252.8287" y1="781.1149" x2="278.4122" y2="781.1149">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path id="f-foot_5_" class="st65" d="M278.4,793.1c-7.3,0-13.6,0-19.8,0c-0.6,0-1.5-0.2-1.8-0.6c-3.7-4.6-4.7-10.3-3.3-15.5
			c0.8-3,4.8-5.3,7.6-7.6c0.6-0.5,2.6-0.2,3.1,0.4C269.7,776.3,275.2,782.9,278.4,793.1z"/>
		<linearGradient id="f-foot_11_" gradientUnits="userSpaceOnUse" x1="171.9085" y1="781.0502" x2="196.9939" y2="781.0502">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path id="f-foot_4_" class="st66" d="M171.9,792.8c3.7-9.3,9.4-16.4,15.6-22.9c2.1-2.1,9.1,2.1,9.4,6.4c0.3,4.7-0.7,9.4-1.5,14.1
			c-0.2,1-2.1,2.3-3.3,2.3C185.7,792.9,179.2,792.8,171.9,792.8z"/>
		<linearGradient id="f-foot_12_" gradientUnits="userSpaceOnUse" x1="241.3314" y1="738.2819" x2="253.6221" y2="738.2819">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path id="f-foot_3_" class="st67" d="M242.7,750.7c-3-9-0.7-19.7,5-23.3c1.6-1,3.9-1.1,5.8-1.6c0,2.2,0.2,4.3,0,6.5
			c-0.1,0.9-0.9,1.8-1.4,2.6C249.1,740,246.1,745.1,242.7,750.7z"/>
		<linearGradient id="f-foot_13_" gradientUnits="userSpaceOnUse" x1="193.929" y1="736.7619" x2="206.4196" y2="736.7619">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path id="f-foot_2_" class="st68" d="M205.4,748c-3.9-5.7-7.8-11.1-11.1-16.7c-0.8-1.4,0.1-3.9,0.2-5.9c1.8,0.3,3.9,0.2,5.4,1.1
			C205.7,730.1,207.9,738.8,205.4,748z"/>
		<linearGradient id="f-foot_14_" gradientUnits="userSpaceOnUse" x1="243.6263" y1="786.1716" x2="252.0439" y2="786.1716">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path id="f-foot_1_" class="st69" d="M243.6,792c0.8-3.7,1.4-7.3,2.5-10.9c0.3-0.9,1.9-1.8,2.9-1.9c0.5-0.1,1.7,1.5,1.9,2.5
			c0.6,2.7,1.3,5.6,1.1,8.3c-0.5,5.4-4.7,2-7,3.2C244.5,792.8,244.1,792.4,243.6,792z"/>
		<linearGradient id="f-foot_15_" gradientUnits="userSpaceOnUse" x1="198.3985" y1="786.1595" x2="206.3665" y2="786.1595">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path id="f-foot" class="st70" d="M198.4,792.8c0.7-4.1,1.2-7.8,2-11.4c0.2-0.9,1.6-2.4,2.1-2.3c1,0.2,2.5,1.3,2.7,2.2
			c0.7,2.8,1.5,5.9,1.1,8.7C205.5,794.8,201.6,792.7,198.4,792.8z"/>
	</g>
	<g id="front_unused" class="st2">
		<linearGradient id="chest_9_" gradientUnits="userSpaceOnUse" x1="228.5941" y1="179.7285" x2="294.2719" y2="179.7285">
			<stop  offset="0" style="stop-color:#89BDCD"/>
			<stop  offset="1" style="stop-color:#588C9D"/>
		</linearGradient>
		<path id="chest_8_" class="st71" d="M228.6,173.9c0.2-1.4,0.1-2.9,0.2-4.3c0.1-2.9,0.3-5.9,0.6-8.8c0.2-2.1,1.5-4.5,3-5.8
			c13.3-11.9,30.4-11.2,42.9,1.4c9.5,9.6,14.2,22,18.8,34.3c0.4,1-0.4,3.4-1.4,4c-12.7,7.2-25.2,15-39.9,17.7
			c-7.2,1.3-14.4,0.9-20.5-3.5c-1.5-1.1-2.9-3.4-3-5.1c-0.2-4.3-0.2-8.5-0.1-12.8C229.2,188.7,228.5,175.2,228.6,173.9z"/>
		<linearGradient id="chest_10_" gradientUnits="userSpaceOnUse" x1="154.0901" y1="179.9266" x2="219.2312" y2="179.9266">
			<stop  offset="0" style="stop-color:#89BDCD"/>
			<stop  offset="1" style="stop-color:#588C9D"/>
		</linearGradient>
		<path id="chest_7_" class="st72" d="M219.2,183c0,6.5-0.1,13,0.1,19.4c0.1,3.5-1.4,5.5-4.3,7.1c-6.3,3.6-13,3.8-19.8,2.6
			c-14.5-2.7-26.9-10.2-39.6-17.1c-0.9-0.5-1.6-2.9-1.2-3.9c4.5-11.7,9.2-23.2,17.6-32.7c11.5-13.1,27.9-15,42-4.8
			c3.5,2.5,5.5,5.5,5.4,10C219.1,170,219.2,176.5,219.2,183z"/>
		<linearGradient id="chest_11_" gradientUnits="userSpaceOnUse" x1="230.094" y1="130.374" x2="248.3829" y2="130.374">
			<stop  offset="0" style="stop-color:#89BDCD"/>
			<stop  offset="1" style="stop-color:#588C9D"/>
		</linearGradient>
		<path id="chest_6_" class="st73" d="M248,107.6c2.7,18.5-8.6,31.1-16.1,45.6C226.2,140.4,234.8,121.5,248,107.6z"/>
		<linearGradient id="chest_12_" gradientUnits="userSpaceOnUse" x1="201.957" y1="130.0471" x2="218.7083" y2="130.0471">
			<stop  offset="0" style="stop-color:#89BDCD"/>
			<stop  offset="1" style="stop-color:#588C9D"/>
		</linearGradient>
		<path id="chest_5_" class="st74" d="M202.4,109.1c9.8,12.3,18.9,24.8,15.6,41.9C209.8,138.2,199.7,126.1,202.4,109.1z"/>
		<linearGradient id="chest_13_" gradientUnits="userSpaceOnUse" x1="167.9748" y1="133.4184" x2="197.3961" y2="133.4184">
			<stop  offset="0" style="stop-color:#89BDCD"/>
			<stop  offset="1" style="stop-color:#588C9D"/>
		</linearGradient>
		<path id="chest_4_" class="st75" d="M168,139.4c9-9,21.5-15,29.4-14.4C196,137.5,183.4,146.4,168,139.4z"/>
		<linearGradient id="chest_14_" gradientUnits="userSpaceOnUse" x1="251.9399" y1="132.4005" x2="280.3315" y2="132.4005">
			<stop  offset="0" style="stop-color:#89BDCD"/>
			<stop  offset="1" style="stop-color:#588C9D"/>
		</linearGradient>
		<path id="chest_3_" class="st76" d="M280.3,138.3c-13.8,7.3-27-1.7-28.4-14.4C263.3,125.1,271.9,131,280.3,138.3z"/>
		<linearGradient id="chest_15_" gradientUnits="userSpaceOnUse" x1="215.3301" y1="124.2289" x2="232.0768" y2="124.2289">
			<stop  offset="0" style="stop-color:#89BDCD"/>
			<stop  offset="1" style="stop-color:#588C9D"/>
		</linearGradient>
		<path id="chest_2_" class="st77" d="M223.1,136.6c-2.5-8.1-5.1-16.1-7.7-24.6c5.2,0,12.8-0.1,16.7-0.1c0,0-4.6,17.7-6.5,24.7
			C224.7,136.6,223.9,136.6,223.1,136.6z"/>
		<linearGradient id="chest_16_" gradientUnits="userSpaceOnUse" x1="241.9004" y1="140.0098" x2="257.5503" y2="140.0098">
			<stop  offset="0" style="stop-color:#89BDCD"/>
			<stop  offset="1" style="stop-color:#588C9D"/>
		</linearGradient>
		<path id="chest_1_" class="st78" d="M256.5,142.4c-4.3,0.6-8.7,1.3-14.6,2.1c2.7-3.8,4.5-8.5,7-9c2.5-0.4,5.7,3.6,8.6,5.6
			C257.2,141.5,256.9,142,256.5,142.4z"/>
		<linearGradient id="chest_17_" gradientUnits="userSpaceOnUse" x1="191.9993" y1="140.0357" x2="207.2521" y2="140.0357">
			<stop  offset="0" style="stop-color:#89BDCD"/>
			<stop  offset="1" style="stop-color:#588C9D"/>
		</linearGradient>
		<path id="chest" class="st79" d="M192,141.8c3-2.1,5.7-5.1,9-5.8c1.3-0.3,3.7,4.7,6.3,8.1c-5.8-0.5-10.1-0.9-14.4-1.3
			C192.6,142.5,192.3,142.1,192,141.8z"/>
	</g>
	<g id="hands_front" class="st2">
		<linearGradient id="hands_12_" gradientUnits="userSpaceOnUse" x1="380.6404" y1="389.1358" x2="408.1477" y2="389.1358">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path id="hands_11_" class="st80" d="M389.5,411.3c-2.1-5-4.7-9.8-6.1-14.9c-1.5-5.4-2.1-11.1-2.5-16.7c-0.7-8-0.3-8.3,7.2-11.4
			c0.9-0.4,1.8-0.8,3.2-1.3c5.3,7.7,10.6,15.3,15.7,23c1.9,2.9,1.7,5-1.7,7.3c-3.8,2.6-6.7,6.4-9.9,9.7c-1.4,1.4-2.6,2.9-3.9,4.3
			C390.8,411.3,390.1,411.3,389.5,411.3z"/>
		<linearGradient id="hands_13_" gradientUnits="userSpaceOnUse" x1="39.5154" y1="389.6562" x2="66.8457" y2="389.6562">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path id="hands_10_" class="st81" d="M57.6,411.2c-2.8-3-5.1-6-7.8-8.6c-2-1.9-4.1-4.1-6.6-5.1c-4.8-1.8-4.1-4.6-2-7.6
			c5-7,10.1-13.9,15.4-20.7c0.6-0.7,2.6-1.3,3.2-0.8c2.6,1.8,7,3.9,7.1,6c0.2,12.2-0.4,24.6-7.5,35.4
			C59.1,410,58.6,410.3,57.6,411.2z"/>
		<linearGradient id="hands_14_" gradientUnits="userSpaceOnUse" x1="398.9018" y1="378.9009" x2="427.2825" y2="378.9009">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path id="hands_9_" class="st82" d="M399.7,368.3c9.2,6.5,18.4,13,27.6,19.5c-0.1,0.4-0.2,0.8-0.2,1.2c-1.7,0.2-3.4,0.8-5,0.4
			c-10-2.1-18.4-6.8-23-16.4c-0.5-1.1,0.5-3.1,0.8-4.6C399.9,368.4,399.7,368.3,399.7,368.3z"/>
		<linearGradient id="hands_15_" gradientUnits="userSpaceOnUse" x1="19.0922" y1="379.5635" x2="49.037" y2="379.5635">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path id="hands_8_" class="st83" d="M49,369.6c-1,12.1-19,23.4-29.9,18.7C29.3,382,38.9,376,49,369.6z"/>
		<linearGradient id="hands_16_" gradientUnits="userSpaceOnUse" x1="404.6579" y1="418.6253" x2="420.5271" y2="418.6253">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path id="hands_7_" class="st84" d="M416.3,418.8c1.3,5.1,2.7,10.3,4.2,16.2c-9-3.8-18.6-25.5-15.1-32.7
			c3.5,5.2,6.9,10.1,10.2,15.1C415.8,417.8,416,418.3,416.3,418.8z"/>
		<linearGradient id="hands_17_" gradientUnits="userSpaceOnUse" x1="28.3291" y1="420.0011" x2="43.6402" y2="420.0011">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path id="hands_6_" class="st85" d="M32.3,420.1c3.4-5.2,6.7-10.4,10.1-15.6c0.3,0.1,0.7,0.2,1,0.3c0,1.7,0.5,3.6-0.1,5
			c-3.2,7.7-6.6,15.4-10.2,22.9c-0.6,1.3-2.8,1.8-4.2,2.7c-0.2-1.8-0.9-3.7-0.5-5.4c0.8-3.2,2.3-6.2,3.5-9.2
			C32.1,420.7,32.2,420.4,32.3,420.1z"/>
		<linearGradient id="hands_18_" gradientUnits="userSpaceOnUse" x1="409.7747" y1="413.3166" x2="426.3263" y2="413.3166">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path id="hands_5_" class="st86" d="M416.3,418.8c-0.2-0.5-0.5-0.9-0.7-1.4c-1.9-5.8-3.9-11.7-5.8-17.5c0.7-0.3,1.4-0.7,2.1-1
			c2,3,4.2,5.9,6,9.1c2.9,5.2,5.7,10.5,8.3,15.8c0.5,1-0.4,2.6-0.6,4c-1.2-0.3-2.9-0.2-3.6-1C419.9,424.3,418.2,421.5,416.3,418.8z"
			/>
		<linearGradient id="hands_19_" gradientUnits="userSpaceOnUse" x1="21.8771" y1="414.7434" x2="37.6239" y2="414.7434">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path id="hands_4_" class="st87" d="M32.3,420.1c-0.1,0.3-0.3,0.5-0.4,0.8c-1.4,1.8-2.5,4-4.2,5.4c-1.3,1.1-3.4,1.4-5.2,2
			c-0.2-1.8-1.1-4.1-0.4-5.4c4.2-7.4,8.9-14.5,13.4-21.8c0.7,0.3,1.4,0.6,2.1,0.9C35.9,408.1,34.1,414.1,32.3,420.1z"/>
		<linearGradient id="hands_20_" gradientUnits="userSpaceOnUse" x1="398.8492" y1="422.3441" x2="411.4011" y2="422.3441">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path id="hands_3_" class="st88" d="M411.4,437.4c-7.5-5-14.5-22.2-12.1-30.1C404.6,417.2,410.6,425.5,411.4,437.4z"/>
		<linearGradient id="hands_21_" gradientUnits="userSpaceOnUse" x1="37.689" y1="424.8622" x2="49.289" y2="424.8622">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path id="hands_2_" class="st89" d="M49.3,411c-0.6,10.2-3.9,19.3-10.8,27.7C35.5,433.4,41.2,419.2,49.3,411z"/>
		<linearGradient id="hands_22_" gradientUnits="userSpaceOnUse" x1="47.9563" y1="424.3489" x2="56.7523" y2="424.3489">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path id="hands_1_" class="st90" d="M56.8,417c-1.5,4.5-2.9,9-4.6,13.4c-0.4,1.1-2.2,1.6-3.3,2.4c-0.3-1.3-1.2-2.9-0.8-3.9
			c1.9-4.4,4.3-8.7,6.4-13C55.3,416.3,56,416.6,56.8,417z"/>
		<linearGradient id="hands_23_" gradientUnits="userSpaceOnUse" x1="392.5776" y1="422.7495" x2="400.0746" y2="422.7495">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path id="hands" class="st91" d="M393.1,413.7c3.5,6.2,7.3,11.1,7,18.1C395.1,430,391.2,420.5,393.1,413.7z"/>
	</g>
	<g id="face_unused" class="st2">
		<linearGradient id="face_15_" gradientUnits="userSpaceOnUse" x1="190.0721" y1="41.4612" x2="200.5292" y2="41.4612">
			<stop  offset="0" style="stop-color:#89BDCD"/>
			<stop  offset="1" style="stop-color:#588C9D"/>
		</linearGradient>
		<path id="face_14_" class="st92" d="M191.3,31.4c0.9-1.9,1.8-3.7,2.8-5.9c4.9,3.2,6.2,7.5,6.4,12.2c0.1,3.5-0.6,7-0.4,10.4
			c0.4,5.8-1.6,9.1-8.1,9.3c-2-8.2-2.7-16.5-1.2-25C191,32.1,191.2,31.8,191.3,31.4z"/>
		<linearGradient id="face_16_" gradientUnits="userSpaceOnUse" x1="201.5182" y1="32.2307" x2="247.095" y2="32.2307">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path id="face_13_" class="st93" d="M203.2,43.5c-0.6-6.5-1.2-12.6-1.6-18.6c-0.5-6.6,2.7-10.2,9.6-11.5c5.4-1,9.1,1.4,11.2,7.5
			c0.6,1.8,1.1,3.7,1.9,6.4c0.8-2.8,1.3-4.8,2-6.8c2.1-5.9,5.9-8.1,11.4-7c6.8,1.4,9.9,4.9,9.4,11.2c-0.2,3.1-1.1,6.2-1.4,9.3
			c-0.2,2.9-0.1,5.9-0.1,9.3c-8.3-1.3-15.9-0.4-21.2,8C218.9,43.3,211.4,41.5,203.2,43.5z"/>
		<linearGradient id="face_17_" gradientUnits="userSpaceOnUse" x1="208.0769" y1="91.1438" x2="241.1191" y2="91.1438">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path id="face_12_" class="st94" d="M219.8,106c-7.1-0.1-10.4-2.5-10.9-8.1c-0.5-6.4-2.6-9.4,3.5-14c3.4-2.5,7.1-4.7,10.6-7
			c0.4-0.3,0.9-0.6,1.4-0.5c0.4,0,0.8,0.3,1.2,0.5c3.7,2.4,7.6,4.7,11.4,7.1c1.8,1.1,3.1,2.8,3.9,4.6c0.6,1.3,0.3,3.2-0.7,9.4
			c-0.8,5.6-5.6,7.9-10.3,8.1c6-5.7,6.1-15.1,6.9-19.9c-2-1.4-3.8-1.6-7.5-3.7c-4.7-2.7-5.1-2.7-10.3,0.1c-2,1.1-4,2.3-6.2,3.5
			C213.6,92.8,212.1,100.3,219.8,106z"/>
		<linearGradient id="face_18_" gradientUnits="userSpaceOnUse" x1="214.3976" y1="97.1235" x2="234.9616" y2="97.1235">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path id="face_11_" class="st95" d="M214.4,87.6c7.5,0.6,13.7,0.6,20.6,0c-1.5,4.7-2.4,10.1-4.8,14.7c-3.1,5.9-8.9,5.7-11.7-0.4
			C216.5,97.9,215.5,91.6,214.4,87.6z"/>
		<linearGradient id="face_19_" gradientUnits="userSpaceOnUse" x1="248.9779" y1="41.9739" x2="258.6213" y2="41.9739">
			<stop  offset="0" style="stop-color:#89BDCD"/>
			<stop  offset="1" style="stop-color:#588C9D"/>
		</linearGradient>
		<path id="face_10_" class="st96" d="M256.4,28.1c3,9.7,3,19.4,0.2,29.2c-7.3-1-7.4-1-7.6-8.2c-0.1-5.2-0.1-10.5,0.2-15.7
			c0.1-1.7,1.3-3.3,2.2-4.9c1.5-2.6,3.2-2.2,5-0.2C256.5,28.3,256.4,28.1,256.4,28.1z"/>
		<linearGradient id="face_20_" gradientUnits="userSpaceOnUse" x1="236.2862" y1="70.3063" x2="254.2193" y2="70.3063">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path id="face_9_" class="st97" d="M254.2,62.5c-0.2,2.1,0.7,6.3-1,8.6c-3.6,5-9.6,6.4-16.8,6.9C242.8,72.4,248.4,67.6,254.2,62.5
			z"/>
		<linearGradient id="face_21_" gradientUnits="userSpaceOnUse" x1="194.2047" y1="69.563" x2="212.3866" y2="69.563">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path id="face_8_" class="st98" d="M211.5,78c-6.1,0.3-11.5-1.9-15.6-6.4c-2.5-2.8-1.7-6.7-0.3-10.6c6,5.5,11.4,10.6,16.8,15.7
			C212.1,77.2,211.8,77.6,211.5,78z"/>
		<linearGradient id="face_22_" gradientUnits="userSpaceOnUse" x1="229.8909" y1="66.9492" x2="248.0585" y2="66.9492">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path id="face_7_" class="st99" d="M234.6,75.3c-1.8-1.9-3.1-3.3-4.7-5.1c6.1-3.9,11.7-7.4,18.2-11.5
			C246.4,67.1,239.6,70,234.6,75.3z"/>
		<linearGradient id="face_23_" gradientUnits="userSpaceOnUse" x1="200.1264" y1="67.6825" x2="218.849" y2="67.6825">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path id="face_6_" class="st100" d="M213.8,75.8c-4.8-5.2-9.2-9.9-13.7-14.7c0.5-0.5,0.9-1,1.4-1.5c5.6,3.5,11.3,6.9,17.3,10.6
			C217.2,72.1,215.8,73.6,213.8,75.8z"/>
		<linearGradient id="face_24_" gradientUnits="userSpaceOnUse" x1="229.7578" y1="60.8574" x2="244.5449" y2="60.8574">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path id="face_5_" class="st101" d="M229.8,66.3c0-4.8,0-8.2,0-11c4.9,0.7,9.8,1.5,14.8,2.2C240.3,60.1,235.6,62.9,229.8,66.3z"/>
		<linearGradient id="face_25_" gradientUnits="userSpaceOnUse" x1="204.9728" y1="60.8385" x2="219.6543" y2="60.8385">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path id="face_4_" class="st102" d="M219.7,55.1c-0.3,3.5-0.6,7-1,11.4c-5.1-3.1-9.4-5.6-13.6-8.2
			C209.9,57.2,214.4,56.3,219.7,55.1z"/>
		<linearGradient id="face_26_" gradientUnits="userSpaceOnUse" x1="204.6862" y1="52.3083" x2="215.4205" y2="52.3083">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path id="face_3_" class="st103" d="M204.7,51.8c4-2.6,7.5-3.4,10.7,0.4C211.4,56,209.5,56,204.7,51.8z"/>
		<linearGradient id="face_27_" gradientUnits="userSpaceOnUse" x1="233.6656" y1="52.2724" x2="244.144" y2="52.2724">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path id="face_2_" class="st104" d="M244.1,51.8c-3.4,4.1-6.8,3.8-10.5,1.2C236.3,48.8,238.4,48.5,244.1,51.8z"/>
		<linearGradient id="face_28_" gradientUnits="userSpaceOnUse" x1="243.0558" y1="77.3698" x2="252.9874" y2="77.3698">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path id="face_1_" class="st105" d="M253,80.1c-3.7,0-6.6,0-9.5,0c-0.1-0.2-0.3-0.5-0.4-0.7c3.1-1.5,6.3-3,9.9-4.8
			C253,77,253,78.6,253,80.1z"/>
		<linearGradient id="face_29_" gradientUnits="userSpaceOnUse" x1="194.5287" y1="77.5678" x2="205.3324" y2="77.5678">
			<stop  offset="0" style="stop-color:#F7F8F9"/>
			<stop  offset="1" style="stop-color:#878787"/>
		</linearGradient>
		<path id="face" class="st106" d="M205,80.4c-3.2,0-6.4,0-10.1,0c-0.1-1.6-0.2-3.1-0.3-5.6c4.2,1.9,7.5,3.4,10.8,5
			C205.2,79.9,205.1,80.2,205,80.4z"/>
	</g>
</g>
<g id="Layer_2">
	<g>
		<path class="st107" d="M397.6,373c-0.5-1.1,0.5-3.1,0.8-4.6c-0.1,0-0.1-0.1-0.2-0.1h0.1c-7.8-6.1-12.7-14.4-16.3-23.4
			c-3.5-8.8-6.5-17.8-9.7-26.7c-5.7-16.3-10.9-33.2-22.2-46.6c-6.3-7.5-8.3-14.8-8.2-24.2c0.2-13.3-0.3-27.4-7.5-38.7
			c-5.4-8.4-5.4-15.9-3.6-24.5c0.1-0.5,0.2-1,0.3-1.5c1.8-16.9-2.5-31.5-17.2-41.4c-6-4-12.9-6.9-19.5-10c-10.7-5-22-8.8-32-14.9
			c-14.7-8.9-18.1-20.3-7.6-36c3.1-4.7,4.4-10.7,6.2-16.1c0.3-0.9-0.4-3-1.2-3.4c-3.4-1.7-3-4.3-2.4-7.2c3.2-14.5-1.8-26.1-1.8-26.1
			c-0.9-2.4-2.3-4.8-3.7-6.9c-1.9-2.9-4.6-5.2-7.5-7c-12.3-7.4-25.4-7.5-38.4-2.6c-4.2,1.6-10.4,5-13.6,9.6c-3.8,5.3-5,11.4-5,11.4
			c-2.2,7.3-0.2,14.7,0.9,21.9c0.5,2.9,0.7,5-2.2,6.8c-0.9,0.5-1.8,2.7-1.4,3.6c2.1,5.7,3.9,11.7,6.9,16.9
			c8.5,14.5,7.1,23.6-6.8,34.3c-3.6,2.8-8,4.7-12.3,6.6c-9.6,4.3-19.3,8.2-28.9,12.4c-13.1,5.8-24,13.8-28,28.5
			c-2.8,10.1-1.8,20.2,0.6,30.1c0.9,3.7,0.8,6.3-1.8,9.5c-2.6,3.3-4.6,7.4-5.9,11.4c-4.5,13.8-5.2,28-5.2,42.4c0,2.4-0.5,5.5-2,7.2
			c-8.8,9.6-15.3,20.6-20,32.6c-6.2,16-11.8,32.2-17.9,48.2c-4.4,11.5-11,21-22.6,26.8c-9.5,4.7-18.3,10.8-27.4,16.4
			c-1.6,1-3,2.3-4.8,3.7c10.1,8,18.3,1.1,28-2.6c-1.2,2.7-1.7,4.2-2.4,5.6c-5.9,10.6-11.8,21.2-17.6,31.9c-0.7,1.3-1.2,3.7-0.5,4.3
			c0.9,0.9,3,0.7,4.5,0.8c0.7,0.1,1.5-0.2,2.2-0.2c2,9.2,2.3,9.4,8.4,5.4c5,6.3,6,6.2,10.1-1.2c0.6-1.1,1.3-2.2,2.1-3.4
			c2.5,4.5,4.6,4.9,7.7,1.2c1.9-2.2,3.9-4.8,4.7-7.6c4.7-14.9,9.5-29.7,13.4-44.8c1.6-6.2,4.2-11.3,8.4-16
			c10.2-11.4,20.7-22.7,30.2-34.6c12.6-15.9,21.8-33.4,23.7-54.1c0.1-1.5,1.4-2.9,2.2-4.3c3.3-6.5,7.2-12.7,9.8-19.4
			c2.4-6.2,3.3-12.9,4.9-19.3c6.4,18.6,12.4,37.3,16.4,56.4c2,9.9,1.2,20.6,0,30.8c-1,8.1-5.1,15.8-6.7,23.9
			c-6.9,35.1-9.5,70.5-8.3,106.3c0.9,28.2,5.5,55.9,12.1,83.3c4.2,17.3,7.9,34.3,2.3,52.4c-5.1,16.4-4,33.5,0.2,50.4
			c6.2,25,12.5,50,18.1,75.2c2.8,12.4,5,24.8,1.4,37.9c-1.9,6.9-3.5,13.2-7.3,19.4c-4.1,6.5-5.8,14.5-12,19.9
			c-0.9,0.8-1.5,3.2-1,3.9c0.7,1.1,2.7,1.8,4.1,1.8c8.8,0.2,17.7,0.1,26.5,0.1c16.5,0,16.4,0,15.5-16.7c-0.4-6.3-0.4-12.6-0.6-18.9
			c-0.2-4.6-0.3-9.2-0.7-13.8c-0.3-3.9-1.9-7.9-1.5-11.7c1.9-19.9,3.7-39.8,6.4-59.5c4.1-29.5,2.8-58.7-2.5-87.9
			c-1.8-9.8-3.4-19.7-3.7-29.6c-0.2-7.7,1.9-15.5,2.9-23.2c3.6-27.5,7.2-55.1,10.6-82.7c0.8-6.8,1.1-13.7,1.6-20.5
			c1.6,6.3,1.9,12.7,2.7,19c3.8,30.4,7.9,60.7,11.7,91.1c1,8.1,2.1,16.2,1.7,24.3c-0.4,8.2-2.4,16.4-4,24.6
			c-5.9,31.4-5.4,62.9-0.8,94.4c2.3,16,4,32.1,5.2,48.1c0.9,11.8-4.1,23.3-1.8,35.4c1.3,6.8-0.8,14.2-1,21.3
			c-0.1,3.7,1.6,6.2,6.1,6.2c12-0.1,24,0,36-0.1c1.3,0,3.5-0.6,3.8-1.4c0.4-1.3,0.2-3.7-0.8-4.5c-6-5.1-7.7-12.7-11.5-19
			c-4.1-6.6-6.2-13.2-7.7-20.9c-1.8-8.9-2.4-17.6-0.5-26.1c5.2-23.9,10.4-47.8,16.7-71.4c6.7-24.9,9.3-49.6,1.9-74.8
			c-1.5-5.1-2-10.9-1.2-16.2c1.6-10.7,4.3-21.2,6.6-31.7c6.7-29.6,11.1-59.6,11.2-90c0-15.1-0.9-30.3-2-45.4
			c-1.5-20.4-4.1-40.7-9.5-60.6c-2-7.3-4.6-14.7-5.2-22.2c-1.6-18.6,3.5-36.3,9.6-53.6c2.8-7.9,5.2-15.8,8.1-24.6
			c0.4,1.5,0.6,1.9,0.7,2.4c1.9,13.9,5.6,27,14.8,38.1c0.9,1.1,1.2,2.7,1.4,4.1c2.4,21.3,12.1,39.3,25.3,55.6
			c9.9,12.1,20.7,23.4,30.9,35.4c2.5,2.9,4.3,6.7,5.3,10.4c2.7,9.6,4.3,19.5,7.4,29c2.8,8.6,6.6,17,10.9,25c2.6,4.8,5.5,4.4,8.5,0
			c6.1,10.4,6.1,10.4,11.3,5.5c3.2,0,6.1,0.8,7.1-0.2c1.5-1.5,1.6-4.4,2-5.7c2.8-0.5,5.8,0.6,7-1.2c1.1-1.7-0.6-4.2-1.5-5.9
			c-4.1-7.4-8.5-14.7-12.6-22.1c-2.3-4.1-4.3-8.4-7.1-13.8c5.9,2.4,10.2,4.5,14.7,5.8c4.8,1.4,9.5,1,13.9-4.2
			c-13.2-7.5-26-14.8-38.8-22.1c0,0,0.1,0,0.1,0.1l0,0"/>


		<g id="glutes">

				<linearGradient id="glute_2_" gradientUnits="userSpaceOnUse" x1="157.6979" y1="443.0987" x2="220.7283" y2="443.0987" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#8BBECD"/>
				<stop  offset="1" style="stop-color:#598E9E"/>
			</linearGradient>

				<linearGradient id="glute_3_" gradientUnits="userSpaceOnUse" x1="225.8552" y1="443.7526" x2="288.5081" y2="443.7526" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#8BBECD"/>
				<stop  offset="1" style="stop-color:#598E9E"/>
			</linearGradient>
			<path id="glute" class="st109" d="M282.4,417.8c-13.7-8.3-25.6-15.5-37.5-22.6c-15.3-9.1-23-29.4-16.9-45.5
				c0.6-1.5,3.7-3.3,5.3-3.1c10.3,1.4,20.8,2.2,30.6,5.3c18.3,5.9,26.2,18.5,24.3,37.7C287.4,399.2,284.4,408.6,282.4,417.8z"/>
		</g>

		<g id="glutes_2">
	<path id="hip_3_" class="st130" d="M204.1,341.6c-16,0.2-31.1,0.6-39.7,16.3c-3.3-11.9,2.6-28.4,11.1-31.8
				C183.8,322.8,198.1,330,204.1,341.6z"/>

				<linearGradient id="hip_5_" gradientUnits="userSpaceOnUse" x1="245.05" y1="485.5564" x2="282.8076" y2="485.5564" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#8BBECD"/>
				<stop  offset="1" style="stop-color:#598E9E"/>
			</linearGradient>
</g>

<g id="Lats_12_">
			<path id="back_6_" class="st111" d="M189.4,294.9c-10.7-18.1-20.9-35.3-31-52.7c-8.4-14.5-11.8-30.2-11.1-47.2
				c11.6,2.4,22.9,4.1,33.8,7.3c4.4,1.3,8.2,5.6,11.8,9c7.8,7.3,15.5,14.7,22.6,22.6c2.2,2.4,3.4,6.9,2.9,10.2
				C215.6,265.4,204.6,282.2,189.4,294.9z"/>

			<path id="back_7_" class="st110" d="M258.6,294.5c-15.2-7.9-32.4-38-30.8-55.7c0.2-1.8,1.2-3.9,2.5-5.1
				c8.3-8,16.5-16.2,25.3-23.6c4.6-3.8,10.2-7.2,15.8-8.8c8.5-2.4,17.5-3,28.8-4.8c-1.8,10.6-3,21-5.5,31c-1.6,6.2-5,12.1-8.1,17.8
				C277.4,261.7,267.9,278,258.6,294.5z"/>
</g>

		<g id="unused_back_muscles">

<linearGradient id="calf_8_" gradientUnits="userSpaceOnUse" x1="163.7551" y1="242.6949" x2="186.3277" y2="242.6949" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#8BBECD"/>
				<stop  offset="1" style="stop-color:#598E9E"/>
			</linearGradient>

<linearGradient id="back_8_" gradientUnits="userSpaceOnUse" x1="227.6462" y1="580.4449" x2="300.2366" y2="580.4449" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#8BBECD"/>
				<stop  offset="1" style="stop-color:#598E9E"/>
			</linearGradient>

				<linearGradient id="back_9_" gradientUnits="userSpaceOnUse" x1="147.2609" y1="580.9949" x2="218.5626" y2="580.9949" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#8BBECD"/>
				<stop  offset="1" style="stop-color:#598E9E"/>
			</linearGradient>

				<linearGradient id="back_10_" gradientUnits="userSpaceOnUse" x1="227.334" y1="643.9181" x2="292.95" y2="643.9181" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#8BBECD"/>
				<stop  offset="1" style="stop-color:#598E9E"/>
			</linearGradient>
			<path id="back_5_" class="st112" d="M227.4,222.7c0-21.7-0.1-43.3,0.2-64.9c0-2.3,2.4-5.6,4.6-6.8c18.9-10.8,39.2-13.7,60.8-10.3
				c-17.2,6.5-25.4,21-32.6,36.1c-5.3,11-9.9,22.3-16,32.8c-3.3,5.8-9,10.1-13.7,15.1C229.4,224,228.4,223.3,227.4,222.7z"/>

				<linearGradient id="back_11_" gradientUnits="userSpaceOnUse" x1="152.85" y1="644.4656" x2="219.1915" y2="644.4656" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#8BBECD"/>
				<stop  offset="1" style="stop-color:#598E9E"/>
			</linearGradient>
			<path id="back_4_" class="st113" d="M216.4,224.1c-5.7-6.9-11.1-11.9-14.7-18c-5.3-9-9.2-18.7-13.7-28.1
				c-7.7-16.1-16.5-31.2-35.1-37.6c22.8-4,43.9-0.3,63.4,12.1c1.6,1,2.9,4,2.9,6.1c0.1,20,0,39.9-0.1,59.9
				C218.9,219.3,218.3,220.1,216.4,224.1z"/>

				<linearGradient id="back_12_" gradientUnits="userSpaceOnUse" x1="190.1273" y1="518.2949" x2="220.55" y2="518.2949" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#8BBECD"/>
				<stop  offset="1" style="stop-color:#598E9E"/>
			</linearGradient>

				<linearGradient id="back_13_" gradientUnits="userSpaceOnUse" x1="226.85" y1="519.145" x2="256.2477" y2="519.145" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#8BBECD"/>
				<stop  offset="1" style="stop-color:#598E9E"/>
			</linearGradient>

				<linearGradient id="back_14_" gradientUnits="userSpaceOnUse" x1="146.65" y1="646.9949" x2="185.25" y2="646.9949" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#8BBECD"/>
				<stop  offset="1" style="stop-color:#598E9E"/>
			</linearGradient>
			<path id="back_1_" class="st116" d="M146.6,190.7c5.7-14.3,10.8-25.5,23.2-32.2c10,11.3,14.2,24,15.4,40.9
				C171.9,196.3,159.9,193.6,146.6,190.7z"/>

				<linearGradient id="back_15_" gradientUnits="userSpaceOnUse" x1="262.75" y1="647.2324" x2="298.1862" y2="647.2324" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#8BBECD"/>
				<stop  offset="1" style="stop-color:#598E9E"/>
			</linearGradient>
			<path id="back" class="st117" d="M262.8,199c0.3-15.7,4.8-27.1,11.7-37.6c2.7-4.1,6.4-3.7,8.8-0.4c5.4,7.3,10.2,15.1,14.8,22.9
				c0.6,1.1-0.9,5-2.2,5.4C285.4,192.7,274.8,195.5,262.8,199z"/>
		</g>
		<g id="back_of_head_unused">

				<linearGradient id="back_head_2_" gradientUnits="userSpaceOnUse" x1="195.2639" y1="774.4715" x2="219.737" y2="774.4715" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#8BBECD"/>
				<stop  offset="1" style="stop-color:#598E9E"/>
			</linearGradient>
			<path id="back_head_1_" class="st118" d="M219.6,54.3c-0.5,5.2-2.4,10.2-5.7,14.2c-0.4,0.5-1,1.1-1.7,1.1c-0.4,0-0.9-0.2-1.2-0.4
				c-5-2.9-9.7-6.8-12.6-11.8c-4.3-7.3-5.7-22.8,6-24c3.9-0.4,7.9,1.5,10.6,4.4s4.1,6.8,4.6,10.7C219.8,50.4,219.9,52.4,219.6,54.3z
				"/>

				<linearGradient id="back_head_3_" gradientUnits="userSpaceOnUse" x1="42.3933" y1="774.4715" x2="66.8714" y2="774.4715" gradientTransform="matrix(-1 0 0 -1 292.5714 825.9012)">
				<stop  offset="0" style="stop-color:#8BBECD"/>
				<stop  offset="1" style="stop-color:#598E9E"/>
			</linearGradient>
			<path id="back_head" class="st119" d="M225.9,54.3c0.5,5.2,2.4,10.2,5.7,14.2c0.4,0.5,1,1.1,1.7,1.1c0.4,0,0.9-0.2,1.2-0.4
				c5-2.9,9.7-6.8,12.6-11.8c4.3-7.3,5.7-22.8-6-24c-3.9-0.4-7.9,1.5-10.6,4.4s-4.1,6.8-4.6,10.7C225.6,50.4,225.6,52.4,225.9,54.3z
				"/>
		</g>
		<g id="FEET_BACK">

				<linearGradient id="foot_2_" gradientUnits="userSpaceOnUse" x1="235.8119" y1="52.5852" x2="270.6805" y2="52.5852" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#F8FAFB"/>
				<stop  offset="1" style="stop-color:#888888"/>
			</linearGradient>
			<path id="foot_1_" class="st120" d="M246.1,760.2c1.9,7.3,3.9,14.6,5.8,21.9c1.5-0.1,3.1-0.1,4.6-0.2c1.1-7.4,2.1-14.7,3.2-22.1
				c0.5-0.2,1-0.4,1.5-0.6c3,6.5,6.3,12.9,8.8,19.6c1.6,4.2,0.3,7.9-5,8.1c-7.4,0.4-14.8,0.7-22.3,0.6c-5.7-0.1-8.2-3.7-6.3-9.1
				c2.2-6.3,5.2-12.4,7.8-18.6C244.9,759.9,245.4,760.1,246.1,760.2z"/>

				<linearGradient id="foot_3_" gradientUnits="userSpaceOnUse" x1="175.806" y1="54.6949" x2="208.4123" y2="54.6949" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#F8FAFB"/>
				<stop  offset="1" style="stop-color:#888888"/>
			</linearGradient>
			<path id="foot" class="st121" d="M187.8,755.6c1.2,10.1,2.1,18,3.2,27.4c10.6-5.6,7.3-14.9,11-21.4c0.4,0.3,1.3,0.7,1.5,1.2
				c1.7,7.2,3.3,14.4,5,21.7c-10.2,0.9-20.4,2-30.6,2.4c-0.6,0-1.7-5.1-2-7.9c-0.1-1.3,1-2.8,1.7-4.1
				C180.6,769.1,183.6,763.3,187.8,755.6z"/>
		</g>
		<g id="Calves_Back">

				<linearGradient id="calf_8_" gradientUnits="userSpaceOnUse" x1="163.7551" y1="242.6949" x2="186.3277" y2="242.6949" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#8BBECD"/>
				<stop  offset="1" style="stop-color:#598E9E"/>
			</linearGradient>
			<path id="calf_7_" class="st122" d="M179.9,523.7c0.9,5.4,1.9,8.9,2.1,12.5c1.6,30.2,3.3,60.5,4.4,90.7c0.2,4.6-2.5,9.3-4.4,15.9
				c-13.2-12.9-19.7-26.1-17.9-41.1c3-25,8.3-49.8,12.6-74.6C176.8,526.7,177.4,526.4,179.9,523.7z"/>

				<linearGradient id="calf_9_" gradientUnits="userSpaceOnUse" x1="236.507" y1="237.4449" x2="261.95" y2="237.4449" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#8BBECD"/>
				<stop  offset="1" style="stop-color:#598E9E"/>
			</linearGradient>
			<path id="calf_6_" class="st123" d="M261.9,536.9c-4.8,36,4.5,72.1-19.3,103.2C229.1,618.2,239.1,563.9,261.9,536.9z"/>

				<linearGradient id="calf_10_" gradientUnits="userSpaceOnUse" x1="259.8386" y1="242.3949" x2="280.4865" y2="242.3949" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#8BBECD"/>
				<stop  offset="1" style="stop-color:#598E9E"/>
			</linearGradient>
			<path id="calf_5_" class="st124" d="M269.3,526.5c3.8,22.2,8.4,44.2,10.9,66.5c1.2,10.2-0.9,21.2-3.1,31.4
				c-1.3,5.7-5.9,10.7-9.3,16.4c-6.6-3.6-8.2-7.7-7.8-14.3c1.9-29.4,3.2-58.8,4.8-88.2c0.2-4,1.1-8,1.7-12
				C267.4,526.4,268.3,526.4,269.3,526.5z"/>

				<linearGradient id="calf_11_" gradientUnits="userSpaceOnUse" x1="186.7107" y1="236.3949" x2="209.626" y2="236.3949" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#8BBECD"/>
				<stop  offset="1" style="stop-color:#598E9E"/>
			</linearGradient>
			<path id="calf_4_" class="st125" d="M186.9,539.4c19.8,21.9,29.4,75.4,17.4,100.3c-4-7.4-9.1-13.1-10.2-19.5
				c-3.2-19.8-5.1-39.9-7.1-59.9C186.4,553.9,186.9,547.3,186.9,539.4z"/>

				<linearGradient id="calf_12_" gradientUnits="userSpaceOnUse" x1="250.45" y1="129.795" x2="271.8344" y2="129.795" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#8BBECD"/>
				<stop  offset="1" style="stop-color:#598E9E"/>
			</linearGradient>
			<path id="calf_3_" class="st126" d="M250.4,745.6c0.9-16.2,1.5-32.4,3-48.5c1-10.9,3.1-21.8,4.9-32.6c0.5-3.2,1-6.7,2.6-9.4
				c1.9-3.3,5-6,7.6-8.9c1.2,3.9,4,8.2,3.2,11.7c-2.4,11-7,21.5-9.2,32.6c-3.1,15.7-4.9,31.7-7.3,47.6c-0.4,2.7-1.3,5.3-1.9,8
				C252.4,745.9,251.4,745.7,250.4,745.6z"/>

				<linearGradient id="calf_13_" gradientUnits="userSpaceOnUse" x1="174.5278" y1="132.245" x2="196.5951" y2="132.245" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#8BBECD"/>
				<stop  offset="1" style="stop-color:#598E9E"/>
			</linearGradient>
			<path id="calf_2_" class="st127" d="M193.8,742.2c-1.1-7-1.7-14.1-3.3-21c-3.9-17-8.4-33.9-12.5-50.9c-1.4-6-3-12.1-3.5-18.2
				c-0.2-2.2,2.7-4.6,4.2-6.9c1.9,1.7,5,3,5.6,5c2.6,9.1,5.5,18.3,6.6,27.7c2.4,21.2,3.8,42.6,5.6,63.9
				C195.6,741.9,194.6,742.1,193.8,742.2z"/>

				<linearGradient id="calf_14_" gradientUnits="userSpaceOnUse" x1="198.7529" y1="133.745" x2="207.1308" y2="133.745" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#8BBECD"/>
				<stop  offset="1" style="stop-color:#598E9E"/>
			</linearGradient>
			<path id="calf_1_" class="st128" d="M207.1,644.1c-0.1,31.7-2.9,65-5.5,96.2C193.3,708.4,205.9,644,207.1,644.1z"/>

				<linearGradient id="calf_15_" gradientUnits="userSpaceOnUse" x1="239.6441" y1="133.4949" x2="249.3942" y2="133.4949" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#8BBECD"/>
				<stop  offset="1" style="stop-color:#598E9E"/>
			</linearGradient>
			<path id="calf" class="st129" d="M240.6,644.2c6.2,31.9,12.1,63.9,6.5,96.5C246.6,708.4,236.6,676.7,240.6,644.2z"/>
		</g>



		<g id="hips_back_1_">

				<linearGradient id="hip_4_" gradientUnits="userSpaceOnUse" x1="163.4762" y1="484.3466" x2="204.1063" y2="484.3466" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#8BBECD"/>
				<stop  offset="1" style="stop-color:#598E9E"/>
			</linearGradient>

				<linearGradient id="hip_5_" gradientUnits="userSpaceOnUse" x1="245.05" y1="485.5564" x2="282.8076" y2="485.5564" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#8BBECD"/>
				<stop  offset="1" style="stop-color:#598E9E"/>
			</linearGradient>

				<linearGradient id="hip_6_" gradientUnits="userSpaceOnUse" x1="261.9046" y1="526.4449" x2="273.4543" y2="526.4449" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#F8FAFB"/>
				<stop  offset="1" style="stop-color:#888888"/>
			</linearGradient>

				<linearGradient id="hip_7_" gradientUnits="userSpaceOnUse" x1="173.0188" y1="526.6949" x2="184.2506" y2="526.6949" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#F8FAFB"/>
				<stop  offset="1" style="stop-color:#888888"/>
			</linearGradient>
		</g>

<g id="Glutes_12_">
			<path id="hip_3_" class="st130" d="M204.1,341.6c-16,0.2-31.1,0.6-39.7,16.3c-3.3-11.9,2.6-28.4,11.1-31.8
				C183.8,322.8,198.1,330,204.1,341.6z"/>

            <path id="hip_2_" class="st131" d="M282.6,354.9c-9.9-12.8-23.8-13.3-37.6-14.1c4.1-9.4,17.5-16.8,25.3-14.5
				C278.1,328.4,283.9,341,282.6,354.9z"/>

            <path id="glute_1_" class="st108" d="M165.8,419.2c-6.7-14.8-11.5-31.3-4.9-48.3c2.6-6.5,8.9-13.8,15.2-16.2
				c12.3-4.6,25.7-6.1,38.8-8.2c1.5-0.2,5,3.7,5.3,6c2.5,20.7-2.7,37.1-23.6,46.7C185.9,404.2,176.4,412.2,165.8,419.2z"/>

            <path id="glute" class="st109" d="M282.4,417.8c-13.7-8.3-25.6-15.5-37.5-22.6c-15.3-9.1-23-29.4-16.9-45.5
				c0.6-1.5,3.7-3.3,5.3-3.1c10.3,1.4,20.8,2.2,30.6,5.3c18.3,5.9,26.2,18.5,24.3,37.7C287.4,399.2,284.4,408.6,282.4,417.8z"/>

</g>


 <g id="Lumbo_12_">

      			<path id="hip_1_" class="st132" d="M273.4,280.1c0,13,0,26,0,39.4c-11.7-5.6-13.6-9.2-9.8-20.2c2.3-6.7,5.5-13.2,8.3-19.8
				C272.4,279.7,272.9,279.9,273.4,280.1z"/>
      			<path id="hip" class="st133" d="M173.1,320.6c0-14.5,0-28.9,0-42.7C187.8,290.5,188.3,313.9,173.1,320.6z"/>

                <path id="back_3_" class="st114" d="M220.6,275.9c-1.6,21-3.2,42-4.9,63c-1.2,0.3-2.3,0.7-3.5,1c-7.3-8.9-14.9-17.7-21.7-26.9
				c-1-1.4,0.5-5.8,2.1-7.7c8.2-10.1,16.7-20,25.1-29.9C218.6,275.6,219.6,275.8,220.6,275.9z"/>

                <path id="back_2_" class="st115" d="M231.9,338.9c-1.7-21.3-3.4-42.7-5.1-64c0.7-0.2,1.5-0.3,2.2-0.5
				c8.8,10.7,17.9,21.1,26.3,32.2c1.5,2,1.1,7.1-0.5,9.3c-5.9,8.1-12.7,15.6-19.2,23.3C234.4,339.1,233.1,339,231.9,338.9z"/>

</g>


		<g id="hamstrings_back">

				<linearGradient id="ham_10_" gradientUnits="userSpaceOnUse" x1="253.0836" y1="351.3752" x2="272.8602" y2="351.3752" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#8BBECD"/>
				<stop  offset="1" style="stop-color:#598E9E"/>
			</linearGradient>
			<path id="ham_8_" class="st134" d="M259.9,415.7c0.2,0.2,0.4,0.4,0.7,0.6c1,1.1,1.5,2.6,1.9,4c2,6.8,6.6,15.9,6.6,23.1
				c2.3,10,3.7,20.3,3.8,30.6c0.1,10.2-1,20.4-3.5,30.3c-1.3,5.1-2.9,10.1-4.8,15.1c-1,2.7-2.2,5.3-3.4,7.8
				c-0.8,1.6-3.8,5.5-3.7,7.1c-1.5-24.4-3.8-49.1-4.3-73.7c-0.2-8.8,0.4-17.6,1.3-26.4c0.4-4.4,0.9-8.8,1.3-13.2
				C255.9,418.7,256.3,412.6,259.9,415.7z"/>

				<linearGradient id="ham_11_" gradientUnits="userSpaceOnUse" x1="174.6093" y1="351.8449" x2="193.7528" y2="351.8449" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#8BBECD"/>
				<stop  offset="1" style="stop-color:#598E9E"/>
			</linearGradient>
			<path id="ham_7_" class="st135" d="M188.9,415.4c11.5,39.8-1.3,78.6,2.1,117.4C170.3,509.9,168.9,448.7,188.9,415.4z"/>

				<linearGradient id="ham_12_" gradientUnits="userSpaceOnUse" x1="194.7556" y1="384.1448" x2="216.6576" y2="384.1448" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#8BBECD"/>
				<stop  offset="1" style="stop-color:#598E9E"/>
			</linearGradient>
			<path id="ham_6_" class="st136" d="M211.9,399.4c10.4,29.4,1.5,57-4,84.8c-0.8,0.1-9.7-39.8-12.4-59.9
				C193.3,408.7,195.6,405.8,211.9,399.4z"/>

				<linearGradient id="ham_13_" gradientUnits="userSpaceOnUse" x1="230.0461" y1="383.8449" x2="251.7112" y2="383.8449" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#8BBECD"/>
				<stop  offset="1" style="stop-color:#598E9E"/>
			</linearGradient>
			<path id="ham_5_" class="st137" d="M235.3,398.9c15.2,6.8,17.7,9.7,16,23.9c-2.4,20.9-6,41.7-10.1,62.5
				C233.4,457.1,223.9,429.1,235.3,398.9z"/>

				<linearGradient id="ham_14_" gradientUnits="userSpaceOnUse" x1="159.9587" y1="344.3449" x2="180.9214" y2="344.3449" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#8BBECD"/>
				<stop  offset="1" style="stop-color:#598E9E"/>
			</linearGradient>
			<path id="ham_4_" class="st138" d="M180.9,418.4c-12.1,32.2-12,63.1-7.3,94.9c1.4,9.7-3.1,20.2-5,31.5
				C157.6,510.5,152.9,440.8,180.9,418.4z"/>

				<linearGradient id="ham_15_" gradientUnits="userSpaceOnUse" x1="266.95" y1="346.9658" x2="286.8203" y2="346.9658" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#8BBECD"/>
				<stop  offset="1" style="stop-color:#598E9E"/>
			</linearGradient>
			<path id="ham_3_" class="st139" d="M269.8,418.3c9.5,2.9,9.7,17.5,12.4,26.9c8.9,31.5,3.4,63-2.1,94.5c-3-10.8-8.2-20.6-5.7-32.9
				c5.7-27.5,4.6-54.9-7.4-86.8C267.9,419.4,268.6,418,269.8,418.3z"/>

				<linearGradient id="ham_16_" gradientUnits="userSpaceOnUse" x1="242.157" y1="317.0949" x2="252.4799" y2="317.0949" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#8BBECD"/>
				<stop  offset="1" style="stop-color:#598E9E"/>
			</linearGradient>
			<path id="ham_2_" class="st140" d="M247.4,544.2c-9.3-23.5-4-47.1-0.3-70.7C252.3,497,255.9,520.5,247.4,544.2z"/>

				<linearGradient id="ham_17_" gradientUnits="userSpaceOnUse" x1="194.7805" y1="315.1449" x2="204.5211" y2="315.1449" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#8BBECD"/>
				<stop  offset="1" style="stop-color:#598E9E"/>
			</linearGradient>
			<path id="ham_1_" class="st141" d="M200.1,475.9c3.2,23.3,8.2,46.5,0,69.8C190.9,522.4,195.4,499.2,200.1,475.9z"/>

				<linearGradient id="ham_18_" gradientUnits="userSpaceOnUse" x1="283.926" y1="397.545" x2="290.3925" y2="397.545" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#8BBECD"/>
				<stop  offset="1" style="stop-color:#598E9E"/>
			</linearGradient>
			<path id="ham" class="st142" d="M290.4,450c-7.5-13.7-9.7-27.3,0-43.2C290.4,422.7,290.4,436.4,290.4,450z"/>

				<linearGradient id="ham_19_" gradientUnits="userSpaceOnUse" x1="156.0855" y1="396.0449" x2="162.684" y2="396.0449" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#8BBECD"/>
				<stop  offset="1" style="stop-color:#598E9E"/>
			</linearGradient>
			<path id="ham_9_" class="st143" d="M156.1,407.8c9.7,14.8,7.8,29.5,0,44.2C156.1,437.2,156.1,422.5,156.1,407.8z"/>
		</g>
		<g id="Elbows_and_Tendonitis">

				<linearGradient id="tendon_8_" gradientUnits="userSpaceOnUse" x1="316.1501" y1="514.8449" x2="353.75" y2="514.8449" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#F8FAFB"/>
				<stop  offset="1" style="stop-color:#888888"/>
			</linearGradient>
			<path id="tendon_7_" class="st144" d="M353.8,342.3c-19.5-17.1-33.3-35.9-37.6-62.4c8.2,3.9,14.3,7.3,17.4,15.3
				C339.8,310.7,346.6,325.7,353.8,342.3z"/>

				<linearGradient id="tendon_9_" gradientUnits="userSpaceOnUse" x1="92.2251" y1="513.095" x2="127.38" y2="513.095" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#F8FAFB"/>
				<stop  offset="1" style="stop-color:#888888"/>
			</linearGradient>
			<path id="tendon_6_" class="st145" d="M127.4,282.7c-2.5,26-16,44.9-35.2,60.3c8.2-17.6,16-35.4,24.7-52.7
				C118.6,286.9,123.9,285.2,127.4,282.7z"/>

				<linearGradient id="tendon_10_" gradientUnits="userSpaceOnUse" x1="64.7203" y1="502.2449" x2="94.6048" y2="502.2449" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#F8FAFB"/>
				<stop  offset="1" style="stop-color:#888888"/>
			</linearGradient>
			<path id="tendon_5_" class="st146" d="M94.6,284.2c-7.8,26.4-15.5,52.9-23.4,79.7c-7.4-2.3-7.1-7.8-5.5-12.8
				c4.1-12.7,8.5-25.4,13.5-37.7c4.1-10.2,9.1-19.9,13.8-29.9C93.4,283.7,94.1,284,94.6,284.2z"/>

				<linearGradient id="tendon_11_" gradientUnits="userSpaceOnUse" x1="82.0344" y1="508.1449" x2="106.1967" y2="508.1449" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#F8FAFB"/>
				<stop  offset="1" style="stop-color:#888888"/>
			</linearGradient>
			<path id="tendon_4_" class="st147" d="M106.3,286.8c-2.5,24-9.7,43.8-23.6,62C79.1,333.6,91.1,301.6,106.3,286.8z"/>

				<linearGradient id="tendon_12_" gradientUnits="userSpaceOnUse" x1="340.7641" y1="510.9949" x2="364.0137" y2="510.9949" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#F8FAFB"/>
				<stop  offset="1" style="stop-color:#888888"/>
			</linearGradient>
			<path id="tendon_3_" class="st148" d="M363.9,344.7c-12.7-11.3-24.7-42.3-23.1-59.5C352.6,293.2,364.3,323.2,363.9,344.7z"/>

				<linearGradient id="tendon_13_" gradientUnits="userSpaceOnUse" x1="349.2005" y1="505.8949" x2="378.4676" y2="505.8949" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#F8FAFB"/>
				<stop  offset="1" style="stop-color:#888888"/>
			</linearGradient>
			<path id="tendon_2_" class="st149" d="M377.4,363.7c-9.5-29.6-18.6-57.7-28.1-87.3C362.9,287.9,383.6,351.1,377.4,363.7z"/>

				<linearGradient id="tendon_14_" gradientUnits="userSpaceOnUse" x1="108.512" y1="549.6949" x2="125.1726" y2="549.6949" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#F8FAFB"/>
				<stop  offset="1" style="stop-color:#888888"/>
			</linearGradient>
			<path id="tendon_1_" class="st150" d="M108.6,285.6c2.3-6.3,4.1-12.9,7.3-18.8c1-1.7,6.1-1.1,9.3-1.6c-0.2,2.8,0.7,6.3-0.7,8.3
				c-3.5,5-7.9,9.2-12,13.8C111.1,286.8,109.9,286.2,108.6,285.6z"/>

				<linearGradient id="tendon_15_" gradientUnits="userSpaceOnUse" x1="321.9498" y1="550.1964" x2="335.6571" y2="550.1964" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#F8FAFB"/>
				<stop  offset="1" style="stop-color:#888888"/>
			</linearGradient>
			<path id="tendon" class="st151" d="M334.4,286.1c-4.3-4.7-8.5-8.8-11.9-13.5c-1.1-1.6-0.2-4.6-0.3-6.9c2.5,0,5.5-0.8,7.5,0.2
				C334.9,268.3,337.3,278.4,334.4,286.1z"/>
		</g>
		<g id="Biceps_Triceps_Back">

				<linearGradient id="tricep_bicep_8_" gradientUnits="userSpaceOnUse" x1="121.3716" y1="654.7384" x2="162.55" y2="654.7384" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#8BBECD"/>
				<stop  offset="1" style="stop-color:#598E9E"/>
			</linearGradient>
			<path id="tricep_bicep_7_" class="st152" d="M126.3,195.7c-8.3-18.2-5.6-34.9,5-43.9c8.2-7,19.1-7,31.3,1.4
				C150.8,167,139.1,180.7,126.3,195.7z"/>

				<linearGradient id="tricep_bicep_9_" gradientUnits="userSpaceOnUse" x1="283.9055" y1="655.5128" x2="325.1105" y2="655.5128" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#8BBECD"/>
				<stop  offset="1" style="stop-color:#598E9E"/>
			</linearGradient>
			<path id="tricep_bicep_6_" class="st153" d="M320.9,194.4c-13-14.6-24.9-27.8-36.9-41.2c11.4-8.4,22.5-8.8,30.9-2
				C325.4,159.7,328.6,176.7,320.9,194.4z"/>

				<linearGradient id="tricep_bicep_10_" gradientUnits="userSpaceOnUse" x1="303.4608" y1="598.895" x2="318.9385" y2="598.895" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#8BBECD"/>
				<stop  offset="1" style="stop-color:#598E9E"/>
			</linearGradient>
			<path id="tricep_bicep_5_" class="st154" d="M315.9,263.8c-20.7-22-9.2-48.6-10-73.5C318.4,213.4,322.3,237.8,315.9,263.8z"/>

				<linearGradient id="tricep_bicep_11_" gradientUnits="userSpaceOnUse" x1="128.5327" y1="597.7949" x2="143.0838" y2="597.7949" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#8BBECD"/>
				<stop  offset="1" style="stop-color:#598E9E"/>
			</linearGradient>
			<path id="tricep_bicep_4_" class="st155" d="M140.8,192.7c0,24,9.3,49.2-8.9,70.9C124.9,238.6,129.6,215.3,140.8,192.7z"/>

				<linearGradient id="tricep_bicep_12_" gradientUnits="userSpaceOnUse" x1="113.2537" y1="596.7949" x2="123.9305" y2="596.7949" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#8BBECD"/>
				<stop  offset="1" style="stop-color:#598E9E"/>
			</linearGradient>
			<path id="tricep_bicep_3_" class="st156" d="M123.9,205.5c-3.1,15.8-6.3,31.5-9.4,47.3C111.4,235.8,114.1,220,123.9,205.5z"/>

				<linearGradient id="tricep_bicep_13_" gradientUnits="userSpaceOnUse" x1="323.4806" y1="600.0449" x2="333.1095" y2="600.0449" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#8BBECD"/>
				<stop  offset="1" style="stop-color:#598E9E"/>
			</linearGradient>
			<path id="tricep_bicep" class="st157" d="M332.8,246.4c-3.1-13.7-6.2-27.3-9.2-41C332.1,217.7,334.1,231.6,332.8,246.4z"/>

				<linearGradient id="tricep_bicep_14_" gradientUnits="userSpaceOnUse" x1="118.7552" y1="580.5449" x2="125.9178" y2="580.5449" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#8BBECD"/>
				<stop  offset="1" style="stop-color:#598E9E"/>
			</linearGradient>
			<path id="tricep_bicep_1_" class="st158" d="M125.9,228.9c-1.2,10.2-2.3,20.4-3.7,33C116.4,253.9,118.1,241.4,125.9,228.9z"/>

				<linearGradient id="tricep_bicep_15_" gradientUnits="userSpaceOnUse" x1="321.85" y1="581.395" x2="329.9791" y2="581.395" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#8BBECD"/>
				<stop  offset="1" style="stop-color:#598E9E"/>
			</linearGradient>
			<path id="tricep_bicep_2_" class="st159" d="M324.9,258.8c-1-9.3-2.1-18.7-3.1-28c1-0.2,2-0.3,3-0.5c1.7,9.3,3.4,18.6,5.1,27.8
				C328.4,258.4,326.6,258.6,324.9,258.8z"/>
		</g>
		<g id="Neck_Muscles_Back">

				<linearGradient id="neck_6_" gradientUnits="userSpaceOnUse" x1="204.8942" y1="727.6949" x2="218.9269" y2="727.6949" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#8BBECD"/>
				<stop  offset="1" style="stop-color:#598E9E"/>
			</linearGradient>
			<path id="neck_5_" class="st160" d="M218.9,120c-5.5-2.7-10.2-5-14-6.8c4.6-13.3,8.6-25,12.6-36.7c0.5,0,1,0.1,1.4,0.1
				C218.9,90.4,218.9,104.3,218.9,120z"/>

				<linearGradient id="neck_7_" gradientUnits="userSpaceOnUse" x1="228.1876" y1="727.345" x2="242.0443" y2="727.345" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#8BBECD"/>
				<stop  offset="1" style="stop-color:#598E9E"/>
			</linearGradient>
			<path id="neck_4_" class="st161" d="M229.9,76.7c3.9,11.6,7.8,23.3,12.2,36.4c-3.6,1.9-8,4.2-13.9,7.4c0-15.9,0-29.8,0-43.8
				C228.8,76.7,229.3,76.7,229.9,76.7z"/>

				<linearGradient id="neck_8_" gradientUnits="userSpaceOnUse" x1="237.9343" y1="732.595" x2="248.0669" y2="732.595" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#8BBECD"/>
				<stop  offset="1" style="stop-color:#598E9E"/>
			</linearGradient>
			<path id="neck_3_" class="st162" d="M242.4,79.9c1.7,8.2,3.4,16.4,5.6,26.9c-9.5-7.5-12.1-17.7-8.8-26.4
				C240.4,80.3,241.4,80.1,242.4,79.9z"/>

				<linearGradient id="neck_9_" gradientUnits="userSpaceOnUse" x1="81.6112" y1="731.895" x2="91.7438" y2="731.895" gradientTransform="matrix(-1 0 0 -1 291.5717 825.9012)">
				<stop  offset="0" style="stop-color:#8BBECD"/>
				<stop  offset="1" style="stop-color:#598E9E"/>
			</linearGradient>
			<path id="neck_2_" class="st163" d="M205.4,80.6c-1.7,8.2-3.4,16.4-5.6,26.9c9.5-7.5,12.1-17.7,8.8-26.4
				C207.6,81,206.4,80.8,205.4,80.6z"/>

				<linearGradient id="neck_10_" gradientUnits="userSpaceOnUse" x1="175.35" y1="696.9453" x2="218.3495" y2="696.9453" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#8BBECD"/>
				<stop  offset="1" style="stop-color:#598E9E"/>
			</linearGradient>
			<path id="neck_1_" class="st164" d="M217.8,141.1c-13.5-2.8-27-5.7-42.4-8.9c8.9-5.5,16.4-12.9,25.2-15
				C211.4,114.6,220.9,129.4,217.8,141.1z"/>

				<linearGradient id="neck_11_" gradientUnits="userSpaceOnUse" x1="226.9987" y1="696.645" x2="270.15" y2="696.645" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#8BBECD"/>
				<stop  offset="1" style="stop-color:#598E9E"/>
			</linearGradient>
			<path id="neck" class="st165" d="M246.9,115.7c7.3,5.1,14.8,10.3,23.2,16.2c-14.4,3.7-27.9,7.1-42.9,11c0.3-6.2-1.5-14,1.6-18.3
				C232.1,120,240.1,118.8,246.9,115.7z"/>
<linearGradient id="back_head_2_" gradientUnits="userSpaceOnUse" x1="195.2639" y1="774.4715" x2="219.737" y2="774.4715" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#8BBECD"/>
				<stop  offset="1" style="stop-color:#598E9E"/>
			</linearGradient>
			<path id="back_head_1_" class="st118" d="M219.6,54.3c-0.5,5.2-2.4,10.2-5.7,14.2c-0.4,0.5-1,1.1-1.7,1.1c-0.4,0-0.9-0.2-1.2-0.4
				c-5-2.9-9.7-6.8-12.6-11.8c-4.3-7.3-5.7-22.8,6-24c3.9-0.4,7.9,1.5,10.6,4.4s4.1,6.8,4.6,10.7C219.8,50.4,219.9,52.4,219.6,54.3z
				"/>

				<linearGradient id="back_head_3_" gradientUnits="userSpaceOnUse" x1="42.3933" y1="774.4715" x2="66.8714" y2="774.4715" gradientTransform="matrix(-1 0 0 -1 292.5714 825.9012)">
				<stop  offset="0" style="stop-color:#8BBECD"/>
				<stop  offset="1" style="stop-color:#598E9E"/>
			</linearGradient>
			<path id="back_head" class="st119" d="M225.9,54.3c0.5,5.2,2.4,10.2,5.7,14.2c0.4,0.5,1,1.1,1.7,1.1c0.4,0,0.9-0.2,1.2-0.4
				c5-2.9,9.7-6.8,12.6-11.8c4.3-7.3,5.7-22.8-6-24c-3.9-0.4-7.9,1.5-10.6,4.4s-4.1,6.8-4.6,10.7C225.6,50.4,225.6,52.4,225.9,54.3z
				"/>
<path id="back_5_" class="st112" d="M227.4,222.7c0-21.7-0.1-43.3,0.2-64.9c0-2.3,2.4-5.6,4.6-6.8c18.9-10.8,39.2-13.7,60.8-10.3
				c-17.2,6.5-25.4,21-32.6,36.1c-5.3,11-9.9,22.3-16,32.8c-3.3,5.8-9,10.1-13.7,15.1C229.4,224,228.4,223.3,227.4,222.7z"/>

				<linearGradient id="back_11_" gradientUnits="userSpaceOnUse" x1="152.85" y1="644.4656" x2="219.1915" y2="644.4656" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#8BBECD"/>
				<stop  offset="1" style="stop-color:#598E9E"/>
			</linearGradient>
			<path id="back_4_" class="st113" d="M216.4,224.1c-5.7-6.9-11.1-11.9-14.7-18c-5.3-9-9.2-18.7-13.7-28.1
				c-7.7-16.1-16.5-31.2-35.1-37.6c22.8-4,43.9-0.3,63.4,12.1c1.6,1,2.9,4,2.9,6.1c0.1,20,0,39.9-0.1,59.9
				C218.9,219.3,218.3,220.1,216.4,224.1z"/>

				<linearGradient id="back_12_" gradientUnits="userSpaceOnUse" x1="190.1273" y1="518.2949" x2="220.55" y2="518.2949" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#8BBECD"/>
				<stop  offset="1" style="stop-color:#598E9E"/>
			</linearGradient>

		</g>
		<g id="hands_back">

				<linearGradient id="hand_12_" gradientUnits="userSpaceOnUse" x1="36.9917" y1="436.3782" x2="65.6002" y2="436.3782" gradientTransform="matrix(0.9999 -1.026179e-02 -1.026438e-02 -0.9999 4.8931 826.2026)">
				<stop  offset="0" style="stop-color:#F8FAFB"/>
				<stop  offset="1" style="stop-color:#888888"/>
			</linearGradient>
			<path id="hand_5_" class="st166" d="M56.6,411.8c-2.9-3.2-5.4-6.2-8.3-8.9c-2.1-2-4.4-4.3-7-5.3c-5-1.9-4.3-4.8-2.1-7.9
				c5.1-7.4,10.5-14.6,15.9-21.8c0.6-0.8,2.7-1.3,3.4-0.9c2.8,1.8,7.4,4,7.4,6.2c0.3,12.8-0.2,25.7-7.5,37
				C58.1,410.6,57.6,410.9,56.6,411.8z"/>

				<linearGradient id="hand_13_" gradientUnits="userSpaceOnUse" x1="16.0835" y1="446.1779" x2="47.4243" y2="446.1779" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#F8FAFB"/>
				<stop  offset="1" style="stop-color:#888888"/>
			</linearGradient>
			<path id="hand_4_" class="st167" d="M16.1,389c11.4,4.9,30.3-6.9,31.3-19.6C37.3,375.8,27.3,382,16.1,389z"/>

				<linearGradient id="hand_14_" gradientUnits="userSpaceOnUse" x1="25.6746" y1="403.9449" x2="41.7208" y2="403.9449" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#F8FAFB"/>
				<stop  offset="1" style="stop-color:#888888"/>
			</linearGradient>
			<path id="hand_3_" class="st168" d="M29.4,423c-1.2,3.2-2.8,6.3-3.6,9.6c-0.4,1.7,0.3,3.7,0.5,5.6c1.5-0.9,3.7-1.5,4.4-2.9
				c3.8-7.9,7.3-15.9,10.7-23.9c0.6-1.5,0.1-3.5,0.1-5.3c-0.4-0.1-0.7-0.2-1.1-0.3c-2.1,3.3-4.2,6.4-10.6,16.3
				C29.8,422.5,29.6,422.7,29.4,423z"/>

				<linearGradient id="hand_15_" gradientUnits="userSpaceOnUse" x1="18.9443" y1="410.3949" x2="35.45" y2="410.3949" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#F8FAFB"/>
				<stop  offset="1" style="stop-color:#888888"/>
			</linearGradient>
			<path id="hand_2_" class="st169" d="M35.4,402.3c-0.7-0.3-1.5-0.6-2.2-0.9c-4.7,7.6-9.6,15-14,22.7c-0.8,1.4,0.2,3.7,0.4,5.6
				c1.8-0.7,4-0.9,5.4-2.1c1.8-1.5,3-3.7,4.4-5.7c0.1-0.3,0.3-0.6,0.4-0.9C31.8,414.9,33.6,408.6,35.4,402.3z"/>

				<linearGradient id="hand_16_" gradientUnits="userSpaceOnUse" x1="35.456" y1="399.795" x2="47.6299" y2="399.795" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#F8FAFB"/>
				<stop  offset="1" style="stop-color:#888888"/>
			</linearGradient>
			<path id="hand_1_" class="st170" d="M36.4,440.6c7.1-8.7,10.6-18.2,11.3-28.9C39.1,420.3,33.1,435.1,36.4,440.6z"/>

				<linearGradient id="hand_17_" gradientUnits="userSpaceOnUse" x1="46.2003" y1="401.5561" x2="55.4173" y2="401.5561" gradientTransform="matrix(1 0 0 -1 0 825.9012)">
				<stop  offset="0" style="stop-color:#F8FAFB"/>
				<stop  offset="1" style="stop-color:#888888"/>
			</linearGradient>
			<path id="hand" class="st171" d="M53.1,415.8c0.9-1.7-2.3,3.4-6.8,13.5c-0.5,1,0.5,2.7,0.8,4c1.2-0.8,3-1.4,3.4-2.5
				c1.8-4.6,3.3-9.3,4.9-14C54.6,416.6,53.9,416.2,53.1,415.8z"/>

				<linearGradient id="hand_18_" gradientUnits="userSpaceOnUse" x1="-1292.6062" y1="545.2791" x2="-1250.4513" y2="545.2791" gradientTransform="matrix(-0.6779 1.018252e-03 -1.018252e-03 -0.6779 -466.6331 762.6462)">
				<stop  offset="0" style="stop-color:#F8FAFB"/>
				<stop  offset="1" style="stop-color:#888888"/>
			</linearGradient>
			<path id="hand_11_" class="st172" d="M388.4,412.7c-7.4-11.3-8.1-24.2-7.9-37c0-2.2,4.6-4.4,7.4-6.3c0.7-0.5,2.8,0.1,3.4,0.9
				c5.5,7.1,10.9,14.3,16.1,21.7c2.3,3.2,2.9,6.1-2,8c-2.6,1-4.8,3.3-6.9,5.3c-2.8,2.7-5.3,5.8-8.2,9
				C389.1,413.4,388.6,413.1,388.4,412.7z"/>

				<linearGradient id="hand_19_" gradientUnits="userSpaceOnUse" x1="-1327.0273" y1="558.9313" x2="-1280.8398" y2="558.9313" gradientTransform="matrix(-0.6779 1.018252e-03 -1.018252e-03 -0.6779 -466.6331 762.6462)">
				<stop  offset="0" style="stop-color:#F8FAFB"/>
				<stop  offset="1" style="stop-color:#888888"/>
			</linearGradient>
			<path id="hand_10_" class="st173" d="M401.1,372.1c1.1,12.7,19.9,24.5,31.3,19.6C420.9,384.4,410.9,378.2,401.1,372.1z"/>

				<linearGradient id="hand_20_" gradientUnits="userSpaceOnUse" x1="-1308.3618" y1="501.3561" x2="-1284.7457" y2="501.3561" gradientTransform="matrix(-0.6779 1.018252e-03 -1.018252e-03 -0.6779 -466.6331 762.6462)">
				<stop  offset="0" style="stop-color:#F8FAFB"/>
				<stop  offset="1" style="stop-color:#888888"/>
			</linearGradient>
			<path id="hand_9_" class="st174" d="M415.6,421.6c-3.5-5.4-7-10.9-10.6-16.3c-0.4,0.1-0.7,0.2-1.1,0.3c0,1.8-0.5,3.8,0.1,5.3
				c3.2,7.6,6.6,15.5,10.7,23.9c0.7,1.3,2.9,1.9,4.4,2.9c0.2-1.9,0.9-3.9,0.5-5.6c-0.9-3.3-2.4-6.4-3.6-9.6
				C415.9,422.2,415.8,421.9,415.6,421.6z"/>

				<linearGradient id="hand_21_" gradientUnits="userSpaceOnUse" x1="-1320.5338" y1="506.5741" x2="-1296.2367" y2="506.5741" gradientTransform="matrix(-0.6779 1.018252e-03 -1.018252e-03 -0.6779 -466.6331 762.6462)">
				<stop  offset="0" style="stop-color:#F8FAFB"/>
				<stop  offset="1" style="stop-color:#888888"/>
			</linearGradient>
			<path id="hand_8_" class="st175" d="M417.1,423.4c0.1,0.3,0.3,0.6,0.4,0.9c1.4,1.9,2.6,4.2,4.4,5.7c1.4,1.2,3.6,1.4,5.4,2.1
				c0.2-1.9,1.2-4.3,0.4-5.6c-4.4-7.7-9.3-15.2-14-22.7c-0.7,0.3-1.5,0.6-2.2,0.9C413.4,410.8,415.3,417.1,417.1,423.4z"/>

				<linearGradient id="hand_22_" gradientUnits="userSpaceOnUse" x1="-1295.391" y1="495.2511" x2="-1277.4879" y2="495.2511" gradientTransform="matrix(-0.6779 1.018252e-03 -1.018252e-03 -0.6779 -466.6331 762.6462)">
				<stop  offset="0" style="stop-color:#F8FAFB"/>
				<stop  offset="1" style="stop-color:#888888"/>
			</linearGradient>
			<path id="hand_7_" class="st176" d="M398.9,411.2c0.7,10.7,4.1,20.2,11.3,28.9C413.4,434.5,407.4,419.7,398.9,411.2z"/>

				<linearGradient id="hand_23_" gradientUnits="userSpaceOnUse" x1="-1279.8173" y1="495.9466" x2="-1266.0038" y2="495.9466" gradientTransform="matrix(-0.6779 1.018252e-03 -1.018252e-03 -0.6779 -466.6331 762.6462)">
				<stop  offset="0" style="stop-color:#F8FAFB"/>
				<stop  offset="1" style="stop-color:#888888"/>
			</linearGradient>
			<path id="hand_6_" class="st177" d="M391.1,417.4c1.7,5.1,3.1,9.7,4.9,14c0.4,1.1,2.1,3,3.4,2.5c1.3-0.5,1.3-3,0.8-4
				c-2-4.6-4.5-9-6.8-13.5C392.6,416.7,391.9,417,391.1,417.4z"/>
		</g>
	</g>
</g>
</svg>';
			break;

	}

return $output;

}

add_shortcode('icons','svgs');

?>
