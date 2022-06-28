@extends('layouts/admin.ap')
@section('title')
Positive Internet Solution | Liste Livre
@endsection


@section('content')


<div class="wrapper">
    <main role="main" class="main-content">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-12">
            <h2 class="page-title">Liste Des Livres</h2>
            <a class="btn mb-2 btn-outline-secondary" href="{{route('admin.livre_page_ajout')}}">AJOUTER LIVRE</a>
            <div class="row">

             @if(Session::get('success'))
            <div class='alert alert-success'>
                {{Session::get('success')}}
            </div>
            @endif
            @if(Session::get('fail'))
            <div class='alert alert-success'>
                {{Session::get('fail')}}
            </div>
            @endif
              <!-- Bordered table -->
              <div class="col-12">
                <div class="card shadow">
                  <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text"></p>
                    <table class="table datatables table-bordered table-hover mb-0" id="dataTable-1">
                      <thead>
                        <tr >
                          <th>Nom du livre</th>
                          {{-- <th>Nombre de pages</th> --}}
                          <th>Prix numerique</th>
                          <th>Prix papier</th>
                          {{-- <th>prix promo</th> --}}
                          <th>Date sortie</th>
                          <th>Image</th>
                          <th>Fichier</th>
                          <th>Etat</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                         @foreach ($livres as $livre)
                        <tr id="$id">
                          <td> {{$livre->livre_nom}} </td>
                          {{-- <td> {{$livre->livre_nb_page}} </td> --}}
                          <td> {{$livre->livre_prix_version_num}} </td>
                          <td> {{$livre->livre_prix_version_pap}} </td>
                          {{-- <td> {{$livre->livre_prix_promo}} </td> --}}
                          <td> {{$livre->livre_date_sortie}} </td>
                          <td>
                            <div class="avatar avatar-md">
                                <img src="/Imagelivre/{{$livre->livre_image}}" alt="..." class="avatar-img rounded-circle">
                              </div>
                              {{-- {{$livre->livre_image}} --}}
                            </td>
                          <td>
                               <a href="http://fichierlivre/{{$livre->livre_fichier}}" target="_blank" rel="noopener noreferrer">
                               <div class="avatar avatar-md">
                                    <img src="./assets/avatars/fichier.jpg" alt="..." class="avatar-img rounded-circle">
                                </div>
                               </a> 
                               
        
                          </td>
                          <td>
                            @if($livre->livre_status == 1)
                               <div class="custom-control custom-switch">
                                   <button class="btn btn-primary" onclick="editLivreStatus({{$livre->id}})"><i class='fe fe-check'></i></button>
                               {{-- <a href=" {{route('admin.categorie_status_update',$categorie->id)}}" class="btn btn-primary" > --}}


                               {{-- </a> --}}
                               </div>
                            @else
                               <div class="custom-control custom-switch">
                               {{-- <a href=" {{route('admin.categorie_status_update',$categorie->id)}}" class="btn btn-danger"> --}}
                               <button class="btn btn-danger" onclick="editLivreStatus({{$livre->id}})"><i class='fe fe-power'></i></button>

                                       {{-- <label>Désactivé</label> --}}
                                   {{-- </a> --}}
                               </div>
                           @endif
                         </td>

                          <td>
                                <button class="btn btn-primary livreEdit" onclick="editLivre({{$livre->id}})">  <i class="fe fe-edit"></i></button>
                                <b></b>
                                <button class="btn btn-warning"  onclick="deleteLivre({{$livre->id}})"> <i class="fe fe-trash-2"></i></button>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- Bordered table -->
            </div> <!-- end section -->
           <!-- end section -->
          </div> <!-- .col-12 -->
        </div> <!-- .row -->
      </div>

      <!-- .container-fluid -->




      <div class="modal fade modal-notif modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="defaultModalLabel">Notifications</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="list-group list-group-flush my-n3">
                <div class="list-group-item bg-transparent">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <span class="fe fe-box fe-24"></span>
                    </div>
                    <div class="col">
                      <small><strong>Package has uploaded successfull</strong></small>
                      <div class="my-0 text-muted small">Package is zipped and uploaded</div>
                      <small class="badge badge-pill badge-light text-muted">1m ago</small>
                    </div>
                  </div>
                </div>
                <div class="list-group-item bg-transparent">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <span class="fe fe-download fe-24"></span>
                    </div>
                    <div class="col">
                      <small><strong>Widgets are updated successfull</strong></small>
                      <div class="my-0 text-muted small">Just create new layout Index, form, table</div>
                      <small class="badge badge-pill badge-light text-muted">2m ago</small>
                    </div>
                  </div>
                </div>
                <div class="list-group-item bg-transparent">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <span class="fe fe-inbox fe-24"></span>
                    </div>
                    <div class="col">
                      <small><strong>Notifications have been sent</strong></small>
                      <div class="my-0 text-muted small">Fusce dapibus, tellus ac cursus commodo</div>
                      <small class="badge badge-pill badge-light text-muted">30m ago</small>
                    </div>
                  </div> <!-- / .row -->
                </div>
                <div class="list-group-item bg-transparent">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <span class="fe fe-link fe-24"></span>
                    </div>
                    <div class="col">
                      <small><strong>Link was attached to menu</strong></small>
                      <div class="my-0 text-muted small">New layout has been attached to the menu</div>
                      <small class="badge badge-pill badge-light text-muted">1h ago</small>
                    </div>
                  </div>
                </div> <!-- / .row -->
              </div> <!-- / .list-group -->
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Clear All</button>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade modal-shortcut modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="defaultModalLabel">Shortcuts</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body px-5">
              <div class="row align-items-center">
                <div class="col-6 text-center">
                  <div class="squircle bg-success justify-content-center">
                    <i class="fe fe-cpu fe-32 align-self-center text-white"></i>
                  </div>
                  <p>Control area</p>
                </div>
                <div class="col-6 text-center">
                  <div class="squircle bg-primary justify-content-center">
                    <i class="fe fe-activity fe-32 align-self-center text-white"></i>
                  </div>
                  <p>Activity</p>
                </div>
              </div>
              <div class="row align-items-center">
                <div class="col-6 text-center">
                  <div class="squircle bg-primary justify-content-center">
                    <i class="fe fe-droplet fe-32 align-self-center text-white"></i>
                  </div>
                  <p>Droplet</p>
                </div>
                <div class="col-6 text-center">
                  <div class="squircle bg-primary justify-content-center">
                    <i class="fe fe-upload-cloud fe-32 align-self-center text-white"></i>
                  </div>
                  <p>Upload</p>
                </div>
              </div>
              <div class="row align-items-center">
                <div class="col-6 text-center">
                  <div class="squircle bg-primary justify-content-center">
                    <i class="fe fe-users fe-32 align-self-center text-white"></i>
                  </div>
                  <p>Users</p>
                </div>
                <div class="col-6 text-center">
                  <div class="squircle bg-primary justify-content-center">
                    <i class="fe fe-settings fe-32 align-self-center text-white"></i>
                  </div>
                  <p>Settings</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>




     <!-- Modification modal -->
     <div class="modal fade" id="livreEdit" tabindex="-1" role="dialog" aria-labelledby="varyModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="varyModalLabel">Edite Livre</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form id="livreEditForm"  class="forms-sample" action="" enctype="multipart/form-data">
                @csrf
                 @method('PUT')
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Nom</label>
                  <input id="ename" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="nom categorie">
                </div>
                <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Auteur</label>
                    <input id="eauteur" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="nom categorie">
                  </div>
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Prix_numerique</label>
                    <input id="eprix_num" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="nom categorie">
                  </div>
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Prix_papier</label>
                    <input id="eprix_pap" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="nom categorie">
                  </div>
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Prix promo</label>
                    <input id="eprix_promo" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="nom categorie">
                  </div>
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">nombre de page</label>
                    <input id="enbrpage" type="number" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="nom categorie">
                  </div>
                  <div class="form-group">
                    <label for="date-input1">Date de Sortie</label>
                    <div class="input-group">
                      <input type="date" id="edate_sortie" aria-describedby="button-addon2" name="date_sortie"class="form-control @error('name') is-invalid @enderror"value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="nom categorie">
                      <div class="input-group-append">
                        <div class="input-group-text" id="button-addon-date"><span class="fe fe-calendar fe-16 mx-2"></span></div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                      <label for="role">categories</label>
                        <select class="custom-select" id="custom-select" name='categorie'>
                            <option selected id="ecategorie"></option>
                            @foreach($categories as $categorie)
                            <option value="{{$categorie->id}}">{{$categorie->categorie_name}}</option>
                            @endforeach
                            
                        </select>
                    </div>
                  {{-- <div class="form-group mb-3">
                    <label for="validationTextarea1">description</label>
                    <textarea class="form-control" id="edescription" placeholder="Take a note here" required="" rows="3" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus placeholder="description" ></textarea>
                    <div class="invalid-feedback"> Please enter a message in the textarea. </div>
                  </div> --}}
                  <div class="row mb-4">
                    <div class="col-md-12">
                      <div class="card shadow">
                        <div class="card-body">
                          <h5 class="card-title">description</h5>
                          <p></p>
                          <!-- Create the editor container -->
                          <div style="min-height:100px;">
                            <textarea  id="summary-ckeditor" placeholder="Take a note here" required="" rows="3" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" autofocus placeholder="description" ></textarea>
                          </div>
                          <div class="invalid-feedback"> Please enter a message in the textarea. </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Image</label>
                    <input id="eimage" type="file" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="nom categorie">
                  </div>
                  <div class="form-group">
                    <label for="recipient-name" class="col-form-label">Fichier</label>
                    <input id="efichier" type="file" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="nom categorie">
                  </div>
                <input hidden id="euser_id" type="number" class="form-control @error('name') is-invalid @enderror" name="user_id" value="{{ Auth::user()->id }}" required autofocus>
                <div class="modal-footer">
                    <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn mb-2 btn-primary">Modifier</button>
                  </div>
              </form>
            </div>

          </div>
        </div>
      </div>





    </main> <!-- main -->
  </div>

@endsection

@push('livre_status')

<script>


        function editLivreStatus(id){
           //var table = $('#datatable').DataTable();
            $.get('livreOne/'+id, function(livre){
                $("#id").val(livre.id);
                $.ajax({
                    url:"{{route("admin.livre_status_update", "id")}}",
                    type:'GET',
                    data:{
                        id:id,
                    },
                    success:function(response)
                    {
                        $('#id'+response.id+'td:nth-child(1)').text(response.name);
                        toastr.success(response.msg);
                        location.reload();
                    }

                });
            })
        }


        function editLivre(id){
           //var table = $('#datatable').DataTable();
            $.get('livreOne/'+id, function(livre){
                $("#id").val(livre.id);
                $("#ename").val(livre.livre_nom);
                $("#eauteur").val(livre.livre_auteur);
                $("#eprix_num").val(livre.livre_prix_version_num);
                $("#eprix_pap").val(livre.livre_prix_version_pap);
                $("#eprix_promo").val(livre.livre_prix_promo);
                $("#enbrpage").val(livre.livre_nb_page);
                $("#edate_sortie").val(livre.livre_date_sortie);
                $("selected").val(livre.livre_auteur);
                $('#summary-ckeditor').val(livre.livre_description);
                $("#livreEdit").modal('toggle');
            })
            $("#livreEditForm").submit(function(e){
                e.preventDefault();
                let user_id =$('#user_id').val();
                let name = $('#ename').val();
                let auteur = $('#eauteur').val();
                let prix_numerique = $('#eprix_num').val();
                let prix_papier = $('#prix_pap').val();
                let prix_promo = $('#eprix_promo').val();
                let nombre_page = $('#enbrpage').val();
                let date_sortie = $('#edate_sortie').val();
                let image = $('#eimage').val();
                let fichier = $('#efichier').val();
                let description = $('#edescription').val();
                let _token= $("input[name=_token]").val();

                $.ajax({
                    url:"{{route("admin.livreUpdate")}}",
                    type:'PUT',
                    data:{
                        id:id,
                        name:name,
                        auteur:auteur,
                        prix_numerique:prix_numerique,
                        prix_papier:prix_papier,
                        prix_numerique:prix_numerique,
                        prix_promo:prix_promo,
                        nombre_page:nombre_page,
                        date_sortie:date_sortie,
                        image:image,
                        fichier:fichier,
                        description:description,
                        //user_id:1,
                        _token:_token,
                    },
                    success:function(response)
                    {
                        location.reload();
                        $('#id'+response.id+'td:nth-child(1)').text(response.name);
                        toastr.success(response.msg);

                        $("#livreEditForm")[0].reset();
                        $("#livreEdit").modal('toggle');
                    }

                });

            });
        }

        function deleteLivre(id){

$.get('livreOne/'+id, function(livre){
    let id = livre.id;
    let livre_name = livre.livre_nom;
    let url = '<?= route("admin.livreDelete") ?>';
    // let _token= $("input[name=_token]").val();

    swal.fire({
        title:'Etes vous sur?',
        html: 'vous etes sur le point de <b>Supprimer</b> la categorie: <b>'+livre_name+'</b>',
        showCancelButton:true,
        showCloseButton:true,
        cancelButtonText:'Annulez',
        confirmButtonText:'Oui,validez',
        cancelButtonColor: '#28a745',
        confirmButtonColor: '#007bff',
        width:300,
        allowOutSideClick:false,
    }).then(function(result){
        if(result.value){
            $.post(url,{id:id}, function(data){
                if(data.code == 1){
                    // $('#categtable').DataTable().ajax.reload(null,false);
                    toastr.success(data.msg);
                    location.reload();
                }else{
                    toastr.error(data.msg);
                }
            },'json');
        }
    });

});

}
</script>

@endpush



