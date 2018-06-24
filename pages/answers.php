<style scoped>
#qa_content { margin: 1em; }
</style>
<?php
if (!isset($params['id'])) {
    echo 'Sorry, the page you are looking for does not exist.';
}
$file = $params['id'] . '.html';
if (in_array($file, scandir('content/answers'))) {
    echo '<section id="qa_content">';
    echo '<style scoped>';
    echo "\n";
    echo '#question_content { padding-bottom: 2ex; border-bottom: 1px solid #aaa; margin-bottom: 0.5ex; }';
    echo "\n";
    echo '#answer_content { padding-top: 2ex; border-top: 1px solid #aaa; margin-top: 0.5ex; }';
    echo "\n";
    echo '</style>';
    echo '<script src="https://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>';
    include("content/answers/$file");
    echo '</section>';
} else {
    echo 'Sorry, the page you are looking for does not exist.';
}
