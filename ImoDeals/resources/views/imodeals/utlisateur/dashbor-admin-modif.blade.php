@yield('form-modif-user')
@include('script')
{{-- @extends('base') --}}


<style>
    #form-modif {
        background-color: #eb8e64;
        border: solid #4e200b 1px;
        border-radius: 5px;
        font-weight: bold;
        box-shadow: 1px 2px 3px gray;
    }
</style>



<div class="container w-50  mb-5 pb-5 mt-5" id="form-modif" style="display: none;">
    <form class="row g-3" action="{{ route('register') }}" method="POST" id="form-register">
        @csrf


        <div class="col-md">
            <label for="name" class="form-label">Nom-prenom</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}"
                required autocomplete="name" autofocus>
            <small id="error-register-firstname" class="text-danger fw-bold"></small>
        </div>

        <div class="col-md-12">
            <label for="email" class="form-label">email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}"
                required autocomplete="email" autofocus>
            <small id="error-register-email" class="text-danger fw-bold"></small>

        </div>
        <div class="col-md-8 ">
            <div class="row">
                <label for="permission" class="form-label">Permission</label>
            <div class="col-4 form-check form-switch">
                <label class="" for="flexSwitchCheckDefault">Ajouter</label>
                <input class="form-check-input m-0 color-dark" type="checkbox" role="switch" id="flexSwitchCheckDefault">
              </div>
              <div class="col-4 form-check form-switch">
                <label class="" for="flexSwitchCheckDefault">Supprimer</label>
                <input class="form-check-input m-0 color-dark" type="checkbox" role="switch" id="flexSwitchCheckDefault">
              </div>
              <div class="col-4 form-check form-switch">
                <label class="" for="flexSwitchCheckDefault">Modifier</label>
                <input class="form-check-input m-0 color-dark" type="checkbox" role="switch" id="flexSwitchCheckDefault">
              </div>
            <small id="error-register-permission" class="text-danger fw-bold"></small>
            </div>
        </div>
        <div class="col-md-4">
            <label for="role" class="form-label">Role</label><br>
            <select class="form-control text-center" id="role">
                <option value="admin">ADMIN</option>
                <option value="commerciale">COMMERCIALE</option>
                <option value="sva">SVA</option>
                <option value="call center">CALL CENTER</option>
                <option value="responssable">RESPONSSABLE</option>
            </select>
            {{-- <input type="text" name="role" id="role" class="form-control" value="{{ old('role') }}" --}}
                {{-- required autocomplete="role" autofocus> --}}
            <small id="error-register-role" class="text-danger fw-bold"></small>
        </div>
        <div class="col">
            <div class="btn w-50 fw-bold btn-success">Modifier</div>
        </div>

    </form>
</div>
