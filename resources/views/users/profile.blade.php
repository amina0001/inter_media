<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V9</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="/fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="/css/util.css">
	<link rel="stylesheet" type="text/css" href="/css/main.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
	<link href="/css/style.css" rel='stylesheet' type='text/css' media="all">
 
<body style="background: #F7F7F7">
	<div class="header-outs_page">
		<div class="w3-agile-logo">
			<div class=" head-wl">
				<div class="col-md-4 col-sm-4 col-xs-4 buttom-social-grids">
					<ul>
						<li>
							<a href="https://www.facebook.com/InterMediaInformatique">
								<span class="fa fa-facebook"></span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="fa fa-twitter"></span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="fa fa-rss"></span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="fa fa-vk"></span>
							</a>
						</li>
					</ul>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4 headder-w3">
					<h1>
						<a href="{{route('welcome')}}">
							<span class="first-clr">I</span>nter
							<span class="first-clr">M</span>edia</a>
					</h1>
					<h2>
						<a href="{{route('welcome')}}">
							<span class="first-clr">M</span>onastir</a>
					</h2>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4 w3-header-top-right-text">
					<p>
						@if(Auth::guest())
							<a id="login" href="#" class="log" data-toggle="modal" data-target="#myModal">Se connecter</a>
						@else
							<form class="form-inline" action="{{ route('logout') }}" method="post">
								@csrf
								<input type="submit" value="Se deconnecter">
							</form>
						@endif
						<span class="fa fa-phone" aria-hidden="true"></span> (+216)73 448 601</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="top-nav">
			<nav class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<!-- //header -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"
						aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav ">
							<li><a href="{{ url('/') }}" class="scroll">Acceuil</a></li>
							<li><a href="{{ url('/') }}#about " class="scroll">À propos</a></li>
							<li><a href="{{ url('/') }}#services" class="scroll">Services</a></li>
								<li><a href="{{url('/')}}" ><img src="/images/log2.png" style="width: 50%;height: 50%;margin-top:-10%"></a></li>
							<li><a href="{{ url('/') }}#gallery" class="scroll">Promotions</a></li>
							<li><a href="{{ url('/') }}#testimonials" class="scroll">Témoignages</a></li>
							<li><a href="{{ url('/') }}#contact" class="scroll">Contactez nous</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
	</div>

	<div class="container-contact100">
		<div class="contact100-map" ></div>

		<div class="wrap-contact100" style="padding: 2%">
			
			<form action="{{ route('user.update', ['id'=>$user->id]) }}" method="POST" class="contact100-form validate-form" enctype="multipart/form-data">
				@csrf
				<input type="hidden" name="_method" value="PATCH">
				<span class="contact100-form-title">
					Profile
				</span>
				<div>
				<div class="form-group">
					<table>
					<tbody>
					<tr>
					<td>
						<img src="/storage/uploads/users/{{ $user->image }}" style="width: 100px;height: 100px;border-radius: 50%">
						</td>
				    <td >
				    <input type="file" class="form-control-file" name="image" id="exampleFormControlFile1" style="margin-left: 3%">
				</td>
				    </tr>
				    </tbody>
				    </table>
				</div>
			</div>
				<table style="width: 100%">
					<tbody>
					<tr>
						<td>
							<label style="font-family: SourceSansPro-Bold;padding: 5%">Nom :</label>
						</td>
						<td>
							<div class="wrap-input100 validate-input" data-validate="champ est requis">
								<input class="input100" type="text" name="last_name" value="{{ $user->last_name }}">
								<span class="focus-input100"></span>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<label style="font-family: SourceSansPro-Bold;padding: 5%">Prénom :</label>
						</td>
						<td>
							<div class="wrap-input100 validate-input" data-validate="champ est requis">
								<input class="input100" type="text" name="first_name" value="{{ $user->first_name }}">
								<span class="focus-input100"></span>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<label style="font-family: SourceSansPro-Bold;padding: 5%">Email :</label>
						</td>
						<td>
							<div class="wrap-input100 validate-input" data-validate="champ est requis">
								<input class="input100" type="text" name="email" value="{{ $user->email }}">
								<span class="focus-input100"></span>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<label style="font-family: SourceSansPro-Bold;padding: 5%">Adresse :</label>
						</td>
						<td>
							<div class="wrap-input100 validate-input" data-validate="champ est requis">
								<input class="input100" type="text" name="address" value="{{ $user->address }}">
								<span class="focus-input100"></span>
							</div>
						</td>
					</tr>
					<tr>
						<td>
							<label style="font-family: SourceSansPro-Bold;padding: 5%">Tel :</label>
						</td>
						<td>
							<div class="wrap-input100 validate-input" data-validate="champ est requis">
								<input class="input100" type="text" name="phone" value="{{ $user->phone }}">
								<span class="focus-input100"></span>
							</div>
						</td>
					</tr>
					@if(!is_null($user->technician))
						<tr>
							<td>
								<label style="font-family: SourceSansPro-Bold;padding: 5%">CIN :</label>
							</td>
							<td>
								<div class="wrap-input100 validate-input" data-validate="champ est requis">
									<input class="input100" type="text" name="cin" value="{{ $user->technician->cin }}">
									<span class="focus-input100"></span>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<label style="font-family: SourceSansPro-Bold;padding: 5%">Post :</label>
							</td>
							<td>
								<div class="wrap-input100 validate-input" data-validate="svp decrivez le post">
									<select id="inputState" class="form-control " style="border-radius: 20px;background:white;border-color: white;box-shadow: 5px 5px 5px 5px #f7f7f7;">
										@foreach([ 'Technicien Hardware', 'Technicien Software', 'Technicien Informatique', 'Ingenieur Informatique'] as $post)
											@if($post === $user->technician->post)
												<option selected value="{{ $post }}">{{ $post }}</option>
											@else
												<option value="{{ $post }}">{{ $post }}</option>
											@endif
										@endforeach
									</select>
								</div>
							</td>
						</tr>
						<tr>
							<td>
								<label style="font-family: SourceSansPro-Bold;padding: 5%">Bio :</label>
							</td>
							<td>
								<div class="wrap-input100 validate-input" data-validate="champ est requis">
									<textarea class="input100" type="text" name="bio" value="">{{ $user->technician->bio }}
									</textarea>
									<span class="focus-input100"></span>
								</div>
							</td>
						</tr>
						@endif						
				</tbody>
			</table>
			<div style="display:inline;">
				<div class="container-contact100-form-btn">
					<input type="submit" value="valider" class=" contact100-form-btn" style="background: #5BC0DE" />
				</div>
				<div class="container-contact100-form-btn">
					<input type="reset" value="Annuler"  class="contact100-form-btn" style="background:#c00c0d" />						
				</div>
			</div>
		</form>
			@if(Auth::user()->technician and Auth::user()->technician->admin)
				@if(!is_null($user->technician) and !$user->technician->admin)
					<form action="{{ route('admin.makeAdmin', ['id'=>$user->id]) }}" method="post">
						@csrf
						<input type="hidden" name="_method" value="PATCH">
						<div class="container-contact100-form-btn">
							<input type="submit" value="definir comme admin" class=" contact100-form-btn" style="background: limegreen" />
						</div>
					</form>
				@elseif (!is_null($user->technician))
					<form action="{{ route('admin.unmakeAdmin', ['id'=>$user->id]) }}" method="post">
						@csrf
						<input type="hidden" name="_method" value="PATCH">
						<div class="container-contact100-form-btn">
							<input type="submit" value="retirer du admins" class=" contact100-form-btn" style="background: lightcoral" />
						</div>
					</form>
				@endif
			@endif
			
		</div>
	</div>   
    <script src="/js/jquery.min.js"></script>
    
	<script src="/js/main.js"></script>
</body>
</html>
