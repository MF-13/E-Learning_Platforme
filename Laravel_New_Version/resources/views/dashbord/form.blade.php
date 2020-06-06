<div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroup-sizing-default">Nom</span>
    </div>
    <input type="text" name="nom_user" class="form-control" value="{{ old('nom_user',  $user->nom_user ?? null  ) }}" aria-describedby="inputGroup-sizing-default">
</div>

<div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroup-sizing-default">Prenom</span>
    </div>
    <input type="text" name="prenom_user" class="form-control" value="{{ old('prenom_user',  $user->prenom_user ?? null  ) }}" aria-describedby="inputGroup-sizing-default">
</div>

<div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroup-sizing-default">Date De Naissance</span>
    </div>
    <input type="date" name="date_naiss_user" class="form-control" value="{{ old('date_naiss_user',  $user->date_naiss_user ?? null  ) }}" aria-describedby="inputGroup-sizing-default">
</div>

<div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroup-sizing-default">Numero Du Telephone ( sans 0 au debut )</span>
      <span class="input-group-text" id="inputGroup-sizing-default">+212</span>
    </div>
    <input type="text" name="num_tele_user" class="form-control" value="{{ old('num_tele_user',  $user->num_tele_user ?? null  ) }}" aria-describedby="inputGroup-sizing-default">
</div>

<div class="input-group mb-3">
    <div class="input-group-prepend">
      <label class="input-group-text" for="inputGroupSelect02">Filiére</label>
    </div>
    <select class="custom-select" name="filiere_user" id="inputGroupSelect02">
        @foreach ($fields as $field)
        <option value="{{strtolower($field)}}">{{strtolower($field)}}</option>
      	@endforeach
    </select>
</div>

<div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
    </div>
    <input type="email" name="email" class="form-control" value="{{ old('email',  $user->email ?? null  ) }}" aria-describedby="inputGroup-sizing-default">
</div>

<div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroup-sizing-default">Mot De Passe</span>
    </div>
    <input type="password" name="password" class="form-control" value="{{ old('password',  $user->password ?? null  ) }}" aria-describedby="inputGroup-sizing-default">
</div>

<div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroup-sizing-default">Adresse</span>
    </div>
    <input type="text" name="adresse_user" class="form-control" value="{{ old('adresse_user',  $user->adresse_user ?? null  ) }}" aria-describedby="inputGroup-sizing-default">
</div>

    {{-- <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroup-sizing-default">Type De L'utilisateur</span>
        </div>
        <input type="text" name="type_user" class="form-control" value="{{ old('type_user',  $user->type_user ?? null  ) }}" aria-describedby="inputGroup-sizing-default">
    </div> --}}

    <div class="input-group mb-3">
        <div class="input-group-prepend">
          <label class="input-group-text" for="inputGroupSelect01">Type de l'utilisateur</label>
        </div>
        <select class="custom-select" name="type_user" id="inputGroupSelect01">
          <option value="etudiant">Etudiant</option>
          <option value="professeur">Professeur</option>
        </select>
    </div>

    
