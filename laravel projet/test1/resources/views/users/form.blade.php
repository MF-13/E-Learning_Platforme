        <div>
            <label for="nom_user">nom</label>
            <input type="text" name="nom_user" id="nom_user"
                     value="<?php   if(isset($user->nom_user)){ echo old('nom_user',$user->nom_user);  }else{
                            echo old('nom_user') ;  }     ?>">
        </div>
        <div>
            <label for="prenom_user">prenom</label>
            <input type="text" name="prenom_user" id="prenom_user" 
                value="<?php   if(isset($user->prenom_user)){ echo old('prenom_user',$user->prenom_user);  }else{
                echo old('prenom_user') ;  }     ?>">
        </div>
        <div>
            <label for="date_naiss_user">date naissance</label>
            <input type="text" name="date_naiss_user" id="date_naiss_user" 
                value="<?php   if(isset($user->date_naiss_user)){ echo old('date_naiss_user',$user->date_naiss_user);  }else{
                echo old('date_naiss_user') ;  }     ?>">
        </div>
        <div>
            <label for="num_tele_user">num telephone</label>
            <input type="text" name="num_tele_user" id="num_tele_user" 
                    value="<?php   if(isset($user->num_tele_user)){ echo old('num_tele_user',$user->num_tele_user);  }else{
                        echo old('num_tele_user') ;  }     ?>">
        </div>
        <div>
            <label for="filiere_user">filiere</label>
            <input type="text" name="filiere_user" id="filiere_user" 
                    value="<?php   if(isset($user->filiere_user)){ echo old('filiere_user',$user->filiere_user);  }else{
                        echo old('filiere_user') ;  }     ?>">
        </div>
        <div>
            <label for="email_user">email</label>
            <input type="text" name="email_user" id="email_user" 
                    value="<?php   if(isset($user->email_user)){ echo old('email_user',$user->email_user);  }else{
                        echo old('email_user') ;  }     ?>">
        </div>
        <div>
            <label for="mdps_user">mdps</label>
            <input type="text" name="mdps_user" id="mdps_user" 
                    value="<?php   if(isset($user->mdps_user)){ echo old('mdsp_user',$user->mdps_user);  }else{
                    echo old('mdsp_user') ;  }     ?>">
        </div>
        <div>
            <label for="adresse_user">adresse</label>
            <input type="text" name="adresse_user" id="adresse_user"
                    value="<?php   if(isset($user->adresse_user)){ echo old('adresse_user',$user->adresse_user);  }else{
                    echo old('adresse_user') ;  }     ?>">
        </div>
        <div>
            <label for="type_user">type</label>
            <input type="text" name="type_user" id="type_user" 
                    value="<?php   if(isset($user->type_user)){ echo old('type_user',$user->type_user);  }else{
                        echo old('type_user') ;  }     ?>">
        </div>

        {{-- Pour afficher les messages d'error --}}

        @if($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

            
        
 