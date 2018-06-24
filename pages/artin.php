<?php
if (!isset($params['sec'])) {
    $params['sec'] = 'toc';
}
$file = $params['sec'] . '.html';
if (!in_array($file, scandir('content/artin'))) {
    echo 'Sorry, the page you are looking for does not exist.';
} else { ?>
<script src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>
<script type="text/x-mathjax-config">
MathJax.Hub.Config({ TeX: { equationNumbers: {autoNumber: "AMS"} } });
</script>
<div style="display: none">
<!-- mathjax macros -->
\[
\DeclareMathOperator{\ker}{ker}
\DeclareMathOperator{\im}{im}
\DeclareMathOperator{\diag}{diag}
\DeclareMathOperator{\char}{char}
\DeclareMathOperator{\lcm}{lcm}
\newcommand\divides{\mathbin |}
\newcommand\ndivides{\mathbin \nmid}
\newcommand\d{\mathrm{d}}
\newcommand\p{\partial}
\newcommand\C{\mathbb{C}}
\newcommand\N{\mathbb{N}}
\newcommand\Q{\mathbb{Q}}
\newcommand\R{\mathbb{R}}
\newcommand\Z{\mathbb{Z}}
\newcommand\pref[1]{(\ref{#1})}
\DeclareMathOperator{\Aut}{Aut}
\DeclareMathOperator{\Gal}{Gal}
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
.qed::before, p.proof::after {
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
p.lemma::before {
    content: "Lemma: ";
    font-style: italic;
}
p.proof::before {
    content: "Proof: ";
    font-style: italic;
}
table.mult {
    border-collapse: collapse;
}
table.mult tr:first-child td {
    border-bottom: 1px solid black;
}
table.mult td:first-child {
    border-right: 1px solid black;
}
table.mult td {
    text-align: center;
    padding: 0.2em;
}
</style>
<?php if ($params['sec'] != 'toc'): ?>
<a href="/artin">Return to table of contents for Brian's unofficial solutions
to Artin's <em>Algebra</em></a>
<?php endif; ?>
<?php include("content/artin/$file") ?>
</div>
<? } ?>
