<?php

$htmlFeedback = "";

function getRedStar()
{
    return '<svg version="1.0" xmlns="http://www.w3.org/2000/svg" class="index_1" viewBox="0 0 1280.000000 1217.000000" preserveAspectRatio="xMidYMid meet">
                <g transform="translate(0.000000,1217.000000) scale(0.100000,-0.100000)"
                fill="#A63E51" stroke="none">
                    <path d="M6268 11767 c-121 -374 -360 -1113 -639 -1969 -248 -764 -391 -1206
                    -515 -1588 -69 -212 -148 -454 -175 -537 l-51 -153 -2439 -2 -2439 -3 1970
                    -1430 c1805 -1310 1970 -1432 1967 -1455 -2 -14 -64 -207 -136 -430 -73 -223
                    -191 -585 -263 -805 -71 -220 -219 -674 -328 -1010 -109 -335 -258 -792 -330
                    -1015 -72 -223 -190 -585 -262 -805 -71 -220 -139 -429 -150 -464 -11 -35 -22
                    -71 -26 -80 -9 -24 -274 -215 2961 2136 534 389 979 707 987 707 8 0 528 -373
                    1155 -829 1160 -843 1897 -1378 2469 -1794 176 -127 321 -230 323 -228 3 4
                    -18 68 -367 1142 -379 1166 -601 1849 -801 2463 -110 339 -231 710 -268 824
                    l-68 206 1973 1434 1974 1433 -2439 3 -2439 2 -51 153 c-27 83 -106 325 -175
                    537 -124 382 -267 824 -515 1588 -279 856 -518 1595 -639 1969 -70 216 -129
                    393 -132 393 -3 0 -62 -177 -132 -393z"/>
                </g>
            </svg>';
}

function getBlackStar()
{
    return '<svg version="1.0" xmlns="http://www.w3.org/2000/svg" class="index_1" viewBox="0 0 1280.000000 1217.000000" preserveAspectRatio="xMidYMid meet">
                <g transform="translate(0.000000,1217.000000) scale(0.100000,-0.100000)"
                fill="gray" stroke="none">
                    <path d="M6268 11767 c-121 -374 -360 -1113 -639 -1969 -248 -764 -391 -1206
                    -515 -1588 -69 -212 -148 -454 -175 -537 l-51 -153 -2439 -2 -2439 -3 1970
                    -1430 c1805 -1310 1970 -1432 1967 -1455 -2 -14 -64 -207 -136 -430 -73 -223
                    -191 -585 -263 -805 -71 -220 -219 -674 -328 -1010 -109 -335 -258 -792 -330
                    -1015 -72 -223 -190 -585 -262 -805 -71 -220 -139 -429 -150 -464 -11 -35 -22
                    -71 -26 -80 -9 -24 -274 -215 2961 2136 534 389 979 707 987 707 8 0 528 -373
                    1155 -829 1160 -843 1897 -1378 2469 -1794 176 -127 321 -230 323 -228 3 4
                    -18 68 -367 1142 -379 1166 -601 1849 -801 2463 -110 339 -231 710 -268 824
                    l-68 206 1973 1434 1974 1433 -2439 3 -2439 2 -51 153 c-27 83 -106 325 -175
                    537 -124 382 -267 824 -515 1588 -279 856 -518 1595 -639 1969 -70 216 -129
                    393 -132 393 -3 0 -62 -177 -132 -393z"/>
                </g>
            </svg>';
}

foreach($feedback as $value) {
    $htmlFeedback .= '<section class="borderFeedback index_2">
                        <section class="feedback">
                            <h4>' . $value["name"] . '</h4>
                            <span>' . date_format(date_create($value["addDate"]), "d.m.Y") . '</span>
                            <p class="mark">Сервис:</p>
                            <span class="stars">';
    
    for($i = 0; $i < 5; $i++) {
        if($i < $value["serviceMark"]) {
            $htmlFeedback .= getRedStar();
        } else {
            $htmlFeedback .= getBlackStar();
        }
    }

    $htmlFeedback .= '</span>
                    <p class="mark">Качество процедур:</p>
                    <span class="stars">';

    for($i = 0; $i < 5; $i++) {
        if($i < $value["qualityMark"]) {
            $htmlFeedback .= getRedStar();
        } else {
            $htmlFeedback .= getBlackStar();
        }
    }

    $htmlFeedback .= '</span>
                        <p class="recall">' . $value["recall"] . '</p>
                    </section>
                    </section>';
}

echo $htmlFeedback;

?>
