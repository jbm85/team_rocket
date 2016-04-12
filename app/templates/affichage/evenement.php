<?php $this->layout('layout', ['title' => 'Events - Evenements',
	'id' => 'event',]) ?>
<?php $this->start('principal') ?>
			<div>
				<img id="organisateur" src="photo/exemple_profil.jpg" height="90px" width="80px" alt="photo de profil"> <!-- photo organisateur-->
				<h3 class="eventtitle">Titre de l'évenement</h3>
			
			<div>
				<h4 class="infos">Détail de l'évènement</h4>
				<ul class="details">
					<li>Date</li>
					<li>Description</li>
					<li>Localisation</li>
					<li>Prix</li>
				</ul>
			</div>
				<!-- photo du lieu de l'évènement -->

					<div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
					    <!-- Carousel indicators -->
					    <ol class="carousel-indicators">
					        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					        <li data-target="#myCarousel" data-slide-to="1"></li>
					        <li data-target="#myCarousel" data-slide-to="2"></li>
					    </ol>   
					    <!-- Carousel items -->
					    <div class="carousel-inner">
					        <div class="item active">
					            <img src="photo/hanszimmer1.jpg" alt="cliché de Hans Zimmer" height="190px" width="306px">
					            <div class="carousel-caption">
					            </div>
					        </div>
					        <div class="item">
					            <img src="photo/hanszimmer2.jpg" alt="vue de la régie" height="190px" width="306px">
					            <div class="carousel-caption">
					            </div>
					        </div>
					        <div class="item">
					            <img src="photo/hanszimmer3.jpg" alt="vue de la régie vide" height="190px" width="306px">
					            <div class="carousel-caption">
					            </div>
					        </div>
					    </div>
					    <!-- Carousel nav -->
					    <a class="carousel-control left" href="#myCarousel" data-slide="prev">
					        <span class="glyphicon glyphicon-chevron-left"></span>
					    </a>
					    <a class="carousel-control right" href="#myCarousel" data-slide="next">
					        <span class="glyphicon glyphicon-chevron-right"></span>
					    </a>
					</div>
					         
                    
                <!-- google map view -->
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3313.2757235953122!2d151.21310801520983!3d-33.856784380659604!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12ae665e892fdd%3A0x3133f8d75a1ac251!2sOp%C3%A9ra+de+Sydney!5e0!3m2!1sfr!2sfr!4v1460027006326" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
<?php $this->stop('principal') ?>