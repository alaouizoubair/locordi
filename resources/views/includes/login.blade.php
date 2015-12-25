<div id="login-mdl" class="modal fade" role="dialog">
    <div class="modal-dialog">
            <!--Modal Content-->
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button class="close" type="button" data-dismiss="modal">&times;</button>
                    <h4>Login</h4>
                </div>
                <div class="modal-body">
                    <form for="form" method="POST" action="{{ url('auth/login') }}" novalidate>
                        
                        {!! csrf_field() !!}
                        <br><br>
                        <div class="form-group">
                            <label for="email"></label>
                            <input class="form-control" type="text" name="email" value="" placeholder="email"/>
                        </div>
                        <br><br>
                        <div class="form-group">
                            <label for="password"></label>
                            <input class="form-control" type="password" name="password" value="" placeholder="mot de passe"/>
                        </div>
                        <br><br>
                        <div class="form-group" style="text-align: center;">
                            <button class="btn btn-primary" type="submit">Connexion</button>
                        </div>
                    </form>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
           </div>
            
    </div>
</div>