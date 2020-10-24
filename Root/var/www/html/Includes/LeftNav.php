

			<div class="fixed-sidebar-left">
				<ul class="nav navbar-nav side-nav nicescroll-bar">

					<li>
						<div class="user-profile text-center">
							<img src="<?=$domain; ?>/Hospital/Staff/Media/Images/Uploads/<?=$_SESSION["GeniSysAI"]["Pic"]; ?>" alt="user_auth" class="user-auth-img img-circle"/>
							<div class="dropdown mt-5">
								<a href="#" class="dropdown-toggle pr-0 bg-transparent" data-toggle="dropdown"><?=$_SESSION["GeniSysAI"]["User"]; ?> <span class="caret"></span></a>
								<ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
									<li>
										<a href="profile"><i class="zmdi zmdi-account"></i><span>Profile</span></a>
									</li>
									<li>
										<a href="inbox.html"><i class="zmdi zmdi-email"></i><span>Inbox</span></a>
									</li>
									<li>
										<a href="#"><i class="zmdi zmdi-settings"></i><span>Settings</span></a>
									</li>
									<li class="divider"></li>
									<li class="sub-menu show-on-hover">
										<a href="#" class="dropdown-toggle pr-0 level-2-drp"><i class="zmdi zmdi-check text-success"></i> available</a>
										<ul class="dropdown-menu open-left-side">
											<li>
												<a href="#"><i class="zmdi zmdi-check text-success"></i><span>available</span></a>
											</li>
											<li>
												<a href="#"><i class="zmdi zmdi-circle-o text-warning"></i><span>busy</span></a>
											</li>
											<li>
												<a href="#"><i class="zmdi zmdi-minus-circle-outline text-danger"></i><span>offline</span></a>
											</li>
										</ul>
									</li>
									<li class="divider"></li>
									<li>
										<a href="<?=$domain; ?>/Logout"><i class="zmdi zmdi-power"></i><span>Log Out</span></a>
									</li>
								</ul>
							</div>
						</div>
					</li>
					<li class="navigation-header">
						<span>Navigation</span>
						<i class="zmdi zmdi-more"></i>
					</li>
					<li>
						<a href="<?=$domain; ?>/Dashboard" class="<?=$pageDetails["PageID"]=="Dashboard" ? "active" : ""; ?>"><div class="pull-left"><i class="zmdi zmdi-view-dashboard mr-20"></i><span class="right-nav-text">Dashboard</span></div><div class="clearfix"></div></a>
					</li>
					<li><hr class="light-grey-hr mb-10"/></li>
					<li>
						<a href="javascript:void(0);" data-toggle="collapse" data-target="#server" class="<?=$pageDetails["PageID"]=="Server" ? "active" : ""; ?>"><div class="pull-left"><i class="fa fa-server fa-fw mr-20"></i><span class="right-nav-text">Server</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
						<ul id="server" class="<?=$pageDetails["PageID"]=="Server" ? "" : "collapse"; ?> collapse-level-1">
							<li>
								<a href="<?=$domain; ?>/Server/Settings" class="<?=$pageDetails["SubPageID"]=="Settings" ? "active" : ""; ?>"><div class="pull-left"><i class="fa fa-cogs fa-fw mr-20"></i><span class="right-nav-text">Settings</span></div><div class="clearfix"></div></a>
							</li>
							<li>
								<a href="<?=$domain; ?>/phpmyadmin" class="" target="_BLANK"><div class="pull-left"><i class="fa fa-database fa-fw mr-20"></i><span class="right-nav-text">Database</span></div><div class="clearfix"></div></a>
							</li>
						</ul>
					</li>
					<li><hr class="light-grey-hr mb-10"/></li>
					<li>
						<a href="javascript:void(0);" data-toggle="collapse" data-target="#hospital" class="<?=$pageDetails["PageID"]=="HIS" ? "active" : ""; ?>"><div class="pull-left"><i class="fa fa-hospital fa-fw mr-20"></i><span class="right-nav-text">HIS</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
						<ul id="hospital" class="<?=$pageDetails["PageID"]=="HIS" ? "" : "collapse"; ?> collapse-level-1">
							<li>
								<a href="javascript:void(0);" data-toggle="collapse" data-target="#staffdd" class="<?=$pageDetails["SubPageID"]=="Staff" ? "active" : ""; ?>"><div class="pull-left"><i class="fas fa-users fa-fw mr-20"></i></div> Staff<div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
								<ul id="staffdd" class="<?=$pageDetails["SubPageID"]=="Staff" ? "" : "collapse"; ?> collapse-level-2">
									<li>
										<a href="<?=$domain; ?>/Hospital/Staff/" class="<?=isSet($pageDetails["LowPageID"]) && $pageDetails["LowPageID"]=="List" ? "active" : ""; ?>"><div class="pull-left"><i class="fas fa-list fa-fw mr-20"></i></div> List<div class="pull-right"></div><div class="clearfix"></div></a>
									</li>
									<li>
										<a href="<?=$domain; ?>/Hospital/Staff/Create" class="<?=isSet($pageDetails["LowPageID"]) && $pageDetails["LowPageID"]=="Create" ? "active" : ""; ?>"><div class="pull-left"><i class="fas fa-plus fa-fw mr-20"></i></div> Create<div class="pull-right"></div></a>
									</li>
								</ul>
							</li>
							<li>
								<a href="javascript:void(0);" data-toggle="collapse" data-target="#patientsdd" class="<?=$pageDetails["SubPageID"]=="Patients" ? "active" : ""; ?>"><div class="pull-left"><i class="fas fa-hospital-user fa-fw mr-20"></i></div> Patients<div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
								<ul id="patientsdd" class="<?=$pageDetails["SubPageID"]=="Patients" ? "" : "collapse"; ?> collapse-level-2">
									<li>
										<a href="<?=$domain; ?>/Hospital/Patients" class="<?=isSet($pageDetails["LowPageID"]) && $pageDetails["LowPageID"]=="List" ? "active" : ""; ?>"><div class="pull-left"><i class="fas fa-list fa-fw mr-20"></i></div> List<div class="pull-right"></div><div class="clearfix"></div></a>
									</li>
									<li>
										<a href="<?=$domain; ?>/Hospital/Patients/Create" class="<?=isSet($pageDetails["LowPageID"]) && $pageDetails["LowPageID"]=="Create" ? "active" : ""; ?>"><div class="pull-left"><i class="fas fa-plus fa-fw mr-20"></i></div> Create<div class="pull-right"></div></a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li><hr class="light-grey-hr mb-10"/></li>
					<li>
						<a href="javascript:void(0);" data-toggle="collapse" data-target="#blockchain" class="<?=$pageDetails["PageID"]=="Blockchain" ? "active" : ""; ?>"><div class="pull-left"><i class="fa fa-bitcoin fa-fw mr-20"></i><span class="right-nav-text">Blockchain</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
						<ul id="blockchain" class="<?=$pageDetails["PageID"]=="Blockchain" ? "" : "collapse"; ?> collapse-level-1">
							<li>
								<a href="<?=$domain; ?>/Blockchain/" class="<?=$pageDetails["SubPageID"]=="Settings" ? "active" : ""; ?>"><div class="pull-left"><i class="fa fa-cogs fa-fw mr-20"></i></div> Settings<div class="pull-right"></div><div class="clearfix"></div></a>
							</li>
							<li>
								<a href="<?=$domain; ?>/Blockchain/Contracts" class="<?=$pageDetails["SubPageID"]=="Contracts" ? "active" : ""; ?>"><div class="pull-left"><i class="fas fa-file-contract fa-fw mr-20"></i></div> Contracts<div class="pull-right"></div><div class="clearfix"></div></a>
							</li>
							<li>
								<a href="<?=$domain; ?>/Blockchain/Transfer" class="<?=$pageDetails["SubPageID"]=="Transfer" ? "active" : ""; ?>"><div class="pull-left"><i class="fa fa-paper-plane fa-fw mr-20"></i></div> Transfer<div class="pull-right"></div><div class="clearfix"></div></a>
							</li>
						</ul>
					</li>
					<li><hr class="light-grey-hr mb-10"/></li>
					<li>
						<a href="javascript:void(0);" data-toggle="collapse" data-target="#dropdown_dr_lv2" class="<?=$pageDetails["PageID"]=="IoT" ? "active" : ""; ?>"><div class="pull-left"><i class="fas fa-wifi fa-fw mr-20"></i></div> IoT<div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
						<ul id="dropdown_dr_lv2" class="<?=$pageDetails["PageID"]=="IoT" ? "" : "collapse"; ?>  collapse-level-2">
							<li>
								<a href="javascript:void(0);" data-toggle="collapse" data-target="#cbroker" class="<?=$pageDetails["SubPageID"]=="Context" ? "active" : ""; ?>"><div class="pull-left"><i class="fas fa-info-circle fa-fw mr-20"></i></div> Context Broker<div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
								<ul id="cbroker" class="<?=$pageDetails["SubPageID"]=="Context" ? "" : "collapse"; ?> collapse-level-2">
									<li>
										<a href="<?=$domain; ?>/iotJumpWay/ContextBroker/Settings" class="<?=isSet($pageDetails["LowPageID"]) && $pageDetails["LowPageID"]=="Setting" ? "active" : ""; ?>"><div class="pull-left"><i class="fas fa-cogs fa-fw mr-20"></i></div> Settings<div class="pull-right"></div><div class="clearfix"></div></a>
									</li>
									<li>
										<a href="<?=$domain; ?>/iotJumpWay/ContextBroker/Agents" class="<?=isSet($pageDetails["LowPageID"]) && $pageDetails["LowPageID"]=="Agents" ? "active" : ""; ?>"><div class="pull-left"><i class="zmdi zmdi-memory fa-fw mr-20"></i></div> IoT Agents<div class="pull-right"></div><div class="clearfix"></div></a>
									</li>
								</ul>
							</li>
							<li>
								<a href="javascript:void(0);" data-toggle="collapse" data-target="#location" class="<?=$pageDetails["SubPageID"]=="Location" ? "active" : ""; ?>"><div class="pull-left"><i class="fas fa-map-marker-alt fa-fw mr-20"></i></div> Location<div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
								<ul id="location" class="<?=$pageDetails["SubPageID"]=="Location" ? "" : "collapse"; ?> collapse-level-2">
									<li>
										<a href="<?=$domain; ?>/iotJumpWay/" class="<?=isSet($pageDetails["LowPageID"]) && $pageDetails["LowPageID"]=="Location" ? "active" : ""; ?>"><div class="pull-left"><i class="fas fa-cogs fa-fw mr-20"></i></div> Settings<div class="clearfix"></div></a>
									</li>
									<li>
										<a href="<?=$domain; ?>/iotJumpWay/Zones" class="<?=isSet($pageDetails["LowPageID"]) && $pageDetails["LowPageID"]=="Zones" ? "active" : ""; ?>"><div class="pull-left"><i class="fas fa-network-wired fa-fw mr-20"></i></div> Zones<div class="clearfix"></div></a>
									</li>
									<li>
										<a href="<?=$domain; ?>/iotJumpWay/Data" class="<?=isSet($pageDetails["LowPageID"]) && $pageDetails["LowPageID"]=="Data" ? "active" : ""; ?>"><div class="pull-left"><i class="fas fa-chart-area fa-fw mr-20"></i></div> Data<div class="clearfix"></div></a>
									</li>
								</ul>
							</li>
							<li>
								<a href="javascript:void(0);" data-toggle="collapse" data-target="#entities" class="<?=$pageDetails["SubPageID"]=="Entities" ? "active" : ""; ?>"><div class="pull-left"><i class="fas fa-microchip fa-fw mr-20"></i></div> Entities<div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
								<ul id="entities" class="<?=$pageDetails["SubPageID"]=="Entities" ? "" : "collapse"; ?> collapse-level-2">
									<li>
										<a href="<?=$domain; ?>/iotJumpWay/Devices" class="<?=isSet($pageDetails["LowPageID"]) && $pageDetails["LowPageID"]=="Devices" ? "active" : ""; ?>"><div class="pull-left"><i class="fas fa-wifi fa-fw mr-20"></i></div> Devices<div class="clearfix"></div></a>
									</li>
									<li>
										<a href="<?=$domain; ?>/iotJumpWay/Applications" class="<?=isSet($pageDetails["LowPageID"]) && $pageDetails["LowPageID"]=="Applications" ? "active" : ""; ?>"><div class="pull-left"><i class="fas fa-mobile-alt fa-fw mr-20"></i></div> Applications<div class="clearfix"></div></a>
									</li>
									<li>
										<a href="<?=$domain; ?>/iotJumpWay/Things" class="<?=isSet($pageDetails["LowPageID"]) && $pageDetails["LowPageID"]=="Things" ? "active" : ""; ?>"><div class="pull-left"><i class="fas fa-upload fa-fw mr-20"></i></div> Things<div class="clearfix"></div></a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li><hr class="light-grey-hr mb-10"/></li>
					<li>
						<a href="javascript:void(0);" data-toggle="collapse" data-target="#ai" class="<?=$pageDetails["PageID"]=="AI" ? "active" : ""; ?>"><div class="pull-left"><i class="fas fa-brain fa-fw mr-20"></i></div> AI<div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
						<ul id="ai" class="<?=$pageDetails["PageID"]=="AI" ? "" : "collapse"; ?>  collapse-level-2">
							<li>
								<a href="javascript:void(0);" data-toggle="collapse" data-target="#models" class="<?=$pageDetails["PageID"]=="Models" ? "active" : ""; ?>"><div class="pull-left"><i class="fas fa-brain fa-fw mr-20"></i></div> Models<div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
								<ul id="models" class="<?=$pageDetails["SubPageID"]=="Models" ? "" : "collapse"; ?> collapse-level-2">
									<li>
										<a href="<?=$domain; ?>/AI/" class="<?=isSet($pageDetails["LowPageID"]) && $pageDetails["LowPageID"]=="List" ? "active" : ""; ?>"><div class="pull-left"><i class="fas fa-list fa-fw mr-20"></i></div> List<div class="pull-right"></div><div class="clearfix"></div></a>
									</li>
									<li>
										<a href="<?=$domain; ?>/AI/Create" class="<?=isSet($pageDetails["LowPageID"]) && $pageDetails["LowPageID"]=="Create" ? "active" : ""; ?>"><div class="pull-left"><i class="fas fa-plus fa-fw mr-20"></i></div> Create<div class="pull-right"></div></a>
									</li>
								</ul>
							</li>
							<li>
								<a href="javascript:void(0);" data-toggle="collapse" data-target="#genisyssec" class="<?=$pageDetails["PageID"]=="TASS" ? "active" : ""; ?>"><div class="pull-left"><i class="fas fa-video-camera fa-fw mr-20"></i></div> TassAI<div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
								<ul id="genisyssec" class="<?=$pageDetails["SubPageID"]=="TassAI" ? "" : "collapse"; ?> collapse-level-2">
									<li>
										<a href="<?=$domain; ?>/AI/TassAI/" class="<?=isSet($pageDetails["LowPageID"]) && $pageDetails["LowPageID"]=="List" ? "active" : ""; ?>"><div class="pull-left"><i class="fas fa-list fa-fw mr-20"></i></div> List<div class="pull-right"></div><div class="clearfix"></div></a>
									</li>
									<li>
										<a href="<?=$domain; ?>/AI/TassAI/View" class="<?=isSet($pageDetails["LowPageID"]) && $pageDetails["LowPageID"]=="View" ? "active" : ""; ?>"><div class="pull-left"><i class="fas fa-eye fa-fw mr-20"></i></div> View<div class="pull-right"></div><div class="clearfix"></div></a>
									</li>
									<li>
										<a href="<?=$domain; ?>/AI/TassAI/Create" class="<?=isSet($pageDetails["LowPageID"]) && $pageDetails["LowPageID"]=="Create" ? "active" : ""; ?>"><div class="pull-left"><i class="fas fa-plus fa-fw mr-20"></i></div> Create<div class="pull-right"></div></a>
									</li>
									<li><a href="https://github.com/LeukemiaAiResearch/TassAI" target="_BLANK"><div class="pull-left"><i class="fa fa-github fa-fw mr-20"></i><span class="right-nav-text">TassAI</span></div><div class="clearfix"></div></a></li>
								</ul>
							</li>
							<li>
								<a href="javascript:void(0);" data-toggle="collapse" data-target="#nlu" class="<?=$pageDetails["SubPageID"]=="GeniSysAI" ? "active" : ""; ?>"><div class="pull-left"><i class="fas fa-comments fa-fw mr-20"></i><span class="right-nav-text">GeniSysAI</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
								<ul id="nlu" class="<?=$pageDetails["PageID"]=="NLU" ? "" : "collapse"; ?> collapse-level-1">
									<li>
										<a href="<?=$domain; ?>/AI/GeniSysAI/" class="<?=isSet($pageDetails["LowPageID"]) && $pageDetails["LowPageID"]=="Home" ? "active" : ""; ?>"><div class="pull-left"><i class="fas fa-list fa-fw mr-20"></i></div> List</a>
									</li>
									<li>
										<a href="<?=$domain; ?>/AI/GeniSysAI/Create" class="<?=isSet($pageDetails["LowPageID"]) && $pageDetails["LowPageID"]=="Create" ? "active" : ""; ?>"><div class="pull-left"><i class="fas fa-plus fa-fw mr-20"></i></div> Create<div class="pull-right"></div></a>
									</li>
									<li><a href="https://github.com/LeukemiaAiResearch/GeniSysAI" target="_BLANK"><div class="pull-left"><i class="fa fa-github fa-fw mr-20"></i><span class="right-nav-text">GeniSysAI</span></div><div class="clearfix"></div></a></li>
								</ul>
							</li>
							<li>
								<a href="javascript:void(0);" data-toggle="collapse" data-target="#daml" class="<?=$pageDetails["SubPageID"]=="AIAML" ? "active" : ""; ?>"><div class="pull-left"><i class="fas fa-disease fa-fw mr-20"></i></div> AML<div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
								<ul id="daml" class="<?=$pageDetails["SubPageID"]=="AIAML" ? "" : "collapse"; ?>  collapse-level-2">
									<li>
										<a href="<?=$domain; ?>/AI/AML/" class="<?=isSet($pageDetails["LowPageID"]) && $pageDetails["LowPageID"]=="Home" ? "active" : ""; ?>"><div class="pull-left"><i class="fas fa-list fa-fw mr-20"></i></div> List</a>
									</li>
									<li>
										<a href="<?=$domain; ?>/AI/AML/Create" class="<?=isSet($pageDetails["LowPageID"]) && $pageDetails["LowPageID"]=="Create" ? "active" : ""; ?>"><div class="pull-left"><i class="fas fa-plus fa-fw mr-20"></i></div> Create<div class="pull-right"></div></a>
									</li>
									<li><a href="https://github.com/AMLResearchProject" target="_BLANK"><div class="pull-left"><i class="fa fa-github fa-fw mr-20"></i><span class="right-nav-text">AML</span></div><div class="clearfix"></div></a></li>
								</ul>
							</li>
							<li>
								<a href="javascript:void(0);" data-toggle="collapse" data-target="#dall" class="<?=$pageDetails["SubPageID"]=="AIALL" ? "active" : ""; ?>"><div class="pull-left"><i class="fas fa-disease fa-fw mr-20"></i></div> ALL<div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
								<ul id="dall" class="<?=$pageDetails["SubPageID"]=="AIALL" ? "" : "collapse"; ?>  collapse-level-2">
									<li>
										<a href="<?=$domain; ?>/AI/ALL/" class="<?=isSet($pageDetails["LowPageID"]) && $pageDetails["LowPageID"]=="Home" ? "active" : ""; ?>"><div class="pull-left"><i class="fas fa-list fa-fw mr-20"></i></div> List</a>
									</li>
									<li>
										<a href="<?=$domain; ?>/AI/ALL/Create" class="<?=isSet($pageDetails["LowPageID"]) && $pageDetails["LowPageID"]=="Create" ? "active" : ""; ?>"><div class="pull-left"><i class="fas fa-plus fa-fw mr-20"></i></div> Create<div class="pull-right"></div></a>
									</li>
									<li><a href="https://github.com/AMLResearchProject" target="_BLANK"><div class="pull-left"><i class="fa fa-github fa-fw mr-20"></i><span class="right-nav-text">ALL</span></div><div class="clearfix"></div></a></li>
								</ul>
							</li>
							<li>
								<a href="javascript:void(0);" data-toggle="collapse" data-target="#dropdown_dcovid19" class="<?=$pageDetails["SubPageID"]=="AICOVID19" ? "active" : ""; ?>"><div class="pull-left"><i class="fas fa-virus fa-fw mr-20"></i></div> COVID-19<div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
								<ul id="dropdown_dcovid19" class="<?=$pageDetails["SubPageID"]=="AICOVID" ? "" : "collapse"; ?>  collapse-level-2">
									<li>
										<a href="<?=$domain; ?>/AI/COVID/" class="<?=isSet($pageDetails["LowPageID"]) && $pageDetails["LowPageID"]=="Home" ? "active" : ""; ?>"><div class="pull-left"><i class="fas fa-list fa-fw mr-20"></i></div> List</a>
									</li>
									<li>
										<a href="<?=$domain; ?>/AI/COVID/Create" class="<?=isSet($pageDetails["LowPageID"]) && $pageDetails["LowPageID"]=="Create" ? "active" : ""; ?>"><div class="pull-left"><i class="fas fa-plus fa-fw mr-20"></i></div> Create<div class="pull-right"></div></a>
									</li>
									<li><a href="https://github.com/COVID-19-AI-Research-Project" target="_BLANK"><div class="pull-left"><i class="fa fa-github fa-fw mr-20"></i><span class="right-nav-text">COVID</span></div><div class="clearfix"></div></a></li>
								</ul>
							</li>
							<li>
								<a href="javascript:void(0);" data-toggle="collapse" data-target="#dskin" class="<?=$pageDetails["SubPageID"]=="AISkin" ? "active" : ""; ?>"><div class="pull-left"><i class="fas fa-allergies fa-fw mr-20"></i></div> Skin<div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
								<ul id="dskin" class="<?=$pageDetails["SubPageID"]=="AISkin" ? "" : "collapse"; ?>  collapse-level-2">
									<li>
										<a href="<?=$domain; ?>/AI/Skin/" class="<?=isSet($pageDetails["LowPageID"]) && $pageDetails["LowPageID"]=="Home" ? "active" : ""; ?>"><div class="pull-left"><i class="fas fa-list fa-fw mr-20"></i></div> List</a>
									</li>
									<li>
										<a href="<?=$domain; ?>/AI/Skin/Create" class="<?=isSet($pageDetails["LowPageID"]) && $pageDetails["LowPageID"]=="Create" ? "active" : ""; ?>"><div class="pull-left"><i class="fas fa-plus fa-fw mr-20"></i></div> Create<div class="pull-right"></div></a>
									</li>
								</ul>
							</li>
						</ul>
					</li>
					<li><hr class="light-grey-hr mb-10"/></li>
					<li>
						<a href="javascript:void(0);" data-toggle="collapse" data-target="#robotics" class="<?=$pageDetails["PageID"]=="Robotics" ? "active" : ""; ?>"><div class="pull-left"><i class="fa fa-robot fa-fw mr-20"></i><span class="right-nav-text">Robotics</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
						<ul id="robotics" class="<?=$pageDetails["PageID"]=="Robotics" ? "" : "collapse"; ?> collapse-level-1">
							<li>
								<a href="javascript:void(0);" data-toggle="collapse" data-target="#roboticsd" class="<?=$pageDetails["SubPageID"]=="EMAR" ? "active" : ""; ?>"><div class="pull-left"><i class="fas fa-robot fa-fw mr-20"></i></div> EMAR<div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
								<ul id="roboticsd" class="<?=$pageDetails["SubPageID"]=="EMAR" ? "" : "collapse"; ?> collapse-level-2">
									<li>
										<a href="<?=$domain; ?>/Robotics/EMAR/" class="<?=isSet($pageDetails["LowPageID"]) && $pageDetails["LowPageID"]=="List" ? "active" : ""; ?>"><div class="pull-left"><i class="fas fa-list fa-fw mr-20"></i></div> List<div class="pull-right"></div><div class="clearfix"></div></a>
									</li>
									<li>
										<a href="<?=$domain; ?>/Robotics/EMAR/Create" class="<?=isSet($pageDetails["LowPageID"]) && $pageDetails["LowPageID"]=="Create" ? "active" : ""; ?>"><div class="pull-left"><i class="fas fa-plus fa-fw mr-20"></i></div> Create<div class="pull-right"></div></a>
									</li>
									<li><a href="https://github.com/COVID-19-AI-Research-Project/EMAR-Mini" target="_BLANK"><div class="pull-left"><i class="fa fa-github fa-fw mr-20"></i><span class="right-nav-text">EMAR Mini</span></div><div class="clearfix"></div></a></li>
									<li><a href="https://github.com/COVID-19-AI-Research-Project/EMAR" target="_BLANK"><div class="pull-left"><i class="fa fa-github fa-fw mr-20"></i><span class="right-nav-text">EMAR</span></div><div class="clearfix"></div></a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><hr class="light-grey-hr mb-10"/></li>
					<li>
						<a href="javascript:void(0);" data-toggle="collapse" data-target="#dataa" class="<?=$pageDetails["PageID"]=="DataAnalysis" ? "active" : ""; ?>"><div class="pull-left"><i class="fas fa-table fa-fw mr-20"></i><span class="right-nav-text">Data Analysis</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
						<ul id="dataa" class="<?=$pageDetails["PageID"]=="DataAnalysis" ? "" : "collapse"; ?> collapse-level-1">
							<li>
								<a href="javascript:void(0);" data-toggle="collapse" data-target="#dropdown_covid" class="<?=$pageDetails["SubPageID"]=="COVID19" ? "active" : ""; ?>"><div class="pull-left"><i class="fas fa-virus fa-fw mr-20"></i></div> COVID-19<div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
								<ul id="dropdown_covid" class="<?=$pageDetails["SubPageID"]=="COVID19" ? "" : "collapse"; ?>  collapse-level-2">
									<li>
										<a href="<?=$domain; ?>/Data-Analysis/COVID-19" class="<?=isSet($pageDetails["LowPageID"]) && $pageDetails["LowPageID"]=="Dashboard" ? "active" : ""; ?>"><div class="pull-left"><i class="zmdi zmdi-view-dashboard mr-15"></i> <span class="right-nav-text">Dashboard</span></div><div class="clearfix"></div></a>
									</li>
									<li>
										<a href="<?=$domain; ?>/Data-Analysis/COVID-19/Pulls" class="<?=isSet($pageDetails["LowPageID"]) && $pageDetails["LowPageID"]=="Pulls" ? "active" : ""; ?>"><div class="pull-left"><i class="fa fa-cloud-download  mr-15"></i> <span class="right-nav-text">Data Pulls</span></div><div class="clearfix"></div></a>
									</li>
									<li><a href="https://github.com/COVID-19-AI-Research-Project/AI-Data-Analysis" target="_BLANK"><div class="pull-left"><i class="fa fa-github fa-fw mr-20"></i><span class="right-nav-text">Github</span></div><div class="clearfix"></div></a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><hr class="light-grey-hr mb-10"/></li>
					<li><a href="https://github.com/LeukemiaAiResearch/HIAS" target="_BLANK"><div class="pull-left"><i class="fa fa-github fa-fw mr-20"></i><span class="right-nav-text">Github</span></div><div class="clearfix"></div></a></li>
					<li><hr class="light-grey-hr mb-10"/></li>
				</ul>
			</div>