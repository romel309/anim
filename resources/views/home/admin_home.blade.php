@extends('layouts.admin_body')
@section('admin_content')
      <div class="row">
         <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
               <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                     <i class="material-icons">person</i>
                  </div>
                  <p class="card-category">Total users</p>
                  <h3 class="card-title">{{$users}}</h3>
               </div>
               <div class="card-footer">
                  <div class="stats">
                     <i class="material-icons">person</i>
                     <a href="{{route('admin_user.index')}}">Check all</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
               <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">content_paste</i>
                  </div>
                  <p class="card-category">Entertainments</p>
                  <h3 class="card-title">{{$entertainments}}</h3>
               </div>
               <div class="card-footer">
                  <div class="stats">
                     <i class="material-icons">content_paste</i>
                     <a href="{{route('admin_entertainment.index')}}">Check all</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
               <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">library_books</i>
                  </div>
                  <p class="card-category">Lists</p>
                  <h3 class="card-title">{{$catalogs}}</h3>
               </div>
               <div class="card-footer">
                  <div class="stats">
                     <i class="material-icons">library_books</i>
                     <a href="{{route('admin_catalog.index')}}">Check all</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
               <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">local_offer</i>
                  </div>
                  <p class="card-category">Tags</p>
                  <h3 class="card-title">{{$tags}}</h3>
               </div>
               <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">local_offer</i>
                    <a href="{{route('admin_catalog.index')}}">Check all</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-12 col-md-12">
            <div class="card">
               <div class="card-header card-header-warning">
                  <h4 class="card-title">Functionalities Admin</h4>
                  <p class="card-category">23/12/2019</p>
               </div>
               <div class="card-body table-responsive">
                  <table class="table table-hover">
                     <thead class="text-warning">
                        <th>Functionality</th>
                        <th>Notes</th>
                     </thead>
                     <tbody>
                       <tr>
                          <td>Dashboard</td>
                          <td>No esta implementado el search.</td>
                       </tr>
                        <tr>
                           <td>CRUD Users</td>
                           <td>Espero en el futuro hacer roles y privilegios pero por el momento todos son admin.</td>
                        </tr>
                        <tr>
                          <td>CRUD Listas</td>
                          <td>Algo super austero pero funciona. Primero se crea la lista y despues eliges el orden de los entretenimientos</td>
                        </tr>
                        <tr>
                          <td>CRUD Entertainment</td>
                          <td>Se cargan todos los tags en la forma y en un futuro si hay muchos tags va a morir el crud.</td>
                        </tr>
                        <tr>
                          <td>CRUD Tags</td>
                          <td>Mejorar la vista de la consulta</td>
                        </tr>
                        <tr>
                           <td>CRUD Carousel</td>
                           <td>Faltaría mejorar el indice del carousel para que las fotos no se vean tan jodidas</td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
@endsection
