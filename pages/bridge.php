<?php
if (!isset($params['sec'])) {
    $file = 'toc.html';
} else {
    $file = $params['sec'] . '.php';
}
if (!in_array($file, scandir('content/bridge'))) {
    echo 'Sorry, the page you are looking for does not exist.';
} else { ?>
<div id="content">
<style>
#content {
    margin: 1em;
}
#content li {
    margin: 0.7em 0;
}
#content span.handWrapper {
    display: block;
    text-align: center;
}
#content span.handContent {
    display: inline-block;
    text-align: left;
    padding: 1ex 0.7em;
    margin: 1em;
    border: 1px solid #808080;
}
#content span.auctionContainer {
    display: block;
    text-align: center;
}
#content span.auction {
    display: inline-table;
    border-collapse: collapse;
    margin: 2ex 0.7em;
}
#content span.auction > span:first-child {
    background-color: #d0d0d0;
}
#content span.auction > span {
    display: table-row;
    background-color: #ffffc0;
}
#content span.auction > span > span {
    display: table-cell;
    border: 1px solid grey;
    width: 1.5em;
    text-align: center;
}
</style>
<?php
// "rh" means "render hand"
function rh($spades, $hearts, $diamonds, $clubs) {
    return "<span class='handContent'>" .
           "<span style='color: black'>&spades;</span> $spades<br/>" .
           "<span style='color: red'>&hearts;</span> $hearts<br/>" .
           "<span style='color: red'>&diams;</span> $diamonds<br/>" .
           "<span style='color: black'>&clubs;</span> $clubs<br/>" .
           "</span>";
}
// "ch" means "center hand"
function ch($spades, $hearts, $diamonds, $clubs) {
    return '<span class="handWrapper">' .
           rh($spades, $hearts, $diamonds, $clubs) .
           '</span>';
}
// "rsh" means "render short hand"
function rsh($spades, $hearts, $diamonds, $clubs) {
    if ($spades === '') {
        $spades = ' &ndash;';
    }
    if ($hearts === '') {
        $hearts = ' &ndash;';
    }
    if ($diamonds === '') {
        $diamonds = ' &ndash;';
    }
    if ($clubs === '') {
        $clubs = ' &ndash;';
    }
    return "<span style='color: black'>&spades;</span>$spades " .
           "<span style='color: red'>&hearts;</span>$hearts " .
           "<span style='color: red'>&diams;</span>$diamonds " .
           "<span style='color: black'>&clubs;</span>$clubs</span>";
}
// "csh" means "center short hand"
function csh($spades, $hearts, $diamonds, $clubs) {
    return '<span class="handWrapper">' .
           rsh($spades, $hearts, $diamonds, $clubs) .
           '</span>';
}
function auction($a) {
    $result = "<span class='auction'>" .
              "<span><span>W</span><span>N</span>" .
              "<span>E</span><span>S</span></span>";
    for ($i = 0; $i < count($a); $i++) {
        if ($i % 4 == 0) {
            $result .= '<span>';
        }
        if (strlen($a[$i]) == 2) {
            $num = $a[$i][0];
            $strain = $a[$i][1];
            if ($strain == 'C') {
                $a[$i] = $num . '&clubs;';
            } elseif ($strain == 'D') {
                $a[$i] = $num . '<span style="color:red">&diams;</span>';
            } elseif ($strain == 'H') {
                $a[$i] = $num . '<span style="color:red">&hearts;</span>';
            } elseif ($strain == 'S') {
                $a[$i] = $num . '&spades;';
            }
        }
        $result .= "<span>{$a[$i]}</span>";
        if ($i % 4 == 3) {
            $result .= '</span>';
        }
    }
    return $result . '</span>';
}
if ($params['sec']) { ?>
<a href="/bridge">Return to table of contents</a>
<?php }
include("content/bridge/$file") ?>
</div>
<?php } ?>
