@extends('base')


@section('title', "Dashbord")

@section('contenu')
<style>
    .dash-bord-title h1{
        color: #20c997;
    }

    .dash-bord-title h3{
        color: #f5611d;
        font-weight: bold;
    }

    .bande-dash-bord{
        height: 15px;
        background-color: #f5611d;
    }
    .block-stat{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        /* margin-top: 10%; */
    }

    .stat{
        /* height: 20vh; */
        padding-top: 3%;
        color: rgb(95, 218, 140);
        font-size: 70px;
        font-weight: bold;
        width: 20%;
        text-shadow: 1px 1px 1px rgb(69, 68, 68);

    }


    .stat-desc{

        font-size: 30px;
        color: rgb(66, 63, 63);
        text-shadow: 0 0 0  #000000;

    }

    .bouton-admin{
        height: 50px;
        font-weight: bold;
        box-shadow: 1px 2px 2px black;
    }
    .bouton-admin:hover{

        box-shadow: 3px 1px 3px 2px rgb(73, 108, 83);
    }

    .bouton-op{
        box-shadow: 1px 2px 2px black;
    }

</style>
    {{-- @auth --}}
    <div class="container-sm">
        <div class="row text-center dash-bord-title mt-3">
            <h1> DASHBORD </h1>
            <h3>ADMIN</h3>
        </div>
        <div class=" bande-dash-bord">

        </div>
        <hr>
        <div class="container text-center">
            <table class="table" id="tab-data">
                <thead>
                    <th>ID</th>
                    <th>Nom-Prenom</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Permission</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    {{-- {{ $i = 0 }} --}}
                    <tr  >
                        <td > {{ $user->id }}</td>
                        <td class="form" id="nom-{{ $user->id }}" >   {{ $user->name }}</td>
                        <td id="email-{{ $user->id }}" >  {{ $user->email }}</td>
                        <td id="role-{{ $user->id }}"  > {{ optional($user->roles)->nom }}</td>
                        <td id="permission-{{ $user->id }}" >
                            @if (optional($user->roles)->permissions != null)
                                @foreach ( $user->roles->permissions as $permission)
                                    {{ $permission->nom_affiche }},
                                @endforeach
                            @endif
                        </td>
                        <td>
                            {{-- <div class=""> --}}
                                <button id="{{ $user->id }}" onclick="modifier('{{ $user->id }}')" class="bouton-op btn btn-success" id="modifier" >Modifier</button>
                                <button class="bouton-op btn btn-danger" id="supprimer" >Supprimer</button>
                            {{-- </div> --}}
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>

        @include('imodeals.utlisateur.dashbor-admin-modif')


            {{-- @section('imodeals.utlisateur.dashbord-admin') --}}
            {{-- @section() --}}
            {{-- bouton pour ajouter un utilisateur --}}
            <div class="container " id="role-admin">
                {{-- {{ $users->links() }} --}}
                <div class="container-xl  w-50">
                    <div class="row ">
                        <div class="col-6">
                            <button class="bouton-admin btn btn-success " id="add-user" onclick="ajouter(id)">Ajouter un utilisateur</button>

                        </div>
                        <div class="col-6">
                            <button class="bouton-admin btn btn-success " onclick="addRole_addPermission(id)">Attribuer un role</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block-stat"  id="block-stat">
                <div class=" stat ">
                    <p>10 <br>
                        <p class="stat-desc">Bien</p>
                    </p>


                </div>
                <div class="stat">

                    <p >20 <br>
                    <p class="stat-desc">Clients</p>

                    </p>

                </div>
                <div class="stat">
                    <p>
                        30 <br>
                        <p class="stat-desc">Utilisateur</p>
                    </p>
                </div>
            </div>
        </div>
    </div>
    {{-- @endauth --}}
@endsection





