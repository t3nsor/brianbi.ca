<?php
if (!isset($params['sec'])) {
    $params['sec'] = 'toc';
}
$file = $params['sec'] . '.html';
if (!in_array($file, scandir('content/etingof'))) {
    echo 'Sorry, the page you are looking for does not exist.';
} else { ?>
<script src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>
<script type="text/x-mathjax-config">
MathJax.Hub.Config({ TeX: { equationNumbers: {autoNumber: "AMS"} } });
</script>
<div style="display: none">
<!-- mathjax macros -->
\[
\DeclareMathOperator{\End}{End}
\DeclareMathOperator{\char}{char}
\DeclareMathOperator{\tr}{tr}
\DeclareMathOperator{\ker}{ker}
\DeclareMathOperator{\im}{im}
\DeclareMathOperator{\sgn}{sgn}
\DeclareMathOperator{\Hom}{Hom}
\DeclareMathOperator{\span}{span}
\DeclareMathOperator{\diag}{diag}
\DeclareMathOperator{\Id}{Id}
\DeclareMathOperator{\ad}{ad}
\newcommand\d{\mathrm{d}}
\newcommand\pref[1]{(\ref{#1})}
\]
</div>
<div style="margin: 1.5em">
<style scoped>
.problem {
    font-style: italic;
    font-weight: bold;
}
.problem::after {
    content: ":"
}
.qed::before {
    display: block;
    text-align: right;
    content: "∎";
}
/* (a), (b), ... */
ol.subproblems {
    counter-reset: subproblem;
    padding-left: 3em;
}
ol.subproblems > li {
    list-style: none;
    position: relative;
}
ol.subproblems > li::before {
    content: "(" counter(subproblem, lower-alpha) ") ";
    counter-increment: subproblem;
    position: absolute;
    left: -1.5em;
}
p.out-of-line-lemma::before {
    /* wtf is this? */
    content: "Lemma: ";
    font-style: italic;
}
p.lemma::before {
    content: "Lemma: ";
    font-style: italic;
}
.proof::before {
    content: "Proof: ";
    font-style: italic;
}
.proof::after {
    display: block;
    text-align: right;
    content: "∎";
}
table.char {
    border-collapse: collapse;
}
table.char td, table.char th {
    border: 1px solid black;
    text-align: center;
    padding: 0.2em;
}
</style>
<?php include("content/etingof/$file") ?>
</div>
<? } ?>
