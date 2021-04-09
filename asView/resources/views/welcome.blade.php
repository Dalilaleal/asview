@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content')

    <!-- /.row -->
    </div><!-- /.container-fluid -->
        <!-- Default box -->
        <div class="card">

          <div class="card-body">
            <div class="row">
              <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
                <div class="row">

                    @if($msg !== '')
                    <div class="row">
                      <div class="col-12">

                      <div class="post">
                          <h2>{{$msg}}</h2>
                      </div>
                      </div>
                    </div>
                    @endif
                </div>
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0" style="height: 300px;">
                      <table class="table table-sm text-nowrap">
                        <thead>
                          <tr>
                            <th>ASN</th>
                            <th>Organização</th>
                            <th>Política</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($asn as $a)
                          <tr>
                            <td>{{$a->out_asn}}</td>
                            <td><a href="\?asn={{$a->out_asn}}">{{$a->out_name}}</a></td>
                            <td>{{$a->out_policy_general}}</td>
                          </tr>
                        @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                  {{ $asn->links() }}

                  @if($list_ix)
                  <div class="row">
                    <div class="col-12">
                    <div class="post">
                        <h2>{{$list_ix[0]->org}}</h2>
                        <div class="">
                        </div>
                        <!-- /.user-block -->
                        <table class="table table-sm text-nowrap teste">
                        <thead>
                          <tr>
                            <th>Nome</th>
                            <th>Cidade</th>
                            <th>País</th>
                            <th>Região</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($list_ix as $el)
                          <tr>
                            <td>{{$el->out_name}}</td>
                            <td>{{$el->out_city}} </td>
                            <td>{{$el->out_country}}</td>
                            <td>{{$el->out_region_continent}}</td>
                          </tr>
                        @endforeach
                        </tbody>
                      </table>
                      <p class="mt-2">
                            Total de IX: {{count($list_ix)}}
                        </p>
                    </div></div></div>
                    @endif
                @if($org_a && $org_b)

                    <div class="row">
                    <div class="col-12">

                    <div class="post teste">
                        <h2>{{$org_a}}</h2>
                        <div class="">
                        </div>
                        <!-- /.user-block -->
                        <table class="table table-sm text-nowrap teste">
                        <thead>
                          <tr>
                            <th>Nome</th>
                            <th>Cidade</th>
                            <th>País</th>
                            <th>Região</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($all_a as $el)
                          <tr>
                            <td>{{$el->out_name}}</td>
                            <td>{{$el->out_city}} </td>
                            <td>{{$el->out_country}}</td>
                            <td>{{$el->out_region_continent}}</td>
                          </tr>
                        @endforeach
                        </tbody>
                      </table>
                      <p class="mt-2">
                            Total de IX: {{count($all_a)}}
                        </p>
                    </div>
                    <div class="post">
                        <h2>{{$org_b}}</h2>
                        <div class="">
                        </div>
                        <!-- /.user-block -->
                        <table class="table table-sm text-nowrap teste">
                        <thead>
                          <tr>
                            <th>Nome</th>
                            <th>Cidade</th>
                            <th>País</th>
                            <th>Região</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($all_b as $el)
                          <tr>
                            <td>{{$el->out_name}}</td>
                            <td>{{$el->out_city}} </td>
                            <td>{{$el->out_country}}</td>
                            <td>{{$el->out_region_continent}}</td>
                          </tr>
                        @endforeach
                        </tbody>
                      </table>
                        <p class="mt-2">
                            Total de IX: {{count($all_b)}}
                        </p>
                    </div>
                      <div class="post">
                          <div class="user-block">
                              <h4>Interseção</h4><br>
                              <!-- /.user-block -->
                              <table class="table table-sm text-nowrap teste">
                        <thead>
                          <tr>
                            <th>Nome</th>
                            <th>Cidade</th>
                            <th>País</th>
                            <th>Região</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($intersection as $el)
                          <tr>
                            <td>{{$el->out_name}}</td>
                            <td>{{$el->out_city}} </td>
                            <td>{{$el->out_country}}</td>
                            <td>{{$el->out_region_continent}}</td>
                          </tr>
                        @endforeach
                        </tbody>
                      </table>
                    </div>

                    <p class="mt-2">
                      IX Compartilhados: {{count($intersection)}}
                    </p>
                </div>


                <div class="post clearfix">
                    <div class="user-block">

                            <h4>União</h4>

                        </div>
                        <!-- /.user-block -->
                        <table class="table table-sm text-nowrap teste">
                        <thead>
                          <tr>
                            <th>Nome</th>
                            <th>Cidade</th>
                            <th>País</th>
                            <th>Região</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($union as $el)
                          <tr>
                            <td>{{$el->out_name}}</td>
                            <td>{{$el->out_city}} </td>
                            <td>{{$el->out_country}}</td>
                            <td>{{$el->out_region_continent}}</td>
                          </tr>
                        @endforeach
                        </tbody>
                      </table>
                      <p class="mt-2">
                            Total de IX: {{count($union)}}
                        </p>
                    </div>


                    <div class="post">
                          <div class="user-block">
                              <h4>Exclusivo {{$org_a}}</h4>
                            </div>
                        <!-- /.user-block -->
                        <table class="table table-sm text-nowrap teste">
                        <thead>
                          <tr>
                            <th>Nome</th>
                            <th>Cidade</th>
                            <th>País</th>
                            <th>Região</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($only_a as $el)
                          <tr>
                            <td>{{$el->out_name}}</td>
                            <td>{{$el->out_city}} </td>
                            <td>{{$el->out_country}}</td>
                            <td>{{$el->out_region_continent}}</td>
                          </tr>
                        @endforeach
                        </tbody>
                      </table>
                      <p class="mt-2">
                            Total de IX: {{count($only_a)}}
                        </p>
                    </div>

                    <div class="post">
                        <div class="user-block">
                            <h4>Exclusivo {{$org_b}}</h4>
                          </div>
                      <!-- /.user-block -->
                      <table class="table table-sm text-nowrap teste">
                        <thead>
                          <tr>
                            <th>Nome</th>
                            <th>Cidade</th>
                            <th>País</th>
                            <th>Região</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($only_b as $el)
                          <tr>
                            <td>{{$el->out_name}}</td>
                            <td>{{$el->out_city}} </td>
                            <td>{{$el->out_country}}</td>
                            <td>{{$el->out_region_continent}}</td>
                          </tr>
                        @endforeach
                        </tbody>
                      </table>

                      <p class="mt-2">
                        Total de IX: {{count($only_b)}}
                    </p>
                  </div>



                </div>
            </div>
            @endif
        </div>
              <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
                  <h3 class="text-primary"><i class="fas fa-cogs"></i> FIND-IXDB</h3>
                  <p class="text-muted">Informe 2 ASNs a ser comparados, e será informado a quantidade total de IXs em cada um dos ASNs, quais IXs exclusivos, quais ambos possuem e quais são compartilhados.</p>
                  <form >
                      <div class="form-group">
                          <input class="form-control" name="asn_a" placeholder="Informe um ASN">
                      </div>
                      <div class="form-group">
                          <input class="form-control" name="asn_b" placeholder="Informe um ASN">
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
        </div>
        <!-- /.card -->


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    @stop

    @section('js')
    <script> console.log('Hi!'); </script>
    @stop
