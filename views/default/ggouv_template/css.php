/* 
* nolog css when non logged in user
*/
.t, .t:before, .t:after {
	transition: all 0.5s ease;
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-ms-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
}
.t25, .t25:before, .t25:after {
	transition: all 0.25s ease;
	-webkit-transition: all 0.25s ease;
	-moz-transition: all 0.25s ease;
	-ms-transition: all 0.25s ease;
	-o-transition: all 0.25s ease;
}

.elgg-page-header.nolog {
	background: url("http://localhost/~mama/ggouv/ggouv/_graphics/header_shadow.png") repeat-x scroll left bottom #1F2E3D;
	box-shadow: 0 5px 5px 0 white;
	height: 48px;
	position: fixed;
	width: 100%;
	z-index: 1;
}
.elgg-inner-nolog {
	margin: 0;
	position: relative;
}
.elgg-inner-nolog .elgg-menu-item-logo {
	margin: 0 0 0 15px;
	overflow: visible;
	position: relative;
	width: 38px;
	float: left;
}
.elgg-inner-nolog > h1 {
	font-size: 2em;
	color: white;
	text-shadow: 0 0 4px #999;
	padding: 13px;
	margin: 0 60px;
}
.elgg-inner-nolog > h1 a {
	text-decoration: none;
	color: inherit;
}
.elgg-page-default .elgg-page-body.nolog {
	margin:0 0 0 20px;
	padding-top:48px;
}
#login-dropdown-box {
	position: fixed;
}


/* topbar icons */
.gwf, .gwfb:before, .gwfa:after {
	font-family: "ggouv";
	font-weight: normal;
	float: left;
}
.elgg-menu-item-logo {
	height: 48px !important;
	overflow: hidden;
}
.elgg-menu-topbar .elgg-menu-item-logo a, .elgg-menu-item-logo a {
	font-size: 58px;
	padding: 16px 7px 0px;
	color: transparent;
	height: 32px;
	width: 27px;
	text-shadow: -0.1em 0 0.03em #0f0;
	float: left;
}
.elgg-menu-item-logo > a:before, .elgg-menu-item-logo > a:after {
	position: absolute;
	content: '∇';
}
.elgg-menu-item-logo > a:before {
	text-shadow:  0.03em 0 0.03em #f00;
	left: 5px;
}
.elgg-menu-item-logo > a:after {
	top: 16px;
	left: 4px;
	text-shadow: 0 0 0.02em #fff;
}
.elgg-menu-item-logo > a:hover {
	text-decoration: none;
	color: transparent;
	text-shadow:   -0.1em 0 4px #0f0,
                   -0.1em 0 7px #0f0,
                   -0.1em 0 8px #0f0,
                   -0.1em 0 10px #0f0,
                   -0.1em 0 15px #0f0;
}
.elgg-menu-item-logo > a:hover:before {
	text-shadow:   0.03em 0 4px #f00,
                   0.03em 0 7px #f00,
                   0.03em 0 8px #f00,
                   0.03em 0 10px #f00,
                   0.03em 0 15px #f00;
}
.elgg-menu-item-logo > a:hover:after {
	text-shadow:   0 0 1px #fff,
                   0 0 2px #fff,
                   0 0 3px #fff;
}
.gwf.scale:hover > a {
	color: #4690D6;
	font-size: 70px;
}
.gwf.rotate:hover > a {
	transform: rotate(-10deg);
	-moz-transform: rotate(-10deg);
	-webkit-transform: rotate(-10deg);
	-o-transform: rotate(-10deg);
	-ms-transform: rotate(-10deg);
}
.elgg-menu-item-at > a {
	padding-top: 25px;
}
.elgg-menu-topbar > li > a {
	padding: 5px 0;
	font-size: 50px;
	/*text-shadow: 1px 0px 2px #AAAAAA;*/
	cursor: pointer;
	color: white;
	padding: 15px 0;
	width: 40px;
	float: left;
}
.elgg-menu-item-dashboard > a {
	padding: 0 !important;
}
.elgg-menu-item-info {
	height: 19px !important;
	border-top: 1px solid #666666;
	color: white;
	font-size: 24px;
	float: left !important;
	cursor: pointer;
}
.elgg-menu-item-info:hover {
	color: white;
	background-color: #4690D6;
}

/* 
* site info popup
*/
#site-info-popup {
	background-color: #1F2E3D;
	bottom: 0;
	box-shadow: 0 0 6px 4px #0A0A0A inset;
	margin: 0 -10px -20px;
	padding: 10px 10px 30px;
	position: fixed;
	width: 100%;
	z-index: 11;
}
#site-info-popup .spotlight {
	margin: 0 10%;
}
#site-info-popup h2 {
	color: white;
	text-shadow: 1px -1px 0 black;
}
#site-info-popup .elgg-icon-delete {
	left: 20px;
	position: absolute;
	top: 10px;
}

/* 
* topbar sub-menu
*/
.ggouv-menu-parent {
	height: 50px !important;
}
.ggouv-menu-child {
	font-family: Arial,Tahoma,Verdana,sans-serif;
	border-radius: 0 20px 20px 0;
	margin-top: -10px;
	display: none;
	text-align: left;
	overflow: hidden;
	position: fixed;
}
.ggouv-menu-child-shadow {
	box-shadow: 0 0 6px 2px rgba(10, 10, 10, 0.4);
	border-radius: 0 10px 10px 0;
	padding: 10px;
	background-color: #1F2E3D;
	margin: 10px 10px 10px 0;
}
.elgg-menu-item-groups .ggouv-menu-child-shadow {
	
}
.elgg-menu-item-groups table ul ul {
	height: 100%;
}
.ggouv-menu-parent:hover .ggouv-menu-child {
	display: inline;
}
.ggouv-menu-child li {
	border-radius: 6px;
	padding: 4px 8px;
	cursor: pointer;
	margin: 2px 0;
}
.elgg-menu-item-groups .ggouv-menu-child-shadow ul:first-child {
	padding-left: 0;
}
.ggouv-menu-child li:hover {
	background-color: #4690D6;
}
.ggouv-menu-child li a {
	font-weight: bold;
	color: white;
	display: block;
}
.ggouv-menu-child li a:hover {
	text-decoration: none;
}
.ggouv-menu-child li a img {
	vertical-align: middle;
}
.ggouv-menu-child .block-title {
	color: #CCC;
}
.ggouv-menu-child .hr {
	border-right: 2px solid #CCCCCC;
	height: 30px;
}
.ggouv-menu-child  .block-title:hover {
	background-color: transparent;
}

/* the wire-search textarea */
#thewire-header {
	background-color: white;
	border-radius: 6px;
	height: 33px;
	-webkit-box-shadow: inset 0 2px 2px 0 #1F2E3D;
	-moz-box-shadow: inset 0 2px 2px 0 #1F2E3D;
	box-shadow: inset 0 2px 2px 0 #1F2E3D;
}
#thewire-header #thewire-textarea-border {
	display: none;
}
#thewire-textarea {
	background-color: transparent;
	resize: none;
	height: 32px !important;
	padding: 10px 2px 0px 12px !important;
	margin: 0;
	color: #666;
	font: 130% Arial,Helvetica,sans-serif;
	border: none;
	width: 570px;
	line-height: 1em;
	overflow: hidden;
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none; 
}
#thewire-textarea-border {
	background-color: #1D76C8;
	border-radius: 0 0 6px 6px;
	box-shadow: 2px 2px 4px 0 rgba(0, 0, 0, 0.5);
	height: 0px;
	left: -4px;
	position: absolute;
	top: 41px;
	width: 665px;
	z-index: -1;
}
#thewire-characters-remaining {
	position: absolute;
	right: 47px;
	top: 0;
	z-index: 7003;
	overflow: hidden;
	width: 40px;
}
#thewire-characters-remaining span {
	color: #00CC00;
	background-color: white;
	border-radius: 0 6px 6px 0;
	display: block;
	font-size: 1.2em;
	margin-left: -12px;
	padding: 9px 6px 6px 0;
	height: 18px;
	-webkit-box-shadow: inset 0 2px 2px 0 #1F2E3D;
	-moz-box-shadow: inset 0 2px 2px 0 #1F2E3D;
	box-shadow: inset 0 2px 2px 0 #1F2E3D;
}
#thewire-header > .thewire-button {
	position: absolute;
	top: 0;
	right: 0;
	border-radius: 6px 6px 6px 6px;
	height: 33px;
	overflow: hidden;
	right: 0;
	background-color: #FFE6E6;
	-webkit-box-shadow: inset 0 2px 2px 0 #1F2E3D;
	-moz-box-shadow: inset 0 2px 2px 0 #1F2E3D;
	box-shadow: inset 0 2px 2px 0 #1F2E3D;
}
#thewire-header > .thewire-button:before {
	content: "S";
	color: #B40000;
	font-size: 54px;
	position: relative;
	right: 5px;
	top: 9px;
	position: absolute;
}
#thewire-header > .thewire-button:hover {
	background-color: #FF0000;
}
#thewire-header > .thewire-button:hover:before {
	color: white;
	text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.3);
}
#thewire-submit-button {
	color: transparent;
	height: 33px;
	text-indent: -9999px;
	background-color: transparent;
	border: none;
	width: 60px;
}
#thewire-header.extended #thewire-textarea {
	height: 115px !important;
}
#thewire-header.extended {
	border-radius: 6px 6px 0 0;
}
#thewire-header.extended #thewire-textarea-border {
	display: block;
}
#thewire-header.extended #thewire-textarea {
	width: 100%;
	overflow-y: auto;
}
#thewire-header.extended #thewire-characters-remaining {
	bottom: -31px;
	left: 3px;
	top: auto;
}
#thewire-header.extended #thewire-characters-remaining span {
	background-color: transparent;
	box-shadow: none;
	margin-left: 5px;
	text-align: left;
}
#thewire-header.extended #thewire-textarea-bottom {
	background-color: #F4F4F4;
	border-radius: 0 0 6px 6px;
	bottom: -31px;
	height: 40px;
	position: absolute;
	width: 100%;
	z-index: -1;
	-webkit-box-shadow: inset 0 2px 2px 0 #1F2E3D;
	-moz-box-shadow: inset 0 2px 2px 0 #1F2E3D;
	box-shadow: inset 0 2px 2px 0 #1F2E3D;
}
#thewire-header.extended .thewire-button {
	background-color: white;
	border: 1px solid #999999;
	box-shadow: none;
	height: 21px;
	margin: 4px;
	padding: 0 0 1px 24px;
	top: auto;
	bottom: -32px;
	width: 72px;
	-webkit-box-shadow: inset 0px -10px 10px 2px rgba(0, 0, 0, 0.1);
	-moz-box-shadow: inset 0px -10px 10px 2px rgba(0, 0, 0, 0.1);
	box-shadow: inset 0px -10px 10px 2px rgba(0, 0, 0, 0.1);
}
#thewire-header.extended > .thewire-button:before {
	font-size: 40px;
	left: 2px;
	right: auto;
	top: 2px;
}
#thewire-header.extended #thewire-submit-button {
	color: #333333;
	float: left;
	height: 22px;
	padding-left: 30px;
	position: absolute;
	right: 0;
	text-indent: 0;
	width: 97px;
}
#thewire-header.extended > .thewire-button:hover {
	background-color: #FF3019;
	border: 1px solid #CF0404;
	color: white;
}
#thewire-header.extended > .thewire-button:hover #thewire-submit-button {
	color: white;
}
#thewire-header.extended .options {
	display: block;
}
#thewire-header .url-shortener {
	border-top: 1px solid #DEDEDE;
	margin: 0 1px;
	padding: 4px;
	width: 647px;
	position: relative;
}
#thewire-header .url-shortener .elgg-input-text {
	font-size: 100%;
	padding-right: 70px;
}
#thewire-header .url-shortener .elgg-button {
	font-size: 90%;
	padding: 2px 2px 0;
	position: absolute;
	top: 8px;
}
#thewire-header .url-shortener .elgg-button-submit {
	right: 7px;
}
#thewire-header .url-shortener .elgg-button-action {
	right: 75px;
}
#thewire-header .url-shortener .elgg-icon {
	position: absolute;
	top: 8px;
	right: 138px;
}
#thewire-header .responseTo {
	background-color: #FFC;
	color: #666;
	margin: 0 2px;
	padding: 2px 5px;
	height: 18px;
	overflow: hidden;
}
#thewire-header .responseTo span {
	color: #999;
	font-size: 85%;
	font-style: italic;
}
#thewire-header .responseTo:hover {
	background-color: #FDD;
	color: red;
	cursor: pointer;
}


#thewire-network {
	background-color: white;
	border: medium none;
	border-radius: 4px 4px 4px 4px;
	height: 33px;
	position: absolute;
	right: -187px;
	top: 0;
	width: 180px;
	-webkit-box-shadow: inset 0 2px 2px 0 #1F2E3D;
	-moz-box-shadow: inset 0 2px 2px 0 #1F2E3D;
	box-shadow: inset 0 2px 2px 0 #1F2E3D;
}
#thewire-network .net-profile {
	position: relative;
}
#thewire-network .network {
	background-color: white;
	border: 1px solid #666666;
	height: 10px;
	left: 17px;
	position: absolute;
	top: -3px;
	width: 10px;
}
#thewire-network .net-profile.ggouv .network {
	background-image: url(<?php echo elgg_get_site_url() . 'mod/elgg-ggouv_template/graphics/favicon.png'; ?>);
	background-size: 10px 10px;
}
#thewire-network .net-profile.twitter .network {
	background-color: #00ACED;
	border: 1px solid #00ACED;
	color: white;
	font-size: 15px;
	line-height: 10px;
}
#thewire-network .elgg-icon-delete {
	background-color: rgba(0, 0, 0, 0.3);
	height: 15px;
	left: -2px;
	position: absolute;
	text-indent: 1.5px;
	width: 15px;
	cursor: pointer;
}
#thewire-network .elgg-icon-delete:before {
	color: red;
}
#thewire-network .net-profile:hover .elgg-icon-delete {
	display: block;
}


/*
 * Search
 */
.elgg-page-header .elgg-search {
	top: 0;
	right: 0;
	position: absolute;
	z-index: 6999;
	height: 0;
}
.elgg-page-header .elgg-search input[type="text"] {
	position: absolute;
	left: 40px;
	border: medium none;
	border-radius: 4px;
	height: 32px;
	width: 602px;
	-webkit-box-shadow: inset 0 2px 2px 0 #1F2E3D;
	-moz-box-shadow: inset 0 2px 2px 0 #1F2E3D;
	box-shadow: inset 0 2px 2px 0 #1F2E3D;
}
.elgg-search input[type="text"] {
	color: #0054A7;
	font: 130% Arial,Helvetica,sans-serif;
	padding: 4px 4px 0px 12px;
	background: none repeat scroll 0 0 white;
	position: relative;
	z-index: 1;
}
.elgg-page-header .elgg-search div.search-submit {
	border-radius: 4px 0 0 4px;
	height: 32px;
	left: 40px;
	overflow: hidden;
	position: absolute;
	top: 0;
	width: 50px;
}
.elgg-page-header .elgg-search .search-submit-button {
	background-color: #E6FFE6;
	border: none;
	color: #0C8241;
	font-size: 54px;
	height: 47px;
	margin: -15px 0 10px;
	padding: 0 6px 0 3px;
	width: 47px;
	text-shadow: none;
	border-radius: 4px 0 0 4px;
	display: block;
	left: 40px;
	position: absolute;
	top: 0;
	line-height: 66px;
	-webkit-box-shadow: inset 0 17px 2px 0 #1F2E3D;
	-moz-box-shadow: inset 0 17px 2px 0 #1F2E3D;
	box-shadow: inset 0 17px 2px 0 #1F2E3D;
}
.elgg-page-header .elgg-search .search-submit-button:hover {
	background-color: #00FF00;
	color: #222222;
	text-shadow: -1px 1px 2px #FF9999;
	cursor: pointer;
}
#elgg-search-inactive {
	height: 30px;
	left: 8px;
	position: absolute;
	width: 36px;
	cursor: pointer;
	top: 9px;
	color: rgba(255, 255, 255, 0.8);
	font-size: 54px;
	z-index: -1;
}
#elgg-search-inactive:hover {
	text-shadow: 0 0 15px white;
	color: white;
}
#ajaxified-loader {
	background: url(<?php echo elgg_get_site_url() . 'mod/elgg-brainstorm/graphics/ajax-loader.gif'; ?>) no-repeat scroll 0 6px transparent;
	position: fixed;
	right: 5px;
	top: 46px;
	height: 22px;
	width: 16px;
}


/*
* river
*/
.elgg-river-layout {
	margin: 0 0 0 -20px;
	padding: 0px;
}
.deck-river-lists .column-river:first-child > ul > li {
	padding-left: 10px;
}
.deck-river-listsdeck-river-lists .column-river:first-child > ul.column-header > li {
	padding-left: 5px;
}
.elgg-river .elgg-list-item {
	background: -moz-linear-gradient(top,  rgba(255,255,255,0) 0%, rgba(200, 200, 200,0.1) 100%) white;
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255,255,255,0)), color-stop(100%,rgba(200, 200, 200,0.1))) white;
	background: -webkit-linear-gradient(top,  rgba(255,255,255,0) 0%,rgba(200, 200, 200,0.1) 100%) white;
	background: -o-linear-gradient(top,  rgba(255,255,255,0) 0%,rgba(200, 200, 200,0.1) 100%) white;
	background: -ms-linear-gradient(top,  rgba(255,255,255,0) 0%,rgba(200, 200, 200,0.1) 100%) white;
	background: linear-gradient(top,  rgba(255,255,255,0) 0%,rgba(200, 200, 200,0.1) 100%) white;
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00ffffff', endColorstr='#1a969696',GradientType=0 ) white;
}

/*
 * Plugin markdown-wiki + special debate
 */
h2.markdown-wiki-create .elgg-button-action {
	text-transform: none;
}
.markdown-body .subject {
	width: 100%;
}
.pro, .con, .not {
	border-radius: 3px;
	padding: 5px 10px;
	font-size: 13px;
}
.pro {
	background-color: #DFD;
	border: 1px solid #52CB51;
}
.con {
	background-color: #FDD;
	border: 1px solid #F66;
}
.not {
	background-color: #F8F8F8;
	border: 1px solid #CCC;
}
.pro > div:first-child, .con > div:first-child, .not > div:first-child {
	margin: -5px -10px 5px;
	padding: 2px 5px;
	font-size: 14px;
}
.pro > div:first-child {
	background-color: #9F9;
}
.con > div:first-child {
	background-color: #F99;
}
.not > div:first-child {
	background-color: #E0E0E0;
}
@media (max-width: 1199px) {
	.pro, .con, .not {
		margin-top: 5px;
	}
}
/* Editor */
.markdown-editor {
	background-color: white;
	margin: -2px 5px;
	padding: 2px 2px 0 0;
	position: absolute;
	right: 0;
	top: 0;
	font-size: 32px;
}
.markdown-editor.fly {
	opacity: 0.3;
}

.markdown-editor:hover {
	opacity: 1!important;
}
.markdown-editor .btn {
	float: left;
	width: 21px;
}
.markdown-editor .sep {
	background-color: #CCCCCC;
	float: left;
	height: 18px;
	width: 1px;
}
.markdown-editor .btn:before {
	padding-left: 5px;
	cursor: pointer;
	text-align: center;
}
.markdown-editor .btn:hover:before {
	background-color: #4690D6;
	box-shadow: 0 0 5px #666;
	border-radius: 2px;
	font-size: 48px;
	margin: -5px 0;
	padding: 5px 2px 5px 3px;
	position: relative;
}
.editor-title:before {
	content: "\F034";
}
.editor-bold:before {
	content: "\E01F";
}
.editor-italic:before {
	content: "\E079";
}
.editor-strike:before {
	content: "\E159";
}
.editor-bullet:before {
	content: "\F0CA";
}
.editor-numeric:before {
	content: "\F0CB";
}
.editor-quote:before {
	content: "\E10B";
}
.editor-code:before {
	content: "\E032";
}
.editor-link:before {
	content: "\F03F";
}
.editor-image:before {
	content: "\F03E";
}
.editor-plus:before {
	content: "\F03A";
}
.editor-zero:before {
	content: "\F03B";
}
.editor-minus:before {
	content: "\F03C";
}
.elgg-menu-entity .elgg-menu-item-history a:before, .elgg-menu-entity .elgg-menu-item-discussion a:before {
	content: "h";
	font-size: 32px;
	margin-top: -2px;
	color: #CCC;
}
.elgg-menu-entity .elgg-menu-item-history a, .elgg-menu-entity .elgg-menu-item-discussion a {
	font-size: 0;
}
.elgg-menu-entity .elgg-menu-item-discussion a:before {
	content: "ç";
}
.elgg-menu-entity .elgg-menu-item-history a:hover:before, .elgg-menu-entity .elgg-menu-item-discussion a:hover:before {
	color: #4690D6;
}


/*
 * Plugin workflow
 */
#card-forms .elgg-input-checkboxes {
	margin-top: 4px;
}
#card-forms .card-checklist .elgg-icon-delete {
	margin-top: 1px !important;
}
.workflow-list .elgg-icon-workflow-list {
	background: none;
}
.workflow-list .elgg-icon-workflow-list:before {
	background: none;
	color: #999;
	content: "_";
	font-size: 36px;
	margin-left: -5px;
	font-weight: normal;
	-moz-transform: scaleX(0.6);
	-webkit-transform: scaleX(0.6);
	-o-transform: scaleX(0.6);
	-ms-transform: scaleX(0.6);
	transform: scaleX(0.6);
}

.workflow-list-edit-button .elgg-icon-settings-alt {
	background: none;
}
.workflow-list-edit-button .elgg-icon-settings-alt:before {
	color: #CCC;
	content: "s";
	font-size: 36px;
	cursor: pointer;
}
.workflow-list-edit-button .elgg-icon-settings-alt:hover:before {
	color: #4690D6;
}
.elgg-icon-workflow-info {
	background: none;
}
.elgg-icon-workflow-info:before {
	color: #999999;
	content: "d";
	font-size: 27px;
	line-height: 12px;
	text-indent: -1px;
}
.elgg-icon-workflow-speech-bubble {
	background: none;
	color: none;
}
.elgg-icon-workflow-speech-bubble:before  {
	color: #4690D6;
	content: "c";
	font-size: 27px;
	line-height: 11px;
	text-indent: -1px;
}
.elgg-icon-workflow-calendar {
	background: none;
}
.elgg-icon-workflow-calendar:before {
	color: #999999;
	content: "a";
	font-size: 27px;
	line-height: 10px;
	text-indent: -1px;
}
.workflow-card-duedate-overdue .elgg-icon-workflow-calendar:before {
	color: red;
}
.elgg-icon-workflow-checklist {
	background: none;
}
.elgg-icon-workflow-checklist:before {
	color: #999999;
	content: "k";
	font-size: 24px;
	line-height: 10px;
	text-indent: 1px;
}
.workflow-card-checklist-complete .elgg-icon-workflow-checklist:before {
	color: green;
}
/*
 * plugin brainstorm
 */
.brainstorm-vote-popup .blanc {
	left: -8px;
}
.brainstorm-vote-popup .triangle {
	top: 5px;
}
.brainstorm-vote-popup .elgg-button:hover {
	color: white;
	text-shadow: none;
}


/*
 * Output
 */
.text140-characters-remaining {
	position: relative;
}
.elgg-input-text140 input {
	padding-right: 40px;
}
.text140-characters-remaining span {
	color: #00CC00;
	position: absolute;
	right: 5px;
	font-weight: bold;
	font-size: 1.2em;
}
/* hack Chrome / Safari */
@media screen and (-webkit-min-device-pixel-ratio:0) {
	.text140-characters-remaining span {
		top: 4px;
	}
}


/*
 * xoxco tags
 */
div.tagsinput {
	-moz-box-sizing: border-box;
	border: 1px solid #CCCCCC;
	box-shadow: 1px 1px 2px 0 rgba(0, 0, 0, 0.2) inset;
	padding: 2px 5px 5px;
	width: 100%;
	overflow-y: auto;
	margin-top: 2px;
}
div.tagsinput.focus {
	background: none repeat scroll 0 0 #E4ECF5;
	border: 1px solid #4690D6;
	box-shadow: 1px 1px 2px 0 #4690D6 inset;
	color: #333333;
}
div.tagsinput span.tag {
	background-color: #4690D6;
	border-radius: 0px;
	color: white;
	display: block;
	float: left;
	margin: 3px 5px 0 0;
	padding: 1px 0 1px 5px;
	text-decoration: none;
}
div.tagsinput span.tag a {
	color: #4690D6;
	height: 12px;
	text-decoration: none;
	top: -1px;
	right: -3px;
}
div.tagsinput span.tag a:before {
	font-size: 40px;
}
div.tagsinput input {
	box-shadow: none;
	min-width: 440px !important;
	margin: 0;
	border: 1px solid transparent;
	padding: 2px 0 0;
	background: transparent;
	color: #000;
	outline: 0;
	margin: 3px 5px 0 0;
}
div.tagsinput div {
	display: block;
	float: left;
}
div.tagsinput .tags_clear {
	clear: both;
	width: 100%;
	height: 0;
}
div.tagsinput .not_valid {
	color: #90111A !important;
}

/*
 * profile
 */
.profile-action-menu .elgg-icon-attention:before {
	margin: 0 5px 0 0;
}
.profile-aboutme-title .elgg-widget-collapse-button {
	color: #555;
	font-weight: bold;
}
.profile-aboutme-title .elgg-widget-collapse-button:hover {
	color: #333;
}



/*
 * page register
 */
.elgg-form-login, .elgg-form-account {
	max-width: 450px;
}
.register-helper, .register-location {
	margin-left: 500px;
	position: absolute;
	top: 0;
	width: 100%;
	font-style: italic;
}
.register-helper.username {
	top: 60px;
}
.register-helper.name {
	top: 140px;
}
.register-helper.email {
	top: 192px;
}
.register-helper.location {
	top: 254px;
}
.register-location {
	opacity: 0;
}
.elgg-form-signup #searching.loading {
	right: -35px;
	top: 20px;
}
.register-helper.password {
	top: 326px;
}
.social-connect {
	border-left: 2px solid #CCCCCC;
	left: 500px;
	padding-left: 50px;
	position: absolute;
	top: 10px;
	z-index: 1;
}
.social-connect a {
	clear: both;
	float: left;
	font-size: 30px;
	margin: 10px;
	padding: 20px;
	text-decoration: none;
	text-shadow: 1px 1px 1px #CCCCCC;
	width: 70%;
}
.social-connect a:hover {
	background-color: #F4F4F4;
}
.social-connect span:before {
	float: left;
	margin-top: 2px;
}
.social-connect span { /*.twitter-icon {*/
	font-size: 68px;
	width: 80px;
	float: left;
}
.social-connect a:hover span {
	font-size: 88px;
}
.back-socialnetwork {
	color: #999999;
	float: right;
	margin-top: -22px;
	position: relative;
	cursor: pointer;
}
.back-socialnetwork:hover {
	color: #555;
}
.back-socialnetwork:after {
	content: "►";
}
