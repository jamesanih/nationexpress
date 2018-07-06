<nav class="navbar">
								<!-- Collect the nav links, forms, and other content for toggling -->
                                <ul class="nav navbar-nav navbar-right menu">
								<?php
										if (!empty($_SESSION['isAdmin']) && $_SESSION['isAdmin'] == "true") {?>
											<li class="current-menu-item"><a href="adminportal/">Welcome, <?php echo $_SESSION['first']; ?></a></li>
										<?php }else if(!empty($_SESSION['isAdmin']) && $_SESSION['isAdmin'] == "false"){ ?>
											<li class="current-menu-item"><a href="index">Welcome, <?php echo $_SESSION['first']; ?></a></li>
										<?php }else if(empty($_SESSION['isAdmin'])){ ?>
											<li><a href="index.html">home</a></li>
											
										<?php } ?>
									
                                    <li><a href="../service.php">services</a></li>
									<li><a href="../track.php">track your parcel</a></li>
                                    <li><a href="../pricing.php">pricing</a></li>
                                    <li><a href="../contact.php">contact</a></li>
									<?php
										if (!empty($_SESSION['id'])) {?>
											<li class="signup1"><a href="logout">logout</a></li>
										<?php }else{ ?>
											<li class="signup1"><a href="login.html">login</a></li>
										<?php } ?>
								</ul>
								<!-- /.navbar-collapse -->
							</nav>


							