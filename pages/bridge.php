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
    background-color: #c0c0c0;
}
#content span.auction > span {
    display: table-row;
    background-color: #ffff80;
}
#content span.auction span span {
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
function auction($a) {
    $result = "<span class='auction'>" .
              "<span><span>W</span><span>N</span>" .
              "<span>E</span><span>S</span></span>";
    for ($i = 0; $i < count($a); $i++) {
        if ($i % 4 == 0) {
            $result .= '<span>';
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
