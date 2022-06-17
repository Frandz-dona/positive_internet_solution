@extends('layouts/admin.ap')
@section('title')
Positive Internet Solution | Liste Categorie
@endsection


@section('content')


<div class="wrapper">
    <main role="main" class="main-content">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-12">
            <h2 class="page-title">Liste Categorie</h2>
            <p> </p>
            <button type="button" class="btn mb-2 btn-outline-secondary" data-toggle="modal" data-target="#varyModal" data-whatever="@mdo">AJOUTER CATEGORIE</button>
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
                    <table class="table table-bordered table-hover mb-0" id='categtable'>
                      <thead>
                        <tr >
                          <th>Id</th>
                          <th>User_ajout</th>
                          <th>Nom categorie</th>
                          <th>Etat</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($categories as $categorie)
                        <tr id="$id{{$categorie->id}}">
                          <td> {{$categorie->id}} </td>
                          <td> {{$categorie->user_id}} </td>
                          <td> {{$categorie->categorie_name}} </td>
                          <td>
                             @if($categorie->categorie_status == 1)
                                <div class="custom-control custom-switch">
                                    <button class="btn btn-primary" onclick="editCategorieStatus({{$categorie->id}})"><i class='fe fe-check'></i></button>
                                {{-- <a href=" {{route('admin.categorie_status_update',$categorie->id)}}" class="btn btn-primary" > --}}


                                {{-- </a> --}}
                                </div>
                             @else
                                <div class="custom-control custom-switch">
                                {{-- <a href=" {{route('admin.categorie_status_update',$categorie->id)}}" class="btn btn-danger"> --}}
                                <button class="btn btn-danger" onclick="editCategorieStatus({{$categorie->id}})"><i class='fe fe-power'></i></button>

                                        {{-- <label>Désactivé</label> --}}
                                    {{-- </a> --}}
                                </div>
                            @endif
                          </td>
                          <td>
                                <button class="btn btn-primary categorieEdit" onclick="editCategorie({{$categorie->id}})">  <i class="fe fe-edit"></i></button>
                                <b></b>
                                <button class="btn btn-warning"  onclick="deleteCategorie({{$categorie->id}})"> <i class="fe fe-trash-2"></i></button>
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
      </div> <!-- .container-fluid -->



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


      <div class="modal fade" id="varyModal" tabindex="-1" role="dialog" aria-labelledby="varyModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="varyModalLabel">Ajout Categorie</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="POST" class="forms-sample" action=" {{route('admin.store_categorie')}} " id='addcategorie'>
                @csrf

                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Nom Categorie</label>
                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="nom categorie">
                </div>
                <input hidden id="euser_id" type="number" class="form-control @error('name') is-invalid @enderror" name="user_id" value="{{ Auth::user()->id }}" required autofocus>
                <div class="modal-footer">
                    <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn mb-2 btn-primary">Ajouter</button>
                  </div>
              </form>
            </div>

          </div>
        </div>
      </div>



<!-- Modification modal -->
      <div class="modal fade" id="categorieEdit" tabindex="-1" role="dialog" aria-labelledby="varyModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="varyModalLabel">Edite Categorie</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form id="categorieEditForm"  class="forms-sample" action="">
                @csrf
                 @method('PUT')
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Nom Categorie</label>
                  <input id="ename" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="nom categorie">
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


@push('categorie')

<script>
    toastr.options.preventDuplicates = true;
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN':$('meta[name="crfs-token"]').attr('content')
            }
        });
        $(function(){
            //add categorie
            $("#addcategorie").on('submit', function(e){
                e.preventDefault();
                var form=this;
                $.ajax({
                    url:$(form).attr('action'),
                    method:$(form).attr('method'),
                    data:new FormData(form),
                    processData:false,
                    contentType:false,
                    dataType:'json',
                    beforeSend:function(){
                        $(form).find('span.error-text').text('');
                    },
                    success:function(data){
                        if(data.code ==0){
                            $.each(data.error, function(prefix, val){
                                $(form).find('span.'+prefix+'_error').text(val[0]);
                            });
                        }else{
                            $(form)[0].reset();
                            // $('#datatable').DataTable().ajax.reload(null, false);
                            location.reload();
                            toastr.success(data.msg);
                        }
                    }

                });

            });


        });

        function editCategorie(id){
           //var table = $('#datatable').DataTable();

            $.get('categorieOne/'+id, function(categorie){
                $("#id").val(categorie.id);
                $("#ename").val(categorie.categorie_name);
                $("#categorieEdit").modal('toggle');
            })

            $("#categorieEditForm").submit(function(e){
                e.preventDefault();
                let user_id =$('#user_id').val();
                let name = $('#ename').val();
                let _token= $("input[name=_token]").val();

                $.ajax({
                    url:"{{route("admin.categorieUpdate")}}",
                    type:'PUT',
                    data:{
                        id:id,
                        name:name,
                        //user_id:1,
                        _token:_token,
                    },
                    success:function(response)
                    {
                        location.reload();
                        $('#id'+response.id+'td:nth-child(1)').text(response.name);
                        toastr.success(response.msg);

                        $("#categorieEditForm")[0].reset();
                        $("#categorieEdit").modal('toggle');
                    }

                });

            });
        }

        function editCategorieStatus(id){
           //var table = $('#datatable').DataTable();

            $.get('categorieOne/'+id, function(categorie){
                $("#id").val(categorie.id);
                // let satatus = val(categorie.categorie_status);

                // $("#ename").val(categorie.categorie_name);
                // $("#categorieEdit").modal('toggle');
                $.ajax({
                    url:"{{route("admin.categorie_status_update", "id")}}",
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

        function deleteCategorie(id){

            $.get('categorieOne/'+id, function(categorie){
                let id = categorie.id;
                let categorie_name = categorie.categorie_name;
                let url = '<?= route("admin.categorieDelete") ?>';
                // let _token= $("input[name=_token]").val();

                swal.fire({
                    title:'Etes vous sur?',
                    html: 'vous etes sur le point de <b>Supprimer</b> la categorie: <b>'+categorie_name+'</b>',
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
