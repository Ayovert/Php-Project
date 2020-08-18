<div class="profile_info">
			<img src="../images/admin_profile.png"  >

			<div>
				<?php  if (isset($_SESSION['username'])) : ?>
					<strong><?php echo $_SESSION['username']; ?></strong>

					<!--<small>
						<i  style="color: #888;">(<php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="home.php?logout='1'" style="color: red;">logout</a>
                       &nbsp; <a href="create_user.php"> + add user</a>
					</small>-->

				<?php endif ?>
			</div>
		</div>