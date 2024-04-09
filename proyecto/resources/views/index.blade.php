@extends('layouts.base')
@section('content')
    <div class="container" class=" col-xs-12">
                                <h1><img src="img/ISOTIPO-BDV.png" width="55px" height="55px"> ARQFUN </h1>
                                <hr>
                                <input type="text"  class=" col-xs-12" id="usuario" name="usuario" class="form-control input-lg" placeholder="NM / CT " autocomplete="off"><br>
                                <input type="password"   class=" col-xs-12" id="clave" name="clave" class="form-control input-lg" placeholder="Contraseña" autocomplete="off"><br>
                                <button type="submit" > Ingresar</button>
                                
                            </form>
    </div>
@endsection