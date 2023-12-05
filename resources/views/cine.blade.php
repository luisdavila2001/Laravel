@extends('Index')
@section('contenido-interno')

<h2>Cinestar Excelsior</h2>
    @foreach ($cine as $cine)
        <div class="cine-info">
            <div class="cine-info datos">
                <p>{{$cine -> Direccion}} - {{$cine -> Detalle}}</p>
                <p>Teléfono: {{$cine -> Telefonos}}</p>
                <br/>
                
                <div class="tabla">
                    <?php 
                        $indice = 0;
                    ?> 
                    @foreach($Tarifas as $tarifa)
                    <div class="fila impar">  <!--{{ $indice % 2 == 0 ? 'fila' : 'fila impar' }}-->
                        <div class="celda-titulo">{{$tarifa-> DiasSemana}}</div>
                        <div class="celda">{{$tarifa-> Precio}}</div>
                    </div>
                    <?php 
                        $indice++;
                    ?>                    
                    @endforeach
                </div>

                <div class="aviso">
                    <p>A partir del 1ro de julio de 2016, Cinestar Multicines realizará el cobro de la comisión de S/. 1.00 adicional al tarifario vigente, a los usuarios que compren sus entradas por el aplicativo de Cine Papaya para Cine Star Comas, Excelsior, Las Américas, Benavides, Breña, San Juan, UNI, Aviación, Sur, Porteño, Tumbes y Tacna.</p>
                </div>
            </div>
            <img src="{{asset('img/cine/'.$cine ->id.'.2.jpg')}}"/>
            <br/><br/><h4>Los horarios de cada función están sujetos a cambios sin previo aviso.</h4><br/>
            <div class="cine-info peliculas">
                <div class="tabla">
                    <div class="fila">
                        <div class="celda-cabecera">Películas</div>
                        <div class="celda-cabecera">Horarios</div>
                    </div>
                    @foreach($Cinepeli as $cinepeli)
                        <div class="fila impar">
                            <div class="celda-titulo">{{$cinepeli-> Titulo}}</div>
                            <div class="celda">{{$cinepeli-> Horarios}}</div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div>
            <img style="float:left;" src="{{asset('img/cine/'.$cine ->id.'.3.jpg')}}" alt="Imagen del cine"/>
            <span class="tx_gris">Precios de los juegos: desde S/1.00 en todos los Cine Star.<br/>
                Horario de atención de juegos es de 12:00 m hasta las 10:30 pm. 
                <br/><br/>
                Visitános y diviértete con nosotros. 
                <br/><br/>
                <b>CINESTAR</b>, siempre pensando en tí. 
            </span>		
        </div>
    @endforeach
@endsection