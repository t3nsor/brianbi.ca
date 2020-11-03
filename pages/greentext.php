<style>
#greentext { margin: 1em; }
#greentext textarea { width: 100%; }
#greentext #output {
    background-color: #f0e0d6;
    color: maroon;
    display: table;
    font-family: arial, helvetica,sans-serif;
    font-size: 10pt;
}
#greentext #output .quote {
    color: #789922;
}
</style>
<section id="greentext">
<h1>Greentext generator</h1>
<textarea id="input" rows="20"></textarea>
<div id="output"><blockquote></blockquote></div>
</section>
<script>
(function loop() {
    setTimeout(function() {
        var newHolder = document.createElement('blockquote');
        var content = document.getElementById('input').value;
        var lines = content.split(/\r?\n/);
        lines.forEach(function(line) {
            var elem = document.createElement('span');
            if (line.startsWith('>')) {
                elem.className = 'quote';
            }
            elem.innerText = line;
            newHolder.appendChild(elem);
            newHolder.appendChild(document.createElement('br'));
        });
        document.getElementById('output').firstChild.replaceWith(newHolder);
        loop();
    }, 100);
})();
</script>
