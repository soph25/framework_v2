<?php
namespace Framework\Middleware;

use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

class NotFoundMiddleware implements MiddlewareInterface
{

    /**
     * Process an incoming server request and return a response, optionally delegating
     * response creation to a handler.
     */
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        return new Response(404, [], '<h1>Erreur 404</h1><svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.0" width="400" height="350" id="svg2" xml:space="preserve" viewBox="0 0 800 700"><defs id="defs5" /><path d="M 1001,165.1875 C 827.28888,165.18749 685.21875,307.28977 685.21875,481 C 685.21872,654.71023 827.29075,796.74996 1001,796.75 C 1174.7094,796.75003 1316.7812,654.71021 1316.7812,481 C 1316.7812,307.28978 1174.7112,165.1875 1001,165.1875 z M 1001,280.25 C 1047.0917,280.25001 1089.2402,295.66907 1123,321.46875 L 810.25,543.34375 C 803.8929,523.72639 800.28125,502.8449 800.28125,481 C 800.28122,369.5246 889.526,280.25 1001,280.25 z M 1190.375,414.625 C 1197.5996,435.39626 1201.7188,457.64656 1201.7188,481 C 1201.7188,592.47539 1112.4768,681.6875 1001,681.6875 C 953.39086,681.68749 910.02795,665.25484 875.75,637.90625 L 1190.375,414.625 z" transform="translate(-564.61405,-103.92327)" id="path3419" style="opacity:1;fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:112.0099411;stroke-linecap:round;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" /><path d="M 434.96875,68.1875 C 265.359,68.187499 126.71875,206.859 126.71875,376.46875 C 126.71875,546.07849 265.35901,684.68746 434.96875,684.6875 C 604.57849,684.68752 743.21872,546.07849 743.21875,376.46875 C 743.21875,206.85899 604.57849,68.1875 434.96875,68.1875 z M 434.96875,168.1875 C 486.40024,168.1875 533.33049,186.58406 569.5625,217.1875 L 240.25,450.8125 C 231.50339,427.74904 226.71875,402.70026 226.71875,376.46875 C 226.71875,260.96526 319.46527,168.1875 434.96875,168.1875 z M 628.15625,298.1875 C 637.87921,322.32557 643.21875,348.74117 643.21875,376.46875 C 643.2187,491.97221 550.47222,584.6875 434.96875,584.6875 C 382.03214,584.68748 333.88648,565.22281 297.25,533 L 628.15625,298.1875 z" id="path2599" style="opacity:1;fill:#ff0000;fill-opacity:1;fill-rule:nonzero;stroke:none;stroke-width:112.0099411;stroke-linecap:round;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1" /><path d="M 957.96875,109.46875 C 940.45852,110.53 930.04229,119.18025 923.03125,123.78125 C 922.96802,123.82182 922.90551,123.86349 922.84375,123.90625 C 919.12207,126.54737 914.30134,130.05483 910.34375,133.375 C 908.36495,135.03508 906.60061,136.58341 905.125,138.3125 C 904.3872,139.17704 903.69299,140.04866 903.0625,141.40625 C 902.8103,141.94928 902.59855,142.79358 902.4375,143.65625 C 897.1824,144.5736 890.52289,146.18731 881.09375,150.3125 C 881.08333,150.31247 881.07292,150.31247 881.0625,150.3125 C 857.44086,160.7561 847.74215,174.21817 836.90625,201.1875 C 836.90622,201.19792 836.90622,201.20833 836.90625,201.21875 C 831.4377,214.95088 829.31741,223.61906 826.59375,231.21875 C 823.87009,238.81844 820.55131,245.69362 812.03125,257.4375 C 812.03122,257.44792 812.03122,257.45833 812.03125,257.46875 C 803.31526,269.60044 795.19704,280.26467 789.28125,291.125 C 783.36546,301.98533 779.66655,313.32152 780.75,325.78125 C 782.79546,349.30388 793.90761,361.962 800.4375,370.96875 C 801.03743,371.80438 801.5746,372.34257 802.15625,373.09375 C 795.60156,376.79747 783.77295,385.4328 776,400.25 C 775.98947,400.27078 775.97905,400.29161 775.96875,400.3125 C 768.8074,414.17314 762.42235,423.64016 743.71875,442.34375 C 734.24444,451.81806 725.68144,460.2699 719.53125,466.8125 C 716.45615,470.0838 714.00334,472.84396 712.1875,475.21875 C 711.32775,476.34315 710.63399,477.37708 710,478.59375 C 709.52467,478.44866 709.37948,478.47394 708.875,478.3125 C 701.25017,475.87241 690.25647,471.61311 677.375,465.875 C 651.6164,454.05914 620.41635,438.39927 596.25,437.59375 C 584.64029,437.07776 576.8003,438.84094 571.75,443.9375 C 569.22485,446.48578 567.75527,450.23533 568.125,453.75 C 568.49473,457.26467 570.38525,460.20778 572.8125,462.34375 C 577.18143,466.53066 582.07874,467.43109 586.90625,468.75 C 591.73376,470.06891 596.8923,471.54349 603.4375,475.40625 C 604.19706,475.86198 604.56549,476.24309 605.25,476.6875 C 604.30409,477.30583 603.43508,477.86624 602.34375,478.625 C 598.68253,481.17053 594.28547,484.43977 590.03125,488 C 585.77703,491.56023 581.69068,495.35009 578.5,499.1875 C 575.30932,503.02491 571.93259,506.72851 573.125,513.03125 C 573.69333,516.11697 574.86517,519.09141 577.25,521.3125 C 579.63483,523.53359 582.80925,524.38519 585.4375,524.5 C 590.694,524.72962 595.20101,523.13713 600.59375,521.875 C 605.83595,520.64811 611.51486,520.50004 616.40625,520.96875 C 615.58161,522.8793 614.55887,524.75208 611.84375,527.25 C 608.16251,530.48947 604.251,535.13362 601.375,540.4375 C 599.937,543.08944 598.75122,545.84515 598.375,549.0625 C 597.99878,552.27985 598.90843,556.65103 602.0625,559.375 C 607.10274,563.75781 613.63493,563.03172 618.375,561.6875 C 623.11507,560.34328 627.40629,558.31912 630.625,557.34375 C 630.63545,557.33337 630.64587,557.32295 630.65625,557.3125 C 634.35386,556.157 637.30906,555.37607 639.96875,554.34375 C 641.96352,553.56951 644.33453,552.57263 646.0625,550.4375 C 646.703,550.79949 647.05732,550.94055 647.75,551.34375 C 653.02989,554.41708 659.61412,558.49456 665.5,561.4375 C 665.55181,561.45901 665.6039,561.47985 665.65625,561.5 C 671.69785,564.32798 677.00997,566.00265 681.6875,566.53125 C 685.71472,566.98636 689.91813,566.83929 693.25,563.875 C 694.69575,564.95331 696.13668,566.02204 697.96875,567.5 C 703.04553,571.5955 709.13384,576.86259 713.9375,581.4375 C 719.22574,586.46777 725.06461,590.74828 731.375,593.09375 C 737.68539,595.43922 745.45487,595.55803 751.1875,590.75 C 753.87231,588.56858 755.92382,585.62731 756.4375,582.25 C 756.95118,578.87269 755.92402,575.99149 754.8125,573.78125 C 752.83608,569.85118 750.54005,566.88281 748.9375,563.78125 C 749.42476,563.65727 749.9636,563.62827 750.4375,563.5 C 753.28462,562.72941 756.21648,561.44682 759.375,559.8125 C 765.69204,556.54386 772.7969,551.78951 779.21875,546.375 C 791.93624,536.10322 806.21668,522.57421 820.78125,516.875 C 820.7917,516.86462 820.80212,516.8542 820.8125,516.84375 C 824.68911,515.30451 827.92845,514.14665 830.59375,513.28125 C 831.46036,514.79527 832.44006,515.86873 833.3125,516.78125 C 834.5468,518.07225 836.1003,519.70666 838.40625,522.78125 C 838.43699,522.82329 838.46824,522.86496 838.5,522.90625 C 840.75616,525.77774 840.98665,526.66209 841.15625,527.21875 L 1119.6075,330.88316 L 1117.4897,329.60266 C 1106.0608,328.23715 1133.2178,327.71887 1111.4688,318.125 C 1101.8055,313.5408 1088.1444,308.33712 1071.9375,305.84375 C 1055.9605,303.40451 1043.0329,303.1428 1033.875,303.84375 C 1029.3975,304.18646 1025.882,304.72848 1023.0625,305.5 C 1019.433,285.29574 1007.8528,270.96868 999.625,259.375 C 989.6299,245.291 988.23824,239.45885 988.46875,221 C 988.68517,203.70093 986.6305,191.68148 980.40625,182.0625 C 981.64486,180.37086 982.13984,179.25146 982.90625,178.53125 C 983.82324,177.66954 985.95499,176.21292 991.71875,174.71875 C 991.75008,174.70857 991.78133,174.69816 991.8125,174.6875 C 997.79349,173.02611 1003.7835,172.11842 1009.7188,169.9375 C 1015.654,167.75658 1021.6601,163.76797 1025.4062,156.875 C 1027.143,153.67939 1028.2373,150.7804 1028.625,147.84375 C 1029.0127,144.9071 1028.5571,141.70671 1026.7188,139.125 C 1024.8804,136.54329 1021.9838,135.13751 1019.4062,134.71875 C 1016.8287,134.29999 1014.3835,134.60918 1012.0312,135.28125 C 1008.2766,136.35399 1004.5662,137.81446 1001.4688,139.46875 C 1000.0007,140.25279 998.69694,141.07372 997.40625,142.1875 C 994.95912,140.05589 992.1897,137.38484 989.3125,134 C 986.23436,130.17553 984.24226,124.6983 980.0625,119.15625 C 975.88274,113.6142 968.3254,108.90299 958,109.46875 C 957.98958,109.46872 957.97917,109.46872 957.96875,109.46875 L 957.96875,109.46875 z M 911.625,142.34375 C 911.90462,142.28501 911.93744,142.36457 911.84375,142.375 C 911.81829,142.37784 911.54033,142.40307 911.5,142.40625 C 911.52326,142.40014 911.60444,142.34807 911.625,142.34375 z M 812.1875,384.09375 C 812.21205,384.11831 812.29028,384.19619 812.3125,384.21875 C 812.58733,384.49783 812.4353,384.54347 812.1875,384.09375 z M 717,490.90625 C 717.05342,490.91376 717.27484,490.96227 717.3125,490.96875 C 717.49688,491.00047 717.34606,491.02982 717,490.90625 z M 644.84375,538.34375 C 644.69959,538.21264 644.94424,538.36668 645.28125,538.84375 C 645.17887,538.75644 644.89494,538.3903 644.84375,538.34375 z M 696.6875,554.0625 C 696.62771,553.80037 696.64461,553.69006 696.71875,554.28125 C 696.72918,554.36445 696.67558,554.69425 696.6875,554.84375 C 696.66348,554.64867 696.71442,554.18054 696.6875,554.0625 z" transform="matrix(1.0035777,0,0,1.0035777,-567.6464,-105.18277)" id="path3417" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" /><path d="M 1309.4062,357.53125 C 1304.8333,357.96315 1299.7606,359.69525 1293.8125,362.28125 C 1285.8817,365.72924 1276.4694,370.89662 1265.5312,377.53125 C 1236.3052,395.352 1238.2815,395.17789 1228.25,399.84375 C 1228.2396,399.84371 1228.2292,399.84371 1228.2188,399.84375 C 1227.7981,400.04404 1227.7425,400.08927 1227.3438,400.28125 C 1227.252,400.02127 1227.2282,399.74085 1227.0938,399.5 L 1227.1562,399.46875 C 1227.1142,399.39308 1227.0449,399.35358 1227,399.28125 C 1226.9822,399.25316 1226.9872,399.21517 1226.9688,399.1875 L 1226.9375,399.21875 C 1225.6984,397.29514 1223.5064,396.5381 1221.9688,396.40625 C 1220.3537,396.26776 1218.903,396.48902 1217.2812,396.8125 C 1214.0377,397.45947 1210.1836,398.6719 1205.5625,400.09375 C 1205.5521,400.09371 1205.5416,400.09371 1205.5312,400.09375 C 1203.4,400.76678 1202.392,401.18686 1200.75,401.78125 C 1200.3599,400.75179 1199.6756,399.83297 1198.75,399.03125 C 1196.7277,397.27959 1193.1683,397.0969 1190.5625,398.5 C 1103.438,460.55843 1013.116,526.96175 925.625,591.75 C 925.19905,594.99627 931.28181,598.34353 933.96875,600.375 C 933.65114,600.87046 933.37733,601.29758 933.09375,601.84375 C 932.70794,602.58682 932.28309,603.48211 931.75,604.53125 C 930.68383,606.62953 929.26567,609.31711 927.5625,612.25 C 924.15616,618.11578 919.47178,624.95331 914,629.78125 C 907.96469,635.0042 901.84322,639.6745 897.1875,643.625 C 894.85964,645.60025 892.90414,647.35039 891.40625,649.15625 C 890.6573,650.05918 889.99549,650.97721 889.5,652.1875 C 889.00451,653.39779 891.18254,652.70747 891.9375,654.46875 C 892.77706,656.6516 893.05894,656.1675 893.71875,656.71875 C 894.37856,657.27 893.87749,659.55939 894.8125,660.1875 C 896.68251,661.44372 899.21672,662.71817 902.375,664.4375 C 908.69156,667.87615 916.74347,673.08532 927.0625,677.40625 C 947.95656,686.15531 976.3595,693.13556 1005.4062,692.28125 C 1063.1236,690.59078 1096.8584,668.08798 1117.9688,655.65625 C 1140.2033,642.56262 1164.2763,617.91741 1175.2188,602.25 C 1186.062,586.72463 1199.4022,559.64647 1205.2812,536.375 C 1205.2812,536.36458 1205.2812,536.35417 1205.2812,536.34375 C 1208.0095,525.19343 1209.9814,517.06835 1211.1875,511.625 C 1211.7905,508.90333 1212.1997,506.86803 1212.4375,505.34375 C 1212.5564,504.58161 1212.6402,503.96504 1212.6562,503.25 C 1212.6643,502.89248 1212.6804,502.52833 1212.5312,501.84375 C 1212.5264,501.82146 1212.5052,501.77316 1212.5,501.75 C 1213.703,501.39028 1214.9171,501.10773 1216.0938,500.6875 C 1227.0196,497.04556 1237.2637,489.97748 1248.4688,489.5625 C 1253.2658,489.38483 1258.5065,492.09019 1264.25,496.1875 C 1269.9935,500.28481 1275.9942,505.56415 1282.7812,509.21875 C 1289.523,512.97856 1297.0944,515.2216 1303.9688,515.6875 C 1307.4059,515.92045 1310.685,515.70649 1313.6562,514.78125 C 1316.6275,513.85601 1319.4489,512.08089 1321.0625,509.15625 C 1322.4307,506.67639 1322.8745,503.76159 1322.2188,501.21875 C 1321.563,498.67591 1320.0642,496.66307 1318.375,494.9375 C 1314.9967,491.48635 1310.4907,488.78543 1305.9375,485.75 C 1305.9271,485.73953 1305.9167,485.72911 1305.9062,485.71875 C 1301.4705,482.83549 1297.4977,479.46042 1294.625,476.53125 C 1293.1886,475.06667 1292.0261,473.69092 1291.2188,472.625 C 1291.1587,472.54574 1291.1808,472.57749 1291.125,472.5 C 1291.7045,472.14809 1292.1127,471.83187 1293.2812,471.40625 C 1296.8343,470.11216 1302.8914,468.9375 1311.1562,468.9375 C 1319.3233,468.9375 1329.0175,470.41673 1337.625,470.21875 C 1341.9288,470.11976 1346.0369,469.63815 1349.7188,467.90625 C 1353.4006,466.17435 1356.5289,462.81698 1357.7188,458.375 C 1358.9077,453.93636 1357.8221,449.427 1355.25,446.28125 C 1352.6779,443.1355 1349.0811,441.11857 1345.0625,439.53125 C 1337.0253,436.35661 1326.9223,434.92128 1318.0625,433.84375 C 1309.7427,432.83187 1300.0649,430.28474 1292.4062,428.34375 C 1288.5769,427.37326 1285.2902,426.55647 1282.5938,426.15625 C 1281.8233,426.04189 1281.0754,426.0891 1280.3438,426.0625 C 1283.6653,416.23719 1295.6932,402.70506 1307.0312,391.59375 C 1307.0523,391.57313 1307.0731,391.5523 1307.0938,391.53125 C 1312.6255,385.88654 1317.4846,382.59902 1321.0625,378.84375 C 1322.8514,376.96611 1324.4462,374.76552 1324.9688,371.9375 C 1325.4913,369.10948 1324.7084,366.14108 1323.1562,363.40625 C 1321.2585,360.06266 1317.6105,357.98673 1313.8125,357.5625 C 1312.387,357.40328 1310.9306,357.38728 1309.4062,357.53125 z M 1149.5,462.90625 C 1149.5999,462.80589 1149.5604,463.01375 1149.2188,463.21875 C 1149.2836,463.14513 1149.459,462.94743 1149.5,462.90625 z" transform="translate(-564.61405,-103.92327)" id="path3421" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" /><path d="M 392.30138,11.353049 C 376.65292,12.301455 368.11726,19.651603 360.53001,24.630735 C 353.17963,29.846993 341.56189,38.382625 342.74739,40.753641 C 343.69556,43.124656 347.25209,40.990742 347.72653,43.361758 C 348.43759,45.732773 340.37638,41.702071 317.61439,51.660312 C 295.08998,61.618814 287.50273,72.525272 276.83316,99.080622 C 266.16359,125.87312 268.77171,132.51194 251.2262,156.69632 C 233.68068,181.11776 219.21749,198.90037 221.1143,220.71374 C 223.01111,242.52706 232.73228,253.19663 239.60822,262.68069 C 246.24706,271.92768 251.7004,275.2471 251.9375,276.66971 C 252.4117,278.32939 245.29866,270.97925 241.03083,273.11318 C 236.763,275.2471 223.24821,284.25693 215.66096,298.72013 C 208.31082,312.94622 201.19777,323.37869 182.22964,342.34681 C 163.26152,361.31494 148.08702,376.25236 149.27253,378.62337 C 150.69514,380.99439 154.48876,379.09755 154.01456,381.94279 C 153.30326,384.55091 134.80933,378.86045 108.72816,367.24248 C 82.884093,355.3874 51.349587,340.2129 30.010447,339.50162 C 8.6713079,338.55319 5.1147846,347.80017 11.042323,353.01638 C 16.732761,358.46974 26.216823,356.81001 40.680017,365.34569 C 54.90611,373.88134 57.98843,381.46857 57.277126,382.41697 C 56.802923,383.1283 51.586688,373.40712 47.318861,374.82975 C 43.051033,376.48944 11.753628,398.5399 13.413339,407.31264 C 15.072813,416.32252 21.948995,413.71438 33.092768,411.10626 C 44.23654,408.49814 56.565584,409.44657 63.441766,413.24018 C 70.317711,417.0338 70.080609,417.98221 69.606406,418.93064 C 69.132203,419.64192 59.41104,412.05467 58.225532,414.66279 C 56.802923,417.2709 56.091618,422.01293 50.164079,427.46627 C 44.23654,432.6825 34.98958,445.48599 40.205814,449.99092 C 45.65915,454.73295 54.90611,449.04251 62.730461,446.67149 C 70.317711,444.30048 74.585539,443.35207 75.533945,440.98106 C 76.24525,438.61004 72.451625,438.37294 74.348437,436.71325 C 76.24525,435.05352 91.419749,445.72309 102.32642,451.17642 C 113.4702,456.39266 121.53165,456.86688 123.66556,454.02164 C 125.79948,451.41353 122.95426,449.75384 125.32527,450.46512 C 127.69629,450.93935 142.39658,462.79442 152.35485,472.27849 C 162.07601,481.52545 173.69399,487.45298 181.04414,481.28832 C 188.63139,475.12368 180.33283,469.90747 176.30211,460.66049 C 172.27138,451.65063 175.5908,441.92946 177.72472,442.87787 C 179.85863,444.06338 174.16819,450.46512 177.96182,452.83613 C 181.75544,455.20715 196.92994,447.14572 209.02212,436.95033 C 221.3514,426.99209 236.0517,412.766 252.4117,406.36423 C 268.53461,399.96251 274.69925,399.48829 274.46215,400.91092 C 274.22505,402.57061 269.00881,403.51904 269.72012,404.94162 C 270.19432,406.60133 272.58158,410.45841 277.56071,417.09725 L 552.99327,222.99347 C 552.99327,222.99347 535.74806,212.41519 504.92485,207.67316 C 473.86455,202.93112 454.89643,206.72475 455.37063,209.09577 C 455.60773,211.46678 457.03034,222.61053 448.49469,241.81576 C 439.95903,261.021 433.08308,263.62912 432.60888,262.68069 C 432.13468,261.49518 450.6286,242.28998 451.81411,215.97171 C 452.76251,189.65341 438.77352,173.29343 428.34105,158.59311 C 417.90859,143.89284 415.77467,135.35718 416.01154,116.38906 C 416.24887,97.420935 413.87786,86.751365 406.76481,77.978584 C 399.41443,69.205827 396.09524,68.257421 397.28075,66.597733 C 398.70336,64.937999 406.76481,76.555975 408.89849,74.184959 C 411.03264,71.576842 411.26951,67.309014 424.07323,63.98983 C 436.87671,60.433307 447.78338,60.195968 453.71092,49.289297 C 459.63846,38.382625 454.42222,35.063204 447.78338,36.96004 C 441.14454,38.856828 434.03149,42.413352 434.50569,44.310164 C 434.9799,45.969875 437.35091,45.495672 436.1654,47.392721 C 434.7428,49.289297 426.44424,43.124656 418.38255,33.640594 C 410.55844,23.919454 409.61003,10.404642 392.30138,11.353049 z" id="path25" style="fill:#ffffff;fill-opacity:1;fill-rule:nonzero;stroke:none" /><path d="M 310.97579,84.617428 C 310.97579,84.617428 302.91433,88.648154 301.72883,94.338591 C 300.30622,100.02903 303.15144,100.26613 304.57381,99.555062 C 305.99665,99.080622 305.04825,96.472505 306.94482,92.678904 C 308.84187,88.885493 313.5839,84.143462 310.97579,84.617428 z" id="path27" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" /><path d="M 363.37523,78.689889 C 361.00421,77.978584 357.44769,81.298006 359.5816,83.194842 C 361.71552,85.091631 365.74624,86.751365 369.77673,90.307888 C 373.5706,93.864412 376.17871,94.813031 377.12712,93.627524 C 378.07529,92.204677 366.22021,79.401431 363.37523,78.689889 z" id="path29" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" /><path d="M 321.88246,114.01804 C 321.17092,112.12121 319.03724,106.905 313.1097,108.80179 C 307.18216,110.69862 304.81115,120.18268 306.94482,126.3473 C 309.07897,132.51194 315.24338,137.01687 319.27434,131.08933 C 323.30507,125.16179 317.85173,122.07947 316.66622,118.04875 C 315.24338,114.01804 318.08883,113.30672 319.27434,113.78092 C 320.22275,114.25515 322.11956,114.96643 321.88246,114.01804 z" id="path31" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" /><path d="M 363.61233,109.98729 C 357.21059,109.98729 354.12827,118.76007 354.36513,125.87312 C 354.83957,132.74904 357.92166,136.30557 362.90103,135.59428 C 368.11726,135.12006 366.69465,125.87312 365.98335,121.60527 C 365.0347,117.33744 366.22021,114.49222 368.59123,115.91483 C 370.96224,117.33744 372.14775,119.70846 372.62219,117.81167 C 373.09639,115.91483 368.82856,109.98729 363.61233,109.98729 z" id="path33" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" /><path d="M 345.11841,175.42732 C 345.11841,175.42732 341.56189,181.35486 336.58252,181.35486 C 331.60362,181.35486 328.7584,177.56124 328.5213,179.45807 C 328.28396,181.35486 333.50043,188.2308 341.08768,185.38561 C 348.91203,182.30327 350.09754,173.29343 345.11841,175.42732 z" id="path35" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" /><path d="M 333.97464,214.54908 C 322.59376,216.44589 321.40825,249.16593 337.76802,247.74329 C 353.89117,246.08358 346.77812,212.41519 333.97464,214.54908 z" id="path37" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" /><path d="M 328.28396,275.2471 C 328.28396,275.2471 334.92304,283.30853 344.88107,281.17464 C 354.83957,279.04072 353.89117,270.03084 352.94276,270.26794 C 351.75725,270.50507 349.38624,275.72128 341.08768,276.43261 C 332.78913,277.38099 328.5213,273.58736 328.28396,275.2471 z" id="path39" style="fill:#000000;fill-opacity:1;fill-rule:nonzero;stroke:none" /><path d="M 367.46552,493.58687 C 367.46552,493.58687 377.12712,496.46282 415.06337,505.94688 C 452.76251,515.19384 462.48368,509.02923 462.00947,511.63732 C 461.29817,514.48254 435.4541,513.53416 407.47612,507.13239 C 379.49813,500.73067 373.33326,495.98864 371.67378,497.88543 C 370.25117,499.78224 362.90103,517.80196 350.80861,528.47153 C 338.47957,539.1411 328.41295,543.93965 329.83579,547.25907 C 331.0213,550.34142 382.81732,585.1388 439.24773,583.47909 C 495.915,581.8194 528.39791,560.00606 549.73705,547.43965 C 571.07619,534.87329 595.26054,510.21473 605.69301,495.27731 C 616.12548,480.33994 629.40317,453.31036 635.09361,430.78571 C 640.54694,408.49814 642.91796,398.30278 642.20665,398.06568 C 641.49535,397.82858 632.24839,398.5399 626.79505,397.11727 C 621.10461,395.45756 617.07389,394.98338 615.88838,395.45756 C 614.46577,395.93176 590.51851,413.0031 572.26169,410.63208 C 554.24198,408.26107 561.11792,390.00422 565.38575,379.33465 C 569.65358,368.66508 576.05532,364.39728 575.10691,362.02626 C 573.92141,359.65525 558.2727,352.77928 559.22111,350.64537 C 560.40662,348.51145 573.92141,359.65525 577.24083,357.99551 C 580.32315,356.57291 581.03445,353.25348 582.21996,355.6245 C 583.16837,357.99551 575.34401,367.00537 568.23097,378.38627 C 561.35502,389.76712 561.35502,404.70454 570.36488,407.31264 C 579.61184,410.15786 591.70402,405.17872 606.40432,397.11727 C 621.10461,388.81872 635.33071,382.89118 636.04201,385.02509 C 636.99042,387.15901 624.18693,388.58161 625.37244,392.84947 C 626.79505,397.11727 638.65013,395.69466 648.60839,392.13814 C 658.56666,388.81872 669.47333,381.23147 682.27681,380.75729 C 695.0803,380.28306 706.46117,394.27205 718.79045,400.91092 C 731.11973,407.78684 747.47974,409.44657 751.27336,402.57061 C 755.06699,395.69466 746.76844,390.95263 737.52147,384.78799 C 728.03741,378.62337 720.92437,370.5619 719.97596,367.7167 C 719.26466,364.87146 727.80031,360.12943 745.10872,360.12943 C 762.41714,360.12943 783.99338,366.05697 787.5499,352.77928 C 791.10643,339.50162 769.05598,335.70799 751.51047,333.57408 C 733.96495,331.44014 712.38871,323.14159 712.15161,326.46103 C 711.91451,329.54333 710.9661,332.38857 712.15161,334.52248 C 713.10002,336.65638 713.33712,337.1306 713.10002,337.84188 C 712.86291,338.55319 706.22407,333.57408 709.78059,321.4819 C 713.10002,309.62682 726.1406,295.63783 737.99568,284.01983 C 749.61365,272.16475 758.38641,269.79374 753.40728,261.021 C 748.42815,252.24822 730.64553,259.12417 701.71914,276.66971 C 672.55565,294.45232 674.21536,294.45232 664.01999,299.19435 C 654.06173,303.93639 650.50521,306.3074 650.50521,305.12189 C 650.50521,303.69928 658.80376,299.19435 657.38115,297.06042 C 656.19564,294.9265 650.031,296.82334 640.78404,299.66853 C 631.77418,302.51378 627.26925,305.12189 625.84664,303.93639 C 624.66114,302.98796 629.87737,301.32827 630.58868,299.90563 C 545.81622,357.09133 453.04513,429.5888 367.46552,493.58687 z" id="path55" style="fill:#fefefe;fill-opacity:1;fill-rule:nonzero;stroke:none" /></svg>');
    }
}
