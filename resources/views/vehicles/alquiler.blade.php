@extends('layouts.app')
@section('content')
<p>Alquiler de vehículo</p>
<div class="buscador">
    Aquí va el buscador de vehículos
    {{-- Fecha inicio|Fecha fin|ubicación|buscar--}}
</div>
<div class="flex">
    <div class="w-20 flex-initial bg-red-500 text-center font-sans border-8 p-8 text-[20px]">
        Filtros
        {{--Precio
        Tipo
        Autonomía
        Marca
        --}}
    </div>
    <div class="w-80 flex-initial bg-blue-500 text-center font-sans border-8 p-8 text-[20px]">
        Listado de vehículos
        {{--
        img
        precio día
        Autonomía km
        Botón reservar-enlaza a la vista 'detailAlquiler'
        --}}
    </div>
        <div class="vehiculo">
            {{-- for-else de cada vehículo mostrado --}}
        </div>
    </div>
</div>
<div class="paginacion"></div>
@endsection
