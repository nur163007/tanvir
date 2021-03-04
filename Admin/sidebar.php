<aside id="left-panel" class="left-panel">
	<nav class="navbar navbar-expand-sm navbar-default">
		<div id="main-menu" class="main-menu collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li>
					<a href="index.php"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
				</li>
				<?php if($_SESSION["usertype"]=="Admin")
				{?>
					<li class="menu-item-has-children dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>Manage User</a>
						<ul class="sub-menu children dropdown-menu">                            <li><i class="fa fa-puzzle-piece"></i><a href="adduser.php">Add User</a></li>
							<li><i class="fa fa-id-badge"></i><a href="updateuser.php">Update User</a></li>
							<li><i class="fa fa-trash-o"></i><a href="deleteuser.php">Delete User</a></li>
						</ul>
					</li>
				<?php }?>


				<li class="menu-item-has-children dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-list"></i>Manage Category</a>
					<ul class="sub-menu children dropdown-menu">                            <li><i class="fa fa-puzzle-piece"></i><a href="addcategory.php">Add Category</a></li>
						<?php if($_SESSION["usertype"]=="Admin")
						{?>
							<li><i class="fa fa-id-badge"></i><a href="updatecategory.php">Update Category</a></li>
							<li><i class="fa fa-trash-o"></i><a href="deletecategory.php">Delete Category</a></li>
						<?php }?>
						<li><i class="fa fa-bars"></i><a href="viewcategory.php">View Category</a></li>
					</ul>
				</li>

				<li class="menu-item-has-children dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-list-ul"></i>Manage SubCategory</a>
					<ul class="sub-menu children dropdown-menu">                            <li><i class="fa fa-puzzle-piece"></i><a href="addsubcategory.php">Add SubCategory</a></li>
						<?php if($_SESSION["usertype"]=="Admin")
						{?>
							<li><i class="fa fa-id-badge"></i><a href="updatesubcategory.php">Update SubCategory</a></li>
							<li><i class="fa fa-trash-o"></i><a href="deletesubcategory.php">Delete SubCategory</a></li>
						<?php }?>
						<li><i class="fa fa-bars"></i><a href="viewsubcategory.php">View SubCategory</a></li>
					</ul>
				</li>

				<li class="menu-item-has-children dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-suitcase"></i>Manage Package</a>
					<ul class="sub-menu children dropdown-menu">                            <li><i class="fa fa-puzzle-piece"></i><a href="addpackage.php">Add Package</a></li>
						<?php if($_SESSION["usertype"]=="Admin")
						{?>
							<li><i class="fa fa-id-badge"></i><a href="updatepackage.php">Update Package</a></li>
							<li><i class="fa fa-trash-o"></i><a href="deletepackage.php">Delete Package</a></li>
						<?php }?>
						<li><i class="fa fa-bars"></i><a href="viewpackage.php">View Package</a></li>
					</ul>
				</li>

				<li class="menu-item-has-children dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon 	fa fa-picture-o"></i>Manage Advertisement</a>
					<ul class="sub-menu children dropdown-menu">                            <li><i class="fa fa-puzzle-piece"></i><a href="addadvertisement.php">Add Advertisement</a></li>
						<?php if($_SESSION["usertype"]=="Admin")
						{?>
							<li><i class="fa fa-trash-o"></i><a href="deleteadvertisement.php">Delete Advertisement</a></li>
						<?php }?>
						<li><i class="fa fa-bars"></i><a href="viewadvertisement.php">View Advertisement</a></li>
					</ul>
				</li>

				<li class="menu-item-has-children dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon 	fa fa-etsy"></i>Enquery</a>
					<ul class="sub-menu children dropdown-menu">
						<li><i class="fa fa-etsy"></i><a href="userenquery.php">User Enquery</a></li>

						<li><i class="fa fa-etsy"></i><a href="viewenquiry.php">Booking Enquery</a></li>

					</ul>
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</nav>
</aside>