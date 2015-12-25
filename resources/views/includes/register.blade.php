<div id="register-mdl" class="modal fade" role="dialog" ng-app = "inscriptionApp" ng-controller = "inscriptionController">
    <div class="modal-dialog">
            <!--Modal Content-->
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button class="close" type="button" data-dismiss="modal">&times;</button>
                    <h4>Inscription</h4>
                </div>
                <div class="modal-body">
                    <form for="form" name="inscriptionForm" method="POST" action="{{ url('auth/register') }}" novalidate>
                        
                        {!! csrf_field() !!}
                        <br>
                        <div class="form-group">
                            <label for="email"></label>
                            <input class="form-control" type="email" name="email" value="" ng-model="email" placeholder="email" required/>
                            <span style = "color:red" ng-show = "inscriptionForm.email.$dirty ">
                                <span ng-show = "inscriptionForm.email.$error.required">Email requis.</span>
                            </span>
                            <span style = "color:red" ng-show = "inscriptionForm.email.$invalid ">
                                <span  ng-show = "inscriptionForm.email.$error.invalid">Email invalide.</span>                   

                            </span>
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="password"></label>
                            <input class="form-control" type="password" name="password" value="" placeholder="mot de passe"/>
                        </div>
                        <br>
                        
                        <div class="form-group">
                            <label for="confirm-password"></label>
                            <input class="form-control" type="password" name="password_confirmation" id="conf-password" value="" placeholder="Confirmer le mot de passe"/>
                        </div>
                        <br>
                        
                        <div class="form-group">
                            <label for="nom"></label>
                            <input class="form-control" type="text" name="nom" value="" placeholder="Nom" ng-model="nom" required/>
                            <span style = "color:red" ng-show = "inscriptionForm.nom.$dirty && inscriptionForm.nom.$invalid">
                                <span ng-show = "inscriptionForm.nom.$error.required">Nom invalid.</span>
                            </span>
                        </div>
                        <br>
                        
                        <div class="form-group">        
                            <label for="prenom"></label>
                            <input class="form-control" type="text" name="prenom" value="" placeholder="Preom"/>
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="ville"></label>
                            <input class="form-control" type="text" name="ville" value="" placeholder="Ville"/>
                        </div>
                        <br>

                        <div class="form-group">
                            <label for="tel"></label>
                            <input class="form-control" type="text" name="tel" value="" placeholder="Téléphone"/>
                        </div>
                        <br>


                        <div class="form-group" style="text-align: center;">
                            <button class="btn btn-primary" type="submit">Valider</button>
                        </div>
                    </form>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
           </div>
            
    </div>
</div>