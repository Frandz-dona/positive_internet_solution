@extends('layouts/admin.ap')
@section('title')
Positive Internet Solution | Ajout formation
@endsection


@section('content')

<div class="wrapper">
    <main role="main" class="main-content">
        <div class="col-md-12">
            <div class="card shadow mb-4">
              <div class="card-header">
                <strong class="card-title">Création formation</strong>
              </div>
              <div class="card-body">
                <form class="needs-validation" novalidate  method="POST" class="forms-sample" action=" {{route('admin.store_formation')}} " id='addformation' enctype="multipart/form-data">
                    @csrf

                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label for="validationCustom3">Titre formation</label>
                      <input id="titre_fromation" type="text" class="form-control @error('titre_fromation') is-invalid @enderror" name="titre_fromation" value="{{ old('titre_fromation') }}" required autocomplete="titre_fromation" autofocus>
                      <div class="valid-feedback"> valide </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="validationCustom4">Auteur</label>
                      <input id="auteur_formation" type="text" class="form-control @error('auteur_formation') is-invalid @enderror" name="auteur_formation" value="{{ old('auteur_formation') }}" required autocomplete="auteur_formation" autofocus>
                      <div class="valid-feedback"> valide! </div>
                    </div>
                    
                  </div> <!-- /.form-row -->
                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label for="example-time">Lien</label>
                      <input id="reference_formation" type="float" class="form-control @error('reference_formation') is-invalid @enderror" name="reference_formation" value="{{ old('reference_formation') }}" autocomplete="reference_formation" autofocus>
                      <div class="valid-feedback"> valide! </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="validationCustom4">Contenu</label>
                      <input id="contenu_details_formation" type="text" class="form-control @error('auteur_formation') is-invalid @enderror" name="contenu_details_formation" value="{{ old('contenu_details_formation') }}" required autocomplete="contenu_details_formation" autofocus>
                      <div class="valid-feedback"> valide! </div>
                    </div>
            
                    <div class="col-md-6 mb-3">
                        <label for="example-time">Prix formation</label>
                        <input id="prix_formation" type="float" class="form-control @error('prix_papier') is-invalid @enderror" name="prix_formation" value="{{ old('prix_formation') }}" autocomplete="prix_formation" autofocus placeholder="prix_formation">
                        <div class="valid-feedback"> valide! </div>
                    </div>
                  </div>
                  <div class="form-row mb-3">
                    <div class="col-md-3 mb-3">
                      <label for="date-input1">Date de debut</label>
                      <div class="input-group">
                        <input type="date" class="form-control" id="date_debut_formation" aria-describedby="button-addon2" name="date_debut_formation">
                        <div class="input-group-append">
                          <div class="input-group-text" id="button-addon-date"><span class="fe fe-calendar fe-16 mx-2"></span></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 mb-3">
                      <label for="date-input1">Date de fin</label>
                      <div class="input-group">
                        <input type="date" class="form-control" id="date_fin_formation" aria-describedby="button-addon2" name="date_fin_formation">
                        <div class="input-group-append">
                          <div class="input-group-text" id="button-addon-date"><span class="fe fe-calendar fe-16 mx-2"></span></div>
                        </div>
                      </div>
                    </div>


                    <div class="form-group mb-3">
                        <label for="customFile">Photo couverture</label>
                        <div class="custom-file">
                          <input id="photo_couverture_formation" type="file" class="custom-file-input @error('photo_couverture_formation') is-invalid @enderror" name="photo_couverture_formation"  autofocus placeholder="photo_couverture_formation">
                          <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                     
                  </div>
                  
                  
                  <div class="form-group mb-3">
                    <label>description</label>
                    <textarea cols="80" class="form-control" id="summary-ckeditor" name="description_formation" rows="10"></textarea>
                  </div> 

                  

                  <button class="btn btn-primary" type="submit">Validez</button>
                </form>
              </div> <!-- /.card-body -->
            </div> <!-- /.card -->
          </div>

    </main> <!-- main -->
</div>


@endsection

@push('formation')

<script>
     
    toastr.options.preventDuplicates = true;
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN':$('meta[name="crfs-token"]').attr('content')
            }
        });
        $(function(){
            //add formation
            $("#addformation").on('submit', function(e){
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



</script>
@endpush