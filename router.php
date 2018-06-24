<?php
class Router {
    function __construct() {
        $this->routes = array(
            'about' => 'about.php',
            'answers/(?P<id>.*)' => 'answers.php',
            'artin' => 'artin.php',
            'artin/(?P<sec>.*)' => 'artin.php',
            'bridge' => 'bridge.php',
            'code' => 'code.php',
            'etingof' => 'etingof.php',
            'etingof/(?P<sec>.*)' => 'etingof.php',
            'math' => 'math.php',
            'physics' => 'physics.php',
            'resume' => 'resume.php',
        );
    }
    function match($path) {
        $path = rtrim($path, '/');
        foreach ($this->routes as $regex => $script) {
            if (preg_match("#^$regex$#", $path, $matches)) {
                return array($script, $matches);
            }
        }
        return null;
    }
}
