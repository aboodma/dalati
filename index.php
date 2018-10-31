
<?php include 'Template/Head.php';?>
<body  class="m-page--fluid m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >
	<div class="m-grid m-grid--hor m-grid--root m-page">
		<?php include 'Template/Header.php';?>
		<div class="m-grid__item m-grid__item--fluid  m-grid m-grid--ver-desktop m-grid--desktop m-page__container m-body">

			<?php include 'App/Router/Router.php';?>
		</div>
		<?php include 'Template/Footer.php';?>
	</div>
	<?php include 'Template/Sidebar.php';?>
	<div id="m_scroll_top" class="m-scroll-top">
		<i class="la la-arrow-up"></i>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="assets/OfficesAccounts.js" charset="utf-8"></script>
	<script src="assets/CustomersAccounts.js" charset="utf-8"></script>
	<script src="assets/SingleOfficeAccount.js" charset="utf-8"></script>

	<script src="assets/datatables.js" charset="utf-8"></script>
	<?php include 'Template/Scripts.php';?>
</body>
</html>
