<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<!-- This template is not my property. This template is from site http://all-free-download.com/free-website-templates/church_573.html
License: Creative Commons Attribution 3.0 Unported License
License description is taken from site https://creativecommons.org/licenses/by/3.0/ 

You are free to:
Share — copy and redistribute the material in any medium or format 
Adapt — remix, transform, and build upon the material 
for any purpose, even commercially. 

The licensor cannot revoke these freedoms as long as you follow the license terms.


Under the following terms:

Attribution — You must give appropriate credit, provide a link to the license, and indicate if changes were made. You may do so in any reasonable manner, but not in any way that suggests the licensor endorses you or your use.  


Information

No additional restrictions — You may not apply legal terms or technological measures that legally restrict others from doing anything the license permits. 

Notices: 
You do not have to comply with the license for elements of the material in the public domain or where your use is permitted by an applicable exception or limitation. 
No warranties are given. The license may not give you all of the permissions necessary for your intended use. For example, other rights such as publicity, privacy, or moral rights may limit how you use the material. 


Template was modify in order to suite the requesters requirements.
-->
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Parohia Ortodoxa din Bergamo</title>
        <meta name="keywords" content="free templates, website templates, CSS, HTML" />
        <meta name="description" content="free website template provided by templatemo.com" />
        <!-- Free CSS Templates from TemplateMo.com -->
        <link href="./css/templatemo_style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div id="templatemo_container">
            <div id="templatemo_header">  	
                <div id="out_mission_section">

                    <h1>Chiesa ortodossa </h1>
                    <h1>di Bergamo</h1>      
                </div>   
                <div id="daily_bible_verse_section">
                    <h1>Patrono della Chiesa :</h1>
                    <h3>Santi Apostoli Toma</h3>
                </div>

            </div> <!-- end of header -->
            <div id="templatemo_menu">
                <ul>
                    <li><a href="indexit.php" class="current">Cassa</a></li>
                    <li>
                        <a href ="index.php?pag=foto2">Foto</a></li>
                    <li><a href="index.php?pag=contact2" class="last">Contattaci</a></li>                     
                </ul> 

            </div> 
            <div align="right"> Tradurre la pagina in rumeno <a lang="RO" href="index.php">RO </a>
            </div> 
            <!-- end of menu -->
<?php
                if (isset($_GET['pag'])) {
                    
                    if ($_GET['pag'] == "foto") {
                        include_once './pagini/it/foto2.php';}
                        if ($_GET['pag'] == "contact") {
                        include_once './pagini/it/contact2.php';
                    }
                } else {
                ?> 
            <div id="templatemo_content">
                
                <div id="templatemo_left">
                    <div id="templatemo_news_section">
                        <h1>Notizie</h1>
                        <div class="templatemo_news_box">
                            <h2>Parrocchia a cambiato posto</h2>
                            <h3>Mai 8, 2015</h3>
                            <p>
                                Messa si terrà presso la chiesa di AI CAMPI SAN PIETRO  </p>
                            <p>indirizzo: VIA DEI FIORI, no. 10, COLOGNOLA-BERGAMO)</p>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d174.24586746713945!2d9.657058864831932!3d45.67222767672154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x0cfdb9e9b63b13de!2sChiesa+S.+Pietro+ai+Campi!5e0!3m2!1sit!2sit!4v1428093111529" style="border:0" frameborder="0" height="200" width="200"></iframe>
                        </div>
                        <div class="templatemo_news_box">

                        </div>
                    </div>
                    <div class="left_col_section">
                    </div>
                </div> <!-- end of left -->

                <div id="templatemo_right">

                    <div class="right_col_section">
                        <div id="welcome_title"></div>
                        <p>Programul liturghii:</p>
                        <p>Duminica: 08:00-13:00 - Utrenia si Sfanta Liturghie</p>
                    </div>
                    <div class="cleaner_with_height">&nbsp;</div>

                    <div class="right_col_section">
                        <div class="right_two_col">

                        </div>

                        <div class="right_cleaner_with_10px">&nbsp;</div>

                        <div class="right_two_col">



                        </div> 
                        <div class="cleaner">&nbsp;</div>          
                    </div>
                </div> <!-- end of right -->

            </div> <!-- end of content -->
<?php } ?>
            <div id="templatemo_footer">
                <a href="http://validator.w3.org/check?uri=referer"><img style="border:0;width:88px;height:31px" src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" width="88" height="31" vspace="8" border="0" /></a>
                <a href="http://jigsaw.w3.org/css-validator/check/referer"><img style="border:0;width:88px;height:31px"  src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="Valid CSS!" vspace="8" border="0" /></a>

                Copyright © 2015 <a href="index.html">Parohia ortodoxa Bergamo</a> | <a href="http://www.iwebsitetemplate.com" target="_parent">Website Templates</a> by <a href="http://www.templatemo.com" target="_parent">Free CSS Templates</a>
            </div> <!-- end of footer -->
            <!-- Free CSS Template | Designed by TemplateMo.com -->
        </div> <!-- end of container -->
        <div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>
</html>
