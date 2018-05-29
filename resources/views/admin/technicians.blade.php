@extends('layouts.admin')

@section('content')
    <div class="content">
        <a class="btn ajout" data-toggle="modal" data-target="#myModalAjout"  >
            <i class="fa fa-plus"></i> Ajouter un technicien
        </a>
        <div class="women_main">
            <!-- start content -->
            <ul>
                @foreach ($techs as $tech)
                    <li >
                        <div>
                            <img src="/storage/uploads/users/{{ $tech->details->image }}" class="imge">
                            <h4 >{{ $tech->details->first_name }} {{ $tech->details->last_name }}</h4>
                            <a data-toggle="modal" data-target="#myModal" class="btn consulter">Consulter</a>
                            <form action="{{ route('admin.addTechnician', ['id'=>$tech->id]) }}" method="POST">
                                @csrf
                                <input type="hidden" name="_method" value="DELETE">
                                <input class="btn btn-danger dan" type="submit" value="Suprimer">
                            </form>
                        </div>
                    </li>
                @endforeach
            </ul>
        <!-- end content -->
        </div>
    </div>
    <div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
         
               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                 
            </div>
            <section>
               <div class="modal-body">
                  <div class="w3_login_module">
                     <div class="module form-module">
                       <div class="toggle"><i class="fa fa-times fa-pencil"></i>
                        <div class="tooltip">mise a jour</div>
                       </div>
                       <div class="form">
                       
                        <form >
                            @csrf
                           <img src="/storage/uploads/promotions/2.jpg" style="width: 40%;height: 40%;margin-left: 10%">
                            <h3>Nom: </h3>
                            <h3>Prénom: </h3>
                            <h3>cin: </h3>
                            <h3>Email: </h3>
                            <h3>Adresse: </h3>
                            <h3>Telephone: </h3>
                            <h3>Post: </h3>
                            <h3>Bio: </h3>
                        </form>
                       </div>
                       <div class="form">
                        <h3>promotion</h3>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                             <img src="/storage/uploads/promotions/2.jpg" style="width: 30%;height: 30%;margin-left: 10%">
                           <input type="file" name="file" class="form-control-file" style="margin: 2%">
                            <input type="text" name="nom" placeholder="Nom" required="">
                            <input type="text" name="prenom" placeholder="Prénom" required="">
                            <input type="text" name="cin" placeholder="Cin" required="">
                            <input type="text" name="email" placeholder="Email" required="">
                            <input type="text" name="adresse" placeholder="Adresse" required="">
                            <input type="text" name="phone" placeholder="Phone" required="">
                           <select name="client" >
                                <option selected disabled>Post</option>
                         
                                  
                            </select>
                            <input type="text" name="bio" placeholder="bio" required="">
                            <input type="submit" value="Mise a jour">
                        </form>
                       </div>
                       <div class="cta"><a href="#">Annuler</a></div>
                     </div>
                  </div>
               </div>
            </section>
         </div>
      </div>
   </div>
   <script>
      $('.toggle').click(function(){
        // Switches the Icon
        $(this).children('i').toggleClass('fa-pencil');
        // Switches the forms  
        $('.form').animate({
         height: "toggle",
         'padding-top': 'toggle',
         'padding-bottom': 'toggle',
         opacity: "toggle"
        }, "slow");
      });
   </script>
<!---modal mte3 l'ajout-->
<div class="modal video-modal fade" id="myModalAjout" tabindex="-1" role="dialog" aria-labelledby="myModalAjout">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
         
               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>                 
            </div>
            <section>
               <div class="modal-body">
                  <div class="w3_login_module">
                     <div class="module form-module">
                       <div class="toggle" style="background-color: white;border-top: 5px solid #0aca89;">
                        
                       </div>
                    
                       <div class="form">
                        <h3>Ajouter un client</h3>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <img src="/storage/uploads/promotions/2.jpg" style="width: 30%;height: 30%;margin-left: 10%">
                           <input type="file" name="file" class="form-control-file" style="margin: 2%">
                            <input type="text" name="nom" placeholder="Nom" required="">
                            <input type="text" name="prenom" placeholder="Prénom" required="">
                            <input type="text" name="cin" placeholder="Cin" required="">
                            <input type="text" name="email" placeholder="Email" required="">
                            <input type="text" name="adresse" placeholder="Adresse" required="">
                            <input type="text" name="phone" placeholder="Phone" required="">
                           <select name="client" >
                                <option selected disabled>Post</option>
                         
                                  
                            </select>
                            <input type="text" name="bio" placeholder="bio" required="">
                         
                            <input type="submit" value="ajout">
                        </form>
                       </div>
                       <div class="cta"><a href="#">Annuler</a></div>
                     </div>
                  </div>
               </div>
            </section>
         </div>
      </div>
   </div>
@endsection
