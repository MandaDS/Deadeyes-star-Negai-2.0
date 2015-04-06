<?php include("header.php"); ?>

	<!-- User Profile -->
	<div id="user-profile" class="container-fluid">

		<!-- User Avatar -->
		<div class="user-avatar">
			<img src="img/testavatar1.jpg" alt="Username on Deadeyes-star.com" title="Username on Deadeyes-star.com">
		</div>
		<!-- User Avatar -->

		<!-- User About -->
		<div class="about">
			<div class="arrow-up"></div>
			<h1>MandaDS</h1>
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<h2>User Info</h2>
						Joined: <strong>January 1, 2015</strong><br>
						Level: <strong>10</strong><br>
						Class: <strong>Mage</strong><br>
						Total XP: <strong>29385734958</strong><br>
						Love: <strong>350</strong><br>
					</div>
					<div class="col-md-8">
						<h2>About</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dictum vitae nunc ac accumsan. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut vulputate mattis neque sed hendrerit. Quisque mollis mi sit amet ornare posuere. Nunc sed est vel neque porta auctor non ac ex. Maecenas pretium turpis ac diam fermentum, placerat sodales augue volutpat. </p>
					</div>
					<div class="col-md-12">

						<!-- User Progress Bar -->
						<h2>Progress till next level</h2>
						<div class="progress">
							<div class="bar">
								<div class="percent"><span>80%</span></div>
						    </div>
						</div>
						<span class="start">0</span>
						<span class="end">3847</span>
						<div class="clear"></div>
						<!-- User Progress Bar -->

					</div>
				</div>
			</div>
		</div>
		<!-- User About-->

		<!-- User Info Tabs-->
		<div class="user-info">
			<div class="container">

				<h1>Activity</h1>
				<div class="activity">
					<!-- User Info Tab Navigation -->
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-4" role="tab-list">
							<a href="#bands" aria-controls="bands" role="tab" data-toggle="tab">
							<div class="info-tab">
								<span class="glyphicon glyphicon-music" aria-hidden="true"></span>
								<span class="count">30</span>
							</div>
							</a>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-4">
							<a href="#artists" aria-controls="artists" role="tab" data-toggle="tab">
							<div class="info-tab">
								<span class="glyphicon glyphicon-fire" aria-hidden="true"></span>
								<span class="count">18</span>
							</div>
							</a>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-4">
							<a href="#discography" aria-controls="discography" role="tab" data-toggle="tab">
							<div class="info-tab">
								<span class="glyphicon glyphicon-cd" aria-hidden="true"></span>
								<span class="count">46</span>
							</div>
							</a>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-4">
							<a href="#lyrics" aria-controls="lyrics" role="tab" data-toggle="tab">
							<div class="info-tab">
								<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
								<span class="count">5</span>
							</div>
							</a>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-4">
							<a href="#articles" aria-controls="articles" role="tab" data-toggle="tab">
							<div class="info-tab">
								<span class="glyphicon glyphicon-book" aria-hidden="true"></span>
								<span class="count">0</span>
							</div>
							</a>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-4">
							<a href="#events" aria-controls="events" role="tab" data-toggle="tab">
							<div class="info-tab">
								<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
								<span class="count">12</span>
							</div>
							</a>
						</div>
					</div>
					<!-- User Info Tab Navigation -->

					<!-- User Info Tab Content -->
					<div class="tab-activity row">
						<div class="tab-content col-md-12">
							<div class="tab-pane fade in active" id="bands"  role="tabpanel">
								<h2>Bands</h2>
								<table>
									<thead>
									<tr>
										<th>Date</th>
										<th>Band</th>
										<th>Activity</th>
									</tr>
									</thead>
									<tbody>
									<tr>
										<td>Feb 20, 2015</td>
										<td>Band Name</td>
										<td>Added band to the database.</td>
									</tr>
									<tr>
										<td>Jan 4, 2015</td>
										<td>Band Name</td>
										<td>Edited band profile.</td>
									</tr>
									</tbody>
								</table>
							</div>
							<div class="tab-pane fade" id="artists"  role="tabpanel">
								<h2>Artists</h2>
							</div>
							<div class="tab-pane fade" id="discography"  role="tabpanel">
								<h2>Discography</h2>
							</div>
							<div class="tab-pane fade" id="lyrics"  role="tabpanel">
								<h2>Lyrics</h2>
							</div>
							<div class="tab-pane fade" id="articles"  role="tabpanel">
								<h2>Articles</h2>
							</div>
							<div class="tab-pane fade" id="events"  role="tabpanel">
								<h2>Events</h2>
							</div>
						</div>
					</div>
					<!-- User Info Tab Content -->
				</div>
			</div>
		</div>
		<!-- User Info Tabs -->

	</div>
	<!-- User Profile -->

<?php include("footer.php"); ?>
