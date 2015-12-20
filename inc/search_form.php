<form class="navbar-form navbar-left form-horizontal" role="search" id="search-form" action="inc/search.php">
    <div class="form-group">
        <div class="input-group">
            <input name="nom" id="nom" type="text" class="form-control " placeholder="Nom point d'interet" />
            <div class="input-group-btn">
                <div class="btn-group" role="group">
                    <div class="dropdown dropdown-lg">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><span class="caret"></span></button>
                        <div class="dropdown-menu dropdown-menu-right" role="menu">
                            <div class="form-group">
                                <label for="contain">Type</label>
                                <input name="type" id="type" class="form-control" type="text" />
                            </div>
                            <div class="form-group">
                                <label for="contain">Type</label>
                                <input name="pays" id="pays" class="form-control" type="text" />
                            </div>                                                         
                            <div class="form-group">
                                <label for="contain">Ville</label>
                                <input name="ville" id="ville" class="form-control" type="text" />
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                </div>
            </div>
        </div>
    </div>
</form>