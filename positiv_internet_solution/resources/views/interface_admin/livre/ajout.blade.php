@extends('layouts/admin.ap')
@section('title')
Positive Internet Solution | Ajout Livre
@endsection


@section('content')

<div class="wrapper">
    <main role="main" class="main-content">
        <div class="col-md-12">
            <div class="card shadow mb-4">
              <div class="card-header">
                <strong class="card-title">Création Livre</strong>
              </div>
              <div class="card-body">


                <form class="needs-validation" novalidate  method="POST" class="forms-sample" action=" {{route('admin.store_livre')}} " id='addlivre' enctype="multipart/form-data">
                    @csrf

                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label for="validationCustom3">Nom</label>
                      <input id="nom" type="text" class="form-control @error('livre_nom') is-invalid @enderror" name="livre_nom" value="{{ old('livre_nom') }}" required autocomplete="livre_nom" autofocus placeholder="nom du livre">
                      <div class="valid-feedback"> valide </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <label for="validationCustom4">Auteur</label>
                      <input id="auteur" type="text" class="form-control @error('auteur') is-invalid @enderror" name="auteur" value="{{ old('auteur') }}" required autocomplete="auteur" autofocus placeholder="auteur">
                      <div class="valid-feedback"> valide! </div>
                    </div>
                  </div> <!-- /.form-row -->
                  <div class="form-row">
                    <div class="col-md-3 mb-3">
                        <label for="exampl">Nombre de Page</label>
                        <input id="nbp" type="number" class="form-control @error('nbp') is-invalid @enderror" name="nbp" value="{{ old('nbp') }}" required autocomplete="nbp" autofocus placeholder="nombre de page">
                        <div class="valid-feedback"> valide! </div>
                    </div>
                    <!-- <div class="col-md-4 mb-3">
                      <label for="custom-phone">Telephone</label>
                      <input class="form-control" type="telephone" name="telephone" value="{{ old('nbp') }}" id="custom-phone" maxlength="14" required>
                      <div class="invalid-feedback"> Please enter a correct phone </div>
                    </div> -->
                    <div class="col-md-3 mb-3">
                      <label for="example-time">Prix Numerique</label>
                      <input id="prix_numerique" type="float" class="form-control @error('prix_numerique') is-invalid @enderror" name="prix_numerique" value="{{ old('prix_numerique') }}" autocomplete="prix_numerique" autofocus placeholder="prix_numerique">
                      <div class="valid-feedback"> valide! </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="example-time">Prix Papier</label>
                        <input id="prix_papier" type="float" class="form-control @error('prix_papier') is-invalid @enderror" name="prix_papier" value="{{ old('prix_papier') }}" autocomplete="prix_papier" autofocus placeholder="prix_papier">
                        <div class="valid-feedback"> valide! </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="example-time">Prix Promo</label>
                        <input id="prix_promo" type="float" class="form-control @error('prix_promo') is-invalid @enderror" name="prix_promo" value="{{ old('prix_promo') }}"  autocomplete="prix_promo" autofocus placeholder="prix_promo">
                        <div class="valid-feedback"> valide! </div>
                    </div>
                    <div class="col-md-3 mb-3">
                    
                      <label for="role">categories</label>
                        <select class="custom-select" id="custom-select" name='categorie'>
                            <option selected>selectionner une categorie</option>
                            @foreach($categories as $categorie)
                            <option value="{{$categorie->id}}">{{$categorie->categorie_name}}</option>
                            @endforeach
                            
                        </select>
                    </div>
                  </div>
                  <div class="form-row mb-3">
                    <div class="col-md-3 mb-3">
                      <label for="date-input1">Date de Sortie</label>
                      <div class="input-group">
                        <input type="date" class="form-control" id="date-sortie" aria-describedby="button-addon2" name="date_sortie">
                        <div class="input-group-append">
                          <div class="input-group-text" id="button-addon-date"><span class="fe fe-calendar fe-16 mx-2"></span></div>
                        </div>
                      </div>
                    </div>


                    <div class="form-group mb-3">
                        <label for="customFile">Image</label>
                        <div class="custom-file">
                          <input id="image_principale" type="file" class="custom-file-input @error('image_principale') is-invalid @enderror" name="image_principale" autocomplete="image_principale" autofocus placeholder="image_principale">
                          <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>
                      <div class="form-group mb-3">
                        <label for="customFile">Fichier</label>
                        <div class="custom-file">
                          <input id="fichier" type="file" class="custom-file-input @error('image_principale') is-invalid @enderror" name="fichier_livre" autocomplete="fichier_livre" autofocus placeholder="fichier_livre">
                          <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                      </div>
                  </div>

                  <div class="form-group mb-3">
                    <label for="validationTextarea1">description</label>
                    <textarea cols="80" class="ckeditor form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" id="editeur" rows="10"></textarea>
                    <div class="invalid-feedback"> Please enter a message in the textarea. </div>
                  </div> 

                  

                  <button class="btn btn-primary" type="submit">Validez</button>
                </form>
              </div> <!-- /.card-body -->
            </div> <!-- /.card -->
          </div>

    </main> <!-- main -->
</div>


@endsection


@push('livre')

<script src="{{asset('admin/ckeditor/ckeditor.js')}}"></script>
<script>
    
    toastr.options.preventDuplicates = true;
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN':$('meta[name="crfs-token"]').attr('content')
            }
        });
        $(function(){
            //add livre
            $("#addlivre").on('submit', function(e){
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
