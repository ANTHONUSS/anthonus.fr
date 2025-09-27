<?php

$fileName = __DIR__ . '/../assets/projects.json';
$imageFolder = '/assets/images/projects/';

$liStart = '<li class="tile acrylic-background acrylic-background-hover">';
$githubLink = 'https://github.com/ANTHONUSS';

if(file_exists($fileName)) {

    $json = file_get_contents($fileName);
    $data = json_decode($json, true);

    if ($data != null) {

        echo '<section id="projects">';
        echo '<h2>Mes projets</h2>';
        echo '<ul>';

        if(json_last_error() === JSON_ERROR_NONE) {
            foreach($data as $project) {
                echo $liStart;
                echo '<a href="' . $githubLink . $project['link'] . '">';
                echo '<h3>' . $project['title'] . '</h3>';
                echo '<img src="' . $imageFolder . $project['image'] . '" alt="' . $project['image'] . '">';
                echo '<p>' . $project['description'] . '</p>';
                echo '</a>';
                echo '</li>';
            }
        }

        echo '</ul>';
        echo '</section>';
    }




}else {
    echo 'File not found';
}