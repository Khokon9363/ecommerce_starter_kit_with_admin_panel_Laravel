<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Web UI Kit &amp; Dashboard Template based on Bootstrap">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, web ui kit, dashboard template, admin template">
	<link rel="shortcut icon" href="{{ asset('dashboard/img/icons/icon-48x48.png') }}" />
	<title>AdminKit Demo - Web UI Kit &amp; Dashboard Template</title>
	<link href="{{ asset('dashboard/css/app.css') }}" rel="stylesheet">
</head>
<body>
	<div class="wrapper">

<!-- Sidebar -->
<nav id="sidebar" class="sidebar">
	<div class="sidebar-content js-simplebar">
		<a class="sidebar-brand" href="{{ url('/') }}">
			<span class="align-middle">{{ config('app.name') }}</span>
		</a>
		<ul class="sidebar-nav">
			<li class="sidebar-header">
				Pages
			</li>
			<li class="sidebar-item active">
				<a class="sidebar-link" href="{{ route('admin.home') }}">
					<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
				</a>
			</li>
			<li class="sidebar-item">
				<a class="sidebar-link" href="{{ route('admin.home') }}">
					<i class="align-middle" data-feather="eye"></i> <span class="align-middle">View Categories</span>
				</a>
			</li>
			<li class="sidebar-item">
				<a class="sidebar-link" href="{{ route('admin.home') }}">
					<i class="align-middle" data-feather="eye"></i> <span class="align-middle">View Products</span>
				</a>
			</li>
			<li class="sidebar-item">
				<a class="sidebar-link" href="{{ route('admin.home') }}">
					<i class="align-middle" data-feather="eye"></i> <span class="align-middle">View Users</span>
				</a>
			</li>
			<li class="sidebar-item">
				<a class="sidebar-link" href="{{ route('admin.home') }}">
					<i class="align-middle" data-feather="eye"></i> <span class="align-middle">View Slider</span>
				</a>
			</li>
			<li class="sidebar-item">
				<a class="sidebar-link" href="{{ route('admin.home') }}">
					<i class="align-middle" data-feather="eye"></i> <span class="align-middle">View Orders</span>
				</a>
			</li>
			<li class="sidebar-item">
				<a class="sidebar-link" href="{{ route('admin.home') }}">
					<i class="align-middle" data-feather="eye"></i> <span class="align-middle">View Emails</span>
				</a>
			</li>
			<li class="sidebar-header">
				Settings
			</li>
			<li class="sidebar-item">
				<a class="sidebar-link" href="{{ route('admin.home') }}">
					<i class="align-middle" data-feather="users"></i> <span class="align-middle">About Us</span>
				</a>
			</li>
			<li class="sidebar-item">
				<a class="sidebar-link" href="{{ route('admin.home') }}">
					<i class="align-middle" data-feather="link"></i> <span class="align-middle">Social Links</span>
				</a>
			</li>
			<li class="sidebar-item">
				<a class="sidebar-link" href="{{ route('admin.home') }}">
					<i class="align-middle" data-feather="phone"></i> <span class="align-middle">Contact Informations</span>
				</a>
			</li>
			<li class="sidebar-item">
				<a class="sidebar-link" href="{{ route('admin.home') }}">
					<i class="align-middle" data-feather="clock"></i> <span class="align-middle">Availability</span>
				</a>
			</li>
		</ul>
	</div>
</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle d-flex">
          <i class="hamburger align-self-center"></i>
        </a>

<!-- Search -->
<form class="form-inline d-none d-sm-inline-block">
	<div class="input-group input-group-navbar">
		<input type="text" class="form-control" placeholder="Search…" aria-label="Search">
		<div class="input-group-append">
			<button class="btn" type="button">
				<i class="align-middle" data-feather="search"></i>
			</button>
		</div>
	</div>
</form>

	<div class="navbar-collapse collapse">
		<ul class="navbar-nav navbar-align">
			<li class="nav-item dropdown">
				<a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-toggle="dropdown">
					<div class="position-relative">
						<i class="align-middle" data-feather="shopping-cart"></i>
						<span class="indicator">4</span>
					</div>
				</a>
				<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="alertsDropdown">
					<div class="dropdown-menu-header">
						4 New Orders
					</div>
					<div class="list-group">
						<a href="#" class="list-group-item">
							<div class="row no-gutters align-items-center">
								<div class="col-2">
									<i class="text-danger" data-feather="alert-circle"></i>
								</div>
								<div class="col-10">
									<div class="text-dark">Update completed</div>
									<div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
									<div class="text-muted small mt-1">30m ago</div>
								</div>
							</div>
						</a>
						<a href="#" class="list-group-item">
							<div class="row no-gutters align-items-center">
								<div class="col-2">
									<i class="text-warning" data-feather="bell"></i>
								</div>
								<div class="col-10">
									<div class="text-dark">Lorem ipsum</div>
									<div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
									<div class="text-muted small mt-1">2h ago</div>
								</div>
							</div>
						</a>
						<a href="#" class="list-group-item">
							<div class="row no-gutters align-items-center">
								<div class="col-2">
									<i class="text-primary" data-feather="home"></i>
								</div>
								<div class="col-10">
									<div class="text-dark">Login from 192.186.1.8</div>
									<div class="text-muted small mt-1">5h ago</div>
								</div>
							</div>
						</a>
						<a href="#" class="list-group-item">
							<div class="row no-gutters align-items-center">
								<div class="col-2">
									<i class="text-success" data-feather="user-plus"></i>
								</div>
								<div class="col-10">
									<div class="text-dark">New connection</div>
									<div class="text-muted small mt-1">Christina accepted your request.</div>
									<div class="text-muted small mt-1">14h ago</div>
								</div>
							</div>
						</a>
					</div>
					<div class="dropdown-menu-footer">
						<a href="#" class="text-muted">Show all orders</a>
					</div>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-toggle="dropdown">
					<div class="position-relative">
						<i class="align-middle" data-feather="message-square"></i>
						<span class="indicator">4</span>
					</div>
				</a>
				<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right py-0" aria-labelledby="messagesDropdown">
					<div class="dropdown-menu-header">
						<div class="position-relative">
							4 New Messages
						</div>
					</div>
					<div class="list-group">
						<a href="#" class="list-group-item">
							<div class="row no-gutters align-items-center">
								<div class="col-2">
									<img src="{{ asset('dashboard/img/avatars/avatar-5.jpg') }}" class="avatar img-fluid rounded-circle" alt="Vanessa Tucker">
								</div>
								<div class="col-10 pl-2">
									<div class="text-dark">Vanessa Tucker</div>
									<div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis arcu tortor.</div>
									<div class="text-muted small mt-1">15m ago</div>
								</div>
							</div>
						</a>
						<a href="#" class="list-group-item">
							<div class="row no-gutters align-items-center">
								<div class="col-2">
									<img src="{{ asset('dashboard/img/avatars/avatar-2.jpg') }}" class="avatar img-fluid rounded-circle" alt="William Harris">
								</div>
								<div class="col-10 pl-2">
									<div class="text-dark">William Harris</div>
									<div class="text-muted small mt-1">Curabitur ligula sapien euismod vitae.</div>
									<div class="text-muted small mt-1">2h ago</div>
								</div>
							</div>
						</a>
						<a href="#" class="list-group-item">
							<div class="row no-gutters align-items-center">
								<div class="col-2">
									<img src="{{ asset('dashboard/img/avatars/avatar-4.jpg') }}" class="avatar img-fluid rounded-circle" alt="Christina Mason">
								</div>
								<div class="col-10 pl-2">
									<div class="text-dark">Christina Mason</div>
									<div class="text-muted small mt-1">Pellentesque auctor neque nec urna.</div>
									<div class="text-muted small mt-1">4h ago</div>
								</div>
							</div>
						</a>
						<a href="#" class="list-group-item">
							<div class="row no-gutters align-items-center">
								<div class="col-2">
									<img src="{{ asset('dashboard/img/avatars/avatar-3.jpg') }}" class="avatar img-fluid rounded-circle" alt="Sharon Lessman">
								</div>
								<div class="col-10 pl-2">
									<div class="text-dark">Sharon Lessman</div>
									<div class="text-muted small mt-1">Aenean tellus metus, bibendum sed, posuere ac, mattis non.</div>
									<div class="text-muted small mt-1">5h ago</div>
								</div>
							</div>
						</a>
					</div>
					<div class="dropdown-menu-footer">
						<a href="#" class="text-muted">Show all messages</a>
					</div>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-toggle="dropdown">
					<i class="align-middle" data-feather="settings"></i>
				</a>

				<a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-toggle="dropdown">
					<img src="{{ asset('dashboard/img/avatars/avatar.jpg') }}" class="avatar img-fluid rounded mr-1" alt="Charles Hall" /> <span class="text-dark">Charles Hall</span>
				</a>
				<div class="dropdown-menu dropdown-menu-right">
					<a class="dropdown-item" href="{{ route('admin.home') }}"><i class="align-middle mr-1" data-feather="user"></i> Profile</a>
					<a class="dropdown-item" href="{{ route('admin.home') }}"><i class="align-middle mr-1" data-feather="activity"></i> Activity Logs</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="{{ route('logout') }}" 
					                         onclick="event.preventDefault();
											 document.getElementById('logout-form').submit();">
											 <i class="align-middle mr-1" data-feather="log-out"></i> 
											 Log out
					</a>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
						@csrf
					</form>
				</div>
			</li>
		</ul>
	</div>
</nav>

@yield('content')

<footer class="footer">
	<div class="container-fluid">
		<div class="row text-muted">
			<div class="col-6 text-left">
				<p class="mb-0">
					<a href="index.html" class="text-muted"><strong>AdminKit Demo</strong></a> &copy;
				</p>
			</div>
			<div class="col-6 text-right">
				<ul class="list-inline">
					<li class="list-inline-item">
						<a class="text-muted" href="#">Support</a>
					</li>
					<li class="list-inline-item">
						<a class="text-muted" href="#">Help Center</a>
					</li>
					<li class="list-inline-item">
						<a class="text-muted" href="#">Privacy</a>
					</li>
					<li class="list-inline-item">
						<a class="text-muted" href="#">Terms</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</footer>
            
		</div>
	</div>

	<script src="{{ asset('dashboard/js/app.js') }}"></script>
	<script>
		$(function() {
			var ctx = document.getElementById('chartjs-dashboard-line').getContext("2d");
			var gradient = ctx.createLinearGradient(0, 0, 0, 225);
			gradient.addColorStop(0, 'rgba(215, 227, 244, 1)');
			gradient.addColorStop(1, 'rgba(215, 227, 244, 0)');
			// Line chart
			new Chart(document.getElementById("chartjs-dashboard-line"), {
				type: 'line',
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
					datasets: [{
						label: "Sales ($)",
						fill: true,
						backgroundColor: gradient,
						borderColor: window.theme.primary,
						data: [
							2115,
							1562,
							1584,
							1892,
							1587,
							1923,
							2566,
							2448,
							2805,
							3438,
							2917,
							3327
						]
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					tooltips: {
						intersect: false
					},
					hover: {
						intersect: true
					},
					plugins: {
						filler: {
							propagate: false
						}
					},
					scales: {
						xAxes: [{
							reverse: true,
							gridLines: {
								color: "rgba(0,0,0,0.0)"
							}
						}],
						yAxes: [{
							ticks: {
								stepSize: 1000
							},
							display: true,
							borderDash: [3, 3],
							gridLines: {
								color: "rgba(0,0,0,0.0)"
							}
						}]
					}
				}
			});
		});
	</script>
	<script>
		$(function() {
			// Pie chart
			new Chart(document.getElementById("chartjs-dashboard-pie"), {
				type: 'pie',
				data: {
					labels: ["Chrome", "Firefox", "IE"],
					datasets: [{
						data: [4306, 3801, 1689],
						backgroundColor: [
							window.theme.primary,
							window.theme.warning,
							window.theme.danger
						],
						borderWidth: 5
					}]
				},
				options: {
					responsive: !window.MSInputMethodContext,
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					cutoutPercentage: 75
				}
			});
		});
	</script>
	<script>
		$(function() {
			// Bar chart
			new Chart(document.getElementById("chartjs-dashboard-bar"), {
				type: 'bar',
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
					datasets: [{
						label: "This year",
						backgroundColor: window.theme.primary,
						borderColor: window.theme.primary,
						hoverBackgroundColor: window.theme.primary,
						hoverBorderColor: window.theme.primary,
						data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
						barPercentage: .75,
						categoryPercentage: .5
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					scales: {
						yAxes: [{
							gridLines: {
								display: false
							},
							stacked: false,
							ticks: {
								stepSize: 20
							}
						}],
						xAxes: [{
							stacked: false,
							gridLines: {
								color: "transparent"
							}
						}]
					}
				}
			});
		});
	</script>
	<script>
		$(function() {
			$("#world_map").vectorMap({
				map: "world_mill",
				normalizeFunction: "polynomial",
				hoverOpacity: .7,
				hoverColor: false,
				regionStyle: {
					initial: {
						fill: "#e3eaef"
					}
				},
				markerStyle: {
					initial: {
						"r": 9,
						"fill": window.theme.primary,
						"fill-opacity": .95,
						"stroke": "#fff",
						"stroke-width": 7,
						"stroke-opacity": .4
					},
					hover: {
						"stroke": "#fff",
						"fill-opacity": 1,
						"stroke-width": 1.5
					}
				},
				backgroundColor: "transparent",
				zoomOnScroll: false,
				markers: [{
						latLng: [31.230391, 121.473701],
						name: "Shanghai"
					},
					{
						latLng: [28.704060, 77.102493],
						name: "Delhi"
					},
					{
						latLng: [6.524379, 3.379206],
						name: "Lagos"
					},
					{
						latLng: [35.689487, 139.691711],
						name: "Tokyo"
					},
					{
						latLng: [23.129110, 113.264381],
						name: "Guangzhou"
					},
					{
						latLng: [40.7127837, -74.0059413],
						name: "New York"
					},
					{
						latLng: [34.052235, -118.243683],
						name: "Los Angeles"
					},
					{
						latLng: [41.878113, -87.629799],
						name: "Chicago"
					},
					{
						latLng: [51.507351, -0.127758],
						name: "London"
					},
					{
						latLng: [40.416775, -3.703790],
						name: "Madrid"
					}
				]
			});
			setTimeout(function() {
				$(window).trigger('resize');
			}, 250)
		});
	</script>
	<script>
		$(function() {
			$('#datetimepicker-dashboard').datetimepicker({
				inline: true,
				sideBySide: false,
				format: 'L'
			});
		});
	</script>
</body>
</html>