@extends('layouts.app')
@section('content')
<p>Alquiler de vehículo</p>
<div class="buscador">
    Galería de imágenes
</div>
<div class="flex">
    <div class="w-70 flex-initial bg-blue-500 text-center font-sans border-8 p-8 text-[20px]">
        Info del vehículo
        {{--
        Nombre?
        Marca/modelo
        Autonomía
        Descripción
        --}}
    </div>
    <div class="w-30 flex-initial bg-red-500 text-center font-sans border-8 p-8 text-[20px]">
        Reserva
        {{--
        Precio/dia
        Fecha inicio
        Fecha fin
        Precio total dinámico
        Botón reservar ahora
        --}}
    </div>
</div>
<div class="caracteristicas">
    {{--Características del vehículo --}}
</div>
<div class="reviews"></div>
@endsection
