@extends("layout.app")

@section("content")
<div class="container">

    <div class="row">
        <div class="col-lg-5 col-md-5 col-sm-5 ">
            <section id="home" class="section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <h1 class="textohome">Software de Gestão de Tranfers</h1>
                            <p class="textohome">A Transfergest facilita a gestão eficaz
                                das empresas de transfers e transportes turísticos.
                                Economize tempo e dinheiro na gestão das operações diárias
                            </p>
                            
                            {{-- @forelse ($ola as $olas )
                                <p>{{$olas}}</p>
                            @empty
                                <p> No olas </p>
                            @endforelse --}}
                        </div>
                    </div>
                </div>
            </section>

            <!--CONTACT US AREA-->
            <section id="contactos" class="section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 menucontatos ">
                            <div class="row verde">
                                <div class="col-lg-12 ">
                                    <center> Contacto </center>
                                </div>
                            </div>
                            <div class="row">
                                <form>
                                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label>Nome:</label>
                                        <input type="text" class="form-control" id="nome">
                                    </div>
                                    <div class="form-group">
                                        <label>Apelido:</label>
                                        <input type="text" class="form-control" id="apelido">
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 ">
                                  <div class="form-group">
                                    <label>Email:</label>
                                    <input type="email" class="form-control" id="email">
                                  </div>
                                  <div class="form-group">
                                    <label>Telemovel:</label>
                                    <input type="text" class="form-control" id="telemovel">
                                  </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label>Sexo:</label>
                                        <div class="radio">
                                            <label><input type="radio" name="sexo" checked>Masculino</label>
                                            <label><input type="radio" name="sexo">Feminino</label>
                                          </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Nacionalidade:</label>
                                        <select class="form-control" id="nacionalidade">
                                            <option>Portuguesa</option>
                                            <option>Brasileira</option>
                                            <option>Espanhola</option>
                                            <option>Inglesa</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label>Telefone:</label>
                                        <input type="text" class="form-control" id="telefone">
                                    </div>
                                    <div class="form-group">
                                        <label>Documento:</label>
                                        <input type="text" class="form-control" id="documento">
                                    </div>
                                </div>
                                <div class="clearfix visible-sm-block"></div>
                                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                                    <div class="form-group">
                                        <label>Nº Contribuinte</label>
                                        <input type="text" class="form-control" id="contribuinte">
                                    </div>
                                    <div class="form-group">
                                        <label>Nº documento</label>
                                        <input type="text" class="form-control" id="contribuinte">
                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 pull-right">
                                    <div class="form-group">
                                       <center><button class="btn">Enviar</button> </center>
                                    </div>
                                </div>
                                </form>
                            </div>
                            <div class="row verde">
                                <div class="col-lg-12">
                                    <center>Footer</center>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

            <!--CONTACT US AREA END-->


                <br><br>
                <section id="tabela" class="section-padding">
                <div class="container">
                    <div>
                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 bootstrap">
                                <button class="btn btn-success"> Sim </button>
                                <button class="btn btn-danger" style="color: black;"> Não </button>
                            </div>
                        </div>
                        <div class="row perfis">
                            <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                <div class="media">
                                    <hr>
                                    <div class="media-right form-inline">
                                        <img src="https://conteudo.imguol.com.br/blogs/174/files/2018/05/iStock-648229868-1024x909.jpg"
                                            class="media-object" style="width:60px">
                                        <img src="https://conteudo.imguol.com.br/blogs/174/files/2018/05/iStock-648229868-1024x909.jpg"
                                            class="media-object" style="width:60px">
                                        <img src="https://conteudo.imguol.com.br/blogs/174/files/2018/05/iStock-648229868-1024x909.jpg"
                                            class="media-object" style="width:60px">
                                        <img src="https://conteudo.imguol.com.br/blogs/174/files/2018/05/iStock-648229868-1024x909.jpg"
                                            class="media-object" style="width:60px">
                                        <img src="https://conteudo.imguol.com.br/blogs/174/files/2018/05/iStock-648229868-1024x909.jpg"
                                            class="media-object" style="width:60px">
                                        <img src="https://conteudo.imguol.com.br/blogs/174/files/2018/05/iStock-648229868-1024x909.jpg"
                                            class="media-object" style="width:60px">
                                        <img src="https://conteudo.imguol.com.br/blogs/174/files/2018/05/iStock-648229868-1024x909.jpg"
                                            class="media-object" style="width:60px">

                                    </div>
                                </div>
                                <div class="texto">
                                    Clique no motorista para <b> os serviços</b>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="form-group row">
                        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                            <select class="form-control" id="combobox">
                                <option>25</option>
                            </select>
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 pull-right">
                            <input type="text" class="form-control " id="operador" value="Codigo Serv./Operador">
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-12 segundadiv">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row verde">

                                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                            Confirmado chegada
                                        </div>

                                        <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 ">
                                            01/06/2022 | 00:10
                                        </div>

                                        <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                                            <select name="externo" id="externofelix" class="form-control comboboxfelix" >
                                                <option>Externo Felix</option>
                                            </select>
                                        </div>

                                        <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                                            <button type="button" class="btn btn-success servicoenviado"> Serviço Enviado</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <div class="col-md-3 col-lg-3 col-sm-7">
                                            <div class="row">
                                                <div class="col">TG004810</div>
                                            </div>
                                            <div class="row">
                                                <div class="col">Apps mobile - Operador</div>
                                            </div>
                                            <div class="row">
                                                <div class="col">teste cliente postman</div>
                                            </div>
                                        </div>

                                        <div class="col-md-2 col-lg-2 col-sm-3 ">
                                            <div class="row">
                                                <div class="col">1-4 pax</div>
                                            </div>
                                            <div class="row">
                                                <div class="col text-primary">PT2333</div>
                                            </div>
                                            <div class="row">
                                                <div class="col">398891797147</div>
                                            </div>
                                        </div>

                                        <div class="col-md-1 col-lg-1 col-sm-2">
                                            <div class="row">
                                                <div class="col">1</div>
                                            </div>
                                            <div class="row">
                                                <div class="col">11:10</div>
                                            </div>
                                        </div>

                                        <div class="clearfix visible-sm-block"></div>


                                        <div class="col-md-4 col-lg-4 col-sm-5">
                                            <div class="row">
                                                <div class="col">Armação de Pera, airport de Faro</div>
                                            </div>
                                            <div class="row">
                                                <div class="col">Airport de Faro, armação de pera</div>
                                            </div>
                                            <div class="row">
                                                <div class="col">48</div>
                                            </div>
                                        </div>

                                        <div class="col-md-1 col-lg-1 col-sm-3">
                                            <div class="row">
                                                <div class="col umaecinq">01:50</div>
                                            </div>
                                        </div>

                                        <div class="col-md-1 col-lg-1 col-sm-4">
                                            <div class="row">
                                                <div class="col umaecinq">02:00</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection

@push("scripts")
<script>
$(document).ready(function(){
alert("Ola");

});
</script>
@endpush

