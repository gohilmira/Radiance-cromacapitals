<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="<?= $this->conn->company_info('symbol'); ?>" type="image/png" />
	<!--plugins-->
	<link href="<?= $panel_url; ?>assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
	<link href="<?= $panel_url; ?>assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="<?= $panel_url; ?>assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="<?= $panel_url; ?>assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
	<link href="<?= $panel_url; ?>assets/css/pace.min.css" rel="stylesheet" />
	<script src="<?= $panel_url; ?>assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="<?= $panel_url; ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?= $panel_url; ?>assets/css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="<?= $panel_url; ?>assets/css/app.css" rel="stylesheet">
	<link href="<?= $panel_url; ?>assets/css/icons.css" rel="stylesheet">
	<link href="<?= $panel_url; ?>assets/css/new.css" rel="stylesheet">
	<link href="<?= $panel_url; ?>assets/css/extra.css" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="<?= $panel_url; ?>assets/css/custom.css" />
	<link rel="stylesheet" href="<?= $panel_url; ?>assets/css/style1.css" />
	<link rel="stylesheet" href="<?= $panel_url; ?>assets/css/dark-theme.css" />
	<link rel="stylesheet" href="<?= $panel_url; ?>assets/css/semi-dark.css" />
	<link rel="stylesheet" href="<?= $panel_url; ?>assets/css/header-colors.css" />
	<title><?= $this->conn->company_info('company_name'); ?></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" charset="utf-8"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/easy-pie-chart/2.1.6/jquery.easypiechart.min.js" charset="utf-8"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

	<style>
		@import url('https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700&family=Noto+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,500;1,600&family=Open+Sans:ital,wght@0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600&family=Oswald:wght@200;300;400;500;600;700&family=Play:wght@400;700&family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,300;1,600&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700&display=swap');


		/* variables-css  */

		:root {
			--first: #2d325a;
			--second: linear-gradient(135deg, #f5317f 0%, #ff7c6e 100%);
			--text1: linear-gradient(135deg, #f5317f 0%, #ff7c6e 100%);
			--text2: #fff;
			--text3_light: #fff;
			--other_color: #ebebebfa;
		}

		p,
		h1,
		h4,
		h3,
		h6,
		h5,
		h2,
		span,
		li,
		a,
		b {
			font-family: 'Playfair Display', serif;
		}

		p,
		h1,
		h4,
		h3,
		h2,
		a {
			font-weight: 500 !important;
		}

		.form-group label {
			font-family: 'Playfair Display', serif;
		}

		.form-control {

			font-size: 14px;
			font-weight: 400;
			font-family: 'Playfair Display', serif;
		}

		input {
			font-size: 14px;
			font-weight: 400;
			font-family: 'Playfair Display', serif;
		}

		form {
			font-family: 'Playfair Display', serif;
		}

		h5.user_card_title_group i {
			margin-right: 7px;
			font-size: 16px;
		}

		.rep_head_wallet {
			color: var(--other_color);
		}

		.profile_card_bottom a {
			box-shadow: none !important;
		}

		.report_data_new {
			margin-top: 31px;
		}

		.tabs_content_data h3 {
			color: #fff;
		}

		.user_pic_profile {
			margin: 10px auto;
		}

		.tabs_content_data h5 {
			color: #fff;
		}

		.ghost1 {
			display: none;
		}

		.dashbaord_detail_proflie a {
			font-size: 12px;
			background: var(--second) !important;
			padding: 2px 5px;
			border-radius: 20px;
			color: #fff;
			display: inline-block;
		}

		.dashbaord_detail_proflie span {
			color: #fff;
			font-size: 14px;
			text-transform: capitalize;
		}

		.dashbaord_detail_proflie {
			margin-bottom: 10px;
		}

		.card-header {
			color: #fff;
			border-bottom: 1px solid;
		}

		.card.card-body.card-bg,
		.card {
			background-color: var(--first) !important;
			box-shadow: none !important;
		}

		.dashbaord_detail_proflie a {
			font-size: 12px;
			background: var(--second) !important;
			padding: 2px 5px;
			border-radius: 20px;
			color: #fff;
		}

		.card.card-body.card-bg-1 {
			background-color: var(--first) !important;
			box-shadow: none !important;

		}

		.select_payment select {

			background: none;
			color: #fff;
		}

		.news_page p {
			background: none;
			border: 1px solid #fff;
		}

		table th,
		td {
			color: var(--text2);
			border: 1px solid #f8f4f40f !important;
			white-space: nowrap;
			font-family: 'Playfair Display', serif;
		}

		.recent_event_deatil p {
			background: none;

			border: 1px solid #fff;
		}


		input::placeholder {
			color: #fff !important;
			opacity: 1 !important;
		}

		select::placeholder {
			color: #fff !important;
			opacity: 1 !important;
		}


		.form-control:focus {
			color: #fff;
			border-color: var(--second) !important;
		}

		select.form-control.user_input_select {
			background: none;
		}

		.form-control {

			background: none !important;
			color: #fff;
		}

		.report_data_new {

			display: flex;
			align-items: center;
		}

		.form-control:focus {
			box-shadow: none !important;

		}

		/********* scroll_css **********/


		/************ scroll_css_end *************/

		body {
			background: #120a36;

		}

		.rep_head_wallet {
			margin-top: 15px;
		}

		/* variables-css-end  */
		.panel_sales h5 {
			color: #ffff;
		}

		select.form-control.user_input_select {
			height: 35px;
		}

		select.form-control {
			height: 35px;
		}

		input.input_user_panel,
		span.input_user_panel,
		select.select_user_panel {

			background: none;
		}

		option {
			background: #1a284a;

		}

		.alert-success {

			display: flex !important;
		}

		div#action_areap {
			padding: 10px 18px;
		}

		input.form-control.user_input_text.data {
			width: 200px;
			background: #6259ca;
			color: #fff;
			border: none;
		}


		h5.user_card_title.profile_edit i {
			color: #f7f7ff !important;
		}

		/*filter_css*/
		.data_detail_page_group {
			display: flex;
			flex-wrap: wrap;
		}

		.card.card-bg-1 {

			padding-left: 6px;
		}

		.detail_input_group {
			margin: 5px 4px;
		}

		@media screen and (max-width: 768px) {
			.detail_input_group {

				width: 100%;
			}

			.ghost1 {
				display: none;
			}

			.page-content {
				padding: 18px 2px;
			}

			.user_detail_dashboard p {
				font-size: 14px !important;
			}

			.user_detail_dashboard h1 {
				font-size: 18px !important;
			}
		}

		.user_card_body {
			flex: 1 1 auto;
			padding: 6px 10px;
		}

		/*filter_css_end*/


		.btn-check:focus+.btn-success,
		.btn-success:focus {
			color: #fff;
			background-color: #6259ca !important;
			border-color: #6259ca !important;
			box-shadow: 0 0 0 0.25rem rgb(10 64 76) !important;
		}

		.btn-success:hover {
			color: #fff;
			background-color: #6259ca !important;
			border-color: #6259ca !important;
		}

		input#referral_link_right:focus {
			outline: none;
			box-shadow: none !important;
		}

		input#referral_link_left:focus {
			outline: none;
			box-shadow: none !important;
		}

		.news_dec {
			margin-top: 15px;
		}

		.news_dec h5 {
			font-size: 18px;
			text-transform: capitalize;
		}

		.news_dec p {
			font-size: 14px;
		}

		button.close {
			position: absolute;
			right: 0;
			bottom: 6px;
		}

		.detail_form_tab {
			position: relative;
		}

		a.user_btn_button {
			border-radius: 2px;
			border: 1px solid transparent;
			padding: 0.375rem 0.75rem;
			font-size: 14px;
			font-weight: 500;
			margin: 0;
			display: inline-block;
			color: var(--text3_light) !important;
			background: var(--second) !important;

		}

		.table td,
		.table th {
			padding: 10px;
			color: var(--text2);
			border: 1px solid #dededf1c !important;
			white-space: nowrap;
		}

		.table td {
			font-weight: 500;
		}

		.table th {
			font-size: 12px;
		}

		label {
			color: var(--text2);
		}

		.user_form_row_data {
			align-items: center;
		}

		input#referral_link_right {
			margin-right: 3px;
			border: 1px solid #ddd6d6;
			align-items: center;
		}

		.input-group-text {
			padding: 9px !important;

		}

		input#referral_link_right:focus {
			outline: none;

		}

		.text-input {

			align-items: center;
			display: flex;
		}


		li.breadcrumb-item a {
			text-transform: capitalize;
		}

		.mobile-toggle-menu i {
			color: var(--second) !important;
			margin-right: 10px;
		}

		.breadcrumb {
			background: var(--first) !important;
			padding: 10px;
		}

		marquee {
			color: #ffe77a;
		}

		select.form-control.mr-sm-2.selected_detail_data {
			padding: 8px !important;
			height: 38px !important;
		}

		.user-box .user-info {
			display: block;
		}

		.btn-dark {
			background: #000 !important;
			border-color: #000 !important;
			;
		}

		h5.user_card_title.filter_title {
			color: var(--text3_light) !important;
		}

		span#wallet {
			color: var(--text3_light) !important;
		}

		.breadcrumb-item.active {
			color: #b4b4b4 !important;
		}

		.toggle-icon {
			color: var(--text3_light) !important;
		}

		input.user_btn_button {
			background: var(--second) !important;
			color: var(--text3_light) !important;
			border-radius: 2px;
		}

		li.breadcrumb-item a {
			color: var(--text2) !important;
		}

		h3.user_card_title {
			color: #000;
		}

		.regard_welcome_letter {
			color: var(--text2);
		}

		button.user_btn_button.send_otp {
			margin-left: 20px;
			background: #6259ca;
			color: var(--text3_light);
			border: none;
		}

		.ghost1 b {
			color: var(--text2);
		}

		.user-info.ps-3 p {
			color: var(--text2);
		}

		.input-group-text {
			padding: 9px !important;
			background: var(--first) !important;
			color: var(--second);
		}

		.welcome_color_bacakground,
		.welcome_logo_letter a img {
			background: var(--first) !important;
		}

		.container.welcome_color {
			border: 4px solid var(--first) !important;
		}

		.user_eran_heading h5 {
			color: #000;
			font-size: 16px;
		}

		.user_eran_heading p {
			color: #000;
		}

		.location_link p {
			color: #000;
		}

		.input-group-text {
			padding: 12px !important;
		}

		.input-group-prepend {
			margin-right: -2px;
		}

		.sidebar-wrapper .metismenu a .parent-icon {
			font-size: 15px;
		}

		.parent-icon i {

			width: 22px;
			height: 22px;
			color: #fff;
			line-height: 22px;
			text-align: center;
			border-radius: 40px;
			font-size: 16px;

		}

		.form-control {
			margin-bottom: 10px;
		}

		button.button_data_link {
			padding: 8px 16px;
			background: var(--second);
			font-size: 16px;
			border: none;
			color: var(--text3_light);


		}

		@media screen and (max-width: 768px) {

			.user_name {
				flex-direction: column;
				align-items: baseline !important;
			}
		}

		a.user_anchor {
			padding: 8px 16px;
			background: var(--second);
			font-size: 14px;
			border: none;
			display: inline-block;
			font-weight: 500;
			color: var(--text3_light);
		}

		span#total_pins {
			color: #fff;
		}

		.rep_head_wallet h6 {
			color: #fff;
		}

		.earn_refer_title {
			display: flex;
			align-items: center;
			justify-content: space-between;

		}

		input.reset_user_panel_button {
			background: var(--second);
			font-size: 16px;
			color: var(--text2);
		}

		input.reset_user_panel_button.detail_rest {
			padding: 8px 16px;
		}

		a.reset_user_panel_button_anhor {
			background: var(--second);
			font-size: 16px;
			color: var(--text2);
			padding: 4px 10px;
		}

		a.button_data_link_anhor {
			padding: 8px 16px;
			background: var(--second);
			font-size: 16px;
			border: none;
			color: var(--text3_light);
		}

		.breadcrumb-item+.breadcrumb-item::before {
			display: none !important;
		}

		p.mb-0 {

			color: var(--text3_light);
		}

		.page-footer {
			background-color: var(--first);
		}

		.sidebar-wrapper {
			background-color: var(--first);
		}

		.sidebar-wrapper .metismenu a {
			color: var(--text2);
			font-size: 16px;
		}

		.sidebar-wrapper .metismenu ul a {
			font-size: 15px;
		}

		.sidebar-wrapper .metismenu ul a {
			padding: 6px 15px 6px 34px;
			font-size: 15px;
			border: 0;
		}

		.sidebar-wrapper .metismenu a {
			padding: 6px 15px !important;
		}

		.sidebar-wrapper .metismenu .mm-active>a {
			background: var(--text1);
			color: var(--text3_light);
			font-size: 15px;
			border-radius: 4px;
		}

		.sidebar-wrapper .metismenu a:hover {
			background: var(--text1);
			color: var(--text3_light);
			border-radius: 4px;
		}

		.sidebar-wrapper .metismenu ul {
			background: var(--first);
			border: none;
		}

		.demo_detail_section {
			padding: 10px;
			background-color: #fff;
			border-radius: 4px;
			margin-bottom: 10px;
			margin-top: 20px;
			box-shadow: 0 0 5px 0 rgb(43 43 43 / 10%), 0 11px 6px -7px rgb(43 43 43 / 10%);
		}

		.detail_welcome_section h3,
		.detail_welcome_section h5 {
			color: var(--text1);
			font-size: 16px;
		}

		.detail_welcome_section h5 {
			margin-bottom: 2px;
		}

		.detail_welcome_section p {
			color: var(--text1);
			margin-bottom: 6px;
			font-size: 16px;
			font-weight: 500;
		}

		.inner_side_content {
			display: flex;
			align-items: center;

		}

		.topbar.d-flex.align-items-center {
			background: var(--first);
		}

		.data_detail_inner_icon {
			margin-left: auto;
		}

		.data_detail_inner h4 {
			font-size: 18px;
			color: #ffe77a;
		}

		.investment_detail.data {
			background: #6259ca;
		}

		.investment_detail.data a {
			background: #fff !important;
			color: #000 !important;
		}

		.investment_detail.data h4 {
			color: #fff;
		}

		.investment_detail.data p {
			color: #fff;
		}

		.data_detail_inner_icon i {
			width: 56px;
			height: 56px;
			display: flex;
			align-items: center;
			justify-content: center;
			background-color: var(--first);
			font-size: 27px;
			border-radius: 10px;
			color: #ffe77a;
			border: 1px solid #ffe77a;
		}

		/*kyc_css*/
		table.table.table-bordered.table-responsive.table_detail {

			width: 100%;
			overflow-x: auto;
		}

		@media screen and (max-width: 768px) {
			table.table.table-bordered.table-responsive.table_detail {
				width: 100%;
				overflow-x: auto;
				display: block;
			}

			p.designattion.mb-0 {
				display: none;
			}

			.nav-link {
				padding: 0px;
			}
		}


		ul.tabs_detail {
			margin: 0px;
			padding: 0px;
			list-style: none;
			width: 100%;
			display: flex;
			white-space: nowrap;
		}

		ul.tabs_detail li {
			background: none;
			color: var(--text2);
			display: inline-block;

			margin-left: 5px;
			padding: 7px 15px;
			cursor: pointer;
			border: 1px solid #c8c8c8;
			border-radius: 40px
		}

		.excel_button_user p {
			color: #000;
		}

		ul.tabs_detail li.current {
			background-color: var(--text1);
			color: #fff;

		}

		.card-bg-1 {
			background-color: #fff !important;

		}

		.tab-content {
			display: none;
			background: var(--first) !important;
			padding: 15px;
			margin-top: 5px;
		}

		.tab-content.current {
			display: inherit;
		}

		.sidebar-header {
			background: var(--first) !important;
		}

		.detail_form_tab input {
			padding: 8px 15px 8px 15px;
			border-radius: 5px 5px 5px 5px;
			width: 100%;
			max-width: 100%;
			margin: 10px 0px;
			border: 1px solid #fff;
			background: none;
			color: #fff;
		}

		select.select_services_tab {
			padding: 8px 15px 8px 15px;
			border-radius: 5px 5px 5px 5px;
			width: 100%;
			max-width: 100%;
			margin: 10px 0px;
			border: 1px solid #fff;
			background: none;
			color: #fff;
		}

		button.tab_button_click {
			padding: 8px 16px;
			font-weight: 500;
			font-size: 14px;
			margin-left: 15px;
			background-color: var(--second);
			font-size: 18px;
			font-weight: 500;
			color: var(--text2);
			border-radius: 4px;
			border: 1px solid var(--second);
			text-transform: capitalize;
			width: 100%;
			max-width: 100px;

		}

		button.tab_button_click:focus {
			outline: none;
		}

		.detail_form_tab label {
			width: 100% !important;
		}

		.tab_images_detail img {
			margin-bottom: 10px !important;
		}

		<?php $userid = $this->session->userdata('user_id');

		$profile = $this->session->userdata("profile");

		$kyc_details = $this->conn->runQuery('*', "user_accounts", "status='1' and u_code='$userid'");

		?>@media only screen and (max-width: 768px) {
			ul.tabs_detail li {
				font-size: 14px;
				padding: 4px 10px;
				cursor: pointer;
				margin-right: 5px;
				display: flex;
				align-items: center;
				border-radius: 4px
			}

			ul.tabs_detail {

				display: flex;
				overflow-x: scroll;
			}
		}


		.location_link h2 {
			color: #fff;
		}

		.user_list_team span {
			float: right;
		}

		.user_list_team ul {
			list-style: none;
			margin: 0;
			padding: 0;
		}

		.ghost1 b {

			font-weight: 400;
		}

		.user_list_team ul li i {
			margin-right: 8px;
		}

		h5.user_card_title_group {
			color: var(--text2);
		}

		h5.user_card_title_group i {
			color: var(--text2);
		}

		.user_main_card {
			background: var(--first) !important;
			border: none;
		}

		.widthrwal_report_user h3 {
			color: var(--text2);
		}

		.widthrwal_report_user p {
			color: var(--text2);
		}

		.user_list_team ul li {
			padding: 8px 0;
			color: #000;
			border-bottom: 1px solid #00000038;
			font-size: 13px;
			font-weight: 500;
		}

		.sidebar-wrapper .metismenu a:focus {
			color: var(--text2);
			text-decoration: none;
			background: var(--second);
			border-radius: 4px;
		}

		.btn-success {
			background: var(--second) !important;
			border-color: #4b2feb;
		}

		button.close {
			float: right;
		}


		/*dashboard-icons-css*/
		.wallet_heading {
			border: 1px solid #dfdbdb6b;
			text-align: center;
			padding: 10px 10px;
			border-radius: 0.25rem;
			box-shadow: 0 0 0.875rem 0 rgb(53 64 82 / 12%) !important;
			position: relative;
			margin-bottom: 20px;
			background: #fff;
		}

		.wallet_icon_image img {
			width: 45px;
			border: 1px solid #d9d2d2b8;
			padding: 5px;
			border-radius: 50%;
			box-shadow: 0 14px 14px rgb(0 0 0 / 11%), 0 10px 13px rgb(0 0 0 / 10%);
		}

		.wallet_content {
			padding-top: 10px;
		}

		.wallet_content h4 {
			font-size: 15px;
			margin-bottom: 4px;
		}

		.wallet_content h6 {
			font-size: 18px;
		}

		.user_list_team ul li img {
			width: 18px;
			background: #2a6592;
			padding: 2px;
			border-radius: 50%;
		}

		.demo_detail_section h2 {
			text-align: center;
			font-weight: 500;
			color: var(--second);
			font-size: 16px;
		}

		.location_link h2 {
			color: #000;
		}

		.location_link h2 {
			text-align: start;
			font-weight: 500;
			font-size: 18px;
		}

		.user_eran_heading h5 {
			text-align: start;
			font-weight: 500;
			font-size: 18px;
		}

		.proflie_user {
			text-align: center;
		}

		.proflie_user img {
			width: 100px;
			height: 100px;
			border: 2px solid white;
			padding: 4px;
			border-radius: 50%;
		}

		.proflie_user h4 {
			font-size: 18px;
			font-weight: 600;
			margin: 10px 0px 2px 0px;
			text-transform: capitalize;
			color: var(--text2);
		}

		.proflie_user span {
			color: var(--text2);
			font-size: 16px;
			text-transform: capitalize;
		}

		@media only screen and (max-width: 567px) {

			.wallet_content h4,
			.wallet_content h6 {
				font-size: 12px;
			}
		}

		img.images_global {
			width: 32px;
		}
	</style>
</head>

<body>

	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img class="" src="<?= $this->conn->company_info('logo'); ?>" alt="<?= $this->conn->company_info('company_name'); ?>" style="width:50px;height:50px;">
				</div>
				<div>
					<!--<h4 class="logo-text">Rocker</h4>-->
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
				</div>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li>
					<div class="proflie_user">
						<?php if ($profile->img != '') { ?>
							<img src="<?= base_url('images/users/') . $profile->img; ?>">
						<?php } else { ?>
							<img src="<?= $this->conn->company_info('logo'); ?>">
						<?php
						}
						?>
						<h4><?= $this->session->userdata('profile')->name; ?></h4>
						<span><?= $this->session->userdata('profile')->username; ?></span>
					</div>
				</li>
				<li>
					<a href="<?= $panel_path . 'dashboard'; ?>" class="">
						<div class="parent-icon"><i class="fa-solid fa-house"></i>
						</div>

						<div class="menu-title">Dashboard</div>
					</a>

				</li>
				<?php
				if ($this->conn->plan_setting('profile_section') == 1) {
				?>
					<li>
						<a href="avascript:;" class="has-arrow">
							<div class="parent-icon"><i class="fa-solid fa-user-gear"></i>
							</div>
							<div class="menu-title">My Account</div>
						</a>
						<ul>
							<?php if ($this->conn->plan_setting('welcome_letter') == 1) { ?>
								<li> <a href="<?= $panel_path . 'profile/letter'; ?>"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Welcome Letter</a>
								</li>
							<?php
							}
							if ($this->conn->plan_setting('profile_page') == 1) {
							?>
								<li>
									<a href="<?= $panel_path . 'profile'; ?>"><i class="fa fa-dot-circle-o" aria-hidden="true"></i></i>Profile</a>
								</li>
							<?php
							}
							if ($this->conn->plan_setting('profile_page') == 1) {
							?>
								<li>
									<a href="<?= $panel_path . 'profile/edit-profile'; ?>"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Edit Profile</a>
								</li>
							<?php
							}
							if ($this->conn->plan_setting('id_card') == 1) {
							?>
								<li>
									<a href="<?= $panel_path . 'profile/id-card'; ?>"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>vCard</a>
								</li>
							<?php
							}
							if ($this->conn->plan_setting('change_password') == 1) {
							?>
								<li>
									<a href="<?= $panel_path . 'profile/change-password'; ?>"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Change Password</a>
								</li>
							<?php
							}
							if ($this->conn->plan_setting('add_account_section') == 1) {
							?>
								<li>
									<a href="<?= $panel_path . 'payment/add-account'; ?>"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Accounts</a>
								</li>
							<?php
							}
							?>
							<?php if ($this->conn->plan_setting('form') == 1) {  ?>
								<!--<li>
                                    <a href="<?= $panel_path . 'profile/form'; ?>"><i class="bx bx-right-arrow-alt" ></i>Form</a>
                                </li>-->
							<?php }
							if ($this->conn->plan_setting('change_tx_password') == 1) {
							?>
								<li>
									<a href="<?= $panel_path . 'profile/tx-change-password'; ?>"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Change Tx Password</a>
								</li>
							<?php }
							if ($this->conn->plan_setting('set_tx_password') == 1) {
							?>
								<li>
									<a href="<?= $panel_path . 'profile/set_user_password'; ?>"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Set Tx Password</a>
								</li>
							<?php
							}
							?>
						</ul>
					</li>
				<?php
				}
				?>


				<?php
				if ($this->conn->plan_setting('team_section') == 1) {
				?>
					<li>
						<a href="javascript:;" class="has-arrow">
							<div class="parent-icon"><i class="fa-solid fa-users-gear"></i>
							</div>
							<div class="menu-title">My Genelogy</div>
						</a>
						<ul>
							<?php if ($this->conn->plan_setting('direct_team') == 1) {  ?>
								<li>
									<a href="<?= $panel_path . 'team/team-direct'; ?>"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Direct</a>
								</li>
							<?php
							}
							?>
							<?php if ($this->conn->plan_setting('generation_team') == 1) {  ?>
								<li>
									<a href="<?= $panel_path . 'team/team-generation'; ?>"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Generation</a>
								</li>
							<?php
							}
							?>
							<?php if ($this->conn->plan_setting('left_team') == 1) {  ?>
								<li>
									<a href="<?= $panel_path . 'team/team-left'; ?>"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Left Team</a>
								</li>
							<?php
							}
							?>
							<?php if ($this->conn->plan_setting('right_team') == 1) {  ?>
								<li>
									<a href="<?= $panel_path . 'team/team-right'; ?>"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Right Team</a>
								</li>
							<?php
							}
							?>
							<?php if ($this->conn->plan_setting('tree') == 1) {  ?>
								<li>
									<a href="<?= $panel_path . 'team/team-tree'; ?>"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Tree</a>
								</li>
							<?php
							}
							?>
							<!-- <?php if ($this->conn->plan_setting('matrix') == 1) {  ?>
                                <li>
                                    <a href="<?= $panel_path . 'team/team-matrix-generation'; ?>"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Matrix</a>
                                </li>
                                <?php
									}
								?> -->
							<?php if ($this->conn->plan_setting('single_leg_team') == 1) {  ?>
								<li>
									<a href="<?= $panel_path . 'team/team-single-leg'; ?>"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Single Leg</a>
								</li>
							<?php } ?>
						</ul>
					</li>
				<?php } ?>
				<?php
				$topup_type = $this->conn->setting('topup_type');
				if ($this->conn->plan_setting('fund_section') == 1 && $topup_type == 'amount') {
				?>
					<li>
						<a class="has-arrow" href="javascript:;">
							<div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
							</div>
							<div class="menu-title">Fund</div>
						</a>
						<ul>

							<?php if ($this->conn->plan_setting('fund_add') == 0) {  ?>
								<li>
									<a href="<?= $panel_path . 'fund/fund-add'; ?>"><i class="bx bx-right-arrow-alt"></i>Add Fund</a>
								</li>
								<li>
									<a href="<?= $panel_path . 'fund/fund-add-history'; ?>"><i class="bx bx-right-arrow-alt"></i>Add Fund History</a>
								</li>
							<?php } ?>
							<?php if ($this->conn->plan_setting('fund_request') == 0) {  ?>
								<li>
									<a href="<?= $panel_path . 'fund/fund-request'; ?>"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Fund Request</a>
								</li>
							<?php } ?>
							<?php if ($this->conn->plan_setting('fund_deposit') == 1) {  ?>
								<li>
									<a href="<?= $panel_path . 'fund/fund-deposit'; ?>"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Deposit Fund</a>
								</li>
							<?php } ?>
							<?php if ($this->conn->plan_setting('transfer_fund') == 1) {  ?>
								<li>
									<a href="<?= $panel_path . 'fund/fund-transfer'; ?>"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Transfer Fund</a>
								</li>
								<li>
									<a href="<?= $panel_path . 'fund/transfer-history'; ?>"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Fund Transfer History</a>
								</li>
							<?php } ?>
							<?php if ($this->conn->plan_setting('fund_convert') == 0) {  ?>
								<li>
									<a href="<?= $panel_path . 'fund/fund-convert'; ?>"><i class="fa fa-dot-circle-o" aria-hidden="true"></i> Fund Convert</a>
								</li>
								<li>
									<a href="<?= $panel_path . 'fund/convert-history'; ?>"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Fund Convert History</a>
								</li>
							<?php } ?>

							<?php if ($this->conn->plan_setting('fund_request') == 0) {  ?>
								<li>
									<a href="<?= $panel_path . 'fund/request_history'; ?>"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Fund Request History</a>
								</li>
							<?php } ?>
						</ul>
					</li>
				<?php
				}
				?>
				<?php if ($this->conn->plan_setting('withdraw_fund') == 1 && $this->conn->setting('earning_type') == 'withdrawal') {  ?>
					<li>
						<a class="has-arrow" href="javascript:;">
							<div class="parent-icon"><i class="fa-solid fa-money-bill-transfer"></i>
							</div>
							<div class="menu-title">Withdrawal</div>
						</a>
						<ul>
							<?php if ($this->conn->plan_setting('withdraw') == 1 && $this->conn->setting('earning_type') == 'withdrawal') {  ?>
								<li>
									<a href="<?= $panel_path . 'fund/fund-withdraw'; ?>"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Withdrawal</a>
								</li>
							<?php  } ?>


							<li>
								<a href="<?= $panel_path . 'transactions/withdrawals'; ?>"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Withdrawal Report</a>
							</li>
						</ul>
					</li>

				<?php } ?>



				<?php
				if ($this->conn->plan_setting('task_section') == 1) {
				?>
					<li>
						<a class="has-arrow" href="javascript:;">
							<div class="parent-icon"><i class="fa-solid fa-rectangle-ad"></i>
							</div>
							<div class="menu-title">Watch Ads</div>
						</a>
						<ul>

							<li>
								<a href="<?= $panel_path . 'task/all'; ?>"><i class="fa fa-youtube-play"></i>Watch Ads</a>
							</li>

							<li>
								<a href="<?= $panel_path . 'task/request_history'; ?>"><i class="fa fa-youtube-play"></i>Watch Ads Request History</a>
							</li>

						</ul>
					</li>


				<?php
				}
				?>


				<?php
				if ($this->conn->plan_setting('pin_section') == 1 && $topup_type == 'pin') {
				?>
					<li>
						<a class="has-arrow" href="javascript:;">
							<div class="parent-icon"> <i class="fa fa-thumb-tack " aria-hidden="true"></i>
							</div>
							<div class="menu-title"> E-pin</div>
						</a>
						<ul>
							<?php if ($this->conn->plan_setting('generate_pin') == 1) {  ?>
								<li>
									<a href="<?= $panel_path . 'pin/pin-generate'; ?>"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Generate pin</a>
								</li>
							<?php
							}
							?>
							<?php if ($this->conn->plan_setting('transfer_pin') == 1) {  ?>
								<li>
									<a href="<?= $panel_path . 'pin/pin-transfer'; ?>"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Pin Transfer</a>
								</li>
							<?php
							}
							?>
							<?php if ($this->conn->plan_setting('pin_request') == 1) {  ?>
								<li>
									<a href="<?= $panel_path . 'pin/epin-request'; ?>"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Pin Request</a>
								</li>
							<?php
							}
							?>
							<?php if ($this->conn->plan_setting('pin_history') == 1) {  ?>
								<li>
									<a href="<?= $panel_path . 'pin/pin-history'; ?>"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Pin History</a>
								</li>
							<?php
							}
							?>
							<?php if ($this->conn->plan_setting('pin_box') == 1) {  ?>
								<li>
									<a href="<?= $panel_path . 'pin/pin-box'; ?>"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Pinbox</a>
								</li>
							<?php } ?>
						</ul>
					</li>
				<?php } ?>

				<?php
				if ($this->conn->plan_setting('invest_section') == 1) {
				?>
					<li>
						<a class="has-arrow" href="javascript:;">
							<div class="parent-icon"><i class='bx bx-message-square-edit'></i>
							</div>
							<div class="menu-title">Topup</div>
						</a>
						<ul>
							<?php if ($this->conn->plan_setting('investment') == 1) {  ?>
								<li>
									<a href="<?= $panel_path . 'invest/invest'; ?>"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Topup</a>
								</li>
								<li>
									<a href="<?= $panel_path . 'invest/investment'; ?>"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Member Topup</a>
								</li>
							<?php } ?>
							<?php if ($this->conn->plan_setting('investment_history') == 1) {  ?>
								<li>
									<a href="<?= $panel_path . 'invest/topup-history'; ?>"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Topup History</a>
								</li>
							<?php

							}
							?>
							<?php if ($this->conn->plan_setting('reinvestment') == 1) {  ?>
								<li>
									<a href="<?= $panel_path . 'invest/reinvestment'; ?>"><i class="fa fa-dot-circle-o" aria-hidden="true"></i>Upgrade Account</a>
								</li>
							<?php } ?>

						</ul>
					</li>
				<?php } ?>

				<?php if ($this->conn->plan_setting('income_section') == 1) { ?>
					<li>
						<a class="has-arrow" href="javascript:;">
							<div class="parent-icon"> <i class="fa-solid fa-credit-card"></i>
							</div>
							<div class="menu-title">Payout Reports</div>
						</a>
						<ul>
							<?php
							$reg_plan = $this->session->userdata('reg_plan');

							$all_income = $this->conn->runQuery('*', 'wallet_types', "wallet_type='income' and status='1' and $reg_plan='1' ");
							if ($all_income) {
								foreach ($all_income as $income) {
							?>
									<li>
										<a href="<?= $panel_path . 'income/details?source=' . $income->slug; ?>"><i class="bx bx-right-arrow-alt"></i><?= $income->name; ?></a>
									</li>
							<?php
								}
							}
							?>
						</ul>
					</li>
				<?php
				}
				?>

				<?php
				if ($this->conn->plan_setting('order_section') == 1) {
				?>
					<li>
						<a href="<?= $panel_path . 'orders'; ?>">
							<div class="parent-icon"> <i class="fa-solid fa-file-invoice"></i>
							</div>
							<div class="menu-title"> Orders</div>
						</a>
					</li>
				<?php
				}
				?>



				<li>
					<a href="<?php echo $right_link = base_url('register?ref=' . $profile->username); ?>">
						<div class="parent-icon"> <i class="fa fa-registered new_left " aria-hidden="true"></i>
						</div>
						<div class="menu-title">Register New User</div>
					</a>
				</li>

				<?php
				if ($this->conn->plan_setting('reward_section') == 1) {
				?>
					<li>
						<a href="<?= $panel_path . '/goal'; ?>">
							<div class="parent-icon"><i class="fa-sharp fa-solid fa-award"></i>
							</div>
							<div class="menu-title">Reward</div>
						</a>
					</li>

				<?php
				}
				?>
				<?php
				if ($this->conn->plan_setting('income_report_section') == 1) {
				?>
					<li>
						<a href="<?= $panel_path . '/report/income'; ?>">
							<div class="parent-icon"> <i class="fa-solid fa-file-invoice"></i>
							</div>
							<div class="menu-title">Report</div>
						</a>
					</li>
				<?php
				}
				?>
				<?php
				if ($this->conn->plan_setting('news_alert_section') == 1) {
				?>
					<li>
						<a href="<?= $panel_path . 'profile/news'; ?>">
							<div class="parent-icon"> <i class="fa fa-life-ring new_left primary_color_page" aria-hidden="true"></i>
							</div>
							<div class="menu-title">News & Event</div>
						</a>
					</li>
				<?php
				}
				?>

				<?php
				if ($this->conn->plan_setting('support_section') == 1) {
				?>
					<li>
						<a href="<?= $panel_path . 'support'; ?>">
							<div class="parent-icon"> <i class="fa-solid fa-phone-volume"></i>
							</div>
							<div class="menu-title">Support</div>
						</a>
					</li>
				<?php
				}
				?>
				<li>
					<a href="<?= $panel_path . 'logout'; ?>">
						<div class="parent-icon"> <i class="fa fa-sign-out new_left primary_color_page" aria-hidden="true"></i>
						</div>
						<div class="menu-title">Logout</div>
					</a>
				</li>








			</ul>
			<!--end navigation-->
		</div>
		<!--end sidebar wrapper -->
		<!--start header -->
		<header>
			<div class="topbar d-flex align-items-center">
				<nav class="navbar navbar-expand">
					<div class="mobile-toggle-menu" style="color: white;"><i class='bx bx-menu'></i>
					</div>
					<!--	<div class="search-bar flex-grow-1">
						<div class="position-relative search-bar-box">
							<input type="text" class="form-control search-control" placeholder="Type to search..."> <span class="position-absolute top-50 search-show translate-middle-y"><i class='bx bx-search'></i></span>
							<span class="position-absolute top-50 search-close translate-middle-y"><i class='bx bx-x'></i></span>
						</div>
					</div>-->

					<div class="ghost1 ">
						<?php
						echo $this->conn->server_time();
						?>
					</div>
					<div class="top-menu ms-auto">
						<ul class="navbar-nav align-items-center">
							<!--	<li class="nav-item mobile-search-icon">
								<a class="nav-link" href="#">	<i class='bx bx-search'></i>
								</a>
							</li>-->
							<!--<li class="nav-item dropdown dropdown-large">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">	<i class='bx bx-category'></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<div class="row row-cols-3 g-3 p-3">
										<div class="col text-center">
											<div class="app-box mx-auto bg-gradient-cosmic text-white"><i class='bx bx-group'></i>
											</div>
											<div class="app-title">Teams</div>
										</div>
										<div class="col text-center">
											<div class="app-box mx-auto bg-gradient-burning text-white"><i class='bx bx-atom'></i>
											</div>
											<div class="app-title">Projects</div>
										</div>
										<div class="col text-center">
											<div class="app-box mx-auto bg-gradient-lush text-white"><i class='bx bx-shield'></i>
											</div>
											<div class="app-title">Tasks</div>
										</div>
										<div class="col text-center">
											<div class="app-box mx-auto bg-gradient-kyoto text-dark"><i class='bx bx-notification'></i>
											</div>
											<div class="app-title">Feeds</div>
										</div>
										<div class="col text-center">
											<div class="app-box mx-auto bg-gradient-blues text-dark"><i class='bx bx-file'></i>
											</div>
											<div class="app-title">Files</div>
										</div>
										<div class="col text-center">
											<div class="app-box mx-auto bg-gradient-moonlit text-white"><i class='bx bx-filter-alt'></i>
											</div>
											<div class="app-title">Alerts</div>
										</div>
									</div>
								</div>
							</li>-->
							<li class="nav-item dropdown dropdown-large">
								<!--<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">7</span>
									<i class='bx bx-bell'></i>
								</a>-->
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;">
										<div class="msg-header">
											<p class="msg-header-title">Notifications</p>
											<p class="msg-header-clear ms-auto">Marks all as read</p>
										</div>
									</a>
									<div class="header-notifications-list">
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-primary text-primary"><i class="bx bx-group"></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New Customers<span class="msg-time float-end">14 Sec
															ago</span></h6>
													<p class="msg-info">5 new user registered</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-danger text-danger"><i class="bx bx-cart-alt"></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New Orders <span class="msg-time float-end">2 min
															ago</span></h6>
													<p class="msg-info">You have recived new orders</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-success text-success"><i class="bx bx-file"></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">24 PDF File<span class="msg-time float-end">19 min
															ago</span></h6>
													<p class="msg-info">The pdf files generated</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-warning text-warning"><i class="bx bx-send"></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Time Response <span class="msg-time float-end">28 min
															ago</span></h6>
													<p class="msg-info">5.1 min avarage time response</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-info text-info"><i class="bx bx-home-circle"></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New Product Approved <span class="msg-time float-end">2 hrs ago</span></h6>
													<p class="msg-info">Your new product has approved</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-danger text-danger"><i class="bx bx-message-detail"></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New Comments <span class="msg-time float-end">4 hrs
															ago</span></h6>
													<p class="msg-info">New customer comments recived</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-success text-success"><i class='bx bx-check-square'></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Your item is shipped <span class="msg-time float-end">5 hrs
															ago</span></h6>
													<p class="msg-info">Successfully shipped your item</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-primary text-primary"><i class='bx bx-user-pin'></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">New 24 authors<span class="msg-time float-end">1 day
															ago</span></h6>
													<p class="msg-info">24 new authors joined last week</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="notify bg-light-warning text-warning"><i class='bx bx-door-open'></i>
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Defense Alerts <span class="msg-time float-end">2 weeks
															ago</span></h6>
													<p class="msg-info">45% less alerts last 4 weeks</p>
												</div>
											</div>
										</a>
									</div>
									<a href="javascript:;">
										<div class="text-center msg-footer">View All Notifications</div>
									</a>
								</div>
							</li>
							<li class="nav-item dropdown dropdown-large">
								<!--<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">8</span>
									<i class='bx bx-comment'></i>
								</a>-->
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;">
										<div class="msg-header">
											<p class="msg-header-title">Messages</p>
											<p class="msg-header-clear ms-auto">Marks all as read</p>
										</div>
									</a>
									<div class="header-message-list">
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="assets/images/avatars/avatar-1.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Daisy Anderson <span class="msg-time float-end">5 sec
															ago</span></h6>
													<p class="msg-info">The standard chunk of lorem</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="assets/images/avatars/avatar-2.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Althea Cabardo <span class="msg-time float-end">14
															sec ago</span></h6>
													<p class="msg-info">Many desktop publishing packages</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="assets/images/avatars/avatar-3.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Oscar Garner <span class="msg-time float-end">8 min
															ago</span></h6>
													<p class="msg-info">Various versions have evolved over</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="assets/images/avatars/avatar-4.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Katherine Pechon <span class="msg-time float-end">15
															min ago</span></h6>
													<p class="msg-info">Making this the first true generator</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="assets/images/avatars/avatar-5.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Amelia Doe <span class="msg-time float-end">22 min
															ago</span></h6>
													<p class="msg-info">Duis aute irure dolor in reprehenderit</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="assets/images/avatars/avatar-6.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Cristina Jhons <span class="msg-time float-end">2 hrs
															ago</span></h6>
													<p class="msg-info">The passage is attributed to an unknown</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="assets/images/avatars/avatar-7.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">James Caviness <span class="msg-time float-end">4 hrs
															ago</span></h6>
													<p class="msg-info">The point of using Lorem</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="assets/images/avatars/avatar-8.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Peter Costanzo <span class="msg-time float-end">6 hrs
															ago</span></h6>
													<p class="msg-info">It was popularised in the 1960s</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="assets/images/avatars/avatar-9.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">David Buckley <span class="msg-time float-end">2 hrs
															ago</span></h6>
													<p class="msg-info">Various versions have evolved over</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="assets/images/avatars/avatar-10.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Thomas Wheeler <span class="msg-time float-end">2 days
															ago</span></h6>
													<p class="msg-info">If you are going to use a passage</p>
												</div>
											</div>
										</a>
										<a class="dropdown-item" href="javascript:;">
											<div class="d-flex align-items-center">
												<div class="user-online">
													<img src="assets/images/avatars/avatar-11.png" class="msg-avatar" alt="user avatar">
												</div>
												<div class="flex-grow-1">
													<h6 class="msg-name">Johnny Seitz <span class="msg-time float-end">5 days
															ago</span></h6>
													<p class="msg-info">All the Lorem Ipsum generators</p>
												</div>
											</div>
										</a>
									</div>
									<a href="javascript:;">
										<div class="text-center msg-footer">View All Messages</div>
									</a>
								</div>
							</li>
						</ul>
					</div>
					<div class="user-box dropdown">
						<a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<?php if ($profile->img != '') { ?>
								<img src="<?= base_url('images/users/') . $profile->img; ?>" class="user-img" alt="user avatar" style="width:50px;height:50px">
							<?php } else { ?>
								<img src="<?= $this->conn->company_info('logo'); ?>" class="user-img" alt="user avatar" style="width:50px;height:50px">
							<?php
							}
							?>
							<div class="user-info ps-3">
								<p class="user-name mb-0"><?= $this->session->userdata('profile')->name; ?></p>
								<p class="designattion mb-0"><?= $this->session->userdata('profile')->email; ?></p>
							</div>
						</a>
						<ul class="dropdown-menu dropdown-menu-end">
							<p class="ghost1">
							<div id="google_translate_element"></div>

							<script type="text/javascript">
								function googleTranslateElementInit() {
									new google.translate.TranslateElement({
										pageLanguage: 'en'
									}, 'google_translate_element');
								}
							</script>

							<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

							</p>
							<li><a class="dropdown-item" href="<?= $panel_path . 'profile'; ?>"><i class="bx bx-user"></i><span> My Profile</span></a>
							</li>

							<li><a class="dropdown-item" href="<?= $panel_path . 'logout'; ?>"><i class='bx bx-log-out-circle'></i><span>Logout</span></a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<!--end header -->
		<div class="page-wrapper">
			<div class="page-content">