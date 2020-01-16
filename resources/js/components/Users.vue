<template>
    <div class="container">
        <!-- /.row -->
        <div class="row  mt-5">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">User Table</h3>

                <div class="card-tools">
                    <button class="btn btn-success" data-toggle="modal" data-target="#addNew"><i class="fas fa-user-plus"></i></button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" >
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Matricule</th>
                      <th>Email</th>
                      <th>Password</th>
                      <th>Validateur</th>
                      <th>Departement</th>
                      <th>Statut</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>183</td>
                      <td>John Doe</td>
                      <td>11-7-2014</td>
                       <td>183</td>
                      <td>John Doe</td>
                      <td>11-7-2014</td>
                       <td>183</td>
                      <td>John Doe</td>
                      <td><a href="#">
                            <i class="fa fa-edit"></i>
                          </a>
                          |
                          <a href="#">
                            <i class="fa fa-trash red"></i>
                          </a>
                     </td>

                    </tr>
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->

           <!-- Modal -->
            <!-- Modal -->
        <div class="modal fade" id="addNew" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered"  role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                <div class="form-group">
                  <input v-model="form.nom" type="text" name="nom"
                    placeholder="nom"
                    class="form-control" :class="{ 'is-invalid': form.errors.has('nom') }">
                  <has-error :form="form" field="nom"></has-error>
                </div>

                 <div class="form-group">
                  <input v-model="form.matricule" type="text" name="matricule"
                    placeholder="matricule"
                    class="form-control" :class="{ 'is-invalid': form.errors.has('matricule') }">
                  <has-error :form="form" field="matricule"></has-error>
                </div>

                <div class="form-group">
                  <input v-model="form.email" type="email" name="email"
                    placeholder="Email"
                    class="form-control" :class="{ 'is-invalid': form.errors.has('Email') }">
                  <has-error :form="form" field="Email"></has-error>
                </div>

                <div class="form-group">
                  <input v-model="form.password" type="password" name="password"
                    placeholder="password"
                    class="form-control" :class="{ 'is-invalid': form.errors.has('password') }">
                  <has-error :form="form" field="password"></has-error>
                </div>

                <div class="form-group">
                  <select v-model="form.profil" type="text" name="profil"
                    placeholder="profil"
                    class="form-control" :class="{ 'is-invalid': form.errors.has('profil') }">
                    <option  value="">Select Profil</option>
                   <option  v-for="item in profils">{{ item }}</option>  
                    </select>
                  <has-error :form="form" field="profil"></has-error>
                </div>

                <div class="form-group">
                  <input v-model="form.matricule_validateur" type="text" name="matricule_validateur"
                    placeholder="matricule_validateur"
                    class="form-control" :class="{ 'is-invalid': form.errors.has('matricule_validateur') }">
                  <has-error :form="form" field="matricule_validateur"></has-error>
                </div>

                <div class="form-group">
                  <select v-model="form.pays" type="text" name="pays"
                    placeholder="pays"
                    class="form-control" :class="{ 'is-invalid': form.errors.has('pays') }">
                     <option  value="">Select Pays</option>
                    <option  v-for="item in country">{{ item }}</option>
                    </select>
                  <has-error :form="form" field="pays"></has-error>
               </div>

               <div class="form-group">
                  <select v-model="form.departement" type="text" name="departement"
                    placeholder="departement"
                    class="form-control" :class="{ 'is-invalid': form.errors.has('departement') }">
                    <option  value="">Select Departement</option>
                   <option  v-for="item in depart">{{ item }}</option>  
                    </select>
                  <has-error :form="form" field="departement"></has-error>
                </div>


                <div class="form-group">
                  <select v-model="form.statut" type="text" name="statut"
                    placeholder="statut"
                    class="form-control" :class="{ 'is-invalid': form.errors.has('statut') }">
                    <option  value="">Select Statut</option>
                    <option  value="1">Actif</option>
                    <option  value="0">Inactif</option>
                    </select>
                  <has-error :form="form" field="statut"></has-error>
                </div>
            </div>

           
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                <button type="button" class="btn btn-success">Creer</button>
            </div>
            </div>
        </div>
        </div>
    </div>

</template>
                  
<script>
import  Form from 'vform'


  export default{ 
  data () {
    return {
      // Create a new form instance
      form: new Form({
                  nom : '', 
                  matricule : '',
                  email : '',
                  password : '',
                  profil : '',
                  matricule_validateur : '',
                  departement : '', 
                  pays : '',
                  statut : '',
      }),

      country : [
        'Senegal',
        'Mali',
        "Cote d'Ivoire",
        'Niger',
        'Cameroun',
        'Guinée Bissau',
        'Guinée Conacry',
        'Gambie'
      ],

      depart : [
        'informatique',
        'commercial',
        'achat',
        'technique'
      ],
      profils : [
        'daf',
        'conBudgetaire',
        'demandeur',
        'chef de service'
      ]

    }
  },

  mounted() {
            console.log('Component mounted.')
        }
}
</script>



    