<div id="templatemo_menu" class="handWriting20">
    <ul>
<?php
$currentPage = isset($_GET['pag']) ? $_GET['pag'] : 'index';
function generateMenuItem($pag, $href, $text) {
    global $currentPage;
    $class = $pag == $currentPage ? 'class="current"' : '';
    print "<li><a href='$href' id='$pag' $class>$text</a></li>";
}
generateMenuItem('index',   'index.php',                                   'Acasa');
generateMenuItem('program', 'index.php?pag=program',                       'Program');
//generateMenuItem('foto',    'ScatteredPolaroidsGallery-master/photos.php', 'Album');
generateMenuItem('contact', 'index.php?pag=contact',                       'Contactati-ne');
if($authenticated)
    generateMenuItem('logout', '#', 'Logout');
?>
    </ul>
</div>
<?php
switch ($currentPage) {
    case 'index':   include_once './pagini/ro/acasa.php';   break;
    case 'program': include_once './pagini/ro/program.php'; break;
    case 'foto':    break;
    case 'contact': include_once './pagini/ro/contact.php'; break;
    case 'logout':  include_once './pagini/ro/logout.php';   break;
}
?>