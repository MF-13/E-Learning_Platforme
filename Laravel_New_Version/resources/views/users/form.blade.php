        <div class="form-group">
            <label for="nom_user" class="col-form-label">Nom</label>
            <input type="text" name="nom_user" id="nom_user" class="form-control" value="{{ old('nom_user',  $user->nom_user ?? null  ) }}">
        </div>
        <div class="form-group">
            <label for="prenom_user" class="col-form-label">Prenom</label>
            <input type="text" name="prenom_user" id="prenom_user" class="form-control" value="{{ old('prenom_user',  $user->prenom_user ?? null  ) }}">
        </div>
        <div class="form-group">
            <label for="date_naiss_user" class="col-form-label">Date De Naissance</label>
            <input type="text" name="date_naiss_user" id="date_naiss_user" class="form-control" value="{{ old('date_naiss_user',  $user->date_naiss_user ?? null  ) }}">
        </div>
        <div class="form-group">
            <label for="num_tele_user" class="col-form-label">Numero Du Telephone</label>
            <input type="text" name="num_tele_user" id="num_tele_user" class="form-control" value="{{ old('num_tele_user',  $user->num_tele_user ?? null  ) }}">
        </div>
        <div class="form-group" hidden>
            <label for="filiere_user" class="col-form-label">Filiére</label>
            <input type="text" name="filiere_user" id="filiere_user" class="form-control" value="{{ old('filiere_user',  $user->filiere_user ?? null  ) }}">
        </div>
        <div class="form-group">
            <label for="email" class="col-form-label">Email</label>
            <input type="text" name="email" id="email" class="form-control" value="{{ old('email',  $user->email ?? null  ) }}">
        </div>
        <div class="form-group">
            <label for="password" class="col-form-label">Mot De Passe</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Entrez le nouveau Mot de passe (sinon votre mdps ) ">
        </div>
        <div class="form-group">
            <label for="adresse_user" class="col-form-label">Adresse</label>
            <input type="text" name="adresse_user" id="adresse_user" class="form-control" value="{{ old('adresse_user',  $user->adresse_user ?? null  ) }}">
        </div>
        <div class="form-group" hidden>
            <input type="text" name="type_user" id="type_user" class="form-control" value="{{ old('type_user',  $user->type_user ?? null ) }}" >
        </div>

        
 