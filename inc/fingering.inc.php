<?php
function trumpet()
{
    global $piano, $trumpet;

    $cont .= '<div class="charts">';
    for ($i = -17; $i < 30; $i++) {
        $cont .= '<div class="valves" ><div class="key">' . $piano[$i] . '</div>';
        for ($a = 0; $a < 3; $a++) {
            $cont .= '<div class="valve pressed' . $trumpet[$i][$a] . '"></div>';
        }
        $cont .= '</div>';
    }
    $cont .= '</div>';

    return $cont;
}


function tenorTrombone()
{
    global $piano, $trombone;

    for ($i = -34; $i < 2; $i++) {
        $cont .= '<div class="slide">';

        $cont .= '
	    <div class="key">' . $piano[$i] . '</div>
	    <div class="valve" style="height:' . ($trombone[$i][0] * 20) . 'px;">
	    <span class="num">' . $trombone[$i][0] . '</span></div>';

        if (isset($trombone[$i][1])) {
            $cont .= '
		    <div class="valve alt" style="height:' . ($trombone[$i][1] * 20) . 'px;">
		    <span class="num">' . $trombone[$i][1] . '</span></div>';
        }

        $cont .= '</div>';
    }

    return $cont;
}

function tenorBassTrombone()
{
    global $piano, $tenorbasstrombone;

    for ($i = -34; $i < 2; $i++) {
        $cont .= '<div class="slide">';

        $cont .= '
	<div class="key">' . $piano[$i] . '</div>
	<div class="valve" style="height:' . ($tenorbasstrombone[$i][0] * 20) . 'px;">
	<span class="num">' . $tenorbasstrombone[$i][0] . '</span></div>';

        if (isset($tenorbasstrombone[$i][1])) {
            $cont .= '<div class="valve alt" style="height:' . ($tenorbasstrombone[$i][1] * 20) . 'px;">
		<span class="num">' . $tenorbasstrombone[$i][1] . '</span></div>';
        }

        if (isset($tenorbasstrombone[$i][2])) {
            $cont .= '<div class="valve f_attachment" style="height:' . ($tenorbasstrombone[$i][2] * 20) . 'px;">
		<span class="num">' . $tenorbasstrombone[$i][2] . '</span></div>';
        }


        $cont .= '</div>';
    }

    return $cont;
}


function tenorSaxophone()
{
    global $piano, $tenor_saxophone;


    for ($i = -17; $i < 30; $i++) {

        $cont .= '<div class="valves">';

        $cont .= '<div class="valves" ><div class="key">' . $piano[$i] . '</div></div><br />';
        /*  width="233.38527"
      height="849.68005"*/
        $cont .= '<svg
   xmlns:dc="http://purl.org/dc/elements/1.1/"
   xmlns:cc="http://creativecommons.org/ns#"
   xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
   xmlns:svg="http://www.w3.org/2000/svg"
   xmlns="http://www.w3.org/2000/svg"
   version="1.1"
   width="40"
   height="140"
   viewBox="0 0 233.38527 849.68005" >
   id="svg2">
  <defs
     id="defs4" />
  <metadata
     id="metadata7">
    <rdf:RDF>
      <cc:Work
         rdf:about="">
        <dc:format>image/svg+xml</dc:format>
        <dc:type
           rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
        <dc:title></dc:title>
      </cc:Work>
    </rdf:RDF>
  </metadata>
  <g
     transform="translate(-253.2195,-42.907)"
     id="layer1">
    <path
       d="m 351.64976,165.45033 c -21.04044,-0.10984 -38.19874,21.07762 -33.9375,41.5625 3.01559,20.38346 25.85401,34.26119 45.375,27.5625 19.77411,-5.48449 30.67988,-29.88275 21.71875,-48.34375 -5.71354,-12.74482 -19.03203,-21.2907 -33.15625,-20.78125 z"
       id="path2989"
       style="fill:#323232;fill-opacity:1;stroke:#000000;stroke-width:2.81100011;stroke-miterlimit:4;stroke-opacity:1;stroke-dasharray:none" />
    <path
       d="m 351.64976,597.45033 c -21.04044,-0.10984 -38.19874,21.07762 -33.9375,41.5625 3.01559,20.38346 25.85401,34.26119 45.375,27.5625 19.77411,-5.48449 30.67988,-29.88275 21.71875,-48.34375 -5.71354,-12.74482 -19.03203,-21.2907 -33.15625,-20.78125 z"
       id="path2991"
       style="fill:#323232;fill-opacity:1;stroke:#000000;stroke-width:2.81100011;stroke-miterlimit:4;stroke-opacity:1;stroke-dasharray:none" />
    <path
       d="m 351.64976,381.45033 c -21.04044,-0.10984 -38.19874,21.07762 -33.9375,41.5625 3.01559,20.38346 25.85401,34.26119 45.375,27.5625 19.77411,-5.48449 30.67988,-29.88275 21.71875,-48.34375 -5.71354,-12.74482 -19.03203,-21.2907 -33.15625,-20.78125 z"
       id="path2993"
       style="fill:#323232;fill-opacity:1;stroke:#000000;stroke-width:2.81100011;stroke-miterlimit:4;stroke-opacity:1;stroke-dasharray:none" />
    <path
       d="m 351.64976,291.45033 c -21.04044,-0.10984 -38.19874,21.07762 -33.9375,41.5625 3.01559,20.38346 25.85401,34.26119 45.375,27.5625 19.77411,-5.48449 30.67988,-29.88275 21.71875,-48.34375 -5.71354,-12.74482 -19.03203,-21.2907 -33.15625,-20.78125 z"
       id="path2995"
       style="fill:#323232;fill-opacity:1;stroke:#000000;stroke-width:2.81100011;stroke-miterlimit:4;stroke-opacity:1;stroke-dasharray:none" />
    <path
       d="m 351.64976,683.45033 c -21.04044,-0.10984 -38.19874,21.07762 -33.9375,41.5625 3.01559,20.38346 25.85401,34.26119 45.375,27.5625 19.77411,-5.48449 30.67988,-29.88275 21.71875,-48.34375 -5.71354,-12.74482 -19.03203,-21.2907 -33.15625,-20.78125 z"
       id="path2997"
       style="fill:#323232;fill-opacity:1;stroke:#000000;stroke-width:2.81100011;stroke-miterlimit:4;stroke-opacity:1;stroke-dasharray:none" />
    <path
       d="m 351.64976,771.45033 c -21.04044,-0.10984 -38.19874,21.07762 -33.9375,41.5625 3.01559,20.38346 25.85401,34.26119 45.375,27.5625 19.77411,-5.48449 30.67988,-29.88275 21.71875,-48.34375 -5.71354,-12.74482 -19.03203,-21.2907 -33.15625,-20.78125 z"
       id="path2999"
       style="fill:#323232;fill-opacity:1;stroke:#000000;stroke-width:2.81100011;stroke-miterlimit:4;stroke-opacity:1;stroke-dasharray:none" />
    <path
       d="m 350.93671,253.38515 c -9.3045,0.33361 -13.03302,14.0961 -5.21875,19.09375 7.15399,5.99342 19.17823,-1.56372 16.71875,-10.6875 -0.95779,-5.198 -6.20284,-9.11497 -11.5,-8.40625 z"
       id="path3003"
       style="fill:#323232;fill-opacity:1;stroke:#000000;stroke-width:2.81100011;stroke-miterlimit:4;stroke-opacity:1;stroke-dasharray:none" />
    <path
       d="m 348.5,82.625 c -9.47414,0.07923 -15.8414,10.003728 -14.15625,18.90625 0.67433,11.6039 -1.315,23.62257 0.90625,35 3.65483,10.70103 18.28961,12.37966 27,7.1875 9.97348,-6.77462 5.49799,-20.26239 6.46875,-30.3125 -0.56501,-9.6292 2.98092,-22.804294 -7.15625,-28.6875 C 357.64768,82.205827 352.97081,82.516113 348.5,82.625 z"
       id="rect3008"
       style="fill:#323232;fill-opacity:1;stroke:#000000;stroke-width:2.81100011;stroke-miterlimit:4;stroke-opacity:1;stroke-dasharray:none" />
    <path
       d="m 405.4375,438.03125 c -6.68816,0.37527 -9.29937,8.15531 -8,13.9375 -1.16196,6.64094 5.4475,12.21231 11.90625,10.65625 23.09924,-0.27527 46.30864,0.53436 69.34375,-0.375 7.66979,-2.43384 6.92943,-12.20445 5.65625,-18.46875 -2.61457,-7.58001 -12.15371,-5.85894 -18.34375,-5.8125 -20.18622,0.0425 -40.3821,-0.0845 -60.5625,0.0625 z"
       id="rect3012"
       style="fill:#323232;fill-opacity:1;stroke:#000000;stroke-width:2.81100011;stroke-miterlimit:4;stroke-opacity:1;stroke-dasharray:none" />
    <path
       d="m 405.4375,504.75 c -6.70034,0.36458 -9.27252,8.15903 -8,13.9375 -1.12607,6.7003 5.4578,12.19332 11.90625,10.65625 23.13021,-0.29122 46.37458,0.56938 69.4375,-0.40625 7.67372,-2.5956 6.88188,-12.46203 5.4375,-18.78125 -3.56864,-8.35926 -14.27449,-4.75396 -21.21875,-5.46875 -19.18621,0.0426 -38.38211,-0.0845 -57.5625,0.0625 z"
       id="rect3016"
       style="fill:#323232;fill-opacity:1;stroke:#000000;stroke-width:2.81100011;stroke-miterlimit:4;stroke-opacity:1;stroke-dasharray:none" />
    <path
       d="m 405.90625,471.59375 c -6.91375,0.0355 -9.86485,8.01697 -8.46875,13.96875 -1.1754,6.72961 5.57634,12.2047 12.03125,10.6875 7.5206,-1.04299 16.08435,2.10411 23.03125,-1.5625 5.48156,-3.89181 4.47271,-11.97598 3.1875,-17.6875 -3.54342,-8.34104 -14.35279,-4.71611 -21.3125,-5.4375 -2.82202,0.0281 -5.64879,-0.0517 -8.46875,0.0312 z"
       id="rect3018"
       style="fill:#323232;fill-opacity:1;stroke:#000000;stroke-width:2.81100011;stroke-miterlimit:4;stroke-opacity:1;stroke-dasharray:none" />
    <path
       d="m 454.84375,471.59375 c -6.85663,0.0525 -9.87797,8.00098 -8.4375,13.96875 -1.17596,6.75436 5.54551,12.22439 12,10.6875 7.50577,-1.10192 16.23095,2.29242 23.03125,-1.84375 5.0421,-4.19068 4.03845,-12.15115 2.5625,-17.84375 -3.93735,-7.89936 -14.2536,-4.18743 -21.125,-5 -2.67605,0.0309 -5.35733,-0.0558 -8.03125,0.0312 z"
       id="rect3020"
       style="fill:#323232;fill-opacity:1;stroke:#000000;stroke-width:2.81100011;stroke-miterlimit:4;stroke-opacity:1;stroke-dasharray:none" />
    <path
       d="m 290.5625,44.375 c -14.75992,3.896878 -21.76007,19.429506 -26.46875,32.65625 -6.68495,20.72259 -8.6413,42.69222 -9.46875,64.46875 3.88141,-15.80427 13.54232,-33.36643 30.9375,-36.4375 2.43177,-0.84971 6.9749,0.99705 5.375,-3.40625 -0.0418,-19.093636 0.0835,-38.354319 -0.0625,-57.34375 l -0.3125,0.0625 z"
       id="path3022"
       style="fill:#323232;fill-opacity:1;stroke:#000000;stroke-width:2.81100011;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-opacity:1;stroke-dasharray:none" />
    <path
       d="m 443.28125,144.0625 c -6.50446,0.10031 -8.99821,7.63112 -7.6875,13.09375 0.3079,17.998 -0.57893,36.14529 0.375,54.0625 1.93118,7.34308 13.68041,7.25302 15.46875,-0.125 0.75592,-20.0833 0.25816,-40.36896 0.21875,-60.5 -0.70233,-3.88682 -4.41382,-6.81354 -8.375,-6.53125 z"
       id="rect3792"
       style="fill:#323232;fill-opacity:1;stroke:#000000;stroke-width:2.81100011;stroke-miterlimit:4;stroke-opacity:1;stroke-dasharray:none" />
    <path
       d="m 474.9375,192.25 c -6.90941,0.46602 -8.43478,8.64904 -7.3125,14.1875 0.29522,17.58376 -0.56175,35.30233 0.375,52.8125 1.76212,7.49847 13.69811,7.48872 15.46875,0 0.82924,-20.00973 0.2678,-40.21869 0.25,-60.28125 -0.57831,-4.11523 -4.6451,-7.22395 -8.78125,-6.71875 z"
       id="rect3807"
       style="fill:#323232;fill-opacity:1;stroke:#000000;stroke-width:2.81100011;stroke-miterlimit:4;stroke-opacity:1;stroke-dasharray:none" />
    <path
       d="m 420.34375,236.6875 c -6.77776,0.49729 -8.43383,8.55211 -7.25,14.0625 0.30343,17.6775 -0.5728,35.48825 0.375,53.09375 2.00781,7.69622 14.34358,7.08194 15.625,-0.75 0.17859,-20.24277 0.57979,-40.64075 -0.1875,-60.84375 -1.14165,-3.58316 -4.80205,-5.99806 -8.5625,-5.5625 z"
       id="rect3809"
       style="fill:#323232;fill-opacity:1;stroke:#000000;stroke-width:2.81100011;stroke-miterlimit:4;stroke-opacity:1;stroke-dasharray:none" />
    <path
       d="m 259.84375,536 c -6.01263,0.19115 -5.13019,8.04997 -4.8125,12.09375 0.44992,11.25081 -0.81458,22.79343 0.46875,33.90625 2.39148,4.45405 8.97728,3.20684 13.0625,2.3125 5.38102,-3.33629 1.51408,-11.33009 2.6875,-16.40625 -0.42956,-9.63911 0.78665,-19.56029 -0.46875,-29.0625 -1.8128,-4.22895 -7.4236,-2.59168 -10.9375,-2.84375 z"
       id="rect3809-4"
       style="fill:#323232;fill-opacity:1;stroke:#000000;stroke-width:2.81100011;stroke-miterlimit:4;stroke-opacity:1;stroke-dasharray:none" />
    <path
       d="m 259.84375,594 c -6.01263,0.19115 -5.13019,8.04997 -4.8125,12.09375 0.44992,11.25081 -0.81458,22.79343 0.46875,33.90625 2.39148,4.45405 8.97728,3.20684 13.0625,2.3125 5.38102,-3.33629 1.51408,-11.33009 2.6875,-16.40625 -0.42956,-9.63911 0.78665,-19.56029 -0.46875,-29.0625 -1.8128,-4.22895 -7.4236,-2.59168 -10.9375,-2.84375 z"
       id="rect3831"
       style="fill:#323232;fill-opacity:1;stroke:#000000;stroke-width:2.81100011;stroke-miterlimit:4;stroke-opacity:1;stroke-dasharray:none" />
    <path
       d="m 259.84375,652 c -6.01263,0.19115 -5.13019,8.04997 -4.8125,12.09375 0.44992,11.25081 -0.81458,22.79343 0.46875,33.90625 2.39148,4.45405 8.97728,3.20684 13.0625,2.3125 5.38102,-3.33629 1.51408,-11.33009 2.6875,-16.40625 -0.42956,-9.63911 0.78665,-19.56029 -0.46875,-29.0625 -1.8128,-4.22895 -7.4236,-2.59168 -10.9375,-2.84375 z"
       id="rect3833"
       style="fill:#323232;fill-opacity:1;stroke:#000000;stroke-width:2.81100011;stroke-miterlimit:4;stroke-opacity:1;stroke-dasharray:none" />
    <path
       d="m 264.92917,864.90625 c -6.39078,0.40375 -9.1267,8.33285 -7.83392,14.375 -1.31875,7.11014 5.0625,13.33233 11.50516,11.6875 13.61043,-0.33603 27.37507,0.63137 40.90404,-0.40625 7.34634,-2.36739 6.66664,-12.24025 5.8393,-18.71875 -1.5554,-7.11821 -9.39362,-7.91307 -14.94515,-7 -11.82188,0.0441 -23.6527,-0.0866 -35.46943,0.0625 z"
       id="rect3857"
       style="fill:#323232;fill-opacity:1;stroke:#000000;stroke-width:2.7035892;stroke-miterlimit:4;stroke-opacity:1;stroke-dasharray:none" />
    <path
       d="m 265.36278,830.59375 c -6.57277,0.0675 -9.63337,8.1771 -8.26753,14.40625 -1.34137,7.20124 5.13171,13.35744 11.59189,11.71875 13.68257,-0.43569 27.5504,0.82159 41.13529,-0.53125 7.19532,-2.70664 6.35236,-12.55656 5.37678,-19.0625 -2.09396,-7.80457 -10.8834,-6.93323 -16.73741,-6.5625 -11.03263,0.0222 -22.06792,-0.0435 -33.09902,0.0312 z"
       id="rect3861"
       style="fill:#323232;fill-opacity:1;stroke:#000000;stroke-width:2.7035892;stroke-miterlimit:4;stroke-opacity:1;stroke-dasharray:none" />
    <path
       d="m 293.64378,645.12016 c -5.85848,3.07131 -6.52357,11.16319 -7.96875,16.96875 -1.71321,14.22473 -2.27142,30.17524 5.4375,42.8125 2.2793,3.94997 6.68177,0.50025 7.5625,-2.6875 6.35759,-15.27205 6.08506,-33.23752 1.53125,-48.90625 -1.32196,-2.86847 -2.6506,-8.09435 -6.5625,-8.1875 z"
       id="path3863"
       style="fill:#323232;fill-opacity:1;stroke:#000000;stroke-width:2.81100011;stroke-miterlimit:4;stroke-opacity:1;stroke-dasharray:none" />
    <path
       d="m 290.9592,719.59704 c -3.79175,5.42009 -0.66375,12.91252 0.7207,18.73286 5.01551,13.42098 11.84992,27.84392 24.50414,35.52497 3.83959,2.46069 6.16429,-2.62636 5.48155,-5.8623 -1.37191,-16.48552 -9.87014,-32.31627 -21.11529,-44.13967 -2.49232,-1.94011 -6.07394,-5.97088 -9.5911,-4.25586 z"
       id="path3865"
       style="fill:#323232;fill-opacity:1;stroke:#000000;stroke-width:2.81100011;stroke-miterlimit:4;stroke-opacity:1;stroke-dasharray:none" />
  </g>
</svg>';

        $cont .= '</div>';
    }


    return $cont;
}