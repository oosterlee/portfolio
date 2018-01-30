<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8">
        <title>Portfolio - Roy Oosterlee</title>
        <link rel="stylesheet" href="./main.css">


        <meta property="og:title" content="Portfolio Roy Oosterlee">
        <meta property="og:type" content="article">
        <meta property="og:url" content="http://24868.hosts.ma-cloud.nl/bewijzenmap/Portfolio/">
        <meta property="og:image" content="http://24868.hosts.ma-cloud.nl/bewijzenmap/Portfolio/images/PortfolioImage.png">

        <meta charset="UTF-8">
        <meta name="description" content="Portfolio of Roy Oosterlee. I do Web Development (HTML,CSS,PHP,JavaScript,NodeJS,React,...) I also do MYSQL,Firebase,MongoDB">
        <!-- <meta name="keywords" content="HTML,CSS,PHP,JavaScript,WebDeveloper,NodeJS,React"> -->
        <meta name="author" content="Roy Oosterlee">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta http-equiv="cache-control" content="no-cache" />
        <script src="./line.js" charset="utf-8"></script>
        <script src="./main.js"></script>
        <?php
            error_reporting(E_ALL);
            ini_set('display_errors', 1);
            include_once "main.php";
        ?>
    </head>
    <body onpageshow="checkCached(event)">
        <div class="page_wrapper">
            <div class="navigation">
                <ul>
                    <li class="active"><a href="javascript:to('#home')">Home - Portfolio</a></li>
                    <li class=""><a href="javascript:to('#projects')">Projects</a></li>
                    <li class=""><a href="javascript:to('#aboutme')">About me</a></li>
                    <li class=""><a href="javascript:to('#contact')">Contact</a></li>
                </ul>
            </div>
            <div class="navigation __fixed">
                <ul>
                    <li class="active"><a href="javascript:to('#home')">Home - Portfolio</a></li>
                    <li class=""><a href="javascript:to('#projects')">Projects</a></li>
                    <li class=""><a href="javascript:to('#aboutme')">About me</a></li>
                    <li class=""><a href="javascript:to('#contact')">Contact</a></li>
                </ul>
            </div>
            <div class="page">
                <div class="background" id="home">
                    <div class="bg_overlay">
                        <!-- <img src="" alt="" class="myselfPhoto"> -->
                        <h1>Portfolio - Roy Oosterlee.</h1><br>
                        <h4>Check out my <a href="javascript:to('#projects')">projects</a> and <a href="javascript:to('#aboutme')">skills</a> down below!</h4>
                        <!-- <div class="foot">
                            <a href="#content"><p><span class="lines">||</span><br>v</p></a>
                        </div> -->
                    </div>
                </div>
                <div class="content">
                    <div class="content_header" style="text-align: center;" id="projects">
                        <p class="line" data-px="35%" data-animate="true" data-gradient="linear-gradient(-45deg, #EE7752, #E73C7E, #23A6D5, #23D5AB)"></p>
                        <h1>Projects</h1>
                        <p class="line" data-px="35%" data-animate="true" data-gradient="linear-gradient(-45deg, #EE7752, #E73C7E, #23A6D5, #23D5AB)"></p>
                    </div>
                    <div class="block_wrapper">

                        <!-- EMPTY BLOCK TEMPLATE -->
                        <!-- <div class="block">
                            <h1>;HEADER;</h1>
                            <img src="./images/PortfolioImage.png" alt="">
                            <p>;TEXT;<br><br><span class="moreinfohover">[Hover for more info]</span></p>
                            <div class="__hover">
                                <button type="button" name="button" class="btn">Read more</button>
                            </div>

                            <div class="__more-info">
                                ;MORE INFO;
                            </div>

                        </div> -->

                        <div class="block">
                            <h1>Portfolio</h1>
                            <img src="./images/PortfolioImage.png" alt="">
                            <p>Portfolio - Roy Oosterlee. Made for school and work. I designed it myself and coded it all. Made with HTML, CSS, JavaScript. <br><br><span class="moreinfohover">[Hover for more info]</span></p>
                            <div class="__hover">
                                <button type="button" name="button" class="btn">Read more</button>
                            </div>

                            <div class="__more-info">
                                <h2>Portfolio - Roy Oosterlee</h2>
                                <br>
                                <p>
                                    <p>I made my portfolio for school and private usage.</p>
                                    <p>For example to apply for work.</p>
                                    <br>
                                    <p>This project will be updated and maintained</p>
                                    <p>I started with this project becouse it was needed for school.</p>
                                    <p>I ditn't have much time to make this project becouse I was transfered from the first year of school to the second.</p>
                                    <p>This is my second portfolio i made.</p>
                                    <p>My first portfolio I ditn't finish and I did not publish it.</p>
                                    <p>From this project I learned some more CSS and SCSS.</p>
                                    <p>SCSS is CSS but you can specify variables for example to make it easier to use a color contantly and change it for all.</p>
                                    <p>I made this project with HTML, CSS (SCSS) and Javascript.</p>
                                    <p>I choose for HTML, CSS and Javascript becouse they are good languages to make a website in.</p>
                                    <p>Also I don't like to use a web builder but just make a website myself.</p>
                                    <p>I ditn't use any libraries. Altough i did use SCSS.</p>
                                </p>
                            </div>

                        </div>
                        <div class="block">
                            <h1>Crazy Eights</h1>
                            <img src="./images/nodeJSCardGameImage.png" alt="">
                            <p>I made Crazy Eights becouse i was on a vacation and the weather was not all that good. Made with HTML, CSS, JavaScript (NodeJS) <br><br><span class="moreinfohover">[Hover for more info]</span></p>
                            <div class="__hover">
                                <button type="button" name="button" class="btn">Read more</button>
                            </div>

                            <div class="__more-info">
                                <h2>Crazy Eights</h2>
                                <br>
                                <p>
                                    <p>Crazy Eights is a card game where the user needs to end without any card as soon as possible.</p>
                                    <p>The game is for 2-7 players.</p>
                                    <br>
                                    <p>I made this game in my free time on a vacation.</p>
                                    <p>It was not all that good weather and I had not much to do, so I began to make this game.</p>
                                    <p>I made it that you can specify rules to the players likings.</p>
                                    <p>For example you can make the card hearts 7 so that the other player needs to pick 2 cards.</p>
                                    <p>Or that you can specify that you can put the card hearts 8 on any kind of Ace.</p>
                                    <p>Made with HTML, CSS, NodeJS, Javascript.</p>
                                    <p>I choose for NodeJS becouse you can make a server where multiple people can join the server you created and they can communicate with each other.</p>
                                </p>
                            </div>

                        </div>

                        <!-- TODO: ADD THE CODE REPOSETORY FOR GITHUB -->
                        <div class="block">
                            <h1>Bomberman</h1><a href="https://github.com/oosterlee/Bomberman" target="_blank" class="showcode">(show Code)</a>
                            <img src="./images/BombermanImage.png" alt="">
                            <p>Bomberman is a game i made for a school project in the first week i came to school. Made with HTML, CSS, JavaScript (P5.js library) <br><br><span class="moreinfohover">[Hover for more info]</span></p>
                            <div class="__hover">
                                <button type="button" name="button" class="btn">Read more</button>
                            </div>

                            <div class="__more-info">
                                <h2>Bomberman</h2>
                                <br>
                                <p>
                                    <p>I made Bomberman for a school project.</p>
                                    <p>The project was to make a game with a custom made controller to control the game.</p>
                                    <p>Becouse of this project i made i got another project (Instagram Clone) for the school to see how far i was at coding.</p>
                                    <p>This was very good. So they began a progress to get me to the 2nd year.</p>
                                    <p>I made Bomberman a 2 player game where 2 players can control a player.</p>
                                    <p>The goal is to destroy the other player with a bomb.</p>
                                    <p>You can hit out blocks with the bombs.</p>
                                    <p>And can get powerups (Not in my game) to blow up more. Made with HTML, CSS and JavaScript with the P5.js Library.</p>
                                </p>
                            </div>

                        </div>
                        <!-- TODO: ADD THE CODE REPOSETORY FOR GITHUB -->
                        <div class="block">
                            <h1>Instaclone</h1><a href="https://github.com/oosterlee/InstaClone" target="_blank" class="showcode">(show Code)</a>
                            <img src="./images/instacloneImage.png" alt="">
                            <p>Instaclone is a clone of Instagram. You can post photos and add comments to the photo. I made this for a school project.<br><br><span class="moreinfohover">[Hover for more info]</span></p>
                            <div class="__hover">
                                <button type="button" name="button" class="btn">Read more</button>
                            </div>

                            <div class="__more-info">
                                <h2>Instaclone</h2>
                                <p>Instagram is a social media platform where you can post photos to show people.</p>
                                <p>You can add comments to the photo, like the photo and share.</p>
                                <br>
                                <p>I made instaclone for a school project to show off what I can do. When I made it I was in my first year of Media Development.</p>
                                <p>When teachers seen this project I had to make. They where impressed and let me trough to the second year.</p>
                                <p>I had to make the project that you can post photos to a page and search trough the description.</p>
                                <p>Optional was making a login page.</p>
                                <p>As an extra i made it so that you can add comments to a photo.</p>
                                <p>Made with HTML, CSS, JavaScript and PHP.</p>
                            </div>

                        </div>

                        <div class="block">
                            <h1>Login Template</h1>
                            <img src="./images/logintemplateImage.png" alt="">
                            <p>I made a template becouse i used a login screen much and had to redo everything becouse of the new project i started.<br><br><span class="moreinfohover">[Hover for more info]</span></p>
                            <div class="__hover">
                                <button type="button" name="button" class="btn">Read more</button>
                            </div>

                            <div class="__more-info">
                                <h2>Login Template</h2>
                                <p>A template is something you can use multiple times over.</p>
                                <br>
                                <p>With this login template i can add register and login variables in php.</p>
                                <p>All of the forms and javascript are setup and i don't have to do anything with it.</p>
                                <p>I made this for myself to just add a login page and do the PHP.</p>
                                <p>I still have to make it so i can handle the login/register automatically.</p>
                                <p>I like how i made this login/register template becouse i added a linear gradient background.</p>
                                <p>If i click on the register text. The page does not reload but i added a javascript function to hide the login and show the register.</p>
                                <p>I made this project with HTML, CSS, Javascript and PHP</p>
                            </div>

                        </div>
                    </div>


                    <div class="show_info" style="max-width: 50%; text-align: center; margin-left: 25%; margin-top: 50px;"></div>
                    <!-- <div class="block">
                        <h1>Project 4</h1>
                        <img src="" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <div class="__hover">
                            <p></p>
                            <button type="button" name="button" class="btn">Read more</button>
                        </div>
                    </div> -->

                    <!--  -->

                    <div class="content_aboutme" id="aboutme">
                        <p class="line" data-px="35%" data-animate="true" data-gradient="linear-gradient(-45deg, #EE7752, #E73C7E, #23A6D5, #23D5AB)"></p>
                        <h1>About me</h1>
                        <p class="line" data-px="35%" data-animate="true" data-gradient="linear-gradient(-45deg, #EE7752, #E73C7E, #23A6D5, #23D5AB)"></p>

                        <div class="content_text">
                            <br><br>
                            <p>I first was in secondary school. The Ashram College in Nieuwkoop. I did VMBO-TL there. I had to do an internship there. I went to Accent Interactive (Web Development). I learned some PHP there.</p>
                            <p>After i finished and passed my exams i went to the Media College in Amsterdam. I study Media Development there.</p>
                            <p>When i started there. There was an introduction week. We had to build a game with a custom made controller.</p>
                            <p>The teachers saw what i could do already. So they gave me some other projects to work on (Instagram clone).</p>
                            <p>After that i was transfered to the 2nd year becouse i was too good for the first year.</p>
                            <br><br><h3>Front-end or Back-end? (Web) </h3><br>
                            <p>Back-end becouse i like it more and i can do more with back-end then front-end.</p>
                            <br><br><h2 id="skills">Skills</h2><br><br>
                            <div class="skillList">
                                <ul style="display: inline-block; text-align: right;" class="list">
                                    <li>JavaScript
                                        <div class="line" data-px="100px" data-height="10px" data-color="rgba(255,127,80, .4)" style="border-radius: 120px;">
                                            <p class="line" data-height="10px" data-px="85%" data-gradient="linear-gradient(-70deg, white, green, #5F9457, #568750, #7AB173)" style="border-radius: 120px;"></p>
                                        </div>
                                    </li><br>
                                    <li>HTML
                                        <div class="line" data-px="100px" data-height="10px" data-color="rgba(255,127,80, .4)" style="border-radius: 120px;">
                                            <p class="line" data-height="10px" data-px="85%" data-gradient="linear-gradient(-70deg, white, green, #5F9457, #568750, #7AB173)" style="border-radius: 120px;"></p>
                                        </div>
                                    </li><br>
                                    <li>CSS
                                        <div class="line" data-px="100px" data-height="10px" data-color="rgba(255,127,80, .4)" style="border-radius: 120px;">
                                            <p class="line" data-height="10px" data-px="80%" data-gradient="linear-gradient(-70deg, white, green, #5F9457, #568750, #7AB173)" style="border-radius: 120px;"></p>
                                        </div>
                                    </li><br>
                                    <li>(SCSS)
                                        <div class="line" data-px="100px" data-height="10px" data-color="rgba(255,127,80, .4)" style="border-radius: 120px;">
                                            <p class="line" data-height="10px" data-px="60%" data-gradient="linear-gradient(-70deg, white, green, #5F9457, #568750, #7AB173)" style="border-radius: 120px;"></p>
                                        </div>
                                    </li>
                                </ul>
                                <ul style="display: inline-block; text-align: left;" class="list">
                                    <li>PHP
                                        <div class="line" data-px="100px" data-height="10px" data-color="rgba(255,127,80, .4)" style="border-radius: 120px;">
                                            <p class="line" data-height="10px" data-px="70%" data-gradient="linear-gradient(-70deg, white, green, #5F9457, #568750, #7AB173)" style="border-radius: 120px;"></p>
                                        </div>
                                    </li><br>
                                    <li>NodeJS
                                        <div class="line" data-px="100px" data-height="10px" data-color="rgba(255,127,80, .4)" style="border-radius: 120px;">
                                            <p class="line" data-height="10px" data-px="75%" data-gradient="linear-gradient(-70deg, white, green, #5F9457, #568750, #7AB173)" style="border-radius: 120px;"></p>
                                        </div>
                                    </li><br>
                                    <li>Java
                                        <div class="line" data-px="100px" data-height="10px" data-color="rgba(255,127,80, .4)" style="border-radius: 120px;">
                                            <p class="line" data-height="10px" data-px="55%" data-gradient="linear-gradient(-70deg, white, green, #5F9457, #568750, #7AB173)" style="border-radius: 120px;"></p>
                                        </div>
                                    </li><br>
                                    <li>SQL
                                        <div class="line" data-px="100px" data-height="10px" data-color="rgba(255,127,80, .4)" style="border-radius: 120px;">
                                            <p class="line" data-height="10px" data-px="50%" data-gradient="linear-gradient(-70deg, white, green, #5F9457, #568750, #7AB173)" style="border-radius: 120px;"></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!--  -->

                    <div class="content_contact" id="contact">
                        <p class="line" data-px="35%" data-animate="true" data-gradient="linear-gradient(-45deg, #EE7752, #E73C7E, #23A6D5, #23D5AB)"></p>
                        <h1>Contact</h1>
                        <p class="line" data-px="35%" data-animate="true" data-gradient="linear-gradient(-45deg, #EE7752, #E73C7E, #23A6D5, #23D5AB)"></p>
                        <p></p><br><br>
                        <br><h5>Skype: (royoost)</h5> <a href="skype:royoost?add" onclick="alert('I rarely use skype. Better to use Discord or Email.')" title="Skype (Not in use)"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAVNSURBVGhD7Vnpb1RVFH/OqKlLVKJgjB9QIyZq4pL4ySURMeoHrSYaBGtMXD5bSKNGE0Mwxj9AQY1QaqIyb6DD4EJbkLWUzZDiggSkCsEFFwJM75t9uf7O69HOcl7ffTPTCR/ml/wyk+l95/7Ou+eec+6t1UYbbTQRn52dEbJVV9hWvfgcBPeDu8NRJ4LPRVYkfR2PPEcRc66B2OXhqMrhU3vSVqVQVK0HF2PsilDU+RrcBY6EbGcTfluF769h3INWtHQRW28NwnbyibDtjIvCG6JKk9PhSPJxa4kO8XTTAwoXTFiUhTSVRzBXl6X1eTx180BvikJFmHTaiLAbtvoTc1hCE7BaXY1wUtJkLWACq7OAlTQGOPG+MEHrSEnDVj0sp07Ez1wBQ1lxghYTme5VVhUctOkko0F4w5dJvXB3Rr/1Y06/+1NOfzCW0+8cyunn92X0rQMp8RmRE+l8PksLBjzcKxr14QVrHN21J6NHTxe1Hw6PF3XPgay+LCbbqmKirgQwUbhEg56cFU/qLX8WWKY5TiRL+qHtadFmOZHNdgROzVjKUcmYFy9e6xitghdyePTJERNn1DMs0QzYI9Q7icYkLj2YY0mVIIG0Sqt+yeuPj+X1ZnzPePh7KlvSV65Livb/p+0cDtQB4KFIjREPXoh98XuqxHImse9UUV+PDV89/iqE4IdjeR5ViUeH/VclHE12skx/YAm7ZSO1vPGrJMuoxC0+menN77M8chL3bzXaKzGWaQC04qatyX1b0ixjElmEz/nC2Gq+8V3WDb8CFnTZ0ZzRM9RoWn26g5X6w+1KRUOVvH0oxfIr0T2aFcdX85L+iWQh/c2TtprLMv0BR3CeEIxUcQY2aLF2i7gYOllwiyKlZunZeknnGZbpD3i9UjIicSMETwXy81Ci6GavF1DZbw5S2SVCG8v0B1ZkSDQi8I6NKZ0MWAtPpku6F47dszm4U9A2wDL9geq+UzLixXnb0q64erDhj4K+9nPz8CNtLNMfQR0hzsReeBtNolRX/HBUFY2dcdsVU6C6D0pGTEjN490ImSU/ZPXWvwo6ZRh2637Ni/aqSRmVZfoDG6pPMlIPKcU+gNCjVmbkn4K7+SXQ7zdtMNozy1mmPyjFCQaaQspaBzyazJe+yYjPlBMr8jLL9Ec4ouZJRiQuQK0Y/rugB7FpKaSkMdW8zaOQLj3oX0gDhRZdniG8MpKhctJpj1qM/3A2V3KrvTS2nNQ8SnjlW4OOAO2T1Z+azUr9Ac/joqEyPo3VqMZxHJZmfzF1BnoRISShc6dJB+yuSjfL9Id7wygYKeedKIYSyJlHdqRrGkHKaM/tzYgFVOVL+lIkhvLxU/BTlmkAHGLwwJEqAzWkFOuFn52Sjv9WcM8gnxzP6zHUCy/QRYVkXyId/lilGbCEz0qGyklhdAyCGwElC0rTkn2J0DXKEg2BAz9S8bBkrJxUlanbrQfRE3m3i5bsehGODLHCAOhPzDG9jX94e1qvhbC0j090oFqPkDO5QRFpq49YXTDgDcyntCcaFdiBw9Jdm1LuxqZD1us4DdI9FmWre3GqDLCpRWKP1H83TNeXktGW01ZZa83py1lWfcCb6AmyMtNC23mP5TSGcHT8KRhM1EzQCtrOGSumZrGUJgAJgM4F4mTTRVsVAt1rGcNNzWoh3QCKEzeVqoi5zNuSuuB2AMlOrFCM7p1kIQ0xgXbpMZ6tRejTHQiBuW6Gs9VKOmnCwRGXE/+eXoE3uxiM+yYN6r5tZ5kVHZ/J1s9RoBWHo4sgdjUc3YXv++HggOss1YlGU2wbbbRRBsv6F6dER83rYeoGAAAAAElFTkSuQmCC"></a>
                        <br><h5>Discord: (oosterlee#6041)</h5> <a href="javascript:alert('Username with id: oosterlee#6041')" title="Discord"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAASzSURBVGhD7VhLiBxVFG0/qFHxCwERFdGNGxcK/la6kfgBUQkoovhBF4L4QRBJTBskyUxXl50hgxjTVTWTEEhmEdwYTILflVEIEoyiiYZkYzCKCv6iyX2e8/r2b+p2dfWkMz2LOnCYmrr3nHur6tWr97pUoECBAgUKjAqTk+78aiT3BrG8Wo2lVi670zXUF8wNIlkL7fJKJPePrXcXamh+UE7cOdW6PIImduIijlVj53B8EA1NhhvkEk3rC+ZC8xa0h+mBG/FfELuP6c0amjZ8TEzI2Sj2Moof0eb/YvOVKbleU0rBO3I1zt8FPoWLfK0auTE+KU8e4xxjPge51DjnTqtOuRsRW0dPf1GR/IjjF8sz7ixvPCwEdbkHTe9v3jmwGmyUxWPT7koMixdQ9D3w10Y8P6mhFn7P04ueqDPeetKoGSayRNs4OaDIREfhvfj/tjBxS/F3O3iiGTtZwvs4L4reGHY34SK+7Iit1XbmhrAud7SKRfIuzJeDfmidSvoakSzDjdrWPMdetK3BAcMv1PgXsmk6X0TNo+268pm2NRjCWO6ebTxqVupyp7aXHxiX71tmo6Vs1/byAS/btbgQsc1GSTmB6f4abbM/GvO/ZTR64gav0jaz4T9QsfxgmSwE4uXfr61mg3O4ZbCQOB7LDdpub+BpVCzxQmKu4YVHt8cSZxPLlkj+sGMZhAZNHTdjGUSPu7VdG6un5VLODJbYom+CC8GNch71WBfdgnPfWLmdZA54MzXcCuB4hfcyci0yt5a4i6g3wX2BJexFLhhV2oIuz3+y8knG1mx2F2t6C/Sy8nuxEst9Kk0DT6O1QOxH3JXD2BydqdIuZDclL2laF+gFz4O2xqLUVJqG39iYIouyTWUpcI9ia/wy41ZNSwFPa5OlMRnJBypLA0a5F4a4e1tUlkJtg1xnaTyxidK0FHBzYlNjkENUZd2AyRWWoBdxId+qNIVq3T1uachKIk9rWhf0Q7zP0vRiOCWXq7wN7gKt5CxyE6TyFvyWOJLvrHxPxJij6S0EiTxk5mfQ3D0OOmuQeCq/4xE/oBYlblVxV3dYud2UHcxVGaZtt5Redm4GE3lOLdpAQ+Nmch5GcgD8HB7/mHGLkfyN/N3g92Y8DyNZre23AcNpM3kBEz0n2n4beNy7rGRc9c+I/WnG5oWo7XtIxzAcd2r7beDkV1ayZySbwY/M2Kkka7K2FQPR815tvw1enZXcJOIB+ASMD1jxoZKzHqZw1AvNuJI9a/tt6O+4fe66fIJp+io/y8TyIf4f2u9a3gtf67AuD7IGjj+18xpkffas7XejvN6di6vcYglbxHiFybNcG735tlyGbfEzQeRmcP6QmZ9Fr5Gt9KCXX2/BmzXM/CYx3MKtskjb7g1+nGDYZ7ki+5D3aOfHjd8GrqVQ6GF+l+DxSuM3XzfGY/+tYgw5nd8ReoSRPIacr+1aDbIn9qayfPB7k0jegMFvsw07CfMjvJsqGxjU0sPy7iB6kJXcIqhscExskgtg8iS4CwX/TReRlZo6Z2Bovj7bt1ELNTHBsAdNHQ78O5S423WIrEOh2syMO0PDcwY96EVPPyRRI9c7UKBAgQIFCgwFpdL/4vlsS8kwnBEAAAAASUVORK5CYII="></a>
                        <br><h5>Mail: (roy@famoosterlee.nl)</h5> <a href="mailto:roy@famoosterlee.nl" title="Normal mail"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAK5SURBVGhD7Zj9TtNQGMZ3LyZ6GRhvx+i/OCRqCInfEb8GGhhb2AKOOESyQZDNyCCsm2thzLas05sw/kXi8TyH02Wrp0vZ2q2B8yS/ZFnf8z7P27SnTSNSUlJSUlJSl0FHxq9rqmFNaIYVU03r3ShhGWgWZOLxvEk1Wrc1s3VKISHjtGZYt3jM3jo0Wzfo9H8FTUIBy2ZY13lcd6XzhWq5bgibhAFkS+WKCo/rrocLy38ezC6Rrb2qsNEoQSZkQ0Ye113PEqu/78zMk+jLBZJY3yb0mhQ2HSbIkPy8zTIhGzLyuO6qNE4a89lNtgA8WcyQknosNBgG8H6ayLTzIBsy8rjuottdHQ02vpXJvbcJtnjyzSJZK+4LjYIEnvBGBmRBJvyPjDyuu+xBwL72gzxPrrbPxmxmg1QbJ11mQUDPOPOyfZEBWezj5x6ELaLXZzq3074+p9+nSUFR28f9pqBozANe8IQ3MnTW9DWIzZeDGpmaSzGDCWqwvPn1P4NBQC/0RG94wAuewtpBBgGVY5PEVtaZEZhZypKDui6sPQ/ogV52X3jAS1QLBh7EJruzR+6+OrsJ78eSJF9ShHVeyJcqrAd6oSd6i+o68W0QsFs7Io/iKyxAlBJf2yLf9aawVgRqsQZr0QO90FNU68TXQYAzzGOPYVCD2n5Pgu+D2OR2Fc+XB45Nvo6zWqzBWlFdLwIbBOCGfZH6yAIC5w3r3ChQ2+9GEegg4GwLLXZvoeUao3vrLg60dQc+iA0emJ0PNb8fpkMbBOBVZq7jNQO//Xq9GeogNp/oix8QHeuXkQwSBHKQsHHJBjFammhxmEBGHtddtDDjXBg26CAfeFx34eMXfeqG+gOdqjfHeNzewmdJuiiUn0w107rJY3rTof7zqqpb0bB8xKZDjFebzSs8npSUlJSUlNQFViTyD+G3jecel3H9AAAAAElFTkSuQmCC"></a>
                        <br><h5>Gmail: (roymcraft@gmail.com)</h5> <a href="mailto:roymcraft@gmail.com" title="Gmail"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAARbSURBVGhD7ZjbT1xVFMZ5M/E/8C9pE31oU/qkDZamWsNEilWrKEpomhIvNGmot15iiVqNt1YxUtISIibY2BpJJCkMaimMZWa4zH3OPgyXysyjLPc3OefMnpk1cGY4h/JwVvJLJsPa3/q+OXvvAeq88sorr7zaEbV+6dIjWirlSyQS7+5E4A0eDbt8ab1XA6K5iTJd71A2maBcLrejgCd4E80+Er3fTxm2iyt9re+W1vAkmYimZ2n1t9us4MMAXuBJ9Sg93zTsF0q0t62rTSaZ8x9SLpNhxbcFORseOG+i400y7BdKHGtmm4F+7Cg9mPDzg1wEMzGb8wTg2bBfqNTJE2yzxdNP0fKXX1B2dZUd6iSYgVmYyXoxgGfDfqH89fXr6Y52doGK3tZKa8EZ1oATQBszuNkq6RPtNLF/f3mQ8T171sd37aLIG22kPdPILjYRhw/SSv81ymWzrJmakFrQhDY300J6g0d49e/dWzkICBxqJNH6Mi+ksPjWKVqLxXhjVQANaHEzVOAJ3kyfmwYBE088TukL50g7eIAVtXjuMD349SZr0A5YCw1W2wQeLp7Pe1I92goCAv39FL19i8QLlW80k6UPzlJW11mzHOjFGk5LBbOTI79TcGCgyBuwHWTmxg0KBoMUvjdJ4r1udpCK3vI8/Tt2hzWugh70choq+vtnKSYPfyQS2VoQLJ6fn8+HAYmB66Qd2WQb4Jr+/FPKrqyUBcB7+Nlm12p+xk+D+QAmWw4CkdnZWSvMPL6kTnbwBhT01uO0Fpi2QuA13uN6VaAdn7xbFMKxICAcDlthgvfvU/qbr0hrbGDNmIhDDbTy4w958JrrsZBa+tVvKSJ3gBrAxLEgCwsLFAqFCmEk0ZEREsdf5I1VATSSo6NFxktxLAhQz4vJbCBA4sJHrEE76BfPUVR+QOocDkeDAC4MSPw8RMJ3hDXLke/9ZbhMvxKOBwHq4VeZ++tPEja+ofW3Oyk+PcVqV8KVIKDo8KvMzFC69zv2dya8p8uDH5HnjdPcCNeCgIphJJHRP0i89ooVQn/9VUqOj7E6dnA1CG4yLoRJSF4EWs/HpH/SQ7G5OVbDLq4GATj8pdeyCZ5YPB5n11WL60HAnPy0S0PgaUWjUba/FrYlCFBvMicDmGxbEIAn49RWKmXbgiQSCVpcXHTlaQDXg8C4pmm0vLycx60wrgaJyb+1M5mMFcIEwbj+reBaEGylpaWlshAmyWSSXVcrrgRRt9JGOHnwbQfx19f/V9pYGqTSVqoEep06L1wQ9h90fzc1ZUob1SCpVIo1uxm6rhcZqhUuyN2WlvIg011dp8Z37y5qNIMIIViTdkmn02XGqqUsiPQa6uu7Y9gvrsnOzh7/vn3WFgsPDla1lTYClwNn0C5qEGyp4JUrC4ZtviZOn350qrv7wL0zZ3zRsbGj8mD7HOIlefg/k+fsci1EJie/lmGuh4eGLv8zPPyYYdcrr7zyyquHWXV1/wNpZ38BW+CXNQAAAABJRU5ErkJggg=="></a>
                    </div>
                </div>

                <footer>Footer! <a href="https://icons8.com">Icons by Icons8</a></footer>
            </div>
        </div>
        <div class="debug_output" style="display: none;">

        </div>
    </body>
</html>
