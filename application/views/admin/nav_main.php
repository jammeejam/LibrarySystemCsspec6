<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="<?=base_url()."resources/img/default_student_pic.png"?>" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
				<p><?php
				if(strlen($user_in['middleName']) > 0)
					echo $user_in['firstName'].' '.substr($user_in['middleName'], 0, 1).'. '.$user_in['lastName'];
				else
					echo $user_in['firstName'].' '.$user_in['LastName'];
				?>
			</p>
			<a href="Dashboard"><i class="fa fa-circle text-success"></i>active</a>
		</div>
	</div>
	<!-- sidebar menu: : style can be found in sidebar.less -->
	<ul class="sidebar-menu">
		<li class="header">MAIN NAVIGATION</li>
		<li class="<?php //if($active == "profile"){echo "active";}?>">
			<a href="<?=base_url();?>">
				<i class="fa fa-dashboard"></i> <span>Admin Profile</span>
			</a>
		</li>
		<li class="<?php //if($active == "profile"){echo "active";}?>">
			<a href="<?=base_url();?>admin/dashboard">
				<i class="fa fa-dashboard"></i> <span>Dashboard</span>
			</a>
		</li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-files-o"></i>
        <span>Users</span>
        <span class="pull-right-container">
          <span class="label label-primary pull-right">4</span>
        </span>
      </a>
      <ul class="treeview-menu">
        <li>
          <a href="#"><i class="fa fa-circle-o"></i> Librarian
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url();?>admin/add/librarian"><i class="fa fa-circle-o"></i> New</a></li>
            <li><a href="<?=base_url();?>admin/edit/librarian"><i class="fa fa-circle-o"></i> Update</a></li>
            <li><a href="<?=base_url();?>admin/view/librarians"><i class="fa fa-circle-o"></i> View</a></li>
          </ul>
        </li>
        <li>
          <a href="#"><i class="fa fa-circle-o"></i> Teacher
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url();?>admin/add/teacher"><i class="fa fa-circle-o"></i> New</a></li>
            <li><a href="<?=base_url();?>admin/edit/teacher"><i class="fa fa-circle-o"></i> Update</a></li>
            <li><a href="<?=base_url();?>admin/view/teachers"><i class="fa fa-circle-o"></i> View</a></li>
          </ul>
        </li>
        <li>
          <a href="#"><i class="fa fa-circle-o"></i> Student
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?=base_url();?>admin/add/student"><i class="fa fa-circle-o"></i> New</a></li>
            <li><a href="<?=base_url();?>admin/edit/student"><i class="fa fa-circle-o"></i> Update</a></li>
            <li><a href="<?=base_url();?>admin/view/students"><i class="fa fa-circle-o"></i> View</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li>
			<a href="#">
        <i class="fa fa-files-o"></i>
        <span>Schools</span>
        <span class="pull-right-container">
          <span class="label label-primary pull-right">4</span>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="<?=base_url();?>admin/add/school"><i class="fa fa-circle-o"></i> New</a></li>
        <li><a href="<?=base_url();?>admin/edit/school"><i class="fa fa-circle-o"></i> Update</a></li>
        <li><a href="<?=base_url();?>admin/view/schools"><i class="fa fa-circle-o"></i> View</a></li>
        <li><a href="<?=base_url();?>admin/view/school/settings"><i class="fa fa-circle-o"></i> Settings</a></li>
      </ul>
    </li>
	</ul>
</section>
<!-- /.sidebar -->
</aside>
