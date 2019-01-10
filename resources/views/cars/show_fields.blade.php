 <div class="row">
                <div class="col-md-6  offset-md-0  toppad" >
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title">{!! $car->name.' '.$car->year !!} - {!! $car->brand->name !!} </h2>
                            <table class="table table-user-information ">
                                <tbody>
                                    <tr>
                                        <td>Propriétaire:</td>
                                        <td>{!! $car->user->name !!}</td>
                                    </tr>
                                    <tr>
                                        <td>Agence:</td>
                                        <td>{!! $car->agency->name !!}</td>
                                    </tr>
                                    <tr>
                                        <td>Prix/Jour:</td>
                                        <td>{!! $car->price_unit !!}DH/1J et {!! $car->price_long_term !!}DH/10J+</td>
                                    </tr>
                                    <tr>
                                        <td>Prix Agence/jour:</td>
                                        <td>{!! $car->price_unit_agencies !!}</td>
                                    </tr>
                                    <tr>
                                        <td>Prix d'achat:</td>
                                        <td>{!! $car->prix_achat !!}</td>
                                    </tr>                                                
                                    <tr>
                                        <td>Nom Assurance:</td>
                                        <td>{!! $car->insurance_name !!}</td>
                                    </tr>
                                    <tr>
                                        <td>Numero Assurance:</td>
                                        <td>{!! $car->insurance_number !!}</td>
                                    </tr>
                                    <tr>
                                        <td>Matricule:</td>
                                        <td>{!! $car->matricule !!}</td>
                                    </tr>
                                    <tr>
                                        <td>Moteur:</td>
                                        <td>{!! $car->engine !!}</td>
                                    </tr>
                                    <tr>
                                        <td>Carte grise:</td>
                                        <td>{!! $car->carte_grise !!}</td>
                                    </tr>

                                    <tr>
                                        <td>Kilometrage:</td>
                                        <td>{!! $car->mileage !!} KM</td>
                                    </tr>
                                    <tr>
                                        <td>Transmission:</td>
                                        <td>{!! $car->transmission !!}</td>
                                    </tr>
                                    <tr>
                                        <td>Portes:</td>
                                        <td>{!! $car->doors !!}</td>
                                    </tr>
                                    <tr>
                                        <td>Couleur:</td>
                                        <td>{!! $car->color !!}</td>
                                    </tr>
                                    <tr>
                                        <td>Vidange:</td>
                                        <td>{!! $car->vidange !!} KM</td>
                                    </tr>
                                    <tr>
                                        <td>Sièges:</td>
                                        <td>{!! $car->seats !!}</td>
                                    </tr>
                                                                      
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-6  offset-md-0  toppad">
                    <div class="card">
                        <div class="card-body">
                             <a href="{!! route('cars.index') !!}" class="btn btn-block btn-primary btn-flat">Back</a>
                            <a href="{!! route('cars.edit', [$car->id]) !!}"  class="btn btn-block btn-success btn-flat">Modifier</a>              
                        </div>
                    </div>
                </div>
            </div>


