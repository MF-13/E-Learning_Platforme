        <div class="form-group">
            <label for="nom_user" class="col-form-label">nom</label>
            <input type="text" name="nom_user" id="nom_user" class="form-control" value="{{ old('nom_user', $user->nom_user ?? null  ) }}">
        </div>
        <div class="form-group">
            <label for="prenom_user" class="col-form-label">prenom</label>
            <input type="text" name="prenom_user" id="prenom_user" class="form-control" value="{{ old('prenom_user', $user->prenom_user ?? null  ) }}">
        </div>
        <div class="form-group">
            <label for="date_naiss_user" class="col-form-label">date naissance</label>
            <input type="text" name="date_naiss_user" id="date_naiss_user" class="form-control" value="{{ old('date_naiss_user', $user->date_naiss_user ?? null  ) }}">
        </div>
        <div class="form-group">
            <label for="num_tele_user" class="col-form-label">num telephone</label>
            <input type="text" name="num_tele_user" id="num_tele_user" class="form-control" value="{{ old('num_tele_user', $user->num_tele_user ?? null  ) }}">
        </div>
        <div class="form-group">
            <label for="filiere_user" class="col-form-label">filiere</label>
            <input type="text" name="filiere_user" id="filiere_user" class="form-control" value="{{ old('filiere_user', $user->filiere_user ?? null  ) }}">
        </div>
        <div class="form-group">
            <label for="email_user" class="col-form-label">email</label>
            <input type="text" name="email_user" id="email_user" class="form-control" value="{{ old('email_user', $user->email_user ?? null  ) }}">
        </div>
        <div class="form-group">
            <label for="mdps_user" class="col-form-label">mdps</label>
            <input type="text" name="mdps_user" id="mdps_user" class="form-control" value="{{ old('mdps_user', $user->mdps_user ?? null  ) }}">
        </div>
        <div class="form-group">
            <label for="adresse_user" class="col-form-label">adresse</label>
            <input type="text" name="adresse_user" id="adresse_user" class="form-control" value="{{ old('adresse_user', $user->adresse_user ?? null  ) }}">
        </div>
        <div class="form-group">
            <label for="type_user" class="col-form-label">type</label>
            <input type="text" name="type_user" id="type_user" class="form-control" value="{{ old('type_user', $user->type_user ?? null  ) }}" disabled>
        </div>

        {{-- Pour afficher les messages d'error --}}

        @if($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

            
        
 